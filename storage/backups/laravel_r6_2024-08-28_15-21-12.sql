-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: laravel_r6
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
INSERT INTO `cache` VALUES ('0@0.com|127.0.0.1','i:2;',1724632178),('0@0.com|127.0.0.1:timer','i:1724632178;',1724632178);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `carTitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `pub` tinyint(1) NOT NULL,
  `image` varchar(250) NOT NULL,
  `catID` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cars_catid_foreign` (`catID`),
  CONSTRAINT `cars_catid_foreign` FOREIGN KEY (`catID`) REFERENCES `cats` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'SuprAaa','Sunt vel odit sit praesentium voluptatibus vel. Rerum id distinctio ut asperiores neque quisquam. Veniam tempora vel aut natus dolore cumque aut.',164202708.7,0,'trig.png',6,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(2,'BMW','Dolorem dolores nesciunt nemo quo et iure. Harum alias id est voluptatem tenetur. Est autem iure est ut nihil sint.',10176.7,0,'pharm.jpg',2,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(3,'nobelSmart','Vero quo tempore aut commodi enim labore reprehenderit. Deserunt autem officia quas et mollitia. Accusantium aut porro tenetur accusantium et dolore.',81.1,1,'1723420531.jpg',1,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(4,'SuprAaa','Nisi aut quaerat nisi ex. Id eaque velit possimus maiores. Ut alias accusamus architecto eos. Placeat commodi sapiente ipsam.',2240058.1,1,'1b81743cddd2b464c6c16e60c353265c.png',7,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(5,'BMW','Recusandae veritatis sit repellendus illo a. Et et aperiam tempore odio aliquam. Sint voluptatem nisi exercitationem inventore.',28412.7,1,'trig.png',3,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(6,'BMW','Necessitatibus earum nesciunt recusandae eum. Voluptatum rem consectetur omnis. Doloribus maxime dolor autem similique eum. Quos aut accusamus quod ratione quidem qui.',10424.3,1,'Audi.png',8,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(7,'nobelSmart','Autem nihil et accusamus quaerat quia suscipit aut. Quam aliquid consectetur culpa sunt sint qui. Distinctio vitae sit amet quia. Velit quae consequatur odit sit quia fugit dolorem.',1343.1,1,'FerrariMonza.jpg',7,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(8,'BMW','Ad eveniet ut voluptatem minima doloremque sunt dolores. Vitae voluptate voluptatem vitae aspernatur amet. Cupiditate voluptatem asperiores quo et modi blanditiis. Non labore aut qui porro.',0.4,1,'trig.png',1,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(9,'BMW','Dolorem fugit commodi deleniti. Architecto asperiores ut velit quod sed corporis est et. Officia quis alias nemo ea eos eos. Sed beatae accusamus et consequatur optio aut.',380,0,'1722794189.png',1,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(10,'SuprAaa','Nemo quaerat necessitatibus nobis dolores ut. Dolorum et sapiente recusandae. Sed id maiores voluptates rerum. Rerum culpa inventore placeat sit hic. Enim eos omnis voluptas qui aut.',16,0,'1722793732.png',3,NULL,'2024-08-25 15:58:23','2024-08-25 15:58:23'),(11,'SuprAaa','Ut aut occaecati voluptatem voluptatum non. Voluptatum et dolores enim est dolores. Repudiandae eos consequuntur veniam enim. Aut molestiae est possimus est. Ipsum eum quisquam unde illo.',17.6,0,'1722794227.png',4,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(12,'BMW','Suscipit est quia quo incidunt corporis voluptatem. Aliquam saepe illo harum quae.',680024.2,0,'1723418165.png',7,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(13,'nobelSmart','Sed veniam quia dicta aut nobis ut aperiam totam. Ut aut officiis ipsam. Ea impedit a voluptas ad. Aperiam blanditiis amet quam est assumenda. Tempore ad optio enim porro ut qui nemo sint.',806768.8,1,'c2c87c635326be535a7cb17a70bdbf28.png',5,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(14,'SuprAaa','Est quo repellat velit consequatur. Voluptatem voluptatem ducimus sapiente aliquid aut debitis. Consequatur reiciendis sed vero nulla voluptas temporibus. Dolor doloremque harum placeat.',180183.9,0,'1723420531.jpg',7,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(15,'BMW','In vero provident sunt vitae dolorem. Temporibus quia explicabo cumque ut dignissimos enim ducimus. Alias dicta qui accusantium facere. Voluptate ducimus totam rerum aut asperiores illo eaque.',125,1,'e97ad8413b0549190b5a3d2bf924c663.png',4,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(16,'nobelSmart','Est voluptates molestias minus voluptatum repellat. Quas quae consequuntur provident vitae explicabo quo dolor earum. Adipisci ratione nihil provident non.',285.8,1,'1723417882.png',2,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(17,'SuprAaa','Animi et molestiae qui aut et et dolore ab. Facilis id dolore optio. At ea suscipit exercitationem qui. Nemo necessitatibus nisi autem tempora.',8601132.4,0,'FerrariMonza.jpg',4,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(18,'nobelSmart','Reprehenderit dolor reprehenderit aperiam vel similique deserunt ipsa. Culpa voluptas aut maiores omnis. Corrupti beatae itaque sit et consectetur aut consequatur.',8039.1,1,'BMW.jpg',5,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(19,'nobelSmart','Perferendis sit molestiae dignissimos. Et voluptas est quia fuga id quia repellendus. Cum nihil esse et mollitia atque eaque quod. Accusamus vel et veniam et rerum.',309461.3,0,'1722793751.png',2,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(20,'SuprAaa','Quasi odio ducimus magni occaecati. Saepe nihil expedita adipisci cumque odit est. Cum nihil architecto explicabo distinctio totam ex dolores aut.',6284340.5,0,'c2c87c635326be535a7cb17a70bdbf28.png',2,NULL,'2024-08-25 23:41:55','2024-08-25 23:41:55'),(21,'nobelSmart','Molestiae suscipit quibusdam consequuntur sint. Iusto at voluptate cupiditate nam. Facilis libero natus esse aperiam enim minima sit suscipit. Optio soluta animi architecto labore ipsum.',1234.6,1,'Audi.png',6,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(22,'SuprAaa','Sit nihil sit corporis neque. Qui nesciunt reiciendis commodi inventore quo assumenda. Modi ut praesentium quo sint qui.',7066432.1,1,'1723420531.jpg',10,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(23,'BMW','Eum autem eaque ea aperiam ducimus et incidunt. Asperiores molestiae hic rem accusantium maiores unde. Amet assumenda at magni sapiente aperiam. Vel mollitia repellendus ad dignissimos.',5351389.3,0,'eddb76653559f162c5fd9f427271171d.jpeg',10,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(24,'SuprAaa','Excepturi ratione eveniet nobis dolore totam et necessitatibus omnis. Quam earum omnis ab vel fuga. Doloribus consequuntur quae beatae.',5.1,1,'chem.png',9,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(25,'SuprAaa','Eos explicabo facere velit magni est. Velit nesciunt sequi enim culpa aut. Et consequatur vero quam culpa. Debitis et laboriosam ea commodi et.',8531456.3,1,'c368eecf2502867b89240d84649c0693.png',7,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(26,'BMW','Debitis repudiandae dolor dolorem quaerat odit quod. Amet placeat quam et dolor. Qui mollitia quia eos voluptas autem rerum nihil. Corrupti iusto expedita dolore ut.',32755759.7,1,'d88351e6a7e40b3da041a8c856c3ab22.png',8,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(27,'BMW','Consequatur et non libero quo doloremque repellendus similique dicta. Odit sit corrupti labore architecto libero. Ex et nobis sint rerum et consectetur. Provident quisquam nihil et perferendis.',15163293.3,1,'1724290397.png',9,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(28,'BMW','Ut aut ipsum reprehenderit neque itaque blanditiis. Explicabo sunt ab eum porro. Enim ipsa qui voluptas eius nemo tempore. Ut modi rerum et magnam delectus vel.',2877512.9,0,'1723420468.jpg',1,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(29,'nobelSmart','Sed iste explicabo ut quis sequi corporis. Amet dolorem facere non. Et vel nihil quos architecto aut velit sint. Consequatur earum vel et quo nulla.',232665293.2,1,'fb7d066d6d95dbc373f5a76009f3fd12.png',10,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39'),(30,'nobelSmart','Quo quisquam numquam praesentium ratione aspernatur id rerum. Animi hic nihil cumque. Magni et in cum. Labore praesentium debitis nisi nostrum impedit culpa repellendus.',7243.3,0,'pharm.jpg',6,NULL,'2024-08-26 00:07:39','2024-08-26 00:07:39');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cats`
--

DROP TABLE IF EXISTS `cats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cats`
--

LOCK TABLES `cats` WRITE;
/*!40000 ALTER TABLE `cats` DISABLE KEYS */;
INSERT INTO `cats` VALUES (1,'Dicki Inc','2024-08-25 15:58:23','2024-08-25 15:58:23'),(2,'Rutherford Ltd','2024-08-25 15:58:23','2024-08-25 15:58:23'),(3,'Lesch and Sons','2024-08-25 15:58:23','2024-08-25 15:58:23'),(4,'Barrows and Sons','2024-08-25 15:58:23','2024-08-25 15:58:23'),(5,'Morar-Kub','2024-08-25 15:58:23','2024-08-25 15:58:23'),(6,'Tremblay and Sons','2024-08-25 15:58:23','2024-08-25 15:58:23'),(7,'Rice-Lindgren','2024-08-25 15:58:23','2024-08-25 15:58:23'),(8,'Buckridge, Feil and Ernser','2024-08-25 15:58:23','2024-08-25 15:58:23'),(9,'Wiza-Sporer','2024-08-25 15:58:23','2024-08-25 15:58:23'),(10,'Kassulke LLC','2024-08-25 15:58:23','2024-08-25 15:58:23'),(11,'Kutch-Kertzmann','2024-08-25 23:41:54','2024-08-25 23:41:54'),(12,'Wunsch and Sons','2024-08-25 23:41:54','2024-08-25 23:41:54'),(13,'DuBuque, Cassin and Ziemann','2024-08-25 23:41:55','2024-08-25 23:41:55'),(14,'Cummings, Yost and Zulauf','2024-08-25 23:41:55','2024-08-25 23:41:55'),(15,'Sauer PLC','2024-08-25 23:41:55','2024-08-25 23:41:55'),(16,'Crist Group','2024-08-25 23:41:55','2024-08-25 23:41:55'),(17,'Wilderman Inc','2024-08-25 23:41:55','2024-08-25 23:41:55'),(18,'Fritsch-Flatley','2024-08-25 23:41:55','2024-08-25 23:41:55'),(19,'Emard Group','2024-08-25 23:41:55','2024-08-25 23:41:55'),(20,'Huel-Bernier','2024-08-25 23:41:55','2024-08-25 23:41:55'),(21,'Abbott Inc','2024-08-26 00:07:39','2024-08-26 00:07:39'),(22,'Wiza, Kozey and Schinner','2024-08-26 00:07:39','2024-08-26 00:07:39'),(23,'Jacobs Group','2024-08-26 00:07:39','2024-08-26 00:07:39'),(24,'Hayes-Stroman','2024-08-26 00:07:39','2024-08-26 00:07:39'),(25,'Roberts Inc','2024-08-26 00:07:39','2024-08-26 00:07:39'),(26,'Schimmel Group','2024-08-26 00:07:39','2024-08-26 00:07:39'),(27,'Braun, Eichmann and Monahan','2024-08-26 00:07:39','2024-08-26 00:07:39'),(28,'Bergstrom-Huel','2024-08-26 00:07:39','2024-08-26 00:07:39'),(29,'Gislason PLC','2024-08-26 00:07:39','2024-08-26 00:07:39'),(30,'Boyer, McClure and DuBuque','2024-08-26 00:07:39','2024-08-26 00:07:39');
/*!40000 ALTER TABLE `cats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classTitle` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `fulled` tinyint(1) NOT NULL,
  `price` decimal(6,3) NOT NULL,
  `begTime` time NOT NULL,
  `endTime` time NOT NULL,
  `image` varchar(250) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clazzs`
--

DROP TABLE IF EXISTS `clazzs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clazzs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `classTitle` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL,
  `fulled` tinyint(1) NOT NULL,
  `price` decimal(6,3) NOT NULL,
  `begTime` time NOT NULL,
  `endTime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clazzs`
--

LOCK TABLES `clazzs` WRITE;
/*!40000 ALTER TABLE `clazzs` DISABLE KEYS */;
/*!40000 ALTER TABLE `clazzs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_07_18_010614_create_clazzs_table',1),(5,'2024_07_21_221625_create_classes_table',1),(6,'2024_08_11_160243_create_phones_table',1),(7,'2024_08_11_160255_create_students_table',1),(8,'2024_08_11_185534_create_cats_table',1),(9,'2024_08_17_162248_create_cars_table',1),(10,'2024_08_19_020656_create_contacts_table',1),(11,'2024_08_19_023629_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone_num` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
INSERT INTO `sessions` VALUES ('Fkzh0HSpNrdAqIufS8fm5l8goKreP8q96NmV3HgK',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0','YTo1OntzOjY6Il90b2tlbiI7czo0MDoickZUanRTd29oT0M1N1FKcWVRWm04Mm5JSUs0WUNmQnVMdUYxbU9vTyI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NTc6Imh0dHBzOi8vbG9jYWxob3N0Ly5MYXJhdmVsL0xhcmF2ZWwtUjYvcHVibGljL2VtYWlsL3ZlcmlmeSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwczovL2xvY2FsaG9zdC8uTGFyYXZlbC9MYXJhdmVsLVI2L3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1724632133),('QsgRSju8gsDVerxhybzYqqnVQzIdDFV2lniTpsjY',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoieWEyVk8wMXp1RXhqRGtXbUNBQWp0YzdzamdmN05rYUpZaWRXeVRjMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1724762374);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneID` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `students_phoneid_foreign` (`phoneID`),
  CONSTRAINT `students_phoneid_foreign` FOREIGN KEY (`phoneID`) REFERENCES `phones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `expired` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Patience Heathcote','yschaefer@example.org','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+1-283-593-5666',1,'eYVK5XPr7C','2024-08-25 15:58:23','2024-08-25 15:58:23'),(2,'Adele Renner','huels.vada@example.net','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','240-369-7648',1,'SVdf9L9U3E','2024-08-25 15:58:23','2024-08-25 15:58:23'),(3,'Mrs. Laisha Heller II','gustave31@example.org','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+1-520-847-7756',1,'gbbstKmVPE','2024-08-25 15:58:23','2024-08-25 23:57:19'),(4,'Kali Davis','ron74@example.org','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','(320) 600-2107',1,'YTCo3tvMND','2024-08-25 15:58:23','2024-08-25 23:57:19'),(5,'Antonietta Pagac','eledner@example.net','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','(678) 363-9595',1,'uXH23dS9Mk','2024-08-25 15:58:23','2024-08-25 15:58:23'),(6,'Lavina Hirthe II','marcelle.cartwright@example.net','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+1 (218) 818-1542',1,'EH9XBeWUUp','2024-08-25 15:58:23','2024-08-25 23:57:19'),(7,'Dr. Eunice Johnson','ally.aufderhar@example.org','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+1-458-271-1835',1,'20soQuzgu4','2024-08-25 15:58:23','2024-08-25 23:57:19'),(8,'Carole Casper II','rhessel@example.com','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','540.625.9875',1,'Sz0OIzTa3h','2024-08-25 15:58:23','2024-08-25 23:57:19'),(9,'Orpha Bauch','vjacobi@example.com','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+1-641-891-1156',1,'PNjRZ24kNz','2024-08-25 15:58:23','2024-08-25 15:58:23'),(10,'Coleman Klocko','walter.cayla@example.com','2024-08-25 15:58:22','$2y$12$hZSK5LFxTsB6aSur5gG/Re/xD2T9SsbDRmeoBb9CASOnUgbOuDJf6','+14755972914',1,'6vJCYpKW4K','2024-08-25 15:58:23','2024-08-25 23:57:19'),(11,'Reuben Gibson','pearlie.mann@example.org','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1.616.845.2972',1,'ChZ3uYGgr0','2024-08-25 23:41:54','2024-08-25 23:57:19'),(12,'Krystel Corwin IV','gprohaska@example.org','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','(539) 225-7612',1,'aPyjCijvuP','2024-08-25 23:41:54','2024-08-25 23:57:19'),(13,'Christop O\'Connell II','smcclure@example.com','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1 (820) 820-3887',1,'xRMfT3eScy','2024-08-25 23:41:54','2024-08-25 23:57:19'),(14,'Ana Dicki','kerluke.jamison@example.net','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','440.336.6794',1,'2mUS10M5er','2024-08-25 23:41:54','2024-08-25 23:57:19'),(15,'Clemens Murphy','hodkiewicz.maverick@example.com','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1 (952) 314-5794',1,'igTbOK0U3d','2024-08-25 23:41:54','2024-08-25 23:41:54'),(16,'Nickolas Cole','jones.jayde@example.com','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1 (301) 742-3155',1,'TnofHxNnLT','2024-08-25 23:41:54','2024-08-25 23:41:54'),(17,'Emilie Brakus','volkman.maddison@example.org','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','531.260.4132',1,'GrZOGOa5wn','2024-08-25 23:41:54','2024-08-25 23:57:19'),(18,'Mrs. Cindy Bernhard','americo.wisoky@example.org','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','458-235-1088',1,'iRagVOKIXf','2024-08-25 23:41:54','2024-08-25 23:41:54'),(19,'Troy Volkman','elinore13@example.org','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1.276.344.1771',1,'Sidi9OaCtA','2024-08-25 23:41:54','2024-08-25 23:41:54'),(20,'Dewitt Schowalter','adela10@example.net','2024-08-25 23:41:54','$2y$12$2K0rKdz4diUJMQt8TyOWeOSRyrttRW5OTa.fGBEfjE0C9Xi8O.zVu','+1.947.683.6010',1,'dWf0NfeTVd','2024-08-25 23:41:54','2024-08-25 23:57:19'),(21,'Novella Jerde','shyann.rolfson@example.net','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','+1-904-912-0824',1,'39BTJlzLkZ','2024-08-26 00:07:39','2024-08-26 00:08:00'),(22,'Prof. Rosella Haag IV','nicholas10@example.net','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','430.641.5261',1,'T6eXwUdqnz','2024-08-26 00:07:39','2024-08-26 00:07:39'),(23,'Prof. Enrique Carroll','schroeder.mossie@example.com','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','970-338-7696',1,'0DFpLXSLfL','2024-08-26 00:07:39','2024-08-26 00:08:00'),(24,'Delta Boyer IV','rogahn.michele@example.net','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','231-729-4275',1,'dMb8G6KLPw','2024-08-26 00:07:39','2024-08-26 00:07:39'),(25,'Noble Hudson','jimmy92@example.org','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','1-864-375-6946',1,'4zRpooqSbM','2024-08-26 00:07:39','2024-08-26 00:08:00'),(26,'Mr. Derek Ullrich II','sigmund.hansen@example.net','2024-08-26 00:07:38','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','+1-947-460-3281',1,'RJwrMRCnG3','2024-08-26 00:07:39','2024-08-26 00:07:39'),(27,'Prof. Addison Wisozk III','king.dominique@example.org','2024-08-26 00:07:39','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','+1 (571) 576-5428',1,'eod1pqOekk','2024-08-26 00:07:39','2024-08-26 00:07:39'),(28,'Mr. Domingo Gorczany Jr.','rod60@example.org','2024-08-26 00:07:39','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','325-371-1820',1,'xSp5iUFHm4','2024-08-26 00:07:39','2024-08-26 00:07:39'),(29,'Jeremie Harris','loraine.braun@example.com','2024-08-26 00:07:39','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','+1-786-514-9175',1,'GpLmnsyEty','2024-08-26 00:07:39','2024-08-26 00:07:39'),(30,'Ms. Elda Muller DDS','shanie.buckridge@example.org','2024-08-26 00:07:39','$2y$12$l3ahLDNDebcyRshLEx.QvO6kOfmQBaeQaMDaBm9O4LZ.v7WoSmVrW','+1 (703) 567-7521',1,'wHkd0WiXRk','2024-08-26 00:07:39','2024-08-26 00:07:39');
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

-- Dump completed on 2024-08-28 17:21:13
