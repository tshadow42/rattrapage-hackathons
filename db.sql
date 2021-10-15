-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 15 oct. 2021 à 18:32
-- Version du serveur :  8.0.26-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupMember`
--

CREATE TABLE `groupMember` (
  `USERS_id` int NOT NULL,
  `group_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `HACKATHON`
--

CREATE TABLE `HACKATHON` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `maxGroups` int NOT NULL,
  `maxInGroups` int NOT NULL,
  `advancement` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `HACKATHON`
--

INSERT INTO `HACKATHON` (`id`, `title`, `description`, `maxGroups`, `maxInGroups`, `advancement`) VALUES
(18, 'My amazing project wow', 'Unbelievable', 20, 50, '0'),
(19, 'Test', 'wow', 10, 5, '0'),
(20, 'Super projet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu dui nec sapien mollis feugiat. Maecenas ac mauris hendrerit, sagittis mi ut, bibendum nunc. Cras ac lorem eros. In tincidunt ex sed arcu tincidunt, ut hendrerit tortor mollis. Phasellus non ante mi. Integer sit amet ligula egestas, accumsan libero nec, suscipit ipsum. Donec a augue ante. Quisque tristique est id bibendum feugiat. Maecenas porttitor diam nec fringilla vehicula. In varius pharetra porttitor. Praesent vitae mattis mi. Fusce condimentum mauris justo, ac finibus tortor consectetur sed. Proin eleifend lectus libero, non condimentum sapien gravida at. Nam rhoncus finibus pharetra. Nam convallis non erat eget malesuada. Duis nisi tellus, mattis nec sapien quis, rhoncus pellentesque metus.\n\nVestibulum venenatis orci ut interdum eleifend. Vivamus fermentum libero accumsan neque gravida, et egestas augue finibus. Mauris rutrum, mauris sed consequat mollis, nunc diam vestibulum eros, id rhoncus velit risus et metus. Donec dignissim magna efficitur lorem vehicula condimentum vel ac diam. Donec nec urna eget tortor convallis semper. Praesent finibus pharetra molestie. Sed consectetur enim ut orci egestas, quis semper odio condimentum. Quisque gravida placerat venenatis. Duis eu pellentesque massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque fermentum, mi ut cursus luctus, purus nisi consectetur erat, quis porta dolor odio id elit. Donec laoreet scelerisque iaculis. Phasellus semper leo sit amet sapien vestibulum, sed aliquam ante molestie. Aenean lacinia, lectus eget vestibulum dictum, tortor nibh pharetra nisl, in commodo felis dolor sed ipsum. Donec non blandit eros, sit amet suscipit massa.\n\nPraesent tellus ex, ullamcorper non blandit vel, consectetur eget orci. In erat leo, vestibulum vitae nulla at, convallis molestie nunc. Fusce massa tellus, sollicitudin tristique pharetra quis, efficitur porta purus. Fusce non pharetra sem, a fringilla lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam in orci dolor. Mauris mattis convallis urna. Nunc dictum sem molestie nisi blandit, vitae mollis metus bibendum. Suspendisse ante tellus, laoreet ac ultricies eget, maximus aliquet metus. Donec sapien dolor, bibendum in ante at, viverra tincidunt arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu porta justo. Vestibulum feugiat diam ac augue scelerisque tincidunt.\n\nDuis quis velit vel ligula mattis iaculis vel at risus. Integer lobortis iaculis tincidunt. Donec facilisis purus vel velit interdum, vel rhoncus eros convallis. Suspendisse faucibus felis in ante pretium lobortis. Sed ultrices at diam in venenatis. Praesent dolor dolor, interdum ut arcu in, vulputate mollis neque. Sed vel orci efficitur, finibus leo eget, efficitur felis. Sed semper metus vitae ante consequat hendrerit. Nullam sit amet ex ut justo luctus semper. Vivamus gravida, purus lacinia dignissim venenatis, lorem neque eleifend ante, ut ullamcorper nibh urna id neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus vel semper neque, nec bibendum lacus. Aenean sit amet magna arcu. Praesent commodo risus quis diam faucibus dictum. In hac habitasse platea dictumst. Maecenas ut sem at mauris aliquam imperdiet.\n\nDuis sed enim tincidunt, aliquam sapien sit amet, volutpat magna. Vivamus in pellentesque dui. Aenean consequat condimentum congue. Cras hendrerit varius massa, vitae placerat leo gravida eget. Etiam a urna sagittis, posuere tellus quis, interdum dui. In in posuere risus, id dapibus quam. In sagittis convallis nibh, ut pretium dui. Proin eu est neque. Vestibulum commodo lorem vitae fermentum malesuada. Curabitur vel facilisis tellus. Cras at nunc vel odio congue interdum in eu mi. Curabitur eget felis id sapien rhoncus accumsan ac a ante. Suspendisse ut feugiat elit. Mauris rhoncus aliquet libero, nec luctus diam pretium ac. Nunc nec dui egestas, mollis lectus a, suscipit sapien.', 50, 10, '0');

