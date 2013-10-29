-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generato il: Ott 29, 2013 alle 11:00
-- Versione del server: 5.5.27
-- Versione PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carpooling`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `guidatore`
--

DROP TABLE IF EXISTS `guidatore`;
CREATE TABLE IF NOT EXISTS `guidatore` (
  `num_viaggio` int(11) NOT NULL,
  `username_guidatore` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `targa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `media_feedback` float DEFAULT NULL,
  `commento` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_viaggio`),
  KEY `username_guidatore` (`username_guidatore`),
  KEY `targa` (`targa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `passeggero`
--

DROP TABLE IF EXISTS `passeggero`;
CREATE TABLE IF NOT EXISTS `passeggero` (
  `username_passeggero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num_viaggio` int(11) NOT NULL,
  `feedback_pass` float DEFAULT NULL,
  `commento_pass` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feedback_guid` float DEFAULT NULL,
  `commento_guid` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username_passeggero`,`num_viaggio`),
  KEY `num_viaggio` (`num_viaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

DROP TABLE IF EXISTS `utente`;
CREATE TABLE IF NOT EXISTS `utente` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cognome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascita` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `citta_nascita` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `citta_residenza` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sesso` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `cod_fiscale` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `num_telefono` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stato_attivazione` enum('attivo','non_attivo','','') COLLATE utf8_unicode_ci DEFAULT NULL,
  `codice_attivazione` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `immagine_profilo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`username`, `password`, `nome`, `cognome`, `data_nascita`, `citta_nascita`, `citta_residenza`, `sesso`, `cod_fiscale`, `email`, `num_telefono`, `stato_attivazione`, `codice_attivazione`, `immagine_profilo`) VALUES
('dd', 'aa', 'rgdfs', 'dfvfd', '3', 'df', 'fd', '', 'fd', 'gbgb', '', 'attivo', '', ''),
('stefano', '0000', 'stefano', 'altobelli', '01/01/1991', 'pescara', 'pescara', '', 'abcvder', 'stefano@aia.com', '', 'attivo', '', ''),
('vaan46', '1234', 'daniele', 'ciambrone', '1991-08-17', 'L''Aquila', 'L''Aquila', '', 'CMBDNL91M17A345D', 'vaan46@hotmail.it', '3331234567', 'attivo', '123', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `veicolo`
--

DROP TABLE IF EXISTS `veicolo`;
CREATE TABLE IF NOT EXISTS `veicolo` (
  `targa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username_proprietario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num_posti` int(11) NOT NULL,
  `carburante` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `consumo_medio` float NOT NULL,
  PRIMARY KEY (`targa`),
  KEY `username_proprietario` (`username_proprietario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggio`
--

DROP TABLE IF EXISTS `viaggio`;
CREATE TABLE IF NOT EXISTS `viaggio` (
  `num_viaggio` int(11) NOT NULL AUTO_INCREMENT,
  `citta_partenza` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_partenza` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `citta_arrivo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_viaggio`),
  UNIQUE KEY `num_viaggio` (`num_viaggio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dump dei dati per la tabella `viaggio`
--

INSERT INTO `viaggio` (`num_viaggio`, `citta_partenza`, `data_partenza`, `citta_arrivo`, `note`) VALUES
(1, 'pescara', '2013-01-01', 'laquila', 'niente'),
(2, 'pescara', '2013-01-01', 'roma', 'niente'),
(3, 'madonna', '2013-01-01', 'gesu', 'dio'),
(4, '1', '2013-01-01', '2', '0'),
(5, 'per', '2013-01-01', 'la', 'madonna'),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, 'qua', 'mo', 'la', 'bo'),
(19, 'PARTENZA', 'DATA', 'ARRIVO', 'NIENTE'),
(20, 'QE', 'QADFA', 'FA', 'FASD'),
(21, 'adesso', 'esse', 'dovrebbe', '20'),
(22, '1', '3', '2', '4'),
(23, 'a', 'a', 'q', 'q'),
(24, 'a', 'a', 'a', 'a'),
(25, 'a', 'a', 'a', 'a'),
(26, 'ad', 'fef', 'ad', 'fs'),
(27, 'a', 'fw', 'dwq', 'fde'),
(28, 'qd', 'fw', 'wedf', 'efw'),
(29, 'porco', 'funziona', 'dio', '');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `guidatore`
--
ALTER TABLE `guidatore`
  ADD CONSTRAINT `guidatore_ibfk_1` FOREIGN KEY (`username_guidatore`) REFERENCES `utente` (`username`),
  ADD CONSTRAINT `guidatore_ibfk_2` FOREIGN KEY (`targa`) REFERENCES `veicolo` (`targa`),
  ADD CONSTRAINT `guidatore_ibfk_3` FOREIGN KEY (`num_viaggio`) REFERENCES `viaggio` (`num_viaggio`);

--
-- Limiti per la tabella `passeggero`
--
ALTER TABLE `passeggero`
  ADD CONSTRAINT `passeggero_ibfk_1` FOREIGN KEY (`username_passeggero`) REFERENCES `utente` (`username`),
  ADD CONSTRAINT `passeggero_ibfk_2` FOREIGN KEY (`num_viaggio`) REFERENCES `viaggio` (`num_viaggio`);

--
-- Limiti per la tabella `veicolo`
--
ALTER TABLE `veicolo`
  ADD CONSTRAINT `veicolo_ibfk_1` FOREIGN KEY (`username_proprietario`) REFERENCES `utente` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
