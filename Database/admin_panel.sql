-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 01:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `full_name`, `email`, `mobile`, `address`, `password`, `status`, `created_at`) VALUES
(10, 'Abir Azmyne', 'abirazmyne0011@gmail.com', '1234567890', 'Dhaka', '737769c0dd23064a07c3388cfa2c3e93', 1, '2020-06-17 18:38:43.432266');

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `id` int(255) NOT NULL,
  `dlocation` varchar(800) NOT NULL,
  `dname` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `daddress` varchar(800) NOT NULL,
  `quantity` varchar(800) NOT NULL,
  `dstatus` varchar(800) NOT NULL DEFAULT 'Waiting For Pickup',
  `picked_by` varchar(800) NOT NULL,
  `donorusername` varchar(800) NOT NULL,
  `donatedate` date NOT NULL DEFAULT current_timestamp(),
  `donatetime` time NOT NULL DEFAULT current_timestamp(),
  `com_status` varchar(800) NOT NULL DEFAULT 'Complete',
  `delivery_area` varchar(800) NOT NULL,
  `del_proof` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`id`, `dlocation`, `dname`, `email`, `phone`, `daddress`, `quantity`, `dstatus`, `picked_by`, `donorusername`, `donatedate`, `donatetime`, `com_status`, `delivery_area`, `del_proof`) VALUES
(13, 'Gulshan 2 DCC Market, Dhaka, Bangladesh', 'Abir Azmyne', 'abir@gmail.com', '+8801797306831', '4/1', 'For 5 People', 'Completed', 'abir', 'abirazmyne', '2022-07-29', '21:24:00', 'Completed', 'Road 02, Shyamoli Dhaka', '2968_');

-- --------------------------------------------------------

--
-- Table structure for table `color_setting`
--

CREATE TABLE `color_setting` (
  `id` int(10) NOT NULL,
  `navbar_background` varchar(255) NOT NULL,
  `sidebar_background` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `save_button_color` varchar(255) NOT NULL,
  `edit_button_color` varchar(255) NOT NULL,
  `delete_button_color` varchar(255) NOT NULL,
  `view_button_color` varchar(255) NOT NULL,
  `label_text_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color_setting`
--

INSERT INTO `color_setting` (`id`, `navbar_background`, `sidebar_background`, `text_color`, `save_button_color`, `edit_button_color`, `delete_button_color`, `view_button_color`, `label_text_color`) VALUES
(1, '#f74f22', '#704100', '#ffffff', '#049a2a', '#11ac2b', '#c60c0c', '#6c6a6a', '#434242');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `yourmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `contact`, `yourmessage`) VALUES
(22, 'Abir Azmyne', 'abir@gmail.com', '0123456789', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `google_map` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

CREATE TABLE `contact_email` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_email`
--

CREATE TABLE `contact_form_email` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(255) NOT NULL,
  `dlocation` varchar(800) NOT NULL,
  `dname` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `daddress` varchar(800) NOT NULL,
  `quantity` varchar(800) NOT NULL,
  `dstatus` varchar(800) NOT NULL DEFAULT 'Waiting For Pickup',
  `picked_by` varchar(800) NOT NULL,
  `donorusername` varchar(800) NOT NULL,
  `donatedate` date NOT NULL DEFAULT current_timestamp(),
  `donatetime` time NOT NULL DEFAULT current_timestamp(),
  `com_status` varchar(800) NOT NULL DEFAULT 'Complete',
  `delivery_area` varchar(800) NOT NULL,
  `del_proof` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `dlocation`, `dname`, `email`, `phone`, `daddress`, `quantity`, `dstatus`, `picked_by`, `donorusername`, `donatedate`, `donatetime`, `com_status`, `delivery_area`, `del_proof`) VALUES
