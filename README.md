# phpLeaveManager
PHP/MySQL/Adminer-Editor based online Leave Manager

* This application is written in a generic manner adaptable for use in most offices / institutions
* India specific terminology used for data content
* Only English supported to keep the code simple and easy to underestand
* [Adminer Editor v4.2.5](https://github.com/vrana/adminer/archive/v4.2.5.tar.gz) used for CRUD operations
* Serves as a Tutorial for Adminer-Editor usage
* [Adminer Wiki](https://github.com/vrana/adminer/wiki/Technical-Wiki) serves as a Reference
* Login Authentication notes are in ````docs/LoginNotes.md````

## Installation
* Upload the contents of ````webroot```` to your webroot or application folder
* Create your database and it's tables from ````docs/phpLM.sql```` using your favourite MySQL client like [phpMyAdmin](http://ww.phpmyadmin.net), [SQLyog](http://www.webyog.com) or plain CLI
* Setup the parameters in ````defines.php```` file

## Usage
* Browse to your webroot or application folder
* Login with ````admin```` user and it's initial password ````pwd123````
* Fill in your ````designations```` with it's ````employees````
* Populate the Annual Opening ````balances```` of Leave
* Fill in all ````leaves```` requested by the employees
* No need to fill in Primary Key ID fields in Insert forms
* Records per page made user configurable
* Limit which tables can be viewed
* Verify the Leave Request
* Approve the Leave Request
* Output Leave Summary with balance leave left

## Demo Data
Here is some demo data to start testing the application
````
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
````
