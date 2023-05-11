<p>Giỏ hàng 
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</p>
<table style="width:99.5%;text-align: center;border-collapse: collapse; margin-bottom: 216px" border="1";>
  <tr>
    <th>Id</th>
    <th>Mã sp</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="170px" height="100px"></td>
    <td>
    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['masp'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['masp'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').' VNĐ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').' VNĐ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['masp'] ?>">Xoá</a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="8">
      <p style="float: left"> Quý khách vui lòng kiểm tra giỏ hàng và tiền trước khi thanh toán! </p>
    	<p style="color: red">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ' ?></p>
    	<p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
        <p><a href="index.php?quanly=dangky">Đăng lý đặt hàng</a></p>
      <?php
        }
      ?>
      
     


    </td>

   
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>