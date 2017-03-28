-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2017 at 06:20 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `BlogPost`
--

CREATE TABLE `BlogPost` (
  `id` tinyint(15) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BlogPost`
--

INSERT INTO `BlogPost` (`id`, `title`, `description`, `image`, `timeStamp`) VALUES
(1, 'Topic 1', 'htsrhtrhrthtrrhtrhsthrth', NULL, '2017-03-24 03:47:03'),
(2, 'ergerggerrg', 'egrgrrgegersgergserg', NULL, '2017-03-24 03:54:12'),
(3, 'f4ffwefwaefawe', 'faweefawefaeeafafaefewf', NULL, '2017-03-24 03:57:54'),
(4, 'erergregesrg', 'serggregsregerserger', NULL, '2017-03-24 04:04:31'),
(5, 'wefweewfwef', 'wefwefwefwefewffwewefewf', NULL, '2017-03-24 04:07:05'),
(6, 'wefewffef', 'aefewfefefaeffeafsfsafe', NULL, '2017-03-24 04:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(15) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'rfrfserrg', 'rsgdrg@dfgdgg.com', '$2y$10$Dip1LSLEUamHpfwZo7gyk.fpXH3Ua/hNea6gaaXl.qPnElIMeEXRG', 'user'),
(2, 'gavin', 'email@email.com', '$2y$10$eDdWh3f1kiqLYz9Wv7yRz.rZKf9SUXXmomqgOPCfiC3.MfoKfqCN2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BlogPost`
--
ALTER TABLE `BlogPost`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BlogPost`
--
ALTER TABLE `BlogPost`
  MODIFY `id` tinyint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
