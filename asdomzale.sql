-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 12:27 PM
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
-- Database: `asdomzale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED NOT NULL,
  `uporabnisko_ime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `geslo` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ime` varchar(30) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uporabnisko_ime`, `geslo`, `reg_date`, `ime`) VALUES
(1, 'klemenkocar', '$2y$10$TqAcOCPJmTcs0NPIwaAzSentMd7H2M3edJYnO1w1582s88AsofwFm', '2018-09-23 10:44:56', 'Klemen Kočar');

-- --------------------------------------------------------

--
-- Table structure for table `jedilnik`
--

CREATE TABLE `jedilnik` (
  `glavnaJed1` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `glavnaJed2` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `glavnaJed3` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `datum` date NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `solata1` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `solata2` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `solata3` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `sladica1` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `sladica2` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `sladica3` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `jedilnik`
--

INSERT INTO `jedilnik` (`glavnaJed1`, `glavnaJed2`, `glavnaJed3`, `datum`, `reg_date`, `solata1`, `solata2`, `solata3`, `sladica1`, `sladica2`, `sladica3`) VALUES
('Dunajski zrezek, pečen krompir', 'Krompirjev golaž z mesom', 'Pečen mesni sir', '2018-09-03', '2018-09-28 10:42:06', 'Solata', '', 'Krompirjeva solata', '', 'puding', ''),
('Mesna lasagna', 'Pasulj s klobaso', 'Piščančji nuggetsi', '2018-09-04', '2018-09-28 10:42:06', 'Zelena solata', '', 'Krompirjeva solata', '', 'Sadje', ''),
('Svinjska pečenka, pražen krompir', 'Mineštra z mesom', 'Zelenjavna tortilija s sirom', '2018-09-05', '2018-09-28 10:42:06', 'Zeljnata solata', '', '', '', 'Sadje', 'Jogurt'),
('Piščančji sote s testeninami', 'Gobova enolončnica s hrenovko', 'Pleskavica', '2018-09-06', '2018-09-28 10:42:06', 'Solata', '', 'Mešana solata', '', 'Puding s sadjem', 'Sadje'),
('Ocvrt oslič', 'Ričet s klobaso', 'Rižev narastek, sadni preliv', '2018-09-07', '2018-09-28 10:42:06', 'Krompirjeva solata', '', '', 'Sadje', 'Jabolčni zavitek', 'Kompot'),
('Puranji zrezek v naravni omaki, njoki', 'Junečja obara', 'Palačinke s skuto', '2018-09-24', '2018-09-28 10:57:04', 'Solata', '', '', '', 'Marmeladna potica', 'Kompot'),
('Polnjena paparika v omaki, pire krompir', 'Pasulj s klobaso', 'Ocvrt puranji zrezek', '2018-09-25', '2018-09-28 10:57:04', 'Zelena solata', '', 'Ameriška solata', '', 'Sadje', ''),
('Pleskavica v lepinji, ajvar, čebula', 'Piščančja obara', 'Sirovi štruklji', '2018-09-26', '2018-09-28 10:57:04', '', '', '', '', 'Pecivo', 'Sadje'),
('Piščančji dunajski zrezek', 'Cvetačna enolončnica s puranom', 'Kanelon z gobami', '2018-09-27', '2018-09-28 10:57:04', 'Pražen krompir', '', 'Solata', 'Solata', 'Sadna pita', ''),
('Svinjska pečenka, riž z grahom', 'Srčki s krompirjem', 'Sirov burek', '2018-09-28', '2018-09-28 10:57:04', 'Zeljnata solata', '', '', '', 'Jabolčni zavitek', 'Jogurt, sadje'),
('Piščančji paprikaš, testenine', 'Jota z mesom', 'Svinjska pečenka', '2018-10-01', '2018-09-28 11:52:14', 'Solata', '', 'Mešana solata', '', 'Sadje', ''),
('Mesna lasagna', 'Pasulj s klobaso', 'Piščančji nuggetsi', '2018-10-02', '2018-09-28 13:15:57', 'Zelena solata', '', 'Krompirjeva solata', '', 'Sadje', ''),
('Pariški svinjski zrezek', 'Telečja obara', 'Mesni sir', '2018-11-19', '2018-11-22 09:03:11', 'krompirjevi kroketi', 'Rogljiček', 'Zelje s krompirjem', 'solata', '', ''),
('Pečenica 1/2', 'Pasulj s klobaso', 'Ocvrte perutničke', '2018-11-20', '2018-11-22 09:03:11', 'Kislo zelje', 'Sadje', 'Francoska solata', 'Matavž', '', ''),
('Pleskavica', 'Boranija z mesom', 'Marelični cmok', '2018-11-21', '2018-11-22 09:05:51', 'prebranec', 'puding', 'kompot', 'mešana solata', '', ''),
('Naravni svinjski zrezek', 'Bograč golaž', 'Gratinirane testenine z zelenjavo', '2018-11-22', '2018-11-22 09:05:51', 'riž z zelenjavo', 'sadje', 'solata', 'solata', '', ''),
('Goveji sote', 'Ričet s prekajeno šunko', 'Ocvrti sir', '2018-11-23', '2018-11-22 09:05:51', 'pire krompir', 'jabolko', 'francoska solata', 'solata', '', ''),
('Mesna rižota', 'Junečja obara', 'Ocvrt puranji zrezek', '2018-11-26', '2018-11-22 09:26:34', 'solata', 'marmeladna potica', 'ameriška solata', '', '', ''),
('Krvavica', 'Pasulj s klobaso', 'Palačinke s skuto', '2018-11-27', '2018-11-22 09:26:34', 'praženo kislo zelje', 'sadje', 'kompot', 'slan krompir', '', ''),
('Pečeno piščančje bedro', 'Jota s prekajeno svinjsko šunko', 'Sirovi štruklji', '2018-11-28', '2018-11-22 09:26:34', 'rizi bizi', 'jabolko', 'sadje', 'solata', '', ''),
('Dušena govedina', 'Cvetačna enolončnica', 'Mesni kaneloni', '2018-11-29', '2018-11-22 09:26:34', 'kruhova jajčna rezina', 'sadna pita', 'zeljnata solata s fižolom', 'solata', '', ''),
('Svinjska pečenka', 'Srčki s krompirjem', 'Sirov burek', '2018-11-30', '2018-11-22 09:26:34', 'riž z grahom', 'jabolčni zavitek', 'jogurt', 'zelnjata solata', '', 'sadje'),
('piščančji paprikaš', '', '', '2018-12-03', '2018-12-06 09:29:48', '', '', '', '', '', ''),
('makaronovo meso', 'Piščančja obara z žličniki', 'Dunajski svinjski zrezek', '2018-12-10', '2018-12-10 09:53:15', 'rdeča pesa v solati', 'pecivo', 'krompirjeva solata', '', '', ''),
('Segedin golaž', 'Pasulj s klobaso', 'Pečena hrenovka', '2018-12-11', '2018-12-10 09:53:15', 'slan krompir', 'sadje', 'mešana solata', '', '', 'banana'),
('Pečen piščanec', 'Jota s kranjsko klobaso', 'Govedina v solati z jajcem', '2018-12-12', '2018-12-10 09:53:15', 'dušen riž', 'pecivo', 'pecivo', 'mešana solata', '', ''),
('Goveji golaž', 'Vampi s krompirjem', 'Ocvrti sir', '2018-12-13', '2018-12-10 09:53:15', 'polenta', 'pecivo', 'tatarska omaka', 'jogurt', '', 'solata'),
('Jetrca v omaki', 'Pašta fižol', 'Sirov burek', '2018-12-14', '2018-12-10 09:53:15', 'krompir pire', 'hrenovka', 'navadni jogurt', 'solata', 'pomaranča', 'pomaranča');

-- --------------------------------------------------------

--
-- Table structure for table `malice`
--

CREATE TABLE `malice` (
  `ID_user` int(11) DEFAULT NULL,
  `meni` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `malice`
--

INSERT INTO `malice` (`ID_user`, `meni`, `datum`) VALUES
(7833448, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7833435, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7559921, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7561842, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(123, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7561030, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7565908, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7572243, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7551457, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(8528757, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7559378, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(0, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7573783, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7559603, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(7573209, 'Junečja obara', '2018-09-24'),
(7560659, 'Junečja obara', '2018-09-24'),
(130844775, 'Junečja obara', '2018-09-24'),
(7571751, 'Palačinke s skuto', '2018-09-24'),
(129835934, 'Palačinke s skuto', '2018-09-24'),
(1, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(4072776, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(3850216, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(4796259, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(4728096, 'Puranji zrezek v naravni omaki, njoki', '2018-09-24'),
(4688418, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(4796259, 'Pasulj s klobaso', '2018-09-25'),
(3850216, 'Pasulj s klobaso', '2018-09-25'),
(4072776, 'Pasulj s klobaso', '2018-09-25'),
(1, 'Pasulj s klobaso', '2018-09-25'),
(4728096, 'Ocvrt puranji zrezek', '2018-09-25'),
(7565908, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(7572243, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(7559378, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(129835934, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(7833455, 'Polnjena paparika v omaki, pire krompir', '2018-09-25'),
(7559921, 'Pasulj s klobaso', '2018-09-25'),
(7559603, 'Pasulj s klobaso', '2018-09-25'),
(7561842, 'Pasulj s klobaso', '2018-09-25'),
(7560659, 'Pasulj s klobaso', '2018-09-25'),
(7833448, 'Pasulj s klobaso', '2018-09-25'),
(7573209, 'Pasulj s klobaso', '2018-09-25'),
(7551457, 'Pasulj s klobaso', '2018-09-25'),
(130844775, 'Pasulj s klobaso', '2018-09-25'),
(7573783, 'Ocvrt puranji zrezek', '2018-09-25'),
(8528757, 'Ocvrt puranji zrezek', '2018-09-25'),
(7571751, 'Ocvrt puranji zrezek', '2018-09-25'),
(0, 'Ocvrt puranji zrezek', '2018-09-25'),
(123, 'Ocvrt puranji zrezek', '2018-09-25'),
(7833435, 'Ocvrt puranji zrezek', '2018-09-25'),
(7561030, 'Ocvrt puranji zrezek', '2018-09-25'),
(4728096, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(3850216, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(4072776, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(4688418, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(4796259, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(1, 'Sirovi štruklji', '2018-09-26'),
(7571751, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(0, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(130844775, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7573783, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7833455, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7559378, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7561842, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7573209, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7565908, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(123, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7561030, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7833435, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7572243, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7551457, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(129835934, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7560659, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7559921, 'Piščančja obara', '2018-09-26'),
(7560289, 'Piščančja obara', '2018-09-26'),
(7559603, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(8528757, 'Pleskavica v lepinji, ajvar, čebula', '2018-09-26'),
(7833448, 'Sirovi štruklji', '2018-09-26'),
(3850216, 'Piščančji dunajski zrezek', '2018-09-27'),
(4072776, 'Piščančji dunajski zrezek', '2018-09-27'),
(4796259, 'Piščančji dunajski zrezek', '2018-09-27'),
(4728096, 'Piščančji dunajski zrezek', '2018-09-27'),
(4688418, 'Piščančji dunajski zrezek', '2018-09-27'),
(7565908, 'Piščančji dunajski zrezek', '2018-09-27'),
(7833435, 'Piščančji dunajski zrezek', '2018-09-27'),
(7561030, 'Piščančji dunajski zrezek', '2018-09-27'),
(7559921, 'Piščančji dunajski zrezek', '2018-09-27'),
(7559603, 'Piščančji dunajski zrezek', '2018-09-27'),
(7561842, 'Piščančji dunajski zrezek', '2018-09-27'),
(7559378, 'Piščančji dunajski zrezek', '2018-09-27'),
(129835934, 'Piščančji dunajski zrezek', '2018-09-27'),
(7560659, 'Piščančji dunajski zrezek', '2018-09-27'),
(7551457, 'Piščančji dunajski zrezek', '2018-09-27'),
(7560289, 'Piščančji dunajski zrezek', '2018-09-27'),
(7573209, 'Piščančji dunajski zrezek', '2018-09-27'),
(8528757, 'Piščančji dunajski zrezek', '2018-09-27'),
(123, 'Piščančji dunajski zrezek', '2018-09-27'),
(7573783, 'Piščančji dunajski zrezek', '2018-09-27'),
(7571751, 'Piščančji dunajski zrezek', '2018-09-27'),
(7833448, 'Kanelon z gobami', '2018-09-27'),
(4072776, 'Jota z mesom', '2018-10-01'),
(3850216, 'Jota z mesom', '2018-10-01'),
(1, 'Jota z mesom', '2018-10-01'),
(4688418, 'Svinjska pečenka', '2018-10-01'),
(8528757, 'Piščančji paprikaš, testenine', '2018-10-01'),
(7833448, 'Piščančji paprikaš, testenine', '2018-10-01'),
(7560289, 'Jota z mesom', '2018-10-01'),
(7833455, 'Jota z mesom', '2018-10-01'),
(7565908, 'Jota z mesom', '2018-10-01'),
(7573783, 'Jota z mesom', '2018-10-01'),
(7833435, 'Svinjska pečenka', '2018-10-01'),
(7561030, 'Svinjska pečenka', '2018-10-01'),
(7559603, 'Svinjska pečenka', '2018-10-01'),
(7560659, 'Svinjska pečenka', '2018-10-01'),
(7573209, 'Svinjska pečenka', '2018-10-01'),
(7571751, 'Svinjska pečenka', '2018-10-01'),
(7559378, 'Svinjska pečenka', '2018-10-01'),
(7559921, 'Piščančji nuggetsi', '2018-10-02'),
(8528757, 'Goveji sote', '2018-11-23'),
(7561030, 'Ričet s prekajeno šunko', '2018-11-23'),
(7559378, 'Ocvrti sir', '2018-11-23'),
(7573209, 'Ocvrti sir', '2018-11-23'),
(7559378, 'Ocvrt puranji zrezek', '2018-11-26'),
(7573209, 'Ocvrt puranji zrezek', '2018-11-26'),
(7559378, 'Krvavica', '2018-11-27'),
(7573209, 'Pasulj s klobaso', '2018-11-27'),
(7573209, 'Jota s prekajeno svinjsko šunko', '2018-11-28'),
(7559378, 'Jota s prekajeno svinjsko šunko', '2018-11-28'),
(7559378, 'Dušena govedina', '2018-11-29'),
(7559378, 'Svinjska pečenka', '2018-11-30'),
(7573209, 'Srčki s krompirjem', '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `uporabniki`
--

CREATE TABLE `uporabniki` (
  `ID_uporabnika` int(11) NOT NULL,
  `Ime` text COLLATE utf8_slovenian_ci NOT NULL,
  `Priimek` text COLLATE utf8_slovenian_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tip` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `uporabniki`
--

INSERT INTO `uporabniki` (`ID_uporabnika`, `Ime`, `Priimek`, `time`, `tip`) VALUES
(0, 'Bojan', 'Vozel', '2018-09-28 09:35:03', 1),
(1, 'Matej', 'Kocjančič', '2018-09-28 10:18:45', 2),
(123, 'Andrej', 'Avbelj', '2018-09-17 21:34:41', 1),
(3850216, 'Jože', 'Urankar', '2018-09-28 10:18:45', 2),
(4072776, 'Jurij', 'Burja', '2018-09-28 10:18:45', 2),
(4682009, 'Peter', 'Keršič', '2018-09-28 10:18:45', 2),
(4688418, 'Jernej', 'Šere', '2018-09-28 10:18:45', 2),
(4728096, 'Marjan', 'Peterc', '2018-09-28 10:18:45', 2),
(4796259, 'Rado', 'Smrkolj', '2018-09-28 10:18:45', 2),
(7551457, 'Marko', 'Jerič', '2018-09-28 09:35:03', 1),
(7559378, 'Roman', 'Gorenc', '2018-09-28 09:35:03', 1),
(7559603, 'Franc', 'Avbelj', '2018-09-28 11:18:37', 1),
(7559921, 'Ivan', 'Urankar', '2018-09-28 09:35:03', 1),
(7560289, 'Rado', 'Mrgole', '2018-09-28 09:35:03', 1),
(7560659, 'Anton', 'Uršič', '2018-09-28 11:12:09', 1),
(7561030, 'Rok', 'Vodenik', '2018-09-28 09:35:03', 1),
(7561842, 'Dušan', 'Burja', '2018-09-28 09:35:03', 1),
(7565908, 'Marko', 'Lebeničnik', '2018-09-28 09:35:03', 1),
(7567075, 'Matej', 'Martić', '2018-09-28 09:35:03', 1),
(7571751, 'Bojan', 'Pogačnik', '2018-09-28 09:35:03', 1),
(7571921, 'Janez', 'Burger', '2018-09-28 08:31:23', 1),
(7572243, 'Iztok', 'Homar', '2018-09-28 09:35:03', 1),
(7573209, 'Siniša', 'Kuzmanovič', '2018-09-28 09:58:46', 1),
(7573783, 'Darko', 'Zajc', '2018-09-28 09:35:03', 1),
(7833435, 'Rok', 'Klopčič', '2018-09-28 08:28:15', 1),
(7833448, 'Luka', 'Zobavnik', '2018-09-28 11:08:17', 1),
(7833455, 'Sandi', 'Tratnik', '2018-09-28 09:35:03', 1),
(8528757, 'Igor', 'Križnar', '2018-09-28 09:35:03', 1),
(129835934, 'Aleksander', 'Milotić', '2018-09-28 09:35:03', 1),
(130844775, 'Slavko', 'Vesel', '2018-09-28 11:13:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upravitelji`
--

CREATE TABLE `upravitelji` (
  `id` int(11) NOT NULL,
  `uporabnisko_ime` varchar(40) COLLATE utf8_slovenian_ci NOT NULL,
  `geslo` varchar(150) COLLATE utf8_slovenian_ci NOT NULL,
  `imePriimek` varchar(50) COLLATE utf8_slovenian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `upravitelji`
--

INSERT INTO `upravitelji` (`id`, `uporabnisko_ime`, `geslo`, `imePriimek`) VALUES
(1, 'andrejavbelj', '$2y$10$9XQMgcv21KGvVZ02e34Y5OWE9NUGGQR7VKJs3DeqWeZPZX5qdTrS.', 'Andrej Avbelj'),
(2, 'Klemen', '$2y$10$vP4hcySD4dUOic2TwoZUROL0tPtup3aaUc/XQCzATgYTtpClhuwQy', 'Klemen Kočar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jedilnik`
--
ALTER TABLE `jedilnik`
  ADD UNIQUE KEY `datum` (`datum`);

--
-- Indexes for table `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`ID_uporabnika`),
  ADD UNIQUE KEY `ID_uporabnika` (`ID_uporabnika`);

--
-- Indexes for table `upravitelji`
--
ALTER TABLE `upravitelji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upravitelji`
--
ALTER TABLE `upravitelji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
