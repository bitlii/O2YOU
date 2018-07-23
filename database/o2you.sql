-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 10:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `o2you`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` smallint(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `producttype` varchar(255) NOT NULL,
  `productprice` float NOT NULL,
  `productimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productname`, `producttype`, `productprice`, `productimage`) VALUES
(1, 'Small O2Jar', 'Jar', 19.99, 'jar/jarS.jpg'),
(2, 'Medium O2Jar', 'Jar', 49.99, 'jar/jarM.jpg'),
(3, 'Large O2Jar', 'Jar', 99.99, 'jar/jarL.jpg'),
(4, 'Jumbo O2Jar', 'Jar', 169.99, 'jar/jarJumbo.jpg'),
(5, 'Small O2Box', 'Box', 99.99, 'box/boxS.jpg'),
(6, 'Medium O2Box', 'Box', 199.99, 'box/boxM.jpg'),
(7, 'Large O2Box', 'Box', 299.99, 'box/boxL.jpg'),
(8, 'Extra Large O2Box', 'Box', 449.99, 'box/boxXL.jpg'),
(9, 'O2Mask', 'Mask', 49.99, 'accessories/o2mask.jpg'),
(10, 'O2Mask X', 'Mask', 999.99, 'accessories/o2techmaskx.jpg'),
(11, 'O2Tank', 'Tank', 149.99, 'accessories/o2tank.jpg'),
(12, 'O2Backpack', 'Lifestyle', 454.49, 'accessories/o2backpack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` smallint(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`, `address`, `timestamp`) VALUES
(307, 'Glori', 'Upshall', 'gupshall0@purevolume.com', 'FqLNYb8', '020 Rowland Road', '2017-07-11 06:34:00'),
(308, 'Noami', 'Casetta', 'ncasetta1@a8.net', 'LeCUd2BQh8', '189 Sage Hill', '2018-04-16 09:25:00'),
(309, 'Addi', 'McGillivrie', 'amcgillivrie2@ifeng.com', '7LLLHVGaT', '9 Vahlen Plaza', '2017-09-16 20:15:00'),
(310, 'Melicent', 'Pierson', 'mpierson3@npr.org', 'vPW6cSuBhJg', '7 Mitchell Lane', '2018-05-02 05:08:00'),
(311, 'Lorilee', 'Bruty', 'lbruty4@spotify.com', 'DddU5znsp', '4359 Schmedeman Parkway', '2017-10-10 08:11:00'),
(312, 'Christy', 'Presshaugh', 'cpresshaugh5@wufoo.com', 'CJevjRk', '742 Menomonie Place', '2017-06-18 19:15:00'),
(313, 'Edita', 'Lile', 'elile6@slashdot.org', 'fuF0NRnmWr', '22720 Ronald Regan Street', '2017-08-30 19:18:00'),
(314, 'Zena', 'Folley', 'zfolley7@netscape.com', 'eeIbU2aae7', '49460 Oak Hill', '2018-01-24 22:23:00'),
(315, 'Rebbecca', 'Candish', 'rcandish8@ezinearticles.com', 'OEayGwy', '913 Bellgrove Center', '2018-05-02 03:21:00'),
(316, 'Felizio', 'Burchatt', 'fburchatt9@mediafire.com', 'b3CmjZZX', '685 Miller Avenue', '2018-03-28 17:07:00'),
(317, 'Laurel', 'Gell', 'lgella@nhs.uk', '6ixmaI', '98045 Browning Circle', '2017-12-14 14:27:00'),
(318, 'Holden', 'Coners', 'hconersb@archive.org', 'Xv5Avq', '1870 Kim Pass', '2017-09-28 01:02:00'),
(319, 'Peggi', 'Gard', 'pgardc@accuweather.com', 'V1vW8O9', '897 Leroy Plaza', '2017-07-04 10:28:00'),
(320, 'Abagail', 'Le Breton De La Vieuville', 'alebretondelavieuvilled@flavors.me', 'UNP0Rdm8M4', '4 Sauthoff Lane', '2018-05-05 09:23:00'),
(321, 'Ellene', 'Ranfield', 'eranfielde@meetup.com', 'sgJYxMg20H9e', '2 Emmet Pass', '2018-02-04 08:10:00'),
(322, 'Erica', 'Pinilla', 'epinillaf@netscape.com', 'Hs329jbT4F83', '97817 Larry Crossing', '2018-01-23 22:02:00'),
(323, 'Emlyn', 'O\'Day', 'eodayg@usda.gov', 'dF5JrpP4', '435 Forster Hill', '2018-02-27 10:24:00'),
(324, 'Giustina', 'Boothebie', 'gboothebieh@booking.com', '3Pgxakcl', '1751 Center Street', '2017-12-29 04:01:00'),
(325, 'Delinda', 'Ambrogioni', 'dambrogionii@google.fr', 'NAQzw4Pc', '085 Pepper Wood Way', '2018-03-30 12:02:00'),
(326, 'Noella', 'Pead', 'npeadj@wikipedia.org', '3JMGGf', '9885 Meadow Ridge Parkway', '2018-04-28 05:23:00'),
(327, 'Ulrick', 'Le Fevre', 'ulefevrek@unblog.fr', 'OsdeSQXeb', '168 Kennedy Court', '2017-10-26 16:46:00'),
(328, 'Jolynn', 'Delaney', 'jdelaneyl@vinaora.com', 'jrET5msId2bP', '178 Badeau Junction', '2017-11-25 08:49:00'),
(329, 'Aristotle', 'Halford', 'ahalfordm@google.pl', 'HfyyNfjAw', '5 Garrison Terrace', '2017-11-09 02:32:00'),
(330, 'Finlay', 'Kinnear', 'fkinnearn@cyberchimps.com', 'wjxXDWZ9TbM0', '8 Portage Place', '2018-04-24 14:33:00'),
(331, 'Lucia', 'McLernon', 'lmclernono@friendfeed.com', 'ipOteGI8ENK', '216 Spenser Junction', '2017-12-01 22:43:00'),
(332, 'Bernelle', 'O\'Kelly', 'bokellyp@mtv.com', 'yIF9uvCwh6', '140 Pawling Hill', '2018-02-16 18:34:00'),
(333, 'Ulrika', 'O\'Shevlan', 'uoshevlanq@sourceforge.net', 'FGTCJOvu', '81 Gerald Road', '2018-05-24 08:29:00'),
(334, 'Winfield', 'Sparsholt', 'wsparsholtr@opensource.org', 'UWhmszrrILK', '58 Arkansas Avenue', '2017-11-25 21:01:00'),
(335, 'Gertrude', 'Parkey', 'gparkeys@wired.com', 'Mn621kdR', '989 Towne Crossing', '2017-07-05 16:12:00'),
(336, 'Tara', 'Rivelon', 'trivelont@clickbank.net', 'Hd4lfr7y', '3592 Kropf Terrace', '2018-03-10 06:57:00'),
(337, 'Ryley', 'Dirand', 'rdirandu@gravatar.com', 'x3mPgkDWIyu', '96790 Dryden Plaza', '2018-02-18 22:20:00'),
(338, 'Perice', 'Bigham', 'pbighamv@ycombinator.com', 'gbCKzDWW', '88296 Bluejay Street', '2017-06-30 17:05:00'),
(339, 'Georgiana', 'Humbee', 'ghumbeew@boston.com', '0iDkBDXSy7l', '338 Warrior Crossing', '2017-08-31 19:45:00'),
(340, 'Stirling', 'Fearnyough', 'sfearnyoughx@vkontakte.ru', 'YPbZif7eL', '79 La Follette Trail', '2017-09-18 11:34:00'),
(341, 'Ashil', 'Biggadike', 'abiggadikey@dailymotion.com', 'wqLt00ZqH', '5 Chive Court', '2018-02-01 03:35:00'),
(342, 'Milissent', 'Allbon', 'mallbonz@taobao.com', 'joTk3hLrlihs', '63180 Algoma Pass', '2018-01-03 11:16:00'),
(343, 'Verne', 'Pepperrall', 'vpepperrall10@fc2.com', 'ksusdI', '0463 Parkside Hill', '2018-01-23 16:31:00'),
(344, 'Marcellina', 'Alesio', 'malesio11@unicef.org', 'Fb4a9VPJxD', '342 Buell Plaza', '2018-03-24 09:43:00'),
(345, 'Sherry', 'Jirik', 'sjirik12@smh.com.au', '9HUgyuhs9', '21 Crescent Oaks Trail', '2018-01-11 10:33:00'),
(346, 'Ahmed', 'Pamphilon', 'apamphilon13@marketwatch.com', 'iLy46Ddu', '04 Ludington Crossing', '2017-12-06 04:23:00'),
(347, 'Mildrid', 'Beckworth', 'mbeckworth14@ox.ac.uk', 'sNobIBk8', '6902 Hoepker Drive', '2017-08-27 02:59:00'),
(348, 'Frazer', 'Revely', 'frevely15@about.com', 'L8OxHFo', '67402 Superior Center', '2018-03-13 14:21:00'),
(349, 'Farly', 'Swainger', 'fswainger16@sitemeter.com', 'k7PsGH', '048 Hoffman Street', '2017-06-10 07:37:00'),
(350, 'Bobbe', 'McIlvaney', 'bmcilvaney17@prnewswire.com', '9PPqnoaS', '03817 Corry Center', '2017-09-12 02:36:00'),
(351, 'Mamie', 'Carver', 'mcarver18@slate.com', 'D80wAoXa', '09 Maywood Circle', '2017-11-01 16:08:00'),
(352, 'Seamus', 'Taffarello', 'staffarello19@networkadvertising.org', 'rvf8bVaS', '69 Golf View Point', '2018-04-25 01:39:00'),
(353, 'Brittaney', 'Yeates', 'byeates1a@cbc.ca', 'eMwOeGjccdIX', '6785 Roth Hill', '2017-10-30 02:33:00'),
(354, 'Rycca', 'Renault', 'rrenault1b@japanpost.jp', 'jBEPSj9Efmk', '1 Summer Ridge Alley', '2018-02-15 05:45:00'),
(355, 'Chrissy', 'Vernazza', 'cvernazza1c@upenn.edu', '3erPYEn', '0650 Warrior Alley', '2017-06-22 17:01:00'),
(356, 'Corinna', 'Chantree', 'cchantree1d@ucoz.com', '5f8PRTuA', '7807 Rusk Park', '2017-10-22 07:55:00'),
(357, 'Jim', 'Grassick', 'jgrassick1e@ocn.ne.jp', 'mY3zDWPCT1zo', '7419 Golf Drive', '2017-12-03 17:18:00'),
(358, 'Donielle', 'Sidwick', 'dsidwick1f@cam.ac.uk', '1yitArgJLIm', '670 American Ash Trail', '2018-05-28 18:00:00'),
(359, 'Helena', 'Luthwood', 'hluthwood1g@nasa.gov', 'pjdZwk', '31884 Lillian Crossing', '2018-01-07 22:25:00'),
(360, 'Mikael', 'Gummory', 'mgummory1h@cloudflare.com', 'KlEkwLJZ2', '1 Declaration Drive', '2018-05-31 11:03:00'),
(361, 'Rosabelle', 'Douse', 'rdouse1i@geocities.com', 'BmeypY91cB', '59520 Dexter Parkway', '2018-01-19 07:28:00'),
(362, 'Hilario', 'Cranson', 'hcranson1j@51.la', '0CLF12rn', '96 Eagan Circle', '2017-09-05 21:06:00'),
(363, 'Adolphus', 'Clutterham', 'aclutterham1k@seesaa.net', '7607ckL9BI', '46908 South Court', '2017-06-19 14:12:00'),
(364, 'Celine', 'Compfort', 'ccompfort1l@addthis.com', 'O8NbYWTCCB', '00715 Havey Center', '2017-09-19 23:11:00'),
(365, 'Salli', 'Ivasyushkin', 'sivasyushkin1m@com.com', '89dqe3IkDDXp', '67 Rieder Alley', '2018-01-09 11:34:00'),
(366, 'Sibbie', 'Dunnaway', 'sdunnaway1n@51.la', 'wKN36bHDZ', '6 Stephen Place', '2017-07-21 07:40:00'),
(367, 'Sonni', 'Colicot', 'scolicot1o@biglobe.ne.jp', 'ItDGTzw', '6624 Vernon Terrace', '2018-04-07 10:38:00'),
(368, 'Caresse', 'Carhart', 'ccarhart1p@cbslocal.com', 'xJQS511TqZx', '28 Vidon Street', '2018-05-09 15:27:00'),
(369, 'Elaina', 'Arp', 'earp1q@pagesperso-orange.fr', 'e7hxVOAZb', '321 Commercial Terrace', '2017-07-19 10:57:00'),
(370, 'Allie', 'Lawrey', 'alawrey1r@livejournal.com', 'B4WOvS', '067 Tomscot Hill', '2017-12-08 00:07:00'),
(371, 'Nanete', 'Schulz', 'nschulz1s@cam.ac.uk', 'Omod2zNV', '03732 Lyons Pass', '2017-09-11 12:45:00'),
(372, 'Marijo', 'Jozefiak', 'mjozefiak1t@furl.net', '90ndryBF4vr', '273 Thackeray Plaza', '2017-11-22 01:45:00'),
(373, 'Denyse', 'Feyer', 'dfeyer1u@soup.io', 'wPletvx', '31004 Grasskamp Crossing', '2017-11-14 23:26:00'),
(374, 'Ermina', 'Treadway', 'etreadway1v@harvard.edu', 'hc2dxzi', '2215 Thackeray Parkway', '2017-06-08 00:22:00'),
(375, 'Julianne', 'Paine', 'jpaine1w@istockphoto.com', 'hHFTEIPSy19u', '0 Grasskamp Center', '2017-12-22 18:17:00'),
(376, 'Ag', 'Giblett', 'agiblett1x@hugedomains.com', 'z9aP3vmT8D', '2 North Plaza', '2018-04-23 23:25:00'),
(377, 'Merrie', 'Exell', 'mexell1y@mysql.com', 'srt0nmJIC', '9259 Roxbury Alley', '2017-09-30 04:24:00'),
(378, 'Tommy', 'McGrory', 'tmcgrory1z@google.de', 'vWHXGKHw', '5355 Kingsford Drive', '2017-12-23 08:26:00'),
(379, 'Renate', 'McKleod', 'rmckleod20@gizmodo.com', 's80ffiT', '8 Eggendart Park', '2017-09-12 13:37:00'),
(380, 'Berni', 'Rubenfeld', 'brubenfeld21@google.ru', 'pS7I4G', '817 Havey Trail', '2017-10-01 15:43:00'),
(381, 'Alessandro', 'Gianasi', 'agianasi22@1688.com', '87NXC0wRyF', '62 Village Point', '2017-07-16 19:26:00'),
(382, 'Atlanta', 'Ronchetti', 'aronchetti23@4shared.com', 'PZw2LfNkHbLy', '99 Debs Road', '2018-05-17 12:40:00'),
(383, 'Milt', 'Ramsell', 'mramsell24@fc2.com', '4J36Jc', '7 Del Mar Street', '2017-09-14 13:39:00'),
(384, 'Egor', 'Rochewell', 'erochewell25@tripod.com', '0LnuzyE', '0 Butternut Lane', '2017-06-25 08:38:00'),
(385, 'Beatrisa', 'Undrill', 'bundrill26@ehow.com', 'M3jwwu42', '67450 Myrtle Center', '2017-07-28 01:41:00'),
(386, 'Carce', 'Maggiore', 'cmaggiore27@vimeo.com', 'dvy9ZTE', '2548 Westend Hill', '2017-12-11 14:44:00'),
(387, 'Leta', 'Queste', 'lqueste28@ifeng.com', '0ObshDe', '78 Banding Center', '2017-11-09 20:22:00'),
(388, 'Rachael', 'Danet', 'rdanet29@home.pl', '6KvzFaiqk', '78 Blackbird Center', '2017-07-10 22:13:00'),
(389, 'Royce', 'Darracott', 'rdarracott2a@bigcartel.com', 'lY1V9Ulc', '40 Forest Dale Lane', '2017-10-20 07:45:00'),
(390, 'Georgetta', 'Heckney', 'gheckney2b@imageshack.us', 'xSLRO5sxQFl', '8998 Bowman Court', '2018-02-20 19:50:00'),
(391, 'Emmott', 'McCoole', 'emccoole2c@soundcloud.com', 'w1k3pitQvOkj', '3 Hooker Terrace', '2018-03-01 01:46:00'),
(392, 'Holden', 'Brannan', 'hbrannan2d@psu.edu', 'E9rA28', '7 Portage Place', '2018-03-10 15:01:00'),
(393, 'Lavina', 'Blunsen', 'lblunsen2e@dailymail.co.uk', 'sda09V', '131 Mallory Drive', '2017-06-18 02:12:00'),
(394, 'Pepita', 'Olijve', 'polijve2f@harvard.edu', 'IW5agvfhL', '7061 Killdeer Plaza', '2018-02-13 22:34:00'),
(395, 'Wandie', 'Wippermann', 'wwippermann2g@mediafire.com', 'E9qMNVi4i5', '346 Park Meadow Circle', '2017-07-14 08:04:00'),
(396, 'Shane', 'Backs', 'sbacks2h@wunderground.com', 'Jd3BDp0a', '93780 Butterfield Lane', '2017-12-18 14:15:00'),
(397, 'Valida', 'Prator', 'vprator2i@blog.com', 'cZcIR5dVUkVP', '1143 Maryland Plaza', '2017-12-18 03:30:00'),
(398, 'Arabella', 'Spatig', 'aspatig2j@sourceforge.net', 'J7LzxAOqaeOn', '4 5th Avenue', '2017-07-03 22:48:00'),
(399, 'Glad', 'Alldred', 'galldred2k@arizona.edu', 'KHYcrQ2', '43 Bartillon Avenue', '2018-03-05 14:02:00'),
(400, 'Caroline', 'Beamiss', 'cbeamiss2l@europa.eu', '2HjGoejj', '29 Hanson Parkway', '2017-11-25 16:32:00'),
(401, 'Cchaddie', 'Maberley', 'cmaberley2m@w3.org', '7KkfMv2IXG', '544 Nancy Alley', '2017-09-04 23:39:00'),
(402, 'Madelene', 'Calbreath', 'mcalbreath2n@privacy.gov.au', 'rLzBWKy', '6672 Shopko Road', '2017-09-19 11:16:00'),
(403, 'Lyda', 'Bonick', 'lbonick2o@china.com.cn', 'OOyhNrwU', '93583 Granby Parkway', '2018-04-23 10:13:00'),
(404, 'Saleem', 'Kubu', 'skubu2p@bravesites.com', 'gWHcEf41LYv', '085 Eastwood Point', '2018-04-09 13:03:00'),
(405, 'Lucais', 'Riddiough', 'lriddiough2q@studiopress.com', 'LbbL1vdH8', '304 Macpherson Way', '2017-12-21 13:00:00'),
(406, 'Brande', 'Jeffries', 'bjeffries2r@hud.gov', 'oq8m8a', '31 Monterey Parkway', '2017-06-07 14:33:00'),
(407, 'Jackie', 'Chen', 'chenjcaki@gmail.com', '123456', '12a Barclay Place', '2018-06-27 03:30:15'),
(408, 'Jay', 'Chen', 'chenjcaki@gmail.com', '1234567', '123 Realest Street', '2018-06-27 03:30:57'),
(409, 'j', 'c', 'jc@jc.jc', '12', 'jc', '2018-07-02 22:03:21'),
(410, 'Jackie', 'Chenn', '12@12', '12', '12', '2018-07-22 23:51:44'),
(411, 'edge', 'lord', '11@1', '1', '123a', '2018-07-22 23:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` smallint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` smallint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
