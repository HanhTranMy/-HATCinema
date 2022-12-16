-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 09:24 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemphimthat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bapnuoc`
--

CREATE TABLE `bapnuoc` (
  `maBapNuoc` int(11) NOT NULL,
  `tenSP` varchar(100) DEFAULT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(11) NOT NULL,
  `maPhim` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `maHD` int(11) NOT NULL,
  `soluongXC` int(11) NOT NULL,
  `maXC` int(11) NOT NULL,
  `maBapNuoc` int(11) NOT NULL,
  `soluongBapNuoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghe`
--

CREATE TABLE `ghe` (
  `maGhe` int(11) NOT NULL,
  `tinhtrang` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ghe`
--

INSERT INTO `ghe` (`maGhe`, `tinhtrang`) VALUES
(1, b'0'),
(2, b'0'),
(3, b'0'),
(4, b'0'),
(5, b'0'),
(6, b'0'),
(7, b'0'),
(8, b'0'),
(9, b'0'),
(10, b'0'),
(11, b'0'),
(12, b'0'),
(13, b'0'),
(14, b'0'),
(15, b'0'),
(16, b'0'),
(17, b'0'),
(18, b'0'),
(19, b'0'),
(20, b'0'),
(21, b'0'),
(22, b'0'),
(23, b'0'),
(24, b'0'),
(25, b'0'),
(26, b'0'),
(27, b'0'),
(28, b'0'),
(29, b'0'),
(30, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `ngayDat` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `tongTien` int(11) DEFAULT NULL,
  `maKM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `maKM` int(11) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `chuDe` varchar(255) NOT NULL,
  `noiDung` varchar(1000) NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `maPhim` int(11) NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `daoDien` varchar(255) DEFAULT NULL,
  `dienVien` varchar(255) DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `hangPhim` varchar(255) DEFAULT NULL,
  `phienBan` varchar(255) DEFAULT NULL,
  `quocGia` varchar(255) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `thoiLuong` int(11) NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0',
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`maPhim`, `ngayBD`, `ngayKT`, `anh`, `daoDien`, `dienVien`, `gia`, `hangPhim`, `phienBan`, `quocGia`, `tenPhim`, `theLoai`, `thoiLuong`, `trangThai`, `video`) VALUES
(1, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'VietNam', 'Hạnh phúc máu', 'Tâm lý', 120, b'0', NULL),
(2, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Việt Nam', 'Hạnh phúc máu', 'Tâm lý', 90, b'0', NULL),
(3, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'Avatar 2', 'Hành động', 120, b'0', NULL),
(4, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'Aquaman And The Lost Kingdom (2023)', 'Hành động', 180, b'0', NULL),
(5, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Việt Nam', 'Captain Marvel 2 (2023)', 'Khoa học viễn tưởng', 180, b'0', NULL),
(6, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Nhật Bản', 'Detective Conan: The Bride of Halloween', 'Hoạt hình', 120, b'0', NULL),
(7, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'DC League of super pets', 'Hoạt hình', 120, b'0', NULL),
(8, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'Dead On The Nile', 'Tâm lý', 120, b'0', NULL),
(9, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'The Lost City', 'Hài', 90, b'0', NULL),
(10, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'Escape Room', 'Kinh dị', 120, b'0', NULL),
(11, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Việt Nam', 'Bạch Liên Hoa', 'Cổ trang', 120, b'0', NULL),
(12, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'ViệtNam', 'Kẻ Độc Hành', 'Kinh dị - Hài', 120, b'0', NULL),
(13, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Nhật Bản', 'Your Name', 'Tình cảm', 180, b'0', NULL),
(14, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Mỹ', 'Moana', 'Tâm lý', 90, b'0', NULL),
(15, '2022-12-06', '2022-12-31', NULL, NULL, NULL, 75000, NULL, NULL, 'Hồng Kông', 'Series IP Man 4', 'Võ thuật', 120, b'0', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `maPhong` int(11) NOT NULL,
  `maGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`maPhong`, `maGhe`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `maRap` int(11) NOT NULL,
  `maPhong` int(11) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `email` varchar(256) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `sdt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatchieu`
--

CREATE TABLE `xuatchieu` (
  `maXC` int(11) NOT NULL,
  `ngaygio` date NOT NULL,
  `maPhong` int(11) NOT NULL,
  `maPhim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bapnuoc`
--
ALTER TABLE `bapnuoc`
  ADD PRIMARY KEY (`maBapNuoc`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `maPhim` (`maPhim`),
  ADD KEY `email` (`email`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`maHD`,`maXC`,`maBapNuoc`),
  ADD KEY `maXC` (`maXC`),
  ADD KEY `maBapNuoc` (`maBapNuoc`);

--
-- Chỉ mục cho bảng `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`maGhe`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKM` (`maKM`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`maKM`);

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maPhim`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maPhong`,`maGhe`),
  ADD KEY `maGhe` (`maGhe`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`maRap`,`maPhong`),
  ADD KEY `maPhong` (`maPhong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `xuatchieu`
--
ALTER TABLE `xuatchieu`
  ADD PRIMARY KEY (`maXC`),
  ADD KEY `maPhong` (`maPhong`),
  ADD KEY `maPhim` (`maPhim`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bapnuoc`
--
ALTER TABLE `bapnuoc`
  MODIFY `maBapNuoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ghe`
--
ALTER TABLE `ghe`
  MODIFY `maGhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `maPhim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `maPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `rap`
--
ALTER TABLE `rap`
  MODIFY `maRap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `xuatchieu`
--
ALTER TABLE `xuatchieu`
  MODIFY `maXC` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`maPhim`) REFERENCES `phim` (`maPhim`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`email`) REFERENCES `taikhoan` (`email`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`maXC`) REFERENCES `xuatchieu` (`maXC`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`maBapNuoc`) REFERENCES `bapnuoc` (`maBapNuoc`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKM`) REFERENCES `khuyenmai` (`maKM`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`maGhe`) REFERENCES `ghe` (`maGhe`);

--
-- Các ràng buộc cho bảng `rap`
--
ALTER TABLE `rap`
  ADD CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`);

--
-- Các ràng buộc cho bảng `xuatchieu`
--
ALTER TABLE `xuatchieu`
  ADD CONSTRAINT `xuatchieu_ibfk_1` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`),
  ADD CONSTRAINT `xuatchieu_ibfk_2` FOREIGN KEY (`maPhim`) REFERENCES `phim` (`maPhim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
