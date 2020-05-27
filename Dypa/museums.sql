-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 27 Μάη 2020 στις 12:17:48
-- Έκδοση διακομιστή: 10.1.36-MariaDB
-- Έκδοση PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `museums`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ekthemata`
--

CREATE TABLE `ekthemata` (
  `id_ek` int(11) NOT NULL,
  `ekthema` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(30) NOT NULL,
  `id_m` int(11) NOT NULL,
  `img_e` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `ekthemata`
--

INSERT INTO `ekthemata` (`id_ek`, `ekthema`, `year`, `id_m`, `img_e`) VALUES
(1, 'Μονα Λιζα', '0000-00-00', 20, ''),
(2, 'HUNDERTWASSER – SCHIELE\r\nImagi', '1928–2000', 8, ''),
(3, 'The Prophet Elijah', '1668', 11, ''),
(4, 'René Magritte, The Horsewoman', '1922', 14, ''),
(5, 'Stećak', '12th century', 15, ''),
(6, 'Burial with gold treasure', '4600-4200 BCE', 18, ''),
(7, 'Η Αφροδιτη της Μηλου', '150 - 50 ?.?.', 29, ''),
(8, 'The Kiss, Auguste Rodin', '1889', 30, ''),
(9, 'The Queen Tries to Console Ham', '1834', 32, ''),
(10, 'The Kiss, Auguste Rodin', '1889', 50, ''),
(11, 'The Kiss, Auguste Rodin', '1889', 40, ''),
(12, 'The Kiss, Auguste Rodin', '1889', 35, ''),
(13, 'The Kiss, Auguste Rodin', '1889', 33, ''),
(14, 'The Kiss, Auguste Rodin', '1889', 31, ''),
(15, 'The Kiss, Auguste Rodin', '1889', 36, ''),
(16, 'The Queen Tries to Console Ham', '1834', 32, ''),
(17, 'The Kiss, Auguste Rodin', '1889', 4, ''),
(18, 'The Queen Tries to Console Ham', '1834', 32, ''),
(19, 'The Kiss, Auguste Rodin', '1889', 15, ''),
(20, 'The Queen Tries to Console Ham', '1834', 32, ''),
(21, 'The Kiss, Auguste Rodin', '1889', 5, ''),
(22, 'The Queen Tries to Console Ham', '1834', 32, ''),
(23, 'The Kiss, Auguste Rodin', '1889', 45, ''),
(24, 'The Queen Tries to Console Ham', '1834', 32, '');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `museum`
--

CREATE TABLE `museum` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `museum`
--

INSERT INTO `museum` (`id`, `name`, `passwd`, `region`, `country`) VALUES
(1, 'Βρετανικό Μουσείο ', '1234', 'London', 'UK'),
(2, 'Εθνικό Μουσείο Σιδηροδρόμων', '1234', 'York', 'UK'),
(3, 'Μουσείο Ακρόπολης', '1234', 'Athens', 'GREECE'),
(4, 'Μουσείο Κυκλαδικής Τέχνης', '1234', 'Athens', 'GREECE'),
(5, 'Musee du Louvre', '1234', 'Paris', 'FRANCE'),
(6, 'Musee Rodin ', '1234', 'Paris', 'FRANCE'),
(7, 'Εθνικό Μουσείο της Τσεχίας', '1234', 'Prague', 'CZECH'),
(8, 'Museum of Decorative Arts', '1234', 'Prague', 'CZECH'),
(9, 'Accademia Gallery', '1234', 'Florence', 'ITALY'),
(10, 'Μουσείο Αιγυπτιακών Αρχαιοτήτω', '1234', 'Torino', 'ITALY'),
(11, 'Musee des Instruments de Musiq', '1234', 'Belgium', 'BELGIUM'),
(12, 'Margitte Museum', '1234', 'Belgium', 'BELGIUM'),
(13, 'El Museo Nacional del Prado', '1234', 'Spain', 'SPAIN'),
(14, 'Museu Picasso', '1234', 'Spain', 'SPAIN'),
(15, 'Μουσείο Vasa', '1234', 'Sweden', 'SWEDEN'),
(16, 'ABBA The Museum ', '1234', 'Sweden', 'SWEDEN'),
(69, 'loubre', '1234', 'Paris', 'France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
