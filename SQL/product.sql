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
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` varchar(7) NOT NULL,
  `catalog_id` varchar(7) DEFAULT NULL,
  `names` text DEFAULT NULL,
  `price` varchar(11) DEFAULT NULL,
  `image_link` varchar(50) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `statu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `names`, `price`, `image_link`, `created`, `statu`) VALUES
('SP01', 'ML01', 'Nước hoa Gucci Bloom ', '320,000', 'CSM-01.jpg', '2023-08-22', 1),
('SP02', 'ML01', 'Nước hoa Chanel Bleu', '700,000', 'NH-chanelBleu.jpg', '2023-09-18', 0),
('SP03', 'ML01', 'Nước hoa Miss Dior', '600,000', 'NH-missDior.jpg', '2023-04-29', 0),
('SP04', 'ML02', 'Sửa rữa mặt Cerave', '450,000', 'MP-01.jpg', '2023-05-31', 0),
('SP05', 'ML02', 'Son Gucci Rouge', '950,000', 'MP-02.jpg', '2023-08-13', 0),
('SP06', 'ML02', 'Phấn phủ FOCALLURE', '43,000', 'MP-03.jpg', '2023-09-17', 0),
('SP07', 'ML03', 'Xịt thơm người Bath & Body', '200,000', 'CSTT-01.jpg', '2023-07-05', 0),
('SP08', 'ML03', 'Sữa tắm dạng gel', '235,000', 'CSTT-02.jpg', '2022-10-31', 1),
('SP09', 'ML03', 'Tẩy tế bào chết Cocoon', '260,000', 'CSTT-03.jpg', '2023-07-01', 1),
('SP10', 'ML04', 'Kem đánh răng Crest', '120,000', 'CSM-01.jpg', '2023-08-21', 1),
('SP11', 'ML04', 'Nước súc miệng Listerine', '200,000', 'CSM-03.jpg', '2023-08-24', 1),
('SP12', 'ML04', 'Xịt thơm miệng Dating spray', '129,000', 'CSM-02.jpg', '2023-10-15', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
