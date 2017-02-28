<!DOCTYPE html>

<?php
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
    if($_POST['button'] == 0) {
        $_SESSION['button0'] = "O";
    }
    if($_POST['button'] == 1) {
        $_SESSION['button1'] = "O";
    }
    if($_POST['button'] == 2) {
        $_SESSION['button2'] = "O";
    }
    if($_POST['button'] == 3) {
        $_SESSION['button3'] = "O";
    }
    if($_POST['button'] == 4) {
        $_SESSION['button4'] = "O";
    }
    if($_POST['button'] == 5) {
        $_SESSION['button5'] = "O";
    }
    if($_POST['button'] == 6) {
        $_SESSION['button6'] = "O";
    }
    if($_POST['button'] == 7) {
        $_SESSION['button7'] = "O";
    }
    if($_POST['button'] == 8) {
        $_SESSION['button8'] = "O";
    }
}
?>
    
    
    
<form method="POST">
<table>
    <tr>    
        <td><button name="button" value="0"/><?php if (isset($_SESSION['button0'])) echo $_SESSION['button0'];   ?></td>
        <td><button name="button" value="1"/><?php if (isset($_SESSION['button1'])) echo $_SESSION['button1'];   ?></td>
        <td><button name="button" value="2"/><?php if (isset($_SESSION['button2'])) echo $_SESSION['button2'];   ?></td>
    </tr>
    <tr>
        <td><button name="button" value="3"/><?php if (isset($_SESSION['button3'])) echo $_SESSION['button3'];   ?></td>
        <td><button name="button" value="4"/><?php if (isset($_SESSION['button4'])) echo $_SESSION['button4'];   ?></td>
        <td><button name="button" value="5"/><?php if (isset($_SESSION['button5'])) echo $_SESSION['button5'];   ?></td>
    </tr>
    <tr>
        <td><button name="button" value="6"/><?php if (isset($_SESSION['button6'])) echo $_SESSION['button6'];   ?></td>
        <td><button name="button" value="7"/><?php if (isset($_SESSION['button7'])) echo $_SESSION['button7'];   ?></td>
        <td><button name="button" value="8"/><?php if (isset($_SESSION['button8'])) echo $_SESSION['button8'];   ?></td>
    </tr>
</table>
    <input type="submit" name="destroy" value="Start over">
</form>
</body>
</html>
