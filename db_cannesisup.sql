-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table cannesisup.activite : 27 rows
/*!40000 ALTER TABLE `activite` DISABLE KEYS */;
INSERT INTO `activite` (`id`, `nom`, `duree`, `nbre_max`) VALUES
	(1, 'Charisme et Leadership', 50, 12),
	(2, 'Ping-Pong', 50, 12),
	(3, 'Référencement Google par BRAINY UP', 50, 12),
	(4, 'Quiz Cinéma par ADASTRA FILMS', 50, 12),
	(5, 'Branding : comment valoriser votre marque par COULEUR VELVET', 50, 12),
	(6, 'Storytelling', 50, 12),
	(7, 'Gastronomie azuréenne - Live cooking par MONPANIERBLEU.COM', 50, 12),
	(8, 'Visite guidée : "Le Masque de fer : un secret d\'Etat ?"', 50, 12),
	(9, 'Yoga par ETOILES DES SABLES', 50, 12),
	(10, 'Biodiversité & Environnement par le CPIE', 50, 12),
	(11, 'Atelier des sens par LES CONFISERIES FLORIAN', 50, 12),
	(12, 'Poker par ALPHA CONSEILS', 50, 12),
	(13, 'Massages (atelier contre 1 jeton)', 50, 12),
	(14, 'Basket par O\'SOL', 50, 12),
	(15, 'Pétanque par BLUE BEACON', 50, 12),
	(16, 'Kayak', 50, 12),
	(17, 'Paddle', 50, 12),
	(18, 'Tir à l\'arc', 50, 12),
	(19, 'Parcours de santé par ENEDIS et CROSSFIT CANNES', 50, 12),
	(20, 'Assurance par GAN', 50, 12),
	(21, 'Comptabilité Gestion par PEPIT', 50, 12),
	(22, 'Météo : Selerys', 50, 12),
	(23, 'Réseaux Sociaux', 50, 12),
	(24, 'Création et quizz parfum par MOLINARD et ROBERTET', 50, 12),
	(25, 'Whimsifoil : volez au-dessus de l\'eau !', 50, 12),
	(26, 'Droit de l\'innovation TBC', 50, 12),
	(27, 'Casse-tête par Enigm\'art', 50, 12);
/*!40000 ALTER TABLE `activite` ENABLE KEYS */;

-- Listage des données de la table cannesisup.participant : 14 rows
/*!40000 ALTER TABLE `participant` DISABLE KEYS */;
INSERT INTO `participant` (`id`, `nom`, `prenom`, `email`, `entreprise`, `fonction`, `alimentation`, `dodo`, `afterwork`) VALUES
	(1, 'Dubois', 'Karima', 'qhkjhd@yahoo.com', 'Simpl', ' "venduese" "vegfnfx"', ' "sur plfgff"', ' "afterffffwork"', ''),
	(2, 'Nsdgsfg', 'Michel', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "vegeterian"', ' "sur place"', ' "afterwork"'),
	(3, 'Nnj', 'Thomas', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "not vegeterian"', ' "sur place"', ' "afterwork"'),
	(4, 'Naaaaa', 'maria', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "not vegeterian"', ' "sur place"', ' "afterwork"'),
	(5, 'participant', 'Dubois', 'Karima', 'qhkjhd@yahoo.com', 'Simpl', ' "venduese" "vegfnfx"', ' "sur plfgff"', ' "afterffffwork"'),
	(6, 'participant', 'Nsdgsfg', 'Michel', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "vegeterian"', ' "sur place"'),
	(7, 'participant', 'Nnj', 'Thomas', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "not vegeterian"', ' "sur place"'),
	(8, 'participant', 'Naaaaa', 'maria', 'tungalag.natsagdorj@gmail.com', 'Simplon', ' "gerante"', ' "not vegeterian"', ' "sur place"'),
	(63, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION'),
	(64, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION'),
	(65, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION'),
	(74, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION'),
	(73, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION'),
	(72, 'Masse', 'Chris', ' chrisfmasse@gmail.com', 'Space-Time Master', 'Prt', NULL, '&nbsp', 'ActivitÃ©s + Afterwork (Ã  partir de 9h30 jusqu\'Ã  23h) - SELECTIONNEZ POUR FAIRE AFFICHER LA REDUCTION');
/*!40000 ALTER TABLE `participant` ENABLE KEYS */;

-- Listage des données de la table cannesisup.plages_horaires : 1 rows
/*!40000 ALTER TABLE `plages_horaires` DISABLE KEYS */;
INSERT INTO `plages_horaires` (`id`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
	(1, '11H-12H', '13H-14H', '14H-15H', '15H-16H', '16H-17H');
/*!40000 ALTER TABLE `plages_horaires` ENABLE KEYS */;

-- Listage des données de la table cannesisup.resultat : 0 rows
/*!40000 ALTER TABLE `resultat` DISABLE KEYS */;
/*!40000 ALTER TABLE `resultat` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
