-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 31, 2018 alle 07:14
-- Versione del server: 5.6.38
-- Versione PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DB_library`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `books`
--

INSERT INTO `books` (`id`, `title`, `category`, `created_at`) VALUES
(1, 'Natale in Allegria', 2, '2018-05-01 00:00:00'),
(2, 'Piccoli Sognatori', 1, '2018-05-08 00:00:00'),
(3, 'Filosofia Applicata', 3, '2018-03-06 00:00:00'),
(4, 'Master Chef', 2, '2018-01-22 00:00:00'),
(5, 'Poteri e Doveri', 4, '0000-00-00 00:00:00'),
(8, 'test', 3, '0000-00-00 00:00:00'),
(11, 'test333', 1, '0000-00-00 00:00:00'),
(12, ' tetst ', 3, '0000-00-00 00:00:00'),
(13, ' titolo ', 1, '0000-00-00 00:00:00'),
(14, ' titolo giallo ', 2, '0000-00-00 00:00:00'),
(15, '  ', 0, '0000-00-00 00:00:00'),
(16, ' test333 ', 1, '0000-00-00 00:00:00'),
(17, ' test333 ', 1, '0000-00-00 00:00:00'),
(18, ' titolo giallo ', 3, '2018-05-30 12:21:46'),
(19, ' mio libro ', 2, '2018-05-30 13:49:17');

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Fantastico'),
(2, 'Giallo'),
(3, 'Scientifico');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
