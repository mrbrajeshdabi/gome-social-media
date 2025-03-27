-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2025 at 05:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_unique_id` int(11) DEFAULT NULL,
  `post_pic` varchar(100) DEFAULT NULL,
  `post_status` text DEFAULT NULL,
  `post_like` int(11) DEFAULT 0,
  `post_unlike` int(11) DEFAULT 0,
  `post_song` text DEFAULT NULL,
  `post_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requestfrd`
--

CREATE TABLE `requestfrd` (
  `id` int(255) NOT NULL,
  `sendrequestid` int(255) DEFAULT NULL,
  `receiverequestid` int(255) DEFAULT NULL,
  `requestmsg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `songname` varchar(50) DEFAULT NULL,
  `songurl` varchar(200) DEFAULT NULL,
  `apikey` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `songname`, `songurl`, `apikey`) VALUES
(1, 'Rolex', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/rolex-bgm-57457-57488.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(2, 'Yeda Young Bgm', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/yeda-yung-instrumental-66059.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(3, 'Ham Jese Ji Rhe', 'https://www.ringtonesfx.com/wp-content/uploads/2/Hum-Jaise-Jee-Rahe-Hai-Koi-Jee-Ke-To-Bataye-Female-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(4, 'Mera Wala Sardar', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/download-ringtone-10766-45353.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(5, 'Ham Tere Bin', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/tum-hi-ho-instru-1319-66052.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(6, 'Tumhe Yuhi Chahengye', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/new-romantic-ringtone-2024-new-ringtonehindi-ringtone-love-story-ringtone-b-65903.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(7, 'Sanam Teri Kasam', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/sanam-teri-kasam-ringtone-instrumental-download-mp3-mobcup-com-co-65910.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(8, 'Ayega Ayega', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/downloadfile-0-65913.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(9, 'Me Chillam Ke Sutte', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/main-door-mohabbat-ishq-ta-su-chilam-ke-sutte-raj-mawar-haryanvi-65934.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(10, 'Har Har Mahadev', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/aud-20231222-wa0000-62879-1-62986-3-65951.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(11, 'Har Din Tujhe Chahunga', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/haidilyemeraarijitgsinghwwwwapbosscomringtone-11264-65955.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(12, 'Vande Matram', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/vande-mataram-a-r-rahman-ringtone-download-mobcup-com-co-65965.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(13, 'Tu Ishq He To Me Baaho Me Hu', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/tu-hain-toh-main-hoon-65718-3-65998.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(14, 'Ham Katha Sunate', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/hum-katha-sunate-56711-66016.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(15, 'Kaithi Special', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/kaithi-bgm-62067.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(16, 'Vikram Vedha', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/vikramvedharingtone-36267.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(17, 'Me Jha Rahu', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/03mainjahanrahoonwwwdownloadmingcomringtone-22564.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(18, 'Meri Wali Sardani', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/mera-wali-sardarni-ringtone-jag-new-punjabi-latest-mp3-128k-45949.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(19, 'Me Tom And Jerry', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/tom-and-jerry-satbir-aujla-46766.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(20, 'Tune To Pal Bhar Me', 'https://www.ringtonesfx.com/wp-content/uploads/9/Tune-Bhi-Pal-Bhar-Mein-Chori-Kiya-Re-Jiya-More-Piya-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(21, 'O re Priya', 'https://www.ringtonesfx.com/wp-content/uploads/11/O-Re-Piya-Hindi-Song-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(22, 'Le Chal Mujhe Kahi Dur', 'https://www.ringtonesfx.com/wp-content/uploads/12/Piya-O-Re-Piya-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(23, 'Najre Bole Duniya Tole', 'https://www.ringtonesfx.com/wp-content/uploads/6/Nazre-Bole-Duniya-Tole-Dil-Ki-Zubaan-O-Re-Piya-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(24, 'O Love Rey', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/love-you-oye-49307.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(25, 'Chal Balliya Hoto', 'https://ringtonesnew.com/wp-content/uploads/2022/03/Chaand-Baaliyan-Hindi-Aditya.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(26, 'Me Dhoodne Ko Jamane', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/maindhoondnekozamaanemeindjmazainforingtone-2504.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(27, 'Mene Payal He Chankai', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/aud-20180201-wa0054-47349.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(28, 'Esa Dekha Nhi Khoobsurat Koi', 'https://www.ringtonesfx.com/wp-content/uploads/11/Aisa-Dekha-Nahi-Khubsurat-Koi-Hindi-Love-Song-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(29, 'New World', 'https://pagalworldringtones.click/ringtonedownload/best-world-ringtone-instrumental-ringtone-new-ringtone-english-instrumental-ringtone1140048139.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(30, 'Spider Man', 'https://pagalworldringtones.click/ringtonedownloadchv1/spider-man-no-way-home-bgm-l-bgm-club69863230.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(31, 'Iron Man', 'https://pagalworldringtones.click/ringtonedownloadv4/amplifier-ft-iron-man-iron-man-whatsapp-status-hd-tony-stark-shorts-avengers-ironman2083297823.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(32, 'Captain Jack Sparrow', 'https://pagalworldringtones.click/ringtonedownloadv2/gasolina-ft-two-legends-edit-ironman-edit-caption-jack-sparrow-edit-gasolina-song-status1805609857.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(33, 'Sidhu Moosewala', 'https://pagalworldringtones.click/ringtonedownloadv2/410-song-ringtone-410-song-ringtone-sidhu-moose-wala-410-ringtone343847219.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(35, 'Masumiyat Lut Si Gayi', 'https://www.ringtonesfx.com/wp-content/uploads/2/Masumiyat-Lut-Ji-Gayi-Hasa-Udju-Chehre-Ton-Ringtone.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(37, 'Surili Ankhiyo Wali', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/surili-akhiyon-wale-instrumental-bgm-romantic-veer-59244.mp3', 'efe2ccee3a5a7c6f949385cefc143160'),
(38, 'Kuch Soch Ke ', 'https://dl.prokerala.com/downloads/ringtones/files/mp3/tera-ghata-ringtone-download-free-1-46156.mp3', 'efe2ccee3a5a7c6f949385cefc143160');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `unique_id` int(100) DEFAULT NULL,
  `profilepic` text DEFAULT 'NULL',
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT '0',
  `bio` text DEFAULT NULL,
  `registerdate` varchar(255) DEFAULT NULL,
  `updatedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `requestfrd`
--
ALTER TABLE `requestfrd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `requestfrd`
--
ALTER TABLE `requestfrd`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
