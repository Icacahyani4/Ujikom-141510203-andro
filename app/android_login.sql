-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 09:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongans`
--

CREATE TABLE `golongans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `Kode_golongan`, `Nama_golongan`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'Senior', 1500000, '2017-02-21 04:25:52', '2017-02-23 07:04:54'),
(2, 'G002', 'Middle', 1000000, '2017-02-21 04:26:03', '2017-02-21 04:26:03'),
(6, 'G003', 'Junior', 500000, '2017-02-21 07:58:37', '2017-02-21 07:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Nama_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `Kode_jabatan`, `Nama_jabatan`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(2, 'J002', 'Manager', 2500000, '2017-02-21 04:24:52', '2017-02-21 04:24:52'),
(3, 'J003', 'Supervisor', 2000000, '2017-02-21 04:25:12', '2017-02-21 04:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lemburs`
--

CREATE TABLE `kategori_lemburs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_lemburs`
--

INSERT INTO `kategori_lemburs` (`id`, `Kode_lembur`, `jabatan_id`, `golongan_id`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(4, 'KL004', 2, 1, 25000, '2017-02-21 04:28:52', '2017-02-22 09:20:59'),
(5, 'KL005', 2, 2, 20000, '2017-02-21 04:29:04', '2017-02-22 09:21:44'),
(7, 'KL007', 3, 1, 20000, '2017-02-21 04:29:36', '2017-02-22 09:21:33'),
(8, 'KL008', 3, 2, 15000, '2017-02-21 04:30:41', '2017-02-22 09:22:03'),
(10, 'KL010', 2, 6, 15000, '2017-02-21 14:26:07', '2017-02-22 09:21:51'),
(11, 'KL011', 3, 6, 10000, '2017-02-21 14:26:59', '2017-02-23 07:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `lembur_pegawais`
--

CREATE TABLE `lembur_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_lembur_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `Jumlah_jam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lembur_pegawais`
--

INSERT INTO `lembur_pegawais` (`id`, `Kode_lembur_id`, `pegawai_id`, `Jumlah_jam`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 8, '2017-02-21 04:31:12', '2017-02-22 14:01:34'),
(3, 7, 6, 6, '2017-02-22 02:58:27', '2017-02-22 02:58:27'),
(5, 10, 7, 2, '2017-02-22 06:21:31', '2017-02-22 06:21:31'),
(6, 4, 1, 2, '2017-02-23 04:31:37', '2017-02-23 04:31:37'),
(7, 7, 6, 2, '2017-02-23 04:31:49', '2017-02-23 04:31:49'),
(8, 4, 1, 3, '2017-02-23 05:54:40', '2017-02-23 05:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_08_055023_create_jabatans_table', 1),
(4, '2017_02_08_055039_create_golongans_table', 1),
(5, '2017_02_08_055054_create_kategori_lemburs_table', 1),
(6, '2017_02_08_055103_create_pegawais_table', 1),
(7, '2017_02_08_055128_create_lembur_pegawais_table', 1),
(8, '2017_02_08_055138_create_tunjangans_table', 1),
(9, '2017_02_08_055152_create_tunjangan_pegawais_table', 1),
(10, '2017_02_08_055200_create_penggajians_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `Nip`, `user_id`, `jabatan_id`, `golongan_id`, `Photo`, `created_at`, `updated_at`) VALUES
(1, '10496520001', 1, 2, 1, '57q9rz_jpg', '2017-02-21 04:27:21', '2017-02-23 07:29:52'),
(6, '10496520002', 7, 3, 1, 'pYv9mm_jpg', '2017-02-22 02:57:18', '2017-02-22 02:58:05'),
(7, '10496520007', 8, 2, 6, 'eYzEGq_jpg', '2017-02-22 06:21:14', '2017-02-24 02:42:14'),
(8, '1010101022', 9, 2, 1, 'rm82kM_jpg', '2017-02-23 07:26:41', '2017-02-23 07:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `penggajians`
--

CREATE TABLE `penggajians` (
  `id` int(10) UNSIGNED NOT NULL,
  `tunjangan_pegawai_id` int(10) UNSIGNED NOT NULL,
  `Jumlah_jam_lembur` int(11) NOT NULL,
  `Jumlah_uang_lembur` int(11) NOT NULL,
  `Gaji_pokok` int(11) NOT NULL,
  `Total_gaji` int(11) NOT NULL,
  `Tanggal_pengambilan` date NOT NULL,
  `Status_pengambilan` tinyint(4) NOT NULL,
  `Petugas_penerima` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penggajians`
--

INSERT INTO `penggajians` (`id`, `tunjangan_pegawai_id`, `Jumlah_jam_lembur`, `Jumlah_uang_lembur`, `Gaji_pokok`, `Total_gaji`, `Tanggal_pengambilan`, `Status_pengambilan`, `Petugas_penerima`, `created_at`, `updated_at`) VALUES
(12, 3, 8, 160000, 4250000, 4410000, '2017-02-23', 0, 'Admin', '2017-02-23 04:43:50', '2017-02-23 14:22:03'),
(13, 5, 2, 30000, 3500000, 3530000, '2017-02-23', 1, 'Admin', '2017-02-23 04:48:41', '2017-02-23 06:10:17'),
(15, 6, 13, 325000, 5000000, 5325000, '2017-02-23', 1, 'Admin', '2017-02-23 05:56:01', '2017-02-23 06:10:29'),
(17, 7, 0, 0, 4750000, 4750000, '2017-02-24', 0, 'Admin', '2017-02-24 05:21:04', '2017-02-24 05:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangans`
--

CREATE TABLE `tunjangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jumlah_anak` int(11) NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangans`
--

INSERT INTO `tunjangans` (`id`, `Kode_tunjangan`, `jabatan_id`, `golongan_id`, `Status`, `Jumlah_anak`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(4, 'TUN004', 2, 1, 'Menikah', 1, 1000000, '2017-02-21 04:35:54', '2017-02-23 02:36:47'),
(5, 'TUN005', 2, 2, 'Menikah', 1, 750000, '2017-02-21 04:36:43', '2017-02-23 02:37:05'),
(7, 'TUN007', 3, 1, 'Menikah', 1, 750000, '2017-02-21 04:37:44', '2017-02-23 02:37:38'),
(8, 'TUN008', 3, 2, 'Menikah', 1, 500000, '2017-02-21 04:38:34', '2017-02-23 02:37:43'),
(10, 'TUN010', 2, 6, 'Menikah', 1, 500000, '2017-02-21 14:32:01', '2017-02-23 02:37:22'),
(11, 'TUN011', 3, 6, 'Menikah', 1, 250000, '2017-02-21 14:32:26', '2017-02-23 02:37:54'),
(12, 'TUN012', 2, 1, 'Menikah', 0, 750000, '2017-02-23 02:35:51', '2017-02-23 02:38:19'),
(13, 'TUN013', 2, 2, 'Menikah', 0, 600000, '2017-02-23 02:38:54', '2017-02-23 02:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_pegawais`
--

CREATE TABLE `tunjangan_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_tunjangan_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangan_pegawais`
--

INSERT INTO `tunjangan_pegawais` (`id`, `Kode_tunjangan_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(3, 7, 6, '2017-02-22 02:58:45', '2017-02-22 02:58:45'),
(5, 10, 7, '2017-02-22 06:22:34', '2017-02-22 06:22:34'),
(6, 4, 1, '2017-02-23 02:36:22', '2017-02-23 02:36:22'),
(7, 12, 8, '2017-02-23 07:30:43', '2017-02-23 07:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '$2y$10$54mcTuEYQ.n/tKZDu0/6e.wskXKdlUe7WNXjpaRywO7tLS2cJ4D26', 'Admin', 'ANe9R4xUoJNYDjrxXnXNe2AUKOxz52Vl9Q1bSZoKW18PrfV3v2WltXU1EZuU', '2017-02-21 04:27:21', '2017-02-24 05:38:21'),
(7, 'Ica Cahyani', 'icacahyani9@example.com', '$2y$10$Ji8jyJb0DBwRTiqt5XLuiu4cSrdehMBvzA1XAzKhCtI1bllHE4TNW', 'HRD', 'sxEiqAWwX92zzyHsBKlW0bMuxb90Rv28AKKp7lU2D8XmyeiM6v0G58rYczyS', '2017-02-22 02:57:17', '2017-02-24 05:32:02'),
(8, 'Defiana Mustika Ayu Mega', 'defi@example.com', '$2y$10$wntX1j41/RqxYaIo53Z77uu4g3TB5NBIgsZn0TLwV.OWVOnLrd82K', 'Keuangan', 'I0vokXnHJmb9oxgAwtpLUS6aNfpPU2Ya9xIWrMaLwZh20KTV3vyFJcspoKIY', '2017-02-22 06:21:13', '2017-02-24 05:26:53'),
(9, 'Sandra Eka Rahayu', 'sandra@example.com', '$2y$10$44cj7CUP8TbfpByKL/Vma.lR5oK9o3GxjKrLkzB2pVf1W/tySM84.', 'Pegawai', '6UfF0XsqnPIMaVGJit5t1XsJJ7EQN1tJdJT9RY3kbPWeeRRClctmtuPzXnqF', '2017-02-23 07:26:41', '2017-02-24 05:30:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongans`
--
ALTER TABLE `golongans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `golongans_nama_golongan_unique` (`Nama_golongan`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatans_nama_jabatan_unique` (`Nama_jabatan`);

--
-- Indexes for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_lemburs_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `kategori_lemburs_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembur_pegawais_kode_lembur_id_foreign` (`Kode_lembur_id`),
  ADD KEY `lembur_pegawais_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`Nip`),
  ADD KEY `pegawais_user_id_foreign` (`user_id`),
  ADD KEY `pegawais_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `pegawais_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggajians_tunjangan_pegawai_id_foreign` (`tunjangan_pegawai_id`);

--
-- Indexes for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tunjangans_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `tunjangans_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangan_pegawais_pegawai_id_unique` (`pegawai_id`),
  ADD KEY `tunjangan_pegawais_kode_tunjangan_id_foreign` (`Kode_tunjangan_id`);

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
-- AUTO_INCREMENT for table `golongans`
--
ALTER TABLE `golongans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penggajians`
--
ALTER TABLE `penggajians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tunjangans`
--
ALTER TABLE `tunjangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD CONSTRAINT `kategori_lemburs_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_lemburs_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD CONSTRAINT `lembur_pegawais_kode_lembur_id_foreign` FOREIGN KEY (`Kode_lembur_id`) REFERENCES `kategori_lemburs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lembur_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD CONSTRAINT `penggajians_tunjangan_pegawai_id_foreign` FOREIGN KEY (`tunjangan_pegawai_id`) REFERENCES `tunjangan_pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD CONSTRAINT `tunjangans_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangans_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD CONSTRAINT `tunjangan_pegawais_kode_tunjangan_id_foreign` FOREIGN KEY (`Kode_tunjangan_id`) REFERENCES `tunjangans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangan_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
