<!DOCTYPE html>
<html>
<head>
<title>Multiplication table</title>
</head>
<body>
<style>
    
    td {
        border: 1px solid black; }
    
</style>
<h1>Multiplication table</h1>
</body>
</html>

<?php
echo "<table>";

        for ($num = 1; $num <=10; $num++){
            $sum = $num*10;

        echo'<tr><td>' . $num . " * 10 = " . $sum . '</td></tr>';

        }

echo "</table>";
?>
