-- Base de donnée crée par Martin Jeanne !

-- --------------------------------------------------------

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 déc. 2020 à 13:55
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

--
-- Base de données :  `chinook`
--

DROP DATABASE IF EXISTS `chinook`;
CREATE DATABASE `chinook`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(45) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(45) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(255) NOT NULL,
  `idArtist` int(45)
);

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `id` int(45) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(45) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `commentText` varchar(2000) NOT NULL,
  `idAlbum` int(45)
);

-- --------------------------------------------------------

--
-- Contraintes pour la table `album`
--

ALTER TABLE `album`
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`idArtist`) REFERENCES `artist` (`id`);

--
-- Contraintes pour la table `comment`
--

ALTER TABLE `comment`
  ADD CONSTRAINT `fk_commentaire` FOREIGN KEY (`idAlbum`) REFERENCES `album` (`id`);