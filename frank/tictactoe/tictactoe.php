<!DOCTYPE html>

<?php

// UNDER CONSTRUCTION

session_start();
?>

<html>
<head>
<title>
Tic tac toe
</title>
<link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>
<h1>Tic-tac-toe</h1> 
<?php
    
    
if(isset($_POST['destroy'])){
$_SESSION = [];
session_destroy();
}

if (isset($_POST['button'])) {
      $_SESSION['dis'] = 'disabled';
      $count = 0;
    
    if (isset($_SESSION['count']))
    $count = $_SESSION['count'];

    if ($count % 2 == 0) {
        $turn = "Player O's turn";
        $currentplayer = "X";
    }
    elseif ($count % 1 == 0) {
        $turn = "Player X's turn";
        $currentplayer = 'O';
    }
    
    echo $turn;
    
    $_SESSION['count'] = $count+1;
    
    if($_POST['button'] == 0) {
        $_SESSION['but0'] = $currentplayer;
    }
    if($_POST['button'] == 1) {
        $_SESSION['but1'] = $currentplayer;
    }
    if($_POST['button'] == 2) {
        $_SESSION['but2'] = $currentplayer;
    }
    if($_POST['button'] == 3) {
        $_SESSION['but3'] = $currentplayer;
    }
    if($_POST['button'] == 4) {
        $_SESSION['but4'] = $currentplayer;
    }
    if($_POST['button'] == 5) {
        $_SESSION['but5'] = $currentplayer;
    }
    if($_POST['button'] == 6) {
        $_SESSION['but6'] = $currentplayer;
    }
    if($_POST['button'] == 7) {
        $_SESSION['but7'] = $currentplayer;
    }
    if($_POST['button'] == 8) {
        $_SESSION['but8'] = $currentplayer;
    }
}
    if (!isset($_POST['button'])) {
     echo $turn = 'Player X begins';   
    }
      
?>
    
<form method="POST">
<table>
    <tr>    
        <td><button name="button" value="0" <?php if (isset($_SESSION['but0'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but0'])) echo $_SESSION['but0']; ?></button></td>
        <td><button name="button" value="1" <?php if (isset($_SESSION['but1'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but1'])) echo $_SESSION['but1']; ?></button></td>
        <td><button name="button" value="2" <?php if (isset($_SESSION['but2'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but2'])) echo $_SESSION['but2']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="3" <?php if (isset($_SESSION['but3'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but3'])) echo $_SESSION['but3']; ?></button></td>
        <td><button name="button" value="4" <?php if (isset($_SESSION['but4'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but4'])) echo $_SESSION['but4']; ?></button></td>
        <td><button name="button" value="5" <?php if (isset($_SESSION['but5'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but5'])) echo $_SESSION['but5']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="6" <?php if (isset($_SESSION['but6'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but6'])) echo $_SESSION['but6']; ?></button></td>
        <td><button name="button" value="7" <?php if (isset($_SESSION['but7'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but7'])) echo $_SESSION['but7']; ?></button></td>
        <td><button name="button" value="8" <?php if (isset($_SESSION['but8'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but8'])) echo $_SESSION['but8']; ?></button></td>
    </tr>
</table>
    <input type="submit" name="destroy" value="Start over">
</form>
</body>
</html>