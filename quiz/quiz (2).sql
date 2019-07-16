-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 12:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `test_name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`test_name`, `question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
('test5', 1, 'We Call Mahatma Gandhi as', 'Sardar', 'Bapu', '', 'Above Two', 'Bapu'),
('test5', 2, '2+2', '3', '2', '', '4', '4'),
('test5', 3, '6+5', '9', '8', '', '11', '11'),
('test5', 4, '3+4', '6', '7', '8', '9', '7'),
('test6', 5, '1+2', '2', '3', '4', '5', '3'),
('test6', 6, 'a+2=4 then a?', '2', '4', '5', '6', '2'),
('test6', 7, 'Good', 'Nice', 'hate', 'bad', 'No', 'Nice'),
('test6', 8, 'Luminous', 'Dark', 'Light', 'spark', 'other', 'light'),
('test6', 9, '3+1', '2', '3', '3', '2', '1'),
('test 7', 11, 'We Call Mahatma Gandhi as', 'Chacha', 'Bapu', 'bad', 'Above Two', 'Bapu'),
('test 7', 13, '2+2', 'Chacha', '2', '8', '4', '4'),
('test 7', 16, '2+2', '1', '7', '4', '11', '4'),
('test 7', 17, '3+4', '2', '7', '4', '9', '7'),
('test 7', 18, 'Bad', 'Hate', 'Love', 'Good', 'Cream', 'hate'),
('test 7', 19, '1+2', '1', '2', '98', '9', '11'),
('test 7', 21, '5+2', '6', '7', '2', '5', '3'),
('test 7', 23, '1+2', '5', '2', '99', '7', '3'),
('test 7', 24, '6+5', '5', '2', '4', '5', '11'),
('test 7', 25, '6*2', '5', '12', '4', '5', '12'),
('math test', 27, '2*2', '2', '10', '3', '4', '4'),
('math test', 28, 'We Call Mahatma Gandhi as', 'Nehru', 'Bapu', 'Patel', 'chaha', 'Bapu'),
('Physics Test', 29, 'Formula Of Water', 'Ho', '2HO', 'H2O', 'None of Above', 'H2o'),
('Physics Test', 30, 'Potasium Represent with', 'P', 'K', 'PO', 'Ko', 'K'),
('Physics Test', 31, 'C has', '4', '2', '1', '3', '4'),
('Physics Test', 32, 'Sun have', 'Hydro', 'Carbo', 'Both', 'Noth', 'Hydro'),
('Physics Test', 33, 'H', 'q', 'a', 'd', 'y', 'a'),
('Phy', 34, 'C has', '4', '7', '2', '9', '4'),
('Chemistry', 35, 'Formula of water', '2h0', 'H2O', 'HO', 'None of these', 'H2O'),
('Chemistry', 36, 'How to represent Potasium', 'K', 'P', 'PO', 'KO', 'K'),
('Chemistry', 37, 'Formula Of Sugar', 'c12ho11', 'C12H22O11', 'CHO', 'None of these', 'C12H22O11'),
('Chemistry', 38, 'Sun has', 'Nuclear fusion', 'Nuclear', 'Both', 'None of these', 'Nuclear fusion');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`user_id`, `user_name`, `test_name`, `score`) VALUES
(2, 'Shubham', 'math test', 1),
(3, 'rahul', 'math test', 2),
(4, 'Manav', 'Chemistry', 3),
(4, 'Manav', 'Physics Test', 4),
(4, 'Manav', 'math test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(250) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `status`) VALUES
(5, 'test5', 1),
(6, 'test6', 1),
(7, 'test 7', 1),
(8, 'math test', 1),
(9, 'Physics Test', 1),
(10, 'Phy', 1),
(11, 'Chemistry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `user_type`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$exrjPF51wkI8ik87Yh84h.2opRxnvjFO31i3OCYlHFma2WpZ1/Pb.', '0000-00-00 00:00:00', 0),
(2, 'Shubham', 'shubham@tekframes.com', '$2y$10$5G/m5Wluts/mxxmgXQZDle9WcMAzykL/oXQLs2uVpI63cu6vku87S', '2019-01-07 16:03:24', 1),
(3, 'rahul', 'rahul.kk@gmail.com', '$2y$10$nfeXrUmXQQJ5YyccqdwiP.RLE0F8rXEmXijwGyZdgK1/cJik5LABO', '2019-01-08 16:28:00', 1),
(4, 'Manav', 'manav.jaiswal@gmail.com', '$2y$10$.3bLJJx3KLX1IUujjVRy3eljTNXdi3IHc0f1XwX.q0I/s8QvEAzce', '2019-01-10 10:07:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
