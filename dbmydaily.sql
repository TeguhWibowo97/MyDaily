-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2020 pada 08.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmydaily`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_sertifikat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nidn` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_depan` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelar_belakang` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_fungsional` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golongan` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_s1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_s2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_s3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bidang_ilmu` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesor2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_no_sertifikat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_s1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_s2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_s3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `no_sertifikat`, `nip`, `nidn`, `nama`, `gelar_depan`, `gelar_belakang`, `alamat_pt`, `jabatan_fungsional`, `golongan`, `tanggal_lahir`, `tempat_lahir`, `pendidikan_s1`, `pendidikan_s2`, `pendidikan_s3`, `jenis`, `bidang_ilmu`, `asesor1`, `asesor2`, `no_hp`, `email`, `ktp`, `doc_no_sertifikat`, `doc_s1`, `doc_s2`, `doc_s3`, `created_at`, `updated_at`) VALUES
(1, '1123456789', '11232134567', '12343', 'asd', 'asdf', 'asdf', 'asd', 'Profesor', 'asd', '3123', 'qqq', 'qwe', 'qwe', 'ewq', 'PROFESOR', 'sdfdfv', 'fggdfb', 'cvdfv', 'fdvfv', 'teguh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-05 00:24:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_02_23_235651_create_penelitiancoffee_table', 2),
(7, '2020_02_23_235950_create_penelitianalga_table', 2),
(9, '2020_03_04_013853_create_identitas_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitianalga`
--

CREATE TABLE `penelitianalga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penelitianalga`
--

INSERT INTO `penelitianalga` (`id`, `user`, `tanggal`, `keterangan`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Teguh', '11/02/2020', 'Meneliti alga saat musim kemarau', NULL, '2020-03-03 23:52:48', '2020-03-03 23:52:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitiancoffee`
--

CREATE TABLE `penelitiancoffee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penelitiancoffee`
--

INSERT INTO `penelitiancoffee` (`id`, `user`, `tanggal`, `keterangan`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, 'Teguh', '11/02/2020', 'Meneliti jenis kopi pada dataran tinggi', NULL, '2020-03-03 23:51:35', '2020-03-03 23:51:35'),
(2, 'Teguh', '12/02/2020', 'Meneliti bakteri sacaromises untuk fermentasi kopi', NULL, '2020-03-03 23:52:15', '2020-03-03 23:52:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teguh', 'teguh@gmail.com', NULL, '$2y$10$CK1k9wJvCEdeDYaidbfGH.JYPgARJZBd41ShU6mppndCmWYHKobm.', NULL, '2020-03-02 23:11:10', '2020-03-02 23:11:10'),
(3, 'Wibowo', 'wibowo@gmail.com', NULL, '$2y$10$LL5f7m1TzEOdw.vJrlwT8u4D5j1WLR31PmA/0Z.yn0yxUsdHQ9uD2', NULL, '2020-03-02 23:15:12', '2020-03-02 23:15:12'),
(4, 'Admin', 'admin@gmail.com', NULL, '$2y$10$nzm70pvrUXGkDz5Hi/X2c.QZvnd0rDpaBuCmmtq3AYuStQwSZuoy.', NULL, '2020-03-02 23:15:52', '2020-03-02 23:15:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `penelitianalga`
--
ALTER TABLE `penelitianalga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitiancoffee`
--
ALTER TABLE `penelitiancoffee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penelitianalga`
--
ALTER TABLE `penelitianalga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penelitiancoffee`
--
ALTER TABLE `penelitiancoffee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
