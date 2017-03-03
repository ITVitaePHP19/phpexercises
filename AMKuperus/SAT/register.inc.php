<form class='loginbox' action="" method="POST">
  <h2>Register</h2>
  <p>Fill in all the fields please</p>
  <p>Username: <input type="text" name="userName" placeholder="username"></p>
  <small>Password must be minimal 8 characters long and contain a mix of capitals/letters/number/chars.</small>
  <p>Password: <input type="text" name="pass1" placeholder="********"></p>
  <p>Re-type password: <input type="password" name="pass2" placeholder="********"></p>
  <p>First name: <input type="text" name="firstName" placeholder="first name"></p>
  <p>Last name: <input type="text" name="lastName" placeholder="last name"></p>
  <p>E-mail: <input type="email" name="email" placeholder="your.name@itvitaelearning.nl"></p>
  <p>Group: </p><!--TODO Write function to fill in this part with a selectbox-->
  <input type="submit" value="submit">
  <input type="reset" value="Reset">
</form>
<?php
//Include for user registration
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['userName'])) {
      $username = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    } //TODO make elsestatements and  a message when data is not correct or filled in, and then keep correct data in fields
    if(isset($_POST['pass1'] && isset($_POST['pass2']))) {
      $p = $_POST['pass1'];
      if ($p == $_POST['pass2']) {//Both filled in boxes match?
        if(passContains($p) && strlen($p) >= 8) {//Checking for correct mix and length
          //Hash the string
          $pass = passsword_hash($_POST['pass1'], PASSWORD_BCRYPT, ['cost', 8]);
        }//else password not coorect warning
      }//else password boxes dont match
    }//TODO Add error/warningreports in else

    if(isset($_POST['firstName'])) {
      $firstName = filter_input(INPUT_POST, 'fisrtName', FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['lastName'])) {
      $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['email'])) {
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    }
    //if(isset($_POST['group'])) {}
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
