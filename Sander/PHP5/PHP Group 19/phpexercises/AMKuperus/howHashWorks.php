<!--A AMKuperus script to test and play with the password_hash()
  and password_verify() funtions from php-->

<!DOCTYPE html>
<head>
  <title>Test Bcrypt hash</title>
</head>
<body>
  <h1>Testing hashfunctions</h1>
  <form method="POST">
  <p>Input text: <input type="text" name="text"></p>
  <p>Password: <input type="password" name="password"></p>
  <input type="submit" value="Submit">
  </form>
  <?php
    //Code for testing the hash function password_hash() with BCRYPT
    //$text is the text input
    //$password is the entered password
    //$cost is the difficukty for the BCRYPT hash, must be a array[]
    //$hash is the result from password_hash-function
    //$length is the length (strlen) of the hashed string.
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $text = $_POST['text'];
      $password = $_POST['password'];
      $cost = ['cost' => 12];
      //Max length of a pasword for the password_hash function is 72 characters
      //When this exceeds the limit the results do not match any longer.
      $hash = password_hash($text, PASSWORD_BCRYPT, $cost);
      $length = strlen($hash);
      echo "ORIGINAL: $text<br>\n";
      echo "HASH: $hash <br>\n";
      echo "HASH LENGTH: $length<br>\n";
      echo "PASSWORD: $password<br>\n";
      //Check if the input text is the same hash-result as the enetered password.
      if (password_verify($password, $hash) == true) {
        echo 'PASSWORD MATCHES';
      } else {
        echo 'HASH DOES NOT MATCH';
      }
    }
  ?>
</body>
</html>
