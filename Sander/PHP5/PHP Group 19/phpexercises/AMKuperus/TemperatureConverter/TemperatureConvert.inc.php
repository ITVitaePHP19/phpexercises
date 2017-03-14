<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    $type = $_POST['type'];
    //Switch to check for calculation to Fahrenheit of Celsius.
    switch ($type) {
      case "c":
        $f = round((($input * 1.8) + 32), 1);
        echo "$input &deg;C = $f &deg;F";
        break;
      case "f":
        $c = round((($input - 32) / 1.8), 1);
        echo "$input &deg;F = $c &deg;C";
        break;
      default:
        echo "default";
    }
  }
?>
