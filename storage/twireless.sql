-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2022 at 08:51 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhcbjndd_twireless`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(12) NOT NULL,
  `user` int(12) DEFAULT NULL,
  `browser` text DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `user`, `browser`, `ip`, `type`, `timestamp`, `date`) VALUES
(94, 82, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Mobile Safari/537.36', '127.0.0.1', 'login', '1623424161', '2021-06-11 16:09:21'),
(95, 83, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '127.0.0.1', 'login', '1623424388', '2021-06-11 16:13:08'),
(96, 80, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '127.0.0.1', 'login', '1623444480', '2021-06-11 21:48:00'),
(97, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', '127.0.0.1', 'login', '1623455883', '2021-06-12 00:58:03'),
(98, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1623937870', '2021-06-17 14:51:10'),
(99, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1623939061', '2021-06-17 15:11:01'),
(100, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1624206318', '2021-06-20 17:25:18'),
(101, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1624241175', '2021-06-21 03:06:15'),
(102, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1624241223', '2021-06-21 03:07:03'),
(103, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', '127.0.0.1', 'login', '1624411591', '2021-06-23 02:26:32'),
(104, 98, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', '127.0.0.1', 'login', '1624465028', '2021-06-23 22:17:08'),
(105, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', '127.0.0.1', 'login', '1624465058', '2021-06-23 22:17:38'),
(106, 79, 'Mozilla/5.0 (Linux; Android 7.0; TECNO F3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36', '127.0.0.1', 'login', '1624480250', '2021-06-24 02:30:50'),
(107, 79, 'Mozilla/5.0 (Linux; Android 7.0; TECNO F3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36', '127.0.0.1', 'login', '1624480301', '2021-06-24 02:31:41'),
(108, 79, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '127.0.0.1', 'login', '1624580149', '2021-06-25 06:15:49'),
(109, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '127.0.0.1', 'login', '1624844759', '2021-06-28 07:45:59'),
(110, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '127.0.0.1', 'login', '1624851482', '2021-06-28 09:38:02'),
(111, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '127.0.0.1', 'login', '1624852025', '2021-06-28 09:47:05'),
(112, 79, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', '127.0.0.1', 'login', '1624852186', '2021-06-28 09:49:46'),
(113, 61, 'Mozilla/5.0 (Linux; Android 11; SAMSUNG SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36', '127.0.0.1', 'login', '1624881346', '2021-06-28 17:55:46'),
(114, 61, 'Mozilla/5.0 (Linux; Android 11; SAMSUNG SM-A125F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/14.2 Chrome/87.0.4280.141 Mobile Safari/537.36', '127.0.0.1', 'login', '1624881381', '2021-06-28 17:56:21'),
(115, 79, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1625284060', '2021-07-03 09:47:40'),
(116, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1625285999', '2021-07-03 10:19:59'),
(117, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1625291352', '2021-07-03 11:49:12'),
(118, 99, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1625293571', '2021-07-03 12:26:11'),
(119, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1625295477', '2021-07-03 12:57:57'),
(120, 105, 'Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36', '127.0.0.1', 'login', '1625949498', '2021-07-11 02:38:18'),
(121, 105, 'Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36', '127.0.0.1', 'login', '1625949530', '2021-07-11 02:38:50'),
(122, 105, 'Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36', '127.0.0.1', 'login', '1625949614', '2021-07-11 02:40:14'),
(123, 105, 'Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36', '127.0.0.1', 'login', '1625949639', '2021-07-11 02:40:39'),
(124, 105, 'Mozilla/5.0 (Linux; Android 9; itel W6004) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36', '127.0.0.1', 'login', '1625949659', '2021-07-11 02:40:59'),
(125, 105, 'Mozilla/5.0 (Linux; U; Android 9; en-us; itel W6004 Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.116 Mobile Safari/537.36 PHX/6.7', '127.0.0.1', 'login', '1625949739', '2021-07-11 02:42:19'),
(126, 105, 'Mozilla/5.0 (Linux; U; Android 9; en-us; itel W6004 Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.116 Mobile Safari/537.36 PHX/6.7', '127.0.0.1', 'login', '1625949780', '2021-07-11 02:43:00'),
(127, 106, 'Mozilla/5.0 (Linux; Android 7.0; TECNO F3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36', '127.0.0.1', 'login', '1626152408', '2021-07-13 11:00:08'),
(128, 107, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', '127.0.0.1', 'login', '1626154507', '2021-07-13 11:35:07'),
(129, 61, 'Mozilla/5.0 (Linux; Android 7.0; TECNO F3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36', '127.0.0.1', 'login', '1626168363', '2021-07-13 15:26:03'),
(130, 108, 'Mozilla/5.0 (Linux; Android 6.0; Infinix HOT 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36', '127.0.0.1', 'login', '1626173886', '2021-07-13 16:58:06'),
(131, 108, 'Mozilla/5.0 (Linux; Android 6.0; Infinix HOT 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36', '127.0.0.1', 'login', '1626173900', '2021-07-13 16:58:20'),
(132, 108, 'Mozilla/5.0 (Linux; Android 6.0; Infinix HOT 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.101 Mobile Safari/537.36', '127.0.0.1', 'login', '1626204173', '2021-07-14 01:22:53'),
(133, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626361764', '2021-07-15 21:09:24'),
(134, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626481851', '2021-07-17 06:30:51'),
(135, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626485333', '2021-07-17 07:28:53'),
(136, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626505121', '2021-07-17 12:58:41'),
(137, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626505632', '2021-07-17 13:07:12'),
(138, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', '127.0.0.1', 'login', '1626505648', '2021-07-17 13:07:28'),
(139, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36 Edg/91.0.864.70', '127.0.0.1', 'login', '1626519254', '2021-07-17 16:54:14'),
(140, 61, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36 Edg/91.0.864.70', '127.0.0.1', 'login', '1626519291', '2021-07-17 16:54:51'),
(141, 86, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', '127.0.0.1', 'login', '1629298852', '2021-08-18 21:00:52'),
(142, 110, 'Mozilla/5.0 (Linux; Android 11; SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36', '127.0.0.1', 'login', '1630840020', '2021-09-05 17:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` int(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bundles`
--

INSERT INTO `bundles` (`id`, `name`, `status`, `created`) VALUES
(1, 'Big Data', 'active', '2020-09-22 23:14:15'),
(2, 'Mini Data', 'active', '2020-09-22 23:14:47'),
(3, 'Mega Data', 'active', '2020-09-22 23:15:10'),
(4, 'Super Data', 'inactive', '2020-09-23 14:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(12) NOT NULL,
  `userid` int(12) DEFAULT NULL,
  `complaint` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `userid`, `complaint`, `date`) VALUES
(1, 105, 'Tell no tell', '2021-08-27 01:47:37'),
(2, 105, 'I HAVE BEEN TRYING TO CONNECT with twireless for main concepts and systems in tyring main cuts\r\n', '2021-08-27 09:05:12'),
(3, 111, 'I don\'t understand your service terms. Please can you explain?', '2021-09-05 19:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(12) NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `userid` int(12) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `contactname`, `companyname`, `userid`, `designation`, `state`, `phone`, `address`, `date`) VALUES
(31, 'Achimalo Ikenna', 'Taprap Nigeria', 127, 'Individual', 'Enugu', '+2347060531794', '22 Lion Aveneue Ekulu East Estate GRA Enugu', '2021-09-09 14:32:25'),
(29, 'Chiamaka Agogbua', 'T-wireless', 110, 'Individual', 'Lagos', '08057388144', 'Onwa estate Awkunanaw 1', '2021-09-05 17:06:28'),
(32, 'Izuchukwu Emembolu ', '', 128, 'Individual', 'Enugu', '08059761210', '13 Ekulu West GRA Enugu ', '2021-10-17 20:42:18'),
(33, 'Basil Uderike Mmadu ', '', 129, 'Individual', 'Enugu', '08072822560', 'basilmmadukolu@gmail.com', '2021-11-05 23:43:19'),
(34, 'Lazarus Nwachukwu', '', 130, 'Individual', 'Enugu', '08110567180', 'No 1 Francis and Lucy close ekochin foundation, abakpa, Enugu', '2021-11-11 12:16:35'),
(35, 'Aneke Sydney ', '', 131, 'Individual', 'Enugu', '07085537015', '14 abakpa avenue', '2021-11-28 02:13:42'),
(36, 'Ezeh Mark Ekene', '', 132, 'Individual', 'Enugu', '09036202766', 'No. 2 Umuezebi Orba road', '2021-12-14 20:01:15'),
(37, 'Allwell Okeke', '', 133, 'Individual', 'Anambra', '07084883702', 'Umuchiana, ekwulobia anambra state', '2021-12-15 15:32:52'),
(38, 'Obi izunna', '', 134, 'Individual', 'Enugu', '07054899287', 'Obe. Near Obe, 402109.', '2021-12-17 15:20:57'),
(39, 'Nnamani cornelius ', '', 135, 'Individual', 'Enugu', '09136602824', 'Loma Linda extension Enugu state ', '2021-12-29 17:25:28'),
(40, 'Onu Emeka', '', 136, 'Individual', 'Enugu', '08164841565', '20 Ozalla Street Achara Layout\r\nApt', '2022-01-01 15:04:25'),
(41, 'Ikenn', '', 137, 'Individual', 'Enugu', '07060531794', 'Enugu main', '2022-01-11 20:42:14'),
(42, 'Justine Ebuo', '', 138, 'Individual', 'Enugu', '09120989756', 'No 3 Nsude Street, Emene- Enugu close Santa Rosa Nursery school', '2022-01-16 12:32:58'),
(43, 'Ofoegbu Akujobi Anthony ', '', 139, 'Individual', 'Enugu', '08133336433', 'Aladinma ', '2022-01-19 04:36:16'),
(44, 'Chinonso Onuigbo', '', 141, 'Individual', 'Enugu', '08129523046', '8 nkponkiti street?', '2022-01-24 16:30:24'),
(45, 'Sunday nwonye', '', 142, 'Individual', 'Enugu', '08037790343', 'Okposi Ohaozara', '2022-01-24 17:52:17'),
(46, 'Chukwuemeka Adibe', '', 143, 'Individual', 'Enugu', '08103825806', '33 Mbanefo Street New Haven, Enugu', '2022-01-26 18:44:10'),
(47, 'Ngozi Neboh', '', 146, 'Individual', 'Enugu', '07058732138', '17 Coal City Garden GRA, Enugu', '2022-01-31 00:41:40'),
(48, 'john', '', 147, 'Individual', 'PH CITY', '08087884520', '1 dopemu agege street Lagos Badagry', '2022-04-17 18:00:12'),
(49, 'Chinonso Emmanuel', '', 148, 'Individual', 'Enugu', '08105733117', '184 Mary Emmanuel street, New GRA', '2022-04-23 18:31:24'),
(50, 'odubiyi oluwatobi', '', 149, 'Individual', 'Enugu', '07034973478', 'odubiyioluwatobi500@gmail.com', '2022-04-23 21:49:54'),
(51, 'Uche favour', '', 150, 'Individual', 'PH CITY', '07032482130', '10 conakry avenue', '2022-04-23 22:22:22'),
(52, 'Mike ola', '', 151, 'Individual', 'Enugu', '09033405101', 'No 28 cents coop estate ', '2022-04-24 15:21:32'),
(53, 'MR OBU CHRISTIAN ', '', 152, 'Individual', 'Enugu', '08088241983', 'OPPOSITE AMEKE HEALTH CENTRE ODUMA ANINRI LGA ENUGU STATE ', '2022-05-15 08:08:04'),
(54, 'Olorunfemi Bayode', '', 153, 'Individual', 'Enugu', '08036250267', 'No 3, Flat 4 ALMAGO Estate, Okpokoro Layout\r\nTwin House, 9th Mile corner, Amaeke, Ngwo', '2022-05-19 18:38:45'),
(55, 'Onyeka Animba ', '', 154, 'Individual', 'Enugu', '08125117346', '4 Enyiburuzo ', '2022-05-30 16:41:49'),
(56, 'Tobenna Ike', '', 155, 'Individual', 'Enugu', '09135918530', '10 nwandu street ocean oil\r\nAmechi road', '2022-06-06 11:08:37'),
(57, 'ADA DOOSE ', '', 156, 'Individual', 'Enugu', '07019100443', 'No 18 Osadebe Street', '2022-06-12 17:46:06'),
(58, 'Okeoma Adibe', '', 157, 'Individual', 'Enugu', '08103825806', 'No.1 Bethsaida Close (Off Ozubulu Street), Independence Layout, Enugu', '2022-06-16 00:41:00'),
(59, 'Ezeh Obinna', '', 158, 'Individual', 'Enugu', '08038577295', 'Zik avenue, Enugu', '2022-06-22 14:12:03'),
(60, 'Chijioke Ani', '', 159, 'Individual', 'Enugu', '08039228994', '196, OLD ABAKALIKI ROAD, EMENE', '2022-06-27 11:30:37'),
(61, 'Ejike Onah', '', 160, 'Individual', 'Enugu', '08034281555', '7B Okah Nnolim St. Edem Nike, Enugu East LGA, Enugu state.', '2022-06-30 09:37:28'),
(62, 'Erike Evangel', '', 161, 'Individual', 'Enugu', '07069572491', 'Nzimiro Street, Enugu.', '2022-07-03 18:55:38'),
(63, 'Jude', '', 162, 'Individual', 'Enugu', '08070817732', 'Abakaliki', '2022-07-22 22:00:02'),
(64, 'Ifemena Samuel ', '', 163, 'Individual', 'PH CITY', '08132612255', 'Epcl, ELEME, RIVERS STATE', '2022-08-21 01:56:39');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(12) NOT NULL,
  `customerid` int(12) DEFAULT NULL,
  `subscriptionid` int(12) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `seen` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `customerid`, `subscriptionid`, `type`, `message`, `seen`, `date`) VALUES
(1, 105, 31, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on January 1, 1970. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2021-08-27 14:37:41'),
(3, 87, 22, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on January 1, 1970. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2021-08-28 03:53:17'),
(5, 127, 42, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on October 9, 2021. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2021-09-09 14:39:07'),
(6, 127, 42, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on October 10, 2021. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2022-01-25 14:45:16'),
(7, 127, 42, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on October 10, 2021. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2022-01-28 08:54:24'),
(8, 127, 42, 'Email', 'Good day sir. This is to notify you that the internet subscription will expire on October 10, 2021. Kindly make payment to keep it connected. Thank you. T-wireless', '0', '2022-01-28 08:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `image`, `type`, `created`) VALUES
(2, 'Unlimited Fixed Wireless Internet Package', '17fc772.jpg', 'fixed', '2020-09-23 18:08:44'),
(3, 'Quota Package', '6cdaf95.jpg', 'quota', '2020-09-23 18:54:18'),
(4, 'Event Package', '3c5b6eb.jpg', 'event', '2020-09-23 19:01:44'),
(5, 'Unlimited Dedicated Speed Package', '0b9426a.jpg', 'dedicated', '2021-03-17 17:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` int(12) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `token`, `expiry`, `email`, `status`, `date`) VALUES
(0, '6a0a76788d45915d904c7b34082c899734fa3669', '86400', 'markomejeonline@gmail.com', 'pending', '2021-09-06 05:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(12) NOT NULL,
  `customerid` int(12) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `subscriptionid` int(12) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `receiptnumber` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `customerid`, `amount`, `subscriptionid`, `reference`, `status`, `receiptnumber`, `type`, `date`) VALUES
