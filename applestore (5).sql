-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 02:00 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
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
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID_Account`, `UserName`, `PassWord`, `Rule_rank`, `Email`, `Addr`, `PhoneNumber`) VALUES
(1, 'Tuyen', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'tuyen.ph@neo-lab.vn', '243 Nguyễn Tất Thành, Đà Nẳng', '01662723940'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'tuyenph@gmail.com', '243 nguyễn tất thành', '01662723940'),
(3, 'vu', '2442bf947ecb04d9ef20084bf522ed93', 1, 'avav', 'asdasd', '1231312'),
(8, 'nhung', '4297f44b13955235245b2497399d7a93', 1, 'adajsdaks', 'asjdalsdjasd', '1231231231'),
(9, 'hangnguyen', 'e10adc3949ba59abbe56e057f20f883e', 1, 'hangnguyen@gmail.com', 'Quảng Nam,', '0123456797'),
(10, 'hangnguyen', 'd1c07866d71dc3a09b3b692d0a2086b4', 1, 'hangnguyen@gmail.com', 'da nang', '0123456789'),
(11, 'Huu Tuyen', '9ed1f213a56b40b5af2c1703d29415ee', 3, 'phtttc@gmail.com', 'Phu Loc - TT Hue', '01662723940'),
(12, 'Huu Tuyen', '9ed1f213a56b40b5af2c1703d29415ee', 3, 'phtttc@gmail.com', 'Phu Loc - TT Hue', '01662723940'),
(13, 'Vu', '4297f44b13955235245b2497399d7a93', 3, 'vu.nv@neo-lab.vn', 'da nang', '0123453131'),
(14, 'Vu', 'd41d8cd98f00b204e9800998ecf8427e', 3, 'vu.nv@neo-lab.vn', 'da nang', '0123453131');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `ID_Color` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`ID_Color`, `ID_Product`, `Color`) VALUES
(1, 1, 'Silver\n'),
(2, 1, 'Space Gray'),
(3, 17, 'Silver'),
(4, 17, 'Rose Gold'),
(5, 2, 'Gold'),
(6, 2, 'Rose Gold'),
(7, 2, 'Space Gray'),
(9, 3, 'Silver'),
(10, 3, 'Space Gray'),
(11, 4, 'Rose Gold'),
(12, 4, 'Silver'),
(13, 5, 'Silver'),
(14, 5, 'Gold'),
(15, 6, 'Rose Gold'),
(16, 6, 'Silver'),
(17, 7, 'Silver'),
(18, 8, 'Silver'),
(19, 8, 'Space Gray');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `ID_DetailOrder` int(11) NOT NULL,
  `ID_Order` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Color` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID_Order` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `Add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  `Accepter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Orderer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID_Product`, `ProductName`, `NewPrice`, `OldPrice`, `ID_TypeProduct`, `Config`, `description`, `Image`) VALUES
(1, 'iPhone X_256GB', 1149, 1149, 1, '<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p>Sensors : Face&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'ipx-256G.png'),
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
(17, '9.7_inch iPad 128GB', 429, 429, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-9in-128GB.png'),
(18, '9.7-inch iPad 32GB', 329, 329, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-9in-32G.png'),
(19, 'iPad Mini 4', 399, 399, 2, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Retina display 12.9-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; 512</strong>GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP</p>\r\n\r\n<p><strong>FaceTime&nbsp;HD Camera</strong><strong> </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM (supports Apple SIM)</p>\r\n\r\n<p><strong>PIN :&nbsp;</strong>Built‐in 41‐watt‐hour rechargeable lithium‑polymer battery</p>\r\n', 'ipad-mini4-128G.png'),
(20, 'iPhone 7-32GB', 549, 549, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone7-32GB.png'),
(21, 'iPhone 6s Plus-128GB', 649, 649, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone6splus-128GB.png'),
(22, 'iPhone 6s Plus-32GB', 549, 549, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone6spl-32Gb.png'),
(23, 'iPhone 6s 128GB', 549, 549, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone6s-128G.png'),
(24, 'iPhone 6s 32GB', 449, 449, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphone6s-32G.png'),
(25, 'iPhone SE 128GB', 449, 449, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphoneSE-128G.png'),
(26, 'iPhone SE 32GB', 349, 349, 1, '', '<p><strong>Display&nbsp; :&nbsp; </strong>Super Retina HD display 5.8-inch</p>\r\n\r\n<p><strong>Capacity&nbsp; :&nbsp; </strong>256GB</p>\r\n\r\n<p><strong>Operating System </strong>: iOS 11</p>\r\n\r\n<p><strong>Camera</strong> :&nbsp;12MP wide-angle and telephoto cameras,</p>\r\n\r\n<p><strong>TrueDepth&nbsp; Camera </strong>: 7MP&nbsp;</p>\r\n\r\n<p><strong>Sensors </strong>: Touch&nbsp;ID</p>\r\n\r\n<p><strong>SIM</strong> :&nbsp;Nano-SIM</p>\r\n\r\n<p><strong>Splash, Water, and Dust Resistant </strong>:&nbsp;Rated IP67 under IEC standard 60529</p>\r\n', 'iphoneSE-32g.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_rep`
--

CREATE TABLE `product_rep` (
  `ID_ProductRep` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `ID_Rule` int(11) NOT NULL,
  `rank` tinyint(1) NOT NULL,
  `RuleName` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`ID_Rule`, `rank`, `RuleName`) VALUES
(3, 3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `ID_TypeProduct` int(11) NOT NULL,
  `ProductName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`ID_TypeProduct`, `ProductName`) VALUES
(1, 'iPhone'),
(2, 'iPad'),
(3, 'Mac'),
(4, 'tv'),
(5, 'watch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID_Account`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ID_Color`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`ID_DetailOrder`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Indexes for table `product_rep`
--
ALTER TABLE `product_rep`
  ADD PRIMARY KEY (`ID_ProductRep`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`ID_Rule`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`ID_TypeProduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID_Account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `ID_Color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `ID_DetailOrder` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product_rep`
--
ALTER TABLE `product_rep`
  MODIFY `ID_ProductRep` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `ID_Rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `ID_TypeProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
