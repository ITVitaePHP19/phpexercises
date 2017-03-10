<!DOCTYPE html>
<?php
  include 'head.inc.php';
  if(isset($_GET['id']) && isset($_GET['t'])) {
    echo 'hello ' . $_GET['id'] . '<br>';
    echo 'token ' . $_GET['t'];

  }
//TODO grab the token and activate the account, write DB function
?>
