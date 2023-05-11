<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE N'%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<ul class="product_list">
	<?php
	while($row = mysqli_fetch_array($query_pro)){ 
	?>
	<li>
		<a href="index.php?quanly=sanpham&masp=<?php echo $row['masp'] ?>">
			<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
			<p class="title_product" style="margin: 1px"><?php echo $row['tensanpham'] ?></p>
			<p class="price_product" style="margin: 3px">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
			<p style="text-align: center;color:#d1d1d1; margin: 13px"><?php echo $row['tendanhmuc'] ?></p>
		</a>
	</li>
	<?php
	} 
	?>
</ul>