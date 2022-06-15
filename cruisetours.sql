-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jun 2022 om 13:55
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruisetours`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `USER_ID` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Admin` tinyint(2) NOT NULL,
  `Geaccepteerd` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`USER_ID`, `Mail`, `Password`, `Admin`, `Geaccepteerd`) VALUES
(1, 'tobiasschrederhof@gmail.com', 'Wachtwoord', 1, 1),
(6, 'pietjan120031@gmail.com', 'Janpiet', 0, 1),
(8, 'tobiasschrederhof@live.nl', 'Wachtwoord', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boekingen`
--

CREATE TABLE `boekingen` (
  `boekingID` int(6) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `reisID` int(11) NOT NULL,
  `DatumToegevoegd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `boekingen`
--

INSERT INTO `boekingen` (`boekingID`, `USER_ID`, `reisID`, `DatumToegevoegd`) VALUES
(1, 1, 2, '2022-06-13 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `ID` int(6) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Onderwerp` varchar(11) NOT NULL,
  `Bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `Email`, `Onderwerp`, `Bericht`) VALUES
(1, 'tobiasschrederhof@gmail.com', 'Test', 'djldjljgldjlgjldjgldjlhjldjlnb');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cruises`
--

CREATE TABLE `cruises` (
  `reisID` int(11) NOT NULL,
  `Naam` varchar(22) NOT NULL,
  `Eindbestemming` varchar(22) NOT NULL,
  `Startbestemming` varchar(22) NOT NULL,
  `Datum` date NOT NULL,
  `EindDatum` date NOT NULL,
  `Prijs` decimal(5,2) NOT NULL,
  `Beschrijving` text NOT NULL,
  `Aantal personen` int(11) NOT NULL,
  `Afbeelding` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `cruises`
--

INSERT INTO `cruises` (`reisID`, `Naam`, `Eindbestemming`, `Startbestemming`, `Datum`, `EindDatum`, `Prijs`, `Beschrijving`, `Aantal personen`, `Afbeelding`) VALUES
(2, 'Nederland Cruise', 'Spanje', 'Nederland', '2022-05-20', '2022-05-27', '300.00', 'Dit is een andere cruiseschip', 2, 'cruise_ship.jpg'),
(5, 'Super Cruise', 'Madagaskar', 'Spanje', '2022-06-23', '2022-06-26', '300.00', 'Dit is een nog andere cruiseschip', 2, 'cruise_ship.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recensies`
--

CREATE TABLE `recensies` (
  `recensieID` int(6) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `reisID` int(11) NOT NULL,
  `recensieText` varchar(255) NOT NULL,
  `validatie` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `recensies`
--

INSERT INTO `recensies` (`recensieID`, `USER_ID`, `reisID`, `recensieText`, `validatie`) VALUES
(1, 1, 2, 'Dit is een leuke cruise!!\r\n', 1),
(2, 1, 2, 'Dit is niet een leuke cruise!!\r\n', 0),
(4, 1, 2, 'Tijn stinkt', 1),
(5, 1, 3, 'Goed', 1),
(6, 1, 3, 'Slecht', 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- Indexen voor tabel `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`boekingID`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `cruises`
--
ALTER TABLE `cruises`
  ADD PRIMARY KEY (`reisID`);

--
-- Indexen voor tabel `recensies`
--
ALTER TABLE `recensies`
  ADD PRIMARY KEY (`recensieID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `boekingID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `cruises`
--
ALTER TABLE `cruises`
  MODIFY `reisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `recensies`
--
ALTER TABLE `recensies`
  MODIFY `recensieID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
