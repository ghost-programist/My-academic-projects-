-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 16, 2025 at 04:55 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technikum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id` int(11) NOT NULL,
  `wychowawca` int(11) NOT NULL,
  `iliosc_uczniow` int(35) NOT NULL,
  `nazwa_klasy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `przedmiot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `id` int(11) NOT NULL,
  `prowadzajacy` int(11) NOT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samorzad`
--

CREATE TABLE `samorzad` (
  `id` int(11) NOT NULL,
  `id_ucznia` int(11) NOT NULL,
  `rola` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(15) NOT NULL,
  `nazwisko` varchar(15) NOT NULL,
  `klasa` int(11) NOT NULL,
  `data_urodzenia` date NOT NULL,
  `mail` text NOT NULL,
  `telefon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wychowawca` (`wychowawca`);

--
-- Indeksy dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD PRIMARY KEY (`id`),
  ADD KEY `przedmiot` (`przedmiot`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prowadzajacy` (`prowadzajacy`);

--
-- Indeksy dla tabeli `samorzad`
--
ALTER TABLE `samorzad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ucznia` (`id_ucznia`);

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `klasa` (`klasa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klasa`
--
ALTER TABLE `klasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nauczyciele`
--
ALTER TABLE `nauczyciele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `samorzad`
--
ALTER TABLE `samorzad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klasa`
--
ALTER TABLE `klasa`
  ADD CONSTRAINT `klasa_ibfk_1` FOREIGN KEY (`wychowawca`) REFERENCES `nauczyciele` (`id`);

--
-- Constraints for table `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD CONSTRAINT `nauczyciele_ibfk_1` FOREIGN KEY (`przedmiot`) REFERENCES `przedmiot` (`id`);

--
-- Constraints for table `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD CONSTRAINT `przedmiot_ibfk_1` FOREIGN KEY (`prowadzajacy`) REFERENCES `nauczyciele` (`id`);

--
-- Constraints for table `samorzad`
--
ALTER TABLE `samorzad`
  ADD CONSTRAINT `samorzad_ibfk_1` FOREIGN KEY (`id_ucznia`) REFERENCES `uczniowie` (`id`);

--
-- Constraints for table `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD CONSTRAINT `uczniowie_ibfk_1` FOREIGN KEY (`klasa`) REFERENCES `klasa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
