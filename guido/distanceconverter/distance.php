<!DOCTYPE html>
<html>
<head>
<title>Distance converter</title>
</head>
<body>
<h1><p class="header">Distance Converter</p></h1><br>
<?php
include 'convert.php';
?>
      <form action="convert.php" method="POST">
      <input type="number" name="in" autocomplete="off" autofocus><br> <br>
      <input type="radio" name="distance" value="kilometers"> Kilometers<br>
      <input type="radio" name="distance" value="miles"> Miles<br>
      <input type="submit" name="convert" value="convert">
      <input type="reset" name="reset" value="reset"><br>
      </form>

</body>
</html>
