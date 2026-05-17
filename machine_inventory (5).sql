-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2026 at 05:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `machine_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `deleted_at`, `added_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Abaipur', 1, NULL, 1, 1, NULL, '2026-04-08 13:46:46', '2026-04-11 09:32:08'),
(2, 'MKS', 1, NULL, 1, NULL, NULL, '2026-04-09 10:45:02', '2026-04-09 10:45:02'),
(3, 'Protex', 1, NULL, 1, NULL, NULL, '2026-04-09 10:45:12', '2026-04-09 10:45:12'),
(4, 'Lynch LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(5, 'Frami-Orn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(6, 'Kohler Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(7, 'Anderson Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(8, 'Schiller, Frami and Gislason', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(9, 'Green-Grady', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(10, 'Pouros-Reinger', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(11, 'Keeling-Grady', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(12, 'Hackett, Turcotte and Hahn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(13, 'Eichmann and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(14, 'West PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(15, 'Carter, Howe and Friesen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(16, 'Schinner Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(17, 'Powlowski-Schiller', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(18, 'Crooks, Greenfelder and Kutch', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(19, 'Huel, Wuckert and Gerlach', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(20, 'Fadel Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(21, 'Reichert LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(22, 'McClure, Ferry and Schinner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(23, 'Kuhn-Aufderhar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(24, 'Runte-Thiel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(25, 'Padberg, Sipes and Haag', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(26, 'Denesik LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(27, 'Kovacek Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(28, 'Abernathy-Jones', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(29, 'Schiller, Lebsack and Bechtelar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(30, 'Rohan-Effertz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(31, 'Dicki-Graham', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(32, 'Dickens Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(33, 'Muller-Sipes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(34, 'Jakubowski, Gislason and Dickens', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(35, 'Rau-Sauer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(36, 'Ondricka, Russel and Towne', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(37, 'Gibson-Gerhold', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(38, 'Treutel, Huels and Keeling', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(39, 'Brown-Keeling', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(40, 'Windler-Ritchie', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(41, 'Bartell-Kshlerin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(42, 'Kub, Conn and Borer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(43, 'Rodriguez and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(44, 'Ortiz, Keeling and Hill', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(45, 'Mosciski, Prosacco and Becker', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(46, 'Miller LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(47, 'Dickens, Kihn and Schoen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(48, 'Purdy-Turner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(49, 'Will PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(50, 'Wilkinson-Kunde', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(51, 'Conn LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(52, 'Stroman Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(53, 'Yost-Reilly', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(54, 'Gottlieb-Frami', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(55, 'Veum, Yost and Stamm', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(56, 'VonRueden, Kshlerin and Pollich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(57, 'Moore, Champlin and Romaguera', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(58, 'Hoppe-Haag', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(59, 'Blick, O\'Connell and Funk', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(60, 'Botsford LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(61, 'Abshire Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(62, 'Kozey Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(63, 'Howell, Eichmann and Heaney', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(64, 'Little-Orn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(65, 'McKenzie-Schaefer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(66, 'Bashirian, Schmidt and Grant', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(67, 'Beer-O\'Conner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(68, 'Swift, Sauer and O\'Keefe', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(69, 'Blick, Mosciski and Moen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(70, 'Shanahan, Kunze and Bartell', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(71, 'Lebsack Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(72, 'Beatty-Watsica', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(73, 'Dooley-Toy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(74, 'Heaney Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(75, 'Renner Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(76, 'Murazik Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(77, 'Harvey-Strosin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(78, 'Nader Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(79, 'Ward-Windler', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(80, 'Block Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(81, 'White LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(82, 'Hayes-Schneider', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(83, 'McGlynn Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(84, 'Sporer-Ankunding', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(85, 'Tromp PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(86, 'Romaguera Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(87, 'Baumbach, Treutel and Paucek', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(88, 'McDermott-Erdman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(89, 'Gibson-Gislason', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(90, 'Rohan-Berge', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(91, 'Hahn LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(92, 'Pagac, Haley and Krajcik', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(93, 'McKenzie, Dooley and Mohr', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(94, 'Dach Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(95, 'Bashirian-Medhurst', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(96, 'Hintz and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(97, 'Doyle Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(98, 'Kris Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(99, 'Runte, Bartell and Predovic', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(100, 'Nicolas-Streich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(101, 'Abshire, Gerlach and Auer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(102, 'Zboncak-Blanda', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(103, 'D\'Amore LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(104, 'Johns, Ziemann and Bergnaum', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(105, 'Mills-Schulist', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(106, 'Schimmel, Littel and Miller', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(107, 'Will LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(108, 'Jacobson-Sipes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(109, 'Johnson Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(110, 'Pagac, Aufderhar and Mitchell', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(111, 'Labadie, Bernier and Lind', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(112, 'Wuckert Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(113, 'Nader-Mueller', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(114, 'Stroman-Rippin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(115, 'Toy, Kuhic and Mertz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(116, 'Jacobs-Murray', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(117, 'Anderson, Russel and Roob', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(118, 'Bosco-Hane', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(119, 'Littel-Hudson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(120, 'Connelly Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(121, 'Kuhic, Herman and Gerhold', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(122, 'Bergnaum, Emmerich and Kozey', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(123, 'Hoeger-Trantow', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(124, 'Macejkovic, Wilderman and Oberbrunner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(125, 'Pouros, Miller and Ullrich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(126, 'Hickle LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(127, 'Torp Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(128, 'Goodwin, Barrows and Schowalter', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(129, 'Reynolds, McClure and Hansen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(130, 'Kunze-Kovacek', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(131, 'Yundt, Jaskolski and Barrows', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(132, 'Schmitt-Abshire', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(133, 'Kuvalis-Armstrong', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(134, 'Kertzmann, Harber and McClure', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(135, 'Kuhn, Jacobi and Stokes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(136, 'Champlin-Kihn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(137, 'Jaskolski-Swaniawski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(138, 'Strosin, Bradtke and Osinski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(139, 'King-Walsh', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(140, 'Turner-Skiles', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(141, 'Stracke and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(142, 'Huels-Bernier', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(143, 'Fay LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(144, 'Brakus PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(145, 'Torp-Klocko', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(146, 'Walter Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(147, 'Witting and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(148, 'Gislason, Bogan and Crooks', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(149, 'Upton-Roberts', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(150, 'Hessel, Treutel and Kessler', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(151, 'Schroeder-Lakin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(152, 'Lueilwitz-Larkin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(153, 'Ondricka LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(154, 'Hermiston-Kreiger', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(155, 'Grady Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(156, 'Mraz, Pagac and Herzog', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(157, 'Schneider, Hermann and Stamm', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(158, 'Funk-Kerluke', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(159, 'Watsica, Hackett and Bahringer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(160, 'Hoeger-Corwin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(161, 'Reynolds, Kertzmann and Durgan', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(162, 'Rolfson-Feest', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(163, 'Corwin-Harris', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(164, 'Vandervort-Parisian', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(165, 'Howell, Prosacco and Jakubowski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(166, 'Windler PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(167, 'Bergstrom, Muller and Deckow', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(168, 'Hodkiewicz-Thompson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(169, 'Bartoletti Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(170, 'Ward Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(171, 'Treutel, Boyle and Heathcote', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(172, 'Mueller PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(173, 'Flatley-Hill', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(174, 'Rice-Treutel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(175, 'Welch, Gaylord and Streich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(176, 'Purdy-Greenholt', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(177, 'Jones-Hane', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(178, 'Wehner, Walter and Yundt', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(179, 'Schneider Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(180, 'Beier Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(181, 'Jaskolski and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(182, 'Hamill and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(183, 'Rolfson Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(184, 'Jacobi-Bahringer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(185, 'Wilderman-Rempel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(186, 'Keebler-Eichmann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(187, 'Pagac, Russel and Sawayn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(188, 'Muller, Kulas and Renner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(189, 'Fay, Pfannerstill and Hermiston', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(190, 'Fay, Kertzmann and Quitzon', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(191, 'Mayer, Miller and Roob', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(192, 'Stark Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(193, 'Streich-Herzog', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(194, 'Wolf-Upton', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(195, 'Cummerata, Ratke and Hagenes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(196, 'Bednar, Keeling and Runte', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(197, 'O\'Keefe Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(198, 'Rice-Ullrich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(199, 'Collier-Douglas', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(200, 'Fadel PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(201, 'Tremblay Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(202, 'Gorczany Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(203, 'Hodkiewicz-Dach', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(204, 'Block PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(205, 'Weissnat, Cassin and Schroeder', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(206, 'Kirlin LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(207, 'Homenick Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(208, 'King Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(209, 'Hoppe Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(210, 'Wuckert, Jones and Ankunding', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(211, 'Jenkins, Corkery and Auer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(212, 'Ritchie, Becker and Lehner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(213, 'Wisoky, Bogan and Waelchi', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(214, 'Leuschke, Roberts and Anderson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(215, 'Wiza Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(216, 'Quigley, Stanton and Wiza', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(217, 'Wiza, Kiehn and Schaden', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(218, 'Brown, Volkman and Powlowski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(219, 'Towne, Bahringer and Hand', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(220, 'Casper, Tromp and Bins', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(221, 'Carter, Jenkins and Ruecker', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(222, 'Ankunding-Kreiger', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(223, 'Hills-Schroeder', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(224, 'Hyatt, Wunsch and Weimann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(225, 'Waters, Rowe and Jerde', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(226, 'Lubowitz, Farrell and Langosh', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(227, 'Boyer LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(228, 'Aufderhar LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(229, 'Gottlieb-Okuneva', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(230, 'Gutmann Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(231, 'Crooks PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(232, 'Leannon-Torphy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(233, 'DuBuque-Hauck', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(234, 'Rosenbaum-Bogisich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(235, 'Shanahan, Kris and Dickinson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(236, 'Mayert PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(237, 'Heathcote-Luettgen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(238, 'Lemke-Koss', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(239, 'Weissnat, Murazik and Boyle', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(240, 'Schuppe, Okuneva and Wolff', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(241, 'Hessel-Prohaska', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(242, 'Osinski-Abernathy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(243, 'O\'Kon LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(244, 'Sanford Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(245, 'Kassulke-Lockman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(246, 'Steuber, Pouros and Schaefer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(247, 'Ritchie-Prosacco', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(248, 'Senger-Rutherford', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(249, 'Hermann and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(250, 'Hyatt-Hills', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(251, 'Steuber-Bechtelar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(252, 'Osinski, Koch and Becker', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(253, 'Blick-Johnston', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(254, 'Carter Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(255, 'Larson-Bogisich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(256, 'Schumm LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(257, 'Torphy-Borer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(258, 'Heidenreich, Mosciski and Witting', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(259, 'Kertzmann, Rath and Parisian', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(260, 'Maggio-Terry', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(261, 'Yundt-Marks', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(262, 'Kuphal PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(263, 'Lockman-Osinski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(264, 'Rippin-McCullough', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(265, 'O\'Reilly LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(266, 'Thiel Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(267, 'Stracke Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(268, 'Langworth PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(269, 'Armstrong-Mosciski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(270, 'Ernser Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(271, 'Pagac-Pacocha', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(272, 'Okuneva, Bode and Dare', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(273, 'Reichel-Lueilwitz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(274, 'O\'Hara, Dare and Larkin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(275, 'Wolff, Ferry and Jenkins', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(276, 'Beier LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(277, 'Grimes Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(278, 'Haag, Adams and Welch', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(279, 'Kunze, Rutherford and Herzog', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(280, 'Legros-Connelly', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(281, 'Pfeffer, Schoen and Murazik', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(282, 'Reichel, Hagenes and Runolfsdottir', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(283, 'Kilback, O\'Reilly and Kshlerin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(284, 'Powlowski, Konopelski and Kub', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(285, 'Christiansen LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(286, 'Harris, Kris and McCullough', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(287, 'Fisher PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(288, 'Nikolaus, Okuneva and Welch', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(289, 'Gottlieb-Ondricka', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(290, 'Jerde-Murray', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(291, 'Abernathy-Strosin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(292, 'Skiles, Koepp and Homenick', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(293, 'Schamberger-Hammes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(294, 'Littel Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(295, 'Hahn, Marks and Hackett', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(296, 'Bartell, Harvey and Predovic', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(297, 'Beier, Feest and Gleichner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(298, 'Schiller-Kiehn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(299, 'Wiegand-Kessler', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(300, 'Jaskolski, Rath and Gaylord', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(301, 'Zieme-Mann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(302, 'Medhurst-Grimes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(303, 'Pfeffer Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(304, 'Upton-Stracke', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(305, 'Krajcik Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(306, 'Kiehn-Huel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(307, 'Kertzmann Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(308, 'Rosenbaum-Murazik', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(309, 'Hilpert-Torphy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(310, 'Kshlerin Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(311, 'Fritsch-Hayes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(312, 'Schneider, Vandervort and King', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(313, 'Hermann Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(314, 'Zboncak, Strosin and Adams', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(315, 'Hermann-Rutherford', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(316, 'Kerluke, Hirthe and Steuber', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(317, 'Connelly-Schneider', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(318, 'Schuppe, Rau and Fahey', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(319, 'Kerluke-Beer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:52', '2026-04-09 11:26:52'),
(320, 'Corkery, Yundt and Baumbach', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(321, 'Dooley, Kohler and Dietrich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(322, 'Pollich-Eichmann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(323, 'Steuber, Waters and Bruen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(324, 'Murphy-Weber', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(325, 'Jakubowski, O\'Reilly and Turcotte', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(326, 'Medhurst-Homenick', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(327, 'Harber PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(328, 'Hudson, Feest and Hickle', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(329, 'Konopelski-King', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(330, 'Skiles, Schulist and Johnston', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(331, 'Bergstrom PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(332, 'Beatty, Moore and Homenick', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(333, 'Bartell, Shanahan and Jerde', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(334, 'Abbott, Hintz and White', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(335, 'Schuster, Runolfsdottir and Ward', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(336, 'Feeney, Mraz and Gaylord', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(337, 'Boyer, Flatley and Rohan', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(338, 'West-Heaney', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(339, 'Kuhn Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(340, 'Witting Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(341, 'Brown Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(342, 'Kassulke, Barton and White', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(343, 'Kiehn PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(344, 'Nader PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(345, 'Osinski, Trantow and Zulauf', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(346, 'Lang, Crist and Jakubowski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(347, 'Heathcote, Schiller and Kassulke', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(348, 'Harber-Krajcik', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(349, 'Carter, Paucek and Spencer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(350, 'Glover LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(351, 'Gulgowski Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(352, 'Feil LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(353, 'Graham and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(354, 'Zboncak, Stroman and Goyette', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(355, 'Kris, Konopelski and Feest', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(356, 'Rice Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(357, 'Sipes and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(358, 'Hodkiewicz Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(359, 'Mayert-Cruickshank', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(360, 'DuBuque Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(361, 'Bechtelar, Lehner and Hill', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(362, 'Leannon-Bruen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(363, 'Erdman-Batz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(364, 'Hayes-Waters', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(365, 'West Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(366, 'Kuhn, Grant and Hermann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(367, 'Hettinger, Steuber and Bahringer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(368, 'Rosenbaum Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(369, 'Hirthe-Friesen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(370, 'Jakubowski-King', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(371, 'Krajcik Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(372, 'Bechtelar, Dibbert and Thompson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(373, 'Brakus and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(374, 'Barrows PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(375, 'Nitzsche, Wiza and Hansen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(376, 'Lebsack and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(377, 'Brakus, Farrell and Bashirian', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(378, 'Tillman, Konopelski and Grimes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(379, 'Jones, Hackett and Lockman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(380, 'Crist Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(381, 'Runolfsdottir, Bailey and Jaskolski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(382, 'Braun, Adams and Altenwerth', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(383, 'Johnson Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(384, 'Larkin LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(385, 'Boyle Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(386, 'Stamm-Rau', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(387, 'Jast Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(388, 'VonRueden-Upton', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(389, 'Ankunding Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(390, 'Raynor, Grady and Stanton', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(391, 'Ruecker-Haley', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(392, 'Bogan, Rau and Koss', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(393, 'Anderson, Bergstrom and Streich', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(394, 'Ankunding-Konopelski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(395, 'Effertz and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(396, 'Koch Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(397, 'Rippin, Murazik and Roob', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(398, 'Fadel-Herman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(399, 'Collins-Rosenbaum', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(400, 'Schultz LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(401, 'Windler-Pagac', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(402, 'Miller and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(403, 'Green-McDermott', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(404, 'Dickinson PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(405, 'Keebler, Hettinger and Erdman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(406, 'Becker, Williamson and Hilpert', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(407, 'Strosin-Hudson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(408, 'Hegmann LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(409, 'Goyette-Goodwin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(410, 'Schneider, Hammes and Runolfsson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(411, 'Keeling, Feest and Kunze', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(412, 'Pouros, Lakin and Fadel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(413, 'Padberg, Leffler and Armstrong', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(414, 'Hettinger-Lakin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(415, 'Spencer Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(416, 'Nader-Treutel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(417, 'Gislason, Nicolas and Johnston', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(418, 'Bruen, Botsford and Durgan', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(419, 'Huel Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(420, 'Satterfield, Rice and Conroy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(421, 'Nikolaus Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(422, 'Tremblay-Nicolas', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(423, 'Jast and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(424, 'Rau Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(425, 'Hintz-Rutherford', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(426, 'Kessler LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(427, 'Reichert-Bradtke', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(428, 'Carter, Deckow and Wilderman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(429, 'Kozey-Mante', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(430, 'DuBuque, Lubowitz and Towne', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(431, 'Hartmann, Johnston and Lehner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(432, 'Ernser, Kuhic and Doyle', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(433, 'Zboncak Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(434, 'Stracke, Ferry and Wintheiser', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(435, 'Sawayn, Veum and Jast', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(436, 'Shanahan, Gorczany and McKenzie', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(437, 'Moore, Grady and Hagenes', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(438, 'Cruickshank, Shanahan and Conn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(439, 'Barrows-Torphy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(440, 'Witting, Mertz and Johns', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(441, 'Bashirian-Wunsch', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(442, 'Schumm-Kozey', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(443, 'Metz-Purdy', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(444, 'Ledner Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(445, 'Pfeffer Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(446, 'Mitchell-Feil', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(447, 'Rohan and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(448, 'Kautzer and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(449, 'Homenick-Aufderhar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(450, 'Glover-Runolfsson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(451, 'White, Thompson and Rath', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(452, 'Schmidt-Gleichner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(453, 'Jones and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(454, 'Sporer and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(455, 'Marquardt-Ratke', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(456, 'Gislason PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(457, 'Douglas, Jaskolski and Koss', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(458, 'Nienow Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(459, 'Vandervort, Hegmann and Bednar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(460, 'Fahey LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(461, 'Ritchie, Glover and Beer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(462, 'McClure Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(463, 'McClure Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(464, 'Sawayn-Hane', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(465, 'Wehner, O\'Reilly and Mertz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(466, 'Beahan Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(467, 'Kirlin and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(468, 'Carroll LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(469, 'Daugherty, Gleason and Wisozk', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(470, 'Wolff LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(471, 'Adams-Hessel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(472, 'Boyle, Schuster and Reichel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(473, 'Breitenberg PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(474, 'Stokes-Medhurst', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(475, 'Schiller, O\'Reilly and Abshire', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(476, 'Grady-Friesen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(477, 'Witting, Leuschke and Bayer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(478, 'McLaughlin-Kiehn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(479, 'Jakubowski-Schuster', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(480, 'Frami, Larson and Waters', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(481, 'Baumbach-Schuster', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(482, 'Wilderman, Steuber and Mann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(483, 'Cummerata, Mayert and Larkin', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(484, 'Dooley and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(485, 'Kirlin-Gerhold', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(486, 'Mante, Aufderhar and Cummerata', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(487, 'Lemke-Oberbrunner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(488, 'Wolf PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(489, 'Greenholt-Breitenberg', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(490, 'Johns, Sanford and Bauch', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(491, 'Reichert, Konopelski and Kilback', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(492, 'Schmitt and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(493, 'Littel Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(494, 'Toy-Zieme', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(495, 'Weber Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(496, 'Stanton, Yost and Renner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(497, 'Jaskolski-Fadel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(498, 'Terry Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(499, 'Hickle PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(500, 'Rodriguez-Ortiz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(501, 'Lowe-Lockman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53');
INSERT INTO `brands` (`id`, `name`, `status`, `deleted_at`, `added_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(502, 'Breitenberg Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(503, 'Thiel-Medhurst', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(504, 'Marvin, Thompson and Price', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(505, 'Streich PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(506, 'Stark and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(507, 'Tremblay, Bahringer and Wilkinson', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(508, 'Kautzer, Greenfelder and Daniel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(509, 'Luettgen-Effertz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(510, 'Kling, Schneider and Kuhic', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(511, 'Wolff Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(512, 'Oberbrunner, Hermann and Zemlak', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(513, 'Boyer Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(514, 'Jacobson and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(515, 'Goldner, Hammes and Wisoky', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(516, 'Watsica-Bartell', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(517, 'Hill Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(518, 'Fahey-Stroman', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(519, 'Kassulke, Davis and Stamm', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(520, 'Schowalter, Macejkovic and Renner', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(521, 'Olson Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(522, 'Toy, Hilpert and Hegmann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(523, 'Paucek Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(524, 'Green Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(525, 'Kreiger Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(526, 'Heaney Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(527, 'Kertzmann and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(528, 'Emmerich-Kuphal', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(529, 'McCullough, Wyman and Yundt', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(530, 'Mills-Hilpert', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(531, 'Ortiz, Kunze and Ortiz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(532, 'Rowe, Hilpert and Weimann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(533, 'Schamberger-Trantow', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(534, 'Parisian and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(535, 'Haley LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(536, 'O\'Conner, Johnston and Morar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(537, 'Ratke and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(538, 'Hintz Group', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(539, 'Kuhic-Hartmann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(540, 'DuBuque-Wolff', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(541, 'Bode-Pouros', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(542, 'Yundt and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(543, 'Yost, Parker and Connelly', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(544, 'Jacobs, Hane and Sawayn', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(545, 'Reichel Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(546, 'Prohaska, Macejkovic and Murray', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(547, 'Marvin, Borer and Greenfelder', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(548, 'Bartell and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(549, 'Friesen, Kuhn and Wiegand', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(550, 'Reichert-Cole', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(551, 'Goyette, Gutmann and Bashirian', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(552, 'Cassin, Hansen and Buckridge', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(553, 'Marks LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(554, 'Heaney Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(555, 'Corkery Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(556, 'Kilback-Aufderhar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(557, 'Koelpin, Champlin and Rice', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(558, 'Mann-Aufderhar', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(559, 'Funk LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(560, 'Howell-Bode', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(561, 'Stracke Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(562, 'Heidenreich, Cartwright and Hilpert', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(563, 'Greenholt-Kuvalis', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(564, 'Kuhn-Nicolas', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(565, 'Bechtelar-Hodkiewicz', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(566, 'Grant, Kilback and Yost', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(567, 'Wiegand-Harris', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(568, 'Cronin, Daugherty and Cole', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(569, 'Kuhlman Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(570, 'Kshlerin PLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(571, 'Gerhold-Bins', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(572, 'Nicolas and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(573, 'Bednar, O\'Hara and Lind', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(574, 'Anderson, Gutmann and Friesen', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(575, 'Spinka Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(576, 'Hintz, Pollich and Hessel', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(577, 'Luettgen Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(578, 'Schoen and Sons', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(579, 'Botsford-Weimann', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(580, 'Kunde-Konopelski', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(581, 'Krajcik, Kihn and Hand', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(582, 'Heller, Miller and Will', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(583, 'Stiedemann-Grady', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(584, 'Wisoky Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(585, 'Huel, Schneider and Durgan', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(586, 'Swaniawski, Nicolas and Mayer', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(587, 'Abbott-Schroeder', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(588, 'Dicki Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(589, 'Murphy-Towne', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(590, 'McLaughlin, Trantow and Funk', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(591, 'Dickinson Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(592, 'Upton, Davis and Funk', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(593, 'Kerluke, Lakin and Cole', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(594, 'Orn-Block', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(595, 'Pfannerstill Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(596, 'Cassin Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(597, 'Tromp Ltd', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(598, 'O\'Connell, Berge and Kuphal', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(599, 'Emard, Beier and Parisian', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(600, 'Reynolds-Marquardt', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(601, 'Green, McCullough and Ward', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(602, 'Anderson LLC', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(603, 'Kub Inc', 1, NULL, NULL, NULL, NULL, '2026-04-09 11:26:53', '2026-04-09 11:26:53'),
(604, 'Wayasel Ahmmed', 0, '2026-04-11 08:50:25', 1, 1, 1, '2026-04-10 10:10:00', '2026-04-11 08:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `factory_id` bigint UNSIGNED DEFAULT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `factory_id`, `department_name`, `status`, `added_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Department Name update', '0', 1, 1, 1, '2026-04-14 09:43:36', '2026-04-14 09:44:05', '2026-04-14 09:44:05'),
(2, 1, 'Department Name', '1', 1, NULL, NULL, '2026-04-29 11:57:14', '2026-04-29 11:57:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `name`, `short_name`, `location`, `company_email`, `company_phone`, `created_at`, `updated_at`) VALUES
(1, 'Mars Stitch Ltd', 'Mars Stitch Ltd', 'Gazipur', 'marsswitchltd@gmail.com', '01738744957', '2026-04-06 16:56:31', '2026-04-06 16:56:31'),
(2, '4A Yarn Dyeing Ltd', '4A Yarn Dyeing Ltd', 'Demra', '4ayarn@gmail.com', '01754367897', '2026-04-07 17:20:11', '2026-04-07 17:20:11'),
(3, 'South end sweater', 'South end sweater', 'Dhaka', 'southendsweater1@gmail.com', '01963478543', '2026-04-06 16:56:31', '2026-04-06 16:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint UNSIGNED NOT NULL,
  `factory_id` bigint UNSIGNED NOT NULL,
  `floor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_sequence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `factory_id`, `floor_name`, `sort_sequence`, `status`, `added_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'abc upd', '2', NULL, 1, 1, NULL, '2026-04-15 12:15:14', '2026-04-15 12:17:41', NULL),
(2, 3, 'abc', '2', NULL, 1, 1, NULL, '2026-04-15 12:20:05', '2026-04-15 12:47:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `factory_id` bigint UNSIGNED DEFAULT NULL,
  `floor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_sequence` int NOT NULL DEFAULT '0',
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `factory_id`, `floor`, `location_name`, `location_type`, `sort_sequence`, `institution`, `status`, `added_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, NULL, 'BR L01', 'yard', 1, NULL, '0', NULL, 1, 1, '2026-04-14 08:59:40', '2026-04-15 13:04:50', NULL),
(3, 1, NULL, 'Line No- 1', 'production', 1, NULL, '0', NULL, 1, 1, '2026-04-14 09:20:30', '2026-04-15 10:02:12', NULL),
(4, 2, NULL, 'CB L-A', 'production', 1, NULL, '1', 1, 1, 1, '2026-04-14 09:21:33', '2026-04-15 10:02:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` bigint UNSIGNED NOT NULL,
  `machine_inventory_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `service_date` date DEFAULT NULL,
  `machine_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_purchase` text COLLATE utf8mb4_unicode_ci,
  `machine_value` decimal(15,2) DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `needle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciation` int DEFAULT NULL,
  `service_frequency` int DEFAULT NULL,
  `guarantee_period` int DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stitch_formation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `machine_summaries`
--

CREATE TABLE `machine_summaries` (
  `id` bigint UNSIGNED NOT NULL,
  `machine_inventory_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_control_box_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `machine_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason_for_purchase` text COLLATE utf8mb4_unicode_ci,
  `machine_value_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_value` decimal(15,2) DEFAULT NULL,
  `machine_value_per_day` decimal(15,2) DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `needle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depreciation_years` int DEFAULT NULL,
  `service_frequency_days` int DEFAULT NULL,
  `guarantee_period_years` int DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stitch_formation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `machine_types`
--

CREATE TABLE `machine_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `category` enum('sewing','non_sewing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sewing',
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machine_types`
--

INSERT INTO `machine_types` (`id`, `name`, `status`, `category`, `added_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Automatic Plastic Stapple Machine', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(2, 'ZIPPER PRE-EXPANSION MACHINE', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(3, 'SINGLE NEEDLE NEEDLE FEED VARTICAL MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(4, 'AUTO SINGLE NEEDLE LOCK STITCH DROP FEED MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(5, 'GSM Cutter', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(6, 'CYLINDER BED SLEEVE JOINING MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(7, 'ROTATING HEAD TEMPLATE SEWING MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(8, 'CHAIN STITCH MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(9, 'PP BELT CARTON STRAPPING MACHINE', 'active', 'sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(10, 'VACUUM CLEANER MACHINE update', 'active', 'non_sewing', NULL, 1, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 12:42:53'),
(11, 'PORTABLE ROLLER SPOTING STATION', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(12, 'LABEL CUTTER MACHINE', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(13, 'MINI ELECTRIC IRON', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(14, 'HAND NEEDLE DETECTOR', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 18:41:59'),
(15, 'COLLAR TURNER MACHINE', 'active', 'non_sewing', NULL, NULL, NULL, NULL, '2026-04-11 18:41:59', '2026-04-11 12:48:18'),
(16, 'Abaipur update', '', 'sewing', 1, 1, NULL, NULL, '2026-04-14 07:57:36', '2026-04-14 07:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_06_161845_create_permission_tables', 2),
(7, '2026_04_06_165116_create_factories_table', 4),
(8, '2026_04_06_170321_add_factory_id_to_users_table', 5),
(11, '2026_04_08_165157_create_brands_table', 6),
(12, '2026_04_10_182904_create_models_table', 7),
(13, '2026_04_11_181227_create_machine_types_table', 8),
(18, '2026_04_11_184935_create_machine_summaries_table', 9),
(19, '2026_04_11_190336_create_suppliers_table', 9),
(23, '2026_04_12_172521_create_needle_types_table', 10),
(24, '2026_04_14_141028_create_locations_table', 11),
(25, '2026_04_14_152809_create_departments_table', 12),
(26, '2026_04_15_160437_create_machines_table', 13),
(27, '2026_04_15_163419_create_floors_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `added_by` bigint DEFAULT NULL,
  `updated_by` bigint DEFAULT NULL,
  `deleted_by` bigint DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_id`, `name`, `status`, `added_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'Abaipur', 1, 1, 1, NULL, NULL, '2026-04-11 09:28:27', '2026-04-11 10:30:15'),
(2, 6, 'Admin', 0, 1, NULL, NULL, NULL, '2026-04-11 09:37:19', '2026-04-11 09:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 8),
(11, 'App\\Models\\User', 9);

-- --------------------------------------------------------

--
-- Table structure for table `needle_types`
--

CREATE TABLE `needle_types` (
  `id` bigint UNSIGNED NOT NULL,
  `needle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Shenpu u', 'web', '2026-04-06 11:09:15', '2026-04-08 11:25:06'),
(2, 'machines.view', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(3, 'machines.create', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(4, 'machines.edit', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(5, 'machines.delete', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(6, 'breakdowns.report', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(7, 'breakdowns.view', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(8, 'breakdowns.edit', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(9, 'services.schedule', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(10, 'services.complete', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(11, 'services.overdue.view', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(12, 'reports.view', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(13, 'reports.export', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(14, 'users.manage', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(15, 'roles.manage', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(16, 'planning.view', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(17, 'planning.edit', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `factory_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `factory_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'web', '2026-04-06 11:09:15', '2026-04-06 13:25:48'),
(2, NULL, 'Group Admin', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(3, NULL, 'Factory Manager', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(4, NULL, 'Maintenance Supervisor', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(5, NULL, 'Mechanic', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(6, NULL, 'Operator', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(7, NULL, 'Viewer', 'web', '2026-04-06 11:09:15', '2026-04-06 11:09:15'),
(8, NULL, 'Test Admin', 'web', '2026-04-06 12:54:45', '2026-04-06 12:54:45'),
(9, NULL, 'Abaipur', 'web', '2026-04-06 12:55:41', '2026-04-06 12:55:41'),
(10, 3, 'Super Admin', 'web', '2026-04-07 11:41:04', '2026-04-07 11:46:39'),
(11, 2, 'Masum Billal', 'web', '2026-04-07 12:05:48', '2026-04-07 12:05:48'),
(12, NULL, '1nomohadevpur  test', 'web', '2026-04-09 11:40:24', '2026-04-09 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(1, 2),
(2, 2),
(7, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(1, 3),
(2, 3),
(7, 3),
(9, 3),
(10, 3),
(12, 3),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(6, 5),
(7, 5),
(10, 5),
(6, 6),
(1, 7),
(12, 7),
(1, 8),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(1, 9),
(2, 9),
(5, 9),
(6, 9),
(9, 9),
(10, 9),
(13, 9),
(14, 9),
(17, 9),
(1, 10),
(2, 10),
(3, 10),
(7, 10),
(15, 10),
(2, 11),
(3, 11),
(7, 11),
(11, 11),
(15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fbLAHoHBwkBVjvNspKjIcnGxzFW5hMz6QwK4gskT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUkFPUng3bTJLWVdSTDNpZUtQcUNrbURwTnIxaFhPV1pMak96N2ZMVyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQ1OiJodHRwOi8vbWFjaGluZS1pbnZlbnRvcnkudGVzdC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6MTU6ImFkbWluLmRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1778415113),
('LeJOtob7d8gwqIR2t7jzSPjiNOlAhFO5LHC99Jee', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWJHamVOSkZadnBBUld5V0lFYXltQzRhbnRQNzVKT2g2Mzl0VkdsZiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9tYWNoaW5lLWludmVudG9yeS50ZXN0L2FkbWluL2Rhc2hib2FyZCI7czo1OiJyb3V0ZSI7czoxNToiYWRtaW4uZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1778412917);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_address` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `added_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_by` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_description`, `supplier_country`, `supplier_address`, `status`, `added_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'sfasd', 'sdfas', 'asdfa', 'fdaSDA', '1', 1, NULL, NULL, NULL, '2026-04-11 14:28:01', '2026-04-12 10:52:32'),
(2, 'dsf', 'sdf', 'sdf', 'sdaf', '1', 1, NULL, 1, '2026-04-12 10:41:56', '2026-04-12 10:24:15', '2026-04-12 10:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `factory_id` bigint DEFAULT NULL,
  `multi_company` tinyint(1) DEFAULT '0',
  `employee_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'operator',
  `status` tinyint(1) DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `factory_id`, `multi_company`, `employee_no`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'admin', 'admin@gmail.com', NULL, '$2y$12$IBlOduVGlFkNdC6OZRxIPuU8dV6p2OJgD/95naUqBGwvMmrXdpwM6', 'operator', 1, 'HGxGZ4VFvNNTkDJwYUUhqRcEjHpCjq6nN3QhnM7SwrTAIsVa2JUFk1u3U1HI', '2026-04-03 12:47:30', '2026-04-03 12:47:30'),
(8, 2, NULL, '5000', 'Abaipur', 'adminsd@gmail.com', NULL, '$2y$12$32DP1HBNlGyeOFG8gZTjd.clO.Y3tXyyJt5fdBJuLMmsWCCDFqoFy', 'operator', NULL, NULL, '2026-04-07 12:59:10', '2026-04-07 13:00:10'),
(9, 3, 1, '5001', '1nomohadevpur  test', 'admisan@gmail.com', NULL, '$2y$12$8VvhlWJcCBfu2yZOogyJ1eRNT4rA7wLDy2vfxXnOLnVxyszlg3hIW', 'operator', NULL, NULL, '2026-04-07 13:01:55', '2026-04-07 13:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD UNIQUE KEY `factories_company_email_unique` (`company_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `machines_machine_inventory_number_unique` (`machine_inventory_number`);

--
-- Indexes for table `machine_summaries`
--
ALTER TABLE `machine_summaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine_types`
--
ALTER TABLE `machine_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `models_name_unique` (`name`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `needle_types`
--
ALTER TABLE `needle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machine_summaries`
--
ALTER TABLE `machine_summaries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machine_types`
--
ALTER TABLE `machine_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `needle_types`
--
ALTER TABLE `needle_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
