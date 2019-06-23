-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2019 at 05:12 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `orderweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_email`) VALUES
(2, 'collins', 'nyamao', 'nyamaocollins11@gmail.com'),
(3, 'Alvin', 'Zulu', 'alvinzulu@gmail.com'),
(4, 'collins', 'nyamao', 'merchant@mail.com'),
(5, 'collins', 'nyamao', 'merchant@mail.com'),
(6, 'Azure', 'Test', 'test@mail.com'),
(7, 'collins', 'nyamao', 'merchant11@mail.com'),
(8, 'collins', 'nyamao', 'merchant33@mail.com'),
(9, 'uiquwu', '8wiwi', 'merchant55@mail.com'),
(10, 'collins', 'nyamao', 'merchant66@mail.com'),
(11, 'collins', 'nyamao', 'merchant88@mail.com'),
(12, 'collins', 'nyamao', 'merchant444@mail.com'),
(13, 'collins', 'nyamao', 'merchant667@mail.com'),
(14, 'collins', 'nyamao', 'merchant888@mail.com'),
(15, 'collins', 'nyamao', 'merchant999@mail.com'),
(16, 'collins', 'nyamao', 'merchant111@mail.com'),
(17, 'collins', 'nyamao', 'merchant9999@mail.com'),
(18, 'Admin', 'Admin', 'admin@orderweb.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
