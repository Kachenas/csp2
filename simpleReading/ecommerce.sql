-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 04:24 PM
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
  `price` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`inventoryID`, `bookName`, `image`, `description`, `price`) VALUES
(1, 'Aleph', 'assets/images/paulo/Aleph.jpg\r\n', 'Aleph is a 2011 novel by the Brazilian writer Paulo Coelho. An autobiographical account of Coelho, it is his fourteenth major book, and touches on the theme of spirituality. Aleph was written in Coelho\'s native language, Portuguese.\r\n', '572.80'),
(2, 'Brida', 'assets/images/paulo/Brida.jpg', 'Brida is a novel by Brazilian author Paulo Coelho set in Ireland between August 1983 and March 1984.It is the story of a beautiful young Irish girl named Brida and her quest for spiritual knowledge.\r\n', '438.30'),
(3, 'Magic Strings', 'assets/images/mitch/MagicStrings.jpg\'\r\n', 'Frankie elevates to a rock star himself, yet his gift becomes his burden, as he realizes that he can actually affect people’s futures: his guitar strings turn blue whenever a life is altered. Overwhelmed by life, loss, and this power, he disappears for years, only to reemerge in a spectacular and mysterious farewell.\r\n', '453.15'),
(4, 'Five People you meet in Heaven\r\n', 'assets/images/mitch/FivePeople.jpg\'\r\n', 'The Five People You Meet In Heaven is a novel by Mitch Albom. It follows the life and death of a maintenance man named Eddie. Eddie is killed and sent to heaven, where he encounters five people who had a significant impact upon him while he was alive.\r\n', '399.60'),
(5, 'A walk to remember\r\n', 'assets/images/nicholas/Awalk.jpg\'\r\n', 'Set in North Carolina, popular and rebellious teenager Landon Carter is threatened with expulsion from school after he and his friends leave evidence of underage drinking on the school grounds, and seriously injure another student during a prank gone wrong.\r\n', '389.70'),
(6, 'Dear John\r\n', 'assets/images/nicholas/DearJohn.jpg\'\r\n', 'While serving in the United States Army Special Forces in 2003, Staff Sergeant John Tyree is lying on the ground in Afghanistan, after being shot multiple times with his comrades around him. In a voice-over, he recalls a childhood trip to the US Mint and compares himself to a coin in the United States Military before stating that the last thing he thought of before he blacked out was \"you.\"\r\n', '360.00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `inventoryID` int(11) NOT NULL,
  `cartPrice` decimal(65,2) NOT NULL,
  `userID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userID`, `firstName`, `lastName`, `username`, `password`, `email`, `address`, `role`) VALUES
(1, 'Chester', 'Almonte', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@simplereading.com', 'Fairview,Quezon City', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `datePurchase` date NOT NULL,
  `totalPurchase` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`inventoryID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userID`);

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
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
