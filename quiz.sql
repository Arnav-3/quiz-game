-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 09:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `ques_no` int(11) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `correct_opt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`ques_no`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `correct_opt`) VALUES
(20, 'What is the capital of France?', 'London', 'Madrid', 'Paris', 'Berlin', 'Paris'),
(21, 'What is the largest planet in our solar system?', 'Saturn', 'Mars', 'Venus', 'Jupiter', 'Jupiter'),
(22, 'What is the smallest country in the world?', 'San Marino', 'Vatican City', 'Liechtenstein', 'Monaco', 'Vatican City'),
(23, 'What is the tallest mammal in the world?', 'Kangaroo', 'Hippo', 'Giraffe', 'Elephant', 'Giraffe'),
(24, 'What is the largest continent?', 'Africa', 'North America', 'South America', 'Asia', 'Asia'),
(25, 'What is the smallest bird in the world?', 'Finch', 'Robin', 'Hummingbird', 'Sparrow', 'Hummingbird'),
(26, 'What is the capital of Australia?', 'Brisbane', 'Canberra', 'Melbourne', 'Sydney', 'Canberra'),
(27, 'What is the hottest continent on Earth?', 'South America', 'Antarctica', 'Africa', 'Asia', 'Africa'),
(28, 'What is the chemical symbol for gold?', 'Fe', 'Ag', 'Cu', 'Au', 'Au'),
(29, 'What is the largest country in the world?', 'USA', 'Russia', 'China', 'Canada', 'Russia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`ques_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `ques_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
