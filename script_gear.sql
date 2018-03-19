/*
Navicat MySQL Data Transfer

Source Server         : BD_WEB
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : gear

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-03-19 16:47:52
*/
CREATE DATABASE gear;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_servico
-- ----------------------------
DROP TABLE IF EXISTS `tb_servico`;
CREATE TABLE `tb_servico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_resumida` varchar(25) NOT NULL,
  `descricao_detalhada` varchar(250) DEFAULT NULL,
  `cnpj_empresa` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_servico
-- ----------------------------
INSERT INTO `tb_servico` VALUES ('1', 'TROCA DE ÓLEO', null, '00000000000000');
INSERT INTO `tb_servico` VALUES ('2', 'REVISÃO ELÉTRICA', null, '10720580000180');
INSERT INTO `tb_servico` VALUES ('3', 'ALINHAMENTO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat.', '00000000000000');

-- ----------------------------
-- Table structure for tb_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(5) NOT NULL,
  `senha` varchar(5) DEFAULT NULL,
  `perfil` varchar(9) NOT NULL,
  `ativo` tinyint(4) NOT NULL,
  `cnpj_empresa` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_usuario
-- ----------------------------
INSERT INTO `tb_usuario` VALUES ('1', 'adm', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('2', 'YSL', '123', 'ADMIN', '1', '10720580000180');
