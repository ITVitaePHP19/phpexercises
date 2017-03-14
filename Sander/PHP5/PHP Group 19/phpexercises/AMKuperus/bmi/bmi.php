<!DOCTYPE html>
  <head>
    <title> Body Mass Index Calculator</title>
  </head>
  <body>
    <h1>Body Mass Index Calculator</h1>
    <form action="bmi.php" method="POST">
      <fieldset>
        <legend>Calculate Body Mass Index</legend>
          <?php
            //Checking if there is something in POST adn if so do something with
            //the data in POST
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
              calcBmi();
            }

            //calcBmi takes the Height and Weight entered by the user from POST
            //It shows the entered data (Height and Weight) and the BMI-value
            //calculated as follows: weight / (height * height)
            //BMI is a 1-decimal number, which is accomplished by using round()
            function calcBmi() {
              $h = $_POST['h'];
              $w = $_POST['w'];
              $bmi = round($w / ($h * $h), 1);
              echo '<p>Calculated BMI</p>
                    <p>Height:' . $h . 'm</p>
                    <p>Weight:' . $w . 'kg</p>
                    <p>BMI:' . $bmi . '</p>';
            }
          ?>
      Height (m): <input type="number" name="h" step="0.01" min="0">
      Weight (kg): <input type="number" name="w" step="0.01" min="0">
      <input type="submit" value="Calculate">
    </fieldset>
    </form>
  </body>
</html>
