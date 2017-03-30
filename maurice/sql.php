<?php
	
	class SQL
	{
		function sqlStatement($statement)
		{
			require_once("config.php");
			
			$dbc = mysqli_connect("localhost", $configDatabaseUser, "", "php19") or die("Error connecting to MYSQL server");				
			
			$sql = $statement;

			$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
			
		}
	}
	$sQL = new SQL;
?>