
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `syeom` username for Soonja Yeom
--

-- --------------------------------------------------------

--
-- Table structure for table `KIT202_product`
--

CREATE TABLE IF NOT EXISTS `KIT202_product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KIT202_product`
--

INSERT INTO `KIT202_product` (`ID`, `Name`, `Price`, `Description`) VALUES
(1, 'iMac', 1999, '17 inch Apple All-in-One'),
(2, 'Macbook Pro Retina', 2799, '15 inch Apple Laptop with Retina display'),
(3, 'Alienware M18x Gaming Laptop', 3299, '18 inch DELL Gaming Laptop'),
(4, 'XPS One 2710 (Touch)', 2499, '27 inch DELL ALL-in-One');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
