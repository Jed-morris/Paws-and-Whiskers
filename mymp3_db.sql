-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 12:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymp3_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_type` text NOT NULL,
  `category_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_type`, `category_description`) VALUES
(1, 'Dog Healthcare products', 'Healthcare Products for Dogs'),
(2, 'Cat Healthcare Products', 'Healthcare Products for Cats'),
(3, 'Dry Dogfood Products', 'Dry dogfood brands for dogs'),
(4, 'Wet Dogfood Products', 'Wet dogfood brands for dogs'),
(5, 'Dry Catfood Products', 'Dry Kibble for Cats'),
(6, 'Wet Catfood Products', 'Dry Catfood for Cats in different brands and flavor');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(11) NOT NULL,
  `dealer_name` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `dealer_name`, `logo`, `url`, `phone`, `email`, `address`) VALUES
(1, 'VG AGRIMART', 'Logos', 'https://vgagrimart.com/', '910-720-8105', 'jadeter@vgagrimart.com', 'tagum');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `dateTime` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_id`, `dateTime`, `quantity`) VALUES
(56, 17, '2024-02-10 15:51:30.189149', 15),
(59, 18, '2024-02-10 16:21:45.800480', 3),
(60, 19, '2024-02-10 17:04:45.908415', 35),
(62, 23, '2024-02-10 17:29:44.476547', 5),
(63, 22, '2024-02-10 17:33:04.706675', 30),
(64, 30, '2024-02-10 17:33:39.237677', 5),
(65, 81, '2024-02-18 21:59:01.791821', 10),
(66, 80, '2024-02-18 21:59:07.283097', 10),
(67, 79, '2024-02-18 21:59:11.740855', 10),
(68, 78, '2024-02-18 21:59:15.989430', 10),
(69, 73, '2024-02-18 21:59:20.021541', 10),
(70, 72, '2024-02-18 21:59:24.870364', 10),
(71, 33, '2024-02-18 21:59:29.036457', 10),
(72, 32, '2024-02-18 21:59:32.816380', 10),
(73, 31, '2024-02-18 21:59:36.077984', 10),
(74, 30, '2024-02-18 21:59:43.886487', 10),
(75, 118, '2024-02-18 23:45:29.656011', 10),
(76, 117, '2024-02-18 23:45:34.404372', 10),
(77, 116, '2024-02-18 23:45:47.836319', 10),
(78, 115, '2024-02-18 23:45:53.290611', 10),
(79, 114, '2024-02-18 23:45:58.959809', 10),
(80, 113, '2024-02-18 23:46:03.256433', 10),
(81, 112, '2024-02-18 23:46:07.839154', 10),
(82, 111, '2024-02-18 23:46:14.027447', 10),
(83, 110, '2024-02-18 23:46:19.865942', 10),
(84, 119, '2024-02-19 19:24:24.432664', 5),
(85, 120, '2024-02-21 19:45:12.949566', 10),
(86, 121, '2024-02-21 19:47:07.245723', 60),
(87, 122, '2024-02-21 19:51:45.135480', 15);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `code` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `category` int(255) NOT NULL,
  `dealer` int(255) NOT NULL,
  `purchase_cost` bigint(255) NOT NULL,
  `sales_price` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `description`, `image_dir`, `category`, `dealer`, `purchase_cost`, `sales_price`) VALUES
