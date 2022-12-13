-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2022 lúc 05:33 PM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