(28, 130, '90000', 44, '967cbc8b1b30e93d4a5a91ac9c10c1a0a2858452bf8dd', 'paid', '890370ab-082f-4e40-aab0-c6ced36e72a8', 'paystack', '2021-11-11 12:18:50'),
(26, 127, '105000', 42, NULL, 'paid', '3ab99405-3ff8-4963-bc5d-ae799933689e', 'admin', '2021-09-09 14:38:17'),
(27, 129, '77000', 43, '4387947cc58f613690c8bae6200c35653b25b914d4071', 'initialized', '0dc089aa-2545-44c9-994b-82dbc934aadc', 'paystack', '2021-11-05 23:49:37'),
(29, 131, '5000', 45, 'a89491bbd531c365b190a9040656701921104a8462b72', 'initialized', 'e04e00aa-c755-4c20-b18a-756036530e2f', 'paystack', '2021-11-28 02:17:25'),
(30, 133, '5000', 46, 'fabb0996b78bb2d3a52c1ad702bebd16ab67615105cdd', 'initialized', '68368f7a-5a45-4425-af6b-790fd7a3097b', 'paystack', '2021-12-15 15:38:43'),
(31, 139, '5000', 47, '01d54d0e954a8761dabc4a058a36be67909b83a525cf8', 'initialized', '6c2ffff1-0907-45e9-9262-b7b4f5735df2', 'paystack', '2022-01-19 15:03:39'),
(32, 139, '5000', 48, '1cd29e7e18328b15b1233e41311ada0476674edb83d24', 'initialized', '2a59c7a2-28e0-4310-bbaa-65604620a2e4', 'paystack', '2022-01-19 15:04:17'),
(33, 141, '77000', 49, '6c4e150d4d5c5204ff40e604bed78c63a9eb370ff8d01', 'initialized', '4c7eb07c-c87e-45a9-94c5-4228b4dd990a', 'paystack', '2022-01-24 16:34:03'),
(34, 143, '105000', 50, '3d96535df1d230c1a5c4eb860acb2595a3b9f4436a2d1', 'initialized', 'a30f9d79-00fb-4e49-85a7-7790452a5ad1', 'paystack', '2022-01-26 18:46:55'),
(35, 138, '5000', 51, 'd37303d19cf062c191ec180fa119dd86235e121fa0527', 'initialized', '54ad069d-9980-415d-a6cb-5d81e595bb4d', 'paystack', '2022-01-31 18:35:30'),
(36, 138, '77000', 52, '7c8d786eb05195dc4f4f7e4300275461b61280e58dce3', 'initialized', 'd0833d5c-3575-4fe8-98c0-3d588f7a0b2b', 'paystack', '2022-01-31 18:36:25'),
(37, 151, '5000', 53, '73f579b8c35646213a6a49172028c8cd2f9fba6a5c226', 'initialized', 'f36b87ca-f630-41e7-a8af-81f14cb47abf', 'paystack', '2022-04-24 15:24:38'),
(38, 163, '65000', 54, '466fe26b5e3a117723c6c60fc0a0b6d1e3c8328da0d25', 'initialized', 'e9d984e9-3ccf-4562-8132-9f880ae86753', 'paystack', '2022-08-21 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(12) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT NULL,
  `bandwidth` varchar(255) DEFAULT NULL,
  `connections` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `bundleid` int(12) DEFAULT NULL,
  `monthly` varchar(255) DEFAULT NULL,
  `packageid` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `size`, `speed`, `bandwidth`, `connections`, `duration`, `price`, `status`, `bundleid`, `monthly`, `packageid`, `created`) VALUES
