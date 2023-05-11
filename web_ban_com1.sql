-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 24, 2021 lúc 08:40 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ban_com`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `code_cart` varchar(10) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`code_cart`, `id_khachhang`, `cart_status`) VALUES
('3795', 9, 1),
('4566', 9, 0),
('5453', 9, 1),
('9462', 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `masp`, `soluongmua`) VALUES
(15, '9462', '001', 1),
(17, '5453', '101', 2),
(18, '5453', '002', 1),
(19, '4566', '100', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(9, 'DƯƠNG ĐÌNH LỰC', 'dinhluc79pq@gmail.com', 'Phú Quốc', 'e95fb87f7c4853b0ea02f5d507de79ce', '0368568899');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Cơm phần', 1),
(2, 'Mì/Nui', 2),
(3, 'Món gọi thêm', 3),
(4, 'Nước uống', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `masp` varchar(10) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`masp`, `tensanpham`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
('001', 'Cơm đùi gà chiên mắm', '30000', 5, '1619076357_gachien.jpg', 'Cơm + 1 đùi gà chiên nước mắm + súp + dụng cụ ăn uống.', 'Cơm gà chiên nước mắm.', 1, 1),
('002', 'Cơm gà kho sả ớt', '30000', 10, '1619189844_comgakho.jpg', 'Cơm + 1 phần gà kho sả ớt + súp + dụng cụ ăn uống.', 'Cơm gà kho sả ớt.', 1, 1),
('003', 'Cơm chả cá sốt cà', '30000', 5, '1619082467_cha-ca-sot-ca-chua.jpg', 'Cơm + 1 phần chả cá sốt cà + súp + dụng cụ ăn uống.', 'Cơm chả cá sốt cà.', 1, 1),
('004', 'Cơm trứng chiên', '20000', 10, '1619082705_comtrungchien.jfif', 'Cơm + 1 phần trứng chiên(2 trứng) + súp + dụng cụ ăn uống.', 'Cơm trứng chiên.', 1, 1),
('005', 'Cơm trứng chiên sốt cà', '30000', 10, '1619083099_comtrungsotca.jpg', 'Cơm + 1 phần trứng chiên sốt cà(2 trứng) + súp + dụng cụ ăn uống.', 'Cơm trứng chiên sốt cà.', 1, 1),
('100', 'Mì xào bò', '40000', 10, '1619100771_mixaobo.jpg', '1 phần mì xào bò(2 gói) + dụng cụ ăn uống.', 'Mì xào bò.', 1, 2),
('101', 'Mì xào hải sản', '40000', 8, '1619100970_mì-xào-hải-sản-đn.jpg', '1 phần mì xào hải sản (2 gói mì - mực - tôm - rau,...) + dụng cụ ăn uống.', 'Mì xào hải sản.', 1, 2),
('102', 'Mì xào bò trứng', '45000', 10, '1619101761_mixaobotrung.jfif', '1 phần mì xào bò trứng (2 gói mì + bò - 2 trứng oppla - rau,...) + dụng cụ ăn uống.', 'Mì xào bò trứng.', 1, 2),
('103', 'Mì xào thập cẩm', '55000', 5, '1619101963_mixaothapcam.jpg', '1 phần mì xào thập cẩm (2 gói mì - hải sản - bò - rau,...) + dụng cụ ăn uống.', 'Mì xào thập cẩm.', 1, 2),
('104', 'Nui xào bò', '40000', 10, '1619102099_nui-xao-bo.jpg', '1 phần nui xào bò(nui + bò) + dụng cụ ăn uống.', 'Nui xào bò.', 1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`code_cart`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sanpham` (`masp`),
  ADD KEY `code_cart` (`code_cart`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_dangky`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`code_cart`) REFERENCES `tbl_cart` (`code_cart`),
  ADD CONSTRAINT `tbl_cart_details_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `tbl_sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
