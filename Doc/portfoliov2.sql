-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 15 déc. 2025 à 09:49
-- Version du serveur : 5.5.61-38.13-log
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfoliov2`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `period` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`id`, `title`, `description`, `period`, `image`, `url`, `poste`) VALUES
(0, 'MangoPay', '<i style=\"display:block;text-align:center;\">Head of Platform within the Platform &amp; Risk organisation</i><br/>\r\n&bull;&nbsp;&nbsp; Leading the platform vision and roadmap for a high-volume payment API<br/>\r\n&bull;&nbsp;&nbsp; Driving evolution from monolith to distributed services, improving resilience and scalability<br/>\r\n&bull;&nbsp;&nbsp; Working closely with risk, security and compliance teams on fraud, KYC/AML and regulatory topics (PSD2, PCI, etc.)<br/>\r\n&bull;&nbsp;&nbsp; Supporting engineering teams on architecture topics (APIs, messaging, identity, observability)<br/>\r\n&bull;&nbsp;&nbsp; Focusing on developer experience: internal platforms, tooling, CI/CD and automation<br/>\r\n', 'Feb 2020 - Present', 'mangopay.png', 'https://www.mangopay.com/fr/', 'Head of Platform'),
(1, 'Keakr', '<i style=\"display:block;text-align:center;\">Project management done with SCRUM, and later, KANBAN in a team of 3 people</i><br/>\r\n&bull;&nbsp;&nbsp; Migration of a .NET API in DotNet Core<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Implementation of an API in <u>C# 7</u> and <u>DotNet Core 2.1</u><br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Setting up a <u>CQRS + Event Sourcing</u> architecture for a better scalability<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Using best practice like layered architecture (<u>onion pattern</u>) so that each component can be commutable<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Setting up a NoSQL database engine: <u>Arango DB</u><br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Implementation of a clustered database fail-over system for a better availibility<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Performance and load studies on each API to respond to hundreds of requests by second very quickly<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;- Splitting monolith in different microservices<br/>\r\n&bull;&nbsp;&nbsp; Development of a feature flipping system to improve and allow continuous integration<br/>\r\n&bull;&nbsp;&nbsp; Setting up a complete continuous integration system thanks to <u>Docker</u>, <u>Jenkins</u> et <u>DCOS/Marathon</u><br/>\r\n', 'Jan 2018 - Jan 2020', 'keakr.png', 'https://www.keakr.com/', 'Lead Backend'),
(2, 'Betclic Everest Group', '<i style=\"display:block;text-align:center;\">Project management done in SCRUM, and later, in KANBAN in an international team (France/Malta/Russia) of 15 people.</i><br/>\r\n&bull;&nbsp;&nbsp;Conception and development of a multi-provider sport offer managing solution (reception, processing, recording). <br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Conception of the solution architecture (<u>onion architecture, unit of work pattern, SOLID pattern, DRY pattern, IOC via StructureMap</u>...etc).<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Implementation of a <u>WebApi</u> using <u>C#</u> and <u>framework .net 4.5.2</u>.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Using <u>RabbitMQ</u> as a messaging and transiting system and processing messages thansk to windows service worker.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Using <u>Dapper</u> with <u>SQL Server</u> to persists data and using stored procedures to request them.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Improving solutions thanks to distributed cache (<u>Redis</u>), task parallelization via <u>Async/Await</u>, load tests, refactoring and code review.<br/>\r\n&bull;&nbsp;&nbsp;Conception and development of a smart odds automatic managing solution depending of users behaviors<br/>\r\n&bull;&nbsp;&nbsp;Frontend development of some admin pages in <u>angular 4</u> using <u>REST API</u><br/>\r\n&bull;&nbsp;&nbsp;In charge of the TFS to GIT migration and of the continuous integration implementation process in the whole company (<u>GIT, Sonar, TeamCity</u>)<br/>\r\n&bull;&nbsp;&nbsp;Much into the company technical life by writting technical blog articles and by presenting technical formations...etc.<br/>', 'Nov 2015 - Dec 2017', 'betclic.png', 'https://www.betclic.fr/', 'Engineer, Architect and Developer'),
(3, '1000mercis', '<i style=\"display:block;text-align:center;\">Project management done with SCRUM in a team of 3 people</i><br/>\r\n&bull;&nbsp;&nbsp;Conception and development of a B2C website for new born babies birth list in <u>.NET MVC3/C#/Entity Framework/Solrnet/JQuery/HTML/CSS</u><br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Implementation of a payment API (MERCANET by BNP) and development of a complete purchase tunnel.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Conception and development of a complete comptability management tool in the admin side.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Development of an e-commerce product catalog and implementation of the Solrnet indexation engine.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Dévelopment of a moderation tool for catalog products in admin side.<br/>\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Conception, analysis and development of a commutable architecture. First architecture notions (abstract layers, contracts, facades...etc).<br/>\r\n\r\n&bull;&nbsp;&nbsp;Maintenance of other B2C websites in <u>ASP.NET/Javascript</u>', 'Sept 2012 - Jun 2015', 'numberly.png', 'http://www.1000mercis.com/home.html', 'Web Developer'),
(5, 'Advisto', '&bull;&nbsp;&nbsp;Development of different <u>PHP</u> modules for the e-commerce CMS PEEL Shopping<br/>\r\n&bull;&nbsp;&nbsp;Maintenance of the PEEL Shopping e-commerce CMS and development of a brand new version<br/>\r\n&bull;&nbsp;&nbsp;Integration ofvarious client websites with <u>HTML/CSS/jQuery</u><br/>\r\n&bull;&nbsp;&nbsp;Using bug tracking (<u>Mantis</u>) and versioning (<u>SVN</u>) tools', 'Abr 2012 - Jun 2012', 'advisto.png', 'https://www.advisto.fr/', 'Web Developer');

-- --------------------------------------------------------

--
-- Structure de la table `degree`
--

CREATE TABLE `degree` (
  `id` tinyint(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `school` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `degree`
--

INSERT INTO `degree` (`id`, `title`, `description`, `school`, `period`, `url`) VALUES
(1, 'Web development & E-business master', '&nbsp;&nbsp;&nbsp;SEO, SEA, REST, NodeJS, .NET MVC, NoSQL, BigData...etc.<br/>\r\n&nbsp;&nbsp;&nbsp;<b>Major of promotion.</b>', 'ESGI', 'Sept 2013 - Jul 2015', 'http://www.esgi.fr/ecole-informatique/programmes/ecole-web.html'),
(2, 'Web development & E-business licence', '&nbsp;&nbsp;&nbsp;SEO, Web Marketing, UML, Algorithm, PHP5, CMS conception...etc.', 'ESGI', 'Sept 2012 - Jul 2013', 'http://www.esgi.fr/ecole-informatique/programmes/ecole-web.html'),
(3, 'IT Sciences DUT', '&nbsp;&nbsp;&nbsp;C, C++, Java, 3D development, Algorithm...etc.<br/>\r\n&nbsp;&nbsp;&nbsp;<b>8th of promotion.</b>', 'IUT d\'Orsay', 'Sept 2010 - Jul 2012', 'http://www.iut-orsay.u-psud.fr/fr/specialites/informatique.html');

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

CREATE TABLE `header` (
  `id` tinyint(5) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `metaDescription` text NOT NULL,
  `metaKeywords` text NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `header`
--

INSERT INTO `header` (`id`, `title`, `metaDescription`, `metaKeywords`, `lang`) VALUES
(1, '', 'Head of Platform et engineering leader basé en France. Plus de 10 ans de parcours, du développement backend aux plateformes de paiement scalables, architecture, cloud et developer experience.', 'head of platform, engineering leader, engineering manager, plateforme, fintech, paiement, architecture, backend, .NET, C#, PHP, cloud, AWS, devops, SRE, developer experience, portfolio', 'fr'),
(2, '', 'Head of Platform and engineering leader based in France. 10+ years of experience from backend development to scalable payment platforms, architecture, cloud and developer experience.', 'head of platform, engineering leader, engineering manager, platform engineering, fintech, payments, architecture, backend, .NET, C#, PHP, cloud, AWS, devops, SRE, developer experience, portfolio', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `lang`
--

CREATE TABLE `lang` (
  `id` tinyint(5) NOT NULL,
  `code` varchar(2) NOT NULL DEFAULT 'fr'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lang`
