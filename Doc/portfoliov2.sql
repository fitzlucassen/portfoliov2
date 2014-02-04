-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 04 Février 2014 à 22:11
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `portfoliov2`
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `title`, `description`, `period`) VALUES
(1, '1000mercis', '- Réalisation d''un site B2C de liste de naissance en .NET MVC3/JQuery/Razor HTML/Entiity Framework/Solrnet\r\n* Implémentation de l''API de paiement MERCANET et réalisation d''un tunnel d''achat en Front-Office. Réalisation d''un Back-Office de gestion de la comptabilité et de gestion automatique des remises bancaire.\r\n* Développement d''un catalogue de produits en Front-Office, Implémentation et utilisation de l''API Solrnet afin d''utiliser le moteur d''indexation Solr, développement d''un Back-Office de modération et de gestion des produits du catalogue.\r\n* Réflexion, analyse et développement d''une structure de site modulable et réutilisable à l''avenir, notion d''AGILE, de couche d''abstraction (layer)...etc.\r\n\r\n\r\n- Maintenance de site B2C déjà existant en ASP.NET/Javascript', 'septembre 2012 - août 2015'),
(2, 'Advisto SAS', '- Développement de différents modules PHP pour le CMS e-commerce PEEL Shopping\r\n- Maintenance du CMS e-commerce PEEL Shopping et développement d''une nouvelle version\r\n- Intégration de sites clients en HTML/CSS/jQuery\r\n- Utilisation d''outils de bug tracking (Mantis) et de versioning (SVN)', 'avril 2012 - juillet 2012');

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
(1, 'BAC S', 'Obtention d''un bac s mention assez bien. ', 'Lycée Geoffroy Saint Hilaire (Étampes)', 'juillet 2010'),
(2, 'DUT Informatique', 'Obtention d''un DUT Informatique en étant classé 8ème de ma promotion', 'IUT d''Orsay (Orsay)', 'juin 2012'),
(3, 'Licence web et e-business', 'Obtention d''une licence (BAC +3) dans le domaine du développement web et de la culture du e-business.', 'ESGI (Paris)', 'juillet 2013');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `skills`
--

INSERT INTO `skills` (`id`, `title`, `mark`, `category`, `dCrea`) VALUES
(1, 'HTML5', 5, 'Front-End', '2014-02-04'),
(2, 'CSS3', 5, 'Front-End', '2014-02-04'),
(3, '.NET MVC3', 4, 'Back-End', '2014-02-04'),
(4, 'jQuery', 5, 'Front-End', '2014-02-04'),
(5, 'PHP5', 4, 'Back-End', '2014-02-04'),
(6, 'Compass', 4, 'Framework/API', '2014-02-04'),
(7, 'Solr(Solrnet)', 4, 'Framework/API', '2014-02-04'),
(8, 'SEO', 5, 'Front-End', '2014-02-04'),
(9, 'FB API', 4, 'Framework/API', '2014-02-04'),
(10, 'GMaps API', 4, 'Framework/API', '2014-02-04'),
(11, 'ASP.NET', 4, 'Front-End', '2014-02-04'),
(12, 'MySQL', 5, 'Base de données', '2014-02-04'),
(13, 'T-SQL', 3, 'Base de données', '2014-02-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
