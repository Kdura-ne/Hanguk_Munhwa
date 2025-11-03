-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.4.3 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para hangukmunhwa
CREATE DATABASE IF NOT EXISTS `hangukmunhwa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hangukmunhwa`;

-- Copiando estrutura para tabela hangukmunhwa.quiz
CREATE TABLE IF NOT EXISTS `quiz` (
  `quizId` int NOT NULL AUTO_INCREMENT,
  `particId` int NOT NULL,
  `quizData` datetime DEFAULT CURRENT_TIMESTAMP,
  `quizScore` int NOT NULL,
  `quizAnswers` text,
  PRIMARY KEY (`quizId`),
  KEY `particId` (`particId`),
  CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`particId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela hangukmunhwa.quiz: ~3 rows (aproximadamente)
REPLACE INTO `quiz` (`quizId`, `particId`, `quizData`, `quizScore`, `quizAnswers`) VALUES
	(6, 4, '2025-11-03 05:02:04', 2, '{"q1":"d","q2":"c","q3":"a","q4":"a","q5":"a","q6":"b","q7":"a","q8":"a","q9":"b","q10":"c"}'),
	(7, 5, '2025-11-03 05:04:56', 3, '{"q1":"a","q2":"c","q3":"c","q4":"b","q5":"a","q6":"a","q7":"c","q8":"c","q9":"b","q10":"b"}'),
	(8, 6, '2025-11-03 05:07:17', 4, '{"q1":"c","q2":"b","q3":"c","q4":"d","q5":"a","q6":"b","q7":"c","q8":"a","q9":"c","q10":"c"}');

-- Copiando estrutura para tabela hangukmunhwa.user
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userNome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userSenha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela hangukmunhwa.user: ~3 rows (aproximadamente)
REPLACE INTO `user` (`userId`, `userNome`, `userEmail`, `userSenha`) VALUES
	(4, 'thor', 'gostosadaporra@gmail.com', '$2y$10$SEnciThCnFtwv1cBeN4UxeQn3qcqLXp8791DUHmRS2sgLnc5SPRU6'),
	(5, 'amostradinho', 'mandaissoaqui@g', '$2y$10$fzKIJJaLuGhA.hZHe3HP9OIbq0MkWVwSAbBueENi7Vzy1qAWIMP.y'),
	(6, 'asdas', 'potes@gmail.com', '$2y$10$J6PQFT9rMD4jHGf28prxaOSxvXVIjyonmiszxWVn9eg0Fvt8AMG6m');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
