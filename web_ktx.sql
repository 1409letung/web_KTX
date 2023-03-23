-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2022 lúc 09:36 CH
-- Phiên bản máy phục vụ: 5.7.11
-- Phiên bản PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_baidang`
--

CREATE TABLE `tb_baidang` (
  `id_baidang` int(11) NOT NULL,
  `id_quan` int(100) NOT NULL,
  `tenbaidang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sophong` int(100) NOT NULL,
  `tongsogiuong` int(100) NOT NULL,
  `gia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` int(100) NOT NULL,
  `phongtrong` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giuongtrong` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_baidang`
--

INSERT INTO `tb_baidang` (`id_baidang`, `id_quan`, `tenbaidang`, `ngaydang`, `noidung`, `hinhanh`, `sophong`, `tongsogiuong`, `gia`, `tinhtrang`, `phongtrong`, `giuongtrong`) VALUES
(28, 5, 'KÃ½ tÃºc xÃ¡ cÃ´ng nhÃ¢n', '21/4/2022', 'abc', '1651768524_avtfb.jpg', 10, 100, '700000', 1, '1,2,3', '1-3,1-4,2-1,3-1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_coso`
--

CREATE TABLE `tb_coso` (
  `id_coso` int(11) NOT NULL,
  `tencoso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongsophong` int(245) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_coso`
--

INSERT INTO `tb_coso` (`id_coso`, `tencoso`, `diachi`, `tongsophong`) VALUES
(1, 'CÆ¡ sá»Ÿ 1', '282 Nguyá»…n VÄƒn LÆ°á»£ng, F17, Q.GÃ² Váº¥p', 15),
(2, 'CÆ¡ sá»Ÿ 2', '282 Nguyá»…n VÄƒn LÆ°á»£ng, F17, Q.GÃ² Váº¥p', 15),
(3, 'CÆ¡ sá»Ÿ 3', '14 Nguyá»…n VÄƒn Báº£o, F10, Q.GÃ² Váº¥p', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmucquan`
--

CREATE TABLE `tb_danhmucquan` (
  `id_quan` int(11) NOT NULL,
  `tenquan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmucquan`
--

INSERT INTO `tb_danhmucquan` (`id_quan`, `tenquan`) VALUES
(5, 'Quáº­n 1'),
(10, 'Quáº­n 2'),
(11, 'Quáº­n 3'),
(12, 'Quáº­n 4'),
(13, 'Quáº­n 5'),
(14, 'Quáº­n 6'),
(15, 'Quáº­n 7'),
(16, 'Quáº­n 8'),
(17, 'Quáº­n 9'),
(18, 'Quáº­n 10'),
(19, 'Quáº­n 11'),
(20, 'Quáº­n 12'),
(21, 'Quáº­n PhÃº Nhuáº­n'),
(22, 'Quáº­n BÃ¬nh Tháº¡nh'),
(23, 'Quáº­n GÃ² Váº¥p'),
(24, 'Quáº­n TÃ¢n BÃ¬nh'),
(25, 'Quáº­n TÃ¢n PhÃº'),
(26, 'Quáº­n BÃ¬nh TÃ¢n'),
(27, 'Quáº­n Thá»§ Äá»©c'),
(28, 'Huyá»‡n Cá»§ Chi'),
(29, '	Huyá»‡n HÃ³c MÃ´n'),
(30, 'Huyá»‡n BÃ¬nh ChÃ¡nh'),
(31, 'Huyá»‡n NhÃ  BÃ¨'),
(32, 'Huyá»‡n Cáº§n Giá»');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hopdong`
--

CREATE TABLE `tb_hopdong` (
  `id_hopdong` int(11) NOT NULL,
  `tenhopdong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benchothue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benthue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieukhoan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `giathue` int(250) NOT NULL,
  `ngayky` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian` int(100) NOT NULL,
  `sogiuong` int(100) NOT NULL,
  `sophong` int(100) NOT NULL,
  `id_coso` int(100) NOT NULL,
  `anhhopdong` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hopdong`
--

INSERT INTO `tb_hopdong` (`id_hopdong`, `tenhopdong`, `benchothue`, `benthue`, `dieukhoan`, `giathue`, `ngayky`, `thoigian`, `sogiuong`, `sophong`, `id_coso`, `anhhopdong`) VALUES
(9, 'Há»£p Ä‘á»“ng cho thuÃª kÃ½ tÃºc xÃ¡', 'A', 'B', '123', 700000, '21/4/2022', 5, 8, 10, 1, '1651758892_3024532a9631cfbd09497875f7485375.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khachhang`
--

CREATE TABLE `tb_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `hoten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd` int(15) NOT NULL,
  `sdt` int(10) NOT NULL,
  `nghenghiep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachithuongtru` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_khachhang`
--

INSERT INTO `tb_khachhang` (`id_khachhang`, `hoten`, `gioitinh`, `ngaysinh`, `cmnd`, `sdt`, `nghenghiep`, `diachithuongtru`, `taikhoan`, `matkhau`) VALUES
(5, 'LÃª TÃ¹ng', '0', '14/09/2003', 1234567, 1234567, 'Sinh viÃªn', 'BÃ¬nh Äá»‹nh', 'user', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_phong`
--

CREATE TABLE `tb_phong` (
  `id_phong` int(11) NOT NULL,
  `id_coso` int(100) NOT NULL,
  `sophong` int(200) NOT NULL,
  `tongsogiuong` int(200) NOT NULL,
  `tongsothietbi` int(200) NOT NULL,
  `tenthietbi` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_phong`
--

INSERT INTO `tb_phong` (`id_phong`, `id_coso`, `sophong`, `tongsogiuong`, `tongsothietbi`, `tenthietbi`, `trangthai`, `ghichu`) VALUES
(2, 1, 1, 10, 10, 'a', '0', 'khÃ´ng'),
(3, 2, 1, 10, 10, 'a', '1', 'khÃ´ng'),
(4, 2, 10, 10, 10, 'a', '0', 'khÃ´ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_quanlychothue`
--

CREATE TABLE `tb_quanlychothue` (
  `id_thue` int(11) NOT NULL,
  `hopdong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phong` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coso` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `id_tk` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id_tk`, `username`, `password`, `role`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(15, 'user', '202cb962ac59075b964b07152d234b70', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_baidang`
--
ALTER TABLE `tb_baidang`
  ADD PRIMARY KEY (`id_baidang`);

--
-- Chỉ mục cho bảng `tb_coso`
--
ALTER TABLE `tb_coso`
  ADD PRIMARY KEY (`id_coso`);

--
-- Chỉ mục cho bảng `tb_danhmucquan`
--
ALTER TABLE `tb_danhmucquan`
  ADD PRIMARY KEY (`id_quan`);

--
-- Chỉ mục cho bảng `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  ADD PRIMARY KEY (`id_hopdong`);

--
-- Chỉ mục cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tb_phong`
--
ALTER TABLE `tb_phong`
  ADD PRIMARY KEY (`id_phong`);

--
-- Chỉ mục cho bảng `tb_quanlychothue`
--
ALTER TABLE `tb_quanlychothue`
  ADD PRIMARY KEY (`id_thue`);

--
-- Chỉ mục cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_baidang`
--
ALTER TABLE `tb_baidang`
  MODIFY `id_baidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `tb_coso`
--
ALTER TABLE `tb_coso`
  MODIFY `id_coso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `tb_danhmucquan`
--
ALTER TABLE `tb_danhmucquan`
  MODIFY `id_quan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `tb_hopdong`
--
ALTER TABLE `tb_hopdong`
  MODIFY `id_hopdong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `tb_khachhang`
--
ALTER TABLE `tb_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `tb_phong`
--
ALTER TABLE `tb_phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tb_quanlychothue`
--
ALTER TABLE `tb_quanlychothue`
  MODIFY `id_thue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
