<!DOCTYPE html>
<head>
  <title>StickHeightProgram</title>
</head>
<body>
  <h1>Stick Height Program</h1>
  <form action="StickHeight.php" method="POST">
    <p>Person's height: <input type="number" name="height" required> cm</p>
    <p>X-Country Classic<input type="radio" name="type" value="XC-C" required></p>
    <p>X-Country Freestyle<input type="radio" name="type" value="XC-F"></p>
    <p>Nordic Walking<input type="radio" name="type" value="NW"></p>
    <input type="submit" value="Calculate">
    <input type="reset" value="reset">
  </form>
  <?php
    include 'StickHeight.inc.php';
  ?>
</body>
</html>
