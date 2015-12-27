/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : website

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-27 12:59:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for url
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url
-- ----------------------------
INSERT INTO `url` VALUES ('1', '百度', 'www.baidu.com');
