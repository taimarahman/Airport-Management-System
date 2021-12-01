-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 12:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport2`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `airlineid` varchar(255) NOT NULL,
  `al_name` varchar(255) DEFAULT NULL,
  `three_digit_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`airlineid`, `al_name`, `three_digit_code`) VALUES
('9W', 'Jet Airways', '589'),
('AA', 'American Airlines', '001'),
('AI', 'Air India Limited', '098'),
('BA', 'British Airways', '125'),
('EK', 'Emirates', '176'),
('EY', 'Ethiad Airways', '607'),
('LH', 'Lufthansa', '220'),
('QR', 'Qatar Airways', '157');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `ap_name` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`ap_name`, `state`, `country`, `cname`) VALUES
('Chandigarh International Airport', 'Chandigarh', 'India', 'Chandigarh'),
('Chhatrapati Shivaji International Airport', 'Maharashtra', 'India', 'Mumbai'),
('Dallas/Fort Worth International Airport', 'Texas', 'United States', 'Fort Worth'),
('Frankfurt Airport', 'Hesse', 'Germany', 'Frankfurt'),
('George Bush Intercontinental Airport', 'Texas', 'United States', 'Houston'),
('Indira GandhiInternational Airport', 'Delhi', 'India', 'Delhi'),
('John F. Kennedy International Airport', 'New York', 'United States', 'New York City'),
('Louisville International Airport', 'Kentucky', 'United States', 'Louisville'),
('San Francisco International Airport', 'California', 'United States', 'San Francisco'),
('Tampa International Airport', 'Florida', 'United States', 'Tampa');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cname` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cname`, `state`, `country`) VALUES
('Chandigarh', 'Chandigarh', 'India'),
('Delhi', 'Delhi', 'India'),
('Fort Worth', 'Texas', 'United States'),
('Frankfurt', 'Hesse', 'Germany'),
('Houston', 'Texas', 'United States'),
('Louisville', 'Kentucky', 'United States'),
('Mumbai', 'Maharashtra', 'India'),
('New York City', 'New York', 'United States'),
('San Francisco', 'California', 'United States'),
('Tampa', 'Florida', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `employee1`
--

CREATE TABLE `employee1` (
  `ssn` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `m` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` decimal(3,0) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `jobtype` varchar(255) DEFAULT NULL,
  `ap_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee1`
--

INSERT INTO `employee1` (`ssn`, `fname`, `m`, `lname`, `address`, `phone`, `age`, `sex`, `jobtype`, `ap_name`) VALUES
(123456789, 'LINDA', 'M', 'GOODMAN', '731 Fondren, Houston, TX', '4356789345', '35', 'F', 'ADMINISTRATIVE SUPPORT', 'Louisville International Airport'),
(123456790, 'Pranta', '', 'Biswas', 'Azimpur Colony', '+8801879903188', '18', 'M', 'ENGINEER', 'San Francisco International Airport'),
(125478909, 'PRATIK', 'T', 'GOMES', '334 VITRUVIAN PARK, ALBANY, NY', '4444678903', '56', 'M', 'TRAFFIC MONITOR', 'John F. Kennedy International Airport'),
(324567897, 'ADIT', 'P', 'DESAI', '987 SOMNATH, CHANDIGARH, INDIA', '2244658909', '36', 'M', 'TRAFFIC MONITOR', 'Chandigarh International Airport'),
(333445555, 'JOHNY', 'N', 'PAUL', '638 Voss, Houston, TX', '9834561995', '40', 'M', 'ADMINISTRATIVE SUPPORT', 'Louisville International Airport'),
(453453453, 'RAJ', 'B', 'SHARMA', '345 FLOYDS, MUMBAI,INDIA', '4326789031', '35', 'M', 'AIRPORT AUTHORITY', 'Chhatrapati Shivaji International Airport'),
(666884444, 'SHELDON', 'A', 'COOPER', '345 CHERRY PARK, HESSE,GERMANY', '1254678903', '55', 'M', 'TRAFFIC MONITOR', 'Frankfurt Airport'),
(888665555, 'SHUBHAM', 'R', 'GUPTA', '567 CHANDANI CHOWK, DELHI, INDIA', '8566778890', '39', 'M', 'ADMINISTRATIVE SUPPORT', 'Indira GandhiInternational Airport'),
(987654321, 'SHERLOCK', 'A', 'HOLMES', '123 TOP HILL, SAN Francisco,CA', '8089654321', '47', 'M', 'TRAFFIC MONITOR', 'San Francisco International Airport'),
(987987987, 'NIKITA', 'C', 'PAUL', '110 SYNERGY PARK, DALLAS,TX', '5678904325', '33', 'F', 'ENGINEER', 'Dallas/Fort Worth International Airport'),
(999887777, 'JAMES', 'P', 'BOND', '3321 Castle, Spring, TX', '9834666995', '50', 'M', 'ENGINEER', 'Louisville International Airport');

-- --------------------------------------------------------

--
-- Table structure for table `employee2`
--

CREATE TABLE `employee2` (
  `jobtype` varchar(255) NOT NULL,
  `salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee2`
--

INSERT INTO `employee2` (`jobtype`, `salary`) VALUES
('ADMINISTRATIVE SUPPORT', 50000),
('AIRPORT AUTHORITY', 90000),
('ENGINEER', 70000),
('TRAFFIC MONITOR', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_code` varchar(255) NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `arrival` varchar(255) DEFAULT NULL,
  `departure` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `layover_time` varchar(255) DEFAULT NULL,
  `no_of_stops` varchar(255) DEFAULT NULL,
  `airlineid` varchar(255) DEFAULT NULL,
  `flighttype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_code`, `source`, `destination`, `arrival`, `departure`, `status`, `duration`, `layover_time`, `no_of_stops`, `airlineid`, `flighttype`) VALUES
('9W2334', 'IAH', 'DEL', '23:00', '13:45', 'On-time', '23hrs', '0', '0', '9W', 'Direct'),
('AA4367', 'SFO', 'FRA', '18:10', '18:55', 'On-time', '21hrs', '0', '0', 'AA', 'Non-stop'),
('AI2014', 'BOM', 'DFW', '02:10', '03:15', 'On-time', '24hr', '3', '1', 'AI', 'Connecting'),
('BA1689', 'FRA', 'DEL', '10:20', '10:55', 'On-time', '14hrs', '0', '0', 'BA', 'Non-stop'),
('BA3056', 'BOM', 'DFW', '02:15', '02:55', 'On-time', '29hrs', '3', '1', 'BA', 'Connecting'),
('EK3456', 'BOM', 'SFO', '18:50', '19:40', 'On-time', '30hrs', '0', '0', 'EK', 'Non-stop'),
('EY1234', 'JFK', 'TPA', '19:20', '20:05', 'On-time', '16hrs', '5', '2', 'EY', 'Connecting'),
('LH9876', 'JFK', 'BOM', '05:50', '06:35', 'On-time', '18hrs', '0', '0', 'LH', 'Non-stop'),
('QR1902', 'IXC', 'IAH', '22:00', '22:50', 'Delayed', '28hrs', '5', '1', 'QR', 'Non-stop'),
('QR2305', 'BOM', 'DFW', '13:00', '13:55', 'Delayed', '21hr', '0', '0', 'QR', 'Non-stop');

-- --------------------------------------------------------

--
-- Table structure for table `passenger1`
--

CREATE TABLE `passenger1` (
  `pid` int(11) NOT NULL,
  `passportno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger1`
--

INSERT INTO `passenger1` (`pid`, `passportno`) VALUES
(1, 'A1234568'),
(2, 'B9876541'),
(3, 'C2345698'),
(4, 'D1002004'),
(5, 'X9324666'),
(6, 'B8765430'),
(7, 'J9801235'),
(8, 'A1122334'),
(9, 'Q1243567'),
(10, 'S1243269'),
(11, 'E3277889'),
(12, 'K3212322'),
(13, 'P3452390'),
(14, 'W7543336'),
(15, 'R8990566');

-- --------------------------------------------------------

--
-- Table structure for table `passenger2`
--

CREATE TABLE `passenger2` (
  `passportno` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `m` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger2`
--

INSERT INTO `passenger2` (`passportno`, `fname`, `m`, `lname`, `address`, `phone`, `age`, `sex`) VALUES
('A1122334', 'MANAN', 'S', 'LAKHANI', '5589 CHTHAM REFLECTIONS, APT 349 HOUSTON, TX', '9004335126', 25, 'F'),
('A1234568', 'ALEN', 'M', 'SMITH', '2230 NORTHSIDE, APT 11, ALBANY, NY', '8080367290', 30, 'M'),
('B8765430', 'LAKSHMI', 'P', 'SHARMA', '1110 FIR HILLS, APT 903, AKRON, OH', '7666190505', 30, 'F'),
('B9876541', 'ANKITA', 'V', 'AHIR', '3456 VIKAS APTS, APT 102,DOMBIVLI, INDIA', '8080367280', 26, 'F'),
('C2345698', 'KHYATI', 'A', 'MISHRA', '7820 MCCALLUM COURTS, APT 234, AKRON, OH', '8082267280', 30, 'F'),
('D1002004', 'ANKITA', 'S', 'PATIL', '7720 MCCALLUM BLVD, APT 1082, DALLAS, TX', '9080367266', 23, 'F'),
('E3277889', 'John', 'A', 'GATES', '1234 BAKER APTS, APT 59, HESSE, GERMANY', '9724569986', 10, 'M'),
('J9801235', 'AKHILESH', 'D', 'JOSHI', '345 CHATHAM COURTS, APT 678, MUMBAI, INDIA', '9080369290', 29, 'M'),
('K3212322', 'SARA', 'B', 'GOMES', '6785 SPLITSVILLA, APT 34, MIAMI, FL', '9024569226', 15, 'F'),
('P3452390', 'ALIA', 'V', 'BHAT', '548 MARKET PLACE, SAN Francisco, CA', '9734567800', 10, 'F'),
('Q1243567', 'KARAN', 'M', 'MOTANI', '4444 FRANKFORD VILLA, APT 77, GUILDERLAND, NY', '9727626643', 22, 'M'),
('R8990566', 'RIA', 'T', 'GUPTA', '3355 PALENCIA, APT 2065, MUMBAI, INDIA', '4724512343', 10, 'M'),
('S1243269', 'ROM', 'A', 'SOLANKI', '7720 MCCALLUM BLVD, APT 2087, DALLAS,TX', '9004568903', 60, 'M'),
('W7543336', 'JOHN', 'P', 'SMITH', '6666 ROCK HILL, APT 2902, TAMPA, FL', '4624569986', 55, 'M'),
('X9324666', 'TEJASHREE', 'B', 'PANDIT', '9082 ESTAES OF RICHARDSON, RICHARDSON, TX', '9004360125', 28, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `passenger3`
--

CREATE TABLE `passenger3` (
  `pid` int(11) NOT NULL,
  `flight_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger3`
--

INSERT INTO `passenger3` (`pid`, `flight_code`) VALUES
(3, '9W2334'),
(7, '9W2334'),
(8, 'AA4367'),
(1, 'AI2014'),
(13, 'AI2014'),
(11, 'BA1689'),
(14, 'BA1689'),
(6, 'BA3056'),
(10, 'EK3456'),
(5, 'EY1234'),
(2, 'LH9876'),
(4, 'QR1902'),
(9, 'QR1902'),
(12, 'QR1902'),
(15, 'QR2305');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `class` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`class`, `price`) VALUES
('BUSINESS', 100000),
('ECONOMY', 65000),
('FIRST-CLASS', 195000);

-- --------------------------------------------------------

--
-- Table structure for table `ticket1`
--

CREATE TABLE `ticket1` (
  `TICKET_NUMBER` varchar(255) NOT NULL,
  `SOURCE` varchar(255) DEFAULT NULL,
  `DESTINATION` varchar(255) DEFAULT NULL,
  `DATE_OF_BOOKING` date DEFAULT NULL,
  `DATE_OF_TRAVEL` date DEFAULT NULL,
  `CLASS` varchar(255) DEFAULT NULL,
  `DATE_OF_CANCELLATION` date DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `passportno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket1`
--

INSERT INTO `ticket1` (`TICKET_NUMBER`, `SOURCE`, `DESTINATION`, `DATE_OF_BOOKING`, `DATE_OF_TRAVEL`, `CLASS`, `DATE_OF_CANCELLATION`, `PID`, `passportno`) VALUES
('11234111122', 'BOM', 'DFW', '2016-05-11', '2016-12-15', 'ECONOMY', '0000-00-00', 1, 'A1234568'),
('112341111221', 'BOM', 'DFW', '2016-05-11', '2016-12-15', 'ECONOMY', '0000-00-00', 1, 'A1234568'),
('1251334499699', 'IXC', 'IAH', '2016-11-20', '2017-01-12', 'ECONOMY', '0000-00-00', 12, 'K3212322'),
('1255701876107', 'FRA', 'DEL', '2016-10-16', '2016-12-31', 'ECONOMY', '0000-00-00', 11, 'E3277889'),
('1258776199490', 'BOM', 'DFW', '2016-05-13', '2016-12-15', 'ECONOMY', '2016-05-25', 13, 'P3452390'),
('1570864987655', 'IXC', 'IAH', '2016-11-12', '2016-12-30', 'ECONOMY', '0000-00-00', 9, 'Q1243567'),
('1571357215116', 'SFO', 'FRA', '2016-08-15', '2016-12-18', 'ECONOMY', '0000-00-00', 8, 'A1122334'),
('1577654664266', 'JFK', 'TPA', '2016-06-13', '2016-12-10', 'ECONOMY', '0000-00-00', 5, 'X9324666'),
('1579283997799', 'BOM', 'SFO', '2016-01-22', '2016-12-15', 'ECONOMY', '0000-00-00', 10, 'S1243269'),
('1768901333273', 'IAH', 'DEL', '2016-08-21', '2016-12-25', 'BUSINESS', '0000-00-00', 3, 'C2345698'),
('2206543545545', 'BOM', 'DFW', '2016-11-11', '2017-02-12', 'ECONOMY', '0000-00-00', 6, 'B8765430'),
('5890987441464', 'IXC', 'IAH', '2016-08-10', '2017-01-12', 'FIRST-CLASS', '0000-00-00', 4, 'D1002004'),
('5891155114477', 'FRA', 'DEL', '2016-06-16', '2016-12-23', 'ECONOMY', '0000-00-00', 14, 'W7543336'),
('5893069766787', 'BOM', 'DFW', '2016-08-11', '2016-12-22', 'ECONOMY', '0000-00-00', 15, 'R8990566'),
('7064321779737', 'IAH', 'DEL', '2016-11-15', '2016-12-25', 'FIRST-CLASS', '0000-00-00', 7, 'J9801235'),
('984567222299', 'JFK', 'BOM', '2016-06-11', '2016-12-20', 'ECONOMY', '2016-12-10', 2, 'B9876541');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('pranta', 'pranta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`airlineid`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`ap_name`),
  ADD KEY `cname` (`cname`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `employee1`
--
ALTER TABLE `employee1`
  ADD PRIMARY KEY (`ssn`),
  ADD KEY `ap_name` (`ap_name`),
  ADD KEY `jobtype` (`jobtype`);

--
-- Indexes for table `employee2`
--
ALTER TABLE `employee2`
  ADD PRIMARY KEY (`jobtype`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_code`),
  ADD KEY `airlineid` (`airlineid`);

--
-- Indexes for table `passenger1`
--
ALTER TABLE `passenger1`
  ADD PRIMARY KEY (`pid`,`passportno`);

--
-- Indexes for table `passenger2`
--
ALTER TABLE `passenger2`
  ADD PRIMARY KEY (`passportno`);

--
-- Indexes for table `passenger3`
--
ALTER TABLE `passenger3`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `flight_code` (`flight_code`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `ticket1`
--
ALTER TABLE `ticket1`
  ADD PRIMARY KEY (`TICKET_NUMBER`),
  ADD KEY `PID` (`PID`,`passportno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airport`
--
ALTER TABLE `airport`
  ADD CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`cname`) REFERENCES `city` (`cname`);

--
-- Constraints for table `employee1`
--
ALTER TABLE `employee1`
  ADD CONSTRAINT `employee1_ibfk_1` FOREIGN KEY (`ap_name`) REFERENCES `airport` (`ap_name`),
  ADD CONSTRAINT `employee1_ibfk_2` FOREIGN KEY (`jobtype`) REFERENCES `employee2` (`jobtype`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`airlineid`) REFERENCES `airline` (`airlineid`);

--
-- Constraints for table `passenger3`
--
ALTER TABLE `passenger3`
  ADD CONSTRAINT `passenger3_ibfk_1` FOREIGN KEY (`flight_code`) REFERENCES `flight` (`flight_code`);

--
-- Constraints for table `ticket1`
--
ALTER TABLE `ticket1`
  ADD CONSTRAINT `ticket1_ibfk_1` FOREIGN KEY (`PID`,`passportno`) REFERENCES `passenger1` (`pid`, `passportno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