-- --------------------------------------------------------

--
-- Structure de la table `HACKEVENT`
--

CREATE TABLE `HACKEVENT` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `color` char(7) NOT NULL,
  `specialType` char(1) NOT NULL,
  `isOptional` char(1) NOT NULL,
  `dateStart` timestamp NOT NULL,
  `dateEnd` timestamp NOT NULL,
  `concern` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `HACKEVENT`
--

INSERT INTO `HACKEVENT` (`id`, `title`, `description`, `color`, `specialType`, `isOptional`, `dateStart`, `dateEnd`, `concern`) VALUES
(14, 'Début', 'Début du hackathon', '#198754', 's', 'f', '2021-10-15 09:01:00', '2021-10-15 09:01:00', 18),
(15, 'Fin', 'Fin du hackathon', '#dc3545', 'e', 'f', '2021-10-22 09:01:00', '2021-10-22 09:01:00', 18),
(16, 'Début', 'Début du hackathon', '#198754', 's', 'f', '2021-10-15 09:16:00', '2021-10-15 09:16:00', 19),
(17, 'Fin', 'Fin du hackathon', '#dc3545', 'e', 'f', '2021-10-20 09:16:00', '2021-10-20 09:16:00', 19),
(18, 'Début', 'Début du hackathon', '#198754', 's', 'f', '2021-10-19 16:26:00', '2021-10-19 16:26:00', 20),
(19, 'Fin', 'Fin du hackathon', '#dc3545', 'e', 'f', '2021-10-22 16:27:00', '2021-10-22 16:27:00', 20);

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE `participation` (
  `USERS_id` int NOT NULL,
  `hackathon_id` int NOT NULL,
  `roleInHackathon` char(1) NOT NULL DEFAULT 'p'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`USERS_id`, `hackathon_id`, `roleInHackathon`) VALUES
(1, 18, 'p'),
(1, 19, 'a'),
(1, 20, 'a');

-- --------------------------------------------------------

--
-- Structure de la table `SUBJECT`
--

