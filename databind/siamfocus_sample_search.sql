/*
MySQL Data Transfer
Source Host: localhost
Source Database: siamfocus_sample_search
Target Host: localhost
Target Database: siamfocus_sample_search
Date: 17/9/2015 4:49:01
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for sample_search
-- ----------------------------
DROP TABLE IF EXISTS `sample_search`;
CREATE TABLE `sample_search` (
  `sample_id` int(11) NOT NULL auto_increment,
  `sample_data` varchar(255) collate utf8_bin default NULL,
  `sample_datetime` datetime default NULL,
  PRIMARY KEY  (`sample_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `sample_search` VALUES ('1', 'siamfocus.com', '2015-09-01 02:24:43');
INSERT INTO `sample_search` VALUES ('2', 'siamfocus.com', '2015-09-02 02:24:48');
INSERT INTO `sample_search` VALUES ('3', 'siamfocus.com', '2015-09-03 02:24:51');
INSERT INTO `sample_search` VALUES ('4', 'siamfocus.com', '2015-09-04 02:24:54');
INSERT INTO `sample_search` VALUES ('5', 'siamfocus.com', '2015-09-05 02:24:57');
INSERT INTO `sample_search` VALUES ('6', 'siamfocus.com', '2015-09-06 02:25:00');
INSERT INTO `sample_search` VALUES ('7', 'siamfocus.com', '2015-09-07 02:25:03');
INSERT INTO `sample_search` VALUES ('8', 'siamfocus.com', '2015-09-08 02:25:06');
INSERT INTO `sample_search` VALUES ('9', 'siamfocus.com', '2015-09-09 02:25:10');
INSERT INTO `sample_search` VALUES ('10', 'siamfocus.com', '2015-09-10 02:25:13');
INSERT INTO `sample_search` VALUES ('11', 'siamfocus.com', '2015-09-11 02:25:16');
INSERT INTO `sample_search` VALUES ('12', 'siamfocus.com', '2015-09-12 02:25:19');
INSERT INTO `sample_search` VALUES ('13', 'siamfocus.com', '2015-09-13 02:25:22');
INSERT INTO `sample_search` VALUES ('14', 'siamfocus.com', '2015-09-14 02:25:25');
INSERT INTO `sample_search` VALUES ('15', 'siamfocus.com', '2015-09-15 02:25:29');
INSERT INTO `sample_search` VALUES ('16', 'siamfocus.com', '2015-09-16 02:25:32');
INSERT INTO `sample_search` VALUES ('17', 'siamfocus.com', '2015-09-17 02:25:36');
INSERT INTO `sample_search` VALUES ('18', 'siamfocus.com', '2015-09-18 02:25:39');
INSERT INTO `sample_search` VALUES ('19', 'siamfocus.com', '2015-09-19 02:25:42');
INSERT INTO `sample_search` VALUES ('20', 'siamfocus.com', '2015-09-20 02:25:45');
