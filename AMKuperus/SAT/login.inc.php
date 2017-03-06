<form class="box loginbox" action="" method="POST">
  <h2>Login</h2>
  <p>Username: <input type="text" name="userName" placeholder="your.name"></p>
  <p>Password: <input type="password" name="pass" placeholder="**********" max="70"></p>
  <input id="loginbtn" type="submit" value="Login">
  <a href="register.php">New user registration</a>
</form>
<?php
##Login page include
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['userName']) && isset($_POST['pass'])) {
      $username = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
      $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    } else {
      //warning for not filling in field
    }
  }
?>
