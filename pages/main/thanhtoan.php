<?php
	session_start();
	include('../../admincp/config/config.php');
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);
	$insert_cart = "INSERT INTO tbl_cart(code_cart,id_khachhang,cart_status) VALUE('".$code_order."','".$id_khachhang."',1)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['masp'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart_details(masp, code_cart, soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
			// Lấy thông tin số lượng sản phẩm
			$soluong_conlai_query = "SELECT * FROM tbl_sanpham WHERE masp = '".$id_sanpham."'";
			$data_result = mysqli_query($mysqli, $soluong_conlai_query);
			$result = mysqli_num_rows($data_result);
			$soluong_conlai = 0;
			if($result > 0) {
				$row_pro = mysqli_fetch_array($data_result);
				$soluong_conlai = $row_pro['soluong'];
			}
			$soluong_updated = $soluong_conlai - $soluong;
			// kiem tra so luong con lai cua mon
			//	- Nếu số lượng = 0 thì set trạng thái về ẩn.
			$tinhtrang = 1;
			if($soluong_updated == 0) {
				$tinhtrang = 0;
			}
			//
			$updated_pro_num_query = "UPDATE tbl_sanpham SET tbl_sanpham.soluong = '$soluong_updated', tbl_sanpham.tinhtrang = '$tinhtrang' WHERE tbl_sanpham.masp = '$id_sanpham'";
			mysqli_query($mysqli, $updated_pro_num_query);
		}
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=camon');
?>