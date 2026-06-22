/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.16-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: project_2
-- ------------------------------------------------------
-- Server version	10.11.16-MariaDB-ubu2204-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) unsigned DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) unsigned DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` uuid DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES
(1,'Resource','Role Created','Spatie\\Permission\\Models\\Role','Created',1,NULL,NULL,'{\"guard_name\":\"web\",\"name\":\"super_admin\",\"updated_at\":\"2026-06-01 22:24:32\",\"created_at\":\"2026-06-01 22:24:32\",\"id\":1}',NULL,'2026-06-01 22:24:32','2026-06-01 22:24:32'),
(2,'Resource','Role Created','Spatie\\Permission\\Models\\Role','Created',2,NULL,NULL,'{\"guard_name\":\"web\",\"name\":\"user\",\"updated_at\":\"2026-06-01 22:24:32\",\"created_at\":\"2026-06-01 22:24:32\",\"id\":2}',NULL,'2026-06-01 22:24:32','2026-06-01 22:24:32'),
(3,'Resource','User Created','App\\Models\\User','Created',1,NULL,NULL,'{\"email\":\"admin@admin.com\",\"name\":\"Super Admin\",\"updated_at\":\"2026-06-01 22:24:32\",\"created_at\":\"2026-06-01 22:24:32\",\"id\":1}',NULL,'2026-06-01 22:24:32','2026-06-01 22:24:32'),
(4,'Resource','User Created','App\\Models\\User','Created',2,NULL,NULL,'{\"email\":\"user@admin.com\",\"name\":\"User Account\",\"updated_at\":\"2026-06-01 22:24:33\",\"created_at\":\"2026-06-01 22:24:33\",\"id\":2}',NULL,'2026-06-01 22:24:33','2026-06-01 22:24:33'),
(5,'Resource','Special Request Created','App\\Models\\SpecialRequest','Created',1,NULL,NULL,'{\"full_name\":\"Andry Hakim\",\"email\":\"andry@gmail.com\",\"phone\":\"0822987890\",\"brand\":\"Nissan\",\"model\":\"GTR R-35 T-Spec\",\"year\":\"2024\",\"budget\":\"8000000000\",\"description\":\"special request dari saya Nissan Gtr r-35 nissmo keluaran terbaru NIK 2024\",\"updated_at\":\"2026-06-01 22:59:53\",\"created_at\":\"2026-06-01 22:59:53\",\"id\":1}',NULL,'2026-06-01 22:59:53','2026-06-01 22:59:53'),
(6,'Access','Super Admin logged in',NULL,'Login',NULL,'App\\Models\\User',1,'{\"ip\":\"172.23.0.1\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/148.0.0.0 Safari\\/537.36 Edg\\/148.0.0.0\"}',NULL,'2026-06-01 23:00:05','2026-06-01 23:00:05'),
(7,'Resource','Sell Car Request Created by Super Admin','App\\Models\\SellCarRequest','Created',1,'App\\Models\\User',1,'{\"full_name\":\"Andry Hakim\",\"email\":\"andry@gmail.com\",\"phone\":\"0822987890\",\"brand\":\"Porsche\",\"model\":\"718 Boxter\",\"year\":\"2022\",\"mileage\":\"3200\",\"expected_price\":\"5300000000\",\"description\":\".\",\"photos\":\"[\\\"sell-cars\\\\\\/axwKbFnqyEEKLInf60UatfPUKwdKEDZXBEIQd8mB.avif\\\"]\",\"updated_at\":\"2026-06-01 23:06:30\",\"created_at\":\"2026-06-01 23:06:30\",\"id\":1}',NULL,'2026-06-01 23:06:30','2026-06-01 23:06:30'),
(8,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',1,'App\\Models\\User',1,'{\"name\":\"General Service\",\"description\":\"Comprehensive vehicle inspection and routine maintenance to keep your car in optimal condition.\",\"updated_at\":\"2026-06-01 23:31:12\",\"created_at\":\"2026-06-01 23:31:12\",\"id\":1}',NULL,'2026-06-01 23:31:12','2026-06-01 23:31:12'),
(9,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',2,'App\\Models\\User',1,'{\"name\":\"Oli Change \",\"description\":null,\"updated_at\":\"2026-06-01 23:34:45\",\"created_at\":\"2026-06-01 23:34:45\",\"id\":2}',NULL,'2026-06-01 23:34:45','2026-06-01 23:34:45'),
(10,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',3,'App\\Models\\User',1,'{\"name\":\"Engine Tune Up\",\"description\":null,\"updated_at\":\"2026-06-02 00:09:03\",\"created_at\":\"2026-06-02 00:09:03\",\"id\":3}',NULL,'2026-06-02 00:09:03','2026-06-02 00:09:03'),
(11,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',4,'App\\Models\\User',1,'{\"name\":\"Brake Service\",\"description\":null,\"updated_at\":\"2026-06-02 00:09:28\",\"created_at\":\"2026-06-02 00:09:28\",\"id\":4}',NULL,'2026-06-02 00:09:28','2026-06-02 00:09:28'),
(12,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',5,'App\\Models\\User',1,'{\"name\":\"AC Service\",\"description\":null,\"updated_at\":\"2026-06-02 00:09:56\",\"created_at\":\"2026-06-02 00:09:56\",\"id\":5}',NULL,'2026-06-02 00:09:56','2026-06-02 00:09:56'),
(13,'Resource','Service Type Created by Super Admin','App\\Models\\ServiceType','Created',6,'App\\Models\\User',1,'{\"name\":\"Transmission Service\",\"description\":null,\"updated_at\":\"2026-06-02 00:10:21\",\"created_at\":\"2026-06-02 00:10:21\",\"id\":6}',NULL,'2026-06-02 00:10:21','2026-06-02 00:10:21'),
(14,'Resource','Car Brand Created by Super Admin','App\\Models\\CarBrand','Created',1,'App\\Models\\User',1,'{\"name\":\"Ferrari\",\"logo\":null,\"updated_at\":\"2026-06-02 00:16:55\",\"created_at\":\"2026-06-02 00:16:55\",\"id\":1}',NULL,'2026-06-02 00:16:55','2026-06-02 00:16:55'),
(15,'Resource','Car Created by Super Admin','App\\Models\\Car','Created',1,'App\\Models\\User',1,'{\"car_brand_id\":\"1\",\"name\":\"Ferrari\",\"type\":\"new\",\"year\":\"2020\",\"price\":\"13000000000\",\"mileage\":\"200\",\"transmission\":\"Automatic\",\"fuel_type\":\"F8 Spider\",\"color\":\"Yellow\",\"thumbnail\":\"cars\\/01KT23AJJWTWSDWTZ9J5BDV7XZ.jpg\",\"is_featured\":false,\"status\":\"available\",\"description\":\"<p>Engine: 3.9L V8 Twin-Turbocharged<\\/p><p>Transmission: 7-Speed F1 Dual-Clutch<\\/p><p>Horsepower: 720 CV\\/710HP<\\/p><p>Drive: Rear-Wheel Drive (RWD)<\\/p><p>0 to 100 km\\/h: 2.9 seconds<\\/p><p>Top Spped: 340 km\\/h<\\/p>\",\"slug\":\"ferrari-6a1dbfd17b21e\",\"updated_at\":\"2026-06-02 00:22:25\",\"created_at\":\"2026-06-02 00:22:25\",\"id\":1}',NULL,'2026-06-02 00:22:25','2026-06-02 00:22:25'),
(16,'Resource','Car Updated by Super Admin','App\\Models\\Car','Updated',1,'App\\Models\\User',1,'{\"is_featured\":false,\"updated_at\":\"2026-06-02 00:22:33\"}',NULL,'2026-06-02 00:22:33','2026-06-02 00:22:33'),
(17,'Resource','Car Updated by Super Admin','App\\Models\\Car','Updated',1,'App\\Models\\User',1,'{\"name\":\"Ferrari F8 Spider\",\"transmission\":\"Manual\",\"is_featured\":false,\"updated_at\":\"2026-06-02 00:24:40\"}',NULL,'2026-06-02 00:24:40','2026-06-02 00:24:40'),
(18,'Resource','Car Brand Created by Super Admin','App\\Models\\CarBrand','Created',2,'App\\Models\\User',1,'{\"name\":\"Ferrari\",\"logo\":\"brands\\/01KT23FHF49CGA9KYPADVRCNRN.avif\",\"updated_at\":\"2026-06-02 00:25:08\",\"created_at\":\"2026-06-02 00:25:08\",\"id\":2}',NULL,'2026-06-02 00:25:08','2026-06-02 00:25:08'),
(19,'Resource','Car Brand Updated by Super Admin','App\\Models\\CarBrand','Updated',1,'App\\Models\\User',1,'{\"name\":\"BMW\",\"logo\":\"brands\\/01KT23HKDD3W8TX72H1TR2NWG2.jpg\",\"updated_at\":\"2026-06-02 00:26:15\"}',NULL,'2026-06-02 00:26:15','2026-06-02 00:26:15');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES
('project_2_cache_356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1780334833),
('project_2_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1780334833;',1780334833),
('project_2_cache_livewire-rate-limiter:21e59820c745a3d741bb074b02f67c4e645e6877','i:1;',1780329665),
('project_2_cache_livewire-rate-limiter:21e59820c745a3d741bb074b02f67c4e645e6877:timer','i:1780329665;',1780329665),
('project_2_cache_spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:62:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:13:\"view_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:17:\"view_any_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:15:\"create_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:15:\"update_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:15:\"delete_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:19:\"delete_any_activity\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:11:\"view_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:15:\"view_any_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"create_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:13:\"update_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"delete_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:17:\"delete_any_banner\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:8:\"view_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:12:\"view_any_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:10:\"create_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:10:\"update_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:10:\"delete_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:14:\"delete_any_car\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:15:\"view_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:19:\"view_any_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:17:\"create_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:17:\"update_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:17:\"delete_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:21:\"delete_any_car::brand\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:23:\"view_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:27:\"view_any_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:25:\"create_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:25:\"update_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:25:\"delete_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:29:\"delete_any_sell::car::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:25:\"view_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:29:\"view_any_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:27:\"create_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:27:\"update_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:27:\"delete_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:31:\"delete_any_service::appointment\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:18:\"view_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:22:\"view_any_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:20:\"create_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:20:\"update_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:20:\"delete_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:24:\"delete_any_service::type\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:21:\"view_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:25:\"view_any_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:23:\"create_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:23:\"update_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:23:\"delete_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:27:\"delete_any_special::request\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:21:\"widget_OverlookWidget\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:23:\"widget_LatestAccessLogs\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:1:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}}}',1780416005);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_brands`
--

