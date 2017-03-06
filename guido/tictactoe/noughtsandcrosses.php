<?php
session_start();
if( isset($_SESSION['counter'] ) ) {
   $_SESSION['counter'] += 1;
}else {
   $_SESSION['counter'] = 1;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  <link rel="stylesheet" href="stylesheet.css">

  </head>
  <body>
    <?php echo '<span class="span1">'. "You've visited the page ". $_SESSION['counter']. " times</span>"; ?>
    <br>
    <h1>Welcome to Tic-Tac-Toe!</h1>
    <?php
    include 'tictactoe.php';
    ?>
<!--
        <button name="pressed" value="A1"></button><button name="pressed" value="A2"></button><button name="pressed" value="A3"></button></br>
        <button name="pressed" value="B1"></button><button name="pressed" value="B2"></button><button name="pressed" value="B3"></button></br>
        <button name="pressed" value="C1"></button><button name="pressed" value="C2"></button><button name="pressed" value="C3"></button></br>
        <button id="reset" name="reset" value="reset">Reset Game</button>
        <div id="message"></div>
-->


    </form>
  </body>
</html>
