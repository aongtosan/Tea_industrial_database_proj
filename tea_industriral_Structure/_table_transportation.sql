
-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `Department_id` int(11) NOT NULL,
  `Department_manager_id` varchar(10) NOT NULL,
  `Car_ID` int(11) NOT NULL,
  `Car_Status` varchar(10) DEFAULT NULL CHECK (`Car_Status` = 'ON USED' or `Car_Status` = 'MAINTAINED' or `Car_Status` = 'AVAILABLE'),
  `Vehicle_registration` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`Department_id`, `Department_manager_id`, `Car_ID`, `Car_Status`, `Vehicle_registration`) VALUES
(6, '6101010006', 1, 'ON USED', 'vech012345678123'),
(6, '6101010006', 2, 'ON USED', 'vech012345678789'),
(6, '6101010006', 3, 'ON USED', 'vech201345678789');
