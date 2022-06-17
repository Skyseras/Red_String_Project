-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 07:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immomaroc`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lname` varchar(255) COLLATE utf8_bin NOT NULL,
  `fname` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `pdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lname`, `fname`, `role`, `email`, `password`, `gender`, `pdp`, `city`, `phone`, `address`) VALUES
(1,'ALFA1','SKY1','client','alfasky1@gmail.com','abcdef1','Male', '' ,'Marrakech',+000000000001,'Rue 1, N 1'),
(2,'ALFA2','SKY2','particulier','alfasky2@gmail.com','abcdef2','Male', '' ,'Casablanca',+000000000002,'Rue 2, N 2'),
(3,'ALFA3','SKY3','agence','alfasky3@gmail.com','abcdef3','Male', '' ,'Fès',+000000000003,'Rue 3, N 3'),
(4,'ALFA4','SKY4','client','alfasky4@gmail.com','abcdef4','Male', '' ,'Fès',+000000000004,'Rue 4, N 4'),
(5,'ALFA5','SKY5','particulier','alfasky5@gmail.com','abcdef5','female', '' ,'Kénitra',+000000000005,'Rue 5, N 5'),
(6,'ALFA6','SKY6','agence','alfasky6@gmail.com','abcdef6','Male', '' ,'Agadir',+000000000006,'Rue 6, N 6'),
(7,'ALFA7','SKY7','client','alfasky7@gmail.com','abcdef7','female', '' ,'Rabat',+000000000007,'Rue 7, N 7'),
(8,'ALFA8','SKY8','particulier','alfasky8@gmail.com','abcdef8','Male', '' ,'Casablanca',+000000000008,'Rue 8, N 8'),
(9,'ALFA9','SKY9','agence','alfasky9@gmail.com','abcdef9','female', '' ,'Rabat',+000000000009,'Rue 9, N 9'),
(91,'ALFA91','SKY91','client','alfasky91@gmail.com','abcdef91','Male', '' ,'Agadir',+0000000000091,'Rue 91, N 91'),
(92,'ALFA92','SKY92','particulier','alfasky92@gmail.com','abcdef92','female', '' ,'Kénitra',+0000000000092,'Rue 92, N 92'),
(93,'ALFA93','SKY93','particulier','alfasky93@gmail.com','abcdef93','Male', '' ,'Casablanca',+0000000000093,'Rue 93, N 93'),
(94,'ALFA94','SKY94','particulier','alfasky94@gmail.com','abcdef94','female', '' ,'Tanger',+0000000000094,'Rue 94, N 94'),
(95,'ALFA95','SKY95','client','alfasky95@gmail.com','abcdef95','Male', '' ,'Rabat',+0000000000095,'Rue 95, N 95'),
(30,'ALFA30','SKY30','agence','alfasky30@gmail.com','abcdef30','Male', '' ,'Marrakech',+0000000000030,'Rue 30, N 30'),
(96,'ALFA96','SKY96','agence','alfasky96@gmail.com','abcdef96','Male', '' ,'Marrakech',+0000000000096,'Rue 96, N 96'),
(97,'ALFA97','SKY97','client','alfasky97@gmail.com','abcdef97','Male', '' ,'Tanger',+0000000000097,'Rue 97, N 97'),
(98,'ALFA98','SKY98','client','alfasky98@gmail.com','abcdef98','female', '' ,'Marrakech',+0000000000098,'Rue 98, N 98'),
(99,'ALFA99','SKY99','agence','alfasky99@gmail.com','abcdef99','Male', '' ,'Agadir',+0000000000099,'Rue 99, N 99');

