<!DOCTYPE html>
<?php
//TODO Check username/email and give error if username/email already exists in DB
//TODO Create errormessages per type of error
//TODO Add error per errortype to the error[]
//TODO Check input on length string (strlen) before passing
//TODO Create functions when form is completely filled in and checked ok for:
      //TODO sending email with link with unique token for activation
      //TODO add everything to the database

  include 'head.inc.php';
  echo '<body>';

  //The registration form.
  echo '<form class="box registerbox" action="" method="POST">
          <h2>Register</h2>
          <p>Fill in all the fields please</p>
          <p>Username: <input type="text" name="userName" ' . setValue('userName') . 'placeholder="username"></p>
          <small>Password must be minimal 10 characters long and contain small letter a digit a capital and a special character.</small>
          <p>Password: <input type="text" name="pass1" placeholder="**********"></p>
          <p>Re-type password: <input type="password" name="pass2" placeholder="**********"></p>
          <p>First name: <input type="text" name="firstName" ' . setValue('firstName') . 'placeholder="first name"></p>
          <p>Last name: <input type="text" name="lastName" ' . setValue('lastName') . 'placeholder="last name"></p>
          <p>E-mail: <input type="email" name="email" ' . setValue('email') . 'placeholder="your.name@itvitaelearning.nl"></p>
          <input type="submit" name="submit" value="Submit">
          <input type="reset" name="reset" value="Reset">
        </form>';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $user = [];
    if(isset($_POST['submit'])) {
      //username
      if(isset($_POST['userName']) && strlen($_POST['userName']) >= 5) {
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
        $user['userName'] = $userName;
        //Go find out if the username already exists is the DB, if so send error, else nothing.
      } else {//Fill in username error
          array_push($errors, 'Fill in a username. Username is the name with which you login and should contain more then 5 characters.');
      }

      //password
      if(isset($_POST['pass1'])) {
        $p = $_POST['pass1'];
        if(isset($_POST{'pass2'})) {
          if ($p == $_POST['pass2']) {//Both filled in boxes match?
            if(passContains($p) && passLength($p)) {//Checking for correct mix and length
              //Hash the string
              $pass = passsword_hash($p, PASSWORD_BCRYPT, ['cost', 12]);
            }//else password not correct mix/length error
          }//else password boxes dont match error, retype, empty boxes
        }//second passwordbox not filled in error
      }//TODO Add error/warningreports in else

      //firstname
      if(isset($_POST['firstName']) && strlen($_POST['firstName']) >= 2) {
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $user['firstName'] = $firstName;
      } else {//Fill in firstname error
        array_push($errors, 'Fill in you\'re last name please.');
      }

      //lastname
      if(isset($_POST['lastName']) && strlen($_POST['lastName']) >= 2) {
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $user['lastName'] = $lastName;
      } else {//Fill in lastname error
        array_push($errors, 'Fill in you\'re last name please');
      }

      //email
      if(isset($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $user['email'] = $email;
      } else {//Fill in email error
        array_push($errors, 'Fill in a correct emailadres please');
      }

    } //submitbutton

    if(isset($_POST['reset'])) {
      unset($user);
      unset($errors);
    }
    echo '<hr>Errors ';
    print_r($errors);
    echo '<hr>User ';
    print_r($user);

  }//$_SERVER['REQUEST_METHOD'] End bracket

  //Create a value-element for the html-inputfield of the form with the value
  //the user has already submitted so that if they need to correct something they
  //do not have to fill in the complete form again.
  //$element is the element that was filled in, like userName/fisrtName
  function setValue($element) {
    if(isset($user[$element])) {
      $content = $user[$element];
      return 'value="' . $content . '" ';
    }
  }

  //If $pass is bigger then or 10 and smaller then 72(limit for BCRYPT) return true
  function passLength($pass) {
    if(strlen($pass) >= 10 && strlen($pass) < 72) {
      return true;
    }
  }

  //Check if $pass contains small letter capital digit and special char and returns true if so.
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
  echo '</body></html>';
?>
