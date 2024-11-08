-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para plazaflores
DROP DATABASE IF EXISTS `plazaflores`;
CREATE DATABASE IF NOT EXISTS `plazaflores` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `plazaflores`;

-- Volcando estructura para tabla plazaflores.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla plazaflores.fondocomitans
DROP TABLE IF EXISTS `fondocomitans`;
CREATE TABLE IF NOT EXISTS `fondocomitans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondocomitans: ~2 rows (aproximadamente)
INSERT INTO `fondocomitans` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(3, 'img_fondo_comitan/K6yQZLCVU65CJ5KI0agjydtCWngbgCsWjx9igiX2.jpg', NULL, '2024-09-13 01:37:23', '2024-09-13 01:37:23'),
	(4, 'img_fondo_comitan/LYQtIjp92vSEoh4RD2WlShjx3EO0WfbhftyQ2DU5.jpg', NULL, '2024-09-13 01:38:33', '2024-09-13 01:38:33'),
	(5, 'img_fondo_comitan/ri1e9ZZhQJrVWmqpKPlxe9cdZUevSnakkFQEwpP8.jpg', NULL, '2024-09-13 01:41:29', '2024-09-13 01:41:29');

-- Volcando estructura para tabla plazaflores.fondopalenques
DROP TABLE IF EXISTS `fondopalenques`;
CREATE TABLE IF NOT EXISTS `fondopalenques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondopalenques: ~2 rows (aproximadamente)
INSERT INTO `fondopalenques` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_fondo_palenque/sCTtWjRpt3UxZyOIUBTdy6l6dvizQlSKMaMhl1lC.jpg', NULL, '2024-09-13 01:30:39', '2024-09-13 01:48:09'),
	(2, 'img_fondo_palenque/NaF0uUfNVIQKTY8wF6qQ9pOXjRJCych9c8GT6arN.jpg', NULL, '2024-09-13 01:31:03', '2024-09-13 01:48:01'),
	(4, 'img_fondo_palenque/ur1SApK5MRj6HyES2uDGgFfd1OHEKeFA9SwtifUs.jpg', NULL, '2024-09-13 01:48:31', '2024-09-13 01:48:31');

-- Volcando estructura para tabla plazaflores.fondopinotepas
DROP TABLE IF EXISTS `fondopinotepas`;
CREATE TABLE IF NOT EXISTS `fondopinotepas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondopinotepas: ~2 rows (aproximadamente)
INSERT INTO `fondopinotepas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_fondo_pinotepa/pHh9mJ6QfVtaN89qJnSRaGrQ1jjTDKKcKfiqgcn1.jpg', NULL, '2024-09-29 02:24:57', '2024-09-29 02:24:57'),
	(2, 'img_fondo_pinotepa/GKMvCXdijb73YTZm9ZrzSUzxCykqoXIc9DXIVjis.jpg', NULL, '2024-09-29 02:25:08', '2024-09-29 02:25:08');

-- Volcando estructura para tabla plazaflores.fondotonalas
DROP TABLE IF EXISTS `fondotonalas`;
CREATE TABLE IF NOT EXISTS `fondotonalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondotonalas: ~2 rows (aproximadamente)
INSERT INTO `fondotonalas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(3, 'img_fondo_tonala/xkQHdffJT4KhiH13fn9tfJpLawwMXWobaxuhSPzf.jpg', NULL, '2024-09-13 02:16:32', '2024-09-13 02:16:32'),
	(4, 'img_fondo_tonala/HdYEZ5CTj232ESJVMhNSIIu1P65kNqDVwT0ukhP9.jpg', NULL, '2024-09-13 02:16:40', '2024-09-13 02:16:40'),
	(5, 'img_fondo_tonala/VpgBycTxgrhE65oTU7NfWEQswZBEY9dtf9AiTC2S.jpg', NULL, '2024-09-13 02:21:10', '2024-09-13 02:21:10');

-- Volcando estructura para tabla plazaflores.fondoviaplazas
DROP TABLE IF EXISTS `fondoviaplazas`;
CREATE TABLE IF NOT EXISTS `fondoviaplazas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondoviaplazas: ~2 rows (aproximadamente)
INSERT INTO `fondoviaplazas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_fondo_viaplaza/YEEv9te8XsRh3GVR63KVsFLqdSAhKm2wKVyo4hAr.jpg', NULL, '2024-09-13 02:30:34', '2024-09-13 02:30:34'),
	(2, 'img_fondo_viaplaza/w2jsnOs9G2lhti0RtUCCxhnFWK0PmC7rb9QXawzT.jpg', NULL, '2024-09-13 02:30:45', '2024-09-13 02:30:45');

