-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Mai 2015 à 09:51
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb2`
--

-- --------------------------------------------------------

--
-- Structure de la table `basket_change`
--

CREATE TABLE IF NOT EXISTS `basket_change` (
  `baket_change_id` int(11) NOT NULL AUTO_INCREMENT,
  `validation` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_user` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`baket_change_id`),
  KEY `fk_basket_change_users1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `basket_sale`
--

CREATE TABLE IF NOT EXISTS `basket_sale` (
  `basket_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `validation` tinyint(1) DEFAULT NULL,
  `id_user` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`basket_sale_id`),
  KEY `fk_basket_sale_users1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE IF NOT EXISTS `billet` (
  `billet_id` int(11) NOT NULL,
  `billet_name` varchar(45) DEFAULT NULL,
  `billet_date` datetime DEFAULT NULL,
  `id_user` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`billet_id`),
  KEY `fk_billet_users1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `billet`
--

INSERT INTO `billet` (`billet_id`, `billet_name`, `billet_date`, `id_user`) VALUES
(0, 'Test 2', '2015-04-01 00:00:00', 0000000001),
(1, 'Test 1', '2015-04-08 08:00:13', 0000000001),
(2, 'J''aime le jardinage', '2015-04-30 18:26:00', 0000000001),
(3, 'Je cuisine les plantes belles ou moches', '2015-05-07 00:00:00', 0000000001),
(4, 'Coucou Zoé', '2014-10-21 00:00:00', 0000000001);

-- --------------------------------------------------------

--
-- Structure de la table `comment_billet`
--

