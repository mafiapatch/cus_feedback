-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- 主機: localhost:8889
-- 產生時間： 2017 年 02 月 21 日 13:37
-- 伺服器版本: 5.5.38
-- PHP 版本： 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `cus_feedback`
--

-- --------------------------------------------------------

--
-- 資料表結構 `feedback`
--

CREATE TABLE `feedback` (
`id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `nickname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ranking` double NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `feedback`
--

INSERT INTO `feedback` (`id`, `item_id`, `cat_id`, `nickname`, `content`, `ranking`, `status`, `datetime`) VALUES
(15, 412, 1, '測試', '測試', 4, 0, '2017-02-21 13:11:36'),
(16, 412, 1, '徐章嘉', '我好愛這個', 4, 0, '2017-02-21 13:15:00'),
(17, 635, 1, '徐章嘉', '這還不錯', 4, 0, '2017-02-21 13:15:21'),
(18, 412, 1, '徐章嘉', '', 3.5, 0, '2017-02-21 13:16:52'),
(19, 412, 1, 'dsadsda', '我超強！！', 3.5, 0, '2017-02-21 13:36:46');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
