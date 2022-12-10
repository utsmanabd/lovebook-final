-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 03:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_product`, `qty`, `subtotal`) VALUES
(8, 1, 5, 2, 120000),
(9, 1, 4, 1, 50000),
(10, 1, 9, 1, 60000),
(11, 1, 6, 1, 60000),
(15, 2, 5, 3, 180000),
(18, 2, 6, 4, 240000),
(19, 4, 6, 1, 60000),
(20, 4, 5, 1, 60000),
(21, 4, 4, 1, 50000),
(26, 2, 11, 2, 150000),
(27, 2, 10, 1, 45000),
(30, 2, 4, 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `title`) VALUES
(5, 'fiksi', 'Fiksi'),
(6, 'nonfiksi', 'Nonfiksi');

-- --------------------------------------------------------

--
-- Table structure for table `demo_click`
--

CREATE TABLE `demo_click` (
  `id` int(11) NOT NULL,
  `numberofclick` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo_click`
--

INSERT INTO `demo_click` (`id`, `numberofclick`, `created_at`) VALUES
(1, 345, '2022-11-11 17:11:57'),
(2, 463, '2022-11-11 17:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `demo_viewer`
--

CREATE TABLE `demo_viewer` (
  `id` int(11) NOT NULL,
  `numberofview` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo_viewer`
--

INSERT INTO `demo_viewer` (`id`, `numberofview`, `created_at`) VALUES
(1, 234, '2022-11-11 17:12:55'),
(2, 421, '2022-11-11 17:12:55'),
(3, 341, '2022-11-11 17:12:55'),
(4, 235, '2022-11-11 17:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` enum('waiting','paid','delivered','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `invoice`, `total`, `name`, `address`, `phone`, `status`) VALUES
(2, 3, '2022-11-11', '320221111130134', 285000, 'Penerima1', 'Bogor', '08636372837', 'delivered'),
(3, 5, '2022-11-12', '520221112034739', 405000, 'Shani Indira Natio', 'Sudirman', '082146912452', 'paid'),
(4, 6, '2022-11-12', '620221112111706', 170000, 'mbagus', 'bigoe', '0198184', 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `orders_confirm`
--

CREATE TABLE `orders_confirm` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_confirm`
--

INSERT INTO `orders_confirm` (`id`, `id_orders`, `account_name`, `account_number`, `nominal`, `note`, `image`) VALUES
(2, 3, 'Shani', '328958230', 900000, 'aku lebihin yaaa', '520221112034739-20221112035008.jpg'),
(3, 4, 'iaja', 'jajaje', 764646, '-ahqhwhd', '620221112111706-20221112111929.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `id_orders`, `id_product`, `qty`, `subtotal`) VALUES
(3, 2, 4, 3, 150000),
(4, 2, 9, 1, 60000),
(5, 2, 11, 1, 75000),
(6, 3, 6, 1, 60000),
(7, 3, 5, 4, 240000),
(8, 3, 10, 1, 45000),
(9, 3, 9, 1, 60000),
(10, 4, 4, 1, 50000),
(11, 4, 6, 2, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL DEFAULT '(Belum Diatur)',
  `penerbit` varchar(255) NOT NULL DEFAULT '(Belum Diatur)',
  `tahun` year(4) NOT NULL DEFAULT 2022,
  `description` text NOT NULL,
  `kondisi` int(3) NOT NULL DEFAULT 100,
  `halaman` int(5) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_category`, `slug`, `title`, `penulis`, `penerbit`, `tahun`, `description`, `kondisi`, `halaman`, `price`, `is_available`, `image`) VALUES
(4, 6, 'atomic-habits', 'Atomic Habits', 'James Clear', 'Avery', 2018, 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara lain. Ia tahu bahwa perubahan nyata berasal dari efek gabungan ratusan keputusan kecil—dari mengerjakan dua push-up sehari, bangun lima menit lebih awal, sampai menahan sebentar hasrat untuk menelepon. Ia menyebut semua tadi atomic habits.', 75, 230, 50000, 1, 'atomic-habits-20221110200651.png'),
(5, 6, 'how-to-respect-myself', 'How To Respect Myself', 'Yoon Hong Gyun', 'Transmedia Pustaka', 2020, 'Bagaimana anda menjaga dan mencintai diri sendiri? Metode Pelatihan Mandiri untuk Harga Diri ala Dokter Kejiwaan ‘dr. Yoon si Penjawab', 80, 300, 60000, 1, 'how-to-respect-myself-20221110200842.png'),
(6, 5, 'little-women-and-good-wives', 'Little Women And Good Wives', 'Louisa May Alcott', 'Kessinger', 2004, 'Amy looked relieved, but naughty Jo took her at her word, for during the first call she sat with every limb gracefully composed, every fold correctly draped, calm as a summer sea, cool as a snowbank, and as silent as the sphinx. In vain Mrs. Chester alluded to her \'charming novel\', and the Misses Chester introduced parties, picnics, the opera, and the fashions. Each and all were answered by a smile, a bow, and a demure \"Yes\" or \"No\" with the chill on.', 80, 464, 60000, 1, 'little-women-and-good-wives-20221110214808.png'),
(9, 5, 'kata', 'Kata', 'Rintik Sedu', 'Gagas Media', 2018, '“Andai bisa sesederhana itu, aku tid_bukuak akan pernah mencintaimu sejak awal. Aku tid_bukuak akan mengambil risiko, mengorbankan perasaanku. Namun, semua ini diluar kendaliku” Nugraha.', 90, 260, 60000, 1, 'kata-20221110225200.png'),
(10, 6, 'sukarno', 'Sukarno', 'Anom Whani Wicaksana', 'Klik Media', 2018, '\"Biarpun matahari di tangan kananku dan bulan di tangan kiriku, dengan maksud-maksud mereka hendak menghentikan prinsip dan perjuangan hidupku, aku tak akan berhenti sampai kapanpun, bahkan hingga mati sekalipun!\" Buku ini merangkum perjalanan hidup Sukarno mulai sejak masih kecil hingga wafatnya dan berupaya menempatkan Sukarno sebagai manusia yang lengkap. Selain itu, buku ini ditulis dengan bahasa yang mudah dipahami dan narasi cerita yang menarik. Dramatisasinya membawa para pembaca untuk menyelami kehidupan Sukarno yang berlika-liku.', 70, 290, 45000, 1, 'sukarno-20221110230147.png'),
(11, 5, 'enola-holmes-and-the-black-barouche', 'Enola Holmes And The Black Barouche', 'Nancy Springer', 'Wednesday Book', 2021, 'Enola Holmes adalah adik perempuan dari saudara laki-lakinya yang lebih terkenal, Sherlock dan Mycroft. Tapi dia memiliki semua kecerdasan, keterampilan, dan kecenderungan detektif dari mereka berdua.', 90, 455, 75000, 1, 'enola-holmes-and-the-black-barouche-20221110231854.png'),
(20, 6, 'autobiografi-mahatma-gandhi', 'Autobiografi Mahatma Gandhi', 'M.K. Gandhi', 'Narasi', 2018, 'Tak ada hal baru yang bisa kuajarkan kepada dunia. Kebenaran (truth) dan antikekerasan (non-violence) sama tuanya dengan gunung-gunung.\r\n... Tuhan adalah Kebenaran.', 60, 744, 70000, 1, 'autobiografi-mahatma-gandhi-20221112194919.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `is_active`, `image`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$IHwEPYmThXs6a38skTS48eTsJP2w2sb.6kbRhKADdSZyRvXyRe7S2', 'admin', 1, NULL),
(2, 'utsman', 'snubyellow@gmail.com', '$2y$10$PBCix9D8IvTdACLm1zrcwOMzF9KFfE7QujqkvuqVGL0hSeQb3As7m', 'admin', 1, 'utsman-20221110165431.jpg'),
(3, 'User', 'user@mail.com', '$2y$10$pLOC9pR5JK.U5LYd.Ra7q.wTFWTPSwcZ0H9DMAzPhlMwwC1Sx4Vb.', 'member', 1, NULL),
(4, 'Muthe', 'muthe@mail.com', '$2y$10$fVePX6TwGTa7zDwKu6ptMeyiaBAIxRpP0gPgJeN0yrNjtRz2ntQL.', 'member', 1, NULL),
(5, 'shani', 'shani@mail.com', '$2y$10$tJ1OvR7KnCwyFaD124pAE.YgdsD/FMBA/4ojaizlikfQLeZPpJ1YW', 'member', 1, NULL),
(6, 'mbagus', 'bagus@mail.com', '$2y$10$oSYZM3yFnUIsnvSTUZ9sFuVIBL.j.WYtJv/oq7IqbivWwIi69JeRO', 'admin', 1, 'mbagus-20221112112128.jpg'),
(7, 'user', 'user@test.com', '$2y$10$2bHfHvmXLjoZnyIJKAK0w.mpTX/HQkPC7MaCXIJSECDl9ksowXHK2', 'member', 1, NULL),
(8, 'admin', 'admin@test.com', '$2y$10$btESxM6q7.PlwVTPQzwEWOtb9yvx2hrc0JLba9bzQlc3hDrp9kzqa', 'admin', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_click`
--
ALTER TABLE `demo_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo_viewer`
--
ALTER TABLE `demo_viewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demo_viewer`
--
ALTER TABLE `demo_viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
