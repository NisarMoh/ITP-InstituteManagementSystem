--Forum Category Table
CREATE TABLE `forum_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) NOT NULL,
  `category_description` varchar(128) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name_UNIQUE` (`category_name`),
  UNIQUE KEY `category_id_UNIQUE` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

--Forum Topic Table
CREATE TABLE `forum_topic` (
  `topic_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `topic_text` varchar(256) NOT NULL,
  `topic_date` date NOT NULL DEFAULT (curdate()),
  `topic_time` time NOT NULL DEFAULT (curtime()),
  `topic_op_id` varchar(8) NOT NULL,
  `topic_category_id` int(11) NOT NULL,
  `topic_description` varchar(4096) DEFAULT NULL,
  `topic_visit_counter` bigint(20) DEFAULT '0',
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_id_UNIQUE` (`topic_id`),
  KEY `topic_category_id_idx` (`topic_category_id`),
  CONSTRAINT `topic_category_id` FOREIGN KEY (`topic_category_id`) REFERENCES `forum_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

--Forum Post(Comments) Table
CREATE TABLE `forum_post` (
  `post_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_text` varchar(2048) NOT NULL,
  `post_date` date NOT NULL DEFAULT (curdate()),
  `post_time` time NOT NULL DEFAULT (curtime()),
  `post_poster_id` varchar(8) NOT NULL,
  `post_topic_id` bigint(20) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `post_id_UNIQUE` (`post_id`),
  KEY `post_topic_id_fk` (`post_topic_id`),
  CONSTRAINT `post_topic_id_fk` FOREIGN KEY (`post_topic_id`) REFERENCES `forum_topic` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci