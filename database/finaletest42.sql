-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist_user`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `GSTIN` varchar(20) NOT NULL,
  `COAnumber` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Cpassword` varchar(30) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `user_catgory` varchar(15) NOT NULL,
  `boi` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `work_places` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `tenth` varchar(255) NOT NULL,
  `tenth_per_cgpa` varchar(255) NOT NULL,
  `twelfth` varchar(255) NOT NULL,
  `twelfyth_per_cgpa` varchar(255) NOT NULL,
  `UG` varchar(255) NOT NULL,
  `UG_per_cgpa` varchar(255) NOT NULL,
  `PG` varchar(255) NOT NULL,
  `PG_per_cgpa` varchar(255) NOT NULL,
  `c_o_o` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile1` varchar(14) NOT NULL,
  `email1` varchar(35) NOT NULL,
  `Birthday_Date` varchar(11) NOT NULL,
  `languagemn` varchar(255) NOT NULL,
  `member1_name` varchar(30) NOT NULL,
  `member1_Url` varchar(100) NOT NULL,
  `member1_profImage` varchar(255) NOT NULL,
  `member2_name` varchar(30) NOT NULL,
  `member2_Url` varchar(100) NOT NULL,
  `member2_profImage` varchar(255) NOT NULL,
  `member3_name` varchar(30) NOT NULL,
  `member3_Url` varchar(100) NOT NULL,
  `member3_profImage` varchar(255) NOT NULL,
  `web_Url` varchar(100) NOT NULL,
  `social_Url` varchar(100) NOT NULL,
  `life_event` varchar(255) NOT NULL,
  `award_pic1` varchar(255) NOT NULL,
  `award_pic2` varchar(255) NOT NULL,
  `award_pic3` varchar(255) NOT NULL,
  `award_pic4` varchar(255) NOT NULL,
  `award_pic5` varchar(255) NOT NULL,
  `award_pic6` varchar(255) NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `feedback_txt` varchar(120) NOT NULL,
  `star` varchar(1) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firm_user`
--

CREATE TABLE `firm_user` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  
  `user_email` varchar(35) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `password` varchar(30) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `F_profImage` varchar(255) NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firm_user_edit`
--

CREATE TABLE `firm_user_edit` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `boi` varchar(255) NOT NULL,
  `profImage` varchar(255) NOT NULL,
 
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email_2` varchar(35) NOT NULL,
  `web_Url` varchar(100) NOT NULL,
  `social_Url` varchar(100) NOT NULL,
  `event` varchar(255) NOT NULL,
  `award_pic1` varchar(255) NOT NULL,
  `award_pic2` varchar(255) NOT NULL,
  `award_pic3` varchar(255) NOT NULL,
  `award_pic4` varchar(255) NOT NULL,
  `award_pic5` varchar(255) NOT NULL,
  `c_password` varchar(30) NOT NULL,
  `n_password` varchar(30) NOT NULL,
  `v_npassword` varchar(30) NOT NULL,
  `editpro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homefeed`
--

