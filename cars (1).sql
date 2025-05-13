-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 09:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `ID` int(11) NOT NULL,
  `cName` varchar(50) NOT NULL,
  `cNumber` int(16) NOT NULL,
  `cMDate` int(2) NOT NULL,
  `cYDate` int(2) NOT NULL,
  `CVC` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`ID`, `cName`, `cNumber`, `cMDate`, `cYDate`, `CVC`) VALUES
(1, 'asdasd', 0, 12, 12, 232),
(2, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(3, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(4, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(5, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(6, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(7, 'Ahmed Sanad', 2147483647, 22, 33, 111),
(8, 'adham', 111, 2, 2, 222),
(9, 'ahmed adel', 2147483647, 22, 11, 123);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` int(50) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PRICE` int(100) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `IMG1` varchar(200) NOT NULL,
  `IMG2` varchar(200) NOT NULL,
  `IMG3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `NAME`, `PRICE`, `DESCRIPTION`, `IMG1`, `IMG2`, `IMG3`) VALUES
(1, 'Dodge', 1700000, 'Dodge Charger Supercharged 6.2L HEMI® High-Output SRT® V8\nEngine with 797 HP and 707 LB-FT of Torque\n\nThe Most Powerful and Fastest Mass Produced\nSedan®\n\nCustomizable Build Configurations and Exclusive\nOptions\n', 'cars_img\\1.png', 'cars_img\\2.png', 'cars_img\\3.png'),
(2, 'BMW', 1800000, 'BMW X6 M5 4.0L® High-Output TURBO® V8Engine with 410 HP and 530 LB-FT of TorqueThe Most Powerful and Fastest Mass ProducedSedan®Customizable Build Configurations and ExclusiveOptions', 'cars_img/7.png', 'cars_img/8.png', 'cars_img/33.png'),
(3, 'Mercedes-Benz', 1500000, 'Mercedes-Benz S600 5.0L® High-Output TURBO® V8\r\nEngine with 623 HP and 688 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\12.png', 'cars_img\\13.png', 'cars_img\\14.png'),
(4, 'Audi', 1400000, 'Audi A4L Sport 3.6L® High-Output TURBO® V6\r\nEngine with 320 HP and 364 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\18.png', 'cars_img\\19.png', 'cars_img\\20.png'),
(5, 'Toyota', 900000, 'Corolla XLI 1.6L® High-Output TURBO® V4\r\nEngine with 119 HP and 142 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\24.png', 'cars_img\\25.png', 'cars_img\\26.png'),
(6, 'Dodge', 2300000, 'Dodge Challenger Supercharged 6.4L HEMI® High-Output SRT® V8\nEngine with 797 HP and 707 LB-FT of Torque\n\nThe Most Powerful and Fastest Mass Produced\nSedan®\n\nCustomizable Build Configurations and Exclusive\nOptions\n', 'cars_img\\4.png', 'cars_img\\5.png', 'cars_img\\6.png'),
(7, 'BMW', 1400000, 'BMW M5 4.4L® High-Output TURBO® V8\r\nEngine with 528 HP and 589 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\10.png', 'cars_img\\9.png', 'cars_img\\11.png'),
(8, 'Mercedes-Benz', 2300000, 'Mercedes-Benz G CLASS 5.5L® High-Output TURBO® V8\r\nEngine with 341 HP and 398 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\15.png', 'cars_img\\16.png', 'cars_img\\17.png'),
(9, 'Audi', 1700000, 'Audi Q7  3.3L® High-Output TURBO® V6\r\nEngine with 290 HP and 313 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\21.png', 'cars_img\\22.png', 'cars_img\\23.png'),
(10, 'Toyota', 1400000, 'Land Cruiser GLX 5.7L® High-Output TURBO® V8\r\nEngine with 504 HP and 534 LB-FT of Torque\r\n\r\nThe Most Powerful and Fastest Mass Produced\r\nSedan®\r\n\r\nCustomizable Build Configurations and Exclusive\r\nOptions\r\n', 'cars_img\\27.png', 'cars_img\\28.png', 'cars_img\\29.png'),
(11, 'Toyota', 1200022, 'Camry GLX 2.5L® High-Output TURBO® V4Engine with 234 HP and 260 LB-FT of TorqueThe Most Powerful and Fastest Mass ProducedSedan®Customizable Build Configurations and ExclusiveOptions', 'cars_img/30.png', 'cars_img/31.png', 'cars_img/32.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `cPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `EmailAddress`, `Password`, `cPassword`) VALUES
(5, 'adham', 'adham@gmail.com', '123123', '123123'),
(6, 'adham', '', '123123', ''),
(7, 'kassem', 'kassem@gmail.com', '123123', '1231234'),
(8, 'ahmed', 'ahmed@gmail.com', '123123', '123123'),
(9, 'NASSER', 'NASSER@GMAIL.COM', '123123', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1715;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
