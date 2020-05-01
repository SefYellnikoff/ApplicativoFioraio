-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Mag 01, 2020 alle 02:03
-- Versione del server: 8.0.18
-- Versione PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioraio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `flowers`
--

CREATE TABLE `flowers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `opportunity_id` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `qta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `opportunity_id`, `price`, `qta`) VALUES
(1, 'Tulipano', '1', 5, 50),
(2, 'Girasole', '3', 6, 300),
(3, 'Rosa', '2', 8, 66);

-- --------------------------------------------------------

--
-- Struttura della tabella `opportunities`
--

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `opportunities`
--

INSERT INTO `opportunities` (`id`, `name`, `description`) VALUES
(1, 'compleanno', 'Per il tuo compleanno, fiori coloratissimi.'),
(2, 'sanvalentino', 'per la persona che ami, i fiori piu belli'),
(3, 'matrimonio', 'per le tue nozze, i fiori piu particolari');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opportunity_id` (`opportunity_id`);

--
-- Indici per le tabelle `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
