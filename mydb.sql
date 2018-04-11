-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 08:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsell`
--

CREATE TABLE `bsell` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bookname` varchar(30) NOT NULL,
  `pub_name` varchar(30) NOT NULL,
  `year_of_pub` int(10) NOT NULL,
  `semofbook` varchar(30) NOT NULL,
  `catofbook` varchar(30) NOT NULL,
  `bcond` varchar(30) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `no1` varchar(10) NOT NULL,
  `no2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsell`
--

INSERT INTO `bsell` (`id`, `name`, `bookname`, `pub_name`, `year_of_pub`, `semofbook`, `catofbook`, `bcond`, `cost`, `no1`, `no2`) VALUES
(1, 'pawan', 'EM', 'Techmax', 2017, '1', 'computer', 'good', '200', '2147483647', '2147483647'),
(2, 'pawan', 'EM', 'Technical', 2016, 'sem1', 'computer ', 'good', '250', '2147483647', '2147483647'),
(3, 'akshay', 'CG', 'Techmax', 2014, '4', 'computer dept.', 'worst', '250', '2147483647', '2147483647'),
(4, 'akshay', 'AM-I', 'Techmax', 2016, 'sem1', 'computer', 'good', '200', '2147483647', '2147483647'),
(5, 'Vinit', 'AM-I', 'Techmax', 2016, 'sem1', 'computer', 'good', '300', '9833291793', '2147483647'),
(6, 'akshay', 'AM-I', 'Techmax', 2013, '1', 'computer dept.', 'good', '400', '7878787878', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clg` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `ph` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `roll`, `user_name`, `pass`, `email`, `clg`, `branch`, `sem`, `year`, `ph`) VALUES
(1, 'pawan', '14ce1017', 'pawangl', 'pawan555', 'p@g.com', 'rait', 'computer', '', 'fe', '1010101010'),
(2, 'pawan', '14ce1017', 'pawangl', 'pawan555', 'p@g.com', 'rait', 'computer', '', 'fe', '2147483647'),
(3, 'sahil', '12ce1019', 'sahilgl', '12345', 's@g.com', 'rait', 'IT', '', 'SE', '2147483647'),
(4, 'akshay', '8', 'akshay', '12345', 'ak@g.com', 'rait', 'computer', 'SEM-1', 'TE', '2147483647'),
(5, 'gururaj', '14ce1017', 'guru', '123', 'fg@g.com', 'rait', 'comps', '', '2016', '8484848484'),
(6, 'viraj', '14et1019', 'viraj', '123', 'pa@g.com', 'Rait', 'extc', 'SEM-6', 'TE', '9898989898'),
(7, 'ghg', '45fg', 'ty', 'tyty', 'ty@g.com', 'dfdf', 'rtrt', '', '2', '6767676767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsell`
--
ALTER TABLE `bsell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bsell`
--
ALTER TABLE `bsell`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
