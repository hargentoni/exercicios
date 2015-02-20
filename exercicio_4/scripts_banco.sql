
-- Comando para criar um banco de dados
CREATE DATABASE IF NOT EXISTS `tutsup` CHARACTER SET utf8;

-- Script para criar a tabela "users" e seus campos no banco de dados
CREATE TABLE IF NOT EXISTS `users` ( -- cria a tabela users, caso aquele nome não exista
    `user_id` INT(11) NOT NULL AUTO_INCREMENT, -- cria o campo user_id do tipo inteiro onde o campo não será nulo e sempre vai incremnetar, conforme for criado os usuários
    `user` VARCHAR(255) COLLATE utf8_bin NOT NULL, -- criar o campo user do tipo string colando a coleção de caracteres utf8, não pode ser nulo
    `user_password` VARCHAR(255) COLLATE utf8_bin NOT NULL, 
    `user_name` VARCHAR(255) COLLATE utf8_bin NOT NULL,
    `user_session_id` VARCHAR(255) COLLATE utf8_bin NOT NULL,
    `user_permissions` LONGTEXT COLLATE utf8_bin,
    PRIMARY KEY (`user_id`) -- A chave primaria da tabela é user_id
    ) ENGINE=MYISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Scrip para criar a tabela "noticias"
CREATE TABLE IF NOT EXISTS `noticias`(
`noticias_id` INT(11) NOT NULL AUTO_INCREMENT,
`noticias_data` DATETIME DEFAULT '0000-00-00 00:00:00',
`noticias_autoR` VARCHAR(255) COLLATE utf8_bin NOT NULL,
`noticias_titulo` VARCHAR(255) COLLATE utf8_bin NOT NULL,
`noticias_texto` TEXT,
`noticias_imagem` VARCHAR (255),
PRIMARY KEY (`noticias_key`)
) ENGINE=MYISAM CHARSET=utf8_bin;

INSERT INTO `tutsup`.`users` (
  `user_id`,
  `user`,
  `user_password`,
  `user_name`,
  `user_session_id`,
  `user_permissions`
) 
VALUES
  (
    NULL,
    'Admin',
    '$2a$08$2sGQinTFe3GF/YqAYQ66auL9o6HeFCQryHdqUDvuEVN0J1vdhimii',
    'Admin',
    'ljfp99gvqm2hg2bj6jjpu4ol64',
	'a:2:{i:0;s:13:\"user-register\";i:1;s:18:\"gerenciar-noticias\";}'
  ) ;