-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2020 at 11:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(2555) DEFAULT NULL,
  `isbn` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `publisher`, `subject`, `description`, `isbn`, `image`) VALUES
(2, 'The C++ Standard Library', 'Nicola M.Josuttis', 'Addison-Wesley', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781292153346', 'TheC++StandardLibrary.jpg'),
(3, 'Programming Principles and Practice Using C++ second edition', 'Bjarne Stroustrup', 'Addison-Wesley', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1292153342221', 'ProgrammingPrinciples.jpg'),
(4, 'The C++ Standard Library Second edition', 'Nicola M.Josuttis', 'Addison-Wesley', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1292222153342', 'TheC++StandardLibrarySecond.jpg'),
(6, 'Programming PHP Advanced', 'Rasmus Lerdorf', 'O\'REILLY', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1292153342222', 'programmingPHPAdvanced.jpg'),
(29, 'Programming PHP', 'Rasmus Lerdorf', 'O\'REILLY', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1292153342555', '9783319226583.jpg'),
(243, 'Teacher planner', 'Non', 'Johan', 'Academic', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9111223413346', '416msz-7uEL._SX385_BO1,204,203,200_.jpg'),
(218, 'PYTHON', 'Anthony Brun', 'Non', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781223413346', '41z1V0zP2WL.jpg'),
(244, 'Three Sisters, Three Queens', 'Philippa Gregory', 'Johan', 'Historical', 'Lorem Ipsum is simply dummy texe the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '11237624123', '6180eGVGE-L.jpg'),
(219, 'Computer Science', 'Cambridge University', 'Cambridge', 'Computer science', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781223413346', '9781107518643.jpg'),
(220, 'Computer Programming', 'Murali Chemuturi', 'CRC Press', 'Computer science', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781223413346', '9781138320482.jpg'),
(221, 'Python', 'Paul Jones', 'Paul Jones', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781223413346', '51hxguh-MsL.jpg'),
(222, 'Programming with MATLAB for Scientists', 'Eugeniy E. Mikhailov', 'CRC Press', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781123153346', '9781498738286.jpg'),
(245, 'National Theatre: All About Theatre', 'National theatre', 'theatre', 'Drama', 'Lorem Ipsum is siry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '87234987123', '51W5uM2uyrL._SX425_BO1,204,203,200_.jpg'),
(223, 'Mastering macOS Programming', 'Stuart Grimshaw', 'Packt', 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, containing Lorem Ipsum passages, recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '9781223413555', 'cover.png'),
(246, 'Tidelands', 'Philippa Gregory', 'Gregory', 'Historical ', 'Lorem Ipsum is simy text ever ley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '987238413', '51mofC3CPzL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `int` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`int`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'test', 'test', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
