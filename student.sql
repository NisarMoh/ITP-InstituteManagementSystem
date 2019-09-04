step one

CREATE TABLE student(
     
   id VARCHAR(7) NOT NULL PRIMARY KEY DEFAULT '0',
   username  varchar(50) NOT NULL,
   password  varchar(100) NOT NULL,
   firstname  varchar(100) NOT NULL,
   lastname  varchar(100) NOT NULL,
   gender varchar(50),
   age int(100) NOT NULL,
   contactno int(100) NOT NULL,
   email varchar(100) NOT NULL,
   address  varchar(250) NOT NULL
    );
	
step two	
	
CREATE TABLE student1
(
  StudentID INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);

last step
Now the trigger

DELIMITER $$
CREATE TRIGGER student1_student
BEFORE INSERT ON student
FOR EACH ROW
BEGIN
  INSERT INTO student1 VALUES (NULL);
  SET NEW.id= CONCAT('STD', LPAD(LAST_INSERT_ID(), 4, '0'));
END$$
DELIMITER ;