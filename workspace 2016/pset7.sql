-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 01:03 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pset7`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(10) NOT NULL,
  `symbol` text NOT NULL,
  `name` text NOT NULL,
  `share` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `operation` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `symbol`, `name`, `share`, `price`, `total`, `operation`, `date`) VALUES
(33, 'goog', 'Alphabet Inc.', 5, 802, 4011, 'buy', '2017-01-19 21:21:52'),
(33, 'FREE', 'FreeSeas Inc.', 2, 1, 2, 'buy', '2017-01-19 21:22:01'),
(33, 'goog', 'Alphabet Inc.', 3, 802, 2407, 'buy', '2017-01-19 21:22:11'),
(33, 'TR', 'Tootsie Roll Industries, Inc. C', 34, 38, 1301, 'buy', '2017-01-19 21:22:24'),
(33, 'free', 'FreeSeas Inc.', 20, 1, 23, 'buy', '2017-01-19 21:22:33'),
(33, 'FREE', 'FreeSeas Inc.', 6, 1, 7, 'buy', '2017-01-19 21:22:45'),
(33, 'FREE', 'FreeSeas Inc.', 1, 1, 1, 'buy', '2017-01-19 21:23:04'),
(33, 'FREE', 'FreeSeas Inc.', 5, 1, 6, 'sell', '2017-01-19 21:23:19'),
(33, 'goog', 'Alphabet Inc.', 7, 802, 5615, 'sell', '2017-01-19 21:25:06'),
(33, 'edd', 'Morgan Stanley Emerging Markets', 56, 7, 413, 'buy', '2017-01-19 21:25:26'),
(35, 'Goog', 'Alphabet Inc.', 1, 802, 802, 'buy', '2017-01-19 21:32:00'),
(35, 'Usd', 'ProShares Ultra Semiconductors', 10, 69, 691, 'buy', '2017-01-19 21:32:58'),
(35, 'Yhoo', 'Yahoo! Inc.', 18, 42, 758, 'buy', '2017-01-19 21:34:41'),
(35, 'Yhoo', 'Yahoo! Inc.', 18, 42, 758, 'sell', '2017-01-19 21:38:32'),
(35, 'Usd', 'ProShares Ultra Semiconductors', 10, 69, 691, 'sell', '2017-01-19 21:39:12'),
(35, 'Goog', 'Alphabet Inc.', 1, 802, 802, 'sell', '2017-01-19 21:39:29'),
(33, 'edd', 'Morgan Stanley Emerging Markets', 30, 7, 221, 'buy', '2017-01-19 22:44:48'),
(33, 'edd', 'Morgan Stanley Emerging Markets', 86, 7, 635, 'sell', '2017-01-19 22:45:09'),
(33, 'goog', 'Alphabet Inc.', 9, 805, 7245, 'buy', '2017-01-22 16:35:52'),
(33, 'goog', 'Alphabet Inc.', 8, 805, 6440, 'sell', '2017-01-22 16:36:23'),
(33, 'edd', 'Morgan Stanley Emerging Markets', 100, 7, 738, 'buy', '2017-01-22 16:37:30'),
(9, 'yhoo', 'Yahoo! Inc.', 1, 45, 45, 'buy', '2017-01-27 14:20:04'),
(9, 'oi', 'Owens-Illinois, Inc. Common Sto', 20, 19, 386, 'buy', '2017-01-27 14:21:33'),
(9, 'yum', 'Yum! Brands, Inc.', 7, 65, 457, 'buy', '2017-01-27 14:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `symbol` text NOT NULL,
  `shares` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `symbol`, `shares`) VALUES
(33, 33, 'goog', 2),
(33, 33, 'FREE', 24),
(33, 33, 'TR', 34),
(33, 33, 'edd', 100),
(9, 9, 'yhoo', 1),
(9, 9, 'oi', 20),
(9, 9, 'yum', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `cash` decimal(65,4) unsigned NOT NULL DEFAULT '10000.0000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `cash`) VALUES
(1, 'andi', '$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS', 10000.0000),
(2, 'caesar', '$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa', 10000.0000),
(3, 'eli', '$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW', 10000.0000),
(4, 'hdan', '$2y$10$o9a4ZoHqVkVHSno6j.k34.wC.qzgeQTBHiwa3rpnLq7j2PlPJHo1G', 10000.0000),
(5, 'jason', '$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe', 10000.0000),
(6, 'john', '$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy', 10000.0000),
(7, 'levatich', '$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK', 10000.0000),
(8, 'rob', '$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2', 10000.0000),
(9, 'skroob', '$2y$10$395b7wODm.o2N7W5UZSXXuXwrC0OtFB17w4VjPnCIn/nvv9e4XUQK', 9196.9600),
(10, 'zamyla', '$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e', 10000.0000),
(33, 'remki', '$2y$10$7Cw0iYS7o828Pc1cfv22deQGu1/yrS8OyYeRCqJ/pEdIQD0SkYZTi', 7436.7050),
(34, 'ada', '$2y$10$oH3PTBrt867hkBwPQUlT5up3p5HkahANkybfJz8QSDqbJNGC6XmZ2', 10000.0000),
(35, 'shahin', '$2y$10$RHHCT8tZZWqxMBZEYdfHXO4v3WvsNc3fRXL5.fy2wUyqG9KMcV0D6', 2262.5300),
(36, 'Sahin', '$2y$10$C35r.z6CzT5Jif/Qib5rFOu.jdcm/RGqDh/80j7Al0AtpLgBMiB8S', 10000.0000),
(37, 'Muge', '$2y$10$2atZOylAasx0BvXXg7bTmelxc0k56GgkFs.b0v9r9J8nOJ7e7bwIi', 7587.8200);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
