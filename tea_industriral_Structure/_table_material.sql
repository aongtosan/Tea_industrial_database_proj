
-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `Item_ID` varchar(15) NOT NULL,
  `Tea_ID` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`Item_ID`, `Tea_ID`) VALUES
('BLCK_6301020001', 'BLCK_6102110003'),
('BLCK_6301030001', 'BLCK_6102110003'),
('BLCK_6303010001', 'BLCK_6102110003'),
('GREN_6305080001', 'BLCK_6102150001'),
('GREN_6301010001', 'GREN_6102110002'),
('GREN_6301010002', 'GREN_6102110002'),
('GREN_6301010003', 'GREN_6102140001'),
('GREN_6301010004', 'GREN_6304070001');
