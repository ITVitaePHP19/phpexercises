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
// class to store message about who's turn it is
class TurnMessage {
// property for message
private $message;
// method for set new message
public function setMessage($newMsg) {
$this->message = $newMsg;
}
// method for get message
public function getMessage() {
return $this->message;
}
}

// destroy session if reset/play again button is pressed
if(isset($_POST['destroy'])){
$_SESSION = [];
session_destroy();
}
    
$destroy = 'Reset';

// Create object for message
$objMessage = new TurnMessage();

// session for disable for the whole field
if(isset($_SESSION['gameover'])){
    $_SESSION['gameover'];
}
    
if (!isset($_SESSION['count']) && !isset($_SESSION['first'])){
    echo "help";
    $_SESSION['first'] = "something";
    $_SESSION['count'] = -1;
    $_SESSION['countme0'] = true;
    $_SESSION['countme1'] = true;
    $_SESSION['countme2'] = true;
    $_SESSION['countme3'] = true;
    $_SESSION['countme4'] = true;
    $_SESSION['countme5'] = true;
    $_SESSION['countme6'] = true;
    $_SESSION['countme7'] = true;
    $_SESSION['countme8'] = true;
}
    
// session for disable when a button is pressed    
if (isset($_POST['button'])) {
    $_SESSION['dis'] = 'disabled';    
// if nothing is set, $count = empty   
    $count = '';
    
// if a session for count is set, make a variable for the session 'count'   
    if (isset($_SESSION['count']))
    $count = $_SESSION['count'];
// if count is an even number show a message that Player O is next
    if ($count % 2 == 0) {
        // set Message property
        $objMessage->setMessage("Player O's turn");
// previous player = X
        $prevplayer = 'X';
    }
// if count is an odd number show a message that Player X is next
    else {
// set Message property
        $objMessage->setMessage("Player X's turn");
// previous player is O
        $prevplayer = 'O';
    }
// if count is 8 or above and noone won the game, show a message that it's a draw
    if ($count >= 8){
        // set Message property
        $objMessage->setMessage("It's a draw!");
    }
    
// make a session for each pressed button and decide who's turn it is    
    if($_POST['button'] == 0) {
        $_SESSION['but0'] = $prevplayer;
    if($_SESSION['countme0'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme0'] = false;
    }
    }
    if($_POST['button'] == 1) {
        $_SESSION['but1'] = $prevplayer;
    if($_SESSION['countme1'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme1'] = false;
    }
    }
    if($_POST['button'] == 2) {
        $_SESSION['but2'] = $prevplayer;
    if($_SESSION['countme2'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme2'] = false;
    }
    }
    if($_POST['button'] == 3) {
        $_SESSION['but3'] = $prevplayer;
    if($_SESSION['countme3'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme3'] = false;
    }
    }
    if($_POST['button'] == 4) {
        $_SESSION['but4'] = $prevplayer;
    if($_SESSION['countme4'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme4'] = false;
    }
    }
    if($_POST['button'] == 5) {
        $_SESSION['but5'] = $prevplayer;
    if($_SESSION['countme5'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme5'] = false;
    }
    }
    if($_POST['button'] == 6) {
        $_SESSION['but6'] = $prevplayer;
    if($_SESSION['countme6'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme6'] = false;
    }
    }
    if($_POST['button'] == 7) {
        $_SESSION['but7'] = $prevplayer;
    if($_SESSION['countme7'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme7'] = false;
    }
    }
    if($_POST['button'] == 8) {
        $_SESSION['but8'] = $prevplayer;
    if($_SESSION['countme8'] == true){  
        $_SESSION['count'] = $count+1;
        $_SESSION['countme8'] = false;
    }
    }
    
    echo $count;
// see which button sessions are set to decide which player has won
        if(isset($_SESSION['but0']) && $_SESSION['but0'] == $prevplayer && isset($_SESSION['but1']) && $_SESSION['but1'] == $prevplayer && isset($_SESSION['but2']) && $_SESSION['but2'] == $prevplayer || isset($_SESSION['but3']) && $_SESSION['but3'] == $prevplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $prevplayer && isset($_SESSION['but5']) && $_SESSION['but5'] == $prevplayer ||
        isset($_SESSION['but6']) && $_SESSION['but6'] == $prevplayer && isset($_SESSION['but7']) && $_SESSION['but7'] == $prevplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $prevplayer ||
        isset($_SESSION['but0']) && $_SESSION['but0'] == $prevplayer && isset($_SESSION['but3']) && $_SESSION['but3'] == $prevplayer && isset($_SESSION['but6']) && $_SESSION['but6'] == $prevplayer ||
        isset($_SESSION['but1']) && $_SESSION['but1'] == $prevplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $prevplayer && isset($_SESSION['but7']) && $_SESSION['but7'] == $prevplayer ||
        isset($_SESSION['but2']) && $_SESSION['but2'] == $prevplayer && isset($_SESSION['but5']) && $_SESSION['but5'] == $prevplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $prevplayer ||
        isset($_SESSION['but0']) && $_SESSION['but0'] == $prevplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $prevplayer && isset($_SESSION['but8']) && $_SESSION['but8'] == $prevplayer ||
        isset($_SESSION['but2']) && $_SESSION['but2'] == $prevplayer && isset($_SESSION['but4']) && $_SESSION['but4'] == $prevplayer && isset($_SESSION['but6']) && $_SESSION['but6'] == $prevplayer) {
// if previous player = player X        
        if ($prevplayer == 'X'){
// set message property
        $objMessage->setMessage('Player X has won the game');
// call session to disable all buttons if player X has won
        $_SESSION['gameover'] = 'disabled';
// change the text of the reset button to 'Play again'
        $destroy = 'Play again';
        }
// if previous player = player O        
            elseif ($prevplayer == 'O'){
        $objMessage->setMessage('Player O has won the game');
// call session to disable all buttons if player X has won
        $_SESSION['gameover'] = 'disabled';
// change the text of the reset button to 'Play again'        
        $destroy = 'Play again';
        }
        }
    }
// if no button is set yet, show a message for Player X to begin instead of Player O to begin
    if (!isset($_POST['button'])) {
    $objMessage->setMessage('Player X begins');  
    } 
    // echo the message
    echo $objMessage->getMessage();
?>   
<form method='POST'>
<table>
    <tr>
        <?php // if a button is pressed, remember it in a session and disable the button. Also disable the buttons if a player has won (gameover).
        ?>
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
    <?php // give the destroy button a variable so the text of the button can be changed
    ?>
    <input type='submit' name='destroy' value='<?= $destroy ?>'>
</form>
</body>
</html>