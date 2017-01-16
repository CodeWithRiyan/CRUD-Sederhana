-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 10:12 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web2_15`
--
CREATE DATABASE `web2_15` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web2_15`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` varchar(10) NOT NULL,
  `barang_nama` varchar(40) NOT NULL,
  `barang_harga` int(11) NOT NULL,
  `barang_satuan` varchar(15) NOT NULL,
  `barang_deskripsi` text NOT NULL,
  `barang_gambar` varchar(100) NOT NULL,
  `barang_aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `barang_nama`, `barang_harga`, `barang_satuan`, `barang_deskripsi`, `barang_gambar`, `barang_aktif`) VALUES
('P001', 'Lumpia Ikan', 23000, 'Pack', '<p><b>Lumpia ikan</b> dibuat khusus dari ikan-ikan pilihan dengan tingkat proses yang higienis tanpa bahan pengawet dan cocok untuk dikonsumsi semua kalangan. Cocok dijadikan kudapan atau untuk acara-acara kantor, dll.</p>\r\n\r\n<b>Bahan :</b><ul>\r\n<li>Ikan Kakap dan Nila</li>\r\n<li>Tapioca</li>\r\n<li>Tepung Roti</li>\r\n<li>Bumbu</li>\r\n<li>Kulit Lumpia</li>\r\n</ul>\r\n<strong>Berat : 500 gr</strong>', 'lumpia_ikan.jpg', 1),
('P002', 'Hakkau Torani', 45000, 'Pack', '<p><b>Hakkau Torani (dimsum)</b> merupakan produk dimsum kami yang terbaru dan cocok untuk tambahan kukusan dimsum anda, tanpa bahan pengawet dan cocok untuk dikonsumsi semua kalangan. Mengandung omega 3 yang tinggi cocok untuk kesehatan tubuh dan tumbuh kembang anak.\r\n</p>\r\n<b>Bahan :</b><ul>\r\n<li>Udang</li>\r\n<li>Tepung tianmin</li>\r\n<li>Surimi</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Isi : 18 pcs/pack</strong>', 'hakkau.jpg', 1),
('P003', 'Fish Stick Torani', 23000, 'Pack', '<p><b>Fish Stick Torani</b> dibuat  dari ikan pilihan yang membuat citarasa yang lezat, tanpa bahan pengawet dan cocok untuk dikonsumsi semua kalangan. Mengandung omega 3 yang tinggi cocok untuk kesehatan tubuh dan tumbuh kembang anak.</p>\r\n<b>Bahan :</b><ul>\r\n<li>Ikan Tenggiri dan nila</li>\r\n<li>Tapioca</li>\r\n<li>Surimi</li>\r\n<li>Sagu</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Isi : 10 pcs/bungkus</strong>', 'fish_stick.jpg', 1),
('P008', 'Breaded Udang', 28000, 'Tray', '<p><b>Breaded udang</b> dibuat dari udang pilihan dengan diselimuti oleh tepung roti berkualitas tinggi, tanpa bahan pengawet sehingga aman bagi konsumen. Cocok untuk hidangan cemilan maupun utama</p>\r\n<b>Bahan :</b><ul>\r\n<li>Udang Segar</li>\r\n<li>Tepung Roti</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Isi : 10 pcs/tray</strong>', 'breaded_udang.jpg', 1),
('P004', 'Baso Tahu Salmon', 20000, 'Pack', '<p><b>Baso tahu salmon Torani</b> dibuat khusus dari ikan salmon yang menambah citarasa salmon yang lezat, tanpa bahan pengawet dan cocok untuk dikonsumsi semua kalangan. Mengandung omega 3 yang tinggi cocok untuk kesehatan tubuh dan tumbuh kembang anak.\r\n</p>\r\n<b>Bahan :</b><ul>\r\n<li>Ikan Salmon</li>\r\n<li>Surimi</li>\r\n<li>Tapioca</li>\r\n<li>Wortel</li>\r\n<li>Tahu Putih</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Isi : 10 pcs/Pack</strong>', 'baso_tahu_ikan_salmon.jpg', 1),
('P005', 'Baso Ikan Super', 23000, 'Gram', '<p><b>Baso Ikan Super</b> dibuat dari bahan bahan pilihan dan tingkat higienis yang tinggi, tanpa bahan pengawet sehingga aman bagi konsumen. Bahan-bahan tersebut adalah sebagai berikut.</p>\r\n<b>bahan :</b><ul>\r\n<li>Ikan Marlin</li>\r\n<li>Surimi</li>\r\n<li>Tapioca</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Berat : 440 gr</strong>', 'baso_super.jpg', 1),
('P006', 'Baso Ikan Salmon', 22000, 'Gram', '<p><b>Baso Ikan Salmon</b> dibuat khusus dari ikan salmon dengan tingkat higienis yang tinggi, tanpa bahan pengawet sehingga aman bagi konsumen. Bahan-bahan tersebut adalah sebagai berikut.</p>\r\n<b>Bahan :</b><ul>\r\n<li>Ikan Salmon</li>\r\n<li>Surimi</li>\r\n<li>Tapioca</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Berat : 440 gr</strong>', 'baso_salmon.jpg', 0),
('P007', 'Baso Tahu Ikan', 18000, 'Gram', '<p><b>Baso tahu ikan Torani</b> dibuat dari bahan ikan-ikan pilihan yang menambah citarasa ikan yang kuat, tanpa bahan pengawet dan cocok untuk dikonsumsi semua kalangan. Cocok dijadikan kudapan atau untuk acara-acara kantor, dll.</p>\r\n\r\n<b>Bahan :</b><ul>\r\n<li>Ikan Lemadang dan Nila</li>\r\n<li>Surimi</li>\r\n<li>Tapioca</li>\r\n<li>Wortel</li>\r\n<li>Tahu Kulit</li>\r\n<li>Bumbu</li>\r\n</ul>\r\n<strong>Isi : 10pcs/bungkus</strong>', 'bakso_tahu_ikan.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
