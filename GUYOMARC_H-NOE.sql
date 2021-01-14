-- 
-- Sur la page d'accueil (donc à la racine monsite.com/) : afficher la liste des catégories avec un lien vers la page d'une catégorie et un lien vers la page de modification de la catégorie.
-- Page détail d'une catégorie : 
-- 	Afficher le nom et la description de la catégorie
-- 	Afficher la liste des produits (titre et prix). Un lien sur le titre affichera le détail d'un produit et ajouter deux liens: modifier et supprimer un produit.
-- 	Mettre un lien pour ajouter un produit (qui devra être automatiquement classé dans la catégorie en cours)
-- Page d'un produit :
-- 	Afficher le titre, le prix et la description du produit.
-- Attention! Le prix des produits est en centimes dans la base. Il soit être affiché normalement sur le site (ex : 1230 en base doit afficher 12,30€), et dans le formulaire d'ajout/modification, le prix devra être renseigné normalement et enregistré en centimes (ex : l'utilisateur saisi 12,30 dans l'input, on doit avoir 1230 en base).
-- 

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 13 déc. 2020 à 16:21
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpnote`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Jeux vidéo', 'Tous les nouveaux jeux : PC, xBox, PS5, Switch, ...'),
(2, 'Accessoires', 'Tous les accessoires pour faire de vous un pro gamer!');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL COMMENT 'Price in cents',
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `id_category`, `name`, `description`, `price`) VALUES
(1, 1, 'The Last Of Us - Part II', 'Jeu d\'action et d\'aventure The Last of Us Part II, Pour découvrir la suite tant attendue du jeu qui à marqué une génération de joueurs\r\nGraphismes : des personnages, des ennemis et un univers encore plus réalistes et méticuleusement détaillés grâce au nouveau moteur de Naughty Dog\r\nFonctionnalités améliorées : système de combat au corps à corps à haute intensité et système de furtivité dynamique pour vous mettre au coeur de l\'action\r\nCaractéristiques du jeu : 1 joueur, Version physique, Disponible en français et en anglais, Compatibilités : consoles PS4 et PS4 Pro', 5490),
(2, 1, 'Assassin\'s Creed Valhalla - Limited Edition', 'Écrivez votre propre saga viking\r\nUn système de combat viscéral\r\nUn monde ouvert situé dans les âges obscurs du Moyen Âge\r\nMenez des raids épiques\r\nFaites grandir votre colonie', 4999),
(3, 2, 'Trust Taro Pack Clavier et Souris Filaires - Clavier AZERTY', 'CLAVIER TAILLE STANDARD FRANÇAIS - Le clavier de cet ensemble clavier et souris silencieux dispose d’une disposition standard française AZERTY et comporte un pavé numérique pour une productivité optimale\r\nSOURIS INCLUSE - Ce set comprend une souris confortable qui convient aux utilisateurs droitiers et gauchers\r\nRÉSISTANT AUX ÉCLABOUSSURES - Le clavier résiste aux éclaboussures et vous permet de continuer à travailler si vous renversez votre boisson\r\nPLUG AND PLAY - Branchez tout simplement le câble USB de 1,80 m de longueur et cet ensemble fonctionnera automatiquement avec n’importe quel ordinateur de bureau ou portable Windows, MacOS et ChromeOS\r\nMOINS DE BRUIT - Le clavier du Taro a été conçu pour faire jusqu\'à 50% moins de bruit pour que vous ne dérangiez pas vos collègues', 1299),
(4, 2, 'Trust Gaming Casque Gamer PS4 et PS5', 'Licence officielle pour PlayStation 4 - Ce casque gamer a été conçu pour la console PS4. Il est aussi compatible avec la PS5\r\nHaut-parleurs puissants de 50 mm, coussinets circum-auraux souples, confortables et arceau renforcé réglable\r\nMicrophone gaming flexible repliable avec mode mise en sourdine\r\nRégler le volume du son de votre casque, en branchant le casque sur la prise jack 3.5mm de votre manette DUALSHOCK 4\r\nCasque filaire avec cable tressé en nylon de 1,2 m, d\'une longueur idéale pour la connexion à votre manette PS4', 3999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
