-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2023 lúc 05:28 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `mahd` int(255) NOT NULL,
  `ngay` date DEFAULT NULL,
  `pttt` varchar(255) DEFAULT NULL,
  `gia` int(255) DEFAULT NULL,
  `statu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`mahd`, `ngay`, `pttt`, `gia`, `statu`) VALUES
(1, '2023-10-12', 'Cash', 78000, '1'),
(2, '2015-10-08', 'Bank', 55000, '1'),
(3, '2023-07-03', 'Cash', 250000, '1'),
(4, '2014-10-15', 'Bank', 157000, '0'),
(5, '2017-10-13', 'Cash', 367000, '1'),
(6, '2013-10-15', 'ZaloPay', 160000, '1'),
(7, '2018-10-17', 'Momo', 60000, '1'),
(8, '2013-10-07', 'Cash', 49000, '1'),
(9, '2020-11-17', 'Cash', 25000, '1'),
(10, '2018-10-29', 'Cash', 50000, '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`mahd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
