<!DOCTYPE html>
<html>
<head>
<title>
Distance converter
</title>

</head>
<body>
    
<h1>Distance converter</h1>
</body>
</html>
    
<?php

include"form.php";

$value = (isset($_POST["distance"]) ? $_POST["distance"] : null);
$input = (isset($_POST["value"]) ? $_POST["value"] : null);

if ($value == "kilometers") {
    $answer = $input * 0.621371192;
    echo "<br>" . $input . " kilometers is " . round($answer, 2) . " miles";
}

elseif ($value == "miles") {
    $answer = $input * 1.609344;
    echo "<br>" . $input . " miles is " . round($answer, 2) . " kilometers";

}

?>