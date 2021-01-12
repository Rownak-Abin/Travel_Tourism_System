-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(50) NOT NULL,
  `hname` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL,
  `roomname` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `picone` varchar(500) NOT NULL,
  `pictwo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hname`, `place`, `roomname`, `price`, `map`, `description`, `picone`, `pictwo`) VALUES
(1, 'Sayeman Beach resort', 'Coxs Bazar', 'Premium Super Deluxe ', '5000', '\\public\\assets\\imgs\\sayemanmap.jpg', 'Sayeman Beach Resort revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox’s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Kolatoli, Cox’s Bazar.', '\\public\\assets\\imgs\\h1.jpg', '\\public\\assets\\imgs\\htl1.jpg'),
(2, 'Royal Tulip Hotel', 'Coxs Bazar', 'Couple Deluxe', '7600', '\\public\\assets\\imgs\\royalmap.jpg', 'Sayeman Beach Resort revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox’s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Kolatoli, Cox’s Bazar.', '\\public\\assets\\imgs\\h2.jpg', '\\public\\assets\\imgs\\htl2.jpg'),
(3, 'Grand Sultan Hotel', 'Sylhet', 'VVIP Super Deluxe', '8800', '\\public\\assets\\imgs\\grandmap.jpg', 'Grand Sultan Resort revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox’s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Sylhet.', '\\public\\assets\\imgs\\h3.jpg', '\\public\\assets\\imgs\\htl3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(50) NOT NULL,
  `tname` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL,
  `tprice` varchar(500) NOT NULL,
  `seller` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `picthree` varchar(500) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `tname`, `place`, `tprice`, `seller`, `description`, `duration`, `picthree`, `rating`) VALUES
(1, 'Hill View Tour', 'Sylhet', '4200', 'Travel Sense BD', 'Sylhet is the tourism spot of BD n early 2005, Laskar Muqsudur Rahman, Deputy Conservator of Forests, Sylhet Forest Division, observed that Jaflong that he heard in his boyhood as the \'lungs\' of Greater Sylhet was at stake due to on going encroachments and establishment of unauthorized stone crushing mills. He took initiatives to recover the land and establish a recreation-cum-botanical park named as \'Jaflong Green Park\'.', '3 days 2 nights', '\\public\\assets\\imgs\\hill2.jpg', 5.4),
(2, 'Coxs Beach View', 'Coxs Bazar', '3800', 'BD tour Planner', 'Coxs bazar is the tourism spot of BD n early 2005, Laskar Muqsudur Rahman, Deputy Conservator of Forests, Sylhet Forest Division, observed that Jaflong that he heard in his boyhood as the \'lungs\' of Greater Sylhet was at stake due to on going encroachments and establishment of unauthorized stone crushing mills. He took initiatives to recover the land and establish a recreation-cum-botanical park named as \'Jaflong Green Park\'.', '4 days 3 nights', '\\public\\assets\\imgs\\bch2.jpg', 2.8),
(3, 'Inani View tour', 'Coxs Bazar', '2800', 'Travellers Hunt BD', 'Inani Beach is an 18-kilometre-long sea beach in Ukhia Upazila of Cox\'s Bazar District, Bangladesh. It has a lot of coral stones, which are very sharp. These coral stones look black and green, and they are found in summer or rainy seasons. Pathorkhani is located in Jaliapalong, Inani Beach.', '2 days 3 nights ', '\\public\\assets\\imgs\\inani2.jpg', 3.4);

-- --------------------------------------------------------

--
-- Table structure for table `tour_det`
--

CREATE TABLE `tour_det` (
  `tid` int(50) NOT NULL,
  `tname` varchar(500) NOT NULL,
  `titlepic` varchar(500) NOT NULL,
  `mainpic` varchar(500) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_det`
--

INSERT INTO `tour_det` (`tid`, `tname`, `titlepic`, `mainpic`, `map`) VALUES
(1, 'Hill View Tour', 'ratar.jpg', 'hill1.jpg', 'hillmap.jpg'),
(2, 'Coxs Beach View', 'blog1.jpg', 'bch1.jpg', 'coxmap.jpg'),
(3, 'Inani View tour', 'inani1.jpg', 'inanicover.jpg', 'inanimap.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `Cname` varchar(500) NOT NULL,
  `Cemail` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `tour` varchar(500) NOT NULL,
  `hotel` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `payable` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Cname`, `Cemail`, `password`, `tour`, `hotel`, `status`, `payable`, `picture`) VALUES
(1, 'Rownak', 'Rownakabin@gmail.com', '6484184', 'Coxs Beach View', '', 'Pending', '7600', '18893126-doctor-woman.jpg'),
(2, 'Abin', 'Abin@gmail.com', '123', 'Coxs Beach View', '', 'Pending', '7600', 'pro1.jpg'),
(3, 'siam', 'siam@gmail.com', '5465', 'Hill View Tour', '', 'Pending', '8400', 'pro2.jpg'),
(4, 'koushik', 'k2@gmail.com', '147', 'Hill View Tour', '', 'Pending', '4200', '/public/assetsdepositphotos_57859381-stock-photo-smiling-male-doctor-in-white.jpg'),
(5, 'rahul', 'r@gmail.com', '789', 'Hill View Tour', '', 'Confirmed', '8400', 'pro3.jpg'),
(6, 'Fav', 'f@gmail.com', '4165', 'Hill View Tour', '', 'Pending', '4200', 'asia-woman-doctor-isolated-white-38652576.jpg'),
(7, 'Akash', 'Aka@gmail.com', '159951', '', 'Sayeman Beach resort', 'Pending', '10000', 'man1.jpg'),
(8, 'Ali', 'ali@gmail.com', '147', '', 'Sayeman Beach resort', 'Pending', '5000', 'man2.jpg'),
(9, 'hr', 'hr@gmail.com', '369', 'Hill View Tour', '', 'Pending', '4200', 'man1.jpg'),
(10, 'alamin', 'alamin@gmail.com', '123', 'Coxs Beach View', '', 'Pending', '3800', 'man1.jpg'),
(11, 'Rownakefs', 'siam@gmail.com', 'bfxch', 'Hill View Tour', ' ', ' ', '4200', 'Capture.JPG'),
(12, 'simuul', 'si@gmail.com', 'dscdfc', 'Hill View Tour', ' ', ' ', '4200', 'Capture.JPG'),
(13, 'Fav', 'f@gmail.com', 'dfsdfs', 'Hill View Tour', ' ', 'pending', '4200', 'net.JPG'),
(14, 'rajib', 'rajib@gmail.com', '56465', 'Coxs Beach View', ' ', 'Pending', '11400', '11.JPG'),
(15, 'join', 'join@gmail.com', '646846', 'Hill View Tour', ' ', 'Pending', '4200', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_det`
--
ALTER TABLE `tour_det`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_det`
--
ALTER TABLE `tour_det`
  MODIFY `tid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
