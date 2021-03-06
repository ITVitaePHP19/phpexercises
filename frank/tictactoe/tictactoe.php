<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<title>
Tic tac toe
</title>
<link rel='stylesheet' type='text/css' href='style.css'>  
</head>
<body>
<h1>Tic-tac-toe</h1> 

<?php     
if(isset($_POST['destroy'])){
$_SESSION = [];
session_destroy();
}
    
$destroy = 'Reset';
    
if(isset($_SESSION['gameover'])){
    $_SESSION['gameover'];
}        
if (isset($_POST['button'])) {
    $_SESSION['dis'] = 'disabled';
    $count = 0;
    
    if (isset($_SESSION['count']))
    $count = $_SESSION['count'];

    if ($count % 2 == 0) {
        $turn = "Player O's turn";
        $currentplayer = 'X';
    }
    else {
        $turn = "Player X's turn";
        $currentplayer = 'O';
    }
    if ($count >= 8){
        $turn = "It's a draw!";
    }
    
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
        if(isset($_SESSION['but0']) && $_SESSION['but0'] == $currentplayer && isset($_SESSION['but1']) && $_SESSION['but1'] == $currentplayer && isset($_SESSION['but2']) && $_SESSION['but2'] == $currentplayer || isset($_SESSION['but3']) && $_SESSION['but3'] == $currentplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $currentplayer && isset($_SESSION['but5']) && $_SESSION['but5'] == $currentplayer ||
        isset($_SESSION['but6']) && $_SESSION['but6'] == $currentplayer && isset($_SESSION['but7']) && $_SESSION['but7'] == $currentplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $currentplayer ||
        isset($_SESSION['but0']) && $_SESSION['but0'] == $currentplayer && isset($_SESSION['but3']) && $_SESSION['but3'] == $currentplayer && isset($_SESSION['but6']) && $_SESSION['but6'] == $currentplayer ||
        isset($_SESSION['but1']) && $_SESSION['but1'] == $currentplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $currentplayer && isset($_SESSION['but7']) && $_SESSION['but7'] == $currentplayer ||
        isset($_SESSION['but2']) && $_SESSION['but2'] == $currentplayer && isset($_SESSION['but5']) && $_SESSION['but5'] == $currentplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $currentplayer ||
        isset($_SESSION['but0']) && $_SESSION['but0'] == $currentplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $currentplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $currentplayer ||
        isset($_SESSION['but2']) && $_SESSION['but2'] == $currentplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $currentplayer && isset($_SESSION['but6']) && $_SESSION['but6'] == $currentplayer) {
        if ($currentplayer == 'X'){
        $turn = 'Player X has won the game';
        $_SESSION['gameover'] = 'disabled';
        $destroy = 'Play again';
        }
        elseif ($currentplayer == 'O'){
        $turn = 'Player O has won the game';
        $_SESSION['gameover'] = 'disabled';
        $destroy = 'Play again';
        }
        }
    }
    if (!isset($_POST['button'])) {
        $turn = 'Player X begins';   
    } 
    echo $turn;
?>   
<form method='POST'>
<table>
    <tr>    
        <td><button name="button" value="0" <?php if (isset($_SESSION['but0']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but0'])) echo $_SESSION['but0']; ?></button></td>
        <td><button name="button" value="1" <?php if (isset($_SESSION['but1']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but1'])) echo $_SESSION['but1']; ?></button></td>
        <td><button name="button" value="2" <?php if (isset($_SESSION['but2']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but2'])) echo $_SESSION['but2']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="3" <?php if (isset($_SESSION['but3']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but3'])) echo $_SESSION['but3']; ?></button></td>
        <td><button name="button" value="4" <?php if (isset($_SESSION['but4']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but4'])) echo $_SESSION['but4']; ?></button></td>
        <td><button name="button" value="5" <?php if (isset($_SESSION['but5']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but5'])) echo $_SESSION['but5']; ?></button></td>
    </tr>
    <tr>
        <td><button name="button" value="6" <?php if (isset($_SESSION['but6']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but6'])) echo $_SESSION['but6']; ?></button></td>
        <td><button name="button" value="7" <?php if (isset($_SESSION['but7']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but7'])) echo $_SESSION['but7']; ?></button></td>
        <td><button name="button" value="8" <?php if (isset($_SESSION['but8']) || isset($_SESSION['gameover'])) echo $_SESSION['dis']; ?> ><?php if (isset($_SESSION['but8'])) echo $_SESSION['but8']; ?></button></td>
    </tr>
</table>
    <input type='submit' name='destroy' value='<?= $destroy ?>'>
</form>
</body>
</html>