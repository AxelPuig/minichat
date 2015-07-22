-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 22 Juillet 2015 à 02:09
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chat-php`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `datetime`, `pseudo`, `message`) VALUES
(23, '2015-07-22 02:01:43', 'Axel Puig', 'Bienvenue sur ce mini-chat !'),
(24, '2015-07-22 02:02:00', 'Explications', 'Il est doté d''un certain nombre de fonctionnalités'),
(25, '2015-07-22 02:02:19', 'Explications', 'Il garde le pseudo de page en page'),
(26, '2015-07-22 02:02:34', 'Explications', 'Il focus tout seul sur l''input message'),
(27, '2015-07-22 02:02:44', 'Axel Puig', 'Et c''est pas tout !'),
(28, '2015-07-22 02:03:09', 'Explications', 'Ah oui ! La date est écrite en français'),
(29, '2015-07-22 02:03:28', 'Explications', 'Et il est sécurisé !'),
(30, '2015-07-22 02:04:13', 'Je suis un méchant', 'Hihi &lt;script&gt;alert(''bouh ! Je suis un méchant'');&lt;/script&gt;'),
(31, '2015-07-22 02:04:19', 'Je suis un méchant', ':''('),
(32, '2015-07-22 02:04:45', 'Explications', 'Et il est limité à 20 messages affichés !'),
(33, '2015-07-22 02:04:52', 'Axel Puig', 'Et enfin...'),
(34, '2015-07-22 02:05:13', 'Explications', 'Vos messages (même pseudo) sont mis en valeurs !'),
(35, '2015-07-22 02:05:36', 'Axel Puig', 'Ca mérite une bonne note non ? :-) Bonne correction !'),
(36, '2015-07-22 02:06:22', 'Pour info', 'Le framework Bootstrap a été utilisé. Résultat : seulement 6 lignes de codes css pour avoir ce rendu !'),
(37, '2015-07-22 02:07:32', 'Pour info', 'Ah oui, il faut commencer par lire depuis en bas, comme sur la video de Mathieu Nebra ;-)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
