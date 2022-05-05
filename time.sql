-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2022 lúc 05:07 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tdh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `tenmay` varchar(255) NOT NULL,
  `ngaybatdau` varchar(255) NOT NULL,
  `ngaydukien` varchar(255) NOT NULL,
  `tonggio` varchar(255) NOT NULL,
  `tungnguoi` varchar(255) NOT NULL,
  `hoanthanh` varchar(255) NOT NULL,
  `phantram` varchar(255) NOT NULL,
  `tangca` varchar(255) NOT NULL,
  `mathe` varchar(255) NOT NULL,
  `nguoithuchien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `time`
--

INSERT INTO `time` (`id`, `tenmay`, `ngaybatdau`, `ngaydukien`, `tonggio`, `tungnguoi`, `hoanthanh`, `phantram`, `tangca`, `mathe`, `nguoithuchien`) VALUES
(14, 'MÁY HÀNN', '2022-02-17', '2022-09-02', '0', '0', '1000', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(15, 'MÁY HÀNN', '2022-02-17', '2022-09-02', '0', '1000', '0', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(16, 'MÁY HÀNN', '2022-02-17', '2022-09-02', '0', '1000', '0', '0%', '0', 'V0256549', 'Bùi Văn Hiệp'),
(17, 'MÁY HÀNN', '2022-02-17', '2022-09-02', '0', '0', '1500', '0%', '0', 'V0256549', 'Bùi Văn Hiệp'),
(18, 'MAY OZ', '2022-03-16', '2022-08-26', '0', '1000', '0', '0%', '0', 'V0259529', 'Nguyễn Văn Vượng'),
(19, 'MAY OZ', '2022-03-16', '2022-08-26', '0', '0', '1500', '0%', '0', 'V0259529', 'Nguyễn Văn Vượng'),
(20, 'may HB', '2022-04-07', '2022-07-14', '0', '2000', '0', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(21, 'may HB', '2022-04-07', '2022-07-14', '0', '0', '2500', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(22, 'may HB', '2022-04-07', '2022-07-14', '0', '2000', '0', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà'),
(23, 'may HB', '2022-04-07', '2022-07-14', '0', '0', '2000', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà'),
(24, 'AOIIII', '2022-03-16', '2022-08-31', '0', '3000', '0', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(25, 'AOIIII', '2022-03-16', '2022-08-31', '0', '0', '3500', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(26, 'AOIIII', '2022-03-16', '2022-08-31', '0', '3500', '0', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà'),
(27, 'AOIIII', '2022-03-16', '2022-08-31', '0', '0', '3500', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà'),
(28, 'Máy Nhiệt', '2022-03-08', '2022-10-21', '0', '5000', '0', '0%', '0', 'V0264155', 'Nguyễn Ngọc Hải'),
(29, 'Máy Nhiệt', '2022-03-08', '2022-10-21', '0', '0', '5000', '0%', '0', 'V0264155', 'Nguyễn Ngọc Hải'),
(30, 'Máy Nhiệt', '2022-03-08', '2022-10-21', '0', '4500', '0', '0%', '0', 'V0255087', 'Nguyễn Thị Lệ Thủy'),
(31, 'Máy Nhiệt', '2022-03-08', '2022-10-21', '0', '0', '5000', '0%', '0', 'V0255087', 'Nguyễn Thị Lệ Thủy'),
(32, 'HB', '2022-03-23', '2022-09-22', '0', '4000', '0', '0%', '0', 'V0255535', 'Lê Ngọc Điệp'),
(33, 'HB', '2022-03-23', '2022-09-22', '0', '0', '4000', '0%', '0', 'V0255535', 'Lê Ngọc Điệp'),
(34, 'HB', '2022-03-23', '2022-09-22', '0', '4000', '0', '0%', '0', 'V0259433', 'Quàng Văn Lái'),
(35, 'HB', '2022-03-23', '2022-09-22', '0', '0', '4300', '0%', '0', 'V0259433', 'Quàng Văn Lái'),
(36, 'may AOI', '2022-03-17', '2022-08-31', '0', '4000', '0', '0%', '0', 'V0255059', 'Nguyễn Thị Khánh Hà'),
(37, 'may AOI', '2022-03-17', '2022-08-31', '0', '0', '4000', '0%', '0', 'V0255059', 'Nguyễn Thị Khánh Hà'),
(38, 'may AOI', '2022-03-17', '2022-08-31', '0', '3500', '0', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(39, 'may AOI', '2022-03-17', '2022-08-31', '0', '0', '4000', '0%', '0', 'V0255086', 'Nguyễn Thành Công'),
(40, 'may AOI', '2022-03-17', '2022-08-31', '0', '3700', '0', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà'),
(41, 'may AOI', '2022-03-17', '2022-08-31', '0', '0', '4000', '0%', '0', 'V0255507', 'Nguyễn Thị Thu Hà');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
