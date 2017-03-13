<!DOCTYPE html>
<?php
  include 'head.inc.php';
  if(isset($_GET['id']) && isset($_GET['t'])) {
    $userName = $_GET['id'];
    $token = $_GET['t'];
    require_once 'jumper.inc.php';
    //Fetch the token corresponding to $userName from database
    $match = retToken($db, $userName);
    echo $match . '<br>' . $token;
    echo '<div class="box loginbox">';
    //Test if $token matches $match
    if(preg_match('/(' . $token . ')/', $match)) {
      //Token matches
      echo '<p>Thank you for registering ITVitae-SAT ' .
            $userName . ' you can now login</p>' .
            '<a href="index.php">Go to the login-page</a>';
            //Change state in db
            changeToken($db, $userName);
            changeToStudent($db, $userName);
    } else {//no match
      echo '<small class="error">There is a problem activating your account.</small>';
    }
    echo '</div>';
  }

?>
