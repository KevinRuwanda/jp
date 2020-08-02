-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2020 pada 16.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `nohp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `alamat`, `nohp`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'arab', '0281021021', 23, '2019-10-07 03:08:42', '2019-10-07 03:08:42'),
(22, 'rusia', '02323232323', 24, '2019-10-07 03:13:25', '2019-10-07 03:13:25'),
(24, NULL, NULL, 27, '2020-07-31 18:07:06', '2020-07-31 18:07:06'),
(25, NULL, NULL, 28, '2020-07-31 18:47:59', '2020-07-31 18:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fishes`
--

CREATE TABLE `fishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fishes`
--

INSERT INTO `fishes` (`id`, `name`, `stok`, `deskripsi`, `image`, `slug`, `satuan`, `harga`, `user_id`, `created_at`, `updated_at`) VALUES
(18, '100Gb/Month SOFTBANK Pocket WIFI JT101 or MFI or same Good Signal!', 'Ready', '<p>aaa</p>', '1596226120-IMG_3080-300x300.jpg', '100gbmonth-softbank-pocket-wifi-jt101-or-mfi-or-same-good-signal', 'Pasang', 14400, 28, '2020-07-31 20:08:40', '2020-07-31 20:08:40'),
(19, '300Gb/Month SOFTBANK Pocket WIFI JT101 or MFI or same Good Signal!', 'Ready', '<p>qqq</p>', '1596226204-81598849_3334981953242824_4654015961966313472_n-300x289.png', '300gbmonth-softbank-pocket-wifi-jt101-or-mfi-or-same-good-signal', 'Pasang', 15400, 28, '2020-07-31 20:10:04', '2020-07-31 20:10:04'),
(20, 'Pocket Wifi 100Gb (JT101 or same) ,6 months', 'Ready', '<p>vvv</p>', '1596226308-JT101-1-2-300x300.png', 'pocket-wifi-100gb-jt101-or-same-6-months', 'Pasang', 37100, 28, '2020-07-31 20:11:48', '2020-07-31 20:11:48'),
(21, 'Softbank POCKET WIFI 50GB + SMS/MONTH(1 month,6 months,1 year)', 'Ready', '<p>aaaa</p>', '1596226350-IMG_3081-600x600.jpg', 'softbank-pocket-wifi-50gb-smsmonth1-month6-months1-year', 'Pasang', 13499, 28, '2020-07-31 20:12:30', '2020-07-31 20:12:30'),
(22, 'Number(Brastel) +Softbank Internet Card 50GB+ SMS/MONTH(1 month,6 months,1 year)', 'Out of Stock', '<p>aaaa</p>', '1596226584-603569564-1-600x600.jpg', 'numberbrastel-softbank-internet-card-50gb-smsmonth1-month6-months1-year', 'Pasang', 10800, 28, '2020-07-31 20:16:24', '2020-07-31 20:16:24'),
(23, 'Simcard Softbank 100Gb 6 months', 'Out of Stock', '<p>vvvv</p>', '1596226640-IMG_2615-300x300.jpg', 'simcard-softbank-100gb-6-months', 'Pasang', 33100, 28, '2020-07-31 20:17:20', '2020-07-31 20:17:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_17_100536_create_data_table', 1),
(4, '2018_09_17_100918_create_fishes_table', 1),
(5, '2018_09_17_101246_create_orders_table', 1),
(6, '2018_09_17_101338_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` enum('proses','sudah') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `pekerja_id` int(10) UNSIGNED DEFAULT NULL,
  `produk_id` int(11) UNSIGNED NOT NULL,
  `pemilik_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `fotoPembayaran` text NOT NULL,
  `norekening` varchar(225) NOT NULL,
  `status_pesanan` enum('diproses','proses pengiriman','pengiriman','sampai') NOT NULL DEFAULT 'diproses',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `fotoPembayaran`, `norekening`, `status_pesanan`, `created_at`, `updated_at`) VALUES
(1, '1542892011-IMG_0882.JPG', '5666-5545-5545-5666', 'sampai', '2018-11-25 22:00:03', '2018-11-25 22:00:03'),
(2, '1543181511-images.jpg', '7653-5677-4556-5445', 'sampai', '2018-11-25 22:00:07', '2018-11-25 22:00:07'),
(3, '1543181549-images.jpg', '8292-3829-9328-3823', 'sampai', '2019-10-07 02:06:13', '2019-10-07 02:06:13'),
(4, '1543181730-images.jpg', '5566-6566-6543-3333', 'pengiriman', '2018-11-25 21:59:06', '2018-11-25 21:59:06'),
(5, '1570414039-26730665_190194791721058_4553447726761977975_n.jpg', '1212-1212-1212-1212', 'sampai', '2019-10-07 03:24:38', '2019-10-07 03:24:38'),
(6, '1570414452-26943328_1471379269628022_182784156_n.jpg', '3444-444445-45454', 'diproses', '2019-10-07 02:14:12', '2019-10-07 02:14:12'),
(7, '1574613977-2018-08-11-969362.jpeg', '1111-1111-1111-1111', 'sampai', '2019-11-25 06:35:18', '2019-11-25 06:35:18'),
(8, '1574668865-74318356_p0.jpg', '1111-2222-4444-5555', 'sampai', '2019-11-25 08:20:21', '2019-11-25 08:20:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `pekerja_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `pekerja_id`, `pembayaran_id`, `created_at`, `updated_at`) VALUES
(5, 4, 1, '2018-11-25 21:58:55', '2018-11-25 21:58:55'),
(6, 4, 2, '2018-11-25 21:59:00', '2018-11-25 21:59:00'),
(7, 8, 4, '2018-11-25 21:59:06', '2018-11-25 21:59:06'),
(8, 8, 3, '2019-10-06 18:12:15', '2019-10-06 18:12:15'),
(9, 24, 5, '2019-10-07 03:22:44', '2019-10-07 03:22:44'),
(10, 24, 7, '2019-11-24 16:52:23', '2019-11-24 16:52:23'),
(11, 24, 8, '2019-11-25 08:19:33', '2019-11-25 08:19:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_kedatangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_sampai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `tgl_kedatangan`, `paket`, `nama_penerima`, `tanggal`, `alamat`, `foto_alamat`, `foto_ktp`, `jam_sampai`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '1-10', 'A1', 'sayaa', '2020-07-10', 'Jl. Belitung 14', 'f_alamat/uSnT8ax6TfaRZEQ8TbVo8qg8tRrA63LBp5ZcI3Dr.png', 'f_ktp/nrgAszmduvpo81e1MUfV6yxgy8SUM3n6B2zuGTvJ.png', '08.00-12.00', '1231211231', 'mahrus@gmail.com', '2020-07-31 01:52:25', '2020-07-31 01:52:25'),
(2, '21-30', 'C1', 'lucky', '2020-07-18', 'Jl. Jawa 7', 'f_alamat/YuuSSAV7wGYvOrcsZc9nUz2Y5tTYzdMG9PfJdwlF.png', 'f_ktp/LsQq27FHZTRiSHlxQZgaXzbpZUGFWWAIWJNRXxJ4.png', '14.00-16.00', '122131123213', 'lucky@gmail.com', '2020-07-31 02:14:18', '2020-07-31 02:14:18'),
(3, '1-10', 'A1', 'Kevin Ruwanda', '2020-08-14', 'Jl. Belitung 1 no. 2', 'f_alamat/7utGR88oFwGPWvHbgJtg8Ku43cg0dc94fmJF9npT.png', 'f_ktp/U1qlfIyQrlF3H6v1dHGlzy0BHaQMmHUaqfUmO2lD.png', '08.00-12.00', '081358825426', 'kevinruwanda@gmail.com', '2020-08-02 02:02:00', '2020-08-02 02:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `totalBayar` int(11) NOT NULL,
  `status` enum('diproses','dibayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'diproses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `role` tinyint(4) NOT NULL DEFAULT '3',
  `token` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `image`, `role`, `token`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, 1, 'iMgfOJzcMNCAegh4hKgHMQ7gO', 'admin@ad.min', '$2y$10$PNqrJvAI21T2p20OxCPMMO2j.8XXZQg3RrJaOGYEQeMS6Ddgd5tki', 'viCYp4bJEtwF46ZKEugTNy7r644riK83SKW6gCLMJpDaJTjX4zNdvbif5qz0', '2019-10-01 00:39:59', '2019-10-01 00:39:59'),
(23, 'saya', 'saya', '1570417722-66922997_p1_master1200.jpg', 2, 'ipj36NDQsx72NX18UZbNkUt7s', 'saya@aaa.com', '$2y$10$yExYuM7CSVaDsLfsO1vcGOZxYZitNp4CnJNA2IONoReosVHEdDTR2', NULL, '2019-10-07 03:08:42', '2019-10-07 03:08:42'),
(24, 'abc', 'abc', '1570418005-70088161_p0.png', 2, 'apmA2iXrSNA5vvffwJQVdsYyA', 'abc@a.bc', '$2y$10$kQvzxpOajntZio3qYft/Qev20et8XfD7ATYqE8o3u88Klm6RyeYB2', 'CtSsUANyQNIY10tprARvchtKLMYgTzzBj9agWE2v3nhFoXQMbGYkaZMpbtmC', '2019-10-07 03:13:25', '2019-10-07 03:13:25'),
(26, 'test', 'aaaa', NULL, 1, 'eLhcK6dq0TBQocwCLstvFyNmJ', 'tes@tes.tes', '12345678', 'rs5kCYVC0421DL5Xic59NdstnxLLtaoSt9fenCSNsK3tSsDjQUkJB9LJj6E8', '2019-11-24 16:45:26', '2019-11-24 16:45:26'),
(27, 'abds', 'abcd', NULL, 1, 'KCXJEAOUwHrokaWnNuSfJgpBg', 'ababa@ab.ab', '$2y$10$VneZf1rSOWDX5JH2nxXsdO/qEkuG3rVkeD6YicG93PMxAbIwfbHoW', 'nZqHPlOpua0Mqb5YZkZJLaKYBcusgbPqtaMUaAQ8xAMIP5k5ugSl4aoRmXwy', '2020-07-31 18:07:06', '2020-07-31 18:07:06'),
(28, 'mashiroichinose', 'mashiroichinose', NULL, 1, '7UBhDCNqpW0OnLCpXuDt1yZpH', 'aa@aa.aa', '$2y$10$bYgm4LO.rj.8zVlCXqG2Guqu7Kf7McA18nAJUP.h9C4b4d39sbvM6', 'AJlxRnpflZcMauJ191iJLc5nItjkaGf8VxUieSUdZwfKkZAsMvcLe7k1Cv5o', '2020-07-31 18:47:59', '2020-07-31 18:47:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `fishes`
--
ALTER TABLE `fishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fishes_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_pekerja_id_foreign` (`pekerja_id`),
  ADD KEY `produk` (`produk_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pekerja_id` (`pekerja_id`),
  ADD KEY `pembayaran_id` (`pembayaran_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `fishes`
--
ALTER TABLE `fishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fishes`
--
ALTER TABLE `fishes`
  ADD CONSTRAINT `fishes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `fishes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_pekerja_id_foreign` FOREIGN KEY (`pekerja_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
