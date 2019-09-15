/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.0.45-community-nt : Database - project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project`;

/*Table structure for table `admin_feedback` */

DROP TABLE IF EXISTS `admin_feedback`;

CREATE TABLE `admin_feedback` (
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(300) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin_feedback` */

insert  into `admin_feedback`(`email`,`name`,`message`) values ('wasif11@gmail.com','Wasif Miraz','Please saw our video');

/*Table structure for table `bus_company_info` */

DROP TABLE IF EXISTS `bus_company_info`;

CREATE TABLE `bus_company_info` (
  `bus_company` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `bus_id` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`bus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus_company_info` */

insert  into `bus_company_info`(`bus_company`,`bus_id`) values ('Hanif Enterprise','COM-3550'),('Keya Enterprise','COM-3551'),('Shamoli Paribahan','COM-3552'),('Star Line','COM-3553'),('Nabil Paribahan','COM-3554'),('Shahjadpur Travels','COM-3555'),('Mamun Express','COM-3556'),('Ena Transport(pvt)Ltd','COM-3557'),('Shoag Paribahan','COM-3558'),('TR Travels','COM-3559'),('Desh Travels','COM-3560'),('Saudia Air Con','COM-3561'),('Akota Transport','COM-3562'),('Agomony Express','COM-3563');

/*Table structure for table `bus_info` */

DROP TABLE IF EXISTS `bus_info`;

CREATE TABLE `bus_info` (
  `bus_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `cetagory` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `fr` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `tooo` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `distance` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `seat` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `time` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus_info` */

insert  into `bus_info`(`bus_name`,`cetagory`,`fr`,`tooo`,`distance`,`price`,`seat`,`time`,`code`) values ('Hanif Enterprise','AC','Dhaka','Chittagong','265km','850tk','45','5-6hours','345435'),('Hanif Enterprise','NON AC','Dhaka','Chittagong','265km','480tk','45','5-6hours','354343'),('Keya Enterprise','AC','Dhaka','Chittagong','265km','800tk','45','5-6hours','3543453'),('Keya Enterprise','NON AC','Dhaka','Chittagong','265km','500tk','45','5-6hours','3453'),('Shamoli Paribahan','AC','Dhaka','Chittagong','265km','800tk','49','5-6hours','353434'),('Shamoli Paribahan','NON AC','Dhaka','Chittagong','265km','800tk','49','5-6hours','35343'),('Star Line','AC','Dhaka','Chittagong','265km','560tk','45','5-6hours','3453535'),('Star Line','NON AC','Dhaka','Chittagong','265km','450tk','45','5-6hours','34344'),('Nabil Paribahan','AC','Dhaka','Chittagong','265km','600tk','45','6-7hours','343434'),('Nabil Paribahan','NON AC','Dhaka','Chittagong','265km','450tk','45','6-7hours','3543253'),('Ena Transport(pvt)Ltd','AC','Dhaka','Chittagong','265km','850tk','43','6-7hours','35343'),('Ena Transport(pvt)Ltd','NON AC','Dhaka','Chittagong','265km','480tk','43','6-7hours','2434342'),('Shoag Paribahan','AC','Dhaka','Chittagong','265km','700tk','42','6-7hours','34342'),('Shoag Paribahan','NON AC','Dhaka','Chittagong','265km','600tk','42','6-7hours','43342'),('Saudia Air Con','AC','Dhaka','Chittagong','265km','1250tk','45','5-6hurs','534434'),('Saudia Air Con','NON AC','Dhaka','Chittagong','265km','600tk','45','5-6hurs','343434'),('TR Travels','AC','Dhaka','Chittagong','265km','1250tk','43','5-6hurs','34353453'),('TR Travels','NON AC','Dhaka','Chittagong','265km','450tk','43','5-6hurs','343434'),('Hanif Enterprise','AC','Dhaka','Barishal','277km','1000tk','45','8-9hours','343435'),('Hanif Enterprise','NON AC','Dhaka','Barishal','277km','600tk','45','8-9hours','54545'),('Keya Enterprise','AC','Dhaka','Barishal','277km','850tk','41','8-9hours','64546'),('Keya Enterprise','NON AC','Dhaka','Barishal','277km','700tk','41','8-9hours','6565757'),('Shamoli Paribahan','AC','Dhaka','Barishal','277km','800tk','41','8-9hours','75755'),('Shamoli Paribahan','NON AC','Dhaka','Barishal','277km','500tk','41','8-9hours','565645'),('TR Travels','AC','Dhaka','Barishal','277km','600tk','41','8-9hours','23243'),('TR Travels','NON AC','Dhaka','Barishal','277km','500tk','41','8-9hours','544646'),('Hanif Enterprise','AC','Feni','Dinajpur','570km','1450tk','45','12-13hours','565656'),('Hanif Enterprise','NON AC','Feni','Dinajpur','570km','700tk','45','12-13hours','5656'),('Keya Enterprise','AC','Feni','Dinajpur','570km','1250tk','45','12-13hours','5656'),('Keya Enterprise','NON AC','Feni','Dinajpur','570km','700tk','45','12-13hours','566565'),('Shamoli Paribahan','AC','Feni','Dinajpur','570km','1250tk','41','12-13hours','565656'),('Shamoli Paribahan','NON AC','Feni','Dinajpur','570km','650tk','41','12-13hours','45453'),('Nabil Paribahan','AC','Feni','Dinajpur','570km','1050tk','41','12-13hours','45466'),('Nabil Paribahan','NON AC','Feni','Dinajpur','570km','600tk','41','12-13hours','656575'),('Shahjadpur Travels','AC','Feni','Dinajpur','570km','800tk','45','12-13hours','565664'),('Shahjadpur Travels','NON AC','Feni','Dinajpur','570km','500tk','45','12-13hours','464633'),('Mamun Express','AC','Feni','Dinajpur','570km','980tk','45','12-13hours','54646'),('Mamun Express','NON AC','Feni','Dinajpur','570km','620tk','45','12-13hours','644644'),('Saudia Air Con','AC','Feni','Dinajpur','570km','850tk','45','12-13hours','454534'),('Saudia Air Con','NON AC','Feni','Dinajpur','570km','500tk','45','12-13hours','34343'),('Hanif Enterprise','AC','Feni','Rangpur','460km','1100tk','45','11-12hours','56454'),('Hanif Enterprise','NON AC','Feni','Rangpur','460km','700tk','45','11-12hours','6445'),('Keya Enterprise','AC','Feni','Rangpur','460km','950tk','45','11-12hours','454646'),('Keya Enterprise','NON AC','Feni','Rangpur','460km','700tk','45','11-12hours','464646'),('Shamoli Paribahan','AC','Feni','Rangpur','460km','900tk','41','11-12hours','464564'),('Shamoli Paribahan','NON AC','Feni','Rangpur','460km','700tk','41','11-12hours','45446'),('Nabil Paribahan','AC','Feni','Rangpur','460km','850tk','41','12-13hours','46464'),('Nabil Paribahan','NON AC','Feni','Rangpur','460km','600tk','41','12-13hours','464646'),('Mamun Express','AC','Feni','Rangpur','460km','900tk','45','12-13hours','646464'),('Mamun Express','NON AC','Feni','Rangpur','460km','600tk','45','12-13hours','464535'),('Shahjadpur Travels','AC','Feni','Rangpur','460km','700tk','45','12-13hours',NULL),('Shahjadpur Travels','NON AC','Feni','Rangpur','460km','400tk','45','12-13hours',NULL),('Shahjadpur Travels','AC','Feni','Rangpur','460km','850tk','45','12-13hours',NULL),('Shahjadpur Travels','NON AC','Feni','Rangpur','460km','500tk','45','12-13hours',NULL),('Saudia Air Con','AC','Feni','Rangpur','460km','950tk','45','11-12hours',NULL),('Saudia Air Con',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'353535');

/*Table structure for table `bus_pay` */

DROP TABLE IF EXISTS `bus_pay`;

CREATE TABLE `bus_pay` (
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `num` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `bus_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `total_seat` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `total_tk` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `fr` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `too` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus_pay` */

insert  into `bus_pay`(`name`,`email`,`num`,`bus_name`,`code`,`total_seat`,`total_tk`,`fr`,`too`) values ('Sijan sk','sijanskbd@gmail.com','33345754','Keya Enterprise','3453','2','1600','Dhaka','Chittagong'),('Sijan sk','sijanskbd@gmail.com','3334575','Keya Enterprise','3543453','1','1600','Dhaka','Chittagong');

/*Table structure for table `bus_seat` */

DROP TABLE IF EXISTS `bus_seat`;

CREATE TABLE `bus_seat` (
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `number` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `bus_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `fr` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `tooo` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `bordering` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `droping` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `tk` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `time` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `total_tk` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `total_seat` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus_seat` */

insert  into `bus_seat`(`email`,`number`,`bus_name`,`code`,`fr`,`tooo`,`bordering`,`droping`,`tk`,`time`,`total_tk`,`total_seat`,`id`) values ('sijanskbd@gmail.com','01992937371','Keya Enterprise','3543453','Dhaka','Chittagong','Chittagong','Dhaka','800tk','5-6hours','1600','2',NULL),('sijanskbd@gmail.com','01992937371','Keya Enterprise','3543453','Dhaka','Chittagong','Chittagong','Dhaka','800tk','5-6hours','1600','2',NULL),('sijanskbd@gmail.com','01992937371','Shamoli Paribahan','35343','Dhaka','Chittagong','Chittagong','Dhaka','800tk','5-6hours','2400','3',NULL),('sijanskbd@gmail.com','01992937371','Star Line','3453535','Dhaka','Chittagong','Chittagong','Dhaka','560tk','5-6hours','1120','2',NULL),('riponshekhbd@gmail.com','01969670039','Keya Enterprise','3543453','Dhaka','Chittagong','Chittagong','Dhaka','800tk','5-6hours','1600','2',NULL),('wasif11@gmail.com','01969675423','Keya Enterprise','3453','Dhaka','Chittagong','Chittagong','Dhaka','500tk','5-6hours','2000','4',NULL),('sijanskbd@gmail.com','01992937371','Keya Enterprise','3453','Dhaka','Chittagong','Chittagong','Dhaka','500tk','5-6hours','500','1',NULL),('Omor Ali','omor','Nabil Paribahan','3543253','Dhaka','Chittagong','Feni','Dhaka','450tk','6-7hours','900','2',NULL),('omor@gmail.com','019929543748','Nabil Paribahan','3543253','Dhaka','Chittagong','Chittagong','Dhaka','450tk','6-7hours','900','2',NULL),('sijanskbd@gmail.com','01992937371','Hanif Enterprise','345435','Dhaka','Chittagong','Dhaka','Chittagong','850tk','5-6hours','1700','2',NULL),('sijanskbd@gmail.com','01992937371','Hanif Enterprise','345435','Dhaka','Chittagong','Dhaka','Chittagong','850tk','5-6hours','1700','2',NULL),('sijanskbd@gmail.com','01992937371','Keya Enterprise','3453','Dhaka','Chittagong','Dhaka','Chittagong','500tk','5-6hours','1000','2',NULL),('sijanskbd@gmail.com','01992937371','Keya Enterprise','3543453','Dhaka','Chittagong','Dhaka','Chittagong','800tk','5-6hours','800','1',NULL);

/*Table structure for table `bus_ticket_history` */

DROP TABLE IF EXISTS `bus_ticket_history`;

CREATE TABLE `bus_ticket_history` (
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `from` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `to` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `ac_non` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `seat` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bus_ticket_history` */

/*Table structure for table `cetagory_info` */

DROP TABLE IF EXISTS `cetagory_info`;

CREATE TABLE `cetagory_info` (
  `item_name` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `cat_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `cat_name` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cetagory_info` */

insert  into `cetagory_info`(`item_name`,`cat_id`,`cat_name`) values ('laptop','cat-01','HP'),('laptop','cat-02','lenovo'),('laptop','cat-03','asus'),('laptop','cat-04','tosiba'),('laptop','cat-05','apple'),('laptop','cat-06','samsung'),('laptop','cat-07','acer'),('laptop','cat-08','dell'),('laptop','cat-09','sony'),('mobile','cat-10','samsung'),('mobile','cat-11','sony'),('mobile','cat-12','iphone'),('mobile','cat-13','htc'),('mobile','cat-14','symphony'),('mobile','cat-15','walton'),('mobile','cat-16','lava'),('mobile','cat-17','nokia'),('mouse','cat-18','a4te'),('mouse','cat-19','adata'),('mouse','cat-20','asus'),('mouse','cat-21','dell'),('mouse','cat-22','contex'),('watch','cat-23','adidas'),('watch','cat-24','nexus'),('watch','cat-25','oakley'),('watch','cat-26','omega'),('watch','cat-27','citizen'),('watch','cat-28','casio'),('camera','cat-29','canon'),('camera','cat-30','samsung'),('camera','cat-31','fujiflim'),('camera','cat-32','nikon'),('camera','cat-33','sony'),('shoes','cat-34','bata'),('shoes','cat-35','apex'),('shoes','cat-36','jennys'),('shoes','cat-37','adidas'),('shoes','cat-38','nick'),('shoes','cat-39','puma'),('pendrive','cat-40','adata'),('pendrive','cat-41','apacer'),('pendrive','cat-42','twinmos'),('pendrive','cat-43','transcend'),('headphone','cat-44','HP'),('headphone','cat-45','sony'),('headphone','cat-46','a4tech'),('headphone','cat-47','cosonic'),('keyboard','cat-48','dilux'),('keyboard','cat-49','logitech'),('pendrive','cat-50','adata'),('pendrive','cat-51','transcend'),('pendrive','cat-52','kingstone');

/*Table structure for table `city_info` */

DROP TABLE IF EXISTS `city_info`;

CREATE TABLE `city_info` (
  `city_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `city_id` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `city_info` */

insert  into `city_info`(`city_name`,`city_id`) values ('Dhaka','CT-9545'),('Chittagong','CT-9546'),('Barishal','CT-9547'),('Khulna','CT-9548'),('Rangpur','CT-9549'),('Rajshahi','CT-9550'),('Sylhet','CT-9551'),('Dinajpur','CT-9552'),('Mymensingh','CT-9553'),('Comilla','CT-9554'),('Gazipur','CT-9555'),('Narayangong','CT-9556'),('Feni','CT-9569');

/*Table structure for table `comment_info` */

DROP TABLE IF EXISTS `comment_info`;

CREATE TABLE `comment_info` (
  `session_id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `comment` varchar(1000) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comment_info` */

insert  into `comment_info`(`session_id`,`email`,`name`,`comment`) values ('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','Sijan sk','Thank you very much. I am just impressed on you service. You people are doing awesome :)'),('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','Sijan sk','Thank you so much. Brilliant service!'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','Wasif Miraz','hey man, thanks a lot for bringing it over for me! Item is working perfectly!'),('337e198d054fd5a690dfb39a509ad14f','omor@gmail.com','Omor Ali','This website is very helpfull. It is nice and easy payment system.'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','Sijan sk','This website realy great.');

/*Table structure for table `confirm_seat` */

DROP TABLE IF EXISTS `confirm_seat`;

CREATE TABLE `confirm_seat` (
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `seat_no` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `date_info` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `confirm_seat` */

insert  into `confirm_seat`(`code`,`seat_no`,`date_info`) values ('3453','1','2016-10-23'),('3453','3','2016-10-23'),('3453','1','2016-10-23'),('3453','3','2016-10-23'),('3543453','1','2016-10-24'),('3543453','1','2016-10-24'),('3543453','1','2016-10-24');

/*Table structure for table `create_admin` */

DROP TABLE IF EXISTS `create_admin`;

CREATE TABLE `create_admin` (
  `user_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `password` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `create_admin` */

insert  into `create_admin`(`user_name`,`email`,`password`,`phone`) values ('wasif miraz','wasifmiraz@gmail.com','wasif','01854012683');

/*Table structure for table `create_user` */

DROP TABLE IF EXISTS `create_user`;

CREATE TABLE `create_user` (
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `password` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `pre_post` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`email`,`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `create_user` */

insert  into `create_user`(`name`,`email`,`password`,`phone`,`pre_post`) values ('Hasnt','hasnat22@gmail.com','hasnat','19929373744','postpaid'),('Omor Ali','omor@gmail.com','omor','019929543748','prepaid'),('Ripon sk','riponshekhbd@gmail.com','riponsk','01969670039','prepaid'),('Sijan sk','sijanskbd@gmail.com','sijansk','01992937371','prepaid');

/*Table structure for table `data_card_history` */

DROP TABLE IF EXISTS `data_card_history`;

CREATE TABLE `data_card_history` (
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `operator` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `mb` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_card_history` */

/*Table structure for table `data_card_info` */

DROP TABLE IF EXISTS `data_card_info`;

CREATE TABLE `data_card_info` (
  `name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `mb` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_day` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_card_info` */

insert  into `data_card_info`(`name`,`id`,`mb`,`price`,`valid_day`) values ('Grameenphone','01','4MB','2TK','2DAYS'),('Grameenphone','02','8MB','4TK','4DAYS'),('Grameenphone','03','10MB','5TK','5DAYS'),('Grameenphone','04','15MB','7TK','7DAYS'),('Grameenphone','05','21MB','8TK','4DAYS'),('Grameenphone','06','30MB','10TK','5DAYS'),('Grameenphone','07','45MB','12TK','8DAYS'),('Grameenphone','08','55MB','15TK','10DAYS'),('Grameenphone','09','80MB','20TK','10DAYS'),('Grameenphone','10','100MB','25TK','20DAYS'),('Grameenphone','11','120MB','23TK','15TK'),('Grameenphone','12','200MB','45TK','5DAYS'),('Grameenphone','13','500MB','100TK','15DAYS'),('Grameenphone','14','1GB','89TK','30DAYS'),('Grameenphone','15','3GB','150TK','2MONTH'),('Grameenphone','16','2GB','200TK','2MONTH'),('Banglalink','17','4MB','2TK','2DAYS'),('Banglalink','18','7MB','4TK','3DAYS'),('Banglalink','19','15MB','5TK','5DAYS'),('Banglalink','20','21MB','7TK','3DAYS'),('Banglalink','21','30MB','7TK','4DAYS'),('Banglalink','22','45MB','15TK','7DAYS'),('Banglalink','23','55MB','10TK','3DAYS'),('Banglalink','24','80MB','24TK','5DAYS'),('Banglalink','25','100MB','20TK','7DAYS'),('Banglalink','26','150MB','30TK','7DAYS'),('Banglalink','27','500MB','45TK','6DAYS'),('Banglalink','28','600MB','50TK','7DAYS'),('Banglalink','29','1GB','8TK','7DAYS'),('Banglalink','30','2GB','150TK','30DAYS');

/*Table structure for table `datacard_info` */

DROP TABLE IF EXISTS `datacard_info`;

CREATE TABLE `datacard_info` (
  `Operator_Name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `ID` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `MB` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `Price` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `Date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `datacard_info` */

insert  into `datacard_info`(`Operator_Name`,`ID`,`MB`,`Price`,`Date`) values (NULL,'',NULL,NULL,NULL);

/*Table structure for table `electricity_bill_history` */

DROP TABLE IF EXISTS `electricity_bill_history`;

CREATE TABLE `electricity_bill_history` (
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `customer_id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `cd_no` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `bill_no` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `zip_code` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `company_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `electricity_bill_history` */

/*Table structure for table `electricity_bill_info` */

DROP TABLE IF EXISTS `electricity_bill_info`;

CREATE TABLE `electricity_bill_info` (
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `cd_no` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bill_no` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `zip_code` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `company_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`,`cd_no`,`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `electricity_bill_info` */

insert  into `electricity_bill_info`(`name`,`id`,`cd_no`,`bill_no`,`zip_code`,`date`,`address`,`price`,`company_name`) values ('wasif miraz','11201617','1617','20301','1101','2016-11-10','Feni','650','Dhaka Electric Supply Company Limited'),('Jh abdulla','11201618','1618','20302','1102','2016-12-10','Patuakhali','650','Dhaka Electric Supply Company Limited'),('Ripon sk','11201618','1619','20303','1100','2016-10-08','Khula','650','Dhaka Electric Supply Company Limited'),('MD Arif','11201619','16120','20304','1105','2016-07-31','comilla','400','Dhaka Electric Supply Company Limited');

/*Table structure for table `electricity_company` */

DROP TABLE IF EXISTS `electricity_company`;

CREATE TABLE `electricity_company` (
  `company_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `company_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `electricity_company` */

insert  into `electricity_company`(`company_name`,`company_id`) values ('Dhaka Electric Supply Company Limited','1120161718');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `subject` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `messaged` varchar(1000) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

/*Table structure for table `feedback_info` */

DROP TABLE IF EXISTS `feedback_info`;

CREATE TABLE `feedback_info` (
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(300) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback_info` */

insert  into `feedback_info`(`email`,`name`,`message`) values ('sijanskbd@gmail.com','Sijan sk','HI. I want boked bus ticket but i cant boked bus ticket'),('riponshekhbd@gmail.com','Ripon sk','I want pay my gas bill'),('wasif11@gmail.com','Wasif Miraz','I want to pay my water bill\r\n'),('hasnat22@gmail.com','Hasnt','I want to rechrge my phone'),('sijanskbd@gmail.com','Sijan sk','I want pay my gas bill'),('riponshekhbd@gmail.com','Ripon sk','HI. I want boked bus ticket but i cant boked bus ticket'),('hasnat22@gmail.com','Hasnt','I want to pay my water bill'),('sijanskbd@gmail.com','Sijan sk','I want pay my gas bill'),('hasnat22@gmail.com','Hasnt','I want to pay my water bill');

/*Table structure for table `gas_bill_history` */

DROP TABLE IF EXISTS `gas_bill_history`;

CREATE TABLE `gas_bill_history` (
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `customer_id` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `cd_no` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `bill_no` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `zip_code` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `company_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gas_bill_history` */

/*Table structure for table `gas_company` */

DROP TABLE IF EXISTS `gas_company`;

CREATE TABLE `gas_company` (
  `company_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `company_id` varchar(15) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gas_company` */

insert  into `gas_company`(`company_name`,`company_id`) values ('Bangladesh Petrolium Explorati','2010'),('Jalalabad Gas Transmission and','2011'),('Sylhet Gas Fields Company Limi','2013'),('Titas Gas Transmission and Dis','2014'),('Bakhrabad Gas Systems Limited ','2015');

/*Table structure for table `gas_info` */

DROP TABLE IF EXISTS `gas_info`;

CREATE TABLE `gas_info` (
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `cd_no` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bill_no` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `zip_code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `gas_company` varchar(70) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`,`cd_no`,`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gas_info` */

insert  into `gas_info`(`name`,`id`,`cd_no`,`bill_no`,`zip_code`,`date`,`address`,`price`,`gas_company`) values ('Wasif Miraj','32454529','25','3434630','5348','09-10-2016','Dhaka','650tk','Bangladesh Petrolium Explorati'),('Hasim Akram','32564530','23','3434637','7347','09-10-2016','Noakhali','650tk','Jalalabad Gas Transmission and'),('Saddam Hossain','32564531','23','3434636','8347','09-10-2016','Rangpur','650tk','Bangladesh Petrolium Explorati'),('Sakib Khan','32564532','25','3434632','3347','09-10-2016','Barishal','650tk','Sylhet Gas Fields Company Limi'),('Sajib Mia','32564533','25','3434631','4347','09-10-2016','Bogra','650tk','Jalalabad Gas Transmission and'),('Omar Ali','32564534','23','3434638','6347','09-10-2016','Dinajpur','650tk','Sylhet Gas Fields Company Limi'),('Ariful islam','32564535','23','3434639','5347','09-10-2016','Feni','650tk','Titas Gas Transmission and Dis'),('Sujon Mia','32564536','24','3434633','2347','09-10-2016','Rajshahi','650tk','Bakhrabad Gas Systems Limited'),('Najmul Huda','32564537','24','3434635','9347','09-10-2016','Vola','650tk','Titas Gas Transmission and Dis'),('Ripoon Sheikh','32564538','24','3434634','1347','09-10-2016','Khulna','650tk','Bakhrabad Gas Systems Limited');

/*Table structure for table `home_delivary` */

DROP TABLE IF EXISTS `home_delivary`;

CREATE TABLE `home_delivary` (
  `id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `first_name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `last_name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `city` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `post_code` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `home_delivary` */

insert  into `home_delivary`(`id`,`email`,`first_name`,`last_name`,`address`,`city`,`post_code`,`phone`,`code`) values ('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','yasin','sk','chalna','khulna','4666','5655444','PDT-10');

/*Table structure for table `hotel_info` */

DROP TABLE IF EXISTS `hotel_info`;

CREATE TABLE `hotel_info` (
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `radio` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `room` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `adults` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `children` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `check_in` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `check_out` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hotel_info` */

insert  into `hotel_info`(`name`,`email`,`phone`,`radio`,`room`,`adults`,`children`,`check_in`,`check_out`) values ('Sijan sk','sijanskbd@gmail.com','76867865','leisure','1','2','4','2016-10-30','4'),('ripon sk','riponshekhbd@gmail.com','1837362','leisure','1','2','0','2016-10-31','5'),('hasnat','hasnat22@gmail.com','5655444','','2','4','02','2016-10-31','2');

/*Table structure for table `insurance_bill_info` */

DROP TABLE IF EXISTS `insurance_bill_info`;

CREATE TABLE `insurance_bill_info` (
  `com_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `sino` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `policy_no` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `pre_amount` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `dob` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `mobile_no` varchar(15) character set utf8 collate utf8_unicode_ci NOT NULL,
  `area` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `ser_tax` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `total_amo` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`sino`,`policy_no`,`mobile_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `insurance_bill_info` */

insert  into `insurance_bill_info`(`com_name`,`name`,`sino`,`policy_no`,`pre_amount`,`dob`,`mobile_no`,`area`,`ser_tax`,`total_amo`) values ('Rupali Life Insurance Company Ltd.','Wasif Miraz','1122','11223344','5000','2345678','0182023083','FENI','0.00TK','5000TK'),('Rupali Life Insurance Company Ltd.','Hasim Akram','1123','11223345','8000','2345679','0182302155','CHITTAGONG','0.00TK','8000TK'),('Jamuna Life Insurance Ltd.','JH Abdullah','1124','22334457','9000','2345671','0172015485','DHAKA','0.00TK','9000TK'),('Jamuna Life Insurance Ltd.','Ripon Seikh','1125','22334495','4000','2345672','0125483326','BARISHAL','0.00TK','4000TK');

/*Table structure for table `insurance_company` */

DROP TABLE IF EXISTS `insurance_company`;

CREATE TABLE `insurance_company` (
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `insurance_company` */

insert  into `insurance_company`(`name`,`id`) values ('Rupali Life Insurance Company Ltd.','1111'),('Jamuna Life Insurance Ltd.','1112'),('Padma Islami Life Insurance Company Ltd.','2012'),('Farest Islami Life Insurance Co. Ltd.','2013'),('Delta Life Insurance Company Ltd.','2014');

/*Table structure for table `mastercard` */

DROP TABLE IF EXISTS `mastercard`;

CREATE TABLE `mastercard` (
  `card_number` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `cvv` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(20) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mastercard` */

insert  into `mastercard`(`card_number`,`cvv`,`amount`) values ('1706908621706908','321','-400'),('098765432112345','321','6000');

/*Table structure for table `night_packege` */

DROP TABLE IF EXISTS `night_packege`;

CREATE TABLE `night_packege` (
  `operator` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `operator_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `talktime` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_from` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_to` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`operator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `night_packege` */

insert  into `night_packege`(`operator`,`operator_id`,`talktime`,`amount`,`valid_date`,`time_from`,`time_to`) values ('TELETALK','1020','5min','2','1','10.10.2016','20.10.2016'),('TELETALK','1021','6min','3','5','10.10.2016','15.11.2016'),('TELETALK','1022','90min','60','30','10.10.2016','12.12.2016'),('TELETALK','1024','10min','5','1','10.10.2016','17.10.2016'),('TELETALK','1025','45min','15','20','10.10.2016','23.10.2016'),('ROBI','112016','56min','10','10','10.10.2016','12.09.2016'),('GRAMEEN','1212','45min','10','10','10.10.2016','12.09.2016'),('GRAMEEN','1213','46min','13','12','10.10.2016','22.10.2016'),('GRAMEEN','1214','57min','13','3','10.10.2016','13.11.2016'),('GRAMEEN','1215','9min','3','3','10.10.2016','15.11.2016'),('GRAMEEN','1217','27min','8','8','10.10.2016','17.10.2016'),('BANGLALINK','1220','6min','1','2','10.10.2016','12.10.2016'),('BANGLALINK','1221','7min','2','2','10.10.2016','12.10.2016'),('BANGLALINK','1224','36min','12','12','10.10.2016','12.12.2016'),('BANGLALINK','1225','8min','4','4','10.10.2016','14.102016'),('ROBI','132016','60min','45','13','10.10.2016','15.10.2016'),('ROBI','1602016','300min','156','12','10.10.2016','12.12.2016'),('ROBI','182016','45min','19','19','10.10.2016','17.10.2016');

/*Table structure for table `operator_info` */

DROP TABLE IF EXISTS `operator_info`;

CREATE TABLE `operator_info` (
  `operator_name` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `operator_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`operator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `operator_info` */

insert  into `operator_info`(`operator_name`,`operator_id`) values ('ROBI','102016'),('Grameenphone','112016'),('Banglalink','122016'),('TELETALK','132016');

/*Table structure for table `product_info` */

DROP TABLE IF EXISTS `product_info`;

CREATE TABLE `product_info` (
  `item_name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `cat_name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `division` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `district` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_id` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `product_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_price` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `product_stoke` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `product_details` varchar(2000) character set utf8 collate utf8_unicode_ci default NULL,
  `value` varchar(10) character set utf8 collate utf8_unicode_ci default '0',
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product_info` */

insert  into `product_info`(`item_name`,`cat_name`,`division`,`district`,`product_id`,`product_name`,`product_price`,`product_stoke`,`product_details`,`value`) values ('laptop','apple','Dhaka','Dhaka','PDT-01','apple macbook ft1','123000','40','Since HP Pavilion usually runs in Windows operating system and Microsoft Windows now included Windows 10, Windows 8.1, Windows 8, Windows 7, Windows Vista ...','8'),('laptop','HP','Dhaka','Dhaka','PDT-02','HP Probook G1','55000','44','Since HP Pavilion usually runs in Windows operating system and Microsoft Windows now included Windows 10, Windows 8.1, Windows 8, Windows 7, Windows Vista ...','12'),('laptop','lenovo','Dhaka','Dhaka','PDT-03','lenovo G5060','56000','30','spending nine months researching what users need and want in a laptop. The results are a new refined design that include a new trackpad with click functionality and an ultrathin display bezel.','7'),('laptop','asus','Dhaka','Dhaka','PDT-04','Asus Zenbook Prime UX32VD .','46000','50','The Asus X401 is thicker than ultrabooks, at nearly 1.1 inches, but a lot cheaper with a suggested retail price of $549 and a probable street price closer to $400. The notebook','11'),('laptop','tosiba','Dhaka','Dhaka','PDT-05','Toshiba Qosmio X500','60000','50','Rich multimedia experience with high performance Toshiba laptop. Qosmio X500 Series laptops feature the new Intel Core i7 processor1, delivering four cores ...','6'),('laptop','acer','Dhaka','Dhaka','PDT-06','acer zx20','47000','32','The Taiwan-based laptop manufacturer, Asus, has added models with fourth generation processors into its lineup. However, it\'s local competitor, Acer, ..','5'),('laptop','dell','Dhaka','Dhaka','PDT-07','Dell XPS 14','54000','20','Nvidia\'s 3DTV Play software which allows users to tether their laptop to a 3D HDTV and view games, movies, and photos in stereoscopic 3D (provided you own a pair of 3D glasses).','0'),('laptop','sony','Dhaka','Dhaka','PDT-08','sony vio Z','86000','70','Sony\'s experimentation with slim and lightweight laptops culminated in the X series. At just 655 grams with a special lighter battery, Sony claimed it was ...','10'),('mobile','samsung','Dhaka','Dhaka','PDT-09','samsung s7','64000','60','Samsung\'s Galaxy S7 is expected to arrive with a slightly lower price tag than the S6 GETTY. Samsung\'s Galaxy S7 ...','9'),('mobile','samsung','Dhaka','Dhaka','PDT-10','samsung A9','48000','30',' A9 smartphone is what came into existence as the smartphone got leaked during the AnTuTu Benchmarking. This is the successor of the Samsung Galaxy A8 ...','15'),('mobile','sony','Dhaka','Dhaka','PDT-11','Sony Z5','78000','43','Ultimately, the Z5 represents yet another deceptively important baby step forward for Sony. The physical changes bring \"Omnibalance\" into 2015 with some ...','17'),('mobile','sony','Dhaka','Dhaka','PDT-12','sony z4','64000','67','how long it would take for Sony to officially unwrap their flagship for 2015, but the company did so this morning as they announced the Sony Xperia Z4','13'),('mobile','iphone','Dhaka','Dhaka','PDT-13','iphone 7','80000','60','A mockup of what the iPhone 7 may look like. It is said to have a design similar to the iPhone 6s, with a slightly thinner body and no antenna bands across ','6'),('mobile','iphone','Dhaka','Dhaka','PDT-14','iphone 6s','65000','49','Peki say&#305;s&#305;z avantajla Türkiye’deki kullan&#305;c&#305;lar&#305; kar&#351;&#305;layacak 4.5G teknolojisine uyumlu bir ak&#305;ll&#305; telefona sahip misiniz? E&#287;er yan&#305;t&#305;n&#305;z hay&#305;rsa, sizler için her bütçeye uygun 10 ak&#305;ll&#305; telefon modelini bir araya getirdim','20'),('mobile','nokia','Dhaka','Dhaka','PDT-15','MICROSOFT LUMIA 1530','70000','56','Microsoft hould take a look on this design. What is your opinion about this device? Don\'t you think that it will look cool? For me the Lumia 1530','14'),('mobile','nokia','Dhaka','Dhaka','PDT-16','Nokia C1','55000','54','Specifications of the Nokia C1 were tipped alongside, including a 5-inch FHD display, an 8-megapixel rear camera, and a 5-megapixel front-facing shooter.','22'),('camera','canon','Dhaka','Dhaka','PDT-17','Canon EOS D60','65000','45','This winter the Canon EOS 6D finally emerged from behind the curtain of rumor and conjecture. The new Canon 6D is another camera -- like the Nikon D600','9'),('camera','fujiflim','Dhaka','Dhaka','PDT-18','Fujifilm X-S1','54000','43','I think that as the FZ200 does not experience the focus problems of the Fuji that it would be my preferred camera if I were choosing a new camera today.','13'),('camera','nikon','Dhaka','Dhaka','PDT-19','Nikon D3100','67000','23','Amazon.com : Nikon COOLPIX P510 16.1 MP CMOS Digital Camera with 42x Zoom NIKKOR ED Glass Lens and GPS Record Location (Black) (OLD MODEL) : Point And Shoot','5'),('camera','sony','Dhaka','Dhaka','PDT-20','Sony rx4','40000','30','30, 2008 – Sony is bringing live-view shooting to its digital SLR camera line with today\'s introduction of a 14.2-megapixel a (alpha) DSLR-A350 camera and .','4'),('watch','adidas','Dhaka','Dhaka','PDT-21','adidas es5','1400','80','adidas Unisex ADP6089 Duramo XL Digital Black Watch with Polyurethane Band','9'),('watch','nexus','Dhaka','Dhaka','PDT-22','Nexus D50','3500','70','After recent rumours suggested Google was in the process of developing a Nexus Smart Watch, a report from the Wall Street Journal has suggested that the ','9'),('watch','oakley','Dhaka','Dhaka','PDT-23','OAKLEY WATCH 10-197 ','2300','49','On unexpected things ~ i\'ve been having a lot of conversations with mid-20 something guys about high priced watches, particularly those who didn\'t grow up','4'),('watch','casio','Dhaka','Dhaka','PDT-24','Casio DW-5000C','3700','65','Here\'s one area where Casio has Apple and most Android Wear watches beat — built-in GPS. The PRT-1GP came out in 1999, and was the first watch to come with','11'),('shoes','bata','Dhaka','Dhaka','PDT-25','Bata ACT149','4500','56','BATA Power Men\'s Sports Shoes + Rs.16 cashback Rs. 793 @ Shopclues','11'),('shoes','apex','Dhaka','Dhaka','PDT-26','Aetrex Apex Shoes X521W','2400','41','Aetrex Apex Shoes X521W Boss Runner - Women\'s Comfort Therapeutic Diabetic Shoe - Athletic Running - Medium (B) - Extra Wide (3E) - Extra Depth for','8'),('shoes','nick','Dhaka','Dhaka','PDT-27','Nike Flyknit Air Max','3300','43','2015 fashion Nike Shoes More than half off! only $26.9,Repin It and Get it immediately! not long time for cheap Repin and Get it immediatly!','17'),('shoes','adidas','Dhaka','Dhaka','PDT-28','Adidas g40','5300','87','My Adidas!\" was the rap heard round the world when Run DMC memorialized the athletic shoe in their 1999 hit song. And they weren\'t just talking about their','14'),('headphone','HP','Dhaka','Dhaka','PDT-29','HP-S560','700','110','JVC HP-S560 and HP-S360 headphones are both equipped with a newly developed Dual Protection Structure on the drivers to suppress unwanted resonances.','12'),('headphone','sony','Dhaka','Dhaka','PDT-30','Sony MDRZX100','1500','130','To fully immerse yourself in music, it\'s important your headphones feel, sound and look great. This is the ethos behind the style of the Sony MDR XB800','5'),('headphone','cosonic','Dhaka','Dhaka','PDT-31','Cosonic CT-606','1300','150','Cosonic Black Stereo Super Bass Noise Insulation Big Comfortable Headset Earphone Headphone With Microphone For Computer','8'),('headphone','a4tech','Dhaka','Dhaka','PDT-32','A4TECH HS-200','2400','97','Brand: A4Tech. Model: HS-105. Frequency range (headset/mic.): 20 - 20000 Hz Sensitivity (headset/mic.): 97 dB. Lenght of cord: 2 m','5'),('mouse','a4tech','Dhaka','Dhaka','PDT-33','A4Tech OP-620D','350','200','A4Tech OP-620D USB Optical Mouse | El Tawil International Trade - Sponsoring Your Trends','12'),('mouse','HP','Dhaka','Dhaka','PDT-34','HP Z200','450','170','The X5000 isn\'t a multi-touch mouse. Instead, it\'s got a touch-sensitive strip built into the mouse, right where a scroll wheel would be on an older mouse','9'),('mouse','apple','Dhaka','Dhaka','PDT-35','Apple A1015','750','130','The first Magic Mouse had a battery door on the bottom that housed two AA batteries. This was admittedly an inelegant solution for the company that','6'),('mouse','dell','Dhaka','Dhaka','PDT-36','Dell MS111','460','230','Wholesale - ZELOTES key gaming giant 7 Gaming Mouse 7 color light breathing fire key dell wired USB mouse Gaming mice','6'),('keyboard','a4tech','Dhaka','Dhaka','PDT-37','A4 Tech X7 G300','750','120','A4Tech Natural A Slim Keyboard. It\'s cheap, comfortable and it works great for gaming as well.','16'),('keyboard','HP','Dhaka','Dhaka','PDT-38','HP TouchSmart 310','650','210','Accessories - Keyboards - HP Slim Keyboard QD949AA#ABU - Asus Laptop - UK Best Deal Sale Laptops Buy Notebook Computer Discount UK - Buy On-Line Laptops and','22'),('keyboard','dilux','Dhaka','Dhaka','PDT-39','Delux T15','780','35','NEW Delux T20 Professional Mechanical Gaming Keyboard Wired USB Multimedia Keyboard Mixing Shaft(Relatively Affordable','6'),('keyboard','logitech','Dhaka','Dhaka','PDT-40','Logitech K120','550','230','Reliable wireless—wherever you use your keyboard— thanks to the Logitech Unifying receiver that pairs with up to six Unifying-compatible mice and keyboards','3'),('pendrive','adata','Dhaka','Dhaka','PDT-41','ADATA UV128','1500','138','Wholesale - For ADATA C008 32GB USB 2.0 Flash Memory Pen Drive Stick Drives Sticks Pendrives','20'),('pendrive','HP','Dhaka','Dhaka','PDT-42','HP V210W','1250','250','HP V239g 16 GB Pen Drive - Buy HP V239g 16 GB Pen Drive at Low Price in India | Snapdeal.But it is a nice product.It is very beautifull product.It is 32gb pendrive','9'),('pendrive','transcend','Dhaka','Dhaka','PDT-43','Transcend JetFlash 360','1340','300','Transcend has launched its latest USB flash drive, the JetFlash 700 (JF700), that is designed with a USB 3.0 interface. Aimed as an entry-level product','9'),('pendrive','kingstone','Dhaka','Dhaka','PDT-44','Kingston DT109','1800','320','Amazon.in: Buy Kingston DataTraveler SE9 16GB USB 2.0 Pen Drive Online at Low Prices in India | Kingston Reviews & Rating','5');

/*Table structure for table `recharge_talktime_history` */

DROP TABLE IF EXISTS `recharge_talktime_history`;

CREATE TABLE `recharge_talktime_history` (
  `email` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `operator` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `offer` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(10) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recharge_talktime_history` */

insert  into `recharge_talktime_history`(`email`,`operator`,`amount`,`offer`,`valid_date`,`date`) values ('hasnat22@gmail.com','grameenphone','50','50','50','50'),('hasnat22@gmail.com','bangla','10','10','10','10');

/*Table structure for table `seat_info` */

DROP TABLE IF EXISTS `seat_info`;

CREATE TABLE `seat_info` (
  `session_id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `seat` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `seat_rate` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `total_taka` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seat_info` */

insert  into `seat_info`(`session_id`,`email`,`code`,`seat`,`seat_rate`,`total_taka`) values ('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','3543453','0','800tk','0'),('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','35343','3','800tk','2400'),('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','3453535','2','560tk','1120'),('337e198d054fd5a690dfb39a509ad14f','riponshekhbd@gmail.com','3543453','2','800tk','1600'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','3543453','0','800tk','0'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','35343','-1','800tk','-800'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','3453','4','500tk','2000'),('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','3453','1','500tk','500'),('337e198d054fd5a690dfb39a509ad14f','omor@gmail.com','3543253','2','450tk','900'),('377a20ba0fa8fb38e71d790df7500487','hasnat22@gmail.com','345435','3','850tk','2550'),('377a20ba0fa8fb38e71d790df7500487','sijanskbd@gmail.com','345435','2','850tk','1700'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','3453','2','500tk','1000'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','3543453','1','800tk','800');

/*Table structure for table `seat_no` */

DROP TABLE IF EXISTS `seat_no`;

CREATE TABLE `seat_no` (
  `session_id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `seat_no` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `code` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `seat_no` */

insert  into `seat_no`(`session_id`,`email`,`seat_no`,`code`) values ('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','6','35343'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','8','35343'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','7','35343'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','1','3453'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','3','3453'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','5','3453'),('337e198d054fd5a690dfb39a509ad14f','wasif11@gmail.com','22','3453'),('337e198d054fd5a690dfb39a509ad14f','sijanskbd@gmail.com','26','3453'),('337e198d054fd5a690dfb39a509ad14f','omor@gmail.com','1','3543253'),('337e198d054fd5a690dfb39a509ad14f','omor@gmail.com','3','3543253'),('377a20ba0fa8fb38e71d790df7500487','hasnat22@gmail.com','1','345435'),('377a20ba0fa8fb38e71d790df7500487','hasnat22@gmail.com','3','345435'),('377a20ba0fa8fb38e71d790df7500487','hasnat22@gmail.com','2','345435'),('377a20ba0fa8fb38e71d790df7500487','sijanskbd@gmail.com','1','345435'),('377a20ba0fa8fb38e71d790df7500487','sijanskbd@gmail.com','3','345435'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','1','3453'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','3','3453'),('2c0e085c8860d0caf338689bc6ccfdae','sijanskbd@gmail.com','1','3543453');

/*Table structure for table `shopping_card` */

DROP TABLE IF EXISTS `shopping_card`;

CREATE TABLE `shopping_card` (
  `session_id` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_price` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `product_quantity` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `details` varchar(2000) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shopping_card` */

insert  into `shopping_card`(`session_id`,`email`,`product_id`,`product_name`,`product_price`,`product_quantity`,`details`) values ('7d1a9319f879f293681f473c19c72189','ripon334@gmail.com','PDT-43','Transcend JetFlash 360','1340','2','Transcend has launched its latest USB flash drive, the JetFlash 700 (JF700), that is designed with a USB 3.0 interface. Aimed as an entry-level product'),('896e2239623644bcc597fea1b2199fdc','hasnat70@gmail.com','PDT-13','iphone 7','80000','4','A mockup of what the iPhone 7 may look like. It is said to have a design similar to the iPhone 6s, with a slightly thinner body and no antenna bands across '),('9165f1b0f2c2481ac33a3363b3cdbaf7','ripon334@gmail.com','PDT-36','Dell MS111','460','3','Wholesale - ZELOTES key gaming giant 7 Gaming Mouse 7 color light breathing fire key dell wired USB mouse Gaming mice'),('31f1dd2e7acced7f4d48f18f4b7e1731','hasnat22@gmail.com','PDT-16','Nokia C1','55000','2','Specifications of the Nokia C1 were tipped alongside, including a 5-inch FHD display, an 8-megapixel rear camera, and a 5-megapixel front-facing shooter.');

/*Table structure for table `special_offer` */

DROP TABLE IF EXISTS `special_offer`;

CREATE TABLE `special_offer` (
  `operator` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `operator_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `amount` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `offer` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_from` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_to` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`operator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `special_offer` */

insert  into `special_offer`(`operator`,`operator_id`,`amount`,`offer`,`valid_date`,`time_from`,`time_to`) values (NULL,'',NULL,NULL,NULL,NULL,NULL),('ROBI','102016','275tk','300min','28','10.10.2016','08.11.2016'),('ROBI','112016','110tk','200min','10','10.10.2016','20.10.2016'),('BANGLALINK','1212','13tk','20min','23','10.10.2016','12.10.2016'),('ROBI','122016','15tk','30min','20','10.10.2016','22.10.2016'),('TELETALK','1223','30tk','60min','56','10.10.2016','12.09.2016'),('TELETALK','1234','62tk','90min','25','10.10.2016','12.09.2016'),('TELETALK','1235','69tk','80min','9','10.10.2016','15.10.2016'),('TELETALK','1236','19tk','60min','19','10.10.2016','17.10.2016'),('TELETALK','1237','8tk','26min','8','10.10.2016','18.10.2016'),('BANGLALINK','1312','199tk','300min','98','10.10.2016','15.11.2016'),('BANGLALINK','1412','36tk','80min','25','10.10.2016','12.09.2016'),('BANGLALINK','1512','45tk','90min','13','10.10.2016','23.10.2016'),('ROBI','152016','36tk','70min','55','10.10.2016','25.11.2016'),('BANGLALINK','1712','25tk','50min','20','10.10.2016','30.10.2016'),('ROBI','182016','58tk','90min','65','10.10.2016','12.12.2016'),('GRAMEEN','4545','45tk','90min','5','10.10.2016','15.10.2016'),('GRAMEEN','4645','45tk','49min','6','10.10.2016','02.11.2016'),('GRAMEEN','4745','156tk','600min','10','10.10.2016','15.11.2016'),('GRAMEEN','4845','600tk','200min','654','10.10.2016','5.12.2016'),('GRAMEEN','4945','665tk','600min','456','10.10.2016','03.11.2016');

/*Table structure for table `talktime` */

DROP TABLE IF EXISTS `talktime`;

CREATE TABLE `talktime` (
  `operator` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `operator_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `talktime` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_from` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_to` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`operator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `talktime` */

insert  into `talktime`(`operator`,`operator_id`,`talktime`,`amount`,`valid_date`,`time_from`,`time_to`) values ('GRAMEEN','102016','4min','2','1','10.10.2016','17.10.2016'),('GRAMEEN','102017','30min','25','13','10.10.2016','15.11.2016'),('GRAMEEN','102018','30min','15','12','10.10.2016','12.09.2016'),('GRAMEEN','102019','50min','22','12','10.10.2016','22.10.2016'),('GRAMEEN','102020','29min','8','5','10.10.2016','15.10.2016'),('ROBI','1212','20min','10','10','10.10.2016','20.10.2016'),('ROBI','1213','9min','2','2','10.10.2016','12.10.2016'),('ROBI','1224','10min','4','4','10.10.2016','14.10.2016'),('ROBI','1225','49min','6','16','10.10.2016','17.10.2016'),('ROBI','1226','90min','60','30','10.10.2016','17.10.2016'),('TELETALK','1234','9min','1','12','10.10.2016','12.10.2016'),('TELETALK','1235','10min','3','3','10.10.2016','17.10.2016'),('TELETALK','1236','45min','6','3','10.10.2016','15.10.2016'),('TELETALK','1237','7min','1','12','10.10.2016','12.09.2016'),('BANGLALINK','1238','6min','3','5','10.10.2016','12.09.2016'),('BANGLALINK','1512','4min','1','1','10.10.2016','12.10.2016'),('BANGLALINK','1513','35min','13','12','10.10.2016','15.11.2016'),('BANGLALINK','1514','17min','11','19','10.10.2016','12.10.2016'),('BANGLALINK','1516','8min','5','5','10.10.2016','12.09.2016'),('BANGLALINK','1517','38min','13','13','10.10.2016','12.12.2016');

/*Table structure for table `top_up` */

DROP TABLE IF EXISTS `top_up`;

CREATE TABLE `top_up` (
  `operator` varchar(15) character set utf8 collate utf8_unicode_ci default NULL,
  `operator_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `amount` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `valid_date` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_from` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `time_to` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `details` varchar(1000) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`operator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `top_up` */

insert  into `top_up`(`operator`,`operator_id`,`amount`,`valid_date`,`time_from`,`time_to`,`details`) values ('ROBI','102016','1','1','10.10.2016','12.10.2016','Dial *8444*88#'),('ROBI','102017','2','2','10.10.2016','12.10.2016','Dial *8444*88#'),('ROBI','102018','5','2','10.10.2016','15.11.2016','Dial *8444*54#'),('ROBI','102019','3','1','10.10.2016','15.11.2016','Dial *8444*8888#'),('ROBI','102020','35','5','10.10.2016','15.10.2016','Dial *8444*54#'),('GRAMEEN','1212','2','2','10.10.2016','17.10.2016','Dial *123*88#'),('GRAMEEN','1213','3','2','10.10.2016','12.10.2016','Dial *123*03#'),('GRAMEEN','1224','15','1','10.10.2016','12.12.2016','Dial *123*58#'),('GRAMEEN','1225','8','2','10.10.2016','17.10.2016','Dial *123*03#'),('GRAMEEN','1226','31','12','10.10.2016','22.10.2016','Dial *123*22#'),('BANGLALINK','1312','1','1','10.10.2016','12.10.2016','Dial *124*88#'),('BANGLALINK','1313','6','3','10.10.2016','13.11.2016','Dial *124*836#'),('BANGLALINK','1314','2','3','10.10.2016','13.11.2016','Dial *124*88#'),('BANGLALINK','1315','10','10','10.10.2016','03.11.2016','Dial *124*866#'),('BANGLALINK','1316','35','12','10.10.2016','12.09.2016','Dial *124*25#'),('TELETALK','1345','2','13','10.10.2016','12.10.2016','Dial *8444*88#'),('TELETALK','1346','6','6','10.10.2016','17.10.2016','Dial *124*866#'),('TELETALK','1347','5','23','10.10.2016','22.10.2016','Dial *124*878#'),('TELETALK','1348','56','6','10.10.2016','18.10.2016','Dial *124*565#'),('TELETALK','1349','6','6','10.10.2016','12.12.2016','Dial *124*8686#');

/*Table structure for table `wallet` */

DROP TABLE IF EXISTS `wallet`;

CREATE TABLE `wallet` (
  `email` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `amount` varchar(40) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wallet` */

insert  into `wallet`(`email`,`phone`,`amount`) values (NULL,NULL,NULL),('riponshekhbd@gmail.com','riponsk','300000'),('sijanskbd@gmail.com','sijansk','184900');

/*Table structure for table `watter_bill_info` */

DROP TABLE IF EXISTS `watter_bill_info`;

CREATE TABLE `watter_bill_info` (
  `name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `id` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `bill_no` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `zip_code` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `date` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `company_name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`,`bill_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `watter_bill_info` */

insert  into `watter_bill_info`(`name`,`id`,`bill_no`,`zip_code`,`date`,`address`,`price`,`company_name`) values ('Wasif Miraz','1010','22334455','3730','2016-10-16','Gulshan','650tk','Dhaka WASA'),('Ripon Seikh','1011','22334457','3132','2016-10-13','Banani','450tk','Dhaka WASA'),('JH Abdullah','1012','22334456','3731','2016-10-15','Mirpur','700tk','Dhaka WASA'),('Hasim Akram','1013','22334458','3734','2016-10-11','Dhanmondi','900tk','Dhaka WASA'),('Omar Ali','1014','22334459','3735','2016-10-06','Uttara','600tk','Dhaka WASA'),('MD Akash Copra','1020','22335560','3741','2016-10-06','Agrabad','850tk','Chittagog WASA'),('Rehan Choudhhury','1021','22334461','3740','2016-10-13','Lalkhan bazar','500tk','Chittagog WASA'),('Mrs Jannatul ','1022','22334462','3742','2016-10-10','Hali shore','890tk','Chittagog WASA'),('Begum khan','1023','22334463','3743','2016-10-12','Bou Bazar','690tk','Chittagog WASA'),('Mrs Munmun ','1024','22334464','3744','2016-10-01','Alongkar','682tk','Chittagog WASA');

/*Table structure for table `watter_company` */

DROP TABLE IF EXISTS `watter_company`;

CREATE TABLE `watter_company` (
  `company_name` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `company_id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `watter_company` */

insert  into `watter_company`(`company_name`,`company_id`) values ('Dhaka WASA','1020'),('Chittagog WASA','1021'),('Comilla WASA','1022'),('Barisal WASA','1023'),('sylhet WASA','1024');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
