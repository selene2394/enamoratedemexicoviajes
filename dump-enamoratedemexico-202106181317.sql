-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: enamoratedemexico
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `disponibilidadhotel`
--

DROP TABLE IF EXISTS `disponibilidadhotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disponibilidadhotel` (
  `nombre_hotel` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  `fecha_salida` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disponibilidadhotel`
--

LOCK TABLES `disponibilidadhotel` WRITE;
/*!40000 ALTER TABLE `disponibilidadhotel` DISABLE KEYS */;
INSERT INTO `disponibilidadhotel` VALUES ('Barceló','2021-06-18','2021-06-20'),('Xquenda Huatulco Spa','2021-06-20','2021-06-27'),('Tesoro Los cabos','2021-06-21','2021-06-28'),('Barceló','2021-06-22','2021-06-26'),('Tesoro Los cabos','2021-06-27','2021-08-27');
/*!40000 ALTER TABLE `disponibilidadhotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturacion`
--

DROP TABLE IF EXISTS `facturacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facturacion` (
  `nombre_completo` varchar(100) DEFAULT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `razon_social` varchar(100) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `num_exterior` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `cp` varchar(100) DEFAULT NULL,
  `delegacion_municipio` varchar(100) DEFAULT NULL,
  `ciudad_localidad` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  `fecha_salida` varchar(100) DEFAULT NULL,
  `monto_sin_iva` varchar(100) DEFAULT NULL,
  `cantidad_total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturacion`
--

LOCK TABLES `facturacion` WRITE;
/*!40000 ALTER TABLE `facturacion` DISABLE KEYS */;
INSERT INTO `facturacion` VALUES ('Pedro lopez','pedro Lopez','pedro lopez ','nacozari','5264','pedregal ','78951','puebla ','puebla ','puebla ','mexico ','lopez@gmail.com','2147483647','2021-06-18','2021-06-20','4960','5753.6'),('Pedro lopez','pedro Lopez','pedro lopez ','nacozari','5264','pedregal ','78951','puebla ','puebla ','puebla ','mexico ','lopez@gmail.com','2147483647','2021-06-18','2021-06-20','4960','5753.6'),('gerardo gomez','gERA152437MP','dzh','15 NORTE','12','QQ','12578','TT','TT','TT','TT','g@gmail.com','2147483647','2021-06-27','2021-08-27','400770','464893.2');
/*!40000 ALTER TABLE `facturacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `habitaciones` (
  `tipo_habitacion` varchar(100) DEFAULT NULL,
  `id_paquete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitaciones`
--

LOCK TABLES `habitaciones` WRITE;
/*!40000 ALTER TABLE `habitaciones` DISABLE KEYS */;
INSERT INTO `habitaciones` VALUES ('view_garden',1),('ocean_view',2),('delux',3);
/*!40000 ALTER TABLE `habitaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoteles`
--

DROP TABLE IF EXISTS `hoteles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoteles` (
  `nombre_hotel` varchar(100) DEFAULT NULL,
  `id_playas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoteles`
--

LOCK TABLES `hoteles` WRITE;
/*!40000 ALTER TABLE `hoteles` DISABLE KEYS */;
INSERT INTO `hoteles` VALUES ('	Tesoro Los cabos',1),('Nabu Hotel Los Cabos',1),('Garza Blanca Los Cabos',1),('Boca China Inn & Suites ',2),('Hotel Alameda Express ',2),('Holiday Inn Matamoros',2),('Xquenda Huatulco Spa ',3),('Barceló ',3),('Celeste Beach Residences ',3),('Hotel Casa Maya ',4),('Krysta',4),('Hard Rock Hotel ',4);
/*!40000 ALTER TABLE `hoteles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paquetes` (
  `tipo_paquete` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes`
--

LOCK TABLES `paquetes` WRITE;
/*!40000 ALTER TABLE `paquetes` DISABLE KEYS */;
INSERT INTO `paquetes` VALUES ('paquete_convenio_DASC',1),('paquete_basico',2),('paquete_intermedio',3),('paquete_lux',4);
/*!40000 ALTER TABLE `paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playas`
--

DROP TABLE IF EXISTS `playas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playas` (
  `id` int(11) DEFAULT NULL,
  `nombre_playa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playas`
--

LOCK TABLES `playas` WRITE;
/*!40000 ALTER TABLE `playas` DISABLE KEYS */;
INSERT INTO `playas` VALUES (1,'cabo_san_lucas'),(2,'playa_bagdad'),(3,'huatulco'),(4,'cancun');
/*!40000 ALTER TABLE `playas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `nombre_completo` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `numero_celular` int(10) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES ('Pedro lopez','lopez@gmail.com',2147483647,'pedro','$2y$10$WfqAAi95iVbMv.NnplgFJezgAiyHV2x8XLkkrHpeOFFUW3iKJkN7.'),('Marian Ramirez','mar@gmail.com',2147483647,'mar','$2y$10$8JE/Ha2cS.yCTeoJ0phT/u8QlTlLau1A4jjc1McIOuv66bRR1i3Va'),('gerardo gomez','g@gmail.com',2147483647,'gerardo99999999','$2y$10$nQDfdqEpYdUbiadK1.LlMehe35Yl27WDaF6E/4KZcS0LQ/GmK9zcu');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservaciones` (
  `usuario` varchar(100) DEFAULT NULL,
  `playa` varchar(100) DEFAULT NULL,
  `hotel` varchar(100) DEFAULT NULL,
  `fecha_ingreso` varchar(100) DEFAULT NULL,
  `fecha_salida` varchar(100) DEFAULT NULL,
  `adultos` varchar(100) DEFAULT NULL,
  `ninos` varchar(100) DEFAULT NULL,
  `paquete` varchar(100) DEFAULT NULL,
  `tipo_habitacion` varchar(100) DEFAULT NULL,
  `no_referencia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservaciones`
--

LOCK TABLES `reservaciones` WRITE;
/*!40000 ALTER TABLE `reservaciones` DISABLE KEYS */;
INSERT INTO `reservaciones` VALUES ('pedro','3','Barceló','2021-06-18','2021-06-20','2','2','0','delux','pedro748210'),('mar','3','Xquenda Huatulco Spa','2021-06-20','2021-06-27','2','1','1','view_garden','mar633632'),('mar','1','Tesoro Los cabos','2021-06-21','2021-06-28','2','1','1','view_garden','mar268469'),('mar','3','Barceló','2021-06-22','2021-06-26','2','1','2','ocean_view','mar962087'),('gerardo99999999','1','Tesoro Los cabos','2021-06-27','2021-08-27','2','0','3','delux','gerardo99999999187720');
/*!40000 ALTER TABLE `reservaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'enamoratedemexico'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-18 13:17:42
