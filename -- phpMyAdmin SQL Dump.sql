-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2022 at 05:42 AM
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
-- Database: `passvery_driving_school`
--

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
  `progress42` varchar(50) DEFAULT NULL,
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
  `progress71` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `user_id`, `progress1`, `progress2`, `progress3`, `progress4`, `progress5`, `progress6`, `progress7`, `progress8`, `progress9`, `progress10`, `progress11`, `progress12`, `progress13`, `progress14`, `progress15`, `progress16`, `progress17`, `progress18`, `progress19`, `progress20`, `progress21`, `progress22`, `progress23`, `progress24`, `progress25`, `progress26`, `progress27`, `progress28`, `progress29`, `progress30`, `progress31`, `progress32`, `progress33`, `progress35`, `progress36`, `progress37`, `progress38`, `progress39`, `progress40`, `progress41`, `progress42`, `progress43`, `progress44`, `progress45`, `progress46`, `progress47`, `progress48`, `progress49`, `progress50`, `progress51`, `progress52`, `date`, `information`, `progress53`, `progress54`, `progress55`, `progress56`, `progress57`, `progress58`, `progress59`, `progress60`, `progress61`, `progress62`, `progress63`, `progress64`, `progress65`, `progress66`, `progress67`, `progress68`, `progress69`, `progress70`, `admin_per_info`, `progress71`) VALUES
