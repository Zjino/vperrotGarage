-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 fév. 2024 à 02:49
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vpgarage`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepass` varchar(255) NOT NULL,
  `rôle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepass`, `rôle`) VALUES
(77, 'vperrot', 'vperrot@gmail.com', 'vperrot976', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `annee`, `km`, `prix`, `description`) VALUES
(52, ' https://previews.dropbox.com/p/thumb/ACK1ilcr3OAjJG2duQdNiO16pKHJBCcPbVvSEc2FQghPhBvor2dKY5hcHMuf6knSDhuZknr215fqi168PnAT7a3Erno4Yh-htT2mZdKc6yxk2trFCsEylTt2QDFnkxQN8bBmN9TX2nEQxypNsTWzFUqc60CY-P3drIaxL1qJ5LU9P7n13-j7JngzABfJ3Q3rwFy5pcPYaFuBpo-YUYnxCNmjgFoQlJ6AZhplBikRMUydqKn9U-cD6lCKiK-eKdbQ-8lUltApPIF4_Xtb6LzxV-Fq-T5Xh2k8jJDBYM31Z1SbMs8lUSKdefANrXeTNEuOJyCFTr5-WO7nrolj6jRtEN_m/p.jpeg', 'MG MGB', 1976, 100000, 50000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.'),
(53, 'https://previews.dropbox.com/p/thumb/ACLW7U7lukiHXYq1J8Ee5HxB_YA9D4Ppz8BmBE9bmJYJFYgn8gPaGUf_WNdZhZHXPg43hpwtMOx6-5qhensaXGjXD97-yIiH4SslFvCKPD19fNvAEZ3ufv3Xg0nriyVU_zVSXPgqNXXESO-uDygAElbQVMzp22ZgWyLP9hWe7d_mmwdMic2SQZz_QZg6mYsVTPty-NTC6HS5XB-KB2hu4pHbmx_5t9UriSmSj-N5IHvosyFWLb4Bcxvl1Z3nLcAg1dkAwkYzFy9ZX2wlUTgC-gSJtCuv-iO3zRwYT3QAznmcK0Rmi8dZRfYhIRHTkDJ9Oh_zTjXBzojqzg7TqQv-b7rTKpBWZIAuIADEdH2_9l7WkQ/p.jpeg', 'Dodge Charger', 1978, 80000, 60000, 'Le garage automobile, lieu dédié à l&#039;entretien de vos véhicules, offre l&#039;espace idéal pour réaliser vos besoins mécaniques. Que votre voiture nécessite une réparation, une mise au point ou simplement un entretien régulier, vous trouverez ici tous les services nécessaires pour répondre à vos exigences.\r\n'),
(99, 'https://images.unsplash.com/photo-1548627985-099111669aa7?w=500&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA0fHx2aW50YWdlJTIwY2FyfGVufDB8fDB8fHww', 'Cadillac Série 62', 1965, 50000, 150000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.'),
(100, 'https://previews.dropbox.com/p/thumb/ACK_Q07ztAFPND01Wip73izLzg1mRo4EZJc-c5YBvc9-BEa6h_5MmHKCv286fkWw7SRELL_EA27O9SBbs7WtuGNhA9vYIUC8Zs9MB6eg-52iBItaTZoH56nJFmxNxiMyZ5Yv1Z8k-n4HHNJ_aDTI5ThCuoBnQeA-MmkB7Uk1_dru0kPiiYfuPHjmAG8JRvF7oBxFJVHFpdD6zT9qZ-LJaQ1ImM_xlOr6wAbi5kyTq47RDi9XaGq5kso3EyUtvRhpJXPfYVpMP-49yqnFGeHctPGW-WszQkR85FUcRKsQQhP5kFgJQJdjznVxKI3G1Z7B9dUB86cKQdho6Lz8JacgEPFe/p.jpeg', 'Volkswagen Coccinelle', 1979, 70000, 200000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.'),
(101, 'https://previews.dropbox.com/p/thumb/ACJ3ZxcDlmkxydhEirlOpuMHuWViGjDumJdvGTVZogjtHFl14hxObpiTnuJ9Vu66dqh-FzAc3wH5FrUHfTJhT4d-Tn_w4SvXp19NIVX83KbaWClAJYKZF9YevMjyXM2VQoU6CPlIC2tQUrBsf5OcIZwIGXiZK66DOMpd8L5c0kWLwNfiTVWsvizr2hZk7MjBJde_b3u_Bz3XaNtkTEGFNRBcOtYtxSeGdNBH8Hyi2jvECXeB4eYwMFZE6Ki9SG-a7wpwuZvoCZFs2koT1SkTnXKVt6j0QaM6qXN0n6n5pLQRKOw6g2-BtyqMUiNfj2ACESNPJuAKTEEeVHdnDpCCRBb7/p.jpeg', 'Porsche 356', 1976, 50000, 1400000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.'),
(102, 'https://previews.dropbox.com/p/thumb/ACL4R3cBY72I0FXZVvS8zgcPhk4bAmi0WEeqhc0_VtzidNsJ5sskMu9gt2ILCfVT-THnkoeX29HoXwxcgQukwmy8i7twCjf2BZU1f0fAb8_IaOKroEvh346k9TZ0ZS1qs2ylkV-kN6EpsK3EDoagAdc2mjd7Z9ZKXIWYh5K3zW20xWalx5PWQFRGreGzflmTNTvMFqtxAykzdII0zRPaDHPEKQqUtTLN8VdWDlrkeVxFYFGh27cLgI6UfIDXwfaeEx-PV5xBdSHZR5B6Mp9iIw0RW9lQ6gDP_QUmA00AzU9JTN58gzch0Tr6mDXH2Ii71z0IsD39xZXPxLAllocDCCU7/p.jpeg', 'Volkswagen Combi', 1972, 90000, 80000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
