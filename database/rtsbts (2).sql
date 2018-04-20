-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 07:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtsbts`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `ID` int(11) NOT NULL,
  `bus_number` text NOT NULL,
  `Engine_Number` text NOT NULL,
  `Manufacturing_year` text NOT NULL,
  `Area_of_assigning` text NOT NULL,
  `Number_of_trips` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`ID`, `bus_number`, `Engine_Number`, `Manufacturing_year`, `Area_of_assigning`, `Number_of_trips`) VALUES
(1, '2345', 'eng1234', '2015', 'bkk', 2),
(2, 'THAI1234', 'ENG123456', '2014', 'ptn', 2),
(3, '4569', 'eng4569', '2018', 'klong', 3),
(4, '8521', 'eng8521', '2015', 'luang', 5),
(5, '7895', 'eng7895', '2013', 'bomm', 6);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `assigned_area` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `picking_time` time NOT NULL,
  `dropping_time` time NOT NULL,
  `assigned_bus` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`name`, `gender`, `age`, `phone`, `address`, `assigned_area`, `picking_time`, `dropping_time`, `assigned_bus`, `username`, `password`) VALUES
('bala', 'male', '22', '7894561235', 'agsysvis', 'luang', '02:24:00', '21:04:00', '7895', 'bala', '876187'),
('Mike', 'Male', '25', '0919988444', '', 'AIT', '07:50:00', '04:00:00', '10', 'dr11', 'dr11'),
('Smith', 'Male', '25', '0918877553', '', 'AIT', '08:00:00', '16:00:00', '10', 'st', 'st');

-- --------------------------------------------------------

--
-- Table structure for table `driver_login`
--

CREATE TABLE `driver_login` (
  `Id` int(12) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bus_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driver_login`
--

INSERT INTO `driver_login` (`Id`, `username`, `password`, `bus_number`) VALUES
(1, 'st', 'st', '10');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_details`
--

CREATE TABLE `fuel_details` (
  `Id` int(12) NOT NULL,
  `fuel_quantity` int(15) NOT NULL,
  `price` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `bill_number` int(15) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bus_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fuel_details`
--

INSERT INTO `fuel_details` (`Id`, `fuel_quantity`, `price`, `total`, `bill_number`, `Date`, `bus_number`) VALUES
(1, 10, 30, 300, 101, '2018-04-05 16:37:12', 'A10'),
(2, 0, 0, 0, 0, '2018-04-06 06:25:30', ''),
(3, 15, 50, 750, 110, '2018-04-06 06:29:16', '20'),
(4, 0, 0, 0, 0, '2018-04-06 06:55:50', ''),
(5, 20, 25, 500, 200, '2018-04-06 06:56:55', 'af'),
(6, 0, 0, 0, 0, '2018-04-06 07:03:07', ''),
(7, 0, 0, 0, 0, '2018-04-06 07:05:27', ''),
(8, 0, 0, 0, 0, '2018-04-06 07:11:21', ''),
(9, 10, 55, 550, 120, '2018-04-06 07:16:20', 'A10'),
(10, 10, 45, 450, 50, '2018-04-06 07:31:46', 'as'),
(11, 5, 50, 250, 50, '2018-04-06 07:42:45', 'gg'),
(12, 10, 25, 250, 10, '2018-04-06 07:44:20', 'asd'),
(13, 5, 50, 25, 115, '2018-04-06 14:34:42', 'D19'),
(14, 20, 50, 1000, 12, '2018-04-06 16:34:36', 'A20'),
(15, 5, 20, 100, 150, '2018-04-10 10:47:19', '20');

-- --------------------------------------------------------

--
-- Table structure for table `location_point`
--

