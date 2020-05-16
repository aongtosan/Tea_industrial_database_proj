
-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_id` int(11) NOT NULL,
  `Department_manager_id` varchar(10) NOT NULL,
  `Department_name` varchar(20) DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_id`, `Department_manager_id`, `Department_name`, `location`) VALUES
(1, '6101010001', 'Product', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130'),
(2, '6101010002', 'Management', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130'),
(3, '6101010003', 'Supplier', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130'),
(4, '6101010004', 'Accountant', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130'),
(5, '6101010005', 'Administrative', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130'),
(6, '6101010006', 'Transaportation', '73/1\r\nSubswong town\r\nKhanongpra,Pakchong\r\nNakhonrachasima,30130');
