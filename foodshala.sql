SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for customers 

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `preference` varchar(100) NOT NULL,
  `contact_number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insertion Example in customers table

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `preference`, `contact_number`, `password`) VALUES
(0, 'Deepanshu', 'Patel', 'deepanshu.patel0876@gmail.com', 'veg', 1234567890, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

-- Table structure for menu_items

CREATE TABLE `menu_items` (
  `item_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_imagepath` varchar(255) NOT NULL,
  `item_price` int(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insertion Example in menu_items

INSERT INTO `menu_items` (`item_id`, `res_id`, `item_name`, `item_imagepath`, `item_price`, `item_type`, `item_desc`) VALUES
(6, 6, 'Cake', 'uploads/2019_11_23_16_52_17_cake.jpg', 1000, 'veg', 'Desert');


-- --------------------------------------------------------

-- Table structure for restaurants

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `res_name` varchar(100) NOT NULL,
  `res_email` varchar(100) NOT NULL,
  `res_number` int(100) NOT NULL,
  `res_city` varchar(100) NOT NULL,
  `res_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Insertion Example in restaurants

INSERT INTO `restaurants` (`id`, `res_name`, `res_email`, `res_number`, `res_city`, `res_password`) VALUES
(0, 'FoodShala', 'res@gmail.com', 1234567890, 'Phagwara', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------


ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`item_id`);

ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `menu_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

