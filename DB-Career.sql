-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 04, 2020 at 10:45 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNTDETAILS`
--

CREATE TABLE `ACCOUNTDETAILS` (
  `ACCOUNT_NUMBER` int(11) NOT NULL,
  `CVV_NUMBER` int(11) NOT NULL,
  `CARD_NAME` varchar(20) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `BANK_NAME` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `APPLIEDJOBS`
--

CREATE TABLE `APPLIEDJOBS` (
  `JOB_ID` int(11) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `APPLIED_DATE` date NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AUTOMATICTRANSACTION`
--

CREATE TABLE `AUTOMATICTRANSACTION` (
  `TRANSACTION_NUMBER` varchar(20) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `METHOD_TYPE` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `CAT_ID` int(11) NOT NULL,
  `CATEGORY_DES` varchar(20) NOT NULL,
  `CREATED_BY` varchar(20) NOT NULL,
  `END_DATE` date NOT NULL,
  `CREATED_DATE` date NOT NULL,
  `MODIFIED_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`CAT_ID`, `CATEGORY_DES`, `CREATED_BY`, `END_DATE`, `CREATED_DATE`, `MODIFIED_DATE`) VALUES
(2222, 'A', 'TCS112', '2020-07-25', '2001-08-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `CREDITCARDDETAILS`
--

CREATE TABLE `CREDITCARDDETAILS` (
  `CARD_NUMBER` int(11) NOT NULL,
  `CVV_NUMBER` int(11) NOT NULL,
  `CARD_NAME` varchar(20) NOT NULL,
  `EXPIRY_DATE` date NOT NULL,
  `BANK_NAME` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `EMPLOYER_ID` varchar(20) NOT NULL,
  `EMPLOYER_NAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `CONTACT_NUMBER` int(11) NOT NULL,
  `EMAIL_ID` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`EMPLOYER_ID`, `EMPLOYER_NAME`, `PASSWORD`, `CONTACT_NUMBER`, `EMAIL_ID`, `CREATE_DATE`, `UPDATE_DATE`) VALUES
