-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Des 2022 pada 14.23
-- Versi server: 10.3.37-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovebook_ci_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_product`, `qty`, `subtotal`) VALUES
(19, 4, 6, 1, 60000),
(20, 4, 5, 1, 60000),
(21, 4, 4, 1, 50000),
(35, 1, 6, 1, 60000),
(36, 1, 4, 1, 50000),
(37, 1, 10, 2, 90000),
(142, 8, 1, 1, 50000),
(143, 8, 32, 1, 70000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `slug`, `title`) VALUES
(5, 'fiksi', 'Fiksi'),
(6, 'nonfiksi', 'Nonfiksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_click`
--

CREATE TABLE `demo_click` (
  `id` int(11) NOT NULL,
  `numberofclick` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `demo_click`
--

INSERT INTO `demo_click` (`id`, `numberofclick`, `created_at`) VALUES
(1, 345, '2022-11-11 17:11:57'),
(2, 463, '2022-11-11 17:11:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `demo_viewer`
--

CREATE TABLE `demo_viewer` (
  `id` int(11) NOT NULL,
  `numberofview` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `demo_viewer`
--

INSERT INTO `demo_viewer` (`id`, `numberofview`, `created_at`) VALUES
(1, 234, '2022-11-11 17:12:55'),
(2, 421, '2022-11-11 17:12:55'),
(3, 341, '2022-11-11 17:12:55'),
(4, 235, '2022-11-11 17:12:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `invoice`, `total`, `name`, `address`, `phone`, `status`) VALUES
(2, 3, '2022-11-11', '320221111130134', 285000, 'Penerima1', 'Bogor', '08636372837', 'delivered'),
(3, 5, '2022-11-12', '520221112034739', 405000, 'Shani Indira Natio', 'Sudirman', '082146912452', 'paid'),
(4, 6, '2022-11-12', '620221112111706', 170000, 'mbagus', 'bigoe', '0198184', 'paid'),
(5, 1, '2022-11-12', '120221112230327', 290000, 'Admin 7', 'Bogor', '087729812832', 'waiting'),
(6, 7, '2022-11-14', '720221114214002', 340000, 'user', 'bogor', '08238570246', 'delivered'),
(7, 7, '2022-11-18', '720221118005416', 175000, 'Pengguna', 'Bogor', '082148911513', 'delivered'),
(8, 7, '2022-11-18', '720221118102605', 170000, 'Jojo', 'Jl Trunojoyo', '748392013461', 'paid'),
(9, 7, '2022-11-18', '720221118102848', 60000, 'Ainun', '1', '1', 'waiting'),
(10, 7, '2022-11-18', '720221118120617', 170000, 'Ainun', 't', 'w', 'paid'),
(11, 8, '2022-11-18', '820221118141431', 170000, 'bdul', 'bgor', '021123456', 'delivered'),
(12, 7, '2022-11-18', '720221118141732', 60000, 'abdul', 'cileungsi', '085888888', 'delivered'),
(13, 7, '2022-11-18', '720221118143801', 60000, 'nayla', 'bogor utara', '08117786543', 'waiting'),
(14, 8, '2022-11-18', '820221118151414', 45000, 'bdul', 'mmk', '0857825498', 'waiting'),
(15, 7, '2022-11-18', '720221118174527', 225000, 'Putut Waringin Jati', 'Ainyn', '081236726571', 'delivered'),
(16, 15, '2022-11-21', '1520221121203313', 50000, 'Dahlia Kemalasari', 'Komplek Ciceri Indah Blok T no 13', '087880692323', 'delivered'),
(17, 2, '2022-11-23', '220221123061626', 110000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(18, 7, '2022-11-23', '720221123124615', 95000, 'iin', 'bogor', '987654321', 'delivered'),
(19, 16, '2022-11-23', '1620221123142855', 60000, 'Ei', 'Inazuma', '086797644535', 'delivered'),
(20, 2, '2022-11-23', '220221123232727', 190000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'paid'),
(21, 2, '2022-11-23', '220221123233534', 145000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(22, 16, '2022-11-23', '1620221123233814', 120000, 'rahr', 'aishdoahsod', '081982546', 'paid'),
(23, 2, '2022-11-24', '220221124000515', 70000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(24, 7, '2022-11-24', '720221124111611', 570000, 'a', 'b', '1', 'paid'),
(25, 2, '2022-11-24', '220221124154755', 200000, 'Tesss', 'Asal', '08172383152', 'waiting'),
(26, 7, '2022-11-24', '720221124182836', 170000, 'Utsman Abdurrahman', 'Bogor, Jawa Barat, 42123', '08918748912', 'waiting'),
(27, 8, '2022-11-24', '820221124200621', 175000, 'Muhamad Bagus  Tri Wahyudiono', 'Jalan Pakis Raya no.8 Taman Yasmin', '+6285717749999', 'waiting'),
(28, 7, '2022-11-25', '720221125155625', 165000, 'test', 'bogor', '123456768', 'delivered'),
(29, 2, '2022-11-28', '220221128012659', 195000, 'tes', 'jasdij', '0812849124', 'waiting'),
(30, 2, '2022-11-28', '220221128013931', 375000, 'tes', 'sakrl', '081295153', 'delivered'),
(31, 8, '2022-12-09', '820221209023014', 45000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(32, 8, '2022-12-09', '820221209023138', 115000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(33, 8, '2022-12-09', '820221209023228', 50000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'waiting'),
(34, 2, '2022-12-09', '220221209025335', 70000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'paid'),
(35, 2, '2022-12-09', '220221209130756', 60000, 'Utsman Abdurrahman', 'Ciceri Indah\r\nSumurpecung', '087771525501', 'paid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_confirm`
--

CREATE TABLE `orders_confirm` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orders_confirm`
--

INSERT INTO `orders_confirm` (`id`, `id_orders`, `account_name`, `account_number`, `nominal`, `note`, `image`) VALUES
(2, 3, 'Shani', '328958230', 900000, 'aku lebihin yaaa', '520221112034739-20221112035008.jpg'),
(3, 4, 'iaja', 'jajaje', 764646, '-ahqhwhd', '620221112111706-20221112111929.jpg'),
(4, 7, 'Pengguna', '754837139', 180000, '-', '720221118005416-20221118005520.jpg'),
(5, 12, 'abdul', '45', 60000, '-', '720221118141732-20221118141840.png'),
(6, 16, 'Utsman', '6666777888', 50000, '-', '1520221121203313-20221121204106.jpg'),
(7, 20, 'utsman', '6546456457', 200000, '02840142', '220221123232727-20221123232843.jpg'),
(8, 22, 'Utsman', '7812941025', 209999, 'a-', '1620221123233814-20221123233909.png'),
(9, 24, 'test', '000000', 100000, '-', '720221124111611-20221124112210.png'),
(10, 28, 'ab', '54322', 12345, '-', '720221125155625-20221125155733.jpg'),
(11, 34, 'utsman', '6546456457', 7878786, '-', '220221209025335-20221209025357.jpg'),
(12, 35, 'Pengguna', '6546456457', 700000, '-', '220221209130756-20221209130817.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orders_detail`
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
(11, 4, 6, 2, 120000),
(12, 5, 5, 2, 120000),
(13, 5, 4, 1, 50000),
(14, 5, 9, 1, 60000),
(15, 5, 6, 1, 60000),
(16, 6, 6, 2, 120000),
(17, 6, 4, 2, 100000),
(18, 6, 10, 1, 45000),
(19, 6, 11, 1, 75000),
(20, 7, 4, 1, 50000),
(21, 7, 10, 1, 45000),
(22, 7, 28, 2, 80000),
(23, 8, 4, 1, 50000),
(24, 8, 10, 1, 45000),
(25, 8, 11, 1, 75000),
(26, 9, 5, 1, 60000),
(27, 10, 6, 2, 120000),
(28, 10, 4, 1, 50000),
(29, 11, 6, 1, 60000),
(30, 11, 5, 1, 60000),
(31, 11, 4, 1, 50000),
(32, 12, 5, 1, 60000),
(33, 13, 6, 1, 60000),
(34, 14, 10, 1, 45000),
(35, 15, 6, 3, 180000),
(36, 15, 10, 1, 45000),
(37, 16, 4, 1, 50000),
(38, 17, 4, 1, 50000),
(39, 17, 6, 1, 60000),
(40, 18, 4, 1, 50000),
(41, 18, 10, 1, 45000),
(42, 19, 5, 1, 60000),
(43, 20, 23, 1, 60000),
(44, 20, 32, 1, 70000),
(45, 20, 6, 1, 60000),
(46, 21, 11, 1, 75000),
(47, 21, 20, 1, 70000),
(48, 22, 6, 1, 60000),
(49, 22, 5, 1, 60000),
(50, 23, 32, 1, 70000),
(51, 24, 30, 2, 120000),
(52, 24, 33, 1, 55000),
(53, 24, 34, 3, 210000),
(54, 24, 5, 1, 60000),
(55, 24, 11, 1, 75000),
(56, 24, 4, 1, 50000),
(57, 25, 22, 1, 55000),
(58, 25, 20, 1, 70000),
(59, 25, 11, 1, 75000),
(60, 26, 6, 1, 60000),
(61, 26, 22, 2, 110000),
(62, 27, 5, 1, 60000),
(63, 27, 10, 1, 45000),
(64, 27, 27, 1, 70000),
(65, 28, 5, 1, 60000),
(66, 28, 6, 1, 60000),
(67, 28, 10, 1, 45000),
(68, 29, 25, 1, 45000),
(69, 29, 31, 1, 40000),
(70, 29, 29, 2, 110000),
(71, 30, 6, 1, 60000),
(72, 30, 11, 1, 75000),
(73, 30, 23, 1, 60000),
(74, 30, 30, 1, 60000),
(75, 30, 24, 1, 65000),
(76, 30, 33, 1, 55000),
(77, 31, 25, 1, 45000),
(78, 32, 10, 1, 45000),
(79, 32, 20, 1, 70000),
(80, 33, 39, 1, 50000),
(81, 34, 32, 1, 70000),
(82, 35, 6, 1, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL DEFAULT '(Belum Diatur)',
  `penerbit` varchar(255) NOT NULL DEFAULT '(Belum Diatur)',
  `tahun` int(4) NOT NULL DEFAULT 2022,
  `description` text NOT NULL,
  `kondisi` int(3) NOT NULL DEFAULT 100,
  `halaman` int(5) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `id_category`, `slug`, `title`, `penulis`, `penerbit`, `tahun`, `description`, `kondisi`, `halaman`, `price`, `is_available`, `image`) VALUES
(1, 6, 'atomic-habits', 'Atomic Habits', 'James Clear', 'Avery', 2018, 'No matter your goals, Atomic Habits offers a proven framework for improving—every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.\r\n\r\nIf you\'re having trouble changing your habits, the problem isn\'t you. The problem is your system. Bad habits repeat themselves again and again not because you don\'t want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you\'ll get a proven system that can take you to new heights.', 70, 319, 50000, 1, 'atomic-habits-20221128013155.png'),
(5, 6, 'how-to-respect-myself', 'How To Respect Myself', 'Yoon Hong Gyun', 'Transmedia Pustaka', 2020, 'Bagaimana anda menjaga dan mencintai diri sendiri? Metode Pelatihan Mandiri untuk Harga Diri ala Dokter Kejiwaan ‘dr. Yoon si Penjawab', 80, 300, 60000, 1, 'how-to-respect-myself-20221110200842.png'),
(6, 5, 'little-women-and-good-wives', 'Little Women And Good Wives', 'Louisa May Alcott', 'Kessinger', 2004, 'Amy looked relieved, but naughty Jo took her at her word, for during the first call she sat with every limb gracefully composed, every fold correctly draped, calm as a summer sea, cool as a snowbank, and as silent as the sphinx. In vain Mrs. Chester alluded to her \'charming novel\', and the Misses Chester introduced parties, picnics, the opera, and the fashions. Each and all were answered by a smile, a bow, and a demure \"Yes\" or \"No\" with the chill on.', 80, 464, 60000, 1, 'little-women-and-good-wives-20221110214808.png'),
(10, 6, 'sukarno-biografi-lengkap-negarawan-sejati', 'Sukarno: Biografi Lengkap Negarawan Sejati', 'Anom Whani Wicaksana', 'Klik Media', 2018, 'Buku ini merangkum perjalanan hidup Sukarno mulai sejak masih kecil hingga wafat dan berupaya menempatkan Sukarno sebagai manusia yang lengkap.\r\n\r\nBuku ini ditulis dengan bahasa yang mudah dipahami dan pembawaan cerita yang menarik.', 70, 290, 45000, 1, 'sukarno-20221110230147.png'),
(11, 5, 'enola-holmes-and-the-black-barouche', 'Enola Holmes And The Black Barouche', 'Nancy Springer', 'Wednesday Book', 2021, 'Enola Holmes adalah adik perempuan dari saudara laki-lakinya yang lebih terkenal, Sherlock dan Mycroft. Tapi dia memiliki semua kecerdasan, keterampilan, dan kecenderungan detektif dari mereka berdua.', 90, 455, 75000, 1, 'enola-holmes-and-the-black-barouche-20221110231854.png'),
(20, 6, 'autobiografi-mahatma-gandhi', 'Autobiografi Mahatma Gandhi', 'M.K. Gandhi', 'Narasi', 2018, 'Tak ada hal baru yang bisa kuajarkan kepada dunia. Kebenaran (truth) dan antikekerasan (non-violence) sama tuanya dengan gunung-gunung.\r\n... Tuhan adalah Kebenaran.', 60, 744, 70000, 1, 'autobiografi-mahatma-gandhi-20221112194919.png'),
(22, 5, 'alices-adventures-in-wonderland', 'Alice\'s Adventures in Wonderland', 'Lewis Carrol', 'Pan Macmillan', 1865, 'Alice\'s Adventures in Wonderland (umumnya Alice in Wonderland) adalah sebuah novel Inggris tahun 1865 oleh Lewis Carroll. Ini merinci kisah seorang gadis muda bernama Alice yang jatuh melalui lubang kelinci ke dunia fantasi makhluk antropomorfik. Ini dilihat sebagai contoh genre omong kosong sastra.', 75, 320, 55000, 1, 'alices-adventures-in-wonderland-20221117183954.png'),
(23, 5, 'ayahku-bukan-pembohong', 'Ayahku (Bukan) Pembohong', 'Tere Liye', 'Gramedia Pustaka Utama', 2011, 'Kapan terakhir kali kita memeluk ayah kita? Menatap wajahnya, lantas bilang kita sungguh sayang padanya? Kapan terakhir kali kita bercakap ringan, tertawa gelak, bercengkerama, lantas menyentuh lembut tangannya, bilang kita sungguh bangga padanya?', 80, 304, 60000, 1, 'ayahku-bukan-pembohong-20221117184121.png'),
(24, 5, 'dear-nathan', 'Dear Nathan', 'Erisca Febriani', 'Best Media', 2016, 'Berawal dari keterlambatan mengikuti upacara pertama di sekolah baru, Salma Alvira bertemu dengan seorang cowok yang membantunya menelusup lewat gerbang samping. Selidik punya selidik, cowok itu ternyata bernama Nathan; murid nakal yang sering jadi bahan gosip anak satu sekolah. Beberapa rangkaian kejadian pun terjadi, yang justru menghantarkan Salma untuk menjadi kian lebih dekat dengan Nathan. Dua kepribadian yang saling bertolak belakang, seperti langit dan bumi; yang tidak bisa bersatu tapi saling melengkapi. Novel ini mengisahkan tentang masa indah putih abu-abu, persahabatan, pelajaran kehidupan, dan pentingnya untuk selalu menghargai perasaan.', 85, 520, 65000, 1, 'dear-nathan-20221117184246.png'),
(25, 6, 'dear-tomorrow-notes-to-my-future-self', '#Dear Tomorrow: Notes to My Future Self', 'Maudy Ayunda', 'Bentang', 2018, 'I am one of those people who adore witty quotes and phrases.\r\nI love being reminded by simple truths.\r\nI love how short statements can strike a chord in our minds and move us to do something.\r\n\r\nThis book is a compilation of my experiences, thoughts, and conversations about myself, love, dreams, and life.', 70, 192, 45000, 1, 'dear-tomorrow-notes-to-my-future-self-20221117184417.png'),
(26, 6, 'habis-gelap-terbitlah-terang', 'Habis Gelap Terbitlah Terang', 'R.A. Kartini', 'Balai Pustaka', 1911, 'Buku ini berisi/menceritakan perjalanan hidup seorang pahlawan wanita R.A Kartini, dan surat-suratnya yang ia tujukan kepada saudari dan sahabat-sahabatnya. Adapun isi dari surat-surat itu adalah tentang cita-citanya untuk memajukan kaum wanita, harapan-harapanya dan perjalanan hidupnya.', 95, 214, 75000, 1, 'habis-gelap-terbitlah-terang-20221117184535.png'),
(27, 6, 'how-to-win-friends-and-influence-people', 'How to Win Friends and Influence People', 'Dale Carnegie', 'Gallery Books', 1936, 'You can go after the job you want...and get it! You can take the job you have...and improve it! You can take any situation you\'re in...and make it work for you!', 85, 288, 70000, 1, 'how-to-win-friends-and-influence-people-20221117184755.png'),
(28, 6, 'jika-kita-tak-pernah-jadi-apa-apa', 'Jika Kita Tak Pernah Jadi Apa-apa', 'Alvi Syahrin', 'GagasMedia', 2019, 'Jika Kita Tak Pernah Jadi Apa-Apa akan menemanimu selama perjalanan. Buku ini untukmu yang khawatir tentang masa depan. Tenang saja, kau tidak sedang diburu waktu. Bacalah tiap lembarnya dengan penuh kesadaran bahwa hidup adalah tentang sebaik-baiknya berusaha, jatuh lalu bangun lagi, dan tidak berhenti percaya bahwa segala perjuanganmu tidak akan sia-sia. Bukankah sebaiknya apa-apa yang fana tidak selayaknya membuatmu kecewa?', 65, 229, 40000, 1, 'jika-kita-tak-pernah-jadi-apa-apa-20221117184922.png'),
(29, 6, 'limitless', 'Limitless', 'Nadhira Afifa', 'Mediakita', 2021, 'Limitless merangkum kisah manis dan pahit Nadhira Afifa dalam meraih cita-citanya. Mulai dari masa-masa terendahnya sewaktu berkuliah di Fakultas Kedokteran Universitas Indonesia, hingga ia bangkit dan mengantarnya pada salah satu momen terbesar dalam hidupnya--berkuliah di Harvard University, salah satu perguruan tinggi terbaik di dunia. Namun, hal itu tidak mudah.', 80, 232, 55000, 1, 'limitless-20221117185047.png'),
(30, 5, 'mariposa', 'Mariposa', 'Luluk HF', 'Coconut Books', 2018, 'Bercerita tentang perjuangan Acha untuk mendapatkan cinta seorang Iqbal. Acha tak pernah gentar meruntuhkan dingin dan kokohnya tembok pertahanan hati Iqbal yang belum pernah disinggahi perempuan mana pun.\r\n\r\nSikap dingin dan penolakan Iqbal berkali-kali tak membuat Acha menyerah. Bagi Acha selama Iqbal masih berwujud manusia, selama Iqbal tidak berubah menjadi sapi terbang, Acha akan terus berjuang.', 70, 496, 60000, 1, 'mariposa-20221117185210.png'),
(31, 6, 'mohammad-hatta-biografi-singkat-1902-1980', 'Mohammad Hatta: Biografi Singkat 1902-1980', 'Salman Alfarizi', 'Garasi House of Book', 2009, 'Biografi singkat mengenai bapak proklamator, Mohammad Hatta, serta membahas beberapa ide-idenya mengenai negara mencakup ekonomi, kehidupan berbangsa, demokrasi, dll.', 65, 242, 40000, 1, 'mohammad-hatta-biografi-singkat-1902-1980-20221117185402.png'),
(32, 5, 'teluk-alaska', 'Teluk Alaska', 'Eka Aryani', 'Coconut Books', 2019, 'Alister Reygan, cowok yang selalu menjadi idaman para wanita. Bukan hanya sekadar tampan, ia juga memiliki sebuah geng yang sering disebut sebagai ‘Penguasa Sekolah’.\r\n\r\nNasib sial menimpa cewek teman sekelasnya. Ia selalu menjadi objek bullying oleh gengnya. Allister sebagai ketua selalu paling kasar dan semangat dalam mem-bully cewek tersebut.\r\n\r\nSampai suatu hari Alister berhenti. Kata-kata kasar dan tatapan kebencian itu menghilang. Itu semua karena sebuah rahasia besar yang membuat hidupnya hancur seketika.', 80, 408, 70000, 1, 'teluk-alaska-20221117185545.png'),
(33, 5, 'tenggelamnya-kapal-van-der-wijck', 'Tenggelamnya Kapal Van Der Wijck', 'Hamka', 'Pustaka Dini', 1937, 'Cerita ini berkisar tentang semangat juang Zainuddin, bagaimana merana dan melaratnya hidup Zainuddin setelah cintanya ditolak oleh keluarga Hayati. Kemudian beliau bangun semula dari segala kedukaan, membuka lembaran baru dalam hidupnya menjadi seorang penulis yang ternama dan berjaya. Ia menceritakan tentang kesetiaan, cinta dan kasihnya Zainuddin terhadap Hayati. Meski Hayati sudah berkahwin tetapi sebaik mendapat tahu tentang kesusahan yang dihadapi Hayati, lantaran suaminya yang suka berpoya-poya serta tidak bertanggung-jawab, Zainuddin terus membantu tanpa ada dendam dan benci. Sesungguhnya cinta yang suci itu akan terus mekar di dalam hati hingga ke hujung nyawa begitulah jua cinta antara Zainuddin dan Hayati.', 60, 188, 55000, 1, 'tenggelamnya-kapal-van-der-wijck-20221117185715.png'),
(34, 5, 'tentang-kamu', 'Tentang Kamu', 'Tere Liye', 'Pt. Putra Bangsa', 2016, 'Atas dasar pekerjaan, Zaman Zulkarnaen harus menelusuri hidup seorang kliennya, perempuan pemegang paspor Inggris yang barusan meninggal dan mewariskan harta yang jumlahnya bisa menyaingi kekayaan Ratu Inggris. Tiga negara, lima kota, beribu luka. Hingga akhirnya Zaman mengerti, bahwa ini bukan sekadar perkara mengerti jalan hidup seorang klien, melainkan pengejawantahan prinsip kuat di tengah cobaan yang terus mendera.', 90, 524, 70000, 1, 'tentang-kamu-20221117185847.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`, `is_active`, `image`) VALUES
(1, 'Admin', 'admin@mail.com', '$2y$10$IHwEPYmThXs6a38skTS48eTsJP2w2sb.6kbRhKADdSZyRvXyRe7S2', 'admin', 1, NULL),
(2, 'Utsman', 'snubyellow@gmail.com', '$2y$10$PBCix9D8IvTdACLm1zrcwOMzF9KFfE7QujqkvuqVGL0hSeQb3As7m', 'admin', 1, 'utsman-20221110165431.jpg'),
(7, 'User', 'user@test.com', '$2y$10$2bHfHvmXLjoZnyIJKAK0w.mpTX/HQkPC7MaCXIJSECDl9ksowXHK2', 'member', 1, NULL),
(8, 'Admin', 'admin@test.com', '$2y$10$btESxM6q7.PlwVTPQzwEWOtb9yvx2hrc0JLba9bzQlc3hDrp9kzqa', 'admin', 1, NULL),
(10, 'iin', 'iin@gmail.com', '$2y$10$4xwE5/YufsOOmE0lLEMVjObAw1vC1IM5VToV5F/dmRQyFSEDwnGrW', 'member', 1, NULL),
(11, 'iin', 'iinn@gmail.com', '$2y$10$slV/OemV2/fznCKfmnBmlepfm6GRKMOvsvApHTzjEhADT3UMIkUBC', 'member', 1, NULL),
(12, 'coba', 'coba@gmail.com', '$2y$10$fWwRLYvGgZf1mTx56eN0feM2g1y6l8zZSgosy1K3vwW3lJ7c.XFiq', 'member', 1, NULL),
(13, 'nayla', 'nayla@gmail.com', '$2y$10$97aQ/lWh9TiniNGjXbCuhO4LpMMjZ.duQJ79Nnbgdw62WmM61CNU2', 'member', 1, NULL),
(14, 'hacker', 'hacker123@gmail.com', '$2y$10$3WJx4jmK2.qRN8UJAy018OnjHNUdomGxgbpzdorQ9tlv2e0udahyu', 'member', 1, NULL),
(15, 'Dahlia Kemalasari', 'dahliadahlan75@gmail.com', '$2y$10$Q.kN/of38vWEBsYLc6PpveHmFqNF9z7zG0MZG55OXcy2Sd1Um00mq', 'member', 1, NULL),
(16, 'Ei', 'ei@test.com', '$2y$10$s8PdWkPnkSfM0dSgK8KTrujPkrfYnaLpiRncTrsuW3ohos4B8Bqk.', 'member', 1, NULL),
(17, 'tes', 'tes@gmail.com', '$2y$10$KePKjzuzbO0xAek4fk/mFujhi1bAGkNMn0O2kkT/IoWO3vip2LQVa', 'member', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `demo_click`
--
ALTER TABLE `demo_click`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `demo_viewer`
--
ALTER TABLE `demo_viewer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders_confirm`
--
ALTER TABLE `orders_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `demo_viewer`
--
ALTER TABLE `demo_viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `orders_confirm`
--
ALTER TABLE `orders_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
