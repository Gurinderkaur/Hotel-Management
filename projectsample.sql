-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 07:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsample`
--
CREATE DATABASE IF NOT EXISTS `projectsample` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectsample`;

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `catid` int(30) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `catpic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`catid`, `catname`, `catpic`) VALUES
(1, 'Indian', '');

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cartid` int(50) NOT NULL,
  `rid` int(50) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `grandtotal` int(100) NOT NULL,
  `qty` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catres`
--

CREATE TABLE `catres` (
  `rid` int(50) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rpic` varchar(100) NOT NULL,
  `rlocation` varchar(100) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `rusername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catres`
--

INSERT INTO `catres` (`rid`, `rname`, `rpic`, `rlocation`, `rtype`, `rusername`) VALUES
(28, 'pepporni panini', '1468133930pepporni.png', 'Jalandhar', 'Indian', 'mitin@gmail.com'),
(29, 'Taj', '1468133951taj.jpg', '21 Model Town Jalandhar ', 'All', 'mitin@gmail.com'),
(31, 'Hella Spice Hut', '1468134019hella.jpg', '22-Sector Chandigarh', 'Chinese', 'radha@gmail.com'),
(32, 'Gordo & Margo Restaurant', '1468134085Gordo-Magro-logos-for-restaurants.jpg', '22 Carol Bhagh New Delhi', 'Chinese', 'rozan@gmail.com'),
(33, 'Pizza Express', '1468135281pizzaexpres.png', '14 Swanagar swabhuti road opposite to Railway Station Janadhar city', 'Pizza Hut', 'rozan@gmail.com'),
(34, 'Pizza Ranch', '1468135335pizzaranch.png', 'Jhajjar, Haryana', 'pizza delivery', 'mitin@gmail.com'),
(35, 'Food Circle', '1468569897foodcircle.png', 'Chandigarh', 'All', 'rozan@gmail.com'),
(36, 'My Kingdom', 'no-image.png', 'Jalandhar', 'Chinese', 'mitin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cattype`
--

CREATE TABLE `cattype` (
  `rtypeid` int(50) NOT NULL,
  `rid` int(50) NOT NULL,
  `rtypename` varchar(100) NOT NULL,
  `rtypepic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cattype`
--

INSERT INTO `cattype` (`rtypeid`, `rid`, `rtypename`, `rtypepic`) VALUES
(101, 1, 'Indian', 'no_image.gif');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `msgdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`firstname`, `lastname`, `username`, `password`, `type`) VALUES
('', '', '', '', 'normal'),
('mitin', 'sharma', 'mitinsharm@gmail.com', '123', 'normal'),
('richa', 'sharma', 'richasharma@gmail.com', '123', 'normal'),
('rozan', 'sharma', 'rozan@gmail.com', '123', 'normal'),
('shgn', 'sharma', 'shgn@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ratewebsite` varchar(50) NOT NULL,
  `rateservice` varchar(50) NOT NULL,
  `suggestion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `phone`, `ratewebsite`, `rateservice`, `suggestion`) VALUES
(28, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `rid` int(50) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `discount` int(50) NOT NULL,
  `rate` int(50) NOT NULL,
  `dpic` varchar(100) NOT NULL,
  `pid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`rid`, `dname`, `description`, `discount`, `rate`, `dpic`, `pid`, `username`) VALUES
(28, 'Rajma Chawal', 'Delicious with spicy flavours', 2, 150, '1468134882rajmaChawal.jpg', 1017, 'rozan@gmail.com'),
(28, 'Chhole Bhature', 'Typical Indian Dish ', 2, 180, '1468134951Chhole-Bhature.jpg', 1018, 'rozan@gmail.com'),
(28, 'Dal Makhani', 'Typical Indian pulse with Punjabi Tadka', 0, 200, '1468135047dalmakhani.jpg', 1019, ''),
(31, 'Chow Mein', 'Typical Chinese Dish ', 2, 200, '1468135103chow-mein.jpg', 1020, ''),
(31, 'Chop Suey', 'Chinese Dish having Veggies with garnish with chow mein', 5, 250, '1468135153chop-suey.jpg', 1021, ''),
(31, 'Chop Suey Au Boef', 'Chinese Dish with extra Chinese flavors added', 2, 250, '1468135212chop-suey-au-boeuf.jpeg', 1022, ''),
(34, 'Cheese Pizza', 'Best Taste with extra spicy flavours', 5, 200, '1468261846pizza.jpg', 1024, 'mitin@gmail.com'),
(29, 'Lemon Rice', 'Delicious with extra chesse', 5, 150, '1468261923lemontes.jpg', 1025, ''),
(32, 'Veg Rolls', 'Best Taste with extra spicy flavours', 12, 150, '1468262144vgroll.jpg', 1026, ''),
(30, 'Burger', 'Try it once', 2, 120, '1468569223burger.jpg', 1044, ''),
(0, '', '', 0, 0, 'no-image.png', 1047, ''),
(30, 't', 't45tg', 0, 0, 'no-image.png', 1048, ''),
(0, 'Burger', 'Delicious with extra chesse', 5, 150, 'no-image.png', 1049, ''),
(30, 'thrsg', 'hrtsb', 0, 0, 'no-image.png', 1050, ''),
(30, 'htyh', 'ytj', 0, 0, 'no-image.png', 1051, 'rozan@gmail.com'),
(36, 'Chow Mein', 'Best Taste with extra spicy flavours', 2, 180, '1468593880chow-mein.jpg', 1054, 'mitin@gmail.com'),
(34, 'King Size Pizza', 'Delicious with extra chesse', 8, 300, '1468595435pizza.jpg', 1055, 'mitin@gmail.com'),
(33, 'King Size Pizza', 'Delicious with extra chesse', 2, 350, '1468595705pizza.jpg', 1056, 'rozan@gmail.com'),
(35, 'Pau Bhaji', 'Best Taste with extra spicy flavours', 0, 200, 'no-image.png', 1057, 'rozan@gmail.com'),
(35, 'Dal Makhani', 'Indian Touch', 2, 160, '1468595774dalmakhani.jpg', 1058, 'rozan@gmail.com'),
(39, 'edrw', 'WGEFFF', 2, 123, 'no-image.png', 1059, 'mansi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `pid` int(50) NOT NULL,
  `rid` int(50) NOT NULL,
  `rtypeid` int(50) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `rate` int(100) NOT NULL,
  `dpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `rid` int(50) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timeslot` time NOT NULL,
  `date` date NOT NULL,
  `quantity` int(20) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `orderid` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`rid`, `dname`, `address`, `timeslot`, `date`, `quantity`, `customername`, `orderid`, `status`) VALUES
(28, 'Rajma Chawal', '434, Model Town, Jal', '00:00:00', '2016-07-20', 3, 'ruchi@yahoo.com', 1, 'Order Recieved'),
(31, 'Chop Suey', '434, Model Town, Jal', '00:00:00', '2016-07-20', 3, 'ruchi@yahoo.com', 2, 'Order Recieved'),
(34, 'King Size Pizza', '434, Model Town, Jal', '00:00:00', '2016-07-20', 3, 'ruchi@yahoo.com', 3, 'Order Recieved'),
(28, 'Rajma Chawal', '12 model town Dehi', '06:00:00', '2016-07-21', 2, 'ruchi@yahoo.com', 4, 'Order Recieved'),
(29, 'Lemon Rice', '12 model town Dehi', '06:00:00', '2016-07-21', 2, 'ruchi@yahoo.com', 5, 'Order Recieved'),
(28, 'Rajma Chawal', 'vereref', '09:00:00', '2016-07-28', 9, 'ruchi@yahoo.com', 6, 'Order Recieved'),
(31, 'Chop Suey Au Boef', 'gtrh', '00:00:00', '2016-07-26', 7, 'ruchi@yahoo.com', 7, 'Order Recieved'),
(28, 'Rajma Chawal', 'xzxfse', '04:00:00', '2016-07-22', 1, 'ruchi@yahoo.com', 8, 'Order Recieved'),
(29, 'Lemon Rice', 'ewfewcfw', '00:00:00', '2016-07-30', 1, 'ruchi@yahoo.com', 9, 'Order Recieved'),
(33, 'King Size Pizza', 'bhethbede', '05:00:00', '2016-07-28', 2, 'ruchi@yahoo.com', 10, 'Order Recieved'),
(34, 'King Size Pizza', 'bhethbede', '05:00:00', '2016-07-28', 2, 'ruchi@yahoo.com', 11, 'Order Recieved'),
(28, 'Rajma Chawal,Chhole Bhature,Dal Makhani', 'vsdvdsvszdv', '00:00:00', '2016-07-21', 11, 'ruchi@yahoo.com', 12, 'Order recieved.'),
(28, 'Chhole Bhature', 'duihduijnk', '07:00:00', '2016-07-22', 2, 'ruchi@yahoo.com', 13, 'Order Recieved'),
(29, 'Lemon Rice', 'duihduijnk', '07:00:00', '2016-07-22', 2, 'ruchi@yahoo.com', 14, 'Order Recieved'),
(29, 'Lemon Rice', 'uuuuuti', '06:00:00', '2016-07-22', 1, 'ruchi@yahoo.com', 15, 'Order Recieved'),
(29, 'Lemon Rice', 'hytdyd', '07:30:00', '2016-07-27', 1, 'ruchi@yahoo.com', 16, 'Order Recieved'),
(31, 'Chow Mein', 'yjyrt', '07:30:00', '2016-07-28', 1, 'ruchi@yahoo.com', 17, 'Order Recieved'),
(28, 'Rajma Chawal', 'hrthrt', '02:00:00', '2016-07-22', 1, 'ruchi@yahoo.com', 18, 'Order Recieved'),
(29, 'Lemon Rice', 'grwsg', '05:30:00', '2016-07-28', 1, 'ruchi@yahoo.com', 19, 'Order Recieved'),
(29, 'Lemon Rice', 'kyurmfyr', '06:00:00', '2016-07-23', 1, 'ruchi@yahoo.com', 20, 'Order Recieved');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `username`, `password`, `usertype`) VALUES
('Mansi', 'Joshi', 'mansi@gmail.com', '123', 'rowner'),
('mitin', 'sharma', 'mitin@gmail.com', '123', 'rowner'),
('Rozan', 'Sharma', 'rozan@gmail.com', '123', 'rowner'),
('Ruchi', 'Sharma', 'ruchi@yahoo.com', '123', 'normal'),
('Shagun', 'Sharma', 'shagunsharma@gmail.com', '123', 'normal'),
('Shgn', 'Sharma', 'shgnsharma@gmail.com', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `slotid` int(10) NOT NULL,
  `slotname` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `catres`
--
ALTER TABLE `catres`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `cattype`
--
ALTER TABLE `cattype`
  ADD PRIMARY KEY (`rtypeid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`slotid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `catid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cartid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `catres`
--
ALTER TABLE `catres`
  MODIFY `rid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `cattype`
--
ALTER TABLE `cattype`
  MODIFY `rtypeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1060;
--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `orderid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `slotid` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
