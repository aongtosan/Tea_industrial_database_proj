
-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Compan_ID` varchar(10) NOT NULL,
  `Company_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `canton` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Compan_ID`, `Company_name`, `Email`, `tel`, `Province`, `District`, `canton`) VALUES
('0000000001', 'Maruay store', '-', '0897729532', 'Bangkok,10220', 'Saimai', 'Saimai'),
('0000000002', 'Trio shop', '-', '0897729953', 'Bangkok,10220', 'Saimai', 'Khong-thanon'),
('0000000003', 'TU - DOME', '-', '0861234567', 'Pathumthani,10550', 'Rangsit', 'Khong-luang'),
('0000000004', ' Amazon coffee cafe riittiya', 'amazon_coffee@gmail.com', '0857729532', 'Bangkok,10220', 'Saimai', 'Khong-thanon'),
('0000000005', 'Seventh Heaven paradise', 'SH_paradise@gmail.com', '0859177401', 'Bangkok,10220', 'Saimai', 'Saimai');
