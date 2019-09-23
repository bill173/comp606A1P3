-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-09-23 01:27:54
-- 服务器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `onlinebooking`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer`
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
-- 转存表中的数据 `customer`
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
(11, 'rafael_liu', '123@126.com', 'therapeutic', '2019-09-06', '14:00:00', 1569187373, 'secret', '', 1569194769, 'No'),
(12, 'bill', '127@127.com', 'sport', '2019-09-27', '13:00:00', 1569192758, 'relaxing', 'canceled', 0, 'no'),
(13, 'bill', 'abc@abc.com', 'sport', '2019-09-23', '10:00:00', 1569193909, 'relaxing', '', 1569194251, 'No');

--
-- 转储表的索引
--

--
-- 表的索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