-- Volcando estructura para tabla plazaflores.fondovillaflores
DROP TABLE IF EXISTS `fondovillaflores`;
CREATE TABLE IF NOT EXISTS `fondovillaflores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.fondovillaflores: ~1 rows (aproximadamente)
INSERT INTO `fondovillaflores` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(2, 'img_fondo_villaflores/rmqQ4Z5Xqy4U3Z4xC81fbFFJqncrGVgSFG6u0QRT.jpg', NULL, '2024-09-13 02:25:59', '2024-11-05 02:47:44');

-- Volcando estructura para tabla plazaflores.indices
DROP TABLE IF EXISTS `indices`;
CREATE TABLE IF NOT EXISTS `indices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.indices: ~3 rows (aproximadamente)
INSERT INTO `indices` (`id`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
	(3, 'img_fondos/YDtO8lrv7v95xHwv1YdLk77FxWSeENT2YOfiVBTv.jpg', NULL, '2024-09-13 01:17:06', '2024-09-13 01:17:07'),
	(4, 'img_fondos/sPn5063Khs4SkZaYTNbOqcEV4Qr8qf1hwSOL3KsC.jpg', NULL, '2024-09-13 01:18:08', '2024-09-13 01:39:44'),
	(5, 'img_fondos/oOqVeQM0wPCiziSDEf5NT3bnHVqQY3CzZ7FfXHhs.jpg', NULL, '2024-09-13 01:18:18', '2024-11-05 04:14:25'),
	(8, 'img_fondos/9SST4fEFw9q9S48htECumTSHV9NKn3JfvEq41AVF.jpg', NULL, '2024-10-26 01:20:01', '2024-10-26 01:20:02');

-- Volcando estructura para tabla plazaflores.interiorescomitans
DROP TABLE IF EXISTS `interiorescomitans`;
CREATE TABLE IF NOT EXISTS `interiorescomitans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interiorescomitans: ~3 rows (aproximadamente)
INSERT INTO `interiorescomitans` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_comitan/9LgsFs4whjBIyL0mQwfXhjZ8cgmfcQBIItJWJUxF.jpg', NULL, '2024-09-10 05:33:16', '2024-09-10 05:33:16'),
	(2, 'img_interiores_comitan/33aVyi99enmPpkmQc7qCsDkuufeEECOsIW6gIhGK.jpg', NULL, '2024-09-13 02:00:00', '2024-09-13 02:00:01'),
	(3, 'img_interiores_comitan/nglqRyjLo8iAEbiwAJ7Y3NoivZLnYkoXiZd7ZUPW.jpg', NULL, '2024-09-13 02:00:12', '2024-09-13 02:00:22');

-- Volcando estructura para tabla plazaflores.interioresinicios
DROP TABLE IF EXISTS `interioresinicios`;
CREATE TABLE IF NOT EXISTS `interioresinicios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interioresinicios: ~2 rows (aproximadamente)
INSERT INTO `interioresinicios` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_inicio/Lwo1HUkz2GRwuylMGawAM4fOQXpjYR3FlVKUs4E2.jpg', NULL, '2024-09-15 02:15:06', '2024-09-15 02:21:43');

-- Volcando estructura para tabla plazaflores.interiorespalenques
DROP TABLE IF EXISTS `interiorespalenques`;
CREATE TABLE IF NOT EXISTS `interiorespalenques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interiorespalenques: ~2 rows (aproximadamente)
INSERT INTO `interiorespalenques` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_palenque/I75jhqJzwjpL54yPackVTnl2ARFGGumznEypyzr9.jpg', NULL, '2024-09-13 01:32:13', '2024-09-13 01:32:13'),
	(2, 'img_interiores_palenque/zj4fZ0jtpdictzuNAFFR5JFzRRrYrqvheP7OugyI.jpg', NULL, '2024-09-13 01:32:20', '2024-09-13 01:32:20');

-- Volcando estructura para tabla plazaflores.interiorespinotepas
DROP TABLE IF EXISTS `interiorespinotepas`;
CREATE TABLE IF NOT EXISTS `interiorespinotepas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interiorespinotepas: ~2 rows (aproximadamente)
INSERT INTO `interiorespinotepas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_pinotepa/TLqoeAw0ghJ5yNSsbH9hHwRYZDG5lrkXJZvysJ3P.jpg', NULL, '2024-09-29 02:25:46', '2024-09-29 02:25:46'),
	(2, 'img_interiores_pinotepa/Kmiw4HSYHQfwnIUwOmefVmPIKZsWFoqB3tnkVhYE.jpg', NULL, '2024-09-29 02:25:55', '2024-09-29 02:25:55'),
	(3, 'img_interiores_pinotepa/BnZMLqeYVUw2LB7AZJ6YLBS4oungUuuxv3Hg1ofU.jpg', NULL, '2024-09-29 02:26:27', '2024-09-29 02:26:27');

-- Volcando estructura para tabla plazaflores.interiorestonalas
DROP TABLE IF EXISTS `interiorestonalas`;
CREATE TABLE IF NOT EXISTS `interiorestonalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interiorestonalas: ~3 rows (aproximadamente)
INSERT INTO `interiorestonalas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_tonala/9PRBc4AZxoiEpyRuiR3Tgs8nUJwT8pOvVq28OLej.jpg', NULL, '2024-09-13 02:17:25', '2024-09-13 02:17:25'),
	(2, 'img_interiores_tonala/cWui8LidgVbtHML0y6UtVlEtFlge9A6V8crBmIkH.jpg', NULL, '2024-09-13 02:17:31', '2024-09-13 02:17:31'),
	(3, 'img_interiores_tonala/k97NR6QxTtylZXPVNBoTJbvm5gvBxOSXcec2jTkb.jpg', NULL, '2024-09-13 02:17:40', '2024-09-13 02:17:40');

-- Volcando estructura para tabla plazaflores.interioresviaplazas
DROP TABLE IF EXISTS `interioresviaplazas`;
CREATE TABLE IF NOT EXISTS `interioresviaplazas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interioresviaplazas: ~2 rows (aproximadamente)
INSERT INTO `interioresviaplazas` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_viaplaza/ET06PRGkCyJPOTxWw4K9earrceatZ5vHUmXxH8tW.jpg', NULL, '2024-09-13 02:31:05', '2024-09-13 02:31:05'),
	(2, 'img_interiores_viaplaza/l2zdnKCzOWDvF3S4AcbKeyk8gQlvAgCwRG4fx8wv.jpg', NULL, '2024-09-13 02:31:17', '2024-09-13 02:31:17');

-- Volcando estructura para tabla plazaflores.interioresvillaflores
DROP TABLE IF EXISTS `interioresvillaflores`;
CREATE TABLE IF NOT EXISTS `interioresvillaflores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.interioresvillaflores: ~2 rows (aproximadamente)
INSERT INTO `interioresvillaflores` (`id`, `img`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'img_interiores_villaflores/f4ieo13FPcLefPzYyXnP4n81v1oYbNqRdU2espTU.jpg', NULL, '2024-09-13 02:26:11', '2024-09-13 02:26:11'),
	(2, 'img_interiores_villaflores/oXvwpQdexMpXTjwZSi7CzyOlsDAEHetGn9nKAUMM.jpg', NULL, '2024-09-13 02:26:27', '2024-09-13 02:26:27');

-- Volcando estructura para tabla plazaflores.localcomitans
DROP TABLE IF EXISTS `localcomitans`;
CREATE TABLE IF NOT EXISTS `localcomitans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localcomitans: ~64 rows (aproximadamente)
INSERT INTO `localcomitans` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'otros', 'LOCAL 1-2-3', 'TONY PAPELERÍAS', NULL, NULL),
	(2, 'moda', 'LOCAL 4-5', 'PAO FASHION', NULL, NULL),
	(3, 'moda', 'LOCAL 6-7-8-9', 'SHASA', NULL, NULL),
	(4, 'moda', 'LOCAL 10-11', 'GARRAPATA', NULL, NULL),
	(5, 'alimentos', 'LOCAL 12', 'TOCUMBO', NULL, NULL),
	(6, 'tecnologia', 'LOCAL 13', 'TELCEL', NULL, NULL),
	(7, 'salud y belleza', 'LOCAL 14', 'ESTETICA CARMEN MOSCOSO (BELLA KARA)', NULL, NULL),
	(8, 'alimentos', 'LOCAL 15', 'KFC', NULL, NULL),
	(9, 'moda', 'LOCAL 18', '2 CAP', NULL, NULL),
	(10, 'moda', 'LOCAL 19', 'MERAG JOYAS', NULL, NULL),
	(11, 'salud y belleza', 'LOCAL 21', 'PERFUMES GG', NULL, NULL),
	(12, 'alimentos', 'LOCAL 22', 'CAFÉ CONQUISTADOR', NULL, NULL),
	(13, 'servicios', 'LOCAL 23', 'VIAJES TENAM', NULL, NULL),
	(14, 'tecnologia', 'LOCAL 24', 'MOBO', NULL, NULL),
	(15, 'alimentos', 'LOCAL 25', 'HELADOS IRMA', NULL, NULL),
	(16, 'alimentos', 'LOCAL 28', 'CAFÉ DAVID', NULL, NULL),
	(17, 'alimentos', 'LOCAL 29', 'SUBWAY', NULL, NULL),
	(18, 'alimentos', 'LOCAL 30', 'CHINA EXPRES', NULL, NULL),
	(19, 'alimentos', 'LOCAL 32', 'LA FARANDULA', NULL, NULL),
	(20, 'alimentos', 'LOCAL 33', 'BURGER KING', NULL, NULL),
	(21, 'alimentos', 'LOCAL 34', 'REY DE COCHITO', NULL, NULL),
	(22, 'alimentos', 'LOCAL 35', 'FONDAS DE LAS GORDAS', NULL, NULL),
	(23, 'alimentos', 'LOCAL 36', 'DOMINO\'S PIZZA', NULL, NULL),
	(24, 'tecnologia', 'LOCAL 38', 'RADIO SHACK', NULL, NULL),
	(25, 'moda', 'LOCAL 40', 'LATIDO', NULL, NULL),
	(26, 'moda', 'LOCAL 41', 'ADITIVO', NULL, NULL),
	(27, 'alimentos', 'LOCAL 43', 'CHURRERIA PORFIRIO', NULL, NULL),
	(28, 'salud y belleza', 'LOCAL 44', 'GNC', NULL, NULL),
	(29, 'salud y belleza', 'LOCAL 45', 'SALLY BEAUTY', NULL, NULL),
	(30, 'servicios', 'LOCAL 46', 'CI BANCO', NULL, NULL),
	(31, 'otros', 'LOCAL 47', 'TOP MART', NULL, NULL),
	(32, 'salud y belleza', 'LOCAL 49', 'OPTICA AMERICANA', NULL, NULL),
	(33, 'moda', 'LOCAL 50', 'THE COUNTRY SPRINT', NULL, NULL),
	(34, 'moda', 'LOCAL 53', 'REGINAS JOYAS', NULL, NULL),
	(35, 'salud y belleza', 'LOCAL 54', 'DR. LESTHER', NULL, NULL),
	(36, 'tecnologia', 'LOCAL 55', 'MACROPAY', NULL, NULL),
	(37, 'moda', 'LOCAL 56', 'CANDY ZAPATERIAS', NULL, NULL),
	(38, 'moda', 'LOCAL 59', 'JOYERIA BIZARRO', NULL, NULL),
	(39, 'moda', 'LOCAL 60', 'ELITE LOCKERS', NULL, NULL),
	(40, 'moda', 'LOCAL 61', 'GOTTI', NULL, NULL),
	(41, 'otros', 'LOCAL 64', 'LA CASA DE LAS CARCASAS', NULL, NULL),
	(42, 'otros', 'LOCAL 65', 'DETALLES', NULL, NULL),
	(43, 'servicios', 'LOCAL 66', 'CAJEROS (BANORTE Y SCOTIABANCK)', NULL, NULL),
	(44, 'otros', 'LOCAL 67', 'UNIFROMES FRADA', NULL, NULL),
	(45, 'moda', 'LOCAL 68', 'RINAT', NULL, NULL),
	(46, 'otros', 'LOCAL 69', 'DKADA', NULL, NULL),
	(47, 'moda', 'LOCAL 70 A', 'ALDO CONTI', NULL, NULL),
	(48, 'salud y belleza', 'LOCAL 70 B', 'CHINA BU', NULL, NULL),
	(49, 'tecnologia', 'LOCAL 71', 'STEREN', NULL, NULL),
	(50, 'moda', 'LOCAL 72', 'MICHELLE ACCESORIOS', NULL, NULL),
	(51, 'moda', 'LOCAL 73', 'MORA MORA', NULL, NULL),
	(52, 'departamental', 'LOCAL 74', 'LIVERPOOL', NULL, NULL),
	(53, 'moda', 'LOCAL 75', 'FLEXI', NULL, NULL),
	(54, 'tecnologia', 'LOCAL 75', 'AT&T', NULL, NULL),
	(55, 'moda', 'LOCAL 77', 'ELITE LOCKERS', NULL, NULL),
	(56, 'entretenimiento', 'AREA DE JUEGOS', 'GAMETOWN', NULL, NULL),
	(57, 'departamental', 'SUBANCLA 1', 'COPPEL', NULL, NULL),
	(58, 'moda', 'SUBANCLA 2', 'PROMODA', NULL, NULL),
	(59, 'departamental', 'SUBANCLA 3', 'LIVERPOOL', NULL, NULL),
	(60, 'autoservicio', '', 'WALMART', NULL, NULL),
	(61, 'autoservicio', '', 'SAMS CLUB', NULL, NULL),
	(62, 'departamental', '', 'COPPEL', NULL, NULL),
	(63, 'entretenimiento', '', 'CINÉPOLIS', NULL, NULL),
	(64, 'alimentos', '', 'STARBUCKS', NULL, NULL);