CREATE TABLE `homefeed` (
  `user_id` int(7) NOT NULL,
  `post_img` varchar(150) NOT NULL,
  `post_cate_id` int(7) NOT NULL,
  `post_txt` text NOT NULL,
  `view_id` int(7) NOT NULL,
  `upvote_id` int(7) NOT NULL,
  `downvote_id` int(7) NOT NULL,
  `share_id` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `user_id` int(7) NOT NULL,
  `post_img` varchar(150) NOT NULL,
  `Fullname` int(7) NOT NULL,
  `user_score` text NOT NULL,
  `award_pic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_recovery`
--

CREATE TABLE `password_recovery` (
  `user_id` int(255) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL,
  `v_npassword` varchar(30) NOT NULL,
  `password_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professional_user`
--

CREATE TABLE `professional_user` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `COAnumber` varchar(20) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `password` varchar(30) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `profImage` varchar(255) NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_user`
--

CREATE TABLE `student_user` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `profImage` varchar(255) NOT NULL,
  `google_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_user_edit`
--

CREATE TABLE `student_user_edit` (
  `user_id` int(255) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `boi` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `work_places` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `tenth` varchar(255) NOT NULL,
  `tenth_per_cgpa` varchar(255) NOT NULL,
  `twelfth` varchar(255) NOT NULL,
  `twelfyth_per_cgpa` varchar(255) NOT NULL,
  `UG` varchar(255) NOT NULL,
  `UG_per_cgpa` varchar(255) NOT NULL,
  `PG` varchar(255) NOT NULL,
  `PG_per_cgpa` varchar(255) NOT NULL,
  `c_o_o` varchar(255) NOT NULL,
  `country_1` varchar(50) NOT NULL,
  `city_1` varchar(50) NOT NULL,
  `country_2` varchar(50) NOT NULL,
  `city_2` varchar(50) NOT NULL,
  `country_3` varchar(50) NOT NULL,
  `city_3` varchar(50) NOT NULL,
  `mobile_2` varchar(14) NOT NULL,
  `email_2` varchar(35) NOT NULL,
  `Birthday_Date` varchar(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `language` varchar(255) NOT NULL,
  `web_Url` varchar(100) NOT NULL,
  `social_Url` varchar(100) NOT NULL,
  `life_event` varchar(255) NOT NULL,
  `award_pic1` varchar(255) NOT NULL,
  `award_pic2` varchar(255) NOT NULL,
  `award_pic3` varchar(255) NOT NULL,
  `award_pic4` varchar(255) NOT NULL,
  `award_pic5` varchar(255) NOT NULL,
  `award_pic6` varchar(255) NOT NULL,
  `c_password` varchar(30) NOT NULL,
  `n_password` varchar(30) NOT NULL,
  `v_npassword` varchar(30) NOT NULL,
  `profImage` varchar(255) NOT NULL,
  `editpro_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(7) NOT NULL,
  `job` varchar(100) NOT NULL,
  `school_or_collage` varchar(100) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `relationship_status` varchar(30) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `mobile_no_priority` varchar(10) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Facebook_ID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `user_id` int(7) NOT NULL,
  `post_txt` text NOT NULL,
  `post_cate_id` int(7) NOT NULL,
  `post_tag_id` int(7) NOT NULL,
  `post_img` varchar(150) NOT NULL,
  `post_time` varchar(30) NOT NULL,
  `priority` varchar(8) NOT NULL,
  `post_rule` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status_downvote`
--

CREATE TABLE `user_post_status_downvote` (
  `postimg` varchar(150) NOT NULL,
  `user_id` int(7) NOT NULL,
  `downvote_id` int(7) NOT NULL,
  `downvote_count` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status_share`
--

CREATE TABLE `user_post_status_share` (
  `postimg` varchar(150) NOT NULL,
  `user_id` int(7) NOT NULL,
  `share_id` int(7) NOT NULL,
  `share_count` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status_upvote`
--

CREATE TABLE `user_post_status_upvote` (
  `postimg` varchar(150) NOT NULL,
  `user_id` int(7) NOT NULL,
  `upvote_id` int(7) NOT NULL,
  `upvote_count` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_status_view`
--

CREATE TABLE `user_post_status_view` (
  `postimg` varchar(150) NOT NULL,
  `user_id` int(7) NOT NULL,
  `view_id` int(7) NOT NULL,
  `view_count` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_pic`
--

CREATE TABLE `user_profile_pic` (
  `profile_id` int(7) NOT NULL,
  `user_id` int(7) NOT NULL,
  `profImage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_id` int(7) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_warning`
--

CREATE TABLE `user_warning` (
  `user_id` int(7) NOT NULL,
  `warning_txt` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist_user`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);



--
-- Indexes for table `firm_user`
--
ALTER TABLE `firm_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `firm_user_edit`
--
ALTER TABLE `firm_user_edit`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `homefeed`
--
ALTER TABLE `homefeed`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `password_recovery`
--
ALTER TABLE `password_recovery`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `professional_user`
--
ALTER TABLE `professional_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_user`
--
ALTER TABLE `student_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student_user_edit`
--
ALTER TABLE `student_user_edit`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post_status_downvote`
--
ALTER TABLE `user_post_status_downvote`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post_status_share`
--
ALTER TABLE `user_post_status_share`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post_status_upvote`
--
ALTER TABLE `user_post_status_upvote`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post_status_view`
--
ALTER TABLE `user_post_status_view`
  ADD PRIMARY KEY (`view_count`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_warning`
--
ALTER TABLE `user_warning`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;



--
-- AUTO_INCREMENT for table `firm_user`
--
ALTER TABLE `firm_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `firm_user_edit`
--
ALTER TABLE `firm_user_edit`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `homefeed`
--
ALTER TABLE `homefeed`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `password_recovery`
--
ALTER TABLE `password_recovery`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `professional_user`
--
ALTER TABLE `professional_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `student_user`
--
ALTER TABLE `student_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `student_user_edit`
--
ALTER TABLE `student_user_edit`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_post_status_downvote`
--
ALTER TABLE `user_post_status_downvote`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_post_status_share`
--
ALTER TABLE `user_post_status_share`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_post_status_upvote`
--
ALTER TABLE `user_post_status_upvote`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_post_status_view`
--
ALTER TABLE `user_post_status_view`
  MODIFY `view_count` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile_pic`
--
ALTER TABLE `user_profile_pic`
  MODIFY `profile_id` int(7) NOT NULL AUTO_INCREMENT;



--
-- AUTO_INCREMENT for table `user_warning`
--
ALTER TABLE `user_warning`
  MODIFY `user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
