-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cuk_score
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrador` (
  `CI` int(8) NOT NULL,
  PRIMARY KEY (`CI`),
  CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (54445913),(54763804),(54856065),(56215677);
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `idCategoria` int(10) NOT NULL,
  `Genero` enum('Masculino','Femenino') DEFAULT NULL,
  `Equipo` enum('Individual','Grupal(3)') DEFAULT NULL,
  `Edad` enum('12-13','14-15','16-17','Mayores') DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (0,'Masculino','Individual','12-13');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coach`
--

DROP TABLE IF EXISTS `coach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coach` (
  `CI` int(8) NOT NULL,
  `CI_P` int(8) DEFAULT NULL,
  PRIMARY KEY (`CI`),
  KEY `CI_P` (`CI_P`),
  CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`),
  CONSTRAINT `coach_ibfk_2` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coach`
--

LOCK TABLES `coach` WRITE;
/*!40000 ALTER TABLE `coach` DISABLE KEYS */;
INSERT INTO `coach` VALUES (12345678,NULL);
/*!40000 ALTER TABLE `coach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juez`
--

DROP TABLE IF EXISTS `juez`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `juez` (
  `N°Juez` int(1) NOT NULL,
  PRIMARY KEY (`N°Juez`),
  CONSTRAINT `limiteJuez` CHECK (`N°Juez` >= 1 and `N°Juez` <= 7)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juez`
--

LOCK TABLES `juez` WRITE;
/*!40000 ALTER TABLE `juez` DISABLE KEYS */;
INSERT INTO `juez` VALUES (1),(2),(3),(4),(5),(6),(7);
/*!40000 ALTER TABLE `juez` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kata`
--

DROP TABLE IF EXISTS `kata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kata` (
  `idKata` int(3) NOT NULL,
  `nombreKata` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idKata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kata`
--

LOCK TABLES `kata` WRITE;
/*!40000 ALTER TABLE `kata` DISABLE KEYS */;
/*!40000 ALTER TABLE `kata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participante`
--

DROP TABLE IF EXISTS `participante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participante` (
  `CI` int(8) NOT NULL,
  `Cinturon` enum('Rojo','Azul') DEFAULT NULL,
  `Escuela` varchar(255) DEFAULT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CI`),
  CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participante`
--

LOCK TABLES `participante` WRITE;
/*!40000 ALTER TABLE `participante` DISABLE KEYS */;
/*!40000 ALTER TABLE `participante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasa`
--

DROP TABLE IF EXISTS `pasa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pasa` (
  `idTorneo` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  UNIQUE KEY `idTorneo` (`idTorneo`),
  KEY `idCategoria` (`idCategoria`),
  CONSTRAINT `pasa_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`),
  CONSTRAINT `pasa_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasa`
--

LOCK TABLES `pasa` WRITE;
/*!40000 ALTER TABLE `pasa` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `persona` (
  `CI` int(8) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `Fnac` date DEFAULT NULL,
  PRIMARY KEY (`CI`),
  UNIQUE KEY `Correo` (`Correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (12345678,'Jose','Perez','jose.perez2020@gmail.com','1000-01-01'),(33333333,'Fulano','de Tal',NULL,'2023-09-07'),(54445913,'Ezequiel','Soriano','ezequielsoriano2004@gmail.com','2004-08-30'),(54763804,'Diego','Romero','diego.romer70@gmail.com','2005-01-01'),(54856065,'Thomas','Islas','islas.thomas115@gmail.com','2005-01-08'),(56215677,'Martin','Leites','martinwleites@gmail.com','2005-07-20');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntua`
--

DROP TABLE IF EXISTS `puntua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puntua` (
  `N°Juez` int(11) DEFAULT NULL,
  `Valor` decimal(2,1) DEFAULT NULL,
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(3) DEFAULT NULL,
  KEY `N°Juez` (`N°Juez`),
  KEY `CI_P` (`CI_P`),
  KEY `idKata` (`idKata`),
  CONSTRAINT `puntua_ibfk_1` FOREIGN KEY (`N°Juez`) REFERENCES `juez` (`N°Juez`),
  CONSTRAINT `puntua_ibfk_2` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  CONSTRAINT `puntua_ibfk_3` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`),
  CONSTRAINT `limiteValor` CHECK (`Valor` >= 0.0 and `Valor` <= 10.0 and (`Valor` - 5.0) MOD 0.1 = 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntua`
--

LOCK TABLES `puntua` WRITE;
/*!40000 ALTER TABLE `puntua` DISABLE KEYS */;
/*!40000 ALTER TABLE `puntua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realiza`
--

DROP TABLE IF EXISTS `realiza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `realiza` (
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(3) DEFAULT NULL,
  KEY `CI_P` (`CI_P`),
  KEY `idKata` (`idKata`),
  CONSTRAINT `realiza_ibfk_1` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  CONSTRAINT `realiza_ibfk_2` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realiza`
--

LOCK TABLES `realiza` WRITE;
/*!40000 ALTER TABLE `realiza` DISABLE KEYS */;
/*!40000 ALTER TABLE `realiza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ring`
--

DROP TABLE IF EXISTS `ring`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ring` (
  `idRing` int(10) NOT NULL,
  PRIMARY KEY (`idRing`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ring`
--

LOCK TABLES `ring` WRITE;
/*!40000 ALTER TABLE `ring` DISABLE KEYS */;
/*!40000 ALTER TABLE `ring` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torneo`
--

DROP TABLE IF EXISTS `torneo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `torneo` (
  `idTorneo` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTorneo` varchar(50) DEFAULT NULL,
  `Fcreacion` date DEFAULT NULL,
  `Estado` enum('Proximo','En Curso','Finalizado') DEFAULT NULL,
  `Ronda` int(3) DEFAULT NULL,
  PRIMARY KEY (`idTorneo`),
  CONSTRAINT `limiteRonda` CHECK (`Ronda` >= 1 and `Ronda` <= 20)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torneo`
--

LOCK TABLES `torneo` WRITE;
/*!40000 ALTER TABLE `torneo` DISABLE KEYS */;
INSERT INTO `torneo` VALUES (4,'Test111','0000-00-00','En Curso',NULL),(5,'test300','2023-09-10','Finalizado',NULL);
/*!40000 ALTER TABLE `torneo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usa`
--

DROP TABLE IF EXISTS `usa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usa` (
  `idRing` int(11) DEFAULT NULL,
  `CI_P` int(8) DEFAULT NULL,
  `idKata` int(3) DEFAULT NULL,
  KEY `idRing` (`idRing`),
  KEY `CI_P` (`CI_P`),
  KEY `idKata` (`idKata`),
  CONSTRAINT `usa_ibfk_1` FOREIGN KEY (`idRing`) REFERENCES `ring` (`idRing`),
  CONSTRAINT `usa_ibfk_2` FOREIGN KEY (`CI_P`) REFERENCES `participante` (`CI`),
  CONSTRAINT `usa_ibfk_3` FOREIGN KEY (`idKata`) REFERENCES `kata` (`idKata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usa`
--

LOCK TABLES `usa` WRITE;
/*!40000 ALTER TABLE `usa` DISABLE KEYS */;
/*!40000 ALTER TABLE `usa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `tipoUser` enum('Administrador','Coach','Juez') DEFAULT NULL,
  `contraseñaUser` varchar(255) DEFAULT NULL,
  `CI` int(8) DEFAULT NULL,
  `N°Juez` int(1) DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `CI` (`CI`),
  UNIQUE KEY `N°Juez` (`N°Juez`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `persona` (`CI`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`N°Juez`) REFERENCES `juez` (`N°Juez`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Administrador','1234',56215677,NULL),(2,'Administrador','1234',54856065,NULL),(3,'Administrador','1234',54763804,NULL),(4,'Administrador','1234',54445913,NULL),(5,'Juez','1234',NULL,1),(6,'Juez','1234',NULL,2),(7,'Juez','1234',NULL,3),(8,'Juez','1234',NULL,4),(9,'Juez','1234',NULL,5),(10,'Juez','1234',NULL,6),(11,'Juez','1234',NULL,7),(14,'Coach','1234',12345678,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utiliza`
--

DROP TABLE IF EXISTS `utiliza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utiliza` (
  `idTorneo` int(11) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `idRing` int(11) DEFAULT NULL,
  KEY `idTorneo` (`idTorneo`),
  KEY `idCategoria` (`idCategoria`),
  KEY `idRing` (`idRing`),
  CONSTRAINT `utiliza_ibfk_1` FOREIGN KEY (`idTorneo`) REFERENCES `torneo` (`idTorneo`),
  CONSTRAINT `utiliza_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`),
  CONSTRAINT `utiliza_ibfk_3` FOREIGN KEY (`idRing`) REFERENCES `ring` (`idRing`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utiliza`
--

LOCK TABLES `utiliza` WRITE;
/*!40000 ALTER TABLE `utiliza` DISABLE KEYS */;
/*!40000 ALTER TABLE `utiliza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifica`
--

DROP TABLE IF EXISTS `verifica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `verifica` (
  `CI_C` int(8) DEFAULT NULL,
  `CI_A` int(8) DEFAULT NULL,
  KEY `CI_C` (`CI_C`),
  KEY `CI_A` (`CI_A`),
  CONSTRAINT `verifica_ibfk_1` FOREIGN KEY (`CI_C`) REFERENCES `coach` (`CI`),
  CONSTRAINT `verifica_ibfk_2` FOREIGN KEY (`CI_A`) REFERENCES `administrador` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifica`
--

LOCK TABLES `verifica` WRITE;
/*!40000 ALTER TABLE `verifica` DISABLE KEYS */;
/*!40000 ALTER TABLE `verifica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-11  5:31:25
