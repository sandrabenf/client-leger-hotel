-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2024 at 12:57 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `type` enum('standard','suites') NOT NULL,
  `prix` double NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`id`, `type`, `prix`, `id_hotel`, `image`) VALUES
(15, 'suites', 150, 2, ' hotel5paris.jpg'),
(16, 'standard', 70, 3, ' hotel2cannes.jpg'),
(17, 'suites', 120, 4, ' hotel3sainttrop.jpg'),
(18, 'standard', 80, 5, ' hotel4marseille.png'),
(19, 'standard', 75, 6, ' hotel1.jpg'),
(20, 'suites', 100, 7, ' hotel6aBordeaux.png'),
(21, 'standard', 80, 9, ' hotel7amontpellier.png'),
(22, 'suites', 130, 10, ' hotel8aAixenprovence.png'),
(23, 'standard', 80, 6, ' hotel1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sujet` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `email`, `sujet`, `message`, `nom`) VALUES
(1, 'sand@gmail.com', 'uyuydsq', 'tdtrsdyrx', 'hgygi'),
(2, 'fdses@gmail.com', 'iuyu', 'rsewxcxd', 'iu');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nom`, `ville`, `description`, `photo`) VALUES
(2, 'Hôtel Lumière Parisienne', 'Paris', 'Niché au cœur du vibrant quartier de Paris, l\'Hôtel Lumière Parisienne est une échappée belle où l\'élégance intemporelle rencontre le luxe moderne. Cet hôtel boutique exclusif, situé à quelques pas de célèbres attractions comme le Musée du Louvre et la Cathédrale Notre-Dame, offre une expérience parisienne authentique enrichie par un service de première classe.\r\n    \r\n\r\n    Les chambres et suites de l\'Hôtel Lumière Parisienne sont des havres de paix, alliant confort suprême et décoration raffinée. Chaque chambre est ornée d\'œuvres d\'art sélectionnées et dispose de commodités modernes, y compris une literie luxueuse, une technologie de pointe, et des salles de bains en marbre équipées de produits de bain haut de gamme. \r\n    \r\n    \r\nL\'élément phare de l\'Hôtel Lumière Parisienne est sa piscine intérieure somptueuse, baignée de lumière naturelle grâce à son plafond en verre. Entourée de confortables chaises longues, la piscine offre un sanctuaire relaxant loin de l\'agitation de la ville. Le centre de bien-être propose des massages et des soins esthétiques pour revitaliser le corps et l\'esprit, complétés par un sauna et un hammam pour une expérience de détente ultime.\r\n    \r\n    rant de l\'hôtel, Le Bijou, est un joyau culinaire qui propose une cuisine fusion innovante, préparée avec des ingrédients locaux de saison. Le bar adjacent, L\'Élixir, sert une sélection exquise de cocktails artisanaux et de vins fins, dans un cadre élégant et accueillant.\r\n    \r\nPour garantir un séjour sans faille, l\'Hôtel Lumière Parisienne offre une gamme de services personnalisés, incluant une conciergerie disponible 24h/24 pour toutes les demandes, des transferts aéroport luxueux, et des visites privées des trésors cachés de Paris. L\'hôtel dispose également d\'un espace de réunion moderne pour les événements d\'affaires et les célébrations privées.', 'hotel1.jpg'),
(3, 'Hôtel Rivage Cannes', 'Cannes', 'L\'Hôtel Rivage Cannes, perle de la Côte d\'Azur, se dresse majestueusement le long de la célèbre Promenade de la Croisette. Cet établissement de luxe offre des vues imprenables sur la mer Méditerranée, combinées à un accès exclusif à une plage privée.\r\n   \r\nChaque chambre et suite dégage une ambiance de tranquillité et de luxe, avec des balcons privés offrant des vues à couper le souffle sur l\'azur infini. Les intérieurs sont décorés avec goût, mélangeant éléments contemporains et touches méditerranéennes.\r\n   \r\nAu cœur de l\'hôtel se trouve une piscine extérieure entourée d\'un luxuriant jardin paysager, promesse d\'instants de détente sous le soleil de la Riviera. Le bar de la piscine propose des rafraîchissements et des snacks tout au long de la journée.\r\n\r\nLe restaurant de l\'hôtel, La Voile, sert une cuisine méditerranéenne moderne dans un cadre élégant. Les ingrédients locaux frais sont à l\'honneur, accompagnés d\'une sélection impressionnante de vins français et internationaux.', 'hotel2cannes.jpg'),
(4, 'Hotel Azur', 'Saint tropez', 'Niché dans la baie de Saint-Tropez, l\'Hôtel Azur offre une échappatoire luxueuse où glamour et nature se rencontrent. Ce joyau caché propose une intimité rare, avec accès direct à une plage privée et des vues spectaculaires sur la mer.\r\n  \r\n    Les chambres et suites incarnent l\'élégance décontractée de Saint-Tropez, avec des touches de bleu azur et de blanc, évoquant le sable et la mer. Les terrasses privées offrent un espace extérieur pour savourer la brise marine.\r\n    \r\n    La piscine à débordement, véritable oasis, semble se fondre avec la mer. Des cabines privées et un service personnalisé assurent une expérience exclusive et reposante.\r\n   \r\n    Le restaurant de l\'hôtel, Le Pavillon, propose une cuisine locale raffinée, mettant en valeur les saveurs de la Provence avec une touche moderne. Les dîners au bord de la piscine sous les étoiles sont un incontournable.', 'hotel3sainttrop.jpg'),
(5, 'Hôtel Pharo ', 'Marseille', 'Surplombant le Vieux Port historique de Marseille, l\'Hôtel Pharo se distingue par son emplacement privilégié, offrant des vues panoramiques sur le port et la célèbre basilique Notre-Dame de la Garde.\r\n\r\n  Les chambres sont conçues pour refléter l\'histoire maritime de Marseille, avec des nuances de bleu profond et des éléments décoratifs inspirés par la mer. Les balcons privés offrent des vues imprenables sur le port animé.\r\n \r\n  Bien que situé au cœur de la ville, l\'hôtel propose une piscine sur le toit avec une terrasse offrant une vue spectaculaire sur Marseille. Un spa complet est disponible pour des soins relaxants après une journée d\'exploration.\r\n\r\n\r\n    \r\n  Le restaurant de l\'hôtel, Les Voiles, spécialisé dans la cuisine méditerranéenne, utilise des produits locaux pour créer des plats inspirés des traditions culinaires de la région. La terrasse offre une vue magnifique sur le Vieux Port.', 'hotel4marseille.png'),
(6, 'Le Révolutionnaire', 'Paris/Bastille', 'Situé sur la vibrante Place de la Bastille, le cœur historique et révolutionnaire de Paris, l\'Hôtel Le Révolutionnaire combine élégamment l\'histoire riche avec un design moderne. Cet établissement offre une immersion dans l\'âme parisienne, avec un accès facile aux trésors culturels de la ville.\r\n    \r\n    \r\n  Les chambres, inspirées par l\'esprit de la Révolution française, sont décorées avec des touches contemporaines et des reproductions d\'œuvres d\'art historiques. Elles offrent un confort moderne tout en évoquant le passé tumultueux de ce quartier emblématique.\r\n\r\n   \r\n  Bien que situé en plein centre-ville, l\'hôtel assure un havre de paix grâce à son jardin secret, une cour intérieure où les clients peuvent s\'évader de l\'agitation urbaine. Le bar de l\'hôtel, Le Libertaire, sert des cocktails innovants dans une ambiance cosy.', 'hotel5paris.jpg'),
(7, 'La Maison Bordelaise', 'Bordeaux', 'Dans le cœur historique de Bordeaux, La Maison Bordelaise incarne l\'hospitalité chaleureuse du Sud-Ouest. Cette demeure de charme, rénovée avec soin, offre une expérience authentiquement bordelaise, où chaque détail raconte une histoire.\r\n    \r\n    \r\n    Les chambres sont un hommage au patrimoine viticole de la région, avec des touches de bois de chêne et des teintes terreuses. Elles offrent une atmosphère chaleureuse et accueillante, idéale pour se détendre après une journée de découverte.\r\n\r\n   \r\n    Le petit-déjeuner, servi dans le jardin verdoyant ou dans la salle à manger conviviale, met en avant les produits locaux et les spécialités de la région. L\'hôtel propose également des dégustations de vins de Bordeaux en soirée.', 'hotel6aBordeaux.png'),
(9, 'L\'Éclat Méditerranéen', 'Montpellier', ' situé dans le dynamique centre de Montpellier, reflète la lumière et les couleurs de la Méditerranée. Cet hôtel boutique marie design moderne et confort, faisant écho à l\'architecture riche et variée de la ville.\r\n   \r\n   les chambres disposent de grandes fenêtres qui baignent l\'espace de lumière naturelle, accentuant les matériaux naturels et les palettes de couleurs douces. Elles offrent une vue imprenable sur les toits de la ville ou le jardin de l\'hôtel.\r\n\r\n  \r\n   l\'hôtel est doté d\'une terrasse sur le toit avec une piscine offrant des vues panoramiques sur Montpellier. C\'est l\'endroit idéal pour se rafraîchir et se détendre sous le soleil du sud.', 'hotel7amontpellier.png'),
(10, 'Le Provençal', 'Aix-en-Provence', '  Au cœur d\'Aix-en-Provence, Le Provençal est une oasis de tranquillité qui célèbre l\'art de vivre provençal. Entouré d\'un jardin parfumé aux essences de lavande et de romarin, cet hôtel avec piscine est une invitation à la détente.\r\n\r\n    \r\n    Inspirées par les couleurs de la Provence, les chambres sont un havre de paix, offrant une vue sur le jardin luxuriant ou la piscine scintillante. Les intérieurs allient rusticité élégante et confort moderne.\r\n    \r\n \r\n    La piscine extérieure est le cœur de l\'hôtel, entourée de chaises longues confortables et de cabines privées. Le jardin, avec ses coins ombragés, est idéal pour lire ou profiter d\'un moment de quiétude.\r\n\r\n  \r\n    Le restaurant de l\'hôtel propose une cuisine provençale authentique, préparée avec des produits frais du marché.', 'hotel8aAixenprovence.png'),
(11, 'Hotel Azur', 'Cannes', 'L\'Hôtel Azur à Cannes est un établissement élégant, idéalement situé pour ceux qui souhaitent profiter du glamour de la Côte d\'Azur. À quelques pas des plages de sable fin et de la célèbre Croisette, cet hôtel offre un cadre parfait pour des vacances reposantes ou un voyage d\'affaires. Les chambres, décorées avec goût, combinent confort moderne et charme méditerranéen. Les clients peuvent profiter d\'une vue imprenable sur la mer depuis leurs balcons privés. L\'hôtel propose également des services de qualité, incluant une piscine extérieure, un restaurant servant une cuisine locale raffinée et un bar accueillant. L\'Hôtel Azur promet une expérience mémorable à Cannes, alliant luxe discret et service attentionné.', 'DALL·E 2024-04-25 11.33.31 - A picturesque beachfront hotel, showcasing a large building with balconies facing the sea. The exterior is painted in light blue and white, reflecting.webp'),
(12, 'dza', 'Paris/Bastille', 'zafdaFEfez', 'DALL·E 2024-04-25 11.35.00 - A luxurious hotel lobby with marble floors and grand chandeliers hanging from a high ceiling. The lobby is decorated with lush potted plants, elegant .webp');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `options` varchar(20) NOT NULL,
  `prix_reservation` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `date_debut`, `date_fin`, `id_user`, `id_chambre`, `options`, `prix_reservation`) VALUES
(8, '2020-02-02', '2020-02-04', 4, 15, '30', 330),
(9, '2020-03-30', '2020-04-02', 4, 15, '12', 462),
(10, '2020-03-30', '2020-04-02', 4, 15, '12', 462),
(11, '2020-03-30', '2020-04-02', 4, 15, '12', 462),
(12, '2024-05-16', '2024-05-23', 4, 15, '30', 1080),
(13, '2020-03-02', '2020-04-03', 3, 15, '12', 4812);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('admin','client') NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `type`) VALUES
(1, 'Benfarhat', 'Sandra', 'sandra.benf@gmail.com', 'benf2024', 'admin'),
(2, 'dzi', 'zafzve', 'cdsc@sd.com', '$2y$10$XxVfCnzjHbglRz3xaQVcu.eQvlvyoopSiKQRO6yLAOGNqiMHLbXrK', 'client'),
(3, 'kif', 'uzgi', 'sand@gmail.com', '$2y$10$LXqJ/N.huuuqBTnCNcPwQ.Il/hzVU.4jag6SrsW5k/MTAytP.xJUm', 'admin'),
(4, 'kassim', 'Assya', 'assya@gmail.com', '$2y$10$d74TXYYAW7C0F73kFPhb5Ov7f4DdDYpCwolFkJMPPYFE7PYPlzn3W', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_ibfk_1` (`id_chambre`),
  ADD KEY `reservation_ibfk_2` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
