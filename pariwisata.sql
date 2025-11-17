-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 01:47 PM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `kode` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `harga_tiket` decimal(10,2) DEFAULT NULL,
  `rating_bintang` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`kode`, `nama`, `lokasi`, `deskripsi`, `harga_tiket`, `rating_bintang`) VALUES
(1, 'Labuan Bajo', 'Nusa Tenggara Timur', 'Labuan Bajo dikenal sebagai surga tersembunyi di Indonesia bagian timur. Desa ini berada di Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur yang berbatasan dengan Nusa Tenggara Barat dan dipisahkan Selat Sape. Keberadaan Pulau Komodo yang menjadi taman nasional telah diakui menjadi situs warisan dunia oleh UNESCO.', 1630000.00, 4.7),
(2, 'Raja Ampat', 'Papua Barat Daya', 'Raja Ampat merupakan salah satu objek wisata Indonesia yang mendunia dan diakui Unesco. Keindahan pemandangan bawah lautnya menjadi daya tarik utama Pulau yang ada di ujung timur Indonesia ini. Keindahan Raja Ampat tak hanya ada di pemandangan bawah air, tapi juga di hutan lebat yang ada di pulau-pulau.', 6800000.00, 4.5),
(3, 'Candi Borobudur', 'Magelang, Jawa Tengah', 'Candi Buddha terbesar di dunia yang terletak di Magelang, Jawa Tengah, dan merupakan salah satu situs warisan dunia UNESCO. Candi ini dibangun pada abad ke-8 hingga ke-9 Masehi oleh Raja Samaratungga dari Dinasti Syailendra, dan memiliki arsitektur megah berbentuk mandala yang terdiri dari 504 patung Buddha, 2.672 panel relief, serta 72 stupa yang tersebar di tiga tingkat spiritual: Kamadhatu, Rupadhatu, dan Arupadhatu. ', 150000.00, 4.3),
(4, 'Gunung Bromo', 'Probolinggo, Jawa Timur', 'Wisata Gunung Bromo merupakan salah satu tempat wisata yang menjadi favorit bagi wisatawan baik dalam maupun luar negeri. Gunung Bromo terletak di Probolinggo, Jawa Timur dan memiliki ketinggian 2.392 Mdpl. Mengutip situs Disporaparbud Probolinggo, Gunung Bromo dikenal dengan sunrise dan sunsetnya.', 80000.00, 4.4),
(5, 'Tanah Lot', 'Bali', 'Sebuah pura Hindu di Bali yang ikonik, terletak di atas batu karang besar yang menjorok ke laut. Pura ini merupakan salah satu dari tujuh pura laut di Bali, menjadikannya situs spiritual penting sekaligus tujuan wisata yang terkenal dengan pemandangan matahari terbenamnya yang spektakuler', 100000.00, 4.9),
(6, 'Candi Prambanan', 'Klaten, Jawa Tengah', 'Candi Hindu ini terletak di Klaten dan tak hanya populer untuk wisatawan dalam negeri, tapi hingga ke mancanegara. Candi Prambanan sendiri sempat terbengkalai selama ratusan tahun sebelum akhirnya direvitalisasi mulai 1733. Seorang Belanda bernama CA Lons menemukannya pada tahun itu dan mulai saat itulah proses revitalisasi dilakukan. Prambanan masuk ke dalam daftar Warisan Dunia UNESCO sejak 1991.', 100000.00, 4.6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'joltech2609', '$2y$10$UwyNdJMb4uRqp1MGE/154u78cQdTNpHKB7zX3eAlGcFOibZStxdbq'),
(5, 'hhh', '$2y$10$0hbDP4YrzAsQ356af2dyDO0R/7El3NioZhH1br5V/4bXn0JcjzgTm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `kode` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
