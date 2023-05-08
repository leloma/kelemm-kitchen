-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 10:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`f_name`, `l_name`, `email`, `phone_number`, `username`, `password`) VALUES
('David', 'Bambito', 'dbambito@gmail.com', '0790908077', 'dBambito', '1234'),
('James', 'Dean', 'JamesDean@gmail.com', '0711221134', 'jDean', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_id` int(5) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_image_path` varchar(50) NOT NULL,
  `food_price` int(10) NOT NULL,
  `type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_id`, `food_name`, `food_image_path`, `food_price`, `type_id`) VALUES
(15, 'Scrambled Eggs', 'scrambled_eggs.jpg', 100, 1),
(22, 'Cheese Omelette', 'cheese_omelette.jpg', 110, 1),
(23, 'Eggs And Bacon', 'eggs_and_bacon.jpg', 145, 1),
(24, 'Blueberry Pancake', 'blueberry_pancakes.jpg', 80, 1),
(25, 'Beef Burger', 'beef_burger.jpg', 330, 2),
(27, 'Chips Masala', 'chips_masala.jpg', 190, 2),
(28, 'Hawaiian Pizza', 'hawaiian_pizza.jpg', 550, 2),
(29, 'Beef Ribs', 'beef_ribs.jpg', 360, 3),
(30, 'Barbeque Chicken Wings', 'bbq_chicken.jpg', 400, 3),
(31, 'Rice and Chicken Curry', 'rice_and_curry.jpg', 450, 3),
(32, 'Grilled Fillet Steak', 'grilled_fillet_steak.jpg', 700, 3),
(33, 'Chocolate Doughnut', 'choc_donut.jpg', 50, 4),
(34, 'Chocolate Chip Muffin', 'chocchip_muffin.jpg', 85, 4),
(36, 'Mango Juice', 'mango_juice.jpg', 110, 5),
(37, 'Strawberry Milkshake', 'strawberry_milkshake.jpg', 215, 5),
(38, 'Regular Chips', 'regular_chips.jpg', 120, 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `type_id` int(5) NOT NULL,
  `food_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`type_id`, `food_type_name`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Dessert'),
(5, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(5) NOT NULL,
  `customer_id` varchar(30) NOT NULL,
  `total_amount` int(8) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `processed_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(8) NOT NULL,
  `order_id` int(5) NOT NULL,
  `food_id` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `no_of_serving` int(5) NOT NULL,
  `total_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`f_name`, `l_name`, `email`, `phone_number`, `address`, `username`, `password`) VALUES
('Damailo', 'Hohan', 'dhohan@gmail.com', '0777765688', 'Thika', 'dHohan', '1234'),
('Gragy', 'Paprs', 'gragyPaprs@gmail.com', '0719878345', 'Kilimani', 'gPaprs', '1234'),
('Holly', 'Nyambura', 'hollyNyambura@mail.com', '0722343313', 'Kileleshwa', 'hollyN', '1234'),
('Jamie', 'Dose', 'jdose@gmail.com', '0789907811', 'Dagoreti', 'jDose', '1234'),
('John', 'Brai', 'john@mail', '0767893424', 'Adams', 'john', '1234'),
('Lelo', 'Aberito', 'leloabera@gmail.com', '0756847721', 'Jamhuri Phase 1', 'lelo', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD CONSTRAINT `food_menu_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `menu_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
