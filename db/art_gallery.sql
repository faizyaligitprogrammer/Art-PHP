-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2020 at 11:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `ag_artist`
--

CREATE TABLE `ag_artist` (
  `artist_id` int(10) NOT NULL,
  `user_details_id` int(10) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `specilaities` varchar(30) NOT NULL,
  `artist_image` varchar(200) NOT NULL,
  `artist_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_artist`
--

INSERT INTO `ag_artist` (`artist_id`, `user_details_id`, `dob`, `specilaities`, `artist_image`, `artist_status`) VALUES
(1, 2, '2017-11-24', 'Western And Modern Paintings', 'Chrysanthemum.jpg', 1),
(3, 13, '2020-12-02', 'omana test data', 'WhatsApp Image 2020-08-24 at 2.53.24 PM.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_categories`
--

CREATE TABLE `ag_categories` (
  `categories_id` int(10) NOT NULL,
  `categories_name` varchar(50) NOT NULL,
  `categories_details` text NOT NULL,
  `category_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_categories`
--

INSERT INTO `ag_categories` (`categories_id`, `categories_name`, `categories_details`, `category_status`) VALUES
(1, 'modern indian art', 'modern indian paintings', 1),
(2, 'oil paintings', 'oil paintings', 1),
(3, 'traditional', 'traditional arts', 1),
(4, 'Western', 'Western Paintings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_comments`
--

CREATE TABLE `ag_comments` (
  `comments_id` int(10) NOT NULL,
  `painting_id` int(10) NOT NULL,
  `user_details_id` int(10) NOT NULL,
  `comments` text NOT NULL,
  `display_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_comments`
--

INSERT INTO `ag_comments` (`comments_id`, `painting_id`, `user_details_id`, `comments`, `display_status`) VALUES
(1, 1, 1, 'Nice Art', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_exibition_notification`
--

CREATE TABLE `ag_exibition_notification` (
  `exibition_notification_id` int(10) NOT NULL,
  `requestedby_artist_id` int(10) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `requested_venue` varchar(10) NOT NULL,
  `requested_date` date NOT NULL,
  `approove_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_exibition_notification`
--

INSERT INTO `ag_exibition_notification` (`exibition_notification_id`, `requestedby_artist_id`, `event_name`, `requested_venue`, `requested_date`, `approove_status`) VALUES
(1, 2, 'Painting Exhibition', 'Bengaluru', '2017-11-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_paintings`
--

CREATE TABLE `ag_paintings` (
  `paintings_id` int(10) NOT NULL,
  `categories_id` int(10) NOT NULL,
  `artist_user_id` int(10) NOT NULL,
  `painting_name` varchar(200) NOT NULL,
  `painting_path` varchar(50) NOT NULL,
  `painting_price` int(10) NOT NULL,
  `dimension` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `active_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_paintings`
--

INSERT INTO `ag_paintings` (`paintings_id`, `categories_id`, `artist_user_id`, `painting_name`, `painting_path`, `painting_price`, `dimension`, `description`, `active_status`) VALUES
(1, 4, 2, 'Western New', 'bnr-1.jpg', 4500, '1234', 'Western Modern Painting', 1),
(2, 4, 2, 'Artist', 'download.jpeg', 5000, '134', 'Brand New Images', 0),
(3, 3, 2, 'Artist', 'download.jpeg', 5000, '1234', 'teerer', 0),
(4, 1, 2, 'Geo', 'download.jpeg', 5000, '566', 'sdsdsd', 0),
(5, 1, 2, 'Geo', 'download.jpeg', 5000, '566', 'sdsdsd', 0),
(6, 2, 11, 'Artist', 'download.jpeg', 50000, '1234', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ag_purchase_request`
--

CREATE TABLE `ag_purchase_request` (
  `purchase_request_id` int(10) NOT NULL,
  `painting_id` int(10) NOT NULL,
  `user_details_id` int(10) NOT NULL,
  `requested_date` date NOT NULL,
  `request_status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_purchase_request`
--

INSERT INTO `ag_purchase_request` (`purchase_request_id`, `painting_id`, `user_details_id`, `requested_date`, `request_status`) VALUES
(1, 1, 1, '2017-11-24', '1'),
(2, 1, 5, '2020-12-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ag_user_details`
--

CREATE TABLE `ag_user_details` (
  `user_details_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `user_full_name` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_contact_num` varchar(15) NOT NULL,
  `user_email` varchar(15) NOT NULL,
  `user_status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_user_details`
--

INSERT INTO `ag_user_details` (`user_details_id`, `login_id`, `user_full_name`, `user_address`, `user_contact_num`, `user_email`, `user_status`) VALUES
(1, 2, 'User', 'User\r\n123', '9890989732', 'user@gmail.com', 1),
(2, 3, 'Artists', 'Artists\r\n234', '9890989732', 'artist@gmail.co', 1),
(12, 25, 'Geo', 'Kalathil', '6238908844', 'arun@cet.ac.in', 1),
(13, 26, 'Omanakuttan', 'Test Omana', '6238908844', 'omana@gmal.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_user_login`
--

CREATE TABLE `ag_user_login` (
  `login_id` int(10) NOT NULL,
  `user_type_id` int(10) NOT NULL,
  `login_name` varchar(30) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `active_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_user_login`
--

INSERT INTO `ag_user_login` (`login_id`, `user_type_id`, `login_name`, `login_password`, `active_status`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1),
(3, 2, 'artist', '0441f9e2d94c39a70e21b83829259aa4', 1),
(25, 3, 'appu', '622622b00805c54040dd9a15674a5117', 1),
(26, 2, 'oman', 'ad437fd2f44c7b3f8208a162604d81d0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ag_user_type`
--

CREATE TABLE `ag_user_type` (
  `user_type_id` int(10) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ag_user_type`
--

INSERT INTO `ag_user_type` (`user_type_id`, `user_type`) VALUES
(1, 'admin'),
(2, 'artist'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ag_artist`
--
ALTER TABLE `ag_artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `ag_categories`
--
ALTER TABLE `ag_categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `ag_comments`
--
ALTER TABLE `ag_comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `ag_exibition_notification`
--
ALTER TABLE `ag_exibition_notification`
  ADD PRIMARY KEY (`exibition_notification_id`);

--
-- Indexes for table `ag_paintings`
--
ALTER TABLE `ag_paintings`
  ADD PRIMARY KEY (`paintings_id`);

--
-- Indexes for table `ag_purchase_request`
--
ALTER TABLE `ag_purchase_request`
  ADD PRIMARY KEY (`purchase_request_id`);

--
-- Indexes for table `ag_user_details`
--
ALTER TABLE `ag_user_details`
  ADD PRIMARY KEY (`user_details_id`);

--
-- Indexes for table `ag_user_login`
--
ALTER TABLE `ag_user_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `ag_user_type`
--
ALTER TABLE `ag_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ag_artist`
--
ALTER TABLE `ag_artist`
  MODIFY `artist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ag_categories`
--
ALTER TABLE `ag_categories`
  MODIFY `categories_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ag_comments`
--
ALTER TABLE `ag_comments`
  MODIFY `comments_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ag_exibition_notification`
--
ALTER TABLE `ag_exibition_notification`
  MODIFY `exibition_notification_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ag_paintings`
--
ALTER TABLE `ag_paintings`
  MODIFY `paintings_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ag_purchase_request`
--
ALTER TABLE `ag_purchase_request`
  MODIFY `purchase_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ag_user_details`
--
ALTER TABLE `ag_user_details`
  MODIFY `user_details_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ag_user_login`
--
ALTER TABLE `ag_user_login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ag_user_type`
--
ALTER TABLE `ag_user_type`
  MODIFY `user_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
