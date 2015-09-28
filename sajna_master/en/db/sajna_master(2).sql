-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2012 at 06:54 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sajna_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminId` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`AdminId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bm_category`
--

CREATE TABLE IF NOT EXISTS `bm_category` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `cStatus` int(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `bm_category`
--

INSERT INTO `bm_category` (`Id`, `Name`, `cStatus`) VALUES
(4, 'BOISSON CHAUDES', 1),
(5, 'BOISSON', 1),
(6, 'LES BOISSONS – MINERALES JUS ', 1),
(8, 'LONG DRINKS ET CHAMPAGNES', 1),
(9, 'VINS OUVERTS', 1),
(10, 'VIN ROUGE', 1),
(11, 'VIN ROSE', 1),
(12, 'VIN BLANC', 1),
(13, 'APERITIFS', 1),
(14, '(ALCOOLS - LIQUERS- WHISKY)', 1),
(15, 'LONG DRINKS ET CHAMPAGNES', 1),
(16, 'BIERES', 1),
(17, 'COCKTAILS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bm_products`
--

CREATE TABLE IF NOT EXISTS `bm_products` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Description1` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `bmCatId` int(5) NOT NULL,
  `pStatus` int(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `bm_products`
--

INSERT INTO `bm_products` (`Id`, `Name`, `Description`, `Description1`, `Price`, `bmCatId`, `pStatus`) VALUES
(3, 'Pomme - Willimine Poire', '	2.50cl 	 ', '', '8.00', 14, 1),
(4, 'Grappa - A bricotine  ', '2.50cl 	 ', '', '8.00', 14, 1),
(5, 'Marie Brizard - Irish cream', '	2.50cl 	 ', '', '9.00', 14, 1),
(6, 'Cognac Biquit Martel', '2.50cl 	 ', '', '9.00', 14, 1),
(7, 'Remy Martin', '2.50cl 	 ', '', '10.00', 14, 1),
(8, 'I Whisky JB - Red Label', '4.00cl 	 ', '', '12.00', 14, 1),
(9, 'Chaves Rega -Jack Daniel', '4.cl', '', '15.00', 14, 1),
(10, 'Vodka - Gin', '4.00cl 	 ', '', '12.00', 14, 1),
(11, 'Black Label JW', '4.00cl 	 ', '', '15.00', 14, 1),
(12, 'Liquers Ina en (rose, mangue)', '4.00cl 	 ', '', '12.00', 14, 1),
(13, 'Vodka Lemon', '4cl 	 ', '', '8.00', 14, 1),
(14, 'Tequila', '4.00cl 	 ', '', '10.00', 14, 1),
(15, 'Campari Orange', '4cl 	 ', '', '12.00', 14, 1),
(16, 'Gin Tonic', '4cl 	 ', '', '12.00', 14, 1),
(17, 'Pastis - Ricard', '4cl 	 ', '', '8.00', 13, 1),
(18, 'Canar - Suze – Campari', '	4cl 	 ', '', '8.00', 13, 1),
(19, 'Martini Blanc - Rouge', '	4cl 	 ', '', '8.00', 13, 1),
(20, 'Porto Rouge - Blanc', '4cl 	 ', '', '8.00', 13, 1),
(21, 'Blanc Cassis La Coupe', '', '', '6.00', 13, 1),
(22, 'La Coupe de Champagne', '', '', '10.00', 13, 1),
(23, 'La Coupe de Cocktelmaison ', '', '', '10.00', 13, 1),
(24, 'La Coupe de Kir Royal ', '', '', '12.00', 13, 1),
(31, 'Sirop Grenadire – Sirop Menthe – Sirop Rose – Lait Froid   ', '', '', '2.00', 5, 1),
(28, 'Bièrre Pression', '	33cl 	 ', '', '3.50', 16, 1),
(29, 'Feldschossxhen (Suisse)', '	25cl 	 ', '', '4.00', 16, 1),
(30, 'Indienne Bierre', '	33cl 	 ', '', '6.00', 16, 1),
(32, 'Café (Espresso&Restretto)', '', '', '3.00', 4, 1),
(33, 'Thé - Infusions', '', '', '3.00', 4, 1),
(34, 'Lait chaudes la verre de', '3dl 	 ', '', '4.00', 4, 1),
(35, 'Chocolat chaudes la verre de', '3dl 	 ', '', '4.00', 4, 1),
(36, 'Ovo Maltine chaudes la verre de', '3dl 	 ', '', '4.00', 4, 1),
(37, 'Chai - The &#1648; Indien', '', '', '5.00', 4, 1),
(38, 'Chai Masala Indien ', '', '', '6.00', 4, 1),
(39, 'Bloody Mary', '33cl 	 ', '', '14.00', 17, 1),
(40, 'Gins Tonic', '	25cl 	 ', '', '14.00', 17, 1),
(42, 'Arkina', '	50cl 	 ', '', '4.00', 7, 0),
(43, 'Arkina', ' 100cl 	 ', '', '7.00', 7, 0),
(44, 'Schweppes Tonic', ' 20cl 	 ', '', '5.00', 7, 0),
(45, 'Jus d’orange(Nectar)', ' 30cl 	 ', '', '4.00', 7, 0),
(46, 'Jus de tomat(Nectar)', '30cl', '', '4.50', 7, 0),
(47, 'Jus de Pomme(Nectar)', '30cl', '', '5.00', 7, 0),
(48, 'Jus de Pêche(Nectar)', '30cl', '', '5.00', 7, 0),
(49, 'Jus de Ananas(Nectar) ', '30cl', '', '5.00', 7, 0),
(50, 'Jus de mangue(Nectar)', '30cl', '', '5.00', 7, 0),
(51, 'Jus de lychee(Nectar)', '30cl', '', '6.00', 7, 0),
(52, 'Jus de Guava(Nectar)', '30cl', '', '6.00', 7, 0),
(53, 'Coca Cola (light, zero)', '30cl', '', '4.00', 7, 0),
(54, 'Ice Tea(Lemon,Pêche)', '30cl', '', '4.00', 7, 0),
(55, 'Vodka Lemon', '4cl 	 ', '', '8.00', 8, 1),
(56, 'Tequila', '4cl 	 ', '', '10.00', 8, 1),
(57, 'Campari Orange', '4cl 	 ', '', '12.00', 8, 1),
(58, 'Gin Tonic', '4cl 	 ', '', '12.00', 8, 1),
(59, 'La Bouteille ', '', '', '70.00', 15, 1),
(60, 'Moet & Chandon', '', '', '90.00', 15, 1),
(71, 'Chasselas', '30.00', '', '19.00', 12, 1),
(70, 'Mont Sur Roll ', '32.00 	', '', '21.00', 12, 1),
(74, '', '70/75cl', '', '50.00', 10, 1),
(64, '', '70/75cl', '', '50.00', 11, 1),
(65, 'Gamay ', '30.00 ', '', '20.00', 11, 1),
(66, 'Oeil De Perdrix ', '42.00  	', '', '22.00', 11, 1),
(67, 'Cote de Provence', '27.00', '', '18.00', 11, 1),
(72, 'Chardonnay', '40.00', '', '21.00', 12, 1),
(75, 'Cote du Rhone (Mandarin)', '52.00', '', '0.00', 10, 1),
(76, 'Cote du Rh6ne (Papes)', '42.00', '', '0.00', 10, 1),
(77, 'Gamay ', '36.00', '', '20.00', 10, 1),
(78, 'Dole', '42.00', '', '22.00', 10, 1),
(79, 'Brouilly', '36.00', '', '23.00', 10, 1),
(80, 'Beaujolais', '36.00', '', '23.00', 10, 1),
(81, 'Pinot Noir ', '42.00', '', '23.00', 10, 1),
(82, 'Saint Amour ', '42.00', '', '27.00', 10, 1),
(83, '1dl', '2.5dl', '', '5.00', 9, 1),
(84, 'Blanc (Chasselas)    4.00  	', '10.00 	', '', '18.00', 9, 1),
(85, 'Rouge (Beaujolaise - Cote du Rhone)  4.00', '10.00', '', '18.00', 9, 1),
(86, 'Rose (Côte de Provence A C)   4.00', '10.00', '', '18.00', 9, 1),
(95, 'Arkina', '50cl 	 ', '', '4.00', 6, 1),
(96, 'Arkina', '100cl 	 ', '', '7.00', 6, 1),
(97, 'Schweppes Tonic', '20cl 	 ', '', '5.00', 6, 1),
(98, 'Jus d’orange(Nectar)', ' 30cl 	 ', '', '4.00', 6, 1),
(99, 'Jus de tomat(Nectar)', '30cl', '', '4.50', 6, 1),
(100, 'Jus de Pomme(Nectar)', '30cl', '', '5.00', 6, 1),
(101, 'us de Pêche(Nectar)', '30cl', '', '5.00', 6, 1),
(102, 'Jus de Ananas(Nectar) ', '30cl', '', '5.00', 6, 1),
(103, 'Jus de mangue(Nectar)', '30cl', '', '5.00', 6, 1),
(104, 'Jus de lychee(Nectar)', '30cl', '', '6.00', 6, 1),
(105, 'Jus de Guava(Nectar)', '30cl', '', '6.00', 6, 1),
(106, 'Coca Cola (light, zero)', '30cl', '', '4.00', 6, 1),
(107, 'Ice Tea(Lemon,Pêche)', '30cl', '', '4.00', 6, 1),
(118, 'raju', 'raju', 'raju1', '122.00', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `cStatus` int(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Name`, `cStatus`) VALUES
(7, 'STARTER/ ENTRÉE', 1),
(6, '	BOISSON MAISON', 1),
(8, 'PAKORA`S', 1),
(9, 'SAMOSA`S', 1),
(10, 'TANDOORI STARTERS', 1),
(11, 'SOUPS/SOUP', 1),
(12, 'SALAD/SALADS', 1),
(13, 'RAITA/YAOURT', 1),
(14, 'RICE/RIZ', 1),
(15, 'NAAN/PAIN', 1),
(16, 'PARATHA`S', 1),
(17, 'VEGETABLES/LEGUMES', 1),
(18, 'DAAL / LENTILS', 1),
(19, 'CHICKEN/POULET', 1),
(20, 'LAMB/ AGNEAU', 1),
(21, 'BEEF/BOEUF', 1),
(22, 'SEA FOOD/FRUIT DE MER', 1),
(23, 'TANDOORI DISHES/PLATTER', 1),
(24, 'BIRYANI', 1),
(25, 'DESSERTS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contlist`
--

CREATE TABLE IF NOT EXISTS `contlist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `RegistredOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contlist`
--

INSERT INTO `contlist` (`Id`, `Name`, `EmailId`, `ContactNo`, `Address`, `City`, `Description`, `RegistredOn`) VALUES
(1, 'dasari pothuraju', 'dasaripothuraju2010@gmail.com', '9700963601', 'Guntur', 'hyderabad', 'It very nice', '2012-03-08 13:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE IF NOT EXISTS `menulist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CatId` int(10) NOT NULL,
  `pStatus` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menulist`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Description1` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CatId` int(5) NOT NULL,
  `pStatus` int(5) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Description`, `Description1`, `Price`, `CatId`, `pStatus`) VALUES
(8, 'NATURAL LASSI', 'Boisson Indienne à la base de yaourt (nature).\r\n\r\n\r\nIndian Drink with yogurt base (natural) 	\r\n  	 ', '', '5.00', 6, 1),
(9, 'SWEET LASSI', 'Boisson Indienne à la base de yaourt (sucre).\r\nIndian Drink with yogurt base (sweet)', '', '5.00', 6, 1),
(10, '	SALTED LASSI', 'Boisson Indienne à la base de yaourt (sale).\r\nIndian Drink with yogurt base (salted)', '', '5.00', 6, 1),
(11, '	MANGO LASSI', 'Boisson Indienne à la base de yaourt avec de mangue\r\nIndian Drink with yogurt base with mango', '', '5.00', 6, 1),
(12, '	LASSI COMBO(Serves 6)', 'BoissonIndienne à la base de yaourt (Choix natural,sale,sucre et mangue)\r\nIndian drink with yogurt base (Choose natural, salted, sweet and mango)', '', '20.00', 6, 1),
(13, '	LASSI COMBO(Serves 10)', 'BoissonIndienne à la base de yaourt (Choix natural,sale,sucre et mangue)\r\nIndian drink with yogurt base (Choose natural, salted, sweet and mango)', '', '32.00', 6, 1),
(14, 'SAJNA LASSI SPECIAL', 'Boisson Indienne à la base de yaourt (rose, mangue,noix de coco)\r\nIndian Drink with yogurt (rose, mango, coconut)', '', '7.00', 6, 1),
(15, 'French Fry/ Pommes frites', 'Regular,Small ', '', '5.00', 7, 1),
(16, '	Chicken Wings ', 'Wings ballotté dans de la sauce BBQ avec du poivre de Cayenne\r\nWings tossed in BBQ sauce with Cayenne pepper', '', '8.00', 7, 1),
(17, '	Mozzarella Sticks ', 'Deep mozzarella rouleaux frits à la sauce aïoli\r\nDeep fried mozzarella rolls with aioli sauce', '', '7.00', 7, 1),
(18, '	Halim', 'Les lentilles mélangées avec les os d´agneau et les épices\r\nMixed lentils with lamb bones and spices', '', '8.00', 7, 1),
(19, '	Moglai Paratha with Green Salad ', 'Farine Complet avec les oeufs et les legumes preparé avec une authentic recipé\r\nTraditional Indian flatbread with wheat flour, egg and chopped green vegetable 	', '', '10.00', 7, 1),
(20, 'Shami Kabab (Thun)', 'Poisson thon, pomme de terré épices avec de herbs verte grillé dans la four de charbbon\r\nTunna Fish, potatoes, spices with green herbs grilled in tandoor.', '', '8.00', 7, 1),
(21, '	Shami Kabab (Beef) ', 'Beouf hachè mélange avec lentils des pois chiches et grillé au four\r\nBeef Keema mixed with Chana dal and grilled in tandoor', '', '10.00', 7, 1),
(22, '	BEEF JALFREEZI', 'Préparé avec oignons et poivrons, très épicés\r\nPrepared with onions and capsicums. Extra hot', '', '25.00', 21, 1),
(23, 'BEEF MADRAS', 'Emincé de boeuf dans une sauce spéciale de Inde de Sud\r\nDiced beef in South Indian sauce.', '', '25.00', 21, 1),
(24, 'BEEF VINDAALO', 'Spécialité du Sud. Curry prepare à la sauce vindaloo, épicé\r\nSpciality of the South. Hot', '', '25.00', 21, 1),
(25, 'BEEF PALAK ', 'Boeuf aux épinards\r\nBeef prepared with spinach', '', '25.00', 21, 1),
(26, 'BEEF ALOO ', 'Emincé de boeuf aux pommes de terre avec une sauce épicéé moyen\r\nFried beef with fresh spinach in creamy sauce', '', '25.00', 21, 1),
(27, 'PUNJABI BIRYANI', 'Panaché de legumes, dans du yaourt puis étuvés avec du riz basmati et safrané\r\nVegetables cooked with basmati rice, saffron with authentic spices', '', '24.00', 24, 1),
(28, 'CHICKEN BIRYANI ', 'Morceaux de poulet cuits avec riz basmati, safran et épices authentiques\r\nChicken cooked with basmati rice, saffron with authentic spices', '', '27.00', 24, 1),
(29, '	LAMB BIRYANI', 'Agneau preparé avec du riz basmati et safrane avec authentic épices\r\nPieces of lamb cooked with basmati rice, saffron with authentic spices ', '', '28.00', 24, 1),
(30, 'CREVETTES BIRYANI ', 'Crevettes décortiquées dans du yaourt puis étuvés avec du riz basmati et safrané\r\nShrimps cooked with basmati rice, saffron with authentic spices. ', '', '30.00', 24, 1),
(31, '	KANCHI BIRYANI ', 'Agneau avec le os preparé avec du riz basmati avec authentic épices\r\nLamb with bone cooked with basmati rice and authentic spices', '', '30.00', 24, 1),
(32, 'DAL TARKA', 'Curry aux lentils, épices avec le beurre\r\nYellow lentils with tarka of onion in butter', '', '16.00', 18, 1),
(33, 'CHANA DAL MASALA', 'Pois chiches, tomates préparé dans la masala épices\r\nChic-peas prepared with hot spices', '', '17.00', 18, 1),
(34, 'CHANA PUNJABI', 'Pois chiches, tomates préparé dans la masala punjabi\r\nChic-peas prepared with special Punjabi masala', '', '17.00', 18, 1),
(35, '	DAL MAKHNI', 'Lentils noir préparé avec la creme et beurre\r\nBlack lentils in cream and butter', '', '18.00', 18, 1),
(36, 'MIXED DAL', 'Melange lentils avec beurre, ognion et épices\r\nMixed lentils with butter, onion and spices', '', '18.00', 18, 1),
(120, 'CHICKEN PUNJABI ', 'Poulèt épicés avec yaourt et la sauce punjabi\r\nHot-spiced chicken with yoghurt and Punjabi sauce ', '', '24.00', 19, 1),
(37, '	La Glace ', 'Deux boules de glace\r\nTwo scopes of ice cream', '', '4.00', 25, 1),
(38, 'GULAB JAMUN ', 'Roulettes de farine et lait en poudre frites au sirop\r\nFlour and milk powder fried balls soaked in syrup', '', '4.00', 25, 1),
(39, '	HALWA', 'Gateau de semoule au saftan\r\nSemolin cake with saffron', '', '4.50', 25, 1),
(40, 'RASGULLA ', 'Boulet du fromage maison dans le siro\r\nBall of cheese coated in the syrup', '', '5.00', 25, 1),
(41, 'CHAMCHAM', 'Gâteau du fromage avec le concentré de lait\r\nSweet of cottage cheese with concentrated milk.', '', '5.00', 25, 1),
(42, '	KHIR TOIA ', 'Gateau du fromage Indienne maison\r\nSweets of cottage cheese', '', '5.00', 25, 1),
(43, 'RASMALAI', 'Petite balle du fromage maison dans le lait sucré\r\nSmall cottage cheese balls in sweet milk ', '', '7.00', 25, 1),
(44, 'LAMB ROGHAN JOSH ', 'Agneau traditionnel moyennement épicé\r\nLamb with lightly spiced traditional sauce', '', '25.00', 20, 1),
(45, 'LAMB MADRASI ', 'Agneau avec le curry forte épicé dans le style au sud de l’inde\r\nLamb with hot-spiced curry in south Indian style', '', '25.00', 20, 1),
(46, 'LAMB PUNJABI ', 'Agneau cuisine avec yaourt et sauce épices\r\nLamb with yoghurt and spicy sauce', '', '25.00', 20, 1),
(47, 'LAMB VINDALOO', 'Agneau bien réléve, épices à la sauce vindaloo\r\nHot-spiced lamb with vindaloo sauce', '', '25.00', 20, 1),
(48, 'LAMB JALFREEZI', 'Lamb épices avec piment vert frais et sauce masala\r\nLamb hot spiced with green chiliesand masala sauce', '', '27.00', 20, 1),
(49, 'LAMB TIKKA MASALA', 'Lamb grileé avec la peits pois dans la sauce épices\r\nLamb with green peas in special sauce', '', '27.00', 20, 1),
(50, '	SAGWALA LAMB ', 'Agneau aux épinards hâchés et épices\r\nLamb with spinach and mild spices ', '', '27.00', 20, 1),
(51, '	LAMB KORMA ', 'Agneau à la sauce légèrement épicée de noix de cajou et crème fraîche\r\nLamb with lightly spiced sauce of cashew nuts and fresh cream', '', '27.00', 20, 1),
(52, 'LAMB SAJNA ', 'Agneau cuisine avec lait de coco, raisins secs, noix de cajou, et épices\r\nLamb with coconut milk, raisins, cashew nuts, and spices', '', '28.00', 20, 1),
(119, 'CHICKEN CURRY SPECIAL ', 'Poulet sans os dans une sauce authentic\r\nPieces of boneless chicken in authentic sauce', '', '23.00', 19, 1),
(53, 'TANDOORI ROTI / CHAPATI', 'Pain plat indien traditionnel à la farine compléte\r\nTraditional Indian flatbread with wheat flour', '', '3.50', 15, 1),
(54, 'SADA NAAN / PLAIN NAAN', 'Pain plat indien traditionnel nature et cuit au four selon une recette authentique\r\nNaturally baked traditional Indian flatbread', '', '3.50', 15, 1),
(55, '	BUTTER NAAN ', 'Pain plat indien tratitionnel avec beurre et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with butter and baked to an authentic recipe', '', '4.50', 15, 1),
(56, '	CHEESE NAAN', 'Pain plat indien traditionnel avec fromage et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with cheese and baked to an authentic recipe', '', '5.00', 15, 1),
(57, 'GARLIC NAAN', 'Pain plat indien tratitionnel avec ails et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with garlic and baked to an authentic recipe 	', '', '5.00', 15, 1),
(58, '	ONION NAAN', 'Pain plat indien traditionnel avec les onions et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with chopped onions and baked to an authentic recipe', '', '6.00', 15, 1),
(59, '	SABJI NAAN ', 'Pain plat indien traditionnel avec legumes et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with vegetables and baked to an authentic recipe', '', '7.00', 15, 1),
(60, '	KASHMIRI NAAN ', 'Pain plat indien traditionnel avec fruits secs et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with dry fruits and baked to an authentic recipe', '', '8.00', 15, 1),
(61, 'KEEMA NAAN', 'Pain plat indien traditionnel avec viande hâché et cuit au four selon une recette authentique\r\nTraditional Indian flatbread stuffed with meat and baked to an authentic recipe 	', '', '10.00', 15, 1),
(118, 'CHICKEN CURRY', 'Morceaux de poulet avec os dans une sauce au curry\r\nChicken pieces withbone in curry sauce', '', '20.00', 19, 1),
(62, 'ALOO PAKORA', 'Beignets de pomme de terre à la farine de pois chiches, épicés et frit\r\nPieces of potatoes dipped in gram flour and pakora masala and fried', '', '6.00', 8, 1),
(63, '	GOBI PAKORA', 'Beignets de chou fleur à la farine de pois chiches, épicés et frit\r\nPieces of cauliflower dipped in gram flour and pakora masala and fried', '', '8.00', 8, 1),
(64, '	PANEER PAKORA', 'Morceaux de sérac à la farine de pois chiches, épicés et herbes frais et frit\r\nPieces of cottage cheese stuff with herbs masala, dipped in gram flour and fried', '', '10.00', 8, 1),
(65, 'ONION PAKORA', 'Pieces of onion dipped in gram flour, light spices and fried', '', '6.00', 8, 1),
(66, '	BAINGEN PAKORA', 'Pieces of brinjal dipped in gram flour and fried', '', '6.00', 8, 1),
(67, '	BHAJI PAKORA ', 'Pieces of onions, potatoes and brinjals dipped in gram flour and fried', '', '10.00', 8, 1),
(68, 'TRADITIONNEL PARATHA', 'Pain plat indien traditionnel de la farine complete, les oignons coupés et le beurre\r\nTraditional Indian flatbread with wheat flour, chopped onions and butter', '', '4.00', 16, 1),
(69, '	ONION PARATHA ', 'Pain plat indien traditionnel de la farine complete, les oignons coupés et le beurre\r\nTraditional Indian flatbread with wheat flour, chopped onions and butter', '', '4.00', 16, 1),
(70, 'ALOO PARATHA ', 'Pain plat indien traditionnel de la farine complete, les pommes coupés et le beurre\r\nTraditional Indian flatbread with wheat flour, chopped potatoes and butter', '', '4.00', 16, 1),
(71, '	VEG. RAITA', 'Legume et yaourt avec raita masala\r\nVegetable and yoghurt with raita masala ', '', '6.00', 13, 1),
(72, '	BOONDI RAITA ', 'Pois chiches boondi mélange avec yaourt et raita masala\r\nGram flour boondi mixed in yoghurt with raita masala ', '', '8.00', 13, 1),
(73, '	BAIGEN RAITA', 'Aubergines grillé et melangé avec du yaourt\r\nGrilled egg plant mixed with yogurt', '', '8.00', 13, 1),
(74, '	PLAIN RICE ', 'Riz Basmati nature, Basmati rice natural ', '', '4.50', 14, 1),
(75, '	PULAO SAFRANI', 'Riz Basmati au safran, Basmati rice with saffron', '', '6.00', 14, 1),
(76, 'GREEN PULAO', 'Riz basmati aux petits pois et cumin avec herbe\r\nBasmati rice with green peas, cumin with herbes', '', '7.00', 14, 1),
(77, '	LEMON PULAO', 'Riz basmati au lemon frais\r\nBasmati rice prepared with cumin seeds', '', '7.00', 14, 1),
(78, 'JEERA PULA0', 'Riz basmati au cumin\r\nBasmati rice prepared with cumin seeds', '', '7.00', 14, 1),
(79, '	KASHMIRI PULA0', 'Riz basmati aux divers fruits secs, confits et safran\r\nBasmati rice with dry fruits and saffron', '', '8.00', 14, 1),
(80, '	SAJNA PULAO', 'Riz basmati au cumin et safran, petits pois et carottes\r\nBasmati rice with cumin, saffron, green peas and carrots', '', '10.00', 14, 1),
(81, 'BHUNA KHICHURI', 'Riz basmati avec des lentils rouge, cumin preparé avec une recipé authentique\r\nBasmati rice with red dal, cumin prepared with authentic recipe', '', '10.00', 14, 1),
(82, 'PUNJABI SALAD ', 'Cocombre, tomate, ognion, piment vert servi avec du citron frais\r\nCucumber, tomato, onion, green chilies dressing with fresh lemon', '', '6.00', 12, 1),
(83, 'GREEN KACHUMBAR ', 'Cocombre, tomate et ognion coupé et servi avec la salade masala.\r\nChopped cucumber, tomato and onion with salad masala', '', '8.00', 12, 1),
(84, '	SAJNA GREEN SALAD ', 'Morceaux des concombres, tomates, oignons mélangés dans une sauce aux herbs fraîches\r\nPieces of cucumber, tomatoes, onions served with sauce of fresh herbs ', '', '10.00', 12, 1),
(85, '	SAMOSA PUNJABI', 'Lightly spiced vegetables stuffed in Indian style flaky pastry', '', '7.00', 9, 1),
(86, 'SAMOSA BENGALI ', 'Mélange des sec fruits et legumes légèrement épiceé et roulé dans une pâte bengalais authentique\r\nLightly spiced dry fruits and vegetables stuffed in authentic Bengali style', '', '8.00', 9, 1),
(87, '	SAMOSA KEEMA (AGNEAU)', 'Lightly spiced lamb in Indian style flaky pastry', '', '10.00', 9, 1),
(88, '	FISH CURRY ', 'Saumon avec curry épices\r\nSaumon prepared with spicy curry', '', '23.00', 22, 1),
(89, 'FISH BENGALI (HILSHA) ', 'Pois chiches, tomates préparé dans la masala punjabi.\r\nchic-peas prepared with special Punjabi masala', '', '25.00', 22, 1),
(90, '	CREVETTES MADRAS ', 'Crevettes décortiquées sauce relevée et épices\r\nShrimps served in hot-spiced South Indian sauce', '', '25.00', 22, 1),
(91, '	CREVETTES CURRY ', 'Crevettes avec curry sauce\r\nShrimps prepared with curry sauce', '', '25.00', 22, 1),
(92, 'CREVETTES SABJI', 'Crevettes décortiquées legumes cuisine avec gingembre, ails, oignon, tomate et coriander fraîche\r\nShrimps served with vegetables ', '', '26.00', 22, 1),
(93, 'GAMBAS CURRY', 'Gambas décortiquées grilles au four, cuisinées avec gingembre ails, oignons, tomates et coriander fraîche\r\nBig shrimps in sauce of ginger, garlic, onions, tomatoes, fresh coriander and spices', '', '28.00', 22, 1),
(94, 'GAMBAS VINDALOO ', 'Gambas bien réléve, épice à la sauce vindaloo\r\nHot-spiced shrimps with vindaloo sauce', '', '28.00', 22, 1),
(95, '	GAMBAS MADRAS', 'Gambas décortiquées sauce relevée et épices\r\nBig shrimps grilled and prepared with authentic sauce', '', '30.00', 22, 1),
(96, 'GAMBAS SAJNA SPECIAL ', 'Gambas grillés au four preparé dans le sauce spécial\r\nBig shrimps grilled and prepared with authentic sauce', '', '30.00', 22, 1),
(97, '	DAAL SOUP ', 'Lentil jaune avec en petit peu de poivre\r\nYellow lentils with lightly black pepper', '', '10.00', 11, 1),
(98, 'VEGETABLE SOUP ', 'Mélange des legumes préparé avec du masala végetarian\r\nMixed vegetables with lightly vegetarian masala ', '', '12.00', 11, 1),
(99, 'CHICKEN TANDOORI', 'Poulet mairné dans la sauce authentic aux épices et grillé\r\nMarinated chicken in authentic recipe and grilled in tandoor', '', '14.00', 23, 1),
(100, 'CHICKEN TIKKA PLATTER ', 'Poulet sans os mariné dans la sauce et grillé\r\nBoneless chicken marinated in authentic recipe and lightly spices and grilled in tandoor (served for 2 persons)', '', '26.00', 23, 1),
(101, 'SHEEKH KEBAB PLATTER', 'Chopped lamb skewer with onions, garlic, ginger, fresh coriander, herbs, spices and grilled in tandoor (served for 2 persons)', '', '26.00', 23, 1),
(102, '	SAJNA MIX GRILLED (SEA FOOD)', 'Morceaux de poisson sans arête et gambas grillés au tandoor\r\nGrilled pieces of fish and big shrimps (served for 2 persons)', '', '26.00', 23, 1),
(103, 'GAMBAS TANDOORI', 'Gambas grillés au four avec les épices\r\nBig shrimps with light spices grilled in tandoor ', '', '28.00', 23, 1),
(104, '	CHICKEN TIKKA ', 'Poulet sans os mariné dans la sauce et grillé\r\nBoneless chicken marinated in authentic recipe and grilled in tandoor', '', '12.00', 10, 1),
(105, '	LAMB TIKKA ', 'Agneau mariné à la sauce avec épices et grillé\r\nMarinated Lamb in authentic recipe and grilled in tandoor', '', '15.00', 10, 1),
(106, '	FISH TIKKA ', 'Morceaux de poisson sans arête mariné dans la sauce frais herbes et grillé au tandoor\r\nPieces of boneless fish, marinated with sauce of fresh herbs and spices, grilled in tandoor ', '', '15.00', 10, 1),
(107, 'TANDOORI MIXED GRILLED ', 'Morceaux de poulet, sheesh kabab et poisson grillé au tandoor\r\nGrilled pieces of chicken, sheesh kebab and fish', '', '28.00', 10, 1),
(108, '	ALOO JEERA', 'Pomme de terre cuisinées facon Bombay.\r\nPotatoes prepared in Bombay style with cumin ', '', '13.00', 17, 1),
(109, '	ALOO GOBI ', 'Pomme de terre avec chou fleur prépare avec masala.\r\nPotatoes with cauliflower prepared with masala ', '', '14.00', 17, 1),
(110, '	ALOO MUTTER', 'Pomme de terre et petit pois avec sauce Indian légère.\r\nPatatoes and green peas with mild Indian sauce ', '', '15.00', 17, 1),
(111, '	ALOO PALAK ', 'Pomme de terres et les épinards avec cream frais.\r\nPotatoes with spinach prepared with fresh cream', '', '15.00', 17, 1),
(112, 'PALAK PANEER', 'Indien.\r\nSpinach with cottage cheese', '', '17.00', 17, 1),
(113, 'SARSON KA SAAG ', 'Feuilles de moutarde avec épices et les oignons.\r\nMustard leaves with spices and onions', '', '17.00', 17, 1),
(114, '	BAIGAN BHARTA', 'Aubergine grillés avec ses épices, tomates oignons.\r\nGrilled eggplant (brinjal) with tomatoes, onions and authentic spices', '', '16.00', 17, 1),
(115, '	BHINDI MASALA', 'Okras, ognions, gingembre, piments verts et épices\r\nOkras with onions, ginger, green chilli and masala', '', '17.00', 17, 1),
(116, '	MATAR PANEER ', 'Petit pois et fromage indien avec sauce légeré\r\nGreen peas with cottage cheese with mild sauce', '', '18.00', 17, 1),
(117, 'PANEER KORMA', 'Fromage Indienne preparé avec sauce spécial authentic\r\nCottage cheese prepared in special authentic sauce', '', '20.00', 17, 1),
(121, '	CHICKEN MASALA', 'Poulet rélève, épices avec aromates frais et petits pois\r\nHot-spiced chicken with fresh aromatic masala sauce and green peas.', '', '24.00', 19, 1),
(122, '	CHICKEN JALFREZEE', 'Poulet épices avec piment vert frais et sauce masala\r\nChicken hot spiced with green chilies and masala sauce', '', '24.00', 19, 1),
(123, '	CHICKEN MADRAS ', 'Poulet preparé avec la forte madrasi sauce\r\nChicken with hot madrasi sauce', '', '24.00', 19, 1),
(124, 'CHICKEN KORMA ', 'Poulet à la sauce de noix de cajou, amandes, crème fraîche et raisins\r\nChicken in sauce with cashew nuts, almonds and raisins with fresh cream', '', '25.00', 19, 1),
(125, 'CHICKEN VINDALOO', 'Poulet bien relevé, épicé à la sauce vindaloo\r\nHot-spiced chicken with vindaloo sauce', '', '25.00', 19, 1),
(126, 'BUTTER CHICKEN ', 'Poulet grillé dans une sauce spécial authentic\r\nGrilled chicken in specially authentic sauce', '', '26.00', 19, 1),
(127, '	CHICKEN TIKKA MASALA', 'Poulet grillé avec la peits pois dans la sauce épices\r\nChicken with green peas in spiced sauce', '', '26.00', 19, 1),
(128, 'CHICKEN SAJNA ', 'Poulet préparé avec Sajna spécial authentic recèttes\r\nChicken prepared in special Sajna authentic recipe ', '', '27.00', 19, 1),
(129, 'ALOO LAMB ', 'masala\r\nLamb pieces with potatoes prepared with spicy masala ', '', '23.00', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resevationlist`
--

CREATE TABLE IF NOT EXISTS `resevationlist` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Zipcode` varchar(20) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Events` varchar(50) NOT NULL,
  `Visit` varchar(20) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Nofp` int(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `resevationlist`
--

INSERT INTO `resevationlist` (`Id`, `Name`, `ContactNo`, `Address`, `Zipcode`, `EmailId`, `Events`, `Visit`, `Date`, `Nofp`) VALUES
(9, 'dasaripothuraju', '9700963601', 'Qn:305', '500017', 'dasaripothuraju2010@gmail.com', 'Lunch', 'Yes', '11-11-2025', 5),
(10, 'dasaripothuraju', '9700963601', 'secbad', '522213', 'dasaripothuraju2010@gmail.com', 'Lunch', 'Yes', '10-10-2025', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
