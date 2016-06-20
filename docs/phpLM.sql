/*
MySQL - 5.1.41 : Database - phplm - PHP Leave Manager
*********************************************************************
*/

CREATE DATABASE IF NOT EXISTS `phplm` CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `phplm`;

DROP TABLE IF EXISTS `login`;
DROP TABLE IF EXISTS `balances`;
DROP TABLE IF EXISTS `leaves`;
DROP TABLE IF EXISTS `employees`;
DROP TABLE IF EXISTS `designations`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password_sha1` char(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM;

CREATE TABLE `designations` (
  `Designation` varchar(60) NOT NULL COMMENT 'Designation',
  `Category` char(1) DEFAULT NULL COMMENT 'Group',
  PRIMARY KEY (`Designation`)
) ENGINE=InnoDB COMMENT='Designations';

CREATE TABLE `employees` (
  `EmployeeID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Employee ID',
  `Designation` varchar(60) NOT NULL COMMENT 'Designation',
  `Employee` varchar(60) NOT NULL COMMENT 'Employee Name',
  `InActive` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'InActive',
  PRIMARY KEY (`EmployeeID`),
  KEY `Designation` (`Designation`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`Designation`) REFERENCES `designations` (`Designation`)
) ENGINE=InnoDB COMMENT='Employees';

CREATE TABLE `balances` (
  `Year` int(11) NOT NULL COMMENT 'Year',
  `EmployeeID` int(11) NOT NULL COMMENT 'Employee ID',
  `BalCL` int(11) NOT NULL DEFAULT '0' COMMENT 'Balance CL',
  `BalEL` int(11) NOT NULL DEFAULT '0' COMMENT 'Balance EL',
  `BalRH` int(11) NOT NULL DEFAULT '0' COMMENT 'Balance RH',
  `BalML` int(11) NOT NULL DEFAULT '0' COMMENT 'Balance ML',
  PRIMARY KEY (`Year`,`EmployeeID`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `balances_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB COMMENT='Balance Leave';

CREATE TABLE `leaves` (
  `LeaveID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Leave ID',
  `EmployeeID` int(11) NOT NULL COMMENT 'Employee ID',
  `AppliedDate` date DEFAULT NULL COMMENT 'Applied On Date',
  `LeaveFrom` date NOT NULL COMMENT 'Leave From Date',
  `LeaveTill` date DEFAULT NULL COMMENT 'Leave Till Date',
  `LeaveDays` float(6,1) DEFAULT NULL COMMENT 'Leave Days',
  `LeaveType` enum('AB','CL','EL','RH','ML','CCL','PL') NOT NULL DEFAULT 'AB' COMMENT 'Leave Type',
  `IsVerified` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Verified',
  `IsApproved` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Approved',
  `Reason` varchar(255) DEFAULT NULL COMMENT 'Leave Reason',
  PRIMARY KEY (`LeaveID`),
  UNIQUE KEY `EmployeeDateIDX` (`EmployeeID`,`LeaveFrom`),
  CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB COMMENT='Leave List';

/* SHA1('pwd123') = 'c02c8e4776c5a2135fa88f31652b8d79b81a437a' */

INSERT INTO `login`(`id`,`login`,`password_sha1`) VALUES 
 (1,'admin',SHA1('pwd123'));

