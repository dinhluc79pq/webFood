<h3 style="margin: 10px 20px 16px">Chi tiết sản phẩm:</h3>
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.masp='$_GET[masp]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="363px" height="270px" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?masp=<?php echo $row_chitiet['masp'] ?>">
		<div class="chitiet_sanpham">
			<h3 style="margin:0">Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
			<p>Đơn giá: <?php echo number_format($row_chitiet['giasp'],0,',','.').' VNĐ' ?></p>
			<p>Số lượng còn lại: <?php echo $row_chitiet['soluong'] ?></p>
			<p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
			<p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
		</div>
	</form>
</div>
<?php
} 
?>
