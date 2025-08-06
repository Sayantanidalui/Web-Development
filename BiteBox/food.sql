-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 03, 2025 at 06:08 AM
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
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `og_price` int(10) NOT NULL,
  `rating` decimal(10,1) NOT NULL,
  `img` varchar(255) NOT NULL,
  `discount` int(10) NOT NULL,
  `dis_price` int(100) NOT NULL,
  `Ingredients` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `og_price`, `rating`, `img`, `discount`, `dis_price`, `Ingredients`) VALUES
(1, 'Chesse Burger', 450, 4.8, 'Burger.jpg', 50, 320, 'burger,snaks,non veg,chicken'),
(2, 'Hydrabadi Biryani', 250, 4.5, 'biryani1.jpg', 50, 200, 'chicken,biryani,non veg'),
(3, 'Cheese Cake', 650, 4.6, 'cake.jpg', 50, 500, 'cake,sweet,dessert'),
(4, 'Pistachio Fudge', 750, 4.3, 'pistachio.png', 50, 550, 'sweet,dessert'),
(5, 'Panner Butter Masala', 300, 4.4, 'paneer.png', 50, 250, 'paneer,veg'),
(6, 'Chicago Pizza', 850, 4.2, 'pizza.jpg', 50, 650, 'pizza,snacks'),
(7, 'Kolkata-Style-Biryani', 300, 5.0, 'biryani2.png', 50, 250, 'chicken,non veg,biryani'),
(8, 'Chilli Chicken', 250, 4.8, 'chilli chicken.png', 50, 180, 'chicken,non veg,chilli chicken'),
(9, 'Chole Bhature', 200, 4.5, 'chole bhature.png', 50, 140, 'veg,chole bhature'),
(10, 'Hazelnut-Iced-Coffee', 620, 4.2, 'coffee.png', 50, 480, 'drink,coffee'),
(11, 'Chicken Cutlet', 420, 4.8, 'cutlet.png', 50, 200, 'chicken,cutlet,snacks,non veg'),
(12, 'Non-Veg Thali', 950, 4.3, 'fried rice.png', 50, 750, 'fried rice,non veg,chicken,thali'),
(13, 'Dosa Platter', 400, 3.9, 'dosa.png', 50, 300, 'dosa,veg,thali'),
(14, 'Lacha Paratha Thali', 200, 4.1, 'lacha paratha.png', 50, 120, 'veg,paratha,lacha paratha'),
(15, 'Matar Paneer', 190, 4.2, 'matar panner.png', 50, 110, 'matar paneer,paneer,veg'),
(16, 'Chicken Momos', 350, 4.3, 'momo.png', 50, 200, 'momos,chicken,non veg'),
(17, 'Noodles Bowl', 750, 3.9, 'noodles.png', 50, 550, 'chinese,noodles'),
(18, 'Strawberry Shake', 400, 3.8, 'shake.jpg', 50, 320, 'shake,drink'),
(19, 'Fried Chicken', 660, 4.5, 'fried chicken.jpg', 50, 400, 'chicken,snacks,non veg'),
(20, 'Samosa', 150, 4.8, 'samosa.png', 50, 100, 'samosa,snacks'),
(21, 'Grilled Sandwich', 350, 4.9, 'sandwich.png', 50, 200, 'sandwich,snacks'),
(22, 'Veg Thali', 550, 4.5, 'veg thali.png', 50, 400, 'veg thali,veg,thali'),
(23, 'Stuffed Paratha', 220, 4.2, 'stuffed paratha.png', 50, 180, 'paratha'),
(24, 'Dahi Puri', 150, 4.6, 'dahipuri.png', 50, 100, 'snacks,dahi puri'),
(25, 'Red-Sauce Pasta', 420, 4.2, 'pasta.png', 50, 300, 'pasta'),
(26, 'Veg Pulao', 280, 4.6, 'pulao.png', 50, 200, 'veg,pulao,veg pulao'),
(27, 'Choco-Vanilla Icecream', 160, 4.0, 'icecream (1).png', 50, 120, 'icecream,sweet,dessert'),
(28, 'Egg Curry', 190, 0.0, 'egg.png', 50, 110, 'egg,non veg,egg curry'),
(29, 'Tacos', 300, 4.7, 'tacos.png', 50, 260, 'tacos,mexican'),
(32, 'Gulab Jamun', 150, 4.3, 'gulabjamun.png', 50, 120, 'sweet,dessert,gulab jamun');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `order_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `item`, `price`, `order_time`) VALUES
(1, 'Cheese Burger', 300, '2025-07-24 20:31:46'),
(2, 'Hydrabadi Biryani', 200, '2025-07-24 20:31:46'),
(3, 'Paneer Butter Masala', 260, '2025-07-24 20:33:38'),
(4, 'Kolkata-Style-Biryani', 250, '2025-07-24 20:33:38'),
(5, 'Paneer Butter Masala', 260, '2025-07-24 20:34:48'),
(6, 'Kolkata-Style-Biryani', 250, '2025-07-24 20:34:48'),
(7, 'Chilli Chicken', 180, '2025-07-24 20:34:48'),
(8, 'Chicken Cutlet', 200, '2025-07-24 20:34:48'),
(17, 'Chesse Burger', 320, '2025-08-02 10:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'RIYA', 'riya@gmail.com', 'riya123'),
(2, 'diya', 'diya123@gmail.com', '$2y$10$rhb2fhcrbLSI5pr86frUD.QPpDfvJCLb46/6qiR7LlMWdbyH5JNUi'),
(3, 'munmun', 'munmun@gmail.com', '$2y$10$owCAeYC7yk0GDTgfuB.qLuxzUIZBahw8XNJ5rYCThKPoZaqDVqHGi'),
(4, 'priya', 'priya@gmail.com', '$2y$10$OR/FZtXvM9FXxdF1M2dTYeTOEr/RXEqVCeclIHlE2o0FbI.ulGu6C'),
(5, 'Raja', 'Raja@gmail.com', '$2y$10$wiIT/uOvesopo6jNcXRn7.Arq.LNcwyEpNsBbFZ96hObfEqUgH36S'),
(6, 'Rahul', 'rahuldas@123', '$2y$10$vY/Yy1saUEfEegWICMcVtew1krw8ISyGFwAbAkM/4AXP4lVrtwL5u'),
(7, 'Rohit', 'rohit@123', '$2y$10$i/FGZQxJL.Nwbjm9hKBGyOPvB0T34ce1A6OvI2ahQzusjVCvKCGhS'),
(8, 'sayantani', 'sayu@123', '$2y$10$BJpyJFfS7OL1uUVuQwQQiuKo3XvpzfyjvW0HC6.oSAsRRcVDvmYT.'),
(11, 'SAYANTANI', 'sayantanidalui97@gmail.com', '$2y$10$rEXjMd9wOw8ntNVfH.gEEep8Nve7YEEZdAYg4U2n0CLFkUjeAA5Yu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