(18, '401211', 'DoggiEssentials Bubblebath Shampoo 20mL', 'NOURISH & PROTECT (NATURE FRESH) Size: 20mL\r\n1 Pack\r\n24pcs.', 'IMG-65d135868adbb3.05032521.png', 1, 1, 300, 350),
(19, '400038', 'DoggiEssentials Bubblebath Shampoo 500mL', 'SOFT & SHINY (COTTON FRESH) Size: 500mL', 'IMG-65d12fa9a8efe9.59876103.png', 1, 1, 225, 300),
(20, '400039', 'DoggiEssentials Bubblebath Shampoo 1L', 'SOFT & SHINY (COTTON FRESH) Size: 1L', 'IMG-65d12fb663a161.06166488.png', 1, 1, 440, 495),
(21, '400638', 'DoggiEssentials Bubblebath Shampoo 4L', 'SOFT & SHINY (COTTON FRESH) Size: 4L', 'IMG-65d1303991a757.62748538.png', 1, 1, 1300, 1500),
(22, '400641', 'DoggiEssentials Bubblebath Shampoo 200mL', 'SOFT & SHINY (COTTON FRESH) Size: 200mL', 'IMG-65d132e1643152.68023320.png', 1, 1, 145, 195),
(23, '401210', 'DoggiEssentials Bubblebath Shampoo 20mL', 'SOFT & SHINY (COTTON FRESH) Size: 20mL\r\n1 Pack\r\n24pcs.', 'IMG-65d13541577dc2.66714265.png', 1, 1, 300, 350),
(29, '400037', 'DoggiEssentials AppeBoost 60mL', 'DoggiEssentials AppeBoost Multivitamins Liquid Supplement\r\nSize: 60mL', 'IMG-65d1366f577b42.00137004.png', 1, 1, 115, 130),
(30, '563849', 'Aozi Organic Adult Dog Food 20kg', 'Organic Dog Food\r\nSize 20kg', 'IMG-65d20c28c977d4.33770593.png', 3, 1, 3195, 3240),
(31, '265789', 'BeefPro Puppy Dog Food Beef 1kg', 'BeefPro Puppy Dog Food Beef Size:1kg\r\n(Repacked)', 'IMG-65d20c4a645788.97604917.png', 3, 1, 130, 150),
(32, '125436', 'BeefPro Puppy Dog Food Beef 5kg (Repacked)', 'BeefPro Puppy Dog Food Beef \r\nSize:5kg\r\n(Repacked)', 'IMG-65d20c54912486.79661119.png', 3, 1, 445, 495),
(33, '085239', 'BeefPro Puppy Dog Food Beef 50Lbs', 'BeefPro Puppy Dog Food Beef Size:50Lbs', 'IMG-65d20c6838b180.23712076.png', 3, 1, 1650, 1725),
(72, '785469', 'Vitality Valuemeal Puppy 1Kg', 'Vitality Valuemeal Puppy \r\nSize: 1Kg', 'IMG-65d20c8b464067.47298500.png', 3, 1, 170, 195),
(73, '785462', 'Vitality Valuemeal Adult 1Kg', 'Vitality Valuemeal Adult \r\nSize: 1Kg', 'IMG-65d20ca4f20862.01278380.png', 3, 1, 160, 175),
(78, '897523', 'Vitality Valuemeal Puppy 20Kg', 'Vitality Valuemeal Puppy \r\nSize: 20Kg', 'IMG-65d20cd1b2e6e9.75511022.png', 3, 1, 2900, 3300),
(79, '897523', 'Vitality Valuemeal Adult 20Kg', 'Vitality Valuemeal Adult Formula\r\nSize: 20Kg', 'IMG-65d20cdebff7d6.27278211.png', 3, 1, 2495, 2700),
(80, '876259', 'Aoza Organic Adult Dog Food 2.5Kg', 'AOZI Pure Natural Organic Dog Food Adult 2.5kg (Best Tasting Food For Picky Eaters)\r\nOriginal Packaging ', 'IMG-65d20cf2bb8d21.81843157.png', 1, 1, 450, 500),
(81, '876259', 'Aozi Organic Puppy Dog Food 2.5Kg', 'FOOD THERAPY  ~ RICH ENERGY ~ NUTRIENTS IN GOLDEN RATIO ~ MEAT AT 48%\r\n\r\nPet Foods made of natural materials according to Europe\'s top pet food formula; strengthening physical quality and natural vitality.\r\nOriginal Packaging ', 'IMG-65d20d039eada6.43466293.png', 1, 1, 550, 600),
(110, '863142', 'Nutripe Pure Lamb & Green Tripe Formula 390g Dog Wet Food', 'MADE IN NEW ZEALAND\r\nGrain-free, GMO-free, BPA-free, Carrageenan-free\r\nNO artificial colors or preservatives\r\nWith anti-inflammatory properties\r\nPromotes healthy immune system, skin & coat and joints', 'IMG-65d21d6a7f1f02.82119529.png', 4, 1, 215, 240),
(111, '582471', 'Aozi Liver Canned Dogfood 430g', 'Aozi soft dog food has distinctive features and advantages over dry dog food, which is the higher combination of human ecology and animal nutrition. It is new humanized product in accordance with dogs physical characteristics and nutritional needs and nee', 'IMG-65d21dd603e313.03288155.png', 4, 1, 90, 100),
(112, '693451', 'Aozi Lamb Canned Dogfood 430g ', 'Aozi soft dog food has distinctive features and advantages over dry dog food, which is the higher combination of human ecology and animal nutrition. It is new humanized product in accordance with dogs physical characteristics and nutritional needs and nee', 'IMG-65d21e31ee3411.70964143.png', 4, 1, 90, 100),
(113, '741368', 'Aozi Beef and Liver Canned Dogfood 430g', 'Aozi soft dog food has distinctive features and advantages over dry dog food, which is the higher combination of human ecology and animal nutrition. It is new humanized product in accordance with dogs physical characteristics and nutritional needs and nee', 'IMG-65d21e8ce057a3.55111083.png', 4, 1, 90, 105),
(114, '891546', 'PEDIGREE® Country Stew 430g', 'PEDIGREE CHOICE CUTS IN GRAVY country stew soft, wet dog food gives your dog the taste they crave with the nutrition they need. Your adult dog can enjoy the delicious taste of real beef and delectable gravy sauce in every bite with our hearty wet dog food', 'IMG-65d21fd31cd234.71612192.png', 4, 1, 115, 150),
(115, '857213', 'PEDIGREE® Country Chicken 430g', 'PEDIGREE CHOICE CUTS IN GRAVY country stew soft, wet dog food gives your dog the taste they crave with the nutrition they need. Your adult dog can enjoy the delicious taste of real beef and delectable gravy sauce in every bite with our hearty wet dog food', 'IMG-65d220175afda6.11699058.png', 4, 1, 115, 150),
(116, '857213', 'PEDIGREE® Beef Canned dogfood 430g', 'PEDIGREE CHOICE CUTS IN GRAVY country stew soft, wet dog food gives your dog the taste they crave with the nutrition they need. Your adult dog can enjoy the delicious taste of real beef and delectable gravy sauce in every bite with our hearty wet dog food', 'IMG-65d2203f104012.27263554.png', 4, 1, 115, 150),
(117, '857213', 'PEDIGREE® Steak Canned dogfood 430g', 'PEDIGREE CHOICE CUTS IN GRAVY country stew soft, wet dog food gives your dog the taste they crave with the nutrition they need. Your adult dog can enjoy the delicious taste of real beef and delectable gravy sauce in every bite with our hearty wet dog food', 'IMG-65d2205940aac5.29871533.png', 4, 1, 115, 150),
(118, '857213', 'NUTRIPE Green Tripe Canned Dogfood 390g', 'For generations, dogs have fed on wild prey to meet their nutritional needs. The NUTRIPE PURE Wet Food range mimics the natural diet of our dogs and contains the same nutritional ratios that your dogs have naturally evolved to eat. Our wet food formulas c', 'IMG-65d2210dd01e32.59024308.png', 4, 1, 435, 480),
(120, '596547', 'Reflex Adult Catfood 8Kg', 'Reflex Adult Catfood 8Kg', 'IMG-65d5e225e62630.02737069.png', 5, 1, 995, 1200),
(121, '897031', 'Reflex Adult Catfood 15Kg', 'Reflex Adult Catfood 15Kg', 'IMG-65d5e29f969b23.83676947.png', 5, 1, 1200, 1500),
(122, '885621', 'Reflex Adult Catfood Hairball & Indoor 1.5Kg', 'Reflex Adult Catfood Hairball & Indoor 1.5Kg', 'IMG-65d5e40c9e8b31.71297084.png', 5, 1, 325, 420);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
