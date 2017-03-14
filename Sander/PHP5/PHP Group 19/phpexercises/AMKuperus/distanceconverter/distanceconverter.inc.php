<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['kmh']) {
      echo toMph($_POST['kmh']);
    }
    if($_POST['mph']) {
      echo toKmh($_POST['mph']);
    }
  }

  function toMph($kmh) {
    $kmh = $_POST['kmh'];
    $mph = round($kmh * 0.621371192, 1);
    return "<p>$kmh KM/h = $mph MP/h</p>";
  }

  function toKmh($mph) {
    $mph = $_POST['mph'];
    $kmh = round($mph / 0.621371192, 1);
    return "<p>$mph MP/h = $kmh KM/h</p>";
  }
?>
