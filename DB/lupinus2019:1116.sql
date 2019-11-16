-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2019 年 11 月 16 日 00:59
-- サーバのバージョン： 5.7.27
-- PHP のバージョン: 7.1.33

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

-- --------------------------------------------------------

--
-- テーブルの構造 `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `room`
--

CREATE TABLE `room` (
  `id` int(8) NOT NULL,
  `place` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_addreess` varchar(255) NOT NULL,
  `room_ADR` varchar(255) NOT NULL,
  `delete_flg` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `room`
--

INSERT INTO `room` (`id`, `place`, `start_date`, `room_name`, `room_addreess`, `room_ADR`, `delete_flg`) VALUES
(1, '東京/浅草', '2019年10月', 'SEVENGARDEN', '東京都台東区浅草1-34-2', '2万円以上', 0),
(2, '博多/春吉', '2019年11月', 'Mei Penthouse', '福岡県春吉2-16-19', '5万円以上', 0),
(3, '博多/春吉', '2019年11月', 'Mei Suite', '福岡県春吉2-16-19', '3万円以上', 0),
(4, '博多/春吉', '2019年11月', 'Mei Exective', '福岡県春吉2-16-19', '3万円以上', 0),
(5, '博多/春吉', '2019年11月', 'Mei Atrium', '福岡県春吉2-16-19', '3万円以上', 0),
(6, '博多/春吉', '2019年11月', 'Mei Standard Twin', '福岡県春吉2-16-19', '1万8千円以上', 0),
(7, '博多/春吉', '2019年11月', 'Mei Standard Sofa', '福岡県春吉2-16-19', '1万5千円以上', 0),
(8, '博多/春吉', '2019年11月', 'Mei Standard', '福岡県春吉2-16-19', '8千円以上', 0),
(9, '東京/入船', '2018年5月', 'Vintage Superior Suite', '東京都中央区入船2-10-7', '2万円以上', 0),
(10, '東京/入船', '2018年5月', 'Vintage Junior Suite', '東京都中央区入船2-10-7', '2万円以上', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `room_images`
--

CREATE TABLE `room_images` (
  `image_id` int(8) NOT NULL,
  `room_id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cover_flg` int(8) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `room_images`
--

INSERT INTO `room_images` (`image_id`, `room_id`, `name`, `create_date`, `cover_flg`) VALUES
(10, 12, 'room_id_12_DSC01608.jpg', '2019-11-14 05:51:02', 1),
(11, 12, 'room_id_12_DSC_0567.jpg', '2019-11-14 05:51:02', 0),
(12, 12, 'room_id_12__E0A0539.jpg', '2019-11-14 05:51:03', 0),
(13, 12, 'room_id_12__29A6227.jpg', '2019-11-14 05:51:03', 0),
(14, 12, 'room_id_12__29A6207.jpg', '2019-11-14 05:51:03', 0),
(15, 14, 'room_id_14_resize1.jpg', '2019-11-14 05:52:57', 1),
(16, 14, 'room_id_14__29A6227.jpg', '2019-11-14 05:52:57', 0),
(17, 14, 'room_id_14__29A6429.jpg', '2019-11-14 05:52:57', 0),
(18, 14, 'room_id_14_DSC_0600.jpg', '2019-11-14 05:52:57', 0),
(19, 22, 'room_id_22_DSC_0578 (1).jpg', '2019-11-14 09:35:58', 0),
(20, 22, 'room_id_22__29A6220.jpg', '2019-11-14 09:35:58', 1),
(21, 30, 'room_id_30__29A6429.jpg', '2019-11-14 09:43:20', 1),
(22, 37, 'room_id_37_resize1.jpg', '2019-11-14 09:48:11', 1),
(23, 37, 'room_id_37_twin5_resize.jpg', '2019-11-14 09:48:11', 1),
(24, 45, 'room_id_45__29A6184.jpg', '2019-11-14 10:00:56', 1),
(25, 45, 'room_id_45_DSC_0578.jpg', '2019-11-14 10:00:56', 0),
(26, 1, 'room_id_46_DSC_0567.jpg', '2019-11-14 14:17:54', 1),
(27, 1, 'room_id_46_DSC_0578.jpg', '2019-11-14 14:17:54', 0),
(28, 1, 'room_id_46_DSC_0600.jpg', '2019-11-14 14:17:54', 0),
(29, 1, 'room_id_46_DSC_0621.jpg', '2019-11-14 14:17:54', 0),
(30, 1, 'room_id_46_DSC_0647.jpg', '2019-11-14 14:17:54', 0),
(31, 1, 'room_id_46_DSC_0653.jpg', '2019-11-14 14:17:54', 0),
(32, 1, 'room_id_46_DSC_0588.jpg', '2019-11-14 14:17:54', 0),
(33, 1, 'room_id_46_DSC_0632.jpg', '2019-11-14 14:17:54', 0),
(34, 2, 'room_id_47__29A6467.jpg', '2019-11-14 14:27:59', 1),
(35, 2, 'room_id_47_booking_2019_10_29_241.jpg', '2019-11-14 14:27:59', 0),
(36, 2, 'room_id_47_booking_2019_10_29_242.jpg', '2019-11-14 14:27:59', 0),
(37, 2, 'room_id_47_booking_2019_10_29_244.jpg', '2019-11-14 14:27:59', 0),
(38, 2, 'room_id_47_booking_2019_10_29_245.jpg', '2019-11-14 14:27:59', 0),
(39, 2, 'room_id_47__29A6457.jpg', '2019-11-14 14:27:59', 0),
(40, 2, 'room_id_47__29A6477.jpg', '2019-11-14 14:27:59', 0),
(41, 2, 'room_id_47__29A6484.jpg', '2019-11-14 14:27:59', 0),
(42, 3, 'room_id_48_booking_2019_10_29_124.jpg', '2019-11-14 14:32:13', 1),
(43, 3, 'room_id_48_booking_2019_10_29_121.jpg', '2019-11-14 14:32:13', 0),
(44, 3, 'room_id_48_booking_2019_10_29_125.jpg', '2019-11-14 14:32:13', 0),
(45, 3, 'room_id_48__29A6399.jpg', '2019-11-14 14:32:13', 0),
(46, 3, 'room_id_48__29A6402.jpg', '2019-11-14 14:32:13', 0),
(47, 3, 'room_id_48__29A6429.jpg', '2019-11-14 14:32:13', 0),
(48, 4, 'room_id_49__29A6311.jpg', '2019-11-14 15:08:08', 1),
(49, 4, 'room_id_49__29A6325.jpg', '2019-11-14 15:08:08', 0),
(50, 4, 'room_id_49__29A6374.jpg', '2019-11-14 15:08:08', 0),
(51, 4, 'room_id_49__29A6342.jpg', '2019-11-14 15:08:08', 0),
(52, 4, 'room_id_49_booking_2019_10_29_234-1.jpg', '2019-11-14 15:08:08', 0),
(53, 5, 'room_id_50__29A5944.jpg', '2019-11-14 15:12:26', 1),
(54, 5, 'room_id_50__29A5962.jpg', '2019-11-14 15:12:26', 0),
(55, 5, 'room_id_50__29A5990.jpg', '2019-11-14 15:12:26', 0),
(56, 5, 'room_id_50_booking_2019_10_29_39.jpg', '2019-11-14 15:12:26', 0),
(57, 5, 'room_id_50__29A5948.jpg', '2019-11-14 15:12:27', 0),
(58, 6, 'room_id_51__29A6045.jpg', '2019-11-14 15:15:33', 1),
(59, 6, 'room_id_51__29A6039.jpg', '2019-11-14 15:15:33', 0),
(60, 7, 'room_id_53__29A6149.jpg', '2019-11-14 15:18:21', 1),
(61, 7, 'room_id_53__29A6124.jpg', '2019-11-14 15:18:21', 0),
(62, 7, 'room_id_53__29A6139.jpg', '2019-11-14 15:18:21', 0),
(63, 7, 'room_id_53__29A6184.jpg', '2019-11-14 15:18:21', 0),
(64, 7, 'room_id_53__29A6177.jpg', '2019-11-14 15:18:21', 0),
(65, 8, 'room_id_54__29A6220.jpg', '2019-11-14 15:21:27', 1),
(66, 8, 'room_id_54__29A6207.jpg', '2019-11-14 15:21:27', 0),
(67, 8, 'room_id_54__29A6227.jpg', '2019-11-14 15:21:27', 0),
(68, 8, 'room_id_54__29A6250.jpg', '2019-11-14 15:21:27', 0),
(69, 8, 'room_id_54__29A6292.jpg', '2019-11-14 15:21:27', 0),
(76, 9, 'room_id_57_twin5_resize.jpg', '2019-11-14 15:26:32', 1),
(77, 9, 'room_id_57_twin3_resize.jpg', '2019-11-14 15:26:32', 0),
(78, 9, 'room_id_57_twin2_resize.jpg', '2019-11-14 15:26:32', 0),
(79, 9, 'room_id_57_resize1.jpg', '2019-11-14 15:26:32', 0),
(80, 10, 'room_id_58__E0A0284_2.jpg', '2019-11-14 23:31:15', 1),
(81, 10, 'room_id_58__E0A0545.jpg', '2019-11-14 23:31:15', 0),
(82, 10, 'room_id_58__E0A0216.jpg', '2019-11-14 23:31:15', 0),
(83, 10, 'room_id_58__E0A0237.jpg', '2019-11-14 23:31:16', 0),
(84, 10, 'room_id_58__E0A0242.jpg', '2019-11-14 23:31:16', 0),
(85, 10, 'room_id_58__E0A0539.jpg', '2019-11-14 23:31:16', 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- テーブルのインデックス `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`image_id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルのAUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `room_images`
--
ALTER TABLE `room_images`
  MODIFY `image_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
