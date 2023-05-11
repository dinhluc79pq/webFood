<div class="sidebar">
	<h4 style="margin-top: 5px">- DANH MỤC CÁC MÓN ĂN</h4>
	<ul class="list_sidebar">
		<?php

			$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
			$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
			while($row = mysqli_fetch_array($query_danhmuc)){
		?>
		<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
		<?php

		} 
		?>
	</ul>
	<h4>- TIN TỨC VÀ LIÊN HỆ</h4>
	<ul>
		<li><?php include("main/tintuc.php") ?></li>
		<li><?php include("main/lienhe.php") ?></li>


			
	</ul>
</div>