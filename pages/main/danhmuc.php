<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY masp ASC";
	$query_pro = mysqli_query($mysqli,$sql_pro);

	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<h3 style="text-align: center; margin: 10px">Danh mục sản phẩm : <?php echo $row_title['tendanhmuc'] ?></h3>
<ul class="product_list">
	<?php
	while($row_pro = mysqli_fetch_array($query_pro)){
		if($row_pro['tinhtrang'] == 1) {
	?>
	<li>
		<a href="index.php?quanly=sanpham&masp=<?php echo $row_pro['masp'] ?>">
			<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
			<p class="title_product" style="margin: 1px"><?php echo $row_pro['tensanpham'] ?></p>
			<p class="price_product" style="margin: 3px">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'VNĐ' ?></p>
		</a>
	</li>
	<?php
		}
	} 
	?>
</ul>