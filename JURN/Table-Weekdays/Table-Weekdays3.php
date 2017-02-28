<!DOCTYPE html>
<html>
<head>
<title>Day of week</title>
</head>
<body>
<style>
    
    td{
        border: 1px solid black; }
    
</style>
<h1>Print timetable day of week</h1>
<br>
<table border="1">
	<?php		
		for($i = 8; $i < 17; $i++)
		{
			if($i == 8)
			{
				echo "<tr><td></td><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td></td>";
			}
			echo "<tr><td>" . $i . ":00</td><td></td><td></td><td></td><td></td><td></td></tr><br>";
		}
	?>
</table>

</body>

</html>