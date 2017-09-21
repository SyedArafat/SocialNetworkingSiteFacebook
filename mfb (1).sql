-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 01:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfb`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `uid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`uid`, `fid`, `status`) VALUES
(81, 72, 0),
(81, 74, 0),
(81, 75, 0),
(81, 76, 0),
(81, 78, 0),
(81, 80, 0),
(81, 83, 0),
(81, 85, 0),
(81, 87, 0),
(81, 89, 0),
(81, 90, 0),
(81, 91, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `upid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `status` varchar(4000) DEFAULT NULL,
  `media_path` varchar(200) DEFAULT NULL,
  `media_type` varchar(20) DEFAULT NULL,
  `up_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`upid`, `uid`, `status`, `media_path`, `media_type`, `up_date`) VALUES
(1, 81, 'asdasdasdasdasd', NULL, NULL, '2017-04-29 07:14:16'),
(3, 81, 'cxzczxczx', NULL, NULL, '2017-04-29 04:37:39'),
(4, 81, 'cxzczxczx', NULL, NULL, '2017-04-29 04:38:12'),
(5, 81, 'fsdfsdfsdfsdfsdfsdf dfsdf', NULL, NULL, '2017-04-29 04:38:22'),
(6, 81, 'asdsd', NULL, NULL, '2017-04-30 12:34:41'),
(7, 81, 'dsad', NULL, NULL, '2017-04-30 12:34:50'),
(8, 81, 'sdfsdfsdf', NULL, NULL, '2017-04-30 12:44:23'),
(9, 81, 'sdfsdfsdf', NULL, NULL, '2017-04-30 12:44:58'),
(10, 81, 'sdfsdfsdf', NULL, NULL, '2017-04-30 12:45:41'),
(11, 81, 'sdfsdfsdf', NULL, NULL, '2017-04-30 12:47:48'),
(12, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 01:03:47'),
(13, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 01:42:31'),
(14, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 01:42:49'),
(15, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 01:43:38'),
(16, 81, 'sdfsdf', '', '', '2017-04-30 01:51:39'),
(17, 81, '', '81/1469660956_53.png', '1469660956_53.png', '2017-04-30 01:53:49'),
(18, 81, '', '81/15055672_1310465749005804_5806194856658936925_n.jpg', '15055672_13104657490', '2017-04-30 10:54:20'),
(19, 81, '', '81/15055672_1310465749005804_5806194856658936925_n.jpg', '15055672_13104657490', '2017-04-30 10:58:02'),
(20, 81, '', '81/12032708_1478570639113391_3289715527142457490_o.jpg', '12032708_14785706391', '2017-04-30 11:01:02'),
(21, 81, '', '81/11214320_1478569919113463_179742239046145151_n.jpg', '11214320_14785699191', '2017-04-30 11:18:04'),
(22, 81, 'I have nothing on  my mind ...', '', '', '2017-04-30 04:06:43'),
(23, 81, 'lets do something', '', '', '2017-04-30 04:14:30'),
(24, 81, 'asdasdasd', '81/15107243_1624232764537653_6296844889184304085_n.jpg', '15107243_16242327645', '2017-04-30 04:20:56'),
(25, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 01:04:52'),
(26, 81, 'fdgdfgdfg', '', '', '2017-04-30 05:10:53'),
(27, 81, 'fhfghfgh', '', '', '2017-04-30 05:11:52'),
(28, 81, 'dsfsdfsdf', '81/12034277_1478570082446780_2495819138248715625_o.jpg', '12034277_14785700824', '2017-04-30 05:15:45'),
(29, 81, '', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 05:18:20'),
(30, 81, 'sdfsfsdfsd', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 05:27:46'),
(31, 81, 'ASADASDSADASDASDASD', '81/11221442_1562715683754191_5058283684432442698_o.jpg', '11221442_15627156837', '2017-04-30 05:30:16'),
(32, 81, 'fsdfsfdsd', '', '', '2017-04-30 05:34:14'),
(33, 91, 'asdasdasdasdsdasdasdasddsa', '', '', '2017-04-30 05:58:00'),
(34, 91, 'hfhgfhgfhgffhg', '91/11145568_1478570725780049_8250020273480466110_o.jpg', '11145568_14785707257', '2017-04-30 05:59:32'),
(35, 91, 'xczxczxc', '91/15055672_1310465749005804_5806194856658936925_n.jpg', '15055672_13104657490', '2017-04-30 06:01:28'),
(36, 91, '', '91/15055672_1310465749005804_5806194856658936925_n.jpg', '15055672_13104657490', '2017-04-30 02:01:47'),
(37, 91, '', '91/12029657_1478571162446672_2608970975469331800_o.jpg', '12029657_14785711624', '2017-04-30 02:04:39'),
(38, 91, ' ami valo asiii thabooo naa ..project hoy na kan ..\r\n', '', '', '2017-04-30 07:13:08'),
(39, 91, 'ytdfgdfdfdgfd', '91/12032708_1478570639113391_3289715527142457490_o.jpg', '12032708_14785706391', '2017-04-30 07:23:01'),
(40, 91, 'hgdhdhgfhg', '', '', '2017-04-30 07:23:46'),
(41, 91, 'sdsdfsdfsdf', '', '', '2017-04-30 07:34:11'),
(42, 91, '', '91/11999756_1478570902446698_509605191797985239_o.jpg', '11999756_14785709024', '2017-04-30 07:41:00'),
(43, 91, '', '91/12028680_1478570359113419_6030276809219728347_o.jpg', '12028680_14785703591', '2017-04-30 07:46:05'),
(44, 91, '', '91/11226935_1478570919113363_2146275099272283143_o.jpg', '11226935_14785709191', '2017-04-30 07:46:24'),
(45, 91, '', '91/14022190_1029485237150641_2623767403388672214_n.jpg', '14022190_10294852371', '2017-04-30 07:46:40'),
(46, 91, 'asasfdsfsdf', '', '', '2017-04-30 07:47:28'),
(48, 81, '', '81/12028680_1478570359113419_6030276809219728347_o.jpg', '12028680_14785703591', '2017-05-01 01:50:32'),
(49, 91, 'asdasd', '', '', '2017-05-01 02:43:52'),
(50, 91, 'DDSADASDASDAS', '91/11221508_1478570522446736_8857565611642984119_o.jpg', '11221508_14785705224', '2017-05-01 02:48:57');

-- --------------------------------------------------------

--
-- Stand-in structure for view `upload_commant`
--
CREATE TABLE `upload_commant` (
`upid` int(11)
,`uid` int(11)
,`comment` varchar(400)
,`user_name` varchar(201)
,`profile_picture` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `upload_comment`
--

CREATE TABLE `upload_comment` (
  `cid` int(11) NOT NULL,
  `upid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_comment`
--

INSERT INTO `upload_comment` (`cid`, `upid`, `uid`, `comment`) VALUES
(1, 50, 91, 'asdasd'),
(2, 49, 91, 'asdasd'),
(3, 48, 91, 'comment'),
(4, 48, 91, 'dassssssssssasdgahsd asgdvahgsd'),
(5, 44, 91, 'nabbdasbdasd dexter\r\n'),
(6, 49, 91, 'lllllllll ssddas'),
(7, 50, 91, 'dasdasd'),
(8, 50, 91, 'asdasd'),
(9, 50, 91, 'zim'),
(10, 48, 91, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `upload_like`
--

CREATE TABLE `upload_like` (
  `upid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_like`
--

INSERT INTO `upload_like` (`upid`, `uid`) VALUES
(44, 91),
(50, 91);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `join_date` date NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL,
  `cover_picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `join_date`, `profile_picture`, `cover_picture`) VALUES
(72, 'asdasd', 'ssssssss', 'sasnjury07@gmm.coma', '343b1c4a3ea721b2d640fc8700db0f36', '1998-07-17', 'male', '2017-04-06', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(74, 'dasd', 'asdasdas', 'sadfsg@sdsa.casd', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '1999-12-17', 'male', '2017-04-06', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(75, 'sadsd', 'asdsad', 'zasd@gsad.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2006-10-08', 'male', '2017-04-06', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(76, 'fds', 'sfd', 'fsd@gg.', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '1998-11-18', 'male', '2017-04-06', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(78, 'ds', 'sd', 'as@gsadgasgd.cas', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '1998-12-18', 'male', '2017-04-06', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(80, 'sda', 'sda', 'ads@fdsd.comm', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '1998-11-18', 'male', '2017-04-07', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(81, 'Syed', 'Arafat', 'zim847@gmail.com', '343b1c4a3ea721b2d640fc8700db0f36', '1994-12-11', 'male', '2017-04-16', '81/11145568_1478570725780049_8250020273480466110_o.jpg', '81/12032708_1478570639113391_3289715527142457490_o.jpg'),
(83, 'sdf', 'fsdf', 'kkk@kmail.com', 'c08ac56ae1145566f2ce54cbbea35fa3', '2001-11-17', 'male', '2017-04-16', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(85, 'fsdf', 'dsfsdf', 'sdfsdfsdf@sad.cascas', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2001-06-15', 'male', '2017-04-16', 'image/malepp.jpg', NULL),
(87, 'dsf', 'sdf', 'sdfsdfsdf@sad.cascassdfsdf', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2001-05-16', 'male', '2017-04-16', 'image/malepp.jpg', 'image/coverpicture.jpg'),
(89, 'fdg', 'dfg', 'gddfg@gasd.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2000-10-17', 'female', '2017-04-16', 'image/femalepp.jpg', NULL),
(90, 'sdasd', 'sadasd', 'sadasd@gmai.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '2000-09-17', 'female', '2017-04-17', 'image/femalepp.jpg', 'image/coverpicture.jpg'),
(91, 'fahim', 'choudhory', 'fahim@gmail.com', '343b1c4a3ea721b2d640fc8700db0f36', '1998-11-16', 'female', '2017-04-30', '91/15055672_1310465749005804_5806194856658936925_n.jpg', '91/12029657_1478571162446672_2608970975469331800_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uid` int(11) NOT NULL,
  `colledge` varchar(100) DEFAULT NULL,
  `highschool` varchar(100) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `work` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `colledge`, `highschool`, `relation`, `work`) VALUES
(91, 'asadasdasdas', 'asddfsfdsdf', 'Its Complicated', 'SAD');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_upload`
--
CREATE TABLE `user_upload` (
`uid` int(11)
,`first_name` varchar(100)
,`last_name` varchar(100)
,`email` varchar(100)
,`password` varchar(50)
,`dob` date
,`gender` varchar(6)
,`join_date` date
,`profile_picture` varchar(100)
,`cover_picture` varchar(100)
,`upid` int(11)
,`status` varchar(4000)
,`media_path` varchar(200)
,`media_type` varchar(20)
,`up_date` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `upload_commant`
--
DROP TABLE IF EXISTS `upload_commant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `upload_commant`  AS  select `a`.`upid` AS `upid`,`a`.`uid` AS `uid`,`a`.`comment` AS `comment`,concat(`b`.`first_name`,' ',`b`.`last_name`) AS `user_name`,`b`.`profile_picture` AS `profile_picture` from (`upload_comment` `a` join `user` `b`) where (`a`.`uid` = `b`.`uid`) ;

-- --------------------------------------------------------

--
-- Structure for view `user_upload`
--
DROP TABLE IF EXISTS `user_upload`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_upload`  AS  select `a`.`uid` AS `uid`,`a`.`first_name` AS `first_name`,`a`.`last_name` AS `last_name`,`a`.`email` AS `email`,`a`.`password` AS `password`,`a`.`dob` AS `dob`,`a`.`gender` AS `gender`,`a`.`join_date` AS `join_date`,`a`.`profile_picture` AS `profile_picture`,`a`.`cover_picture` AS `cover_picture`,`p`.`upid` AS `upid`,`p`.`status` AS `status`,`p`.`media_path` AS `media_path`,`p`.`media_type` AS `media_type`,`p`.`up_date` AS `up_date` from (`user` `a` join `upload` `p`) where (`a`.`uid` = `p`.`uid`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`uid`,`fid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `fid` (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`upid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `upload_comment`
--
ALTER TABLE `upload_comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `upload_like`
--
ALTER TABLE `upload_like`
  ADD PRIMARY KEY (`upid`,`uid`),
  ADD KEY `up_id` (`upid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `upid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `upload_comment`
--
ALTER TABLE `upload_comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_ibfk_2` FOREIGN KEY (`fid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `friend_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`uid`);

--
-- Constraints for table `upload`
--
ALTER TABLE `upload`
  ADD CONSTRAINT `upload_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `upload_like`
--
ALTER TABLE `upload_like`
  ADD CONSTRAINT `upload_like_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `upload_like_ibfk_2` FOREIGN KEY (`upid`) REFERENCES `upload` (`upid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
