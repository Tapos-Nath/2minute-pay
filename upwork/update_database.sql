/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.0.45-community-nt : Database - tunikhala
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tunikhala` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tunikhala`;

/*Table structure for table `admin_feedback` */

DROP TABLE IF EXISTS `admin_feedback`;

CREATE TABLE `admin_feedback` (
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(100) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `admin_feedback` */

insert  into `admin_feedback`(`email`,`name`,`message`) values ('iqbal@gmail.com','iqbal','hi hello how area u');

/*Table structure for table `admin_signup` */

DROP TABLE IF EXISTS `admin_signup`;

CREATE TABLE `admin_signup` (
  `username` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `password` varchar(100) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `admin_signup` */

insert  into `admin_signup`(`username`,`email`,`password`) values ('iqu','i@gmail.com','sdf'),('iqu','i@gmail.com','sdf'),('iqu','i@gmail.com','sdf'),('iqbal','miraz@gmail.com','sdfdsfsdsdf'),('iqbaldf','ii@gmail.com','345');

/*Table structure for table `car_service` */

DROP TABLE IF EXISTS `car_service`;

CREATE TABLE `car_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `car_service` */

/*Table structure for table `comment_info` */

DROP TABLE IF EXISTS `comment_info`;

CREATE TABLE `comment_info` (
  `email` varchar(40) character set utf8 collate utf8_unicode_ci NOT NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `job` varchar(200) character set utf8 collate utf8_unicode_ci default NULL,
  `city` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `comment` varchar(500) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comment_info` */

insert  into `comment_info`(`email`,`name`,`job`,`city`,`comment`) values ('afsanaakter@gmail.com','afsana akter','House wife','feni','Thank you very much. I am just impressed on you service. tunikhala doing awesome :)'),('farahanaalom@gmail.com','Farhana jahan','School Teacher','noahkhali','beautifull job'),('jerinakter@gmail.com','jerin talukdar','jamuna bank','chittagong','Thank you very so much for your wonderfull job'),('khaledajahan@gmail.com','khaleda mahmud','house wife','feni','Thank you very much. tunikhala must to say great job:)'),('Mahfujahmed@gmail.com','Mahfuj ahmed','CEO ALpabook bangladesh','feni mohipal','Wonderfull service.... many thanks to Tunikhala team.'),('mahimahmud@gmail.com','Motaleb chowhury','Duch bangla bank','feni','Thank you so much. Brilliant service!');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `first_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `last_name` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(100) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(1000) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`first_name`,`last_name`,`email`,`phone`,`message`) values ('iqbal','ahmed','iqbal@gmail.com','5465464565','i need a home work'),('iqbal','ahmed','iqbal@gmail.com','5465464565','i need a home work');

/*Table structure for table `create_account` */

DROP TABLE IF EXISTS `create_account`;

CREATE TABLE `create_account` (
  `name` varchar(20) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `password` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `mobile` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `create_account` */

insert  into `create_account`(`name`,`email`,`password`,`mobile`) values ('wasif miraz','i@gmail.com','1','32432'),('iqbal','jn@gmail.com','1','3453654654');

/*Table structure for table `create_admin` */

DROP TABLE IF EXISTS `create_admin`;

CREATE TABLE `create_admin` (
  `user_name` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(40) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `create_admin` */

insert  into `create_admin`(`user_name`,`email`,`phone`) values ('wasif','wasif@gmail.com','34543543');

/*Table structure for table `food_item` */

DROP TABLE IF EXISTS `food_item`;

CREATE TABLE `food_item` (
  `id` int(30) NOT NULL auto_increment,
  `item` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `catagory` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `single_double` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `city` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `food_item` */

insert  into `food_item`(`id`,`item`,`catagory`,`single_double`,`price`,`city`) values (1,'Barger','chicken Barger','single','120','Feni'),(2,'Pizza','chicken Pizza','Double','300','Noakhali'),(3,'Barger','Vegetable Barger','single','120','Noakhali'),(4,'Barger','zinger burger','single','120','mohipal,feni'),(5,'Barger','Keema Burger','Double','300','comilla'),(6,'Barger','Beef Burger','single','300','motizil');

/*Table structure for table `food_menu` */

DROP TABLE IF EXISTS `food_menu`;

CREATE TABLE `food_menu` (
  `id` int(30) NOT NULL auto_increment,
  `food_menu` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `food_menu` */

insert  into `food_menu`(`id`,`food_menu`) values (1,'Beef'),(2,'Soup'),(3,'Barger'),(4,'Pizza'),(5,'Pasta'),(6,'Rice'),(7,'Chaken Fray'),(8,'Sandwiches');

/*Table structure for table `home_doctor` */

DROP TABLE IF EXISTS `home_doctor`;

CREATE TABLE `home_doctor` (
  `id` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `age` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `hospital` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `exp` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `p_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `home_doctor` */

insert  into `home_doctor`(`id`,`name`,`age`,`study`,`hospital`,`exp`,`expart`,`p_address`,`message`) values ('1','iqbal Hossain','19','diploma','sodor hospital','4','eye expart','gulshan,dhaka','i am eye expart');

/*Table structure for table `home_teacher` */

DROP TABLE IF EXISTS `home_teacher`;

CREATE TABLE `home_teacher` (
  `id` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `age` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `scu` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `school` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `year` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `exp` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `p_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `home_teacher` */

insert  into `home_teacher`(`id`,`name`,`age`,`study`,`scu`,`school`,`year`,`exp`,`expart`,`p_address`,`message`) values ('1','iqbal','19','diploma CST','Collage','Computer institute','5 semester','3','math,english','gulshan,dhaka','hkjhj'),('3','wasif','19','diploma DNT','collage','feni computer institute','fainal year','4','math,english,programing','gulshan,dhaka','i am hard worker'),('2','Afaf Hossain','34','HSC','Collage','Feni Govt Collage','2nd','2 year','Math,English','comilla','I am Hard Working and Honest'),('4','Pujan Das','25','Diploam','Collage','feni computer institute','7th','1','Bangla,Physics','Tulabadia,Feni','I am Honest');

/*Table structure for table `home_worker` */

DROP TABLE IF EXISTS `home_worker`;

CREATE TABLE `home_worker` (
  `id` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `age` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `exp` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `p_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `message` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `home_worker` */

insert  into `home_worker`(`id`,`name`,`age`,`study`,`exp`,`expart`,`p_address`,`message`) values ('1','iqbal Hossain','19','diploma','4','Cleaning,Take care','gulshan,dhaka','I am hard worker'),('2','sayem','34','diploma','4','takecare','gulshan,dhaka','i am honest'),('3','Araf hossain','44','HSC','3','Care Taker','Mohifal,Feni','I am Expart Worker'),('4','Pujan Das','33','SSC','2','CLeaning','Comilla','I am Honest');

/*Table structure for table `loundry_service` */

DROP TABLE IF EXISTS `loundry_service`;

CREATE TABLE `loundry_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `loundry_service` */

insert  into `loundry_service`(`id`,`date/time`,`area`,`service_name`,`address`,`name`,`phone`,`email`) values (1,'2017-05-20 23:27:39','f','Choosse Your Service','feni','hossain','6575','sayem@gmail.com');

/*Table structure for table `order_ac_service` */

DROP TABLE IF EXISTS `order_ac_service`;

CREATE TABLE `order_ac_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NULL default NULL,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `verification` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `order_ac_service` */

insert  into `order_ac_service`(`id`,`date/time`,`area`,`service_name`,`address`,`name`,`phone`,`email`,`verification`) values (1,NULL,'dhaka','Choosse Your Service','panch gachia,fenirwetr','iqbal Hossain','54657657','iqbal@gmail.com',NULL);

/*Table structure for table `order_computer_service` */

DROP TABLE IF EXISTS `order_computer_service`;

CREATE TABLE `order_computer_service` (
  `id` int(30) NOT NULL auto_increment,
  `data/time` timestamp NULL default NULL,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `verification` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `order_computer_service` */

insert  into `order_computer_service`(`id`,`data/time`,`area`,`service_name`,`address`,`name`,`phone`,`email`,`verification`) values (1,NULL,'dhaka','Choosse Your Service','panch gachia,fenirwetr','iqbal Hossain','546546546546565','jn@gmail.com',NULL);

/*Table structure for table `order_doctor` */

DROP TABLE IF EXISTS `order_doctor`;

CREATE TABLE `order_doctor` (
  `order_id` int(30) NOT NULL auto_increment,
  `order_time/date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `doctor_id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `doctor_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `doctor_study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `doctor_hospital_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `doctor_expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `doctor_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `order_doctor` */

/*Table structure for table `order_electrician` */

DROP TABLE IF EXISTS `order_electrician`;

CREATE TABLE `order_electrician` (
  `id` int(30) NOT NULL auto_increment,
  `order_date` timestamp NULL default NULL,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `order_electrician` */

insert  into `order_electrician`(`id`,`order_date`,`area`,`service_name`,`address`,`name`,`phone`,`email`) values (1,NULL,'dhaka','ac service','panch gachia,fenirwetr','iqbal Hossain','546546','jniqbal1@gmail.com');

/*Table structure for table `order_food` */

DROP TABLE IF EXISTS `order_food`;

CREATE TABLE `order_food` (
  `id` int(30) unsigned NOT NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `session_id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `item` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `catagory` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `single_double` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `price` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `order_food` */

insert  into `order_food`(`id`,`email`,`session_id`,`item`,`catagory`,`single_double`,`price`) values (4,'t@gmail.com','30a2a2fa93d6ab6f4ae390e9f645e4','Barger','zinger burger','single','120');

/*Table structure for table `order_teacher` */

DROP TABLE IF EXISTS `order_teacher`;

CREATE TABLE `order_teacher` (
  `order_no` int(30) NOT NULL auto_increment,
  `order_time/date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `teacher_id` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `teacher_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `teacher_study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `teacher_collage` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `teacher_expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `teacher_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_name` varchar(30) character set utf8 collate utf8_unicode_ci NOT NULL,
  `order_user_phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`order_no`,`teacher_id`,`order_user_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `order_teacher` */

/*Table structure for table `order_worker` */

DROP TABLE IF EXISTS `order_worker`;

CREATE TABLE `order_worker` (
  `order_no` int(30) NOT NULL auto_increment,
  `order_time/date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `worker_id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `worker_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `worker_study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `worker_expart` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `worker_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `order_user_address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`order_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `order_worker` */

insert  into `order_worker`(`order_no`,`order_time/date`,`worker_id`,`worker_name`,`worker_study`,`worker_expart`,`worker_address`,`order_user_name`,`order_user_phone`,`order_user_area`,`order_user_address`) values (1,'2017-05-20 13:47:54','2','sayem','diploma','takecare','gulshan,dhaka','iqbal Hossain','01811954314','dhaka','dsgdfsgds'),(2,'2017-05-20 14:23:13','2','sayem','diploma','takecare','gulshan,dhaka','iqbal Hossain','01811954314','dhaka','dsgdfsgds');

/*Table structure for table `painter_service` */

DROP TABLE IF EXISTS `painter_service`;

CREATE TABLE `painter_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `painter_service` */

/*Table structure for table `plumbing_service` */

DROP TABLE IF EXISTS `plumbing_service`;

CREATE TABLE `plumbing_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `plumbing_service` */

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `age` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `gender` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `city` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `relation` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `experience` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `study` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `where_wish_work` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `time` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`id`,`email`,`name`,`age`,`gender`,`city`,`relation`,`experience`,`study`,`where_wish_work`,`time`,`phone`) values ('img-000002','wasif@gmail.com','','à¦¬à§Ÿà¦¸','','à¦¶à¦¹à¦°','à¦†à¦ªà¦¨à¦¿ à¦•à¦¿ à¦¬à¦¿à¦¬à','à¦•à¦¾à¦œà§‡à¦° à¦…à¦­à¦¿à¦œà§','','','',''),('img-000003','i@gmail.com','iq','21','female','feni','married','à¦•à¦¾à¦œà§‡à¦° à¦…à¦­à¦¿à¦œà§','no','noakhali',' half time','56657567567567657'),('img-000004','i@gmail.com','devid','19','female','comilla','single','2year','','comilla',' half time','546546546546565'),('img-000005','i@gmail.com','','à¦¬à§Ÿà¦¸','','à¦¶à¦¹à¦°','à¦†à¦ªà¦¨à¦¿ à¦•à¦¿ à¦¬à¦¿à¦¬à','à¦•à¦¾à¦œà§‡à¦° à¦…à¦­à¦¿à¦œà§','','','',''),('img-000006','i@gmail.com','','à¦¬à§Ÿà¦¸','','à¦¶à¦¹à¦°','à¦†à¦ªà¦¨à¦¿ à¦•à¦¿ à¦¬à¦¿à¦¬à','à¦•à¦¾à¦œà§‡à¦° à¦…à¦­à¦¿à¦œà§','','comilla','',''),('img-000007','i@gmail.com','iqbal Hossain','à¦¬à§Ÿà¦¸','male','à¦¶à¦¹à¦°','à¦†à¦ªà¦¨à¦¿ à¦•à¦¿ à¦¬à¦¿à¦¬à','à¦•à¦¾à¦œà§‡à¦° à¦…à¦­à¦¿à¦œà§','ssc','comilla','full time','543543');

/*Table structure for table `tv_service` */

DROP TABLE IF EXISTS `tv_service`;

CREATE TABLE `tv_service` (
  `id` int(30) NOT NULL auto_increment,
  `date/time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `area` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `service_name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `address` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `name` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tv_service` */

insert  into `tv_service`(`id`,`date/time`,`area`,`service_name`,`address`,`name`,`phone`,`email`) values (1,'2017-05-20 23:19:51','f','Choosse Your Service','mohipal','wasif','12456457567','jn@gmail.com');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(10) character set utf8 collate utf8_unicode_ci default NULL,
  `email` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `password` varchar(40) character set utf8 collate utf8_unicode_ci default NULL,
  `phone` varchar(30) character set utf8 collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`phone`) values (1,'$username','$email','$password',NULL),(2,'iqu','iqbal@gmail.com','123',NULL),(3,'hossain','t@gmail.com','1',NULL);

/*Table structure for table `view_user` */

DROP TABLE IF EXISTS `view_user`;

CREATE TABLE `view_user` (
  `session_id` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `view_user` */

insert  into `view_user`(`session_id`,`date`) values ('a55d9d04e8f0006cfc6327a848df7779','2017-04-25 00:00:00'),('68d564ddce1066a1f9c292a62234ae87','2017-04-25 00:00:00'),('92c91f687a0aef669d756e0f2411a362','2017-04-25 00:00:00'),('0a8d03c5eaed0d7f6d1e2ca5689ede42','2017-04-26 00:00:00'),('c6b9ac6912f68c2e33d45eab9c6b9c8e','2017-04-26 00:00:00'),('d47e463de83df391f18b85d911b42f6a','2017-04-27 00:00:00'),('0a4e1488e6b133768d2d5c747c3efa74','2017-04-27 00:00:00'),('52ce9e71ebe3433b057754b2abe4479f','2017-04-28 00:00:00'),('acc6019d8846e976895acab87de2d08e','2017-04-28 00:00:00'),('a1d2b783ead13f5c59c295635fae26ff','2017-04-29 00:00:00'),('65dbf5e390ac65af3bb28681e3a611a2','2017-04-29 00:00:00'),('60f8531fe03daa30ff865d0089a5fcf3','2017-04-29 00:00:00'),('08071cac4a7388765afa375c467a3df7','2017-04-29 00:00:00'),('8ddfb10d322cab4c3413ebc33258fb78','2017-04-29 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