(22, '3', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aaa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '', '2022-10-14 05:27:49', 'information', 'aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '5', '6', '', '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '2022-11-18 09:42:11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '18', '6', '5', '', '', '5', '5', '', '5', '4', '', '5', '5', '5', '5', '', '4', '4', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', '2', 'Lane discipline', 'Dual Carriageway', 'Speed', 'Signaling', '5', 'Safe distance while stationary', 'Traffic lights', '4', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-18 10:54:26', 'information', 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '19', '6', '', '3', '2', '', '4', '', '5', '4', '', '4', '5', '5', '4', '', '3', '3', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', 'Lane discipline', 'Dual Carriageway', '2', '4', '5', '4', '4', '4', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '5', '2022-10-18 13:33:25', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '20', '6', '5', '', '', '5', '5', '5', '5', '', '', '5', '5', '5', '5', '', '4', '5', '6', '4', '4', '4', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', '3', '5', '5', '5', '5', '4', '4', '5', '4', 'Sat Nav', 'Signs', 'Eye test', '3', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '5', '2022-10-18 15:28:59', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '22', '6', '4', '', '', '5', '5', '4', '4', '', '', '5', '5', '5', '4', '', '4', '4', '1', 'Roundabouts - advanced level', '3', '1', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', '4', 'Dual Carriageway', '2', '4', '5', '4', '4', 'Gears', 'Sat Nav', 'Signs', '5', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-19 10:30:35', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '25', '5', '4', '5', '4', '3', '4', '3', '5', '', '', '4', '4', '4', '4', '', '4', '4', '4', '3', '3', '4', '4', '4', '4', '4', '4', '4', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', '4', '4', '3', '3', '4', '4', '3', '5', '5', 'Sat Nav', 'Signs', 'Eye test', '3', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '6', '2022-10-21 06:45:46', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '26', '5', '5', '', '', '4', '4', '4', '4', '2', '', '', '4', '', '3', '', 'Hesitation', 'Crossroads', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', '3', 'Dual Carriageway', '2', '4', 'Following the traffic', 'Safe distance while stationary', 'Traffic lights', '3', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '3', '2022-10-21 12:26:42', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '27', '6', '5', '', '', '5', '4', '4', '4', '', '', '4', '4', '4', '4', '', '2', 'Crossroads', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', '1', 'Dual Carriageway', '1', '4', 'Following the traffic', 'Safe distance while stationary', '2', 'Gears', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-21 15:08:43', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '28', '6', '5', '4', '5', '6', '5', '5', '6', '', '', '5', '5', '6', '6', '', 'Hesitation', '5', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', '4', 'Reverse park', '6', '6', '6', '6', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', '5', 'Dual Carriageway', '5', '5', '5', '6', '5', '6', 'Sat Nav', '1', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '6', '2022-10-21 17:28:09', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '29', '5', '', '4', '4', '', '5', '4', '5', '', '', '5', '5', '5', '4', '', '3', '4', '3', 'Roundabouts - advanced level', '4', '3', 'Reverse park', '4', '4', 'Reverse bay park right', 'Reverse bay park left', '5', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', 'Lane discipline', 'Dual Carriageway', '3', '4', '4', '4', '5', '4', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-22 10:13:07', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '30', '6', '5', '', '', '5', '5', '5', '5', '3', '', '5', '5', '4', '5', '', '4', '4', 'Roundabouts - basic level', 'Roundabouts - advanced level', '3', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', '4', 'Dual Carriageway', '3', '5', '4', '3', '4', '4', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-22 14:58:41', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '32', '3', '3', '', '', '3', 'Steering', '3', '', '', '', '', 'Junctions turning left', '', 'Junctions emerging left', '', 'Hesitation', 'Crossroads', 'Roundabouts - basic level', 'Roundabouts - advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', 'Switching lanes', 'Lane discipline', 'Dual Carriageway', 'Speed', 'Signaling', 'Following the traffic', 'Safe distance while stationary', 'Traffic lights', 'Gears', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', 'Pedals', '2022-10-22 20:00:40', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '33', '4', '', '', '', '4', '5', '4', '4', '4', '', '4', '4', '3', '4', '', '3', 'Crossroads', 'Roundabouts - basic level', 'Roundabouts - advanced level', '4', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - left', 'Reverse around the corner - right', '4', '3', 'Dual Carriageway', '2', '3', '4', '5', '4', '4', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', '4', '2022-10-24 07:53:22', NULL, 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '4', '1', '1', '4', '4', '1', '2', '3', '1', '2', '2', '5', '1', '3', '3', '1', '6', '4', '2', '4', '2', '6', '4', '3', '2', '4', '3', '6', '2', '4', '3', '2', 'Lane discipline', 'Dual Carriageway', 'Speed', 'Signaling', 'Following the traffic', 'Safe distance while stationary', 'Traffic lights', 'Gears', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'show me questions - on the move', 'Tell me questions', 'Mock test', 'Pedals', '2022-10-26 22:28:45', 'hy my name is ali', 'Mirror', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '1', '1', '11', '1', '11', '1', '1', '1', '11', '1', '1', '1', '2022-11-15 19:00:11', 'infor', '1', '1', '1', '11', '11', '1', '1', '11', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', NULL, NULL),
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-11-15 19:19:05', 'info', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, '24', 'Cockpit drill', '', '', 'Move off from the -Right', 'Move off from the -Left', 'Steering', '', '', '', '', '', 'Junctions turning left', '', 'Junctions emerging left', '', 'Hesitation', 'Crossroads', 'Roundabouts - Basic level', 'Roundabouts - Advanced level', 'Pedestrian crossings', 'Meeting traffic', 'Reverse park', 'Forward bay park right', 'Forward bay park left', 'Reverse bay park right', 'Reverse bay park left', 'Reverse on the right', 'Turn in the road', 'Reverse around the corner - Left', 'Reverse around the corner - Right', 'Switching lanes', 'Lane discipline', 'Dual Carriageway', 'Speed', 'Signaling', 'Following the traffic', 'Safe distance while stationary', 'Traffic lights', 'Gears', 'Sat Nav', 'Signs', 'Eye test', 'Test routes', 'Slip road', 'Motorway', 'Towing a trailer', 'Emergency stop', 'Show me questions - On the move', 'Tell me questions', 'Mock test', 'Pedals', '2022-11-15 02:08:35', 'asdf', 'Mirror', 'Merging lanes', 'Overall vehicle control', 'Humps', 'Focus on driving', 'Spacial awareness', 'Overconfidence', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '14', '1.  Cockpit drill', '2.  ', '4.  ', '5.  Move off from the -Right', '3.  Move off from the -Left', '6.  Steering', '7.  ', '30.  ', '31.  ', '32.  ', '8.  ', '9.  Junctions turning left', '10.  ', '11.  Junctions emerging left', '12.  ', '13.  Hesitation', '14.  Crossroads', '15.  Roundabouts - Basic level', '16.  Roundabouts - Advanced level', '17.  Pedestrian crossings', '18.  Meeting traffic', '19.  Reverse park', '20.  Forward bay park right', '21.  Forward bay park left', '22.  Reverse bay park right', '23.  Reverse bay park left', '24.  Reverse on the right', '25.  Turn in the road', '26.  Reverse around the corner - Left', '28.  Mirror', '33.  Switching lanes', '34.  Lane discipline', '35.  Dual Carriageway', '36.  Speed', '29.  Signaling', '37.  Following the traffic', '38.  Safe distance while stationary', '39.  Traffic lights', '40.  Gears', '51.  Sat Nav', NULL, '68.  Eye test', '53.  Test routes', '62.  Slip road', '63.  Motorway', '64.  Towing a trailer', '65.  Emergency stop', '66.  Show me questions - On the move', '67.  Tell me questions', '69.  Mock test', '41.  Pedals', '2022-11-17 02:59:34', 'asd', '', '42.  Merging lanes', '43.  Overall vehicle control', '44.  Humps', '45.  Focus on driving', '46.  Spacial awareness', '47.  Overconfidence', '48.  One way system', '49.  Central reservation', '50.  Awareness, planning and preparation', '52.  Following Signs', '54.  Eco Safe driving', '55.  Driving in the dark', '56.  Driving on wet roads', '57.  Driving in bad weather', '58.  Driving in bright sunshine', '60.  Country roads', '', 'sadf', '61.  Town and city'),
(58, '16', '1.  Cockpit drill', '2.  ', '4.  ', '5.  Move off from the -Right', '3.  Move off from the -Left', '6.  Steering', '7.  ', '30.  ', '31.  ', '32.  ', '8.  ', '9.  Junctions turning left', '10.  ', '11.  Junctions emerging left', '12.  ', '13.  Hesitation', '14.  Crossroads', '15.  Roundabouts - Basic level', '16.  Roundabouts - Advanced level', '17.  Pedestrian crossings', '18.  Meeting traffic', '19.  Reverse park', '20.  Forward bay park right', '21.  Forward bay park left', '22.  Reverse bay park right', '23.  Reverse bay park left', '24.  Reverse on the right', '25.  Turn in the road', '26.  Reverse around the corner - Left', '28.  Mirror', '33.  Switching lanes', '34.  Lane discipline', '35.  Dual Carriageway', '36.  Speed', '29.  Signaling', '37.  Following the traffic', '38.  Safe distance while stationary', '39.  Traffic lights', '40.  Gears', '51.  Sat Nav', NULL, '68.  Eye test', '53.  Test routes', '62.  Slip road', '63.  Motorway', '64.  Towing a trailer', '65.  Emergency stop', '66.  Show me questions - On the move', '67.  Tell me questions', '69.  Mock test', '41.  Pedals', '2022-11-17 02:59:47', '978678', '', '42.  Merging lanes', '43.  Overall vehicle control', '44.  Humps', '45.  Focus on driving', '46.  Spacial awareness', '47.  Overconfidence', '48.  One way system', '49.  Central reservation', '50.  Awareness, planning and preparation', '52.  Following Signs', '54.  Eco Safe driving', '55.  Driving in the dark', '56.  Driving on wet roads', '57.  Driving in bad weather', '58.  Driving in bright sunshine', '60.  Country roads', '', '687876', '61.  Town and city');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;