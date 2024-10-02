-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 06:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passvery_ds_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `password`, `date`, `email`) VALUES
(1, '22222@@#', 'Leeds2022@@#', '2022-09-12 00:00:00', 'info@passveryfast.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `sender_userid` int(11) NOT NULL,
  `reciever_userid` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_login_details`
--

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_typing` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `current_session` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
(1, 'Rose', '123', 'user1.jpg', 3, 1),
(2, 'Smith', '123', 'user2.jpg', 1, 0),
(3, 'adam', '123', 'user3.jpg', 1, 1),
(4, 'Merry', '123', 'user4.jpg', 0, 0),
(5, 'katrina', '123', 'user5.jpg', 0, 0),
(6, 'Rhodes', '123', 'user6.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `best_seller` varchar(255) DEFAULT NULL,
  `seller` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `amount`, `time`, `detail`, `best_seller`, `seller`, `color`) VALUES
(1, 'Manual Car', '275', '5', 'This PASS VERY FAST course is ideal for someone who has not been able to pass their test and would like to resit their test within just a few weeks gap in between tests.', '', 'Refresher course', '#ffff00'),
(2, 'Manual Car', '550', '10', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', '', 'Refresher course', '#ffff00'),
(3, 'Manual Car', '825', '15', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', '', 'Refresher course', '#ffff00'),
(4, 'Manual Car', '1100', '20', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', 'BEST SELLER', 'Refresher course', '#ffff00'),
(5, 'Manual Car', '1375', '25', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', '', 'Intermediate course', '#00ff00'),
(8, 'Manual Car ', '1650', '30', 'This PASS VERY FAST course is ideal for learner drivers who have driven a car a few times but have limited experience. You will build upon your current abilities and incorporate new skills to become test-ready.', '', 'Intermediate course', '#00ff00'),
(10, 'Automatic Car ', '560', '10', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', '', 'Refresher course', '#ffff00'),
(11, 'Manual Car ', '1905', '35', 'This PASS VER FAST course is great for someone with a few lessons worth of experience and wish to learn the rest of the driving very fast and ultimately pass very fast.', '', 'Intermediate course', '#00ff00'),
(12, 'Manual Car ', '2100', '40', 'This PASS VERY FAST course is great for you if your almost a beginner and wish to learn all the required skills as fast as possible.', '', 'Beginner course', '#00ffff'),
(13, 'Manual Car ', '2340', '45', 'This PASS VERY FAST course is fantastic for you if you have a couple of lessons and wish to pass from almost a beginning stage.', '', 'Beginner course', '#00ffff'),
(14, 'Manual Car ', '2550', '50', 'This PASS VERY FAST course is fantastic for you if you are a complete beginner.', 'Best Seller', 'Beginner course', '#00ffff'),
(15, 'Automatic Car ', '840', '15', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.		', '', 'Refresher course', '#ffff00'),
(16, 'Automatic Car ', '1120', '20', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', 'BEST SELLER', 'Refresher course', '#ffff00'),
(17, 'Automatic Car ', '1400', '25', 'This PASS VERY FAST course will help you figure out what went wrong, build your confidence and ultimately get you passed.', '', 'Intermediate course', '#00ff00'),
(18, 'Automatic Car ', '1680', '30', 'This PASS VERY FAST course is ideal for learner drivers who have driven a car a few times but have limited experience. You will build upon your current abilities and incorporate new skills to become test-ready.		', '', 'Intermediate course', '#00ff00'),
(19, 'Automatic Car ', '1960', '35', 'This PASS VER FAST course is great for someone with a few lessons worth of experience and wish to learn the rest of the driving very fast and ultimately pass very fast.		', '', 'Intermediate course', '#00ff00'),
(20, 'Automatic Car ', '2240', '40', 'This PASS VERY FAST course is great for you if your almost a beginner and wish to learn all the required skills as fast as possible.		\r\n', 'BEST SELLER', 'Beginner course', '#00ffff'),
(21, 'Automatic Car ', '2520', '45', 'This PASS VERY FAST course is fantastic for you if you have a couple of lessons and wish to pass from almost a beginning stage.', 'Best Seller ', 'Beginner course', '#00ffff'),
(22, 'Automatic Car ', '2700', '50', 'This PASS VERY FAST course is fantastic for you if you are a complete beginner.		', '', 'Beginner course', '#00ffff');

-- --------------------------------------------------------

--
-- Table structure for table `driving_apponimnet`
--

CREATE TABLE `driving_apponimnet` (
  `id` int(11) NOT NULL,
  `dates` varchar(255) DEFAULT NULL,
  `times` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_registration`
--

CREATE TABLE `instructor_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_code` varchar(100) NOT NULL,
  `email_status` varchar(100) NOT NULL,
  `user_status` varchar(100) NOT NULL DEFAULT 'Active',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `phone2` varchar(255) DEFAULT NULL,
  `AdiBadge` varchar(255) DEFAULT NULL,
  `AdiBadgeFront` varchar(255) DEFAULT NULL,
  `AdiBadgeBack` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `instructor_registration`
--

INSERT INTO `instructor_registration` (`id`, `first_name`, `last_name`, `email`, `address`, `country`, `phone`, `password`, `email_code`, `email_status`, `user_status`, `date`, `phone2`, `AdiBadge`, `AdiBadgeFront`, `AdiBadgeBack`) VALUES
(11, 'Hayes', 'Laurel', 'laho@mailinator.com', 'xyrasewawu@mailinator.com', '', 'Carol', 'Pa$$w0rd!', '68303396', 'Pending', 'Active', '2022-12-08 11:58:38', NULL, NULL, '', NULL),
(12, 'Howard', 'Ulysses', 'daxoxeg@mailinator.com', 'wacykixuz@mailinator.com', '-', '3', 'Pa$$w0rd!', '64923680', 'Pending', 'Active', '2022-12-08 13:12:29', NULL, NULL, '', NULL),
(13, 'Melodie', 'Stephens', 'jiricufexy@mailinator.com', 'Officia reprehenderi', 'Duis et consequat Q', '80', 'Pa$$w0rd!', '47163829', 'Verified', 'Active', '2022-12-13 06:54:39', NULL, NULL, '', NULL),
(15, 'Sal', 'C', 'salcann19@gmail.com', '12 dj', '-', '07463325182', '', '3948871', 'Verified', 'Active', '2022-12-19 10:24:59', '074', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `iv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `iv`) VALUES
(1, '138664630', '1477873628', 'Qpm2Ktehfe79', '34a82d9dbecfed2c38229c69fb69f3fe'),
(2, '1477873628', '138664630', 'k38j', 'a866cea5908aec692acfa702956bda8e'),
(3, '1477873628', '138664630', 'RrCGYDXRaJbdGoQ=', '4474af02bdca7be93540016dc4bc3a51'),
(4, '138664630', '1477873628', 'UMIwfG+HTsEjgUr+qeS9IasWn4Y=', 'ba103c4d3b77170f85f0d026b77024ca'),
(5, '261580543', '372916476', 'PquKUZSVYdSJg1uPR5fKrjBvdyi1iw==', 'f2c9567a302bac505401fad3e29f542a'),
(6, '261580543', '372916476', 'PfIthlRlZYe2gN18pUmRiT6LxA==', '244455ae33293988a5a40234201bfa11'),
(7, '261580543', '372916476', 'AVQ3zkijTUzxyhoOiw86TmLNBA==', '9b155e6953bccaf38257b3ffc663c915'),
(8, '261580543', '372916476', 'pu/EhJMl8nA1Fat0TZcrr6JeXA==', 'b6ce87608958b28c225125d08e1734ef'),
(9, '261580543', '372916476', '8ZTsPKCmfi9If67Qx6ATVSDiIg==', '58bf2d423e402e2feadf12320f9b620a'),
(10, '261580543', '372916476', 'uIVZa7ZNQSqyg3geuXyE3nj8rA==', 'd251e7135cab6ee3be823fc1435f785e'),
(11, '261580543', '372916476', 'r8c7pA+k06dp8Yr3awCMmCcxIQ==', 'c282393cf2203b31a552962cce9fdba5'),
(12, '1650813545', '372916476', 'bdB6ng==', '06b6cdd2b84fa7c0b118e0fc36452a50'),
(13, '1650813545', '372916476', 'NeUqzA==', 'efec6fd6171404f455225210009168fb'),
(14, '1650813545', '372916476', '19buSQ==', '084293eb67164bd4092ad840d26fc8aa'),
(15, '1650813545', '372916476', 'Tv4Hkw==', '09bc94e637b89ef7c084362b72cdd946'),
(16, '1650813545', '372916476', 'eM3VGg==', 'ad98985013bc7f959ab15b90df2c8690'),
(17, '1650813545', '372916476', 'HWCf/w==', 'be660fb696dbca96357850ae25d18a50'),
(18, '1063008019', '372916476', 'QrIBGw==', '12b3de6eec4637cce6b92fffe613bc4c'),
(19, '1063008019', '372916476', 'M4Z3tw==', '8e95f07344af2cf74546ec8a8d7f24f2'),
(20, '339210249', '372916476', 'HA==', 'f61b90a4e5cd6984665ef75b157bc954'),
(21, '339210249', '372916476', 'Bg==', 'd28f024be0d2fc1155925bec8795566d'),
(22, '339210249', '372916476', 'FA==', 'e6c99db3b216ccceadc0807c8ef015b4'),
(23, '339210249', '372916476', 'uZIZpHo=', '31980397347a98e9bad234154007e28a'),
(24, '339210249', '372916476', 'wwoEGF8=', 'e31e5117ce22cad20456b15481892b14'),
(25, '339210249', '372916476', 'flc++6U=', 'a39c2380679289004b7274358b827e93'),
(26, '339210249', '372916476', 'uB/fhjo=', 'f829cf40bc02c2ff108c9accb7c12b0d'),
(27, '339210249', '372916476', '2BRvrso=', 'e36a3189c4facee8d1ea9ca13f2450da'),
(28, '312020073', '372916476', 'hA==', '8c79f4f8770f89e6999489ca78fb5866'),
(29, '312020073', '372916476', '8g==', 'fd45c0b0459d84b24037e605e943e33a'),
(30, '312020073', '372916476', 'GngzJQ==', '81aa568b28d5d9b693c4f602c1eddaf5'),
(31, '312020073', '372916476', 'W7/jEA==', '53e0c4f275ad5f6d30fb77eda75364b2'),
(32, '312020073', '372916476', 'MGPRFA==', '9e6c92f89463eb820c035e9fea330fcd'),
(33, '312020073', '372916476', '/W5yog==', '578d76a743bc9ab88445bacf229571b5'),
(34, '312020073', '372916476', 'JIynkg==', 'fdc8a70d7d45a31e83ec6a25efb1a0d9'),
(35, '312020073', '372916476', '7NfJgg==', 'd269eda24d42c2b255500ed2ae1e6d4a'),
(36, '312020073', '372916476', 'edz/ZznG', '1e9629a2d9ae647f845c7c60e2f41cee');

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `id` int(11) NOT NULL,
  `Fromuser` int(100) NOT NULL,
  `Touser` int(100) NOT NULL,
  `Messege` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `offer_time` varchar(255) NOT NULL,
  `offer_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offer_name`, `offer_time`, `offer_price`) VALUES
(4, '30 Hours Block Driving Test', '1', 353),
(5, '30 Hours Block Driving Test again again', '1', 344);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `progress1` varchar(100) NOT NULL,
  `progress2` varchar(50) NOT NULL,
  `progress3` varchar(50) NOT NULL,
  `progress4` varchar(50) NOT NULL,
  `progress5` varchar(50) NOT NULL,
  `progress6` varchar(50) NOT NULL,
  `progress7` varchar(50) NOT NULL,
  `progress8` varchar(50) NOT NULL,
  `progress9` varchar(50) NOT NULL,
  `progress10` varchar(50) NOT NULL,
  `progress11` varchar(50) NOT NULL,
  `progress12` varchar(50) NOT NULL,
  `progress13` varchar(50) NOT NULL,
  `progress14` varchar(50) NOT NULL,
  `progress15` varchar(50) NOT NULL,
  `progress16` varchar(50) NOT NULL,
  `progress17` varchar(50) NOT NULL,
  `progress18` varchar(50) NOT NULL,
  `progress19` varchar(50) NOT NULL,
  `progress20` varchar(50) NOT NULL,
  `progress21` varchar(50) NOT NULL,
  `progress22` varchar(50) NOT NULL,
  `progress23` varchar(50) NOT NULL,
  `progress24` varchar(50) NOT NULL,
  `progress25` varchar(50) NOT NULL,
  `progress26` varchar(50) NOT NULL,
  `progress27` varchar(50) NOT NULL,
  `progress28` varchar(50) NOT NULL,
  `progress29` varchar(50) NOT NULL,
  `progress30` varchar(50) NOT NULL,
  `progress31` varchar(50) NOT NULL,
  `progress32` varchar(50) NOT NULL,
  `progress33` varchar(50) NOT NULL,
  `progress35` varchar(50) NOT NULL,
  `progress36` varchar(50) NOT NULL,
  `progress37` varchar(50) NOT NULL,
  `progress38` varchar(50) NOT NULL,
  `progress39` varchar(50) NOT NULL,
  `progress40` varchar(50) NOT NULL,
  `progress41` varchar(50) NOT NULL,
  `progress42` varchar(50) NOT NULL,
  `progress43` varchar(50) NOT NULL,
  `progress44` varchar(50) NOT NULL,
  `progress45` varchar(50) NOT NULL,
  `progress46` varchar(50) NOT NULL,
  `progress47` varchar(50) NOT NULL,
  `progress48` varchar(50) NOT NULL,
  `progress49` varchar(50) NOT NULL,
  `progress50` varchar(50) NOT NULL,
  `progress51` varchar(50) NOT NULL,
  `progress52` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `information` varchar(255) DEFAULT NULL,
  `progress53` varchar(255) DEFAULT NULL,
  `progress54` varchar(255) DEFAULT NULL,
  `progress55` varchar(255) DEFAULT NULL,
  `progress56` varchar(255) DEFAULT NULL,
  `progress57` varchar(255) DEFAULT NULL,
  `progress58` varchar(255) DEFAULT NULL,
  `progress59` varchar(255) DEFAULT NULL,
  `progress60` varchar(255) DEFAULT NULL,
  `progress61` varchar(255) DEFAULT NULL,
  `progress62` varchar(255) DEFAULT NULL,
  `progress63` varchar(255) DEFAULT NULL,
  `progress64` varchar(255) DEFAULT NULL,
  `progress65` varchar(255) DEFAULT NULL,
  `progress66` varchar(255) DEFAULT NULL,
  `progress67` varchar(255) DEFAULT NULL,
  `progress68` varchar(255) DEFAULT NULL,
  `progress69` varchar(255) DEFAULT NULL,
  `progress70` varchar(255) DEFAULT NULL,
  `admin_per_info` text DEFAULT NULL,
  `progress71` varchar(255) DEFAULT NULL,
  `overtaking` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `user_id`, `progress1`, `progress2`, `progress3`, `progress4`, `progress5`, `progress6`, `progress7`, `progress8`, `progress9`, `progress10`, `progress11`, `progress12`, `progress13`, `progress14`, `progress15`, `progress16`, `progress17`, `progress18`, `progress19`, `progress20`, `progress21`, `progress22`, `progress23`, `progress24`, `progress25`, `progress26`, `progress27`, `progress28`, `progress29`, `progress30`, `progress31`, `progress32`, `progress33`, `progress35`, `progress36`, `progress37`, `progress38`, `progress39`, `progress40`, `progress41`, `progress42`, `progress43`, `progress44`, `progress45`, `progress46`, `progress47`, `progress48`, `progress49`, `progress50`, `progress51`, `progress52`, `date`, `information`, `progress53`, `progress54`, `progress55`, `progress56`, `progress57`, `progress58`, `progress59`, `progress60`, `progress61`, `progress62`, `progress63`, `progress64`, `progress65`, `progress66`, `progress67`, `progress68`, `progress69`, `progress70`, `admin_per_info`, `progress71`, `overtaking`) VALUES
(22, '3', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aaa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '', '2022-10-14 05:27:49', 'information', 'aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(146, '268', '5', '5', '', '', '5', '5', '', '5', '', '', '', '5', '', '5', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-19 20:24:50', 'Covered moving off and stopping and Junctions turning and emerging left. Performed really well on everything. Well done! âœ”ï¸ ', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Recap on Junctions turning and emerging left  and move onto Junctions turning and emerging right and main roads after that.', '', ''),
(143, '262', '5', '2', '', '', '4', '', '4', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-18 14:01:27', 'Need more work on moving off and stopping! A great lesson overall. Well done! âœ”ï¸ ', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Recap on moving off and stopping, moving off is better, work mainly on pulling up on the left.', '', ''),
(141, '259', '5', '5', '', '', '4', '3', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-15 21:00:38', 'We did cockpit drill, introduction of the vehicle and moving off and stopping today.', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Will need to do some Junctions and Crossroads next.', '', ''),
(145, '267', '4', '', '', '', '', '4', '4', '', '', '', '4', '4', '4', '4', '', '', '4', '4', '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '', '4', '6', '', '', '', '', '', '', '', '', '', '', '', '6', '2022-12-19 15:34:35', 'We have covered some roundabouts today and need some more practice on 3rd exits.\r\n\r\nNeed a bit more work on steering, mainly around sharp corners.\r\n\r\nWatch your lane discipline.', '4', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', 'Recap on roundabouts and move onto reversing on our next lesson.', '', ''),
(142, '261', '5', '5', '', '', '5', '5', '5', '', '', '', '5', '5', '5', '5', '', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '5', '', '', '4', '', '', '3', '5', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-16 20:32:06', 'A fantastic lesson today! Well done! âœ”ï¸ ', '4', '', '5', '4', '', '', '', '', '', '4', '', '', '5', '', '', '', '', '', 'Need to move onto Crossroads next after a bit of recap on main roads', '', ''),
(140, '234', '5', 'Pull up on the left', '5', '3', '5', '6', 'Observation', 'Speed on approach', '4', '5', '2', '1', '1', '6', '5', '5', '6', '4', 'Roundabouts - Advanced level', '1', '2', 'Reverse park', '6', '5', '2', 'Reverse bay park - Left', '4', '1', 'Reverse around the corner - Left', '5', '2', '5', '4', '1', '5', '2', 'Safe distance while stationary', '2', '2', '6', '', '2', 'Test routes', '1', '3', '2', 'Emergency stop', '5', 'Tell me questions', '6', '4', '2022-12-15 18:40:43', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(126, '238', '5', '', '', '', '', '5', '5', '5', '', '', '', '', '', '', '', '', '5', '5', '3', '', '', '', '', '', '', '', '', '', '', '', '4', '4', '', '4', '4', '', '', '', '4', '', '', '', '3', '', '', '', '', '', '', '', '5', '2022-12-11 09:28:48', 'Did some test routes. Need to do some more test routes and cover fast speed roads a little more.\r\n\r\nNeed a full recap on all of the manoeuvres.', '5', '', '', '', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', ''),
(124, '236', '5', '4', '', '', '5', '5', '5', '', '', '', '5', '5', '5', '5', '', '4', '5', '4', '', '', '', '5', '', '', '5', '5', '', '', '', '', '', '', '', '', '5', '5', '5', '5', '6', '', '', '', '', '', '', '', '', '', '', '', '6', '2022-12-10 18:30:06', 'Covered Reverse bay park right and left, also the Reverse park. They were all great. Keep up with the observations.\r\n\r\nWe\'ll do the meeting traffic and the test routes on our next lesson.', '4', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', ''),
(136, '252', '5', '5', '', '', '4', '5', '4', '4', '', '', '5', '4', '5', '4', '', '4', '4', '4', '', '4', '1', '', '', '', '', '', '', '', '', '', '4', '4', '', '3', '4', '', '', '4', '6', '', '', '', '', '', '', '', '', '', '', '', '6', '2022-12-14 17:06:05', 'Did some roundabouts today, will need a detailed recap on roundabouts.\r\n\r\nPerformed really well on crossroads and now you have the better understanding about them.\r\n\r\nBe careful of Junctions emerging left.', '4', '', '5', '4', '5', '', '', '', '', '4', '', '', '4', '5', '4', '', '', '', 'Recap on roundabouts on our next lesson and move onto reversing in a straight line thereafter.', '', ''),
(138, '257', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-15 16:19:27', 'Work more on Roundabouts - advanced level. Explained all this on our lesson today just need more practice on when to go on Roundabouts. \r\n\r\nPractice more on test routes.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(134, '250', '4', '2', '', '', '2', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-14 09:16:32', 'We have covered cockpit drill and moving off and stopping today. Need plenty of practice on moving off and stopping on our next lesson.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(135, '251', '5', '5', '', '', '5', '5', '5', '5', '4', '', '5', '5', '5', '5', '5', '', '5', '5', '4', '5', '4', '', '', '', '', '', '', '', '', '', '4', '5', '', '4', '4', '5', '4', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-14 14:28:02', 'Watch the gears a little more. We\'ll do soke more test routes on our next lesson.', '5', '', '5', '5', '5', '4', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', ''),
(132, '247', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-13 12:58:26', 'Pull up on the left, park on the left, stop on the left are the same.\r\nMove off, pull away or go is the same.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, '249', '4', '4', '', '', '4', '4', '2', '', '', '', '', '', '', '', '', '2', '3', '3', '2', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '3', '3', '4', '3', '5', '3', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-13 14:43:38', '', '2', '', '5', '4', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', '', '', ''),
(129, '243', '5', '4', '', '', '5', '4', '5', '', '', '', '5', '5', '5', '5', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-12 15:20:19', 'We did some Junctions and main roads today.\r\nMain roads need a bit more work.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Recap on main road and move onto Crossroads thereafter.', '', ''),
(130, '244', '5', '4', '', '', '4', '4', '5', '4', '', '', '5', '5', '5', '4', '', '1', '5', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '3', '4', '4', '4', '', '5', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-12 17:08:07', 'Did some roundabouts today. Need a full detailed step by step guidance on roundabouts.', '4', '', '3', '', '', '1', '4', '', '', '3', '', '', '', '', '', '', '', '', 'Guide Wai full on roundabouts, be very careful of the steering on roundabouts.\r\n\r\nNeed more work on scanning and planning towards roundabouts.', '', ''),
(131, '245', '5', '5', '', '', '5', '4', '4', '3', '', '', '5', '5', '5', '4', '', '2', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '4', '', '3', '4', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-12 19:25:22', 'Need more work on scanning and planning and Junctions emerging left. Crossroads will be the next step forward.\r\n', '4', '', '', '4', '', '', '', '', '', '3', '', '', '5', '5', '', '', '', '', 'Explained Crossroads fully, will need to practice them a lot. We didn\'t have enough time to practice the Crossroads on our previous lessons so I Explained them only.', '', ''),
(128, '242', '5', '4', '5', '5', '4', '4', '4', '', '', '', '5', '5', '5', '4', '', '3', '4', '4', '', '', '1', '', '', '', '', '', '3', '', '', '', '', '4', '', '3', '4', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-11 16:07:35', 'A. Need to work on efficiency at roundabouts.\r\nB. Watch your speed(especially in 20 zones).\r\nC. I\'ll explain the speed fully on one of our future lessons.\r\nD. Work more on straight line reverse on the right hand side on the road.\r\nE. Exaggerate a bit more', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Will need to practise more on Reverse on the right. Need plenty of practice.', '', ''),
(137, '255', '5', '4', '', '', '5', '5', '4', '4', '', '', '5', '5', '5', '5', '', '3', '5', '5', '3', '', '2', '', '', '', '', '', '', '', '', '', '4', '4', '', '4', '4', '5', '5', '5', '4', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-15 13:58:05', 'Did some meeting traffic today, will need to work on meeting traffic a lot more on our next lesson.', '4', '', '5', '', '', '2', '', '', '', '3', '', '', '', '', '', '', '', '', 'Work more on scanning planning and preparation. Really important.', '', ''),
(127, '240', '5', '5', '', '', '4', '4', '4', '', '', '', '5', '5', '5', '5', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '', '4', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-11 13:32:39', 'Did some main roads today. Be super careful of the closed Junctions(don\'t check really early on approach and assume it\'s going to be safe for you to pull out, mainly check as you get really close to the give way lines).\r\n\r\nBe careful of the gears and peda', '4', '', '', '', '', '', '', '', '', '3', '', '', '', '', '', '', '', '', 'Move onto Crossroads next', '', ''),
(116, '157', '5', '5', '', '', '4', '5', '5', '5', '', '', '5', '5', '5', '5', '', '', '5', '5', '1', '', '', '', '5', '5', '4', '', '', '', '', '', '5', '4', '4', '4', '4', '4', '5', '5', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-08 18:56:04', 'Did forward bay park right and left - Did Reversebay park right(need a complete recap) - will need work on Reverse bay park left on our next lesson.', '5', '', '', '', '', '', '', '', '', '', '', '', '5', '5', '', '', '', '', 'Recap on the test area of Clodcotes Drive.\r\n\r\nNeed to work ok efficiency in doing things. E.g. taking safe clear gaps as they arrive when going in or pulling out of Junctions or responding to safe gaps at roundabouts.', '', ''),
(144, '266', '5', '5', '', '', '5', '4', '5', '', '', '', '5', '5', '5', '5', '', '', '5', '4', '1', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '', '5', '', '', '', '6', '', '', '', '', '', '', '', '', '', '', '', '6', '2022-12-19 13:24:49', 'Recap on Crossroads and fully recap on roundabouts. We gave covered roundabouts today, just require a deep recap on them.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Move onto reversing in a straight line on our next lesson.', '', ''),
(113, '114', '4', '4', '', '', '4', '4', '4', '', '', '', '4', '4', '4', '4', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-07 14:24:28', 'Performed a lot better after a massive gap in between lessons. Pat more attention to Scanning and planning.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', 'Work on Crossroads and roundabouts next. Focus on Crossroads as a new subject.', '', ''),
(125, '237', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-10 20:59:20', 'A. Recap on all of the manoeuvres.\r\n\r\nB. Work on 3rd/4th exits when leaving big roundabouts.\r\n\r\nC. Work more on awareness and planning. Checking the road markings and planning ahead etc.\r\n\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Cover the King lane roundabout - long one.\r\n\r\nCover the car park on King Lane.\r\n\r\nCover more of country roads.', '', ''),
(120, '158', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-10 07:48:12', 'Fixed the gears and the pedals issue. Need a bit of work on scanning and planning. \r\n\r\nRecap on all of the above and move on to steering and Junctions(sharp ones especially).', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Worked on gears and Pedals today. Need more work on scanning and planning and steering.', '', ''),
(119, '230', '5', '5', '', '', '5', '5', '3', '4', '', '', '5', '5', '5', '5', '', '4', '5', '4', '', '4', '', '', '5', '5', '5', '5', '', '', '', '', '', '4', '', '4', '4', '5', '4', '5', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-09 14:20:16', 'Don\'t forget the seat belt as a part of the cockpit drill before your start to drive.\r\n\r\nDid some bay parking, forward and reverse - need more work on observations.\r\n\r\nNeed a full recap on roundabouts.\r\n\r\nWatch your gears a little more.\r\n\r\nBe careful of P', '5', '', '5', '5', '5', '3', '5', '', '', '4', '', '', '', '', '', '', '', '', '', '', ''),
(121, '231', '5', '4', '', '', '5', '5', '5', '4', '4', '1', '5', '5', '5', '4', '5', '4', '5', '5', '1', '4', '3', '', '5', '5', '5', '5', '', '', '', '', '3', '5', '', '4', '4', '5', '5', '5', '4', '', '', '', '3', '', '', '', '', '', '', '', '4', '2022-12-10 08:58:54', 'We need to work on manoeuvres. Observation on manoeuvres is very weak! \r\nThe Observation element needs a lot of attention.\r\n\r\nCover more of test routes.\r\n\r\nFocus a bit more on gears and Pedals.', '4', '', '5', '4', '5', '4', '5', '4', '', '4', '', '', '', '', '', '', '', '', 'Work more on Advanced level - Roundabouts.\r\n\r\nAssessing when to go on Junctions - explain this bit fully.\r\n\r\nCover the emergency stop.\r\n\r\nNeed to work on awareness, planning and preparation.\r\n\r\nMeeting traffic and spatial awareness needs a lot of practice.\r\n\r\nWork more on moving off and stopping.', '', ''),
(123, '233', '4', '5', '', '', '5', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-10 14:24:20', 'Did some moving off and stopping today, explained, practiced and improved on moving off and stopping fully.\r\n\r\nSteering is good but will need a little more practice on that which can be done as we\'re practicing our next subject(Junctions).', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Recap on moving off and move onto Junctions thereafter.', '', ''),
(115, '117', '5', '4', '', '', '4', '5', '4', '5', '', '', '5', '5', '5', '5', '', '3', '5', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-08 16:29:49', 'Did a recap on roundabouts today. Need a recap on roundabouts.', '4', '', '', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Need some more practice on roundabouts. Move onto Reversing in a straight line on our next lesson.', '', ''),
(111, '112', '5', '4', '5', '5', '5', '5', '5', '4', '', '1', '5', '5', '5', '4', '', '3', '4', '4', '', '3', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '1', '4', '4', '3', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-05 21:26:35', 'Need work on the timing of signals, and mirrors.\r\n\r\nDid some parallel parking today, will need a recap on this on our next lesson.\r\n\r\nNeed to cover more test routes on our next lesson and we\'ll try and finish all the manoeuvres off.\r\n', '4', '', '', '4', '', '2', '', '', '', '4', '', '', '', '5', '', '', '', '', 'Will need to move onto bay parking on our next lesson.\r\n\r\nTry and cover more test routes.\r\n\r\nExplained how to judge safe gaps before pulling out of Junctions but need a lot more practice on judgment skills.', '', ''),
(112, '113', '5', '5', '', '', '5', '4', '5', '5', '', '', '5', '5', '5', '5', '', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '3', '4', '5', '5', '5', '5', '', '', '', '', '', '', '', '', '', '', '', '5', '2022-12-06 20:52:54', 'Did some Crossroads today, will need a little recap on Crossroads but they\'re really good overall.', '5', '', '', '4', '', '', '5', '', '', '', '', '', '4', '', '', '', '', '', 'Next step is to do some roundabouts after recapping Crossroads a little.', '', ''),
(106, '106', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-04 16:32:01', 'Need to work on \r\nspeed\r\nSwitching lanes\r\nSelby/Crossgates - test route\r\nAll of the manoeuvres \r\nAll of the car parks\r\nSat nav', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, '108', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-04 18:58:12', 'Recap show and tell Qs\r\nOpen the bonnet\r\nEmergency stop', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, '102', '5', '4', '', '', '5', '4', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', '', '', '', '', '', '', '2022-12-03 17:00:54', 'Need work on steering and Junctions.', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Great lesson but need a few lessons.', '', ''),
(122, '232', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '5', '', '5', '', '', '5', '', '', '', '', '4', '5', '', '', '', '', '', '5', '2022-12-10 14:01:44', 'Need to practise and require a full explanation on joining and leaving the motorway and everything in between(e.g Reading the road markings and staying in lane on major high speed roundabouts).', '', '', '', '', '', '', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', ''),
(109, '110', '4', '4', '', '', '4', '4', '4', '4', '', '', '4', '4', '4', '4', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '4', '5', '4', '3', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-05 13:38:21', 'Need to work on general driving. Mainly scanning and planning.\r\n\r\nMoving off\r\n1. Get the car ready\r\n2. Look  around plus indicate(when it\'s safe to indicate).\r\n3. Move off', '4', '', '4', '3', '4', '3', '5', '', '', '3', '', '', '3', '', '', '', '', '', 'Work more on scanning, planning and preparation - really important.', '', ''),
(104, '104', '5', '5', '', '', '5', '5', '5', '', '', '', '5', '5', '5', '5', '', '4', '5', '5', '3', '', '2', '', '', '', '', '', '', '', '', '', '', '5', '', '4', '5', '', '', '', '4', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-04 11:06:02', 'Too much rushing towards Junctions etc. A better control of the speed would be necessary.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Work more on meeting traffic, and test routes.\r\n\r\nToo fast on the approach to Junctions etc would also need a bit of attention. Scanning, planning and preparation need work.', '', ''),
(105, '105', '5', '4', '', '', '5', '4', '4', '2', '', '', '4', '4', '4', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '', '', '4', '4', '3', '3', '3', '', '', '', '', '', '', '', '', '', '', '', '4', '2022-12-04 13:17:38', 'We are on main roads level now - done some Junctions. Need to work more on overall general driving.', '4', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Scanning planning and preparation.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `product_name`, `product_price`, `product_img`) VALUES
(10, 'again test', 343433, '198654346444989a481b08107e594ddfaf679bb3.jpeg'),
(11, 'last time test', 3234332, '934cf54b8db980703480a324cf19b83b38437ab5.png'),
(12, 'Test Update', 11111, 'download (1).jpg'),
(13, 'Cars Parts,Headlights,starings  etc,', 45, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject1` varchar(200) NOT NULL,
  `subject2` varchar(200) NOT NULL,
  `subject3` varchar(200) NOT NULL,
  `subject4` varchar(200) NOT NULL,
  `subject5` varchar(200) NOT NULL,
  `subject6` varchar(200) NOT NULL,
  `subject7` varchar(200) NOT NULL,
  `subject8` varchar(200) NOT NULL,
  `subject9` varchar(200) NOT NULL,
  `subject10` varchar(200) NOT NULL,
  `subject11` varchar(200) NOT NULL,
  `subject12` varchar(200) NOT NULL,
  `subject13` varchar(200) NOT NULL,
  `subject14` varchar(200) NOT NULL,
  `subject15` varchar(200) NOT NULL,
  `subject16` varchar(200) NOT NULL,
  `subject17` varchar(200) NOT NULL,
  `subject18` varchar(200) NOT NULL,
  `subject19` varchar(200) NOT NULL,
  `subject20` varchar(200) NOT NULL,
  `subject21` varchar(200) NOT NULL,
  `subject22` varchar(200) NOT NULL,
  `subject23` varchar(200) NOT NULL,
  `subject24` varchar(200) NOT NULL,
  `subject25` varchar(200) NOT NULL,
  `subject26` varchar(200) NOT NULL,
  `subject27` varchar(200) NOT NULL,
  `subject28` varchar(200) NOT NULL,
  `subject29` varchar(200) NOT NULL,
  `subject30` varchar(200) NOT NULL,
  `subject31` varchar(200) NOT NULL,
  `subject32` varchar(200) NOT NULL,
  `subject33` varchar(200) NOT NULL,
  `subject34` varchar(200) NOT NULL,
  `subject35` varchar(200) NOT NULL,
  `subject36` varchar(200) NOT NULL,
  `subject37` varchar(200) NOT NULL,
  `subject38` varchar(200) NOT NULL,
  `subject39` varchar(2000) NOT NULL,
  `subject40` varchar(200) NOT NULL,
  `subject41` varchar(200) NOT NULL,
  `subject42` varchar(200) NOT NULL,
  `subject43` varchar(200) NOT NULL,
  `subject44` varchar(200) NOT NULL,
  `subject45` varchar(200) NOT NULL,
  `subject46` varchar(200) NOT NULL,
  `subject47` varchar(200) NOT NULL,
  `subject48` varchar(200) NOT NULL,
  `subject49` varchar(200) NOT NULL,
  `subject50` varchar(200) NOT NULL,
  `subject51` varchar(200) NOT NULL,
  `subject52` varchar(100) NOT NULL,
  `subject53` varchar(255) DEFAULT NULL,
  `subject54` varchar(255) DEFAULT NULL,
  `subject55` varchar(255) DEFAULT NULL,
  `subject56` varchar(255) DEFAULT NULL,
  `subject57` varchar(255) DEFAULT NULL,
  `subject58` varchar(255) DEFAULT NULL,
  `subject59` varchar(255) DEFAULT NULL,
  `subject60` varchar(255) DEFAULT NULL,
  `subject61` varchar(255) DEFAULT NULL,
  `subject62` varchar(255) DEFAULT NULL,
  `subject63` varchar(255) DEFAULT NULL,
  `subject64` varchar(255) DEFAULT NULL,
  `subject65` varchar(255) DEFAULT NULL,
  `subject66` varchar(255) DEFAULT NULL,
  `subject67` varchar(255) DEFAULT NULL,
  `subject68` varchar(255) DEFAULT NULL,
  `subject70` text NOT NULL,
  `subject69` text NOT NULL,
  `subject71` text NOT NULL,
  `subject72` text NOT NULL,
  `information` text DEFAULT NULL,
  `admin_per_info` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `subject15`, `subject16`, `subject17`, `subject18`, `subject19`, `subject20`, `subject21`, `subject22`, `subject23`, `subject24`, `subject25`, `subject26`, `subject27`, `subject28`, `subject29`, `subject30`, `subject31`, `subject32`, `subject33`, `subject34`, `subject35`, `subject36`, `subject37`, `subject38`, `subject39`, `subject40`, `subject41`, `subject42`, `subject43`, `subject44`, `subject45`, `subject46`, `subject47`, `subject48`, `subject49`, `subject50`, `subject51`, `subject52`, `subject53`, `subject54`, `subject55`, `subject56`, `subject57`, `subject58`, `subject59`, `subject60`, `subject61`, `subject62`, `subject63`, `subject64`, `subject65`, `subject66`, `subject67`, `subject68`, `subject70`, `subject69`, `subject71`, `subject72`, `information`, `admin_per_info`) VALUES
(1, 'Cockpit drill', 'Pull up on the left', 'Pull up on the right', 'Move off from the right', 'Move off from the left', 'Steering', 'Observation', 'Speed on approach', 'Hill start', 'Angle start', 'Junctions turning right', 'Junctions turning left', 'Junctions emerging right', 'Junctions emerging left', 'Stop Junction', 'Hesitation', 'Crossroads', 'Roundabouts - Basic level', 'Roundabouts - Advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park - Right', 'Forward bay park - Left', 'Reverse bay park -  Right', 'Reverse bay park - Left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - Left', 'Reverse around the corner - Right', 'Switching lanes', 'Lane discipline', 'Dual Carriageway', 'Scanning and Planning', 'Speed', 'Signaling', 'Following the traffic', 'Safe distance while stationary', 'Traffic lights', 'Gears', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'Show me questions - On the move', 'Tell me questions', 'Mock test', 'Pedals', 'Mirrors', 'Merging lanes', 'Overall vehicle control', 'Humps', 'Focus on driving', 'Spatial awareness', 'Overconfidence', ' One way system', 'Central reservation', 'Awareness, planning and preparation', 'Following Signs', 'Eco Safe driving', 'Driving in the dark', 'Driving on wet roads', 'Driving in bad weather', 'Driving in bright sunshine', 'Driving in snow/frosty conditions', 'Country roads', 'Town and city', 'Overtaking', 'Additional Information', 'Personal Comment');

-- --------------------------------------------------------

--
-- Table structure for table `test_driving`
--

CREATE TABLE `test_driving` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ddate` varchar(255) DEFAULT NULL,
  `dtime` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_driving`
--

INSERT INTO `test_driving` (`id`, `user_id`, `ddate`, `dtime`, `location`, `Comments`) VALUES
(2, 259, '', '', '', ''),
(3, 259, '', '', '', ''),
(4, 259, '', '', '', ''),
(5, 259, '', '', '', ''),
(6, 259, '', '', '', ''),
(7, 259, '', '', '', ''),
(8, 259, '', '', '', ''),
(9, 259, '', '', '', ''),
(10, 259, '', '', '', ''),
(11, 259, '', '', '', ''),
(12, 259, '', '', '', ''),
(13, 259, '', '', '', ''),
(14, 259, '', '', '', ''),
(15, 259, '', '', '', ''),
(16, 259, '', '', '', ''),
(17, 259, '', '', '', ''),
(18, 259, '', '', '', ''),
(19, 259, '', '', '', ''),
(20, 259, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mondayMon` varchar(100) DEFAULT NULL,
  `mondayAft` varchar(100) DEFAULT NULL,
  `mondayEve` varchar(100) DEFAULT NULL,
  `tuesdayMor` varchar(100) DEFAULT NULL,
  `tuesdayAft` varchar(100) DEFAULT NULL,
  `tuesdayEve` varchar(100) DEFAULT NULL,
  `wednesdayMor` varchar(100) DEFAULT NULL,
  `wednesdayAft` varchar(100) DEFAULT NULL,
  `wednesdayEve` varchar(100) DEFAULT NULL,
  `thursdayMor` varchar(100) DEFAULT NULL,
  `thursdayAft` varchar(100) DEFAULT NULL,
  `thursdayEve` varchar(100) DEFAULT NULL,
  `fridayMor` varchar(100) DEFAULT NULL,
  `fridayAft` varchar(100) DEFAULT NULL,
  `fridayEve` varchar(100) DEFAULT NULL,
  `saturdayMor` varchar(100) DEFAULT NULL,
  `saturdayAft` varchar(100) DEFAULT NULL,
  `saturdayEve` varchar(100) DEFAULT NULL,
  `sundayMor` varchar(100) DEFAULT NULL,
  `sundayAft` varchar(100) DEFAULT NULL,
  `sundayEve` varchar(100) DEFAULT NULL,
  `extra_information` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `user_id`, `mondayMon`, `mondayAft`, `mondayEve`, `tuesdayMor`, `tuesdayAft`, `tuesdayEve`, `wednesdayMor`, `wednesdayAft`, `wednesdayEve`, `thursdayMor`, `thursdayAft`, `thursdayEve`, `fridayMor`, `fridayAft`, `fridayEve`, `saturdayMor`, `saturdayAft`, `saturdayEve`, `sundayMor`, `sundayAft`, `sundayEve`, `extra_information`) VALUES
(9, 234, 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'some exra indp'),
(10, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(11, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(12, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(13, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(14, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(15, 235, 'checked', 'checked', '', '', 'checked', '', '', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'checked', '', '', 'I will be available around so and so date and time'),
(16, 249, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 254, 'checked', '', '', '', 'checked', 'checked', '', '', '', 'checked', '', 'checked', '', '', 'checked', '', '', '', '', '', '', ''),
(19, 259, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `status` text NOT NULL,
  `theme` text NOT NULL DEFAULT 'light'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `theme`) VALUES
(1, 138664630, 'Agro', 'one', 'agro1@gmail.com', '44bea1375d673dacfa7038a2a6896ae6', '1666899887WhatsApp Image 2022-08-14 at 2.40.54 PM.jpeg', 'Offline', 'light'),
(2, 1477873628, 'umer', 'ch', 'umerch@gmail.com', 'e26f8c6e109aa7ebbe50f7d6c7edb035', '1666899982squid game.png', 'Offline', 'light'),
(3, 1234324, 'fname', 'lname', 'email@gmail.com', 'pass', 'new_img_name', 'status', 'light'),
(4, 1063008019, 'asd', 'asd', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500', '1667725517WhatsApp Image 2022-10-16 at 5.53.13 PM.jpeg', 'Offline', 'light'),
(5, 1650813545, 'ali', 'ahmad', 'ali@gmail.com', '3b712de48137572f3849aabd5666a4e3', '1668163897squid game.png', 'Offline', 'light'),
(6, 261580543, '22222@@#', '', 'info@passveryfast.co.uk', '7371ed472f48b73cb1a6a29dbcb77bfb', 'null', 'Online', 'light'),
(7, 372916476, 'Yutong', 'Y', 'huoyutonghyt@gmail.com', '6b1a3ea08b2ca13e3a92d96dcf8f75bb', 'null', 'Online', 'light'),
(8, 339210249, 'Sal', 'Cann', 'salcann19@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'Online', 'light'),
(9, 312020073, 'Tesfai ', 'Kidane', 'tesfai_kidane@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'Online', 'light'),
(10, 1658294618, 'Sobechukwu ', 'Nweke', 'sobe4sky47@gmail.com', '9897bfc77ca58b2b06ac869b7c454f46', 'null', 'Online', 'light'),
(11, 763636528, 'Amanda', 'Robinson', 'amandaoddy@hotmail.co.uk', '827ccb0eea8a706c4c34a16891f84e7b', 'null', 'Online', 'light');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `pick_address` varchar(200) NOT NULL,
  `pick_city` varchar(200) NOT NULL,
  `pick_postcode` varchar(150) NOT NULL,
  `drop_address` varchar(250) NOT NULL,
  `drop_city` varchar(200) NOT NULL,
  `drop_postcode` varchar(100) NOT NULL,
  `email_code` varchar(100) NOT NULL,
  `email_status` varchar(100) NOT NULL DEFAULT 'Pending',
  `user_status` varchar(100) NOT NULL DEFAULT 'Active',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `cmnts` varchar(255) DEFAULT NULL,
  `instructor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `email`, `first_name`, `last_name`, `address`, `city`, `postcode`, `country`, `phone`, `password`, `pick_address`, `pick_city`, `pick_postcode`, `drop_address`, `drop_city`, `drop_postcode`, `email_code`, `email_status`, `user_status`, `date`, `cmnts`, `instructor`) VALUES
(104, 'gkentianbousi@gmail.com', 'Gkentian', 'Bousi', '5 Alder Hill Avenue', 'Leeds', 'Ls64jq', '', '07369265933', 'Genti123', '', '', '', '', '', '', '62618622', 'Verified', 'Active', '2022-12-04 10:59:04', NULL, NULL),
(105, 'lilicna79@gmail.com', 'Liliana', 'Chmielewska', '7 Mill Pond Lane', 'Leeds', 'LS6 4RA', '', '07517091868', 'Kokoszka7789', '', '', '', '', '', '', '27470717', 'Verified', 'Block', '2022-12-04 13:15:26', NULL, NULL),
(106, 'huoyutonghyt@gmail.com', 'Yutong', 'Y', '21 soffit jrb', 'Leeds', 'Ls14 didvd', 'Uk', '074754076', 'Yutong12345', '', '', '', '', '', '', '7821327', 'Verified', 'Active', '2022-12-04 16:30:08', '', NULL),
(108, 'aman123123456@gmail.com', 'Aman', 'Amin', '21 soffit jrb', 'Leeds', 'Ls9', 'Uk', '07456358', '12345', '', '', '', '', '', '', '14711124', 'Verified', 'Active', '2022-12-04 18:56:42', NULL, NULL),
(109, 'iosifcazacu10@gmail.com', 'Iosif ', 'Cazacu', '21 Chapeltown Road ', 'Leeds', 'Ls7', 'Uk', '07463325965', '12345', '', '', '', '', '', '', '90720788', 'Verified', 'Active', '2022-12-05 08:28:25', NULL, NULL),
(110, 'jawerianasim4@gmail.com', 'Jaweria', 'Nasim', '157 Wykebeck Valley Road', 'Leeds', 'LS9 6PE', '', '07424254612', 'xuPheb-2vohcy-matqub', '', '', '', '', '', '', '60749419', 'Verified', 'Active', '2022-12-05 13:35:10', NULL, NULL),
(112, 'balicaademaro@gmail.com', 'Ademaro', 'Balica', '5 Ashton Grove ', 'Leeds', 'Ls8 5br', 'Uk', '074663525', '12345', '', '', '', '', '', '', '87374278', 'Verified', 'Active', '2022-12-05 21:25:29', NULL, NULL),
(113, 'mariancodreanu70@yahoo.com', 'Marian ', 'M', '25 gledhow road', 'Leeds', 'Ls9', 'Uk', '075463886', 'luca12345', '', '', '', '', '', '', '56731089', 'Verified', 'Active', '2022-12-06 20:49:34', NULL, NULL),
(114, 'alex_57@live.it', 'Alex', 'Boachie', '11 hansby avenue', 'Leeds', 'Ls14 6le', '', '07796293310', 'Forzaparma1', '', '', '', '', '', '', '78301448', 'Verified', 'Active', '2022-12-07 14:19:31', NULL, NULL),
(117, 'diamonumpling@gmail.com', 'Diamond', 'D', '2 town', 'Leeds', 'Ls1', 'Uk', '078', 'diamond100137', '', '', '', '', '', '', '23231917', 'Verified', 'Active', '2022-12-08 14:51:43', NULL, NULL),
(157, 'yasminelsadig@hotmail.com', 'Yasmin', 'Alsadeg', '12 djrvej ', 'Leeds', 'Ls9', 'Uk', '0745', 'Jasmania867', '', '', '', '', '', '', '56171942', 'Verified', 'Active', '2022-12-08 18:55:00', NULL, NULL),
(158, 'ionelcodreanu1990@gmail.com', 'Ionel', 'Codreanu', '117bayswater road', 'Leeds', 'Ls8 5nt', '', '074', 'dominik21', '', '', '', '', '', '', '18525970', 'Verified', 'Active', '2022-12-08 19:18:42', NULL, NULL),
(230, 'kelvinmccowatt@gmail.com', 'Kelvin', 'Mccowatt', '3 haselwood view ', 'Leeds', 'LS9 7UZ', '', '07743035665', '12345', '', '', '', '', '', '', '88877615', 'Verified', 'Active', '2022-12-09 14:14:58', NULL, NULL),
(231, 'iosifcazacu10@gmail.com', 'iosif', 'cazacu', '8 Savile Drive', 'Leeds', 'LS7 3ET', '', '07459316907', 'iosif1234', '', '', '', '', '', '', '62112996', 'Verified', 'Active', '2022-12-10 08:55:59', NULL, 12),
(232, 'baf8562@gmail.com', 'Ran', 'Cantor', '20b Astley Lane', 'Leeds', 'LS26 8ud', '', '075', '12345', '', '', '', '', '', '', '89431590', 'Verified', 'Active', '2022-12-10 13:59:09', NULL, NULL),
(233, 'morabadarau@gmail.com', 'Mora', 'Badarau', 'Cowper Grove ', 'Leeds', 'LS8 5DG', '', '07474 222686', 'Miedordetine1234', '', '', '', '', '', '', '27548099', 'Verified', 'Active', '2022-12-10 14:22:02', NULL, NULL),
(234, 'imbilalmalik@outlook.com', 'Bilal', 'Malik', 'Islamabad', 'Islamabad', '44000', 'Pakistan', '+923339302731', '123', '', '', '', '', '', '', '45924008', 'Verified', 'Active', '2022-12-10 17:12:05', '', NULL),
(236, 'Dagmawit33@gmai.com', 'Dag', 'Efrem', '104 bayswater mount', 'Leeds', 'LS8 5LW', '', '07888217467', 'Addis', '', '', '', '', '', '', '7266538', 'Verified', 'Active', '2022-12-10 18:23:27', NULL, NULL),
(237, 'cerisemcalister@hotmail.co.uk', 'Cerise', 'McAlister', '1 Railway cottages, Station road', 'Horsforth', 'LS18 5NL', '', '07715301467', 'TheodoreJack', '', '', '', '', '', '', '18643838', 'Verified', 'Active', '2022-12-10 20:55:47', NULL, NULL),
(238, 'emily.t.jaggar@gmail.com', 'Emily', 'Jaggar', '12 nowell place', 'Leeds', 'Ls10', 'UK', '075', '12345', '', '', '', '', '', '', '78788157', 'Verified', 'Active', '2022-12-11 09:24:45', NULL, NULL),
(240, 'a.i.turner2710@gmail.com', 'Arthur', 'Turner', '9 Miles Hill Crescent', 'Leeds', 'Ls72eu', 'Uk', '07426441665', 'atrutr2710', '', '', '', '', '', '', '93047888', 'Verified', 'Active', '2022-12-11 13:30:28', NULL, 12),
(242, 'amandaoddy@hotmail.co.uk', 'Amanda', 'Robinson', '12 Fire Station Houses', 'Leeds', 'LS9 6NL', 'UK', '074', '12345', '', '', '', '', '', '', '35917764', 'Verified', 'Active', '2022-12-11 14:10:05', NULL, 13),
(243, 'amalouafi12@gmail.com', 'Amal', 'A', '32 Hyde park', 'Leeds', 'Ls6', 'Uk', '074', '123456', '', '', '', '', '', '', '41262005', 'Verified', 'Active', '2022-12-12 15:17:48', NULL, 12),
(244, 'waiyi.wan321@gmail.com', 'Wai', 'W', '32 elbow lane', 'Leeds', 'Ls9', 'Uk', '076', '12345', '', '', '', '', '', '', '62245806', 'Verified', 'Active', '2022-12-12 16:28:13', NULL, 12),
(245, 'gowtham.badvity@gmail.com', 'Gowtham', 'G', '32 elbow lane', 'Leeds', 'Ls2', 'Uk', '074', '12345', '', '', '', '', '', '', '179142', 'Verified', 'Active', '2022-12-12 18:16:15', NULL, 13),
(246, 'cerisemcalister@hotmail.co.uk', 'Cerise', 'McAlister', '1 Railway cottages, Station road', 'Horsforth', 'LS18 5NL', '', '07715301467', 'TheodoreJack', '', '', '', '', '', '', '57550435', 'Pending', 'Active', '2022-12-12 20:33:47', NULL, NULL),
(247, 'samsongangal63@gmail.com', 'Samson', 'Gangal', 'Ls83qw', 'Leeds', 'Shurdhest place', '', '+44 7341 064968', '12345', '', '', '', '', '', '', '35391049', 'Verified', 'Active', '2022-12-13 12:07:49', NULL, NULL),
(249, 'Cornelee-mambila@outlook.com', 'Cornelee', 'mambila', '10 Fenton Gate', 'London', 'LS10 4FL', 'Uk', '07495870079', 'Cornisha12', '', '', '', '', '', '', '35941815', 'Verified', 'Active', '2022-12-13 14:30:38', '', NULL),
(250, 'tesfai_kidane@yahoo.com', 'Tesfai ', 'Kidane', '50 Appleton court, Appleton way ', 'Leeds ', 'LS9 7RS ', '', '07397596009', '12345', '', '', '', '', '', '', '72143996', 'Verified', 'Active', '2022-12-14 08:02:12', NULL, NULL),
(251, 'isabellawilumson@live.co.uk', 'Isabella ', 'B', '12 Christmas street', 'Leeds', 'LS7', 'Uk', '074', '12345', '', '', '', '', '', '', '69915782', 'Verified', 'Active', '2022-12-14 14:25:09', NULL, NULL),
(252, 'abdullahi5432@outlook.com', 'Abdullahi', 'Abdulahi', ' 1 Ryan Placs ', 'Leeds', 'LS8 3RY', '', '07449835448', 'Abdullahi2ali', '', '', '', '', '', '', '74384304', 'Verified', 'Active', '2022-12-14 15:08:32', NULL, 15),
(253, 'ma7999159@gmail.com', 'Mujah', 'Ali', 'Gc road', 'peshawar', '21333', '', '+923472725376', 'Mujahid7222741', '', '', '', '', '', '', '42616196', 'Pending', 'Active', '2022-12-14 16:53:34', NULL, 14),
(255, 'moisedragusin10@yahoo.com', 'Moise', 'M', '12 Moise Street', 'Leeds', 'Ls9', 'Uk', '07463', '12345', '', '', '', '', '', '', '29593389', 'Verified', 'Active', '2022-12-15 13:53:36', NULL, 15),
(257, 'sobe4sky47@gmail.com', 'Sobechukwu ', 'Nweke', '60 headingley ', 'Leeds', 'Ls6 3er', '', '07435981714', 'Chinedu2007.', '', '', '', '', '', '', '48166934', 'Verified', 'Active', '2022-12-15 14:23:19', NULL, 15),
(258, 'huze@mailinator.com', 'Dana', 'Joseph', 'Aliqua Nostrud esse', 'Voluptatem voluptas', 'Ratione laboriosam ', '', '+1 (242) 333-4728', 'Pa$$w0rd!', '', '', '', '', '', '', '73278459', 'Pending', 'Active', '2022-12-15 17:41:02', NULL, 15),
(259, 'kwabenaopoku969@gmail.com', 'Kobby ', 'Donkor', '41 Bude Road', 'Leeds', 'LS11 6HX', 'Uk', '07880926334', 'Aseadeado75!', '', '', '', '', '', '', '38149107', 'Verified', 'Active', '2022-12-15 19:09:14', '', 15),
(261, 'kerfootjp@outlook.com', 'John', 'Kerfoot', '1 Kerfoot street', 'Leeds', 'Ls7', 'Uk', '074', '12345', '', '', '', '', '', '', '74898285', 'Verified', 'Active', '2022-12-16 20:26:18', NULL, 15),
(262, 'Morganbcoates@gmail.com', 'Morgan', 'Coates', '40 Nowell Mount', 'Leeds', 'LS96HW', '', '07850188782', 'Fieldhead01', '', '', '', '', '', '', '22969023', 'Verified', 'Active', '2022-12-18 12:06:24', NULL, 15),
(265, 'sal202219@gmail.com', 'Sal', 'C', '12 dj', 'Leeds', 'Ls12', 'Uk', '0749655518', '12345', '', '', '', '', '', '', '12969415', 'Verified', 'Active', '2022-12-19 12:37:45', NULL, 15),
(266, 'codreanuely@gmail.com', 'Elisei ', 'C', '12 dj', 'Leeds', 'Ls12', 'Uk', '074', '12345', '', '', '', '', '', '', '57605060', 'Verified', 'Active', '2022-12-19 13:19:12', NULL, 15),
(267, 'sunitar2698@gmail.com', 'Sunita', 'R', '12 dj', 'Leeds', 'Ls3', 'Uk', '07', '1w345', '', '', '', '', '', '', '9142113', 'Verified', 'Active', '2022-12-19 13:40:36', NULL, 15),
(268, 'albiclack@gmail.com', 'Albert', 'Clack', '14 Vickers Avenue', 'Leeds', 'LS5 3DJ', '', '07733103066', 'W0lf1388!', '', '', '', '', '', '', '8123364', 'Verified', 'Active', '2022-12-19 18:50:18', NULL, 15),
(269, 'mali1@gmail.com', 'aaa', 'aaa', 'aaa', 'aaa', '111', '', '11111', 'aaa', '', '', '', '', '', '', '78576974', 'Verified', 'Active', '2022-12-30 17:08:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` int(11) NOT NULL DEFAULT 5,
  `desc` text DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`id`, `user_id`, `review`, `desc`, `name`) VALUES
(1, 5, 4, '', ''),
(2, 5, 4, '', ''),
(3, 5, 4, 'asdf', ''),
(4, 5, 4, ',asdm', ''),
(5, 5, 4, 'review', ''),
(6, 90, 5, 'Thank you', ''),
(7, 229, 5, 'Thank you so much!', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `chat_login_details`
--
ALTER TABLE `chat_login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driving_apponimnet`
--
ALTER TABLE `driving_apponimnet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_registration`
--
ALTER TABLE `instructor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_driving`
--
ALTER TABLE `test_driving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `driving_apponimnet`
--
ALTER TABLE `driving_apponimnet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor_registration`
--
ALTER TABLE `instructor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `test_driving`
--
ALTER TABLE `test_driving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
