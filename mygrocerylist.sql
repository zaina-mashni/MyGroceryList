-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 05:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mygrocerylist`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `amount`, `price`, `email`) VALUES
('apple', 2, '4', 'test@gmail.com'),
('tomato', 1, '3', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `category` varchar(20) NOT NULL,
  `detailedDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`name`, `image`, `description`, `price`, `category`, `detailedDescription`) VALUES
('Apple', 'apple.jpg', '1KG of Organic Fresh Apples.', '2', 'fruit', 'Now the delicious apples that everyone has grown up loving is available in organic. These apples are grown without the use of harmful pesticides, fertilizers, or preservatives. Organic Golden and Red Delicious Apples are preferred for their superiority in taste, and benefits to health, as well as the environment.'),
('Banana', 'banana.jpg', '1KG of Fresh Organic Banana.', '2', 'fruit', 'The banana tree is classified as a large perennial herb that produces banana fruits in large clusters. The banana is known for its bright yellow outer skin when ripe and curved shape. The inner flesh of the banana is a light yellow cream color, has a soft texture and offers a sweet flavor with mild tart notes.'),
('Tomato', 'tomato.jpg', '1KG of Fresh Organic Tomatoes.', '3', 'vegetable', 'Tomatoes are one of the most widely used fruits, making their way into salads, sandwiches, soups, pastas, and omelets, as well as many more dishes. Bringing garden fresh quality, Melissa’s Organic Tomatoes, are naturally fresh and juicy without use of synthetic fertilizers, pesticides, or herbicides. Melissa\'s Organic label reads: \"Melissa\'s Certified Organic Produce is free of artificial or synthetic fertilizers and full of unforgettable, great tasting flavor. Our farmers use traditional earth-friendly farming methods inspected by a nationally recognized agency to verify organic authenticity. Melissa\'s Organic Produce, a choice made closer to nature.\" Organic Tomatoes are preferred for reasons of taste, health and the environment. Enjoy them freshly sliced directly out of hand, in salads, on sandwiches, or use them in sauces, salsas, or stews.');

-- --------------------------------------------------------

--
-- Table structure for table `pastorders`
--

CREATE TABLE `pastorders` (
  `orderId` int(11) NOT NULL,
  `totalPrice` decimal(10,0) NOT NULL,
  `email` varchar(30) NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastorders`
--

INSERT INTO `pastorders` (`orderId`, `totalPrice`, `email`, `orderDate`) VALUES
(8, '10', 'test@gmail.com', '2020-05-25'),
(9, '32', 'test@gmail.com', '2020-05-25'),
(10, '11', 'test@gmail.com', '2020-05-30'),
(11, '9', 'test@gmail.com', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `email`, `review`, `comment`) VALUES
(1, 'test@gmail.com', 5, '0'),
(2, 'test@gmail.com', 5, 'feedback: lala\nquestions: no\ncomments: lala');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `gender`) VALUES
('shahed1234', 'shahed123', 'test2@gmail.com', 'f'),
('zaina1234', 'zaina123', 'test@gmail.com', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`name`,`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `pastorders`
--
ALTER TABLE `pastorders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pastorders`
--
ALTER TABLE `pastorders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
