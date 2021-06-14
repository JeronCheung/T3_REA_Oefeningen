USE master
DROP DATABASE IF EXISTS SportAcademie;
GO
CREATE DATABASE SportAcademie;
GO
USE SportAcademie;

CREATE TABLE [User]
(
	UserName	VARCHAR(30),
	[Password]	VARCHAR(20),
	StudentNr	VARCHAR(10)
);

CREATE TABLE Activity
(
	[Name]		VARCHAR(40),
	[Start]		DATETIME,
	[End]		DATETIME,
	[Location]	VARCHAR(40)	
);

ALTER TABLE [User]
ADD CONSTRAINT Unq_UserName
UNIQUE ([UserName]);

ALTER TABLE [User]
ADD CONSTRAINT Unq_StudentNr
UNIQUE (StudentNr);

INSERT INTO [User]
VALUES
('ElieneHolla','welkom123','44662246'),
('PhilipBoekholt','welkom123','56109212'),
('SelamiMeulenbroeks','welkom123','89084537'),
('SemiraTrines','welkom123','28868799'),
('ChristianKroos','welkom123','86217996'),
('DoedeSmeulders','welkom123','94192111'),
('SiebrenBreukers','welkom123','93561432'),
('JoukeWalhout','welkom123','44303878'),
('HosseinWaterman','welkom123','99685607'),
('LiliaVanAntwerpen','welkom123','38560634');

INSERT INTO Activity
VALUES
('Volleybal toernooi','20210603 10:00','20210603 17:00','Binnenplaats Vlijmense weg'),
('Panna toernooi','20210604 13:00','20210604 16:00','Pannaveld'),
('Tennis toernooi','20210605 09:00','20210605 17:00','Tennispark BTC De Pettelaer');

