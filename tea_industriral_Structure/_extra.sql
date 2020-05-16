
--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`work_station`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Compan_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_id`),
  ADD KEY `manage` (`Department_manager_id`),
  ADD KEY `Department_id` (`Department_id`,`Department_manager_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`),
  ADD KEY `work_on` (`work_on`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Item_ID`),
  ADD KEY `tea_leaf` (`Tea_ID`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`Car_ID`,`Compan_ID`,`Product_ID`,`Send_date`),
  ADD KEY `Compan_ID` (`Compan_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `tea_leaf`
--
ALTER TABLE `tea_leaf`
  ADD PRIMARY KEY (`Tea_ID`);

--
-- Indexes for table `transform`
--
ALTER TABLE `transform`
  ADD PRIMARY KEY (`Item_ID`) USING BTREE,
  ADD KEY `cook_from` (`station`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`Department_id`,`Department_manager_id`,`Car_ID`),
  ADD KEY `Car_ID` (`Car_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citizen`
--
ALTER TABLE `citizen`
  ADD CONSTRAINT `citizen_id` FOREIGN KEY (`Employee_id`) REFERENCES `employee` (`Employee_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `work_on` FOREIGN KEY (`work_on`) REFERENCES `department` (`Department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `product` FOREIGN KEY (`Item_ID`) REFERENCES `transform` (`Item_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tea_leaf` FOREIGN KEY (`Tea_ID`) REFERENCES `tea_leaf` (`Tea_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `send`
--
ALTER TABLE `send`
  ADD CONSTRAINT `send_ibfk_1` FOREIGN KEY (`Car_ID`) REFERENCES `transportation` (`Car_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `send_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `transform` (`Item_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `send_ibfk_3` FOREIGN KEY (`Compan_ID`) REFERENCES `customer` (`Compan_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transform`
--
ALTER TABLE `transform`
  ADD CONSTRAINT `cook_from` FOREIGN KEY (`station`) REFERENCES `cook` (`work_station`);

--
-- Constraints for table `transportation`
--
ALTER TABLE `transportation`
  ADD CONSTRAINT `transportation_ibfk_1` FOREIGN KEY (`Department_id`,`Department_manager_id`) REFERENCES `department` (`Department_id`, `Department_manager_id`) ON DELETE CASCADE ON UPDATE CASCADE;
