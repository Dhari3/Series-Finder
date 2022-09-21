-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 10:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shows`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `show_id` int(11) NOT NULL,
  `show_title` varchar(20) DEFAULT NULL,
  `show_director` varchar(60) DEFAULT NULL,
  `show_img` varchar(60) DEFAULT NULL,
  `show_desc` text DEFAULT NULL,
  `show_link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `action1`
--

CREATE TABLE `action1` (
  `show_id` varchar(20) NOT NULL,
  `show_title` varchar(20) DEFAULT NULL,
  `show_director` varchar(60) DEFAULT NULL,
  `show_img` mediumtext DEFAULT NULL,
  `show_desc` text DEFAULT NULL,
  `show_link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `action1`
--

INSERT INTO `action1` (`show_id`, `show_title`, `show_director`, `show_img`, `show_desc`, `show_link`) VALUES
('A01', 'House of the Dragon', 'Ryan J. Condal, George R.R. Martin', 'https://bookfreak21.files.wordpress.com/2020/08/house-of-dragons.jpg?w=936&h=1414', 'An internal succession war within House Targaryen at the height of its power, 172 years before the birth of Daenerys Targaryen.', 'https://www.imdb.com/title/tt11198330/?ref_=adv_li_tt');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('dhari', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `comedy`
--

CREATE TABLE `comedy` (
  `show_id` varchar(20) NOT NULL,
  `show_title` varchar(20) DEFAULT NULL,
  `show_director` varchar(60) DEFAULT NULL,
  `show_img` text DEFAULT NULL,
  `show_desc` text DEFAULT NULL,
  `show_link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comedy`
--

INSERT INTO `comedy` (`show_id`, `show_title`, `show_director`, `show_img`, `show_desc`, `show_link`) VALUES
('C01', 'Cobra Kai', 'Josh Heald', 'https://www.geekykool.com/wp-content/uploads/2020/06/504B54FA-D616-45C5-AFF5-813582C1CECC.jpeg', 'Decades after their 1984 All Valley Karate Tournament bout, a middle-aged Daniel LaRusso and Johnny Lawrence find themselves martial-arts rivals again.', 'https://www.imdb.com/title/tt7221388/?ref_=adv_li_tt');

-- --------------------------------------------------------

--
-- Table structure for table `horror`
--

CREATE TABLE `horror` (
  `show_id` varchar(20) NOT NULL,
  `show_title` varchar(20) DEFAULT NULL,
  `show_director` varchar(60) DEFAULT NULL,
  `show_img` text DEFAULT NULL,
  `show_desc` text DEFAULT NULL,
  `show_link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horror`
--

INSERT INTO `horror` (`show_id`, `show_title`, `show_director`, `show_img`, `show_desc`, `show_link`) VALUES
('H01', 'Devil in Ohio', 'Daria Polatin', 'https://tse3.mm.bing.net/th?id=OIP.oIJXSLczAUqwfNnOv_LKcQHaLN&pid=Api&P=0', 'When a psychiatrist shelters a mysterious cult escapee, her world is turned upside down as the girl\'s arrival threatens to tear her own family apart.', 'https://www.imdb.com/title/tt15432016/?ref_=adv_li_tt');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `show_id` varchar(255) DEFAULT NULL,
  `like_dislike` varchar(100) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`show_id`, `like_dislike`, `rating`, `comment`) VALUES
('C01', 'like', 4, 'good'),
('A01', 'like', 3, 'Average'),
('R01', 'like', 5, 'Top'),
('H01', 'like', 4, 'Scary');

-- --------------------------------------------------------

--
-- Table structure for table `romantic`
--

CREATE TABLE `romantic` (
  `show_id` varchar(20) NOT NULL,
  `show_title` varchar(20) DEFAULT NULL,
  `show_director` varchar(60) DEFAULT NULL,
  `show_img` text DEFAULT NULL,
  `show_desc` text DEFAULT NULL,
  `show_link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `romantic`
--

INSERT INTO `romantic` (`show_id`, `show_title`, `show_director`, `show_img`, `show_desc`, `show_link`) VALUES
('R01', 'Grey\'s Anatomy', 'Shonda Rhimes', 'https://tse4.mm.bing.net/th?id=OIP.KWr45BZ9UzrnR2xaxOhMKwHaJ4&pid=Api&P=0', 'A drama centered on the personal and professional lives of five surgical interns and their supervisors.', 'https://www.imdb.com/title/tt0413573/?ref_=adv_li_tt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
