/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost
 Source Database       : email

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : utf-8

 Date: 11/05/2018 14:47:01 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `asia_topic`
-- ----------------------------
DROP TABLE IF EXISTS `asia_topic`;
CREATE TABLE `asia_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `option1` varchar(255) DEFAULT NULL,
  `option2` varchar(255) DEFAULT NULL,
  `option3` varchar(255) DEFAULT NULL,
  `option4` varchar(255) DEFAULT NULL,
  `option5` varchar(255) DEFAULT NULL,
  `option6` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
