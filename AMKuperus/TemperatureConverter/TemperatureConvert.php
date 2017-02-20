<!DOCTYPE html>
<head>
  <title>TemperatureConvert</title>
</head>
<body>
  <h1>Temperature Convertor</h1>
  <form action="TemperatureConvert.php" method="POST">
    <input type="number" name="input" required><br>
    Celsius <input type="radio" name="type" value="c" required>
    Fahrenheit <input type="radio" name="type" value="f"><br>
    <input type="submit" value="Convert">
  </form>
  <?php
    include 'TemperatureConvert.inc.php';
  ?>
</body>
</html>
