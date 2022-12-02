-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 04:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `berita` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `judul`, `berita`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banjir di jakarta', 'banjir dijakarta merupakan banjir xxxx', '2022-11-18 03:34:43', 'baru', '2022-11-18 03:34:43', '2022-11-18 03:34:43'),
(2, 'MetaNesia raih penghargaan \"Pertama di Indonesia\" berkat metaverse', 'MetaNesia raih penghargaan \"Pertama di Indonesia\" berkat metaverse', '2022-11-18 03:36:06', 'baru', '2022-11-18 03:36:06', '2022-11-18 03:36:06'),
(3, 'Janji Sandy Walsh dan Jordi Amat Setelah Jadi WNI\r\n\r\n', 'Baca artikel CNN Indonesia \"Janji Sandy Walsh dan Jordi Amat Setelah Jadi WNI\" selengkapnya di sini: https://www.cnnindonesia.com/olahraga/20221118065921-142-875350/janji-sandy-walsh-dan-jordi-amat-setelah-jadi-wni.\r\n\r\nDownload Apps CNN Indonesia sekarang', '2022-11-18 03:36:06', 'baru', '2022-11-18 03:36:06', '2022-11-18 03:36:06'),
(4, 'Sidang Ferdy Sambo Cs Kembali Digelar Pekan Depan\r\n\r\n', 'Jakarta, CNN Indonesia -- Sidang perkara pembunuhan berencana terhadap Nofriansyah Yosua Hutabarat alias Brigadir J dengan terdakwa mantan Kadiv Propam Polri Ferdy Sambo dan kawan-kawan kembali digelar Selasa (22/11) pekan depan.\r\n\"Iya, Selasa minggu depa', '2022-11-18 03:39:08', 'baru', '2022-11-18 03:39:08', '2022-11-18 03:39:08'),
(5, 'Gempita Bola Dunia 2022', 'Ajang turnamen sepak bola internasional empat tahunan yang akan digelar di Qatar pada 21 November hingga 18 Desember 2022. Ini adalah kali pertama Piala Dunia digelar di akhir tahun, dengan sebelumnya selalu digelar di pertengahan tahun. Total 32 negara a', '2022-11-18 03:39:33', 'baru', '2022-11-18 03:39:33', '2022-11-18 03:39:33'),
(6, 'KTT G20 2022', 'Indonesia didapuk sebagai tuan rumah atau presidensi G20 2022 melalui serah terima dalam Konferensi Tingkat Tinggi (KTT) Roma, Italia pada Oktober 2021. KTT G20 Bali akan digelar pada 15-16 November tahun ini.', '2022-11-18 03:39:33', 'baru', '2022-11-18 03:39:33', '2022-11-18 03:39:33'),
(7, 'Bos Amazon Sebut PHK Lanjut Sampai Awal Tahun Depan\r\n\r\nBaca artikel CNN Indonesia \"Bos Amazon Sebut PHK Lanjut Sampai Awal Tahun Depan\" selengkapnya di sini: https://www.cnnindonesia.com/ekonomi/20221118090353-92-875381/bos-amazon-sebut-phk-lanjut-sampai-', 'Jakarta, CNN Indonesia -- CEO Amazon Andy Jassy mengatakan pemutusan hubungan kerja (PHK) di raksasa e-commerce itu akan berlanjut hingga awal tahun depan.\r\nHal ini disampaikan Jassy dalam pernyataan publik pertamanya sejak perusahaan memulai PHK besar-be', '2022-11-18 03:40:19', 'baru', '2022-11-18 03:40:19', '2022-11-18 03:40:19'),
(8, 'Daftar Lengkap 32 Skuad Pemain Piala Dunia 2022\r\n\r\nBaca artikel CNN Indonesia \"Daftar Lengkap 32 Skuad Pemain Piala Dunia 2022\" selengkapnya di sini: https://www.cnnindonesia.com/olahraga/20221114112333-142-873374/daftar-lengkap-32-skuad-pemain-piala-duni', 'akarta, CNN Indonesia -- Piala Dunia 2022 Qatar digelar 20 November hingga 18 Desember 2022. Berikut daftar lengkap skuad pemain tim Piala Dunia 2022.\r\nSebanyak 32 tim peserta akan tampil di Piala Dunia 2022 yang merupakan turnamen berbeda daripada sebelu', '2022-11-18 03:40:19', 'baru', '2022-11-18 03:40:19', '2022-11-18 03:40:19'),
(9, 'Cara Menonton Hujan Meteor Leonid Jumat Dinihari Nanti\r\n\r\nBaca artikel CNN Indonesia \"Cara Menonton Hujan Meteor Leonid Jumat Dinihari Nanti\" selengkapnya di sini: https://www.cnnindonesia.com/teknologi/20221117160639-199-875176/cara-menonton-hujan-meteor', 'Jakarta, CNN Indonesia -- Hujan meteor Leonid dapat disaksikan di langit Indonesia pada Jumat (18/11) dini hari hingga sebelum Matahari terbit. Berikut cara menonton hujan meteor ini.\r\nLangit Indonesia dihiasi sejumlah hujan meteor pada November, salah sa', '2022-11-18 03:41:23', 'baru', '2022-11-18 03:41:23', '2022-11-18 03:41:23'),
(10, 'Kecepatan Internet Bekasi Kalahkan Jaksel dan Kiev\r\n\r\nBaca artikel CNN Indonesia \"Kecepatan Internet Bekasi Kalahkan Jaksel dan Kiev\" selengkapnya di sini: https://www.cnnindonesia.com/teknologi/20221117165923-192-875201/kecepatan-internet-bekasi-kalahkan', 'Jakarta, CNN Indonesia -- Meski sering dicemooh, Bekasi ternyata memiliki kecepatan internet paling baik dibanding kota-kota lain di Indonesia. Bahkan, kecepatan internet Bekasi menduduki peringkat 135 dunia.\r\nMelansir Speedtest, Bekasi memiliki kecepatan', '2022-11-18 03:41:23', 'baru', '2022-11-18 03:41:23', '2022-11-18 03:41:23'),
(11, 'okokok', 'okokokok', '2022-11-19 13:19:46', 'baru', '2022-11-19 13:19:46', '2022-11-19 13:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'frenky', '$2y$10$hg3WB5RyJeuRDnXPmTQ5Ie/F.AQrK7A8E4DzmYeWgbCbBDiqvNuxq', 'frenky@gmail.com', '2022-11-10 16:17:59', '2022-11-10 16:17:59', '2022-11-10 16:17:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
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
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
