-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 06:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `nutrient_recommender`
--

CREATE TABLE `nutrient_recommender` (
  `number` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `gender` varchar(50) COLLATE utf8_bin NOT NULL,
  `age_range` varchar(100) COLLATE utf8_bin NOT NULL,
  `nutrient_type` varchar(50) COLLATE utf8_bin NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `nutrient_recommender`
--

INSERT INTO `nutrient_recommender` (`number`, `type`, `gender`, `age_range`, `nutrient_type`, `value`) VALUES
(0, 'Normal', 'male', '1-3', 'Protein(g)', 12),
(1, 'Normal', 'female', '1-3', 'Protein(g)', 12),
(2, 'Normal', 'male', '4-8', 'Protein(g)', 16),
(3, 'Normal', 'female', '4-8', 'Protein(g)', 16),
(4, 'Normal', 'male', '9-13', 'Protein(g)', 31),
(5, 'Normal', 'female', '9-13', 'Protein(g)', 24),
(6, 'Normal', 'male', '14-18', 'Protein(g)', 49),
(7, 'Normal', 'female', '14-18', 'Protein(g)', 35),
(8, 'Normal', 'male', '19-30', 'Protein(g)', 52),
(9, 'Normal', 'female', '19-30', 'Protein(g)', 37),
(10, 'Normal', 'male', '31-50', 'Protein(g)', 52),
(11, 'Normal', 'female', '31-50', 'Protein(g)', 37),
(12, 'Normal', 'male', '51-70', 'Protein(g)', 52),
(13, 'Normal', 'female', '51-70', 'Protein(g)', 37),
(14, 'Normal', 'male', '>71', 'Protein(g)', 65),
(15, 'Normal', 'female', '>71', 'Protein(g)', 46),
(16, 'Pregnancy', 'female', '14-18', 'Protein(g)', 47),
(17, 'Pregnancy', 'female', '19-30', 'Protein(g)', 49),
(18, 'Pregnancy', 'female', '31-50', 'Protein(g)', 49),
(19, 'Lactation', 'female', '14-18', 'Protein(g)', 51),
(20, 'Lactation', 'female', '19-30', 'Protein(g)', 54),
(21, 'Lactation', 'female', '31-50', 'Protein(g)', 54),
(22, 'Normal', 'male', '1-3', 'Fat(g)', 5),
(23, 'Normal', 'female', '1-3', 'Fat(g)', 5),
(24, 'Normal', 'male', '4-8', 'Fat(g)', 8),
(25, 'Normal', 'female', '4-8', 'Fat(g)', 8),
(26, 'Normal', 'male', '9-13', 'Fat(g)', 10),
(27, 'Normal', 'female', '9-13', 'Fat(g)', 8),
(28, 'Normal', 'male', '14-18', 'Fat(g)', 12),
(29, 'Normal', 'female', '14-18', 'Fat(g)', 8),
(30, 'Normal', 'male', '19-30', 'Fat(g)', 13),
(31, 'Normal', 'female', '19-30', 'Fat(g)', 8),
(32, 'Normal', 'male', '31-50', 'Fat(g)', 13),
(33, 'Normal', 'female', '31-50', 'Fat(g)', 8),
(34, 'Normal', 'male', '51-70', 'Fat(g)', 13),
(35, 'Normal', 'female', '51-70', 'Fat(g)', 8),
(36, 'Normal', 'male', '>71', 'Fat(g)', 13),
(37, 'Normal', 'female', '>71', 'Fat(g)', 8),
(38, 'Pregnancy', 'female', '14-18', 'Fat(g)', 10),
(39, 'Pregnancy', 'female', '19-30', 'Fat(g)', 10),
(40, 'Pregnancy', 'female', '31-50', 'Fat(g)', 10),
(41, 'Lactation', 'female', '14-18', 'Fat(g)', 12),
(42, 'Lactation', 'female', '19-30', 'Fat(g)', 12),
(43, 'Lactation', 'female', '31-50', 'Fat(g)', 12),
(44, 'Normal', 'male', '1-3', 'Carbohydrate(g)', 100),
(45, 'Normal', 'female', '1-3', 'Carbohydrate(g)', 100),
(46, 'Normal', 'male', '4-8', 'Carbohydrate(g)', 100),
(47, 'Normal', 'female', '4-8', 'Carbohydrate(g)', 100),
(48, 'Normal', 'male', '9-13', 'Carbohydrate(g)', 100),
(49, 'Normal', 'female', '9-13', 'Carbohydrate(g)', 100),
(50, 'Normal', 'male', '14-18', 'Carbohydrate(g)', 100),
(51, 'Normal', 'female', '14-18', 'Carbohydrate(g)', 100),
(52, 'Normal', 'male', '19-30', 'Carbohydrate(g)', 100),
(53, 'Normal', 'female', '19-30', 'Carbohydrate(g)', 100),
(54, 'Normal', 'male', '31-50', 'Carbohydrate(g)', 100),
(55, 'Normal', 'female', '31-50', 'Carbohydrate(g)', 100),
(56, 'Normal', 'male', '51-70', 'Carbohydrate(g)', 100),
(57, 'Normal', 'female', '51-70', 'Carbohydrate(g)', 100),
(58, 'Normal', 'male', '>71', 'Carbohydrate(g)', 100),
(59, 'Normal', 'female', '>71', 'Carbohydrate(g)', 100),
(60, 'Pregnancy', 'female', '14-18', 'Carbohydrate(g)', 135),
(61, 'Pregnancy', 'female', '19-30', 'Carbohydrate(g)', 135),
(62, 'Pregnancy', 'female', '31-50', 'Carbohydrate(g)', 135),
(63, 'Lactation', 'female', '14-18', 'Carbohydrate(g)', 160),
(64, 'Lactation', 'female', '19-30', 'Carbohydrate(g)', 160),
(65, 'Lactation', 'female', '31-50', 'Carbohydrate(g)', 160),
(66, 'Normal', 'male', '1-3', 'Fibre(g)', 5),
(67, 'Normal', 'female', '1-3', 'Fibre(g)', 5),
(68, 'Normal', 'male', '4-8', 'Fibre(g)', 18),
(69, 'Normal', 'female', '4-8', 'Fibre(g)', 18),
(70, 'Normal', 'male', '9-13', 'Fibre(g)', 24),
(71, 'Normal', 'female', '9-13', 'Fibre(g)', 20),
(72, 'Normal', 'male', '14-18', 'Fibre(g)', 28),
(73, 'Normal', 'female', '14-18', 'Fibre(g)', 22),
(74, 'Normal', 'male', '19-30', 'Fibre(g)', 30),
(75, 'Normal', 'female', '19-30', 'Fibre(g)', 25),
(76, 'Normal', 'male', '31-50', 'Fibre(g)', 30),
(77, 'Normal', 'female', '31-50', 'Fibre(g)', 25),
(78, 'Normal', 'male', '51-70', 'Fibre(g)', 30),
(79, 'Normal', 'female', '51-70', 'Fibre(g)', 25),
(80, 'Normal', 'male', '>71', 'Fibre(g)', 30),
(81, 'Normal', 'female', '>71', 'Fibre(g)', 25),
(82, 'Pregnancy', 'female', '14-18', 'Fibre(g)', 25),
(83, 'Pregnancy', 'female', '19-30', 'Fibre(g)', 28),
(84, 'Pregnancy', 'female', '31-50', 'Fibre(g)', 28),
(85, 'Lactation', 'female', '14-18', 'Fibre(g)', 27),
(86, 'Lactation', 'female', '19-30', 'Fibre(g)', 30),
(87, 'Lactation', 'female', '31-50', 'Fibre(g)', 30),
(88, 'Normal', 'male', '1-3', 'Vit_A(mcg)', 210),
(89, 'Normal', 'female', '1-3', 'Vit_A(mcg)', 210),
(90, 'Normal', 'male', '4-8', 'Vit_A(mcg)', 275),
(91, 'Normal', 'female', '4-8', 'Vit_A(mcg)', 275),
(92, 'Normal', 'male', '9-13', 'Vit_A(mcg)', 445),
(93, 'Normal', 'female', '9-13', 'Vit_A(mcg)', 442),
(94, 'Normal', 'male', '14-18', 'Vit_A(mcg)', 630),
(95, 'Normal', 'female', '14-18', 'Vit_A(mcg)', 485),
(96, 'Normal', 'male', '19-30', 'Vit_A(mcg)', 625),
(97, 'Normal', 'female', '19-30', 'Vit_A(mcg)', 500),
(98, 'Normal', 'male', '31-50', 'Vit_A(mcg)', 625),
(99, 'Normal', 'female', '31-50', 'Vit_A(mcg)', 500),
(100, 'Normal', 'male', '51-70', 'Vit_A(mcg)', 625),
(101, 'Normal', 'female', '51-70', 'Vit_A(mcg)', 500),
(102, 'Normal', 'male', '>71', 'Vit_A(mcg)', 625),
(103, 'Normal', 'female', '>71', 'Vit_A(mcg)', 500),
(104, 'Pregnancy', 'female', '14-18', 'Vit_A(mcg)', 530),
(105, 'Pregnancy', 'female', '19-30', 'Vit_A(mcg)', 550),
(106, 'Pregnancy', 'female', '31-50', 'Vit_A(mcg)', 550),
(107, 'Lactation', 'female', '14-18', 'Vit_A(mcg)', 780),
(108, 'Lactation', 'female', '19-30', 'Vit_A(mcg)', 800),
(109, 'Lactation', 'female', '31-50', 'Vit_A(mcg)', 800),
(110, 'Normal', 'male', '1-3', 'Vit_C(mg)', 25),
(111, 'Normal', 'female', '1-3', 'Vit_C(mg)', 25),
(112, 'Normal', 'male', '4-8', 'Vit_C(mg)', 25),
(113, 'Normal', 'female', '4-8', 'Vit_C(mg)', 25),
(114, 'Normal', 'male', '9-13', 'Vit_C(mg)', 28),
(115, 'Normal', 'female', '9-13', 'Vit_C(mg)', 28),
(116, 'Normal', 'male', '14-18', 'Vit_C(mg)', 28),
(117, 'Normal', 'female', '14-18', 'Vit_C(mg)', 28),
(118, 'Normal', 'male', '19-30', 'Vit_C(mg)', 30),
(119, 'Normal', 'female', '19-30', 'Vit_C(mg)', 30),
(120, 'Normal', 'male', '31-50', 'Vit_C(mg)', 30),
(121, 'Normal', 'female', '31-50', 'Vit_C(mg)', 30),
(122, 'Normal', 'male', '51-70', 'Vit_C(mg)', 30),
(123, 'Normal', 'female', '51-70', 'Vit_C(mg)', 30),
(124, 'Normal', 'male', '>71', 'Vit_C(mg)', 30),
(125, 'Normal', 'female', '>71', 'Vit_C(mg)', 30),
(126, 'Pregnancy', 'female', '14-18', 'Vit_C(mg)', 38),
(127, 'Pregnancy', 'female', '19-30', 'Vit_C(mg)', 40),
(128, 'Pregnancy', 'female', '31-50', 'Vit_C(mg)', 40),
(129, 'Lactation', 'female', '14-18', 'Vit_C(mg)', 58),
(130, 'Lactation', 'female', '19-30', 'Vit_C(mg)', 60),
(131, 'Lactation', 'female', '31-50', 'Vit_C(mg)', 60),
(132, 'Normal', 'male', '1-3', 'Vit_E(mg)', 5),
(133, 'Normal', 'female', '1-3', 'Vit_E(mg)', 5),
(134, 'Normal', 'male', '4-8', 'Vit_E(mg)', 6),
(135, 'Normal', 'female', '4-8', 'Vit_E(mg)', 6),
(136, 'Normal', 'male', '9-13', 'Vit_E(mg)', 9),
(137, 'Normal', 'female', '9-13', 'Vit_E(mg)', 8),
(138, 'Normal', 'male', '14-18', 'Vit_E(mg)', 10),
(139, 'Normal', 'female', '14-18', 'Vit_E(mg)', 8),
(140, 'Normal', 'male', '19-30', 'Vit_E(mg)', 10),
(141, 'Normal', 'female', '19-30', 'Vit_E(mg)', 7),
(142, 'Normal', 'male', '31-50', 'Vit_E(mg)', 10),
(143, 'Normal', 'female', '31-50', 'Vit_E(mg)', 7),
(144, 'Normal', 'male', '51-70', 'Vit_E(mg)', 10),
(145, 'Normal', 'female', '51-70', 'Vit_E(mg)', 7),
(146, 'Normal', 'male', '>71', 'Vit_E(mg)', 10),
(147, 'Normal', 'female', '>71', 'Vit_E(mg)', 7),
(148, 'Pregnancy', 'female', '14-18', 'Vit_E(mg)', 8),
(149, 'Pregnancy', 'female', '19-30', 'Vit_E(mg)', 7),
(150, 'Pregnancy', 'female', '31-50', 'Vit_E(mg)', 7),
(151, 'Lactation', 'female', '14-18', 'Vit_E(mg)', 12),
(152, 'Lactation', 'female', '19-30', 'Vit_E(mg)', 11),
(153, 'Lactation', 'female', '31-50', 'Vit_E(mg)', 11),
(154, 'Normal', 'male', '1-3', 'Calcium(mg)', 360),
(155, 'Normal', 'female', '1-3', 'Calcium(mg)', 360),
(156, 'Normal', 'male', '4-8', 'Calcium(mg)', 520),
(157, 'Normal', 'female', '4-8', 'Calcium(mg)', 520),
(158, 'Normal', 'male', '9-13', 'Calcium(mg)', 2500),
(159, 'Normal', 'female', '9-13', 'Calcium(mg)', 2500),
(160, 'Normal', 'male', '14-18', 'Calcium(mg)', 1050),
(161, 'Normal', 'female', '14-18', 'Calcium(mg)', 1050),
(162, 'Normal', 'male', '19-30', 'Calcium(mg)', 840),
(163, 'Normal', 'female', '19-30', 'Calcium(mg)', 840),
(164, 'Normal', 'male', '31-50', 'Calcium(mg)', 840),
(165, 'Normal', 'female', '31-50', 'Calcium(mg)', 840),
(166, 'Normal', 'male', '51-70', 'Calcium(mg)', 840),
(167, 'Normal', 'female', '51-70', 'Calcium(mg)', 1100),
(168, 'Normal', 'male', '>71', 'Calcium(mg)', 1100),
(169, 'Normal', 'female', '>71', 'Calcium(mg)', 1100),
(170, 'Pregnancy', 'female', '14-18', 'Calcium(mg)', 1050),
(171, 'Pregnancy', 'female', '19-30', 'Calcium(mg)', 840),
(172, 'Pregnancy', 'female', '31-50', 'Calcium(mg)', 840),
(173, 'Lactation', 'female', '14-18', 'Calcium(mg)', 1050),
(174, 'Lactation', 'female', '19-30', 'Calcium(mg)', 840),
(175, 'Lactation', 'female', '31-50', 'Calcium(mg)', 840);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
