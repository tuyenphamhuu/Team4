-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2017 lúc 07:53 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `applestore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ID_Account` int(11) NOT NULL,
  `UserName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PassWord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rule_rank` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Addr` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID_Account`, `UserName`, `PassWord`, `Rule_rank`, `Email`, `Addr`, `PhoneNumber`) VALUES
(1, 'Tuyen', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'tuyen.ph@neo-lab.vn', '243 Nguyễn Tất Thành, Đà Nẳng', '01662723940'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'tuyenph@gmail.com', '243 nguyễn tất thành', '01662723940'),
(3, 'vu', '123', 1, 'avav', 'asdasd', '1231312'),
(8, 'nhung', '4297f44b13955235245b2497399d7a93', 1, 'adajsdaks', 'asjdalsdjasd', '1231231231'),
(9, 'hangnguyen', 'e10adc3949ba59abbe56e057f20f883e', 1, 'hangnguyen@gmail.com', 'Quảng Nam,', '0123456797');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `ID_Color` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`ID_Color`, `ID_Product`, `Color`) VALUES
(1, 1, 'Silver'),
(2, 1, 'Space Gray'),
(3, 9, 'Silver'),
(4, 9, 'Rose Gold'),
(5, 1, 'Silver'),
(6, 1, 'Space Gray'),
(7, 9, 'Silver'),
(8, 9, 'Rose Gold'),
(9, 2, 'Silver'),
(10, 2, 'Space Gray'),
(11, 4, 'Silver'),
(12, 4, 'Rose Gold'),
(13, 5, 'Silver'),
(14, 5, 'Space Gray'),
(15, 6, 'Silver'),
(16, 6, 'Rose Gold'),
(17, 7, 'Silver'),
(18, 7, 'Space Gray'),
(19, 8, 'Silver'),
(20, 8, 'Rose Gold'),
(21, 9, 'Silver'),
(22, 9, 'Space Gray'),
(23, 10, 'Silver'),
(24, 10, 'Rose Gold'),
(25, 11, 'Silver'),
(26, 11, 'Space Gray'),
(27, 12, 'Silver'),
(28, 12, 'Rose Gold'),
(29, 13, 'Silver'),
(30, 13, 'Space Gray'),
(31, 14, 'Silver'),
(32, 14, 'Rose Gold'),
(33, 15, 'Silver'),
(34, 15, 'Space Gray'),
(35, 16, 'Silver'),
(36, 16, 'Rose Gold'),
(37, 17, 'Silver'),
(38, 17, 'Rose Gold'),
(39, 18, 'Silver'),
(40, 18, 'Space Gray'),
(41, 19, 'Silver'),
(42, 19, 'Rose Gold');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_order`
--

CREATE TABLE `detail_order` (
  `ID_DetailOrder` int(11) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `ID_Order` int(11) NOT NULL,
  `ID_Account` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `Status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  `Accepter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID_Product` int(11) NOT NULL,
  `ProductName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NewPrice` float NOT NULL,
  `OldPrice` float NOT NULL,
  `ID_TypeProduct` int(11) NOT NULL,
  `Config` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID_Product`, `ProductName`, `NewPrice`, `OldPrice`, `ID_TypeProduct`, `Config`, `description`, `Image`) VALUES
(1, 'iPhone X-256GB', 1149, 1149, 1, '<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p>Sensors : Face&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'ipx-256G.png'),
(2, 'Iphone X-64GB', 999, 999, 1, '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Face&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone-x-64G.png'),
(4, 'iPhone 8 Plus-256GB', 849, 849, 1, '<p>bbbbbbbb</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone8-256GB.png'),
(5, 'iPhone 8 Plus-64GB', 699, 699, 1, '<p>016, March Status Available. Released 2016, March BODY Dimensions 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in) Weight 113 g (3.99 oz) SIM Nano-SIM - Apple Pay (Visa, MasterCard, AMEX certified) DISPLAY Type LED-backlit IPS LCD, capacitive touchscreen, 16M colors Size 4.0 inches, 44.1 cm2 (~60.8% screen-to-body ratio) Resolution 640 x 1136 pixels, 16:9 ratio (~326 ppi density) Multitouch Yes PLATFORM OS iOS 9.3.2, upgradable to iOS 11.0.2 Chipset Apple A9 CPU Dual-core 1.84 GHz Twister GPU PowerVR GT7600 (six-core graphics) MEMORY Card slot No Internal 16/32/64/128 GB, 2 GB RAM CAMERA Primary 12 MP, f/2.2, 29mm, phase detection autofocus, dual-LED (dual tone) flash, check quality Features 1/3&quot; sensor size, 1.22 &micro;m pixel size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone8plus-64G.png'),
(6, 'iPhone 8-256GB', 849, 849, 1, '<p>016, March Status Available. Released 2016, March BODY Dimensions 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in) Weight 113 g (3.99 oz) SIM Nano-SIM - Apple Pay (Visa, MasterCard, AMEX certified) DISPLAY Type LED-backlit IPS LCD, capacitive touchscreen, 16M colors Size 4.0 inches, 44.1 cm2 (~60.8% screen-to-body ratio) Resolution 640 x 1136 pixels, 16:9 ratio (~326 ppi density) Multitouch Yes PLATFORM OS iOS 9.3.2, upgradable to iOS 11.0.2 Chipset Apple A9 CPU Dual-core 1.84 GHz Twister GPU PowerVR GT7600 (six-core graphics) MEMORY Card slot No Internal 16/32/64/128 GB, 2 GB RAM CAMERA Primary 12 MP, f/2.2, 29mm, phase detection autofocus, dual-LED (dual tone) flash, check quality Features 1/3&quot; sensor size, 1.22 &micro;m pixel size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone8-256GB.png'),
(7, 'iPhone 8-64GB', 699, 699, 1, '<p>016, March Status Available. Released 2016, March BODY Dimensions 123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in) Weight 113 g (3.99 oz) SIM Nano-SIM - Apple Pay (Visa, MasterCard, AMEX certified) DISPLAY Type LED-backlit IPS LCD, capacitive touchscreen, 16M colors Size 4.0 inches, 44.1 cm2 (~60.8% screen-to-body ratio) Resolution 640 x 1136 pixels, 16:9 ratio (~326 ppi density) Multitouch Yes PLATFORM OS iOS 9.3.2, upgradable to iOS 11.0.2 Chipset Apple A9 CPU Dual-core 1.84 GHz Twister GPU PowerVR GT7600 (six-core graphics) MEMORY Card slot No Internal 16/32/64/128 GB, 2 GB RAM CAMERA Primary 12 MP, f/2.2, 29mm, phase detection autofocus, dual-LED (dual tone) flash, check quality Features 1/3&quot; sensor size, 1.22 &micro;m pixel size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone8-64G.png'),
(8, 'iPhone 7 Plus-128GB', 769, 769, 1, '<p>asd</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone7plus-128G.png'),
(9, 'iPhone 7 Plus-32GB', 699, 699, 1, '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone7plus-32GB.png'),
(10, 'iPhone 7-128GB', 649, 649, 1, '<p>eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone7-128G.png'),
(11, '12.9-inch iPad Pro 512GB', 1149, 1149, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-12in-512GB.png'),
(12, '12.9-inch iPad Pro 256GB', 949, 949, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-12in-256GB.png'),
(13, '12.9-inch iPad Pro 64GB', 799, 799, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-12in-64GB.png'),
(14, '10.5-inch iPad Pro 512GB', 999, 999, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-10in-512G.png'),
(15, '10.5-inch iPad Pro 256GB', 799, 799, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-10in-256G.png'),
(16, '10.5-inch iPad Pro 64GB', 649, 649, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-pro-10in-64G.png'),
(17, '9.7-inch iPad 128GB', 429, 429, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-9in-128GB.png'),
(18, '9.7-inch iPad 32GB', 329, 329, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-9in-32G.png'),
(19, 'iPad Mini 4', 399, 399, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-mini4-128G.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_rep`
--

