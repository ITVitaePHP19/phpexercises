<!DOCTYPE html>
<?php
  include 'head.inc.php';
  if(isset($_GET['id'])) {
    echo 'hello ' . $_GET['id'];
    if(isset($_GET['t'])) {//TODO grab the token and activate the account, write DB function
      echo 'token ' . $_GET['t'];
    }
  }
?>