('TCS112', 'TCS', '######', 2147483647, 'ABC@TCS.COM', '2010-01-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `JOBS`
--

CREATE TABLE `JOBS` (
  `JOB_ID` int(11) NOT NULL,
  `TITLE` varchar(20) NOT NULL,
  `LOCATION` varchar(20) NOT NULL,
  `ORGANISATION_NAME` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(20) NOT NULL,
  `VACANCY` varchar(20) NOT NULL,
  `EXEPRIENCE` varchar(20) NOT NULL,
  `POSTED_BY` varchar(20) NOT NULL,
  `POSTED_DATE` date NOT NULL,
  `EXPIRY_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `OFFEREDJOBS`
--

CREATE TABLE `OFFEREDJOBS` (
  `JOB_ID` int(11) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `EMPLOYER_ID` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL,
  `OFFERED_PACKAGE` int(11) NOT NULL,
  `JOINING_DATE` date NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PAYMENTMETHOD`
--

CREATE TABLE `PAYMENTMETHOD` (
  `USER_ID` varchar(20) NOT NULL,
  `PAYMENT_METHOD` varchar(20) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `UPDATE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TRANSACTIONTABLE`
--

CREATE TABLE `TRANSACTIONTABLE` (
  `METHOD_TYPE` varchar(20) NOT NULL,
  `TRANSACTION_NUMBER` varchar(20) NOT NULL,
  `TRANSACTION_ID` int(11) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `USERPAYMENT`
--

CREATE TABLE `USERPAYMENT` (
  `USER_ID` varchar(20) NOT NULL,
  `WITHDRAW_TYPE` varchar(20) NOT NULL,
  `TRANSACTION_ID` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  `BALANCE` int(11) NOT NULL,
  `CREATE_DATE` date NOT NULL,
  `MODIFIED_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_password` varchar(80) NOT NULL,
  `EMAIL_ID` varchar(20) DEFAULT NULL,
  `CONTACT_NUMBER` int(11) DEFAULT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `MODIFIED_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_status`, `user_name`, `user_password`, `EMAIL_ID`, `CONTACT_NUMBER`, `CREATE_DATE`, `MODIFIED_DATE`) VALUES
('admin', 1, 'Joe Admin', 'admin', NULL, NULL, NULL, NULL),
('basic_seeker', 4, 'Liz Basic', 'basic', NULL, NULL, NULL, NULL),
('gold_recruiter', 5, 'Gold Recruiter', 'gold', NULL, NULL, NULL, NULL),
('gold_seeker', 2, 'Sophie Gold', 'gold', NULL, NULL, NULL, NULL),
('prime_recruiter', 6, 'Prime Recruiter', 'prime', NULL, NULL, NULL, NULL),
('prime_seeker', 3, 'George Prime', 'prime', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE `user_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`category_id`, `category_name`) VALUES
(1, 'Admin'),
(2, 'Gold Job Seeker'),
(3, 'Prime Job Seeker'),
(4, 'Basic Job Seeker'),
(5, 'Gold Recruiter'),
(6, 'Prime Recruiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACCOUNTDETAILS`
--
ALTER TABLE `ACCOUNTDETAILS`
  ADD PRIMARY KEY (`ACCOUNT_NUMBER`);

--
-- Indexes for table `APPLIEDJOBS`
--
ALTER TABLE `APPLIEDJOBS`
  ADD PRIMARY KEY (`JOB_ID`,`USER_ID`),
  ADD KEY `IDX_ajobs_users` (`USER_ID`);

--
-- Indexes for table `AUTOMATICTRANSACTION`
--
ALTER TABLE `AUTOMATICTRANSACTION`
  ADD PRIMARY KEY (`TRANSACTION_NUMBER`),
  ADD KEY `FK_AUTO_TRANSACTION` (`USER_ID`);

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indexes for table `CREDITCARDDETAILS`
--
ALTER TABLE `CREDITCARDDETAILS`
  ADD PRIMARY KEY (`CARD_NUMBER`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`EMPLOYER_ID`);

--
-- Indexes for table `JOBS`
--
ALTER TABLE `JOBS`
  ADD PRIMARY KEY (`JOB_ID`);

--
-- Indexes for table `OFFEREDJOBS`
--
ALTER TABLE `OFFEREDJOBS`
  ADD PRIMARY KEY (`JOB_ID`,`USER_ID`,`EMPLOYER_ID`),
  ADD KEY `FK_jobs_idx` (`JOB_ID`),
  ADD KEY `FK_employer_idx` (`EMPLOYER_ID`),
  ADD KEY `FK_users_idx` (`USER_ID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `FK_orders_users` (`user_id`);

--
-- Indexes for table `TRANSACTIONTABLE`
--
ALTER TABLE `TRANSACTIONTABLE`
  ADD KEY `FK_TRANSACTION` (`TRANSACTION_ID`);

--
-- Indexes for table `USERPAYMENT`
--
ALTER TABLE `USERPAYMENT`
  ADD PRIMARY KEY (`TRANSACTION_ID`),
  ADD KEY `FK_USERS` (`USER_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_user_status` (`user_status`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `APPLIEDJOBS`
--
ALTER TABLE `APPLIEDJOBS`
  ADD CONSTRAINT `FK_ajobs_jobs` FOREIGN KEY (`JOB_ID`) REFERENCES `jobs` (`JOB_ID`),
  ADD CONSTRAINT `FK_ajobs_users` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `AUTOMATICTRANSACTION`
--
ALTER TABLE `AUTOMATICTRANSACTION`
  ADD CONSTRAINT `FK_AUTO_TRANSACTION` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `OFFEREDJOBS`
--
ALTER TABLE `OFFEREDJOBS`
  ADD CONSTRAINT `FK_jobs` FOREIGN KEY (`JOB_ID`) REFERENCES `jobs` (`JOB_ID`),
  ADD CONSTRAINT `FK_ojobs_employer` FOREIGN KEY (`EMPLOYER_ID`) REFERENCES `employer` (`EMPLOYER_ID`),
  ADD CONSTRAINT `FK_ojobs_users` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `TRANSACTIONTABLE`
--
ALTER TABLE `TRANSACTIONTABLE`
  ADD CONSTRAINT `FK_TRANSACTION` FOREIGN KEY (`TRANSACTION_ID`) REFERENCES `userpayment` (`TRANSACTION_ID`);

--
-- Constraints for table `USERPAYMENT`
--
ALTER TABLE `USERPAYMENT`
  ADD CONSTRAINT `FK_USERS` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user_status` FOREIGN KEY (`user_status`) REFERENCES `user_categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
