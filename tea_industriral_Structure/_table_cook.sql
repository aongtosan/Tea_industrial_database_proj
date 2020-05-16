
-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `work_station` varchar(1) NOT NULL,
  `Department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`work_station`, `Department_id`) VALUES
('1', 1),
('2', 1),
('3', 1),
('4', 1),
('5', 1);
