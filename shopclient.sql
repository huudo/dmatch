/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-06 15:02:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `KEISAISAKI_KOKYAKU_HOJIN_CD` varchar(6) NOT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_CD` varchar(3) NOT NULL,
  `KEISAISAKI_KOKYAKU_HOJIN_NAME` varchar(100) DEFAULT NULL,
  `KEISAISAKI_KOKYAKU_HOJIN_KANA` varchar(100) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_KANJI` varchar(60) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_KANA` varchar(100) DEFAULT NULL,
  `KEISAISAKI_YAGOU_KANJI` varchar(80) DEFAULT NULL,
  `KEISAISAKI_YAGOU_KANA` varchar(80) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_ZIP` varchar(8) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_ADDRESS` varchar(60) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_TEL` varchar(20) DEFAULT NULL,
  `KEISAISAKI_KYK_MADOGUCHI_FAX` varchar(20) DEFAULT NULL,
  `SAKUSEIKEI_CHIIKI_CD` int(4) DEFAULT NULL,
  `KEN_CD` int(2) DEFAULT NULL,
  `HANBAITEN_SYUBETU` int(1) DEFAULT NULL,
  `IDO` varchar(11) DEFAULT NULL,
  `KEIDO` varchar(12) DEFAULT NULL,
  `IDO_WORLD` double(9,6) DEFAULT NULL,
  `KEIDO_WORLD` double(9,6) DEFAULT NULL,
  `IF_CREATE_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`KEISAISAKI_KOKYAKU_HOJIN_CD`,`KEISAISAKI_KYK_MADOGUCHI_CD`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES ('A1', 'B1', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.293096', '105.080040', null);
INSERT INTO `client` VALUES ('A2', 'B2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.282072', '105.063351', null);
INSERT INTO `client` VALUES ('A3', 'B3', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.312800', '105.046598', null);
INSERT INTO `client` VALUES ('A4', 'B4', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.261728', '105.072883', null);
INSERT INTO `client` VALUES ('A5', 'B5', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.287537', '105.058075', null);
INSERT INTO `client` VALUES ('A6', 'B6', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.329434', '105.020737', null);
INSERT INTO `client` VALUES ('A7', 'B7', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.321874', '105.064676', null);
INSERT INTO `client` VALUES ('A8', 'B8', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.271587', '105.038954', null);
INSERT INTO `client` VALUES ('A9', 'B9', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.278544', '105.079837', null);
INSERT INTO `client` VALUES ('A10', 'B10', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.291956', '105.078755', null);
INSERT INTO `client` VALUES ('A11', 'B11', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.297890', '105.053749', null);
INSERT INTO `client` VALUES ('A12', 'B12', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.283052', '105.029118', null);
INSERT INTO `client` VALUES ('A13', 'B13', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.298575', '105.050038', null);
INSERT INTO `client` VALUES ('A14', 'B14', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.291025', '105.032208', null);
INSERT INTO `client` VALUES ('A15', 'B15', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.308027', '105.027538', null);
INSERT INTO `client` VALUES ('A16', 'B16', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.307999', '105.004660', null);
INSERT INTO `client` VALUES ('A17', 'B17', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.319002', '105.058601', null);
INSERT INTO `client` VALUES ('A18', 'B18', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.282707', '104.992831', null);
INSERT INTO `client` VALUES ('A19', 'B19', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.292324', '105.040756', null);
INSERT INTO `client` VALUES ('A20', 'B20', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.322750', '105.065604', null);
INSERT INTO `client` VALUES ('A21', 'B21', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.323136', '105.064536', null);
INSERT INTO `client` VALUES ('A22', 'B22', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.292133', '105.053747', null);
INSERT INTO `client` VALUES ('A23', 'B23', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.293289', '104.987967', null);
INSERT INTO `client` VALUES ('A24', 'B24', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.273286', '105.069695', null);
INSERT INTO `client` VALUES ('A25', 'B25', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.302283', '105.034330', null);
INSERT INTO `client` VALUES ('A26', 'B26', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.262250', '105.078188', null);
INSERT INTO `client` VALUES ('A27', 'B27', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.327379', '105.030703', null);
INSERT INTO `client` VALUES ('A28', 'B28', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.283390', '105.048925', null);
INSERT INTO `client` VALUES ('A29', 'B29', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.275516', '104.994776', null);
INSERT INTO `client` VALUES ('A30', 'B30', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.310048', '105.017502', null);
INSERT INTO `client` VALUES ('A31', 'B31', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.277813', '105.024226', null);
INSERT INTO `client` VALUES ('A32', 'B32', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.282740', '105.009897', null);
INSERT INTO `client` VALUES ('A33', 'B33', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.298843', '104.996354', null);
INSERT INTO `client` VALUES ('A34', 'B34', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.263607', '105.040560', null);
INSERT INTO `client` VALUES ('A35', 'B35', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.255920', '105.030315', null);
INSERT INTO `client` VALUES ('A36', 'B36', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.294006', '105.105951', null);
INSERT INTO `client` VALUES ('A37', 'B37', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.258359', '105.034546', null);
INSERT INTO `client` VALUES ('A38', 'B38', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.255193', '105.083162', null);
INSERT INTO `client` VALUES ('A39', 'B39', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.266376', '105.006017', null);
INSERT INTO `client` VALUES ('A40', 'B40', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.266138', '105.030655', null);
INSERT INTO `client` VALUES ('A41', 'B41', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.314236', '105.025763', null);
INSERT INTO `client` VALUES ('A42', 'B42', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.248202', '105.056407', null);
INSERT INTO `client` VALUES ('A43', 'B43', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.325693', '105.043197', null);
INSERT INTO `client` VALUES ('A44', 'B44', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.320022', '105.090004', null);
INSERT INTO `client` VALUES ('A45', 'B45', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.260938', '105.060283', null);
INSERT INTO `client` VALUES ('A46', 'B46', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.307438', '105.056454', null);
INSERT INTO `client` VALUES ('A47', 'B47', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.281871', '105.089876', null);
INSERT INTO `client` VALUES ('A48', 'B48', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.245411', '105.036243', null);
INSERT INTO `client` VALUES ('A49', 'B49', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.321432', '105.024522', null);
INSERT INTO `client` VALUES ('A50', 'B50', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.279343', '105.097792', null);
INSERT INTO `client` VALUES ('A51', 'B51', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.301967', '105.052204', null);
INSERT INTO `client` VALUES ('A52', 'B52', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.277791', '105.062872', null);
INSERT INTO `client` VALUES ('A53', 'B53', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.306893', '105.057379', null);
INSERT INTO `client` VALUES ('A54', 'B54', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.309729', '105.058088', null);
INSERT INTO `client` VALUES ('A55', 'B55', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.254792', '105.057192', null);
INSERT INTO `client` VALUES ('A56', 'B56', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.260671', '105.088203', null);
INSERT INTO `client` VALUES ('A57', 'B57', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.310489', '104.995600', null);
INSERT INTO `client` VALUES ('A58', 'B58', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.250871', '105.076951', null);
INSERT INTO `client` VALUES ('A59', 'B59', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.289196', '105.041964', null);
INSERT INTO `client` VALUES ('A60', 'B60', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.256525', '105.062244', null);
INSERT INTO `client` VALUES ('A61', 'B61', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.327580', '105.032375', null);
INSERT INTO `client` VALUES ('A62', 'B62', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.319539', '105.009514', null);
INSERT INTO `client` VALUES ('A63', 'B63', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.278416', '104.992397', null);
INSERT INTO `client` VALUES ('A64', 'B64', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.316103', '105.021355', null);
INSERT INTO `client` VALUES ('A65', 'B65', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.271661', '105.002149', null);
INSERT INTO `client` VALUES ('A66', 'B66', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.293367', '105.106306', null);
INSERT INTO `client` VALUES ('A67', 'B67', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.302304', '105.048517', null);
INSERT INTO `client` VALUES ('A68', 'B68', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.273563', '105.079368', null);
INSERT INTO `client` VALUES ('A69', 'B69', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.280099', '105.052500', null);
INSERT INTO `client` VALUES ('A70', 'B70', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.309377', '105.022773', null);
INSERT INTO `client` VALUES ('A71', 'B71', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.302242', '105.057496', null);
INSERT INTO `client` VALUES ('A72', 'B72', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.295906', '105.068859', null);
INSERT INTO `client` VALUES ('A73', 'B73', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.278318', '105.025559', null);
INSERT INTO `client` VALUES ('A74', 'B74', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.279915', '105.089856', null);
INSERT INTO `client` VALUES ('A75', 'B75', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.269597', '105.070275', null);
INSERT INTO `client` VALUES ('A76', 'B76', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.253783', '105.023419', null);
INSERT INTO `client` VALUES ('A77', 'B77', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.260970', '105.060589', null);
INSERT INTO `client` VALUES ('A78', 'B78', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.301463', '105.061634', null);
INSERT INTO `client` VALUES ('A79', 'B79', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.264651', '105.023686', null);
INSERT INTO `client` VALUES ('A80', 'B80', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.296898', '105.049325', null);
INSERT INTO `client` VALUES ('A81', 'B81', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.258527', '105.069078', null);
INSERT INTO `client` VALUES ('A82', 'B82', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.262135', '105.004158', null);
INSERT INTO `client` VALUES ('A83', 'B83', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.248767', '105.046886', null);
INSERT INTO `client` VALUES ('A84', 'B84', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.309105', '105.050746', null);
INSERT INTO `client` VALUES ('A85', 'B85', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.277232', '105.085339', null);
INSERT INTO `client` VALUES ('A86', 'B86', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.310987', '105.057448', null);
INSERT INTO `client` VALUES ('A87', 'B87', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.251800', '105.021254', null);
INSERT INTO `client` VALUES ('A88', 'B88', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.293767', '105.090650', null);
INSERT INTO `client` VALUES ('A89', 'B89', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.246052', '105.038723', null);
INSERT INTO `client` VALUES ('A90', 'B90', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.285073', '105.016467', null);
INSERT INTO `client` VALUES ('A91', 'B91', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.286132', '105.050554', null);
INSERT INTO `client` VALUES ('A92', 'B92', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.294001', '105.032484', null);
INSERT INTO `client` VALUES ('A93', 'B93', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.251551', '105.049924', null);
INSERT INTO `client` VALUES ('A94', 'B94', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.304921', '105.059029', null);
INSERT INTO `client` VALUES ('A95', 'B95', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.311128', '105.061135', null);
INSERT INTO `client` VALUES ('A96', 'B96', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.299962', '105.087069', null);
INSERT INTO `client` VALUES ('A97', 'B97', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.291038', '105.065383', null);
INSERT INTO `client` VALUES ('A98', 'B98', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.283886', '105.097654', null);
INSERT INTO `client` VALUES ('A99', 'B99', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.277771', '105.057841', null);
INSERT INTO `client` VALUES ('A100', 'B10', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '41.277704', '105.060339', null);
