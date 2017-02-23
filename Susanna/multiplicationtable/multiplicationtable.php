<DOCTYPE! HTML>
<html>
<head><title>10 Multiplication table</title></head>




<body>
<H1>Multiplication table of 10</H1>

<?php
$factor = 10;

$rows = 10;
echo "<table border=\"1\">";

for ($r =1; $r <= $rows; $r++){

    echo('<tr>');

	echo('<td>'.$r.'*'.$factor.'='.$r*$factor.'</td>');

    echo('</tr>');

}

echo("</table>");
?>
</body>


</html>


