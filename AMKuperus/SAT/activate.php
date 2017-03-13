<!DOCTYPE html>
<?php
//TODO remove token in DB so it cant be abused later
//TODO thank the new user for registering and give a <a> to redirect them to login
  include 'head.inc.php';
  if(isset($_GET['id']) && isset($_GET['t'])) {
    $userName = $_GET['id'];
    $token = $_GET['t'];
    require_once 'jumper.inc.php';
    //Fetch the token corresponding to $userName from database
    $match = retToken($db, $userName);
    echo '<div class="box loginbox">';
    if(preg_match('/(' . $token . ')/', $match)) {
      //Token matches
      echo '<p>Thank you for registering ITVitae-SAT ' .
            $userName . ' you can now login</p>' .
            '<a href="index.php">Go to the login-page</a>';
            //TODO change state in db
            changeToken($db, $userName);
    } else {//no match
      echo '<small class="error">There is a problem activating your account.</small>';
    }
    echo '</div>';
  }

?>
