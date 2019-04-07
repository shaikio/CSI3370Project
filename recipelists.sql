-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 08:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipelists`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipes_table`
--

CREATE TABLE `recipes_table` (
  `id` int(11) NOT NULL,
  `recipe_title` varchar(45) NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipe_instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes_table`
--

INSERT INTO `recipes_table` (`id`, `recipe_title`, `recipe_ingredients`, `recipe_instructions`) VALUES
(1, 'null', 'null', 'null'),
(7, 'work', 'please', 'come on'),
(9, 'test3', 'test3', 'test3'),
(10, 'Demo', 'Stufff goes here', 'Cook stuff'),
(11, 'testinclass', 'jdkafjkjdfkds', 'dfkdafkjdskfdk'),
(13, 't', 't1', 't2'),
(14, 'wh', 'wh', 'wh');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `user_password` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `user_name`, `user_password`, `email`) VALUES
(1, 'admin', 'admin', 'adminatadminstreet@admin.admin'),
(2, 'steve', 'steve', 'steve@steve.com'),
(3, 'testing', 'testing', 'danke@danke.de'),
(4, 'csi3370', 'csi3370', 'weber@weber.weber'),
(5, 'inclass', 'aaaaa', 'rodina_moya@heimatland');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`),
  ADD KEY `image_2` (`image`);

--
-- Indexes for table `recipes_table`
--
ALTER TABLE `recipes_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipes_table`
--
ALTER TABLE `recipes_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
