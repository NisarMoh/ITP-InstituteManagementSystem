--1

CREATE TABLE IF NOT EXISTS `student_assignment` (
  `StudentID` varchar(80) NOT NULL,
  `FileName` varchar(80) NOT NULL,
  `SubjectID` int(80) NOT NULL,
  `assignment_directory` varchar(80) NOT NULL,
  `Date_Time` datetime NOT NULL,
  PRIMARY KEY (`StudentID`,`FileName`),
  KEY `SubjectID` (`SubjectID`),
  KEY `StudentID` (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--2
ALTER TABLE `student_assignment` ADD FOREIGN KEY ( `StudentID` ) REFERENCES `oop1`.`student` (
`id`
) ON DELETE CASCADE ON UPDATE CASCADE  ;

--3
ALTER TABLE `student_assignment` ADD FOREIGN KEY ( `SubjectID` ) REFERENCES `oop1`.`subject` (
`sub_id`
) ON DELETE CASCADE ON UPDATE CASCADE  ;
