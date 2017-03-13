<br>
<table border="1">
	<?php
	
		//echos the time by the hour from 8:00 to 16:00
		class TimeTable
		{
			//echos the time by the hour from 8:00 to 16:00
			function drawTT()
			{
				for($i = 8; $i < 17; $i++)
				{
					echo "<tr><td>" . $i . ":00</td></tr><br>";
				}
			}
		}
		$tT = new TimeTable;
		
		$tT->drawTT();
	?>
</table>