CREATE TABLE `location_point` (
  `id` int(20) UNSIGNED NOT NULL,
  `latitude` double NOT NULL,
  `longtitude` double NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `driver_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location_point`
--

INSERT INTO `location_point` (`id`, `latitude`, `longtitude`, `Date`, `driver_id`) VALUES
(2, 14.8383883, 100.7737373, '2018-04-07 05:07:08', 'st'),
(3, 13.98976, 100.8773833, '2018-04-07 02:05:06', 'st'),
(8, 14.080503644874, 100.61342888018, '2018-04-08 12:53:18', 'st'),
(9, 14.080935041856, 100.61255897271, '2018-04-08 12:54:56', 'st'),
(10, 14.080801171755, 100.61307178466, '2018-04-08 13:04:15', 'st'),
(11, 14.077864522801, 100.60598398943, '2018-04-08 14:42:20', 'st'),
(12, 14.078385256602, 100.6062911325, '2018-04-08 14:48:27', 'st'),
(13, 14.078223585687, 100.60631768431, '2018-04-08 14:49:48', 'st'),
(14, 14.078277249794, 100.60642568964, '2018-04-08 14:52:46', 'st'),
(15, 14.078261340087, 100.60650058753, '2018-04-08 14:54:46', 'st'),
(16, 14.078231713154, 100.60654309728, '2018-04-08 15:54:34', 'st'),
(17, 14.078412905537, 100.60655244673, '2018-04-08 16:04:04', 'st'),
(18, 14.078478775341, 100.60682307815, '2018-04-08 17:25:39', 'st'),
(19, 14.078478441129, 100.60682297092, '2018-04-08 17:26:16', 'st'),
(20, 14.07837393073, 100.60677164496, '2018-04-08 17:43:22', 'st'),
(21, 14.078702519494, 100.61105087211, '2018-04-09 07:58:01', 'st'),
(22, 14.078582544011, 100.61096415867, '2018-04-09 08:02:42', 'st'),
(23, 14.078674088105, 100.61106102215, '2018-04-09 08:05:27', 'st'),
(24, 14.080499975272, 100.6125074664, '2018-04-09 08:58:16', 'st'),
(25, 14.080730803945, 100.61238971735, '2018-04-09 09:01:30', 'st'),
(26, 14.08117062902, 100.61243206057, '2018-04-09 09:47:17', 'st'),
(27, 14.080173601024, 100.61295537204, '2018-04-09 10:07:33', 'st'),
(28, 14.080720826059, 100.61250324299, '2018-04-09 10:52:03', 'st'),
(29, 14.079021286139, 100.61089530219, '2018-04-09 13:26:17', 'st'),
(30, 14.07910030573, 100.61094586517, '2018-04-09 13:26:27', 'st'),
(31, 14.07910030573, 100.61094586517, '2018-04-09 13:26:38', 'st'),
(32, 14.07910030573, 100.61094586517, '2018-04-09 13:26:48', 'st'),
(33, 14.079006667734, 100.6108957068, '2018-04-09 13:26:58', 'st'),
(34, 14.079006667734, 100.6108957068, '2018-04-09 13:27:08', 'st'),
(35, 14.079006667734, 100.6108957068, '2018-04-09 13:27:18', 'st'),
(36, 14.079006667734, 100.6108957068, '2018-04-09 13:27:27', 'st'),
(37, 14.079006667734, 100.6108957068, '2018-04-09 13:27:37', 'st'),
(38, 14.079006667734, 100.6108957068, '2018-04-09 13:27:48', 'st'),
(39, 14.079006667734, 100.6108957068, '2018-04-09 13:27:58', 'st'),
(40, 14.079006667734, 100.6108957068, '2018-04-09 13:28:08', 'st'),
(41, 14.079006667734, 100.6108957068, '2018-04-09 13:28:18', 'st'),
(42, 14.079006667734, 100.6108957068, '2018-04-09 13:28:28', 'st'),
(43, 14.079006667734, 100.6108957068, '2018-04-09 13:28:37', 'st'),
(44, 14.079006667734, 100.6108957068, '2018-04-09 13:28:48', 'st'),
(45, 14.079006667734, 100.6108957068, '2018-04-09 13:28:58', 'st'),
(46, 14.079006667734, 100.6108957068, '2018-04-09 13:29:08', 'st'),
(47, 14.079006667734, 100.6108957068, '2018-04-09 13:29:18', 'st'),
(48, 14.079382618745, 100.61094728861, '2018-04-09 13:30:04', 'st'),
(49, 14.07899078265, 100.61096490633, '2018-04-09 13:30:39', 'st'),
(50, 14.079031763571, 100.61083210498, '2018-04-09 13:31:16', 'st'),
(51, 14.079137505162, 100.61070009544, '2018-04-09 13:31:49', 'st'),
(52, 14.079071948232, 100.61088478657, '2018-04-09 13:32:23', 'st'),
(53, 14.079088801771, 100.61075578828, '2018-04-09 13:33:25', 'st'),
(54, 14.079326854824, 100.61093690198, '2018-04-09 13:34:01', 'st'),
(55, 14.078958630664, 100.61088133122, '2018-04-09 13:47:32', 'st'),
(56, 14.079039406695, 100.61115304245, '2018-04-09 13:48:52', 'st'),
(57, 14.07907635586, 100.61062398846, '2018-04-09 13:49:33', 'st'),
(58, 14.079074051816, 100.61093033052, '2018-04-09 13:50:09', 'st'),
(59, 14.07933272194, 100.61064478265, '2018-04-09 13:50:46', 'st'),
(60, 14.078976726919, 100.61082693973, '2018-04-09 13:51:22', 'st'),
(61, 14.078936263874, 100.61069437224, '2018-04-09 13:51:57', 'st'),
(62, 14.078917376112, 100.61105399657, '2018-04-09 13:52:33', 'st'),
(63, 14.078874114514, 100.61093024693, '2018-04-09 13:53:08', 'st'),
(64, 14.079041788733, 100.61100091388, '2018-04-09 13:53:45', 'st'),
(65, 14.078996218514, 100.61077951506, '2018-04-09 14:16:32', 'st'),
(66, 14.078827010326, 100.61077491227, '2018-04-09 14:17:14', 'st'),
(67, 14.079007613914, 100.61096687696, '2018-04-09 14:18:15', 'st'),
(68, 14.078756662123, 100.61066187945, '2018-04-09 14:18:50', 'st'),
(69, 14.078749246186, 100.61051940237, '2018-04-09 14:19:29', 'st'),
(70, 14.078843273489, 100.61097372669, '2018-04-09 14:20:06', 'st'),
(71, 14.078970184205, 100.61074632686, '2018-04-09 14:20:58', 'st'),
(72, 14.079140000237, 100.61092702485, '2018-04-09 14:21:44', 'st'),
(73, 14.079065377139, 100.61020401575, '2018-04-09 14:22:14', 'st'),
(74, 14.079150479775, 100.61093065522, '2018-04-09 14:23:02', 'st'),
(75, 14.078923985201, 100.61070991875, '2018-04-09 14:23:38', 'st'),
(76, 14.078944526505, 100.61089443574, '2018-04-09 14:24:14', 'st'),
(77, 14.078982757723, 100.61080653173, '2018-04-09 14:24:49', 'st'),
(78, 14.078982757723, 100.61080653173, '2018-04-09 14:24:49', 'st'),
(79, 14.079170717073, 100.6104972067, '2018-04-09 14:25:27', 'st'),
(80, 14.079170717073, 100.6104972067, '2018-04-09 14:25:27', 'st'),
(81, 14.078874876381, 100.61090453723, '2018-04-09 14:26:04', 'st'),
(82, 14.078874876381, 100.61090453723, '2018-04-09 14:26:05', 'st'),
(83, 14.079006132267, 100.61085484292, '2018-04-09 14:26:42', 'st'),
(84, 14.079006132267, 100.61085484292, '2018-04-09 14:26:43', 'st'),
(85, 14.078581213081, 100.61056875798, '2018-04-09 14:27:18', 'st'),
(86, 14.078581213081, 100.61056875798, '2018-04-09 14:27:19', 'st'),
(87, 14.079660152142, 100.61056078549, '2018-04-09 14:27:55', 'st'),
(88, 14.079660152142, 100.61056078549, '2018-04-09 14:27:55', 'st'),
(89, 14.079095631814, 100.61065116582, '2018-04-09 14:28:34', 'st'),
(90, 14.079095631814, 100.61065116582, '2018-04-09 14:28:35', 'st'),
(91, 14.078905114023, 100.61065707553, '2018-04-09 14:30:12', 'st'),
(92, 14.078982482518, 100.61071428152, '2018-04-09 14:30:50', 'st'),
(93, 14.079011917032, 100.61102519964, '2018-04-09 14:37:43', 'st'),
(94, 14.079054395898, 100.61115358736, '2018-04-09 14:38:19', 'st'),
(95, 14.078448214111, 100.61117126406, '2018-04-10 09:37:54', 'st'),
(96, 14.07867466007, 100.61114054896, '2018-04-10 09:38:31', 'st'),
(97, 14.078650663067, 100.61123883725, '2018-04-10 09:39:05', 'st'),
(98, 14.078705346531, 100.61092980634, '2018-04-10 10:51:44', 'st'),
(99, 14.079039495721, 100.61122459104, '2018-04-10 10:52:30', 'st'),
(100, 14.078946692727, 100.61118521471, '2018-04-10 10:53:16', 'st'),
(101, 14.079159837328, 100.61129336271, '2018-04-10 10:54:12', 'st'),
(102, 14.078769876889, 100.61046889586, '2018-04-10 10:55:15', 'st'),
(103, 14.07897756839, 100.6108343898, '2018-04-10 10:55:58', 'st'),
(104, 14.079212651846, 100.61078611351, '2018-04-10 10:56:41', 'st'),
(105, 14.078864042164, 100.61074842204, '2018-04-10 10:57:18', 'st'),
(106, 14.079204700859, 100.61042611184, '2018-04-10 10:58:06', 'st'),
(107, 14.078832710791, 100.61087092519, '2018-04-10 10:58:57', 'st'),
(108, 14.079084694911, 100.61070004552, '2018-04-10 10:59:43', 'st'),
(109, 14.079211499188, 100.61078287027, '2018-04-10 11:00:25', 'st'),
(110, 14.07907130305, 100.61094749784, '2018-04-10 11:01:06', 'st'),
(111, 14.079093847316, 100.61079109889, '2018-04-10 11:01:50', 'st'),
(112, 14.079368010575, 100.61091496049, '2018-04-10 11:02:35', 'st'),
(113, 14.079118806525, 100.61061881058, '2018-04-10 11:03:18', 'st'),
(202, 55.2589, 45.369, '2018-04-17 04:37:04', 'st'),
(206, 12.5896, 25.5896, '2018-04-17 06:26:48', 'st'),
(220, 25.36941, 56.3258, '2018-04-17 14:42:50', 'st'),
(225, 100.258, 102.268, '2018-04-17 14:44:50', 'st'),
(226, 25.258, 25.258, '2018-04-17 14:45:58', 'st'),
(229, 18.4386, 70.4, '2018-04-17 15:00:49', NULL),
(230, 18.4386, 70.5655, '2018-04-17 15:01:20', 'st'),
(553, 17.385, 78.4867, '2018-04-17 15:03:27', 'st'),
(555, 18.4386, 79.1288, '2018-04-17 14:47:09', 'st'),
(4000, 18.4386, 79.1288, '2018-04-14 19:28:44', 'st');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_details`
--

CREATE TABLE `maintenance_details` (
  `Id` int(12) NOT NULL,
  `issue` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `expenses` int(15) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bus_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `driver_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maintenance_details`
--

INSERT INTO `maintenance_details` (`Id`, `issue`, `expenses`, `Date`, `bus_number`, `driver_id`) VALUES
(1, '', 0, '2018-04-06 16:12:19', '', ''),
(2, 'engin problem', 1200, '2018-04-06 16:19:41', '10 ', '12'),
(3, 'Tyer lost', 500, '2018-04-06 16:22:48', '12 ', 'st'),
(4, 'ab', 140, '2018-04-06 16:32:12', '10 ', 'st'),
(5, 'engine', 700, '2018-04-09 13:43:00', '12 ', 'st');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `parent_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `driver_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `parent_name`, `contact`, `address`, `username`, `password`, `driver_id`, `student_id`) VALUES
('devan', 'john', '56565656', 'ait, bangkok', 'devan', 'pass123', 'st', 'st123'),
('Babo', 'Samo', '0984534567', 'AIT', 'dr11', 'st14', 'dr11', ''),
('Omer', 'Asad', '091998877', 'AIT', 'st12', 'st12', 'st', ''),
('Smith', 'Johan', '097788443', 'Bangkok', 'st13', 'st13', 'st', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tracking_view`
-- (See below for the actual view)
--
CREATE TABLE `tracking_view` (
`latitude` double
,`longtitude` double
);

-- --------------------------------------------------------

--
-- Structure for view `tracking_view`
--
DROP TABLE IF EXISTS `tracking_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id5174499_admin`@`%` SQL SECURITY DEFINER VIEW `tracking_view`  AS  select `location_point`.`latitude` AS `latitude`,`location_point`.`longtitude` AS `longtitude` from ((`location_point` join `driver` on((`location_point`.`driver_id` = `driver`.`username`))) join `student` on((`location_point`.`driver_id` = `student`.`driver_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `driver_login`
--
ALTER TABLE `driver_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fuel_details`
--
ALTER TABLE `fuel_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `location_point`
--
ALTER TABLE `location_point`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `maintenance_details`
--
ALTER TABLE `maintenance_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `driver_login`
--
ALTER TABLE `driver_login`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fuel_details`
--
ALTER TABLE `fuel_details`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `location_point`
--
ALTER TABLE `location_point`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4001;
--
-- AUTO_INCREMENT for table `maintenance_details`
--
ALTER TABLE `maintenance_details`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `location_point`
--
ALTER TABLE `location_point`
  ADD CONSTRAINT `location_point_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`username`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
