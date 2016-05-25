-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 26 Mai 2016 à 01:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `portfoliov2`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `period` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `title`, `description`, `period`, `image`, `url`, `poste`) VALUES
(1, 'Betclic Everest Group', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut\r\n									labore et dolore magna aliqua.', 'Nov 2015 - Maintenant', 'betclic.png', 'https://www.betclic.fr/', 'Ingénieur Concépteur Développeur'),
(2, '1000mercis', '&bull;&nbsp;&nbsp;Réalisation d''un site B2C de liste de naissance en .NET MVC3/JQuery/Razor HTML/Entiity Framework/Solrnet<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Implémentation de l''API de paiement MERCANET et réalisation d''un tunnel d''achat en Front-Office. Réalisation d''un Back-Office de gestion de la comptabilité et de gestion automatique des remises bancaire.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Développement d''un catalogue de produits en Front-Office, Implémentation et utilisation de l''API Solrnet afin d''utiliser le moteur d''indexation Solr, développement d''un Back-Office de modération et de gestion des produits du catalogue.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;Réflexion, analyse et développement d''une structure de site modulable et réutilisable à l''avenir, notion d''AGILE, de couche d''abstraction (layer)...etc.<br/><br/>\r\n\r\n\r\n&bull;&nbsp;&nbsp;Maintenance de site B2C déjà existant en ASP.NET/Javascript', 'Sept 2012 - Jui 2015', 'numberly.png', 'http://www.1000mercis.com/home.html', 'Développeur Web'),
(3, 'Advisto', '&bull;&nbsp;&nbsp;Développement de différents modules PHP pour le CMS e-commerce PEEL Shopping<br/>\r\n&bull;&nbsp;&nbsp;Maintenance du CMS e-commerce PEEL Shopping et développement d''une nouvelle version<br/>\r\n&bull;&nbsp;&nbsp;Intégration de sites clients en HTML/CSS/jQuery<br/>\r\n&bull;&nbsp;&nbsp;Utilisation d''outils de bug tracking (Mantis) et de versioning (SVN)', 'Avr 2012 - Ju 2012', 'advisto.png', 'https://www.advisto.fr/', 'Développeur Web');

-- --------------------------------------------------------

--
-- Structure de la table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `school` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `degree`
--

INSERT INTO `degree` (`id`, `title`, `description`, `school`, `period`) VALUES
(1, 'Master Développement Web & E-business', 'SEO, SEA, REST, NodeJS, .NET MVC, NoSQL, BigData...etc.<br/>Major de promotion.', 'ESGI', 'Sept 2013 - Jui 2015'),
(2, 'Licence Développement Web et E-business', 'SEO, Web Marketing, UML, Algorithmique, PHP5, Conception de CMS...etc.', 'ESGI', 'Sept 2012 - Jui 2013'),
(3, 'DUT Informatique', 'C, C++, Java, Développement 3D, Algorithmique...etc.<br/>8ème de promotion.', 'IUT d''Orsay', 'Sept 2010 - Jui 2012');

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `metaDescription` text NOT NULL,
  `metaKeywords` text NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `header`
--

INSERT INTO `header` (`id`, `title`, `metaDescription`, `metaKeywords`, `lang`) VALUES
(1, '', '', '', 'fr'),
(2, '', '', '', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL DEFAULT 'fr',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `lang`
--

INSERT INTO `lang` (`id`, `code`) VALUES
(1, 'fr'),
(2, 'en');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dCrea` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `link`, `image`, `dCrea`) VALUES
(1, 'Eruko', 'Outil permettant à chacun de contrôler son e-réputation', 'http://www.eruko.com', 'eruko.jpg', '2015-06-10'),
(2, 'Mets Tendances', 'Site vitrine d''un traiteur de la région Île-de-France', 'http://www.mets-tendances.com', 'metstendances.jpg', '2015-04-02'),
(3, 'Road Trip Australien', 'Carte interactive retraçant mon road-trip en Australie', 'http://australie.thibaultdulon.com', 'australie.jpg', '2015-09-27'),
(4, 'Room25', 'Jeu de plateau coopératif Room25 adapté en format web', 'http://room25.thibaultdulon.com', 'room25.jpg', '2014-10-01'),
(5, 'FLFramework', 'Développement de mon propre framework PHP5. Utilisé pour tous mes projets. Fiable, simple et réunissant tous les helpers communs', 'https://github.com/fitzlucassen/FLFramework', 'flframework.jpg', '2014-09-01'),
(6, 'MilleMercisMariage', 'Site de liste de mariage\n', 'http://www.millemercismariage.com', 'millemercismariage.jpg', '2014-06-01'),
(7, 'Dis Merci à la dame', 'Site de liste de naissance ou d''anniversaire de bébé', 'http://www.dismerci.com', 'dismerci.jpg', '2013-05-01'),
(8, 'Ocito', 'Développement du site vitrine d''Ocito, entreprise dans le secteur du mobile', 'http://www.ocito.com/', 'ocito.jpg', '2014-02-01'),
(9, 'Matiro', 'Développement du site vitrine de Matir, dans le secteur du display RTB', 'http://www.matiro.com/', 'matiro.jpg', '2014-02-01'),
(10, 'Webtuts', 'Développement d''un site/blog de tutoriaux sur les technologies du web', 'webtuts.thibaultdulon.com', 'webtuts.jpg', '2014-11-06'),
(11, 'Joulupukin', 'Développement d''une webapp visant à interagir entre des enfants et l''API de cdiscount (hackathon)\n', 'http://hack-cdiscount.thibaultdulon.com/', 'joulupukin.jpg', '2014-11-23'),
(12, 'BornWorm', 'Jeu sous forme de webapp permettant de jouer avec la ville de naissance de ses amis Facebook\n\n', 'http://bornworm.thibaultdulon.com', 'bornworm.jpg', '2014-01-01'),
(13, 'PassAnger', 'Développement du site vitrine de mon ancien groupe de musique', 'http://passanger.thibaultdulon.com', 'passanger.jpg', '2013-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `rewrittingurl`
--

CREATE TABLE IF NOT EXISTS `rewrittingurl` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `idRouteUrl` tinyint(5) NOT NULL,
  `urlMatched` varchar(255) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'fr',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `rewrittingurl`
--

INSERT INTO `rewrittingurl` (`id`, `idRouteUrl`, `urlMatched`, `lang`) VALUES
(1, 1, '/accueil.html', 'fr'),
(2, 1, '/en/home.html', 'en'),
(3, 2, '/404.html', 'fr'),
(4, 2, '/en/404.html', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `routeurl`
--

CREATE TABLE IF NOT EXISTS `routeurl` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `controller` varchar(100) NOT NULL DEFAULT '',
  `action` varchar(100) NOT NULL DEFAULT '',
  `order` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `routeurl`
--

INSERT INTO `routeurl` (`id`, `name`, `controller`, `action`, `order`) VALUES
(1, 'home', 'home', 'index', 0),
(2, 'error404', 'home', 'error404', 0);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `mark` int(2) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Front-End',
  `dCrea` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `title`, `mark`, `category`, `dCrea`) VALUES
(1, 'HTML5 / CSS3', 90, 'Front-End', '2014-02-04'),
(3, '.NET MVC', 95, 'Back-End', '2014-02-04'),
(4, 'jQuery / JS', 95, 'Front-End', '2014-02-04'),
(5, 'C#', 90, 'Back-End', '2014-02-04'),
(6, 'Sass', 75, 'Framework/API', '2014-02-04'),
(7, 'Solr(Solrnet)', 80, 'Back-End', '2014-02-04'),
(8, 'SEO', 100, 'Front-End', '2014-02-04'),
(12, 'MySQL', 65, 'Base de données', '2014-02-04'),
(13, 'SQL Server', 70, 'Base de données', '2014-02-04'),
(16, 'NodeJS', 60, 'Back-End', '2014-05-30'),
(17, 'Socket.IO', 95, 'Framework/API', '2014-05-30'),
(18, 'Yeoman', 50, 'Framework/API', '2014-06-18'),
(19, 'Grunt/Bower', 60, 'Framework/API', '2014-06-18'),
(20, 'AngularJS', 60, 'Framework/API', '2014-06-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
