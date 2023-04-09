-- phpMyAdmin SQL Dump
-- version 5.2.0
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Gegenereerd op: 09 apr 2023 om 13:07
-- Serverversie: 10.9.4-MariaDB-1:10.9.4+maria~ubu2204
-- PHP-versie: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developmentdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `destination`
--

CREATE TABLE `destination` (
  `destination_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `longitute` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `destination`
--

INSERT INTO `destination` (`destination_id`, `address`, `city`, `country`, `longitute`, `latitude`, `route_id`) VALUES
(147, 'Julianalaan undefined', 'Heemstede', 'Nederland', '4.623871', '52.352911', 53),
(149, 'Marienplatz 18', 'München', 'Duitsland', '11.576157', '48.136767', 53),
(150, 'Kirchgasse 16', 'Kaprun', 'Oostenrijk', '12.756414', '47.273354', 53),
(151, 'Piazza San Martino 4', 'Bologna', 'Italië', '11.34613', '44.496723', 53),
(152, 'Via Roma 86', 'Rimini', 'Italië', '12.578144', '44.060768', 53),
(153, 'Glagoljaška 10', 'Split', 'Kroatië', '16.44516', '43.508832', 53),
(154, 'Miramarska cesta 5/1', 'Zagreb', 'Kroatië', '15.976181', '45.803967', 53),
(155, 'Gyógy tér 2', 'Balatonfüred', 'Hongarije', '17.898102', '46.956134', 56),
(156, 'Szentkirályi utca 8', 'Boedapest', 'Hongarije', '19.065399', '47.494034', 56),
(157, 'Pri nemocnici undefined', 'Košice', 'Slowakije', '21.253052', '48.709289', 56),
(158, '3629 undefined', 'Holčíkovce', 'Slowakije', '21.723962', '49.016457', 56),
(159, 'Generała Romana Sołtyka undefined', 'Krakau', 'Polen', '19.93907', '50.060672', 56),
(160, 'Schwimmbadbrücke undefined', 'Kassel', 'Duitsland', '9.503174', '51.297039', 56),
(161, 'Voorhelmstraat 25-305', 'Haarlem', 'Nederland', '4.636917', '52.373922', 56);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `route_description` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `route_description` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `posted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `route`
--

INSERT INTO `route` (`route_id`, `title`, `route_description`, `author_id`, `posted_at`) VALUES
(52, 'Rondje Haarlem!', 'Voor op je oude dag..', 23, '2023-03-21 00:00:00'),
(53, 'Cultuur snuiven', 'Paar random steden', 23, '2023-03-21 00:00:00'),
(56, 'Roadtripping trough Europe!', 'SEVEN! countries to visit', 27, '2023-03-29 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `hashedpassword` varchar(255) NOT NULL,
  `favorite_holiday_destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `route`
--

INSERT INTO `route` (`route_id`, `title`, `route_description`, `author_id`, `posted_at`) VALUES
(52, 'Rondje Haarlem!', 'Voor op je oude dag..', 23, '2023-03-21 00:00:00'),
(53, 'Cultuur snuiven', 'Paar random steden', 23, '2023-03-21 00:00:00'),
(56, 'Roadtripping trough Europe!', 'SEVEN! countries to visit', 27, '2023-03-29 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `hashedpassword` varchar(255) NOT NULL,
  `favorite_holiday_destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `emailaddress`, `hashedpassword`, `favorite_holiday_destination`) VALUES
(23, 'Admin', 'Admin', 'admin@user.nl', '$2y$10$f1dpdc2E2/LuzPA.hjLvnOOd0XmiGvbuvUIS5KahuXyAwjxqD6Thi', 'admin'),
(27, 'Lennard', 'Ruud', 'lruud@webdev.nl', '$2y$10$LkmAa3kU80pdQkG.pzquP.beo9A9JwF7Adxs9eDOVE0vM1GJ/mvDu', 'Vlieland');

--
-- Indexen voor geëxporteerde tabellen
--
INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `emailaddress`, `hashedpassword`, `favorite_holiday_destination`) VALUES
(23, 'Admin', 'Admin', 'admin@user.nl', '$2y$10$f1dpdc2E2/LuzPA.hjLvnOOd0XmiGvbuvUIS5KahuXyAwjxqD6Thi', 'admin'),
(27, 'Lennard', 'Ruud', 'lruud@webdev.nl', '$2y$10$LkmAa3kU80pdQkG.pzquP.beo9A9JwF7Adxs9eDOVE0vM1GJ/mvDu', 'Vlieland');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`),
  ADD KEY `route_id` (`route_id`);
--
-- Indexen voor tabel `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destination_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexen voor tabel `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`),
  ADD KEY `author_id` (`author_id`);
--
-- Indexen voor tabel `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `destination`
--
ALTER TABLE `destination`
  MODIFY `destination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT voor een tabel `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Beperkingen voor geëxporteerde tabellen
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `route` (`route_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `route`
-- Beperkingen voor tabel `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `route` (`route_id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
