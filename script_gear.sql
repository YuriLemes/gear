/*
Navicat MySQL Data Transfer

Source Server         : BD_WEB
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : gear

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-03-27 16:36:55
*/

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_servico
-- ----------------------------
INSERT INTO `tb_servico` VALUES ('1', 'TROCA DE ÓLEO', null, '10720580000180');
INSERT INTO `tb_servico` VALUES ('2', 'REVISÃO ELÉTRICA', null, '10720580000180');
INSERT INTO `tb_servico` VALUES ('3', 'ALINHAMENTO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat.', '10720580000180');
INSERT INTO `tb_servico` VALUES ('4', 'BALANCEAMENTO', 'Balançeamentos de carros, caminhonetes e tratores', '01234567890123');

-- ----------------------------
-- Table structure for tb_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(5) DEFAULT NULL,
  `perfil` enum('ADMIN', 'USUARIO') NOT NULL,
  `ativo` tinyint(4) NOT NULL,
  `cnpj_empresa` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_usuario
-- ----------------------------
INSERT INTO `tb_usuario` VALUES ('1', 'Supervisor', 'admin', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('2', 'Yuri Lemes', 'yuri', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('3', 'João da Silva', 'joao', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('4', 'Maria das Dores', 'maria', '123', 'USUARIO', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('5', 'Elieber', 'elieber', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('6', 'Gabriel', 'gabriel', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('7', 'Izabela Andrade', 'izabela', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('8', 'Guthyerres', 'guthyer', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('9', 'Supervisor', 'admin', '1234', 'ADMIN', '1', '01234567890123');
