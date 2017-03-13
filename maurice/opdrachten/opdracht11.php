<?php
	echo "<br><br>";
	
	//prints out the table of ten
	class TableTen
	{
		//loops ten times echoing one through ten times ten
		function calculateTable()
		{
			for($i = 1; $i < 11; $i++)
			{
				echo $i . " * 10 = " . ($i * 10) . "<br>";
			}
		}
	}
	$tT = new TableTen;	
		
	$tT->calculateTable();
?>