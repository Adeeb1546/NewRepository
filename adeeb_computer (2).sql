-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 01:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adeeb_computer`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `apps_id` int(11) NOT NULL,
  `apps_name` varchar(255) NOT NULL,
  `apps_description` varchar(255) NOT NULL,
  `apps_image` varchar(255) NOT NULL,
  `apps_price` int(11) NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`apps_id`, `apps_name`, `apps_description`, `apps_image`, `apps_price`, `inserted_time`) VALUES
(2, 'esstrdyfugyi', 'redd  ', 'projector.jpg', 232, '2019-03-09 01:53:03'),
(5, 'etrt', 'dfhgvbh  ', 'music.jpg', 233456, '2019-03-09 13:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `camera_id` int(11) NOT NULL,
  `camera_name` varchar(255) NOT NULL,
  `camera_image` varchar(255) NOT NULL,
  `camera_description` varchar(255) NOT NULL,
  `camera_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`camera_id`, `camera_name`, `camera_image`, `camera_description`, `camera_price`, `inserted_time`) VALUES
(1, 'Panasonic Camera', 'photo-1533675180235-0ba57d720b51.jpg', '- edtrfytgu   ', 97000, '2019-03-09 13:15:38'),
(2, 'ytyfughk', 'Panasonic_Camera.jpg', 'efwdsc', 345, '2019-03-09 01:19:44'),
(3, 'ewesdfgh`', 'Mobile.jpg', 'wtdfg', 2346756, '2019-03-09 02:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `items_id`, `status`) VALUES
(1, 32, 4, 'added'),
(2, 32, 16, 'added');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Mobiles'),
(2, 'laptop'),
(3, 'pc');

-- --------------------------------------------------------

--
-- Table structure for table `gamming`
--

CREATE TABLE `gamming` (
  `games_id` int(11) NOT NULL,
  `games_name` varchar(255) NOT NULL,
  `games_description` varchar(255) NOT NULL,
  `games_image` varchar(255) NOT NULL,
  `games_price` int(11) NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamming`
--

INSERT INTO `gamming` (`games_id`, `games_name`, `games_description`, `games_image`, `games_price`, `inserted_time`) VALUES
(1, 'world of tanks', ' wetryfuygh  ', 'Capture.PNG', 8779, '2019-03-09 13:33:48'),
(2, 'gvhbkjlkn', 'dfgh  ', 'music.jpg', 4356, '2019-03-09 01:53:30'),
(3, 'gvhbkjlkn', 'ertfgh', 'Adeeb.jpg', 3456, '2019-03-09 02:18:36'),
(4, 'gvhbkjlkn', 'dssdf', 'Disease3.png', 34, '2019-03-09 02:19:54'),
(5, 'gvhbkjlkn', 'qwdas', 'Mobile.jpg', 34, '2019-03-09 02:20:17'),
(6, 'gvhbkjlkn', 'qwdas', 'Mobile.jpg', 34, '2019-03-09 02:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_brand` varchar(255) NOT NULL,
  `item_description` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_brand`, `item_description`, `item_image`, `item_price`, `inserted_time`) VALUES
(1, 'Meizu Note 2', '', 'gfhj', 'laptop.jpg', 28000, '2019-03-09 18:00:40'),
(3, 'ZTE Axon 10 Pro 5G', '', 'jnhsnjasds\r\n       ', 'Mobile.jpg', 21900, '2019-03-09 12:49:06'),
(4, 'Alcatel 1S', '', 'uytr  ', 'projector.jpg', 45999, '2019-03-09 13:07:07'),
(5, 'Nokia 4.2', '', '7u6ytr', 'world_of_tanks.jpg', 23999, '2019-03-09 01:21:32'),
(6, 'ZTE Blade V10 ', '', 'uytgr', 'tv.jpg', 28000, '2019-03-09 01:21:37'),
(7, 'g44', '', 'uytrg', 'wearable2.jpg', 234, '2019-03-09 01:21:43'),
(8, 'mmmmm', '', '7uytrt ', 'music.jpg', 465789, '2019-03-09 01:21:47'),
(9, 'Mobile', '', 'dfz', 'Mobile.jpg', 213, '2019-03-09 01:21:52'),
(10, 'hi', '', 'dfghjkn', 'tv.jpg', 234567, '2019-03-09 01:21:58'),
(13, 'samsung', 'Samsung', '23e', 'Mobile.jpg', 2331, '2019-03-09 01:22:02'),
(15, 'eefsd', 'Samsung', '34tr', 'Adeeb.jpg', 234212, '2019-03-09 02:14:49'),
(16, 'fvdsdvs', 'Samsung', 'scv', 'Mobile.jpg', 12331, '2019-03-09 02:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `laptop_id` int(11) NOT NULL,
  `laptop_name` varchar(255) NOT NULL,
  `laptop_description` varchar(255) NOT NULL,
  `laptop_image` varchar(255) NOT NULL,
  `laptop_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`laptop_id`, `laptop_name`, `laptop_description`, `laptop_image`, `laptop_price`, `inserted_time`) VALUES
(1, 'HP 15 15.6.8', '(Intel Core i5-7200U, DVD, HDMI, Webcam, WiFi AC, Bluetooth, Ethernet RJ-45, Windows 10) Customize 8GB 16GB 32GB DDR4, 256GB 512GB 1TB 2TB SSD or HDD    ', 'tv.jpg', 174000, '2019-03-09 13:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `musical_instrument`
--

CREATE TABLE `musical_instrument` (
  `musical_instrument_id` int(11) NOT NULL,
  `musical_instrument_name` varchar(255) NOT NULL,
  `musical_instrument_description` varchar(255) NOT NULL,
  `musical_instrument_image` varchar(255) NOT NULL,
  `musical_instrument_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musical_instrument`
--

INSERT INTO `musical_instrument` (`musical_instrument_id`, `musical_instrument_name`, `musical_instrument_description`, `musical_instrument_image`, `musical_instrument_price`, `inserted_time`) VALUES
(1, 'ZINGYOU Condenser Microphone Bundle,', 'BM-800 Mic Kit with Adjustable Mic Suspension Scissor Arm, Shock Mount and Double-layer Pop Filter for Studio Recording & Brocasting (BM-800 Microphone Bundle)  ', 'music.jpg', 370000, '2019-03-09 01:53:57'),
(2, '345', 'wersdfgh   ', 'projector.jpg', 32445, '2019-03-09 14:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `projectors`
--

CREATE TABLE `projectors` (
  `projectors_id` int(11) NOT NULL,
  `projectors_name` varchar(255) NOT NULL,
  `projectors_description` varchar(255) NOT NULL,
  `projectors_image` varchar(255) NOT NULL,
  `projectors_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectors`
--

INSERT INTO `projectors` (`projectors_id`, `projectors_name`, `projectors_description`, `projectors_image`, `projectors_price`, `inserted_time`) VALUES
(1, ' 2019 Newest LCD LED Outdoor Portable Home Theater ', 'Projector, Support HD 1080P Best for Outdoor Movie Night, Family, Compatible with Phone, PS4, Xbox, HDMI, USB, SD(Red)    ', 'cashify_android_tablets_1.jpg', 25999, '2019-03-09 13:13:31'),
(2, 'fgfjhgk', 'sdfgvb', 'camera.jpg', 3466, '2019-03-09 02:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `tablet_id` int(11) NOT NULL,
  `tablet_name` varchar(255) NOT NULL,
  `tablet_description` varchar(255) NOT NULL,
  `tablet_image` varchar(255) NOT NULL,
  `tablet_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`tablet_id`, `tablet_name`, `tablet_description`, `tablet_image`, `tablet_price`, `inserted_time`) VALUES
(2, 'm', 'dssa  ', 'Mobile.jpg', 2334, '2019-03-09 13:46:01'),
(4, 'Android tablet 2', 'Android Tablets are struggling for existence. And theyre failing marvellously at it the statistics seem to indicate a negative bias on the market for over a year now. Consumers are...   ', 'video.jpg', 23434, '2019-03-10 00:33:55'),
(16, '34256', 'ertyjghjm', 'projector.jpg', 34245, '2019-03-10 00:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `tv_id` int(11) NOT NULL,
  `tv_name` varchar(255) NOT NULL,
  `tv_description` varchar(255) NOT NULL,
  `tv_image` varchar(255) NOT NULL,
  `tv_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`tv_id`, `tv_name`, `tv_description`, `tv_image`, `tv_price`) VALUES
(3, 'fgghjbh', 'ertiuo      ', 'Mobile.jpg', 87686);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phone`, `joining_date`, `inserted_time`) VALUES
(32, 'Adeeb', 'softwarestudent199@protonmail.com', '12345', '0342050182', '2019-03-08 23:58:41', '2019-03-08 19:41:26'),
(33, 'mustafa', 'mustafa@gmail.com', '12345', '12345', '2019-03-09 19:54:04', '2019-03-09 14:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `video_image` varchar(255) NOT NULL,
  `video_description` varchar(255) NOT NULL,
  `video_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `video_image`, `video_description`, `video_price`, `inserted_time`) VALUES
(5, 'erft', 'laptop.jpg', 'sgdfgvb', 345, '2019-03-09 12:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `wearables`
--

CREATE TABLE `wearables` (
  `wearable_id` int(11) NOT NULL,
  `wearable_name` varchar(255) NOT NULL,
  `wearable_image` varchar(255) NOT NULL,
  `wearable_description` varchar(255) NOT NULL,
  `wearable_price` double NOT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wearables`
--

INSERT INTO `wearables` (`wearable_id`, `wearable_name`, `wearable_image`, `wearable_description`, `wearable_price`, `inserted_time`) VALUES
(1, 'Charge 3 Fitness Activity Tracker,', 'wearables.jpg', 'Graphite/Black, One Size (S & L Bands Included)    ', 17000, '2019-03-09 12:52:05'),
(3, 'black aluminum case Apple Watch', 'photo-1533675180235-0ba57d720b51.jpg', 'selective focus photography of space black aluminum case Apple Watch displaying 7:29', 8999, '2019-03-09 01:16:35'),
(4, 'smartwatch, stylus, AirPods', 'photo-1522273500616-6b4757e4c184.jpg', 'smartwatch, stylus, AirPods, and product red iPhone 7 on black surface', 37900, '2019-03-09 01:16:45'),
(5, 'ddfghb', 'Audio&videoCapture.PNG', 'sdfgvb', 23456, '2019-03-09 02:47:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`apps_id`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`camera_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gamming`
--
ALTER TABLE `gamming`
  ADD PRIMARY KEY (`games_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`laptop_id`);

--
-- Indexes for table `musical_instrument`
--
ALTER TABLE `musical_instrument`
  ADD PRIMARY KEY (`musical_instrument_id`);

--
-- Indexes for table `projectors`
--
ALTER TABLE `projectors`
  ADD PRIMARY KEY (`projectors_id`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`tablet_id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`tv_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `wearables`
--
ALTER TABLE `wearables`
  ADD PRIMARY KEY (`wearable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `apps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `camera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gamming`
--
ALTER TABLE `gamming`
  MODIFY `games_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `musical_instrument`
--
ALTER TABLE `musical_instrument`
  MODIFY `musical_instrument_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectors`
--
ALTER TABLE `projectors`
  MODIFY `projectors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tablet`
--
ALTER TABLE `tablet`
  MODIFY `tablet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `tv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wearables`
--
ALTER TABLE `wearables`
  MODIFY `wearable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
