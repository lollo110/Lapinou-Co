-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 29, 2025 at 02:17 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapinou&co`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessoire`
--

CREATE TABLE `accessoire` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accessoire`
--

INSERT INTO `accessoire` (`id`, `nom`, `prix`, `stock`, `description`, `type`, `image`) VALUES
(1, 'Pont en rondins de bois', 12.9, 30, 'Pont flexible en rondins de bois naturel, idéal pour grimper et se cacher.', 'Accessoire en bois', 'pont_rondins.avif'),
(2, 'Tunnel en osier', 14.5, 25, 'Tunnel en osier naturel pour explorer et grignoter.', 'Accessoire naturel', 'tunnel_osier.avif'),
(3, 'Maisonnette en bois', 24.9, 20, 'Abri confortable en bois naturel pour offrir un refuge sécurisé.', 'Maison', 'maison_bois.avif'),
(4, 'Cabane avec toit plat', 22.9, 15, 'Cabane en bois robuste avec toit plat servant aussi de plateforme.', 'Maison', 'cabane_plateforme.avif'),
(5, 'Passerelle en bois', 18.5, 18, 'Passerelle solide en bois reliant différents espaces du parc.', 'Accessoire en bois', 'passerelle.png'),
(6, 'Roue en bois', 29.9, 10, 'Grande roue en bois naturel, silencieuse et sans danger pour l’animal.', 'Accessoire sportif', 'roue_bois.png');

-- --------------------------------------------------------

--
-- Table structure for table `jouet`
--

CREATE TABLE `jouet` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jouet`
--

INSERT INTO `jouet` (`id`, `nom`, `prix`, `stock`, `description`, `type`, `image`) VALUES
(1, 'Bascule en bois', 24.9, 15, 'Une bascule solide en bois naturel pour stimuler l’équilibre et l’activité.', 'Accessoire en bois', 'bascule_bois.png'),
(2, 'Jeu de fouille avec cordes', 19.5, 20, 'Un jeu interactif en bois avec cordes et cachettes pour éveiller la curiosité.', 'Jeu éducatif', 'jeu_fouille.png'),
(3, 'Tunnel jungle en feutrine', 29.9, 10, 'Structure ludique en bois avec lanières de feutrine pour explorer et se cacher.', 'Accessoire d’exploration', 'tunnel_feutrine.png'),
(4, 'Pont en bois flexible', 14.9, 25, 'Pont en rondins de bois naturel, modulable pour relier différents espaces.', 'Accessoire en bois', 'pont_bois.webp'),
(5, 'Trio de balles naturelles', 9.9, 40, 'Ensemble de 3 balles à grignoter en matériaux 100% naturels.', 'Jouet à mâcher', 'balles_naturelles.png'),
(6, 'Plateau d’activité en bois', 34.9, 12, 'Plateau multi-activités en bois naturel pour stimuler l’apprentissage et la motricité.', 'Jeu éducatif', 'plateau_activite.avif');

-- --------------------------------------------------------

--
-- Table structure for table `nourriture`
--

CREATE TABLE `nourriture` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `stock` int NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nourriture`
--

INSERT INTO `nourriture` (`id`, `nom`, `prix`, `stock`, `description`, `type`, `image`) VALUES
(1, 'Cubes d’avoine JR Farm', 5.9, 50, 'Snacks croquants à base d’avoine, riches en fibres pour rongeurs et lapins.', 'Friandise', 'avoine_cubes.jpg'),
(2, 'Salade de fruits JR Farm', 6.5, 40, 'Mélange de fruits séchés colorés et vitaminés pour une gourmandise saine.', 'Friandise', 'salade_fruits.jpg'),
(3, 'Croquettes fourrées carotte Versele Laga', 4.9, 60, 'Snacks croustillants fourrés à la carotte, riches en fibres et vitamines.', 'Friandise', 'crock_carotte.jpg'),
(4, 'Vitakraft Rollis Party', 3.9, 70, 'Anneaux croquants aux céréales et luzerne pour rongeurs et lapins.', 'Friandise', 'rollis_party.jpg'),
(5, 'Racines de pissenlit séchées Bunny', 7.2, 30, 'Racines naturelles de pissenlit séchées, idéales pour grignoter et favoriser la digestion.', 'Friandise naturelle', 'racines_pissenlit.jpg'),
(6, 'Carottes fraîches', 2.5, 100, 'Botte de carottes fraîches croquantes, idéales pour compléter l’alimentation.', 'Légume frais', 'carottes_pack.webp');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` enum('accessoire','jouet','nourriture','serviceClient') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `nom`, `prenom`, `email`, `objet`, `description`) VALUES
(1, 'lorenzo', 'Cilurzo', 'lorenzo.c@gmail.com', 'accessoire', 'J\'ai un probleme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `jouet`
--
ALTER TABLE `jouet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `nourriture`
--
ALTER TABLE `nourriture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jouet`
--
ALTER TABLE `jouet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nourriture`
--
ALTER TABLE `nourriture`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
