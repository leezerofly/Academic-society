-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-09-25 05:42:25
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic-society`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `article_type_id` int(10) UNSIGNED DEFAULT NULL,
  `article_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_content` text COLLATE utf8_unicode_ci NOT NULL,
  `article_user_id` int(10) UNSIGNED DEFAULT NULL,
  `article_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`article_id`, `article_type_id`, `article_title`, `article_content`, `article_user_id`, `article_time`) VALUES
(11, 5, 'sdadas ', '<p>adsssssss<img src="http://img.baidu.com/hi/jx2/j_0034.gif"/></p>', 1, '2017-09-24 14:50:36'),
(12, 6, 'dadasda ', '<p>sdasd asd as das asd&nbsp;</p>', 1, '2017-09-24 14:50:43');

-- --------------------------------------------------------

--
-- 表的结构 `article_type`
--

CREATE TABLE `article_type` (
  `type_id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article_type`
--

INSERT INTO `article_type` (`type_id`, `type_name`) VALUES
(1, '学会新闻'),
(2, '通知公告'),
(3, '文章类型3'),
(4, '文章类型4'),
(5, '文章类型5'),
(6, '文章类型6'),
(7, '文章类型7'),
(8, '文章类型8');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_type` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_type`) VALUES
(1, 'admin', '$2y$10$I.D86APbZ3QjzQSefAUVnOb3OFoHKJovDc34GRDbsnSTl0BWXNvCu', 'admin@qq.com', 1),
(2, 'user1', '$2y$10$uNcIyqviqTMizw0bFJzGUeADhk4Ir878NbFS3NurY0377WZsKPahG', 'user1@qq.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `article_user_id` (`article_user_id`),
  ADD KEY `article` (`article_type_id`);

--
-- Indexes for table `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type` (`type_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `article_type`
--
ALTER TABLE `article_type`
  MODIFY `type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
