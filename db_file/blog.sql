-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 09:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `created` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `created`, `description`, `attachment`, `user_id`, `category`) VALUES
(1, ' India set out on road to T20 World Cup', '11-03-2021 13:03:07 pm', 'It is the year of the T20 World Cup. A five-match series against a strong England side should offer enough chances for various strands, in selection and team balance, to play out for India\'s team management as they build towards the marquee tournament at home later this year', 'http://localhost:81/myblog/images/ae6e5f855fbebb92c2aaa6515eeff4b5.jpg', 1, 'Sports'),
(2, 'Kohli set for T20I challenge against England', '11-03-2021 13:11:08 pm', 'Team India will now turn their heads towards the five-match T20I series against England that starts on Friday at the Narendra Modi Stadium in Ahmedabad. India defeated England 3-1 in the Test series but now face a tough challenge from the visitors with several limited-overs specialists coming in.', 'http://localhost:81/myblog/images/9c4c3206ddded0c11ef028b5478af7ab.jpeg', 1, 'Sports'),
(3, 'Groovy Springs Back Up TIOBE’s Programming Languages List', '11-03-2021 13:15:01 pm', 'Another month, another update of the TIOBE Index, which attempts to trace the popularity of the world’s programming languages. As with previous editions of the Index, there wasn’t much of a shift in March’s top rankings, with the exception of C rising from second to first place—but further down the list, there have been some changes worth calling out. ', 'http://localhost:81/myblog/images/2a1e06c8db6042d4a266518ffca9b4c4.jpg', 1, 'Programming'),
(4, 'What’s in the huge pandemic relief bill for science?', '11-03-2021 13:18:04 pm', 'The bill is designed primarily to address the economic damage caused by the COVID-19 pandemic and accelerate the distribution of vaccines and treatments that have proved effective against the pandemic coronavirus. In addition to direct cash payments to millions of U.S. residents, the bill includes nearly $60 billion for vaccine and treatment development, manufacturing, distribution, and tracking, as well as COVID-19 testing and contact tracing', 'http://localhost:81/myblog/images/b010cdb5af6a61ca57d80a7bb39c0d93.jpg', 2, 'Science'),
(5, 'Is there really one single thing called science, and has it ever been apolitical?', '11-03-2021 13:19:26 pm', 'Whereas today we tend to associate it with the natural sciences such as chemistry or physics, until the 19th century the word science (from the Latin scientia, knowledge) was generally used to describe any organised approach to gathering knowledge. The study of astronomy, grammar, or music: all could be science. This usage survives in some languages, such as German, where Wissenschaft is used for any form of systematic research from physics to the history of art.', 'http://localhost:81/myblog/images/6ec31135faa22f1a330006de4e5df816.jpg', 2, 'Science'),
(6, 'A year ago, we asked 6 questions about COVID-19. Here’s how the answers evolved', '11-03-2021 13:21:28 pm', 'Outbreaks like the one on the Diamond Princess presented scientists with a unique opportunity to study the virus in a contained space where everyone can be tested. Taking data from cruises can’t happen now because they’ve been canceled, at least in the United States. A broad look at many studies in December estimated that infections resulted in death on average 0.68 percent of the time. But that single number obscures the role that age, quality of health care, social distancing measures and other factors play in influencing risk of death', 'http://localhost:81/myblog/images/3fdc59f544d5c7b33516e47eae127b60.jpeg', 2, 'Science'),
(7, 'C reigns supreme and Java edges Python in TIOBE\'s latest programming language rankings', '11-03-2021 13:23:44 pm', 'The TIOBE roundup also lists historical year-over-year data to detail long-term trends in the rankings. Compared with March 2020, Classic Visual Basic has jumped from 18 to 12 in the latest list. During this time period, Delphi/Object Pascal has climbed from 20 to 14 and Groovy has surged from 36 to 15. Between March 2020 and March 2021, MATLAB has slipped three spots, falling from 18 to 15. During this same time period, Swift slid from 13 to 19.', 'http://localhost:81/myblog/images/08a2a1ef9197d910c1841eada2eb5d37.jpg', 3, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `lastname`) VALUES
(1, 'akshay12@gmail.com', '$2y$10$5Dm7G/6esgFHohHKMfoTE.Ykh23YTV2l54tuoGpDNq6gH1Vl/r6JW', 'AKSHAY', 'BHASKARE'),
(2, 'sid@gmail.com', '$2y$10$0TzLwJG5PQtO4dE5doXeHOJjAroX3KcUzq.CWclGkNpuDQcIhGVu.', 'SIDDHANT', 'LAHANE'),
(3, 'fawad@gmail.com', '$2y$10$0425CBGc0g8F9LJAMsrzOO2bKpuRknKFuVNOKND5xXsxB6yUq9uEi', 'FAWAD', 'MOHOMMED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
