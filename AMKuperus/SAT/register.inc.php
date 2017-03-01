<form class='loginbox' action="" method="POST">
  <h2>Register</h2>
  <p>Fill in all the fields please</p>
  <p>Username: <input type="text" name="userName" placeholder="username"></p>
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

?>
