-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 12:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnum` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `sent_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `pnum`, `message`, `sent_date`) VALUES
(6, 'Ibrahim', 'dejinassar@gmail.com', '09133375146', 'lkgjidjfgkoritgjkldfvb', '2023-09-17 17:42:21'),
(7, 'Ibrahim', 'dejinassar@gmail.com', '09133375146', 'thankshednmflkjhghjkl;edlkfjg', '2023-09-18 13:03:27'),
(8, 'Ibrahim', 'dejinassar@gmail.com', '09133375146', 'ertgyhydsfghjkli;iuytrety', '2023-09-20 13:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pnum` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `first_name`, `last_name`, `username`, `email`, `pnum`, `gender`, `password`) VALUES
(1, '', '', 'Ibrahim', 'dejinassar@gmail.com', '', '', '$2y$10$jIXj3v2OFriZEbD3ipsl1eufniqhUAtDGKoFntz6.ASdX.UB/ALCS'),
(2, '', '', 'Ayo', 'ibr234@gmail.com', '', '', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(3, 'Ibrahim', 'Nassar', '', 'nassar@gmail.com', '09133375146', 'male', '$2y$10$NF1fKxKQqxCUKI41xFyA1.orWo1Ky1FYMjiCH/KlTyT/yRpIW9nNa'),
(4, 'Ibrahim', 'Nassar', 'root', 'ibro@gmail.com', '08053274453', 'male', '$2y$10$m8tPPug35Yfe6vcZWr8PcOK7HvQql0rd/fpTeicMKzq4r/tsexb7u'),
(6, 'Ibrahim', 'Nassar', 'Kola', 'kola@gmail.com', '07066748448', 'female', '$2y$10$xw7lbUTzAYIBlSlv2I8MZOEiUJphkKXJ7pANrbcxeUML0Nml/bHhq');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Ibrahim', '$2y$10$BVlo9Uyy58H9zC0PGoFNeeRADRiR7qIIsYfr6samOAt'),
(2, 'Ibrahim', '$2y$10$9l8skXnU6/0VSUgscU6D0.uHwroUmHUkIpnB77LopOg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnum` varchar(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `pnum`, `gender`, `password`) VALUES
(15, 'Ibrahim', 'Nassar', 'dejinassar@gmail.com', '09133375146', 'male', '$2y$10$lX5TLXwy5r3L2Scs0TbmRe6gsz0vuGsHf9zj9IJ/S3v'),
(16, 'Ibrahim', 'Nassar', 'ibr@gmail.com', '08053274453', 'male', '$2y$10$KH2BSdSD5t6KLXzhWUNUwOXUoPFNuOof4SbVCoueggy'),
(17, 'Ibrahim', 'Nassar', 'nassar@gmail.com', '07066748448', 'male', '$2y$10$.7TokRcRK7Oyi46TQIp/3ujclnN/n9460Tser.xwBDe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
