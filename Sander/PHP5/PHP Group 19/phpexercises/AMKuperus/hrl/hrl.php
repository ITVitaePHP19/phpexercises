<!DOCTYPE html>
<head>
  <title>Heart Rate Limit Calculator</title>
</head>
<body>
  <form action="hrl.php" method="POST">
    <fieldset>
      <legend>Calculate Heart Rate Limits</legend>
      <?php
      //Checking if POST holds data, if so doing something with it.
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        calcHeartRateLimit();
      }

      //Calculates the Heart Rate Limit upper-limit and lower-limit by taking
      //220 - age and then * with 0.85 for upper and 0.65 for lower limit.
      function calcHeartRateLimit() {
        $age = $_POST['age'];
        $c = 220 - $age;
        $upperLimit = $c * 0.85;
        $lowerLimit = $c * 0.65;
        echo '<p>Upper Limit: ' . $upperLimit . '</p>';
        echo '<p>Lower Limit: ' . $lowerLimit . '</p>';
      }
      ?>
      Age: <input type="number" name="age" step="1" min="0">
      <input type="submit" value="Calculate">
    </fieldset>
</body>
</html>
