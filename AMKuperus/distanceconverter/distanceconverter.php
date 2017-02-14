<!DOCTYPE html>
<head>
  <title>Distance Converter</title>
</head>
<body>
  <form action="distanceconverter.php" method="POST">
    <fieldset>
      <legend>Distance Convertor</legend>
      <p>KM/h: <input type="number" name="kmh"></p>
      <p>MPH: <input type="number" name="mph"></p>
      <input type="submit" value="Convert" name="convert">
      <input type="reset" value="Reset">
    </fieldset>
  </form>
  <?php
    include 'distanceconverter.inc.php';
  ?>
</body>
</html>
