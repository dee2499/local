/*
SQLyog Ultimate v8.61 
MySQL - 5.0.51b-community-nt : Database - realestate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`realestate` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `realestate`;

/*Table structure for table `login_master` */

DROP TABLE IF EXISTS `login_master`;

CREATE TABLE `login_master` (
  `Login_Id` int(2) NOT NULL auto_increment,
  `Email_Id` varchar(30) default NULL,
  `Password` varchar(20) default NULL,
  `sec_que` varchar(30) default NULL,
  `Answer` varchar(20) default NULL,
  `Role` varchar(10) default NULL,
  PRIMARY KEY  (`Login_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login_master` */

insert  into `login_master`(`Login_Id`,`Email_Id`,`Password`,`sec_que`,`Answer`,`Role`) values (3,'k.patel@gmail.com','123','who is my my favriot teacher??','vikram sir','Owner'),(4,'mitisha@gmail.com','tini','who is owner','mitisha','Buyer'),(5,'chelsy@gmail.com','chelsy','who is my frend?','bhavika','Agent'),(6,'brijp@gmail.com','brijp','what is color','red','Agent'),(7,'p.priya@gmail.com','456','what is color','pink','Owner'),(8,'real@yahoo.com','real','what is cat name??','mili','Admin'),(9,'mash@gmail.com','mash','what is your nik name','dolu','Buyer'),(10,'kpatel@gmail.com','1234','gvhb','cbv','Owner');

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `Pro_Id` int(2) NOT NULL auto_increment,
  `Email_Id` varchar(30) default NULL,
  `Pro_type` varchar(30) default NULL,
  `Pro_Area` int(20) default NULL,
  `Status` tinyint(1) default NULL,
  `Bedroom` int(1) default NULL,
  `Baths` int(4) default NULL,
  `Price` int(20) default NULL,
  `Address` varchar(30) default NULL,
  `City` varchar(30) default NULL,
  `State` varchar(20) default NULL,
  `Images` varchar(30) default NULL,
  `Description` varchar(200) NOT NULL,
  `Date` date default NULL,
  `AddBy` varchar(8) default NULL,
  `Features` varchar(30) default NULL,
  PRIMARY KEY  (`Pro_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `property` */

insert  into `property`(`Pro_Id`,`Email_Id`,`Pro_type`,`Pro_Area`,`Status`,`Bedroom`,`Baths`,`Price`,`Address`,`City`,`State`,`Images`,`Description`,`Date`,`AddBy`,`Features`) values (1,'k.patel@gmail.com','Commercial',300,0,0,0,3500000,'Atmiya soc.','Rajkot','Gujarat','s1.jpg','This property is large area, this is Commercial Property famous area property.Here Images are available','2013-09-02','Agent','Parking,Lift,Security,'),(2,'mitisha@gmail.com','Residance',400,0,3,2,5000000,'Megha Mall','surendranagar','Gujarat','4.jpg','This Property for residance, here 3 bedroom and 2 bathroom,all features are there ex. garden,parking and gym etc..','2013-09-05','Owner','Garden,Parking,Gym,'),(3,'chelsy@gmail.com','commercial',550,0,0,0,6000000,'Gota Road','Ahemdabad','Gujarat','s4.jpg','This property is large area, this is Commercial Property famous area property.Here Images are available here many features are there Parking Security etc..','2013-09-04','Agent','Parking,Security,'),(4,'p.priya@gmail.com','Residance',650,0,2,3,7500000,'AsalWord','Mubai','Maharastra','3.jpg','This Property for residance, here 2 bedroom and 3 bathroom,all features are there ex. garden,parking etc..','2011-07-01','Owner','Garden,Parking,'),(5,'brijp@gmail.com','Commercial',700,0,0,0,7700000,'Sec-6-B','Udepur','Rajsthan','s2.jpg','This property is large area, this is Commercial Property famous area property.Here Images are available here many features are there Parking Security and Lift etc..','2012-02-21','Owner','Parking,Lift,Security,'),(6,'mash@gmail.com','Residance',760,1,4,2,8100000,'Hnuman temple','Amritser','Punjab','2.jpg','This Property for residance, here 4 bedroom and 2 bathroom,all features are there ex. garden,parking,Swimming Pool etc..','2010-10-10','Agent','Garden,Parking,Swimming Pool,');

/*Table structure for table `registation_master` */

DROP TABLE IF EXISTS `registation_master`;

CREATE TABLE `registation_master` (
  `R_Id` int(2) NOT NULL auto_increment,
  `Email_Id` varchar(30) default NULL,
  `FirstName` varchar(20) default NULL,
  `LastName` varchar(20) default NULL,
  `Address` varchar(30) default NULL,
  `City` varchar(20) default NULL,
  `State` varchar(20) default NULL,
  `Pincode` int(6) default NULL,
  `Contact_No` decimal(12,0) default NULL,
  `Date` date default NULL,
  PRIMARY KEY  (`R_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `registation_master` */

insert  into `registation_master`(`R_Id`,`Email_Id`,`FirstName`,`LastName`,`Address`,`City`,`State`,`Pincode`,`Contact_No`,`Date`) values (6,'k.patel@gmail.com','kundan','Patel','10,chamunda park','surendranagar','Gujarat',363002,'1234567891','2013-08-01'),(7,'mitisha@gmail.com','Mitisha','Patel','sudama chok,','Amritser','punjab',897654,'2147483647','2013-08-14'),(8,'chelsy@gmail.com','Swati ','suryawansi','shjanand soc,','rajkot','Gujarat',908757,'1234567890','2013-09-12'),(9,'brijp@gmail.com','Brijesh','Patel','sec-2','Mubai','Maharastra',382006,'9228866807','2013-09-20'),(10,'p.priya@gmail.com','priya','patel','Sardar Soc.','Baroda','Gujrat',908765,'2147483647','2013-09-25'),(11,'mash@gmail.com','Mahesh','Makvana','Tirupti colono','Halvad','Gujarat',363001,'9016324589','2013-09-20'),(12,'kpatel@gmail.com','Nishith','Patel','sec-3','bhjbnk','Maharastra',456789,'2147483647','2013-09-26');

/*Table structure for table `view1` */

DROP TABLE IF EXISTS `view1`;

/*!50001 DROP VIEW IF EXISTS `view1` */;
/*!50001 DROP TABLE IF EXISTS `view1` */;

/*!50001 CREATE TABLE  `view1`(
 `Login_Id` int(2) ,
 `Email_Id` varchar(30) ,
 `Role` varchar(10) ,
 `R_Id` int(2) ,
 `FirstName` varchar(20) ,
 `LastName` varchar(20) ,
 `Address` varchar(30) ,
 `City` varchar(20) ,
 `State` varchar(20) ,
 `Pincode` int(6) ,
 `Contact_No` decimal(12,0) 
)*/;

/*View structure for view view1 */

/*!50001 DROP TABLE IF EXISTS `view1` */;
/*!50001 DROP VIEW IF EXISTS `view1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view1` AS select `login_master`.`Login_Id` AS `Login_Id`,`login_master`.`Email_Id` AS `Email_Id`,`login_master`.`Role` AS `Role`,`registation_master`.`R_Id` AS `R_Id`,`registation_master`.`FirstName` AS `FirstName`,`registation_master`.`LastName` AS `LastName`,`registation_master`.`Address` AS `Address`,`registation_master`.`City` AS `City`,`registation_master`.`State` AS `State`,`registation_master`.`Pincode` AS `Pincode`,`registation_master`.`Contact_No` AS `Contact_No` from (`login_master` join `registation_master` on((`login_master`.`Email_Id` = `registation_master`.`Email_Id`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
