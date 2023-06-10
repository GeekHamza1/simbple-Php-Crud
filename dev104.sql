
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--Hamza Khadim 


CREATE TABLE `catégorie` (
  `Code_catégorie` int(11) NOT NULL,
  `intitulé` varchar(60) DEFAULT NULL,
  `domaine` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;





CREATE TABLE `produit` (
  `Code_produit` int(11) NOT NULL,
  `Désignation` varchar(60) DEFAULT NULL,
  `Prix_unitaire` varchar(50) DEFAULT NULL,
  `Quantité_stock` int(11) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `Code_catégorie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `ville` (
  `code_ville` int(11) NOT NULL,
  `nom_ville` varchar(60) DEFAULT NULL,
  `code_postal` int(11) DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`Code_catégorie`);

ALTER TABLE `produit`
  ADD PRIMARY KEY (`Code_produit`),
  ADD KEY `Code_catégorie` (`Code_catégorie`);


ALTER TABLE `ville`
  ADD PRIMARY KEY (`code_ville`);

ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`Code_catégorie`) REFERENCES `catégorie` (`Code_catégorie`);
COMMIT;
