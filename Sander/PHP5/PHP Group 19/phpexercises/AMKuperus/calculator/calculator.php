<!DOCTYPE html>
<head>
  <title>Calculator</title>
</head>
<body>
  <form action="calculator.php" method="POST">
    <?php
      include 'calculator.inc.php';
    ?>
    <br>
    <input type="submit" value="1" name="1">
    <input type="submit" value="2" name="2">
    <input type="submit" value="3" name="3">
    <input type="submit" value="C" name="c">
    <br>
    <input type="submit" value="4" name="4">
    <input type="submit" value="5" name="5">
    <input type="submit" value="6" name="6">
    <input type="submit" value="+" name="+">
    <br>
    <input type="submit" value="7" name="7">
    <input type="submit" value="8" name="8">
    <input type="submit" value="9" name="9">
    <input type="submit" value="-" name="-">
    <br>
    <input type="submit" value="0" name="0">
    <input type="submit" value="/" name="divide">
    <input type="submit" value="*" name="times">
    <input type="submit" value="=" name="=">
  </form>
</body>
</html>
