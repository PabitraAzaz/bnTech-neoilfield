-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neo`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Pabitra Azaz Ahammed Shaikh', '', '9874676151', '123', 'asd', '2025-06-30 12:55:12', '2025-06-30 12:55:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `why_choose` longtext NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `other_info` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `why_choose`, `service_image`, `other_info`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fabrication Works in the\r\nUAE', 'Majestic delivers exceptional quality and precision across a wide range of materials and applications. From intricate metal fabrication and robust steel fabrication to custom aluminum fabrication and beyond, our skilled team and state-of-the-art facilities ensure your project is executed flawlessly.\n\nWe specialize in structural steel, architectural metalwork, and industrial components. Contact Majestic today for reliable and high-quality fabrication services in UAE.', 'Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely.\n\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.', '', 'Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally Nor who loves or pursues or desires to obtain pain of itself.', '2025-06-30 17:32:06', '2025-06-30 17:32:06', NULL),
(2, 'Fabrication Works in the UAE', 'Majestic delivers exceptional quality and precision across a wide range of materials and applications. From intricate metal fabrication and robust steel fabrication to custom aluminum fabrication and beyond, our skilled team and state-of-the-art facilities ensure your project is executed flawlessly.\r\n\r\nWe specialize in structural steel, architectural metalwork, and industrial components. Contact Majestic today for reliable and high-quality fabrication services in UAE.', 'Complete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally.', 'Service_1751286860.jpg', 'Pleasure and praising pain was born and I will give you a complete account of the systems, and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally Nor who loves or pursues or desires to obtain pain of itself.', '2025-06-30 12:34:20', '2025-06-30 12:34:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `is_logged` enum('yes','no') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL COMMENT '0 - Not Deleted                     \r\n1 - Deleted',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_email`, `user_password`, `is_logged`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin', 'a@mail.com', '202cb962ac59075b964b07152d234b70', 'yes', '0', '2025-06-09 12:08:03', '2025-06-09 12:08:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
