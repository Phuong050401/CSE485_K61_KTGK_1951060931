-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 05:51 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060931_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` date DEFAULT NULL,
  `nghenghiep` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycapthe` date DEFAULT NULL,
  `ngayhethan` date DEFAULT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(0, 'nguyễn văn anh', 'nam', '2012-01-17', 'học sinh', '2012-01-16', '2018-01-12', 'ĐH Thủy Lợi'),
(0, 'trần phương nam ', 'nam ', '2013-01-09', 'học sinh', '2013-01-08', '2022-01-06', 'ĐH Thủy Lợi'),
(0, 'hà thái bảo', 'nữ', '2016-01-06', 'học sinh', '2019-01-23', '2022-01-05', 'ĐH Thủy Lợi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
