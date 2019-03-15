-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 11:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
(1, 'Test Recipe', 'Fun', 'Cook '),
(7, 'work', 'please', 'come on'),
(8, 'test2', 'test2', 'test2'),
(9, 'test3', 'test3', 'test3'),
(10, 'Demo', 'Stufff goes here', 'Cook stuff'),
(11, 'testinclass', 'jdkafjkjdfkds', 'dfkdafkjdskfdk');

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
-- Indexes for table `recipes_table`
--
ALTER TABLE `recipes_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes_table`
--
ALTER TABLE `recipes_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--
ALTER TABLE `users_table` ADD UNIQUE( `user_name`);
ALTER TABLE `users_table` ADD PRIMARY KEY( `user_name`);
--
-- Constraints for table `users_table`
--
ALTER TABLE `users_table`
  ADD CONSTRAINT `users_table_ibfk_1` FOREIGN KEY (`id`) REFERENCES `recipes_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


