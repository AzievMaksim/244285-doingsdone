-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных shema
CREATE DATABASE IF NOT EXISTS `shema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shema`;

-- Дамп структуры для таблица shema.project_list
CREATE TABLE IF NOT EXISTS `project_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key_project` char(50) NOT NULL DEFAULT '0',
  `project_name` char(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shema.project_list: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `project_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_list` ENABLE KEYS */;

-- Дамп структуры для таблица shema.task_list
CREATE TABLE IF NOT EXISTS `task_list` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `id_project_name` int(12) NOT NULL,
  `id_to_email` int(12) NOT NULL,
  `title` char(64) NOT NULL,
  `data_create` datetime NOT NULL,
  `data_dedline` datetime NOT NULL,
  `data_completed` datetime NOT NULL,
  `status_task` char(12) NOT NULL,
  `image_link` char(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shema.task_list: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `task_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `task_list` ENABLE KEYS */;

-- Дамп структуры для таблица shema.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_time` datetime NOT NULL COMMENT 'дата/время регистрации',
  `email` char(50) NOT NULL,
  `name_login` char(50) DEFAULT NULL,
  `password_hash` char(64) NOT NULL,
  `project_name` char(32) NOT NULL, 
  `avatar_link` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shema.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
