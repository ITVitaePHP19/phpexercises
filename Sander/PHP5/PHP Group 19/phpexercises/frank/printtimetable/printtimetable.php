<!DOCTYPE html>
<html>
<head>
<title>Print timetable</title>
</head>
<body>
<style>
    
    td {
        border: 1px solid black; }
    
</style>
<h1>Print timetable</h1>
</body>
</html>

<?php
echo "<table>";

        for ($time = 8; $time <=16; $time++){

        echo '<tr><td>' . number_format($time, 2) . '</td></tr>';

        }

echo "</table>";
?>
