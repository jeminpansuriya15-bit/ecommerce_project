-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2025 at 06:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `jemin`
--

CREATE TABLE `jemin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `catagories` varchar(50) NOT NULL,
  `money` enum('cash','online') NOT NULL,
  `detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jemin`
--

INSERT INTO `jemin` (`id`, `name`, `catagories`, `money`, `detail`) VALUES
(3, 'admin', 'india', 'online', 'gddd'),
(15, 'priya', 'india', 'cash', 'gddd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `title`, `price`, `image`, `username`, `email`, `phone`, `address`, `status`) VALUES
(1, 'watch', '300', '1747451507.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(2, 'makeup', '500', '1747451350.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(3, 'laptop', '33000', '1747451758.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(6, 'mango', '350', '1747193626.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(7, 'watch', '300', '1747451507.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(8, 'camera', '300', '1747451406.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered'),
(9, 'watch', '300', '1747451507.jpg', 'test', 'test@gmail.com', '1234567876', 'usa', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `quantity`, `image`) VALUES
(4, 'makeup', 'lipstick , powder and others..', '500', '100', '1749093610.jpg'),
(5, 'camera', 'black camera', '300', '5', '1747451406.jpg'),
(6, 'watch', 'blue watch', '300', '2', '1747451507.jpg'),
(7, 'laptop', 'Microsoft New Surface Laptop (7th Edition) .', '33000', '1', '1747451758.jpg'),
(8, 'T-shirt', 'Supima Cotton Round Neck T-Shirt', '200', '2', '1747451873.jpg'),
(9, 'laptop', 'laptop 3d mockup', '20000', '1', '1747884217.jpg'),
(10, 'phone', 'iphone 13', '50000', '10', '1748145857.jpg'),
(12, 'phone', 'Highly detailed 3D model of Xiaomi Redmi note 13 Time blue.\r\n\r\n', '15000', '15', '1749789624.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `uppp`
--

CREATE TABLE `uppp` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uppp`
--

INSERT INTO `uppp` (`id`, `fname`, `lname`, `age`) VALUES
(1, 'aaa', 'bbbb', 20),
(2, 'meet', 'pansuriya', 12),
(3, 'abhi', 'adad', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `usertype`, `gender`) VALUES
(1, 'admin', 'admin@gmail.com', '123456', '9583231268', 'india', 'admin', ''),
(19, 'meet', 'meet@gmail.com', '1234', '1212121212', 'dubai', 'user', 'm'),
(21, 'a', 'aa@gmail.com', '12', '2222222222', 'america', 'user', 'm'),
(22, 'test', 'test@gmail.com', '1212', '23383833838', 'india', 'user', 'm'),
(23, 'www', 'w@gmail.com', '111', '1919191111', 'india', 'user', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `gender` enum('head','leader','programer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `name`, `email`, `skill`, `gender`) VALUES
(11, 'jemin', 'aaaa@gmaill.com', 'php', 'leader'),
(12, 'meet', 'meet@gmail.com', 'jsp', 'programer'),
(13, 'jemin', 'aa@gmail.com', 'python', 'programer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jemin`
--
ALTER TABLE `jemin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uppp`
--
ALTER TABLE `uppp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jemin`
--
ALTER TABLE `jemin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uppp`
--
ALTER TABLE `uppp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
