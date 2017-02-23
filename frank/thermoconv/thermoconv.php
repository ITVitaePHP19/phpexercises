<!DOCTYPE html>
<html>
<head>
<title>
Thermometer converter
</title>

</head>
<body>
    
<h1>Thermometer converter</h1>
</body>
</html>
    
<?php

include"form.php";

$value = (isset($_POST["conversion"]) ? $_POST["conversion"] : null);
$input = (isset($_POST["value"]) ? $_POST["value"] : null);

if ($value == "celsius") {
    $answer = $input * 1.8 + 32;
    echo "<br>" . $input . " degrees Celsius is " . round($answer, 1) . " degrees Fahrenheit";
}

elseif ($value == "fahrenheit") {
    $answer = ($input - 32) / 1.8;
    echo "<br>" . $input . " degrees Fahrenheit is " . round($answer, 1) . " degrees Celsius";

}

?>