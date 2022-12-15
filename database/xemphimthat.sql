-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 05:30 AM
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
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(11) NOT NULL,
  `maPhim` int(11) NOT NULL,
  `noiDung` varchar(1000) DEFAULT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `maHD` int(11) NOT NULL,
  `soluongXC` int(11) DEFAULT NULL,
  `maXC` varchar(8) NOT NULL,
  `maBapNuoc` varchar(8) NOT NULL,
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `ngayDat` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `tongTien` int(11) NOT NULL,
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
  `quocGia` varchar(255) DEFAULT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `thoiLuong` int(11) NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0',
  `video` varchar(255) DEFAULT NULL,
  `maPhong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `maPhong` int(11) NOT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `maGhe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rap`
--

CREATE TABLE `rap` (
  `maRap` int(11) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `maPhong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ten` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `sdt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ten`, `email`, `matKhau`, `admin`, `sdt`) VALUES
('admin', 'admin@hatcinema.com', 'd41d8cd98f00b204e9800998ecf8427e', b'1', '0878053997'),
('hanh', 'tranmyhanh001@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', b'0', '0878053997'),
('user1', 'user1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', b'0', '0981231231'),
('user2', 'user2@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', b'0', '0973246281'),
('user3', 'user3@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', b'0', '0394873474'),
('user4', 'user4@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', b'0', '0934647284');

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
  ADD PRIMARY KEY (`maHD`),
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
  ADD KEY `email` (`email`),
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
  ADD PRIMARY KEY (`maPhim`),
  ADD KEY `maPhong` (`maPhong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maPhong`),
  ADD KEY `maGhe` (`maGhe`);

--
-- Chỉ mục cho bảng `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`maRap`),
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
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`email`) REFERENCES `taikhoan` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
