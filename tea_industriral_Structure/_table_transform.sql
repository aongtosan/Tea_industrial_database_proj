
-- --------------------------------------------------------

--
-- Table structure for table `transform`
--

CREATE TABLE `transform` (
  `station` varchar(1) NOT NULL,
  `Item_ID` varchar(15) NOT NULL,
  `Product_Name` varchar(25) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Manufactured_date` date DEFAULT NULL,
  `Expiration_date` date DEFAULT NULL,
  `Price` int(11) DEFAULT NULL CHECK (`Price` > 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transform`
--

INSERT INTO `transform` (`station`, `Item_ID`, `Product_Name`, `Quantity`, `Manufactured_date`, `Expiration_date`, `Price`) VALUES
('1', 'BLCK_6301020001', 'BLACK LEMON TEA DRINK', 20000, '2020-02-02', '2020-12-31', 25),
('1', 'BLCK_6301020014', 'GREEN TEA DRINK', 2000, '2020-05-04', '2020-05-04', 25),
('1', 'BLCK_6301030001', 'BLACK LEMON TEA DRINK', 20000, '2020-03-02', '2020-12-31', 25),
('1', 'BLCK_6303010001', 'BLACK LEMON TEA DRINK	', 6000, '2020-03-01', '2020-12-31', 25),
('1', 'GREN_6301010001', 'GREEN TEA  MACHA DRINK', 60000, '2020-01-01', '2020-12-31', 35),
('1', 'GREN_6301010002', 'TASTY MACHA GREEN TEA ', 60000, '2020-01-02', '2020-12-31', 35),
('3', 'GREN_6301010003', 'GREEN TEA  MACHA DRINK', 10000, '2020-01-03', '2020-12-31', 30),
('5', 'GREN_6301010004', 'GREEN TEA  MACHA  POWDER', 10000, '2020-01-01', '2020-12-31', 120),
('3', 'GREN_6305080001', 'GREEN TEA  MACHA DRINK', 6000, '2020-05-14', '2020-12-14', 35);
