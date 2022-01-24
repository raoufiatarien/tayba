-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Juillet 2018 à 12:32
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tayba`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `about`
--

INSERT INTO `about` (`id`, `text`) VALUES
(2, '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');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_date` text NOT NULL,
  `login_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `login_date`, `login_time`) VALUES
(1, '$2y$10$oVpdF9RwblLr5oNRjZITEuHBaOLdrY1yDTWRgOIUG0dwB9wiNu4ia', '$2y$10$UyKbI6iuHu.WWEiomxD2Neof4re8QDn/Eow3vvjxT2RZr2rYXWMp2', '3A8rdbkuenjPnD1FXkKBwQ==', 'qMVyhRpiM4e6908qX3kHOw==');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'C3LfaivSCCEds54zEHP0iA=='),
(2, 'nbgTkAEMCjeHcdQqHgPnFA=='),
(4, 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM='),
(3, 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA==');

-- --------------------------------------------------------

--
-- Structure de la table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `front_img` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `front_img`, `image`) VALUES
(1, 'Ro3SA/dn7hJc0PH0m6i2fQ==', 'Fx0WTw5BpRu+eeI+tlpXnvP285VF9QwCUzTu8q4soDA=', 'PD/uPucQMsHjsUiENFOAoMsrNx37QR/pMHaGWfkP3MA='),
(2, 'mKRb8Zu22/P5bVL0W3r/4Q==', 'A0Oic94Yg3CoxFhJDRjgMAMyDpCoV5yfB+YR/YfyKjE=', 'vqZiqjimUMv93cJC4+xm0w=='),
(3, 'Ud1KAeVNR6C4n778tlUoSg==', 'aHQ8UXNcngck/b4dPPqT/l+5zh1YPc21Px3WYncr0Vk=', 'BarRPRI/ylIgQXopJB6OPw=='),
(4, '+siOmDzGgSOPRFoZZ4fY+A==', '1br/q6O+6hNNJKg23yaCfFSDRKT3mh/y75YRFKk3aFg=', 'qe5/vCLlUHktqte5HD3m0g=='),
(5, 'ds5f0wvs73JvKGtYr7R3Pw==', 'ZSAjIiG5Gv5g9oUUNRGMbm0cUEiQq0X3+KQL/O1PLa4=', '0KeWIQzt/XcNeBKQO+mALg==');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `Phone` text,
  `Address` text,
  `Email` text,
  `FAX` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`Phone`, `Address`, `Email`, `FAX`) VALUES
('1nzt52uYbTJVDLoJTbaflmhb5O7fTKN4KdUlyvnLTRg=', 'EWECyuWFm4h8HLAR29ts7uLRueujs3E2bc1yeQ+kZr/s9FjusSs2aGzeX3Ioqvpp2+8fjfyM3pyS4cTcs0AJkQ==', 'ba7ay1LUhrC7sb/bW47pGZwbRYY+5vej1cPtHbSTUfQ=', '+ro1ER/KaB2K79Ut2nAb4Q==');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `Facebook` text,
  `Twitter` text NOT NULL,
  `Google plus` text NOT NULL,
  `Linkedin` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `links`
--

INSERT INTO `links` (`Facebook`, `Twitter`, `Google plus`, `Linkedin`) VALUES
('nIYmCuCfEciGRmtABv0f89wR19jWkB2FxnTCe7BZxbQ=', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `sub_sub_category` text,
  `sub_sub_sub_category` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `name`, `pic`, `category`, `sub_category`, `sub_sub_category`, `sub_sub_sub_category`) VALUES
(28, 'IKE1knT5CsDiL/c/E3WR7tyFc0BFlEZ2RpdpSoPAoQk=', 'y9gdX8+YlZSCE8XKLzMbjg==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA==', 'lLy5e53wlYhlgg8AIDw6Tw==', 'X9mtC38qm9gTOYsMJRsheA==', 'cTeLycZFqRGmueCet9tdQw=='),
(29, 'WgJmKI2HW2Qr6EWPy0N7Dn6vSxHRUhwbrWVmpjqSm3Y=', '65v9oZ95yS6b5VSqZ0EG7A==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA==', 'lLy5e53wlYhlgg8AIDw6Tw==', 'X9mtC38qm9gTOYsMJRsheA==', 'cTeLycZFqRGmueCet9tdQw=='),
(30, 'eEGbYo28UFRCbnsAoEU3am/Mqeebe6slq47gKPwLD90=', 'u/J4iykwQMoMycvPtDY8Pg==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA==', 'lLy5e53wlYhlgg8AIDw6Tw==', 'X9mtC38qm9gTOYsMJRsheA==', 'cTeLycZFqRGmueCet9tdQw=='),
(24, '7nCNBXpgAU/ytdfkXj4H0Q==', 'pWJtzUs2FFS+GGC80dKOrg==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', '7nCNBXpgAU/ytdfkXj4H0Q==', NULL, NULL),
(25, 'qt+7mwptfjhSOjbRwaAALA==', 'Zj1gFO1Nd/WOsCrKs0Lj+w==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'qt+7mwptfjhSOjbRwaAALA==', NULL, NULL),
(26, 'tTo0puuL1zvez+w+1gYpRQ==', 'FAsQYrkKbf7t8Iq6aWt1Rg==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'KupZvcMTgYsXYGVjGk6/U0Pyumuo4MAJm5vtOy9qRjg=', NULL, NULL),
(27, 'tTo0puuL1zvez+w+1gYpRQ==', 'nF065S8Ergxvgr21B5x6/A==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'KupZvcMTgYsXYGVjGk6/U0Pyumuo4MAJm5vtOy9qRjg=', NULL, NULL),
(21, 'tTo0puuL1zvez+w+1gYpRQ==', 'BCkQXXR2sfhmp9Hljjjfkg==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'KupZvcMTgYsXYGVjGk6/U0Pyumuo4MAJm5vtOy9qRjg=', NULL, NULL),
(22, 'tTo0puuL1zvez+w+1gYpRQ==', 'pXjocBEuoN6axqNIFIGkWw==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'KupZvcMTgYsXYGVjGk6/U0Pyumuo4MAJm5vtOy9qRjg=', NULL, NULL),
(23, 'HOTwLcvNkxqDyyxI3OeWeQ==', '8EAFS+M8GNLvy/fVoRPWZg==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=', 'HOTwLcvNkxqDyyxI3OeWeQ==', NULL, NULL),
(31, 'CvBxuqF9eSg6iWV2WUad7NzS1LKitzBaP/xVPWIVjjs=', 'zJCCq7tUgbnH4tCZbGwy6A==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA==', 'lLy5e53wlYhlgg8AIDw6Tw==', 'X9mtC38qm9gTOYsMJRsheA==', 'cTeLycZFqRGmueCet9tdQw==');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `front_img` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`id`, `title`, `front_img`, `img1`, `img2`, `img3`, `description`) VALUES
(5, 'uwAknZo+AfsRdaQ9XbAAxg==', 'qA5WI7zfjYHcbaGJKTnRSH+6MJEiSyMiXl52w1GSnIc=', '5qMPIrY2GzCBUnSS4bsmVkTPC8EZAm+CHrYGlna2MU0=', 'NVN1sRHFfe7T7WT3cHS/ABuC0FkUnFSzNtM5aOoqsA0=', 'xjoDQnqI7XHNCaTwTvKGD5OM2rDScxA7gFJ67sz/eDE=', 'nLj7R30EWac/CrA/OdyUenEvXycdLQ8UPr9RxF3d2bvyDO+11vbBxRSb2wLxTFTIremr6Jzd2OMVKnM1dY3vyxkJ2IgB3Z4BqW/9ohHLB9aq484+IYHEH6j5Z4hfX1+lhrU3ZTMbcSeJEn0HwBH1weTS3EbcKmrknlE4mkeDV7z39/PHG+wtMH9QBaoFFWY3CuIV9P3yC4eXiYBklSD/hfmshBBBhHgjfn3/2yZr0BdfjEdXU01Euiw6KgkP9YFNtIMv+IUhyiZf2kIPnWob6dRwaxMJGJKwHeDWnXNzlZGtIhFeUYsZyR9X9DXG4BY/ke+n1c8L/Ai/KLZyrUaBe9rVlR9+HQm4EI0G+pIjeL+iRnznqMbOd2mxaqcmnjWQNw6UFXr1pSYeQBcvhGslfA=='),
(13, 'TnGkcz0ShmULgi6QwSp3dg==', 'jp/Aq5MWKMHsv0Mt6gFU6K7iBSKohePu39hfcgOiVPw=', '3CDn++vYsiR4KXBRs8Mbsj0PvekhoJmuEnZ1GbRdueg=', 'KfjZVCfrjGXuGIgrrpPhXi0fS30wUCCO4kGNhnJbwVE=', 'GwGEWdrJR8W9+v7iBvrjl8db06KYtIWaEy5AR17PCtg=', 'V4pPKb7kkKfoyWB+Vo5DFHbDDj3wO/4oKvh4mp3bd5uTG0uueCxjaXAPvSCL1//QuLDatfx3xrCJgDvUmMt2mVhHFDU7+BVLCBSZ6SN3CkPtj3oVPIn/i8hby9eJujLjD9d09FodTYO/cchE3cCfT51e0m2/Q9gpRF2RMpk94S5fDbcbQHkDljmSXOndRkhKUGoABdUxaPemTGcg7HEFyvrTKQ4ccNAaTJkL8X8Mw4J1HQR7+pul+YWUYYJzcjLsJSm7WaxaKFvGODyvh7uEIgJikIIHSrhQd5cBZcLa4hQvU+G1QkmbT/i0bZbwyK9yOm3ZAmDQUrU465sXgt1vQuHiuwbAalPpbgTT7rOBNBgKHORrvm1bURWY/fooPKZd+whMAeRVeBbgQdmzMKeZFkLrWkMtq2hsltga57ubH1kURURa89cIDaRZvsyowOIw'),
(12, 'B/N/p/ZwTS8Opeyq6DZRWA==', 'Xs+EHkiTnjw6bwUw79Jwj5MYkEnAevZsY5TGQlirkR0=', '4xMpYZJZNHJ2U2rqnfQ96cmWrFy+v2iHRCsUNCxLsNA=', 'P9OU6/sGGj4VKgFrPoxEn4kgVzmScdmk26hbaRUjv/s=', 'fkLjSCK4frmzzasmQyKMvNaGQB54EG4A1+IfLt3BCEY=', 'AcU2Rt2Da1o8mc1P4Zbare5GwUbpq8MJP75c8Iv6qrB9EWhOG/rjMEsdBJ6bcw8uLVtpe+8dkPHiX1tsWHQWOPSV1aYJUz+J9HKo1pOxUcTEnyhCTBKJg2t2H6GqRJeOnjs8fSwifIegdGC71JNesLrd+c5Bq8gjxKKdRLNxoHJ5Q2OuVIUHNVNeNig9rPUkhq3IQJGgxiWaJrYce7o3rDzi3A63Jn052TBP82Np4fI7aluMkFW7+eCpTsM2Wjgal3nk5ZLfoyU80h/pAPehAw==');

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `slides`
--

INSERT INTO `slides` (`id`, `img`) VALUES
(1, 'pLV//EJAL86rcVIyHdVBeQ=='),
(2, 'yO1Bk35ktZehgG3U1PBi0A=='),
(4, 'dyt82b+O9Bi3/lrewAqHsQ==');

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category`) VALUES
(1, 'lLy5e53wlYhlgg8AIDw6Tw==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=='),
(2, 'dBA/meYn7PHgv1WyWRICIA==', 'C3LfaivSCCEds54zEHP0iA== & nbgTkAEMCjeHcdQqHgPnFA=='),
(3, 'qt+7mwptfjhSOjbRwaAALA==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM='),
(4, '7nCNBXpgAU/ytdfkXj4H0Q==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM='),
(5, '/7BB1gunnMQ1DI3C6i2Sbg==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM='),
(6, 'HOTwLcvNkxqDyyxI3OeWeQ==', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM='),
(7, 'KupZvcMTgYsXYGVjGk6/U0Pyumuo4MAJm5vtOy9qRjg=', 'HoL3fmCdWsD1AMbQHmzPxcGc6VYcm5FsQg8zT3CmQJM=');

-- --------------------------------------------------------

--
-- Structure de la table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`id`, `name`, `category`) VALUES
(1, 'X9mtC38qm9gTOYsMJRsheA==', 'lLy5e53wlYhlgg8AIDw6Tw=='),
(2, 'Q2ZCZyjPCLviFYfDlBdyIw==', 'lLy5e53wlYhlgg8AIDw6Tw=='),
(3, '+Wl0Ep6O1cQrTCRVI+NNJg==', 'lLy5e53wlYhlgg8AIDw6Tw=='),
(4, 'k43U1mp42VQhhpB0yk7clQ==\r\n', 'lLy5e53wlYhlgg8AIDw6Tw=='),
(5, 'R6hmZ96MiUuY4/QIM5i8jQ==', 'dBA/meYn7PHgv1WyWRICIA=='),
(6, 'M6bskHTm3m4HwzjR7S3mJQ==', 'dBA/meYn7PHgv1WyWRICIA=='),
(7, 'B7LtM/bQAlrAIRClP51I8g==', 'dBA/meYn7PHgv1WyWRICIA==');

-- --------------------------------------------------------

--
-- Structure de la table `sub_sub_sub_category`
--

CREATE TABLE `sub_sub_sub_category` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sub_sub_sub_category`
--

INSERT INTO `sub_sub_sub_category` (`id`, `name`) VALUES
(1, 'cTeLycZFqRGmueCet9tdQw=='),
(2, 'eCWNwuLvJ1VSYijmDvox6w=='),
(3, 'SmAWO6nts3GgfIY8SE09Sg=='),
(4, 'x3BcwQ/ljatB6FNwPtl16A=='),
(5, 'b6uTI0s0k7oVLai02BtI0w=='),
(6, 'vAxTr6OsrFSx5Q1qQSKO2w==');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sub_sub_sub_category`
--
ALTER TABLE `sub_sub_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `sub_sub_sub_category`
--
ALTER TABLE `sub_sub_sub_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
