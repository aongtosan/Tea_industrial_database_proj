
-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `Car_ID` int(11) NOT NULL,
  `Compan_ID` varchar(10) NOT NULL,
  `Product_ID` varchar(15) NOT NULL,
  `Send_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`Car_ID`, `Compan_ID`, `Product_ID`, `Send_date`) VALUES
(1, '0000000001', 'BLCK_6301020001', '2020-05-01'),
(1, '0000000002', 'BLCK_6301030001', '2020-01-10'),
(1, '0000000002', 'GREN_6301010003', '2020-05-04'),
(1, '0000000003', 'BLCK_6303010001', '2020-02-10'),
(2, '0000000003', 'GREN_6305080001', '2020-05-14'),
(2, '0000000004', 'GREN_6301010002', '2020-04-16'),
(3, '0000000003', 'GREN_6301010001', '2020-03-12'),
(3, '0000000003', 'GREN_6301010004', '2020-02-28');
