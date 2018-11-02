-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 10:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `t_id` int(11) NOT NULL,
  `api_id` int(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `home_stadium` varchar(40) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `position` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `gd` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `ig` text,
  `twitter` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`t_id`, `api_id`, `t_name`, `home_stadium`, `l_name`, `position`, `points`, `gd`, `ga`, `ig`, `twitter`) VALUES
(11, 1044, 'afc bournemouth', 'vitality stadium', 'premier league', 6, 16, 4, 12, 'https://www.instagram.com/officialafcb/?hl=en', 'https://twitter.com/afcbournemouth?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(12, 57, 'arsenal', 'Emirates stadium', 'premier league', 4, 18, 9, 10, 'https://www.instagram.com/arsenal/?hl=en', 'https://twitter.com/Arsenal?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(13, 397, 'brighton', 'amex stadium', 'premier league', 13, 8, -4, 13, 'https://www.instagram.com/officialbhafc/?hl=en', 'https://twitter.com/OfficialBHAFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(14, 328, 'burnley', 'turf moor', 'premier league', 12, 8, -2, 12, 'https://www.instagram.com/burnleyofficial/?hl=en', 'https://twitter.com/BurnleyOfficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(15, 715, 'cardiff city', 'cardiff city stadium', 'premier league', 20, 2, -13, 17, 'https://www.instagram.com/cardiffcityfc/?hl=en', 'https://twitter.com/CardiffCityFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(16, 61, 'chelsea', 'stamford bridge', 'premier league', 2, 20, 13, 5, 'https://www.instagram.com/chelseafc/?hl=en', 'https://twitter.com/ChelseaFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(17, 354, 'crystal palace', 'selhurst park', 'premier league', 14, 7, -4, 9, 'https://www.instagram.com/cpfc/?hl=en', 'https://twitter.com/CPFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(18, 63, 'fulham', 'craven cottage', 'premier league', 17, 5, -12, 21, 'https://www.instagram.com/fulhamfc/?hl=en', 'https://twitter.com/FulhamFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(19, 394, 'huddersfield town', 'john smiths stadium', 'premier league', 18, 3, -13, 17, 'https://www.instagram.com/htafcinstagram/?hl=en', 'https://twitter.com/htafcdotcom?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(20, 338, 'leicester city', 'king power stadium', 'premier league', 10, 12, 2, 12, 'https://www.instagram.com/lcfc/?hl=en', 'https://twitter.com/LCFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(21, 64, 'liverpool', 'anfield', 'premier league', 3, 20, 12, 3, 'https://www.instagram.com/liverpoolfc/?hl=en', 'https://twitter.com/LFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(22, 65, 'manchester city', 'etihad stadium', 'premier league', 1, 20, 18, 3, 'https://www.instagram.com/mancity/?hl=en', 'https://twitter.com/ManCity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(23, 66, 'manchester united', 'old trafford', 'premier league', 8, 13, -1, 14, 'https://www.instagram.com/manchesterunited/', 'https://twitter.com/ManUtd?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(24, 67, 'new castle united', 'st.jame\'s park', 'premier league', 19, 2, -7, 13, 'https://www.instagram.com/nufc/', 'https://twitter.com/NUFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(25, 340, 'southampton', 'st.mary\'s stadium', 'premier league', 16, 5, -8, 14, 'https://www.instagram.com/southamptonfc/?hl=en', 'https://twitter.com/SouthamptonFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(26, 73, 'tottenham hotspurs', 'white hart lane', 'premier league', 5, 18, 8, 7, 'https://www.instagram.com/spursofficial/?hl=en', 'https://twitter.com/SpursOfficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(27, 346, 'watford', 'vicarage road', 'premier league', 9, 13, -1, 12, 'https://www.instagram.com/watfordfcofficial/?hl=en', 'https://twitter.com/WatfordFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(28, 563, 'west ham', 'london stadium', 'premier league', 15, 7, -5, 15, 'https://www.instagram.com/westham/?hl=en', 'https://twitter.com/WestHamUtd?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(29, 76, 'wolverhampton wolves', 'molineux stadium', 'premier league', 7, 15, 3, 6, 'https://www.instagram.com/wolves/?hl=en', 'https://twitter.com/Wolves?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(30, 62, 'everton', 'goodison park', 'premier league', 11, 12, 1, 12, 'https://www.instagram.com/everton/?hl=en', 'https://twitter.com/Everton?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(31, 559, 'sevilla', 'Ramón Sánchez Pizjuá', 'la-liga', 1, 16, 10, 8, 'https://www.instagram.com/sevillafc/?hl=en', 'https://twitter.com/SevillaFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(32, 81, 'barcelona', 'camp nou', 'la-liga', 2, 15, 10, 9, 'https://www.instagram.com/fcbarcelona/?hl=en', 'https://twitter.com/FCBarcelona?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(33, 78, 'atletico madrid', 'Wanda Metropolitano', 'la-liga', 3, 15, 5, 4, 'https://www.instagram.com/atleticodemadrid/?hl=en', 'https://twitter.com/atleti'),
(34, 86, 'real madrid', 'Santiago Bernabéu', 'la-liga', 4, 14, 5, 7, 'https://www.instagram.com/realmadrid/', 'https://twitter.com/realmadrid?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(35, 95, 'valencia', 'Mestalla Stadium', 'la-liga', 5, 9, -1, 7, 'https://www.instagram.com/valenciacf/?hl=en', 'https://twitter.com/valenciacf?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(36, 4, 'borussia dortmund', 'Westfalenstadion', 'bundesliga', 1, 17, 15, 8, 'https://www.instagram.com/bvb09/?hl=en', 'https://twitter.com/BVB?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(37, 721, 'rb leipzig', 'red bull arena', 'bundesliga', 2, 14, 7, 9, 'https://www.instagram.com/dierotenbullen/?hl=en', 'https://twitter.com/RBLeipzig_EN?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(38, 18, '  Borussia Mönchengl', 'borussia park', 'bundesliga', 3, 14, 6, 9, 'https://www.instagram.com/borussia/', 'https://twitter.com/borussia_en?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(39, 5, 'bayern munich', 'alianz arena', 'bundesliga', 4, 13, 4, 8, 'https://twitter.com/FCBayern?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://twitter.com/FCBayern?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(40, 3, '  Bayer Leverkusen', 'bay arena', 'bundesliga', 5, 7, -6, 13, 'https://www.instagram.com/bayer04fussball/?hl=en', 'https://twitter.com/bayer04_en?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(41, 109, 'juventus', 'Allianz Stadium', 'serie a', 1, 24, 13, 5, 'https://www.instagram.com/juventus/?hl=en', 'https://twitter.com/juventusfcen?lang=en'),
(42, 113, 'napoli', 'Stadio San Paolo', 'serie a', 2, 18, 5, 10, 'https://www.instagram.com/officialsscnapoli/?hl=en', 'https://twitter.com/sscnapoli?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(43, 100, 'as roma', 'Stadio Olimpico', 'serie a', 4, 14, 6, 10, 'https://www.instagram.com/officialasroma/?hl=en', 'https://twitter.com/asromaen?lang=en'),
(44, 108, 'internazionale', 'San Siro Stadium', 'serie a', 3, 16, 6, 6, 'https://www.instagram.com/inter/?hl=en', 'https://twitter.com/Inter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(45, 98, 'ac milan', 'san siro stadium', 'serie a', 5, 12, 5, 10, 'https://www.instagram.com/acmilan/', 'https://twitter.com/acmilan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(46, 524, 'paris saint-germain', 'Parc des Princes', 'ligue 1', 1, 27, 26, 6, 'https://www.instagram.com/psg/?hl=en', 'https://twitter.com/PSG_inside?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(47, 516, 'Olympique Marseille', 'Orange Vélodrome', 'ligue 1', 2, 16, 5, 16, 'https://www.instagram.com/olympiquedemarseille/?hl=en', 'https://twitter.com/OM_Officiel?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(48, 523, 'Olympique Lyonnais', 'Groupama Stadium', 'ligue 1', 3, 14, 2, 12, 'https://www.instagram.com/ol/?hl=en', 'https://twitter.com/OL?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor'),
(49, 522, 'ogc nice', 'Allianz Riviera', 'ligue 1', 4, 11, -6, 13, 'https://www.instagram.com/ogcnice/?hl=en', 'https://twitter.com/ogcnice?lang=en'),
(50, 548, 'as monaco', 'stade louis II', 'ligue 1', 5, 6, -4, 13, 'https://www.instagram.com/asmonaco/?hl=en', 'https://twitter.com/AS_Monaco?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `l_name` (`l_name`);

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
