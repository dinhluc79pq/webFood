<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
			
		}
	} 
?>
<form action="" autocomplete="off" method="POST" style="margin-bottom: 178px">
	<table border="1" width="50%" class="table-login" style="text-align: center;border-collapse: collapse;">
		<tr>
			<td colspan="2" style="background-color: cyan"><h3>Đăng nhập khách hàng</h3></td>
		</tr>
		<tr>
			<td style="padding: 7px"> Tài khoản </td>
			<td><input type="text" size="60" name="email" placeholder="Email..."></td>
		</tr>
		<tr>
			<td style="padding: 7px"> Mật khẩu </td>
			<td><input type="password" size="60" name="password" placeholder="Mật khẩu..."></td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 7px"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
		</tr>
	</table>
</form>