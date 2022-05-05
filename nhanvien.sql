-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2022 lúc 05:06 AM
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
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(15) NOT NULL,
  `mathe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bophan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hieusuat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `mathe`, `hoten`, `email`, `bophan`, `hieusuat`) VALUES
(16, 'V3000214', 'Bùi Văn Cương', '0962016791', 'AEC', ''),
(17, 'V3001894', 'La Văn Huy', '0962068520', 'AEC', ''),
(18, 'V0255059', 'Nguyễn Thị Khánh Hà', '0822653339', 'AEC', '394%'),
(19, 'V0255086', 'Nguyễn Thành Công', '0387382604', 'AEC', ''),
(20, 'V0259315', 'Dương Minh Thảo', '0333651603', 'AEC', '362%'),
(21, 'V0255507', 'Nguyễn Thị Thu Hà', '0914646856', 'AEC', '394%'),
(22, 'V0255535', 'Lê Ngọc Điệp', '0976685115', 'AEC', ''),
(23, 'V0256155', 'Hoàng Thị Hải', '0354289809', 'AEC', ''),
(24, 'V0256158', 'Lê Thiện Chung', '0333554116', 'AEC', ''),
(25, 'V0258993', 'Nguyễn Thị Thanh Hoài', '0345209687', 'AEC', ''),
(26, 'V0257423', 'Nguyễn Đức Thành', '0375535761', 'AEC', ''),
(27, 'V0255257', 'Hoàng Tuấn Anh', '0399726369', 'AEC', ''),
(28, 'V0259421', 'Ngô Đình Hiến', '0966166711', 'AEC', ''),
(29, 'V0259433', 'Quàng Văn Lái', '0346849204', 'AEC', ''),
(30, 'V0250180', 'Bùi Trung Văn', '0983654966', 'AEC', ''),
(31, 'V0259509', 'Vi Văn Vương', '0889145448', 'AEC', ''),
(32, 'V0259529', 'Nguyễn Văn Vượng', '0366346467', 'AEC', ''),
(33, 'V0259548', 'Vũ Văn Lương', '0972539731', 'AEC', ''),
(34, 'V0259587', 'Nguyễn Huy Liệu', '0963341371', 'AEC', ''),
(35, 'V0259724', 'Phạm Quang Mạnh', '0379474078', 'AEC', ''),
(36, 'V0259888', 'Trần Văn Nguyên', '0987846722', 'AEC', ''),
(37, 'V0260063', 'Nguyễn Văn Lực', '0972264195', 'AEC', '254%'),
(38, 'V0263379', 'Nguyễn Văn Bắc', '0968870025', 'AEC', '337%'),
(39, 'V0263387', 'Nguyễn Văn Dung', '0583103850', 'AEC', ''),
(40, 'V0263388', 'Nguyễn Văn Nguyên', '0362901997', 'AEC', ''),
(41, 'V0263389', 'Triệu Văn Hai', '0393303793', 'AEC', ''),
(42, 'V0263390', 'Lưu Văn Long', '327292510', 'AEC', ''),
(43, 'V0263439', 'Nguyễn Văn Khôi', '0364333968', 'AEC', ''),
(44, 'V0263435', 'Nguyễn Gia Huy', '0357210795', 'AEC', ''),
(45, 'V0263444', 'Hoàng Thanh Định', '0973122643', 'AEC', ''),
(46, 'V0263521', 'Nguyễn Văn Định', '0392155968', 'AEC', ''),
(47, 'V0263573', 'Trương Văn Vĩnh', '0353954111', 'AEC', ''),
(48, 'V0263577', 'Dương Văn Ba', '0969765314', 'AEC', ''),
(49, 'V0263671', 'Nguyễn Văn Tiến', '0349140998', 'AEC', ''),
(50, 'V0264155', 'Nguyễn Ngọc Hải', '0353677333', 'AEC', ''),
(51, 'V3032700', 'Vi Hải Nam', '000000000', 'AEC', ''),
(52, 'V0255522', 'Trần văn ngọc', '000000', 'AEC', ''),
(53, 'V0255719', 'Nguyễn Đình Lực', '000000000', 'AEC', ''),
(54, 'V0256556', 'Vi Văn Mạnh', '000000000', 'AEC', '351%'),
(55, 'V3032691', 'Nguyễn Văn Sơn', '000000000', 'AEC', '337%'),
(56, 'V0256551', 'Lê Văn Trung', '000000000', 'AEC', '368%'),
(57, 'V0258682', 'Triệu Văn Khoa', '000000000', 'AEC', '314%'),
(58, 'V0256549', 'Bùi Văn Hiệp', '000', 'AEC', '382%'),
(59, 'V0256550', 'Hà Văn Cường', '0000000', 'AEC', '388%'),
(60, 'V3032703', 'Hoàng Văn Trần', '000000000', 'AEC', ''),
(61, 'V0263371', 'Hà Văn Chính', '0333368998', 'AEC', ''),
(62, 'V0263373', 'Nguyễn Văn Quân', '0963730500', 'AEC', ''),
(63, 'V0263374', 'Nguyễn Đình Thu', '0862751891', 'AEC', '303%'),
(64, 'V0263375', 'Đỗ Văn Thương', '0973196896', 'AEC', ''),
(65, 'V0263376', 'Lý Văn Lâm', '0964575471', 'AEC', ''),
(66, 'V0263377', 'Lê Huy Hải', '0383626958', 'AEC', ''),
(67, 'V0263392', 'Đỗ Đình Sáng', '0977672997', 'AEC', ''),
(68, 'V0263391', 'Hoàng Công Ninh', '0987291104', 'AEC', ''),
(69, 'V0263382', 'Nguyễn Văn Vịnh', '0385223491', 'AEC', ''),
(70, 'V0263383', 'Nguyễn Văn Tùng', '0383663550', 'AEC', ''),
(71, 'V0263384', 'Nguyễn Hoàng Linh', '0967402185', 'AEC', ''),
(72, 'V0263385', 'Đỗ Văn Dương', '0989027679', 'AEC', ''),
(73, 'V0263433', 'Dương Ngô Khánh', '0866108000', 'AEC', ''),
(74, 'V3032270', 'Chu Anh Tuấn ', '000000000', 'Cable自動化開發', ''),
(75, 'V3049023', 'Trần Văn Quang', '00', 'Cable自動化開發', ''),
(76, 'V3031355', 'Nguyễn Huy Hồng ', '000000000', 'Cable自動化開發', ''),
(77, 'V0231422', 'Nguyễn Văn Thạo', '0000', 'Cable自動化開發', '332%'),
(78, 'V0205682', 'Nguyễn Văn Thường', '000000000', 'Cable自動化開發', '368%'),
(79, 'V0205690', 'Ngô  Văn Kiên', '000', 'Cable自動化開發', ''),
(80, 'V3049354', 'Nguyễn Quốc Tiến', '00', 'Cable自動化開發', ''),
(81, 'V0232115', 'Vũ Đình Thắng', '00', 'Cable自動化開發', '303%'),
(82, 'V0236226', 'Đoàn Văn Mừng', '000', 'Cable自動化開發', ''),
(83, 'V0220302', 'Nguyễn Anh Lượng', '00000000', 'Cable自動化開發', ''),
(84, 'V0230192', 'Lưu Đức Cường', '0000000', 'Cable自動化開發', ''),
(85, 'V0236121', 'Nguyễn Văn Diên', '0829050992', 'Cable-ATM電', ''),
(86, 'V3003500', 'Hoàng Văn Thắng', '0374666550', 'Cable-ATM電', ''),
(87, 'V3005020', 'Nguyễn Văn Tuyên', '0399585902', 'Cable-ATM電', ''),
(88, 'V0248304', 'Trịnh Văn Tài', '0856379895', 'Cable-ATM電', ''),
(89, 'V0253208', 'Đỗ Thị Oanh', '0986120431', 'Cable-ATM電', ''),
(90, 'V0254203', 'Nguyễn Tiến Đức', '0327412095', 'Cable-ATM電', ''),
(91, 'V0255087', 'Nguyễn Thị Lệ Thủy', '0376276392', 'Cable-ATM電', '264%'),
(92, 'V0255256', 'Nguyễn Ngọc Quí', '0353201540', 'Cable-ATM電', ''),
(93, 'V0255258', 'Đồng Văn Nam', '0979216949', 'Cable-ATM電', ''),
(94, 'V0255275', 'Nguyễn Quang Lâm', '0944106735', 'Cable-ATM電', '284%'),
(95, 'V0255450', 'Phạm Lê Tùng', '0396561381', 'Cable-ATM電', '341%'),
(96, 'V0256578', 'Hoàng Văn Ngọc', '0985295287', 'Cable-ATM電', ''),
(97, 'V0236170', 'Nguyễn Văn Quý', '0987767444', 'Cable-ATM電', ''),
(98, 'V0258220', 'Vũ Quang Anh', '0356479641', 'Cable-ATM電', ''),
(99, 'V0259429', 'Phạm Văn Đông ', '0974972474', 'Cable-ATM電', ''),
(100, 'V0259523', 'Trần Văn Mạnh', '0989916897', 'Cable-ATM電', ''),
(101, 'V0259525', 'Ngô Văn Thái', '0971895172', 'Cable-ATM電', ''),
(102, 'V0263380', 'Nguyễn Ngọc Tùng', '0989027188', 'Cable-ATM電', ''),
(103, 'V0263386', 'Hoàng Kim Chính', '0976257706', 'Cable-ATM電', ''),
(104, 'V0263437', 'Nguyễn Thanh Sơn', '0378923114', 'Cable-ATM電', ''),
(105, 'V0263442', 'Vũ Văn Bình', '0976388646', 'Cable-ATM電', ''),
(106, 'V0263467', 'Hoàng Công An', '0358161992', 'Cable-ATM電', ''),
(107, 'V0263523', 'Hồ Thị Huệ', '0339546570', 'Cable-ATM電', ''),
(108, 'V0263524', 'Vũ Trường Giang', '0989713288', 'Cable-ATM電', ''),
(109, 'V0263572', 'Lê Ngọc Mạnh', '0981161757', 'Cable-ATM電', ''),
(110, 'V3032126', 'Trần Thị Hồng ', '000', 'Cable-ATM電', ''),
(111, 'V0264157', 'Nguyễn Văn Thắng', '0911276197', 'Cable-ATM電', ''),
(112, 'V0264235', 'Trương Đức Dũng', '0362880198', 'Cable-ATM電', ''),
(113, 'V0264236', 'Thân Văn Nam ', '0854897814', 'Cable-ATM電', '388%'),
(114, 'V3076400', 'Nguyễn Tuấn Anh', '0913424281', 'Cable-ATM電', ''),
(115, 'V0221050', 'Đinh Văn Hải', '0383363160', 'APS-自動化開發二', ''),
(116, 'V0248234', 'Nguyễn Đình Thắng', '0393417592', 'APS-自動化開發二', ''),
(117, 'V0252443', 'Nguyễn Thị Ba', '0888557215', 'APS-自動化開發二', ''),
(118, 'V0205617', 'Dương văn Trường', '0394552484', 'APS-自動化開發二', ''),
(119, 'V0236711', 'Nguyễn Ngọc Hoàn ', '0989462028', 'APS-自動化開發二', '254%'),
(120, 'V0238581', 'Nguyễn ăn Nguyên ', '0395306642', 'APS-自動化開發二', ''),
(121, 'V0253114', 'Vũ Thị Quỳnh', '0365966101', 'APS-自動化開發二', ''),
(122, 'V0253203', 'Nguyễn Văn Hoạt', '0983676097', 'APS-自動化開發二', ''),
(123, 'V0253204', 'Trần Xuân Huy', '0386566696', 'APS-自動化開發二', ''),
(124, 'V0253206', 'Trần Văn Minh', '0339968600', 'APS-自動化開發二', ''),
(125, 'V0253209', 'Đông Hồng Sơn', '0397125564', 'APS-自動化開發二', '264%'),
(126, 'V0259477', 'Thân Văn Tuấn', '0375510292', 'APS-自動化開發二', ''),
(127, 'V0259591', 'Nguyễn Văn Dũng', '0356119079', 'APS-自動化開發二', ''),
(128, 'V0259801', 'Nguyễn Duy Lực', '0985868614', 'APS-自動化開發二', ''),
(129, 'V0262351', 'Phùng Văn Nghĩa', '0382427646', 'APS-自動化開發二', ''),
(130, 'V0262353', 'Triệu Văn Thực', '0854318584', 'APS-自動化開發二', ''),
(131, 'V0260158', 'Đoàn Văn Dũng', '0382427646', 'APS-自動化開發二', ''),
(132, 'V0263369', 'Trịnh Văn Cương', '0913961161', 'APS-自動化開發二', ''),
(133, 'V0263446', 'Nguyễn Văn Cường', '0972308817', 'APS-自動化開發二', ''),
(134, 'V0263525', 'Nguyễn Hữu Nam', '0986987296', 'APS-自動化開發二', ''),
(135, 'V0263526', 'Trần Văn Quyền', '0972286740', 'APS-自動化開發二', '341%'),
(136, 'V0263627', 'Nguyễn Mạnh Hùng', '0355561133', 'APS-自動化開發二', ''),
(137, 'V0263629', 'Đồng Minh Quang', '0867998867', 'APS-自動化開發二', ''),
(138, 'V0263661', 'Ngô Đức Trọng', '0328753803', 'APS-自動化開發二', ''),
(139, 'V0263662', 'Hoàng Ngọc Duy', '0912018597', 'APS-自動化開發二', ''),
(140, 'V0263663', 'Nguyễn Đăng Huy', '0582762630', 'APS-自動化開發二', ''),
(141, 'V0263664', 'Nguyễn Văn Dương', '0564366817', 'APS-自動化開發二', ''),
(142, 'V0263672', 'Nguyễn Quang Minh', '0385038055', 'APS-自動化開發二', ''),
(143, 'V0263673', 'Nguyễn Văn Thịnh', '0348565386', 'APS-自動化開發二', ''),
(144, 'V0263674', 'Nguyễn Trung Thành', '0357666361', 'APS-自動化開發二', ''),
(145, 'V0236223', 'Nguyễn Việt Dũng', '000000000', 'APS-自動化開發二', ''),
(146, 'V0236026', 'Lê Văn Quân', '00', 'APS-自動化開發二', ''),
(147, 'V0230216', 'Lê Văn Xuân', '000000000', 'APS-自動化開發二', ''),
(148, 'V3005023', ' Lương n Khanh', '000000000', 'APS-自動化開發二', ''),
(149, 'V0264163', 'Nguyễn Tú Linh', '0328643586', 'APS-自動化開發二', ''),
(150, 'V3075238', 'Trịnh Văn Quang', '0358451627', 'APS-自動化開發二', ''),
(151, 'V3076410', 'Nguyễn Ngọc Duy', '0984924482', 'APS-自動化開發二', ''),
(152, 'V3000220', 'Trần xuân Hải ', '0988572094', 'APS-自動化開發二', ''),
(153, 'V0256166', 'Nguyễn Đình Trường', '0963221504', 'APS-自動化開發二', ''),
(154, 'V0256172', 'Nguyễn Văn Đoàn', '0869012124', 'APS-自動化開發二', ''),
(155, 'V0255717', 'Nguyễn Duy Phương', '0969289159', 'APS-自動化開發二', '341%'),
(156, 'V0259480', 'Đồng Văn Tân ', '0352010201', 'APS-自動化開發二', ''),
(157, 'V0259502', 'Phó Ngọc Anh ', '0865272944', 'APS-自動化開發二', ''),
(158, 'V0259521', 'Vũ Văn Hiếu', '0352273102', 'APS-自動化開發二', ''),
(159, 'V0259592', 'Vũ Đình Công ', '0353523432', 'APS-自動化開發二', ''),
(160, 'V0260515', 'Phạm Minh Sang ', '0353334517', 'APS-自動化開發二', ''),
(161, 'V0260722', 'Đinh Văn Hà', '0987301392', 'APS-自動化開發二', ''),
(162, 'V0262099', 'Nguyễn Văn Nguyên', '0983874831', 'APS-自動化開發二', ''),
(163, 'V0262100', 'Lương Hữu Trường ', '0968977832', 'APS-自動化開發二', ''),
(164, 'V0262360', 'Nguyễn Đức Tuấn ', '0377663142', 'APS-自動化開發二', ''),
(165, 'V0262361', 'Nguyễn Công Minh', '0969939937', 'APS-自動化開發二', ''),
(166, 'V0263529', 'Đặng Duy Hậu', '0377200476', 'APS-自動化開發二', ''),
(167, 'V0263633', 'Nguyễn Đình Tứ', '0387910022', 'APS-自動化開發二', ''),
(168, 'V0263665', 'Lê Trung Sơn', '0981762876', 'APS-自動化開發二', ''),
(169, 'V0264158', 'La Liêm', '0975026524', 'APS-自動化開發二', ''),
(170, 'V0264159', 'Nguyễn Anh Tuấn', '0969356231', 'APS-自動化開發二', ''),
(171, 'V0264160', 'Trần Văn Khương', '0387853550', 'APS-自動化開發二', ''),
(172, 'V0264162', 'Đặng Văn Nghĩa ', '0965621122', 'APS-自動化開發二', ''),
(173, 'V3073889', 'Dương Văn Ảnh ', '0379208017', 'APS-自動化開發二', ''),
(174, 'V0264161', 'Chu Văn Hải', '0364639136', 'APS-自動化開發二', ''),
(175, 'V3072925', 'Nguyễn Minh Đức', '0387921010', 'APS-自動化開發二', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
