/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : muyou

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-09-04 19:27:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contents
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contents
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_08_31_205626_create_tags_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `parentId` int(10) unsigned DEFAULT '0',
  `sort` int(10) unsigned DEFAULT '0',
  `click` int(10) unsigned DEFAULT '0',
  `show_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('1', '文章标签', '0', '0', '0', 'arc-tag', 'infos', '0', '2017-09-02 23:46:13', '2017-09-03 15:00:20');
INSERT INTO `tags` VALUES ('2', '活动标签', '0', '0', '0', '', null, '0', '2017-09-02 23:46:13', '2017-09-02 23:46:13');
INSERT INTO `tags` VALUES ('3', 'cet', '1', '0', '0', '', null, '0', '2017-09-03 10:45:25', '2017-09-03 10:45:25');
INSERT INTO `tags` VALUES ('4', 'cer2', '1', '0', '0', '', null, '0', '2017-09-03 10:45:25', '2017-09-03 10:45:25');
INSERT INTO `tags` VALUES ('5', 'cert3', '2', '0', '0', '', null, '0', '2017-09-03 10:45:25', '2017-09-03 10:45:25');
INSERT INTO `tags` VALUES ('6', 'cert4', '2', '0', '0', '', null, '0', '2017-09-03 10:45:26', '2017-09-03 10:45:26');

-- ----------------------------
-- Table structure for tag_relations
-- ----------------------------
DROP TABLE IF EXISTS `tag_relations`;
CREATE TABLE `tag_relations` (
  `id` int(11) NOT NULL,
  `tagID` int(11) DEFAULT NULL,
  `contentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag_relations
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'RedSmoke', 'admin@admin.com', '$2y$10$WM/7KLQGlkozqnWsUm8JIeN04i2nAtoCq6o8vVcKv4bPGS0oKTkcC', 'DxTkfRbe8PeSpYNNTQwAzhXiM20InZt4TGNvewYzC0erPys3J7D6rZDcvn5a', '2017-09-04 11:21:20', '2017-09-04 11:21:20');
