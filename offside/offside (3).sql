-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 02:56 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offside`
--

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `l_name` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `fixture` text NOT NULL,
  `day` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`l_name`, `time`, `fixture`, `day`, `date`) VALUES
('Premier League', '17:00:00', 'chelsea vs manchester united', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'brighton & hove albion vs newcastle united', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'cardiff city vs fulham', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'manchester city vs burnley', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'west ham vs tottenham hotspurs', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'bournmouth vs southampton', 'Saturday', '2018-10-20'),
('Premier League', '19:30:00', 'wolves vs watford', 'Saturday', '2018-10-20'),
('Premier League', '22:00:00', 'huddersfield vs liverpool', 'Saturday', '2018-10-20'),
('Premier League', '20:30:00', 'everton vs crystal palace', 'Saturday', '2018-10-21'),
('Premier League', '00:30:00', 'arsenal vs leicester city', 'Saturday', '2018-10-23'),
('la-liga', '16:30:00', 'real madrid vs levante', 'Saturday', '2018-10-20'),
('la-liga', '19:45:00', 'valencia vs leganes', 'Saturday', '2018-10-20'),
('la-liga', '22:00:00', 'villareal vs atletico madrid', 'Saturday', '2018-10-20'),
('la-liga', '00:15:00', 'barcelona vs sevilla', 'Sunday', '2018-10-21'),
('bundesliga', '19:00:00', 'wolfsburg vs bayern munich', 'Saturday', '2018-10-20'),
('bundesliga', '19:00:00', 'Bayer Leverkusen vs hannover 96', 'Saturday', '2018-10-20'),
('bundesliga', '19:00:00', 'stuttgart vs bourissa dortmund', 'Saturday', '2018-10-20'),
('bundesliga', '19:00:00', 'augsburg vs rb leipzig', 'Saturday', '2018-10-20'),
('bundesliga', '21:30:00', 'borussia monchengladbach vs mainz', 'Sunday', '2018-10-21'),
('ligue 1', '00:15:00', 'lyon vs nimes', 'Saturday', '2018-10-20'),
('ligue 1', '20:30:00', 'psg vs amiens sc', 'Saturday', '2018-10-20'),
('ligue 1', '23:30:00', 'strasbourg vs monaco', 'Saturday', '2018-10-20'),
('ligue 1', '00:30:00', 'ogc nice vs Olympique Marseille', 'Monday', '2018-10-22'),
('serie a', '18:30:00', 'as roma vs spal', 'Saturday', '2018-10-20'),
('serie a', '21:30:00', 'juventus vs geona', 'Saturday', '2018-10-20'),
('serie a', '00:00:00', 'udinese vs napoli', 'Sunday', '2018-10-21'),
('serie a', '00:00:00', 'inter milan vs ac milan', 'Monday', '2018-10-22'),
('premier league', '19:30:00', 'brighton & hove albion vs wolves', 'Saturday', '2018-10-27'),
('premier league', '19:30:00', 'southampton vs newcastle', 'Saturday', '2018-10-27'),
('premier league', '19:30:00', 'liverpool  vs cardiff city', 'Saturday', '2018-10-27'),
('premier league', '19:30:00', 'fulham vs afc bournmouth', 'Saturday', '2018-10-27'),
('premier league', '19:30:00', 'watford vs huddersfield town', 'Saturday', '2018-10-27'),
('premier league', '22:00:00', 'leicester city vs west ham', 'Saturday', '2018-10-27'),
('premier league', '19:00:00', 'burnley vs chelsea', 'Sunday', '2018-10-28'),
('premier league', '19:00:00', 'crystal palace vs arsenal', 'Sunday', '2018-10-28'),
('premier league', '21:30:00', 'manchester united vs chelsea', 'Sunday', '2018-10-28'),
('premier league', '01:30:00', 'tottenham vs manchester city', 'Tuesday', '2018-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`l_id`, `l_name`) VALUES
(2, 'bundesliga'),
(3, 'la-liga'),
(5, 'ligue 1'),
(1, 'premier league'),
(4, 'serie a');

-- --------------------------------------------------------

--
-- Table structure for table `news_stats`
--

CREATE TABLE `news_stats` (
  `trensfers` text NOT NULL,
  `goals_scored` int(30) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `home_stadium` varchar(20) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `position` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `ga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`t_id`, `t_name`, `home_stadium`, `l_name`, `position`, `points`, `gd`, `ga`) VALUES