(81, 'Shyamoli, Dhaka, Bangladesh', 'Abir Azmyne', 'abir@gmail.com', '+8801797306831', '24', 'For 10-15 People', 'Picked', 'abir', 'abirazmyne', '2022-07-29', '21:19:19', 'Complete', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(10) NOT NULL,
  `content_section` varchar(255) NOT NULL,
  `first_title` varchar(255) NOT NULL,
  `second_title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `content_section`, `first_title`, `second_title`, `description`) VALUES
(2, 'About Downloader', 'sscczxc', 'adsaczxczxc', 'dsnadasnckc aksdjasdklj asdljdls asldjsdl '),
(3, 'How to Download', 'dsds', 'dsds', '					\r\ndsds');

-- --------------------------------------------------------

--
-- Table structure for table `moneydonation`
--

CREATE TABLE `moneydonation` (
  `id` int(255) NOT NULL,
  `dorg` varchar(800) NOT NULL,
  `dmname` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `dmaddress` varchar(800) NOT NULL,
  `dmamount` varchar(800) NOT NULL,
  `dmtxn` varchar(800) NOT NULL,
  `dmstatus` varchar(800) NOT NULL DEFAULT 'Waiting For Verify',
  `donorusername` varchar(800) NOT NULL,
  `donatedate` date NOT NULL DEFAULT current_timestamp(),
  `donatetime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moneydonation`
--

INSERT INTO `moneydonation` (`id`, `dorg`, `dmname`, `email`, `phone`, `dmaddress`, `dmamount`, `dmtxn`, `dmstatus`, `donorusername`, `donatedate`, `donatetime`) VALUES
(67, 'Chandrabindu', 'Abir Azmyne', 'abir@gmail.com', '+8801797306831', 'Shyamoli, Dhaka', '500', '', 'Verified', 'abirazmyne', '2022-07-29', '21:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `theme_setting`
--

CREATE TABLE `theme_setting` (
  `id` int(10) NOT NULL,
  `header_background` varchar(255) NOT NULL,
  `footer_background` varchar(255) NOT NULL,
  `downloader_box_background` varchar(255) NOT NULL,
  `downloader_box_button` varchar(255) NOT NULL,
  `first_title` varchar(255) NOT NULL,
  `second_title` varchar(255) NOT NULL,
  `third_title` varchar(255) NOT NULL,
  `footer_menu_link` varchar(255) NOT NULL,
  `header_menu_link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `logo_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme_setting`
--

INSERT INTO `theme_setting` (`id`, `header_background`, `footer_background`, `downloader_box_background`, `downloader_box_button`, `first_title`, `second_title`, `third_title`, `footer_menu_link`, `header_menu_link`, `icon`, `paragraph`, `logo_name`) VALUES
(1, '#0a570d', '#c2c52b', '#a61c1c', '#8a7575', '#d53030', '#4d1f1f', '#1917a6', '#75c5c7', '#6ff316', '#4f24eb', '#ff0000', '#f50000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `useraddress` varchar(800) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone`, `useraddress`, `password`) VALUES
(22, 'abirazmyne', 'Abir Azmyne', 'abir@gmail.com', '+8801797306831', 'Shyamoli, Dhaka', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `volid` int(255) NOT NULL,
  `volusername` varchar(255) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `phone` varchar(800) NOT NULL,
  `orgname` varchar(800) NOT NULL,
  `password` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volid`, `volusername`, `name`, `email`, `phone`, `orgname`, `password`) VALUES
(14, 'abir', 'Abir Azmyne', 'abirazmyne@gmail.com', '+8801797306861', 'Chandrabindu', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `website_setting`
--

CREATE TABLE `website_setting` (
  `id` int(10) NOT NULL,
  `website_title` varchar(255) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `visible_website_name` int(10) NOT NULL DEFAULT 0,
  `website_logo` varchar(255) NOT NULL,
  `website_favicon` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `google_varification_code` text NOT NULL,
  `google_analytics_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_setting`
--

INSERT INTO `website_setting` (`id`, `website_title`, `website_name`, `visible_website_name`, `website_logo`, `website_favicon`, `meta_keyword`, `meta_description`, `google_varification_code`, `google_analytics_code`) VALUES
(1, 'dd', 'dd', 0, 'codingstatus-logo.jpg', 'codingstatus-icon.jpg', 'dd', 'dd', 'dd', 'dd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_setting`
--
ALTER TABLE `color_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `contactus` ADD FULLTEXT KEY `yourmessage` (`yourmessage`);
ALTER TABLE `contactus` ADD FULLTEXT KEY `yourmessage_2` (`yourmessage`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form_email`
--
ALTER TABLE `contact_form_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moneydonation`
--
ALTER TABLE `moneydonation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_setting`
--
ALTER TABLE `theme_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`volid`),
  ADD UNIQUE KEY `volusername` (`volusername`);

--
-- Indexes for table `website_setting`
--
ALTER TABLE `website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `color_setting`
--
ALTER TABLE `color_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_email`
--
ALTER TABLE `contact_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_form_email`
--
ALTER TABLE `contact_form_email`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `moneydonation`
--
ALTER TABLE `moneydonation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `theme_setting`
--
ALTER TABLE `theme_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `volid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
