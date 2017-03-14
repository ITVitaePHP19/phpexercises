<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = $_POST['height'];
    $type = $_POST['type'];
    switch($type){
      case "XC-C":
        $stick = round(($height * 0.9), 2);
        echo "The ideal length for X-Country Classic Sticks is $stick cm";
        break;
      case "XC-F":
        $stick = round(($height * 0.85), 2);
        echo "The ideal length for X-Country Freestyle Sticks is $stick cm";
        break;
      case "NW":
        $stick = round(($height * 0.68), 2);
        echo "The ideal length for Nordic Walking Sticks is $stick cm";
        break;
      default:
        echo "Oops something is going wrong.";
    }
  }
?>
