-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2019 at 03:12 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propertyId` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `uploadedOn` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `propertyId` (`propertyId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `propertyId`, `filename`, `uploadedOn`) VALUES
(1, 1, 'img/propertie/1.jpg', '2019-03-19 19:10:31'),
(2, 2, 'img/propertie/2.jpg', '2019-03-19 19:11:36'),
(3, 3, 'img/propertie/3.jpg', '2019-03-19 19:12:06'),
(4, 4, 'img/propertie/4.jpg', '2019-03-19 19:12:06'),
(5, 5, 'img/feature/1.jpg', '2019-03-19 19:25:52'),
(6, 6, 'img/feature/2.jpg', '2019-03-19 19:25:52'),
(7, 7, 'img/feature/3.jpg', '2019-03-19 19:25:52'),
(8, 8, 'img/feature/4.jpg', '2019-03-19 19:25:52'),
(9, 9, 'img/feature/5.jpg', '2019-03-19 19:25:52'),
(10, 10, 'img/feature/6.jpg', '2019-03-19 19:25:52'),
(11, 11, 'img/feature/lamer.jpg', '2019-03-20 20:00:12'),
(12, 12, 'img/propertie/kingston.jpeg', '2019-03-28 10:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `area` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `location`, `description`, `price`, `area`, `bedroom`, `bathroom`, `owner`, `type`, `city`, `date`, `user`, `image`) VALUES
(2, '45 Lianne Dr, Greece Street', 'Tasley, VA 23441', 'Welcome to 45 Lianne Drive! This spacious, 2005 built raised ranch has undergone a recent interior update from top to bottom. New Pergo flooring & fresh paint throughout. Gorgeous new front entry door. Brand new Stainless kitchen appliances (included), as well as Washer & Dryer. Master bedroom includes large walk in closet. Full, updated bathrooms on each floor. High efficiency furnace w/ Central Air recently added. Great Neighborhood, close to shopping & more. This home is turn-key, move in ready!', '1,25,5000', 1500, 8, 6, 'Rohan Angwalkar', 'Apartment', 'New York', '2019-03-28 09:19:00', 0, 'img/propertie/2.jpg'),
(3, 'Aqua Ave Apt 603', 'Miami Beach, FL 33141', 'Unique in its own right, the gated community of Aqua on Allison Island offers all the perks of private island living at sensible pricing. This gorgeous three-bedroom, three-bathroom, and one half-bathroom residence boasts a spacious 1,862 square foot layout and features a modern cook\'s kitchen, open living/dining room area that is perfect for entertaining and a spacious balcony that faces east and looks over the Intracoastal ', '150,0000', 1200, 10, 8, 'Archana Ajaykumar', 'Family', 'Chicago', '2019-03-28 09:19:00', 0, 'img/propertie/3.jpg'),
(4, 'N Oakhurst Dr Apt 303', 'Beverly Hills, CA 90210', 'This spacious condominium is located in the heart of Beverly Hills. Beautifully remolded, this two-bedroom, two-bathroom residence features include hardwood floors, fireplace, large living room, dinning area, updated kitchen with stone countertops, and laundry area. Building amenities include security guard, pool, spa, sauna, barbecue area, and recreation and exercise room.', '3,000,0000', 800, 4, 3, 'Manisha Chaudhary', 'Family', 'Washington', '2019-03-28 09:19:00', 0, 'img/propertie/4.jpg'),
(5, 'S Crescent Heights', ' Los Angeles, CA 90034', 'Exclusively listed with REX and not available on the MLS. Every REX home comes with a 30-day buyback guarantee. Terms and conditions apply. Schedule your appointment with REX for a same day showing. Gorgeous 3 bedroom, 2 bath Spanish style home with 1644 square feet in Faircrest Heights! Close to great restaurants, museums, shopping and DTLA. Stunning architectural detail including arched doorways with plaster detail, coved ceilings, crown moulding and original hardwood floors. The light & bright living room is spacious with a large stone fireplace, original niches for artwork, books & display and wood floors. A formal dining room has a passthrough and lots of room for entertaining. The kitchen offers stainless steel appliances, tile counters, wood cabinets with ample storage space, tile floors and a breakfast area. All of the bedrooms have a lovely feel with nice closet space, hardwood floors and one of the bedrooms has access to a rooftop patio. The bathrooms feature wood vanities, linen cabinets, tile floors (one with original tile). Three outdoor areas are perfect for gathering with friends & family. Separate laundry room with cabinets and built-in storage drawers. Three car garage on private alley. Central AC; copper plumbing; retrofitted, newer windows. Minutes from the Beverly Center, The Grove, Century City, 10 Fwy, between La Cienega, Pico, Fairfax and Venice Blvds. A great find that will go fast! Schedule a showing with REX today! ', '1,200,0000', 800, 10, 6, 'Krishna Jha', 'Family', 'Pune', '2019-03-28 09:19:00', 0, 'img/feature/1.jpg'),
(6, '305 North Palm Drive', ' Beverly Hills, CA 90210', 'Beautiful Mediterranean 5 bedroom + 7 bathroom home in the heart of Beverly Hills! Built in 2005, this home presents exquisite designer finishes throughout the entire home with extensive use of limestone flooring and tumbling marble. When entering the home you are greeting with a wonderful foyer along with the dining room and formal living room on your left and right side. The large kitchen boasts top-of-the-line appliances including a Wolf range, Sub-Zero fridge, 2 Miele dishwashers and more with a large center island. The family room connects to the heated backyard with a barbecue island. ', '4,500,0000', 1500, 16, 8, 'Manisha Chaudhary', 'Resort', 'Mumbai', '2019-03-28 09:19:00', 0, 'img/feature/2.jpg'),
(7, '305 North Palm Drive', 'Beverly Hills, CA 90210', 'Beautiful Mediterranean 5 bedroom + 7 bathroom home in the heart of Beverly Hills! Built in 2005, this home presents exquisite designer finishes throughout the entire home with extensive use of limestone flooring and tumbling marble. When entering the home you are greeting with a wonderful foyer along with the dining room and formal living room on your left and right side. The large kitchen boasts top-of-the-line appliances including a Wolf range, Sub-Zero fridge, 2 Miele dishwashers and more with a large center island. The family room connects to the heated backyard with a barbecue island. ', '2,500,000', 1500, 16, 8, 'Rohan Angwalkar', 'Resort', 'Hyderabad', '2019-03-28 09:19:00', 0, 'img/feature/3.jpg'),
(8, '28 Quaker Ridge Road, Manhasset', '28 Quaker Ridge Road, Manhasset', '96 Quaker Ridge Rd, Manhasset, NY 11030 is a single family home built in 1937. This property was last sold for $910,000 in 2004 and currently has an estimated value of $1,280,500. The median sales price for the North Hempstead area is $750,000. The $1,280,500 estimated value is 44.86% greater than the median listing price of $883,950 for the North Hempstead area.According to the Manhasset public records, the property at 96 Quaker Ridge Rd, Manhasset, NY 11030 has approximately 1,748 square feet, with a lot size of 8,050 square feet. Nearby schools include Munsey Park Elementary School, Manhasset Middle School and Manhasset Secondary School. ', '5,600,0000', 1200, 12, 8, 'Praveen Maurya', 'Office', 'Delhi', '2019-03-28 09:19:00', 0, 'img/feature/4.jpg'),
(9, 'Sofi Berryessa 750 N King Road', 'San Jose, CA 95133', 'Situated in northeast San Jose, CA, let Sofi Berryessa welcome you to a home that holds the best of all worlds: vibrant city life and beautiful outdoor spaces. Our pet-friendly apartments are located on the border of the Creekland and Pine Hollow neighborhoods. Enjoy easy access to major Silicon Valley employers like Apple, Cisco Systems, and eBay, as well as the countless diverse cultural offerings available in San Jose and the greater Bay Area.', '1,650,000', 1500, 4, 2, 'Archana Ajaykumar', 'Office', 'Banglore', '2019-03-28 09:19:00', 0, 'img/feature/5.jpg'),
(10, '1203 Orren Street, Northeast', 'Washington, DC 20002', 'Sun drenched home in the best part of Trinidad! 3BD/2BTH with potential to easily convert into a 4BD/3.5BTH. Great opp to customize & have instant equity. Basement has both a front/back entrance & can convert into rental income; Airbnb! Shed behind home can be converted to garage, remain as shed, leveled park pad; already has elec/plumb. Solar on roof keeps utilities low. ', '1,600,0000', 1300, 7, 7, 'Anuradha Barnwal', 'Apartment', 'Mumbai', '2019-03-28 09:19:00', 0, 'img/feature/6.jpg'),
(11, 'Lamer Empire', 'Bandra West, 400033', 'Demo description.', '500,000', 2000, 7, 5, 'Ajit Thajur', 'Family', 'pune', '2019-03-28 09:19:00', 0, 'img/feature/lamer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propertyhistory`
--

DROP TABLE IF EXISTS `propertyhistory`;
CREATE TABLE IF NOT EXISTS `propertyhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(50) NOT NULL,
  `area` int(11) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertyhistory`
--

INSERT INTO `propertyhistory` (`id`, `name`, `location`, `description`, `price`, `area`, `bedroom`, `bathroom`, `owner`, `type`, `city`, `date`, `user`, `image`) VALUES
(1, 'Greendale Apt', 'Vasai', 'This is commercial as well as  office building', '5000000', 1400, 3, 2, 'Tejindra Singh', 'family', 'mumbai', '2019-04-01 05:15:32', 1, 'img/propertie/greendale.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propertyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `propertyId` (`propertyId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `propertyId`, `userId`, `date`) VALUES
(1, 5, 1, '2019-03-21 18:58:49'),
(2, 12, 1, '2019-03-28 05:35:16'),
(3, 11, 78, '2019-03-28 09:29:56'),
(4, 1, 1, '2019-03-29 10:06:55'),
(5, 2, 1, '2019-03-31 21:31:10'),
(6, 12, 1, '2019-03-31 21:38:51'),
(7, 14, 1, '2019-04-01 05:22:41'),
(8, 1, 1, '2019-04-01 05:28:42'),
(9, 13, 1, '2019-04-01 05:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userType` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `contact`, `email`, `city`, `password`, `userType`) VALUES
(1, 'Admin', 'Admin', '9999999999', 'admin@gmail.com', 'Mumbai', '12345678', 1),
(2, 'Krishna', 'Jha', '9876543210', 'krishnajha@gmail.com', 'Mumabi', 'krishnajha', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
