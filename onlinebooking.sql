-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 07:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `bookingtime` int(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `canceledTime` int(255) NOT NULL,
  `lessThan24Hours` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `type`, `date`, `time`, `bookingtime`, `motivation`, `status`, `canceledTime`, `lessThan24Hours`) VALUES
(1, 'rafael', '305055411@qq.com', '0', '2019-10-05', '10:00?00', 0, 'recovery', '0', 2147483647, 'yes'),
(2, 'woaini', '123123231', 'relaxation', '2019-09-11', '11:00:00', 0, 'relaxing', '', 0, 'yes'),
(3, '123', '1234@1234.com', 'deep', '2019-09-03', '12:00:00', 0, 'relaxing', 'canceled', 1569037266, 'yes'),
(4, '1234', '12@12.com', 'therapeutic', '2019-09-01', '13:00:00', 0, 'secret', ' not canceled', 1569193598, 'yes'),
(5, '1', '1', 'relaxation', '2019-09-24', '14:00:00', 1569037819, 'relaxing', ' not canceled', 1569187742, 'yes'),
(6, '123', '12345@12345.com', 'sport', '2019-09-01', '11:00:00', 1569128097, 'relaxing', '', 0, 'yes'),
(7, '', '', '', '0000-00-00', '', 1569128157, '', '', 0, ''),
(8, '', '', '', '0000-00-00', '', 1569128335, '', '', 0, ''),
(9, '', '', '', '0000-00-00', '', 1569129729, '', '', 0, ''),
(10, 'rafael_liu', '123@123.com', 'deep', '2019-09-02', '14:00:00', 1569131019, 'recovery', 'not canceled', 0, 'yes'),
(11, 'rafael_liu', '123@126.com', 'therapeutic', '2019-09-26', '14:00:00', 1569187373, 'secret', 'canceled', 0, 'yes'),
(12, 'bill', '127@127.com', 'sport', '2019-09-27', '13:00:00', 1569192758, 'relaxing', 'canceled', 0, 'no'),
(13, 'bill', 'abc@abc.com', 'sport', '2019-09-23', '10:00:00', 1569193909, 'relaxing', '', 1569194251, 'No'),
(14, 'bill', 'abcd@abcd.com', 'sport', '2019-09-26', '10:00:00', 1569195559, 'relaxing', 'canceled', 0, 'yes'),
(15, 'bill', 'abcde@abcde.com', 'sport', '2019-09-23', '15:00:00', 1569195730, 'relaxing', '', 1569195759, 'No'),
(16, 'MIchael', '', '', '0000-00-00', '', 1569198053, '', '', 0, ''),
(17, 'bill', 'bill@google.com', 'deep', '2019-09-01', '', 1569198578, 'recovery', '', 1569198597, 'No'),
(18, 'bill', 'bill@123.com', 'deep', '2019-09-25', '10:00:00', 1569198717, 'recovery', 'canceled', 0, 'yes'),
(19, 'bill', 'dsds@qq.com', 'sport', '2019-10-26', '10:00:00', 1569213879, 'relaxing', 'canceled', 0, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'admin', '1234', '123@123.com', 123123123),
(2, 'admin2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '12', 12),
(3, 'rafael', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
