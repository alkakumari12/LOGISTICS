-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 07:40 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$tuJo5VCfvQ7szdVC5hLE/OnwROlZ.F2bmo.A/n4SCi70esiGb/uGW', '2024-05-27 10:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `ad_login`
--

CREATE TABLE `ad_login` (
  `user_id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad_login`
--

INSERT INTO `ad_login` (`user_id`, `email`, `password`) VALUES
(1, 'alka@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(7, 'NcRg75z01GWjoQk', '46947', 'lkjgkgjk', 'Punjab', '144004', 'India', '09876839965', '2024-03-26 16:32:22'),
(9, 'rkQoMhT4UBxfGzK', '', '', '', '', '', '', '2024-03-27 13:17:47'),
(10, 'mWcaR3LXh1SCdlj', 'noida', 'noida', 'up', '144004', 'India', '09876839965', '2024-03-28 15:02:28'),
(11, '6atVp81QJIgSmxl', '', '', '', '', '', '', '2024-04-25 16:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial_number` int(10) NOT NULL,
  `orderID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `receiver_mobileNumber` varchar(15) DEFAULT NULL,
  `receiver_pincode` varchar(10) DEFAULT NULL,
  `receiver_area` varchar(255) DEFAULT NULL,
  `receiver_city` varchar(255) DEFAULT NULL,
  `receiver_state` varchar(255) DEFAULT NULL,
  `price` int(250) NOT NULL,
  `package_category` varchar(255) DEFAULT NULL,
  `package_weight` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial_number`, `orderID`, `user_id`, `receiver_name`, `receiver_mobileNumber`, `receiver_pincode`, `receiver_area`, `receiver_city`, `receiver_state`, `price`, `package_category`, `package_weight`, `status`, `email`) VALUES
(0, 181754050, 40, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'up', 13966, NULL, NULL, 0, ''),
(0, 264500974, 0, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'delhi', 44939, NULL, NULL, 0, ''),
(0, 316622358, 2, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'delhi', 36437, NULL, NULL, 0, ''),
(0, 417931789, 2, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'delhi', 63041, NULL, NULL, 0, ''),
(0, 497255106, 2, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'delhi', 42875, NULL, NULL, 0, ''),
(0, 637506525, 40, 'sandeep yadav', '9876839965', '400079', 'sonu Kumar', NULL, 'Punjab', 94755, NULL, NULL, 0, ''),
(0, 780100230, 40, 'sonu Kumar', '9876839965', '144004', 'delhi', NULL, 'delhi', 21388, NULL, NULL, 0, ''),
(0, 790837826, 40, 'alka kumari', '0987654321', '144004', 'sector-18', NULL, 'up', 96063, NULL, NULL, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` varchar(30) NOT NULL,
  `to_branch_id` varchar(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `package_category` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `package_category`, `price`, `status`, `date_created`) VALUES
(46, '9876543210', 'alka', 'delhi', '1234567890', 'rosh', 'noida', '9876054321', 2, 'delhi', 'bihar', '88', '7', '', 616, 0, '2024-04-01 14:49:38'),
(47, '337095813318', 'kk', 'kk', '21345455675', 'kk', 'kk', '364786345786', 2, 'delhi', 'noida', '43', '99', '', 4257, 0, '2024-04-01 15:58:10'),
(48, '539759211591', 'alka', 'noida', '43568577697', 'rosh', 'delhi', '364786345786', 2, 'delhi', 'noida', '88', '7585', '', 667480, 0, '2024-04-02 11:49:12'),
(49, '965800497078', 'pp', 'pp', '43568577697', 'pp', 'pp', '00000000', 2, 'delhi', 'kolkata', '88', '7', '', 616, 0, '2024-04-02 11:51:56'),
(50, '834010001851', 'alka', 'noida', '4057850395734609', 'rosh', 'delhi', '364786345786', 2, 'delhi', 'noida', '43', '99', '', 4257, 0, '2024-04-03 11:35:43'),
(57, '256692797968', 'alka', 'noida', '4057850395734609', 'rosh', 'delhi', '364786345786', 2, '10', '9', '88', '7', '', 871200, 0, '2024-04-03 15:43:18'),
(58, '040471674218', 'alka', 'noida', '21345455675', 'rosh', 'noida', '364786345786', 2, '9', '9', '88', '', '', 7657, 0, '2024-04-03 15:46:06'),
(59, '2345678901', 'alka', 'noida', '1234567890', 'rosh', 'delhi', 't364786345786', 2, '9', '7', '88', '7', '', 0, 0, '2024-04-03 15:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 2, 0, '2024-03-15 17:25:16'),
(12, 15, 0, '2024-03-27 12:04:33'),
(14, 7, 0, '2024-03-28 11:19:30'),
(15, 26, 0, '2024-03-28 11:19:49'),
(16, 33, 0, '2024-04-01 12:12:09'),
(17, 50, 0, '2024-04-03 15:25:35'),
(18, 59, 0, '2024-04-06 12:10:16'),
(19, 59, 0, '2024-04-06 12:17:01'),
(20, 59, 0, '2024-04-06 15:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_address`
--

CREATE TABLE `pickup_address` (
  `order_id` int(25) NOT NULL,
  `track_no` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobileNumber` varchar(250) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `package_category` varchar(50) NOT NULL,
  `package_weight` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pickup_address`
--

INSERT INTO `pickup_address` (`order_id`, `track_no`, `name`, `mobileNumber`, `pincode`, `area`, `city`, `package_category`, `package_weight`) VALUES
(140, 'TRACK_65fbcb1037237', 'alka kumari', '1234567890', '123456', 'noida', 'noida', 'net', 23),
(141, 'TRACK_65fbd874d2695', 'sonu Kumar', '9876839965', '144004', 'sdfgh', 'jalandhar', '`1234', 45),
(142, 'TRACK_65fbe6cde2a94', 'sandeep yadav', '9876839965', '400079', 'ytwieuy', 'mumbai', 'eewyiu', 6248);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `originPort` text NOT NULL,
  `destPort` text NOT NULL,
  `transportMode` text NOT NULL,
  `pieces` int(250) NOT NULL,
  `weight` int(250) NOT NULL,
  `cubic` int(250) NOT NULL,
  `deliveryDate` date NOT NULL,
  `estimatedDeliveryDate` date NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `timeCreated` int(250) NOT NULL DEFAULT current_timestamp(),
  `dateCreated` date NOT NULL,
  `deliveryTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `name`, `originPort`, `destPort`, `transportMode`, `pieces`, `weight`, `cubic`, `deliveryDate`, `estimatedDeliveryDate`, `message`, `status`, `timeCreated`, `dateCreated`, `deliveryTime`) VALUES
(1, 'alka kumari', 'noida', 'delhi', 'air', 4, 46, 0, '2024-02-05', '2024-02-05', 'hclkjczldskjs', 'pending', 15, '2024-02-05', '0000-00-00 00:00:00'),
(2, 'alka kumari', 'noida', 'delhi', 'air', 8, 9, 0, '2024-02-05', '2024-02-05', 'fddfklfdfh', 'pending', 16, '2024-02-05', '0000-00-00 00:00:00'),
(3, 'alka kumari', 'noida', 'delhi', 'air', 8, 9, 0, '2024-02-05', '2024-02-05', 'fddfklfdfh', 'pending', 16, '2024-02-05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` int(11) NOT NULL,
  `tracking_number` varchar(250) NOT NULL,
  `origin` varchar(250) NOT NULL,
  `destination` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `tracking_number`, `origin`, `destination`, `status`) VALUES
(1, '12345678900', 'noida', 'delhi', 'delivered'),
(2, '12345678900', 'noida', 'delhi', 'delivered'),
(3, '1234567890', 'noida', 'delhi', 'pending'),
(4, '12345678900', 'noida', 'delhi', 'in_transit'),
(5, '12345678900', 'noida', 'delhi', 'delivered'),
(6, '12345678900', 'dsfdfd', 'ffsdfg', 'in_transit'),
(7, '12345678900', 'lksd;fdaslfk', 'dskhdsfk', 'in_transit'),
(8, 'ORD_65bcbf04c991a', 'i;oioi', 'lhkjlh', 'pending'),
(9, '984370439', 'diuosdal', 'asiodj', 'in_transit'),
(10, '12345678900', 'dlkfh', 'luhsdl', 'pending'),
(11, '12345678900', 'dlkfh', 'luhsdl', 'pending'),
(12, '12345678900', 'djhksdjsd', 'dshdsd', 'pending'),
(13, '90000000000000', 'lhkj', 'lhkl', 'in_transit');

-- --------------------------------------------------------

--
-- Table structure for table `signup_frm`
--

CREATE TABLE `signup_frm` (
  `user_id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_verified` int(10) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_frm`
--

INSERT INTO `signup_frm` (`user_id`, `name`, `email`, `password`, `is_verified`, `image_url`) VALUES
(2, 'alka kumari', 'alka@gmail.com', '$2y$10$A9A4IvDb4E7ZYxPBxatpmu2Ot/7HSVNu1jEXJC/XNk01UdmH6VY2y', 1, ''),
(40, 'sonu Kumar', 'sonu@gmail.com', '$2y$10$QbeYTJdRjzFLE5Be/wft..CmZbMixeGGJ4FhBx.v.e47dcy./NRj.', 1, ''),
(42, 'jsmith', 'jsmith@sample.com', '$2y$10$psVe2F76BhB0AyhC8HgqXeedOuVRpTy0/77Iffy1pa295niHTEfIy', 0, ''),
(48, 'Ram', 'ram@gmail.com', '$2y$10$u3r8o2j45l2pBoSg7nRFLe4kHuZM0/BJUJlWsElOpGFcRuFGwLXTK', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `orderID` int(250) NOT NULL,
  `pincode` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `package_category` varchar(255) DEFAULT NULL,
  `package_weight` varchar(255) DEFAULT NULL,
  `receiver_name` varchar(250) DEFAULT NULL,
  `receiver_mobileNumber` varchar(250) DEFAULT NULL,
  `receiver_pincode` varchar(250) DEFAULT NULL,
  `receiver_area` varchar(250) DEFAULT NULL,
  `receiver_city` varchar(250) DEFAULT NULL,
  `receiver_state` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `orderID`, `pincode`, `area`, `city`, `package_category`, `package_weight`, `receiver_name`, `receiver_mobileNumber`, `receiver_pincode`, `receiver_area`, `receiver_city`, `receiver_state`) VALUES
(6, 0, '400079', 'sector 65', 'jalandhar', 'Document', 'Small(500gm-2kg)', '', '', '', '', '', ''),
(7, 0, '123456', 'sector 65', 'noida', 'Baby Care', 'Small(500gm-2kg)', '', '', '', '', '', ''),
(8, 0, '144004', 'noida', 'mumbai', 'Baby Care', 'Extra Small(500gm)', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `branch_id`, `date_created`, `pincode`) VALUES
(1, 'Administrator', '', 'admin@admin.com', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0, '2020-11-26 10:57:04', NULL),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, 1, '2020-11-26 11:52:04', NULL),
(3, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 2, 4, '2020-11-27 13:32:12', NULL),
(0, 'alka ', 'kumari', 'alka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 0, '2024-03-26 15:34:51', NULL),
(0, 'alka', 'kk', 'rosh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 0, '2024-03-26 15:50:42', NULL),
(0, 'sonu', 'Kumar', 'sss@hmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 0, '2024-03-26 16:45:25', NULL),
(0, 'alaka', 'klxkcl', 'sss@ggmail.com', 'e034fb6b66aacc1d48f445ddfb08da98', 2, 0, '2024-03-26 17:24:54', NULL),
(0, 'sad;lkjjkc;sdflkj', 'kc;dflkv', 'admin1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '2024-03-27 13:24:51', NULL),
(0, 'sonu', 'Kumar', 'sonu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 0, '2024-03-28 15:02:53', NULL),
(0, 'alki', 'kumarii', 'alkak@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 0, '2024-04-04 11:53:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ad_login`
--
ALTER TABLE `ad_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_address`
--
ALTER TABLE `pickup_address`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_frm`
--
ALTER TABLE `signup_frm`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_login`
--
ALTER TABLE `ad_login`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980293693;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pickup_address`
--
ALTER TABLE `pickup_address`
  MODIFY `order_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `signup_frm`
--
ALTER TABLE `signup_frm`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
