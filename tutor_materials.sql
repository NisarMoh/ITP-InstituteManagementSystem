--1

CREATE TABLE IF NOT EXISTS `tutor_materials` (
  `Staff_ID` varchar(80) NOT NULL,
  `FileName` varchar(80) NOT NULL,
  `SubjectID` int(80) NOT NULL,
  `materials_directory` varchar(80) NOT NULL,
  `Date_Time` datetime NOT NULL,
  PRIMARY KEY (`Staff_ID`,`FileName`),
  KEY `SubjectID` (`SubjectID`),
  KEY `Staff_ID` (`Staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--2

ALTER TABLE `tutor_materials` ADD FOREIGN KEY ( `Staff_ID` ) REFERENCES `institute_management_system`.`staff` (
`Staff_ID`
) ON DELETE CASCADE ON UPDATE CASCADE  ;

--3

ALTER TABLE `tutor_materials` ADD FOREIGN KEY ( `SubjectID` ) REFERENCES `institute_management_system`.`subject` (
`sub_id`
) ON DELETE CASCADE ON UPDATE CASCADE  ;