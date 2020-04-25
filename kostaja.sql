-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 05:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id_kost` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `nama_kost` varchar(32) NOT NULL,
  `jenis_kost` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `deskripsi` varchar(320) NOT NULL,
  `harga_kost` int(11) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `kampus` varchar(32) NOT NULL,
  `foto` varchar(16) NOT NULL,
  `jumlah_kost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id_kost`, `id_pemilik`, `nama_kost`, `jenis_kost`, `status`, `deskripsi`, `harga_kost`, `lokasi`, `kota`, `kampus`, `foto`, `jumlah_kost`) VALUES
(1, 1, 'Griya Mathari', 'putri', 'penuh', 'parkir dalam', 9000000, 'jln anggrek', 'YOGYAKARTA', 'UMY', 'kamar.jpg', 9),
(2, 1, 'GRIYA MUSLIMAH', 'PUTRI', 'Penuh', 'Kamar mandi Dalam', 7000000, 'jln sunan ampel', 'Yogyakarta', 'UGM', 'kamar.jpg', 10),
(3, 1, 'Kos Rajin', 'putra', 'kosong', 'kamar 3x3,AC,Parkir luas', 1000000, 'jl in aja dulu', 'Bandung', 'ITB', 'kamar3.jpg', 8),
(4, 3, 'Kos Putra Jaya', 'putra', 'kosong', 'Kamar 3x3,kamar mandi dalam,parkir luas,lokasi strategis', 8000000, 'jln mu bukan jalanku', 'Malang', 'Brawijaya', 'kamar1.jpg', 5),
(5, 3, 'Kos Salsabila', 'putri', 'kosong', 'kamar 3x3,kamar mandi dalam', 700000, 'jl mangga no 69', 'Surabaya', 'UPN Jawa Timur', 'kamar5.jpg', 20),
(6, 1, 'Kos FTHR', 'putra', 'kosong', 'kamar 4x3,parkir luas,kamar mandi dalam,ada kasur dan lemari', 9000000, 'jl tambakbayan no 5', 'Yogyakarta', 'UPN Yogyakarta', 'kamar4.jpg', 15),
(7, 3, 'Kos Mandiri Abadi', 'putra', 'kosong', 'kos eksklusif,ada kasur dan lemari,meja belajar,kamar mandi dalam,AC', 17000000, 'jl elang no 17', 'Bandung', 'ITB', 'kamar6.jpg', 5),
(8, 2, 'Kos Rosa', 'putri', 'kosong', 'kamar mandi dalam,ada kasur lemari meja', 12000000, 'jl mawar no 14', 'Jakarta', 'Universitas Indonesia', 'kamar13.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(32) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `contact`, `username`, `password`) VALUES
(1, 'Adrian', '081227034973', 'setyawan', '123'),
(2, 'tri', '08982222', 'siwi', '111'),
(3, 'HALUMA', '0815868', 'adelia', '111'),
(4, 'HALUMA', '0815868', 'adelia', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id_kost`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id_kost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `kost_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
