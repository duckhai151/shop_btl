-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2020 lúc 04:49 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `parent_id`) VALUES
(1, 'Ghế sofa', 'feature_4.png', 0),
(2, 'Ghế coffee', 'feature_2.png', 0),
(5, 'Ghế thư giãn', 'feature_3.png', 0),
(6, 'Ghế văn phòng', 'ghevp1.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`) VALUES
(1, 2, 2),
(2, 2, 3),
(5, 1, 4),
(6, 5, 5),
(7, 6, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sản phẩm rất tốt', 2, 14, '2020-10-29 06:50:48', '2020-10-29 06:50:48'),
(2, 'Sản phẩm rất chất lượng !', 6, 14, '2020-10-29 08:58:53', '2020-10-29 08:58:53'),
(3, 'Sản phẩm này còn không ?', 3, 14, '2020-10-30 04:25:23', '2020-10-30 04:25:23'),
(4, 'Đẹp', 3, 14, '2020-11-03 03:17:10', '2020-11-03 03:17:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `price`, `stock`, `img`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Ghế Coffee 1', '100x50x70', 450000, 20, 'coffee-chair-1.png', '', '2020-10-20 05:46:14', '2020-10-20 05:46:14'),
(3, 'Ghế Coffee 2', '100x50x70', 500000, 34, 'coffee-chair-2.png', '', '2020-10-20 05:46:14', '2020-10-20 05:46:14'),
(4, 'Ghế Coffee 3', 'sp1', 400000, 22, 'product_3.png', '', '2020-10-21 03:24:26', '2020-10-21 03:24:26'),
(5, 'Ghế Coffee 4', 'sp2', 470000, 33, 'product_4.png', '', '2020-10-21 03:24:26', '2020-10-21 03:24:26'),
(6, 'Ghế Coffee 5', 'sp3', 350000, 45, 'product_5.png', '', '2020-10-21 03:24:35', '2020-10-21 03:24:35'),
(7, 'Ghế Coffee 6', '1231', 670000, 44, 'product_1.png', '', '2020-11-03 02:58:33', '2020-11-03 02:58:33'),
(8, 'Ghế Coffee 7', '1231', 420000, 32, 'product_8.png', '', '2020-11-03 02:59:25', '2020-11-03 02:59:25'),
(9, 'Ghế coffee 8', '2312', 510000, 55, 'product_2.png', '', '2020-11-03 03:00:45', '2020-11-03 03:00:45'),
(10, 'Ghế văn phòng 1', '324', 990000, 77, 'ghevp1.png', '', '2020-11-03 03:07:03', '2020-11-03 03:07:03'),
(11, 'Ghế văn phòng 2', '324', 900000, 72, 'ghevp2.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(12, 'Ghế văn phòng 3', '324', 880000, 77, 'ghevp3.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(13, 'Ghế văn phòng 4', '324', 700000, 27, 'ghevp4.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(14, 'Ghế văn phòng 5', '324', 1000000, 47, 'ghevp5.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(15, 'Ghế văn phòng 6', '324', 990000, 75, 'ghevp6.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(16, 'Ghế văn phòng 7', '324', 750000, 70, 'ghevp7.png', '', '2020-11-03 03:08:51', '2020-11-03 03:08:51'),
(17, 'Ghế văn phòng 8', '324', 550000, 77, 'ghevp8.png', '', '2020-11-03 03:08:52', '2020-11-03 03:08:52'),
(18, 'Ghế sofa 1', '23432', 2000000, 30, 'sofa1.png', '', '2020-11-03 03:20:00', '2020-11-03 03:20:00'),
(19, 'Ghế sofa 2', '23432', 2200000, 30, 'sofa2.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(20, 'Ghế sofa 3', '23432', 3000000, 11, 'sofa3.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(21, 'Ghế sofa 4', '23432', 1900000, 22, 'sofa4.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(22, 'Ghế sofa 5', '23432', 1700000, 34, 'sofa5.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(23, 'Ghế sofa 6', '23432', 2500000, 30, 'sofa6.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(24, 'Ghế sofa 7', '23432', 3000000, 35, 'sofa7.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(25, 'Ghế sofa 8', '23432', 14000000, 30, 'sofa8.png', '', '2020-11-03 03:21:12', '2020-11-03 03:21:12'),
(26, 'Ghế thư giãn 1', '3432', 2400000, 22, 'rl1.png', '', '2020-11-03 03:33:13', '2020-11-03 03:33:13'),
(27, 'Ghế thư giãn 2', '3432', 2400000, 22, 'rl2.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(28, 'Ghế thư giãn 3', '3432', 2400000, 22, 'rl3.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(29, 'Ghế thư giãn 4', '3432', 2400000, 22, 'rl4.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(30, 'Ghế thư giãn 5', '3432', 2400000, 22, 'rl5.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(31, 'Ghế thư giãn 6', '3432', 2400000, 22, 'rl6.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(32, 'Ghế thư giãn 7', '3432', 2400000, 22, 'rl7.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12'),
(33, 'Ghế thư giãn 8', '3432', 2400000, 22, 'rl8.png', '', '2020-11-03 03:41:12', '2020-11-03 03:41:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đức Khải', 'duckhai151@gmail.com', 'aaa', '123456789', 'ABCXYE', NULL, NULL, NULL),
(2, 'Nguyễn Đức Khải', 'duckhai151111@gmail.com', 'aaaaaa', '123456789', 'ABCXYE', NULL, '2020-10-26 01:21:22', '2020-10-26 01:21:22'),
(3, 'Nguyễn Đức Khải', 'duckhai12251@gmail.com', 'aaa', '123456789', 'ABCXYE', NULL, '2020-10-26 01:22:38', '2020-10-26 01:22:38'),
(4, 'Nguyễn Đức Khải', 'duckhai15ss1@gmail.com', 'ss', NULL, 'ABCXYE', NULL, '2020-10-26 01:25:13', '2020-10-26 01:25:13'),
(6, 'Nguyễn Đức Khải', 'duckhai151222@gmail.com', 'abc', '123456789', 'ABCXYE', NULL, '2020-10-26 01:27:47', '2020-10-26 01:27:47'),
(7, 'Nguyễn Đức Khải', 'duckhai15aas1@agmail.com', '$2y$10$33jYyEReaaejk37.BkXtCeC2AvXx8UY1q8S/nJ0SyMebsbfDjU8Im', '123456789', 'ABCXYE', NULL, '2020-10-26 01:31:38', '2020-10-26 01:31:38'),
(8, 'Nguyễn Đức Khải', 'duckhai15122222@gmail.com', '$2y$10$h4gcWojwYpRR/rR2PdMsSeNloPvd3cLCv.xyEKWntdF6MFTFfEK9u', '123456789', 'ABCXYE', NULL, '2020-10-26 01:57:47', '2020-10-26 01:57:47'),
(10, 'Nguyễn Đức Khải', 'du111ckhai151@gmail.com', '$2y$10$2i54h46aYhn91wDR6Xx.1OaJrnpajjHHA6BxlPssJPX0dzLQoYnaK', '123456789', 'ABCXYE', NULL, '2020-10-26 01:59:39', '2020-10-26 01:59:39'),
(11, 'Nguyễn Đức Khải', 'duckaahai151@gmail.com', '$2y$10$1OXAkHPK/SQxJ6NIzhCqCumRPcIrM/ZmDSRy0dgyI8VfchUHMWzly', '123456789', 'ABCXYE', NULL, '2020-10-26 02:00:28', '2020-10-26 02:00:28'),
(13, 'Nguyễn Đức Khải', 'duckssshai151@gmail.com', '$2y$10$kbeGUGo0c4n9DprSqDEFXuJbqE614PdbqukqhnX.mYvFvG9VhGKEO', '123456789', 'ABCXYE', NULL, '2020-10-26 02:00:52', '2020-10-26 02:00:52'),
(14, 'Nguyễn Đức Khải', 'user@gmail.com', '$2y$10$ROqHcyWzhAhpSnn33XpIoOUib7jENAYVbvkvk80PMmQBrLrSZNiyG', '123456789', 'ABCXYE', 'ZHdqlMECM0cnVmbiEYvUeVPPWBqasBj25eV5lpHSFeEB2UeHOyATaSWkCoRR', '2020-10-26 19:56:47', '2020-10-26 19:56:47'),
(15, 'Nguyễn A', 'user1@gmail.com', '$2y$10$bxtlb01nZIf6gGDDOxqZvu63Eim.zy78kDntxBTK8joVZtsszj01a', '123456789', 'ABCXYE', 'yeLRqRhgDdroLHVtWrok6yn7ZjFOGjpLnKBCXSs3N0VYpVR7n9bqteo3MUzp', '2020-10-31 21:54:20', '2020-10-31 21:54:20'),
(16, 'User 2', 'user2@gmail.com', '$2y$10$lCS7sCM7YO/N5ZN6JxA8XONgLwX7Dp5zd.w8YWwhqCrVSy14EE/tS', '123456789', 'ABCXYE', NULL, '2020-10-31 22:04:18', '2020-10-31 22:04:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
