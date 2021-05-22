-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 02:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-images`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagestable`
--

CREATE TABLE `imagestable` (
  `id` int(11) NOT NULL,
  `image_path` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagestable`
--

INSERT INTO `imagestable` (`id`, `image_path`) VALUES
(1, 'images/marguerite-729510__340.jpg'),
(2, 'images/img1.jfif'),
(3, 'images/img1.jfif'),
(4, 'images/img1.jfif'),
(5, 'images/img1.jfif'),
(6, 'images/img1.jfif'),
(7, 'images/img1.jfif'),
(8, 'images/img1.jfif'),
(9, 'images/marguerite-729510__340.jpg'),
(10, 'images/marguerite-729510__340.jpg'),
(11, 'images/marguerite-729510__340.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagestable`
--
ALTER TABLE `imagestable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagestable`
--
ALTER TABLE `imagestable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
