CREATE DATABASE `sudorooms`;

/* Rooms table */
CREATE TABLE  `sudorooms`.`room` (
`RoomNum` VARCHAR( 3 ) NOT NULL PRIMARY KEY ,
`isFree` ENUM( 'yes', 'no' ) NOT NULL DEFAULT 'yes',
`servicereq` ENUM( 'yes', 'no' , 'NA' ) NOT NULL DEFAULT 'NA',
`isOpen` ENUM( 'yes', 'no' ) NOT NULL DEFAULT 'no',
`staffaccess` ENUM( 'yes', 'no' ) NOT NULL DEFAULT 'yes'
) ENGINE = MYISAM COMMENT =  'Storing the room information';

/* Customer table */
CREATE TABLE  `sudorooms`.`customer` (
`CId` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`Name` VARCHAR( 100 ) NOT NULL ,
`CheckIn` TIMESTAMP( 6 ) DEFAULT 0,
`RoomAllotted` VARCHAR( 3 ) NOT NULL,
`CheckOut` TIMESTAMP( 6 ) DEFAULT 0,
FOREIGN KEY (`RoomAllotted`) REFERENCES `sudorooms`.`room`(`RoomNum`)
) ENGINE = MYISAM COMMENT =  'Storing the customer information';
ALTER TABLE `customer` ADD `Mobile` VARCHAR(10) NULL DEFAULT NULL AFTER `CheckOut`;
ALTER TABLE `customer` ADD `AccessKey` VARCHAR(10) NULL DEFAULT NULL AFTER `Mobile`;

INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('01','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('02','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('03','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('04','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('05','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('06','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('07','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('08','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('09','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('010','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('11','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('12','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('13','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('14','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('15','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('16','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('17','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('18','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('19','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('110','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('21','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('22','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('23','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('24','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('25','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('26','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('27','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('28','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('29','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('210','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('31','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('32','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('33','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('34','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('35','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('36','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('37','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('38','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('39','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('310','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('41','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('42','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('43','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('44','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('45','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('46','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('47','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('48','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('49','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('410','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('51','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('52','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('53','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('54','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('55','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('56','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('57','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('58','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('59','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('510','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('61','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('62','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('63','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('64','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('65','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('66','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('67','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('68','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('69','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('610','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('71','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('72','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('73','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('74','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('75','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('76','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('77','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('78','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('79','yes', 'NA', 'no', 'yes');
INSERT INTO `sudorooms`.`room`(`RoomNum`, `isFree`, `servicereq`, `isOpen`, `staffaccess`) VALUES('710','yes', 'NA', 'no', 'yes');
