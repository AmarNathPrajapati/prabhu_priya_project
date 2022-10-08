-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 07:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prabhu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `created_on` int(11) DEFAULT NULL,
  `deleted_on` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`, `url`, `created_on`, `deleted_on`) VALUES
(1, 'Agarbatti', 'assets/images/i1.jpg', 'agarbatti.php', NULL, NULL),
(2, 'Dhoop', 'assets/images/d1.jpg', 'dhoop.php', NULL, NULL),
(3, 'Cones', 'assets/images/c1.jpg', 'cones.php', NULL, NULL),
(4, 'Chandan tilak', 'assets/images/DMvLyoFLxd.jpg', 'chandan-tilak.php', NULL, NULL),
(5, 'Chandan Teeka', 'assets/images/DMvLyoFLxd.jpg', 'Chandan-teeka.php', NULL, NULL),
(6, 'Pooja Batti', 'assets/images/l.jpg', 'pooja-batti.php', NULL, NULL),
(7, 'Hawan Samagri', 'assets/images/h1.jpg', 'hawan-samigri.php', NULL, NULL),
(8, 'Itra', 'assets/images/a1.jpg', 'itra.php', NULL, NULL),
(9, 'Jal', 'assets/images/j.png', 'jal.php', NULL, NULL),
(10, 'Pooja Samigri', 'assets/images/p1.jpg', 'pooja-samigri.php', NULL, NULL),
(11, 'Yantra /Kawach', 'assets/images/y.jpg', 'yantra-kawach.php', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `alt` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `h1` varchar(255) NOT NULL,
  `edited_at` int(15) DEFAULT NULL,
  `deleted_at` int(15) DEFAULT NULL,
  `cat` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `image2`, `alt`, `title`, `h1`, `edited_at`, `deleted_at`, `cat`) VALUES
(38, 'images/img5f589b95184c8.jpg', '', 'gulab jal ', 'Gulab Jal', 'Gulab Jal', NULL, NULL, 9),
(41, 'images/img5f58cabecc157.jpg', '', 'prabhu priya , hawan ,samagri', 'Hawan Samagri', 'Hawan Samagri', NULL, NULL, 7),
(45, 'images/img5f58e6475e77b.jpg', '', 'prabhu priya , dhoop ,amber', 'Amber Dhoop', 'Amber Dhoop', NULL, NULL, 2),
(50, 'images/img5f58eea339109.jpg', '', 'prabhu priya , kewada jal', 'kewada jal', 'Kewada Jal', NULL, NULL, 9),
(51, 'images/img5f58eec879664.jpg', '', 'prabhu priya , powder ,  mehandi', 'Mehandi Powder', 'Mehandi Powder', NULL, NULL, 10),
(52, 'images/img5f58eef2dfc74.jpg', '', 'prabhu priya , Batti', 'Pooja Batties', 'Pooja Batties', NULL, NULL, 6),
(53, 'images/img5f58ef0be031f.jpg', '', 'prabhu priya , supari', 'Supari', 'Supari', NULL, NULL, 10),
(54, 'assets/images/prabhu-priya-moli-kalawa-500x500.jpg', '', 'prabhu priya ,Kalawa', 'Kalawa', 'Kalawa', 1600432965, NULL, 10),
(57, 'images/img5f64a692c84ea.jpg', '', 'prabhu priya , ganga jal', 'ganga jal', 'ganga jal', NULL, NULL, 9),
(58, 'images/img5f64a7085dafb.jpg', '', 'prabhu priya ,Yellow flower agarbatti cone', 'Yellow flower agarbatti cone', 'Yellow flower cone', NULL, NULL, 3),
(59, 'images/img5f64a734d1868.jpg', '', 'prabhu priya ,White flower agarbatti cone', 'White flower agarbatti cone', 'White flower cone', NULL, NULL, 3),
(60, 'images/img5f64a756edc56.jpg', '', 'prabhu priya , Sandal Dhoop Cones', 'Sandal Dhoop Cones', 'Sandal Dhoop Cones', NULL, NULL, 3),
(62, 'images/img5f64a7d4a6bb4.jpg', '', 'prabhu priya , hawan ,samagri', 'Hawan Samagri', 'Hawan Samidha', 1600432151, NULL, 7),
(63, 'images/img5f64a844beda3.jpg', '', 'prabhu priya , Itra', 'Itra', 'Rose Itra', NULL, NULL, 8),
(64, 'images/img5f64a89589019.jpg', '', 'prabhu priya , dhoop ,gugal', 'dhoop', 'Gugal Dhoop', NULL, NULL, 2),
(66, 'images/img5f64aa3f90439.jpg', '', 'prabhu priya ,jal', 'TULSI JAL', 'Tulsi Jal', NULL, NULL, 9),
(67, 'images/img5f64ae70cac63.jpg', '', 'pooja', 'pooja samagri', 'Pooja Samagri', NULL, NULL, 10),
(68, 'images/img5f64ae8c8c92e.jpg', '', 'hawan samagri', 'Hawan Samagri', 'Hawan Samidha', NULL, NULL, 7),
(69, 'images/img5f64aecf4306e.jpg', '', 'Camphor', 'Camphor', 'Camphor', NULL, NULL, 10),
(70, 'images/img5f65dfd3deeed.jpg', '', 'prabhu priya , 4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set (50gms)', NULL, NULL, 1),
(71, 'images/img5f65e012b8aac.jpg', '', 'prabhu priya , 4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', 'Alaknanda Incense Sticks (25gms)', NULL, NULL, 1),
(72, 'images/img5f65e03ff2019.jpg', '', 'prabhu priya ,Astha Incense Sticks', 'Astha Incense Sticks', 'Astha Incense Sticks (25gms)', NULL, NULL, 1),
(73, 'images/img5f65e061d5d9e.jpg', '', 'prabhu priya , Bharat Dekho Incense Sticks', 'Bharat Dekho Incense Sticks', 'Bharat Dekho Incense Sticks (25gms)', NULL, NULL, 1),
(74, 'images/img5f65e08072e7b.jpg', '', 'prabhu priya , 4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', NULL, NULL, 1),
(75, 'images/img5f65e0b42ac9b.jpg', '', 'Chandan, Agarbatti, Stick, prabhu priya', 'Chandan Agarbatti Stick', 'Chandan Agarbatti Stick (100gm)', NULL, NULL, 1),
(76, 'images/img5f65e10ac56f8.jpg', '', 'prabhu priya ,Incense Sticks', 'Dhyan yog Agarbatti Stick', 'Dhyan Yog Incense Sticks (25gm)', NULL, NULL, 1),
(77, 'images/img5f65e13b26eab.jpg', '', 'prabhu priya , rose , sticks', 'Rose Inscense Sticks', 'Rose Inscense Sticks (100gm)', NULL, NULL, 1),
(78, 'images/img5f65e2e263fc9.jpg', '', 'Sai Dhoop , prabhu priya', 'Sai Dhoop', 'Sai Dhoop', NULL, NULL, 2),
(79, 'images/img5f65e30bb86fe.jpg', '', 'Rose Dhoop, prbhu priya', 'Rose Dhoop', 'Rose Dhoop', NULL, NULL, 2),
(80, 'images/img5f65e3543a9ab.jpg', '', 'prabhu priya , Chandan Dhoop', 'Chandan Dhoop', 'Chandan Dhoop', NULL, NULL, 2),
(81, 'images/img5f65f26311427.jpg', '', 'prabhu priya , Amber Cones', 'Amber Cones', 'Amber Cones', NULL, NULL, 3),
(82, 'images/img5f65f28b72e0d.jpg', '', 'Chandan , Cones, prabhu priya', 'Chandan  Cones', 'Chandan  Cones', NULL, NULL, 3),
(83, 'images/img5f65f2a29b298.jpg', '', 'prabhu priya , Rose Cones', 'Rose Cones', 'Rose Cones', NULL, NULL, 3),
(84, 'images/img5f65f2c52b92d.jpg', '', 'prabhu priya , Scented Cone', 'Scented Cone', 'Scented Cone', NULL, NULL, 3),
(85, 'images/img5f65f2f002997.jpg', '', 'prabhu priya , Dhyan Yog Cones', 'Dhyan Yog Cones', 'Dhyan Yog Cones', NULL, NULL, 3),
(86, 'images/img5f6613310da97.jpeg', '', 'prabhu priya , kawach', ' Kawach', 'Yantra', NULL, NULL, 11),
(87, 'images/img5f66134fed0d7.jpeg', '', 'prabhu priya , kawach', ' Kawach', 'Yantra', NULL, NULL, 11),
(88, 'images/img5f66138084109.jpeg', '', 'prabhu priya , kawach', ' Kawach', ' Kawach', NULL, NULL, 11),
(89, 'images/img5f6613adb39e8.jpeg', '', 'prabhu priya , kawach , Nazar Zantar', 'Nazar Zantar', 'Nazar Zantar', NULL, NULL, 11),
(90, 'images/img5f6613db80823.jpeg', '', 'prabhu priya , kawach,Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', NULL, NULL, 11),
(91, 'images/img5f6614ce712b9.jpeg', '', 'prabhu priya , kawach,yantra', 'yantra', 'yantra', NULL, NULL, 11),
(92, 'images/img5f661cce8973b.jpg', '', 'prabhu priya , Gopi Chandan Powder', 'Gopi Chandan Powder', 'Gopi Chandan Powder', NULL, NULL, 5),
(93, 'images/img5f661ceccea8d.jpg', '', 'prabhu priya , Gopi Chandan Tilak', 'Gopi Chandan Tilak', 'Gopi Chandan Tilak', NULL, NULL, 5),
(94, 'images/img5f661db8e85f4.jpg', '', 'prabhu priya ,Herbal Face Powder', 'Herbal Face Powder', 'Herbal Face Powder', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `expired_on` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `expired_on`) VALUES
(1, 'Mkp1RkxvcFJBSWpvUFAyc3k3QUNRUT09', '5e34ebeb968d6bfcb3d8ecf14774d5de', NULL),
(3, 'd1FXem8za091ZFBtb0k5a3JObjdvZz09', '11711a41abbaac27b75d5d4584d7e79d', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
