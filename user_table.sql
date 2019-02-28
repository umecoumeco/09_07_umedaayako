-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 2 朁E14 日 13:31
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f02_db07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'umeco', 'umeco@gmail.com', 'ayako0521', 0, 0),
(2, 'umeco', 'umeco@gmail.com', 'ayako0521', 0, 1),
(3, 'ane', 'ane@gmail.com', 'aneaneane', 0, 0),
(4, 'kinoko', 'kinoko_karen@gmail.com', 'kinokokinoko', 0, 0),
(5, 'kinoko', 'kinoko_karen@gmail.com', 'kinokokinoko', 0, 1),
(6, 'kinoko', 'kinoko_karen@gmail.com', 'kinokokinoko', 0, 0),
(7, '', '', '', 0, 1),
(8, '', '', '', 0, 1),
(9, '', '', '', 0, 1),
(10, 'umeco', 'umeco@gmail.com', 'aaaaaa', 0, 1),
(11, 'kinokoppi', 'kinoko_karen@gmail.com', 'kinokokinoko', 0, 1),
(12, 'kinopippi', 'kinoko_karen@gmail.com', 'kinokok', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
