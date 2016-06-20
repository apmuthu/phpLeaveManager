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

/* Demo Data 
INSERT INTO `designations`(`Designation`,`Category`) VALUES 
 ('Director','A')
,('Joint Director','A')
,('Assistant Director','A')
,('Deputy Director','A');

INSERT INTO `employees`(`EmployeeID`,`Designation`,`Employee`,`InActive`) VALUES 
 (1,'Director','Shiva S',0)
,(2,'Joint Director','Vishnu L',0)
,(3,'Deputy Director','Lakshmi V',0);

INSERT INTO `balances`(`Year`,`EmployeeID`,`BalCL`,`BalEL`,`BalRH`,`BalML`) VALUES 
 (2016,1,20,200,12,8);

INSERT INTO `leaves`(`LeaveID`,`EmployeeID`,`AppliedDate`,`LeaveFrom`,`LeaveTill`,
	`LeaveDays`,`LeaveType`,`IsVerified`,`IsApproved`,`Reason`) VALUES 
 (1,1,'2016-06-01','2016-06-02','2016-06-07',4.0,'CL',1,1,'Visiting Relatives for quite a while');
*/
