CREATE TABLE `category_item` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `detail` text
)  ;

CREATE TABLE `coordinator` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
)  ;

CREATE TABLE `donated_item` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `donator_id` INTEGER NOT NULL,
  `item_id` INTEGER NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `need_id` INTEGER NOT NULL
)  ;

CREATE TABLE `donator` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `fullname` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `location_id` INTEGER DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `detail` text  
) ;

CREATE TABLE `item` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255) NOT NULL,
  `category_item_id` INTEGER DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ;

CREATE TABLE `location` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `level0` varchar(255) DEFAULT NULL,
  `level1` varchar(255) DEFAULT NULL,
  `level2` varchar(255) DEFAULT NULL,
  `level3` varchar(255) DEFAULT NULL,
  `level4` varchar(255) DEFAULT NULL,
  `level5` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL
) ;


CREATE TABLE `need` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `item_id` INTEGER NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `detail` text,
  `request_id` INTEGER NOT NULL,
  `status` int(11) NOT NULL
)  ;

CREATE TABLE `request` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `location_id` INTEGER DEFAULT NULL,
  `detail` text,
  `extra_location0` varchar(255) DEFAULT NULL,
  `extra_location1` varchar(255) DEFAULT NULL,
  `extra_location2` varchar(255) DEFAULT NULL,
  `extra_location3` varchar(255) DEFAULT NULL,
  `extra_location4` varchar(255) DEFAULT NULL,
  `extra_text0` text,
  `extra_text1` text,
  `extra_text2` text,
  `extra_text3` text,
  `extra_text4` text,
  `extra_text5` text,
  `extra_text6` text,
  `extra_text7` text,
  `extra_text8` text,
  `extra_text9` text,
  `extra_text10` text,
  `extra_text11` text,
  `extra_text12` text,
  `extra_text13` text,
  `extra_text14` text,
  `extra_double0` double DEFAULT NULL,
  `extra_double1` double DEFAULT NULL,
  `extra_double2` double DEFAULT NULL,
  `extra_double3` double DEFAULT NULL,
  `extra_double4` double DEFAULT NULL,
  `extra_double5` double DEFAULT NULL,
  `extra_double6` double DEFAULT NULL,
  `extra_double7` double DEFAULT NULL,
  `extra_double8` double DEFAULT NULL,
  `extra_double9` double DEFAULT NULL,
  `status` int(11) NOT NULL
)  ;


CREATE TABLE `request_coordinator` (
  `request_id` INTEGER NOT NULL DEFAULT '0',
  `coordinator_id` INTEGER NOT NULL DEFAULT '0',
  PRIMARY KEY (`request_id`,`coordinator_id`)
);

CREATE TABLE `shipment` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `transporter_id` INTEGER NOT NULL,
  `vehicle_id` INTEGER NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `need_id` INTEGER NOT NULL
)  ;


CREATE TABLE `stock_item` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `donator_id` INTEGER NOT NULL,
  `item_id` INTEGER NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0'
)  ;

CREATE TABLE `stock_vehicle` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `transporter_id` INTEGER NOT NULL,
  `vehicle_id` INTEGER NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0'
)  ;

CREATE TABLE `transporter` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `fullname` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `location_id` INTEGER DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `detail` text
)  ;

CREATE TABLE `user` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
)  ;

CREATE TABLE `vehicle` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
)  ;


CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');
