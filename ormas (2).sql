-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2023 at 09:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ormas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_kegiatan`
--

CREATE TABLE `bidang_kegiatan` (
  `id_bidang_kegiatan` int NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bidang_kegiatan`
--

INSERT INTO `bidang_kegiatan` (`id_bidang_kegiatan`, `nama_kegiatan`) VALUES
(1, 'Kesenian'),
(2, 'Sosial'),
(3, 'Keagamaan'),
(4, 'Politik Kebangsaan');

-- --------------------------------------------------------

--
-- Table structure for table `ciri_khusus_kegiatan`
--

CREATE TABLE `ciri_khusus_kegiatan` (
  `id_ciri_khusus` int NOT NULL,
  `ciri_khusus_kegiatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ciri_khusus_kegiatan`
--

INSERT INTO `ciri_khusus_kegiatan` (`id_ciri_khusus`, `ciri_khusus_kegiatan`) VALUES
(1, 'Aktif'),
(2, 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_kepengurusan`
--

CREATE TABLE `data_kepengurusan` (
  `id_kepengurusan` int NOT NULL,
  `nama_ketua` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `id_permohonan` int NOT NULL,
  `id_sekretariat` int NOT NULL,
  `nama_sekretaris` varchar(50) NOT NULL,
  `nama_bendahara` varchar(50) NOT NULL,
  `nik1` int NOT NULL,
  `nik2` int NOT NULL,
  `tanggal_awal1` date DEFAULT NULL,
  `tanggal_akhir1` date DEFAULT NULL,
  `tanggal_awal2` date DEFAULT NULL,
  `tanggal_akhir2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_kepengurusan`
--

INSERT INTO `data_kepengurusan` (`id_kepengurusan`, `nama_ketua`, `nik`, `tanggal_awal`, `tanggal_akhir`, `id_permohonan`, `id_sekretariat`, `nama_sekretaris`, `nama_bendahara`, `nik1`, `nik2`, `tanggal_awal1`, `tanggal_akhir1`, `tanggal_awal2`, `tanggal_akhir2`) VALUES
(6, 'Erik Nofra Rama', '3456', '2023-05-08', '2023-05-01', 9, 8, 'fani apriliani', 'windi aprilia', 12234, 43566, '2023-06-06', '2023-06-29', '2023-06-23', '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `data_ormas`
--

CREATE TABLE `data_ormas` (
  `id_ormas` int NOT NULL,
  `id_jenis_permohonan` int NOT NULL,
  `nama_ormas` varchar(30) NOT NULL,
  `tempat_pendirian` varchar(30) NOT NULL,
  `no_surat_permohonan` varchar(30) NOT NULL,
  `tanggal_surat_permohonan` date NOT NULL,
  `tanggal_pendirian` date NOT NULL,
  `file_scan_surat_permohonan` varchar(255) NOT NULL,
  `no_akta_notaris` varchar(30) NOT NULL,
  `tanggal_akta_notaris` date NOT NULL,
  `file_scan_akta_notaris` varchar(255) NOT NULL,
  `id_jenis_akta` int NOT NULL,
  `nama_notaris` varchar(30) NOT NULL,
  `no_npwp` varchar(30) NOT NULL,
  `file_scan_npwp` varchar(255) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `id_bidang_kegiatan` int NOT NULL,
  `tujuan_ormas` varchar(255) NOT NULL,
  `id_ciri_khusus` int NOT NULL,
  `alamat_sekretariat` text NOT NULL,
  `id_provinsi` int NOT NULL,
  `id_kabupaten` int NOT NULL,
  `kode_pos` int NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `no_fax` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `file_scan_anggaran_dasar` varchar(255) NOT NULL,
  `file_scan_logo` varchar(255) NOT NULL,
  `file_scan_program_kerja` varchar(255) NOT NULL,
  `file_scan_keterangan_domisili` varchar(255) NOT NULL,
  `file_scan_bukti_kepemilikan` varchar(255) NOT NULL,
  `file_scan_foto_kantor` varchar(255) NOT NULL,
  `file_scan_susunan_pengurus` varchar(255) NOT NULL,
  `file_scan_biodata_katua` varchar(255) NOT NULL,
  `file_scan_foto_ketua` varchar(255) NOT NULL,
  `file_scan_ktp_ketua` varchar(255) NOT NULL,
  `file_scan_biodata_sekretaris` varchar(255) NOT NULL,
  `file_scan_foto_sekretaris` varchar(255) NOT NULL,
  `file_scan_ktp_sekretaris` varchar(255) NOT NULL,
  `file_scan_biodata_bendahara` varchar(255) NOT NULL,
  `file_scan_foto_bendahara` varchar(255) NOT NULL,
  `file_scan_ktp_bendahara` varchar(255) NOT NULL,
  `file_scan_formulir` varchar(255) NOT NULL,
  `file_scan_pernyataan_permendagri` varchar(255) NOT NULL,
  `file_scan_keabsahan_ormas` varchar(255) NOT NULL,
  `file_scan_pengantar_dari_kesbangpol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_ormas`
--

INSERT INTO `data_ormas` (`id_ormas`, `id_jenis_permohonan`, `nama_ormas`, `tempat_pendirian`, `no_surat_permohonan`, `tanggal_surat_permohonan`, `tanggal_pendirian`, `file_scan_surat_permohonan`, `no_akta_notaris`, `tanggal_akta_notaris`, `file_scan_akta_notaris`, `id_jenis_akta`, `nama_notaris`, `no_npwp`, `file_scan_npwp`, `nama_bank`, `no_rekening`, `id_bidang_kegiatan`, `tujuan_ormas`, `id_ciri_khusus`, `alamat_sekretariat`, `id_provinsi`, `id_kabupaten`, `kode_pos`, `no_telp`, `no_fax`, `email`, `file_scan_anggaran_dasar`, `file_scan_logo`, `file_scan_program_kerja`, `file_scan_keterangan_domisili`, `file_scan_bukti_kepemilikan`, `file_scan_foto_kantor`, `file_scan_susunan_pengurus`, `file_scan_biodata_katua`, `file_scan_foto_ketua`, `file_scan_ktp_ketua`, `file_scan_biodata_sekretaris`, `file_scan_foto_sekretaris`, `file_scan_ktp_sekretaris`, `file_scan_biodata_bendahara`, `file_scan_foto_bendahara`, `file_scan_ktp_bendahara`, `file_scan_formulir`, `file_scan_pernyataan_permendagri`, `file_scan_keabsahan_ormas`, `file_scan_pengantar_dari_kesbangpol`) VALUES
(4, 2, 'duda', 'pauh', '4567', '2023-05-02', '2023-05-01', '', '1245695', '2023-11-09', 'Ini File Scan Akta Notaris', 2, 'blabla', '19039', 'Ini File Scan Npwp', 'bri', '14305940', 2, 'mengaplikasikan suasana kesenian pada acara baralek', 2, 'Korong Hilir, Nagari Sintuak Datar, Kabupaten Singgah', 2, 2, 25571, '0897654678', '8987564', 'ismail@gmail.com', 'Ini File Scan Anggaran', 'Ini File Scan Logo', 'Ini File Scan Program Kerja', 'Ini file scan keterangan domisili', 'Ini file scan bukti kepemilikan', 'Ini file scan foto kantor', 'ini file scan susunan pengurus', 'ini file scan biodata katua', 'ini file scan foto ketua', 'ini file scan ktp ketua', 'ini file scan biodata sekretaris', 'ini file scan foto sekretaris', 'ini file scan ktp sekretaris', 'ini file scan biodata bendahara', 'ini file scan foto bendahara', 'ini file scan ktp bendahara', 'ini file scan formulir', 'ini file scan pernyataan permendagri', 'ini file scan keabsahan ormas', 'ini file scan pengantar dari kesbangpol'),
(5, 2, 'dudi', 'pauh', '4567', '2023-05-02', '2023-05-01', '', '170700', '2023-11-09', 'Ini File Scan Akta Notaris', 2, 'blabla', '19039', 'jkdir', 'Mandiri Syariah', '444544', 2, 'mengaplikasikan suasana kesenian pada acara baralek', 2, 'datar', 1, 1, 25571, '0897654678', '8987564', 'pauh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 2, 'dudi', 'pauh', '4567', '2023-05-02', '2023-05-01', 'file_scan_surat_permohonan.jpg', '170700', '2023-11-09', 'Ini File Scan Akta Notaris', 2, 'blabla', '19039', 'jkdir', 'Mandiri Syariah', '444544', 2, 'mengaplikasikan suasana kesenian pada acara baralek', 2, 'datar', 1, 1, 25571, '0897654678', '8987564', 'pauh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 2, '2', 'pauh', '4567', '2023-03-07', '2023-05-01', 'file_scan_surat_permohonan.jpg', '890594', '2000-12-02', '', 2, 'Inisial', '19039', 'Ini File Scan Npwp', 'bri', '444544', 2, 'Membuat Karater manusia yang taat agama', 2, 'Pulau air, Nagari Padang Kandang, Kec. Nan Sabaris', 2, 2, 26675, '0897654678', '8987564', 'ismail@gmail.com', 'Ini File Scan Anggaran', 'Ini File Scan Logo', '', 'Ini file scan keterangan domisili', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 2, '2', 'pauh', '4567', '2023-03-07', '2023-05-01', 'file_scan_surat_permohonan.jpg', '890594', '2000-12-02', '', 2, 'Inisial', '19039', 'Ini File Scan Npwp', 'bri', '444544', 2, 'Membuat Karater manusia yang taat agama', 2, 'Pulau air, Nagari Padang Kandang, Kec. Nan Sabaris', 2, 2, 26675, '0897654678', '8987564', 'ismail@gmail.com', 'Ini File Scan Anggaran', 'Ini File Scan Logo', '', 'Ini file scan keterangan domisili', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 2, '2', 'pauh', '4567', '2023-03-07', '2023-05-01', 'file_scan_surat_permohonan.jpg', '890594', '2000-12-02', '', 2, 'Inisial', '19039', 'Ini File Scan Npwp', 'bri', '444544', 2, 'Membuat Karater manusia yang taat agama', 2, 'Pulau air, Nagari Padang Kandang, Kec. Nan Sabaris', 2, 2, 26675, '0897654678', '8987564', 'ismail@gmail.com', 'Ini File Scan Anggaran', 'Ini File Scan Logo', '', 'Ini file scan keterangan domisili', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 2, '2', 'pauh', '', '2023-04-30', '2023-05-01', 'file_scan_surat_permohonan.jpg', '', '2023-04-30', '', 2, '', '', '', '', '', 2, '', 1, 'datar', 2, 1, 25571, '', '', 'pauh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 2, '2', 'pauh', '', '2023-04-30', '2023-05-01', 'file_scan_surat_permohonan.jpg', '', '2023-04-30', '', 2, '', '', '', '', '', 2, '', 1, 'datar', 2, 1, 25571, '', '', 'pauh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 2, '2', 'pauh', '', '2023-04-30', '2023-05-01', 'file_scan_surat_permohonan.jpg', '', '2023-04-30', 'file_scan_akta_notaris.jpg', 2, '', '', '', '', '', 2, '', 1, 'datar', 2, 1, 25571, '', '', 'pauh@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 2, 'Bersama', 'Pariaman', '678765', '2023-04-30', '2023-04-30', 'file_scan_surat_permohonan.jpg', '890594', '2023-05-22', 'file_scan_akta_notaris.jpg', 2, 'Inisial', '98980767', 'file_scan_npwp.jpg', 'BRI', '444544', 2, 'Membuat Karater manusia yang taat agama', 1, 'datar', 2, 1, 25571, '0897654678', '567654', 'pauh@gmail.com', 'file_scan_anggaran_dasar.jpg', 'file_scan_logo.jpg', 'file_scan_program_kerja.jpg', 'file_scan_keterangan_domisili.jpg', 'file_scan_bukti_kepemilikan.jpg', 'file_scan_foto_kantor.jpg', 'file_scan_susunan_pengurus.jpg', 'file_scan_biodata_katua.jpg', 'file_scan_foto_ketua.jpg', 'file_scan_ktp_ketua.jpg', 'file_scan_biodata_sekretaris.jpg', 'file_scan_foto_sekretaris.jpg', 'file_scan_ktp_sekretaris.jpg', 'file_scan_biodata_bendahara.jpg', 'file_scan_foto_bendahara.jpg', 'file_scan_ktp_bendahara.jpg', 'file_scan_formulir.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_permohonan`
--

CREATE TABLE `data_permohonan` (
  `id_permohonan` int NOT NULL,
  `id_jenis_permohonan` int NOT NULL,
  `nama_ormas` varchar(100) NOT NULL,
  `tempat_pendirian` varchar(100) NOT NULL,
  `tanggal_pendirian` date NOT NULL,
  `no_surat_permohonan` varchar(50) NOT NULL,
  `tanggal_surat_permohonan` date NOT NULL,
  `scan_surat_permohonan` varchar(255) NOT NULL,
  `no_akta_notaris` varchar(50) NOT NULL,
  `tanggal_akta_notaris` date NOT NULL,
  `nama_notaris` varchar(100) NOT NULL,
  `id_jenis_akta` int NOT NULL,
  `scan_akta_notaris` varchar(255) NOT NULL,
  `no_npwp` varchar(50) NOT NULL,
  `scan_npwp` varchar(255) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `id_bidang_kegiatan` int NOT NULL,
  `id_ciri_khusus` int NOT NULL,
  `tujuan_ormas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_permohonan`
--

INSERT INTO `data_permohonan` (`id_permohonan`, `id_jenis_permohonan`, `nama_ormas`, `tempat_pendirian`, `tanggal_pendirian`, `no_surat_permohonan`, `tanggal_surat_permohonan`, `scan_surat_permohonan`, `no_akta_notaris`, `tanggal_akta_notaris`, `nama_notaris`, `id_jenis_akta`, `scan_akta_notaris`, `no_npwp`, `scan_npwp`, `nama_bank`, `no_rekening`, `id_bidang_kegiatan`, `id_ciri_khusus`, `tujuan_ormas`) VALUES
(9, 1, 'Karya Bersama', 'Pariaman', '2023-05-02', '1', '2023-05-01', '', '1', '2023-05-01', 'Alda', 1, '', '123', '', 'BSI', '5463729', 1, 1, 'qwee'),
(10, 2, 'Baringin Karya', 'Padang', '2023-05-02', '2', '2023-06-02', 'scan_surat_permohonan.jpg', '4', '2023-05-01', 'Aldi Taher', 2, 'scan_akta_notaris.jpg', '123', 'scan_npwp.jpg', 'BRI', '5463729', 2, 2, 'Ini Tujuannya'),
(11, 1, 'Mangga 2', 'Pauh Kambar', '2023-06-07', '12-001-005', '2023-06-13', 'scan_surat_permohonan.png', '12-001-03', '2023-06-14', 'Marion SH M.Kom', 1, 'scan_akta_notaris.png', '123-009-0989', 'scan_npwp.png', 'Bank BCA', '0987-0139-0928', 1, 1, 'Menciptakan Lapangan Pekerjaan yang hebat dan banyak');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Ketua Umum'),
(2, 'Sekretaris Jendral'),
(3, 'Pendiri'),
(4, 'Pembina'),
(5, 'Penasehat'),
(6, 'Bendahara Umum');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id_jadwal_kegiatan` int NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_mulai_kegiatan` time NOT NULL,
  `jam_selesai_kegiatan` time NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `janis_akta`
--

CREATE TABLE `janis_akta` (
  `id_jenis_akta` int NOT NULL,
  `jenis_akta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `janis_akta`
--

INSERT INTO `janis_akta` (`id_jenis_akta`, `jenis_akta`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int NOT NULL,
  `nama_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'Padang Pariaman'),
(2, 'Padang'),
(3, 'Kabupaten Kampar');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `tempat_kegiatan` varchar(30) NOT NULL,
  `ringkasan_kegiatan` text NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal_kegiatan`, `tempat_kegiatan`, `ringkasan_kegiatan`, `foto_kegiatan`) VALUES
(1, 'Baralek', '2023-05-08', 'Pariaman', 'Acara Berjalan lancar Tanpa Kendala', 'ini fotonya'),
(2, 'badantam', '2023-05-23', 'sdmabsdb', 'fhttffj', 'pariamanlogo.png'),
(3, 'badantam', '2023-05-23', 'sdmabsdb', 'fhttffj', 'pariamanlogo.png'),
(4, 'tes', '2023-05-19', 'sd', 'sasdasd', 'pariamanlogo.png'),
(5, 'test2', '2023-05-20', 'sabbd', 'xcxc', 'pariamanlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelengkapan_administrasi`
--

CREATE TABLE `kelengkapan_administrasi` (
  `id_administrasi` int NOT NULL,
  `scan_anggaran_dasar` varchar(255) NOT NULL,
  `scan_logo` varchar(255) NOT NULL,
  `scan_proker` varchar(255) NOT NULL,
  `scan_keterangan_domisili` varchar(255) NOT NULL,
  `scan_bukti_kepemilikan` varchar(255) NOT NULL,
  `scan_foto_kantor` varchar(255) NOT NULL,
  `scan_keputusan_susunan_pengurus` varchar(255) NOT NULL,
  `scan_biodata_ketua` varchar(255) NOT NULL,
  `scan_foto_ketua` varchar(255) NOT NULL,
  `scan_ktp_ketua` varchar(255) NOT NULL,
  `scan_biodata_sekretaris` varchar(255) NOT NULL,
  `scan_foto_sekretaris` varchar(255) NOT NULL,
  `scan_ktp_sekretaris` varchar(255) NOT NULL,
  `scan_biodata_bendahara` varchar(255) NOT NULL,
  `scan_foto_bendahara` varchar(255) NOT NULL,
  `scan_ktp_bendahara` varchar(255) NOT NULL,
  `scan_formulir_isian_data_ormas` varchar(255) NOT NULL,
  `scan_surat_pernyataan_permendagri` varchar(255) NOT NULL,
  `scan_keabsahan_ormas` varchar(255) NOT NULL,
  `scan_pengantar_dari_kesbangpol` varchar(255) NOT NULL,
  `id_permohonan` int DEFAULT NULL,
  `id_sekretariat` int DEFAULT NULL,
  `id_kepengurusan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelengkapan_administrasi`
--

INSERT INTO `kelengkapan_administrasi` (`id_administrasi`, `scan_anggaran_dasar`, `scan_logo`, `scan_proker`, `scan_keterangan_domisili`, `scan_bukti_kepemilikan`, `scan_foto_kantor`, `scan_keputusan_susunan_pengurus`, `scan_biodata_ketua`, `scan_foto_ketua`, `scan_ktp_ketua`, `scan_biodata_sekretaris`, `scan_foto_sekretaris`, `scan_ktp_sekretaris`, `scan_biodata_bendahara`, `scan_foto_bendahara`, `scan_ktp_bendahara`, `scan_formulir_isian_data_ormas`, `scan_surat_pernyataan_permendagri`, `scan_keabsahan_ormas`, `scan_pengantar_dari_kesbangpol`, `id_permohonan`, `id_sekretariat`, `id_kepengurusan`) VALUES
(6, 'scan_anggaran_dasar.png', 'scan_logo.png', 'scan_proker.png', 'scan_keterangan_domisili.png', 'scan_bukti_kepemilikan.png', 'scan_foto_kantor.png', 'scan_keputusan_susunan_pengurus.png', '', 'scan_foto_ketua.png', 'scan_ktp_ketua.png', 'scan_biodata_sekretaris.jpg', 'scan_foto_sekretaris.jpg', 'scan_ktp_sekretaris.jpg', 'scan_biodata_bendahara.png', 'scan_foto_bendahara.png', 'scan_ktp_bendahara.png', 'scan_formulir_isian_data_ormas.jpg', 'scan_surat_pernyataan_permendagri.jpg', 'scan_keabsahan_ormas.png', 'scan_pengantar_dari_kesbangpol.jpg', 9, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `master_kode`
--

CREATE TABLE `master_kode` (
  `nama_grup` varchar(40) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `nama_kode` varchar(100) NOT NULL,
  `dskripsi` varchar(100) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_kode`
--

INSERT INTO `master_kode` (`nama_grup`, `kode`, `nama_kode`, `dskripsi`, `status`) VALUES
('Golongan Darah ', '01', 'A', 'Golongan Darah A', 1),
('Golongan Darah ', '02', 'B', 'Golongan Darah B', 1),
('Golongan Darah ', '03', 'AB', 'Golongan Darah AB', 1),
('Golongan Darah ', '04', 'O', 'Golongan Darah O', 1),
('Jenis Kelamin', '01', 'Laki-Laki', 'Laki-Laki', 1),
('Jenis Kelamin', '02', 'Perempuan', 'Perempuan', 1),
('Perkerjaan', '01', 'PNS', 'PNS', 1),
('Perkerjaan', '02', 'TNI / POLRI', 'TNI / POLRI', 1),
('Perkerjaan', '03', 'Karyawan Swasta', 'Karyawan Swasta', 1),
('Perkerjaan', '04', 'Idol', 'IDOL KPOP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1664441241),
('m130524_201442_init', 1664441265),
('m150214_044831_init_user', 1664442028),
('m190124_110200_add_verification_token_column_to_user_table', 1664441265);

-- --------------------------------------------------------

--
-- Table structure for table `penanggung_jawab`
--

CREATE TABLE `penanggung_jawab` (
  `id_penanggung` int NOT NULL,
  `nama_penanggung` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_jabatan` int NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama`, `id_jabatan`, `nik`, `tanggal_awal`, `tanggal_akhir`) VALUES
(1, 'Fadli', 1, '1823748383', '2023-05-01', '2023-05-02'),
(2, 'MARION', 2, '1823748383', '2023-05-01', '2023-05-02'),
(3, 'ULUL', 4, '2567865', '2023-04-30', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_jenis_permohonan` int NOT NULL,
  `jenis_permohonan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_jenis_permohonan`, `jenis_permohonan`) VALUES
(1, 'Pendaftaran'),
(2, 'Pelaporan');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `created_at`, `updated_at`, `full_name`, `timezone`) VALUES
(1, 1, '2022-09-29 02:00:28', NULL, 'the one', NULL),
(2, 2, '2023-06-04 19:06:06', '2023-06-04 19:06:06', 'pauh', NULL),
(3, 3, '2023-06-04 19:47:29', '2023-06-04 19:47:29', 'fani', NULL),
(4, 4, '2023-06-20 18:57:20', '2023-06-20 18:57:20', 'Erik Nofra Rama', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Sumatera Barat'),
(2, 'Sumatera Selatan'),
(3, 'Riau');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `can_admin` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `can_admin`) VALUES
(1, 'Admin', '2022-09-29 02:00:28', NULL, 1),
(2, 'User', '2022-09-29 02:00:28', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sekretariat`
--

CREATE TABLE `sekretariat` (
  `id_sekretariat` int NOT NULL,
  `alamat_sekretariat` text NOT NULL,
  `id_provinsi` int NOT NULL,
  `id_kabupaten` int NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_fax` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_permohonan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sekretariat`
--

INSERT INTO `sekretariat` (`id_sekretariat`, `alamat_sekretariat`, `id_provinsi`, `id_kabupaten`, `kode_pos`, `no_telepon`, `no_fax`, `email`, `id_permohonan`) VALUES
(8, 'Pulau air, Nagari Padang Kandang, Kec. Nan Sabaris', 1, 1, '26675', '098765', '6789', 'ismail@gmail.com', 9),
(9, 'Pulau air, Nagari Padang Kandang, Kec. Nan Sabaris', 1, 1, '26675', '098765', '6789', 'ismail@gmail.com', 10),
(10, 'Jalan Syekh Burhanudin Pauh Kambar Nan Sabaris', 1, 1, '25571', '081277402485', '83748238', 'eriiknofrarama@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `status` smallint NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `created_at`, `updated_at`, `banned_at`, `banned_reason`) VALUES
(1, 1, 1, 'neo@neo.com', 'neo', '$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O', 'DcnBqZ3XXA7GHbeo27Qhxi9g-TFJ7xzh', 'zj44AKUTHAbpLS8n2a6_GkRMgwPI7DVf', '127.0.0.1', '2023-06-21 20:59:39', NULL, '2022-09-29 02:00:28', NULL, NULL, NULL),
(2, 1, 1, 'pauh@gmail.com', 'pauh', '$2y$13$ycxOtfi/dKFzLyOWzgoNBOngcztYL2zxLUm8pfKeLVomyHIc7APU6', NULL, NULL, '::1', '2023-06-04 19:46:41', NULL, '2023-06-04 19:06:06', '2023-06-04 19:06:06', NULL, NULL),
(3, 1, 1, 'faniapril467@gmail.com', 'fani', '$2y$13$IUomQEa.DKBRKlS7rMBWk.61G.6Wmnx/6lNT9G7STEVqxmC32Bi.y', NULL, NULL, '::1', '2023-06-04 19:47:56', NULL, '2023-06-04 19:47:29', '2023-06-04 19:47:29', NULL, NULL),
(4, 1, 0, 'eriiknofrarama@gmail.com', 'eriknofrarama', '$2y$13$WBcTxd0Nacydk9r.AFubNezfCSuaZoRA/U44iAl5rFes9XzYSthO2', NULL, NULL, NULL, NULL, NULL, '2023-06-20 18:57:20', '2023-06-20 18:57:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `provider_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `provider_attributes` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `type` smallint NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `user_id`, `type`, `token`, `data`, `created_at`, `expired_at`) VALUES
(1, 4, 1, 'u93p6TF0kSGYYGItY5XGTsCAdSANXM_N', NULL, '2023-06-20 18:58:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_kegiatan`
--
ALTER TABLE `bidang_kegiatan`
  ADD PRIMARY KEY (`id_bidang_kegiatan`);

--
-- Indexes for table `ciri_khusus_kegiatan`
--
ALTER TABLE `ciri_khusus_kegiatan`
  ADD PRIMARY KEY (`id_ciri_khusus`);

--
-- Indexes for table `data_kepengurusan`
--
ALTER TABLE `data_kepengurusan`
  ADD PRIMARY KEY (`id_kepengurusan`);

--
-- Indexes for table `data_ormas`
--
ALTER TABLE `data_ormas`
  ADD PRIMARY KEY (`id_ormas`);

--
-- Indexes for table `data_permohonan`
--
ALTER TABLE `data_permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_kegiatan`
--
ALTER TABLE `jadwal_kegiatan`
  ADD PRIMARY KEY (`id_jadwal_kegiatan`);

--
-- Indexes for table `janis_akta`
--
ALTER TABLE `janis_akta`
  ADD PRIMARY KEY (`id_jenis_akta`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelengkapan_administrasi`
--
ALTER TABLE `kelengkapan_administrasi`
  ADD PRIMARY KEY (`id_administrasi`);

--
-- Indexes for table `master_kode`
--
ALTER TABLE `master_kode`
  ADD PRIMARY KEY (`nama_grup`,`kode`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `penanggung_jawab`
--
ALTER TABLE `penanggung_jawab`
  ADD PRIMARY KEY (`id_penanggung`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_jenis_permohonan`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id` (`user_id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekretariat`
--
ALTER TABLE `sekretariat`
  ADD PRIMARY KEY (`id_sekretariat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `user_username` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_provider_id` (`provider_id`),
  ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token_token` (`token`),
  ADD KEY `user_token_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_kegiatan`
--
ALTER TABLE `bidang_kegiatan`
  MODIFY `id_bidang_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ciri_khusus_kegiatan`
--
ALTER TABLE `ciri_khusus_kegiatan`
  MODIFY `id_ciri_khusus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kepengurusan`
--
ALTER TABLE `data_kepengurusan`
  MODIFY `id_kepengurusan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_ormas`
--
ALTER TABLE `data_ormas`
  MODIFY `id_ormas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_permohonan`
--
ALTER TABLE `data_permohonan`
  MODIFY `id_permohonan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `janis_akta`
--
ALTER TABLE `janis_akta`
  MODIFY `id_jenis_akta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelengkapan_administrasi`
--
ALTER TABLE `kelengkapan_administrasi`
  MODIFY `id_administrasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_jenis_permohonan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sekretariat`
--
ALTER TABLE `sekretariat`
  MODIFY `id_sekretariat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_token`
--
ALTER TABLE `user_token`
  ADD CONSTRAINT `user_token_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
