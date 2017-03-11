<!DOCTYPE html>
<?php
//TODO function for DB to check token with that one
//TODO remove token in DB so it cant be abused later
//TODO thank the new user for registering and give a <a> to redirect them to login
  include 'head.inc.php';
  if(isset($_GET['id']) && isset($_GET['t'])) {
    echo 'hello ' . $_GET['id'] . '<br>';
    echo 'token ' . $_GET['t'];

  }
?>
