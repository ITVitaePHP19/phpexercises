<!DOCTYPE html>
<html>
<head>
<title>
BMI-calculator
</title>

</head>
<body>
    
<h1>BMI-calculator</h1>
</body>
</html>
    
<?php
$bmi = "";
if(isset($_GET["weight"], $_GET["height"]) ){
    $bmi = $_GET['weight'] / (($_GET['height'] * $_GET['height']) / 10000);
    echo "Body mass index is " . number_format($bmi, 1);

}

if ( $bmi == "") {
    include"form.php";
}
elseif ($bmi < 18.5 ) {
    echo "<br><b>Je hebt ondergewicht.</b>";
}
   
elseif ($bmi >= 18.5 && $bmi < 25.0) {
    echo "<br><b>Je hebt een gezond gewicht.</b>";
}
elseif ($bmi >= 25.0 && $bmi < 30) {
    echo "<br><b>Je hebt overgewicht.</b>";
}
elseif ($bmi >= 30 && $bmi < 40) {
    echo "<br><b>Je hebt obesitas.</b>";
}
elseif ($bmi >= 40) {
    echo "<br><b>Je hebt ernstige obesitas.</b>";
}

if ($bmi != null ) {
echo '<a href="bmi.php"><br><br>Back to form</a>';
}

?>