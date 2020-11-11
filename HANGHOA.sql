-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 11, 2020 lúc 11:04 AM
-- Phiên bản máy phục vụ: 8.0.21-0ubuntu0.20.04.4
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `HANGHOA`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `species` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `species`, `price`, `amount`, `date`, `description`) VALUES
(1, 'Tủ Lạnh111', '1000000', 'Đồ Gia Dụng', '15', '2017-09-20', 'Hàng Đẹp1111'),
(2, 'Tivi', 'Đồ Gia Dụng', '1000000', '11', '2017-09-21', 'Hàng Đẹp'),
(3, 'Samsung', 'Điện Thoại', '1000000', '11', '2017-09-22', 'Hàng Đẹp'),
(4, 'Samsung', 'Điện Thoại', '1000000', '11', '2017-09-22', 'Hàng Đẹp'),
(6, 'Xe Máy Việt', 'Phương Tiện', '1000000', '11', '2017-09-25', 'Xe Đẹp Chất Lượng'),
(12, 'Máy tính laptop', '100', 'Hàng Thanh Lý', '100', '2020-10-11', 'Hàng Đẹp,Hàng fake'),
(13, 'Bút Chì', 'Đồ Gia dụng', '1000', '10', '2020-11-11', 'Một chiếc bút đẹp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