--

INSERT INTO `lang` (`id`, `code`) VALUES
(1, 'fr'),
(2, 'en');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` tinyint(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dCrea` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `link`, `image`, `dCrea`, `keywords`) VALUES
(1, 'Website & features<br/>Cocktail Cocktail', 'As an event catering company for years, Cocktail-Cocktail needed a new brand image. So I\'ve imagined and developed a modern and coherent showcase website for them.<br/>Moreover, I\'ve also developed a full administration system to manage quotes, messages, catalog, clients and so on...', 'https://www.cocktailcocktail.com', 'imagecocktailcocktail', 'December 2020', 'PHP7, Sass, Gulp, HTML5, CSS3, JS'),
(2, 'Showcase website<br/>Mets Tendances', 'As a tailored catering and event company for years, Mets Tendances is the luxury and premium brand of Cocktail Cocktail Group. They also needed a brand new image, modern, and coherent with the main website.<br/> I\'ve tried to show here something more elegant.', 'https://www.mets-tendances.com', 'imagemetstendances', 'December 2020', 'PHP7, Sass, Gulp, HTML5, CSS3, JS'),
(3, 'Showcase website<br/>Les Terrasses de Courbevoie <i>(temporarily offline)</i>', 'As a restaurant but also an event room, Les Terrasses de Courbevoie, part of the Cocktail Cocktail Group also needed a brand new image to be coherent with the main one and with all the usefull information.', 'https://www.lesterrassesdecourbevoie.com', 'imagelesterrasses', 'December 2020', 'PHP7, Sass, Gulp, HTML5, CSS3, JS'),
(4, 'Showcase website<br/>Carolina Gomez Holistique', 'Naturopath and holistic chef, Carolina Gomez needed a refined and sensory website to express her universe: intuitive and creative cooking, holistic nutrition, fasting programs and workshops. The design focuses on textures, typography and calm colours aligned with her brand.', 'https://www.carolinagomezholistique.com', 'carolinagomezcatering', 'Abril 2019', 'HTML5, CSS3, JS, PHP'),
(7, 'Web framework<br/>FLFramework', 'As a developer, I needed a way to accelerate my website production by spending less time on repetitive tasks. So I created this framework.', 'https://github.com/fitzlucassen/FLFramework', 'flframework', 'September 2014', 'PHP5, Sass, HTML5, CSS3, JS'),
(8, 'Website & features<br/>Eruko <i>(temporarily offline)</i>', 'As concerned by the e-reputation, I created this smart website that helps you be more aware of your numeric reputation and privacy and much more.', 'https://www.eruko.com', 'eruko', 'July 2016', '.NET MVC, C#,  EF, LINQ, Sass, JS, HTML5'),
(9, 'Website & features<br/>Itineraris<i>(temporarily offline)</i>', 'As a constant traveler, I needed a smart tool that could draw for me my travel itinerary and where I could post some pictures and diary description.', 'https://itineraris.fr', 'itineraris', 'March 2018', 'Angular, Service Worker, TypeScript, NodeJS, HTML5'),
(10, 'Showcase website<br/>Regnier-HR<i>(temporarily offline)</i>', 'In the hotels and restaurants business for a while, Cédric Regnier needed a new showcase website to speak about his glass cleaning machines.', 'http://www.regnier-hr.com', 'regnier-hr', 'May 2019', 'HTML5, CSS3, JS, PHP'),
(11, 'Website & features<br/>Joulupukin', 'CDISCOUNT needed a creative web app to interact with kids for christmas and make their christmas list thanks to CDISCOUNT API', 'http://hack-cdiscount.thibaultdulon.com/', 'joulupukin', 'December 2014', 'PHP5, FLFramework, Sass, JS, HTML5, CDiscount API'),
(12, 'Web app &amp; platform<br/>Genely', 'Genely is an AI-powered gastro travel companion that helps food lovers discover restaurants and experiences tailored to their tastes. I designed and built the web application, from the technical architecture to the user experience, leveraging AI to suggest curated culinary journeys.', 'https://genely.thibaultdulon.com', 'genely', '2024', 'AI, product design, TypeScript, NodeJS, React, UX, platform engineering');