-- Volcando estructura para tabla plazaflores.localpalenques
DROP TABLE IF EXISTS `localpalenques`;
CREATE TABLE IF NOT EXISTS `localpalenques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localpalenques: ~26 rows (aproximadamente)
INSERT INTO `localpalenques` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'salud y belleza', 'LOCAL 1', 'SALLY BEAUTY', NULL, NULL),
	(2, 'alimentos', 'LOCAL 2', 'CAFÉ DAVID', NULL, NULL),
	(3, 'moda', 'LOCAL 3', 'DEPORTES CALZAMODA', NULL, NULL),
	(4, 'moda', 'LOCAL 4', 'HANG TEN', NULL, NULL),
	(5, 'entretenimiento', 'LOCAL 5', 'GAME TOWN', NULL, NULL),
	(6, 'servicios', 'LOCAL 6', 'TELCEL', NULL, NULL),
	(7, 'alimentos', 'LOCAL 7', 'DOMINOS', NULL, NULL),
	(8, 'alimentos', 'LOCAL 8', 'MONKEY PAPAS', NULL, NULL),
	(9, 'alimentos', 'LOCAL 9', 'SUBWAY', NULL, NULL),
	(10, 'alimentos', 'LOCAL 10', 'COMIDA CHINA', NULL, NULL),
	(11, 'alimentos', 'LOCAL 11', 'LA FONDA DE LAS GORDITAS', NULL, NULL),
	(12, 'alimentos', 'LOCAL 12', 'KFC', NULL, NULL),
	(13, 'alimentos', 'LOCAL 13', 'WINGS ARMY', NULL, NULL),
	(14, 'servicios', 'LOCAL 14', 'CI BANCO', NULL, NULL),
	(15, 'moda', 'LOCAL 15', 'PAKAR', NULL, NULL),
	(16, 'servicios', 'LOCAL 16', 'BANORTE', NULL, NULL),
	(17, 'moda', 'LOCAL 17', 'CANDY ZAPATERÍAS', NULL, NULL),
	(18, 'servicios', 'LOCAL 18', 'AT&T', NULL, NULL),
	(19, 'moda', 'LOCAL 19', 'MICHELLE ACCESORIOS', NULL, NULL),
	(20, 'otros', 'LOCAL 20', 'DETALLES', NULL, NULL),
	(21, 'alimentos', 'LOCAL 21', 'HELADOS TOCUMBO', NULL, NULL),
	(22, 'departamental', 'LOCAL 22', 'LIVERPOOL EXPRESS', NULL, NULL),
	(23, 'otros', 'LOCAL 23', 'TOP MART', NULL, NULL),
	(24, 'autoservicio', 'LOCAL 24', 'SORIANA', NULL, NULL),
	(25, 'entretenimiento', 'LOCAL 25', 'CINÉPOLIS', NULL, NULL),
	(26, 'departamental', 'LOCAL 26', 'COPPEL', NULL, NULL);

-- Volcando estructura para tabla plazaflores.localpinotepas
DROP TABLE IF EXISTS `localpinotepas`;
CREATE TABLE IF NOT EXISTS `localpinotepas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localpinotepas: ~28 rows (aproximadamente)
INSERT INTO `localpinotepas` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'tecnologia', 'LOCAL 1', 'MACROPAY', NULL, NULL),
	(2, 'moda', 'LOCAL 2', 'ROPA EMMANUEL', NULL, NULL),
	(3, 'tecnologia', 'LOCAL 3', 'MOVICOM', NULL, NULL),
	(4, 'locales disponibles', 'LOCAL 4', 'DISPONIBLE', NULL, NULL),
	(5, 'entretenimiento', 'LOCAL 5', 'THE GAMER', NULL, NULL),
	(6, 'alimentos', 'LOCAL 6', 'TOCUMBO', NULL, NULL),
	(7, 'salud y belleza', 'LOCAL 7', 'CHINA BU', NULL, NULL),
	(8, 'alimentos', 'LOCAL 8', 'CAFÉ AROMA', NULL, NULL),
	(9, 'otros', 'LOCAL 9', 'SHIFU', NULL, NULL),
	(10, 'moda', 'LOCAL 10', 'EL VAQUERO', NULL, NULL),
	(11, 'moda', 'LOCAL 11', 'ZONA SPORT', NULL, NULL),
	(12, 'tecnologia', 'LOCAL 12', 'AT&T', NULL, '2024-11-02 00:56:55'),
	(13, 'tecnologia', 'LOCAL 13', 'NET PACIFIC', NULL, NULL),
	(14, 'autos y motos', 'LOCAL 14', 'HONDA', NULL, NULL),
	(15, 'servicios', 'LOCAL 15', 'SANTANDER', NULL, NULL),
	(16, 'servicios', 'LOCAL 16', 'CENTRO DE ATENCIÓN TELCEL', NULL, NULL),
	(17, 'tecnologia', 'LOCAL 17', 'PROMOCEL', NULL, NULL),
	(18, 'moda', 'LOCAL 18', 'CANDY ZAPATERÍAS', NULL, NULL),
	(19, 'moda', 'LOCAL 19', 'HANG TEN', NULL, NULL),
	(20, 'alimentos', 'LOCAL 20', 'DOMINOS PIZZA', NULL, NULL),
	(21, 'alimentos', 'LOCAL 21', 'POLLO CALIENTE', NULL, NULL),
	(22, 'alimentos', 'LOCAL 22', 'MOMIJI', NULL, NULL),
	(23, 'departamental', 'LOCAL 23', 'COPPEL', NULL, NULL),
	(24, 'entretenimiento', 'LOCAL 24', 'CINEPOLIS', NULL, NULL),
	(25, 'departamental', 'LOCAL 25', 'ELEKTRA', NULL, NULL),
	(26, 'autoservicio', 'LOCAL 26', 'BODEGA AURRERÁ', NULL, NULL),
	(27, 'otros', 'LOCAL 27', 'FIX FERRETERÍAS', NULL, NULL),
	(28, 'otros', 'LOCAL 28', 'AUTOZONE', NULL, NULL);

