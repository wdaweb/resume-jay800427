-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-12 16:13:11
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `creater`
--

CREATE TABLE `creater` (
  `id` int(168) UNSIGNED NOT NULL COMMENT '序列',
  `text` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '創作者資訊'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `creater`
--

INSERT INTO `creater` (`id`, `text`) VALUES
(1, '2019年12月13日製');

-- --------------------------------------------------------

--
-- 資料表結構 `logo`
--

CREATE TABLE `logo` (
  `id` int(15) UNSIGNED NOT NULL COMMENT '序列',
  `file` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '大頭貼',
  `text` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '替代文字',
  `sh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logo`
--

INSERT INTO `logo` (`id`, `file`, `text`, `sh`) VALUES
(3, 'me.jpg', '本人啦', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(20) UNSIGNED NOT NULL COMMENT '序列',
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `birthday` date NOT NULL COMMENT '出生年月日',
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '戶籍地',
  `addr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '地址',
  `school` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '學歷',
  `exp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '經歷',
  `skill` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能',
  `eng_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文名子',
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '信箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `birthday`, `city`, `addr`, `school`, `exp`, `skill`, `eng_name`, `email`) VALUES
(1, '戴文軍', '1991-04-27', '新北市', '新北市新莊區雙鳳路108巷13號1樓', '明新科技大學電子工程系', '電子系背景畢業，出社會對本科毫無興趣，於是轉戰服務業，如今工作快四年，想轉換跑道，因對軟體資訊業有點興趣，而決定跨足該領域，然而自學實在有瓶頸，在2019年報名網頁職訓打算從零開始~目前正在積極努力中~', '電腦維修與組裝/硬體疑難雜症排除/PHP應用實務', 'DAI-WUN-JYUN', 'jay8000427@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(20) UNSIGNED NOT NULL COMMENT '序列',
  `file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能',
  `text` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能名稱',
  `sh` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '顯示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `file`, `text`, `sh`) VALUES
(1, 'B_CSA.png', '電腦軟體應用乙級', '1'),
(3, 'JavaScript.png', 'JavaScript基礎應用', '1'),
(4, 'jquery.png', '基礎jquery應用', '1'),
(5, 'PHP.jpg', 'PHP和Html基本應用', '1'),
(6, 'photoshop.jpg', 'Photoshop設計', '1'),
(7, 'illustrator.png', 'illustrator基礎實務', '1'),
(8, 'Dreamviwer.png', 'Dreamviwer應用設計', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `tex`
--

CREATE TABLE `tex` (
  `id` int(15) UNSIGNED NOT NULL COMMENT '序列',
  `tex` varchar(1600) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '自傳'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `tex`
--

INSERT INTO `tex` (`id`, `tex`) VALUES
(1, '你好，我叫戴文軍，今年27歲，個性木訥寡言，且小心謹慎，在高職期間接任不少幹部職位，完成了不少活動，並深受老師和同學們的信賴。\r\n\r\n        我畢業於私立明新科技大學，就讀的是本校的電子工程系，小時候對於拆組裝玩具特別有愛，並對電腦有濃厚的興趣，所以高職也就理所當然的進入了電子科，求學期間，按著老師的指導考取了不少證照:\r\n1.電腦硬體裝修丙級\r\n2.工業電子丙級\r\n3.電腦硬體裝修乙級\r\n4.單晶片產學合作30個小時\r\n5.和TQCwindows各大證照。\r\n\r\n工作經歷:\r\n出社會的第一份工作是經由人力派遣介紹，內容主要是手機外殼的加工，大概持續做了3到4個月，因為一個產線結束，我和公司那邊的約期也就到此結束了。\r\n\r\n第二份工作是做汽車材料行，起初只是個外務員，除了認識材料和客人外，也對本來不熟悉的街道，有個初步的認識，大概持續做了一年多，升職成倉儲員，我的重心開始不再是單純的送貨，並著重於認識廠商和客戶溝通，像是產品數量上的控管和品質，都可以使公司能獲得更多的利潤或減少開銷的成本。\r\n此外產品的新增和改版透過廠商提供給我們的資訊，可以讓我們和其他家公司的產品有個優劣上的比較，進而讓公司有個新的考量點也能和業務做雙向溝通來尋求更好的銷售方法。\r\n自著手於倉庫的各種事物開始，差不多也有了兩年左右，從最初的不熟悉到逐漸步上軌道，讓我從中獲得了不少的信心加持，也讓我對管理人事物有個更好的學習經驗。\r\n\r\n工作態度與期許:\r\n　　在材料行的工作期間，我學習到各種有效統整資訊的方法，並完成主管交辦的任何事項。亦體會到各種微小的事物都是打下穩定基礎不可或缺的要素，少了其中一點就會導致後面的工作事倍功半，也因此養成了小心謹慎的工作心態。   \r\n　　在未來的工作中，我將秉持對工作的熱誠、責任感和對新事物的學習心繼續往前邁進,也希望藉由不同的工作經歷能讓自己有了不同的突破');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(15) UNSIGNED NOT NULL COMMENT '序列',
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pw`) VALUES
(1, 'root', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(168) UNSIGNED NOT NULL COMMENT '序列',
  `file` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作品',
  `text` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作品名稱',
  `sh` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '顯示',
  `href` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `file`, `text`, `sh`, `href`) VALUES
(1, 'zombie.jpg', '打殭屍', '1', 'zombie'),
(5, 'calendar.jpg', '萬年曆', '1', 'calendar'),
(6, 'ticket.png', '發票', '1', 'ticket'),
(7, 'view.png', '風景旅遊簡報', '1', 'postcard'),
(8, 'clock.png', '時鐘', '1', 'clock'),
(9, 'joker.png', '發牌遊戲', '1', 'joker');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `creater`
--
ALTER TABLE `creater`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tex`
--
ALTER TABLE `tex`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `creater`
--
ALTER TABLE `creater`
  MODIFY `id` int(168) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tex`
--
ALTER TABLE `tex`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(168) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序列', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
