-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
-- by Michael McCouman jr.
-- Host: 127.0.0.1
-- Erstellungszeit: 17. August 2012 um 17:12
-- Server Version: 5.5.8
-- PHP-Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Datenbank: `rss-test`
--
CREATE DATABASE `podfix_rss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `podfix_rss`;


--
-- Datenbank: `rss-test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `passwort` varchar(50) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`id`, `user`, `passwort`, `email`) VALUES
(10, 'Admin', '', 'your@mailadresse.dtl');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rss`
--

CREATE TABLE IF NOT EXISTS `rss` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `link` varchar(9) NOT NULL,
  `titel` text NOT NULL,
  `text` text NOT NULL,
  `tag` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

