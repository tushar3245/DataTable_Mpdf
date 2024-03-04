-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 05:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable_mpdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `task_models`
--

CREATE TABLE `task_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_models`
--

INSERT INTO `task_models` (`id`, `task_name`, `task_details`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rrgd', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 1, 1, '2024-03-03 10:57:55', '2024-03-03 10:57:55'),
(2, 'rrgd', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i', 1, 0, '2024-03-03 10:58:35', '2024-03-03 11:09:24'),
(3, 'Abdur rahim', 'opular belief, Lorem Ipsum is not simply random text. It has roots in a piece  are many variations of passages of Lorem Ipsum available, but th', 1, 1, '2024-03-03 23:28:31', '2024-03-03 23:28:31'),
(4, 'Abdur rahim', 'htg', 2, 1, '2024-03-04 08:49:49', '2024-03-04 08:49:49'),
(5, 'Rahim', 'erwferferrefgtgrer', 3, 0, '2024-03-04 08:52:27', '2024-03-04 09:08:03'),
(6, 'Abdur rahim', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum i', 1, 1, '2024-03-04 09:20:31', '2024-03-04 09:20:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task_models`
--
ALTER TABLE `task_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_models_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task_models`
--
ALTER TABLE `task_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task_models`
--
ALTER TABLE `task_models`
  ADD CONSTRAINT `task_models_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
