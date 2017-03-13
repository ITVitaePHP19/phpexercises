<br>
<table border="1">
	<?php
		//echos the time by the hour from 8:00 to 16:00 plus the working days of the week
		class TimeTableDays
		{
			
			//echos the time by the hour from 8:00 to 16:00 plus the working days of the week
			function drawTable()
			{
				for($i = 8; $i < 17; $i++)
				{
					if($i == 8)
					{
						echo "<tr><td></td><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td></td>";
					}
					echo "<tr><td>" . $i . ":00</td><td></td><td></td><td></td><td></td><td></td></tr><br>";
				}	
			}
		}
		$tTD = new TimeTableDays;
		
		$tTD->drawTable();
		
	?>
</table>