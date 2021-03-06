/*
Navicat MySQL Data Transfer

Source Server         : BD_WEB
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : gear

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-04-17 18:03:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_cliente
-- ----------------------------
DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE `tb_cliente` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `data_cadastro` date NOT NULL,
  `data_suspenso` date DEFAULT NULL,
  `nome` varchar(150) NOT NULL,
  `razao_social` varchar(150) DEFAULT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `ie` varchar(14) NOT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero_endereco` varchar(5) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `setor` varchar(100) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `telefone_fixo` varchar(11) DEFAULT NULL,
  `telefone_celular` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `observacoes` varchar(250) DEFAULT NULL,
  `cnpj_empresa` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_cliente
-- ----------------------------
INSERT INTO `tb_cliente` VALUES ('1', '2018-04-11', null, 'JOAO NASCIMENTO', 'JOAO NASCIMENTO LTDA ME', '70226468135', 'ISENTO', 'RUA DOS EUCALIPTOS', 'S/N', 'QD.55 LT.23', 'ANÁPOLIS', 'GO', 'CENTRO', '75000000', '6233333333', '6299999999', 'contato@contato.com', 'TESTE', '10720580000180');
INSERT INTO `tb_cliente` VALUES ('2', '2018-04-14', null, 'ZECA BATISTA', 'ZECA BATISTA EIRELLI ME', '99989999000191', 'ISENTO', 'RUA DAS MANGUEIRAS', '55', 'BLOCO E, APT.105', 'ANÁPOLIS', 'GO', 'CENTRO', '75000000', '6244444444', '6288888888', 'contato@conosco.com', 'TESTE', '01234567890123');
INSERT INTO `tb_cliente` VALUES ('3', '2018-04-11', null, 'ALFA EMPREENDIMENTOS', 'ALFA EMPREENDIMENTOS LTDA', '99987999000191', 'ISENTO', 'AV. BRASIL', '33', '', 'ANÁPOLIS', 'GO', 'CENTRO', '75000000', '6244443444', '6288899888', 'contato@alfaempreendimentos.com', 'TESTE', '01234567890123');
INSERT INTO `tb_cliente` VALUES ('4', '2018-03-12', null, 'BETA EMPREENDIMENTOS', 'BETA EMPREENDIMENTOS LTDA', '10987999000191', 'ISENTO', 'AV. BRASIL', '55', '', 'ANÁPOLIS', 'GO', 'CENTRO', '75000000', '6233333444', '6277799888', 'contato@betaempreendimentos.com', 'TESTE', '10720580000180');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_servico
-- ----------------------------
INSERT INTO `tb_servico` VALUES ('1', 'TROCA DE ÓLEO', null, '10720580000180');
INSERT INTO `tb_servico` VALUES ('3', 'ALINHAMENTO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n		consequat.', '10720580000180');
INSERT INTO `tb_servico` VALUES ('4', 'BALANCEAMENTO', 'Balançeamentos de carros, caminhonetes e tratores...', '01234567890123');
INSERT INTO `tb_servico` VALUES ('5', 'REVISÃO ELÉTRICA', 'Realizar revisão elétrica', '10720580000180');
INSERT INTO `tb_servico` VALUES ('6', 'pneu VELHO', '', '01234567890123');
INSERT INTO `tb_servico` VALUES ('9', 'asdfasdf', 'asdfasdf', '10720580000180');
INSERT INTO `tb_servico` VALUES ('10', 'Troca da correia dentada', 'Troca de correia dentada do motor', '01234567890123');
INSERT INTO `tb_servico` VALUES ('11', 'Polimento', 'polimento cristalizado', '01234567890123');

-- ----------------------------
-- Table structure for tb_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(5) DEFAULT NULL,
  `perfil` enum('ADMIN','USUARIO') NOT NULL,
  `ativo` tinyint(4) NOT NULL,
  `cnpj_empresa` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_usuario
-- ----------------------------
INSERT INTO `tb_usuario` VALUES ('1', 'Supervisor', 'admin', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('2', 'Yuri Lemes', 'yuri', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('3', 'João da Silva costa', 'joao', 'yyyy', 'USUARIO', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('4', 'Maria das Dores', 'maria', '123', 'USUARIO', '0', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('5', 'Elieber', 'elieber', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('6', 'Gabriel', 'gabriel', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('7', 'Izabela Andrade', 'izabela', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('8', 'Guthyerres', 'guthyer', '123', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('9', 'Supervisor', 'admin', '1234', 'ADMIN', '1', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('10', 'Seu Zé', 'seuze', '123', 'ADMIN', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('11', 'Supervisor', 'sup', 'ixx0', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('12', 'gear v1', 'gear', '123', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('13', 'asdf', 'asdf', '123', 'USUARIO', '1', '10720580000180');
INSERT INTO `tb_usuario` VALUES ('14', '123456', '123456', '123', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('15', '123456', '123456', '123', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('16', '123456', '123456', '123', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('17', 'Flandre', 'flandre', '123', 'ADMIN', '0', '01234567890123');
INSERT INTO `tb_usuario` VALUES ('18', 'tir', 'tir', '123', 'ADMIN', '1', '44444444444444');
INSERT INTO `tb_usuario` VALUES ('19', 'rodrigo', 'rodrigo', '123', 'ADMIN', '1', '00100100100100');
