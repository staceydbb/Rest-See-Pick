-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 12, 2025 at 07:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restseepick`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chef` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `cook_time` varchar(50) NOT NULL,
  `calories` varchar(50) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `chef`, `category`, `cook_time`, `calories`, `image_url`, `description`) VALUES
(1, 'Filipino Style Spaghetti', 'Stacey Ballares', 'Pasta', '40 mins', '600 kcal', 'https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2024-09-Filipino-spaghetti%2FFilipino-spaghetti-179', 'A beloved classic pasta dish, this version features a uniquely sweet, tomato-based sauce made with ground meat and distinctively savory-sweet additions like sliced hot dogs and sometimes, banana ketchup. It is traditionally finished with a generous layer of melted grated cheese. This sweet and meaty spaghetti is the ultimate Filipino comfort food and a staple at every children\'s party and family celebration'),
(2, 'Adobo', 'Louise Calaquian', 'Stew', '75 mins', '500 kcal', 'https://panlasangpinoy.com/wp-content/uploads/2022/08/Filipino-Adobo-Pork-Recipe.jpg', 'The unofficial national dish of the Philippines, Adobo is a culinary masterpiece where chicken (or pork) is slowly braised in a powerful, balanced marinade of soy sauce, cane vinegar, garlic, and black peppercorns. This slow simmering process results in meat that is incredibly tender and infused with a signature, deeply savory, tangy, and slightly salty flavor. Served over fluffy white rice, this iconic dish is a must-try for a true taste of Filipino home cooking.'),
(3, 'Sinigang', 'Jemimah Asa', 'Stew', '90 mins', '620 kcal', 'https://panlasangpinoy.com/wp-content/uploads/2022/09/sinigang-na-baboy.jpg', 'A famous Filipino sour and savory stew, Sinigang features meat (pork, shrimp, or beef) and assorted vegetables simmered in a tart broth traditionally soured by tamarind (sampalok). The broth is characterized by its powerful tangy flavor, balanced by savory notes and the inclusion of various ingredients like taro, okra, daikon, and water spinach. This intensely comforting, complexly flavored soup is widely regarded as a staple, especially on cold or rainy days.'),
(5, 'Tofu Sisig', 'Marco Abad', 'Side Dish', '40 mins', '500 kcal', 'https://www.foxyfolksy.com/wp-content/uploads/2018/06/sizzling-tofu-recipe-640.jpg', 'A wildly popular vegetarian take on the Filipino favorite, Tofu Sisig features cubes of crispy fried tofu tossed in a rich, creamy, and complex savory-tangy sauce. The mixture is generously seasoned with aromatic garlic and onions, and the dish gets its characteristic tangy punch from calamansi or lime juice, with optional creaminess from mayonnaise. Traditionally served sizzling hot on a platter, this irresistible alternative offers the same addictive textures and intense flavor profile as classic sisig.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
