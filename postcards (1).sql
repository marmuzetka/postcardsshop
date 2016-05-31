-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 31 2016 г., 01:43
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `postcards`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `password`, `email`) VALUES
(1, 'weqw', 'qweqw', '1111', 'a.fedorov@astoundcommerce.com');

-- --------------------------------------------------------

--
-- Структура таблицы `postcards`
--

CREATE TABLE IF NOT EXISTS `postcards` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `postcards`
--

INSERT INTO `postcards` (`id`, `name`, `image_path`, `price`) VALUES
(1, 'Post Card 1', 'images/postcard-image-1.jpg', 3.30),
(2, 'Post Card 2', 'images/postcard-image-2.jpg', 2.00),
(3, 'Post Card 3', 'images/postcard-image-3.jpg', 3.00),
(4, 'Post Card 4', 'images/postcard-image-4.jpg', 3.30),
(5, 'Post Card 5', 'images/postcard-image-5.jpg', 3.30),
(6, 'Post Card 6', 'images/postcard-image-6.jpg', 3.00),
(7, 'Post Card 7', 'images/postcard-image-7.jpg', 3.00),
(8, 'Post Card 8', 'images/postcard-image-8.jpg', 2.80),
(9, 'Post Card 9', 'images/postcard-image-9.jpg', 3.00),
(10, 'Post Card 10', 'images/postcard-image-10.jpg', 3.30),
(11, 'Post Card 11', 'images/postcard-image-11.jpg', 3.00),
(12, 'Post Card 12', 'images/postcard-image-12.jpg', 2.00),
(13, 'Post Card 13', 'images/postcard-image-13.jpg', 3.30),
(14, 'Post Card 14', 'images/postcard-image-14.jpg', 2.80),
(15, 'Post Card 15', 'images/postcard-image-15.jpg', 3.00),
(16, 'Post Card 16', 'images/postcard-image-16.jpg', 2.80),
(17, 'Post Card 17', 'images/postcard-image-17.jpg', 3.30),
(18, 'Post Card 18', 'images/postcard-image-18.jpg', 3.00),
(19, 'Post Card 19', 'images/postcard-image-19.jpg', 3.00),
(20, 'Post Card 20', 'images/postcard-image-20.jpg', 2.80),
(21, 'Post Card 21', 'images/postcard-image-21.jpg', 3.30),
(22, 'Post Card 22', 'images/postcard-image-22.jpg', 3.30),
(23, 'Post Card 23', 'images/postcard-image-23.jpg', 2.00),
(24, 'Post Card 24', 'images/postcard-image-24.jpg', 3.30),
(25, 'Post Card 25', 'images/postcard-image-25.jpg', 3.00),
(26, 'Post Card 26', 'images/postcard-image-26.jpg', 3.00),
(27, 'Post Card 27', 'images/postcard-image-27.jpg', 2.00),
(28, 'Post Card 28', 'images/postcard-image-28.jpg', 3.30),
(29, 'Post Card 29', 'images/postcard-image-29.jpg', 3.00),
(30, 'Post Card 30', 'images/postcard-image-30.jpg', 3.00),
(31, 'Post Card 31', 'images/postcard-image-31.jpg', 3.30),
(32, 'Post Card 32', 'images/postcard-image-32.jpg', 3.00),
(33, 'Post Card 33', 'images/postcard-image-33.jpg', 3.00),
(34, 'Post Card 34', 'images/postcard-image-34.jpg', 2.0),
(35, 'Post Card 35', 'images/postcard-image-35.jpg', 2.80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