INSERT INTO `property` (`id`, `city`, `description`, `type`, `chamber`, `bath`, `Superficie`, `gender`, `price`, `address`, `pdb`, `user_id`) VALUES (69, 'Marrakech', 'Meilleur appart', 'Vente', '4', '1', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(70, 'Marrakech', 'Meilleur appart', 'Vente', '3', '2', '120', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '93'),
(71, 'Marrakech', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(72, 'Marrakech', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '30'),
(73, 'Marrakech', 'Meilleur appart', 'Location', '1', '2', '80', 'industriel', '2300', 'Lotissement ATAKADUM', '', '96'),
(74, 'Marrakech', 'Meilleur appart', 'Location', '4', '3', '270', 'Résidentiel', '5000', 'Lotissement ATAKADUM', '', '9'),
(75, 'Marrakech', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '94'),
(76, 'Marrakech', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '93'),
(77, 'Marrakech', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '30'),
(78, 'Marrakech', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(79, 'Marrakech', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '93'),
(80, 'Marrakech', 'Meilleur appart', 'Location', '4', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(81, 'Marrakech', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(82, 'Marrakech', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '9'),
(83, 'Marrakech', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(84, 'Marrakech', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '30'),
(85, 'Marrakech', 'Meilleur appart', 'Vente', '4', '1', '410', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '94'),
(86, 'Marrakech', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30');


INSERT INTO `property` (`id`, `city`, `description`, `type`, `chamber`, `bath`, `Superficie`, `gender`, `price`, `address`, `pdb`, `user_id`) VALUES (NULL, 'Casablanca', 'Meilleur appart', 'Vente', '4', '1', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '3', '2', '120', 'industriel', '7000000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '1', '2', '80', 'commercial', '2300', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '3', '270', 'industriel', '5000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel Résidentiel', '4500', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '1', '120', 'industriel', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Kénitra',  'Meilleur appart', 'Location', '4', '1', '120', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Kénitra', 'Meilleur appart', 'Location', '3', '2', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Kénitra',  'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Tanger',  'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Tanger',  'Meilleur appart', 'Vente', '2', '1', '80', 'industriel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Tanger',  'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger',  'Meilleur appart', 'Location', '4', '1', '120', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '3', '2', '70', 'commercial', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '1', '3', '270', 'industriel', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '3', '270', 'Résidentiel', '5000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '4', '1', '410', 'industriel', '7000000', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Rabat', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Rabat', 'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '4', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '94'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel', '4500', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '4', '1', '70', 'commercial', '600000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '3', '2', '120', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '1', '2', '80', 'industriel', '2300', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '4', '3', '270', 'industriel', '5000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel', '4500', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '3'),
(69, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(70, 'Marrakerch', 'Meilleur appart', 'Vente', '3', '2', '120', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '93'),
(71, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(72, 'Marrakerch', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '30'),
(73, 'Marrakerch', 'Meilleur appart', 'Location', '1', '2', '80', 'industriel', '2300', 'Lotissement ATAKADUM', '', '96'),
(74, 'Marrakerch', 'Meilleur appart', 'Location', '4', '3', '270', 'Résidentiel', '5000', 'Lotissement ATAKADUM', '', '9'),
(75, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '94'),
(76, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '93'),
(77, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '30'),
(78, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(79, 'Marrakerch', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '93'),
(80, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(81, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(82, 'Marrakerch', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '9'),
(83, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(84, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '30'),
(85, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '410', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '94'),
(86, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30');
--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



7
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '4', '1', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '3', '2', '120', 'industriel', '7000000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '1', '2', '80', 'commercial', '2300', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '3', '270', 'industriel', '5000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel', '4500', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Casablanca', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '4', '1', '120', 'industriel', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Casablanca', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),


(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Kénitra',  'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Kénitra',  'Meilleur appart', 'Location', '4', '1', '120', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '2'),
(NULL, 'Kénitra', 'Meilleur appart', 'Location', '3', '2', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Kénitra',  'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '30'),


(NULL, 'Tanger',  'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Tanger',  'Meilleur appart', 'Vente', '2', '1', '80', 'industriel', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Tanger',  'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger',  'Meilleur appart', 'Location', '4', '1', '120', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '3', '2', '70', 'commercial', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '1', '3', '270', 'industriel', '600000', 'Lotissement ATAKADUM', '', '5'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Tanger', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '9'),


(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '3', '270', 'Résidentiel', '5000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '4', '1', '410', 'industriel', '7000000', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '4', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '8'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '99'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Agadir', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '8'),


(NULL, 'Rabat', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Rabat', 'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '4', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '94'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Rabat', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel', '4500', 'Lotissement ATAKADUM', '', '6'),
(NULL, 'Rabat', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '9'),


(NULL, 'Fès', 'Meilleur appart', 'Vente', '4', '1', '70', 'commercial', '600000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '3', '2', '120', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '1', '2', '80', 'industriel', '2300', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '4', '3', '270', 'industriel', '5000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Location', '4', '1', '80', 'Résidentiel', '4500', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '3'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '92'),
(NULL, 'Fès', 'Meilleur appart', 'Vente', '1', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '3'),


(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '70', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '3', '2', '120', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '93'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '3', '1', '270', 'Résidentiel', '7000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '1', '2', '80', 'industriel', '2300', 'Lotissement ATAKADUM', '', '96'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '4', '3', '270', 'Résidentiel', '5000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '94'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '93'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '410', 'Résidentiel', '7000000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '96'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '1', '1', '120', 'commercial', '600000', 'Lotissement ATAKADUM', '', '93'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '120', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '96'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '70', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '1', '3', '270', 'Résidentiel', '600000', 'Lotissement ATAKADUM', '', '9'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '3', '2', '120', 'Terrain', '2700', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Location', '4', '1', '80', 'industriel', '4500', 'Lotissement ATAKADUM', '', '30'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '4', '1', '410', 'commercial', '7000000', 'Lotissement ATAKADUM', '', '94'),
(NULL, 'Marrakerch', 'Meilleur appart', 'Vente', '2', '1', '80', 'Terrain', '600000', 'Lotissement ATAKADUM', '', '30'),