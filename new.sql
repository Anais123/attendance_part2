-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 sep. 2020 à 21:31
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `new`
--

-- --------------------------------------------------------

--
-- Structure de la table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datesign` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `attendance`
--

INSERT INTO `attendance` (`id`, `iduser`, `email`, `datesign`, `time`) VALUES
(24, 4, 'christ@gmail.com', '2020-09-09', '23:01:45'),
(25, 4, 'christ@gmail.com', '2020-09-09', '23:02:06'),
(26, 5, 'joes@gmail.com', '2020-09-11', '21:45:06'),
(27, 5, 'joes@gmail.com', '2020-09-11', '21:45:22'),
(28, 0, 'boris@gmail.com', '2020-09-11', '21:59:59'),
(29, 0, 'boris@gmail.com', '2020-09-12', '22:00:09'),
(30, 6, 'boris@gmail.com', '2020-09-11', '22:05:25'),
(31, 6, 'boris@gmail.com', '2020-09-11', '22:05:52'),
(32, 6, 'boris@gmail.com', '2020-09-11', '22:13:37'),
(33, 6, 'boris@gmail.com', '2020-09-11', '22:16:00'),
(34, 0, 'ttt@ggg', '2020-09-11', '22:35:53'),
(35, 0, 'ttt@ggg', '2020-09-11', '22:36:03'),
(36, 0, 'ttt@ggg', '2020-09-11', '22:36:14'),
(37, 8, 'ttt@ggg', '2020-09-11', '22:45:46'),
(38, 6, 'boris@gmail.com', '2020-09-11', '22:49:04'),
(39, 6, 'boris@gmail.com', '2020-09-11', '22:49:22'),
(40, 6, 'boris@gmail.com', '2020-09-11', '22:49:54'),
(41, 6, 'boris@gmail.com', '2020-09-11', '22:50:21'),
(42, 9, 'ana@gmail.com', '2020-09-12', '15:39:36'),
(43, 9, 'ana@gmail.com', '2020-09-12', '15:39:49'),
(44, 10, 'ggdg@gmail.com', '2020-09-12', '16:09:42'),
(45, 10, 'ggdg@gmail.com', '2020-09-12', '16:09:52'),
(46, 9, 'ana@gmail.com', '2020-09-12', '16:18:29');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file_name` varchar(250) NOT NULL,
  `date_heure` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `phone`, `sex`, `password`, `file_name`, `date_heure`) VALUES
(1, 'dizie', 'dizir@gmail.com', '', '', '202cb962ac59075b964b07152d234b70', '', '2020-09-09 13:38:49'),
(2, 'majo', 'majo@gmail.com', '44526689', 'Femme', '1234', 'images/777998ken zeinab diallo.jpeg', '2020-09-09 22:47:03'),
(3, 'fdfc', 'fddffd@hgfg', '23556556', 'Homme', '1234', 'images/c9168180ddad677cc36efbfdd0327e52', '2020-09-09 22:49:52'),
(4, 'christ', 'christ@gmail.com', '55869521', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/47e23edb11480ba4a93e71fa6901f2b6', '2020-09-09 22:51:41'),
(5, 'joes', 'joes@gmail.com', '05112563', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/efd544063b38bdc8cfe33156b0cebf21', '2020-09-11 21:44:39'),
(6, 'boris', 'boris@gmail.com', '55412252', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/6c68df0e39b8019f8359884a9a7ecf4c', '2020-09-11 21:58:14'),
(7, 'bala', 'bala@gmail.com', '55263514', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/b901aa0c125402f3cc964a25cd6c620b', '2020-09-11 22:21:06'),
(8, 'reed', 'ttt@ggg', '44', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/a470db9922cfea5431af9d088254973c', '2020-09-11 22:32:19'),
(9, 'ana', 'ana@gmail.com', '52656552', 'Femme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/7a457eb456fea20f4ccd168f4fa77056', '2020-09-12 15:39:07'),
(10, 'gsdgv', 'ggdg@gmail.com', '52545552', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/cb818a119f64fd879a5d239a61687751', '2020-09-12 16:07:49'),
(11, 'jhdshjhdgs', 'gdsg@hjdsg', '5478547', 'Homme', '81dc9bdb52d04dc20036dbd8313ed055', 'images/84415IMG_20170114_080829.jpg', '2020-09-12 18:46:46');

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`id`, `email`, `password`) VALUES
(1, 'kolo@gmail.com', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
