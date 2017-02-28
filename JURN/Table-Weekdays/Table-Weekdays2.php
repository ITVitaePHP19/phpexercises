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
</body>
</html>

<?php
$day = array('Monday','Tuesday','Wednesday','Thursday','Friday');
echo "<table>";
        echo "<th>";
        foreach ($day as $days){
            echo '<td>'. $days . '</td>';
        }
        echo "</th>";
        for ($time = 8; $time <=16; $time++){
            
            echo '<tr><td>' . number_format($time, 2) . '</td>';
        $empty = 0;
        while($empty <=4) {
            echo "<td></td>";
        $empty++;
        }
        }
echo "</tr></table>";
?>