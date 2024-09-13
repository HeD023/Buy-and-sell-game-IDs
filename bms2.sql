-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 11:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `productID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `memberID` int(11) NOT NULL,
  `details` text NOT NULL,
  `price` int(10) NOT NULL,
  `picitem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`productID`, `gameID`, `memberID`, `details`, `price`, `picitem`) VALUES
(7, 2, 64400008, 'ผ่อนหรือสดคุยได้ทุกตัวงับ✅\r\n ✨มีทั้ง ไอดีไก่ ไอดีหลัก ไอดีกลอเลียส ไอดีสกินเเรร์✨\r\n🔥รับซื้อไอดีราคาร้อนรับฝากขายเรื่อยๆงับ🔥', 450, 'i4.jpg'),
(12, 5, 64400009, 'ไอดีHon #003. มาแล้ว  สนใจทักแชท\r\nไอดีน่าเล่นซื้อไปไม่ผิดหวังเลยครับ.', 599, 'i6.jpg'),
(13, 6, 64400010, 'ไอดีpb #003. มาแล้ว  สนใจทักแชท\r\nไอดีน่าเล่นซื้อไปไม่ผิดหวังเลยครับ.', 830, 'i7.jpg'),
(14, 6, 64400011, 'ไอดีpb #004. มาแล้ว  สนใจทักแชท\r\nไอดีน่าเล่นซื้อไปไม่ผิดหวังเลยครับ.', 99, 'i8.jpg'),
(16, 6, 64400012, 'ไอดีpb #008. มาแล้ว  สนใจทักแชท\r\nไอดีน่าเล่นซื้อไปไม่ผิดหวังเลยครับ.', 399, 'i10.png'),
(18, 7, 64400012, 'ไอดีเเอล. มาแล้ว  สนใจ ทักเเชทมาเลย น่าซื้อมากกก\r\nไอดีน่าเล่นซื้อไปไม่ผิดหวังเลยครับ.', 199, 'i12.jpg'),
(22, 10, 64400009, 'ตัวละครผู้ชาย เเฟชั่นเยอะมาก สนใจทักได้ มีลูก2', 299, 'i16.jpg'),
(23, 11, 64400011, 'นักเเตะ ตัวเเรง บวกครบ พร้อมเล่น ค่าทีมสูงมาก สนใจลองทักมาคุยได้ฮะ', 799, 'i17.jpg'),
(24, 11, 64400012, 'ไอดีที่สอง นักเเตะบวกสูง ค่ารวมเเพงมาก พร้อมเล่นฮะไอดีสะอาด ทีมเเตะตึงๆ ทักมาคุยได้', 599, 'i18.jpg'),
(25, 12, 64400009, 'ไอดีปลดเควส สุดท้ายเเล้ว เอาไปอวดเพื่อนได้เลย \r\nไม่ต้องเล่นเองให้ปวดหัว', 799, 'i19.jpg'),
(26, 12, 64400008, 'ลุยด่านครบหมดเเล้ว เหลือเเค่เควสรองนิดหน่อย\r\nเอาไปดันต่อสบายเลย นำเพื่อนๆ', 480, 'i20.jpg'),
(27, 12, 64400014, 'zzzzz', 5555, 'i33.jpg'),
(28, 10, 64400014, 'aaaa', 4444, 'i34.jpg'),
(29, 10, 64400014, '789', 9999, 'i35.jpg'),
(30, 1, 64400014, 'fgsgsddfafa', 5564, 'i37.jpg'),
(31, 2, 64400014, 'ขายเกม มีชุดปืน ชุดสวยๆมากมาย', 1000, 'i36.jpg'),
(32, 10, 64400015, 'ตัวละครมีลูก2คน ตัวละครมีงานทำ แฟนหล่อ บ้าน2หลัง', 3500, 'i22.jpg'),
(36, 9, 64400014, 'ชัดเจนเพิ่มได้', 2, 'i11.jpg'),
(37, 1, 64400014, 'ฮีโร่ 111 สกิน 461\r\n', 999, 'i38.jpg'),
(38, 1, 64400014, 'ฮีโร่ 89 สกิน 188', 1200, 'i40.jpg'),
(39, 1, 64400014, 'Rov #1446\nฮีโร่ 92 สกิน 2O3', 2999, 'i34.jpg'),
(40, 1, 64400014, 'Rov #1445\nฮีโร่ 111 สกิน 313', 12200, 'i29.jpg'),
(41, 1, 64400014, 'Rov #1442\nฮีโร่ 113 สกิน 256\n', 999, 'i28.jpg'),
(42, 1, 64400014, '', 200, 'i31.jpg'),
(44, 1, 64400014, 'Rov #1435\nฮีโร่ 112 สกิน 315', 1999, 'i26.jpg'),
(45, 1, 64400014, 'Rov #1438\nฮีโร่ 94 สกิน 28O', 1000, 'i27.jpg'),
(46, 1, 64400014, 'Rov #1442\nฮีโร่ 113 สกิน 256', 7999, 'i28.jpg'),
(47, 1, 64400014, 'สนใจขายเเล้วนะ', 191, 'i29.jpg'),
(48, 1, 64400014, 'สนใจขาย', 191, 'i30.jpg'),
(49, 9, 64400014, 'ขายเกม', 500, 'i31.jpg'),
(50, 9, 64400014, 'เห็ดขาย', 1988, 'i32.jpg'),
(51, 7, 64400014, 'ขายนะ', 19119, ''),
(52, 9, 64400020, 'ขายจ้าเลิกเล่น', 600, ''),
(53, 7, 64400014, 'ขายจ้า ซื้อบ่จ้า', 198880, ''),
(54, 1, 64400014, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gameID` int(11) NOT NULL,
  `gameName` varchar(100) NOT NULL,
  `typeID` int(11) NOT NULL,
  `picgame` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameID`, `gameName`, `typeID`, `picgame`) VALUES
