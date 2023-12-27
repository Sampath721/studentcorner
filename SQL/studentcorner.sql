-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2023 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentcorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_products`
--

CREATE TABLE `book_products` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_descripition` int(11) NOT NULL,
  `b_cost` int(11) NOT NULL,
  `is_booked` tinyint(4) NOT NULL,
  `book_related_to` varchar(200) NOT NULL COMMENT 'Which Course The Book is related to',
  `hash_tags` varchar(255) NOT NULL COMMENT 'for fast search accessbility',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bus_stations`
--

CREATE TABLE `bus_stations` (
  `id` int(11) NOT NULL,
  `FromStation` varchar(100) NOT NULL COMMENT 'From statons of buses',
  `ToStation` varchar(100) NOT NULL COMMENT 'To station of buses\r\nT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_stations`
--

INSERT INTO `bus_stations` (`id`, `FromStation`, `ToStation`) VALUES
(1, 'tuni', 'kakinada'),
(2, 'Tuni', 'RajahMundry'),
(3, 'Tuni', 'Kathipudi'),
(4, 'to ', 'kakinada');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `chat_messages` text NOT NULL,
  `message_time` time NOT NULL COMMENT 'message timings to grab the last messages for last 5 minutes.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `UID`, `user_name`, `chat_messages`, `message_time`) VALUES
(1, 1, 'Anonymous', 'hii', '04:44:57'),
(2, 1, 'Anonymous', 'any buses avaliable', '04:45:06'),
(3, 1, 'Anonymous', 'noo', '04:45:56'),
(4, 1, 'Anonymous', 'not there', '04:46:03'),
(5, 1, 'Anonymous', 'ok', '04:46:08'),
(6, 1, 'Anonymous', 'heyy', '04:46:17'),
(7, 1, 'Anonymous', 'i am ramya', '04:46:22'),
(8, 1, 'Anonymous', 'nice', '04:46:27'),
(9, 1, 'Anonymous', 'yes there', '04:46:39'),
(10, 1, 'Anonymous', 'inkenti', '04:46:46'),
(11, 1, 'Anonymous', 'hii', '04:47:03'),
(12, 1, 'Anonymous', 'heyy', '04:47:08'),
(13, 1, 'Anonymous', 'ni name enti', '04:47:14'),
(14, 1, 'Anonymous', 'ramya', '04:47:21'),
(15, 1, 'Anonymous', 'ni name', '04:47:28'),
(16, 1, 'Anonymous', 'sandhya', '04:47:33'),
(17, 1, 'gopi', 'hey', '05:43:13'),
(18, 1, 'gopi', 'hlo', '05:44:14'),
(19, 1, 'gopi', 'hiii', '05:49:49'),
(20, 1, 'chintu', 'hii gopi', '06:02:03'),
(21, 1, 'chintu', 'heyy', '06:04:14'),
(22, 1, 'chintu', 'hlo mastaru', '06:04:25'),
(23, 1, 'Anonymous', 'hey', '06:18:40'),
(24, 1, 'Anonymous', 'ji', '09:34:58'),
(25, 1, 'Anonymous', 'hey', '06:18:55'),
(26, 1, 'Anonymous', 'hloo', '06:19:04'),
(27, 1, 'Anonymous', 'hey', '11:28:48'),
(28, 1, 'Anonymous', 'hlo', '11:29:27'),
(29, 1, 'Anonymous', 'hey hi the bus may be arrived to some station at 5am', '11:29:56'),
(30, 1, 'Anonymous', 'ohh! thanks', '11:30:06'),
(31, 1, 'Anonymous', 'heyy', '12:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_messages`
--

CREATE TABLE `personal_messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message_content` text DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `login_id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login_id`, `UserName`, `Password`, `PhoneNumber`, `Mail`, `CreatedOn`) VALUES
(1, 'samx', 'c19a9475b9074c31d6e071a9f4222fe6', '2147483647', 'k@gmail.com', '0000-00-00 00:00:00'),
(2, 'rajesh', 'c19a9475b9074c31d6e071a9f4222fe6', '9492160277', 'k@gmail.com', '2023-08-01 09:40:01'),
(4, 'gopi', '$2y$10$/Uqnfw5jykeGBFz.hBlT5ucuctrUooZu/awghwhTWdWCY/VrZ.51u', '9492160277', 'sam@gmail.com', '2023-08-01 12:04:21'),
(5, 'chintu', '$2y$10$/pTDdgWH9oRhDrnyU86c1eZYtzQxqKbgb.BR73gYi4ZEkuIh2kRga', '6309785011', 'chintu@gmail.com', '2023-08-01 12:31:12'),
(6, 'sampath', '$2y$10$0uO/lREX22QhhiGkKyHB7.e8DStyWod0YMVFv6qk0XgaznQsah0EK', '9492160277', 'sam@gmail.com', '2023-08-29 05:09:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_products`
--
ALTER TABLE `book_products`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `bus_stations`
--
ALTER TABLE `bus_stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_messages`
--
ALTER TABLE `personal_messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_products`
--
ALTER TABLE `book_products`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bus_stations`
--
ALTER TABLE `bus_stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_messages`
--
ALTER TABLE `personal_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_messages`
--
ALTER TABLE `personal_messages`
  ADD CONSTRAINT `personal_messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`login_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `personal_messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`login_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
