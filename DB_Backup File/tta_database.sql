-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 09:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tta_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `Id` int(11) NOT NULL,
  `AboutUsDes` text NOT NULL,
  `client1` varchar(55) NOT NULL,
  `client2` varchar(55) NOT NULL,
  `client3` varchar(55) NOT NULL,
  `client4` varchar(55) NOT NULL,
  `supply1` varchar(55) NOT NULL,
  `sd1` text NOT NULL,
  `supply2` varchar(55) NOT NULL,
  `sd2` text NOT NULL,
  `supply3` varchar(55) NOT NULL,
  `sd3` text NOT NULL,
  `f1` varchar(55) NOT NULL,
  `fd1` text NOT NULL,
  `f2` varchar(55) NOT NULL,
  `fd2` text NOT NULL,
  `f3` varchar(55) NOT NULL,
  `fd3` text NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `t3` text NOT NULL,
  `t4` text NOT NULL,
  `q1` varchar(255) NOT NULL,
  `a1` text NOT NULL,
  `q2` varchar(255) NOT NULL,
  `a2` text NOT NULL,
  `q3` varchar(255) NOT NULL,
  `a3` text NOT NULL,
  `q4` varchar(255) NOT NULL,
  `a4` text NOT NULL,
  `q5` varchar(255) NOT NULL,
  `a5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costcenter`
--

CREATE TABLE `costcenter` (
  `id` int(11) NOT NULL,
  `acc` varchar(55) NOT NULL,
  `accp` varchar(55) NOT NULL,
  `ps` varchar(55) NOT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `expensetype` enum('Cost','Rent','Tax') NOT NULL,
  `cli` enum('Angelo','Robert','Joy','Maureen','Maxine','Paul','Angelica') NOT NULL,
  `td` date NOT NULL,
  `payment1` enum('CASH','CHEQUE','E-WALLET','BC/CRYPTO','GOLD BARS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index1`
--

CREATE TABLE `index1` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `suf` enum('Jr.','Sr.','II','III','IV') NOT NULL,
  `gen` enum('Female','Male','Prefer no to say') NOT NULL,
  `dob` date NOT NULL,
  `cs` enum('Single','Married','Widow') NOT NULL,
  `rg` enum('Roman Catholic','Iglesia ni Cristo','Seventh-day Adventism','Christian','Others') NOT NULL,
  `n` enum('Filipino','Chinese','Korean','American','Others') NOT NULL,
  `sn` text NOT NULL,
  `pa_address` text NOT NULL,
  `ca_address` text NOT NULL,
  `pa_contact` text NOT NULL,
  `pa_email` text NOT NULL,
  `pa_facebook` text NOT NULL,
  `pa_instagram` text NOT NULL,
  `fn` text NOT NULL,
  `mn` text NOT NULL,
  `ps` text NOT NULL,
  `py` date NOT NULL,
  `pa` text NOT NULL,
  `ss` text NOT NULL,
  `sy` date NOT NULL,
  `sa` text NOT NULL,
  `ts` text NOT NULL,
  `ty` date NOT NULL,
  `ta` text NOT NULL,
  `noe` text NOT NULL,
  `doe` date NOT NULL,
  `cn` text NOT NULL,
  `fp` text NOT NULL,
  `dor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index2`
--

CREATE TABLE `index2` (
  `id` int(11) NOT NULL,
  `sss` text NOT NULL,
  `pb` text NOT NULL,
  `ph` text NOT NULL,
  `umid` text NOT NULL,
  `nd` text NOT NULL,
  `dl` text NOT NULL,
  `pp` text NOT NULL,
  `pt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index3`
--

CREATE TABLE `index3` (
  `id` int(11) NOT NULL,
  `pos` text NOT NULL,
  `d` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `sa` int(11) NOT NULL,
  `doe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `life`
--

CREATE TABLE `life` (
  `Id` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `MiddleName` text NOT NULL,
  `LastName` text NOT NULL,
  `Suffix` enum('Jr.','Sr.','II','III') NOT NULL,
  `CellphoneNumber` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `Website` text NOT NULL,
  `EntryType` enum('Individual','Company') NOT NULL,
  `CompanyName` int(11) NOT NULL,
  `CompanyType` enum('Manufacturing','Services') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `Id` int(11) NOT NULL,
  `Product` enum('New Arrival','Pants','Hoodies','Tshirts','shorts') NOT NULL,
  `qty` enum('pcs','set','bulk/bundle') NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` enum('cash','cheque','e-wallet','bitcoin','gold bar','currency') NOT NULL,
  `DeliveryDate` date NOT NULL,
  `Remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payable`
--

CREATE TABLE `payable` (
  `id` int(11) NOT NULL,
  `income_type` enum('Salary','Wages') NOT NULL,
  `amt` int(11) NOT NULL,
  `sales` date NOT NULL,
  `client` enum('Angelo','Robert','Joy','Maureen','Maxine','Paul','Angelica') NOT NULL,
  `trans` date NOT NULL,
  `payment` enum('CASH','CHEQUE','E-WALLET','CRYPTO','GOLD BARS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_EmpType` text NOT NULL,
  `salary_EmpName` text NOT NULL,
  `salary_EmpID` text NOT NULL,
  `salary_IncomeWorkingHrs` int(11) NOT NULL,
  `salary_IncomeOvertimeHrs` int(11) NOT NULL,
  `salary_IncomeWorkingHolidays` int(11) NOT NULL,
  `salary_13thMonthPay` text NOT NULL,
  `salary_BonusPay` text NOT NULL,
  `payroll_RangeFrom` date NOT NULL,
  `payroll_RangeTo` date NOT NULL,
  `deduction_Pagibig` int(11) NOT NULL,
  `deduction_SSS` int(11) NOT NULL,
  `deduction_Carloan` int(11) NOT NULL,
  `deduction_EmergencyLoan` int(11) NOT NULL,
  `deduction_LoanPayment` int(11) NOT NULL,
  `deduction_MiscDeduc` int(11) NOT NULL,
  `deduction_Remarks` text NOT NULL,
  `salary_created` datetime NOT NULL DEFAULT current_timestamp(),
  `sickleave` text NOT NULL,
  `vacationleave` text NOT NULL,
  `totalIncome` int(11) NOT NULL,
  `totalDeduction` int(11) NOT NULL,
  `netIncome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tta_user_form`
--

CREATE TABLE `tta_user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraboutus`
--

CREATE TABLE `useraboutus` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `com` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `costcenter`
--
ALTER TABLE `costcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index1`
--
ALTER TABLE `index1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index2`
--
ALTER TABLE `index2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index3`
--
ALTER TABLE `index3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `life`
--
ALTER TABLE `life`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payable`
--
ALTER TABLE `payable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `tta_user_form`
--
ALTER TABLE `tta_user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraboutus`
--
ALTER TABLE `useraboutus`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `costcenter`
--
ALTER TABLE `costcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `index1`
--
ALTER TABLE `index1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index2`
--
ALTER TABLE `index2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index3`
--
ALTER TABLE `index3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `life`
--
ALTER TABLE `life`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payable`
--
ALTER TABLE `payable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tta_user_form`
--
ALTER TABLE `tta_user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useraboutus`
--
ALTER TABLE `useraboutus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
