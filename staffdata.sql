
--first step  excuting in the sql ternimal
CREATE TABLE staff1
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);
--2nd step
CREATE TABLE 'staff'
(
  'Staff_ID' VARCHAR(7) NOT NULL PRIMARY KEY DEFAULT '0', 
  `NIC` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Qualification` varchar(250) NOT NULL,
  `Salary` int(10) DEFAULT NULL,
  `Ethnic` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Civil_Status` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Phone_Number` int(20) NOT NULL,
  `Administrator` varchar(6) DEFAULT NULL,
  `Tutor` varchar(6) DEFAULT NULL,
  `Cashier` varchar(6) DEFAULT NULL,

  UNIQUE KEY ( NIC )
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
);


--Now  3rd the trigger step

DELIMITER $$
CREATE TRIGGER staff1_staff
BEFORE INSERT ON staff
FOR EACH ROW
BEGIN
  INSERT INTO staff1 VALUES (NULL);
  SET NEW.Staff_ID = CONCAT('STF', LPAD(LAST_INSERT_ID(), 4, '0'));
END$$
DELIMITER ;