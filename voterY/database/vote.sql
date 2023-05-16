-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 01:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`, `party`) VALUES
(1, 'Head Boy', 'Sadiq', 'Kabir', '3rd Year', 'Male', 'upload/163.jpg', 'LASU'),
(2, 'Head Girl', 'Adewunmi', 'Azeezat', '4th Year', 'Female', 'upload/2.jpg', 'UNILAG'),
(3, 'Head Boy', 'Abdulmumeen', 'Abdulkadir', '4th Year', 'Male', 'upload/vote1.jfif', 'UPA'),
(4, 'Labour Girl', 'Adiele', 'Theresa', '1st Year', 'Female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', 'UPP'),
(5, 'Assembly Boy', 'Harry', 'Clinton', '3rd Year', 'Male', 'upload/2017-ford-mustang-gt-lt-15.jpg', 'DDA'),
(6, 'Assembly Girl', 'Aneke', 'Ogechi', '1st Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'ZAPO'),
(7, 'Punctuality Boy', 'Christiano', 'Ronaldo', '1st Year', 'Male', 'upload/163.jpg', 'FIFA15'),
(8, 'Punctuality Girl', 'Garith', 'Bale', '4th Year', 'Male', 'upload/FB_IMG_1512549311412.jpg', 'FIFA 18'),
(9, 'Social Boy', 'Obasi', 'Samson', '4th Year', 'Male', 'upload/FB_IMG_1512549320331.jpg', '87.7 FM'),
(10, 'Social Girl', 'Ajide', 'Boluwatife', '2nd Year', 'Female', 'upload/logo1.jpg', 'UNZA RADIO'),
(11, 'Food Boy', 'Mike', 'Jackson', '4th Year', 'Male', 'upload/FB_IMG_1512549442135.jpg', 'BOZ'),
(12, 'Food Girl', 'Nlemogu', 'Princess', '4th Year', 'Female', 'upload/ws_Porsche_911_Autumn_1366x768.jpg', 'ZANACO'),
(13, 'Health Boy', 'Ereoah', 'Emmanuel', '1st Year', 'Male', 'upload/FB_IMG_1512549340567.jpg', 'UNLUSU'),
(14, 'Health Girl', 'Ali', 'Mariam', '1st Year', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'UNZA RADIO'),
(15, 'Library Boy', 'Chinyeaka', 'Samuel', '4th Year', 'Male', 'upload/2016-ford-mustang-gt-v8-manual-grey-55.jpg', 'FIFA 18'),
(16, 'Library Girl', 'Abdullahi', 'Farida', '3rd Year', 'female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', 'UPP'),
(17, 'Sport Boy', 'Iyekekpolo', 'Elvis', '3rd Year', 'Male', 'upload/2017-ford-mustang-gt-lt-15.jpg', 'ZANACO'),
(18, 'Sport Girl', 'Shehu', 'Khadijat', '1st Year', 'Female', 'upload/ws_Porsche_911_Autumn_1366x768.jpg', 'DDA'),
(19, 'Time Keeper', 'Akuegbulem', 'Obinna', '2nd Year', 'Male', 'upload/FB_IMG_1512549320331.jpg', 'FIFA15'),
(20, 'Janitor', 'Ogar', 'Anthony', '4th Year', 'Male', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', 'UNLUSU'),
(21, 'Fellowship Muslim', 'Halidu', 'Muhammed', '3rd Year', 'Male', 'upload/2.jpg', 'UNZA RADIO'),
(22, 'Fellowship Christian', 'Sunday', 'Gift', '2nd Year', 'Male', 'upload/FB_IMG_1512549311412.jpg', 'FIFA 18'),
(23, 'Hostel', 'Oladipupo', 'Alexandra', '1st Year', 'Male', 'upload/math.jpg', 'APGA'),
(24, 'Head Boy', 'Iyekepolo', 'Elvis', '4th_year', 'Male', 'upload/prof.jpeg', 'SDP');

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `id_number` varchar(100) NOT NULL,
  `names` varchar(225) NOT NULL,
  `started` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id_number`, `names`, `started`) VALUES
