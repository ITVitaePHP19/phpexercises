<?php

	$conn = mysqli_connect("localhost", "root", "trev", "logintest");
	
	if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
	}


?>