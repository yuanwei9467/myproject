/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : myproject

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-02-25 18:05:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attachments
-- ----------------------------
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hash` char(32) NOT NULL,
  `size` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attachments
-- ----------------------------

-- ----------------------------
-- Table structure for auth_access
-- ----------------------------
DROP TABLE IF EXISTS `auth_access`;
CREATE TABLE `auth_access` (
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_access
-- ----------------------------

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '新闻', '0', null, '0');
INSERT INTO `category` VALUES ('2', '国内新闻', '1', null, '0-1');
INSERT INTO `category` VALUES ('4', '电影', '0', null, '0');
INSERT INTO `category` VALUES ('5', '科幻片', '4', null, '0-4');
INSERT INTO `category` VALUES ('6', '美国科幻片', '5', null, '0-4-5');
INSERT INTO `category` VALUES ('7', '动作片', '4', null, '0-4');
INSERT INTO `category` VALUES ('8', '中国动作片', '7', null, '0-4-7');
INSERT INTO `category` VALUES ('11', '娱乐新闻', '2', null, '0-1-2');
INSERT INTO `category` VALUES ('12', '文艺片', '4', null, '0-4');
INSERT INTO `category` VALUES ('13', '欧美动作片', '7', null, '0-4-7');

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_login_time` int(11) NOT NULL,
  `last_login_ip` varchar(255) NOT NULL,
  `login_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------

-- ----------------------------
-- Table structure for member_group
-- ----------------------------
DROP TABLE IF EXISTS `member_group`;
CREATE TABLE `member_group` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_group
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '首页', 'Index/index', '0');
INSERT INTO `menu` VALUES ('2', '资讯管理', 'News/index', '0');
INSERT INTO `menu` VALUES ('3', '分类管理', 'Category/index', '2');
INSERT INTO `menu` VALUES ('4', '新闻列表', 'News/index', '2');
INSERT INTO `menu` VALUES ('5', '新增分类', 'Category/add', '3');

-- ----------------------------
-- Table structure for problems
-- ----------------------------
DROP TABLE IF EXISTS `problems`;
CREATE TABLE `problems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `create_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `approve_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `process_id` int(11) NOT NULL,
  `acceptance_id` int(11) NOT NULL,
  `create_time` int(11) NOT NULL,
  `approve_time` int(11) DEFAULT NULL,
  `process_time` int(11) DEFAULT NULL,
  `acceptiance_time` int(11) DEFAULT NULL,
  `suggest_disc` text,
  `process_disc` text,
  `acception_disc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of problems
-- ----------------------------

-- ----------------------------
-- Table structure for process_type
-- ----------------------------
DROP TABLE IF EXISTS `process_type`;
CREATE TABLE `process_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of process_type
-- ----------------------------

-- ----------------------------
-- Table structure for suggestion
-- ----------------------------
DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `approve_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) NOT NULL,
  `approve_time` int(11) DEFAULT NULL,
  `suggest` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suggestion
-- ----------------------------
