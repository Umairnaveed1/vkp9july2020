-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 01:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminexpence`
--

CREATE TABLE `adminexpence` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `charge_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge_amount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commit` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onhold` int(11) NOT NULL DEFAULT '0',
  `charge_agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminexpence`
--

INSERT INTO `adminexpence` (`id`, `charge_type`, `charge_date`, `charge_amount`, `commit`, `onhold`, `charge_agent_id`, `created_at`, `updated_at`) VALUES
(4, '1', '03/11/2020', '566', NULL, 0, 2, '2020-03-27 17:06:21', '2020-03-27 17:06:21'),
(6, '1', '2020-03-19', '122', NULL, 0, 2, '2020-03-27 17:47:14', '2020-03-27 17:47:14'),
(14, 'Please select', '2020-03-19', '4', NULL, 0, 1, '2020-03-30 17:05:51', '2020-03-30 17:05:51'),
(18, '3', '2020-04-09', '122', NULL, 0, 2, '2020-03-30 19:39:16', '2020-03-30 19:39:16'),
(21, 'OFFICE FEE', '04/17/2020', '54', 'Flyer Stands', 1, 1, '2020-04-17 18:13:52', '2020-04-17 18:13:52'),
(22, 'OFFICE FEE', '04/21/2020', '5000', 'Flyer Standlkjkls', 0, 1, '2020-04-20 08:01:52', '2020-04-20 08:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `adminform`
--

CREATE TABLE `adminform` (
  `id` int(11) NOT NULL,
  `form_name` varchar(100) NOT NULL,
  `document` varchar(250) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminform`
--

INSERT INTO `adminform` (`id`, `form_name`, `document`, `user_type`, `created_at`, `updated_at`) VALUES
(30, 'jkjkjkjkjk;;ll;l', '1438317418.docx', 'admin', '2020-04-02 09:51:47', '2020-04-02 09:51:47'),
(31, 'jkjkjkjkjk;;ll;llll', '445036356.docx', 'admin', '2020-04-02 09:52:06', '2020-04-02 09:52:06'),
(32, 'sasa', '1446248755.docx', 'agent', '2020-04-03 15:36:00', '2020-04-03 15:36:00'),
(33, 'sasa', '481685902.docx', 'agent', '2020-04-03 15:36:03', '2020-04-03 15:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `agentcompanyfiles`
--

CREATE TABLE `agentcompanyfiles` (
  `id` int(11) NOT NULL,
  `file` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `companymanagment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agentcompanyfiles`
--

INSERT INTO `agentcompanyfiles` (`id`, `file`, `companymanagment_id`, `user_id`) VALUES
(1, '823322410.docx', 12, 6),
(2, '928383901.docx', 13, 6),
(3, '923583702.docx', 17, 6),
(4, '1172258486.pdf', 18, 1),
(5, '133484076.pdf', 19, 1),
(6, '156823182.xls', 20, 1),
(7, '1770950620.xls', 21, 6),
(8, '2080246606.docx', 23, 6);

-- --------------------------------------------------------

--
-- Table structure for table `agentinvoicecount`
--

CREATE TABLE `agentinvoicecount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `countdate` datetime NOT NULL,
  `invoicenum` int(11) NOT NULL,
  `invoicecount` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agentnotes`
--

CREATE TABLE `agentnotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agentnote` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnoted` tinyint(1) NOT NULL,
  `agentnott` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agentnotes`
--

INSERT INTO `agentnotes` (`id`, `agentnote`, `agentnotes`, `agentnoted`, `agentnott`, `user_id`, `agent_id`, `document`, `created_at`, `updated_at`) VALUES
(4, '04/09/2020', 'eee', 0, '14:22', 1, 1, 'agent_notes1126128621.docx', '2020-04-17 18:16:18', '2020-04-17 18:16:18'),
(5, '04/01/2020', 'test', 0, '13:00', 1, 1, 'agent_notes1824558788.jpg', '2020-04-17 18:55:46', '2020-04-17 18:55:46'),
(6, '04/29/2020', 'sadasdas', 0, '14:22', 1, 1, 'agent_notes153068278.docx', '2020-04-17 18:59:50', '2020-04-17 18:59:50'),
(7, '04/01/2020', 'test', 0, '13:00', 1, 1, 'agent_notes1349101189.jpg', '2020-04-17 19:05:29', '2020-04-17 19:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `agentrulessetup`
--

CREATE TABLE `agentrulessetup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `officemanager` tinyint(1) NOT NULL,
  `wpsplitonly` tinyint(1) NOT NULL,
  `gossfiftyp` tinyint(1) NOT NULL,
  `splitbwtwo` tinyint(1) NOT NULL,
  `rule1` tinyint(1) NOT NULL,
  `rule2` tinyint(1) NOT NULL,
  `rule3` tinyint(1) NOT NULL,
  `rule4` tinyint(1) NOT NULL,
  `rule5` tinyint(1) NOT NULL,
  `rule6` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agentfirstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentlastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentdisplayname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentcellphone` int(11) NOT NULL,
  `agenthome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentAltNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentofficeno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agenthiredate` datetime NOT NULL,
  `agentover` tinyint(1) NOT NULL DEFAULT '0',
  `agentadve` tinyint(1) NOT NULL DEFAULT '0',
  `invoice_date` datetime NOT NULL,
  `agentsocial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AgentDate` datetime NOT NULL,
  `agentemail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `agentsever` datetime NOT NULL,
  `agentInAct` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agentfirstname`, `agentlastname`, `agentdisplayname`, `agentcellphone`, `agenthome`, `agentAltNo`, `agentofficeno`, `agenthiredate`, `agentover`, `agentadve`, `invoice_date`, `agentsocial`, `AgentDate`, `agentemail`, `agentaddress`, `zipcode_id`, `agentsever`, `agentInAct`, `user_id`, `created_at`, `updated_at`, `state_id`, `city_id`, `country_id`) VALUES
(1, 'fausaisuiasuiu test', 'agentlastname', 'dis1', 89789, 'jkh', '786', '1', '2020-04-15 00:00:00', 0, 0, '2020-04-15 00:00:00', 'jkh', '2020-04-08 00:00:00', 'gg@gmail.com', 'jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh jhjh', 6, '2020-04-15 00:00:00', 2, 1, NULL, '2020-04-17 18:49:39', 1, 1, 1),
(3, 'Aleen', 'Barton', 'beth88', 9080883, '33020 Aurelia Shore Suite 355\nSouth Dagmar, NY 62039-8641', '6', '5743', '2008-04-04 08:25:06', 0, 4, '0000-00-00 00:00:00', 'p', '2016-06-22 01:09:53', 'juston04@breitenberg.com', '36463 Nolan Walk Apt. 571\nPort Dandre, CA 15275', NULL, '2013-03-21 07:29:42', 1, 3, NULL, NULL, 1, 1, 0),
(4, 'Dexter', 'Brown', 'fgrimes', 2364, '6641 Schaefer Bypass Apt. 402\nPort Lisandro, NE 11928-5860', '9', '14', '1985-09-12 08:16:38', 0, 8, '0000-00-00 00:00:00', 'q', '2019-07-23 17:44:38', 'eli92@leannon.info', '210 Karen Parkways\nNew Kitty, IL 73620-7200', NULL, '1973-12-18 12:32:57', 0, 8, NULL, NULL, 1, 1, 0),
(5, 'Ivory', 'Lang', 'rempel.oral', 95, '109 Green Ridges Apt. 339\nSouth Rocio, ID 11320', '6', '43', '1985-11-28 15:09:27', 0, 0, '0000-00-00 00:00:00', 'k', '2003-02-28 21:40:13', 'kenyon.skiles@gmail.com', '41108 Brenna Terrace\nNorth Shanon, WY 60485-0236', NULL, '1997-09-17 05:40:46', 1, 9, NULL, NULL, 1, 1, 0),
(6, 'Aubrey', 'Lubowitz', 'marco51', 474178467, '676 Cleve Ridge\nSimonisberg, VA 42629', '1', '6', '1985-11-11 22:34:51', 0, 6, '0000-00-00 00:00:00', 'i', '2020-02-25 11:18:57', 'dwight25@hand.biz', '709 Omari Corner\nSouth Wayne, NJ 44495', NULL, '2012-05-10 04:37:27', 0, 5, NULL, NULL, 1, 1, 0),
(7, 'Osvaldo', 'Kuhlman', 'ross.rau', 2665159, '6118 Marielle Ferry\nFranciscaport, MS 67108', '9', '474236', '2006-05-25 03:24:30', 1, 3, '0000-00-00 00:00:00', 'p', '2016-10-07 17:41:12', 'glarson@hotmail.com', '490 Lindgren Alley\nNew Isaiaschester, LA 75289-2930', NULL, '1984-03-26 11:09:04', 0, 2, NULL, NULL, 1, 1, 0),
(8, 'Carolina', 'Kub', 'pdietrich', 7689, '13405 Fisher Courts\nCorineview, TX 74261-6496', '8', '419167725', '2007-01-27 16:20:31', 1, 0, '0000-00-00 00:00:00', 't', '2008-11-29 13:21:02', 'xfisher@mayer.net', '46838 Larkin Fords Suite 055\nMadisonburgh, MS 92155', NULL, '1997-12-12 18:33:13', 0, 15, NULL, NULL, 1, 1, 0),
(9, 'Dolores', 'Parisian', 'mmaggio', 6139, '59098 Tess Loop Suite 829\nPort Philipfort, AZ 57787-2272', '6', '674684894', '2016-10-09 01:02:57', 1, 0, '0000-00-00 00:00:00', 'x', '2011-11-14 18:54:32', 'modesto67@moore.com', '578 Schultz Turnpike Apt. 827\nLaviniaburgh, OK 51951', NULL, '1997-10-28 11:07:07', 1, 5, NULL, NULL, 1, 1, 0),
(10, 'Bulah', 'Kulas', 'demarcus39', 364861861, '45280 Fritsch Springs\nLake Freeda, NY 65645', '7', '177', '1981-11-10 14:15:07', 1, 6, '0000-00-00 00:00:00', 't', '1997-04-05 06:03:18', 'lemke.retta@murazik.info', '672 Boyle Unions\nPort Troytown, GA 86439', NULL, '1979-01-09 17:32:38', 0, 6, NULL, NULL, 1, 1, 0),
(11, 'Eudora', 'Predovic', 'curt29', 42335464, '9647 Ursula Point Suite 008\nMillerborough, NY 49700-9264', '7', '1263', '1993-09-01 02:11:50', 0, 8, '0000-00-00 00:00:00', 'x', '1996-03-03 10:14:12', 'fisher.avis@yahoo.com', '512 McCullough Fork\nRileyville, ND 01468-8117', NULL, '2017-04-19 18:19:27', 1, 1, NULL, NULL, 1, 1, 0),
(13, 'Arvilla', 'Kemmer', 'ubecker', 5775619, '415 Spencer Stream\nBraunshire, HI 34850-2396', '4', '4', '1986-11-08 17:49:20', 1, 5, '0000-00-00 00:00:00', 'e', '2011-10-27 23:23:47', 'cgorczany@hotmail.com', '4579 Stark Heights Suite 404\nAylinton, AK 69199-9390', NULL, '1972-09-02 21:48:52', 1, 10, NULL, NULL, 1, 1, 0),
(14, 'Reilly', 'Johnson', 'lue06', 3887, '80988 Bartell Spurs\nAshaland, NJ 06353', '4', '834249657', '2012-01-19 20:41:31', 0, 5, '0000-00-00 00:00:00', 'r', '1987-08-08 17:29:45', 'raymond.gaylord@hotmail.com', '97146 Felipe Mountains Apt. 253\nLake Rupertstad, NH 06646', NULL, '2007-04-17 18:42:39', 1, 17, NULL, NULL, 1, 1, 0),
(15, 'Kaia', 'Dicki', 'douglas.sanford', 877, '2464 Keebler Lodge\nSouth Elmira, NC 82673', '4', '7808', '2019-01-19 06:23:19', 0, 7, '0000-00-00 00:00:00', 'd', '1994-12-04 19:51:36', 'citlalli00@stracke.com', '39607 Eugenia Highway Apt. 135\nMayerberg, AK 19932', NULL, '1973-01-28 03:00:27', 1, 12, NULL, NULL, 1, 1, 0),
(16, 'Simone', 'Keebler', 'chaim.feil', 8, '467 Toney Rapids Suite 858\nNew Tianna, AL 24538', '9', '21059', '2011-04-09 02:17:06', 0, 7, '0000-00-00 00:00:00', 'f', '1989-07-19 16:59:52', 'sandy33@hotmail.com', '863 Huel Junctions Suite 225\nSchummfurt, PA 01774-1526', NULL, '2009-11-17 07:01:45', 0, 16, NULL, NULL, 1, 1, 0),
(17, 'Callie', 'Hansen', 'schaefer.gardner', 7609876, '44447 Buckridge Lakes Suite 226\nWillardhaven, NY 26468-0856', '8', '89638791', '1970-12-17 07:01:36', 0, 3, '0000-00-00 00:00:00', 'v', '2018-05-04 18:35:11', 'emerald53@hotmail.com', '35100 Schaefer Oval\nEraport, SD 67844-6728', NULL, '1975-06-09 00:19:21', 0, 13, NULL, NULL, 1, 1, 0),
(18, 'Samson', 'Williamson', 'grady.evans', 22, '721 Summer Street Suite 907\nNorth Fredy, WV 81197-4758', '6', '79942', '1985-01-15 14:21:01', 0, 3, '0000-00-00 00:00:00', 'a', '1992-06-04 23:46:41', 'sierra.donnelly@brekke.com', '8981 Pedro Port\nCiceromouth, SC 63013-6654', NULL, '1989-08-19 22:04:56', 1, 14, NULL, NULL, 1, 1, 0),
(19, 'Khalid', 'Howell', 'lgislason', 292906246, '7097 Veum Center Suite 048\nNorth Stanley, WV 19277', '6', '67610673', '2019-08-20 20:33:23', 0, 5, '0000-00-00 00:00:00', 'w', '1971-11-10 20:13:34', 'moriah33@barrows.info', '62684 Welch Way Suite 586\nGloriaside, AZ 95092-8563', NULL, '2009-03-14 04:53:09', 0, 17, NULL, NULL, 1, 1, 0),
(20, 'Jayda', 'Hackett', 'alexanne10', 29862, '5433 Gianni Drive Suite 175\nEast Virgilview, OR 90469', '3', '3841', '1975-07-20 21:16:29', 0, 7, '0000-00-00 00:00:00', 'y', '2017-02-14 03:52:02', 'evan.heaney@anderson.com', '5767 Kuphal Light Apt. 678\nBertafort, ME 64802-4199', NULL, '1975-01-24 08:01:43', 0, 20, NULL, NULL, 1, 1, 0),
(21, 'Cecelia', 'Jerde', 'kenna60', 17127764, '889 Terry Rapid\nNew Khalid, NC 36531-3931', '7', '504041870', '2017-02-21 09:29:16', 0, 1, '0000-00-00 00:00:00', 'x', '1988-05-17 13:30:55', 'althea.mills@gmail.com', '240 Hermiston Brooks Suite 547\nNewellmouth, NV 47439', NULL, '1979-08-13 07:03:04', 1, 23, NULL, NULL, 1, 1, 0),
(22, 'Darien', 'Kris', 'alison.mcglynn', 3210519, '157 Elizabeth Walks\nAudramouth, NE 06528', '1', '6972472', '1977-02-18 10:33:46', 0, 0, '0000-00-00 00:00:00', 's', '1971-10-29 03:35:08', 'emmett.okuneva@daniel.com', '66840 Ramiro Dale Apt. 229\nDaphneefort, OH 26302', NULL, '2018-03-23 15:38:54', 0, 22, NULL, NULL, 1, 1, 0),
(23, 'Karen', 'Hirthe', 'reggie20', 844932082, '6421 Guiseppe Plaza\nLake Presleymouth, HI 65668', '1', '5550730', '2010-01-27 10:23:59', 0, 8, '0000-00-00 00:00:00', 'c', '1973-09-14 08:05:51', 'alisha64@turner.com', '1769 Shaniya Mews Suite 325\nEast Anthony, MS 09393-6024', NULL, '1996-01-06 18:33:44', 1, 18, NULL, NULL, 1, 1, 0),
(24, 'Clifford', 'Moen', 'rkautzer', 4, '17513 Magdalena Alley Apt. 647\nGissellefort, MN 16835', '1', '8097791', '1970-10-31 09:25:13', 0, 6, '0000-00-00 00:00:00', 'r', '2012-04-28 07:32:11', 'cassidy35@hotmail.com', '864 Mekhi Via\nWest Norval, CT 85929-5798', NULL, '1981-01-18 02:22:56', 1, 11, NULL, NULL, 1, 1, 0),
(25, 'Johnnie', 'Smith', 'marlin.johnson', 783040592, '79743 Everette Crossing Suite 544\nAdeliaburgh, HI 61126-0101', '5', '4', '1981-03-19 01:05:47', 0, 6, '0000-00-00 00:00:00', 'b', '1984-05-15 17:53:12', 'jlang@hotmail.com', '3306 Mellie Village\nAlvisside, VT 58541-7386', NULL, '1979-09-21 10:33:07', 1, 8, NULL, NULL, 1, 1, 0),
(26, 'Tina', 'Batz', 'mlind', 7412, '3445 Kemmer Trafficway Suite 405\nEast Ineston, CT 36663', '3', '620388', '1998-09-06 09:43:57', 0, 2, '0000-00-00 00:00:00', 'z', '1974-03-30 06:07:26', 'crona.jaylan@johnson.biz', '9694 Sonya Hill Suite 934\nMauricemouth, VA 47549-3403', NULL, '1987-12-12 20:19:03', 1, NULL, NULL, NULL, 1, 1, 0),
(27, 'Kenya', 'DuBuque', 'kacey45', 9097524, '42780 Yasmeen Isle\nSouth Lindaside, SD 43688-5676', '2', '7518724', '1990-10-14 00:49:52', 1, 2, '0000-00-00 00:00:00', 'u', '2017-08-21 13:38:08', 'meta06@hotmail.com', '33357 Marvin Highway\nAlvertastad, PA 43285', NULL, '1971-10-12 12:28:16', 0, 25, NULL, NULL, 1, 1, 0),
(28, 'Rodger', 'Schiller', 'christelle53', 474, '895 Moore Fields\nEast Elwinview, VA 79720-4963', '7', '52', '2001-08-31 20:45:38', 1, 3, '0000-00-00 00:00:00', 'y', '1976-01-04 18:38:34', 'cali51@hotmail.com', '8424 Haley Fords\nBrakusstad, OR 07084', NULL, '1977-12-16 20:39:10', 1, NULL, NULL, NULL, 1, 1, 0),
(29, 'Everardo', 'Predovic', 'glemke', 334901242, '745 Kub Road Apt. 802\nWest Hubertchester, TN 09868-3047', '3', '9', '2003-10-25 18:10:58', 1, 2, '0000-00-00 00:00:00', 'v', '1997-10-13 07:36:17', 'agustin.kautzer@yahoo.com', '695 Thiel Trafficway\nFeestside, AK 73457', NULL, '2007-06-25 14:18:12', 1, NULL, NULL, NULL, 1, 1, 0),
(30, 'Makayla', 'Goldner', 'shamill', 272, '84823 Skiles Walks Apt. 748\nPort Justiceborough, TX 97484', '3', '546', '1982-06-20 18:00:16', 1, 4, '0000-00-00 00:00:00', 'i', '1999-03-24 22:10:06', 'graham.merl@kulas.com', '5912 Rowe Cliffs\nLeuschkeview, CO 06417', NULL, '2017-10-25 06:48:48', 0, NULL, NULL, NULL, 1, 1, 0),
(31, 'Jeremie', 'Bruen', 'nasir70', 569278, '41877 O\'Kon Mountain Apt. 151\nJerrodhaven, NY 10509', '7', '9644494', '2019-04-25 18:45:20', 0, 4, '0000-00-00 00:00:00', 'd', '1996-01-08 11:36:54', 'izaiah.funk@yahoo.com', '4319 Junior Harbor Suite 298\nPort Fordshire, CT 74213', NULL, '1987-07-11 23:09:44', 0, NULL, NULL, NULL, 1, 1, 0),
(32, 'Melyna', 'Dibbert', 'xondricka', 545313, '8574 Schimmel Spring Apt. 427\nEast Catharinemouth, TN 29236-4161', '7', '516068', '2011-08-24 18:05:27', 1, 5, '0000-00-00 00:00:00', 'n', '2010-07-30 12:30:04', 'dwyman@yahoo.com', '8696 Gutkowski Hill Suite 333\nTurcotteport, DE 64450', NULL, '1975-02-04 06:43:11', 1, NULL, NULL, NULL, 1, 1, 0),
(33, 'Natalie', 'Rogahn', 'rnolan', 56, '67132 Rebekah Forges\nBentonland, NH 65365', '6', '3', '1993-02-17 11:50:16', 0, 4, '0000-00-00 00:00:00', 'm', '1993-07-11 19:03:00', 'gage61@homenick.com', '983 Shayne Pines\nEast Garry, OK 23238-5317', NULL, '2019-09-19 08:02:17', 1, NULL, NULL, NULL, 1, 1, 0),
(34, 'Eden', 'Langosh', 'wstracke', 589578, '79944 Keebler Fords\nSouth Jameyborough, AZ 99728', '1', '8', '1993-07-11 20:05:56', 0, 9, '0000-00-00 00:00:00', 'y', '2014-11-22 15:47:48', 'kennedy.ritchie@murray.com', '281 Sipes Forest\nWest Johnathanmouth, GA 22541', NULL, '2000-02-11 04:51:38', 1, NULL, NULL, NULL, 1, 1, 0),
(35, 'Myrtice', 'Toy', 'flatley.arlie', 753741249, '72052 Retha Flats\nNew Jordyfurt, NV 11396', '2', '5', '2020-03-11 20:47:59', 1, 0, '0000-00-00 00:00:00', 'k', '2008-01-29 05:26:09', 'schaden.laila@hotmail.com', '6339 Natalia Estates Suite 542\nFramiburgh, MN 18391', NULL, '2006-06-04 03:02:39', 0, NULL, NULL, NULL, 1, 1, 0),
(36, 'Orion', 'Hand', 'ruth.hermann', 239708, '252 Alda Mountains Apt. 860\nVedafurt, NE 69240', '1', '8680701', '1984-01-12 13:46:22', 1, 8, '0000-00-00 00:00:00', 'y', '2008-01-04 04:21:22', 'ryan.eleonore@yahoo.com', '548 Mariela Stravenue Suite 376\nLake Ewellland, AL 69343', NULL, '1997-04-19 16:07:37', 0, NULL, NULL, NULL, 1, 1, 0),
(37, 'Anne', 'Marks', 'littel.jerrold', 1842, '3905 Eugene Heights Apt. 960\nLake Deltastad, MT 84375-1264', '1', '53704', '1986-03-08 18:43:41', 0, 1, '0000-00-00 00:00:00', 'q', '1998-04-26 19:16:57', 'doris49@boehm.com', '4443 Wuckert Glens Apt. 729\nKiehnfort, AR 58968', NULL, '1982-04-16 19:59:14', 0, NULL, NULL, NULL, 1, 1, 0),
(38, 'Rosalyn', 'Wisozk', 'emile31', 430, '9855 Teresa Junctions\nBellafort, MI 17575', '4', '0', '1977-12-05 18:17:29', 0, 0, '0000-00-00 00:00:00', 't', '1975-02-11 17:24:56', 'pfriesen@yahoo.com', '1975 Gusikowski Wells\nHellerside, NV 64854-2524', NULL, '1977-10-06 12:19:05', 1, NULL, NULL, NULL, 1, 1, 0),
(39, 'Mathew', 'Kassulke', 'jebert', 4, '36446 King Manors\nNorth Geovanni, NE 62214-1842', '2', '6', '1981-10-03 00:44:09', 0, 4, '0000-00-00 00:00:00', 'x', '1984-04-30 20:40:07', 'ischiller@tremblay.info', '1256 Francisco Manors Apt. 435\nLake Isabella, WI 49425-2413', NULL, '1970-08-13 03:17:10', 1, NULL, NULL, NULL, 1, 1, 0),
(40, 'Santa', 'Pagac', 'darrel.pfeffer', 56, '14055 Jakayla Burg Apt. 107\nKerluketown, WI 07706-8141', '0', '786420', '2012-02-08 03:52:45', 1, 3, '0000-00-00 00:00:00', 's', '1988-11-30 07:01:49', 'stanley45@leffler.com', '1563 Ernest Manors Suite 045\nCloydland, AR 00142', NULL, '1972-09-13 16:23:43', 0, NULL, NULL, NULL, 1, 1, 0),
(41, 'Margot', 'Daugherty', 'mariam.white', 82, '56648 Bashirian Walks Suite 183\nPort Horace, WV 73386-0224', '4', '74', '2007-06-20 16:33:16', 0, 4, '0000-00-00 00:00:00', 'c', '1982-09-11 13:45:30', 'von.vesta@yahoo.com', '107 Bernhard Circle Suite 991\nWest Kimberlyview, ME 50665', NULL, '2012-05-05 07:24:38', 0, NULL, NULL, NULL, 1, 1, 0),
(42, 'Brayan', 'Rowe', 'pollich.gregory', 7, '5219 Miles Valleys\nRobynborough, NH 94999', '7', '7', '1983-09-22 22:50:59', 0, 4, '0000-00-00 00:00:00', 'y', '2009-02-13 18:46:04', 'leon34@beahan.com', '21061 Kemmer Harbors\nEmmaleeton, IN 02967', NULL, '2005-07-01 04:30:45', 1, NULL, NULL, NULL, 1, 1, 0),
(43, 'gmailKenya', 'gmailDuBuque', 'gmailkacey45', 9797524, '42780wao Yasmeen Isle\r\nSouth Lindaside, SD 43688-5676', '12', '7516624', '1990-10-14 00:49:52', 3, 2, '0000-00-00 00:00:00', 'fb', '2017-08-21 13:38:08', 'dfeta06@hotmail.com', '33357 Marvin Highway\r\nAlvertastad, PA 43285', NULL, '1971-10-12 12:28:16', 0, 22, NULL, NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `agenttierssetup`
--

CREATE TABLE `agenttierssetup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tierpercent` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apartmentbillings`
--

CREATE TABLE `apartmentbillings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `billingtype` int(11) NOT NULL,
  `moveinno` double(8,2) NOT NULL,
  `agentcomp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secongage` int(11) NOT NULL,
  `secondagef` double(8,2) NOT NULL,
  `autopayrecord` double(8,2) NOT NULL,
  `companyper` double(8,2) NOT NULL,
  `flatrate` double(8,2) NOT NULL,
  `bonus` double(8,2) NOT NULL,
  `totaldueto` double(8,2) NOT NULL,
  `duetofirst` double(8,2) NOT NULL,
  `duetosec` double(8,2) NOT NULL,
  `vkpcut` double(8,2) NOT NULL,
  `verifiedby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminprop` tinyint(1) NOT NULL,
  `isitconnect` tinyint(1) NOT NULL,
  `depositrefno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantunit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantcity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantstate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantzip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leesestart` datetime NOT NULL,
  `leeseterms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantadd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantunit1` int(11) NOT NULL,
  `tenantcity1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantstate1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanantzip1` int(11) NOT NULL,
  `isitconnect2` datetime NOT NULL,
  `changetenant` tinyint(1) NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giftcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `HLHoldingF` int(11) NOT NULL,
  `APBillingID` int(11) NOT NULL,
  `HSBillingID` int(11) NOT NULL,
  `HLBillingID` int(11) NOT NULL,
  `AttachFileN` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Attachment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cityname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cityname`, `state_id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Lahore', 1, 0, NULL, NULL),
(7, 'Swabi', 8, 1, '2020-04-09 15:09:41', '2020-04-09 15:09:41'),
(8, 'LAHORE', 8, 1, '2020-04-09 15:22:54', '2020-04-09 15:22:54'),
(9, 'LAHOREuui', 9, 9, '2020-04-09 15:25:48', '2020-04-09 15:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `companyadmin`
--

CREATE TABLE `companyadmin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `administrator_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companymanagment`
--

CREATE TABLE `companymanagment` (
  `id` int(11) NOT NULL,
  `mgt_company` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `zip_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `active` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adentcompany_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companymanagment`
--

INSERT INTO `companymanagment` (`id`, `mgt_company`, `office_address`, `country_id`, `state_id`, `city_id`, `zip_id`, `phone`, `fax`, `alt`, `email`, `active`, `created_at`, `updated_at`, `adentcompany_id`) VALUES
(9, 'VKPTESTCOMPANY', 'COMPANY', 1, 1, 1, 1, '33424324234', '23432424234', '8795689', 'admin@yahoo.com', '0', '2020-04-09 16:20:51', '2020-04-09 16:20:51', NULL),
(10, 'test', 'sdffdsf', 1, 1, 1, 1, '33424324234', '434343434334', '478411', 'jewell17@gerlach.com', '1', '2020-04-09 16:19:52', '2020-04-09 16:19:52', NULL),
(11, 'testCopamyNEWLHR', 'testCopamyNEWLHR', 1, 1, 1, 1, '33424324234', '434343434334', '87766', 'test@gmail.com', '1', '2020-04-03 15:49:11', '2020-04-03 15:49:11', NULL),
(12, 'luqman arshad', 'office', 1, 8, 7, 5, '03364003281', '22', 'fdd', 'luqman@gmail.com', NULL, '2020-04-10 16:47:49', '2020-04-10 16:47:49', NULL),
(13, 'luki', 'dddddddd, dddddddddddddddddddddd', 1, 1, 1, 1, '03364003281', 'dff', 'alt', 'luki@email.com', NULL, '2020-04-14 08:47:06', '2020-04-14 08:47:06', NULL),
(14, 'kjhjk', 'lahore', 1, 1, 1, 1, '0345685474', '4-6658-88', '0345689740', 'umair@gmail.com', '1', '2020-04-14 09:39:47', '2020-04-14 09:39:47', NULL),
(15, 'rentp', 'lahore lahore', 1, 1, 1, 1, '0212365471', '22-552-88', '0356987452', 'clakin@ondricka.info', '0', '2020-04-14 09:41:40', '2020-04-14 09:41:40', NULL),
(16, 'new propert', 'dddddddd, df', 9, 9, 9, 7, '03364003281', '33', 'eff', 'luqmanajan95@yahoo.com', '1', '2020-04-14 10:05:57', '2020-04-14 10:05:57', NULL),
(17, 'luqman arshad new', 'people, colony', 1, 8, 7, 5, '03364003281', '03364003281', 'fs', 'luqman@gmail.com', NULL, '2020-04-15 17:44:50', '2020-04-15 17:44:50', 6),
(18, 'kjhjkh', 'sfs', 1, 1, 1, 1, '1212345678', '22-2200', '3423432432', 'walter@gmail.com', NULL, '2020-04-16 11:21:13', '2020-04-16 11:21:13', 1),
(19, 'kjhjkh', 'sfs', 1, 1, 1, 1, '1212345678', '22-2200', '3423432432', 'walter@gmail.com', NULL, '2020-04-16 11:21:15', '2020-04-16 11:21:15', 1),
(20, 'testone', 'testadd', 1, 1, 1, 1, '1212345678', '22-2200', '3423432432', 'jewell17@gerlach.com', NULL, '2020-04-16 11:32:53', '2020-04-16 11:32:53', 1),
(21, 'test2', 'test2', 1, 1, 1, 1, '1212345678', '22-2200', '3423432432', 'mbechtelar@weissnat.com', NULL, '2020-04-16 11:37:00', '2020-04-16 11:37:00', 6),
(22, 'lpg gasses', '9for', 9, 9, 9, 7, '03364003281', '6024', 'dfdadfa', 'luqman@gmail.com', '1', '2020-04-16 11:48:15', '2020-04-16 11:48:15', NULL),
(23, 'programing', 'dddddddd, dddddddddddddddddddddd', 1, 8, 7, 5, '03364003281', '03364003281', 'dfd', 'luki@email.com', NULL, '2020-04-16 11:52:44', '2020-04-16 11:52:44', 6);

-- --------------------------------------------------------

--
-- Table structure for table `company_admin`
--

CREATE TABLE `company_admin` (
  `id` int(11) NOT NULL,
  `administrator_name` varchar(50) NOT NULL,
  `cell_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_admin`
--

INSERT INTO `company_admin` (`id`, `administrator_name`, `cell_no`, `email`, `created_at`, `updated_at`) VALUES
(9, 'VKPCOMPANYr', '6734667343432', 'admin@admin.com', '2020-04-17 17:30:09', '2020-04-17 17:30:09'),
(10, 'sdnakjdkja', '33234343', 'jewell17@gerlach.com', '2020-04-17 17:30:50', '2020-04-17 17:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_abbrevation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address_1` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disclaimer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `company_name`, `company_abbrevation`, `company_address`, `company_address_1`, `company_phone`, `company_fax`, `company_email`, `company_phone_1`, `disclaimer`, `created_at`, `updated_at`) VALUES
(1, 'VKPRealState', 'V.K.P test hhhjhjhjhj', '156 c lahore--lhr 345', 'pakisatn', '9203419660711', '60203494', 'faisal@hmail.com', '03548372 234324324', 'test', '2020-04-02 10:58:08', '2020-04-06 10:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countrysh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countrysh`, `countryname`, `created_at`, `updated_at`) VALUES
(1, 'PAK', 'Pakistan', NULL, NULL),
(9, 'AUSTRLA', 'AUSTRLA', '2020-04-09 15:17:36', '2020-04-09 15:17:36'),
(43, 'IND', 'India', '2020-04-16 07:47:54', '2020-04-16 07:47:54'),
(44, 'ml', 'Malysia', '2020-04-17 17:58:56', '2020-04-17 17:58:56'),
(45, 'pak', 'india', '2020-04-17 18:31:50', '2020-04-17 18:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `feeapprovals`
--

CREATE TABLE `feeapprovals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approvaldate` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `rejected` tinyint(1) NOT NULL,
  `adminnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsbilling_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hlbilling_id` bigint(20) UNSIGNED DEFAULT NULL,
  `apartmentbilling_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feeholdingscreen`
--

CREATE TABLE `feeholdingscreen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `holdingdate` datetime NOT NULL,
  `appliesd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feereceipt_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feereceipts`
--

CREATE TABLE `feereceipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referenceno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feereceipt` datetime NOT NULL,
  `received` tinyint(1) NOT NULL,
  `mcno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hlholdingfee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `apartmentbilling_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hlbilling_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlbillings`
--

CREATE TABLE `hlbillings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `moveinno` int(11) NOT NULL,
  `agentcomapny` double(8,2) NOT NULL,
  `secondage` double(8,2) NOT NULL,
  `listingagent` tinyint(1) NOT NULL,
  `leesingagent` tinyint(1) NOT NULL,
  `rentamount` double(8,2) NOT NULL,
  `leeseterms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flatrate` double(8,2) NOT NULL,
  `bonus` double(8,2) NOT NULL,
  `totaldueto` double(8,2) NOT NULL,
  `duetofirst` double(8,2) NOT NULL,
  `duetosec` double(8,2) NOT NULL,
  `vkpcut` double(8,2) NOT NULL,
  `verifiedby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyerbroke` double(8,2) NOT NULL,
  `cobrokeID` int(11) NOT NULL,
  `admincobr` int(11) NOT NULL,
  `admincomp` tinyint(1) NOT NULL,
  `companyn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companycity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companystate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyzip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isitconnect2` tinyint(1) NOT NULL,
  `tenantname` int(11) NOT NULL,
  `tenantadd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantunit` int(11) NOT NULL,
  `tenantcity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantstate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanantzip` int(11) NOT NULL,
  `leesestart` datetime NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isitconnect` tinyint(1) NOT NULL,
  `depositrefno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giftcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pono` int(11) NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hlholdingfees`
--

CREATE TABLE `hlholdingfees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hldate` datetime NOT NULL,
  `adminprop` tinyint(1) NOT NULL,
  `unitno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hlmoveins` datetime NOT NULL,
  `holdingfee` double(8,2) NOT NULL,
  `mcno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datefeerec` datetime NOT NULL,
  `amountdue` double(8,2) NOT NULL,
  `customerf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customera` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customercity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerstate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerzip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customeral` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifiedby` tinyint(1) NOT NULL,
  `hlreference` tinyint(1) NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hsbillings`
--

CREATE TABLE `hsbillings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homesaleno` int(11) NOT NULL,
  `agentcomp` double(8,2) NOT NULL,
  `secondage` double(8,2) NOT NULL,
  `secongage1` int(11) NOT NULL,
  `listingagent` tinyint(1) NOT NULL,
  `leesingagent` double(8,2) NOT NULL,
  `contractdate` datetime NOT NULL,
  `sellingprice` double(8,2) NOT NULL,
  `closedofesc` datetime NOT NULL,
  `escrowno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlecomp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlecompany2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commper` double(8,2) NOT NULL,
  `totaldueto` double(8,2) NOT NULL,
  `duetofirst` double(8,2) NOT NULL,
  `duetosecond` double(8,2) NOT NULL,
  `cobrokeco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admincomp` tinyint(1) NOT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referalamount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companycity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companystate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyzip` datetime NOT NULL,
  `verifiedby` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyerbroke` double(8,2) NOT NULL,
  `buyerphone` bigint(20) NOT NULL,
  `sellername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellerphone` bigint(20) NOT NULL,
  `propertyad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertycity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertystate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyzip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agentnotes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giftcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoicemainpayment`
--

CREATE TABLE `invoicemainpayment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymentdate` datetime NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymenttype` int(11) NOT NULL,
  `paymenta` double(8,2) NOT NULL,
  `rcvdform` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appliedamo` double(8,2) NOT NULL,
  `checkcreated` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoicepayments`
--

CREATE TABLE `invoicepayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_id` int(11) NOT NULL,
  `invoicedate` datetime NOT NULL,
  `comdue` double(8,2) NOT NULL,
  `latefees` double(8,2) NOT NULL,
  `AmountPaid` double(8,2) NOT NULL,
  `invoice_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `autopay` tinyint(1) NOT NULL,
  `property_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lastcontra` datetime NOT NULL,
  `invoicemgmetno` int(11) NOT NULL,
  `invoicemgmtname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoicemgmtdesc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoicemgmttotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoicemgmtcell` int(11) NOT NULL,
  `invoicemgmtbill` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoicemgmtorder` int(11) NOT NULL,
  `invoicemgmtbal` int(11) NOT NULL,
  `tenantname` int(11) NOT NULL,
  `tenantaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenantunitno` int(11) NOT NULL,
  `tenantzipcode` int(11) NOT NULL,
  `invoice_notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoicedate` datetime NOT NULL,
  `leesestart` datetime NOT NULL,
  `leeseterm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invmakeid` int(11) NOT NULL,
  `rent` double(8,2) NOT NULL,
  `bonus` double(8,2) NOT NULL,
  `vkppercent` double(8,2) NOT NULL,
  `flat_rate` double(8,2) NOT NULL,
  `amountdue` double(8,2) NOT NULL,
  `firstagent D` int(11) NOT NULL,
  `mcnb count` int(11) NOT NULL,
  `firstagent C` double(8,2) NOT NULL,
  `no number` tinyint(1) NOT NULL,
  `advance` tinyint(1) NOT NULL,
  `monthly advance` int(11) NOT NULL,
  `duetofirst A` double(8,2) NOT NULL,
  `vkpsplit` double(8,2) NOT NULL,
  `secondage` int(11) NOT NULL,
  `duetosecond` double(8,2) NOT NULL,
  `fiftyfiftysplit` tinyint(1) NOT NULL,
  `ahs` smallint(6) NOT NULL,
  `legal` tinyint(1) NOT NULL,
  `adjustcom` tinyint(1) NOT NULL,
  `nopay` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `APbuyer bo` double(8,2) NOT NULL,
  `APReferal A` double(8,2) NOT NULL,
  `APRroperty ID` int(11) NOT NULL,
  `APAgent Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `APPayment` double(8,2) NOT NULL,
  `APamount D` double(8,2) NOT NULL,
  `SAPAgentID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SAPAgentC` int(11) NOT NULL,
  `SAPAgentCo` double(8,2) NOT NULL,
  `SAPComType` int(11) NOT NULL,
  `SAPComRate` double(8,2) NOT NULL,
  `SAPvkpAm` double(8,2) NOT NULL,
  `SAPAgentSplit` double(8,2) NOT NULL,
  `SAPvkSplit` double(8,2) NOT NULL,
  `checkcheeta` tinyint(1) NOT NULL,
  `checkcheetb` tinyint(1) NOT NULL,
  `checkcheetc` tinyint(1) NOT NULL,
  `checkcheetd` tinyint(1) NOT NULL,
  `checkcheete` tinyint(1) NOT NULL,
  `advancec` tinyint(1) NOT NULL,
  `EmailSend` tinyint(1) NOT NULL,
  `EmailDate` datetime NOT NULL,
  `invoiceholda` tinyint(1) NOT NULL,
  `invoiceholdb` tinyint(1) NOT NULL,
  `igiftcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printnote` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoicesagents`
--

CREATE TABLE `invoicesagents` (
  `id` int(11) NOT NULL,
  `invoices` text COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoicesagents`
--

INSERT INTO `invoicesagents` (`id`, `invoices`, `file`, `user_id`, `property_id`) VALUES
(1, 'Management Company,An AutoPay?', '530160590.docx', 6, 5),
(2, 'Management Company,A Real Estate Company that we will owe a Co-Broke to?', '1830419928.docx', 6, 6),
(3, 'Management Company,An AutoPay?', '1082822293.docx', 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_12_110132_create_countries_table', 1),
(4, '2020_03_12_110443_create_states_table', 1),
(5, '2020_03_12_111044_create_cities_table', 1),
(6, '2020_03_12_111322_create_zipcodes_table', 1),
(7, '2020_03_12_152646_create_rules_table', 1),
(8, '2020_03_12_155148_create_tiers_table', 1),
(9, '2020_03_12_162512_create_invoice_main_payment_table', 1),
(10, '2020_03_13_133336_create_page_security_table', 1),
(11, '2020_03_13_133800_create_properties_table', 1),
(12, '2020_03_13_134053_create_agents_table', 1),
(13, '2020_03_13_134311_create_properties_logs_table', 1),
(14, '2020_03_13_134508_create_properties_notes_table', 1),
(15, '2020_03_13_134618_create_offices_table', 1),
(16, '2020_03_13_134818_create_agent_notes_table', 1),
(17, '2020_03_13_135004_create_agent_invoice_count_table', 1),
(18, '2020_03_13_135106_create_agent_rules_setup_table', 1),
(19, '2020_03_13_135400_create_invoices_table', 1),
(20, '2020_03_13_135458_create_invoicepayments_table', 1),
(21, '2020_03_13_135616_create_agent_tiers_setup_table', 1),
(22, '2020_03_13_140355_create_payment_types_table', 1),
(23, '2020_03_16_121814_add_users_id_to_page_security_table', 1),
(24, '2020_03_20_121930_change_phone_type_to_offices', 1),
(25, '2020_03_24_110855_create_company_info_table', 1),
(26, '2020_03_25_143705_add_is_admin_to_users_table', 1),
(27, '2020_03_27_162924_change_approve_bill_type_to_users_table', 1),
(28, '2020_03_28_130933_change_admin_user_type_to_users_table', 1),
(29, '2020_03_29_191050_create_percentages_table', 1),
(30, '2020_03_31_091950_add_foreign_key_to_offices_table', 1),
(31, '2020_03_13_140036_add_foreign_keys_to_users', 2),
(32, '2020_03_27_113329_create_companyadmin_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_phone` bigint(20) NOT NULL,
  `office_fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_manager` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `office_description`, `office_address`, `office_phone`, `office_fax`, `office_email`, `manager`, `co_manager`, `agent_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'distinctio', '767 Pierce Parks Suite 181\r\nNorth Vivienland, OH 18640', 9, '89bjhk', 'ureichert@gmail.com', 'Ernestina Schowalter DDS', 'Ernestine Franecki', NULL, NULL, '2020-04-17 17:46:48', 7),
(3, 'id', '427 Elian Cliffs Apt. 726\nWeissnatfurt, MN 56807-1914', 4, 'Voluptate neque eos aliquam non nihil.', 'williamson.haley@yahoo.com', 'Dr. Sydney O\'Reilly', 'Prof. Blaze Stokes', NULL, NULL, NULL, 4),
(4, 'non', '64924 Newton Stravenue\nPollichland, MD 43985', 5, 'Architecto reprehenderit doloremque quod rerum autem dolor cum.', 'ottilie59@haag.com', 'Edmond Gottlieb II', 'Mrs. Yessenia Wintheiser', NULL, NULL, NULL, 3),
(5, 'dolores', '9224 Ignatius Common Suite 712\nCourtneyborough, OK 30073', 8, 'Occaecati dolores incidunt nihil amet.', 'marlon69@donnelly.com', 'David Hickle PhD', 'Drake Lueilwitz', NULL, NULL, NULL, 2),
(6, 'sapiente', '685 Dortha Heights Suite 290\nEast Kianton, NH 92954-2980', 9, 'Odio veniam voluptates aperiam.', 'west.madison@frami.biz', 'Mose Harber', 'Otto Schowalter', NULL, NULL, NULL, 5),
(7, 'quis', '5776 Koch Corner\nNorth Wilmaland, OR 97530', 1, 'At voluptas non est.', 'lind.laverne@collins.com', 'Amina Abshire III', 'Lonnie Labadie', NULL, NULL, NULL, 9),
(8, 'quam', '1962 Koch Junctions Apt. 299\nWest Colestad, VT 28137', 8, 'Id ut neque debitis maxime.', 'kay.windler@hotmail.com', 'Miss Maryjane Mayer V', 'Mr. Erick Pagac IV', NULL, NULL, NULL, 1),
(9, 'esse', '301 Willms Forge\nLake Murphyhaven, SD 97623', 1, 'Aut aut a sint aut illum aut consequatur.', 'bferry@hoeger.com', 'Garnet Gleason', 'Mr. Levi Durgan Sr.', NULL, NULL, NULL, 1),
(10, 'quia', '17450 Dolly Rapid\nSouth Sonnyfort, FL 61992', 6, 'Consequuntur dolore dolorem esse.', 'lyost@hotmail.com', 'Mrs. Allene Wunsch', 'Dr. Annette Predovic PhD', NULL, NULL, NULL, 7),
(11, 'officia', '85062 Wilderman Crest Apt. 547\r\nErnestinaville, RI 32467-8874', 2, 'jhj88', 'bleuschke@hauck.com', 'Tobin Heller PhD', 'Dr. Ryder Corwin', NULL, NULL, '2020-04-13 15:51:06', 4),
(12, 'sed', '269 Alexa Common Suite 597\nWest Roryhaven, NH 51470-9618', 9, 'Et aut quisquam laudantium sed dolor sit rerum atque.', 'ywaelchi@hotmail.com', 'Verla Shields', 'Ezequiel Kuhic', NULL, NULL, NULL, 12),
(13, 'tenetur', '8421 Legros Motorway\nNorth Kelly, CT 95259-2837', 8, 'Eos vitae illo sint qui possimus eos.', 'aufderhar.vada@kub.com', 'Corrine Upton PhD', 'Dr. Vincenzo Walter', NULL, NULL, NULL, 8),
(14, 'eaque', '56119 Bria Turnpike Suite 289\nMarvintown, VT 50278', 5, 'Quia suscipit tempora sit iusto recusandae qui voluptatem dignissimos.', 'yrunte@bode.info', 'Prof. Luna Green PhD', 'Vicente Little IV', NULL, NULL, NULL, 1),
(15, 'est', '287 Juvenal Coves Apt. 797\nJosefurt, HI 15884', 7, 'Minima laboriosam excepturi vel quisquam veritatis natus ea.', 'laufderhar@yahoo.com', 'Misty Kassulke', 'Mr. Frederic Schmitt Sr.', NULL, NULL, NULL, 8),
(16, 'officia', '17601 Ruecker Cape\nSmithamfort, GA 90084', 6, 'Eius harum alias tenetur sit.', 'lew.kilback@okon.com', 'Miss Annetta Mohr DDS', 'Branson Mohr', NULL, NULL, NULL, 9),
(17, 'perspiciatis', '463 Bode Bypass\nPrudenceshire, GA 57896-6842', 9, 'Omnis eum numquam quibusdam hic ullam architecto qui harum.', 'xklocko@gmail.com', 'Guadalupe Ankunding', 'Terrill Wolff I', NULL, NULL, NULL, 9),
(18, 'necessitatibus', '259 Schmitt Circle Apt. 522\nSedrickburgh, PA 94309', 1, 'Hic et officia maiores modi ut.', 'qwisoky@predovic.com', 'Eriberto Connelly', 'Claire Hand', NULL, NULL, NULL, 3),
(20, 'dolorem', '1089 Marks Ridges\nWatsonfurt, NM 93678-0963', 7, 'Error sit quae asperiores est molestias recusandae.', 'sylvia.jenkins@hotmail.com', 'Payton Kreiger', 'Mr. Baron Crooks V', NULL, NULL, NULL, 10),
(21, 'inventore', '899 Nikolas Canyon Suite 851\nEstellamouth, NC 64685-4532', 4, 'Quo hic dolorem neque dicta aut cupiditate.', 'rubie94@hotmail.com', 'Jerome Howell', 'Joshuah Kulas', NULL, NULL, NULL, 17),
(22, 'voluptatum', '546 Zieme Plains\nNew Garnetshire, SC 16204-6562', 5, 'Est deserunt eius architecto at qui.', 'dale02@hotmail.com', 'Emilia Schuppe', 'Maeve Zieme', NULL, NULL, NULL, 12),
(23, 'officia', '15191 Jovan Mission\nReggiebury, TN 56750-6572', 3, 'Molestias eum neque ut esse eligendi repellendus.', 'yhills@weimann.net', 'Cristopher Huel V', 'Dr. Rodrigo Gulgowski', NULL, NULL, NULL, 16),
(24, 'vero', '9694 Davonte Islands\nJosephburgh, WI 37263', 3, 'Id tempora est ipsa aperiam et officiis minima.', 'price.edward@boyer.com', 'Benny Mayert', 'Dimitri Ward', NULL, NULL, NULL, 19),
(25, 'quas', '460 Marquise Drive\nCarrollshire, IL 73812-7369', 9, 'Sed voluptas omnis sequi dolore.', 'leuschke.randy@gmail.com', 'Claudine Zieme', 'Wyatt Johnston', NULL, NULL, NULL, 20),
(26, 'totam', '5444 Glenda Knoll\nPacochamouth, GA 13287', 2, 'Magnam facere fugit sed voluptate soluta voluptatibus.', 'brown54@schultz.com', 'Amara Kuphal', 'Jocelyn Bogan DDS', NULL, NULL, NULL, 21),
(27, 'ea', '73129 Bernhard Crescent Suite 256\nWindlerchester, OH 51173', 2, 'Voluptate commodi ea incidunt enim qui quo aut.', 'halvorson.ethyl@hotmail.com', 'Guadalupe Braun', 'Dr. Eula Ziemann', NULL, NULL, NULL, 25),
(28, 'voluptatem', '40147 Dorothy Keys Suite 894\nEmmerichfurt, KY 32504', 9, 'Ea et rerum veniam.', 'okeefe.gail@feil.biz', 'Rocky Rau', 'Russel Hansen I', NULL, NULL, NULL, NULL),
(29, 'nulla', '6034 Delores Inlet\nKarliton, ME 95686-5704', 9, 'Commodi illum libero molestiae consectetur.', 'alvera.beatty@borer.com', 'Weston Kreiger I', 'Candida Swaniawski', NULL, NULL, NULL, NULL),
(30, 'eligendi', '594 Monica Parkways Suite 176\nSouth Lelaborough, LA 62510', 1, 'Magni quia consequatur laboriosam praesentium aperiam quis.', 'pkrajcik@hotmail.com', 'Antonio Huel DVM', 'Matilde Gutkowski', NULL, NULL, NULL, NULL),
(31, 'vitae', '80977 Bartoletti Lock Apt. 500\nNorth Jorgefurt, OK 52809', 9, 'A culpa aliquam velit et fugiat.', 'wconnelly@gmail.com', 'Dr. Shad Koss', 'Margarita Kovacek', NULL, NULL, NULL, NULL),
(32, 'in', '94649 Hortense Ways Suite 851\nNew Deion, MA 53079-1700', 8, 'Dolorum quae quibusdam iusto perspiciatis voluptatem omnis veritatis.', 'margarette44@feil.org', 'Larry Kihn IV', 'Tanya Fadel II', NULL, NULL, NULL, NULL),
(33, 'sed', '4693 Donald Mission\nNorth Camdenbury, KS 38391-7722', 4, 'Eligendi nostrum atque temporibus doloremque et magni.', 'kieran.bode@yahoo.com', 'Peggie Lueilwitz', 'Jacquelyn Gerlach', NULL, NULL, NULL, NULL),
(34, 'totam', '1967 Turcotte Loaf Apt. 996\nDawnhaven, VT 27181-4074', 4, 'Non pariatur dolorum facere.', 'srice@senger.info', 'Trever Williamson', 'Whitney Bergstrom', NULL, NULL, NULL, NULL),
(35, 'possimus', '6763 Ernestina Lodge\nNew Kenny, UT 77779', 9, 'Voluptates magni excepturi rerum eos in doloremque ullam.', 'blair57@koch.biz', 'Ms. Otha Paucek PhD', 'Leslie Waters', NULL, NULL, NULL, NULL),
(36, 'aut', '52265 Feeney Common Suite 271\nLeopoldoton, IL 61658', 3, 'Qui eaque deserunt est suscipit doloremque numquam earum.', 'kurtis62@hotmail.com', 'Kasandra Bednar', 'Jarrell Paucek', NULL, NULL, NULL, NULL),
(37, 'quidem', '98444 Pagac Stravenue\nThielbury, LA 11220', 9, 'Ab eius at eos sunt ea.', 'aric93@yahoo.com', 'Prof. Florida McDermott', 'Mathias Flatley', NULL, NULL, NULL, NULL),
(38, 'et', '67859 Gulgowski Hollow Apt. 993\nNorth Yolandafurt, MO 98078-8675', 3, 'Nemo est modi ad qui repellendus ullam dolor nihil.', 'lolita27@klein.org', 'Lauryn Sawayn', 'Carli Aufderhar', NULL, NULL, NULL, NULL),
(39, 'deserunt', '18925 Vern Roads\nAntoniettatown, MA 01539', 4, 'Asperiores voluptates id iusto rerum.', 'funk.arlene@yahoo.com', 'Prince Hayes Sr.', 'Domenic Funk', NULL, NULL, NULL, NULL),
(40, 'et', '226 Kunze Orchard Suite 083\nEichmannport, CT 61647-3367', 8, 'Accusantium voluptates accusantium accusamus.', 'christop44@hotmail.com', 'Rick Howell DDS', 'Miss Savanah Cassin', NULL, NULL, NULL, NULL),
(41, 'dolor', '79248 Marjorie Lock\nEmmerichhaven, KY 95869', 3, 'Dolorem assumenda saepe voluptates omnis ducimus quis qui.', 'ndickens@effertz.com', 'Wilburn Kiehn', 'Patrick Ullrich', NULL, NULL, NULL, NULL),
(42, 'voluptatum', '688 Ward Trafficway\nNew Jabari, OR 70185', 8, 'Inventore qui provident sequi distinctio ea voluptatem voluptatum.', 'nicholas.koelpin@gmail.com', 'Cassidy Friesen', 'Ms. Mellie Torp', NULL, NULL, NULL, NULL),
(43, 'eum', '13387 Collins Ways\nWest Evachester, OK 97616', 9, 'Rerum adipisci ipsam ea et non rerum asperiores sunt.', 'theodore24@batz.net', 'Elvis Ritchie', 'Denis Bechtelar', NULL, NULL, NULL, NULL),
(44, 'repellendus', '54947 Brett Station\nWunschview, MT 28380-4097', 3, 'Ullam perferendis ut quis.', 'lmccullough@gmail.com', 'Unique Schmitt', 'Prof. Carolanne Schamberger', NULL, NULL, NULL, NULL),
(45, 'aut', '793 Simonis Route\nSouth Haileeville, MT 75332-5052', 1, 'Sequi sunt quis explicabo.', 'clovis84@considine.com', 'Prof. Freeda Hermann', 'Greg Johns', NULL, NULL, NULL, NULL),
(46, 'ut', '25270 Barrows Inlet Apt. 147\nNew Hannah, PA 85761', 2, 'Debitis natus sed dolore atque impedit.', 'dariana47@gmail.com', 'Cristal Barton', 'Kaci Kertzmann', NULL, NULL, NULL, NULL),
(47, 'rerum', '19497 Giuseppe Light\nNew Felipe, ID 51559-1469', 9, 'Ducimus vel sint eaque ipsam non repudiandae ut.', 'kunde.jane@yahoo.com', 'Kathryne Hickle', 'Gerardo Homenick', NULL, NULL, NULL, NULL),
(48, 'illo', '8470 Tyler Land Apt. 435\nZulaufbury, TN 62657-3568', 3, 'Laboriosam quia repellendus eum nihil et suscipit.', 'julie.becker@gmail.com', 'Dr. Garth Grant III', 'Maude Kessler', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagesecurity`
--

CREATE TABLE `pagesecurity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pageid` int(11) NOT NULL,
  `pagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewsocialsec` tinyint(1) NOT NULL,
  `editoverr` tinyint(1) NOT NULL,
  `editagenta` tinyint(1) NOT NULL,
  `chengeagea` tinyint(1) NOT NULL,
  `setagent` tinyint(1) NOT NULL,
  `deleteedit` tinyint(1) NOT NULL,
  `viewagent` tinyint(1) NOT NULL,
  `editagentc` tinyint(1) NOT NULL,
  `viewETCPaid` tinyint(1) NOT NULL,
  `chargeback` tinyint(1) NOT NULL,
  `printtransaction` tinyint(1) NOT NULL,
  `addagente` tinyint(1) NOT NULL,
  `deleteagent` tinyint(1) NOT NULL,
  `editexpense` tinyint(1) NOT NULL,
  `printexpense` tinyint(1) NOT NULL,
  `addagentb` tinyint(1) NOT NULL,
  `deleteagentb` tinyint(1) NOT NULL,
  `editbonush` tinyint(1) NOT NULL,
  `printbonush` tinyint(1) NOT NULL,
  `severagenta` tinyint(1) NOT NULL,
  `recalculate` tinyint(1) NOT NULL,
  `aaa` tinyint(1) NOT NULL,
  `editbonushh` tinyint(1) NOT NULL,
  `printbonushh` tinyint(1) NOT NULL,
  `severagent` tinyint(1) NOT NULL,
  `recalculatea` tinyint(1) NOT NULL,
  `adduser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addsecurity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttypes`
--

CREATE TABLE `paymenttypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymenttype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `percentages`
--

CREATE TABLE `percentages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daysfrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daysto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latefee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `propertyName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyAd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyZiPID` int(11) DEFAULT NULL,
  `propertyMarchant` tinyint(1) DEFAULT NULL,
  `propertyRetailer` tinyint(1) DEFAULT NULL,
  `propertyphone` bigint(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `propertyFax` int(11) DEFAULT NULL,
  `propertyAltNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `propertyEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MgmtCompID` int(11) DEFAULT NULL,
  `MgmtCompName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MgmtCompAddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ZipID` int(11) DEFAULT NULL,
  `MgmtMainBill` tinyint(1) DEFAULT NULL,
  `Mgmtphonenumber` int(11) DEFAULT NULL,
  `Mgmtfaxnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MgmtAltNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MgmtEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastcontract` date DEFAULT NULL,
  `PropertyAu` tinyint(1) DEFAULT NULL,
  `PropertySb` tinyint(1) DEFAULT NULL,
  `PropertyNo` tinyint(1) DEFAULT NULL,
  `PropertDo` tinyint(1) DEFAULT NULL,
  `PropertyIn` tinyint(1) DEFAULT NULL,
  `SuperAuto` tinyint(1) DEFAULT NULL,
  `SAPID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SAPPer` double(8,2) DEFAULT NULL,
  `SAPRate` double(8,2) DEFAULT NULL,
  `SAPCompType` int(11) DEFAULT NULL,
  `SAPCompRate` double(8,2) DEFAULT NULL,
  `admininvoices` text COLLATE utf8mb4_unicode_ci,
  `abbrevation` text COLLATE utf8mb4_unicode_ci,
  `zipcode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `propertyName`, `propertyAd`, `propertyZiPID`, `propertyMarchant`, `propertyRetailer`, `propertyphone`, `country_id`, `state_id`, `city_id`, `propertyFax`, `propertyAltNo`, `propertyEmail`, `MgmtCompID`, `MgmtCompName`, `MgmtCompAddress`, `ZipID`, `MgmtMainBill`, `Mgmtphonenumber`, `Mgmtfaxnumber`, `MgmtAltNo`, `MgmtEmail`, `lastcontract`, `PropertyAu`, `PropertySb`, `PropertyNo`, `PropertDo`, `PropertyIn`, `SuperAuto`, `SAPID`, `SAPPer`, `SAPRate`, `SAPCompType`, `SAPCompRate`, `admininvoices`, `abbrevation`, `zipcode_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'dddddddd, dddddddddddddddddddddd', 'dddddddddddddddddddddd', 1, NULL, NULL, 3364003281, 1, 1, 1, 234, 'ddd', 'luqman@gmail.com', NULL, '1st to Rent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2020-04-08 17:38:26', '2020-04-08 17:38:26'),
(5, 'luqman arshad', 'colony', NULL, NULL, NULL, 3364003281, 1, 8, 7, 33, 'dd', 'luqman@gmail.com', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alternative Billing Address', 'testagain', 5, 6, '2020-04-10 16:43:55', '2020-04-15 11:40:17'),
(6, 'test2', 'df', NULL, NULL, NULL, 3364003281, 1, 1, 1, 234, 'dddd', 'luqmanajan95@yahoo.com', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 6, '2020-04-14 08:43:01', '2020-04-14 08:43:01'),
(8, 'test work', 'department', NULL, NULL, NULL, 3364003281, 1, 1, 1, 22, 'df', 'luqmanajan95@yahoo.com', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alternative Billing Address,Off Line', 'testab', 1, 1, '2020-04-14 14:26:42', '2020-04-14 14:28:15'),
(11, 'kjkljkl', 'kjklj', NULL, NULL, NULL, 365412569, 9, 9, 9, 1458745698, '0326547895', 'kjhkl@gmail.com', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Main Billing Address,Inactive,Do Not Place', 'dsd', 7, 1, '2020-04-14 15:04:37', '2020-04-14 15:04:37'),
(14, 'dddddddd', 'dddddddd', NULL, NULL, NULL, 3364003281, 1, 8, 7, 222, 'dddd', 'luqmanajan95@yahoo.com', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alternative Billing Address,Main Billing Address', 'Punjab', 5, 1, '2020-04-16 11:11:26', '2020-04-16 11:11:26'),
(15, 'dddddddd, dddddddddddddddddddddd', 'dddddddd', NULL, NULL, NULL, 3364003281, 1, 1, 1, 222, 'dd', 'luqmanajan95@yahoo.com', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Main Billing Address,No Contract', 'Khyber Pakhtun Khuwa', 1, 1, '2020-04-16 11:13:03', '2020-04-16 11:13:03'),
(16, 'luki', 'dddddddd', NULL, NULL, NULL, 3364003281, 1, 8, 7, 23, 'df', 'luqmanajan95@yahoo.com', 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Main Billing Address,Real Estate Company', 'Khyber Pakhtun Khuwa', 5, 1, '2020-04-16 11:45:20', '2020-04-16 11:45:20'),
(17, 'test', 'testadd', NULL, NULL, NULL, 1111111111, 9, 9, 9, 1458745698, '3456874875', 'clakin@ondricka.info', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Inactive,Alternative Billing Address,Email Invoice,Main Billing Address,Do Not Place', 'fg', 7, 1, '2020-04-17 17:57:43', '2020-04-17 17:57:43'),
(18, 'dfdasfa', 'fdsafds', NULL, NULL, NULL, 3333333333333, 9, 9, 9, 22222, 'dfasfaf', 'd@gmail.com', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Main Billing Address,Real Estate Company', 'dffdasf', 7, 1, '2020-04-17 18:12:07', '2020-04-17 18:12:07'),
(19, 'dfsasf', 'fdsasa', NULL, NULL, NULL, 323224334343, 1, 8, 7, 22222, 'eewrwr', 'g@GMAIL.COM', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Main Billing Address,Slow Pay', 'dfd', 5, 1, '2020-04-17 18:19:12', '2020-04-17 18:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `propertieslogs`
--

CREATE TABLE `propertieslogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `propertyID` int(11) NOT NULL,
  `propertyname` int(11) NOT NULL,
  `propertyaddress1` int(11) NOT NULL,
  `zipcode_id` bigint(20) UNSIGNED DEFAULT NULL,
  `propertymar` tinyint(1) NOT NULL,
  `propertyretailer` tinyint(1) NOT NULL,
  `propertyphone` int(11) NOT NULL,
  `propertyfax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propertyAltNo` int(11) NOT NULL,
  `propertyEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtCompId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtCompName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtCompAddress1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtCompAddress2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtZipID` int(11) NOT NULL,
  `mgmtMainB` tinyint(1) NOT NULL,
  `mgmtphoneno` int(11) NOT NULL,
  `mgmtfax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtAltNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mgmtemail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastcontra` datetime NOT NULL,
  `propertyAu` tinyint(1) NOT NULL,
  `propertySb` tinyint(1) NOT NULL,
  `propertyNo` tinyint(1) NOT NULL,
  `propertyIn` tinyint(1) NOT NULL,
  `SuperAuto` tinyint(1) NOT NULL,
  `SAPID` int(11) NOT NULL,
  `SAPer` double(8,2) NOT NULL,
  `SAPRate` double(8,2) NOT NULL,
  `SAPComType` int(11) NOT NULL,
  `SAPComRate` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propertiesnotes`
--

CREATE TABLE `propertiesnotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `propertyID` int(11) NOT NULL,
  `propertyno` datetime NOT NULL,
  `propertyDo` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propertyagentinvoices`
--

CREATE TABLE `propertyagentinvoices` (
  `id` int(11) NOT NULL,
  `invoices` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyagentinvoices`
--

INSERT INTO `propertyagentinvoices` (`id`, `invoices`, `file`, `user_id`) VALUES
(1, 'Management Company', '1779728948.docx', 6),
(2, 'Property', '2132468524.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruledescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `ruledescription`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 1, '2020-04-13 14:06:11', '2020-04-17 18:08:06'),
(2, 'jkkjkh', 1, '2020-04-17 17:38:31', '2020-04-17 17:38:31'),
(3, 'jjkhkj', 1, '2020-04-17 17:38:39', '2020-04-17 17:38:39'),
(4, 'kjhjkhjkhjk', 1, '2020-04-20 10:07:00', '2020-04-20 10:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateabbr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `statename`, `stateabbr`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Punjab', 'PUN', 1, NULL, NULL),
(8, 'Khyber Pakhtun Khuwa', 'KPK', 1, '2020-04-09 15:08:44', '2020-04-09 15:08:44'),
(9, 'AST', 'AST', 9, '2020-04-09 15:19:47', '2020-04-09 15:19:47'),
(14, 'fgdfg', 'sas', 9, '2020-04-17 18:00:13', '2020-04-17 18:00:13'),
(15, 'test', 'sas', NULL, '2020-04-17 18:00:43', '2020-04-17 18:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `tiers`
--

CREATE TABLE `tiers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiertype` int(11) NOT NULL,
  `tierstart` int(11) NOT NULL,
  `tierend` int(11) NOT NULL,
  `tierpercent` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiers`
--

INSERT INTO `tiers` (`id`, `tiertype`, `tierstart`, `tierend`, `tierpercent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20, 5.00, 1, NULL, NULL),
(2, 2, 20, 30, 5.00, 1, NULL, '2020-04-17 16:28:32'),
(3, 3, 30, 50, 5.00, 1, NULL, '2020-04-17 16:28:44'),
(4, 4, 50, 60, 5.00, 1, NULL, '2020-04-17 18:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_id` bigint(20) UNSIGNED DEFAULT NULL,
  `PageSecurity` int(11) DEFAULT NULL,
  `AdminUser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Approvebill` int(11) DEFAULT NULL,
  `agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `dayname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timefrom` time(5) DEFAULT NULL,
  `timeto` time(5) DEFAULT NULL,
  `locked` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `email`, `office_id`, `PageSecurity`, `AdminUser`, `Approvebill`, `agent_id`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `dayname`, `timefrom`, `timeto`, `locked`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 2, '4', 3, NULL, NULL, '$2y$10$9qP8Q13MJsYvsKAKCzw34.KB.nA/uwtFgjCZ9wnwU.3ULX5Qy6lJq', 0, 'YCHtSXkj3vkifQVvtUaz4l5CDhPQmFOytdGoExZaemEwQ5yoOCrGGwszxW4N', NULL, '2020-04-03 15:36:30', 1, NULL, NULL, NULL, NULL),
(2, 'Vladimir Swaniawski', 'abbey.nolan@ledner.com', NULL, 2, '8', 4, NULL, NULL, '$2y$10$iUwcwXfMFYnHrWHsfFIViOg6Bz.Gdxr6ASe2PANXH5WKazsvx5uXy', 0, NULL, NULL, '2020-04-21 02:53:24', 0, NULL, NULL, NULL, NULL),
(3, 'Bobbie Wolff', 'wiza.maribel@cmail.com', NULL, 1, '6', 3, NULL, NULL, '$2y$10$GrWiv477gwVIVbUGrSc5busiBEFxYHFYCPjEBKBXc5FfhBr2jzK6y', 1, NULL, NULL, '2020-04-03 14:31:05', 0, NULL, NULL, NULL, NULL),
(4, 'Gisselle Jakubowski', 'dagmar78@hodkiewicz.com', NULL, 1, '9', 2, NULL, NULL, '$2y$10$wv.1lcv.2lZZjsdR0hpyU.WvtiASej4vZlUXh1wboMXisaciuF5zW', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(5, 'Prof. Reanna Osinski MD', 'wgoyette@luettgen.com', NULL, 2, '3', 6, NULL, NULL, '$2y$10$mZk6c6EbbabCqaj1dH411e9kh4tqDaSBbtdo8vTy3ER8ax6N1pE/u', 1, NULL, NULL, '2020-04-07 12:43:38', 0, NULL, NULL, NULL, NULL),
(6, 'agent', 'desiree.ledner@hotmail.com', NULL, 3, '7', 1, NULL, NULL, '$2y$10$C1I2ycshkPLV9zaojXiZTOhBX7CFzck69dwDkHbU.vj4pM1U5ThT.', 0, 'K0LmlIGWcCmmWhbVFwiHR3SNHlFi8vwT0Q8mwUSu1hwEOZZTpo54NysG9B7o', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(7, 'Reginald O\'Keefe', 'turner.rosamond@monahan.com', NULL, 3, '5', 4, NULL, NULL, '$2y$10$1.AkEsvxkDlc/KTvz4kHte9rqdO/up4SLBdl8QAG3PyrZ0Wns3ahe', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(8, 'Lorenza Rodriguez', 'skyla21@abernathy.com', NULL, 2, '3', 0, NULL, NULL, '$2y$10$0lSTXRJSoWOm7pceFythg.YvJshIIB8BHxKAn/K7NtjJYxWHPWktO', 1, NULL, NULL, '2020-04-07 12:43:51', 0, NULL, NULL, NULL, NULL),
(9, 'Cleo Bashirian', 'alec43@yahoo.com', NULL, 1, '9', 2, NULL, NULL, '$2y$10$cnNTzqgVx7Dy5kr19zZ1.u/ZioZWla10Y7xw2gInUmI/wk2qQmyvu', 0, NULL, NULL, '2020-04-22 04:40:13', 0, NULL, NULL, NULL, NULL),
(10, 'Kariane Gaylord DVM', 'hlesch@lind.com', NULL, 2, '8', 7, NULL, NULL, '$2y$10$g52/4dPGS/p2A131uiihGOj7H/3nSotldyFlK1hKVShN.lA76KPmK', 1, NULL, NULL, '2020-04-07 12:38:04', 0, NULL, NULL, NULL, NULL),
(11, 'Domenica Labadie PhD', 'erika.pacocha@boyer.com', NULL, 2, '6', 2, NULL, NULL, '$2y$10$GtFTCNyWaXawQ.RjFV1MUOIUOJzIUyEUxCuSyOMxC88EBd0IUKBzW', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(12, NULL, 'elda30@yahoo.com', NULL, 2, '5', 5, NULL, NULL, '$2y$10$ew2HvuKBj7ZUtQSPWH2rTuiNlYhhSQ96oXuZisHod2nXeIKzKWRli', 1, NULL, NULL, '2020-04-22 06:07:00', 0, 'Saturday', '23:01:00.00000', '23:05:00.00000', 'on'),
(13, 'Dr. Tamara Pacocha', 'dorthy96@yahoo.com', NULL, 3, '6', 2, NULL, NULL, '$2y$10$hR2nSUMPjgXRTnhQhmu1rOCWKiJblOrN81LGZ5RjonT64RJ6/EN1a', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(14, 'Ms. Lisette Howe IV', 'jerad.wolff@hotmail.com', NULL, 1, '0', 6, NULL, NULL, '$2y$10$tOPXnOl4s2/htFRD2W8X0eo6x0/Fo2B0grGQ/qdfnSc1MBKIzzSuK', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(15, 'Kolby Ward', 'harvey.white@metz.org', NULL, 2, '5', 0, NULL, NULL, '$2y$10$/vxgR84mNmQB9b2zO/rIyO3Kn6MUf0vvZeeltKIfDFjhAKOzdfOJC', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(16, 'Phoebe Dietrichh', 'javon.metz@beier.com', NULL, 1, '6', 9, NULL, NULL, '$2y$10$WQI53NSqqIoV7AXcB8iN0u88k8Mx5VxPbun88k2htnFcFf3xcVJQC', 0, NULL, NULL, '2020-04-03 13:17:15', 0, NULL, NULL, NULL, NULL),
(17, 'Prof. Leanna Johns Sr.', 'roman72@gmail.com', NULL, 1, '2', 5, NULL, NULL, '$2y$10$Fbr2WVBWMdfMJl/YvtNH6uoQI4wqBUjWV0WOAD7mLftW1bI/ASc.S', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(18, 'Juliet Rice DVM', 'madonna.leuschke@gmail.com', NULL, 3, '8', 3, NULL, NULL, '$2y$10$UpcYZici9ERuyu91lUxIC.v4zsGoZ7CyAarpTwCgTGtrSjqJDkBJG', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(19, 'Wava Waelchi', 'torphy.verda@hotmail.com', NULL, 1, '2', 2, NULL, NULL, '$2y$10$Au2mGPBIzaLpJUM9oWHVN.wv9cXT4vGDtsD/SsucGE54ZKpTt95DO', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(20, 'Roy Marquardt', 'cody73@hotmail.com', NULL, 3, '6', 9, NULL, NULL, '$2y$10$F7Dfsi8o7ZSyPamqK15puOnl00UVqfjgcRfZTSOISR9n8y/viqC/K', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(21, 'test', 'test@gmail.com', NULL, 2, 'on', NULL, NULL, NULL, '$2y$10$rUgpi3qocu4qRHN7y7Kajut1L8L0Za2ZMk.mUab0KFKDqxQHKdPay', 0, NULL, '2020-04-02 09:50:35', '2020-04-02 09:50:35', 0, NULL, NULL, NULL, NULL),
(22, 'testgmailemail', 'email@gmail.com', NULL, 2, 'on', NULL, NULL, NULL, '$2y$10$Io/5uUJFbl9kCK/J5m7LLu0ZWQJdfPD1965fa.5octJpPzyIrG2Me', 0, NULL, '2020-04-03 12:48:13', '2020-04-03 12:48:13', 0, NULL, NULL, NULL, NULL),
(23, 'testq', 'qqq@gtmail.com', NULL, 1, 'on', NULL, NULL, NULL, '$2y$10$zT3hYJNXE3ceL.7yBg2iBeFwjyVy7WG26urQ4S8fZiobsGM8xcPQ2', 0, NULL, '2020-04-03 12:49:06', '2020-04-03 12:49:06', 0, NULL, NULL, NULL, NULL),
(24, 'testqaqa', 'sec@gmail.com', NULL, 2, 'on', NULL, NULL, NULL, '$2y$10$GiriLpP4TWvoyEpneGpnx.EjUDYl4b8HEx/Fm93L0znmImcfKNc.y', 0, NULL, '2020-04-03 12:58:33', '2020-04-03 12:58:33', 0, NULL, NULL, NULL, NULL),
(25, 'jhk', 'jhk@gmail.com', NULL, 1, 'on', NULL, NULL, NULL, '$2y$10$CYwQtvQQFiieQ3rE8HPIPuhwHp13wD/WNMscvAvXOWCfbm3uPU2aa', 1, NULL, '2020-04-03 14:13:55', '2020-04-03 14:13:55', 0, NULL, NULL, NULL, NULL),
(26, 'test', 'yyy@gmail.com', NULL, 2, NULL, NULL, NULL, NULL, '$2y$10$w2JxLzUrPrSOETgx9wnUzONLnG.QWgj9o5wANkKiUNRpcwe1Az5Pm', NULL, NULL, '2020-04-17 17:48:27', '2020-04-17 17:48:27', NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:15:15', '2020-04-21 11:15:15', NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:16:12', '2020-04-21 11:16:12', NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:21:13', '2020-04-21 11:21:13', NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:23:17', '2020-04-21 11:23:17', NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:26:17', '2020-04-21 11:26:17', NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:40:43', '2020-04-21 11:40:43', NULL, 'Tuesday', '02:00:00.00000', '02:02:00.00000', NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:47:24', '2020-04-21 11:47:24', NULL, 'Monday', '15:02:00.00000', '16:00:00.00000', 'on'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:48:13', '2020-04-22 06:03:56', NULL, 'Select Day Name', '04:00:00.00000', '05:00:00.00000', NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:50:21', '2020-04-21 11:50:21', NULL, 'Saturday', '16:00:00.00000', '17:00:00.00000', NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:53:10', '2020-04-21 11:53:10', NULL, 'Tuesday', '02:00:00.00000', '02:02:00.00000', NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-21 11:55:19', '2020-04-21 11:55:19', NULL, 'Tuesday', '02:00:00.00000', '02:02:00.00000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zipcodes`
--

CREATE TABLE `zipcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zipcodes`
--

INSERT INTO `zipcodes` (`id`, `zipcode`, `city_id`, `created_at`, `updated_at`) VALUES
(1, '540000', 1, NULL, NULL),
(5, '23480', 7, '2020-04-09 15:11:46', '2020-04-09 15:11:46'),
(6, '56565', 1, '2020-04-09 15:25:29', '2020-04-09 15:25:29'),
(7, '565656', 9, '2020-04-09 15:26:35', '2020-04-09 15:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminexpence`
--
ALTER TABLE `adminexpence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `charge_agent_id_foreign` (`charge_agent_id`);

--
-- Indexes for table `adminform`
--
ALTER TABLE `adminform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentcompanyfiles`
--
ALTER TABLE `agentcompanyfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentinvoicecount`
--
ALTER TABLE `agentinvoicecount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agentinvoicecount_agent_id_foreign` (`agent_id`),
  ADD KEY `agentinvoicecount_user_id_foreign` (`user_id`);

--
-- Indexes for table `agentnotes`
--
ALTER TABLE `agentnotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agentnotes_user_id_foreign` (`user_id`),
  ADD KEY `agentnotes_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `agentrulessetup`
--
ALTER TABLE `agentrulessetup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agentrulessetup_agent_id_foreign` (`agent_id`),
  ADD KEY `agentrulessetup_user_id_foreign` (`user_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agents_zipcode_id_foreign` (`zipcode_id`),
  ADD KEY `agents_user_id_foreign` (`user_id`),
  ADD KEY `agents_city_id_foreign` (`city_id`),
  ADD KEY `agents_state_id_foreign` (`state_id`);

--
-- Indexes for table `agenttierssetup`
--
ALTER TABLE `agenttierssetup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agenttierssetup_agent_id_foreign` (`agent_id`),
  ADD KEY `agenttierssetup_tier_id_foreign` (`tier_id`),
  ADD KEY `agenttierssetup_user_id_foreign` (`user_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `companyadmin`
--
ALTER TABLE `companyadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companymanagment`
--
ALTER TABLE `companymanagment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_country_id_foreign` (`country_id`),
  ADD KEY `company_state_id_foreign` (`state_id`),
  ADD KEY `company_city_id_foreign` (`city_id`),
  ADD KEY `company_zip_id_foreign` (`zip_id`);

--
-- Indexes for table `company_admin`
--
ALTER TABLE `company_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoicemainpayment`
--
ALTER TABLE `invoicemainpayment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoicemainpayment_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoicepayments`
--
ALTER TABLE `invoicepayments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoicepayments_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoicepayments_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_property_id_foreign` (`property_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `invoicesagents`
--
ALTER TABLE `invoicesagents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offices_agent_id_foreign` (`agent_id`),
  ADD KEY `offices_user_id_foreign` (`user_id`);

--
-- Indexes for table `pagesecurity`
--
ALTER TABLE `pagesecurity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagesecurity_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paymenttypes_user_id_foreign` (`user_id`);

--
-- Indexes for table `percentages`
--
ALTER TABLE `percentages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `percentages_user_id_foreign` (`user_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_zipcode_id_foreign` (`zipcode_id`),
  ADD KEY `properties_user_id_foreign` (`user_id`),
  ADD KEY `properties_country_id_foreign` (`country_id`) USING BTREE,
  ADD KEY `properties_state_id_foreign` (`state_id`) USING BTREE;

--
-- Indexes for table `propertieslogs`
--
ALTER TABLE `propertieslogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertieslogs_zipcode_id_foreign` (`zipcode_id`),
  ADD KEY `propertieslogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `propertiesnotes`
--
ALTER TABLE `propertiesnotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertiesnotes_user_id_foreign` (`user_id`);

--
-- Indexes for table `propertyagentinvoices`
--
ALTER TABLE `propertyagentinvoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rules_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `tiers`
--
ALTER TABLE `tiers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tiers_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `UserName` (`UserName`,`email`,`PageSecurity`,`AdminUser`,`password`,`status`),
  ADD KEY `users_office_id_foreign` (`office_id`),
  ADD KEY `users_agent_id_foreign` (`agent_id`);

--
-- Indexes for table `zipcodes`
--
ALTER TABLE `zipcodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zipcodes_city_id_foreign` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminexpence`
--
ALTER TABLE `adminexpence`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `adminform`
--
ALTER TABLE `adminform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `agentcompanyfiles`
--
ALTER TABLE `agentcompanyfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `agentinvoicecount`
--
ALTER TABLE `agentinvoicecount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agentnotes`
--
ALTER TABLE `agentnotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `agentrulessetup`
--
ALTER TABLE `agentrulessetup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `agenttierssetup`
--
ALTER TABLE `agenttierssetup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companyadmin`
--
ALTER TABLE `companyadmin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companymanagment`
--
ALTER TABLE `companymanagment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company_admin`
--
ALTER TABLE `company_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `invoicemainpayment`
--
ALTER TABLE `invoicemainpayment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicepayments`
--
ALTER TABLE `invoicepayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoicesagents`
--
ALTER TABLE `invoicesagents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pagesecurity`
--
ALTER TABLE `pagesecurity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `percentages`
--
ALTER TABLE `percentages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `propertieslogs`
--
ALTER TABLE `propertieslogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertiesnotes`
--
ALTER TABLE `propertiesnotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propertyagentinvoices`
--
ALTER TABLE `propertyagentinvoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tiers`
--
ALTER TABLE `tiers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `zipcodes`
--
ALTER TABLE `zipcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agentinvoicecount`
--
ALTER TABLE `agentinvoicecount`
  ADD CONSTRAINT `agentinvoicecount_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentinvoicecount_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agentnotes`
--
ALTER TABLE `agentnotes`
  ADD CONSTRAINT `agentnotes_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentnotes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agentrulessetup`
--
ALTER TABLE `agentrulessetup`
  ADD CONSTRAINT `agentrulessetup_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentrulessetup_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `agents_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `agents_zipcode_id_foreign` FOREIGN KEY (`zipcode_id`) REFERENCES `zipcodes` (`id`);

--
-- Constraints for table `agenttierssetup`
--
ALTER TABLE `agenttierssetup`
  ADD CONSTRAINT `agenttierssetup_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agenttierssetup_tier_id_foreign` FOREIGN KEY (`tier_id`) REFERENCES `tiers` (`id`),
  ADD CONSTRAINT `agenttierssetup_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `invoicemainpayment`
--
ALTER TABLE `invoicemainpayment`
  ADD CONSTRAINT `invoicemainpayment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoicepayments`
--
ALTER TABLE `invoicepayments`
  ADD CONSTRAINT `invoicepayments_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `invoicepayments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `offices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pagesecurity`
--
ALTER TABLE `pagesecurity`
  ADD CONSTRAINT `pagesecurity_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `paymenttypes`
--
ALTER TABLE `paymenttypes`
  ADD CONSTRAINT `paymenttypes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `percentages`
--
ALTER TABLE `percentages`
  ADD CONSTRAINT `percentages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `properties_zipcode_id_foreign` FOREIGN KEY (`zipcode_id`) REFERENCES `zipcodes` (`id`);

--
-- Constraints for table `propertieslogs`
--
ALTER TABLE `propertieslogs`
  ADD CONSTRAINT `propertieslogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `propertieslogs_zipcode_id_foreign` FOREIGN KEY (`zipcode_id`) REFERENCES `zipcodes` (`id`);

--
-- Constraints for table `propertiesnotes`
--
ALTER TABLE `propertiesnotes`
  ADD CONSTRAINT `propertiesnotes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `tiers`
--
ALTER TABLE `tiers`
  ADD CONSTRAINT `tiers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `users_office_id_foreign` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `zipcodes`
--
ALTER TABLE `zipcodes`
  ADD CONSTRAINT `zipcodes_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
