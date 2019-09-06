CREATE DATABASE IF NOT EXISTS `institute_management_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `institute_management_system`;

CREATE TABLE `assessment1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `assessment` (
  `AssessmentID` char(7) NOT NULL,
  `Evaluation_type` char(4) NOT NULL,
  `Assessment_title` varchar(100) NOT NULL,
  `Subject` char(7) NOT NULL,
  `Classroom` char(7) NOT NULL,
  `DateTime` datetime NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `online_assessment` (
  `AssessmentID` char(7) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Review` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `written_assessment` (
  `AssessmentID` char(7) NOT NULL,
  `Marked_by` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `assessment`
  ADD PRIMARY KEY (`AssessmentID`);

ALTER TABLE `assessment1`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `online_assessment`
  ADD PRIMARY KEY (`AssessmentID`);

ALTER TABLE `written_assessment`
  ADD PRIMARY KEY (`AssessmentID`);

DELIMITER $$
CREATE TRIGGER `assessment1_ass` BEFORE INSERT ON `assessment` FOR EACH ROW BEGIN
  INSERT INTO assessment1 VALUES (NULL);
  SET NEW.AssessmentID = CONCAT('ASM', LPAD(LAST_INSERT_ID(), 4, '0'));
END
$$
DELIMITER ;

ALTER TABLE `assessment1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;