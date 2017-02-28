CREATE TABLE users (
  userId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  userName VARCHAR(255) NOT NULL UNIQUE,
  passCode CHAR(40) NOT NULL,
  firstName VARCHAR(255) NOT NULL.
  lastName VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  group VARCHAR(255) NOT NULL,
  PRIMARY KEY (userID)
  );

CREATE TABLE activity (
  activity VARCHAR(255) NOT NULL,
  userID -->link vanuit users db
  startDate ##DATE,
  endDate ##DATE,
  timeSpent ##INT,
  pleasure ##INT,
  difficulty ##INT,
  notes VARCHAR(255) NULL,
);

group: PHP19/TEACHER/etc