-- Volcando estructura para tabla plazaflores.localtonalas
DROP TABLE IF EXISTS `localtonalas`;
CREATE TABLE IF NOT EXISTS `localtonalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localtonalas: ~40 rows (aproximadamente)
INSERT INTO `localtonalas` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'moda', 'LOCAL 1-2', 'VERDE TABACO', NULL, NULL),
	(2, 'locales disponibles', 'LOCAL 3', 'DISPONIBLE', NULL, NULL),
	(3, 'locales disponibles', 'LOCAL 4', 'DISPONIBLE', NULL, NULL),
	(4, 'alimentos', 'LOCAL 5', 'HELADOS TOCUMBO', NULL, NULL),
	(5, 'locales disponibles', 'LOCAL 6', 'DISPONIBLE', NULL, NULL),
	(6, 'salud y belleza', 'LOCAL 7-13', 'ÓPTICA AMERICANA', NULL, NULL),
	(7, 'moda', 'LOCAL 8-9-10', 'HOMAY', NULL, NULL),
	(8, 'alimentos', 'LOCAL 11', 'CAFÉ DAVID', NULL, NULL),
	(9, 'tecnologia', 'LOCAL 12', 'MACROPAY', NULL, NULL),
	(10, 'salud y belleza', 'LOCAL 14', 'RUBY DIET CENTER', NULL, NULL),
	(11, 'autos y motos', 'SUBANCLA 2-15-16-17-18', 'ELEKTRA MOTOS', NULL, NULL),
	(12, 'moda', 'LOCAL 19-20', 'HANG TEN', NULL, NULL),
	(13, 'autos y motos', 'LOCAL 21-22', 'RENAULT', NULL, NULL),
	(14, 'moda', 'LOCAL 23', 'THE COUNTRY SPRINT', NULL, NULL),
	(15, 'moda', 'LOCAL 24', 'MERAG JOYAS', NULL, NULL),
	(16, 'moda', 'LOCAL 25', 'MUNDO INFANTIL', NULL, NULL),
	(17, 'salud y belleza', 'LOCAL 26', 'ÓPTICA ARBOLEDAS', NULL, NULL),
	(18, 'locales disponibles', 'LOCAL 27', 'DISPONIBLE', NULL, NULL),
	(19, 'moda', 'LOCAL 28', 'SELENE SHOP', NULL, NULL),
	(20, 'servicios', 'LOCAL 29-30', 'AT&T', NULL, NULL),
	(21, 'moda', 'LOCAL 31-32', 'ADITIVO', NULL, NULL),
	(22, 'locales disponibles', 'LOCAL 33', 'DISPONIBLE', NULL, NULL),
	(23, 'locales disponibles', 'LOCAL 34', 'DISPONIBLE', NULL, NULL),
	(24, 'alimentos', 'LOCAL 35', 'SUBWAY', NULL, NULL),
	(25, 'alimentos', 'LOCAL 36', 'POLLO GRANJERO', NULL, NULL),
	(26, 'alimentos', 'LOCAL 37', 'LA FARÁNDULA', NULL, NULL),
	(27, 'alimentos', 'LOCAL 38', 'BURGUER KING', NULL, NULL),
	(28, 'alimentos', 'LOCAL 39', 'GORDITAS', NULL, NULL),
	(29, 'alimentos', 'LOCAL 40', 'CHINA EXPRESS', NULL, NULL),
	(30, 'alimentos', 'LOCAL 41', 'DOMINOS PIZZA', NULL, NULL),
	(31, 'moda', 'LOCAL 42', 'MICHELLE ACCESORIOS', NULL, NULL),
	(32, 'entretenimiento', 'SUB ANCLA 1', 'THE GAMER', NULL, NULL),
	(33, 'moda', 'SUBANCLA 3', 'ELITE LOCKERS', NULL, NULL),
	(34, 'otros', 'SUBANCLA 4', 'TOP MART', NULL, NULL),
	(35, 'locales disponibles', 'FREE STAND 1', 'DISPONIBLE', NULL, NULL),
	(36, 'locales disponibles', 'FREE STAND 2', 'DISPONIBLE', NULL, NULL),
	(37, 'locales disponibles', 'FREE STAND 3', 'DISPONIBLE', NULL, NULL),
	(38, 'autoservicio', 'ANCLA 1', 'BODEGA AURRERÁ', NULL, NULL),
	(39, 'entretenimiento', 'ANCLA 2', 'CINÉPOLIS', NULL, NULL),
	(40, 'entretenimiento', 'ÁREA DE JUEGOS', 'DIVERTIZONA', NULL, NULL);

-- Volcando estructura para tabla plazaflores.localviaplazas
DROP TABLE IF EXISTS `localviaplazas`;
CREATE TABLE IF NOT EXISTS `localviaplazas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localviaplazas: ~16 rows (aproximadamente)
INSERT INTO `localviaplazas` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'locales disponibles', 'LOCAL 1', 'DISPONIBLE', NULL, NULL),
	(2, 'alimentos', 'LOCAL 2', 'DOMINO\'S', NULL, NULL),
	(3, 'salud y belleza', 'LOCAL 3', 'CHINA BU', NULL, NULL),
	(4, 'alimentos', 'LOCAL 4-5', 'COMIDA CHINA DRAGON JUAN', NULL, NULL),
	(5, 'moda', 'LOCAL 6', 'SELENE SHOP', NULL, NULL),
	(6, 'moda', 'LOCAL 7-8-9', 'VANIDADES', NULL, NULL),
	(7, 'servicios', 'LOCAL 10', 'CENTRO CAMBIARIO', NULL, NULL),
	(8, 'alimentos', 'LOCAL 11', 'TOCUMBO', NULL, NULL),
	(9, 'autoservicio', 'ANCLA 1-2', 'BODEGA AURRERA', NULL, NULL),
	(10, 'locales disponibles', 'ANCLA 2', 'DISPONIBLE', NULL, NULL),
	(11, 'departamental', 'ANCLA 3', 'COPPEL', NULL, NULL),
	(12, 'otros', 'SUB ANCLA 1', 'FIX FERRETERIAS', NULL, NULL),
	(13, 'otros', 'SUB ANCLA 2', 'DISPONIBLE', NULL, NULL),
	(14, 'locales disponibles', 'SUB ANCLA 3', 'DISPONIBLE', NULL, NULL),
	(15, 'locales disponibles', 'SUB ANCLA 4', 'DISPONIBLE', NULL, NULL),
	(16, 'locales disponibles', 'SUB ANCLA 5', 'DISPONIBLE', NULL, NULL);

