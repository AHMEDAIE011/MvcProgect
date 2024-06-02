-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 04:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`) VALUES
(20, '1717271375.jpg', 5),
(21, '1717271391.jpg', 5),
(22, '1717338451.jpg', 5),
(23, '1717338590.jpg', 2),
(24, '1717338604.jpg', 2),
(25, '1717338616.jpg', 2),
(26, '1717338666.jpg', 6),
(27, '1717338676.jpg', 6),
(28, '1717338684.jpg', 6),
(29, '1717338798.jpg', 7),
(30, '1717338813.jpg', 7),
(31, '1717338822.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `details`, `service_id`) VALUES
(2, 'prudect Web design 1', 'The last prudect in inserted', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos numquam? Laborum delectus sint facilis natus ratione cum exercitationem? Alias nam aspernatur molestiae culpa mollitia vel fugiat, repellendus quibusdam sunt.\r\n', 1),
(5, 'products Markting 1', 'this is products details', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos numquam? Laborum delectus sint facilis natus ratione cum exercitationem? Alias nam aspernatur molestiae culpa mollitia vel fugiat, repellendus quibusdam sunt.', 8),
(6, 'products Web design 2', 'The products details', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos numquam? Laborum delectus sint facilis natus ratione cum exercitationem? Alias nam aspernatur molestiae culpa mollitia vel fugiat, repellendus quibusdam sunt.', 1),
(7, 'products Markting 2', 'this is last product details', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, dignissimos numquam? Laborum delectus sint facilis natus ratione cum exercitationem? Alias nam aspernatur molestiae culpa mollitia vel fugiat, repellendus quibusdam sunt.', 8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `details`) VALUES
(1, 'Web design ', 'Web design : Lorem ipsum dolor, sit amet consectetur '),
(8, 'Markting     ', 'Markting:  Lorem ipsum dolor, sit amet consectetur ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`) VALUES
(5, 'ahmed', 'ahmed@gmail.com', '$2y$10$rvv5HJ3rMOFhJ3ihuu7DrOskdB7jOcnSAp.iUHuEV6SXtiRHfRJyi', 'ali'),
(2, 'ahmed', 'aaadaasdaads@gmail.com', '$2y$10$P1NUvxGme6kcAJUxt1KYFeMdc5PQma0ap/TBKNzMyENbUrkqjdLmW', 'ahmedaieahmedaie'),
(3, 'ahemd ales', 'ahmed@gmail.com', '$2y$10$bpQQW5vjCLNK//xe9mn5fe7STjnZvs8g0D9R4qGFu036VOu5DV/zW', 'ahemd ales'),
(9, 'adminAhmedsss', 'admins@admin.com', '$2y$10$/pWIm4zVjAqWN005l4s5OuAYgaTzkS55mnmGKpKLGVh3He3ZOgcOm', 'ahemd asds'),
(6, 'ahmed', 'ahmed@gmail.com', '$2y$10$t8b/e93fySUpls546tf/9u5X9PbGzX5cvb8NfnyEt93FX4r2CDU.u', 'ali'),
(7, 'AHMEDALI', 'info@gmail.com', '$2y$10$IOCXvMNLI2Hs6dtaPvCPGOI/ArCmdUeAi22ZI4QYHa9fkiGVsx3Zi', 'AHMEDALI'),
(8, 'ahmedAli2', 'info2@gmail.com', '$2y$10$.IXq91Ef3OzFTVxCE2VQzuHq2USA/XtUfgzX1hP7DAdxPw3v0u9QO', 'ahmed ali'),
(10, 'adminAhmedAli', 'admin@admin.com', '$2y$10$Xkji4Hi7d2//is8mdrmHgOK/Xkuxlk.0HGK3XLB9MMzJc.lBbY7du', 'ahmed ali sayed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
