<!DOCTYPE html>
<?php
//TODO Check username/email and give error if username/email already exists in DB
//TODO Create functions when form is completely filled in and checked ok for:
      //TODO sending email with link with unique token for activation
      //TODO add everything to the database

  include 'head.inc.php';
  echo '<body>';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = [];
    $errors = [];
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
              $pass = password_hash($p, PASSWORD_BCRYPT, ['cost', 12]);
              $user['pass'] = $pass;
            } else {//else password not correct mix/length error
              if(!passContains($p)) {
                array_push($errors, 'Password must contain atleast a digit a small letter a capital letter and a scpecial character. Please try again.');
              }
              if(!passLength($p)) {
                array_push($errors, 'Password must be minimal of 10 characters and maximal of 72 characters.');
              }
            }
          } else {//else password boxes dont match error, retype, empty boxes
              array_push($errors, 'Passwords do not match, try again please.');
          }
        }
      }

      //firstname
      if(isset($_POST['firstName']) && strlen($_POST['firstName']) >= 2 && preg_match('/[a-zA-Z]/', $_POST['firstName'])) {
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $user['firstName'] = $firstName;
      } else {//Fill in firstname error
        if (empty($_POST['firstName'])) {
          array_push($errors, 'Fill in your first name please.');
        } elseif (!preg_match('/[a-zA-Z]/', $_POST['firstName'])) {
          array_push($errors, 'Fill in a correct first name please.');
        }
      }

      //lastname
      if(isset($_POST['lastName']) && strlen($_POST['lastName']) >= 2 && preg_match('/[a-zA-Z]/', $_POST['lastName'])) {
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $user['lastName'] = $lastName;
      } else {//Fill in lastname error
        if (empty($_POST['lastName'])) {
          array_push($errors, 'Fill in your last name please.');
        } elseif (!preg_match('/[a-zA-Z]/', $_POST['lastName'])) {
          array_push($errors, 'Fill in a correct last name please.');
        }
      }

      //email
      //6 is the minimum length for a possible emailadress
      if(isset($_POST['email']) && strlen($_POST['email']) >= 6) {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $user['email'] = $email;
      } else {//Fill in email error
        //if emailadress is empty
        if (empty($_POST['email'])){
          array_push($errors, 'Fill in a email-adress please.');
        } elseif (strlen($_POST['email'])) {
          array_push($errors, 'Fill in a correct emailadres please.');
        }
      }

    } //submitbutton

    if(isset($_POST['reset'])) {
      unset($user);
      unset($errors);
    }
    echo '<hr>Errors ';
    print_r($errors);
    echo '<hr>User ' . count($user) . ': ';
    print_r($user);

    //If the user[] is 5 all field are filled in and we can send to DB and create email with token for activation.

  }//$_SERVER['REQUEST_METHOD'] End bracket

  //Create a value-element for the html-inputfield of the form with the value
  //the user has already submitted so that if they need to correct something they
  //do not have to fill in the complete form again.
  //$element is the element that was filled in, like userName/firstName
  function setValue($element) {
    global $user;
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

  echo '</body></html>';
?>
