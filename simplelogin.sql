-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 07:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplelogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foodname` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `ordered_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

CREATE TABLE `finalorder` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `foodname` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phoneno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`id`, `user_id`, `foodname`, `price`, `quantity`, `location`, `phoneno`) VALUES
(9, 2, 'pizza beef', 850, 1, 'Kabarak, Nakuru', '0722159677'),
(10, 2, 'pizza ahmed', 900, 2, 'Kabarak, Nakuru', '0722159677'),
(11, 2, 'pizza macaroni', 800, 2, 'Kabarak, Nakuru', '0722159677'),
(12, 2, 'pizza macaroni', 800, 2, 'Kabarak, Nakuru', '0722159677'),
(13, 2, 'pizza periperi', 900, 2, 'Kabarak, Nakuru', '0722159677'),
(14, 2, 'pizza beef', 850, 1, 'Mombasa', '0722159677'),
(15, 4, 'pizza periperi', 900, 4, 'Garissa', '0722159677'),
(16, 4, 'pizza bbq', 750, 4, 'Nairobi, Kilimani', '+44722159677'),
(17, 2, 'pizza macaroni', 800, 2, 'Kabarak, Nakuru', '0722159677'),
(18, 2, 'pizza macaroni', 800, 5, 'Kabarak, Nakuru', '0722159677');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `foodname`, `price`) VALUES
(1, 'pizza periperi', 900),
(2, 'pizza macaroni', 800),
(3, 'pizza bbq', 750),
(4, 'pizza beef', 850),
(5, 'pizza ahmed', 900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `last_login`) VALUES
(1, 'moha', '123', 'user', '2021-01-24 07:28:39'),
(2, 'ahmed', '123', 'user', '2021-02-10 16:01:50'),
(3, 'admin', '12345', 'admin', '2021-02-10 16:19:59'),
(4, 'ahmed', 'kokoko', 'user', '2021-02-10 16:19:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalorder`
--
ALTER TABLE `finalorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `type` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `finalorder`
--
ALTER TABLE `finalorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
