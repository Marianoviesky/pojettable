-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 juil. 2024 à 00:38
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projecttable`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_key` int(11) NOT NULL,
  `id_admin` int(255) NOT NULL,
  `pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_key`, `id_admin`, `pswd`) VALUES
(1, 12062745, '568715fcd6225aa113cd6f73f446fa22');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `book_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1080) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `numb` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `statu` varchar(25) NOT NULL,
  `recup` int(255) NOT NULL,
  `disp` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `book_id`, `img`, `title`, `description`, `autor`, `category`, `status`, `numb`, `price`, `statu`, `recup`, `disp`, `comment`) VALUES
(10, 722, '627511.2.jpg', 'Entre le lys et le lion', '1690, Nouvelle-France.\r\n\r\nLe jeune Akian, qui s’est promis de venger la mort de son frère, de son père et l’enlèvement de celle qu’il aime, a la rage au cœur. En effet, Pierre Le Moyne d’Iberville, qui se disait son ami, l’a empêché de réaliser une partie', 'Erik le Duc', 'Histoire', 'Disponible', '10', 15, 'Emprunter', 0, 1, ''),
(11, 488, '248731.4.jpg', 'Les Misérables', 'Les Misérables de Victor Hugo est un roman réaliste. Il décrit la vie dans la France et le Paris pauvre au début du XIXe siècle. Le roman est considéré comme l\'un des chef-d\'œuvres de la littérature française. Il est une satire réaliste de la condition des classes populaires dans la société française à l\'époque de la Révolution. Le roman brosse un tableau de la France du début du XIXème siècle, autour du personnage de Jean Valjean.', 'Victor Hugo', 'Romance', 'Disponible', '24', 30, 'Emprunter', 0, 1, ''),
(12, 391, '584181.3.webp', 'L\'étranger', 'Le roman explore les profondeurs de l’existence humaine et les questions fondamentales de la vie, de la mort et du sens de l’existence1. L’histoire est celle du narrateur, un homme dont on ne connait que le nom, Meursault, qui va être amené par différente', 'Albert camus', 'Romance', 'Disponible', '2', 15, 'Emprunter', 0, 1, ''),
(13, 225, '313531.5.jpg', 'Death on the Nile', 'Linnet Doyle possède tout : la beauté, la richesse et… le fiancé de sa meilleure amie. Mais la lune de miel de Linnet sur le Nil devient un cauchemar quand l’un des passagers est retrouvé assassiné sur le navire de croisière du voyage. Hercule Poirot doit', 'Agatha Christie', 'Policier', 'Disponible', '7', 15, 'Emprunter', 0, 1, ''),
(14, 933, '367641.6.jpg', 'Le bouchon de cristal', 'Arsène Lupin découvre un mystérieux bouchon de cristal. Mais il disparait aussitôt. Où est-il ? Que cache-t-il ? Cette fois, les adversaires de Lupin sont très forts. Certains se moquent de lui. Mais le célèbre gentleman cambrioleur a plus d’un tour dans ', 'Maurice Leblanc', 'Policier', 'Disponible', '14', 30, 'Emprunter', 0, 1, ''),
(15, 703, '206551.1.jpg', 'L\'Egypte ancienne', 'Nous connaissons tous les pyramides, les hiéroglyphes et Cléopâtre, mais que savonsnous vraiment de l’Égypte ancienne? Quel rôle capital a joué le Nil dans l’unification de l’Égypte? Quel est le mystère qui entoure la sépulture de la reine Hétep-Hérès? Qu', 'Peter der manuelian', 'Histoire', 'Disponible', '7', 7, 'Emprunter', 0, 1, ''),
(20, 796, '557411.jpg', 'Harry potter', 'Après la mort de ses parents (Lily et James Potter), Harry Potter est recueilli par sa tante maternelle Pétunia et son oncle Vernon à l\'âge d\'un an. Ces derniers, animés depuis toujours d\'une haine féroce envers les parents du garçon qu\'ils qualifient de gens « bizarres », voire de « monstres », traitent froidement leur neveu et demeurent indifférents aux humiliations que leur fils Dudley lui fait subir. ', 'J. K. Rowling', 'Fantasy', 'Disponible', '1', 7, 'Emprunter', 0, 1, ''),
(21, 781, '998692.jpg', 'Le Seigneur des anneaux', 'Le Seigneur des anneaux (The Lord of the Rings) est un roman de J. R. R. Tolkien paru en trois volumes en 1954 et en 1955. Prenant place dans le monde fictionnel de la Terre du Milieu, il suit la quête du hobbit Frodon Sacquet (Frodo Bessac), qui doit détruire l\'Anneau unique afin que celui-ci ne tombe pas entre les mains de Sauron, le Seigneur des ténèbres, qui l\'a créé. Plusieurs personnages lui viennent en aide, parmi lesquels son jardinier Sam, les hobbits Meriadoc et Peregrin (Merry et Pippin), le mage Gandalf ou encore l\'humain Aragorn, héritier d\'une longue lignée de rois.', 'J. R. R. Tolkien', 'Fantasy', 'Disponible', '7', 15, 'Emprunter', 0, 1, ''),
(22, 525, '514823.jpg', 'Le Trône de fer', 'L\'histoire se déroule dans un monde imaginaire où la société est de type féodal et où la magie et des créatures légendaires (telles que les dragons) ont existé mais sont censées avoir disparu. Trois intrigues principales s\'y entremêlent : dans le royaume des Sept Couronnes, plusieurs maisons nobles rivalisent pour l\'obtention du trône ; dans les contrées glacées situées au nord du royaume, une race de créatures supposée appartenir aux légendes se réveille ; et sur le continent oriental, la dernière héritière des Targaryen (la dynastie royale des Sept Couronnes renversée quinze ans auparavant), cherche à reconquérir le trône.', 'George R. R. Martin', 'Fantasy', 'Disponible', '12', 45, 'Emprunter', 0, 1, ''),
(23, 532, '316324.jpg', 'Dix Petits Nègres', 'Dans ce roman, dix personnes apparemment sans lien entre elles sont invitées à se rendre sur une île. Bien qu\'elles soient seules à se trouver sur ce lieu, elles sont assassinées les unes après les autres, à chaque fois d\'une façon qui rappelle les couplets d\'une comptine.', 'Agatha Christie', 'Thriller', 'Indisponible', '17', 30, 'Réserver', 13, 2, ''),
(25, 292, '92005.webp', 'Le Silence des agneaux', 'L\'histoire décrit l\'enquête d\'une jeune étudiante du FBI, Clarice Starling qui, lors de sa recherche d\'un tueur en série psychopathe, se voit forcée d\'aller interroger un psychiatre, lui aussi psychopathe, emprisonné pour meurtres dans un asile, le Dr Hannibal Lecter.', 'Thomas Harris', 'Thriller', 'Indisponible', '6', 15, 'Réserver', 15, 2, ''),
(27, 767, '711676.jpg', 'Shutter Island', 'L\'histoire se passe en 1954 sur l\'île de Shutter Island, dans un hôpital psychiatrique abritant des patients malades mentaux s\'étant rendus coupables d\'actes criminels. Les marshals Teddy Daniels et Chuck Aule enquêtent sur la disparition d\'une patiente, Rachel Solando.', 'Dennis Lehane', 'Thriller', 'Disponible', '7', 7, 'Emprunter', 0, 1, ''),
(28, 860, '782977.jpg', 'Orgueil et préjugés', 'À Longbourn, petit bourg du Hertfordshire, sous le règne du roi George III, Mrs Bennet est déterminée à marier ses cinq filles afin d\'assurer leur avenir53, compromis par certaines dispositions testamentaires. Lorsqu\'un riche jeune homme, Mr Bingley, loue Netherfield, le domaine voisin, elle espère vivement qu\'une de ses filles saura lui plaire assez pour qu\'il l\'épouse. Malheureusement il est accompagné de ses deux sœurs, Caroline et Louisa, plutôt imbues d\'elles-mêmes, et d\'un ami très proche, Mr Darcy, jeune homme immensément riche, propriétaire d\'un grand domaine dans le Derbyshire, mais très dédaigneux et méprisant envers la société locale.', 'Jane Austen', 'Romance', 'Sous Réservation', '18', 30, 'Réserver', 7, 3, ''),
(29, 832, '819008.jpeg', 'Lettre d\'une inconnue', 'À son retour à Vienne d\'une excursion de trois jours dans la montagne, le jour de ses 41 ans, le célèbre écrivain R. reçoit une lettre d\'une inconnue.', 'Stefan Zweig', 'Romance', 'Sous Réservation', '8', 45, 'Réserver', 7, 3, ''),
(30, 865, '752929.jpg', 'Anna Karénine', 'Anna Karénine est une jeune femme mariée à Alexis Karénine, fidèle et mère d\'un jeune garçon, Serioja. Anna Karénine se rend à Moscou chez son frère Stiva Oblonski. En descendant du train, elle croise le comte Vronski. Anna tombe amoureuse de Vronski, cet officier brillant, mais frivole. Elle lutte contre cette passion et finit pourtant par s\'abandonner avec un bonheur coupable au courant qui la porte vers ce jeune officier. Puis Anna tombe enceinte. Se sentant coupable et profondément déprimée par sa faute, elle décide d\'avouer son infidélité à son mari.', 'Léon Tolstoï ', 'Romance', 'Indisponible', '-1', 15, 'Réserver', 20, 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_book` int(255) NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `id_book`, `comment_user`, `img`, `comment`, `date`) VALUES
(80, 225, 'Lenxo KITI', '', 'grg', '27/06/2024 01:20'),
(81, 225, 'Mariano teh', 'folder.png', 'fze', '27/06/2024 01:22'),
(82, 225, 'Mariano', '', 'V', '27/06/2024 01:25'),
(83, 225, 'Mariano', '', 'Je trouve ce livre plutôt agréable ', '27/06/2024 01:26'),
(84, 865, 'Lover', 'folder.png', 'Pas mal ce roman', '27/06/2024 17:51'),
(85, 225, 'Mariano Mariano', '', 'joli', '28/06/2024 16:10'),
(86, 865, 'Mariano', '1.1.jpg', 'Yep', '01/07/2024 14:52');

