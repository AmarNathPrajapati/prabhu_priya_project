-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 06:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prabhu_priya`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `image` varchar(1024) NOT NULL DEFAULT 'assets/images/p1.jpg',
  `url` varchar(1024) NOT NULL DEFAULT '#',
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
(4, 'Chandan', 'assets/images/DMvLyoFLxd.jpg', 'chandan.php', NULL, NULL),
(5, 'Chandan-Teeka', 'assets/images/DMvLyoFLxd.jpg', 'chandan-teeka.php', NULL, 1601981137),
(6, 'Pooja Batti', 'assets/images/l.jpg', 'pooja-batti.php', NULL, NULL),
(7, 'Hawan Samagri', 'assets/images/h1.jpg', 'hawan-samigri.php', NULL, NULL),
(8, 'Itra', 'assets/images/a1.jpg', 'itra.php', NULL, NULL),
(9, 'Jal', 'assets/images/j.jpg', 'jal.php', NULL, NULL),
(10, 'Pooja Samigri', 'assets/images/p1.jpg', 'pooja-samigri.php', NULL, NULL),
(11, 'Yantra /Kawach', 'assets/images/y.jpg', 'yantra-kawach.php', NULL, NULL),
(12, 'Combos', 'assets/images/no.jpg', 'combos.php', NULL, NULL),
(21, 'Ghee Jyot Batti', 'assets/images/p1.jpg', 'ghee-jyot-batti.php', 1635932828, NULL),
(20, 'Natural Sambrani Cup', 'assets/images/p1.jpg', 'natural-sambrani- cup.php', 1635932828, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(512) NOT NULL DEFAULT 'assets/images/p1.jpg	',
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
(38, 'images/img5f589b95184c8.jpg', '', 'gulab jal ', 'Gulab Jal', 'Gulab Jal', NULL, 1601465511, 9),
(41, 'images/img5f58cabecc157.jpg', '', 'prabhu priya , hawan ,samagri', 'Hawan Samagri', 'Hawan Samagri(100gm)', 1602499636, NULL, 7),
(45, 'images/img5f58e6475e77b.jpg', '', 'prabhu priya , Cones ,amber', 'Amber Cones', 'Amber Cones', 1601971777, 1605855125, 3),
(50, 'images/img5f58eea339109.jpg', '', 'prabhu priya , kewada jal', 'kewada jal', 'Kewada Jal', NULL, 1601465511, 9),
(51, 'images/img5f58eec879664.jpg', '', 'prabhu priya , powder ,  mehandi', 'Mehandi Powder', 'Mehandi Powder', NULL, NULL, 10),
(52, 'images/img5f58eef2dfc74.jpg', '', 'prabhu priya , Batti', 'Pooja Batties', 'Pooja Batties', NULL, NULL, 6),
(53, 'images/img5f58ef0be031f.jpg', '', 'prabhu priya , supari', 'Supari', 'Supari', NULL, NULL, 10),
(57, 'images/img5f64a692c84ea.jpg', '', 'prabhu priya , ganga jal', 'ganga jal', 'ganga jal', NULL, 1601465511, 9),
(58, 'images/img5f64a7085dafb.jpg', '', 'prabhu priya ,Yellow flower agarbatti cone', 'Yellow flower agarbatti cone', 'Yellow flower cone', NULL, NULL, 3),
(59, 'images/img5f64a734d1868.jpg', '', 'prabhu priya ,White flower agarbatti cone', 'White flower agarbatti cone', 'White flower cone', NULL, NULL, 3),
(60, 'images/img5f64a756edc56.jpg', '', 'prabhu priya , Sandal Dhoop Cones', 'Sandal Dhoop Cones', 'Sandal Dhoop Cones', NULL, 1602050870, 3),
(62, 'images/img5f64a7d4a6bb4.jpg', '', 'prabhu priya , hawan ,samagri', 'Hawan Samagri', 'Hawan Samidha(500gm)', 1605256627, NULL, 7),
(63, 'images/img5f64a844beda3.jpg', '', 'prabhu priya , Itra', 'Itra', 'Rose Itra', 1606994515, NULL, 8),
(64, 'images/img5f64a89589019.jpg', '', 'prabhu priya , dhoop ,gugal', 'dhoop', 'Gugal Dhoop', NULL, NULL, 2),
(66, 'images/img5f64aa3f90439.jpg', '', 'prabhu priya ,jal', 'TULSI JAL', 'Tulsi Jal(100ml)', 1601972392, NULL, 9),
(67, 'images/img5f64ae70cac63.jpg', '', 'pooja', 'pooja samagri', 'Roli(25gm)', 1605256951, NULL, 10),
(68, 'images/img5f64ae8c8c92e.jpg', '', 'hawan samidha', 'Hawan Samidha', 'Hawan Samidha(1kg)', 1605855303, NULL, 7),
(69, 'images/img5f64aecf4306e.jpg', '', 'Camphor', 'Camphor', 'Camphor(50gm)', 1605262807, NULL, 10),
(70, 'images/img5f65dfd3deeed.jpg', '', 'prabhu priya , 4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set (50gms)', NULL, 1601373043, 1),
(71, 'images/img5f65e012b8aac.jpg', '', 'prabhu priya , incense sticks', '4 in 1 Agarbatti Set', 'Alaknanda Incense Sticks (25gms)', 1601373885, NULL, 1),
(72, 'images/img5f65e03ff2019.jpg', '', 'prabhu priya , incense sticks', 'Astha Incense Sticks', 'Astha Incense Sticks (25gms)', 1601373859, NULL, 1),
(73, 'images/img5f65e061d5d9e.jpg', '', 'prabhu priya , incense sticks', 'Bharat Dekho Incense Sticks', 'Bharat Dekho Incense Sticks (25gms)', 1601373843, NULL, 1),
(74, 'images/img5f65e08072e7b.jpg', '', 'prabhu priya , incense sticks', '4 in 1 Agarbatti Set', '4 in 1 Agarbatti Set', 1601373828, NULL, 1),
(75, 'images/img5f65e0b42ac9b.jpg', '', 'prabhu priya , incense sticks', 'Chandan Agarbatti Stick', 'Chandan Agarbatti Stick (100gm)', 1601373812, NULL, 1),
(76, 'images/img5f65e10ac56f8.jpg', '', 'prabhu priya ,Incense Sticks', 'Dhyan yog Agarbatti Stick', 'Dhyan Yog Incense Sticks (25gm)', NULL, NULL, 1),
(77, 'images/img5f7196c789d4e.jpg', '', 'prabhu priya , incense sticks', 'Rose Inscense Sticks', 'Rose Inscense Sticks (25gm)', 1601373785, NULL, 1),
(78, 'images/img5f65e2e263fc9.jpg', '', 'Sai Dhoop , prabhu priya', 'Sai Dhoop', 'Sai Dhoop', NULL, NULL, 2),
(79, 'images/img5f65e30bb86fe.jpg', '', 'Rose Dhoop, prbhu priya', 'Rose Dhoop', 'Rose Dhoop', NULL, NULL, 2),
(80, 'images/img5f7196665787b.jpg', '', 'prabhu priya , Chandan Dhoop', 'Chandan Dhoop', 'Chandan Dhoop', 1601279590, NULL, 2),
(81, 'images/img5f65f26311427.jpg', '', 'prabhu priya , Amber Cones', 'Amber Cones', 'Amber Cones', NULL, NULL, 3),
(82, 'images/img5f65f28b72e0d.jpg', '', 'Chandan , Cones, prabhu priya', 'Chandan  Cones', 'Chandan  Cones', NULL, NULL, 3),
(83, 'images/img5f65f2a29b298.jpg', '', 'prabhu priya , Rose Cones', 'Rose Cones', 'Rose Cones', NULL, NULL, 3),
(84, 'images/img5f65f2c52b92d.jpg', '', 'prabhu priya , Oudh Cone', 'Oudh Cones', 'Oudh Cone', 1601279466, NULL, 3),
(85, 'images/img5f65f2f002997.jpg', '', 'prabhu priya , Dhyan Yog Cones', 'Dhyan Yog Cones', 'Dhyan Yog Cones', NULL, NULL, 3),
(86, 'images/img5f6613310da97.jpeg', '', 'prabhu priya , kawach', ' Kawach', 'Yantra', NULL, NULL, 11),
(87, 'images/img5f66134fed0d7.jpeg', '', 'prabhu priya , kawach', ' Kawach', 'Yantra', NULL, NULL, 11),
(88, 'images/img5f66138084109.jpeg', '', 'prabhu priya , kawach', ' Kawach', ' Kawach', NULL, NULL, 11),
(89, 'images/img5f6613adb39e8.jpeg', '', 'prabhu priya , kawach , Nazar Zantar', 'Nazar Jantar', 'Nazar Zantar', 1605257008, NULL, 11),
(90, 'images/img5f6613db80823.jpeg', '', 'prabhu priya , kawach,Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', NULL, NULL, 11),
(91, 'images/img5f6614ce712b9.jpeg', '', 'prabhu priya , kawach,yantra', 'Shiv Rudraksha & Hanuman kawach', 'yantra', 1605257029, NULL, 11),
(92, 'images/img5f661cce8973b.jpg', '', 'prabhu priya , Gopi Chandan Powder', 'Gopi Chandan Powder', 'Gopi Chandan Powder', NULL, NULL, 4),
(93, 'images/img5f661ceccea8d.jpg', '', 'prabhu priya , Gopi Chandan Tilak', 'Gopi Chandan Tilak', 'Gopi Chandan Tilak', NULL, NULL, 4),
(94, 'images/img5f661db8e85f4.jpg', '', 'prabhu priya ,Herbal Face Pack', 'Herbal Face Pack', 'Herbal Face Powder', 1605854800, NULL, 10),
(95, 'images/img5f799522ba202.jpg', '', 'prabhu priya , incense sticks', 'Sandal Wood Incense Sticks', 'Sandal Wood Incense Sticks (25gm)', 1601803726, NULL, 1),
(96, 'images/img5f719abe55545.jpg', '', 'prabhu priya , incense sticks', 'kewda incense Sticks', 'kewda Incense Sticks (25gm)', 1601373688, NULL, 1),
(97, 'images/img5f719b4b87657.jpg', '', 'prabhu priya , incense sticks', 'Lavender Incense Sticks', 'Lavender Incense Sticks (25Gm)', 1601373963, NULL, 1),
(98, 'images/img5f7993634e677.jpg', '', 'prabhu priya , incense sticks', 'Mogra Incense Sticks', 'Mogra Incense Sticks (25gm)', NULL, NULL, 1),
(99, 'images/img5f7993cee2342.jpg', '', 'prabhu priya , incense sticks', 'kuber incense Sticks', 'Kuber Incense Sticks (25gm)', NULL, NULL, 1),
(100, 'images/img5f79942a10b9c.jpg', '', 'prabhu priya , incense sticks', 'Utsav Incense Sticks', 'Utsav Incense Sticks (25gm)', NULL, NULL, 1),
(101, 'images/img5f799468094f2.jpg', '', 'prabhu priya , incense sticks', 'Jasmine Incense Sticks', 'Jasmine Incense Sticks (25gm)', NULL, NULL, 1),
(102, 'images/img5f7994e029ec5.jpg', '', 'prabhu priya , incense sticks', 'Sri Sai Flora Incense Sticks', 'Sri Sai Flora Incense Sticks (25gm)', NULL, NULL, 1),
(103, 'images/img5f7996338eafa.jpg', '', 'prabhu priya , incense sticks', 'Yellow flowers Incense Sticks', 'Yellow flowers Incense Sticks (25gm)', NULL, NULL, 1),
(104, 'images/img5f7996932e724.jpg', '', 'prabhu priya , incense sticks', 'Sugandh Sringar  Incense Sticks', 'Sugandh Sringar  Incense Sticks (25gm)', NULL, NULL, 1),
(105, 'images/img5f7996f146bb5.jpg', '', 'prabhu priya , incense sticks', 'Guggle Incense Sticks', 'Guggle Incense Sticks (25gm)', NULL, NULL, 1),
(106, 'images/img5f7997579f04c.jpg', '', 'prabhu priya , incense sticks', 'Loban Incense Sticks', 'Loban Incense Sticks (25gm)', NULL, NULL, 1),
(107, 'images/img5f7997e233b78.jpg', '', 'prabhu priya , incense sticks', 'Rose Incense Sticks', 'Rose Incense Sticks (100gm)', NULL, NULL, 1),
(108, 'images/img5f7c21cfc9913.jpg', '', 'prabhu priya , incense sticks', 'Mogra Incense Sticks', 'Mogra Incense Sticks (100gm)', NULL, NULL, 1),
(109, 'images/img5f7c223a23166.jpg', '', 'prabhu priya , incense sticks', 'Loban Incense Sticks', 'Loban Incense Sticks (100gm)', NULL, NULL, 1),
(110, 'images/img5f7c22ddadfed.jpg', '', 'prabhu priya , incense sticks', 'Guggal Incense Sticks', 'Guggal Incense Sticks (100gm)', NULL, NULL, 1),
(111, 'images/img5f7c2625c42bd.jpg', '', 'prabhu priya , Cones ,Kuber', 'Kuber Cones', 'Kuber Cones', NULL, NULL, 3),
(112, 'images/img5f7c26a9d60ac.jpg', '', 'prabhu priya , Cones , Mogra', 'Mogra Cones ', 'Mogra Cones ', NULL, 1602049653, 3),
(113, 'images/img5f7c26ad1f9f3.jpg', '', 'prabhu priya , Cones , Mogra', 'Mogra Cones ', 'Mogra Cones ', NULL, NULL, 3),
(114, 'images/img5f7c2706a0b61.jpg', '', 'prabhu priya , Cones ,Pooja', 'Pooja Cones', 'Pooja Cones', NULL, NULL, 3),
(115, 'images/img5f7c27ee0aff3.jpg', '', 'prabhu priya , Jal , Ganga', 'Ganga Jal', 'Ganga Jal', NULL, NULL, 9),
(116, 'images/img5f7c2850d15a4.jpg', '', 'prabhu priya , Jal ,Kewda', 'Kewda Jal', 'Kewda Jal', 1602235926, 1602235934, 1),
(117, 'images/img5f7c369b0a281.jpg', '', 'Moli', 'Moli', 'Moli', 1605856225, NULL, 10),
(118, 'images/img5f7c37c520dda.jpg', '', 'Prabhu Priya, Jal, Kewda', 'Kewda Jal', 'Kewda Jal', NULL, 1601976421, 9),
(119, 'images/img5f7c3f8d959de.jpg', '', 'jal', 'jal', 'jal', NULL, 1601979677, 9),
(120, 'images/img5f841d4b6b3c5.jpg', '', 'Prabhu Priya Honey', 'Honey', 'HONEY', NULL, NULL, 10),
(121, 'images/img5f841d4d31427.jpg', '', 'Prabhu Priya Honey', 'Honey', 'HONEY', NULL, 1602494859, 10),
(122, 'images/img5fc8cb8737a52.jpg', '', 'Prabhu Priya Sandal Itra', 'itra', 'Sandal Itra', 1606994823, NULL, 8),
(123, 'images/img5f8423f09aadd.jpg', '', 'Prabhu Priya Sandal Itra', 'Sandal itra', 'SADAL ITRA', NULL, 1602495529, 8),
(124, 'images/img5f8423f31b770.jpg', '', 'Prabhu Priya Sandal Itra', 'Sandal itra', 'SADAL ITRA', NULL, 1602495504, 8),
(125, 'images/img5f84337726e0b.jpg', '', 'Prabhu Priya, hawan samagri', 'Hawan Samagri', 'Hawan samagri(200gm)', NULL, NULL, 7),
(126, 'images/img5f967f8c09b62.jpg', '', 'Prabhu Priya Combo', 'Prabhat pooja combo', 'Prabhat pooja combo', NULL, 1603718883, 18),
(127, 'images/img5f967f90a9cb5.jpg', '', 'Prabhu Priya Combo', 'Prabhat pooja combo', 'Prabhat pooja combo', 1603791258, NULL, 12),
(128, 'images/img5f96b0b8291c2.png', '', 'Combo', 'Combo', 'Aashirvaad Combo ', NULL, 1603718883, 1),
(129, 'images/img5f97e96e176ea.jpg', '', 'Combo', 'Combo', 'Aashirvaad Combo', 1603791214, NULL, 12),
(130, 'images/img5f97e95054da4.jpg', '', 'Yagna Sugandham Combo, Prabhu Priya, Yagna Combo, Havan Samagri', 'Yagna Sugandham Combo', 'Yagna Sugandham Combo', 1603791184, NULL, 12),
(131, 'images/img5f97e6d6951f9.jpg', '', 'Aastha Combo, Havan Samagri, Pooja Samagri, Prabhu Priya', 'Aastha Combo', 'Aastha Combo', 1603790550, NULL, 12),
(132, 'images/img5f97e698ca9d3.jpg', '', 'Bhakti Combo, Prabhu Priya', 'Bhakti Combo', 'Bhakti Combo', 1603952448, NULL, 12),
(133, 'images/img5f97e67936871.jpg', '', 'Maa Durga Shakti Combo, Prabhu Priya', 'Maa Durga Shakti Combo', 'Maa Durga Shakti Combo', 1603790457, NULL, 12),
(134, 'images/img5f97e65547d66.jpg', '', 'Hanuman Chaula Combo, Prabhu Priya', 'Hanuman Chaula Combo', 'Hanuman Chaula Combo', 1605257124, NULL, 12),
(135, 'images/img5f97e63685e5d.jpg', '', 'Monthly Shanidev pooja Combo, Prabhu Priya, Pooja Combo', 'Monthly Shanidev pooja Combo', 'Monthly Shanidev pooja Combo', 1603790390, NULL, 12),
(136, 'images/img5f97e61474762.jpg', '', 'Surya Uday Combo, Prabhu Priya', 'Surya Uday Combo', 'Surya Uday Combo', 1603790356, NULL, 12),
(137, 'images/img5f97e5f4f0ad9.jpg', '', 'Saundarya Combo', 'Saundarya Combo', 'Saundarya Combo', 1603790324, NULL, 12),
(138, 'images/img5f97e5d658ec5.jpg', '', 'Nityam Combo 1', 'Nityam Combo 1', 'Nityam Combo 1', 1603790294, NULL, 12),
(139, 'images/img5f97e5af931e0.jpg', '', 'Nityam Combo', 'Nityam Combo 2', 'Nityam Combo 2', 1603790255, NULL, 12),
(140, 'images/img5f97e57f5fecb.jpg', '', 'Nityam Combo 3', 'Nityam Combo 3', 'Nityam Combo 3', 1603790207, NULL, 12),
(141, 'images/img5f97e56252dad.jpg', '', 'Nityam Combo', 'Nityam Combo', 'Nityam Combo 4', 1603790178, NULL, 12),
(142, 'images/img5f97e463e5c8b.jpg', '', 'Shudham Combo', 'Shudham Combo', 'Shudham Combo 1', 1603789923, NULL, 12),
(143, 'images/img5f97e4ffe25de.jpg', '', 'Shudham Combo', 'Shudham Combo 2', 'Shudham Combo 2', 1603790079, NULL, 12),
(144, 'images/img5fa3ab3eb64ad.jpg', '', 'moli', 'moli', 'moli', NULL, 1604561737, 1),
(145, 'images/img5fae4d0ee3340.jpg', '', 'Shri Shanidev  Yantra', 'Shri Shanidev  Yantra', 'Shri Shanidev  Yantra', NULL, NULL, 11),
(146, 'images/img5fae500bef8e8.jpg', '', 'Shri Shani Shubh  Yantra', 'Shri Shani Shubh  Yantra', 'Shri Shani Shubh  Yantra', NULL, NULL, 11),
(147, 'images/img5fae50ea69248.jpg', '', 'Shri Kuber Dhan Varsha  Yantra', 'Shri Kuber Dhan Varsha  Yantra', 'Shri Kuber Dhan Varsha  Yantra', NULL, NULL, 11),
(148, 'images/img5fae514b24953.jpg', '', 'Shri Hanuman ji chalisa Kawach', 'Shri Hanuman ji chalisa Kawach', 'Shri Hanuman ji chalisa Kawach', NULL, NULL, 11),
(149, 'images/img5fae51e59c536.jpg', '', 'Rudraksh Hanuman Kawach', 'Rudraksh Hanuman Kawach', 'Rudraksh Hanuman Kawach', NULL, NULL, 11),
(150, 'images/img5fae523c3a8f4.jpg', '', 'Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', 'Nazar Suraksha Kawach', NULL, NULL, 11),
(151, 'images/img5fae52ff21fd5.jpg', '', 'Nazar jantra', 'Nazar Jantra', 'Nazar Jantra', 1605263038, NULL, 11),
(152, 'images/img5fae5352a16b6.jpg', '', 'Mahalaxmi Dhan Prapti Yantra', 'Mahalaxmi Dhan Prapti Yantra', 'Mahalaxmi Dhan Prapti Yantra', NULL, NULL, 11),
(153, 'images/img5fae55166732e.jpg', '', 'Kuber Kunji', 'Kuber Kunji', 'Kuber Kunji', NULL, NULL, 11),
(154, 'images/img5fae55c2e2243.jpg', '', 'Dhan Laxmi Kuber Dhan Varsha', 'Dhan Laxmi Kuber Dhan Varsha', 'Dhan Laxmi Kuber Dhan Varsha', NULL, NULL, 11),
(155, 'images/img5fb76a7d47864.jpg', '', 'Hawan Samagri', 'Hawan Samagri (400gm)', 'Hawan Samagri (400gm)', 1605856092, NULL, 7),
(156, 'images/img5fb76af363fb7.jpg', '', 'Hawan Samagri', 'Hawan Samagri (1kg)', 'Hawan Samagri (1kg)', 1605856054, NULL, 7),
(157, 'images/img5fc7446bc1298.jpg', '', 'Prabhu Priya , Peela Chandan Powder', 'Peela Chandan Powder', 'Peela Chandan Powder', NULL, NULL, 4),
(158, 'images/img5fc74514de2db.jpg', '', 'Prabhu Priya , Kesri Chandan Tilak', 'Kesri Chandan Tilak', 'Kesri Chandan Tilak', NULL, NULL, 4),
(159, 'images/img5fc745b4eed61.jpg', '', 'Prabhu Priya , Lal Chandan Powder', 'Lal Chandan Powder', 'Lal Chandan Powder', NULL, NULL, 4),
(160, 'images/img5fc747f5159d1.jpg', '', 'Prabhu Priya , Kesar Pooja Batti', 'Kesar Pooja Batti', 'Kesar Pooja Batti', NULL, NULL, 6),
(161, 'images/img5fc74858d2fa1.jpg', '', 'Prabhu Priya , Chandan Pooja Batti', 'Chandan Pooja Batti', 'Chandan Pooja Batti', NULL, NULL, 6),
(162, 'images/img5fc748e61d1fd.jpg', '', 'Prabhu Priya , Plain Pooja Batti', 'Plain Pooja Batti', 'Plain Pooja Batti', NULL, NULL, 6),
(163, 'images/img5fc8cbf11092e.jpg', '', 'Prabhu Priya , Motia Itra', 'Itra', 'Motia Itra', NULL, NULL, 8),
(164, 'images/img5fc8cdc279ebe.jpg', '', 'Prabhu Priya , Musk Itra', 'Itra', 'Musk Itra', NULL, NULL, 8),
(165, 'images/img5fc8ce32625d5.jpg', '', 'Prabhu Priya , Kewda Itra', 'Itra', 'Kewda Itra', NULL, NULL, 8),
(166, 'images/img6024d69cbdb9d.jpg', '', 'Prabhu Priya Combo', 'Agarbatti  Pooja combo', 'Agarbatti  Pooja combo', 1615880188, NULL, 1),
(167, 'images/img6024e5e42740e.jpg', '', 'Prabhu Priya Combo', 'Agarbatti  Pooja combo', 'Agarbatti  Pooja combo', 1615880160, NULL, 1),
(168, 'images/img6024e637cadce.jpg', '', 'Prabhu Priya Combo', 'Agarbatti  Pooja combo', 'Agarbatti  Pooja combo ', 1615880077, NULL, 1),
(169, 'images/img6024e7155cb12.jpg', '', 'Prabhu Priya Combo', 'Agarbatti  Pooja combo', 'Agarbatti  Pooja combo', 1615880042, NULL, 1),
(170, 'images/img6024e76b1caa7.jpg', '', 'Prabhu Priya Combo', 'Agarbatti  Pooja combo', 'Agarbatti  Pooja combo', 1615880010, NULL, 1),
(171, 'images/img60250d724883b.jpg', '', 'Prabhu Priya Combo', 'pooja combo', 'Pooja combo', NULL, 1613041047, 3),
(172, 'images/img60250d73c1ec4.jpg', '', 'Prabhu Priya Combo', 'pooja combo', 'Cones Pooja Small combo', 1615880378, NULL, 3),
(173, 'images/img60250d745a095.jpg', '', 'Prabhu Priya Combo', 'pooja combo', 'Pooja combo', NULL, 1613041040, 3),
(174, 'images/img60250e4eb2452.jpg', '', 'Prabhu Priya Combo', 'Cones Pooja Big combo', 'Cones Pooja Big combo', 1615879915, NULL, 3),
(175, 'images/img602a11f33cf65.jpg', '', 'Prabhu Priya Combo', 'Dhoop Pooja combo', 'Dhoop Pooja combo', 1615879866, NULL, 2),
(176, 'images/img602a121787a8e.jpg', '', 'Prabhu Priya Combo', 'pooja combo', 'Pooja combo', NULL, 1613372468, 2),
(177, 'images/img602b69b7157dc.jpg', '', 'Prabhu Priya Combo', ' Agarbatti pooja combo', ' Agarbatti pooja combo', 1615879809, NULL, 1),
(178, 'images/img602b69ba400ed.jpg', '', 'Prabhu Priya Combo', 'pooja combo', 'Pooja combo', NULL, 1615879756, 1),
(179, 'images/img602b6c765cfb1.jpg', '', 'Prabhu Priya Combo', 'Cones Pooja Big combo', 'Cones Pooja Big combo', 1615879736, NULL, 3),
(180, 'images/img602b6c77d08a8.jpg', '', 'Prabhu Priya Combo', 'Cones Pooja Big combo', 'Cones Pooja Big combo', 1615879687, NULL, 3),
(181, 'images/img602b9b8fbd8d7.jpg', '', 'Prabhu Priya Combo', 'Cones Pooja Big combo', 'Cones Pooja Big combo', 1615879636, NULL, 3),
(182, 'images/img618257232abd8.png', '', 'test', 'test', 'test1`', 1635931964, 1635931970, 3),
(183, 'images/img61825c57b9b74.jpg', '', 'Prabhu Priya Loban Natural Sambrani Cup', 'Loban Natural Sambrani Cup', 'Loban', 1635935419, NULL, 20),
(184, 'images/img61825ea4ed4d1.jpg', '', 'Prabhu Priya Sai Dhuni Natural Sambrani Cup', 'Sai Dhuni Natural Sambrani Cup', 'Sai Dhuni', 1635935411, NULL, 20),
(185, 'images/img61825f668c2d9.jpeg', '', 'Prabhu Priya Guggal Natural Sambrani Cup', 'Guggal Natural Sambrani Cup', 'Guggal', 1635935398, NULL, 20),
(186, 'images/img61825fc0c3cf0.jpeg', '', 'Prabhu Priya Chandan Natural Sambrani Cup', 'Chandan Natural Sambrani Cup', 'Chandan', 1635935388, NULL, 20),
(187, 'images/img61939e65f0da9.jpeg', '', 'test', 'test', 'New Product', 1637125705, 1637125716, 21),
(188, 'images/img61948e6451e39.jpeg', '', 'test', 'test', 'Test Product', NULL, 1637132521, 21);

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
(2, 'VDFGRVZJWUY1MkhYZEsxYmpvbGViQT09', '838a20b53357557f9c55e37795eef1d3', NULL),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
