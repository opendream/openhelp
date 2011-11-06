CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;;

CREATE TABLE `location` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `level0` varchar(255),
  `level1` varchar(255),
  `level2` varchar(255),
  `level3` varchar(255),
  `level4` varchar(255),
  `level5` varchar(255),
  `lat` varchar(255),
  `lng` varchar(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `request` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `date_created` datetime NOT NULL,
  `last_updated` datetime NOT NULL,
  `location_id` bigint(20),
  `detail` text,
  PRIMARY KEY (`id`),
  KEY `fk_request_location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `coordinator` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255),
  `tel` varchar(255),
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `request_coordinator` (    
  `request_id` bigint(20) DEFAULT NULL,
  `coordinator_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`request_id`, `coordinator_id`),
  KEY `fk_request_coordinator_request_id` (`request_id`),
  KEY `fk_request_coordinator_coordinator_id` (`coordinator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `need` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `detail` text,
  `request_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_need_request_id` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

# Donate ================================================================================================================
CREATE TABLE `stock_item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `donator_id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_stock_item_donator_id` (`donator_id`),
  KEY `fk_stock_item_item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
    
CREATE TABLE `item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(255) NOT NULL,
  `category_item_id` bigint(20),
  PRIMARY KEY (`id`),
  KEY `fk_item_category_item_id` (`category_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `category_item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(255) NOT NULL,
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `donated_item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `donator_id` bigint(20) NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `need_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_donated_item_item_id` (`item_id`),
  KEY `fk_donated_item_need_id` (`need_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `donator` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,

  `fullname` varchar(255) NOT NULL,
  `tel` varchar(255),
  `location_id` bigint(20),
  `detail` text,
  PRIMARY KEY (`id`),
  KEY `fk_donator_location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

# Transport ==============================================================================================================
CREATE TABLE `stock_shipment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `transporter_id` bigint(20) NOT NULL,
  `shipment_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_stock_shipment_transporter_id` (`transporter_id`),
  KEY `fk_stock_shipment_shipment_id` (`shipment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
    
CREATE TABLE `shipment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `transported_shipment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `transporter_id` bigint(20) NOT NULL,
  `shipment_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `need_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_transporter_shipment_shipment_id` (`shipment_id`),
  KEY `fk_transporter_shipment_need_id` (`need_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `transporter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `fullname` varchar(255) NOT NULL,
  `tel` varchar(255),
  `location_id` bigint(20),
  `detail` text,
  PRIMARY KEY (`id`),
  KEY `fk_transporter_location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

ALTER TABLE `request_coordinator`
  ADD CONSTRAINT `fk_request_coordinator_request_id` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`),
  ADD CONSTRAINT `fk_request_coordinator_coordinator_id` FOREIGN KEY (`coordinator_id`) REFERENCES `coordinator` (`id`);
  
  
ALTER TABLE `need`
  ADD CONSTRAINT `fk_need_request_id` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`);
  
# Donate ================================================================================================================
ALTER TABLE `stock_item`
  ADD CONSTRAINT `fk_stock_item_donator_id` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`),
  ADD CONSTRAINT `fk_stock_item_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);
  
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_category_item_id` FOREIGN KEY (`category_item_id`) REFERENCES `category_item` (`id`);

ALTER TABLE `donated_item`
  ADD CONSTRAINT `fk_donated_item_donator_id` FOREIGN KEY (`donator_id`) REFERENCES `donator` (`id`),
  ADD CONSTRAINT `fk_donated_item_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `fk_donated_item_need_id` FOREIGN KEY (`need_id`) REFERENCES `need` (`id`);
  
ALTER TABLE `donator`
  ADD CONSTRAINT `fk_donator_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

# Transport ==============================================================================================================
ALTER TABLE `stock_shipment`
  ADD CONSTRAINT `fk_stock_shipment_transporter_id` FOREIGN KEY (`transporter_id`) REFERENCES `transporter` (`id`),
  ADD CONSTRAINT `fk_stock_shipment_shipment_id` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id`);
  
ALTER TABLE `transported_shipment`
  ADD CONSTRAINT `fk_donated_shipment_transporter_id` FOREIGN KEY (`transporter_id`) REFERENCES `transporter` (`id`),
  ADD CONSTRAINT `fk_donated_shipment_shipment_id` FOREIGN KEY (`shipment_id`) REFERENCES `shipment` (`id`),
  ADD CONSTRAINT `fk_donated_shipment_need_id` FOREIGN KEY (`need_id`) REFERENCES `need` (`id`);
  
ALTER TABLE `transporter`
  ADD CONSTRAINT `fk_transporter_location_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);