-- Volcando estructura para tabla plazaflores.localvillaflores
DROP TABLE IF EXISTS `localvillaflores`;
CREATE TABLE IF NOT EXISTS `localvillaflores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.localvillaflores: ~32 rows (aproximadamente)
INSERT INTO `localvillaflores` (`id`, `categoria`, `local`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'otros', 'LOCAL 1', 'DHL', NULL, NULL),
	(2, 'otros', 'LOCAL 2', 'LABORATORIO LANES', NULL, NULL),
	(3, 'locales disponibles', 'LOCAL 3', 'DISPONIBLE', NULL, NULL),
	(4, 'tecnologia', 'LOCAL 4-5', 'MACROPAY', NULL, NULL),
	(5, 'moda', 'LOCAL 6-9', 'ELITE LOCKERS', NULL, NULL),
	(6, 'departamental', 'LOCAL 10-12', 'LIVERPOOL EXPRESS', NULL, NULL),
	(7, 'departamental', 'SUB ANCLA 1', 'COPPEL', NULL, NULL),
	(8, 'salud y belleza', 'LOCAL 14', 'RED NATURA', NULL, NULL),
	(9, 'locales disponibles', 'LOCAL 15', 'DISPONIBLE', NULL, NULL),
	(10, 'locales disponibles', 'LOCAL 16', 'DISPONIBLE', NULL, NULL),
	(11, 'servicios', 'LOCAL 17-19', 'AT&T', NULL, NULL),
	(12, 'locales disponibles', 'LOCAL 20', 'DISPONIBLE', NULL, NULL),
	(13, 'moda', 'LOCAL 21-23', 'HOMAY', NULL, NULL),
	(14, 'moda', 'LOCAL 24', 'MICHELLE ACCESORIOS', NULL, NULL),
	(15, 'locales disponibles', 'LOCAL 25', 'DISPONIBLE', NULL, NULL),
	(16, 'locales disponibles', 'LOCAL 26', 'DISPONIBLE', NULL, NULL),
	(17, 'alimentos', 'LOCAL 27-28', 'DOMINOS PIZZA', NULL, NULL),
	(18, 'locales disponibles', 'LOCAL 29', 'DISPONIBLE', NULL, NULL),
	(19, 'alimentos', 'LOCAL 30', 'YUE SHUN', NULL, NULL),
	(20, 'entretenimiento', 'LOCAL 31', 'THE GAMER', NULL, NULL),
	(21, 'alimentos', 'LOCAL 32', 'LA FARÁNDULA', NULL, NULL),
	(22, 'alimentos', 'LOCAL 33', 'CHICKEN JR', NULL, NULL),
	(23, 'alimentos', 'LOCAL 34', 'QUEEN WINGS', NULL, NULL),
	(24, 'alimentos', 'LOCAL 35', 'SUBWAY', NULL, NULL),
	(25, 'autoservicio', 'ANCLA 1', 'BODEGA AURRERÁ', NULL, NULL),
	(26, 'entretenimiento', 'ANCLA 2', 'CINÉPOLIS', NULL, NULL),
	(27, 'locales disponibles', 'LOCAL 36', 'DISPONIBLE', NULL, NULL),
	(28, 'moda', 'LOCAL 37-38', 'THE COUNTRY SPRINT', NULL, NULL),
	(29, 'moda', 'LOCAL 39', 'HENG TEN', NULL, NULL),
	(30, 'alimentos', 'LOCAL 40', 'TOCUMBO', NULL, NULL),
	(31, 'salud y belleza', 'LOCAL 41-42', 'ÓPTICA AMERICANA', NULL, NULL),
	(32, 'alimentos', 'LOCAL 43', 'CAFÉ DAVID', NULL, NULL);

-- Volcando estructura para tabla plazaflores.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_05_21_100000_create_teams_table', 1),
	(7, '2020_05_21_200000_create_team_user_table', 1),
	(8, '2020_05_21_300000_create_team_invitations_table', 1),
	(9, '2024_06_29_215745_create_sessions_table', 1),
	(10, '2024_07_23_203905_create_indices_table', 1),
	(11, '2024_07_29_210339_create_scinicios_table', 1),
	(12, '2024_07_29_223257_create_localcomitans_table', 1),
	(13, '2024_07_30_172055_create_fondocomitans_table', 1),
	(14, '2024_07_30_183814_create_socioscomitans_table', 1),
	(15, '2024_07_30_193913_create_interiorescomitans_table', 1),
	(16, '2024_07_31_170154_create_localtonalas_table', 1),
	(17, '2024_07_31_172141_create_fondotonalas_table', 1),
	(18, '2024_07_31_190843_create_sociostonalas_table', 1),
	(19, '2024_07_31_194450_create_interiorestonalas_table', 1),
	(20, '2024_08_21_205817_create_fondovillaflores_table', 1),
	(21, '2024_08_21_212841_create_sociosvillaflores_table', 1),
	(22, '2024_08_21_215124_create_interioresvillaflores_table', 1),
	(23, '2024_08_21_222312_create_localvillaflores_table', 1),
	(24, '2024_08_21_225259_create_interiorespinotepas_table', 1),
	(25, '2024_08_21_231957_create_sociospinotepas_table', 1),
	(26, '2024_08_21_233806_create_localpinotepas_table', 1),
	(27, '2024_08_21_235319_create_fondopinotepas_table', 1),
	(28, '2024_08_22_021059_create_fondoviaplazas_table', 1),
	(29, '2024_08_22_023439_create_interioresviaplazas_table', 1),
	(30, '2024_08_22_024959_create_sociosviaplazas_table', 1),
	(31, '2024_08_22_035039_create_localviaplazas_table', 1),
	(32, '2024_08_22_212405_create_fondopalenques_table', 1),
	(33, '2024_08_22_223403_create_interiorespalenques_table', 1),
	(34, '2024_08_30_184847_create_sociospalenques_table', 1),
	(35, '2024_08_30_192326_create_localpalenques_table', 1),
	(36, '2024_09_14_195326_create_interioresinicios_table', 2);

-- Volcando estructura para tabla plazaflores.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla plazaflores.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla plazaflores.scinicios
DROP TABLE IF EXISTS `scinicios`;
CREATE TABLE IF NOT EXISTS `scinicios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.scinicios: ~17 rows (aproximadamente)
INSERT INTO `scinicios` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'walmart', 'img_socios_inicio/ZfhblIm0iQ6DMcRQ8aLaOljjT6izaACDOh0LwOJ3.png', '2024-09-10 05:29:21', '2024-09-13 01:57:43'),
	(2, 'bodega aurrera', 'img_socios_inicio/bxV16ixwkPDToSHZKCPbL1RDuY8J6BOUqhM3tX9z.png', '2024-09-10 05:29:33', '2024-09-10 05:29:33'),
	(3, 'cinepolis', 'img_socios_inicio/da04LhdpGrN56phrRS0mIffpgj27YFhWSDp9gYbG.png', '2024-09-10 05:30:00', '2024-09-10 05:30:00'),
	(4, 'sams-club', 'img_socios_inicio/nBsYULnkAEa22UbUfpdUX7qr0KsPOUgOFsZdNuwS.png', '2024-09-10 05:39:20', '2024-09-10 05:39:20'),
	(5, 'coopel', 'img_socios_inicio/LzkIjzqRegohGdSzDgSPOh0FqHjlbL9Fxfm6mDOb.avif', '2024-09-10 05:39:35', '2024-10-08 10:02:15'),
	(6, 'liverpool', 'img_socios_inicio/270SulkrVe6WqKEHzbAOhURmOs8dEDk1ksYxBjyf.png', '2024-09-10 05:39:52', '2024-09-10 05:39:52'),
	(7, 'lockers', 'img_socios_inicio/FgOtotvJPorr8UnIvqXFVULeckL5GaxA838pqCgO.webp', '2024-10-08 10:00:19', '2024-10-08 10:00:21'),
	(8, 'at&t', 'img_socios_inicio/dXintcklTWPd5IkAbXl2HbBBqBwzhjTSCm1z2Pxh.svg', '2024-10-08 10:05:09', '2024-10-08 10:05:09'),
	(9, 'dominos', 'img_socios_inicio/8cUFootqCBGD85entnEXBdfSUW4YaOYswoE04Vz3.png', '2024-10-08 10:06:23', '2024-10-08 10:06:23'),
	(10, 'subway', 'img_socios_inicio/ITbaqbay9rioRvGee03AxVZXPUxvEgbsWVA2xBxT.png', '2024-10-08 10:07:17', '2024-10-08 10:07:17'),
	(11, 'hang ten', 'img_socios_inicio/5lmY3SS9jwKIPsKyPks67C7gpkIfnQTEf5q8893C.png', '2024-10-08 10:09:07', '2024-10-08 10:09:07'),
	(12, 'optica americana', 'img_socios_inicio/rmbVKe41dHIJABQZl42REX4Ls6YAEg4Y71TApudF.svg', '2024-10-08 10:10:58', '2024-10-08 10:10:58'),
	(13, 'elektra', 'img_socios_inicio/I8HgTopHauTi0Dg9VZ23uASngttYpLJv6poAWkr2.svg', '2024-10-08 10:13:01', '2024-10-08 10:13:01'),
	(14, 'ranault', 'img_socios_inicio/6fMpqHlFcJmFbcMAl8Gv0nOFO7OkG1hkkOdLSGhz.png', '2024-10-08 10:16:15', '2024-10-08 10:16:15'),
	(15, 'STARBUKS', 'img_socios_inicio/0j2LiTHmBTUVxjqmgACFptAkLDNbJu3tOY2syeXL.png', '2024-10-08 10:17:27', '2024-10-08 10:18:09'),
	(16, 'santander', 'img_socios_inicio/QRPp3l2ukTcP2yJLomQ4dO1mrm5kX31PwKxcFWD6.png', '2024-10-08 10:20:56', '2024-10-08 10:20:56'),
	(17, 'autozone', 'img_socios_inicio/YteOZPCMX8MOe5yateZOQ8QJALkTcWfgRhEy8glY.svg', '2024-10-08 10:23:38', '2024-10-08 10:23:38');

