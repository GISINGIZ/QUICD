-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 01:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quic`
--

-- --------------------------------------------------------

--
-- Table structure for table `buye`
--

CREATE TABLE `buye` (
  `c_id` int(12) UNSIGNED ZEROFILL NOT NULL DEFAULT 000000000000,
  `c_name` varchar(255) NOT NULL,
  `location` varchar(225) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `comp date` date NOT NULL,
  `passw` varchar(225) NOT NULL,
  `profile` varchar(227) NOT NULL,
  `edate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filt`
--

CREATE TABLE `filt` (
  `c_id` int(10) NOT NULL,
  `cname` varchar(225) NOT NULL,
  `typ` varchar(225) NOT NULL,
  `numbe` varchar(225) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filt`
--

INSERT INTO `filt` (`c_id`, `cname`, `typ`, `numbe`, `amount`) VALUES
(2, 'FLEETGUARD', 'air filter', 'AF4060', 10),
(3, 'IVECO', 'air filter', '8025818', 7),
(4, 'perkins', 'air filter', '4881643', 15),
(7, 'FLEETGUARD', 'air filter', 'AF1733K', 11),
(11, 'perkins', 'air filter', '26510211', 12),
(12, 'FLEETGUARD', 'air filter', 'AF25748 85', 25),
(13, 'perkins', 'oil filter', '26560137', 22),
(14, 'FLEETGUARD', 'air filter', 'AF435KM', 7),
(15, 'perkins', 'air filter', '26510192', 18),
(16, 'perkins', 'Fuel filter', '4415122', 20),
(17, 'TOYOTA', 'air filter', '17701-3007', 9),
(18, 'FLEETGUARD', 'Lube filter', 'LF3828', 36),
(19, 'IVECO', 'diesel filter', '2994048', 4),
(20, 'IVECO', 'Gas oil', '2992662', 3),
(21, 'ECOguard', 'air filter', 'A44446', 14),
(22, 'FLEETGUARD', 'air filter', 'AF25262/AF25263', 2),
(23, 'perkins', 'air filter', '2651034', 4),
(24, 'perkins', 'air filter', '26510353', 9),
(25, 'FLEETGUARD', 'air filter', 'AF25129M/AF25130', 5),
(26, 'ECOguard', 'air filter', 'A45152', 3),
(27, 'FLEETGUARD', 'air filter', 'AF25454/AF25468', 4),
(28, 'Donaldson', 'oil filter', 'P812162', 3),
(29, 'perkins', 'air filter', '26510337', 2),
(30, 'FG wilson', 'oil filter', '941196', 6),
(31, 'perkins', 'oil filter', '10929 ECO+CH', 10),
(32, 'FLEETGUARD', 'air filter', 'AF1658K', 1),
(33, 'FLEETGUARD', 'air filter', 'AF25538', 1),
(34, 'Parker', 'Fuel filter/water despensor', 'L90P', 20),
(35, 'Parker', 'Fuel filter', '2020PM', 20),
(36, 'Donaldson', 'air filter', 'P181059 12D19', 1),
(37, 'CAT', 'air filter', '259-2023', 1),
(38, 'FLEETGUARD', 'Lube filter', 'LF054', 1),
(39, 'FLEETGUARD', 'air filter (sub)', 'AF25130', 1),
(40, 'CAT', 'ELEMENT', '6I-2504', 3),
(41, 'STAL', 'UN', 'ST 659B', 2),
(42, 'FLEETGUARD', 'air filter', 'AF25749', 1),
(43, 'ISUZU', 'air filter', '1-14215-145', 1),
(44, 'FG wilson', 'Fuel filter', '1000-51234', 2),
(45, 'CAT', 'oil filter', '9T-0973', 1),
(46, 'UN', 'air filter', '000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sup`
--

CREATE TABLE `sup` (
  `c_id` int(12) UNSIGNED ZEROFILL NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `location` varchar(225) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_number` int(11) NOT NULL,
  `id_copy` varchar(222) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `comp_date` date NOT NULL,
  `passw` varchar(225) NOT NULL,
  `profile` varchar(227) NOT NULL,
  `edate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sup`
--

INSERT INTO `sup` (`c_id`, `c_name`, `location`, `phone`, `email`, `id_number`, `id_copy`, `o_name`, `desc`, `username`, `comp_date`, `passw`, `profile`, `edate`) VALUES
(000000000000, 'MS JOS', 'KACYIRU', 782237409, 'nidavid042@gmail.com', 1234567, '123456789', 'MUKAMUSONERA JOSEPHINE', 'drinks foods', 'MSJOJO', '2023-03-03', 'MSJOJO', 'imgeof6419abdd5fb61.jpg', '2023-03-21 16:58:26'),
(000000000002, 'TOP SPARE PARTS', 'MUHIMA', 781366523, 'top@gmail.com', 1234567, '123456789', 'DUSABEYEZU VICENT', 'MECHANISM OUTOMOBILE', 'TOP123', '2023-03-04', 'top&é\"', 'imgeof6419b1d236b59.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) UNSIGNED ZEROFILL NOT NULL DEFAULT 000000000000,
  `user` varchar(222) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `position` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filt`
--
ALTER TABLE `filt`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `sup`
--
ALTER TABLE `sup`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filt`
--
ALTER TABLE `filt`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sup`
--
ALTER TABLE `sup`
  MODIFY `c_id` int(12) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
