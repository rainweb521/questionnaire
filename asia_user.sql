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

 Date: 11/05/2018 14:47:08 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `asia_user`
-- ----------------------------
DROP TABLE IF EXISTS `asia_user`;
CREATE TABLE `asia_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bumen` varchar(11) DEFAULT NULL,
  `success` int(11) DEFAULT NULL,
  `date` char(50) DEFAULT NULL,
  `log` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