CREATE TABLE `SUBJECT` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `selectable` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'F',
  `isFor` int NOT NULL,
  `proposedBy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `SUBJECT`
--

INSERT INTO `SUBJECT` (`id`, `title`, `description`, `selectable`, `isFor`, `proposedBy`) VALUES
(1, 'test', 'test', 'T', 19, 1),
(2, 'wow', 'amazing', 'T', 18, 1),
(3, 'wow !', 'amazing !', 'F', 18, 1),
(4, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget nunc rhoncus metus faucibus gravida. Morbi suscipit arcu eget turpis fermentum, a dignissim tortor vulputate. Nullam ut semper nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla id massa ut magna blandit porta quis vel nibh. Vivamus congue lacinia tincidunt. Ut posuere, metus ut dapibus accumsan, orci lacus rhoncus nunc, eu posuere ipsum libero eget urna. Morbi pulvinar iaculis justo hendrerit aliquam. Quisque ac dui mauris. In hac habitasse platea dictumst. Morbi faucibus mauris sed lectus ullamcorper, quis facilisis arcu fermentum. Curabitur aliquet dui eget urna pellentesque malesuada. Suspendisse at aliquam mi, at imperdiet orci.\r\n\r\nNam quis finibus purus. Quisque pellentesque egestas ante, vitae euismod nisi feugiat efficitur. Aenean ut nibh vitae mauris euismod pharetra ut efficitur lacus. Nunc nec orci enim. Curabitur malesuada nisi vel mattis maximus. Pellentesque eu ex nisl. Nulla scelerisque suscipit turpis, quis viverra lacus tristique vel. Maecenas luctus faucibus dui, at vehicula quam blandit eget.\r\n\r\nInteger sollicitudin nunc nunc, sit amet accumsan ligula malesuada fermentum. In eget varius odio, sit amet molestie leo. Sed efficitur turpis et scelerisque pharetra. Proin vitae enim at est rhoncus semper. Phasellus posuere arcu in risus vulputate efficitur. Pellentesque sed diam velit. Vivamus at malesuada diam. Sed tristique congue justo eget congue. Fusce porttitor vehicula mauris, quis eleifend risus interdum in. Nullam blandit velit sit amet libero tempor, quis pharetra diam porttitor. Sed at accumsan arcu, ut elementum risus. Mauris dapibus ipsum eget rutrum convallis.', 'F', 18, 1);

-- --------------------------------------------------------

--
-- Structure de la table `USERGROUP`
--

CREATE TABLE `USERGROUP` (
  `id` int NOT NULL,
  `numbers` int NOT NULL,
  `result` int DEFAULT NULL,
  `concern` int NOT NULL,
  `selectedSubject` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `USERS`
--

CREATE TABLE `USERS` (
  `id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` char(1) NOT NULL DEFAULT 'u'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `USERS`
--

INSERT INTO `USERS` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Nicolas', 'Charvier', 'charvier.nicolas@gmail.com', '$2y$10$Rtske30Hg7NkzOlLDafMRuobe6HohV.L5TWphDL99nBAY6CCKgL72', 'u'),
(2, 'Nicolas', 'Charvier', 'charviernicolas@gmail.com', '$2y$10$8xIQt8YSw26mnUHEqO0wYufMHesQHWjeAJw1QNvhl95dxwMMfV5I.', 'u'),
(3, 'Nicolas', 'Charvier', 'charvdcolas@gmail.com', '$2y$10$yboxYbu3OI0tjdkXNw2LQOKzWOkWXos0oVPEY6orZ33ARx0WhCp.y', 'u'),
(4, 'Nicolas', 'Charvier', 'nicolas@gmail.com', '$2y$10$64caBM90RlGZ//0fR3hQI.YCci2p52mXied1SpB5AgdFwq6NaqKl.', 'u'),
(5, 'Nicolas', 'Charvier', 's@gmail.com', '$2y$10$149ZsEXFZr1ID.cTNBdjueA3HJ4qOkjc/Y.FRdzmsIDu/m3KnhRkC', 'u'),
(6, 'Nicolas', 'Charvier', 'char7las@gmail.com', '$2y$10$Kjk9Uuz.JyUp7Xc4AmfCru9vZKX3uEaCUc0CoJUYOx2Regcqw9kAu', 'u'),
(7, 'Nicolas', 'Charvier', '9icolas@gmail.com', '$2y$10$NgQRFBxtqg.s1SV5qr1kZuu.fd.KUhsArafOh26SEhL8na9XeV5Vi', 'u'),
(8, 'Nicolas', 'Charvier', 'fs@gmail.com', '$2y$10$uEDsXo0wyp5aP6TPehtxr.1blZhPdFruX0Slxjp3UuY0M80n7k8HO', 'u');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupMember`
--
ALTER TABLE `groupMember`
  ADD PRIMARY KEY (`USERS_id`,`group_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Index pour la table `HACKATHON`
--
ALTER TABLE `HACKATHON`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `HACKEVENT`
--
ALTER TABLE `HACKEVENT`
  ADD PRIMARY KEY (`id`),
  ADD KEY `concern` (`concern`);

--
-- Index pour la table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`USERS_id`,`hackathon_id`),
  ADD KEY `hackathon_id` (`hackathon_id`);

--
-- Index pour la table `SUBJECT`
--
ALTER TABLE `SUBJECT`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposedBy` (`proposedBy`),
  ADD KEY `isFor` (`isFor`);

--
-- Index pour la table `USERGROUP`
--
ALTER TABLE `USERGROUP`
  ADD PRIMARY KEY (`id`),
  ADD KEY `concern` (`concern`),
  ADD KEY `selectedSubject` (`selectedSubject`);

--
-- Index pour la table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `HACKATHON`
--
ALTER TABLE `HACKATHON`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `HACKEVENT`
--
ALTER TABLE `HACKEVENT`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `SUBJECT`
--
ALTER TABLE `SUBJECT`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `USERGROUP`
--
ALTER TABLE `USERGROUP`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groupMember`
--
ALTER TABLE `groupMember`
  ADD CONSTRAINT `groupMember_ibfk_1` FOREIGN KEY (`USERS_id`) REFERENCES `USERS` (`id`),
  ADD CONSTRAINT `groupMember_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `USERGROUP` (`id`);

--
-- Contraintes pour la table `HACKEVENT`
--
ALTER TABLE `HACKEVENT`
  ADD CONSTRAINT `HACKEVENT_ibfk_1` FOREIGN KEY (`concern`) REFERENCES `HACKATHON` (`id`);

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`USERS_id`) REFERENCES `USERS` (`id`),
  ADD CONSTRAINT `participation_ibfk_2` FOREIGN KEY (`hackathon_id`) REFERENCES `HACKATHON` (`id`);

--
-- Contraintes pour la table `SUBJECT`
--
ALTER TABLE `SUBJECT`
  ADD CONSTRAINT `SUBJECT_ibfk_1` FOREIGN KEY (`proposedBy`) REFERENCES `USERS` (`id`),
  ADD CONSTRAINT `SUBJECT_ibfk_2` FOREIGN KEY (`isFor`) REFERENCES `HACKATHON` (`id`);

--
-- Contraintes pour la table `USERGROUP`
--
ALTER TABLE `USERGROUP`
  ADD CONSTRAINT `USERGROUP_ibfk_1` FOREIGN KEY (`concern`) REFERENCES `HACKATHON` (`id`),
  ADD CONSTRAINT `USERGROUP_ibfk_2` FOREIGN KEY (`selectedSubject`) REFERENCES `SUBJECT` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
