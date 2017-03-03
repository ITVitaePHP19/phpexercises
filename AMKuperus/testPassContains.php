<!--A AMKuperus script to test new function to check if a password contains correct input -->

<!DOCTYPE html>
<head>
  <title>Test passContains()</title>
</head>
<body>
  <h1>Testing passContains()</h1>
  <form method="POST">
    <p>Checks if text input contains atleast a small letter a capital letter a digit and a special char and is atleast 8 long string</p>
  <p>Input text: <input type="text" name="text"></p>
  <input type="submit" value="Submit">
  </form>
  <?php
    if(isset($_POST['text'])) {
      if(passContains($_POST['text']) == true && strlen($_POST['text']) >= 8) {
        echo "correct";
      } else {
        echo "no!";
      }
    }

    function passContains($pass) {
      //Check for small letters a-z
      $letter = preg_match('/[a-z]/', $pass);
      //Check for capital letters A-Z
      $capital = preg_match('/[A-Z]/', $pass);
      //Check for digits \d
      $digit = preg_match('/\d/', $pass);
      //Check for special characters ^a-zA-Z\d (if there is anything else then a-z/A-Z/\d)
      $special = preg_match('/[^a-zA-Z\d]/', $pass);
      if($letter && $capital && $digit && $special) {
        return true;
      }
    }
  ?>
</body>
</html>