CREATE TABLE `product_rep` (
  `ID_ProductRep` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rule`
--

CREATE TABLE `rule` (
  `ID_Rule` int(11) NOT NULL,
  `rank` tinyint(1) NOT NULL,
  `RuleName` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rule`
--

INSERT INTO `rule` (`ID_Rule`, `rank`, `RuleName`) VALUES
(3, 3, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_product`
--

CREATE TABLE `type_product` (
  `ID_TypeProduct` int(11) NOT NULL,
  `ProductName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_product`
--

INSERT INTO `type_product` (`ID_TypeProduct`, `ProductName`) VALUES
(1, 'iPhone'),
(2, 'iPad'),
(3, 'Mac'),
(4, 'tv'),
(5, 'watch');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID_Account`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ID_Color`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`ID_DetailOrder`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Chỉ mục cho bảng `product_rep`
--
ALTER TABLE `product_rep`
  ADD PRIMARY KEY (`ID_ProductRep`);

--
-- Chỉ mục cho bảng `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`ID_Rule`);

--
-- Chỉ mục cho bảng `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`ID_TypeProduct`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `ID_Account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `ID_Color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `ID_DetailOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `product_rep`
--
ALTER TABLE `product_rep`
  MODIFY `ID_ProductRep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rule`
--
ALTER TABLE `rule`
  MODIFY `ID_Rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_product`
--
ALTER TABLE `type_product`
  MODIFY `ID_TypeProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
