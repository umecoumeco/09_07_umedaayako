-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019 年 2 朁E28 日 13:07
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
-- テーブルの構造 `php02_table`
--

CREATE TABLE IF NOT EXISTS `php02_table` (
`id` int(12) NOT NULL,
  `task` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(3, 'パパの誕生日', '0000-00-00', 'プレゼント買う', '2019-02-02 15:23:59'),
(4, 'アイちゃんの誕生日', '0000-00-00', 'プレゼント買う', '2019-02-02 15:24:44'),
(5, 'バレンタイン', '0000-00-00', 'チョコレート買う', '2019-02-02 15:25:22'),
(6, 'アネの洗濯機', '0000-00-00', 'いれすぎない', '2019-02-02 15:25:57'),
(7, 'あびちゃんとごはん', '0000-00-00', '仲良くなれていない', '2019-02-02 15:27:04'),
(9, '合宿', '0000-00-00', '楽しみ♡', '2019-02-02 15:28:21'),
(10, 'javascript', '0000-00-00', 'オブジェクトの復習', '2019-02-02 15:29:15'),
(13, 'php', '2019-02-07', 'test2', '2019-02-02 16:48:31'),
(14, '梅田絢子', '0000-00-00', '楽しい', '2019-02-02 18:08:04'),
(15, 'PHPの復習', '2019-03-20', 'わかった感覚を得たい！', '2019-02-28 19:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php02_table`
--
ALTER TABLE `php02_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php02_table`
--
ALTER TABLE `php02_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
