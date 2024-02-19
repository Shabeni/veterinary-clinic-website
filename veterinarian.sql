-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 12:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veterinarian`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `pet_id` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `verify_token` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `time`, `price`, `status`, `message`, `service_id`, `client_id`, `pet_id`, `image`, `verify_token`) VALUES
(36, '2023-12-07', '22:45:00', 150.00, 'Booked', 'Need a surgery', 1, 71, 70, '656f8b9c13b87.jpg', '8f84d66c26e216319b86d26d48aca165'),
(37, '2023-12-14', '12:43:00', 50.00, 'Booked', 'hello I need ur help', 3, 72, 71, '', '25d6f33e04a58ed8de44ef441119dde7'),
(38, '2023-12-14', '03:47:00', 100.00, 'Booked', 'ok', 3, 73, 72, '656fb5ff947cf.jpg', '9951e6d3681b381ce609db76fcf0ef52'),
(39, '2023-12-14', '10:59:00', 200.00, 'Booked', 'test', 3, 74, 73, '656fb8ccaee06.png', 'aca302813075c6a0f380429f022d029f'),
(40, '2023-12-14', '05:12:00', 50.00, 'Booked', 'test1', 2, 75, 74, '656fbbc0093d1.png', 'fa4b7778f5de5c473b61193f24962a1e'),
(41, '2023-12-15', '01:16:00', 100.00, 'Booked', 'helllo', 2, 76, 75, '', 'bd36651ef1346bf05b586e1da9c9c6b8'),
(42, '2023-12-15', '04:15:00', 100.00, 'Booked', 'test', 1, 77, 76, '656fbc892b1b4.png', 'fcc3bef944eff76ff3c46c3cb6879d10'),
(43, '2023-12-15', '00:00:00', 0.00, 'Pending', 'lop', 1, 78, 77, '656fbcda37572.png', 'c4dc4aa9be1cddcd8217bac66a2a3c49'),
(44, '2023-12-13', '13:28:00', 50.00, 'Booked', 'Hello please can you help ', 3, 79, 78, '65706769d85dc.png', '06ccd8bcde13d745d836b930bbc5b51a'),
(45, '2024-02-15', '10:15:00', 100.00, 'Booked', 'Help me please!!', 2, 80, 79, '65c44410b6784.png', '089d2370a2b63327284c578a2d72d686'),
(46, '2024-02-21', '08:30:00', 150.00, 'Booked', 'Help me please!!', 3, 81, 80, '65c44909ae102.png', 'cfe35f76e0c1aa150f45208c8c3dc854');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `email`) VALUES
(1, 'de', '+21651344291', 'abdelhak_chabeni@outlook.com'),
(3, 'fsfsfs', '2111221', 'dqdq@daa'),
(4, 'de', '2111221', 'abdelhak_chabeni@outlook.com'),
(5, 'fsfsfs', '222', 'dqdq@daa'),
(6, 'fsfsfs', '222', 'dqdq@daa'),
(7, 'fsfsfs', '222', 'dqdq@daa'),
(8, 'fsfsfs', '222', 'dqdq@daa'),
(9, 'fsfsfs', '222', 'dqdq@daa'),
(10, 'didi', '2111221', 'achabeni76@gmail.com'),
(13, 'fsfsfs', '1111', 'dqdq@daa'),
(14, 'fsfsfsghjhj', '1111', 'dqdq@daa'),
(15, 'didi', '236544', 'achabeni76@gmail.com'),
(17, 'de', '12132', 'abdelhak_chabeni@outlook.com'),
(18, 'elnino', '2323', 'abc@hotmal.com'),
(19, 'elnino', '2121', 'abc@hotmal.com'),
(20, 'dsqd', '45544', 'hakou_2010@hotmail.fr'),
(21, 'dsqd', '45544', 'hakou_2010@hotmail.fr'),
(22, 'didi', '236544', 'achabeni76@gmail.com'),
(23, 'didi', '236544', 'achabeni76@gmail.com'),
(24, 'didi', '236544', 'achabeni76@gmail.com'),
(25, 'didi', '236544', 'achabeni76@gmail.com'),
(26, 'elnino', '236544', 'achabeni76@gmail.com'),
(27, 'elnino', '236544', 'achabeni76@gmail.com'),
(28, 'elnino', '236544', 'hakou_2010@hotmail.fr'),
(29, 'elnino', '236544', 'abc@hotmal.com'),
(30, 'elnino', '236544', 'abc@hotmal.comd'),
(31, 'ala', '254554', 'abc@hotmal.com'),
(32, 'gfdgfd', '254554', 'abc@hotmal.com'),
(36, 'didi', 'achabeni76@gmai', 'achabeni76@gmail.com'),
(37, 'linn', '1122', 'bibo@hotmail.fr'),
(38, 'linn', '1122', 'bibo@hotmail.fr'),
(39, 'fdfds', '1122', 'bibo@hotmail.fr'),
(40, 'fdfdsfds', '1122', 'bibo@hotmail.fr'),
(41, 'fdfdsfds', '1122', 'hakou1998@hotmail.fr'),
(42, 'fdfdsfds', '1122', 'hakou1998@hotmail.fr'),
(43, 'didi', '2335445', 'achabeni76@gmail.com'),
(44, 'elnino', '253698755', 'dqdq@daa'),
(45, 'elnino', '1234', 'dqdq@daa'),
(46, 'de', '23355', 'abdelhak_chabeni@outlook.com'),
(47, 'elnino', '5236944', 'achabeni76@gmail.com'),
(48, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(49, 'fsfsfs', 'dqdq@daa', 'dqdq@daa'),
(50, 'de', 'abdelhak_chaben', 'abdelhak_chabeni@outlook.com'),
(51, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(52, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(53, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(54, 'didi', 'achabeni76@gmai', 'achabeni76@gmail.com'),
(55, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(56, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(57, 'de', 'abdelhak_chaben', 'abdelhak_chabeni@outlook.com'),
(58, 'linn', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(59, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(60, 'didi', 'achabeni76@gmai', 'achabeni76@gmail.com'),
(61, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(62, 'de', 'abdelhak_chaben', 'abdelhak_chabeni@outlook.com'),
(63, 'elnino', 'bibo@hotmail.fr', 'bibo@hotmail.fr'),
(64, 'nino', '255444', 'abdelhak_chabeni@outlook.com'),
(66, 'de', '25555', 'abdelhak_chabeni@outlook.com'),
(67, 'elnino', '23565475', 'bibo@hotmail.fr'),
(68, 'Amal', '23521362', 'tsmmteacher@gmail.com'),
(69, 'de', '123454', 'abdelhak_chabeni@outlook.com'),
(70, 'samo', '23154887', 'abdelhak_chabeni@outlook.com'),
(71, 'de', '23546589', 'abdelhak_chabeni@outlook.com'),
(72, 'Amal', '23584544', 'abc@hotmal.com'),
(73, 'Amal', '23584544', 'maya@hotmail.com'),
(74, 'Amine', '23654896', 'achabeni76@gmail.com'),
(75, 'samo', '23564896', 'hakou1998@hotmail.fr'),
(76, 'ala', '2356488', 'abc@hotmal.com'),
(77, 'ala', '2356488', 'abc@hotmal.com'),
(78, 'samo', '23564899', 'hakou1998@hotmail.fr'),
(79, 'Ibrahim', '23565458', 'abdelhak_chabeni@outlook.com'),
(80, 'Alex', '235645866', 'bibo@hotmail.fr'),
(81, 'Smith', '23565458', 'Smith@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `mail`, `number`, `location`, `work_time`) VALUES
(1, 'contact@petwell.com', '+21671138700', 'Rue Alain Savary', '7/7 From 9AM to 7PM');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `petname` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `clientid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `petname`, `date_of_birth`, `typeid`, `clientid`) VALUES
(2, 'gfdg', '2023-11-10', 1, 3),
(3, 'gfdg', '2023-11-23', 2, 4),
(4, 'gfdg', '2023-11-23', 2, 5),
(5, '+21651344291', '2023-11-22', 1, 6),
(6, '+21651344291', '2023-11-15', 1, 7),
(7, '+21651344291', '2023-11-17', 1, 8),
(8, 'gfdg', '2023-11-22', 2, 9),
(9, 'gfdg', '2023-11-15', 2, 10),
(12, 'gfdg', '2023-11-08', 2, 13),
(13, 'nino', '2023-11-07', 2, 14),
(14, 'fgfghg', '2023-11-01', 2, 15),
(16, 'gfdg', '2023-11-09', 2, 17),
(17, 'fdfsd', '2023-11-01', 2, 18),
(18, 'fdd', '2023-11-08', 2, 19),
(19, 'gfdg', '2023-11-08', 2, 20),
(20, 'gfdg', '2023-11-08', 2, 21),
(21, 'gfdg', '2023-11-08', 3, 22),
(22, 'gfdg', '2023-11-08', 3, 23),
(23, '+21651344291', '2023-11-22', 1, 24),
(24, '+21651344291', '2023-11-22', 1, 25),
(25, 'ghghg', '2023-11-21', 2, 26),
(26, 'ghghg', '2023-11-21', 2, 27),
(27, 'dsgdsg', '2023-11-21', 5, 28),
(28, 'gfdg', '2023-11-06', 3, 29),
(29, 'gfdg', '2023-11-09', 2, 30),
(30, 'gfdg', '2023-11-14', 1, 31),
(31, 'cxwcxw', '2023-11-22', 1, 32),
(35, '+21651344291', '2023-11-07', 4, 36),
(36, 'gfdg', '2023-11-24', 3, 37),
(37, 'kjjj', '2023-11-08', 2, 38),
(38, 'nino', '2023-11-13', 5, 39),
(39, 'dsgdsg', '2023-11-14', 5, 40),
(40, 'ghghg', '2023-11-15', 5, 41),
(41, 'nino', '2023-11-09', 5, 42),
(42, 'gfdg', '2023-11-01', 5, 43),
(43, 'nino', '2023-11-01', 5, 44),
(44, 'ghghg', '2023-11-07', 5, 45),
(45, 'gfdg', '2023-11-16', 5, 46),
(46, 'fdsfds', '2023-11-01', 5, 47),
(47, '+21651344291', '2023-11-16', 5, 48),
(48, 'dsgdsg', '2023-11-15', 5, 49),
(49, 'dsgdsg', '2023-11-22', 5, 50),
(50, 'nino', '2023-11-22', 5, 51),
(51, 'dsgdsg', '2023-11-16', 5, 52),
(52, 'dsgdsg', '2023-11-16', 5, 53),
(53, 'dsgdsg', '2023-12-08', 5, 54),
(54, 'dsgdsg', '2023-11-30', 5, 55),
(55, 'dsgdsg', '2023-11-22', 5, 56),
(56, '+21651344291', '2023-11-08', 5, 57),
(57, 'nino', '2023-12-08', 5, 58),
(58, 'nino', '2023-11-10', 5, 59),
(59, 'ghghg', '2023-11-23', 5, 60),
(60, 'dsgdsg', '2023-11-16', 5, 61),
(61, 'dsgdsg', '2023-11-22', 5, 62),
(62, 'gfdg', '2023-11-08', 5, 63),
(63, 'dsgdsg', '2023-12-14', 1, 64),
(65, 'gfdg', '2023-12-13', 2, 66),
(66, 'dsgdsg', '2023-12-20', 1, 67),
(67, 'Rex', '2023-12-13', 2, 68),
(68, 'ghghg', '2023-12-22', 1, 69),
(69, 'nino', '2023-12-07', 1, 70),
(70, 'rex', '2023-12-06', 1, 71),
(71, 'Rex', '2023-12-14', 1, 72),
(72, 'gfdg', '2023-12-07', 5, 73),
(73, 'Nino', '2023-12-09', 2, 74),
(74, 'bibo', '2023-12-13', 7, 75),
(75, 'patty', '2023-12-12', 1, 76),
(76, 'nino', '2023-12-15', 1, 77),
(77, 'gfd', '2023-12-15', 1, 78),
(78, 'Dexter', '2023-12-01', 1, 79),
(79, 'Leo', '2024-01-10', 5, 80),
(80, 'Leo', '2024-01-09', 5, 81);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `role`, `active`) VALUES
(2, 'veterinarian', 1),
(3, 'secretary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `type_service` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type_service`, `actif`) VALUES
(1, 'Primary Care', 0),
(2, 'Specialty Care', 1),
(3, 'Urgent Care', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `testimonial` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `testimonial`) VALUES
(1, 'Winek 5ouna', 'I brought my dog, Max, to the clinic last month when he was feeling unwell. The staff were incredibly kind and professional. They took great care of Max and he was back to his old self in no time. I can’t thank them enough for their compassion and expertise. I highly recommend this clinic to all pet owners.'),
(2, 'Bambino', 'Our cat, Whiskers, had been acting strangely for a few days. We decided to take her to the local veterinary clinic and we’re so glad we did. The staff were incredibly understanding and took the time to thoroughly examine Whiskers. They diagnosed her with a minor infection and prescribed some medication. Within a week, she was back to her playful self. We can’t express how grateful we are for the care and attention the clinic provided. We would highly recommend their services to all pet owners.'),
(3, 'Nouha', 'Je recommande vivement le Dr. Maya pour ses soins attentifs et professionnels envers mon chat. Elle a su le rassurer et le guérir rapidement.'),
(4, 'Emna', 'I want to thank your services');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `intitule`, `actif`) VALUES
(1, 'Dog', 0),
(2, 'Cat', 1),
(3, 'Cow', 1),
(4, 'Tiger', 1),
(5, 'hamster', 1),
(7, 'Snake', 1),
(8, 'Oiseau', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mdp`, `active`, `profil_id`) VALUES
(2, 'Lina', 'abdelhak_chabeni@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 2),
(4, '', 'achabeni76@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 3),
(5, 'Ahmed', 'abc@hotmal.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 3),
(6, 'samo', 'hakou1998@hotmail.fr', '81dc9bdb52d04dc20036dbd8313ed055', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `typeid` (`typeid`),
  ADD KEY `clientid` (`clientid`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`pet_id`) REFERENCES `pets` (`id`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`typeid`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `pets_ibfk_2` FOREIGN KEY (`clientid`) REFERENCES `clients` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
