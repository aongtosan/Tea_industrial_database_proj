
-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_name` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `Employee_id` varchar(10) NOT NULL,
  `Login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `logout_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(3) NOT NULL DEFAULT 'out'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_name`, `pass`, `Employee_id`, `Login_time`, `logout_time`, `Status`) VALUES
('6101010001', '1', '6101010001', '2020-05-14 14:56:30', '2020-05-14 14:56:29', 'out'),
('6101010002', '2', '6101010002', '2020-05-15 04:03:52', '2020-05-14 06:46:25', 'in'),
('6101010003', '3', '6101010003', '2020-05-14 14:25:25', '2020-05-14 14:25:24', 'out'),
('6101010004', '4', '6101010004', '2020-05-14 14:02:10', '2020-05-14 14:02:10', 'out'),
('6101010005', '5', '6101010005', '2020-05-14 15:06:02', '2020-05-14 15:06:02', 'out'),
('6101010006', '6', '6101010006', '2020-05-14 15:05:23', '2020-05-14 15:05:23', 'out');
