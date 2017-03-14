<form class="box loginbox" action="" method="POST">
  <h2>Login</h2>
  <p>Username: <input type="text" name="userName" placeholder="your.name"></p>
  <p>Password: <input type="password" name="pass" placeholder="**********" max="70"></p>
  <input id="loginbtn" type="submit" value="Login">
  <a href="register.php">New user registration</a>
</form>
<?php
//TODO Build up environment for safe session
  //start session->login
    //session id token (ip-log?)
    //settimeout session
    //renew token if there is activity, else destroy session
    //start_session()-session_id()-session_cache_expire()-session_regenate_id()
//TODO attach in session the role of the user
//TODO DB function for checking username/password match
//TODO different permissions = different parts of php per role
//TODO isset checks fields
//TODO error when username/password not there
  //(one error for all so we never reveal what the problem might be)
##Login page include

  include 'functions.inc.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['userName']) && isset($_POST['pass'])) {
      $username = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
      $password = createHash($_POST['pass']);

      require_once 'jumper.inc.php';
    } else {
      //warning for not filling in field
    }
  }
?>
