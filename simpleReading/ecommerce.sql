-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 12:53 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorID`, `firstName`, `lastName`) VALUES
(1, 'Paulo', 'Coelho'),
(2, 'Mitch', 'Albom'),
(3, 'Nicholas', 'Sparks');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `inventoryID` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`inventoryID`, `bookName`, `image`, `description`, `price`, `book_id`) VALUES
(1, 'Aleph', 'assets/images/paulo/Aleph.jpg\r\n', 'Aleph is a 2011 novel by the Brazilian writer Paulo Coelho. An autobiographical account of Coelho, it is his fourteenth major book, and touches on the theme of spirituality. Aleph was written in Coelho\'s native language, Portuguese.\r\n', '572.80', 1),
(2, 'Brida', 'assets/images/paulo/Brida.jpg', 'Brida is a novel by Brazilian author Paulo Coelho set in Ireland between August 1983 and March 1984.It is the story of a beautiful young Irish girl named Brida and her quest for spiritual knowledge.\r\n', '438.30', 1),
(3, 'Magic Strings', 'assets/images/mitch/MagicStrings.jpg\'\r\n', 'Frankie elevates to a rock star himself, yet his gift becomes his burden, as he realizes that he can actually affect people’s futures: his guitar strings turn blue whenever a life is altered. Overwhelmed by life, loss, and this power, he disappears for years, only to reemerge in a spectacular and mysterious farewell.\r\n', '453.15', 2),
(4, 'Five People you meet in Heaven\r\n', 'assets/images/mitch/FivePeople.jpg\'\r\n', 'The Five People You Meet In Heaven is a novel by Mitch Albom. It follows the life and death of a maintenance man named Eddie. Eddie is killed and sent to heaven, where he encounters five people who had a significant impact upon him while he was alive.\r\n', '399.60', 2),
(5, 'A walk to remember\r\n', 'assets/images/nicholas/Awalk.jpg\'\r\n', 'Set in North Carolina, popular and rebellious teenager Landon Carter is threatened with expulsion from school after he and his friends leave evidence of underage drinking on the school grounds, and seriously injure another student during a prank gone wrong.\r\n', '389.70', 3),
(6, 'Dear John\r\n', 'assets/images/nicholas/DearJohn.jpg\'\r\n', 'While serving in the United States Army Special Forces in 2003, Staff Sergeant John Tyree is lying on the ground in Afghanistan, after being shot multiple times with his comrades around him. In a voice-over, he recalls a childhood trip to the US Mint and compares himself to a coin in the United States Military before stating that the last thing he thought of before he blacked out was \"you.\"\r\n', '360.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `totalPrice` decimal(65,2) NOT NULL,
  `userID` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `totalPrice`, `userID`, `date`) VALUES
(5, '891.45', 12, '2018-02-01 19:25:03'),
(6, '453.15', 12, '2018-02-01 21:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userID`, `firstName`, `lastName`, `username`, `password`, `email`, `address`, `contactNo`, `role`) VALUES
(10, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@simplereading.com', 'Makati', '(639)-345-1234', 'admin'),
(11, 'Kevin', 'Payas', 'kevin', 'ffb4761cba839470133bee36aeb139f58d7dbaa9', 'kevin@simplereading.com', 'Fairview,Quezon', '(639)-123-4567', 'regular'),
(12, 'Chester', 'Almonte', 'chester', '5c9688a59f3fcbfdbfeea06378a76af06a09aa95', 'chester@simplereading.com', 'Bonuan,Dagupan', '(639)-1234-765', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `datePurchase` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` decimal(65,2) NOT NULL,
  `purchaseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cartID`, `userID`, `bookID`, `datePurchase`, `price`, `purchaseID`) VALUES
(4, 12, 3, '2018-02-01 19:25:04', '453.15', 5),
(5, 12, 2, '2018-02-01 19:25:04', '438.30', 5),
(6, 12, 3, '2018-02-01 21:34:36', '453.15', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`inventoryID`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bookID` (`bookID`),
  ADD KEY `purchaseID` (`purchaseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `inventoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `authors` (`authorID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `customer` (`userID`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `customer` (`userID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`bookID`) REFERENCES `books` (`inventoryID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`purchaseID`) REFERENCES `cart` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