(11, 'afc bournmouth', 'vitality stadium', 'premier league', 6, 16, 4, 12),
(12, 'arsenal', 'Emirates stadium', 'premier league', 4, 18, 9, 10),
(13, 'brighton & hove albi', 'amex stadium', 'premier league', 13, 8, -4, 13),
(14, 'burnley', 'turf moor', 'premier league', 12, 8, -2, 12),
(15, 'cardiff city', 'cardiff city stadium', 'premier league', 20, 2, -13, 17),
(16, 'chelsea', 'stamford bridge', 'premier league', 2, 20, 13, 5),
(17, 'crystal palace', 'selhurst park', 'premier league', 14, 7, -4, 9),
(17, 'everton', 'goodison park', 'premier league', 11, 12, 1, 12),
(18, 'fulhaam', 'carven cottage', 'premier league', 17, 5, -12, 21),
(19, 'huddersfield town', 'john smiths stadium', 'premier league', 18, 3, -13, 17),
(20, 'leicester city', 'king power stadium', 'premier league', 10, 12, 2, 12),
(21, 'liverpool', 'anfield', 'premier league', 3, 20, 12, 3),
(22, 'manchester city', 'etihad stadium', 'premier league', 1, 20, 18, 3),
(23, 'manchester united', 'old trafford', 'premier league', 8, 13, -1, 14),
(24, 'new castle united', 'st.jame\'s park', 'premier league', 19, 2, -7, 13),
(25, 'southampton', 'st.mary\'s stadium', 'premier league', 16, 5, -8, 14),
(26, 'tottenham hotspurs', 'white hart lane', 'premier league', 5, 18, 8, 7),
(27, 'watford', 'vicagrace road', 'premier league', 9, 13, -1, 12),
(28, 'west ham', 'london stadium', 'premier league', 15, 7, -5, 15),
(29, 'wolverhampton wander', 'molineux stadium', 'premier league', 7, 15, 3, 6),
(31, 'sevilla', 'Ramón Sánchez Pizjuá', 'la-liga', 1, 16, 10, 8),
(32, 'barcelona', 'camp nou', 'la-liga', 2, 15, 10, 9),
(33, 'atletico madrid', 'Wanda Metropolitano', 'la-liga', 3, 15, 5, 4),
(34, 'real madrid', 'Santiago Bernabéu', 'la-liga', 4, 14, 5, 7),
(35, 'valencia', 'Mestalla Stadium', 'la-liga', 5, 9, -1, 7),
(36, 'bourissa dortmund', 'Westfalenstadion', 'bundesliga', 1, 17, 15, 8),
(37, 'rb leipzig', 'red bull arena', 'bundesliga', 2, 14, 7, 9),
(38, '  Borussia Mönchengl', 'borussia park', 'bundesliga', 3, 14, 6, 9),
(39, 'bayern munich', 'alianz arena', 'bundesliga', 4, 13, 4, 8),
(40, '  Bayer Leverkusen', 'bay arena', 'bundesliga', 5, 7, -6, 13),
(41, 'juventus', 'Allianz Stadium', 'serie a', 1, 24, 13, 5),
(42, 'napoli', 'Stadio San Paolo', 'serie a', 2, 18, 5, 10),
(43, 'as roma', 'Stadio Olimpico', 'serie a', 4, 14, 6, 10),
(44, 'inter milan', 'San Siro Stadium', 'serie a', 3, 16, 6, 6),
(45, 'ac milan', 'san siro stadium', 'serie a', 5, 12, 5, 10),
(46, 'psg', 'Parc des Princes', 'ligue 1', 1, 27, 26, 6),
(47, 'Olympique Marseille', 'Orange Vélodrome', 'ligue 1', 2, 16, 5, 16),
(48, 'Olympique Lyonnais', 'Groupama Stadium', 'ligue 1', 3, 14, 2, 12),
(49, 'ogc nice', 'Allianz Riviera', 'ligue 1', 4, 11, -6, 13),
(50, 'as monaco', 'stade louis II', 'ligue 1', 5, 6, -4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `fav_league` text NOT NULL,
  `fav_team` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`l_name`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD KEY `l_name` (`l_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `fk_teamleague` FOREIGN KEY (`l_name`) REFERENCES `league` (`l_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
