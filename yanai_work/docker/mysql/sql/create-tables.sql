CREATE TABLE `question_table`
(
  `id`       INT(10) AUTO_INCREMENT,
  `name`     VARCHAR(30) NOT NULL,
  `email`    VARCHAR(100) NOT NULL,
  `message`  VARCHAR(500) NOT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;