-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Aug 2020 um 20:42
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `verein`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`email`, `passwort`) VALUES

('test@test.test', '$2y$10$W973Y8WndVnkxwhka8lVm.9V6AWf5NQP2Lm9k2huuIgpkfYUbpfEy');

-- Passwort test
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitglied`
--

CREATE TABLE `mitglied` (
  `mitglied_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `geschlecht` varchar(1) NOT NULL,
  `geb_dat` date NOT NULL,
  `strasse` varchar(100) DEFAULT NULL,
  `nr` varchar(10) DEFAULT NULL,
  `plz` char(5) DEFAULT NULL,
  `ort` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `mitglied`
--

INSERT INTO `mitglied` (`mitglied_id`, `name`, `vorname`, `geschlecht`, `geb_dat`, `strasse`, `nr`, `plz`, `ort`) VALUES
(1, 'Mayer', 'Martin', 'm', '1978-05-11', 'Hauptstr.', '45', '10437', 'Berlin'),
(2, 'Musterfrau', 'Gabi', 'w', '1993-04-01', 'Dorfstr.', '5', '12458', 'Berlin'),
(3, 'Meier', 'Janine', 'w', '1980-05-04', 'Danziger Str.', '98b', '10245', 'Berlin'),
(5, 'Schneider', 'Sven', 'm', '1995-04-03', 'Berner Str', '5', '10432', 'Berlin'),
(6, 'Broth', 'Fabian', 'm', '1948-08-23', 'Rübenweg', '34', '34002', 'Winzen'),
(7, 'Haudegen', 'Hans', 'm', '1987-03-12', 'Berner Str', '2', '12022', 'Bern');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verein`
--

CREATE TABLE `verein` (
  `verein_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stadt` varchar(100) NOT NULL,
  `vorstandsvors` int(11) DEFAULT NULL,
  `gruendung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `verein`
--

INSERT INTO `verein` (`verein_id`, `name`, `stadt`, `vorstandsvors`, `gruendung`) VALUES
(1, 'Biertrinkerunion', 'Berlin', 36, '2020-02-19'),
(3, 'Neuer Verein', 'Musterstadt', 0, '2018-08-16'),
(8, 'Freitagsclub e.V.', 'Musterstadt', 0, '2018-02-01'),
(9, 'SG Gera 1911', 'Gera', 6, '1911-03-12'),
(10, 'FC Pankow 2020', 'Pankow', 0, '2020-02-20');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `vereinmitglied`
--

CREATE TABLE `vereinmitglied` (
  `verein_id` int(11) NOT NULL,
  `mitglied_id` int(11) NOT NULL,
  `bezahlt` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `vereinmitglied`
--

INSERT INTO `vereinmitglied` (`verein_id`, `mitglied_id`, `bezahlt`) VALUES
(1, 1, '1'),
(1, 2, '1'),
(1, 3, '1'),
(3, 3, '1'),
(6, 2, '1'),
(10, 7, '1');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `mitglied`
--
ALTER TABLE `mitglied`
  ADD PRIMARY KEY (`mitglied_id`);

--
-- Indizes für die Tabelle `verein`
--
ALTER TABLE `verein`
  ADD PRIMARY KEY (`verein_id`);

--
-- Indizes für die Tabelle `vereinmitglied`
--
ALTER TABLE `vereinmitglied`
  ADD PRIMARY KEY (`verein_id`,`mitglied_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `mitglied`
--
ALTER TABLE `mitglied`
  MODIFY `mitglied_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `verein`
--
ALTER TABLE `verein`
  MODIFY `verein_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
