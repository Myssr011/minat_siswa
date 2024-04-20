-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 01:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minat_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `kelas`) VALUES
(1, '4A'),
(2, '4B'),
(3, '4C'),
(4, '4D');

-- --------------------------------------------------------

--
-- Table structure for table `minat_bakat`
--

CREATE TABLE `minat_bakat` (
  `idminatbakat` int(11) NOT NULL,
  `persen` int(11) NOT NULL,
  `hasil` text NOT NULL,
  `cca` text NOT NULL,
  `waktu` datetime NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `minat_bakat`
--

INSERT INTO `minat_bakat` (`idminatbakat`, `persen`, `hasil`, `cca`, `waktu`, `nis`) VALUES
(8, 75, 'Kecerdasan Intrapersonal', 'English Club, Design graphics, ICT Club', '2022-01-15 08:34:28', 123);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `idkelas` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_lengkap`, `jenis_kelamin`, `idkelas`, `username`, `password`) VALUES
(123, 'mochi sigma', 'L', 1, 'sigma', 'sigma');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `idsoal` int(11) NOT NULL,
  `nomor` int(11) NOT NULL,
  `soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`idsoal`, `nomor`, `soal`) VALUES
(33, 1, 'Saya sangat suka bekerja dengan objek.'),
(34, 2, 'Saya dapat dengan mudah mengenali arah.'),
(35, 3, 'Saya punya kemampuan untuk membantu menyelesaikan perselisihan di antara kawan saya.'),
(36, 4, 'Saya dapat dengan mudah mengingat kata / lirik yang ada dalam sebuah lagu.'),
(37, 5, 'Saya dapat menjelaskan topik yang rumit menjadi sesuatu yang sederhana dan mudah dimengerti.'),
(38, 6, 'Saya selalu mengerjakan sesuatu selangkah demi selangkah.'),
(39, 7, 'Saya mengenali diri saya dengan baik dan mengerti perilaku saya.'),
(40, 8, 'Saya menyenangi kegiatan yang melibatkan banyak orang.'),
(41, 9, 'Saya mudah belajar dengan cara mendengarkan ceramah dan diskusi.'),
(42, 10, 'Saya merasakan perubahan mood saat mendengarkan musik.'),
(43, 11, 'Saya menikmati puzzle, TTS, dan persoalan yang melibatkan logika.'),
(44, 12, 'Saat belajar, grafik, gambar, diagram, flowchart penting bagi saya.'),
(45, 13, 'Saya peka terhadap mood dan perasaan orang di sekitar saya.'),
(46, 14, 'Saya belajar lebih maksimal bila saya dapat bergerak dan mengerjakannya sendiri.'),
(47, 15, 'Saya memelihara atau menyukai hewan atau tanaman.'),
(48, 16, 'Saya harus melihat manfaat yang bisa saya dapatkan sebelum saya memulai mempelajari sesuatu.'),
(49, 17, 'Saya membutuhkan privasi dan ketenangan saat bekerja dan berpikir.'),
(50, 18, 'Saat mendengarkan musik, saya tahu alat musik apa saja yang digunakan.'),
(51, 19, 'Saya dapat dengan mudah mengingat dan melihat kembali kejadian yang pernah saya alami.'),
(52, 20, 'Saya suka dan tertarik dengan topik yang berhubungan dengan lingkungan.'),
(53, 21, 'Saya mempunyai perbendaharaan kata yang luas dan dapat mengungkapkan diri dengan baik dengan menggunakan kata-kata tersebut.'),
(54, 22, 'Saya suka mencatat.'),
(55, 23, 'Saya memiliki keseimbangan tubuh yang baik dan menikmati kegiatan fisik.'),
(56, 24, 'Saya mengerti pola dan hubungan yang terdapat dalam sebuah pengalaman atau kejadian.'),
(57, 25, 'Saya mampu bekerja sama dalam suatu kelompok.'),
(58, 26, 'Saya mengerti cara kerja tubuh dan memperhatikan kesehatan saya.'),
(59, 27, 'Saya tanggap dan jeli, sering kali melihat sesuatu yang terlewatkan oleh orang lain.'),
(60, 28, 'Saya mudah gelisah (mis: karena harus duduk diam dalam waktu yang lama).'),
(61, 29, 'Saya suka bekerja atau belajar sendiri (tidak perlu ditemani orang lain).'),
(62, 30, 'Saya suka musik atau membuat lagu.'),
(63, 31, 'Saya suka bekerja dengan angka dan memecahkan soal matematika.'),
(64, 32, 'Saya bisa membaca arah perubahan cuaca berdasarkan kondisi alam.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `role` enum('admin','wali-kelas','kepala-sekolah','') NOT NULL,
  `idkelas` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idadmin`, `username`, `password`, `nama_lengkap`, `email`, `no_hp`, `role`, `idkelas`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin123@gmail.com', '0813131313', 'admin', 0),
(4, 'walikelas4a', 'walikelas4a', 'wali kelas 4 A', 'wali@gmail.com', '87126371', 'wali-kelas', 1),
(5, 'kepsek', 'kepsek', 'kepala sekolah', 'kepsek@gmail.com', '012738163', 'kepala-sekolah', 0),
(8, 'walikelas4b', 'walikelas4b', 'Bu Wali kelas 4 B', 'walikelas4b@gmail.com', '082238478374', 'wali-kelas', 2),
(9, 'walikelas4c', 'walikelas4c', 'Bu Wali kelas 4 C', 'walikelas4c@gmail.com', '082238478374', 'wali-kelas', 3),
(10, 'walikelas4d', 'walikelas4d', 'Bu Wali kelas 4 D', 'walikelas4d@gmail.com', '082238478374', 'wali-kelas', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`idminatbakat`),
  ADD KEY `fk_minat_bakat_siswa_idx` (`nis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idadmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `idminatbakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD CONSTRAINT `fk_minat_bakat_siswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