DROP TABLE IF EXISTS `car_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_brands`
--

LOCK TABLES `car_brands` WRITE;
/*!40000 ALTER TABLE `car_brands` DISABLE KEYS */;
INSERT INTO `car_brands` VALUES
(1,'BMW','brands/01KT23HKDD3W8TX72H1TR2NWG2.jpg','2026-06-02 00:16:55','2026-06-02 00:26:15'),
(2,'Ferrari','brands/01KT23FHF49CGA9KYPADVRCNRN.avif','2026-06-02 00:25:08','2026-06-02 00:25:08');
/*!40000 ALTER TABLE `car_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `car_brand_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` enum('new','used') NOT NULL,
  `year` year(4) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `mileage` int(11) DEFAULT NULL,
  `transmission` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('available','sold') NOT NULL DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cars_slug_unique` (`slug`),
  KEY `cars_car_brand_id_foreign` (`car_brand_id`),
  CONSTRAINT `cars_car_brand_id_foreign` FOREIGN KEY (`car_brand_id`) REFERENCES `car_brands` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES
(1,1,'Ferrari F8 Spider','ferrari-6a1dbfd17b21e','new',2020,13000000000.00,200,'Manual','F8 Spider','Yellow','cars/01KT23AJJWTWSDWTZ9J5BDV7XZ.jpg','<p>Engine: 3.9L V8 Twin-Turbocharged</p><p>Transmission: 7-Speed F1 Dual-Clutch</p><p>Horsepower: 720 CV/710HP</p><p>Drive: Rear-Wheel Drive (RWD)</p><p>0 to 100 km/h: 2.9 seconds</p><p>Top Spped: 340 km/h</p>',0,'available','2026-06-02 00:22:25','2026-06-02 00:24:40');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2025_04_12_082932_create_permission_tables',1),
(5,'2025_04_12_083218_create_activity_log_table',1),
(6,'2025_04_12_083219_add_event_column_to_activity_log_table',1),
(7,'2025_04_12_083220_add_batch_uuid_column_to_activity_log_table',1),
(8,'2025_04_12_083341_add_themes_settings_to_users_table',1),
(9,'2026_05_31_213739_create_car_brands_table',1),
(10,'2026_05_31_213756_create_cars_table',1),
(11,'2026_05_31_213803_create_banners_table',1),
(12,'2026_05_31_213816_create_service_types_table',1),
(13,'2026_05_31_213833_create_special_requests_table',1),
(14,'2026_05_31_213850_create_sell_car_requests_table',1),
(15,'2026_05_31_213901_create_service_appointments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES
(1,'App\\Models\\User',1),
(2,'App\\Models\\User',2);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES
(1,'view_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(2,'view_any_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(3,'create_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(4,'update_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(5,'delete_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(6,'delete_any_activity','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(7,'view_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(8,'view_any_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(9,'create_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(10,'update_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(11,'delete_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(12,'delete_any_banner','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(13,'view_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(14,'view_any_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(15,'create_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(16,'update_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(17,'delete_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(18,'delete_any_car','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(19,'view_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(20,'view_any_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(21,'create_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(22,'update_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(23,'delete_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(24,'delete_any_car::brand','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(25,'view_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(26,'view_any_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(27,'create_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(28,'update_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(29,'delete_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(30,'delete_any_role','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(31,'view_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(32,'view_any_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(33,'create_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(34,'update_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(35,'delete_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(36,'delete_any_sell::car::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(37,'view_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(38,'view_any_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(39,'create_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(40,'update_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(41,'delete_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(42,'delete_any_service::appointment','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(43,'view_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(44,'view_any_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(45,'create_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(46,'update_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(47,'delete_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(48,'delete_any_service::type','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(49,'view_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(50,'view_any_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(51,'create_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(52,'update_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(53,'delete_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(54,'delete_any_special::request','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(55,'view_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(56,'view_any_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(57,'create_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(58,'update_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(59,'delete_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(60,'delete_any_user','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(61,'widget_OverlookWidget','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(62,'widget_LatestAccessLogs','web','2026-06-01 22:24:32','2026-06-01 22:24:32');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES
(1,1),
(2,1),
(3,1),
(4,1),
(5,1),
(6,1),
(7,1),
(8,1),
(9,1),
(10,1),
(11,1),
(12,1),
(13,1),
(14,1),
(15,1),
(16,1),
(17,1),
(18,1),
(19,1),
(20,1),
(21,1),
(22,1),
(23,1),
(24,1),
(25,1),
(26,1),
(27,1),
(28,1),
(29,1),
(30,1),
(31,1),
(32,1),
(33,1),
(34,1),
(35,1),
(36,1),
(37,1),
(38,1),
(39,1),
(40,1),
(41,1),
(42,1),
(43,1),
(44,1),
(45,1),
(46,1),
(47,1),
(48,1),
(49,1),
(50,1),
(51,1),
(52,1),
(53,1),
(54,1),
(55,1),
(56,1),
(57,1),
(58,1),
(59,1),
(60,1),
(61,1),
(62,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES
(1,'super_admin','web','2026-06-01 22:24:32','2026-06-01 22:24:32'),
(2,'user','web','2026-06-01 22:24:32','2026-06-01 22:24:32');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell_car_requests`
--

DROP TABLE IF EXISTS `sell_car_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sell_car_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `mileage` int(11) NOT NULL,
  `expected_price` decimal(15,2) NOT NULL,
  `photos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`photos`)),
  `description` longtext DEFAULT NULL,
  `status` enum('pending','reviewed','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell_car_requests`
--

LOCK TABLES `sell_car_requests` WRITE;
/*!40000 ALTER TABLE `sell_car_requests` DISABLE KEYS */;
INSERT INTO `sell_car_requests` VALUES
(1,'Andry Hakim','andry@gmail.com','0822987890','Porsche','718 Boxter',2022,3200,5300000000.00,'[\"sell-cars\\/axwKbFnqyEEKLInf60UatfPUKwdKEDZXBEIQd8mB.avif\"]','.','pending','2026-06-01 23:06:30','2026-06-01 23:06:30');
/*!40000 ALTER TABLE `sell_car_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_appointments`
--

DROP TABLE IF EXISTS `service_appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `service_type_id` bigint(20) unsigned NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('pending','confirmed','completed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_appointments_service_type_id_foreign` (`service_type_id`),
  CONSTRAINT `service_appointments_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_appointments`
--

LOCK TABLES `service_appointments` WRITE;
/*!40000 ALTER TABLE `service_appointments` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_types`
--

DROP TABLE IF EXISTS `service_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_types`
--

LOCK TABLES `service_types` WRITE;
/*!40000 ALTER TABLE `service_types` DISABLE KEYS */;
INSERT INTO `service_types` VALUES
(1,'General Service','Comprehensive vehicle inspection and routine maintenance to keep your car in optimal condition.','2026-06-01 23:31:12','2026-06-01 23:31:12'),
(2,'Oli Change ',NULL,'2026-06-01 23:34:45','2026-06-01 23:34:45'),
(3,'Engine Tune Up',NULL,'2026-06-02 00:09:03','2026-06-02 00:09:03'),
(4,'Brake Service',NULL,'2026-06-02 00:09:28','2026-06-02 00:09:28'),
(5,'AC Service',NULL,'2026-06-02 00:09:56','2026-06-02 00:09:56'),
(6,'Transmission Service',NULL,'2026-06-02 00:10:21','2026-06-02 00:10:21');
/*!40000 ALTER TABLE `service_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('WYHlwVBn084zuiwDwyGd4Om82oiitNwn7wO9rTUQ',1,'172.23.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0','ZXlKcGRpSTZJbXRKZG01UFdqSkNjRkF6YUhodWNVVnpTRTUzTUVFOVBTSXNJblpoYkhWbElqb2lWVUpCU2sxRVNuUnBhV0ZUYjFGWVlVTTFWMlIxVlVkeVNqSlFjRGRXY0RsMloxVXlka2s0TVVwaGVsRmxkbUY2ZHpaTlRrc3lkREJ5U0hOa2NYVXdlVWh3VG5SYWQyOVpUemhqWkd4V09Fb3JXRTB4Y1c1MlZEaHlTV1ZTUkN0NWIya3hVWEFyWVhKMWFFaGFjRzlFYlROdVZ6aERUMW8yVEZCRVdWSkdkemhhWmtwUFpGRjNaWE41ZFhsQ2VHcFhaalZUUzNRclpqaHlTekZrVjBad1RtVkpXV1ZrZWsxeGF6Rm9WVzlsWlVwQlRHcEhlbGwzYkdaaGJXWTBiMmxwYlZJNFRYY3hWbWxZYjIxU2VsZGhialpIZHpjMWVXaFJVMFpPV1hZclkxWmhMMlpKV0VzeVIya3pNV0UzVDBNd2JWZGxhR2RzVlc0eU1rMXRNM3BFUm5WMldGZG1ja1p1U2tOWVlVRmpORkpzUnlzeVdETkdVVlYwTTFWS2JtOUpLM0V2U2pWNFJrbHJkVmhWVVdJMU4zcHhSSFpWYkdsNWIwdHRRM28xT1ZGSlZGTnpjVlJ5TkZwaFNsTlRZVTFVUmpaRlJWZzRRbkZQYms1RVVHWXhXSGxNYkU5SVYybG1ablI1UTJSTWVGQjFlSFptYURoa1VtTm1jeTkyWldFck9VY3pXbmxIZFRWb056bExOMk16VUZkbGJITnhRMVl5TmtocFEzWlVWa1JDTlZka1NtWm5OMWRzUkhKSVNqUXplUzlvZWxKb2VGZzVVMVJ2ZVVjMlJVTXdhSEpuYldkbmJEUk5PVUUzVjJWRldUVXlhbUl5YkZwVldtVnNNQzlhTWxabGRrNWtXRGx1UnpKVVVVRnJhRzVvT0VKdmFsaGFZWEIwUVd4UFVFd2lMQ0p0WVdNaU9pSTNPV0UzTVRJMk16SmpZV0ZsWmpZM1ltTTFOV1l6Wmpsak9HRmpNamN5WVRJNE5HWXpaVEl6WWprd09HTXhNekUzTm1Ka09XSXdPVEkxTnpoaU56TXhJaXdpZEdGbklqb2lJbjA9',1780340614);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `special_requests`
--

DROP TABLE IF EXISTS `special_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `special_requests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `budget` decimal(15,2) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` enum('pending','contacted','completed','cancelled') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `special_requests`
--

LOCK TABLES `special_requests` WRITE;
/*!40000 ALTER TABLE `special_requests` DISABLE KEYS */;
INSERT INTO `special_requests` VALUES
(1,'Andry Hakim','andry@gmail.com','0822987890','Nissan','GTR R-35 T-Spec',2024,8000000000.00,'special request dari saya Nissan Gtr r-35 nissmo keluaran terbaru NIK 2024','pending','2026-06-01 22:59:53','2026-06-01 22:59:53');
/*!40000 ALTER TABLE `special_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `avatar_url` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(255) DEFAULT 'sunset',
  `theme_color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,NULL,'Super Admin','admin@admin.com',NULL,'$2y$12$xQTt0j9Wn0mMZG0YB.lMneK6M1ywLTFEpH9.CIovAs01DOjXL1Gie',NULL,'2026-06-01 22:24:32','2026-06-01 22:24:32','sunset',NULL),
(2,NULL,'User Account','user@admin.com',NULL,'$2y$12$5ui6T.athsRpr1w5uqjpUuDHWhhjRicTSTU86wtezaLKIwr5e.z16',NULL,'2026-06-01 22:24:33','2026-06-01 22:24:33','sunset',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-01 19:08:45
