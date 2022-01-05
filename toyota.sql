-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2019 pada 19.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toyota`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `nama`, `username`, `password`) VALUES
(8, 'Farhan', 'farhan', 'd1bbb2af69fd350b6d6bd88655757b47'),
(14, 'Azra', 'azra', 'febea4b778def5dab73409aded25526b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dimensi`
--

CREATE TABLE `dimensi` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `berat_tanpa_muatan` varchar(10) NOT NULL,
  `berat_muatan` varchar(10) NOT NULL,
  `jarak_depan` varchar(10) NOT NULL,
  `jarak_rendah` varchar(10) NOT NULL,
  `jarak_belakang` varchar(10) NOT NULL,
  `kapasitas_tangki` varchar(10) NOT NULL,
  `kapasitas_penumpang` varchar(10) NOT NULL,
  `radius` varchar(10) NOT NULL,
  `panjang` varchar(10) NOT NULL,
  `tinggi` varchar(10) NOT NULL,
  `lebar` varchar(10) NOT NULL,
  `sumbu_roda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dimensi`
--

INSERT INTO `dimensi` (`no`, `id_mobil`, `id_type`, `berat_tanpa_muatan`, `berat_muatan`, `jarak_depan`, `jarak_rendah`, `jarak_belakang`, `kapasitas_tangki`, `kapasitas_penumpang`, `radius`, `panjang`, `tinggi`, `lebar`, `sumbu_roda`) VALUES
(4, 'C00001', 'T00001', '1.585', '-', '1.425', '200', '1.435', '45', '7', '4.7', '4.190', '1.695', '1.660', '2.655');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exterior`
--

CREATE TABLE `exterior` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `handle` varchar(10) NOT NULL,
  `lamp_rem` varchar(10) NOT NULL,
  `lamp_belok` varchar(10) NOT NULL,
  `lamp_kabut` varchar(10) NOT NULL,
  `spion_auto` varchar(10) NOT NULL,
  `kaca_depan_auto` varchar(10) NOT NULL,
  `kaca_belakang_auto` varchar(10) NOT NULL,
  `sunroof` varchar(10) NOT NULL,
  `sunroof_manual` varchar(10) NOT NULL,
  `roof_back` varchar(10) NOT NULL,
  `wiper_depan` varchar(10) NOT NULL,
  `wiper_belakang` varchar(10) NOT NULL,
  `gril` varchar(10) NOT NULL,
  `spoiler_bwh` varchar(10) NOT NULL,
  `spoiler_belakang` varchar(10) NOT NULL,
  `spoiler_samping` varchar(10) NOT NULL,
  `mufler` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `exterior`
--

INSERT INTO `exterior` (`no`, `id_mobil`, `id_type`, `handle`, `lamp_rem`, `lamp_belok`, `lamp_kabut`, `spion_auto`, `kaca_depan_auto`, `kaca_belakang_auto`, `sunroof`, `sunroof_manual`, `roof_back`, `wiper_depan`, `wiper_belakang`, `gril`, `spoiler_bwh`, `spoiler_belakang`, `spoiler_samping`, `mufler`) VALUES
(4, 'C00001', 'T00001', '-', '-', '-', '-', 'Yes', 'Yes', 'Yes', '-', '-', '-', 'Yes', 'Yes', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`no`, `id_mobil`, `id_type`, `gambar`) VALUES
(32, 'C00001', 'T00001', 'aa.jpg'),
(33, 'C00002', 'T00003', '1.jpg'),
(34, 'C00001', 'T00002', 'a.jpg'),
(35, 'C00001', 'T00001', 'logo.png'),
(36, 'C00002', 'T00003', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `insurance`
--

CREATE TABLE `insurance` (
  `no` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_market` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(40) NOT NULL,
  `map` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `insurance`
--

