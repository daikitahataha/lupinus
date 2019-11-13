-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2019 年 11 月 13 日 03:36
-- サーバのバージョン： 5.7.27
-- PHP のバージョン: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `lupinus`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `word` text NOT NULL,
  `permission_status` int(8) NOT NULL DEFAULT '0',
  `delete_flg` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `email`, `password`, `word`, `permission_status`, `delete_flg`) VALUES
(1, '田原　大貴', 'daiki.tahara@7garden.co.jp', 'e542781cc9e1472862f88e23e5400471', '頑張りましょう', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
