-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2022 at 02:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bedcapacity`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_rs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `nama`, `alamat`, `email`, `no_telp_rs`, `maps`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'RSUD Kota Bandung', 'Jl. Rumah Sakit No.22, Pakemitan, Cinambo, Kota Bandung, Jawa Barat 45474', 'rsudbandung@gmail.com', '62227811794', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7901821610835!2d107.69655241477281!3d-6.915670995003091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd34e7028617%3A0x3238dd5f715620ab!2sBandung%20City%20Regional%20General%20Hospital!5e0!3m2!1sen!2sid!4v1640408740324!5m2!1sen!2sid', 'rsudbandung.jpg-1640957454.jpg', '2021-12-24 22:05:55', '2021-12-31 06:30:54'),
(2, 'Rumah Sakit Muhammadiyah Bandung', 'Jl. K.H. Ahmad Dahlan No.53, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264', 'rsmbdg@gmail.com', '62227301062', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6408838390103!2d107.62101631744385!3d-6.933454299999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87ddb7a5863%3A0x17cc7ee41569932a!2sMuhammadiyah%20Hospital%20Bandung!5e0!3m2!1sen!2sid!4v1640408810641!5m2!1sen!2sid', 'muhamdiyah.png-1640957720.png', '2021-12-24 22:07:09', '2021-12-31 06:35:20'),
(3, 'RSAI Bandung', 'Jl. Soekarno-Hatta No.644, Manjahlega, Kec. Rancasari, Kota Bandung, Jawa Barat 40286', 'rsaibandung@gmail.com', '62227562046', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5941858969154!2d107.66698721744385!3d-6.939007299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2a7793f8583%3A0x75a233b73aff92b4!2sAl%20Islam%20Hospital!5e0!3m2!1sen!2sid!4v1640409078790!5m2!1sen!2sid', 'rs-al-islam-bandung-jawa-barat.jpg-1640957272.jpg', '2021-12-24 22:12:08', '2021-12-31 06:27:52'),
(5, 'RSUP Dr. Hasan Sadikin Bandung', 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', 'rsuphasan@gmail.com', '62222034953', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9368298503623!2d107.59627631744384!3d-6.8981590000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e642a7183059%3A0xd07affd224606be5!2sDr.%20Hasan%20Sadikin%20Central%20General%20Hospital!5e0!3m2!1sen!2sid!4v1640409234725!5m2!1sen!2sid', 'hasan-sadikin_bdg.jpg-1640957493.jpg', '2021-12-24 22:14:05', '2021-12-31 06:31:33'),
(6, 'Rumah Sakit Santo Borromeus', 'Jl. Ir. H. Juanda No.100, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', 'rssanto@gmail.com', '62222552000', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9716410891515!2d107.61149101744384!3d-6.893995500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6510e3bc953%3A0x599b1151a3946943!2sSanto%20Borromeus%20Hospital!5e0!3m2!1sen!2sid!4v1640409294827!5m2!1sen!2sid', 'santo.jpg-1640957750.jpg', '2021-12-24 22:15:09', '2021-12-31 06:35:50'),
(7, 'Rumah Sakit Santosa Bandung Central', 'Jl. Kebon Jati No.38, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181', 'rssantosacentral@gmail.com', '62224248333', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.791651098806!2d107.59818731744384!3d-6.915495799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e617d0c2f737%3A0x431124759b6e7ebb!2sSantosa%20Hospital%20Bandung%20Central!5e0!3m2!1sen!2sid!4v1640409361803!5m2!1sen!2sid', 'alamat-rumah-sakit-santosa-bandung-0.jpg-1640957785.jpg', '2021-12-24 22:16:20', '2021-12-31 06:36:25'),
(8, 'Rumah Sakit Ibu dan Anak Limijati', 'Jalan, LLRE Martadinata St No.39, Citarum, Bandung Wetan, Bandung City, West Java 40115', 'rsuibuanak@gmail.com', '62224207770', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.868532954286!2d107.61148401744383!3d-6.906320199999977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e649c43c94e9%3A0xc00d9d416fc4bbb4!2sRumah%20Sakit%20Ibu%20dan%20Anak%20Limijati!5e0!3m2!1sen!2sid!4v1640409404561!5m2!1sen!2sid', 'ibuanaklimijati.jpg-1640957611.jpg', '2021-12-24 22:17:18', '2021-12-31 06:33:31'),
(9, 'Rumah Sakit Advent Bandung', 'Jl. Cihampelas No.161, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131', 'rsadvent@gmail.com', '622220343869', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.989547327225!2d107.60106561744384!3d-6.891852900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65953aee66f%3A0x6ee9d5e49deb230b!2sBandung%20Advent%20Hospital!5e0!3m2!1sen!2sid!4v1640409508929!5m2!1sen!2sid', 'advent.jpeg-1640957531.jpg', '2021-12-24 22:18:42', '2021-12-31 06:32:11'),
(11, 'Rumah Sakit bandung', 'Buah Batu, Bandung', 'rsbdg@gmail.com', '08222178172', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7901821610835!2d107.69655241477281!3d-6.915670995003091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd34e7028617%3A0x3238dd5f715620ab!2sBandung%20City%20Regional%20General%20Hospital!5e0!3m2!1sen!2sid!4v1641777607340!5m2!1sen!2sid', 'rsudbandung.jpg-1641777653.jpg', '2022-01-09 18:20:53', '2022-01-09 18:20:53'),
(12, 'Rumah Sakit bandung update', 'Buah Batu, Bandung', 'rsbdg@gmail.com', '08222178172', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7901821610835!2d107.69655241477281!3d-6.915670995003091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd34e7028617%3A0x3238dd5f715620ab!2sBandung%20City%20Regional%20General%20Hospital!5e0!3m2!1sen!2sid!4v1641777607340!5m2!1sen!2sid', 'rsudbandung.jpg-1641777696.jpg', '2022-01-09 18:20:54', '2022-01-09 18:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_hospital` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `id_hospital`, `nama`, `kelas`, `harga`, `qty`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 3, 'Kamar A', 'VVIP', '1200000', 2, 'VVIP.jpeg-1640416822.jpg', 'Ruang rawat inap VVIP mempunyai kamar untuk 1 pasien dengan fasilitas bed pasien, sofa bed, overed table, meja, kursi, tv, kulkas, ac, dan juga kamar mandi.', '2021-12-25 00:20:22', '2022-01-09 18:12:20'),
(4, 3, 'Kamar Inap VIP', 'VIP', '900000', 10, 'VIP.jpeg-1640664233.jpg', 'Pada ruangan kamar ini mempunyai beberapa fasilitasi diantaranya; mempunyai kamar untuk 1 pasien, sofa bed, tv, ac, kulkas, dan fasilitas lainnya.', '2021-12-27 21:03:53', '2022-01-02 20:56:14'),
(5, 3, 'Kamar Inap Kelas 1', '1', '450000', 10, 'kelas1.jpeg-1640664532.jpg', 'Pada ruangan kamar inap kelas 1 ini anada akan mendapatkan fasiltasi sebagai berikut: Ruang untuk 2 pasien, kelas 2 untuk 3 pasien, kelas 3 dan 4 untuk 4-6 pasien.', '2021-12-27 21:08:52', '2022-01-09 16:45:06'),
(7, 5, 'Ruang Inap VVIP', 'VVIP', '2000000', 5, 'vvip-hasan.jpg-1641696421.jpg', 'menyediakan berbagai macam pelayanan. Pada awal beroperasi diawali dengan kapasitas 22 TT di lantai 2, sampai sekarang pada tahun 2008 ini berkembang menjadi 91 TT yang terdiri dari 3 ruangan utama yaitu Utama A, Utama B dan Utama C. Ruangan Utama A, Utama B dan Utama C ini berada mulai dari lantai 2 hingga 4.', '2022-01-08 19:47:01', '2022-01-08 19:47:01'),
(8, 9, 'SUPER VVIP', 'VVIP', '1100000', 7, 'vvip-advant.jpg-1641771764.jpg', 'Nice View, TV, AC, Lemari Es, Lemari, Tempat Tidur Keluarga, Pantry, Sofa, Kamar Mandi, Meja Makan Keluarga, Water Dispenser, Central Oxygen', '2022-01-09 16:42:44', '2022-01-09 16:42:44'),
(9, 9, 'Kamar Inap VIP Nyaman', 'VIP', '750000', 11, 'vip-advant.jpg-1641771835.jpg', 'Nice View TV AC Lemari Es Lemari Pantry Sofa Kamar Mandi (air panas) Water Dispenser', '2022-01-09 16:43:55', '2022-01-09 16:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(80, '2014_10_12_000000_create_users_table', 1),
(81, '2014_10_12_100000_create_password_resets_table', 1),
(82, '2019_08_19_000000_create_failed_jobs_table', 1),
(83, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(84, '2021_12_16_031303_create_patients_table', 1),
(85, '2021_12_16_031532_create_hospitals_table', 1),
(86, '2021_12_16_031723_create_rekam_medis_table', 1),
(87, '2021_12_16_032104_create_kamars_table', 1),
(88, '2021_12_16_032329_create_pesan_kamars_table', 1),
(89, '2021_12_16_053532_create_pengelolas_table', 1),
(90, '2021_12_23_022424_create_rawats_table', 1),
(91, '2021_12_23_023201_create_pesan_obats_table', 1),
(92, '2021_12_23_023420_create_tagihans_table', 1),
(93, '2021_12_25_042633_create_permission_tables', 1),
(94, '2022_01_01_111201_create_testimonials_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `id_users`, `nama`, `nik`, `alamat`, `email`, `no_hp`, `created_at`, `updated_at`) VALUES
(2299877911, 20, 'Farhan Hilmi', '444545454', 'Bandung', 'farhanhilmi32@gmail.com', '087665656', '2022-01-02 17:30:09', '2022-01-02 17:30:09'),
(5892553681, 22, 'Luka Modric', '444454545', 'Bojong Soang', 'modric@gmail.com', '082221212', '2022-01-09 18:09:32', '2022-01-09 18:09:32'),
(7487975387, 17, 'Test Pasien', '77763183193719', 'Buah Batu, Bandung', 'testpasien@gmail.com', '082219829189', '2021-12-27 22:50:26', '2021-12-27 22:50:26'),
(7815349823, 18, 'Pasien Baru', '22289183918', 'Bandung', 'pasienbaru@gmail.com', '8912810', '2021-12-30 18:59:31', '2021-12-30 18:59:31'),
(8662031288, 19, 'Ahmad Jones', '449892839283928', 'Jakarta', 'ahmadjones@gmail.com', '082273872837', '2022-01-01 03:58:04', '2022-01-01 03:58:04'),
(9218650113, 21, 'Joni', '77783788', 'Bandung', 'joni@gmail.com', '08733333', '2022-01-02 20:53:15', '2022-01-02 20:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_hospital` bigint(20) UNSIGNED DEFAULT NULL,
  `id_users` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengelola`
--

INSERT INTO `pengelola` (`id`, `id_hospital`, `id_users`, `nama`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(3, 3, 4, 'Pengelola RSAI Bandung', 'Bandung', 'pengelola1@gmail.com', '2021-12-24 22:26:55', '2021-12-24 22:26:55'),
(4, 1, 5, 'Pengelola RSUD Bandung', 'Kota Bandung', 'pengelola2@gmail.com', '2021-12-24 22:27:23', '2021-12-24 22:27:23'),
(5, 5, 6, 'Pengelola Hasan Sadikin', 'Bojong Soang', 'pengelola3@gmail.com', '2021-12-24 22:27:55', '2021-12-24 22:27:55'),
(6, 9, 7, 'Pengelola Advent', 'Buah Batu', 'pengelola4@gmail.com', '2021-12-24 22:28:34', '2021-12-24 22:28:34'),
(8, 8, 9, 'Pengelola Ibu dan Anak', 'Bandung', 'pengelola6@gmail.com', '2021-12-24 22:29:46', '2021-12-24 22:29:46'),
(9, 2, 10, 'Pengelola Muhamadiyah', 'Bandung', 'pengelola7@gmail.com', '2021-12-24 22:30:20', '2021-12-24 22:30:20'),
(10, 6, 11, 'Pengelola Santo', 'Buah Batu', 'pengelola8@gmail.com', '2021-12-24 22:30:44', '2021-12-24 22:30:44'),
(11, 7, 12, 'Pengelola Santosa', 'Dago', 'pengelola9@gmail.com', '2021-12-24 22:31:17', '2021-12-24 22:31:17'),
(13, 6, 23, 'Test Pengelola', 'Bandung', 'testpengelola@gmail.com', '2022-01-09 18:18:29', '2022-01-09 18:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kamar`
--

CREATE TABLE `pesan_kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kamar` bigint(20) UNSIGNED DEFAULT NULL,
  `id_hospital` bigint(20) UNSIGNED DEFAULT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_kamar`
--

INSERT INTO `pesan_kamar` (`id`, `id_kamar`, `id_hospital`, `id_patient`, `created_at`, `updated_at`) VALUES
(15, 4, 3, 7815349823, '2021-12-31 19:18:42', '2021-12-31 19:18:42'),
(16, 4, 3, 8662031288, '2022-01-01 04:01:39', '2022-01-01 04:01:39'),
(17, 3, 3, 2299877911, '2022-01-02 17:32:56', '2022-01-02 17:32:56'),
(18, 4, 3, 9218650113, '2022-01-02 20:56:14', '2022-01-02 20:56:14'),
(19, 5, 3, 9218650113, '2022-01-09 16:45:06', '2022-01-09 16:45:06'),
(20, 3, 3, 5892553681, '2022-01-09 18:12:20', '2022-01-09 18:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_obat`
--

CREATE TABLE `pesan_obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_obat` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_obat`
--

INSERT INTO `pesan_obat` (`id`, `id_patient`, `jenis_obat`, `harga`, `created_at`, `updated_at`) VALUES
(14, 7815349823, 'Obat Jenis A, B, C', '300000', '2021-12-31 19:18:43', '2021-12-31 19:19:47'),
(15, 8662031288, 'Obat x, Obat Z', '500000', '2022-01-01 04:01:39', '2022-01-01 04:02:35'),
(16, 2299877911, NULL, '0', '2022-01-02 17:32:56', '2022-01-02 17:32:56'),
(17, 9218650113, 'Obat Jenis A, B, C', '800000', '2022-01-02 20:56:14', '2022-01-02 20:57:50'),
(18, 9218650113, 'Obat Jenis A, B, C', '200000', '2022-01-09 16:45:06', '2022-01-09 16:45:41'),
(19, 5892553681, 'Obat Jenis A, B, C', '900000', '2022-01-09 18:12:20', '2022-01-09 18:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `rawat`
--

CREATE TABLE `rawat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_rawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hospital` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rawat`
--

INSERT INTO `rawat` (`id`, `id_patient`, `jenis_rawat`, `id_hospital`, `created_at`, `updated_at`) VALUES
(14, 7815349823, 'Rawat Inap', 3, '2021-12-31 19:18:42', '2021-12-31 19:18:42'),
(15, 8662031288, 'Rawat Inap', 3, '2022-01-01 04:01:39', '2022-01-01 04:01:39'),
(16, 2299877911, 'Rawat Inap', 3, '2022-01-02 17:32:56', '2022-01-02 17:32:56'),
(17, 9218650113, 'Rawat Inap', 3, '2022-01-02 20:56:14', '2022-01-02 20:56:14'),
(18, 9218650113, 'Rawat Inap', 3, '2022-01-09 16:45:06', '2022-01-09 16:45:06'),
(19, 5892553681, 'Rawat Inap', 3, '2022-01-09 18:12:20', '2022-01-09 18:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `catatan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_jenis_rawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `id_patient`, `catatan`, `dokumen`, `rekomendasi_jenis_rawat`, `created_at`, `updated_at`) VALUES
(2, 7815349823, NULL, 'rekammedis-contoh.pdf-1640961605.doc', 'Rawat Inap', '2021-12-31 07:40:05', '2021-12-31 08:40:06'),
(3, 8662031288, NULL, '1641034831rekammedis-contoh.pdf', 'Rawat Inap', '2022-01-01 04:00:31', '2022-01-01 04:00:31'),
(4, 2299877911, NULL, '1641169876rekammedis-contoh.pdf', 'Rawat Inap', '2022-01-02 17:31:16', '2022-01-02 17:32:05'),
(5, 9218650113, NULL, '1641182053rekammedis-contoh.pdf', 'Rawat Inap', '2022-01-02 20:54:13', '2022-01-02 20:55:18'),
(6, 5892553681, NULL, '1641777040rekammedis-contoh.pdf', 'Rawat Inap', '2022-01-09 18:10:40', '2022-01-09 18:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-12-24 21:38:58', '2021-12-24 21:38:58'),
(2, 'staff', 'web', '2021-12-24 21:38:59', '2021-12-24 21:38:59'),
(3, 'patient', 'web', '2021-12-24 21:38:59', '2021-12-24 21:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesan_kamar` bigint(20) UNSIGNED DEFAULT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_rawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pesan_obat` bigint(20) UNSIGNED DEFAULT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime DEFAULT NULL,
  `biaya_kamar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Check In',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `id_pesan_kamar`, `id_patient`, `jenis_rawat`, `id_pesan_obat`, `check_in`, `check_out`, `biaya_kamar`, `biaya_total`, `status`, `created_at`, `updated_at`) VALUES
(11577214, 16, 8662031288, 'Rawat Inap', 15, '2022-01-03 00:00:00', '2022-01-01 00:00:00', '900000', '1400000', 'Belum Bayar', '2022-01-01 04:01:39', '2022-01-01 04:02:53'),
(15904792, 17, 2299877911, 'Rawat Inap', 16, '2022-01-03 00:00:00', '2022-01-03 00:00:00', '1200000', '1200000', 'Belum Bayar', '2022-01-02 17:32:56', '2022-01-02 17:35:45'),
(21711065, 18, 9218650113, 'Rawat Inap', 17, '2022-01-03 00:00:00', '2022-01-03 00:00:00', '900000', '1700000', 'Sudah Bayar', '2022-01-02 20:56:14', '2022-01-09 16:45:59'),
(41576783, 15, 7815349823, 'Rawat Inap', 14, '2022-01-01 00:00:00', '2022-01-01 00:00:00', '900000', '1200000', 'Sudah Bayar', '2021-12-31 19:18:43', '2022-01-08 19:37:53'),
(58996296, 20, 5892553681, 'Rawat Inap', 19, '2022-01-10 00:00:00', '2022-01-10 00:00:00', '1200000', '2100000', 'Belum Bayar', '2022-01-09 18:12:20', '2022-01-09 18:15:10'),
(81970661, 19, 9218650113, 'Rawat Inap', 18, '2022-01-10 00:00:00', NULL, '450000', '650000', 'Dalam Perawatan', '2022-01-09 16:45:06', '2022-01-09 16:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `id_patient`, `nama`, `testimonial`, `created_at`, `updated_at`) VALUES
(1, 8662031288, 'Ahmad Jones', 'Aplikasi ini sangat bagus karena dapat membantu mencari ruangan untuk rawat inap menjadi lebih mudah', '2022-01-01 04:24:13', '2022-01-01 04:24:13'),
(2, 2299877911, 'Farhan Hilmi', 'sangat membantu aplikasi ini', '2022-01-02 17:37:18', '2022-01-02 17:37:18'),
(3, 9218650113, 'Joni', 'aplikasi ini sangat membantu', '2022-01-02 20:59:56', '2022-01-02 20:59:56'),
(4, 5892553681, 'Luka Modric', 'aplikasi sangat berguna bagi pemesan dan mencari kamar', '2022-01-09 18:16:40', '2022-01-09 18:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', NULL, '$2y$10$isn/SBsokP1sTVao0YeTyODdxyN0jSb54yOGqYZsY/rpB2WoS67oy', NULL, '2021-12-24 21:38:59', '2021-12-24 21:38:59'),
(4, 'pengelola1@gmail.com', NULL, '$2y$10$RgrHpqQzxZnPxu8ZEYiUWODSZtjx3VOkQpT6TGZMTfdDunUPRpBYK', NULL, '2021-12-24 22:26:55', '2021-12-24 22:26:55'),
(5, 'pengelola2@gmail.com', NULL, '$2y$10$//T1vtsceCx.lTs9Zc063.lnIfgZ8e8m6V6eqBkmm6cVTBiXtBlTm', NULL, '2021-12-24 22:27:23', '2021-12-24 22:27:23'),
(6, 'pengelola3@gmail.com', NULL, '$2y$10$fThM4J01KQS4bDLWJhVuDOV02aM3sAFFO.i2TBqFzX9qceXUxsNWq', NULL, '2021-12-24 22:27:55', '2021-12-24 22:27:55'),
(7, 'pengelola4@gmail.com', NULL, '$2y$10$0qTrf2AngMDETrnqZ5usm.8Bt8F/S7isOm9cQ1u7R9dWgblQ.5Jwe', NULL, '2021-12-24 22:28:34', '2021-12-24 22:28:34'),
(9, 'pengelola6@gmail.com', NULL, '$2y$10$W8hHwLFTZTB7PZWe.rTdpuL8V9vojMY3EukIBa05nM31nZZB78l6a', NULL, '2021-12-24 22:29:46', '2021-12-24 22:29:46'),
(10, 'pengelola7@gmail.com', NULL, '$2y$10$yCAmiBueZgvbjNsDmwki2eYqNmLNq3n9USrif6rDpwSSeaa6Mil5e', NULL, '2021-12-24 22:30:20', '2021-12-24 22:30:20'),
(11, 'pengelola8@gmail.com', NULL, '$2y$10$8xlGAiw9QgLpZWkX3B.mVOtkK9.nkp4EthGyYyuHC6yhklTx.pFSW', NULL, '2021-12-24 22:30:44', '2021-12-24 22:30:44'),
(12, 'pengelola9@gmail.com', NULL, '$2y$10$eNbGIus4H5eHq.opzOTDTuH19Kckirzhj4XyNMcz9deuy5FWrdUVq', NULL, '2021-12-24 22:31:17', '2021-12-24 22:31:17'),
(17, 'testpasien@gmail.com', NULL, '$2y$10$iBAv.XnRJ0rPD84tg4dhYe8zhEoRL1JVdgXTYeBr24N3zgn1HyC1m', NULL, '2021-12-27 22:50:26', '2021-12-27 22:50:26'),
(18, 'pasienbaru@gmail.com', NULL, '$2y$10$fGhL1iXffO08r1qgzYWjMuZY5JISDOeM/ngbzKduoObMKQNrL7rPG', NULL, '2021-12-30 18:59:31', '2021-12-30 18:59:31'),
(19, 'ahmadjones@gmail.com', NULL, '$2y$10$MI1nlAfkA3ht68Iht1qQ8eZYvGnUG5EjRkndjI9Xjly7LPVndxH8O', NULL, '2022-01-01 03:58:04', '2022-01-01 03:58:04'),
(20, 'farhanhilmi32@gmail.com', NULL, '$2y$10$8WOJE8UkwQb4Frgkhys1t.ROLRW1w/z/drvYYI26vzBBAlxxb6E2m', NULL, '2022-01-02 17:30:09', '2022-01-02 17:30:09'),
(21, 'joni@gmail.com', NULL, '$2y$10$Jc78n84EtXjWjjedgyIW9Od6pJPmxxOxmbzvYFlVocH/awN3c3O3y', NULL, '2022-01-02 20:53:14', '2022-01-02 20:53:14'),
(22, 'modric@gmail.com', NULL, '$2y$10$cybCg4BQ.k8X/ZjZcXZFNuFz/7JFYQQ/EzXgfMucVZq19VjftvxVa', NULL, '2022-01-09 18:09:32', '2022-01-09 18:09:32'),
(23, 'testpengelola@gmail.com', NULL, '$2y$10$ub70yhxXZehG0RZ.zwffNOFggQTANqdAqa1VoFbx3VjGN.b0Vumv6', NULL, '2022-01-09 18:18:29', '2022-01-09 18:18:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id_hospital_index` (`id_hospital`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_id_users_index` (`id_users`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengelola_email_unique` (`email`),
  ADD KEY `pengelola_id_hospital_index` (`id_hospital`),
  ADD KEY `pengelola_id_users_index` (`id_users`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_kamar_id_kamar_index` (`id_kamar`),
  ADD KEY `pesan_kamar_id_hospital_index` (`id_hospital`),
  ADD KEY `pesan_kamar_id_patient_index` (`id_patient`);

--
-- Indexes for table `pesan_obat`
--
ALTER TABLE `pesan_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_obat_id_patient_index` (`id_patient`);

--
-- Indexes for table `rawat`
--
ALTER TABLE `rawat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rawat_id_patient_index` (`id_patient`),
  ADD KEY `id_hospital` (`id_hospital`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekam_medis_id_patient_index` (`id_patient`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagihan_id_pesan_kamar_index` (`id_pesan_kamar`),
  ADD KEY `tagihan_id_rawat_index` (`jenis_rawat`),
  ADD KEY `tagihan_id_pesan_obat_index` (`id_pesan_obat`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `pengelola`
--
ALTER TABLE `pengelola`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesan_obat`
--
ALTER TABLE `pesan_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rawat`
--
ALTER TABLE `rawat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_id_hospital_foreign` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD CONSTRAINT `pengelola_id_hospital_foreign` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengelola_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pesan_kamar`
--
ALTER TABLE `pesan_kamar`
  ADD CONSTRAINT `pesan_kamar_id_hospital_foreign` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_kamar_id_kamar_foreign` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_kamar_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan_obat`
--
ALTER TABLE `pesan_obat`
  ADD CONSTRAINT `pesan_obat_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rawat`
--
ALTER TABLE `rawat`
  ADD CONSTRAINT `rawat_ibfk_1` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rawat_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_id_pesan_kamar_foreign` FOREIGN KEY (`id_pesan_kamar`) REFERENCES `pesan_kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_id_pesan_obat_foreign` FOREIGN KEY (`id_pesan_obat`) REFERENCES `pesan_obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
