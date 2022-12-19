-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `blog_name` varchar(191) NOT NULL,
  `blog_description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_name`, `blog_description`, `image`, `created_at`) VALUES
(1, 'banner_img', '<p>Banner image for blog</p>', '1670208880.jpg', '2022-12-04 08:22:19'),
(3, 'Chill Roadtrip', '<h5 style=\"text-align: justify;\"><span style=\"font-family: \"Times New Roman\";\" times=\"\" new=\"\" roman\";\"=\"\">Nothing beats a relaxing road trip with friends after a long semester. What a fantastic pastime to unwind and recharge ourselves from the demands, weariness, and breakdowns that we all experience during those five months when we must be strong and courageous to confront everything that life has thrown at us. Life was not really meant to be easy, as they say.</span></h5>', '1670534901.jpg', '2022-12-04 10:10:48'),
(4, 'Picnic Travel', '<p style=\"text-align: justify; \"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\"><b>hahaha</b></span></font></p>', '1670213595.jpg', '2022-12-05 03:02:27'),
(5, 'Road Trips', '<p>Road trips</p>', '1670216957.jpg', '2022-12-05 03:02:58'),
(6, 'Group Travel', '<p>Group Travel </p>', '1670253750.jpg', '2022-12-05 03:03:20'),
(7, 'Tourists Spots', '<p>Tourist Spots</p>', '1670217651.jpg', '2022-12-05 03:03:37'),
(8, 'Solo Travel', '<p>Solo Travel</p>', '1670218161.jpg', '2022-12-05 03:04:12'),
(9, 'Travel Safety', '<p>Travel Safety</p>', '1670221359.jpg', '2022-12-05 03:04:58'),
(10, 'About Us', '<div style=\"text-align: justify; \"><font color=\"#003163\"><b>Goravel</b></font> was launched in 2019 as a travel agency that offers local travelers low fares as well as rapid and secure bookings. Our objective is to give outstanding service to our customers because we believe that exploring and not taking for granted the beauty and hidden treasures of our nation provides everyone with fresh experiences and learning opportunities. Our mission is to become one of the Phillipines leading travel agencies, trusted by customers, and to form additional collaborations with other organizations in order to extend our services to continue to give an unrivaled travel experience.</div>', '1670524310.jpg', '2022-12-08 16:27:51'),
(11, 'about_banner_img', '<p>about banner image</p>', '1670526712.jpg', '2022-12-08 19:11:52'),
(12, 'developer1', '<p style=\"text-align: center; \"><b><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><br></span></b></p><p style=\"text-align: center; \"><b><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Wena Mae Ledesma</span></b></p><p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Developer</span></p>', '1671478523.jpg', '2022-12-08 20:15:24'),
(13, 'developer2', '<p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b><br></b></span></p><p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b>Jerrold Madrona</b></span></p><p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Developer<br></span><br></p>', '1670530583.jpg', '2022-12-08 20:16:23'),
(14, 'developer3', '<p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b><br></b></span></p><p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b>Angelica Noveda</b></span></p><p style=\"text-align: center; \"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Developer<br></span><br></p>', '1670530624.jpg', '2022-12-08 20:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(5, 'White Beach, Boracay', '<p style=\"text-align: justify;\"><b>Destination Name: White Beach, Boracay</b></p><p style=\"text-align: justify;\"><b>Destination Description: </b><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><b>Package:</b></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><b>Price:</b> 5,000 Pesos per head, Good for 2 days.</p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><br></p>', '1671477596.jpg', '2022-11-22 00:43:15'),
(8, 'Top_1_firstSlide_description', '<p><br></p><p style=\"text-align: center; \"><b>White Beach, Boracay</b></p><p style=\"text-align: justify;\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</p><p><br></p>', '1670169050.jpg', '2022-11-29 21:00:14'),
(10, 'Baracuda Lake, Palawan', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Baracuda Lake, Palawan</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:</span></p><p style=\"text-align: justify;\">A particularly unique dive location known for its Thermocline is Barracuda Lake. It is situated in the Philippines, to the northwest of Coron Island. In a former crater, there is now a freshwater lake. It is bordered by angular limestone cliffs and is roughly 40 meters deep.</p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span> 5,000 Pesos per head, Good for 2 days.</p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: left;\"><span style=\"text-align: justify; font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight);\">.</span><br></p>', '1671477623.jpg', '2022-11-29 21:09:52'),
(12, 'Top_2_secondSlide_description', '<p><br></p><p style=\"text-align: center; \"><b>Baracuda Lake, Palawan</b></p><p style=\"text-align: justify; \">A particularly unique dive location known for its Thermocline is Barracuda Lake. It is situated in the Philippines, to the northwest of Coron Island. In a former crater, there is now a freshwater lake. It is bordered by angular limestone cliffs and is roughly 40 meters deep.</p>', '1670169923.jpg', '2022-12-01 16:36:26'),
(13, 'Samaguing Cave, Sagada', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Samaguing Cave, Sagada</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description: </span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span> 5,000 Pesos per head, Good for 2 days.</p><p style=\"text-align: justify;\"><br></p>', '1671477654.jpg', '2022-12-01 16:56:47'),
(21, 'Top_3_thirdSlide_description', '<p style=\"text-align: center;\"><span style=\"font-weight: bolder;\"><br></span></p><p style=\"text-align: center;\"><span style=\"font-weight: bolder;\">Samaguing Cave, Sagada</span></p><p style=\"text-align: justify;\">The largest cave in Sagada is the Sumaguing Cave. The highlight of this amazing experience are the rock formations that resemble familiar forms. Some of these structures include the bird and elephants, the tortoise and chocolate cake. The entrance to Sumaguing Cave has a custom stairway.</p>', '1670191980.jpg', '2022-12-03 20:37:39'),
(22, 'Top_3_thirdSlide_img3', '<p><br></p><p style=\"text-align: center; \"><b>Samaguing Cave, Sagada</b></p><p style=\"text-align: justify;\">The largest cave in Sagada is the Sumaguing Cave. The highlight of this amazing experience are the rock formations that resemble familiar forms. Some of these structures include the bird and elephants, the tortoise and chocolate cake. The entrance to Sumaguing Cave has a custom stairway.</p>', '1670192089.jpg', '2022-12-04 10:09:23'),
(23, 'our_services1', '<h5 style=\"text-align: center;\">Affordable Price</h5><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '1670171196.', '2022-12-04 16:26:36'),
(24, 'our_services2', '<h5 style=\"text-align: center;\">Local Travels</h5><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '1670171420.', '2022-12-04 16:30:20'),
(25, 'our_services3', '<h5 style=\"text-align: center;\">Customer Service</h5><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '1670171490.', '2022-12-04 16:31:30'),
(26, 'our_services4', '<h5 style=\"text-align: center;\">Fast and Secure </h5><p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '1670171551.', '2022-12-04 16:32:31'),
(27, 'Top_2_secondSlide_img3', '<p>Baracuda Lake</p>', '1670191725.jpg', '2022-12-04 22:08:45'),
(28, 'home_banner_img', '<p>Banner image for home page</p>', '1670306018.jpeg', '2022-12-05 02:02:59'),
(29, 'destination_banner_img', '<p>banner image for destination</p>', '1670295101.jpg', '2022-12-05 02:11:41'),
(30, 'blog_banner_img', '<p>Banner image for blog</p>', '1670206452.jpg', '2022-12-05 02:14:12'),
(31, 'Strawberry Farm, Baguio City', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Strawberry Farm, Baguio City</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1670275773.jpeg', '2022-12-05 21:29:33'),
(32, 'Diniwid Beach, Boracay', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Diniwid Beach, Boracay</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1671462710.jpg', '2022-12-05 21:30:20'),
(33, 'Pagudpud, Ilocos', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Pagudpud, Ilocos</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1670275859.jpg', '2022-12-05 21:30:59'),
(34, 'Caluit Safari Park', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Caluit Safari Park, Palawan</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1671463229.jpg', '2022-12-05 21:34:44'),
(35, 'Marlboro Hill, Sagada', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Marlboro Hill, Sagada</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1671463321.jpg', '2022-12-05 21:35:13'),
(36, 'Calle Crisologo, Vigan', '<p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Name: Calle Crisologo, Vigan</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Destination Description:&nbsp;</span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">White Beach, one of the nicest beaches in the Philippines and the focal point of Boracay Island, is located in the province of Aklan.</span></p><p style=\"text-align: justify;\"><span style=\"font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\"><span style=\"font-weight: bolder;\">Package:</span></span><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">&nbsp;Transportation (back and fort), Cottage, Free Meals</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">Price:</span>&nbsp;5,000 Pesos per head, Good for 2 days.</p>', '1670276142.jpg', '2022-12-05 21:35:42'),
(56, 'contact_banner_img', '<p>contact</p>', '1671478824.jpg', '2022-12-19 19:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(8, 'marc', 'markie', 'fafamarc@gmail.com', '1e56a9684795159b2cfee5357d079150', 0, 1, '2022-11-18 21:20:52'),
(10, 'Marina', 'Uy', 'marine4@gmail.com', 'b329f324cc17d6221a385ea1afb3a289', 0, 0, '2022-11-18 21:37:32'),
(11, 'admin', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, 0, '2022-11-18 21:52:40'),
(12, 'Mami', 'The Cat', 'mamicat@gmail.com', '8542b565d783b62bc1b12adb6637f1ca', 1, 0, '2022-11-18 22:04:52'),
(14, 'Isly ', 'Eliliah', 'islyeliii@gmail.com', 'c84dcf5292a085dbc0a9e6248df2511b', 0, 0, '2022-11-18 22:14:38'),
(15, 'Christina', 'Alcantara', 'chrisA@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0, 0, '2022-11-24 07:12:07'),
(16, 'ran', 'haitani', 'ranhaitaniharthart@gmail.com', '9495f45063a4e02d84181873cb0549d8', 0, 0, '2022-12-07 05:47:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
