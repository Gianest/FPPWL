-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 06:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `video_id`, `user_id`, `comment`, `tgl`) VALUES
(6, 6, 1, 'TEST2', '2020-12-29'),
(7, 6, 1, 'TEST2', '2020-12-29'),
(28, 7, 2, 'TES4', '2020-12-29'),
(29, 10, 2, 'TES5', '2020-12-29'),
(30, 6, 1, 'k', '2020-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `rec_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`rec_id`, `user_id`, `video_id`) VALUES
(1, 0, 6),
(2, 0, 6),
(3, 0, 7),
(4, 0, 6),
(5, 0, 6),
(6, 0, 6),
(7, 1, 7),
(8, 1, 7),
(9, 0, 6),
(10, 0, 6),
(11, 0, 7),
(12, 0, 6),
(13, 0, 6),
(14, 0, 6),
(15, 2, 7),
(16, 2, 7),
(17, 2, 10),
(18, 0, 6),
(19, 0, 6),
(20, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL,
  `pict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `e-mail`, `nama`, `password`, `pict`) VALUES
(1, 'gianest@gmail.com', 'Gianest', '1234qwert', 'img0'),
(2, 'admin', 'admin', 'qwert1234', 'img1'),
(9, 'ceguk@gmail.com', 'yaoming', '5ZwVNPqC88bUT8k', ''),
(12, 'a@a.com', 'gfdhdsfgh', '5ZwVNPqC88bUT8k', ''),
(14, 'you@example.com', 'Paceklik', '5ZwVNPqC88bUT8k', ''),
(15, 'd@ds.co.id', 'aaaaaaaa', 'sssss', ''),
(16, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `view` int(11) NOT NULL,
  `date` date NOT NULL,
  `like` int(11) NOT NULL,
  `link` text NOT NULL,
  `descc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `user_id`, `judul`, `view`, `date`, `like`, `link`, `descc`) VALUES
(6, 1, 'Hero Stock', 0, '2020-12-26', 0, 'upload/20201226161027.mp4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dui sed turpis efficitur laoreet. Phasellus vel augue lacinia, bibendum lacus non, egestas massa. Mauris vitae velit non ex vestibulum varius ullamcorper suscipit ante. Aliquam erat volutpat. Nam quis fermentum leo, a finibus libero. Nunc luctus odio laoreet purus congue, ut eleifend orci fermentum. Aenean ut arcu lacinia, scelerisque lectus ac, pharetra quam. Fusce a lacinia diam. Sed sit amet condimentum metus, vitae viverra tortor. '),
(7, 1, 'Nvideo', 0, '2020-12-27', 0, 'upload/20201227153436.mp4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dui sed turpis efficitur laoreet. Phasellus vel augue lacinia, bibendum lacus non, egestas massa. Mauris vitae velit non ex vestibulum varius ullamcorper suscipit ante. Aliquam erat volutpat. Nam quis fermentum leo, a finibus libero. Nunc luctus odio laoreet purus congue, ut eleifend orci fermentum. Aenean ut arcu lacinia, scelerisque lectus ac, pharetra quam. Fusce a lacinia diam. Sed sit amet condimentum metus, vitae viverra tortor. '),
(10, 1, 'Super Stock1', 0, '2020-12-27', 0, 'upload/20201226161028.mp4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dui sed turpis efficitur laoreet. Phasellus vel augue lacinia, bibendum lacus non, egestas massa. Mauris vitae velit non ex vestibulum varius ullamcorper suscipit ante. Aliquam erat volutpat. Nam quis fermentum leo, a finibus libero. Nunc luctus odio laoreet purus congue, ut eleifend orci fermentum. Aenean ut arcu lacinia, scelerisque lectus ac, pharetra quam. Fusce a lacinia diam. Sed sit amet condimentum metus, vitae viverra tortor. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
