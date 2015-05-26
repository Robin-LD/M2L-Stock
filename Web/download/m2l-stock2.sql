-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Mai 2015 à 11:30
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `m2l-stock2`
--

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`ID` int(11) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Fristname` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Mail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `facture`
--
CREATE TABLE IF NOT EXISTS `facture` (
`Username` varchar(16)
,`Mois` varchar(7)
,`Prix` decimal(26,2)
);
-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`id`, `user_id`, `date`, `status`) VALUES
(1, 1, '2015-03-05', 2),
(2, 1, '2015-04-01', 2),
(3, 1, '2015-04-15', 2),
(4, 1, '2015-04-28', 2),
(5, 1, '0000-00-00', 2),
(6, 1, '2015-04-28', 2),
(7, 1, '2015-04-28', 2),
(8, 1, '2015-04-28', 2),
(9, 1, '2015-04-28', 2),
(10, 1, '2015-04-28', 2),
(11, 1, '2015-04-28', 2),
(12, 1, '2015-04-28', 2),
(13, 1, '2015-04-28', 2),
(14, 1, '2015-04-28', 2),
(15, 1, '2015-04-29', 2),
(16, 1, '2015-04-29', 2),
(17, 1, '2015-04-29', 1),
(18, 1, '2015-04-30', 1),
(19, 1, '2015-04-30', 2),
(20, 1, '2015-04-30', 1),
(21, 1, '2015-04-30', 1),
(22, 1, '2015-04-30', 1),
(23, 2, '2015-05-16', 1),
(24, 2, '2015-04-07', 1),
(25, 3, '2015-05-16', 1),
(26, 3, '2015-05-16', 1),
(27, 3, '2015-05-18', 1),
(28, 3, '2015-05-18', 1),
(29, 3, '2015-05-18', 1),
(30, 3, '2015-05-18', 1),
(31, 3, '2015-05-18', 1),
(32, 3, '2015-05-18', 1),
(33, 3, '2015-05-18', 1),
(34, 3, '2015-05-18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
`id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `orderlist_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `orderlist`
--

INSERT INTO `orderlist` (`id`, `amount`, `stock_id`, `order_id`, `price`, `orderlist_type_id`) VALUES
(5, 5, 1, 1, '12.50', NULL),
(6, 5, 1, 1, '12.50', NULL),
(7, 2, 1, 2, '5.00', NULL),
(8, 2, 1, 2, '5.00', NULL),
(9, 2, 1, 2, '5.00', NULL),
(10, 1, 10, 1, NULL, NULL),
(11, 4, 4, 1, NULL, NULL),
(12, 1, 2, 1, '4.50', NULL),
(13, 2, 2, 9, '9.00', NULL),
(14, 5, 2, 9, '22.50', NULL),
(15, 4, 2, 11, '18.00', NULL),
(16, 4, 2, 12, '18.00', NULL),
(17, 1, 1, 13, '2.50', NULL),
(18, 2, 1, 14, '5.00', NULL),
(19, 4, 2, 14, '18.00', NULL),
(20, 1, 1, 16, '2.50', NULL),
(21, 1, 2, 16, '4.50', NULL),
(22, 2, 2, 18, '9.00', NULL),
(23, 1, 1, 18, '2.50', NULL),
(24, 1, 3, 18, '45.00', NULL),
(25, 1, 2, 19, '4.50', NULL),
(26, 1, 2, 20, '4.50', NULL),
(27, 1, 2, 21, '4.50', NULL),
(28, 1, 1, 22, '2.50', NULL),
(29, 1, 1, 23, '2.50', NULL),
(30, 3, 2, 23, '13.50', NULL),
(31, 5, 2, 24, '22.50', NULL),
(32, 2, 2, 25, '9.00', NULL),
(33, 3, 1, 25, '7.50', NULL),
(34, 1, 1, 26, '2.50', NULL),
(35, 1, 1, 27, '2.50', NULL),
(36, 1, 1, 29, '2.50', NULL),
(37, 1, 1, 30, '2.50', NULL),
(38, 2, 2, 31, '9.00', NULL),
(39, 1, 3, 31, '45.00', NULL),
(40, 1, 2, 32, '4.50', NULL),
(41, 1, 1, 32, '2.50', NULL),
(42, 1, 2, 33, '4.50', NULL),
(43, 1, 1, 34, '2.50', NULL);

--
-- Déclencheurs `orderlist`
--
DELIMITER //
CREATE TRIGGER `price_order_details_price` BEFORE INSERT ON `orderlist`
 FOR EACH ROW BEGIN

DECLARE p DECIMAL(4,2);
SET p = (SELECT s.price FROM stock s WHERE s.id = NEW.stock_id LIMIT 1);

SET NEW.price = NEW.amount * p;

END
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `stock_update_after_order` AFTER INSERT ON `orderlist`
 FOR EACH ROW BEGIN

UPDATE stock k
SET k.amount = k.amount - NEW.amount
WHERE id = NEW.stock_id;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `orderlist_type`
--

CREATE TABLE IF NOT EXISTS `orderlist_type` (
`id` int(11) NOT NULL,
  `libelle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `price` decimal(4,2) DEFAULT NULL,
  `stock_type_id` int(11) NOT NULL,
  `price_location` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `nom`, `amount`, `price`, `stock_type_id`, `price_location`) VALUES