(1, 'rov', 1, '01.png'),
(2, 'freefire', 3, '02.jpg'),
(4, 'PubG ', 3, '03.png'),
(5, 'HoN', 1, '04.jpg'),
(6, 'Point Blank', 3, '05.jpg'),
(7, 'Mobile Legends', 1, '06.jpg'),
(8, 'THE KING OF FIGHTERS', 3, '07.jpg'),
(9, 'HOGWARTS LEGACY', 2, '08.jpg'),
(10, 'audition', 6, '09.jpg'),
(11, 'FIFA', 5, '10.jpg'),
(12, 'Puzzle Adventure', 4, '11.jpg'),
(13, '0', 1, '12.jpg'),
(14, 'เกม1', 1, '13.jpg'),
(15, '2', 1, '14.jpg'),
(16, '3', 1, '15.jpg'),
(17, '5', 1, '16.jpg'),
(18, '7', 1, '17.jpg'),
(19, '8', 1, '18.jpg'),
(20, '9', 1, '19.jpg'),
(21, '10', 1, '20.jpg'),
(22, '11', 1, '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newID` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `paragrap` text NOT NULL,
  `picnew` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newID`, `header`, `paragrap`, `picnew`) VALUES
(1, 'เฮลั่น สาวพบทองคำก้อน', 'หมู่1 ตำบลคลองวิหก หญิงสาวพบทองคำก้อน คาดรถขนทองทำหล่นไว้ ระหว่างขับผ่าน เฮลั่นไม่ขอคืน ขอเอาไปซื้อทีวีใหม่', '00001.jpg'),
(2, 'ผงะ พบศพกิ้งกือในท้องรถ', 'ชายวัย36 เล่าว่าขณะตนกำลังถอยรถได้ยินเสียงกรุบ', '00002.jpg'),
(3, 'ปรากฎเเล้ว เมืองลับเเล!ชัยบุรี', 'เมืองที่สาบสูญของสุราษฎร์ธานีได้ปรากฎขึ้นเเล้ว\r\nชาวบ้านเผย อยู่มาตั้งเเต่เกิด ยันไม่เคยได้ยินชื่อ', '00003.jpg'),
(4, 'เกิดเหตุสลด หนุ่มวัย 19ปี ซิ่งดับ', 'หนุ่มวัย19 ซิ่งรถมอเตอร์ไซต์ลอดใต้รถสิบล้อ ผงะ รอดหวุดหวิด ชาวบ้านระเวกนั้น ให้สัมภาษว่าไม่น่าเชื่อว่าจะรอด  เเห่น้ำเเป้งถูป้ายทะเบียนรถขอหวย 3ตัวตรง ', '00004.jpg'),
(5, 'หนุ่มรอดตาย ให้โชคชาวบ้านถูกหวยนับร้อยล้าน', 'จากเหตุการณ์หนุ่ม19 รอดจากรถสิบล้อ ชาวบ้านเเห่เอาเลขป้ายทะเบียนไปเสียงโชคถูกกันระนาว', '00005.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `typegame`
--

CREATE TABLE `typegame` (
  `typeID` int(11) NOT NULL,
  `typeName` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `pictype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typegame`
--

INSERT INTO `typegame` (`typeID`, `typeName`, `detail`, `pictype`) VALUES
(1, 'Moba_db', 'เกมวางเเผนเรียลไทม์', '001.png'),
(2, 'Openworld', 'เกมท่องโลกกว้าง', '002.png'),
(3, 'Action', 'เกมบู๊', '003.jpg'),
(4, 'Puzzle', 'เกมเเก้ไขปริศนา', '004.jpg'),
(5, 'Sport game', 'เกมกีฬา', '005.jpg'),
(6, 'Music game', 'เกมเพลง', '006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lineID` varchar(50) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `username`, `password`, `email`, `lineID`, `urole`, `created_at`, `pic`) VALUES
(64400007, 'ติณณภพ', 'ผู้ข้ามภพ', '0824157896', 'minememy', '45678', 'minememy@gmail.com', 'minememy2544', '', '2023-03-25 19:45:55', NULL),
(64400008, 'นิพพิชฌน์', 'ปัญญา', '0824567895', 'bonglord', '45672', 'bonglord@gmail.com', 'bong1455', '', '2023-03-25 19:45:55', NULL),
(64400009, 'ผรัณชัย', 'ชัยชนะ', '0827894562', 'Duppa', '78894', 'Duppa@gmail.com', 'Duppazaza52', '', '2023-03-25 19:45:55', NULL),
(64400010, 'พิทยุตม์', 'สูงสุด', '0851232586', 'kaimairu', '1235', 'kaimairu@gmail.com', 'kaimairu7894', '', '2023-03-25 19:45:55', NULL),
(64400011, 'ศาตนันท์', 'เพลิดเพลิน', '0978546213', 'G13D11', '75368', 'G13D11@gmail.com', 'G13D11', '', '2023-03-25 19:45:55', NULL),
(64400012, 'กนกอร', 'ผู้หญิงที่ดี', '0987894561', 'wannarach', '96354', 'wannarach@gmail.com', 'wanna2001', '', '2023-03-25 19:45:55', NULL),
(64400013, 'จิราวรรณ', 'เพชรมณี', '0977909434', '์Ny', '$2y$10$3izMMVGzpqr7zy3uu5nZc.IrZ4E..iytbKSuUHNED2/GW7imjcXGe', 'Ny44782@gmail.com', 'Ny4478', 'user', '2023-03-25 19:54:09', NULL),
(64400014, 'พิมพ์ลภัส', 'เป็งทร', '0987864540', 'heddy', '$2y$10$VUe8kwSwc6mCKqPIT7.wguOmeumv1oxPpdHRBVMAcJwbbO07qXeAC', 'pimlaphat6@gmail.com', 'hed456', 'user', '2023-03-25 20:07:57', NULL),
(64400015, 'พรสิริ', 'อำนาจเจริญ', '0986751234', 'พรรี่', '$2y$10$tG2AIkJdTDdUwmqx.lpRUehNLMsGlKcjd1DWJpwdEFvIT6t5dX6K.', 'pimlaphat7@gmail.com', 'นงเยา', 'user', '2023-03-26 22:04:56', NULL),
(64400016, 'ณราลัด', 'สิระพร', '0963456789', 'แนซี่', '$2y$10$hlNL5s2dBZ4waMP9yu7AZeY5setwmtSutxXCEW/8XM/CjIGEtnJha', 'pimlaphat8@gmail.com', '0987653321', 'admin', '2023-03-26 22:14:06', NULL),
(64400017, 'admin', 'admin', '0444444444', 'admin', '$2y$10$eN88srOwm.hls5LGQANCYOk8AqM4KmbgN98k92a.OWqxRKFSyZEsi', 'admin1@gmail.com', 'admin', 'admin', '2023-03-27 05:06:14', NULL),
(64400018, 'สมชาย', 'เกตุกวง', '0980240580', 'simsam', '$2y$10$KzDuiJdrNYixdPGNFk/jTOoydz3rvULIBTODVdRZIlo8DxvN.xKOO', 'athicha222@gmail.com', 'saaammm', 'user', '2023-03-27 06:22:49', NULL),
(64400019, 'อุรัยพร', 'วิลาลัย', '0980247896', 'vila', '$2y$10$cKDJlVNAqLs2G642TZFb.OI1rKr6tMHZbDvOLxe.fhlWWZu4Hu9y.', 'sdgasg@gmail.com', 'vilaa2566', 'user', '2023-03-27 07:24:57', NULL),
(64400020, 'ภัทราพร', 'xxxxxx', '0444444444', 'suzuku26', '$2y$10$SXZR93nEGzRSIkJM6OUcW.bkIZw4GrlAqLCDntxiQK5PPDSdpBWxG', 'suzuku26@gmail.com', 'suzuku26', 'user', '2023-03-27 07:29:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `ลบได้เลยหายหมด` (`gameID`),
  ADD KEY `ลบได้เหมือนกันหายหมด` (`memberID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameID`),
  ADD KEY `ลบบ่อได้มันห้ามทำอะไร` (`typeID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newID`);

--
-- Indexes for table `typegame`
--
ALTER TABLE `typegame`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `typegame`
--
ALTER TABLE `typegame`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64400021;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `ลบได้เลยหายหมด` FOREIGN KEY (`gameID`) REFERENCES `game` (`gameID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ลบได้เหมือนกันหายหมด` FOREIGN KEY (`memberID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `ลบบ่อได้มันห้ามทำอะไร` FOREIGN KEY (`typeID`) REFERENCES `typegame` (`typeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
