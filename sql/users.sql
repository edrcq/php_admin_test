-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2022 at 10:50 AM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(4, 'test5', 'a140c0c1eda2def2b830363ba362aa4d7d255c262960544821f556e16661b6ff', '2022-10-21 15:32:04', '2022-10-21 15:32:04'),
(5, 'test6', 'ed0cb90bdfa4f93981a7d03cff99213a86aa96a6cbcf89ec5e8889871f088727', '2022-10-21 15:32:08', '2022-10-21 15:32:08'),
(6, 'test7', 'bd7c911264aae15b66d4291b6850829aa96986b1d3ead34d1fdbfef27056c112', '2022-10-21 15:32:11', '2022-10-21 15:32:11'),
(7, 'test110', '23563039b0b8e23fdb5563593245f78d4a1c3ed6fd320835be50c56ef55c85e1', '2022-10-25 09:30:14', '2022-10-25 09:30:14'),
(8, 'test120', 'b1798d017f7bdd0d0f8b5113ef1ce27e2bdcee2989bd6db9b2456e3390e846a7', '2022-10-25 09:45:01', '2022-10-25 09:45:01'),
(9, 'test133', 'ad23ed9832d5432e03699647528aa511429c224959ff3c5f91bb0a0235ad5b8f', '2022-10-25 09:50:28', '2022-10-25 09:50:28'),
(10, 'test134', 'ad23ed9832d5432e03699647528aa511429c224959ff3c5f91bb0a0235ad5b8f', '2022-10-25 09:51:50', '2022-10-25 09:51:50'),
(11, 'test135', '791ad8e8bd458a75ee2c85459a021e6d0ae1c27c3573807fef99623e817f2e10', '2022-10-25 09:55:11', '2022-10-25 09:55:11'),
(12, 'test136', 'bf3ed890dee9d08ce3549e83c4ac3ba233c8025070081bf0506a9a50716fa6bd', '2022-10-25 09:55:24', '2022-10-25 09:55:24'),
(13, 'test137', '2c11d71ef09661204dcbb1aa987259aef95f53eafa6d807da9b583cfc6cb387a', '2022-10-25 09:55:33', '2022-10-25 09:55:33'),
(14, 'test138', 'f29204004a73caa5e9fdc10176ddfd4cde537c5276fd2396d09b568bd76ae78b', '2022-10-25 09:56:37', '2022-10-25 09:56:37'),
(15, 'test139', 'a8ec458e65c1a901def1abb623173842bad6201670b71e4ac494789091d51b55', '2022-10-25 09:57:39', '2022-10-25 09:57:39'),
(16, 'test140', 'b445c39fefe7a43ea539c9f28d50c02bd8e9db1f15fbd7d39b49a854616e0747', '2022-10-25 09:59:35', '2022-10-25 09:59:35'),
(17, 'test141', '29a24f09edc509f4f14a619ddfe6b74a68b496d0cf67f5a5d133bc2685a0de31', '2022-10-25 10:01:13', '2022-10-25 10:01:13'),
(18, 'test142', '338c0605bab38900480ebcc7fb0651426cc26cd1732579f04b47f779a8962d83', '2022-10-25 10:09:03', '2022-10-25 10:09:03'),
(19, 'test444', 'ca940482ee68082d127ae8f9755941eeefc1d332549b5f066201eb39db57613d', '2022-10-25 16:10:18', '2022-10-25 16:10:18'),
(20, 'test445', 'e30868740b64ba106d0bf4e96c9d200ced2dad8527222df56e467dff9ba226a7', '2022-10-25 16:11:50', '2022-10-25 16:11:50'),
(21, 'test888', '19039f03235dcbe6341e666c370bdad678cbad5fb0bfda3f1e99f801f7aa0300', '2022-10-27 09:36:09', '2022-10-27 09:36:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