('BFIN119', 'Ismaila Firdausi', '2023-04-16'),
('BIT101', 'Babalola Josiah', '2023-02-09'),
('BIT110', 'Sadiq Mariam', '2023-04-09'),
('BIT112', 'Charles Oputa', '2023-03-09'),
('BIT113', 'Salami Raqeeb Dami', '2023-03-11'),
('BIT114', 'Alaka Abdulrahaman', '2023-04-20'),
('BITED100', 'Odupe Omolara', '2023-02-14'),
('DS116', 'Odeleye Covenant', '2023-02-12'),
('FM', 'Femi Adebayo', '2023-02-01'),
('LLB115', 'Isioma Judith', '2023-07-16'),
('LLB118', 'Johnny Wick', '2023-04-17'),
('PBH117', 'Harry Porter', '2023-07-12'),
('STE', 'Steph Curry', '2023-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`user_id`, `username`, `login_time`) VALUES
(1, ' user', '2023-03-12 13:21:43'),
(2, ' user', '2023-04-12 13:37:32'),
(3, ' user', '2023-04-18 18:44:37'),
(4, ' user', '2023-04-17 18:53:12'),
(5, ' user', '2023-04-30 22:28:53'),
(6, ' user', '2023-04-30 23:16:25'),
(7, ' user', '2023-05-01 22:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parents_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parents_id`, `position`, `firstname`, `lastname`, `email`, `gender`, `img`, `phone`) VALUES
(1, 'Chairman', 'Sadiq', 'Kabir', 'abc@gmail.com', 'Male', 'upload/servicetest.jpg', '12345678'),
(2, 'Vice Chairman', 'Adewunmi', 'Azeezat', 'abc@gmail.com', 'Female', 'upload/2.jpg', '12345678'),
(3, 'Treasurer', 'Abdulmumeen', 'Abdulkadir', 'abc@gmail.com', 'Male', 'upload/vote1.jfif', '12345678'),
(4, 'Secretary', 'Adele', 'Theresa', 'abc@gmail.com', 'Female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', '12345678'),
(5, 'PRO', 'Harry', 'Clinton', 'abc@gmail.com', 'Male', 'upload/2017-ford-mustang-gt-lt-15.jpg', '12345678'),
(6, 'Event Coordinator', 'Aneke', 'Ogechi', 'abc@gmail.com', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', '12345678'),
(7, 'Membership Coordinator', 'Christiano', 'Ronaldo', 'abc@gmail.com', 'Male', 'upload/163.jpg', '12345678'),
(8, 'Fundraising Coordinator', 'Garith', 'Bale', 'abc@gmail.com', 'Male', 'upload/FB_IMG_1512549311412.jpg', '12345678'),
(9, 'Advocacy Chairman', 'Obasi', 'Samson', 'abc@gmail.com', 'Male', 'upload/FB_IMG_1512549320331.jpg', '12345678'),
(10, 'Teacher Appreciation Coordinator', 'Eburu', 'Collins', 'abc@gmail.com', 'Male', 'upload/logo1.jpg', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `parents_votes`
--

CREATE TABLE `parents_votes` (
  `vote_id` int(255) NOT NULL,
  `parents_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parents_votes`
--

INSERT INTO `parents_votes` (`vote_id`, `parents_id`, `voters_id`) VALUES
(111, '1', '59'),
(112, '3', '60'),
(113, '6', '61'),
(114, '8', '62'),
(115, '9', '63'),
(133, '1', '60'),
(134, '2', '60'),
(135, '3', '60'),
(136, '4', '60'),
(137, '5', '60'),
(138, '6', '60'),
(139, '7', '60'),
(140, '8', '60'),
(141, '10', '60'),
(142, '', '60'),
(143, '12', '60'),
(144, '2', '60'),
(145, '', '60'),
(146, '4', '60'),
(147, '5', '60'),
(148, '6', '60'),
(149, '7', '60'),
(150, '8', '60'),
(151, '10', '60'),
(152, '', '60');

-- --------------------------------------------------------

--
-- Table structure for table `p_ids`
--

CREATE TABLE `p_ids` (
  `id_number` varchar(100) NOT NULL,
  `names` varchar(225) NOT NULL,
  `started` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p_ids`
--

INSERT INTO `p_ids` (`id_number`, `names`, `started`) VALUES
('PTA001', 'Ismaila Firdausi', '2023-04-16'),
('PTA002', 'Babalola Josiah', '2023-02-09'),
('PTA003', 'Sadiq Mariam', '2023-04-09'),
('PTA004', 'Charles Oputa', '2023-03-09'),
('PTA005', 'Salami Raqeeb Dami', '2023-03-11'),
('PTA006', 'Alaka Abdulrahaman', '2023-04-20'),
('PTA007', 'Odupe Omolara', '2023-02-14'),
('PTA008', 'Odeleye Covenant', '2023-02-12'),
('PTA009', 'Femi Adebayo', '2023-02-01'),
('PTA010', 'Isioma Judith', '2023-07-16'),
('PTA011', 'Ali Mariam', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `p_voters`
--

CREATE TABLE `p_voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `activated_to_vote` int(11) NOT NULL,
  `account` varchar(100) NOT NULL DEFAULT 'Inactive',
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `p_voters`
--

INSERT INTO `p_voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `email`, `phone`, `status`, `activated_to_vote`, `account`, `date`, `password`) VALUES
(59, 'PTA001', 'Ismaila', 'Firdausi', 'Female', 'abc@gmail.', '1235678', 'Voted', 1, 'Inactive', '2023-02-09', '4a7d1ed414474e4033ac29ccb8653d9b'),
(60, 'PTA002', 'Babalola', 'Josiah', 'Male', 'abc@gmail.', '1235678', 'Voted', 1, 'Inactive', '2023-02-11', '4a7d1ed414474e4033ac29ccb8653d9b'),
(61, 'PTA003', 'Sadiq', 'Mariam', 'Female', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(62, 'PTA004', 'Charles', 'Oputa', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(63, 'PTA005', 'Salami Raqeeb', 'Damilare', 'Male', 'abc@gmail.', '1235678', 'Voted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(64, 'PTA006', 'Alaka', 'Abdulrahman', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(65, 'PTA007', 'Odupe', 'Omolara', 'Female', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(66, 'PTA008', 'Odeleye', 'Covenant', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(67, 'PTA009', 'Femi', 'Adebayo', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(71, 'PTA010', 'Isioma', 'Judith', 'Female', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Inactive', '2023-02-14', '4a7d1ed414474e4033ac29ccb8653d9b');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `position`, `firstname`, `lastname`, `email`, `gender`, `img`, `phone`) VALUES
(1, 'HOD', 'Sadiq', 'Kabir', 'abc@gmail.com', 'Male', 'upload/163.jpg', '12345678'),
(2, 'Exam Director', 'Adewunmi', 'Azeezat', 'abc@gmail.com', 'Female', 'upload/2.jpg', '12345678'),
(3, 'Counsellor', 'Abdulmumeen', 'Abdulkadir', 'abc@gmail.com', 'Male', 'upload/vote1.jfif', '12345678'),
(4, 'Music Director', 'Adiele', 'Theresa', 'abc@gmail.com', 'Female', 'upload/2016-Ford-Mustang-GT-KING-Edition-Convertible-Black-6-1600x900.jpg', '12345678'),
(5, 'Disciplinarian', 'Harry', 'Clinton', 'abc@gmail.com', 'Male', 'upload/2017-ford-mustang-gt-lt-15.jpg', '12345678'),
(6, 'Drama and Chorography', 'Aneke', 'Ogechi', 'abc@gmail.com', 'Female', 'upload/1920x1200-2087858-sports-car-wallpaper.jpg', '12345678'),
(7, 'Sport Director', 'Christiano', 'Ronaldo', 'abc@gmail.com', 'Male', 'upload/163.jpg', '12345678'),
(8, 'Head Of Clubs', 'Garith', 'Bale', 'abc@gmail.com', 'Male', 'upload/FB_IMG_1512549311412.jpg', '12345678'),
(10, 'Social Girl', 'Ajide', 'Boluwatife', 'abc@gmail.com', 'Female', 'upload/logo1.jpg', '12345678'),
(12, 'Head Teachers', ' Odupe ', 'Omolara', 'admin@mail.com', 'Female', 'upload/yoruba.jpg', '+2348132606448');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_votes`
--

CREATE TABLE `teachers_votes` (
  `vote_id` int(255) NOT NULL,
  `teachers_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers_votes`
--

INSERT INTO `teachers_votes` (`vote_id`, `teachers_id`, `voters_id`) VALUES
(111, '1', '59'),
(112, '3', '60'),
(113, '6', '61'),
(114, '8', '62'),
(115, '9', '63'),
(133, '1', '60'),
(134, '2', '60'),
(135, '3', '60'),
(136, '4', '60'),
(137, '5', '60'),
(138, '6', '60'),
(139, '7', '60'),
(140, '8', '60'),
(141, '10', '60'),
(142, '', '60'),
(143, '12', '60'),
(144, '2', '60'),
(145, '', '60'),
(146, '4', '60'),
(147, '5', '60'),
(148, '6', '60'),
(149, '7', '60'),
(150, '8', '60'),
(151, '10', '60'),
(152, '', '60');

-- --------------------------------------------------------

--
-- Table structure for table `t_ids`
--

CREATE TABLE `t_ids` (
  `id_number` varchar(100) NOT NULL,
  `names` varchar(225) NOT NULL,
  `started` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_ids`
--

INSERT INTO `t_ids` (`id_number`, `names`, `started`) VALUES
('STF001', 'Ismaila Firdausi', '2023-04-16'),
('STF002', 'Babalola Josiah', '2023-02-09'),
('STF003', 'Sadiq Mariam', '2023-04-09'),
('STF004', 'Charles Oputa', '2023-03-09'),
('STF005', 'Salami Raqeeb Dami', '2023-03-11'),
('STF006', 'Alaka Abdulrahaman', '2023-04-20'),
('STF007', 'Odupe Omolara', '2023-02-14'),
('STF008', 'Odeleye Covenant', '2023-02-12'),
('STF009', 'Femi Adebayo', '2023-02-01'),
('STF010', 'Isioma Judith', '2023-07-16'),
('STF011', 'Femi Adebayo', '2023-04-22'),
('STF012', 'Tony Parker', '2023-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `t_voters`
--

CREATE TABLE `t_voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `activated_to_vote` int(11) NOT NULL,
  `account` varchar(100) NOT NULL DEFAULT 'Inactive',
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_voters`
--

INSERT INTO `t_voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `email`, `phone`, `status`, `activated_to_vote`, `account`, `date`, `password`) VALUES
(59, 'STF001', 'Micheal', 'Jordan', 'Male', 'abc@gmail.', '1235678', 'Voted', 1, 'Active', '2023-02-09', '4a7d1ed414474e4033ac29ccb8653d9b'),
(60, 'STF002', 'James', 'Harden', 'Male', 'abc@gmail.', '1235678', 'Voted', 1, 'Active', '2023-02-11', '4a7d1ed414474e4033ac29ccb8653d9b'),
(61, 'STF003', 'Lebron', 'James', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(62, 'STF004', 'Azeezat', 'Osuala', 'Female', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(63, 'STF005', 'Tea', 'Cooper', 'Female', 'abc@gmail.', '1235678', 'Voted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(64, 'STF006', 'Angel', 'Koni', 'Female', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(65, 'STF007', 'Kyrie', 'Irving', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(66, 'STF008', 'John', 'Wood', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(67, 'STF009', 'Giannis', 'Antetokumpo', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(71, 'STF010', 'Victor', 'Moses', 'Male', 'abc@gmail.', '1235678', 'Unvoted', 1, 'Active', '2023-02-14', '4a7d1ed414474e4033ac29ccb8653d9b'),
(74, 'STF012', 'Tony', 'Parker', 'Male', 'abc@gmail.', '12345678', 'Unvoted', 1, 'Active', '2023-04-25', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `phone`, `email`) VALUES
(1, 'admin', 'admin', 'Sadiq', 'Kabir', 977112458, 'Sadiq@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL DEFAULT 260,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `phone`, `email`) VALUES
(4, 'user', 'user', 'Skb', 'kb', 123456, 'kabir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `prog_study` varchar(10) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL DEFAULT 'Inactive',
  `date` date DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `firstname`, `lastname`, `gender`, `prog_study`, `year_level`, `status`, `account`, `date`, `password`) VALUES
(59, 'BIT101', 'Micheal', 'Jordan', 'Male', 'BIT', '1st Year', 'Voted', 'Active', '2023-02-09', '4a7d1ed414474e4033ac29ccb8653d9b'),
(60, 'BIT113', 'James', 'Harden', 'Male', 'BIT', '1st Year', 'Voted', 'Active', '2023-02-11', '4a7d1ed414474e4033ac29ccb8653d9b'),
(61, 'BFIN119', 'Lebron', 'James', 'Male', 'BFIN', '2nd Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(62, 'BIT110', 'Azeezat', 'Osuala', 'Female', 'BIT', '3rd Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(63, 'BIT114', 'Tea', 'Cooper', 'Female', 'BIT', '4th Year', 'Voted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(64, 'DS116', 'Angel', 'Koni', 'Female', 'DS', '4th Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(65, 'LLB115', 'Kyrie', 'Irving', 'Male', 'LLB', '1st Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(66, 'LLB118', 'John', 'Wood', 'Male', 'LLB', '3rd Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(67, 'PBH117', 'Giannis', 'Antetokumpo', 'Male', 'PBH', '4th Year', 'Unvoted', 'Active', '2023-02-12', '4a7d1ed414474e4033ac29ccb8653d9b'),
(71, 'BIT112', 'Victor', 'Moses', 'Male', 'BIT', '3rd Year', 'Unvoted', 'Active', '2023-02-14', '4a7d1ed414474e4033ac29ccb8653d9b'),
(72, 'BITED100', 'Joe', 'Biden', 'Male', 'BITED', '1st Year', 'Unvoted', 'Active', '2023-02-14', '4a7d1ed414474e4033ac29ccb8653d9b'),
(73, 'STE', 'Steph', 'Curry', 'Male', 'Basketball', '1st Year', 'Unvoted', 'Active', '2023-04-20', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(111, '1', '59'),
(112, '3', '59'),
(113, '6', '59'),
(114, '8', '59'),
(115, '9', '59'),
(116, '11', '59'),
(117, '14', '59'),
(118, '15', '59'),
(119, '18', '59'),
(120, '19', '59'),
(121, '22', '59'),
(122, '2', '63'),
(123, '3', '63'),
(124, '6', '63'),
(125, '8', '63'),
(126, '10', '63'),
(127, '11', '63'),
(128, '13', '63'),
(129, '16', '63'),
(130, '17', '63'),
(131, '19', '63'),
(132, '22', '63'),
(133, '', '60'),
(134, '', '60'),
(135, '', '60'),
(136, '', '60'),
(137, '', '60'),
(138, '', '60'),
(139, '', '60'),
(140, '', '60'),
(141, '', '60'),
(142, '10', '60'),
(143, '', '60'),
(144, '', '60'),
(145, '', '60'),
(146, '', '60'),
(147, '', '60'),
(148, '', '60'),
(149, '', '60'),
(150, '', '60'),
(151, '', '60'),
(152, '', '60'),
(153, '', '60'),
(154, '', '60'),
(155, '12', '60'),
(156, '', '61'),
(157, '', '61'),
(158, '', '61'),
(159, '', '61'),
(160, '', '61'),
(161, '', '61'),
(162, '', '61'),
(163, '', '61'),
(164, '', '61'),
(165, '', '61'),
(166, '', '61'),
(167, '', '61'),
(168, '', '61'),
(169, '', '61'),
(170, '', '61'),
(171, '', '61'),
(172, '', '61'),
(173, '', '61'),
(174, '', '61'),
(175, '', '61'),
(176, '', '61'),
(177, '', '61'),
(178, '', '61');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parents_id`);

--
-- Indexes for table `parents_votes`
--
ALTER TABLE `parents_votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `p_ids`
--
ALTER TABLE `p_ids`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `p_voters`
--
ALTER TABLE `p_voters`
  ADD PRIMARY KEY (`voters_id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);

--
-- Indexes for table `teachers_votes`
--
ALTER TABLE `teachers_votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- Indexes for table `t_ids`
--
ALTER TABLE `t_ids`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `t_voters`
--
ALTER TABLE `t_voters`
  ADD PRIMARY KEY (`voters_id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parents_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parents_votes`
--
ALTER TABLE `parents_votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `p_voters`
--
ALTER TABLE `p_voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teachers_votes`
--
ALTER TABLE `teachers_votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `t_voters`
--
ALTER TABLE `t_voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
