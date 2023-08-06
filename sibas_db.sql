-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 07:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibas_db`
--
CREATE DATABASE IF NOT EXISTS `sibas_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sibas_db`;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_kk` int(11) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_kepala_kk` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_kk`, `no_kk`, `nama_kepala_kk`, `jumlah_tanggungan`) VALUES
(15, '3201022203060007', 'Opi', 1),
(16, '3201022712050009', 'H. Agun', 1),
(17, '3201022712050010', 'Misan', 2),
(18, '3201022510020001', 'Hj. Namah', 2),
(19, '3201022606030003', 'Udin', 3),
(20, '3201022607100001', 'Kasna', 1),
(21, '3201022610090009', 'Jaya', 1),
(22, '3201022905090001', 'Suhana', 0),
(23, '3201020804130003', 'Nurhasanah', 0),
(24, '320102090420038', 'Ahmad', 1),
(25, '3201020812110021', 'Atikah', 1),
(26, '3201020812050010', 'Jaelani', 2),
(27, '320102061210018', 'Hj. Namah (2)', 0),
(28, '3201020806050004', 'Empi', 1),
(29, '3201020806090001', 'Sidik', 3),
(30, '3201020808070000', 'Adang', 3),
(31, '3201020411090003', 'Aang Kurniawan', 0),
(32, '3201020407090004', 'Saroh', 0),
(33, '3201020402110009', 'Siti Kholifah', 0),
(34, '3201020105090006', 'Dadang', 1),
(35, '3201020501080001', 'Suherman Bin Taslim', 2),
(36, '3201020502080011', 'Ading', 1),
(37, '3201020505040002', 'Sutrisno', 1),
(38, '3201020505070005', 'Pirdaus', 4),
(39, '3201022703080009', 'Aming Amit', 1),
(40, '3201020602120019', 'Aryadi', 6),
(41, '3201102060904001', 'Neddy', 1),
(42, '3201020702130030', 'Kusnawati', 5),
(43, '3201020608131018', 'Muhamad Asuri', 2),
(44, '3201020605030004', 'Didi Permadi', 1),
(45, '3021020506131012', 'Aris Saputra', 1),
(46, '320102050970001', 'Supriadi', 1),
(47, '3201020509020002', 'Uki Saripudin', 0),
(48, '3021020511120004', 'Aang', 0),
(49, '3201020509131041', 'Azis', 2),
(50, '3201020510060002', 'Kosim', 1),
(51, '3201020601030006', 'Undi', 1),
(52, '3201020912131003', 'Erosita', 0),
(53, '3201020712040003', 'Yuni Yanto', 4),
(54, '3201020802080001', 'Ace', 1),
(55, '320102070704004', 'Sartoni', 0),
(56, '3201020707110011', 'Hermanto', 1),
(57, '3201020805630003', 'Deded Junaedi', 1),
(58, '3201020806120018', 'Usman', 3),
(59, '3201020807040003', 'Wardi Itoh', 2),
(60, '3201020808050002', 'Nana Suryana', 2),
(61, '320102080870001', 'Susisno', 2),
(62, '3201022603070002', 'Chaerudin', 3),
(63, '3201022303100001', 'Choerudin', 2),
(64, '3201022804090012', 'Sahudin', 2),
(65, '3201022809120018', 'Amin Hamsah Lubis', 3),
(66, '3201022810050006', 'Mahpudin', 2),
(67, '3201022812100030', 'Acep Amiludin', 2),
(68, '3201022903080002', 'Kesni', 1),
(69, '3201022404080013', 'Nani Sumarni', 1),
(70, '320102102060004', 'Rohman', 2),
(71, '3201022709050005', 'Mista Agustian', 2),
(72, '3201022706090001', 'Yadi', 1),
(73, '320102270409003', 'Isab Asna', 1),
(74, '3201020911070003', 'Nurdin', 3),
(75, '3201020908120003', 'Fikih', 2),
(76, '3201020905060005', 'Sidik (2)', 3),
(77, '3201020904120042', 'Anwar Faisal', 3),
(78, '3201020901080005', 'Hendra', 2),
(79, '3201020705080006', 'Nein Bin Sain', 1),
(80, '3201020708120016', 'Dendi Junaedi', 2),
(81, '3201020501070047', 'Pepen', 2),
(82, '3201020410070034', 'Sanudin', 3),
(83, '3201020410050006', 'Mulya Wardana', 3),
(84, '3201020408110013', 'Jumaedi', 2),
(85, '3201020404030002', 'Hindun', 1),
(86, '3201020312080006', 'Ugih', 3),
(87, '320102031009002', 'Kuat Santoso', 3),
(88, '3201020310020008', 'Acep Bahtiar', 0),
(89, '3201020307131010', 'Aprizal Malik', 2),
(90, '3201020303060005', 'Aceng Kurnia', 0),
(91, '3201020212080005', 'Eti Heryani', 3),
(92, '3201020212030002', 'Uki Mulyadi', 1),
(93, '3201020210090002', 'Acep Saepudin', 2),
(94, '3201022001900010', 'Riki Yanuar Anugerah', 1),
(95, '320102020909006', 'Nesih', 1),
(96, '3201020209090004', 'Tana', 1),
(97, '3201020208040001', 'Encum', 2),
(98, '3201020207070002', 'Idris', 1),
(99, '3201020206080009', 'Edi Sutarya', 4),
(100, '3201020205120030', 'Okay', 2),
(101, '3201020110120048', 'Isak', 3),
(102, '3201020108070010', 'Muehtar Miad', 3),
(103, '3201020509070007', 'Imran Syaripudin', 4),
(104, '3201020601040006', 'Taruna', 2),
(105, '3201020601090007', 'Hani Handayani', 1),
(106, '3201021011090005', 'Marjuki', 4),
(107, '3201021007120058', 'Acep Suro', 1),
(108, '320020703020001', 'Mintra', 2),
(109, '3201020710050006', 'Muhamad Kurdi', 3),
(110, '3201020801040008', 'Wagiman A.H', 1),
(112, '3201020802120012', 'Tati Siarti', 1),
(113, '3201020508080004', 'Rudi', 2),
(114, '3201020510120044', 'Eli', 0),
(115, '3201020801090002', 'Ahmad Bin Isa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_periode`, `nama_kriteria`) VALUES
(11, 5, 'Pendidikan'),
(12, 5, 'Pekerjaan'),
(13, 5, 'Pengeluaran'),
(14, 5, 'Pendidikan'),
(15, 5, 'Pekerjaan'),
(16, 5, 'Penghasilan'),
(17, 5, 'Pendidikan'),
(18, 5, 'Pekerjaan'),
(19, 5, 'Jumlah Tanggungan');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL COMMENT 'L= Laki\r\nP = Perempuan',
  `tempat_lahir` varchar(20) NOT NULL COMMENT '   ',
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `penghasilan` varchar(7) NOT NULL,
  `pengeluaran` varchar(7) NOT NULL,
  `sumber_air` varchar(21) NOT NULL,
  `status_kawin` varchar(11) NOT NULL,
  `status_rumah` varchar(24) NOT NULL,
  `daya_listrik` varchar(18) NOT NULL,
  `transportasi` varchar(40) NOT NULL,
  `is_kepala_keluarga` char(1) NOT NULL COMMENT '0="bukan kepala keluarga" ;\r\n1="kepala keluarga"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `id_kk`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `penghasilan`, `pengeluaran`, `sumber_air`, `status_kawin`, `status_rumah`, `daya_listrik`, `transportasi`, `is_kepala_keluarga`) VALUES
(17, 15, '3201020204610002', 'Opi', 'L', 'Bogor', '1961-04-02', 'Islam', 'SD', 'Buruh Tani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(18, 15, '3201024507620004', 'Manah', 'P', 'Bogor', '1962-07-05', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(19, 16, '3201021506500006', 'H. Agun', 'L', 'Bogor', '1950-06-15', 'Islam', 'SD', 'Petani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(20, 16, '3201025606610001', 'Hj. Amah', 'P', 'Bogor', '1961-06-16', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(21, 17, '3201020709720004', 'Misan', 'L', 'Bogor', '1972-09-07', 'Islam', 'SD', 'Petani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(22, 17, '3201025507750009', 'Enih', 'P', 'Bogor', '1975-07-15', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(23, 17, '3201020403040003', 'Ahmad', 'L', 'Bogor', '2004-03-01', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(26, 19, '3201021506580008', 'Udin', 'L', 'Bogor', '1958-06-15', 'Islam', 'SD', 'Petani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(27, 19, '3201024804560005', 'Lilis', 'P', 'Bogor', '1966-04-08', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(28, 19, '3201022006960002', 'Rizwan', 'L', 'Bogor', '1996-06-20', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(29, 19, '3201021610010003', 'Rizki', 'L', 'Bogor', '2001-10-16', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(30, 20, '3201020310840009', 'Kasna', 'L', 'Bogor', '1984-10-03', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(31, 18, '3201025403450001', 'Hj. Namah', 'P', 'Bogor', '1946-03-14', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(32, 18, '3201025506870001', 'Siti Aisyah', 'P', 'Bogor', '1987-06-15', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(33, 20, '3201024402880001', 'Iyoh', 'P', 'Bogor', '1988-02-04', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(34, 21, '320102040788005', 'Jaya', 'L', 'Bogor', '1988-07-04', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(35, 21, '3201025806890008', 'Ami Sumiati', 'P', 'Bogor', '1989-06-18', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(36, 22, '3201025204500004', 'Suhana', 'P', 'Bogor', '1950-04-12', 'Islam', 'SD', 'Petani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik Menumpang', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(37, 23, '3201026512900011', 'Nurhasanah', 'P', 'Bogor', '1990-12-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(38, 24, '3201022812280001', 'Ahmad', 'L', 'Bogor', '1928-12-28', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(39, 24, '3201024506420003', 'St. Mariam', 'P', 'Bogor', '1942-06-05', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(40, 25, '3201024703720001', 'Atikah', 'P', 'Bogor', '1972-07-03', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(41, 25, '3201025610000001', 'Yustika', 'P', 'Bogor', '1990-10-16', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(42, 26, '320102090480003', 'Jaelani', 'L', 'Bogor', '1984-04-09', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(43, 26, '3201025212850007', 'Lina', 'P', 'Bogor', '1985-12-12', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(44, 26, '3201025801040004', 'Sintia', 'P', 'Bogor', '2004-01-18', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(45, 18, '3201025908510001', 'Hj. Namah', 'P', 'Bogor', '1951-08-19', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(46, 27, '3201021410050007', 'Ivan Ramadhan', 'L', 'Bogor', '2005-10-14', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(48, 28, '3201024101350001', 'Iya', 'P', 'Bogor', '1935-01-01', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Menumpang', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(49, 28, '3201021305670001', 'Empi', 'L', 'Bogor', '1967-05-13', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Menumpang', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(50, 29, '320121506660017', 'Sidik', 'L', 'Bogor', '1966-06-15', 'Islam', 'SMP', 'Buruh', '500K-2J', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(51, 29, '3201024409720004', 'Oom', 'P', 'Bogor', '1972-09-04', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(52, 29, '3201024400791000', 'Fenih. S', 'P', 'Bogor', '1991-07-04', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(53, 29, '32010210020010', 'Samsul Pajrin', 'L', 'Bogor', '2002-02-10', 'Islam', 'S1/S2/S3', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(54, 30, '3201023101800004', 'Adang', 'L', 'Bogor', '1980-01-31', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(55, 30, '3201024411800006', 'Tuti Yulita', 'P', 'Cianjur', '1980-11-04', 'Islam', 'SMA/SMK', 'IRT', '<500K', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(56, 30, '3201024603030004', 'Alfina', 'P', 'Bogor', '2003-03-06', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Janda', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(57, 30, '3201026812120002', 'Alsyakila', 'P', 'Bogor', '2012-12-28', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(58, 31, '3201020205890009', 'Aang Kurniawan', 'L', 'Jakarta', '1989-05-02', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(59, 32, '320102610557001', 'Saroh', 'P', 'Bogor', '1957-05-21', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(60, 33, '3201024604870008', 'Siti Kholifah', 'P', 'Purwodadi', '1987-09-06', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Janda', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(61, 34, '3201020412570002', 'Dadang', 'L', 'Bandung', '1957-12-04', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(62, 34, '3201024402610002', 'Warisah', 'P', 'Bandung', '1961-02-04', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(63, 35, '3201021704790010', 'Suherman Bin Taslim', 'L', 'Bekasi', '1979-04-17', 'Islam', 'SMA/SMK', 'Wiraswasta', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(64, 35, '3201025612830003', 'Sri Hartina', 'P', 'Baturaja', '1983-12-16', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(65, 35, '3201022410050017', 'M. Ilham Ashiel', 'L', 'Bogor', '2005-10-24', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(66, 36, '3201021506500017', 'Ading', 'L', 'Bogor', '1950-06-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(67, 36, '3201024607570006', 'Empat', 'P', 'Bogor', '1957-07-06', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(68, 37, '3201022303730003', 'Sutrisno', 'L', 'Bogor', '1987-07-04', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(69, 38, '3201022508590003', 'Pirdaus', 'L', 'Bogor', '1959-08-25', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(70, 37, '3201026911830002', 'Neng Hasanah', 'P', 'Bogor', '1990-02-13', 'Islam', 'SMP', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(71, 38, '3201025806640005', 'Patimah', 'P', 'Bogor', '1964-06-18', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(72, 38, '3201020905870009', 'Junaedi', 'L', 'Bogor', '1987-09-09', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Tetangga', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(73, 38, '3201025304880008', 'Lindawati', 'P', 'Bogor', '1988-04-13', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Tetangga', 'Kawin', 'Kontrak', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(74, 38, '3201021209970008', 'Budi Irma', 'L', 'Bogor', '1997-09-12', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Tetangga', 'Kawin', 'Kontrak', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(75, 39, '3201020309520002', 'Aming Amit', 'L', 'Bogor', '1952-03-09', 'Islam', 'SD', 'Petani', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(76, 39, '3201025802580002', 'Iyos', 'P', 'Bogor', '1958-02-18', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(77, 40, '3201022408690005', 'Aryadi', 'L', 'Magelang', '1969-08-24', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(78, 40, '3201024396680010', 'Masyanah', 'P', 'Margodadi', '1968-06-03', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(79, 40, '3201026201850005', 'Fina Maryana', 'L', 'Argopeni', '1985-02-22', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(80, 40, '3201020312860014', 'Debiyanto', 'L', 'Sumberejo', '1986-12-03', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(81, 40, '320102121200021', 'Ikhsan Darmawan', 'L', 'Bogor', '2000-12-12', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(82, 40, '3201022412920008', 'Aris Ismawan', 'L', 'Brebes', '1992-12-24', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(83, 40, '3201021505040009', 'Rizky Gustiawan', 'L', 'Bogor', '2004-05-15', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(84, 41, '3201021103630001', 'Neddy', 'L', 'Jakarta', '1963-03-11', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(85, 41, '3201025506700031', 'Titi', 'P', 'Bogor', '1970-06-15', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(86, 42, '3201024607580004', 'Kusnawati', 'L', 'Bogor', '1958-07-06', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(87, 42, '3201025312870004', 'St. Maemunah', 'P', 'Bogor', '1987-12-13', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(88, 42, '3201025810890006', 'St. Mardiah', 'P', 'Bogor', '1989-10-18', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(89, 42, '3201020509920008', 'M. Furkon', 'L', 'Bogor', '1992-09-05', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(90, 42, '3201024708940010', 'St. Komariah', 'P', 'Bogor', '1994-08-07', 'Islam', 'SMA/SMK', 'IRT', '<500K', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(91, 42, '3201024303970011', 'St. Masamah', 'P', 'Bogor', '1997-03-03', 'Islam', 'SMA/SMK', 'IRT', '<500K', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(92, 43, '3201022403840010', 'Muhamad Asuri', 'L', 'Bogor', '1984-03-24', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(93, 43, '320102410892006', 'Hasanah', 'P', 'Bogor', '1992-08-01', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(94, 43, '3201021805121001', 'M. Haikal Alfian', 'L', 'Bogor', '2012-05-18', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(95, 44, '3201021202770002', 'Didi Permadi', 'L', 'Bogor', '1977-02-12', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(97, 44, '3201024403760002', 'Prah', 'P', 'Bogor', '1976-03-04', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(98, 45, '3201022605910007', 'Aris Saputra', 'L', 'Bogor', '1991-05-26', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(99, 45, '3201025806910001', 'Nurjanah', 'P', 'Bogor', '1991-06-18', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(100, 113, '3201020405820022', 'Rudi', 'L', 'Bogor', '1982-05-04', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(101, 113, '3201025506840018', 'Mimin', 'P', 'Bogor', '1984-06-15', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(102, 113, '3201022605050004', 'Rahmadani', 'P', 'Bogor', '2005-05-26', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(103, 46, '3201020308800010', 'Supriadi', 'L', 'Bogor', '1980-08-03', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(104, 46, '3201024508860008', 'Mutmainah', 'P', 'Sukabumi', '1986-08-05', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(105, 47, '320102040660001', 'Uki Saripudin', 'L', 'Bogor', '1960-06-04', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(106, 48, '3201022403810010', 'Aang', 'L', 'Sumedang', '1981-03-24', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Tetangga', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(107, 49, '3201022004870006', 'Azis', 'L', 'Bogor', '1987-04-24', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(108, 49, '3201025203850002', 'Maryati', 'P', 'Bogor', '1985-03-12', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(109, 49, '3201022908131001', 'Ahmad Syahroni', 'L', 'Bogor', '2013-08-29', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(110, 50, '3201022304820006', 'Kosim', 'L', 'Bogor', '1982-04-24', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(111, 50, '3201024303800009', 'Komariah', 'P', 'Bogor', '1980-03-03', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(112, 114, '320102490788007', 'Eli', 'P', 'Bogor', '1988-07-09', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(113, 51, '3201021501590002', 'Undi', 'L', 'Bogor', '1959-01-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(114, 51, '3201025206650001', 'Rohani', 'P', 'Bogor', '1965-06-12', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(115, 52, '3201024712740001', 'Erosita', 'P', 'Bogor', '1974-12-07', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(116, 53, '3201020106680002', 'Yuni Yanto', 'L', 'Jakarta', '1966-06-01', 'Islam', 'SMP', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(117, 53, '3201025305710003', 'Heni Susilowati', 'P', 'Pekalongan', '1971-05-13', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(118, 53, '3201021607960001', 'Fikri H', 'L', 'Jakarta', '1996-07-16', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(119, 53, '320102081200004', 'Firli', 'P', 'Jakarta', '1980-12-08', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(120, 53, '320102300540003', 'Fito', 'L', 'Jakarta', '2004-05-30', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(121, 54, '3201021707670006', 'Ace', 'L', 'Bogor', '1967-07-17', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(122, 54, '3201024805700005', 'Penah', 'P', 'Bogor', '1970-05-08', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(123, 55, '3201021805820003', 'Sartoni', 'L', 'Pademaran', '1982-05-18', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(124, 56, '3201020807790009', 'Hermanto', 'L', 'Brebes', '1979-07-08', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(125, 56, '3201024811800001', 'Nurani', 'P', 'Jakarta', '1980-11-08', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(126, 57, '3201021908690002', 'Deded Junaedi', 'L', 'Bogor', '1969-08-19', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(127, 57, '3201025401770002', 'Ade Aslinah', 'P', 'Karawang', '1977-01-14', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(128, 58, '3201021004850011', 'Usman', 'L', 'Bogor', '1985-04-10', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(129, 58, '3201026705870015', 'St. Aisah Binti Sarip', 'P', 'Cianjur', '1987-05-27', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(130, 58, '3201022706100004', 'Muhamad Hasan Al Pajar', 'L', 'Cianjur', '2010-06-27', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(131, 58, '320102681013001', 'Oktavyani Putri Rahayu', 'P', 'Bogor', '2013-10-28', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(132, 59, '3201021103730003', 'Wardi Itoh', 'L', 'Bogor', '1973-03-10', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(133, 59, '3201024406810005', 'Imih', 'P', 'Bogor', '1981-06-04', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(134, 59, '3201020308990001', 'Junaedi', 'L', 'Bogor', '1999-08-03', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(135, 61, '3201020703780009', 'Susisno', 'L', 'Cirebon', '1978-03-07', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(136, 61, '3201025904840009', 'Masri', 'P', 'Bogor', '1984-04-19', 'Islam', 'SD', 'IRT', '<500K', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(137, 61, '3201024302070004', 'Nabil Zaidah Zidna F', 'P', 'Bogor', '2007-02-03', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(138, 62, '320102070960004', 'Chaerudin', 'L', 'Bogor', '1976-09-07', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(139, 62, '3201026508790010', 'Aan Dakwati', 'P', 'Bogor', '1979-08-25', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(140, 62, '3201027112030002', 'Nabilla Chorunisa', 'P', 'Bogor', '2003-12-31', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(141, 62, '3201024802060004', 'Labibatul Zahra', 'P', 'Bogor', '2006-02-08', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(142, 63, '3201021005760010', 'Choerudin', 'L', 'Bogor', '1978-05-10', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(143, 63, '3201025010840014', 'Mulyanah', 'P', 'Bogor', '1989-10-10', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(144, 63, '3201021309090005', 'Charil Mulya R', 'L', 'Bogor', '2009-09-13', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(145, 64, '3201023101700007', 'Sahudin', 'L', 'Garut', '1970-01-31', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(146, 64, '3201025202790016', 'Siti Aisyah', 'P', 'Bogor', '1979-02-12', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(147, 64, '320102309050005', 'M. Aldi Nur Padilah', 'L', 'Bogor', '2005-09-03', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(148, 65, '3201021912680009', 'Amin Hamsah Lubis', 'L', 'Medan', '1968-12-14', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(149, 65, '3201025107750001', 'Juju Junaeni', 'P', 'Kuningan', '1975-07-11', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(150, 65, '3201024103980001', 'Sri Nurhayati', 'P', 'Kuningan', '1998-03-01', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(151, 65, '320102630400002', 'Virawati Lubis', 'P', 'Kuningan', '2000-04-23', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(152, 66, '3201020411730004', 'Mahpudin', 'L', 'Bogor', '1973-11-04', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(153, 66, '3201026311178000', 'Sunarsih', 'P', 'Bogor', '1978-11-23', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(154, 66, '3201024805000001', 'Alfani Damayanti', 'P', 'Bogor', '2000-05-08', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(155, 67, '3201020907830007', 'Acep Amiludin', 'L', 'Bogor', '1983-07-09', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(156, 67, '3201025205920008', 'Eneng Salma', 'P', 'Bogor', '1992-05-12', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(157, 67, '3201022008100003', 'Fikal Geofa Ramadhan', 'L', 'Bogor', '2010-08-20', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(158, 68, '3201025107700011', 'Kesni', 'P', 'Bogor', '1970-07-11', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(159, 68, '3201025502840007', 'Meti', 'P', 'Bogor', '1984-12-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(160, 69, '3201025604740011', 'Nani Sumarni', 'P', 'Bogor', '1974-04-16', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Tetangga', 'Janda', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(161, 69, '3201021812050004', 'Deri Sunarman', 'L', 'Bogor', '2005-12-18', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Tetangga', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(162, 70, '3201020607720005', 'Rohman', 'L', 'Bogor', '1972-07-06', 'Islam', 'SD', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(163, 70, '3201021908970002', 'Muhamad Kamaludin', 'L', 'Bogor', '1997-08-19', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(164, 70, '3201021609060009', 'Ahmad Gozali', 'L', 'Bogor', '2006-09-16', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(165, 71, '3201021104770004', 'Mista Agustian', 'L', 'Bogor', '1977-04-11', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(166, 71, '3201024402790003', 'Aan Nurhasanah', 'P', 'Bogor', '1979-02-04', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(167, 71, '3201024603930001', 'Wariani Nurhayati', 'P', 'Bogor', '1998-03-06', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(168, 72, '3201021603810009', 'Yadi', 'L', 'Bogor', '1981-03-16', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Duda', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(169, 72, '3201020502090005', 'Vidi Aldiano', 'L', 'Bogor', '2009-02-05', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(170, 73, '3201025501640015', 'Isab Asna', 'P', 'Bogor', '1964-01-15', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(171, 73, '320102501080006', 'M. Ludfi Januar', 'L', 'Bogor', '2008-01-05', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(172, 74, '3201021909740007', 'Nurdin', 'L', 'Bogor', '1974-09-19', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(173, 74, '3201024206780001', 'Maryanah', 'P', 'Bogor', '1978-06-02', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(174, 74, '3201022409950005', 'Igo Septian', 'L', 'Bogor', '1995-09-24', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(175, 74, '3201026504070003', 'Bunga Salsabila', 'P', 'Bogor', '2007-04-25', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(176, 75, '3201021006880001', 'Fikih', 'L', 'Bogor', '1988-06-10', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(177, 75, '3201024501900002', 'St. Aminah', 'P', 'Bogor', '1990-01-05', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(178, 75, '3201024907120001', 'Fiqha S', 'P', 'Bogor', '2012-01-09', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(179, 76, '3201022211780004', 'Sidik', 'L', 'Bogor', '1978-11-22', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(180, 76, '3201024406860006', 'St. Rusminah', 'P', 'Bogor', '1986-06-04', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(181, 76, '3201025201040006', 'Sindi', 'L', 'Bogor', '2004-01-12', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(182, 76, '3201024903100004', 'Sani Nurmaulida', 'L', 'Bogor', '2010-07-09', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(183, 77, '3201020401860006', 'Anwar Faisal', 'L', 'Garut', '1986-01-04', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(184, 77, '3201024401850004', 'Yanti Mulyawati', 'P', 'Bogor', '1985-01-04', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(185, 77, '3201026704110002', 'Vriela Aulia Faisal', 'P', 'Bogor', '2011-04-27', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(186, 77, '320102801130007', 'muhamad Azril Faisal', 'L', 'Bogor', '2013-01-28', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(187, 78, '3201020704860007', 'Hendra', 'L', 'Bogor', '1986-04-07', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(188, 78, '3201026410870006', 'Ika Damayanti', 'P', 'Bogor', '1987-10-24', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(189, 78, '3201021809080002', 'Fikry Ramadhan', 'L', 'Bogor', '2008-09-18', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(190, 79, '3201021407640012', 'Nein Bin Sain', 'L', 'Bogor', '1964-07-14', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(191, 79, '3201025508770011', 'Reni', 'P', 'Bogor', '1977-08-15', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(192, 80, '32012300884002', 'Dendi Junaedi', 'L', 'Bogor', '1984-08-30', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(193, 80, '3201026505930004', 'Ani Maryani', 'P', 'Bogor', '1993-05-25', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Janda', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(194, 80, '3201026407120001', 'Andini Yulia M', 'P', 'Bogor', '2012-07-24', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(195, 81, '3201020709740010', 'Pepen', 'L', 'Bogor', '1974-09-07', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(196, 81, '3201024912740004', 'Sopiah', 'P', 'Bogor', '1974-12-09', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(197, 81, '3201025710060002', 'Isabel Anjani', 'P', 'Bogor', '2006-10-17', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(198, 82, '3201021211690010', 'Sanudin', 'L', 'Bogor', '1969-11-12', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(199, 82, '3201025804740009', 'Halimah', 'P', 'Bogor', '1974-04-18', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(200, 82, '3201025204970009', 'Fitri', 'P', 'Bogor', '1996-09-13', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(201, 82, '3201025108070003', 'Ririn Agustin', 'P', 'Bogor', '2007-08-11', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(202, 83, '3201021010750005', 'Mulya Wardana', 'L', 'Lampung', '1975-10-10', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(203, 83, '3201024811750007', 'Marlinawati', 'P', 'Kuningan', '1975-11-08', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(204, 83, '320102112010003', 'Angga', 'L', 'Bogor', '2001-12-01', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(205, 83, '3201020312060010', 'Reski Rohmazir', 'P', 'Bogor', '2006-12-13', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(206, 84, '32010215060031', 'Jumaedi', 'L', 'Bogor', '1976-06-15', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(207, 84, '3201026501840007', 'Ani', 'P', 'Bogor', '1984-01-25', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(208, 84, '3201021804020014', 'Sihabbu Romli', 'L', 'Bogor', '2002-04-18', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(209, 85, '3201025707590001', 'Hindun', 'P', 'Bogor', '1959-07-17', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(210, 85, '3201021107970001', 'Layana', 'L', 'Bogor', '1997-07-11', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(211, 86, '320102070470006', 'Ugih', 'L', 'Bogor', '1970-04-07', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(212, 86, '3201024802730013', 'Utin', 'P', 'Bogor', '1973-02-08', 'Islam', 'SMP', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(213, 86, '3201024109910003', 'Suti Ulfa Herdiyani', 'P', 'Bogor', '1991-09-01', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(214, 86, '320102620299005', 'Sayyidah Alfiani', 'P', 'Bogor', '1999-02-22', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(215, 87, '3201021703730009', 'Kuat Santoso', 'L', 'Purworejo', '1973-03-17', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(216, 87, '3201026002740016', 'Rooliyah', 'P', 'Purworejo', '1979-02-20', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(217, 87, '3201022712010013', 'Dedi Firmansyah', 'L', 'Purworejo', '2001-12-27', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(218, 87, '3201023011080003', 'Rofian Zais', 'L', 'Bogor', '2008-11-30', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(219, 88, '3201020303820001', 'Acep Bahtiar', 'L', 'Bogor', '1982-03-03', 'Islam', 'SMP', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(220, 89, '1806042809890002', 'Aprizal Malik', 'L', 'Bogor', '1983-09-28', 'Islam', 'SMA/SMK', 'Karyawan', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(221, 89, '3201022600388000', 'Santi Maryanti', 'P', 'Bogor', '1988-03-20', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(222, 89, '320102450613001', 'Sidria Saya Clarisa', 'P', 'Bogor', '2013-06-05', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(223, 90, '3201021701880004', 'Aceng Kurnia', 'L', 'Sumedang', '1988-01-17', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Duda', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(224, 91, '3201024401700009', 'Eti Heryani', 'P', 'Bogor', '1970-01-04', 'Islam', 'SMP', 'Wiraswasta', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(225, 91, '3201024407940007', 'Gitu Suci', 'P', 'Bogor', '1994-07-04', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(226, 91, '3201022704980010', 'Ajrin Karim', 'L', 'Bogor', '1998-04-27', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(227, 91, '3201021811000012', 'Washy Suhada', 'L', 'Bogor', '2000-11-18', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(228, 92, '3201021506470001', 'Uki Mulyadi', 'L', 'Bogor', '1947-06-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(229, 92, '3201024106600002', 'Komariah', 'P', 'Bogor', '1960-06-01', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(230, 93, '3201022106800005', 'Acep Saepudin', 'L', 'Bogor', '1980-06-21', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1');
INSERT INTO `penduduk` (`id`, `id_kk`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `penghasilan`, `pengeluaran`, `sumber_air`, `status_kawin`, `status_rumah`, `daya_listrik`, `transportasi`, `is_kepala_keluarga`) VALUES
(231, 93, '3201025008810020', 'Siti', 'P', 'Bogor', '1981-08-10', 'Islam', 'SMP', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(232, 93, '3201025205020008', 'Mila Tania', 'P', 'Bogor', '2002-05-12', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(233, 94, '3201022001900010', 'Riki Yanuar Anugerah', 'L', 'Bogor', '1990-01-20', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(234, 94, '3201025308910002', 'Alin Sumarlin', 'P', 'Bogor', '1991-08-13', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(235, 95, '3201025307600002', 'Nesih', 'P', 'Bogor', '1966-07-13', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(236, 95, '3201020811920009', 'Edi Sunjaya', 'L', 'Bogor', '1992-11-08', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(237, 96, '3201025809580001', 'Tana', 'P', 'Jakarta', '1958-09-18', 'Islam', 'SD', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Janda', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(238, 96, '3201026905940010', 'Surahmawati', 'P', 'Jakarta', '1994-05-29', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(239, 97, '3201022202750001', 'Encum', 'L', 'Bogor', '1975-02-22', 'Islam', 'SMP', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(240, 97, '3201025409980005', 'Rostika', 'P', 'Bogor', '1996-09-14', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(241, 97, '3201022802040004', 'Pero Pebriansyah', 'L', 'Bogor', '2004-02-28', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(242, 98, '3201021807600002', 'Idris', 'L', 'Bogor', '1960-07-18', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(243, 98, '3201025706650007', 'Sunarsih', 'P', 'Bogor', '1965-06-17', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(244, 99, '3201020710700009', 'Edi Sutarya', 'L', 'Bogor', '1970-10-07', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(245, 99, '3201024404730013', 'Puji Setiani', 'P', 'Banyumas', '1973-04-04', 'Islam', 'SMA/SMK', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(246, 99, '3201021712980005', 'Aditya Saputra P', 'L', 'Bogor', '1998-12-17', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(247, 99, '3201028411040004', 'Ilham Ramadan', 'L', 'Bogor', '2004-11-04', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(248, 99, '3201025211070003', 'Alabila Islami Pasha', 'P', 'Bogor', '2007-11-12', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(249, 100, '3201021310780003', 'Okay', 'L', 'Bogor', '1978-10-13', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(250, 100, '3201024604800021', 'Holisoh', 'P', 'Bogor', '1980-04-06', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(251, 100, '3201022209060011', 'Muhamad Haikal S', 'L', 'Bogor', '2005-07-15', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(252, 101, '3201020710675001', 'Isak', 'L', 'Bogor', '1975-06-07', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(253, 101, '3201024309710011', 'Mumun', 'P', 'Bogor', '1971-09-03', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(254, 101, '3201024110970014', 'Siti Aisyah', 'P', 'Bogor', '1997-10-01', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(255, 101, '3201020812990007', 'Idam', 'L', 'Bogor', '1999-12-08', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(256, 102, '3201020806610007', 'Muehtar Miad', 'L', 'Bogor', '1961-06-08', 'Islam', 'SMP', 'Karyawan', '2JT-4JT', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(257, 102, '3201024512720004', 'Eli Supriasih', 'P', 'Bogor', '1972-12-05', 'Islam', 'SD', 'IRT', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(258, 102, '320102451290004', 'Hati', 'P', 'Bogor', '1990-12-05', 'Islam', 'SD', 'Tidak Bekerja', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(259, 102, '3201020308020007', 'Abdul Hasan', 'L', 'Bogor', '2002-08-03', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(260, 103, '3201022308780003', 'Imran Syaripudin', 'L', 'Lampung', '1978-08-23', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(261, 103, '3201027105810002', 'Mira Lidyasar', 'P', 'Jakarta', '1981-05-31', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(262, 103, '3201020401020004', 'Rafli Akfal C F', 'L', 'Jakarta', '2002-01-07', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(263, 103, '3201020212060002', 'Arza Aufal', 'L', 'Jakarta', '2006-12-02', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(264, 103, '3201024903860007', 'Sumarliana', 'P', 'Grobogan', '1986-03-09', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(265, 104, '3201022507760001', 'Taruna', 'L', 'Indramayu', '1976-07-25', 'Islam', 'SMA/SMK', 'Wiraswasta', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(266, 104, '3201026111750002', 'Supri Nodri Utami', 'P', 'Demak', '1975-11-21', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(267, 104, '3201026610100002', 'Husna Faiza Salma Tifani', 'P', 'Bogor', '2010-10-26', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(268, 105, '3201025001890007', 'Hani Handayani', 'P', 'Sumedang', '1989-01-10', 'Islam', 'SMA/SMK', 'Wiraswasta', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Janda', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(269, 105, '3201020806100002', 'Raden Dyhan', 'L', 'Bogor', '2010-06-08', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(270, 106, '3201021701680010', 'Marjuki', 'L', 'Bogor', '1968-01-17', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(271, 106, '3201024303770018', 'Nunung Nur Hasanah', 'P', 'Bogor', '1977-03-03', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(272, 106, '3201025711980005', 'Eka Noviyanti', 'P', 'Bogor', '1998-11-17', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(273, 106, '3201021108040006', 'Rizki Fauzan', 'L', 'Bogor', '2004-08-11', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(274, 106, '3201024803121033', 'Fania Rahmawati', 'P', 'Bogor', '2012-03-08', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(275, 107, '3201020606740007', 'Acep Suro', 'L', 'Bogor', '1974-06-06', 'Islam', 'SMA/SMK', 'Karyawan', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '1'),
(276, 107, '3201025701840004', 'Neneng', 'P', 'Bogor', '1984-01-17', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(277, 108, '3201021506690001', 'Mintra', 'L', 'Bogor', '1969-06-15', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(278, 108, '3201024700772000', 'Komariah', 'P', 'Bogor', '1972-07-07', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(279, 108, '3201026606920001', 'Neni Sumirah', 'P', 'Bogor', '1992-06-26', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(280, 109, '3201022306800004', 'Muhamad Kurdi', 'L', 'Bogor', '1980-06-23', 'Islam', 'SMP', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(281, 109, '3201025007830007', 'Ida Surahman', 'P', 'Bogor', '1983-07-10', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(282, 109, '3201020908050002', 'Ikmal Maulana', 'L', 'Bogor', '2005-08-09', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(283, 109, '3201024911110007', 'Kia Zaljiah', 'P', 'Bogor', '2011-11-09', 'Islam', 'SMP', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(284, 110, '320102039630002', 'Wagiman A.H', 'L', 'Bogor', '1963-09-03', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(285, 110, '3201024102620001', 'Juju Binti Rasip', 'P', 'Bogor', '1962-02-01', 'Islam', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(286, 115, '3201020611660008', 'Ahmad Bin Isa', 'L', 'Bogor', '1966-11-06', 'Islam', 'SD', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(287, 115, '3201024904770007', 'Sartika', 'P', 'Cianjur', '1977-04-09', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(288, 115, '3201021606970006', 'Reza', 'L', 'Bogor', '1997-06-16', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(289, 115, '3201024209055001', 'Anisa', 'P', 'Bogor', '2005-09-02', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(290, 115, '3201026308080002', 'Sarah', 'P', 'Bogor', '2008-08-23', 'Islam', 'SD', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(291, 115, '3201025608880008', 'Neng Sukmawati', 'P', 'Bogor', '1988-08-16', 'Protestan', 'SD', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 900 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(292, 112, '3201024707880012', 'Tati Siarti', 'P', 'Lampung', '1988-07-07', 'Islam', 'SMA/SMK', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Janda', 'Kontrak', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(293, 112, '3201026702090000', 'Intan Dea Utami', 'P', 'Lampung', '2009-02-27', 'Islam', 'SMA/SMK', 'Buruh', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Kontrak', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0'),
(294, 60, '320123008740001', 'Nana Suryana', 'L', 'Kuningan', '1974-08-30', 'Islam', 'SMA/SMK', 'Buruh', '500K-2J', '500K-2J', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '1'),
(295, 60, '3201026003770003', 'Samah', 'P', 'Bogor', '1977-03-20', 'Islam', 'SMP', 'IRT', '<500K', '<500K', 'Sumur Milik Sendiri', 'Kawin', 'Milik Sendiri', 'Listrik 450 Watt', 'Sepeda Motor 1 Buah dalam Kondisi Baik', '0'),
(296, 60, '3201021702010002', 'Kiki Moolana', 'L', 'Bogor', '2001-02-17', 'Islam', 'SMA/SMK', 'Pelajar', '<500K', '<500K', 'Sumur Milik Sendiri', 'Belum Kawin', 'Milik Orang Tua/Warisan', 'Listrik 450 Watt', 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya', '0');

-- --------------------------------------------------------

--
-- Table structure for table `periode_bansos`
--

CREATE TABLE `periode_bansos` (
  `id_periode` int(11) NOT NULL,
  `nama_periode` varchar(30) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `kuota` int(2) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode_bansos`
--

INSERT INTO `periode_bansos` (`id_periode`, `nama_periode`, `tgl_awal`, `tgl_akhir`, `kuota`, `keterangan`) VALUES
(1, 'Program Bansos Pemerintah Q1', '2023-07-01', '2023-07-08', 10, 'Diadakan setiap 3 bulan sekali oleh RT'),
(5, 'Bantuan Janda', '2023-08-05', '2023-08-31', 15, 'Khusus untuk Janda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_kk`),
  ADD UNIQUE KEY `no_kk` (`no_kk`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `periode_bansos`
--
ALTER TABLE `periode_bansos`
  ADD PRIMARY KEY (`id_periode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `periode_bansos`
--
ALTER TABLE `periode_bansos`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
