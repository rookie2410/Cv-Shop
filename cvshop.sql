CREATE DATABASE IF NOT EXISTS `website`;
CREATE TABLE IF NOT EXISTS `website`.`users` (
    `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique user id, if somebody has same nickname.',
    `username` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'username needs no comment.',
    `password` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'password in SHA256.',
    `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Storing their mail-id',
   `creation_time` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='All users data.';
