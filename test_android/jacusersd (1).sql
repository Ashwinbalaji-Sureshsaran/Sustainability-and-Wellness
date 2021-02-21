-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2019 at 02:41 AM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_sput`
--

-- --------------------------------------------------------

--
-- Table structure for table `jacusersd`
--

CREATE TABLE `jacusersd` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `ph` text NOT NULL,
  `typ` text NOT NULL,
  `trno` text NOT NULL,
  `tramt` text NOT NULL,
  `tbank` text NOT NULL,
  `tdate` text NOT NULL,
  `st1` text NOT NULL,
  `st2` text NOT NULL,
  `eid` int(11) NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jacusersd`
--

INSERT INTO `jacusersd` (`username`, `password`, `email`, `ph`, `typ`, `trno`, `tramt`, `tbank`, `tdate`, `st1`, `st2`, `eid`, `created_at`, `updated_at`) VALUES
('Saravanan', 'principal', 'pkn', 'asddd hhdhd hhdhd ', 'sd@gmail.com', '9632587410', 'NEFT', 'hdfc', '5000', '2580', '25022020', 12, '2019-12-17 04:30:45', '2019-12-17 04:30:45'),
('Saran', 'dd', 'jjdjd', 'nnxnxnxn', 'gg@gg.com', '9632580741', 'DD', '1,100,2,200', '3,300,4,400', 'paper', 'hdfc,1000,5', 13, '2019-12-17 04:34:50', '2019-12-17 04:34:50'),
('E. Sahaya Merlin', 'Assistant Professor of English ', 'Jayaraj Annapackiam College for Women', 'Jayaraj Annapackiam College for Women,  Periyakulam', 'merlinephrem@gmail.com', '9500262462', 'DD', '22,1000,22,1200', '22,500,22,200', 'Recent trends in ELT', 'Indian Overseas Bank,2200,22', 14, '2019-12-21 22:34:43', '2019-12-21 22:34:43'),
('E. Sahaya Merlin', 'Assistant Professor of English ', 'Jayaraj Annapackiam College for Women', 'Jayaraj Annapackiam College for Women,  Periyakulam', 'merlinephrem@gmail.com', '9500262462', 'DD', '22,1000,22,1200', '22,500,22,200', 'Recent trends in ELT', 'Indian Overseas Bank,2200,22', 15, '2019-12-21 22:34:53', '2019-12-21 22:34:53'),
('Petricia Alphine Nirmala', 'Assistant Professor of English', 'Jayaraj Annapackiam College for Women', 'Jayaraj Annapackiam College for Women,  Periyakulam', 'petriciaalphine@gmail.com', '9500262462', 'NEFT', 'Indian Overseas Bank', '2200', '205', '20.12.2019', 16, '2019-12-21 22:39:29', '2019-12-21 22:39:29'),
('Petricia Alphine Nirmala', 'Assistant Professor of English', 'Jayaraj Annapackiam College for Women', 'Jayaraj Annapackiam College for Women,  Periyakulam', 'petriciaalphine@gmail.com', '9500262462', 'NEFT', 'Indian Overseas Bank', '2200', '205', '20.12.2019', 17, '2019-12-21 22:39:33', '2019-12-21 22:39:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jacusersd`
--
ALTER TABLE `jacusersd`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jacusersd`
--
ALTER TABLE `jacusersd`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
