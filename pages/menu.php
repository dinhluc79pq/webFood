<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
	if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
		unset($_SESSION['dangky']);
	}
?>
<div class="menu">
	<ul class="list_menu">
		<li><i class="fas fa-home"></i><a href="index.php">Trang chủ</a></li>
		<li><i class="fas fa-utensils"></i><a href="#"> MÓN ĂN</a>
            <div class="food">
                <ul class="listFood">
					<li><a href="index.php?quanly=danhmucsanpham&id=1">Cơm phần</a></li>
                    <li><a href="index.php?quanly=danhmucsanpham&id=2">Mì/Nui</a></li>
                    <li><a href="index.php?quanly=danhmucsanpham&id=3">Món gọi thêm</a></li>
                    <li><a href="index.php?quanly=danhmucsanpham&id=4">Nước uống</a></li>
                </ul>
            </div>
        </li>
		<li><i class="fas fa-shopping-cart"></i><a href="index.php?quanly=giohang"> Giỏ hàng</a></li>

		<?php
			if(isset($_SESSION['dangky'])){ 
		?>
		<li><i class="fas fa-sign-out-alt"></i><a href="index.php?dangxuat=1"> Đăng xuất</a></li>
		<li><i class="fas fa-edit"></i><a href="index.php?quanly=thaydoimatkhau"> Thay đổi mật khẩu</a></li>
		<?php
			}else{ 
		?>
		<li><i class="fas fa-user"></i><a href="index.php?quanly=dangky"> Đăng ký/Đăng nhập</a></li>
		<?php
			} 
		?>
	</ul>
	<form action="index.php?quanly=timkiem" method="POST">
		<input type="text" placeholder="Search" name="tukhoa" style="margin: 12px 0 0 40px; font-size: 17px;">
		<input type="submit" name="timkiem" value="Tìm kiếm" style="margin-top: 12px; font-size: 17px;">
	</form>
	
</div>