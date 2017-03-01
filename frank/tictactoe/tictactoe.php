<!DOCTYPE html>

<?php

/* 
UNDER CONSTRUCTION:
Er moet 2 keer worden geklikt op "Start over" (de submit button) om de sessie te legen.
De eerste keer dat er op de submit gedrukt is, nadat er op een button is gedrukt komt er 1 getal bij op de counter, dit hoort ook niet.
Voordat er op de eerste button is gedrukt moet er aangegeven worden dat Player X begint.
*/
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

  $count = 0;
  if (isset($_SESSION['count']))
    $count = $_SESSION['count'];


if ($count % 2 == 0) {
    echo "Player O's turn";
    $currentplayer = "X";
}
else {
    echo "Player X's turn";
    $currentplayer = 'O';
}
    
echo '<br>Counter: ' . $count;
    
    
if(isset($_POST['destroy'])){
$_SESSION = [];
session_destroy();
}
    
if (isset($_POST['button'])) {
      $_SESSION['count'] = $count+1;
    if($_POST['button'] == 0) {
        $_SESSION['but0'] = $currentplayer;
        $_SESSION['dis0'] = 'disabled';
    }
    if($_POST['button'] == 1) {
        $_SESSION['but1'] = $currentplayer;
        $_SESSION['dis1'] = 'disabled';
    }
    if($_POST['button'] == 2) {
        $_SESSION['but2'] = $currentplayer;
        $_SESSION['dis2'] = 'disabled';
    }
    if($_POST['button'] == 3) {
        $_SESSION['but3'] = $currentplayer;
        $_SESSION['dis3'] = 'disabled';
    }
    if($_POST['button'] == 4) {
        $_SESSION['but4'] = $currentplayer;
        $_SESSION['dis4'] = 'disabled';
    }
    if($_POST['button'] == 5) {
        $_SESSION['but5'] = $currentplayer;
        $_SESSION['dis5'] = 'disabled';
    }
    if($_POST['button'] == 6) {
        $_SESSION['but6'] = $currentplayer;
        $_SESSION['dis6'] = 'disabled';
    }
    if($_POST['button'] == 7) {
        $_SESSION['but7'] = $currentplayer;
        $_SESSION['dis7'] = 'disabled';
    }
    if($_POST['button'] == 8) {
        $_SESSION['but8'] = $currentplayer;
        $_SESSION['dis8'] = 'disabled';
    }
}
      
?>
    
<form method="POST">
<table>
    <tr>    
        <td><button name="button" value="0" <?php if (isset($_SESSION['dis0'])) echo $_SESSION['dis0']; ?> ><?php if (isset($_SESSION['but0'])) echo $_SESSION['but0']; ?></button></td>
        <td><button name="button" value="1" <?php if (isset($_SESSION['dis1'])) echo $_SESSION['dis1']; ?> ><?php if (isset($_SESSION['but1'])) echo $_SESSION['but1']; ?></button></td>
        <td><button name="button" value="2" <?php if (isset($_SESSION['dis2'])) echo $_SESSION['dis2']; ?> ><?php if (isset($_SESSION['but2'])) echo $_SESSION['but2']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="3" <?php if (isset($_SESSION['dis3'])) echo $_SESSION['dis3']; ?> ><?php if (isset($_SESSION['but3'])) echo $_SESSION['but3']; ?></button></td>
        <td><button name="button" value="4" <?php if (isset($_SESSION['dis4'])) echo $_SESSION['dis4']; ?> ><?php if (isset($_SESSION['but4'])) echo $_SESSION['but4']; ?></button></td>
        <td><button name="button" value="5" <?php if (isset($_SESSION['dis5'])) echo $_SESSION['dis5']; ?> ><?php if (isset($_SESSION['but5'])) echo $_SESSION['but5']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="6" <?php if (isset($_SESSION['dis6'])) echo $_SESSION['dis6']; ?> ><?php if (isset($_SESSION['but6'])) echo $_SESSION['but6']; ?></button></td>
        <td><button name="button" value="7" <?php if (isset($_SESSION['dis7'])) echo $_SESSION['dis7']; ?> ><?php if (isset($_SESSION['but7'])) echo $_SESSION['but7']; ?></button></td>
        <td><button name="button" value="8" <?php if (isset($_SESSION['dis8'])) echo $_SESSION['dis8']; ?> ><?php if (isset($_SESSION['but8'])) echo $_SESSION['but8']; ?></button></td>
    </tr>
</table>
    <input type="submit" name="destroy" value="Start over">
</form>
</body>
</html>