CREATE TABLE IF NOT EXISTS `comment_billet` (
  `comment_billet_id` int(11) NOT NULL,
  `comment_date` datetime DEFAULT NULL,
  `comment` text,
  `id_user` int(10) unsigned zerofill NOT NULL,
  `id_billet` int(11) NOT NULL,
  PRIMARY KEY (`comment_billet_id`),
  KEY `fk_comment_billet_users1_idx` (`id_user`),
  KEY `fk_comment_billet_billet1_idx` (`id_billet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comment_product_user_by_user`
--

CREATE TABLE IF NOT EXISTS `comment_product_user_by_user` (
  `comment_product_user_by_user_id` int(11) NOT NULL,
  `comment_product_user_by_user` text,
  `mark` int(11) DEFAULT NULL,
  `users_saler` int(10) unsigned zerofill NOT NULL,
  `users_buyer` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`comment_product_user_by_user_id`),
  KEY `fk_comment_product_user_by_user_users1_idx` (`users_saler`),
  KEY `fk_comment_product_user_by_user_users2_idx` (`users_buyer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `departement_id` int(11) NOT NULL AUTO_INCREMENT,
  `departement_nom` varchar(255) DEFAULT NULL,
  `departement_code` varchar(3) DEFAULT NULL,
  `departement_nom_uppercase` varchar(255) DEFAULT NULL,
  `departement_slug` varchar(255) DEFAULT NULL,
  `departement_nom_soundex` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`departement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`departement_id`, `departement_nom`, `departement_code`, `departement_nom_uppercase`, `departement_slug`, `departement_nom_soundex`) VALUES
(1, 'Ain', '01', 'AIN', 'ain', 'A500'),
(2, 'Aisne', '02', 'AISNE', 'aisne', 'A250'),
(3, 'Allier', '03', 'ALLIER', 'allier', 'A460'),
(4, 'Alpes-de-Haute-Provence', '04', 'ALPES-DE-HAUTE-PROVENCE', 'alpes-de-haute-provence', 'A412316152'),
(5, 'Hautes-Alpes', '05', 'HAUTES-ALPES', 'hautes-alpes', 'H32412'),
(6, 'Alpes-Maritimes', '06', 'ALPES-MARITIMES', 'alpes-maritimes', 'A41256352'),
(7, 'Ardèche', '07', 'ARDÈCHE', 'ardeche', 'A632'),
(8, 'Ardennes', '08', 'ARDENNES', 'ardennes', 'A6352'),
(9, 'Ariège', '09', 'ARIÈGE', 'ariege', 'A620'),
(10, 'Aube', '10', 'AUBE', 'aube', 'A100'),
(11, 'Aude', '11', 'AUDE', 'aude', 'A300'),
(12, 'Aveyron', '12', 'AVEYRON', 'aveyron', 'A165'),
(13, 'Bouches-du-Rhône', '13', 'BOUCHES-DU-RHÔNE', 'bouches-du-rhone', 'B2365'),
(14, 'Calvados', '14', 'CALVADOS', 'calvados', 'C4132'),
(15, 'Cantal', '15', 'CANTAL', 'cantal', 'C534'),
(16, 'Charente', '16', 'CHARENTE', 'charente', 'C653'),
(17, 'Charente-Maritime', '17', 'CHARENTE-MARITIME', 'charente-maritime', 'C6535635'),
(18, 'Cher', '18', 'CHER', 'cher', 'C600'),
(19, 'Corrèze', '19', 'CORRÈZE', 'correze', 'C620'),
(20, 'Corse-du-sud', '2a', 'CORSE-DU-SUD', 'corse-du-sud', 'C62323'),
(21, 'Haute-corse', '2b', 'HAUTE-CORSE', 'haute-corse', 'H3262'),
(22, 'Côte-d''or', '21', 'CÔTE-D''OR', 'cote-dor', 'C360'),
(23, 'Côtes-d''armor', '22', 'CÔTES-D''ARMOR', 'cotes-darmor', 'C323656'),
(24, 'Creuse', '23', 'CREUSE', 'creuse', 'C620'),
(25, 'Dordogne', '24', 'DORDOGNE', 'dordogne', 'D6325'),
(26, 'Doubs', '25', 'DOUBS', 'doubs', 'D120'),
(27, 'Drôme', '26', 'DRÔME', 'drome', 'D650'),
(28, 'Eure', '27', 'EURE', 'eure', 'E600'),
(29, 'Eure-et-Loir', '28', 'EURE-ET-LOIR', 'eure-et-loir', 'E6346'),
(30, 'Finistère', '29', 'FINISTÈRE', 'finistere', 'F5236'),
(31, 'Gard', '30', 'GARD', 'gard', 'G630'),
(32, 'Haute-Garonne', '31', 'HAUTE-GARONNE', 'haute-garonne', 'H3265'),
(33, 'Gers', '32', 'GERS', 'gers', 'G620'),
(34, 'Gironde', '33', 'GIRONDE', 'gironde', 'G653'),
(35, 'Hérault', '34', 'HÉRAULT', 'herault', 'H643'),
(36, 'Ile-et-Vilaine', '35', 'ILE-ET-VILAINE', 'ile-et-vilaine', 'I43145'),
(37, 'Indre', '36', 'INDRE', 'indre', 'I536'),
(38, 'Indre-et-Loire', '37', 'INDRE-ET-LOIRE', 'indre-et-loire', 'I536346'),
(39, 'Isère', '38', 'ISÈRE', 'isere', 'I260'),
(40, 'Jura', '39', 'JURA', 'jura', 'J600'),
(41, 'Landes', '40', 'LANDES', 'landes', 'L532'),
(42, 'Loir-et-Cher', '41', 'LOIR-ET-CHER', 'loir-et-cher', 'L6326'),
(43, 'Loire', '42', 'LOIRE', 'loire', 'L600'),
(44, 'Haute-Loire', '43', 'HAUTE-LOIRE', 'haute-loire', 'H346'),
(45, 'Loire-Atlantique', '44', 'LOIRE-ATLANTIQUE', 'loire-atlantique', 'L634532'),
(46, 'Loiret', '45', 'LOIRET', 'loiret', 'L630'),
(47, 'Lot', '46', 'LOT', 'lot', 'L300'),
(48, 'Lot-et-Garonne', '47', 'LOT-ET-GARONNE', 'lot-et-garonne', 'L3265'),
(49, 'Lozère', '48', 'LOZÈRE', 'lozere', 'L260'),
(50, 'Maine-et-Loire', '49', 'MAINE-ET-LOIRE', 'maine-et-loire', 'M346'),
(51, 'Manche', '50', 'MANCHE', 'manche', 'M200'),
(52, 'Marne', '51', 'MARNE', 'marne', 'M650'),
(53, 'Haute-Marne', '52', 'HAUTE-MARNE', 'haute-marne', 'H3565'),
(54, 'Mayenne', '53', 'MAYENNE', 'mayenne', 'M000'),
(55, 'Meurthe-et-Moselle', '54', 'MEURTHE-ET-MOSELLE', 'meurthe-et-moselle', 'M63524'),
(56, 'Meuse', '55', 'MEUSE', 'meuse', 'M200'),
(57, 'Morbihan', '56', 'MORBIHAN', 'morbihan', 'M615'),
(58, 'Moselle', '57', 'MOSELLE', 'moselle', 'M240'),
(59, 'Nièvre', '58', 'NIÈVRE', 'nievre', 'N160'),
(60, 'Nord', '59', 'NORD', 'nord', 'N630'),
(61, 'Oise', '60', 'OISE', 'oise', 'O200'),
(62, 'Orne', '61', 'ORNE', 'orne', 'O650'),
(63, 'Pas-de-Calais', '62', 'PAS-DE-CALAIS', 'pas-de-calais', 'P23242'),
(64, 'Puy-de-Dôme', '63', 'PUY-DE-DÔME', 'puy-de-dome', 'P350'),
(65, 'Pyrénées-Atlantiques', '64', 'PYRÉNÉES-ATLANTIQUES', 'pyrenees-atlantiques', 'P65234532'),
(66, 'Hautes-Pyrénées', '65', 'HAUTES-PYRÉNÉES', 'hautes-pyrenees', 'H321652'),
(67, 'Pyrénées-Orientales', '66', 'PYRÉNÉES-ORIENTALES', 'pyrenees-orientales', 'P65265342'),
(68, 'Bas-Rhin', '67', 'BAS-RHIN', 'bas-rhin', 'B265'),
(69, 'Haut-Rhin', '68', 'HAUT-RHIN', 'haut-rhin', 'H365'),
(70, 'Rhône', '69', 'RHÔNE', 'rhone', 'R500'),
(71, 'Haute-Saône', '70', 'HAUTE-SAÔNE', 'haute-saone', 'H325'),
(72, 'Saône-et-Loire', '71', 'SAÔNE-ET-LOIRE', 'saone-et-loire', 'S5346'),
(73, 'Sarthe', '72', 'SARTHE', 'sarthe', 'S630'),
(74, 'Savoie', '73', 'SAVOIE', 'savoie', 'S100'),
(75, 'Haute-Savoie', '74', 'HAUTE-SAVOIE', 'haute-savoie', 'H321'),
(76, 'Paris', '75', 'PARIS', 'paris', 'P620'),
(77, 'Seine-Maritime', '76', 'SEINE-MARITIME', 'seine-maritime', 'S5635'),
(78, 'Seine-et-Marne', '77', 'SEINE-ET-MARNE', 'seine-et-marne', 'S53565'),
(79, 'Yvelines', '78', 'YVELINES', 'yvelines', 'Y1452'),
(80, 'Deux-Sèvres', '79', 'DEUX-SÈVRES', 'deux-sevres', 'D2162'),
(81, 'Somme', '80', 'SOMME', 'somme', 'S500'),
(82, 'Tarn', '81', 'TARN', 'tarn', 'T650'),
(83, 'Tarn-et-Garonne', '82', 'TARN-ET-GARONNE', 'tarn-et-garonne', 'T653265'),
(84, 'Var', '83', 'VAR', 'var', 'V600'),
(85, 'Vaucluse', '84', 'VAUCLUSE', 'vaucluse', 'V242'),
(86, 'Vendée', '85', 'VENDÉE', 'vendee', 'V530'),
(87, 'Vienne', '86', 'VIENNE', 'vienne', 'V500'),
(88, 'Haute-Vienne', '87', 'HAUTE-VIENNE', 'haute-vienne', 'H315'),
(89, 'Vosges', '88', 'VOSGES', 'vosges', 'V200'),
(90, 'Yonne', '89', 'YONNE', 'yonne', 'Y500'),
(91, 'Territoire de Belfort', '90', 'TERRITOIRE DE BELFORT', 'territoire-de-belfort', 'T636314163'),
(92, 'Essonne', '91', 'ESSONNE', 'essonne', 'E250'),
(93, 'Hauts-de-Seine', '92', 'HAUTS-DE-SEINE', 'hauts-de-seine', 'H32325'),
(94, 'Seine-Saint-Denis', '93', 'SEINE-SAINT-DENIS', 'seine-saint-denis', 'S525352'),
(95, 'Val-de-Marne', '94', 'VAL-DE-MARNE', 'val-de-marne', 'V43565'),
(96, 'Val-d''oise', '95', 'VAL-D''OISE', 'val-doise', 'V432'),
(97, 'Mayotte', '976', 'MAYOTTE', 'mayotte', 'M300'),
(98, 'Guadeloupe', '971', 'GUADELOUPE', 'guadeloupe', 'G341'),
(99, 'Guyane', '973', 'GUYANE', 'guyane', 'G500'),
(100, 'Martinique', '972', 'MARTINIQUE', 'martinique', 'M6352'),
(101, 'Réunion', '974', 'RÉUNION', 'reunion', 'R500');

-- --------------------------------------------------------

--
-- Structure de la table `family_product`
--

CREATE TABLE IF NOT EXISTS `family_product` (
  `family_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_product_name` varchar(45) DEFAULT NULL,
  `Fruits_Legumes` tinyint(1) NOT NULL,
  PRIMARY KEY (`family_product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `family_product`
--

INSERT INTO `family_product` (`family_product_id`, `family_product_name`, `Fruits_Legumes`) VALUES
(1, 'Fraise', 0),
(2, 'Framboise', 0),
(3, 'Pomme', 0),
(4, 'Banane', 0),
(5, 'Pomme de terre', 1),
(6, 'Artichaut', 1),
(7, 'Carotte', 1),
(8, 'Poireau', 1);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `FAQ_id` int(11) NOT NULL,
  `FAQ_question` text,
  `FAQ_answer` text,
  PRIMARY KEY (`FAQ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `general_information_user_by_user`
--

CREATE TABLE IF NOT EXISTS `general_information_user_by_user` (
  `general_information_user_by_user_id` int(11) NOT NULL,
  `user_mark` int(11) DEFAULT NULL,
  `user_general_comment` text,
  `users_user_id` int(10) unsigned zerofill NOT NULL,
  `users_user_id1` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`general_information_user_by_user_id`),
  KEY `fk_general_information_user_by_user_users1_idx` (`users_user_id`),
  KEY `fk_general_information_user_by_user_users2_idx` (`users_user_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `help_user`
--

CREATE TABLE IF NOT EXISTS `help_user` (
  `help_user_id` int(11) NOT NULL,
  `help_user_title` varchar(45) DEFAULT NULL,
  `help_user_comment` text,
  `help_user_date` datetime DEFAULT NULL,
  `id_user` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`help_user_id`),
  KEY `fk_help_user_users1_idx` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product_data`
--

CREATE TABLE IF NOT EXISTS `product_data` (
  `product_date_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `price_suggered_euros_kg` float DEFAULT NULL,
  `product_description` text,
  `id_family_product` int(11) NOT NULL,
  PRIMARY KEY (`product_date_id`),
  KEY `fk_product_data_family_product1_idx` (`id_family_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `product_data`
--

INSERT INTO `product_data` (`product_date_id`, `product_name`, `price_suggered_euros_kg`, `product_description`, `id_family_product`) VALUES
(1, 'Fraise Anabelle', 1.4, NULL, 1),
(2, 'Fraise Ciflorette', 1.5, NULL, 1),
(3, 'Fraise Chalotte', 1.7, NULL, 1),
(4, 'Framboise Festival', 2.1, NULL, 2),
(5, 'Framboise Gatineau', 2.5, NULL, 2),
(6, 'Framboise Boyne', 2, NULL, 2),
(7, 'Banane Cavendish', 1, NULL, 4),
(8, 'Banane Grande naine', 1.5, NULL, 4),
(9, 'Banane Petite naine', 1.2, NULL, 4),
(10, 'Pomme Golden', 0.8, NULL, 3),
(11, 'Pomme Pink Lady', 0.9, NULL, 3),
(12, 'Pomme Winston', 0.9, NULL, 3),
(13, 'Artichaut Tête de chat', 1, NULL, 6),
(15, 'Artichaut Violet de provence', 1.2, NULL, 6),
(16, 'Artichaut épineux', 1.1, NULL, 6),
(17, 'Pomme de terre de Noirmoutier ', 10, NULL, 5),
(18, 'Pomme de terre Charlotte', 8, NULL, 5),
(19, 'Pomme de terre ratte', 6, NULL, 5),
(20, 'Carotte Bolero', 2, NULL, 7),
(21, 'Carotte Jaune du doubs', 2.4, NULL, 7),
(22, 'Carotte Marché de Paris', 2.6, NULL, 7),
(23, 'Poireau malabare', 1.1, NULL, 8),
(24, 'Poireau Bleu de solaise', 1.3, NULL, 8),
(25, 'Poireau SIMON', 3, NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `product_in_basket_change`
--

CREATE TABLE IF NOT EXISTS `product_in_basket_change` (
  `product_in_basket_change_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_basket_change` int(11) NOT NULL,
  `id_product_on_line` int(11) NOT NULL,
  PRIMARY KEY (`product_in_basket_change_id`),
  KEY `fk_product_in_basketchange_basket_change1_idx` (`id_basket_change`),
  KEY `fk_product_in_basketchange_product_on_line1_idx` (`id_product_on_line`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `product_in_basket_sale`
--

CREATE TABLE IF NOT EXISTS `product_in_basket_sale` (
  `product_in_basket_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` float DEFAULT NULL,
  `id_basket_sale` int(11) NOT NULL,
  `id_product_on_line` int(11) NOT NULL,
  PRIMARY KEY (`product_in_basket_sale_id`),
  KEY `fk_product in basket_basket_sale1_idx` (`id_basket_sale`),
  KEY `fk_product in basket_product_on_line1_idx` (`id_product_on_line`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `product_on_line`
--

CREATE TABLE IF NOT EXISTS `product_on_line` (
  `product_on_line_id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_or_change` tinyint(1) DEFAULT NULL,
  `quality_type` tinyint(1) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_comment_user` text,
  `date` datetime DEFAULT NULL,
  `proposition` text,
  `id_product_date` int(11) NOT NULL,
  `id_departement` int(11) NOT NULL,
  PRIMARY KEY (`product_on_line_id`),
  KEY `fk_product_on_line_product_data1_idx` (`id_product_date`),
  KEY `fk_product_on_line_departement1_idx` (`id_departement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `product_on_line`
--

INSERT INTO `product_on_line` (`product_on_line_id`, `sale_or_change`, `quality_type`, `quantity`, `product_price`, `product_comment_user`, `date`, `proposition`, `id_product_date`, `id_departement`) VALUES
(2, 0, 0, 1, 1, '', NULL, NULL, 7, 1),
(3, 0, 0, 1, 2, '', NULL, NULL, 7, 3),
(4, 0, 0, 1, 2, '', NULL, NULL, 7, 3),
(5, 0, 0, 1, 2, '', NULL, NULL, 9, 4),
(6, 0, 0, 1, 1, '', NULL, NULL, 3, 1),
(7, 0, 0, 1, 2, '', NULL, NULL, 1, 1),
(8, 0, 0, 2, 2, '', NULL, NULL, 9, 6),
(9, 0, 0, 2, 1, '', NULL, NULL, 4, 16),
(10, 0, 0, 3, 1, '', NULL, NULL, 2, 3),
(11, 0, 0, 2, 2, '', NULL, NULL, 2, 1),
(12, 0, 0, 2, 2, '', NULL, NULL, 5, 94),
(13, 0, 0, 2, 2, '', NULL, NULL, 19, 6),
(14, 0, 0, 4, 4, '', NULL, NULL, 25, 9);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `id_saler` int(11) DEFAULT NULL,
  `id_buyer` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `id_basket_sale` int(11) DEFAULT NULL,
  `id_baket_change` int(11) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `fk_transaction_basket_sale1_idx` (`id_basket_sale`),
  KEY `fk_transaction_basket_change1_idx` (`id_baket_change`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `user_firstname` varchar(45) DEFAULT NULL,
  `user_post_office_box` varchar(45) DEFAULT NULL,
  `user_city` varchar(45) DEFAULT NULL,
  `user_country` varchar(45) DEFAULT NULL,
  `user_birthday` datetime DEFAULT NULL,
  `user_sales_statistic` int(11) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_salt` varchar(45) DEFAULT NULL,
  `user_type` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_post_office_box`, `user_city`, `user_country`, `user_birthday`, `user_sales_statistic`, `user_email`, `user_password`, `user_salt`, `user_type`, `date`) VALUES
(0000000001, 'LALLE', 'Quentin', '2 rue watteau ', 'Paris', 'France', '1970-05-31 00:00:00', 1, 'quentin.lalle@bb.com', 'quentin', NULL, 1, '2015-02-01 12:18:43'),
(0000000002, 'LALLE', 'Fançoise', '2 rue Watteau', 'SMSO', '91240', '0000-00-00 00:00:00', 0, 'maman@me.com', '$2y$10$DcorpZUvOLK/DA0fvRXOWe.7b1OQbvKWhD2orE', '', 0, '0000-00-00 00:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `basket_change`
--
ALTER TABLE `basket_change`
  ADD CONSTRAINT `fk_basket_change_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `basket_sale`
--
ALTER TABLE `basket_sale`
  ADD CONSTRAINT `fk_basket_sale_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `fk_billet_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comment_billet`
--
ALTER TABLE `comment_billet`
  ADD CONSTRAINT `fk_comment_billet_billet1` FOREIGN KEY (`id_billet`) REFERENCES `billet` (`billet_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_billet_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `comment_product_user_by_user`
--
ALTER TABLE `comment_product_user_by_user`
  ADD CONSTRAINT `fk_comment_product_user_by_user_users1` FOREIGN KEY (`users_saler`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_product_user_by_user_users2` FOREIGN KEY (`users_buyer`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `general_information_user_by_user`
--
ALTER TABLE `general_information_user_by_user`
  ADD CONSTRAINT `fk_general_information_user_by_user_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_general_information_user_by_user_users2` FOREIGN KEY (`users_user_id1`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `help_user`
--
ALTER TABLE `help_user`
  ADD CONSTRAINT `fk_help_user_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product_data`
--
ALTER TABLE `product_data`
  ADD CONSTRAINT `fk_product_data_family_product1` FOREIGN KEY (`id_family_product`) REFERENCES `family_product` (`family_product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product_in_basket_change`
--
ALTER TABLE `product_in_basket_change`
  ADD CONSTRAINT `fk_product_in_basketchange_basket_change1` FOREIGN KEY (`id_basket_change`) REFERENCES `basket_change` (`baket_change_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_in_basketchange_product_on_line1` FOREIGN KEY (`id_product_on_line`) REFERENCES `product_on_line` (`product_on_line_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product_in_basket_sale`
--
ALTER TABLE `product_in_basket_sale`
  ADD CONSTRAINT `fk_product in basket_basket_sale1` FOREIGN KEY (`id_basket_sale`) REFERENCES `basket_sale` (`basket_sale_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product in basket_product_on_line1` FOREIGN KEY (`id_product_on_line`) REFERENCES `product_on_line` (`product_on_line_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product_on_line`
--
ALTER TABLE `product_on_line`
  ADD CONSTRAINT `fk_product_on_line_department1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`departement_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_on_line_product_data1` FOREIGN KEY (`id_product_date`) REFERENCES `product_data` (`product_date_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_basket_change1` FOREIGN KEY (`id_baket_change`) REFERENCES `basket_change` (`baket_change_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaction_basket_sale1` FOREIGN KEY (`id_basket_sale`) REFERENCES `basket_sale` (`basket_sale_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