(19, '0', '7mbps', 'Home package ', '1 - 4', '0', '85000', 'active', 0, '15000', '2', '2021-03-19 15:56:55'),
(20, '0', '15mbps', 'Business Mini', '4 - 8', '0', '85000', 'active', 0, '31000', '2', '2021-03-19 15:58:59'),
(21, '0', '20mbps', 'Business Pro', '9 - 12', '0', '85000', 'active', 0, '50000', '2', '2021-03-19 15:59:50'),
(22, '', '2Mbps', 'Unlimited', '', '', '150000', 'active', 0, '50000', '5', '2021-03-19 16:10:18'),
(23, '', '6Mbps', 'Unlimited', '', '', '100000', 'active', 0, '117000', '5', '2021-03-19 16:14:21'),
(25, '', '20Mbps ', 'Unlimited', '', '', '250000', 'active', 0, '380000 ', '5', '2021-03-19 20:44:56'),
(30, '75Gb', '', '', '', '', '15000', 'active', 1, '', '3', '2021-03-19 20:50:14'),
(31, '100Gb', '', '', '', '', '20000', 'active', 1, '', '3', '2021-03-19 20:51:37'),
(32, '125Gb', '', '', '', '', '25000', 'active', 3, '', '3', '2021-03-19 20:54:52'),
(33, '150Gb', '', '', '', '', '30000', 'active', 3, '', '3', '2021-03-19 20:55:35'),
(34, '250Gb', '', '', '', '', '50000', 'active', 3, '', '3', '2021-03-19 20:57:44'),
(37, '', '10Mbps', '', '', '24hours', '75000', 'active', 0, '', '4', '2021-03-19 21:13:15'),
(38, '', '4Mbps', 'Unlimited', '', '', '100000', 'active', 0, '80000', '5', '2021-03-20 15:01:53'),
(39, '', '10Mbps', 'Unlimited', '', '', '100000', 'active', 0, '190000', '5', '2021-03-20 15:04:58'),
(40, '0', '10mbps', 'Jumbo', '1-5', '0', '40000', 'active', 0, '25000', '2', '2022-07-31 19:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `rememberme`
--

CREATE TABLE `rememberme` (
  `id` int(12) NOT NULL,
  `userid` int(12) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `iat` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rememberme`
--

INSERT INTO `rememberme` (`id`, `userid`, `token`, `expiry`, `iat`, `date`) VALUES
(1, 82, '502910c40b1d6c443f01b7cdfaec8a0382dc3077453ca', '604800', '1623424160', '2021-06-11 16:09:20'),
(26, 129, 'd2e722965e47b58a9e1dd5d7206744ef98a6bbe71edd2', '604800', '1636134432', '2021-11-05 23:47:12'),
(27, 130, '87641275cf0661a9a667503d9f6bfa8cb815390cde06b', '604800', '1636611474', '2021-11-11 12:17:54'),
(28, 133, '6de72725ea957edca49f16b9164e136ba75036224bfbb', '604800', '1639560921', '2021-12-15 15:35:21'),
(30, 139, '3cd5e9503619d2717d5ee26b2734eb4e2711972ca2e1f', '604800', '1642582981', '2022-01-19 15:03:01'),
(34, 143, 'b310200fe3ef64f49d51b0b9e834406f26d25b6e04491', '604800', '1643201088', '2022-01-26 18:44:48'),
(37, 138, '1214bfad75b045bd6d19b5e97a0c6810e7a1d778dd28f', '604800', '1643632509', '2022-01-31 18:35:09'),
(39, 155, '9ec7bed1009a2975472a257a3ff64a17d3e822129d4a6', '604800', '1654506663', '2022-06-06 11:11:03'),
(41, 157, '8df6d281b440321226f9f3aace64854390557545d1e28', '604800', '1655494389', '2022-06-17 21:33:09'),
(42, 158, '1564cb96cb007ab666ba50bbb0e5812d29d033e6d2303', '604800', '1655900497', '2022-06-22 14:21:37'),
(43, 160, '5f4bfad61aa3def556806383c1dc0b303ab063235a0e0', '604800', '1656574885', '2022-06-30 09:41:25'),
(44, 161, '912b5a29aec92827a602dded841cfc6a7035a58293c7a', '604800', '1656867376', '2022-07-03 18:56:16'),
(45, 61, 'a675cdd45370383061064722e36eabf7b9895666064b3', '604800', '1658520944', '2022-07-22 22:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(12) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `planid` int(12) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `concurrentusers` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `serviceprovider` varchar(255) NOT NULL,
  `serviceinterest` text NOT NULL,
  `marketer` varchar(255) DEFAULT NULL,
  `additional` varchar(255) DEFAULT NULL,
  `intendedtime` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `fullname`, `planid`, `designation`, `email`, `phone`, `concurrentusers`, `address`, `state`, `serviceprovider`, `serviceinterest`, `marketer`, `additional`, `intendedtime`, `status`, `date`) VALUES
(31, 'Chikezie chinonso Christian', 19, 'Individual', 'nonsochikezie@gmail.com', '07064936074', '5', '24 nise street uwani ', 'Enugu', 'MTN', 'Data', '07064936074', NULL, '2021-11-01', NULL, '2021-10-27 15:12:48'),
(32, 'Ngozi Neboh', 19, 'Individual', 'ngozineboh17@gmail.com', '07058732138', '4', '17. Coal City Garden', 'Enugu', 'MTN', 'home package', 'Radio advert', NULL, '2022-02-01', NULL, '2022-01-31 00:59:34'),
(33, 'Uche favour', 19, 'Individual', 'contactfavour3@gmail.com', '07032482130', '3users', '10 umukolobia avenue', 'PH CITY', 'MTN', 'S', '07032482130', 'Starbou', '2022-04-23', NULL, '2022-04-23 22:20:59'),
(34, 'Tobenna Ike', 19, 'Individual', 'Tobennaike21@gmail.com', '09135918530', '5', '10 nwandu street ocean oil', 'Enugu', 'MTN', 'Browsing', NULL, 'T wireless ', '2022-07-31', NULL, '2022-06-06 11:07:33'),
(35, 'Tobenna Ike', 19, 'Individual', 'Tobennaike21@gmail.com', '09135918530', '5', '10 nwandu street ocean oil', 'Enugu', 'MTN', 'Browsing', NULL, 'T wireless', '2022-07-31', NULL, '2022-06-06 11:12:55'),
(36, 'Chukwudum Okoye', 19, 'Individual', 'chukwudumokoye8@gmail.com', '08033427616', '7', '13 Peter Azikiwe Drive pocket', 'Enugu', 'MTN', 'Unlimited internet services ', '               _', NULL, '2022-07-15', NULL, '2022-06-29 08:12:48'),
(37, 'Jeff Donald ', 19, 'Individual', 'smithleonard100@gmail.com', '08065269604', '5', '10 ukpata crescent; Golf estate.. Enugu', 'Enugu', 'MTN', 'Data ', NULL, 'H', '2022-08-12', NULL, '2022-08-12 15:12:54'),
(38, 'Daniel Chukwuebuka Ani', 19, 'Individual', 'cashmoneydonzaga@gmail.com', '08035206702', '3-5', '12 Ufuehi Street Emene', 'Enugu', 'MTN', '10,000', 'Daniel', NULL, '2022-09-01', NULL, '2022-08-16 18:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(12) NOT NULL,
  `productid` int(12) DEFAULT NULL,
  `userid` int(12) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(12) NOT NULL,
  `userid` int(12) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `userid`, `fullname`, `location`, `phone`, `status`, `date`) VALUES
(7, 140, 'Mark Omeje', 'Enugu', '08158212666', NULL, '2021-09-05 20:47:30'),
(19, 125, 'Achimalo Ikenna', 'Enugu', '07060531794', 'active', '2021-09-09 14:28:56'),
(20, 126, 'Elvis C. Umez', 'Enugu', '08163115394', 'active', '2021-09-09 14:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(12) NOT NULL,
  `statename` varchar(255) DEFAULT NULL,
  `userid` int(12) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `statename`, `userid`, `date`) VALUES
(1, 'PH CITY', 79, '2021-08-19 14:08:47'),
(2, 'Enugu', 79, '2021-08-19 14:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` int(12) NOT NULL,
  `station` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `addedby` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `station`, `ip`, `addedby`, `date`) VALUES
(2, 'Base Sector 2 ', '172.20.30.3', '79', '2021-08-20 15:19:38'),
(5, 'Base Sector 1', '172.20.30.2', '79', '2021-08-20 15:27:43'),
(6, 'Base Sector 3', '172.20.30.4', '79', '2021-09-04 10:23:34'),
(7, 'Solid Fm Sector 1', '172.20.30.7', '79', '2021-09-04 10:24:17'),
(8, 'Solid Fm Sector 2', '172.20.30.8', '79', '2021-09-04 10:24:45'),
(9, 'Solid Fm Sector 3', '172.20.30.9', '79', '2021-09-04 10:28:18'),
(10, 'Universal Sector 1 ', '172.20.30.12', '61', '2021-09-05 20:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(12) NOT NULL,
  `customerid` int(12) DEFAULT NULL,
  `startdate` varchar(255) DEFAULT NULL,
  `expirydate` varchar(255) DEFAULT NULL,
  `planid` int(12) DEFAULT NULL,
  `addedby` varchar(255) DEFAULT NULL,
  `router` varchar(255) DEFAULT NULL,
  `installationdate` varchar(255) DEFAULT NULL,
  `antenna` varchar(255) DEFAULT NULL,
  `polewirelength` varchar(255) DEFAULT NULL,
  `coordinate` varchar(255) DEFAULT NULL,
  `lastmile` varchar(255) DEFAULT NULL,
  `concurrentusers` varchar(255) DEFAULT NULL,
  `additionalinfo` text DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `customerid`, `startdate`, `expirydate`, `planid`, `addedby`, `router`, `installationdate`, `antenna`, `polewirelength`, `coordinate`, `lastmile`, `concurrentusers`, `additionalinfo`, `amount`, `date`) VALUES
(51, 138, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2022-01-31 18:35:28'),
(52, 138, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '77000', '2022-01-31 18:36:25'),
(49, 141, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '77000', '2022-01-24 16:34:02'),
(50, 143, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '105000', '2022-01-26 18:46:53'),
(47, 139, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2022-01-19 15:03:34'),
(48, 139, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2022-01-19 15:04:17'),
(42, 127, '2021-09-10', '2021-10-10', 21, '61', 'Twireless router', '2021-09-09', 'Lite Beam 5ac gen2', '5', '6.4686533,7.5039713', '9', '16', NULL, '105000', '2021-09-09 14:38:15'),
(43, 129, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '77000', '2021-11-05 23:49:36'),
(44, 130, '2021-11-11', '2021-12-11', 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '90000', '2021-11-11 12:18:49'),
(45, 131, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2021-11-28 02:17:24'),
(46, 133, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2021-12-15 15:38:42'),
(53, 151, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5000', '2022-04-24 15:24:38'),
(54, 163, NULL, NULL, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65000', '2022-08-21 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `enabled` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `enabled`, `token`, `picture`, `status`, `date`) VALUES
(61, 'admin@twireless.ng', '$2y$10$jyN36YgOooB0PkQgwmq56ulSbjZrcG3l6gwJHBinpeC8HnLoFj4s2', 'admin', NULL, NULL, NULL, 'active', '2020-09-26 12:49:53'),
(125, 'ikenna@taprap.net', '', 'superadmin', NULL, 'b3389d5d0ace1cf86af8f53b8a0d8e333a1116166d49c', NULL, 'inactive', '2021-09-09 14:28:56'),
(126, 'elvis.umez@taprap.net', '', 'admin', NULL, 'ec708322dc597c96eb711b176abe189bf26389b49c3e2', NULL, 'inactive', '2021-09-09 14:31:46'),
(127, 'scopes2kiko@yahoo.com', NULL, 'customer', NULL, '09ce5a4665e6f559db0a825fa98638e17f318efb94c72', NULL, 'inactive', '2021-09-09 14:32:25'),
(128, 'iemembolu@gmail.com', '$2y$10$rAsGQysxzerQ9A0zZJA1S.lfpNMalk7eRiuExe5XmD1COJqOP2qTa', 'customer', NULL, '8403c681849b6b4ff8325878a5ee306f674f6a0af385b', NULL, 'inactive', '2021-10-17 20:42:18'),
(129, 'basilmmadukolu@gmail.com', '$2y$10$Kxh/OUuBhR9s2e03yvMGTu6u5EBMj6EoVEnoehm7hZ9pxp6lxqdb6', 'customer', NULL, NULL, NULL, 'active', '2021-11-05 23:43:19'),
(130, 'ghideexl@gmail.com', '$2y$10$QkZmKBzQaSqRyt.Ycu/0C.r7OYjCRIXkjq7TKVQ4jwhg3HFrgmri.', 'customer', NULL, NULL, NULL, 'active', '2021-11-11 12:16:35'),
(131, 'sidjrn@gmail.com', '$2y$10$C1U1qoO0Vr.LQ2OH0E0HpuiPqRRwakTer1GpBlwnet3BFvZY0zhEm', 'customer', NULL, NULL, NULL, 'active', '2021-11-28 02:13:42'),
(132, 'ezehmark@gmail.com', '$2y$10$WU/NyxEcPjwH7kpx9cYg0.hvKzcFxeqI7Kt7S7nnpACNAVnx/W9yK', 'customer', NULL, 'd8f1ba6bb1b064a2cc91d6d8ba3bbc1cafe71e44ad37e', NULL, 'inactive', '2021-12-14 20:01:15'),
(133, 'allwellokeke2002@gmail.com', '$2y$10$o2Yhknw1dK154QyaOld7BuPaNH.n7yK2evqf4uxj2eFUWo3fxf9N.', 'customer', NULL, NULL, NULL, 'active', '2021-12-15 15:32:52'),
(134, 'obiizunnaemmanuel@gmail.com', '$2y$10$hlt3i39f3iflJP235U/6nOpr75fD0RXVPma5YY4iETX/PVpCYNmWW', 'customer', NULL, '4faf8b486e16c9a3ac1aa9a6482956a27647782523cc0', NULL, 'inactive', '2021-12-17 15:20:57'),
(135, 'corneliusemeka8@gmail.com', '$2y$10$J.Jc4U/FE8BH4vhMXSpw4uDFMk1n/bVpMahfO1gfto5LVAQvKuGEy', 'customer', NULL, NULL, NULL, 'active', '2021-12-29 17:25:28'),
(136, 'emekaonu7@gmail.com', '$2y$10$p2Cgjo9Ryy171ZMzTV6TBO/ej59yxeGSs6kpCRKfBVEZfhS/SxeM2', 'customer', NULL, NULL, NULL, 'active', '2022-01-01 15:04:25'),
(137, 'achimore@icloud.com', '$2y$10$0TKAWoSqvH0dZm12hIMXX./4hQ0kgHpFYMytFWnZf8vRcHIsSVstu', 'customer', NULL, 'b3c375d848201ec5b61d1675f23a61b89a83d8da41177', NULL, 'inactive', '2022-01-11 20:42:14'),
(138, 'ebuojustine@gmail.com', '$2y$10$9LFfph4ThwI9S8o8ljgZeuqgYzAazekY05i7/OPSR7Iche9cbf59q', 'customer', NULL, NULL, NULL, 'active', '2022-01-16 12:32:58'),
(139, 'Akujobi.ofoegbu@yahoo.com', '$2y$10$c6kcqfYuzJPQSOY51KadEe1jXF6PWynrGS.xu8uHrDkFLhkjVliiy', 'customer', NULL, NULL, NULL, 'active', '2022-01-19 04:36:16'),
(140, 'user@user.io', '$2y$10$.UW8KN60QvrCUIP0dxrnqO1IAqBvSuZHCbLS3KLZHbwKLyNyLu.dK', 'admin', NULL, NULL, NULL, 'active', '2022-01-22 06:40:01'),
(141, 'inkrebelo@gmail.com', '$2y$10$1L2755d2U7WXJS9IL.Vx7uwgXwAxywttRusSvnFghSWNnu4ada14.', 'customer', NULL, NULL, NULL, 'active', '2022-01-24 16:30:24'),
(142, 'nwonyesundayo@gmail.com', '$2y$10$f9W2YAM3Ku9SUrg3b.6jYesvyszQfA5ieVzOWco7RKCrboFohQLlm', 'customer', NULL, NULL, NULL, 'active', '2022-01-24 17:52:17'),
(143, 'okeomaadibe@gmail.com', '$2y$10$zjrphRwFR/tX8Onf9CNH..e36xDwr4l.SIUQifrFP64VUToo0FJWm', 'customer', NULL, NULL, NULL, 'active', '2022-01-26 18:44:10'),
(146, 'ngozineboh17@gmail.com', '$2y$10$8mKHmdqhOZQrBfsRHE66me2QrNtbrW8w8qo1A2d7x1asDVQ/f1tia', 'customer', NULL, NULL, NULL, 'active', '2022-01-31 00:41:40'),
(147, 'johnkelly@gmail.com', '$2y$10$xpWHppbVyqrjOQWRNblBmuelyZKqCrGDxmWbHrs1Akgmk1ygwu0Lm', 'customer', NULL, '4267779c406469e39ec2a86962cde3a21b36b59a61a22', NULL, 'inactive', '2022-04-17 18:00:12'),
(148, 'gentility133@gmail.com', '$2y$10$XtEft5IGWbSvYTL6u0XUh.KpFtIf6QqzekZLQDmXvlDkd6aIlTIqW', 'customer', NULL, NULL, NULL, 'active', '2022-04-23 18:31:24'),
(149, 'odubiyioluwatobi500@gmail.com', '$2y$10$R1fxkir2jH52M.rcGrhHHe08I3RnYVmxXf1EUfaTkQMFGQckUdx2m', 'customer', NULL, 'a2858a445200a6dd1ecb1005af968e4fb67b618362de3', NULL, 'inactive', '2022-04-23 21:49:54'),
(150, 'contactfavour3@gmail.com', '$2y$10$kVytuYDdmUrdx8Fzz/RW2eI8kA8C/hEsEViFUHL1Qc7QPKCPPuZ8S', 'customer', NULL, NULL, NULL, 'active', '2022-04-23 22:22:22'),
(151, 'mikeolagoke27@gmail.com', '$2y$10$mOItvYqmn1JvpqWRw/1zUe0Q.WP7X6qCIhtzmUBXFjaHsP9/Qgfcm', 'customer', NULL, NULL, NULL, 'active', '2022-04-24 15:21:32'),
(152, 'obuccoduma@gmail.com', '$2y$10$9acap144daB.1C0JiBh7DORvyByuF0/njrqte1SFIYD/syRYlfdEe', 'customer', NULL, NULL, NULL, 'active', '2022-05-15 08:08:04'),
(153, 'bayodeo1@gmail.com', '$2y$10$G9YtWcPDFEs3C9SMSRSvDOLYp6cfy2xezXRbcbIY/pDrJWNLDRAky', 'customer', NULL, '2b61748c62923e368b5607f9252877a257e94d582a629', NULL, 'inactive', '2022-05-19 18:38:45'),
(154, 'orbrixlights216@gmail.com', '$2y$10$j9vnlRwryfwAF6HXxrFHVem/s9MNgKCLfN3MZTIoHyWir/FA9ZW1m', 'customer', NULL, '8a6c5fbc2dfc024dafd6ee2677da94b6580681f67afeb', NULL, 'inactive', '2022-05-30 16:41:49'),
(155, 'Tobennaike21@gmail.com', '$2y$10$P9byj0sD8eNhSdTgT0xeauuUbXDaG9sKEZi1EWzbS8G5npsPdRK6i', 'customer', NULL, NULL, NULL, 'active', '2022-06-06 11:08:37'),
(156, 'britneynikko@gmail.com', '$2y$10$rinrvl88/i/HLs37K9mI3OKu4VclvxTgrCfArsXz9y20ooTc6p66S', 'customer', NULL, NULL, NULL, 'active', '2022-06-12 17:46:06'),
(157, 'projectsgroupng@gmail.com', '$2y$10$epudBg/6QYl7peCiZdjMUe6ic7Ppp7wx2TpLcPMnS9mT.7IxTx7Na', 'customer', NULL, NULL, NULL, 'active', '2022-06-16 00:41:00'),
(158, 'obinnaice@gmail.com', '$2y$10$yl7LsnbYYyLGxdYVwQNgfe6W6sC.C0y4pH0rI96kZyB/yZo/d3NHW', 'customer', NULL, NULL, NULL, 'active', '2022-06-22 14:12:03'),
(159, 'chijiokeani@gmail.com', '$2y$10$VgnvIfKUr3BahKMmHOzXa.Ye2bmgtO.fwONJawY.Ql62f33E485gu', 'customer', NULL, '3c8202afa8a4df1535bd36706e9991738a905b2c80c16', NULL, 'inactive', '2022-06-27 11:30:37'),
(160, 'ejaikonah@gmail.com', '$2y$10$DheA7/ZPQT4AlO24./qB2unat2mCN98lgFpjZQfcFzmGdWjNcCfma', 'customer', NULL, NULL, NULL, 'active', '2022-06-30 09:37:28'),
(161, 'ozerike@gmail.com', '$2y$10$JYd1iRJUjmAG2sLF21lUU.zyYU1xkSjPyNpwD/Pg7wcFc3mWCjcC.', 'customer', NULL, NULL, NULL, 'active', '2022-07-03 18:55:38'),
(162, 'owezjudel@gmail.com', '$2y$10$zvwV.86gmn2Fa3kd3X4ALedKSc9wFMT4nwutukizaWbmweq6CsE1e', 'customer', NULL, '6bbe057605fd0882229c144d3d62f1c2f7e452d79a975', NULL, 'inactive', '2022-07-22 22:00:02'),
(163, 'samuel.ifemena@gmail.com', '$2y$10$rZYAoVTnQihIDX6TiQc3FeOSDvYXHz4M5mAbjG9CMXLJWuwtDVbpK', 'customer', NULL, NULL, NULL, 'active', '2022-08-21 01:56:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rememberme`
--
ALTER TABLE `rememberme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `rememberme`
--
ALTER TABLE `rememberme`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
