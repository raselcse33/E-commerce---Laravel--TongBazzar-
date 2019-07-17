-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 06:03 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tongbazz_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `brandName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brandName`, `isActive`, `created_at`, `updated_at`) VALUES
(5, 'JOYROOM', 1, '2019-05-18 04:08:19', '2019-05-18 04:08:19'),
(6, 'LDNIO', 1, '2019-05-18 04:08:29', '2019-05-18 04:08:29'),
(7, 'ANKER', 1, '2019-05-18 04:08:37', '2019-05-18 04:08:37'),
(8, 'REMAX', 1, '2019-05-18 04:08:48', '2019-05-18 04:08:48'),
(9, 'মধু', 1, '2019-05-22 15:34:27', '2019-05-22 15:34:27'),
(10, 'China', 1, '2019-06-13 05:47:49', '2019-06-13 05:47:49'),
(12, 'Bangladeshi', 1, '2019-06-13 05:57:58', '2019-06-13 05:57:58'),
(13, 'Indian', 1, '2019-06-13 05:58:06', '2019-06-13 05:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `categoryName`, `isActive`, `created_at`, `updated_at`) VALUES
(6, 'BOOKS', 1, '2019-05-18 04:02:53', '2019-05-18 04:02:53'),
(7, 'Mobile Accessories', 1, '2019-05-18 04:03:33', '2019-05-18 04:03:33'),
(9, 'Men\'s Fashion', 1, '2019-05-18 04:05:18', '2019-05-18 04:05:18'),
(10, 'Women\'s Fashion', 1, '2019-05-18 04:07:05', '2019-05-18 04:07:05'),
(11, 'Gift Items', 1, '2019-05-18 04:07:35', '2019-05-18 04:07:35'),
(13, 'Bazzar', 1, '2019-05-28 04:32:46', '2019-05-28 04:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Mamun', 'admin@tongbazzar.com', 'test', 'sss', '2019-06-19 10:12:59', '2019-06-19 10:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_13_173408_create_categories_table', 2),
(4, '2019_05_13_182352_create_brands_table', 3),
(5, '2019_05_13_192726_create_products_table', 4),
(6, '2019_05_16_083840_create_user_registers_table', 5),
(7, '2019_05_16_164312_create_wish_lists_table', 6),
(8, '2019_06_16_085429_create_orders_table', 7),
(9, '2019_06_19_070933_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveryDate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `productId`, `productName`, `price`, `qty`, `totalPrice`, `image`, `orderDate`, `deliveryDate`, `created_at`, `updated_at`) VALUES
(17, 'Mamun', 'admin@tongbazzar.com', '01728693248', 'Gulshan', '57', 'Sorrer Ghee - 350g', '800', '1', '800', 'upload/h6CXPI0clmCRSs1SiINk.jpg', '2019-06-17', '0', NULL, NULL),
(18, 'rasel', 'bhootcse330@gmail.com', '01728693248', 'dhaka', '50', 'Joyroom S-L127 Titan Micro Cable 1.2M, Black', '200', '1', '200', 'upload/LkdkIbSWkvTY2fnfvIw7.jpg', '2019-06-19', '2019-06-24', NULL, '2019-06-23 23:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productBrand` int(11) DEFAULT NULL,
  `productCategory` int(11) DEFAULT NULL,
  `productDescription` longtext COLLATE utf8mb4_unicode_ci,
  `productImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productPrice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productDisplay` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productBrand`, `productCategory`, `productDescription`, `productImage`, `productPrice`, `productDisplay`, `created_at`, `updated_at`) VALUES
(29, 'JOYROOM JR-D2S Bluetooth Earphone Hanging Sport Bluetooth Headphone', 5, 7, '<ul><li>Bluetooth:V4.2</li><li>Standby time:150-180H</li><li>Battery Capacity:3.7V / 65mAh</li><li>Signal to noise ratio:-75db</li><li>Frequency range:2.402-2.48GHz</li><li>Bluetooth protocol:HSP / HFP / A2DP /AVRCP</li><li>Charge time:2 hours</li><li>Call Duration:4-5 hours</li><li>Transmission distance:10 m</li><li>Charging voltage:DC-5V</li><li>Waterproof rating:IPX7</li></ul>', 'upload/7sEA9N1izBgpsiqQo0Pa.jpg', '1250', 0, NULL, NULL),
(30, 'BT149 BT Headphone', 5, 7, '<ul><li>Joyroom JR-BT149 Bluetooth Headset</li><li>Brand Name:Joyroom</li><li>Model:JR-BT149</li><li>Bluetooth 4.0</li><li>Can be used with wire</li><li>Support IOS and Android OS</li><li>Ultra-long Standby time</li><li>Transmission Distance: 10 meters</li><li>Color: Black, Red</li><li>6 Months Replacement Warranty</li></ul>', 'upload/6NVOSvFWQ49Y5ENS2PDM.jpg', '1450', 1, NULL, NULL),
(31, 'Joyroom Wireless Bluetooth In-Ear Headset B1', 5, 7, '<ul><li>Brand: Joyroom</li><li>Model: B1</li><li>Bluetooth version: V4.1</li><li>Transmission range: ≤10m</li><li>Working frequency: 2.402GHz – 2.480GHz</li><li>Max. power: 10mW</li><li>Speaker unit: 10mm</li><li>Frequency: 60Hz – 20KHz</li><li>Sensitivity: -80dBm</li><li>SNR: ≥90dB</li><li>Battery: 3.7V 55mAh Lithium battery</li><li>Music time: 3 hours</li><li>Tacking time: 3 hours</li><li>Charging input standard: Micro USB, DC 5V, 500mA-1000mA</li><li>Weight: 5.5g</li><li>Compatible with: iPhone iPad</li><li>Samsung HTC Huawei etc. smartphones and tablets</li><li>Other Bluetooth-enabled devices</li><li>6 Months Replacement Warranty</li></ul>', 'upload/RjdZrBnH4RcFpYVam0Yi.jpg', '1050', 0, NULL, NULL),
(32, 'JR-B2 BT Earphone', 5, 7, '<h4><br>Bluetooth earphone</h4><p><strong>Brand：</strong>JOYROOM</p><p><strong>Model：</strong>JR-B2</p><p><strong>Name：</strong>Bluetooth earphone</p><p><strong>Bluetooth version：</strong>BluetoothV 4.1</p><p><strong>Charging time：</strong>1.5 hrs</p><p><strong>Reception sensitivity：</strong>-80dBm</p><p><strong>Effective distance：</strong>≤10m</p><p><strong>Color：Black &amp; White</strong></p><p>6 Months Replacement Warranty</p><p>&nbsp;</p>', 'upload/bSrLTvcFqvs5z5PmI0Kd.jpg', '1320', 0, NULL, NULL),
(33, 'JOYROOM JR-D1 Bluetooth 4.2 Wireless Headset Headphone', 5, 7, '<p>Brand&nbsp;&nbsp;&nbsp;&nbsp;Joyroom</p><p>Built-in Microphone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes</p><p>Cable Shape&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Round Cable</p><p>Color&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Black</p><p>Connection&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bluetooth</p><p>Earphone Feature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bluetooth, Sports &amp; Exercise, With Microphone</p><p>Earphone TypeIn-Ear</p><p>General Use&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Cellphone</p><p>Retail Packaging&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colored Box</p><p>Socket&nbsp;&nbsp;Micro USB</p><p>Vocalism Principle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dynamic</p><p>Volume Control&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes</p><p>Gross Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.103kg</p><p>Volume Weight&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.157kg</p><p>Length&nbsp;&nbsp;20.000cm</p><p>Width&nbsp;&nbsp;&nbsp;&nbsp;10.000cm</p><p>Height&nbsp;&nbsp;&nbsp;3.500cm</p><p>Weight0.092kg</p><p>EAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6956116754068</p><p>With Retail Packaging&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes</p><p>6 Months Replacement Warranty</p>', 'upload/nTxvxVB6iJxNhXdwQ21y.jpg', '1080', 0, NULL, NULL),
(34, 'JOYROOM JR-D3 Magnetic Suction Sports Wireless Bluetooth', 5, 7, '<ul><li>Brand: Joyroom</li><li>Model:JR-D3</li><li>Earphone (In Ear)</li><li>Chipset-CSR</li><li>Bluetooth Version-V4.2</li><li>Protocol-Headset, A2DP</li><li>Frequency Range-2.4-2.84GHz</li><li>Transmission Distance-Up to 10m</li><li>Battery Capacity-60mAh</li><li>Charging Time-about 2 hours</li><li>Music Time-&lt;= 5 hours</li><li>Standby Time-Up to 180 hours</li></ul><p>&nbsp;</p>', 'upload/9ppnVT5YskN5ZpNI0dVg.jpg', '1220', 1, NULL, NULL),
(35, 'JR-D3 BT Earphone', 5, 7, '<ul><li>Brand: Joyroom</li><li>Model:JR-D3</li><li>Earphone (In Ear)</li><li>Chipset-CSR</li><li>Bluetooth Version-V4.2</li><li>Protocol-Headset, A2DP</li><li>Frequency Range-2.4-2.84GHz</li><li>Transmission Distance-Up to 10m</li><li>Battery Capacity-60mAh</li><li>Charging Time-about 2 hours</li><li>Music Time-&lt;= 5 hours</li><li>Standby Time-Up to 180 hours</li><li>6 Months Replacement Warranty</li><li>Color-Black/White/Red/Blue</li></ul><p>&nbsp;</p>', 'upload/t2Q44Vk9aVuCfRrFyKAg.jpg', '1250', 1, NULL, NULL),
(36, 'JR-H12 BT Headphone', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Model：JR-H12</li><li>Name：Bluetooth Headphone</li><li>Bluetooth version：Bluetooth4.1</li><li>Bluetooth： HSP/HFP/A2DP/AVRCP</li><li>Standby time：140 hours</li><li>Talk time：17 hours</li><li>Interface： Bluetooth, 3.5mm audio input port</li><li>Battery capacity： 3.7V 300mAh Lithium polymer battery</li><li>Charging time： 2 hours</li><li>Reception sensitivity：－42dB±3 dB</li><li>Speaker Impedance：16Ω±15%(at 1KHz)</li><li>Speaker Diameter：40mm</li><li>6 Months Replacement Warranty</li><li>Color: Black/White/Gold</li></ul>', 'upload/eQYPUT5pmHWqlnQjIM0K.jpg', '2800', 1, NULL, NULL),
(37, 'JR-P1 Bluetooth Earphone', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Model：JR-P1</li><li>Name：JR-P1 Ear-hook type Bluetooth headset</li><li>Bluetooth version：V4.1</li><li>Charging time：1~2hours</li><li>Effective distance：10m</li><li>Product size：73.6*38.9*6.5mm</li><li>Product model：JR-P1</li><li>Packing size：126*126*25mm</li><li>Weight：N.W:7.98g G.W：103g</li><li>6 Months Replacement Warranty</li><li>Color: Black/Red/Silver</li></ul>', 'upload/1PBmFMdqI9kqwwtuCDyF.jpg', '1050', 1, NULL, NULL),
(38, 'JR-M03', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Color: Same as Picture</li><li>Dual speaker units deliver enriched sound in a wide range</li><li>Bluetooth 3.0 connection, widely compatible with Bluetooth-enabled devices</li><li>Built-in microphone, support Bluetooth hands-free call</li><li>Functions: play/pause, next/previous track, volume up/down and answer/end phone calls</li><li>Support streaming music from USB/TF card (Both not included)</li><li>With 3.5mm audio port, easily connect with non-Bluetooth audio devices for music enjoyment</li><li>Perfect for home use</li><li>Cloth coated surface rhombus shape, fashion outlook</li><li>Brand: Joyroom</li><li>Model: M03</li><li>Bluetooth version: 3.0</li><li>Music format: MP3, WMA, WAV, APE, FLAC</li><li>Distortion rate: ≤0.5%</li><li>Battery: 1200mAh</li><li>Playtime: 4-6 hours</li><li>Size: 215 x 215 x 60mm</li><li>Weight: 624g</li><li>6 Months Replacement Warranty</li><li>Color: Blue/Grey/Green</li></ul>', 'upload/lnejHx1YBdS7cyowvMRr.jpg', '2250', 1, NULL, NULL),
(39, 'JR-M04 Bluetooth speaker', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Color: Same as Picture</li><li>Brand：JOYROOM</li><li>Model：JR-M04</li><li>Name：JR-M04 Bluetooth speaker</li><li>Bluetooth：Bluetooth V4.1</li><li>Transmission range：About 10 meters</li><li>Product size：&nbsp;194×55×124mm</li><li>Product model：&nbsp;JR-M04</li><li>Packing size：&nbsp;229×68×189mm</li><li>Weight：&nbsp;N.W:625g G.W:823g</li><li>Frequency：2.402GHz-2.480GHz</li><li>Signal-to-noise ratio：≥75dB</li><li>6 Months Replacement Warranty</li><li>Color: Black/Blue/Grey</li></ul>', 'upload/XL086d7YhUl99WjAW7f4.jpg', '2080', 1, NULL, NULL),
(40, 'Joyroom JR-M05 HIFI Bluetooth Speaker', 5, 7, '<ul><li>JOYROOM JR-M05 Desktop Clock Bluetooth Speaker</li><li>Brand?JOYROOM</li><li>Model?JR-M05</li><li>Name?Desktop Clock Bluetooth Speaker</li><li>Bluetooth?Bluetooth 4.2</li><li>Speaker?22.5mm</li><li>Transmission range??10m</li><li>Frequency?65Hz-18KHz</li><li>Charging time?3-4hour</li><li>Built-in battery?2200mAh</li><li>Color: Grey</li><li>6 Months Replacement</li></ul>', 'upload/4QSc7mNJ8psw3GNNNDew.jpg', '3580', 1, NULL, NULL),
(41, 'Joyroom M6 Portable Bluetooth Speaker', 5, 7, '<p>Model JOYROOM M6&nbsp;<br>Power supply Built-in lithium battery&nbsp;<br>Bluetooth version V4.1&nbsp;<br>Playing time 5 hours&nbsp;<br>Connection Bluetooth/TF card/3.5mm audio jack&nbsp;<br>Transmitting distance 10 m&nbsp;<br>Weight 188g&nbsp;<br>Size 118mm x 68mm x 30mm&nbsp;<br>SNR 80dB&nbsp;<br>Frequency Response 150Hz-18kHz</p><p>6 Months Replacement Warranty</p><p>Color:Golden/Silver/Black</p>', 'upload/K8yXrajytDdMxODQUt8j.jpg', '1550', 0, NULL, NULL),
(42, 'JOYROOM JM-R7 Wireless Bluetooth Stereo Speaker', 5, 7, '<ul><li>Brand: JOYROOM</li><li>Model: JM-R7</li><li>Bluetooth: V3.0+EDR</li><li>Loudspeaker: 40mm 4ohm 3W</li><li>Transmission range: about 10m</li><li>Output power: 3Wx2</li><li>Voltage: DC 5V</li><li>Built in battery capacity: 2000mAh</li><li>Audio input specification: 3.5mm jack</li><li>Product size: 180mm*77mm*54mm/7.08*3.03*2.12\'\'</li><li>Color: Red, Pink, Black</li><li>6 Months Replacement Warranty</li></ul>', 'upload/LVNg8qRkN7UUO1SBzQeW.jpg', '2650', 1, NULL, NULL),
(43, 'JOYROOM JR-M9 Double Horn Metal Bluetooth Stereo Speaker', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Color: Same as Picture</li><li>Bluetooth Version: V4.1</li><li>Transmission Distance: Up to 10m</li><li>Item Size: 14.7 x 8.8 x 4.0cm</li><li>Modern appearance, pleased to your eyes</li><li>Built-in Microphone: Supports hands-free calls</li><li>Support TFcard and USB music playback, plug, and play</li><li>Support AUX Audio</li><li>Modern appearance, pleased to your eyes</li><li>Bluetooth V4.1 technology, up to 10m transmission distance.</li><li>Built-in Microphone: Supports hands-free calls.</li><li>Support TFcard and USB music playback, plug, and play.</li><li>Support AUX Audio.</li><li>Built-in 1500mAh battery.</li><li>Built-in 1500mAh battery</li><li>Color:Gold/Black</li><li>6 Months Replacement Warranty</li></ul>', 'upload/KmijH5ODF04Ug0Mri1PO.jpg', '1680', 0, NULL, NULL),
(44, 'JR-D121 - Wireless Power Bank', 5, 7, '<ul><li>Brand : JOYROOM</li><li>Model : D-M192Â</li><li>Color : Black</li><li>Input : 5V 2A</li><li>Output : 5V 2.1A</li><li>Power : 10000 mAh</li><li>Digital Display</li><li>LED Lighting</li><li>Color: Royal Blue</li><li>6 Months Replacement Warranty</li></ul>', 'upload/fk89wonchcK6LXR9ASRp.jpg', '3050', 1, NULL, NULL),
(45, 'D-L122 PB 6000mAh', 5, 7, '<ul><li>Brand : JOYROOM</li><li>Model : D-L122</li><li>Color : Yellow</li><li>Port : USB port</li><li>Material : Aluminum-Alloy, Eco-friendly PC+ABS, Applied high-temperature resistant material</li><li>Battery : Polymer Battery</li><li>Battery Cell : Li-ion</li><li>Input : DC 5V 1A</li><li>Output : 5.0V 1A</li><li>Capacity : 6000mah</li><li>Self-Charging time: 3--4 hours</li><li>Recycling times : More than 800 times</li><li>Color: Blue/Yellow/</li><li>6 Months Replacement Warranty</li></ul>', 'upload/MRMOAN6iq9cEUnWdqvPP.jpg', '1150', 0, NULL, NULL),
(46, 'JOYROOM D-M152 Speed Series 10000mah Power Bank', 5, 7, '<p>1. Brand：JOYROOM&nbsp;</p><p>2. Model：D-M152&nbsp;</p><p>3. Name：Speed series power bank&nbsp;</p><p>4. Capacity：10000 mAh&nbsp;</p><p>5. Input: 5V 2.0A&nbsp;</p><p>6. Output: 5V 2.0A&nbsp;</p><p>7. Capacity: 10000mAh&nbsp;</p><p>8. Battery: 18650 lithium battery&nbsp;</p><p>9. Packing size：175*97*26mm&nbsp;</p><p>10.Weight：N.W:276.5g, G.W:320.5g&nbsp;</p><p>11.Color: Black, White</p>', 'upload/TEpG0GOHMuyos5OCT3Rp.jpg', '1350', 0, NULL, NULL),
(47, 'JOYROOM D-M192 Fan With 5000mAh Powerbank Phone Battery Charger', 5, 7, '<ul><li>Brand : JOYROOM</li><li>Model : D-M192</li><li>Color : Pink</li><li>Battery Type : Li-ion Battery</li><li>Capacity : 50000mAh</li><li>Material : ABS shell + Copper Pin</li><li>Output : DC 5V 1A</li><li>Input : DC 5V 1A</li><li>Portable &amp; fast charge, Endurance no worry;</li><li>Intelligent identification of fast charging, enough energy and very light,Portable</li><li>Portable design, convenient to carry and use</li><li>Color: White/Pink</li><li>6 Months Replacement Warranty</li></ul>', 'upload/lGj3uK6YFKdpggPlwUDY.jpg', '2050', 1, NULL, NULL),
(48, 'JR-D121(Wireless) PB 10000mAh', 5, 7, '<ul><li>Brand : JOYROOM</li><li>Model : D-M192</li><li>Color : Blue</li><li>Input : 5V 2A</li><li>Output : 5V 2.1A</li><li>Power : 10000mAh</li><li>Digital Display</li><li>LED Lighting</li><li>Color: Blue/ Black/White</li><li>6 Months Replacement Warranty</li></ul>', 'upload/4Eu8mP9hwBkEfNizh1dn.jpg', '3999', 1, NULL, NULL),
(49, 'JOYROOM PT-D01 Painting attic series power bank 10000mah', 5, 7, '<ul><li>Brand：JOYROOM</li><li>Model：PT-D01</li><li>Name：Painting attic series power bank</li><li>Capacity：10000mAh</li><li>Input：5V 2.1A（micro&amp;lighting）</li><li>Output：DC5V-2.1A</li><li>Color :Alpaca/cat/Deer Forest/Fox/Hare Garden/Jungle/Mushroom</li><li>Battery type：polymer</li><li>Color: Alpaca/Cat/ Deer Forest/Fox/Hare Garden/Jungle/Mashroom</li><li>6 Months Replacement Warranty</li></ul>', 'upload/aUhECtsfpIhEvZTjAd1A.jpg', '2250', 1, NULL, NULL),
(50, 'Joyroom S-L127 Titan Micro Cable 1.2M, Black', 5, 7, '<ul><li>Brand&nbsp; : JOYROOM</li><li>Model&nbsp; : S-L127</li><li>Color : Black</li><li>Name : Titan micro cable 1.2M</li><li>Applicable Model ?Micro</li><li>Material&nbsp; High-quality TPE</li><li>Function Transmission &amp; charge 2 in 1</li><li>Specifications : 1200mm</li><li>6 Months Replacement Warranty</li></ul>', 'upload/LkdkIbSWkvTY2fnfvIw7.jpg', '200', 1, NULL, NULL),
(51, 'Joyroom S-L127 Titan Type-C Cable 1.2M', 5, 7, '<ul><li>Brand : JOYROOM</li><li>Model : S-L127</li><li>Color : Red</li><li>Name :&nbsp;Titan Type-C cable</li><li>Applicable Model : Lightning</li><li>Material : High-quality TPE</li><li>Function : Transmission &amp; charge 2 in 1</li><li>Specifications : 1200mm</li><li>Color: Black/Red/White</li><li>6 Months Replacement Warranty</li></ul>', 'upload/9mLe4tzRgPHgICgPPWP5.jpg', '220', 0, NULL, NULL),
(52, 'JOYROOM Titan Lighting Cable', 5, 7, '<p>JOYROOM S-L127 TITAN Series Flat Lighting 1.2m 3.9ft Fast Charging Data Cable Wire Cord for Adroid Type-C Phone Tablet<br>Specification:<br>Brand: JOYROOM<br>Product model: S-L127<br>Applicable model: for Lighting<br>Interface: Lighting<br>Product material: Flat TPE<br>Product function: charge, data transfer two in one<br>Wire length: 1.2m/3.9ft<br>Package size: 160*97*17mm/6.29*3.81*0.66\'\'<br>Weight: 50g<br>Color: White, Black, Red</p><p>6 Months Replacement Warranty</p>', 'upload/y8oVti0SXpWWeIHHRtU2.jpg', '250', 0, NULL, NULL),
(53, 'Joyroom 3 in 1 Data Cable-S-L317-Black', 5, 7, '<ul><li>Copper Plating Interface</li><li>Efficient And Stable</li><li>Ergonomic Tip</li><li>Easy To Plug And Unplug</li><li>Flat Design, Avoid Intertwist Problem</li><li>Strong And Flexible Wire</li><li>Long Lifespan</li><li>100cm</li><li>For Micro USB, Lightning And S-L317</li></ul>', 'upload/B2jxM8pzX8jBkd0ZhEqO.jpg', '320', 1, NULL, NULL),
(54, 'অরজিনাল মধু', 9, 13, '<ul><li>নিজস্ব উৎপাদিত</li><li>সরিষা খেত হতে উৎপাদিত</li><li>২৬ গারাটের মধু</li><li>২৫০ গ্রাম = ১৫০টাকা.<br>৫০০ গ্রাম = ৩০০ টাকা<br>১০০০ গ্রাম = ৬০০ টাকা</li></ul>', 'upload/4vHt2kdvHu4fUljgBgIE.jpg', '600', 1, NULL, NULL),
(55, 'Baby Doll', 10, 11, '<p>Made in China</p>', 'upload/JhSzieKjzxMX4OaK416m.jpg', '220', 0, NULL, NULL),
(56, 'Three Piece', 12, 10, '<p>100% Cotton</p>', 'upload/3HamAkFr8KXozhp3dxsl.jpg', '2250', 0, NULL, NULL),
(57, 'Sorrer Ghee - 350g', 12, 13, '<p>A type of clarified butter called ghee. Our ghee is organic and unsalted butter. It is our native product, we never collect ghee rather we produce it. You easily called it desi Ghee. Our product multiplication is best. In our society has a misconception about ghee if anybody eats ghee they turn out bulky. It is total misconception rather ghee is needed for everyone. It has vitamin A, D, K which is needed for everybody. It is beneficial for eyes and bones. You can rely on our product without thinking. It organic and hygienic.</p>', 'upload/h6CXPI0clmCRSs1SiINk.jpg', '800', 1, NULL, NULL),
(58, 'Neem Oil - 50ml', 12, 13, '<ul><li>Product Type: Neem Oil</li><li>Capacity: 50ml</li><li>Antibacterial</li><li>Antifungal</li><li>Can be used for different skin infection</li></ul>', 'upload/D0mOLnn5XnW4p1WONXwU.jpg', '100', 1, NULL, NULL),
(59, 'S-L317 Micro Data Cable', 5, 7, '<ul><li>Brand Name: JOYROOM</li><li>Model Number: S-L317</li><li>Place of Origin: Guangdong, China (Mainland)</li><li>Use: Camera, Computer</li><li>Mobile Phone, MP3 / MP4 PlayerVideo Game Player USB Type: Micro-USB</li><li>Product name: joy room S-L317 micro 3in1 cable USB type-c cable</li><li>USB Type:: Micro, type-c and for 3in1 Current: 5V,2.1A&nbsp; Plated Port Length: 1.0M</li><li>Function:: Charge and data transfer</li><li>Feature:: Multi-Function Data Transfer Cable</li><li>Payment: 1.T/T 2.Western Union 3.Paypal</li></ul>', 'upload/wdEO1i6RqKofDjcvZkt2.jpg', '200', 1, NULL, NULL),
(60, 'JOYROOM Type-C Data Cable S-L317 – Black', 5, 7, '<ul><li>XU series Type-c data cableBrand：JOYROOMModel：S-L317Name：XU series Type-c data cableApplicable Model：Type-CMaterial：Nylon weaveFunction：Charging, Data transferSpecifications：1200mm</li></ul>', 'upload/pP6hYZZZBZdoR49vE24i.jpg', '220', 0, NULL, NULL),
(61, 'S-L317 Type-C Data Cable', 5, 7, '<p>JOYROOM S-L317 XU Series Lightning&nbsp;Data Cable, White</p>', 'upload/1XXHOHKPpzCvfmp7KwJC.jpg', '250', 0, NULL, NULL),
(63, 'Joyroom S-M353 Micro Cable(Upgrade)', 5, 7, '<p>Joyroom S-M353 Micro Data Cable</p><p>6 Months Replacement Warranty</p>', 'upload/a0BcG0dztR4M4oi61pRL.jpg', '200', 0, NULL, NULL),
(64, 'JOYROOM Lighting Cable (Upgrade) S-M353', 5, 7, '<ul><li>Model: S-M353.</li><li>Material: PVC.</li><li>Function: Transmission 2 in 1.</li><li>Length: 1M.</li><li>Color: Black.</li></ul>', 'upload/QzLTGMmbGzPEHwQt00sF.jpg', '250', 0, NULL, NULL),
(65, 'S-M353 Type-c Cable(Upgrade)', 5, 7, '<p>Brand: JOYROOM<br>Model: S-M353<br>Color: Black, White<br>Applicable model: for Android&nbsp;<br>Interface: Type-C<br>Product function: data transmission and charging two in one<br>Wire length: 1m/3.3ft<br>Package size: 60*178*18mm/2.36*7*0.7\'\'<br>Net weight: 25g</p>', 'upload/nWpLVthK7KB4OrlpVB5q.jpg', '250', 0, NULL, NULL),
(66, 'JOYROOM JR-S318 3m 2.4A Upgraded OD4.5 Micro USB Charging Data Cable - Black', 5, 7, '<p>JOYROOM JR-S318 3m 2.4A Upgraded OD4.5 Micro USB Charging Data Cable - Black</p><p>Premium OD4.5 overstriking coil, improves the charging speed by 32%, stable charge your device safety and stably&nbsp;<br>&nbsp;</p><p>With I-shaped net plug design, bend it as you wish without broken<br>&nbsp;</p><p>Adopts upgraded charging scheme, automatic cut off when your device is fully charged<br>&nbsp;</p><p>Support both charging and data transmission<br>&nbsp;</p><p>2.4A output current, high charging efficiency</p><p>Length of the cable is about 3m</p><p><strong>Specification:</strong></p><p>Brand: JOYROOM</p><p>Model: JR-S318</p><p>Material: aluminium alloy + TPE</p><p>Function: data transmission+charge&nbsp;<br>&nbsp;</p><p>Length: 3m</p><p>Current: 2.4A</p><p><strong>Compatible with:</strong></p><p>Samsung Sony LG Huawei etc smartphones with Micro USB charging port</p><p><strong>Package included:</strong></p><ul><li>1 x JOYROOM JR-S318 3m 2.4A Upgraded OD4.5 Micro USB Charging Data Cable</li><li>Cable only, other things not included</li></ul>', 'upload/yMiPwDcrkFoBuCbp2SVj.jpg', '420', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pavel Parvej', 'admin@tongbazzar.com', NULL, '$2y$10$RIXyCB5hEvZhMNoTEdp4ue7ZWDcf2w2dNze9HW.pTFLsjbpi36jWW', NULL, '2019-05-12 17:15:34', '2019-05-12 17:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_registers`
--

CREATE TABLE `user_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_registers`
--

INSERT INTO `user_registers` (`id`, `name`, `email`, `password`, `date`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(3, 'rasel', 'as@gmail.com', '$2y$10$iNsei1s.vOsixnUB4Q0o6OVJUb4RZHK6oQUkchVVd7nkGXmRRsEmm', '2019-06-07', '01258795485', 'Dhaka', '2019-05-16 03:22:55', '2019-06-25 13:51:58'),
(4, 'Pavel Parvej', 'pavel@gmail.com', '$2y$10$lXI7FOclFuGJ/KncVLi5gOMKVVkeXAZNawzlpX16cq6o.BYD61oB6', NULL, NULL, NULL, '2019-05-20 11:28:47', '2019-05-20 11:28:47'),
(5, 'Panacea', 'info@panaceaexperience.com', '$2y$10$IFkWZderAtOng8pCBAAcguRO5sP56OIeQuGI25/zC.Ebg.da3kKIq', NULL, NULL, NULL, '2019-06-11 08:31:24', '2019-06-11 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `productId`, `productImage`, `productName`, `productPrice`, `userId`, `created_at`, `updated_at`) VALUES
(7, '56', 'upload/3HamAkFr8KXozhp3dxsl.jpg', 'Three Piece', '2250', '3', '2019-06-19 04:18:58', '2019-06-19 04:18:58'),
(8, '59', 'upload/wdEO1i6RqKofDjcvZkt2.jpg', 'S-L317 Micro Data Cable', '200', '3', '2019-06-19 04:19:34', '2019-06-19 04:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_registers`
--
ALTER TABLE `user_registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_registers`
--
ALTER TABLE `user_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