-- --------------------------------------------------------

--
-- Structure de la table `rewrittingurl`
--

CREATE TABLE `rewrittingurl` (
  `id` tinyint(5) NOT NULL,
  `idRouteUrl` tinyint(5) NOT NULL,
  `urlMatched` varchar(255) NOT NULL,
  `lang` varchar(2) NOT NULL DEFAULT 'fr'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rewrittingurl`
--

INSERT INTO `rewrittingurl` (`id`, `idRouteUrl`, `urlMatched`, `lang`) VALUES
(1, 1, '/fr/', 'fr'),
(2, 1, '/en/', 'en'),
(3, 2, '/fr/404.html', 'fr'),
(4, 2, '/en/404.html', 'en'),
(5, 3, '/fr/a-propos.html', 'fr'),
(6, 3, '/en/about.html', 'en'),
(7, 4, '/fr/services.html', 'fr'),
(8, 4, '/en/services.html', 'en'),
(9, 5, '/fr/projets.html', 'fr'),
(10, 5, '/en/work.html', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `routeurl`
--

CREATE TABLE `routeurl` (
  `id` tinyint(5) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `controller` varchar(100) NOT NULL DEFAULT '',
  `action` varchar(100) NOT NULL DEFAULT '',
  `order` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `routeurl`
--

INSERT INTO `routeurl` (`id`, `name`, `controller`, `action`, `order`) VALUES
(1, 'home', 'home', 'index', 0),
(2, 'error404', 'home', 'error404', 0),
(3, 'about', 'home', 'about', 0),
(4, 'services', 'home', 'services', 0),
(5, 'work', 'home', 'work', 0);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` tinyint(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mark` int(2) NOT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'Front-End',
  `dCrea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `title`, `mark`, `category`, `dCrea`) VALUES
(1, 'SEO', 100, 'Front-End', '2014-02-04'),
(2, 'HTML5 / CSS3', 90, 'Front-End', '2014-02-04'),
(3, 'Angular / TypeScript', 80, 'Framework/API', '2014-06-18'),
(4, 'JavaScript / jQuery', 90, 'Front-End', '2014-02-04'),
(5, 'Sass', 80, 'Framework/API', '2014-02-04'),
(6, 'Socket.IO', 100, 'Framework/API', '2014-05-30'),
(8, 'Grunt / Bower', 60, 'Framework/API', '2014-06-18'),
(9, 'Design Pattern (SOLID/DRY/KISS...)', 100, 'Back-End', '2014-02-04'),
(10, 'Architecture (MVC/Onion/CQRS/Clean...)', 100, 'Back-End', '2018-02-27'),
(11, '.NET MVC / .NET Core', 95, 'Back-End', '2014-02-04'),
(12, 'C#', 95, 'Back-End', '2014-02-04'),
(13, 'NodeJS', 70, 'Back-End', '2014-05-30'),
(14, 'SQL Server / MySQL', 70, 'Base de données', '2014-02-04'),
(15, 'AGILE methods (Scrum / Kanban)', 90, 'Other', '2016-06-10'),
(16, 'Windows Server managing', 70, 'DevOps', '2016-06-10'),
(17, 'Git / TFS', 80, 'Other', '2017-03-01'),
(18, 'English', 90, 'Other', '2016-06-10'),
(19, 'Español', 100, 'Other', '2017-03-01'),
(20, 'ArangoDB', 60, 'Base de données', '2018-02-27'),
(21, 'Docker', 90, 'DevOps', '2022-08-24'),
(22, 'Kubernetes', 40, 'DevOps', '2022-08-24'),
(23, 'AWS', 40, 'DevOps', '2022-08-24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rewrittingurl`
--
ALTER TABLE `rewrittingurl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `routeurl`
--
ALTER TABLE `routeurl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `degree`
--
ALTER TABLE `degree`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `header`
--
ALTER TABLE `header`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
	  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `rewrittingurl`
--
ALTER TABLE `rewrittingurl`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `routeurl`
--
ALTER TABLE `routeurl`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
