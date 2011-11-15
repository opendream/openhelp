CREATE TABLE `location` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  
  `level0` varchar(255),
  `level1` varchar(255),
  `level2` varchar(255),
  `level3` varchar(255),
  `level4` varchar(255),
  `level5` varchar(255),
  `label` varchar(255),
  `lat` varchar(255),
  `lng` varchar(255),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;