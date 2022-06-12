-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 13, 2022 alle 01:08
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hw2`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aeroporto`
--

CREATE TABLE `aeroporto` (
  `codice` varchar(50) NOT NULL,
  `citta` varchar(50) DEFAULT NULL,
  `nazione` varchar(50) DEFAULT NULL,
  `internazionale` tinyint(1) DEFAULT NULL,
  `tot_voli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aeroporto`
--

INSERT INTO `aeroporto` (`codice`, `citta`, `nazione`, `internazionale`, `tot_voli`) VALUES
('AMS', 'Amsterdam', 'Paesi Bassi', 1, 0),
('CIY', 'Comiso', 'Italia', 0, 0),
('CTA', 'Catania', 'Italia', 1, 0),
('EIN', 'Eindhoven', 'Paesi Bassi', 1, 0),
('FCO', 'Roma', 'Italia', 1, 0),
('HEL', 'Helsinki', 'Finlandia', 1, 0),
('KUN', 'Kaunas', 'Lituania', 1, 0),
('MXP', 'Milano', 'Italia', 1, 0),
('PLQ', 'Palanga', 'Lituania', 0, 0),
('RIX', 'Riga', 'Lettonia', 1, 0),
('TLL', 'Tallinn', 'Estonia', 1, 0),
('VNO', 'Vilnius', 'Lituania', 1, 0),
('WAW', 'Varsavia', 'Polonia', 1, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `atterra`
--

CREATE TABLE `atterra` (
  `volo` varchar(50) NOT NULL,
  `aeroporto` varchar(50) NOT NULL,
  `terminal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `atterra`
--

INSERT INTO `atterra` (`volo`, `aeroporto`, `terminal`) VALUES
('AY001', 'VNO', 1),
('AY002', 'HEL', 1),
('AY003', 'FCO', 4),
('AY004', 'HEL', 1),
('AZ001', 'FCO', 1),
('AZ002', 'MXP', 1),
('AZ003', 'WAW', 3),
('AZ004', 'MXP', 1),
('BT001', 'RIX', 1),
('BT002', 'CTA', 1),
('BT003', 'RIX', 1),
('BT004', 'HEL', 2),
('BT005', 'RIX', 1),
('BT006', 'VNO', 1),
('BT007', 'PLQ', 1),
('FR001', 'MXP', 3),
('FR002', 'FCO', 2),
('FR003', 'KUN', 1),
('FR004', 'MXP', 3),
('FR005', 'CTA', 1),
('HV001', 'EIN', 1),
('KL001', 'CTA', 1),
('KL002', 'AMS', 1),
('LO001', 'CTA', 1),
('LO002', 'WAW', 1),
('LO003', 'AMS', 2),
('LO004', 'WAW', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `connette`
--

CREATE TABLE `connette` (
  `volo` varchar(50) NOT NULL,
  `connessione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `connette`
--

INSERT INTO `connette` (`volo`, `connessione`) VALUES
('AZ001', 'AZ002'),
('BT001', 'BT002'),
('BT003', 'BT004');

-- --------------------------------------------------------

--
-- Struttura della tabella `contiene`
--

CREATE TABLE `contiene` (
  `aeroporto` varchar(50) NOT NULL,
  `terminal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `contiene`
--

INSERT INTO `contiene` (`aeroporto`, `terminal`) VALUES
('AMS', 1),
('AMS', 2),
('AMS', 3),
('CIY', 1),
('CTA', 1),
('CTA', 2),
('EIN', 1),
('FCO', 1),
('FCO', 2),
('FCO', 3),
('FCO', 4),
('FCO', 5),
('HEL', 1),
('HEL', 2),
('HEL', 3),
('KUN', 1),
('MXP', 1),
('MXP', 2),
('MXP', 3),
('MXP', 4),
('PLQ', 1),
('RIX', 1),
('TLL', 1),
('VNO', 1),
('WAW', 1),
('WAW', 2),
('WAW', 3),
('WAW', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `decolla`
--

CREATE TABLE `decolla` (
  `volo` varchar(50) NOT NULL,
  `aeroporto` varchar(50) NOT NULL,
  `terminal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `decolla`
--

INSERT INTO `decolla` (`volo`, `aeroporto`, `terminal`) VALUES
('AY001', 'HEL', 1),
('AY002', 'VNO', 1),
('AY003', 'HEL', 1),
('AY004', 'FCO', 4),
('AZ001', 'CTA', 1),
('AZ002', 'FCO', 1),
('AZ003', 'MXP', 1),
('AZ004', 'WAW', 3),
('BT001', 'VNO', 1),
('BT002', 'RIX', 1),
('BT003', 'CTA', 1),
('BT004', 'RIX', 1),
('BT005', 'HEL', 2),
('BT006', 'TLL', 1),
('BT007', 'VNO', 1),
('FR001', 'CTA', 1),
('FR002', 'CIY', 1),
('FR003', 'MXP', 3),
('FR004', 'KUN', 1),
('FR005', 'MXP', 3),
('HV001', 'CTA', 1),
('KL001', 'AMS', 1),
('KL002', 'CTA', 1),
('LO001', 'WAW', 1),
('LO002', 'CTA', 1),
('LO003', 'WAW', 1),
('LO004', 'AMS', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `favourite_dest` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `terminal`
--

CREATE TABLE `terminal` (
  `aeroporto` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `terminal`
--

INSERT INTO `terminal` (`aeroporto`, `numero`) VALUES
('AMS', 1),
('AMS', 2),
('AMS', 3),
('CIY', 1),
('CTA', 1),
('CTA', 2),
('EIN', 1),
('FCO', 1),
('FCO', 2),
('FCO', 3),
('FCO', 4),
('FCO', 5),
('HEL', 1),
('HEL', 2),
('HEL', 3),
('KUN', 1),
('MXP', 1),
('MXP', 2),
('MXP', 3),
('MXP', 4),
('PLQ', 1),
('RIX', 1),
('TLL', 1),
('VNO', 1),
('WAW', 1),
('WAW', 2),
('WAW', 3),
('WAW', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `volo`
--

CREATE TABLE `volo` (
  `codice` varchar(50) NOT NULL,
  `compagnia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `volo`
--

INSERT INTO `volo` (`codice`, `compagnia`) VALUES
('AY001', 'Finnair'),
('AY002', 'Finnair'),
('AY003', 'Finnair'),
('AY004', 'Finnair'),
('AZ001', 'Alitalia'),
('AZ002', 'Alitalia'),
('AZ003', 'Alitalia'),
('AZ004', 'Alitalia'),
('BT001', 'Airbalitc'),
('BT002', 'Airbalitc'),
('BT003', 'Airbalitc'),
('BT004', 'Airbalitc'),
('BT005', 'Airbalitc'),
('BT006', 'Airbalitc'),
('BT007', 'Airbalitc'),
('FR001', 'Ryanair'),
('FR002', 'Ryanair'),
('FR003', 'Ryanair'),
('FR004', 'Ryanair'),
('FR005', 'Ryanair'),
('HV001', 'Transavia'),
('KL001', 'Klm'),
('KL002', 'Klm'),
('LO001', 'Lot'),
('LO002', 'Lot'),
('LO003', 'Lot'),
('LO004', 'Lot');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aeroporto`
--
ALTER TABLE `aeroporto`
  ADD PRIMARY KEY (`codice`);

--
-- Indici per le tabelle `atterra`
--
ALTER TABLE `atterra`
  ADD PRIMARY KEY (`volo`,`aeroporto`,`terminal`);

--
-- Indici per le tabelle `connette`
--
ALTER TABLE `connette`
  ADD PRIMARY KEY (`volo`,`connessione`);

--
-- Indici per le tabelle `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`aeroporto`,`terminal`);

--
-- Indici per le tabelle `decolla`
--
ALTER TABLE `decolla`
  ADD PRIMARY KEY (`volo`,`aeroporto`,`terminal`);

--
-- Indici per le tabelle `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indici per le tabelle `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`aeroporto`,`numero`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `volo`
--
ALTER TABLE `volo`
  ADD PRIMARY KEY (`codice`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
