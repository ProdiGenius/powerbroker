--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `carat` decimal(4,2) NOT NULL,
  `colour` varchar(64) NOT NULL,
  `intensity` varchar(24) NOT NULL,
  `shape` varchar(32) NOT NULL,
  `img` varchar(254) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `carat` (`carat`),
  KEY `colour` (`colour`),
  KEY `intensity` (`intensity`),
  KEY `shape` (`shape`),
  KEY `img` (`img`),
  KEY `price` (`price`)
);
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `carat`, `colour`, `intensity`, `shape`, `img`, `price`) VALUES
(1, '1.10-Carat Intense Pink Pear Shaped Diamond', '1.10', 'pink', 'intense', 'pear', 'resources/inv_item1.jpg', '12754.00'),
(2, '1.20-Carat Light Yellow Round Shaped Diamond', '1.20', 'yellow', 'light', 'round', 'resources/inv_item1.jpg', '12754.00'),
(3, '1.30-Carat Vivid Blue Cushion Shaped Diamond', '1.30', 'Blue', 'vivid', 'cushion', 'resources/inv_item1.jpg', '12754.00'),
(4, '1.40-Carat Vivid Pink Round Shaped Diamond', '1.40', 'pink', 'vivid', 'round', 'resources/inv_item1.jpg', '12754.00');

-- --------------------------------------------------------

--
-- Table structure for table `product_facets`
--

CREATE TABLE IF NOT EXISTS `product_facets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `product_facets`
--

INSERT INTO `product_facets` (`id`, `name`) VALUES
(1, 'carat'),
(2, 'colour'),
(3, 'intensity'),
(4, 'shape'),
(5, 'price');

-- --------------------------------------------------------

--
-- Table structure for table `product_facts`
--

CREATE TABLE IF NOT EXISTS `product_facts` (
  `product_id` int(11) NOT NULL,
  `facet_id` int(11) NOT NULL,
  `facet_name` varchar(24) NOT NULL,
  `value` varchar(24) NOT NULL,
  KEY `product_id` (`product_id`),
  KEY `facet_id` (`facet_id`),
  KEY `facet_name` (`facet_name`),
  KEY `value` (`value`)
);