(1, 'altère', 48, '2.50', 1, NULL),
(2, 'ballon', 46, '4.50', 1, NULL),
(3, 'banc', 24, '45.00', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock_type`
--

CREATE TABLE IF NOT EXISTS `stock_type` (
`id` int(11) NOT NULL,
  `libelle` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stock_type`
--

INSERT INTO `stock_type` (`id`, `libelle`) VALUES
(1, 'musculation');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `adress_bill` varchar(250) DEFAULT NULL,
  `usertype_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `adress`, `adress_bill`, `usertype_id`, `user_id`) VALUES
(1, 'okoko', 'ok', 'ok', 'kokapik', NULL, NULL, NULL),
(2, 'dak', 'dak@dak.dak', 'dak', 'dakdak', NULL, NULL, NULL),
(3, 'lol', 'lol@lol.lol', 'lol', 'lol', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
`id` int(11) NOT NULL,
  `libelle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la vue `facture`
--
DROP TABLE IF EXISTS `facture`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `facture` AS select `u`.`username` AS `Username`,date_format(`o`.`date`,'%Y-%m') AS `Mois`,sum(`l`.`price`) AS `Prix` from ((`orderlist` `l` join `order` `o` on((`l`.`order_id` = `o`.`id`))) join `user` `u` on((`u`.`id` = `o`.`user_id`))) group by `u`.`id`,month(`o`.`date`);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_order_user1_idx` (`user_id`);

--
-- Index pour la table `orderlist`
--
ALTER TABLE `orderlist`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_oderlist_stock1_idx` (`stock_id`), ADD KEY `fk_oderlist_order1_idx` (`order_id`), ADD KEY `fk_oderlist_orderlist_type1_idx` (`orderlist_type_id`);

--
-- Index pour la table `orderlist_type`
--
ALTER TABLE `orderlist_type`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_stock_stock_type1_idx` (`stock_type_id`);

--
-- Index pour la table `stock_type`
--
ALTER TABLE `stock_type`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_user_usertype_idx` (`usertype_id`), ADD KEY `fk_user_user1_idx` (`user_id`);

--
-- Index pour la table `user_type`
--
ALTER TABLE `user_type`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `orderlist`
--
ALTER TABLE `orderlist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `orderlist_type`
--
ALTER TABLE `orderlist_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `stock_type`
--
ALTER TABLE `stock_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user_type`
--
ALTER TABLE `user_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `fk_order_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `orderlist`
--
ALTER TABLE `orderlist`
ADD CONSTRAINT `fk_oderlist_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_oderlist_orderlist_type1` FOREIGN KEY (`orderlist_type_id`) REFERENCES `orderlist_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `fk_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_user_usertype` FOREIGN KEY (`usertype_id`) REFERENCES `user_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