-- Volcando estructura para tabla plazaflores.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sessions: ~2 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('14Kf26mMjXI8JMqDOpp6y9ZbJv0TsHQKZEtawQwM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzg1SVVCREJ0bXhYMFJ2Y1pEcFROeUlUSldHb2JTMHhybmIyVHZ1ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730778337),
	('ARQpNtruZ6BYKiAS0EJZiHM8k1OuKEFu97x2RI09', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSXNZb24zdUFVNVJxamdqNXpld1JFU2tiSXl2Q2hJNzNSZmpocjdPbCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcGFsZW5xdWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJHpSOGphVEtSNHUveDB3OGRLMXM4Q3VEblBQZjRaYXNxanRnemUwNUZ6aXljV0pKVzlXeVdhIjt9', 1730758936),
	('gx4zOLdKooTC5RLoudJl76QVV2ACGz0OKBLNCotK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHVmRWhZazhzZklxUzNmU21FMzNhTmRHaXJhcnJQY2RIdDRtbmpBSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730758432);

-- Volcando estructura para tabla plazaflores.socioscomitans
DROP TABLE IF EXISTS `socioscomitans`;
CREATE TABLE IF NOT EXISTS `socioscomitans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.socioscomitans: ~12 rows (aproximadamente)
INSERT INTO `socioscomitans` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'santander', 'img_socios_comitan/UqkwNcgqAsI1iNlI9unTG2yqayto3K4NWsyVFc7M.png', '2024-10-12 05:41:58', '2024-10-12 05:41:59'),
	(2, 'tony', 'img_socios_comitan/SWTjDsjgn7AF3OLIiZmrtifhPPk4sCs8YgMfYhb7.png', '2024-10-16 02:21:14', '2024-10-16 02:21:15'),
	(3, 'shasa', 'img_socios_comitan/kXlLhWRnkO8YOglNJjMOeFygzZUXVx8CeRCb1lSt.png', '2024-10-16 02:22:14', '2024-10-16 02:22:14'),
	(4, 'kfc', 'img_socios_comitan/I7NCHAwsbxbNPYzKn4a9fIbY5DyFRsvrwT6nbn70.png', '2024-10-16 02:22:53', '2024-10-16 02:22:53'),
	(5, 'subway', 'img_socios_comitan/wa7KbVIuQTinxajh2QGJ6yJd7jYrtBoBlE8zOhjw.png', '2024-10-16 02:23:21', '2024-10-16 02:23:21'),
	(6, 'dominos', 'img_socios_comitan/nbbvoGQVW43BhjB2FOJGqW9Vr7Vqhd3XbMKBOIt8.png', '2024-10-16 02:23:43', '2024-10-16 02:23:43'),
	(7, 'radio-shack', 'img_socios_comitan/PHXM3DvZrdgDFLJk58AxjuaaK6nY4V11sqNVl4QV.png', '2024-10-16 02:23:55', '2024-10-16 02:23:55'),
	(8, 'mobo', 'img_socios_comitan/lFFzvkzVOcUixV3KXnYG9Ql8OeSAzb0v3GoGNtKT.webp', '2024-10-16 02:24:34', '2024-10-16 02:24:34'),
	(9, 'liverpool', 'img_socios_comitan/349QBsGX2JmEquoaI7BiqnEybABFdQsUwdQ1Rxok.png', '2024-10-16 02:25:06', '2024-10-16 02:25:06'),
	(10, 'burger king', 'img_socios_comitan/f3WsptLknZtepfGnK34aSGnBGfoalnA8Q9tpORTB.png', '2024-10-16 02:25:56', '2024-10-16 02:25:57'),
	(11, 'sally-beauty', 'img_socios_comitan/kGLxA7kIgoqPo0CRPkrIEulCnM5uNXKalqKXOvvM.png', '2024-10-16 02:26:39', '2024-10-16 02:26:39'),
	(12, 'steren', 'img_socios_comitan/gjJHozQPW6Q6mEHw2YAxrBhB5S2T1etKFMVlCm3X.png', '2024-10-16 02:27:24', '2024-10-16 02:27:24');

-- Volcando estructura para tabla plazaflores.sociospalenques
DROP TABLE IF EXISTS `sociospalenques`;
CREATE TABLE IF NOT EXISTS `sociospalenques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sociospalenques: ~11 rows (aproximadamente)
INSERT INTO `sociospalenques` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'soriana', 'img_socios_palenque/AID8S8ZVm18E2L4PzeBsL4uiFcrGrEW2ek7ZU6U6.webp', '2024-10-16 02:46:42', '2024-10-16 02:46:42'),
	(2, 'cinepolis', 'img_socios_palenque/4bLgDjIl45w3Ydg4YwRY4TZKZpGhieOM4yUSO6qj.png', '2024-10-16 02:46:57', '2024-10-16 02:46:57'),
	(3, 'coopel', 'img_socios_palenque/chLoqvyGz4krmSxlv0pgtMlkcNImM3OFKLTJhxzd.avif', '2024-10-16 02:47:12', '2024-10-16 02:47:12'),
	(4, 'banorte', 'img_socios_palenque/8oz7y9JCkiB8LqHhV0TYdyC6kFY4gpSUVwq8rGQl.png', '2024-10-16 02:49:29', '2024-10-16 02:49:29'),
	(5, 'kfc', 'img_socios_palenque/9chgvE0Wljog7QjfpPH7MYqyJNHWb17TNfx0Arm0.png', '2024-10-16 02:50:09', '2024-10-16 02:50:09'),
	(6, 'monkey papas', 'img_socios_palenque/uTZntwdD9MTS8Iz9f8Sz7bXZWxFeg8g0N5J2tCD7.png', '2024-10-16 02:51:04', '2024-10-16 02:51:04'),
	(7, 'sally-beauty', 'img_socios_palenque/AK9UYoYz5DMqiYo8PHu6lSEkH74gvnKlmQt9oGom.png', '2024-10-16 02:51:32', '2024-10-16 02:51:32'),
	(8, 'hang ten', 'img_socios_palenque/aBPEn8amCRCyghjmKfpViPVvrfcIoRB6yeiiZP0H.png', '2024-10-16 02:51:52', '2024-10-16 02:51:52'),
	(9, 'telcel', 'img_socios_palenque/W8mxN5JzFO39NsiXTnLbKNfiGh5PmLUiLYF9B9Xx.png', '2024-10-16 02:52:33', '2024-10-16 02:52:34'),
	(10, 'subway', 'img_socios_palenque/mGvvkoklPPVmfwfXNBfrqzmICjUeuMzD3LRBVsqS.png', '2024-10-16 02:53:29', '2024-10-16 02:53:29'),
	(11, 'ci banco', 'img_socios_palenque/ap9i6tCIP6OX35UYDZGHj8Gm3GISo0WaEeb4oWPH.png', '2024-10-16 02:54:17', '2024-10-16 02:54:17'),
	(12, 'at&t', 'img_socios_palenque/mpGyPWo21HOAXKF7TzhbB1QhGGcu6SWcTKJa0upY.svg', '2024-10-16 02:54:52', '2024-10-16 02:54:52'),
	(13, 'wings-army', 'img_socios_palenque/io2rnwWequ0AwWsbgSCbHYBnQmtx60vgROdfBi1L.png', '2024-10-16 02:55:58', '2024-10-16 02:55:58');

-- Volcando estructura para tabla plazaflores.sociospinotepas
DROP TABLE IF EXISTS `sociospinotepas`;
CREATE TABLE IF NOT EXISTS `sociospinotepas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sociospinotepas: ~11 rows (aproximadamente)
INSERT INTO `sociospinotepas` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'Autozone', 'img_socios_pinotepa/ygd3KnswplVwJQtUn8JjvC9lJlvPBslddqdTijnb.svg', '2024-10-16 02:38:10', '2024-10-16 02:38:10'),
	(2, 'fix ferreterias', 'img_socios_pinotepa/kkunJwbliT8DH1aaAkbBirdiOTBVWPA5PT5wJzG0.png', '2024-10-16 02:40:50', '2024-10-16 02:40:50'),
	(3, 'bodega aurrera', 'img_socios_pinotepa/AJPqxs3B57ldnpb6BPVlz5mR9p29zOC4bjogCp5e.png', '2024-10-16 02:41:15', '2024-10-16 02:41:15'),
	(4, 'elektra', 'img_socios_pinotepa/hxiaOKUR5pxnuAKeFjDY8fqS7syuzvuoxMMikVb3.svg', '2024-10-16 02:41:27', '2024-10-16 02:41:27'),
	(5, 'coopel', 'img_socios_pinotepa/dbYSWYDsuSMPP8RKdSF5o5QDSEwrInwnIMZVyAW4.avif', '2024-10-16 02:41:48', '2024-10-16 02:41:48'),
	(6, 'cinepolis', 'img_socios_pinotepa/8kC9qip29TYhaKFtZo7xjI4e4CfFCHnAQ9rWRYlc.png', '2024-10-16 02:42:04', '2024-10-16 02:42:04'),
	(7, 'dominos', 'img_socios_pinotepa/JCA50HyVYSftl7FZk6cCRpHDHhcjb3mgz7mE2omZ.png', '2024-10-16 02:42:42', '2024-10-16 02:42:42'),
	(8, 'hang ten', 'img_socios_pinotepa/gcXJ8zGgto7jsEhL8Xc7QhSgplm4Iv4QtehL3j7e.png', '2024-10-16 02:42:52', '2024-10-16 02:42:52'),
	(9, 'telcel', 'img_socios_pinotepa/rP0JKRYSOmXqepcWWwdxVlRulaQ47qKoJBlfuGNP.png', '2024-10-16 02:43:42', '2024-10-16 02:43:42'),
	(10, 'santander', 'img_socios_pinotepa/oL95CyvanXSvz1cv1HPgIVOAC04ty9S5LToUsfZZ.png', '2024-10-16 02:44:12', '2024-10-16 02:44:12'),
	(11, 'at&t', 'img_socios_pinotepa/eP97o62FxaYsyryF7PchYcmgO172lTkkxP4F8iij.svg', '2024-10-16 02:44:30', '2024-10-16 02:44:30'),
	(12, 'honda', 'img_socios_pinotepa/vzB8qVafRDHouXP9lBtP60LacC1zY51sfXwwWI2J.webp', '2024-10-16 02:45:13', '2024-10-16 02:45:13');

-- Volcando estructura para tabla plazaflores.sociostonalas
DROP TABLE IF EXISTS `sociostonalas`;
CREATE TABLE IF NOT EXISTS `sociostonalas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sociostonalas: ~11 rows (aproximadamente)
INSERT INTO `sociostonalas` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'elektra', 'img_socios_tonala/7GrC8U8GWuUbMbHwlQA3Vxuy5UKYTu3totG0BOuY.svg', '2024-10-16 02:28:44', '2024-10-16 02:28:44'),
	(2, 'hang ten', 'img_socios_tonala/4sWZrQvy1IDXCL9OnLe7oPxUjxLVEBC1Cfyg78fZ.png', '2024-10-16 02:30:18', '2024-10-16 02:30:18'),
	(3, 'optica americana', 'img_socios_tonala/WFkcYwK0Yg7bGRXso2ndKsit6us7vSqHZKaf755s.svg', '2024-10-16 02:31:13', '2024-10-16 02:31:13'),
	(4, 'renault', 'img_socios_tonala/C28n71P0ccIts8gRPeA1ZNVhEsPDCf5KYchDgEKX.png', '2024-10-16 02:31:42', '2024-10-16 02:31:42'),
	(5, 'at&t', 'img_socios_tonala/ez74YU3DNHRHrizztDjlBklVqV4G3m3pNxGoQsvK.svg', '2024-10-16 02:32:10', '2024-10-16 02:32:10'),
	(6, 'burger king', 'img_socios_tonala/15yGfh6CHycLVOVe4VLDDIe7ZWFV2wRqnZOVW2rM.png', '2024-10-16 02:32:30', '2024-10-16 02:32:30'),
	(7, 'dominos', 'img_socios_tonala/sgUSYunetb5gT94bG91QJ3xbWdxpY2Tf7UkVcFvm.png', '2024-10-16 02:33:05', '2024-10-16 02:33:05'),
	(8, 'subway', 'img_socios_tonala/jbhTOhTqKKe0AsHKQRM3br62N6smnMv7RiXgnzES.png', '2024-10-16 02:33:23', '2024-10-16 02:33:23'),
	(9, 'elite-lockers', 'img_socios_tonala/g2Wn5Rqg0fnbPoYfUb4ids9EXbUd7eU2tEwL4cfQ.webp', '2024-10-16 02:33:59', '2024-10-16 02:33:59'),
	(10, 'bodega aurrera', 'img_socios_tonala/FrJA1HE3WQNhWiZJxzRkOqxxxSDezhZOsPedr8qK.png', '2024-10-16 02:34:57', '2024-10-16 02:34:57'),
	(11, 'cinepolis', 'img_socios_tonala/TPaEC9ZBe98tkHe1VoGXlaaMhZBNHhj47AopZwgG.png', '2024-10-16 02:36:03', '2024-10-16 02:36:35');

-- Volcando estructura para tabla plazaflores.sociosviaplazas
DROP TABLE IF EXISTS `sociosviaplazas`;
CREATE TABLE IF NOT EXISTS `sociosviaplazas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sociosviaplazas: ~6 rows (aproximadamente)
INSERT INTO `sociosviaplazas` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'bodega aurrera', 'img_socios_viaplaza/1CECvUvgQiNjyDDxh6roV9OMBUjEbgWEkxrqfn9Y.png', '2024-10-16 03:01:38', '2024-10-16 03:01:38'),
	(2, 'fix ferreterias', 'img_socios_viaplaza/z1Cf9QaqBBVqvnpiMQDOzonXv1FcdosKJsVL1f9v.png', '2024-10-16 03:02:04', '2024-10-16 03:02:04'),
	(3, 'Coppel', 'img_socios_viaplaza/VUNNjzaNysGqFUS3OHEWwk4NlaiCB5Mq1P4fk2d6.avif', '2024-10-16 03:02:22', '2024-10-16 03:02:22'),
	(4, 'dominos', 'img_socios_viaplaza/PyWbBExd7RNOkO0bVYhQRg6TrOht5GnRMN7HdeFC.png', '2024-10-16 03:02:40', '2024-10-16 03:02:40'),
	(5, 'tocumbo', 'img_socios_viaplaza/E5MfbKL6UZHyQcuqDathdoDKPqfPnxl5dSpte8Mh.png', '2024-10-16 03:04:58', '2024-10-16 03:04:58'),
	(6, 'vanidades', 'img_socios_viaplaza/ngUKleGdmzoF2nJDzP8O52sO72ckQBBXRotSZ4th.png', '2024-10-16 03:07:11', '2024-10-16 03:07:11');

-- Volcando estructura para tabla plazaflores.sociosvillaflores
DROP TABLE IF EXISTS `sociosvillaflores`;
CREATE TABLE IF NOT EXISTS `sociosvillaflores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.sociosvillaflores: ~8 rows (aproximadamente)
INSERT INTO `sociosvillaflores` (`id`, `nombre`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'coopel', 'img_socios_villaflores/AIpOr6LW3cwyZBNMP7IolGY9X3TKoczQ4fbOObC4.avif', '2024-10-16 02:58:03', '2024-10-16 02:58:03'),
	(2, 'at&t', 'img_socios_villaflores/Nue9FM8ghaWEDJOkX2YfNvdsnMD5tYmTGrignryI.svg', '2024-10-16 02:58:17', '2024-10-16 02:58:17'),
	(3, 'elite-lockers', 'img_socios_villaflores/mNt2it0IRajzD8P3ga10sA8cuJJae7wNqXWbhFBU.webp', '2024-10-16 02:58:44', '2024-10-16 02:58:44'),
	(4, 'dominos', 'img_socios_villaflores/vhJO7i7ERBWmjaN8VlCRaNqN4sNmypo4enL7fg7m.png', '2024-10-16 02:59:13', '2024-10-16 02:59:13'),
	(5, 'subway', 'img_socios_villaflores/gdauoRRjV9w40CdFWPuzyZnTJufeDZHqBMZj1zgJ.png', '2024-10-16 02:59:35', '2024-10-16 02:59:35'),
	(6, 'bodega aurrera', 'img_socios_villaflores/vGWsO4tKm1wHpmYESPIzqHqs01lXvSK8cMDKCKNL.png', '2024-10-16 02:59:45', '2024-10-16 02:59:45'),
	(7, 'cinepolis', 'img_socios_villaflores/NOwRXWX9x9vvJ1P7RP7p1hbZ65hCHRU4oNTwcu9y.png', '2024-10-16 02:59:59', '2024-10-16 02:59:59'),
	(8, 'hang ten', 'img_socios_villaflores/Dw9bjewlVBWaPj8VTHxknuHpyEz9V4rPPIFRQucG.png', '2024-10-16 03:00:11', '2024-10-16 03:00:11'),
	(9, 'optica americana', 'img_socios_villaflores/fJAEgzX3I1eRaD1zVEKg32oEKEKwmuOmVLffan1X.svg', '2024-10-16 03:00:26', '2024-10-16 03:00:26');

-- Volcando estructura para tabla plazaflores.teams
DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.teams: ~0 rows (aproximadamente)
INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Administrador\'s Team', 1, '2024-09-10 05:17:51', '2024-09-10 05:17:51');

-- Volcando estructura para tabla plazaflores.team_invitations
DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE IF NOT EXISTS `team_invitations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`),
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.team_invitations: ~0 rows (aproximadamente)

-- Volcando estructura para tabla plazaflores.team_user
DROP TABLE IF EXISTS `team_user`;
CREATE TABLE IF NOT EXISTS `team_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `team_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.team_user: ~0 rows (aproximadamente)

-- Volcando estructura para tabla plazaflores.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla plazaflores.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'admin@gmail.com', NULL, '$2y$12$zR8jaTKR4u/x0w8dK1s8CuDnPPf4Zasqjtgze05FziycWJJW9WyWa', NULL, NULL, NULL, 'BmwFL97WUrYI3wHtayKG1qkWWvP9quLsDEzWxR3qrkm1XPpB4jsqITtKTs6g', 1, NULL, '2024-09-10 05:17:51', '2024-09-10 05:17:52');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
