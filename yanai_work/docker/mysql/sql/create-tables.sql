CREATE TABLE `question_table`
(
  `id`       INT(10) AUTO_INCREMENT,
  `name`     VARCHAR(20) NOT NULL,
  `email`    VARCHAR(30) NOT NULL,
  `message`  VARCHAR(200) NOT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_bin;