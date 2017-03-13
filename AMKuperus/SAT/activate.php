<!DOCTYPE html>
<?php
//TODO function for DB to check token with that one
//TODO remove token in DB so it cant be abused later
//TODO thank the new user for registering and give a <a> to redirect them to login
  include 'head.inc.php';
  if(isset($_GET['id']) && isset($_GET['t'])) {
    $userName = $_GET['id'];
    $token = $_GET['t'];
    require_once 'jumper.inc.php';
    //Fetch the token corresponding to $userName from database
    $match = retToken($db, $userName);
    echo $match;
    echo '<div class="box loginbox"><p>Thank you for registering ITVitae-SAT ' .
          $userName . ' </p>';
    if(strcmp($token, $match) == 0) {
      echo '<p>We have a winner!</p>';
    } else {//no match
      echo '<h1>DERP</h1>';
    }
    echo '</div>';
  }

?>