INSERT INTO `insurance` (`no`, `nama`, `nama_market`, `no_hp`, `alamat`, `kota`, `map`, `gambar`) VALUES
(5, 'Asuransi Jasindo', 'Sri Chanjarwati', '085270163310', 'Jl. Jend. Soedirman No.196B', 'Purwokerto', 'https://goo.gl/maps/qBNCEvWovMrcRG3F8', 'jasindo-siap-salurkan-klaim-asuransi-korban-airasia-lhW.jpg'),
(6, 'Jasa RaharjaJasa Raharja', '', '', '', '', '', ''),
(9, 'Yes', '', '', '', '', '', 'logo.png'),
(10, 'asasas', '', '', '', '', '', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `interior`
--

CREATE TABLE `interior` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `socket` varchar(10) NOT NULL,
  `asbak` varchar(10) NOT NULL,
  `saku_pintu` varchar(10) NOT NULL,
  `saku_belakang` varchar(10) NOT NULL,
  `foldable` varchar(40) NOT NULL,
  `sandar_depan` varchar(10) NOT NULL,
  `sandar_belakang` varchar(10) NOT NULL,
  `laci_dpn` varchar(10) NOT NULL,
  `spion_dlm` varchar(10) NOT NULL,
  `jok_kulit` varchar(10) NOT NULL,
  `kursi_belakang` varchar(10) NOT NULL,
  `kursi_belakang_lipat` varchar(10) NOT NULL,
  `kemudi` varchar(20) NOT NULL,
  `tachometer` varchar(10) NOT NULL,
  `kaca_hias` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `interior`
--

INSERT INTO `interior` (`no`, `id_mobil`, `id_type`, `socket`, `asbak`, `saku_pintu`, `saku_belakang`, `foldable`, `sandar_depan`, `sandar_belakang`, `laci_dpn`, `spion_dlm`, `jok_kulit`, `kursi_belakang`, `kursi_belakang_lipat`, `kemudi`, `tachometer`, `kaca_hias`) VALUES
(2, 'C00001', 'T00001', 'Yes', 'Yes', 'Yes', 'Yes', 'Depan (single) & belakang (dual)', 'Yes', 'Yes', 'Yes', 'Yes', '-', 'Yes', 'Yes', '3-spoke / urethane', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keamanan`
--

CREATE TABLE `keamanan` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `alarm` varchar(10) NOT NULL,
  `abs` varchar(10) NOT NULL,
  `kunci_sentral` varchar(10) NOT NULL,
  `child_lock` varchar(10) NOT NULL,
  `airbag_kemudi` varchar(10) NOT NULL,
  `airbag_depan` varchar(10) NOT NULL,
  `airbag_samping` varchar(10) NOT NULL,
  `esp` varchar(10) NOT NULL,
  `occupant_protect` varchar(10) NOT NULL,
  `child_protect` varchar(10) NOT NULL,
  `pedestrian_protect` varchar(10) NOT NULL,
  `overall_rating` varchar(10) NOT NULL,
  `sabuk_depan` varchar(10) NOT NULL,
  `sabuk_belakang` varchar(10) NOT NULL,
  `sabuk_pretensioner` varchar(10) NOT NULL,
  `immobiliser` varchar(10) NOT NULL,
  `sensor_hujan` varchar(10) NOT NULL,
  `sensor_parkir` varchar(10) NOT NULL,
  `spion_belakang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keamanan`
--

INSERT INTO `keamanan` (`no`, `id_mobil`, `id_type`, `alarm`, `abs`, `kunci_sentral`, `child_lock`, `airbag_kemudi`, `airbag_depan`, `airbag_samping`, `esp`, `occupant_protect`, `child_protect`, `pedestrian_protect`, `overall_rating`, `sabuk_depan`, `sabuk_belakang`, `sabuk_pretensioner`, `immobiliser`, `sensor_hujan`, `sensor_parkir`, `spion_belakang`) VALUES
(3, 'C00001', 'T00001', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '-', '-', '-', '-', '-', 'Yes', 'Yes', 'Yes', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kenyamanan`
--

CREATE TABLE `kenyamanan` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `pendingin` varchar(10) NOT NULL,
  `audio` varchar(40) NOT NULL,
  `audio_belakang` varchar(10) NOT NULL,
  `speaker` varchar(10) NOT NULL,
  `konsol_tengah` varchar(10) NOT NULL,
  `kontrol_iklim` varchar(10) NOT NULL,
  `kontrol_perjalanan` varchar(10) NOT NULL,
  `pengingat_kunci` varchar(10) NOT NULL,
  `power_steering` varchar(10) NOT NULL,
  `jendela_auto` varchar(10) NOT NULL,
  `gps` varchar(10) NOT NULL,
  `sabuk` varchar(10) NOT NULL,
  `bahan_kursi` varchar(20) NOT NULL,
  `kaca_belakang_kabut` varchar(10) NOT NULL,
  `tilt_steering` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kenyamanan`
--

INSERT INTO `kenyamanan` (`no`, `id_mobil`, `id_type`, `pendingin`, `audio`, `audio_belakang`, `speaker`, `konsol_tengah`, `kontrol_iklim`, `kontrol_perjalanan`, `pengingat_kunci`, `power_steering`, `jendela_auto`, `gps`, `sabuk`, `bahan_kursi`, `kaca_belakang_kabut`, `tilt_steering`) VALUES
(2, 'C00001', 'T00001', 'Yes', '2 din am / fm, cd, usb, aux', '-', '4', '-', '-', '-', 'Yes', 'Yes', 'Yes', '-', 'Yes', 'Fabric', '-', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin`
--

CREATE TABLE `mesin` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `diameter` varchar(20) NOT NULL,
  `kompresi` varchar(20) NOT NULL,
  `jumlah_silinder` varchar(20) NOT NULL,
  `kapasitas_silinder` varchar(10) NOT NULL,
  `sistem_bbm` varchar(20) NOT NULL,
  `bbm` varchar(20) NOT NULL,
  `daya_maks` varchar(20) NOT NULL,
  `torsi_maks` varchar(20) NOT NULL,
  `tipe_mesin` varchar(50) NOT NULL,
  `penggerak_roda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mesin`
--

INSERT INTO `mesin` (`no`, `id_mobil`, `id_type`, `diameter`, `kompresi`, `jumlah_silinder`, `kapasitas_silinder`, `sistem_bbm`, `bbm`, `daya_maks`, `torsi_maks`, `tipe_mesin`, `penggerak_roda`) VALUES
(10, 'C00001', 'T00001', '72.0 x 79.7', '11.0 x 1', '4', '1329', 'EFI', 'Bensin', '96.5 / 6.000', '12.3 / 4.200', '1.3 IL, 4 Cylinder, 16 V, DOHC, Dual VVT-i', 'RWD (Penggerak Roda Belakang)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parts`
--

CREATE TABLE `parts` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `velg` varchar(10) NOT NULL,
  `steering` varchar(50) NOT NULL,
  `ukuran_ban` varchar(20) NOT NULL,
  `rem_depan` varchar(10) NOT NULL,
  `rem_belakang` varchar(10) NOT NULL,
  `suspensi_depan` varchar(50) NOT NULL,
  `suspensi_belakang` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `parts`
--

INSERT INTO `parts` (`no`, `id_mobil`, `id_type`, `velg`, `steering`, `ukuran_ban`, `rem_depan`, `rem_belakang`, `suspensi_depan`, `suspensi_belakang`, `warna`) VALUES
(3, 'C00001', 'T00001', '-', 'Rack & Pinion', 'R 14 / R 14', 'Disc', 'Drum', 'Macpherson Strut with Coil Spring & Stabilizer', '4 link with coil spring & lateral rod', 'Dark Grey Metallic, Black Mica, Silver Metallic, W'),
(4, 'C00002', 'T00003', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `no` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`no`, `nama`, `no_hp`, `email`, `alamat`) VALUES
(4, 'Nasmoco Authorized Toyota Dealer', '085700005110', 'toyotapurwokertoofficial@gmail.com', 'Jl. Soekarno Hatta, Purbalingga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `no` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(40) NOT NULL,
  `map` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`no`, `nama`, `no_hp`, `alamat`, `kota`, `map`, `gambar`) VALUES
(6, 'Plaza Toyota Kyai Tapa', '02156978118', 'Jl. Kyai Tapa No 263 Grogol', 'Jakarta Barat', 'https://goo.gl/maps/2akXztDQnfmUSjEZ9', 'dacfc440-973b-4859-b5e0-1afc945edd6c_1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom`
--

CREATE TABLE `showroom` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `bbm` varchar(20) NOT NULL,
  `penumpang` varchar(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `tentang` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `showroom`
--

INSERT INTO `showroom` (`no`, `id_mobil`, `nama`, `jenis`, `cc`, `bbm`, `penumpang`, `harga`, `tentang`, `gambar`) VALUES
(27, 'C00001', 'Avanza', 'Passenger', '1201', 'Bensin', '7 / 5', 'Rp. 200.000.000', '<p>Bootstrap merupakan framework HTML, CSS dan javascript untuk membangun desain web secara responsif. Artinya, tampilan web yang dibuat oleh bootstrap akan menyesuaikan ukuran layar dari browser yang kita gunakan baik pada beberapa device seperti PC / desktop, tablet ataupun mobile. Dengan bootstrap kita juga bisa membangun web dinamis ataupun statis.&nbsp;</p>\r\n<p>Bootstrap merupakan salah satu framework yang paling populer di kalangan web developer. pada saat ini hampir semua web developer telah menggunakan bootstrap untuk membuat tampilan front-end menjadi lebih mudah dan sangat cepat.</p>\r\n<p>Sebelum kita mulai membangun sebuah desain web menggunakan bootstrap, terlebih dahulu kita harus install bootstrapnya</p>', 'aaa.jpg'),
(28, 'C00002', 'C-HR', 'Passenger', '2301', 'Bensin', '5', 'Rp. 350.000.000', '<p>Nice</p>', '1.jpg'),
(29, 'C00003', 'Vios', 'Passenger', '2000', 'Bensin', '5', 'Rp. 259.000.000', '<p>Wauw</p>', '5.jpg'),
(30, 'C00004', 'GT 86', 'Passenger', '2300', 'Bensin', '5', 'Rp. 500.000', 'yes', '4.jpg'),
(31, 'C00005', '', '-- Jenis Mobil --', '', '-- Bahan Bakar --', '', '', '', 'logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_detail`
--

CREATE TABLE `showroom_detail` (
  `no` int(5) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `type` varchar(60) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `bbm` varchar(20) NOT NULL,
  `penumpang` varchar(10) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `dp` varchar(30) NOT NULL,
  `cicil` varchar(30) NOT NULL,
  `jangka_waktu` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `showroom_detail`
--

INSERT INTO `showroom_detail` (`no`, `id_type`, `id_mobil`, `type`, `jenis`, `cc`, `bbm`, `penumpang`, `harga`, `dp`, `cicil`, `jangka_waktu`, `status`) VALUES
(39, 'T00001', 'C00001', '1.3 E Std M/T', 'Passenger', '2009', 'Bensin', '7', 'Rp. 289.000.000', 'Rp. 120.000.000', 'Rp. 1.299.999', '36', 'Promo'),
(40, 'T00002', 'C00001', '1.3 E Std A/T', 'Passenger', '2300', 'Bensin', '7', 'Rp. 200.000.000', 'Rp. 70.000.000', 'Rp. 2.600.000', '24', 'Promo'),
(41, 'T00003', 'C00002', '1.8 L CVT Single Tone', 'Passenger', '2300', 'Bensin', '5', 'Rp. 356.000.000', 'Rp. 0', 'Rp. 0', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transmisi`
--

CREATE TABLE `transmisi` (
  `no` int(5) NOT NULL,
  `id_mobil` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `gigi1` varchar(10) NOT NULL,
  `gigi2` varchar(10) NOT NULL,
  `gigi3` varchar(10) NOT NULL,
  `gigi4` varchar(10) NOT NULL,
  `gigi5` varchar(10) NOT NULL,
  `gigi6` varchar(10) NOT NULL,
  `gigi7` varchar(10) NOT NULL,
  `gigi8` varchar(10) NOT NULL,
  `gigi_reverse` varchar(10) NOT NULL,
  `gigi_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transmisi`
--

INSERT INTO `transmisi` (`no`, `id_mobil`, `id_type`, `gigi1`, `gigi2`, `gigi3`, `gigi4`, `gigi5`, `gigi6`, `gigi7`, `gigi8`, `gigi_reverse`, `gigi_akhir`) VALUES
(3, 'C00001', 'T00001', '3.769', '2.045', '1.376', '1.000', '0.838', '-', '-', '-', '4.128', '5.125');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `no` int(5) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `hits` int(20) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`no`, `ip`, `tanggal`, `hits`, `online`) VALUES
(142, '::1', 'Monday, 29-07-2019 / 14:48', 3, '1564386536'),
(143, '::1', 'Monday, 29-07-2019 / 14:49', 4, '1564386582'),
(144, '::1', 'Monday, 29-07-2019 / 14:50', 1, '1564386656'),
(145, '::1', 'Monday, 29-07-2019 / 14:51', 2, '1564386716'),
(146, '::1', 'Monday, 29-07-2019 / 14:52', 1, '1564386728'),
(147, '::1', 'Monday, 29-07-2019 / 15:04', 2, '1564387488'),
(148, '::1', 'Monday, 29-07-2019 / 15:07', 3, '1564387638'),
(149, '::1', 'Monday, 29-07-2019 / 15:10', 2, '1564387841'),
(150, '::1', 'Monday, 29-07-2019 / 15:11', 4, '1564387911'),
(151, '::1', 'Monday, 29-07-2019 / 15:13', 1, '1564388011'),
(152, '::1', 'Monday, 29-07-2019 / 15:14', 4, '1564388071'),
(153, '::1', 'Monday, 29-07-2019 / 15:15', 1, '1564388158'),
(154, '::1', 'Monday, 29-07-2019 / 15:17', 1, '1564388238'),
(155, '::1', 'Monday, 29-07-2019 / 15:18', 2, '1564388339'),
(156, '::1', 'Monday, 29-07-2019 / 15:19', 1, '1564388377'),
(157, '::1', 'Monday, 29-07-2019 / 15:20', 2, '1564388426'),
(158, '::1', 'Monday, 29-07-2019 / 15:21', 2, '1564388501'),
(159, '::1', 'Monday, 29-07-2019 / 15:23', 1, '1564388618'),
(160, '::1', 'Monday, 29-07-2019 / 15:25', 2, '1564388728'),
(161, '::1', 'Monday, 29-07-2019 / 15:26', 1, '1564388803'),
(162, '::1', 'Monday, 29-07-2019 / 15:31', 1, '1564389097'),
(163, '::1', 'Monday, 29-07-2019 / 15:32', 1, '1564389152'),
(164, '::1', 'Monday, 29-07-2019 / 15:33', 2, '1564389215'),
(165, '::1', 'Monday, 29-07-2019 / 15:34', 2, '1564389263'),
(166, '::1', 'Monday, 29-07-2019 / 15:49', 1, '1564390143'),
(167, '::1', 'Monday, 29-07-2019 / 15:50', 2, '1564390219'),
(168, '::1', 'Monday, 29-07-2019 / 15:51', 1, '1564390313'),
(169, '::1', 'Monday, 29-07-2019 / 15:52', 2, '1564390360'),
(170, '::1', 'Monday, 29-07-2019 / 15:54', 1, '1564390456'),
(171, '::1', 'Monday, 29-07-2019 / 15:55', 2, '1564390559'),
(172, '::1', 'Monday, 29-07-2019 / 15:56', 1, '1564390581'),
(173, '::1', 'Monday, 29-07-2019 / 15:57', 3, '1564390659'),
(174, '::1', 'Monday, 29-07-2019 / 15:58', 2, '1564390700'),
(175, '::1', 'Monday, 29-07-2019 / 15:59', 1, '1564390764'),
(176, '::1', 'Monday, 29-07-2019 / 16:01', 1, '1564390893'),
(177, '::1', 'Monday, 29-07-2019 / 16:02', 1, '1564390945'),
(178, '::1', 'Monday, 29-07-2019 / 16:03', 2, '1564391007'),
(179, '::1', 'Monday, 29-07-2019 / 16:10', 1, '1564391446'),
(180, '::1', 'Monday, 29-07-2019 / 16:11', 3, '1564391507'),
(181, '::1', 'Monday, 29-07-2019 / 16:12', 3, '1564391571'),
(182, '::1', 'Monday, 29-07-2019 / 16:13', 2, '1564391635'),
(183, '::1', 'Monday, 29-07-2019 / 16:14', 1, '1564391684'),
(184, '::1', 'Monday, 29-07-2019 / 16:15', 2, '1564391753'),
(185, '::1', 'Monday, 29-07-2019 / 16:16', 3, '1564391812'),
(186, '::1', 'Monday, 29-07-2019 / 16:17', 5, '1564391874'),
(187, '::1', 'Monday, 29-07-2019 / 16:18', 1, '1564391886'),
(188, '::1', 'Monday, 29-07-2019 / 16:19', 4, '1564391995'),
(189, '::1', 'Monday, 29-07-2019 / 16:21', 2, '1564392115'),
(190, '::1', 'Monday, 29-07-2019 / 16:22', 1, '1564392159'),
(191, '::1', 'Monday, 29-07-2019 / 16:23', 3, '1564392231'),
(192, '::1', 'Monday, 29-07-2019 / 16:24', 2, '1564392287'),
(193, '::1', 'Monday, 29-07-2019 / 16:25', 1, '1564392314'),
(194, '::1', 'Monday, 29-07-2019 / 16:26', 2, '1564392398'),
(195, '::1', 'Monday, 29-07-2019 / 16:27', 4, '1564392472'),
(196, '::1', 'Monday, 29-07-2019 / 16:29', 3, '1564392594'),
(197, '::1', 'Monday, 29-07-2019 / 16:31', 1, '1564392707'),
(198, '::1', 'Monday, 29-07-2019 / 16:32', 3, '1564392767'),
(199, '::1', 'Monday, 29-07-2019 / 16:33', 5, '1564392829'),
(200, '::1', 'Monday, 29-07-2019 / 16:38', 2, '1564393108'),
(201, '::1', 'Monday, 29-07-2019 / 16:53', 1, '1564394012'),
(202, '::1', 'Monday, 29-07-2019 / 16:55', 1, '1564394119'),
(203, '127.0.0.1', 'Monday, 29-07-2019 / 19:55', 1, '1564404916'),
(204, '127.0.0.1', 'Monday, 29-07-2019 / 20:01', 3, '1564405315'),
(205, '127.0.0.1', 'Monday, 29-07-2019 / 20:02', 1, '1564405332'),
(206, '127.0.0.1', 'Monday, 29-07-2019 / 20:04', 3, '1564405485'),
(207, '127.0.0.1', 'Monday, 29-07-2019 / 20:05', 4, '1564405559'),
(208, '127.0.0.1', 'Monday, 29-07-2019 / 20:06', 3, '1564405612'),
(209, '127.0.0.1', 'Monday, 29-07-2019 / 20:07', 1, '1564405650'),
(210, '127.0.0.1', 'Monday, 29-07-2019 / 20:08', 1, '1564405680'),
(211, '127.0.0.1', 'Monday, 29-07-2019 / 20:11', 2, '1564405899'),
(212, '127.0.0.1', 'Monday, 29-07-2019 / 20:12', 1, '1564405921'),
(213, '127.0.0.1', 'Monday, 29-07-2019 / 20:13', 3, '1564406028'),
(214, '127.0.0.1', 'Monday, 29-07-2019 / 20:14', 2, '1564406088'),
(215, '127.0.0.1', 'Monday, 29-07-2019 / 20:15', 2, '1564406153'),
(216, '127.0.0.1', 'Monday, 29-07-2019 / 20:17', 3, '1564406274'),
(217, '127.0.0.1', 'Monday, 29-07-2019 / 20:18', 2, '1564406305'),
(218, '127.0.0.1', 'Monday, 29-07-2019 / 20:19', 1, '1564406362'),
(219, '127.0.0.1', 'Monday, 29-07-2019 / 21:20', 1, '1564410056'),
(220, '127.0.0.1', 'Monday, 29-07-2019 / 21:21', 2, '1564410094'),
(221, '127.0.0.1', 'Monday, 29-07-2019 / 21:22', 2, '1564410173'),
(222, '127.0.0.1', 'Monday, 29-07-2019 / 21:23', 3, '1564410223'),
(223, '127.0.0.1', 'Monday, 29-07-2019 / 21:24', 1, '1564410254'),
(224, '127.0.0.1', 'Monday, 29-07-2019 / 21:27', 1, '1564410479'),
(225, '127.0.0.1', 'Monday, 29-07-2019 / 21:28', 2, '1564410537'),
(226, '127.0.0.1', 'Monday, 29-07-2019 / 21:30', 4, '1564410649'),
(227, '127.0.0.1', 'Monday, 29-07-2019 / 21:32', 1, '1564410731'),
(228, '127.0.0.1', 'Monday, 29-07-2019 / 21:33', 4, '1564410833'),
(229, '127.0.0.1', 'Monday, 29-07-2019 / 21:34', 3, '1564410895'),
(230, '127.0.0.1', 'Monday, 29-07-2019 / 21:35', 2, '1564410926'),
(231, '127.0.0.1', 'Monday, 29-07-2019 / 21:36', 2, '1564411014'),
(232, '127.0.0.1', 'Monday, 29-07-2019 / 21:37', 3, '1564411057'),
(233, '127.0.0.1', 'Monday, 29-07-2019 / 21:39', 2, '1564411190'),
(234, '127.0.0.1', 'Monday, 29-07-2019 / 21:44', 2, '1564411477'),
(235, '127.0.0.1', 'Monday, 29-07-2019 / 21:46', 3, '1564411614'),
(236, '127.0.0.1', 'Monday, 29-07-2019 / 21:47', 2, '1564411677'),
(237, '127.0.0.1', 'Monday, 29-07-2019 / 21:48', 1, '1564411697'),
(238, '127.0.0.1', 'Monday, 29-07-2019 / 21:49', 3, '1564411773'),
(239, '127.0.0.1', 'Monday, 29-07-2019 / 21:50', 1, '1564411827'),
(240, '127.0.0.1', 'Monday, 29-07-2019 / 21:52', 2, '1564411946'),
(241, '127.0.0.1', 'Monday, 29-07-2019 / 21:55', 1, '1564412136'),
(242, '127.0.0.1', 'Monday, 29-07-2019 / 21:56', 2, '1564412216'),
(243, '127.0.0.1', 'Monday, 29-07-2019 / 21:57', 2, '1564412254'),
(244, '127.0.0.1', 'Monday, 29-07-2019 / 21:58', 3, '1564412327'),
(245, '127.0.0.1', 'Monday, 29-07-2019 / 21:59', 2, '1564412385'),
(246, '127.0.0.1', 'Monday, 29-07-2019 / 22:00', 3, '1564412454'),
(247, '127.0.0.1', 'Monday, 29-07-2019 / 22:01', 1, '1564412461'),
(248, '127.0.0.1', 'Monday, 29-07-2019 / 22:07', 2, '1564412855'),
(249, '127.0.0.1', 'Monday, 29-07-2019 / 22:08', 3, '1564412929'),
(250, '127.0.0.1', 'Monday, 29-07-2019 / 22:09', 1, '1564412955'),
(251, '127.0.0.1', 'Monday, 29-07-2019 / 22:10', 1, '1564413057'),
(252, '127.0.0.1', 'Monday, 29-07-2019 / 22:14', 2, '1564413285'),
(253, '127.0.0.1', 'Monday, 29-07-2019 / 22:15', 1, '1564413308'),
(254, '127.0.0.1', 'Monday, 29-07-2019 / 22:28', 2, '1564414127'),
(255, '127.0.0.1', 'Monday, 29-07-2019 / 22:29', 1, '1564414145'),
(256, '127.0.0.1', 'Monday, 29-07-2019 / 22:30', 2, '1564414259'),
(257, '127.0.0.1', 'Monday, 29-07-2019 / 22:31', 3, '1564414277'),
(258, '127.0.0.1', 'Monday, 29-07-2019 / 22:32', 6, '1564414378'),
(259, '127.0.0.1', 'Monday, 29-07-2019 / 22:33', 4, '1564414404'),
(260, '127.0.0.1', 'Monday, 29-07-2019 / 22:34', 1, '1564414474'),
(261, '127.0.0.1', 'Monday, 29-07-2019 / 22:44', 1, '1564415065'),
(262, '127.0.0.1', 'Monday, 29-07-2019 / 23:14', 2, '1564416880'),
(263, '127.0.0.1', 'Monday, 29-07-2019 / 23:18', 1, '1564417085'),
(264, '127.0.0.1', 'Monday, 29-07-2019 / 23:21', 1, '1564417309'),
(265, '127.0.0.1', 'Monday, 29-07-2019 / 23:30', 1, '1564417835'),
(266, '127.0.0.1', 'Monday, 29-07-2019 / 23:31', 1, '1564417891'),
(267, '127.0.0.1', 'Monday, 29-07-2019 / 23:38', 1, '1564418285'),
(268, '127.0.0.1', 'Monday, 29-07-2019 / 23:49', 2, '1564418999'),
(269, '127.0.0.1', 'Monday, 29-07-2019 / 23:50', 1, '1564419030'),
(270, '127.0.0.1', 'Monday, 29-07-2019 / 23:52', 5, '1564419177'),
(271, '127.0.0.1', 'Monday, 29-07-2019 / 23:53', 2, '1564419225'),
(272, '127.0.0.1', 'Monday, 29-07-2019 / 23:55', 3, '1564419344'),
(273, '127.0.0.1', 'Monday, 29-07-2019 / 23:56', 1, '1564419396'),
(274, '127.0.0.1', 'Monday, 29-07-2019 / 23:57', 2, '1564419473'),
(275, '127.0.0.1', 'Tuesday, 30-07-2019 / 00:04', 1, '1564419841');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `exterior`
--
ALTER TABLE `exterior`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `gambar` (`gambar`);

--
-- Indeks untuk tabel `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `gambar` (`gambar`);

--
-- Indeks untuk tabel `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `keamanan`
--
ALTER TABLE `keamanan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `kenyamanan`
--
ALTER TABLE `kenyamanan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `gambar` (`gambar`);

--
-- Indeks untuk tabel `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `gambar` (`gambar`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `showroom_detail`
--
ALTER TABLE `showroom_detail`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `transmisi`
--
ALTER TABLE `transmisi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `dimensi`
--
ALTER TABLE `dimensi`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `exterior`
--
ALTER TABLE `exterior`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `insurance`
--
ALTER TABLE `insurance`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `interior`
--
ALTER TABLE `interior`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keamanan`
--
ALTER TABLE `keamanan`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kenyamanan`
--
ALTER TABLE `kenyamanan`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mesin`
--
ALTER TABLE `mesin`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `parts`
--
ALTER TABLE `parts`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `showroom`
--
ALTER TABLE `showroom`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `showroom_detail`
--
ALTER TABLE `showroom_detail`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `transmisi`
--
ALTER TABLE `transmisi`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
