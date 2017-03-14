<!DOCTYPE html>
<head>
  <title>Currency Converter</title>
</head>
<body>
  <form action="currency.php" method="POST">
    <fieldset>
      <legend>A simple Currency Calculator</legend>
      <?php
      //Checking if POST holds data and if so do something.
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        calcResult();
      }

      //Converting Euro to Dollar at a set rate.
      //Making a 2-decimal value with round()
      function calcResult() {
        $in = $_POST['in'];
        $dollar = 1.073533;
        $result = round($in * $dollar, 2);
        echo "<p>&euro;$in is &dollar;$result</p>";
      }
      ?>
      &euro; <input type="number" name="in" step="0.01" min="0">
      <input type="submit" value="Convert">
      <input type="reset" name="reset" value="Reset">
    </fieldset>
  </form>
</body>
</html>
