CREATE TABLE users (
  userId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  userName VARCHAR(255) NOT NULL UNIQUE,
  passCode CHAR(40) NOT NULL,
  firstName VARCHAR(255) NOT NULL,
  lastName VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  groupID VARCHAR(20) NOT NULL,
  role VARCHAR(20) NOT NULL,
  PRIMARY KEY (userID)
  );

CREATE TABLE activity (
  activity VARCHAR(255) NOT NULL,
  activityID INT UNSIGNED NOT NULL AUTO_INCREMENT,
  type VARCHAR(255) NULL,
  startDate DATE NOT NULL,
  endDate DATE NOT NULL,
  difficulty INT NOT NULL,
  satisfaction INT NOT NULL,
  notes VARCHAR(255) NULL,
  PRIMARY KEY (activityID)
);

CREATE TABLE role (
  role VARCHAR(20) NOT NULL,
  roleDescription VARCHAR(255) NOT NULL
);


# Rechten voor `itvitae`@`localhost`

GRANT SELECT, INSERT, UPDATE, DELETE ON *.* TO 'itvitae'@'localhost' IDENTIFIED BY PASSWORD '*69C739191FDD75AA6B6641465E26590D15055734';

GRANT ALL PRIVILEGES ON `sat`.* TO 'itvitae'@'localhost';
