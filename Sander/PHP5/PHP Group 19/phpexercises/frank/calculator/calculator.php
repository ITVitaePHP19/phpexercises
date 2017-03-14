<!DOCTYPE html>
<html>
<head>
<title>
Calculator
</title>

</head>
<body>
    
<h1>Calculator</h1>
</body>
</html>
    
<?php
$sum = "";
include"form.php";
if(isset($_GET["number1"], $_GET["plus"], $_GET["number2"]) ){
    $sum = $_GET['number1'] + ($_GET["number2"]);
    echo "<br>The answer is " . $sum;
}

elseif(isset($_GET["number1"], $_GET["minus"], $_GET["number2"]) ){
    $sum = $_GET['number1'] - ($_GET["number2"]);
    echo "<br>The answer is " . $sum;
}

elseif(isset($_GET["number1"], $_GET["times"], $_GET["number2"]) ){
    $sum = $_GET['number1'] * ($_GET["number2"]);
    echo "<br>The answer is " . $sum;
}

elseif(isset($_GET["number1"], $_GET["divide"], $_GET["number2"]) ){
    $sum = $_GET['number1'] / ($_GET["number2"]);
    echo "<br>The answer is " . $sum;
}


?>