-- --------------------------------------------------------

--
-- Structure de la table `espace_client`
--

CREATE TABLE `espace_client` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `book_id` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `de` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `day` int(255) NOT NULL,
  `month` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `espace_client`
--

INSERT INTO `espace_client` (`id`, `user_id`, `book_id`, `img`, `title`, `de`, `dr`, `day`, `month`) VALUES
(55, 65057, 781, '998692.jpg', 'Le Seigneur des anneaux', '06/07/2024', '21/07/2024', 21, 7),
(56, 65057, 225, '313531.5.jpg', 'Death on the Nile', '06/07/2024', '21/07/2024', 21, 7),
(57, 65057, 488, '248731.4.jpg', 'Les Misérables', '06/07/2024', '06/08/2024', 6, 8);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `admin_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `nbr` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `admin_id`, `user_id`, `msg`, `nbr`) VALUES
(57, 12062745, 65057, 'Bonjour', 1),
(58, 12062745, 65057, 'comment allez vous', 2),
(59, 12062745, 65057, 'bien', 1),
(60, 12062745, 65057, 'c\'est compris', 2),
(61, 12062745, 65057, 'bonjour', 1),
(62, 12062745, 65057, 'je sui de retour', 1),
(63, 12062745, 65057, 'bonjour', 2),
(64, 12062745, 65057, 'ok', 1),
(65, 12062745, 65057, 'bonjour', 1),
(66, 12062745, 65057, 'ok', 2),
(67, 12062745, 65057, 'ok', 1),
(68, 12062745, 65057, 'uhigu', 2),
(69, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 1),
(70, 12062745, 65057, '<b>This text is bold</b>', 2),
(71, 12062745, 65057, 'bonjour', 2),
(72, 12062745, 65057, 'uigg', 1),
(73, 12062745, 65057, 'bonjour', 2),
(74, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 1),
(75, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 2),
(76, 12062745, 65057, 'swdxfcgvhbjkn', 2),
(77, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 2),
(78, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 2),
(79, 12062745, 65057, '<b>This text is bold</b>', 1),
(80, 12062745, 65057, 'bonjour', 2),
(81, 12062745, 65057, 'eqg', 1),
(82, 12062745, 65057, '<a href=\"#\">Visit W3Schools!</a>', 2),
(83, 12062745, 65057, '<b>This text is bold</b>', 2),
(84, 12062745, 65057, 'freer', 2),
(85, 12062745, 65057, 'rge', 1),
(86, 12062745, 65057, 'bonjour', 1),
(87, 12062745, 65057, 'comment allez vous', 2),
(88, 12062745, 65057, 'a\"r', 2),
(89, 12062745, 65057, '<b>This text is bold</b>', 1),
(90, 12062745, 65057, 'eqg', 2),
(91, 12062745, 65057, '<b>This text is bold</b>', 1),
(92, 12062745, 65057, 'udfctydzfidyvgd', 1),
(93, 12062745, 65057, 'fezf', 2),
(94, 12062745, 65057, 'efe', 2),
(95, 12062745, 65057, 'eqg', 2),
(96, 12062745, 65057, 'efzf', 2),
(97, 12062745, 65057, 'zef', 2),
(98, 12062745, 65057, 'fez', 2),
(99, 12062745, 65057, 'ezf', 2),
(100, 12062745, 65057, 'ezf', 2),
(101, 12062745, 65057, 'ezfze', 2),
(102, 12062745, 65057, 'ff', 2),
(103, 12062745, 65057, 'efez', 2),
(104, 12062745, 65057, 'f', 2),
(105, 12062745, 65057, 'fe', 2),
(106, 12062745, 65057, 'fer', 2),
(107, 12062745, 65057, 'fer', 2),
(108, 12062745, 65057, 'erre', 2),
(109, 12062745, 65057, 'er', 2),
(110, 12062745, 65057, 'er', 2),
(111, 12062745, 65057, 're', 2),
(112, 12062745, 65057, 'er', 2),
(113, 12062745, 65057, 'er', 2),
(114, 12062745, 65057, 'r', 2),
(115, 12062745, 65057, 'fre', 2),
(116, 12062745, 65057, 'er', 2),
(117, 12062745, 23150, 'je ne retrouve pas mes emprunt', 1),
(118, 12062745, 23150, 'ok', 2),
(119, 12062745, 65057, 'hbiubb', 1),
(120, 12062745, 65057, 'ok', 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `id_book` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `login_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `login_date`) VALUES
(23150, 0, 'Hubert', 'Luc', 'luc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'WhatsApp Image 2024-05-27 à 15.47.35_47315e5a.jpg', '28/06/2024 15:45'),
(65057, 0, 'Viesky', 'Mariano', 'ghuji@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'folder.png', '26/06/2024 12:37');

-- --------------------------------------------------------

--
-- Structure de la table `user_live`
--

CREATE TABLE `user_live` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_live`
--

INSERT INTO `user_live` (`id`, `user_id`, `time`) VALUES
(6, 65057, '27/06/2024 14:01'),
(7, 23150, '28/06/2024 16:15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_key`);

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `espace_client`
--
ALTER TABLE `espace_client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `user_live`
--
ALTER TABLE `user_live`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `espace_client`
--
ALTER TABLE `espace_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96464;

--
-- AUTO_INCREMENT pour la table `user_live`
--
ALTER TABLE `user_live`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
