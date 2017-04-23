<?php

$user="root";
$password="";
$database="SQLtest";

mysql_connect(localhost,$user,$password) or die("Unable to connect to database");

@mysql_select_db($database) or die("Unable to select database");

/*
$query="CREATE TABLE contacts (
	id int(6) NOT NULL auto_increment,
	first varchar(15) NOT NULL,
	last varchar(15) NOT NULL,
	phone varchar(20) NOT NULL,
	mobile varchar(20) NOT NULL,
	fax varchar(20) NOT NULL,
	email varchar(30) NOT NULL,
	web varchar(30) NOT NULL,

	PRIMARY KEY (id),
	UNIQUE id (id),
	KEY id_2 (id))";
*/

$query = "INSERT INTO contacts VALUES ('','John','Smith','01234 567890','00112 334455','01234 567891','johnsmith@gowansnet.com','http://www.gowansnet.com')";

mysql_query($query);
mysql_close();

?>