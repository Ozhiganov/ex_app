-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 11:11 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ex_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `notes` text NOT NULL COMMENT 'any more details about the user address',
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `ID` int(11) NOT NULL,
  `country` varchar(11) NOT NULL,
  `area` varchar(11) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `wanted_product` varchar(200) NOT NULL COMMENT 'الحاجه اللي انا عايزها',
  `visibility` int(11) NOT NULL DEFAULT '1' COMMENT '0 = Hide / 1 = Show',
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_img`
--

CREATE TABLE `post_img` (
  `ID` int(20) NOT NULL,
  `img_name` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `img_type` varchar(150) NOT NULL DEFAULT 'image/jpeg',
  `img_size` int(11) NOT NULL DEFAULT '12046',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_img`
--

CREATE TABLE `profile_img` (
  `ID` int(20) NOT NULL,
  `img_name` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `img_type` varchar(150) NOT NULL DEFAULT 'image/jpeg',
  `img_size` int(11) NOT NULL DEFAULT '12046',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `DOB` date NOT NULL COMMENT 'Date Of Birth',
  `gender` tinyint(4) NOT NULL COMMENT '0 = Male / 1 = Female',
  `status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Online / Offline',
  `type_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ID`, `name`) VALUES
(999, 'Super User'),
(1000, 'Admin'),
(1001, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `post_img`
--
ALTER TABLE `post_img`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_ID` (`post_ID`);

--
-- Indexes for table `profile_img`
--
ALTER TABLE `profile_img`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `user_type_ID` (`type_ID`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_img`
--
ALTER TABLE `profile_img`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_img`
--
ALTER TABLE `post_img`
  ADD CONSTRAINT `post_img_ibfk_1` FOREIGN KEY (`post_ID`) REFERENCES `posts` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile_img`
--
ALTER TABLE `profile_img`
  ADD CONSTRAINT `profile_img_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`type_ID`) REFERENCES `user_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

  