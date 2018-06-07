DROP TABLE IF EXISTS `rig_data`;

CREATE TABLE `rig_data` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `rig_name` varchar(256) ,
  `rig_location` varchar(256) ,
  `rig_owner` varchar(64)
) ;

