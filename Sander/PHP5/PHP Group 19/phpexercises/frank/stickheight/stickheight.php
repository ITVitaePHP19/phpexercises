<!DOCTYPE html>
<html>
<head>
<title>
Stick height calculation
</title>

</head>
<body>
    
<h1>Stick height calculation</h1>
</body>
</html>
    
<?php


$conv = (isset($_POST["conversion"]) ? $_POST["conversion"] : null);
$input = (isset($_POST["value"]) ? $_POST["value"] : null);

if ($input == null){
    include "form.php";
}

elseif ($conv == "classical") {
    $answer = $input * 0.85;
    echo "<br>Height of the stick should be about " . round($answer, 1) . " centimeters";
}

elseif ($conv == "freestyle") {
    $answer = $input * 0.9;
    echo "<br>Height of the stick should be about " . round($answer, 1) . " centimeters";
}

elseif ($conv == "nordic") {
    $answer = $input * 0.68;
    echo "<br>Height of the stick should be about " . round($answer, 1) . " centimeters";
}
if ($input != null){
    echo '<a href="stickheight.php"><br><br>Back to form</a>';
}

?>