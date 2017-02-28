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
    
    
if (isset($_POST['button'])) {
    if($_POST['button'] == 2) {
        $_SESSION['button2'] = "O";
    }
}
?>
    
    
    
<form method="POST">
<table>
    <tr>    
        <td><button name="button" value="0"/><?php if (isset($_POST['button']) && $_POST['button'] == 0) echo "X";   ?></td>
        <td><button name="button" value="1"/><?php if (isset($_POST['button']) && $_POST['button'] == 1) echo "X";   ?></td>
        <td><button name="button" value="2"/><?php if (isset($_SESSION['button2'])) echo $_SESSION['button2'];   ?></td>
    </tr>
    <tr>
        <td><button name="button" value="3"/></td>
        <td><button name="button" value="4"/></td>
        <td><button name="button" value="5"/></td>
    </tr>
    <tr>
        <td><button name="button" value="6"/>    </td>
        <td><button name="button" value="7"/></td>
        <td><button name="button" value="8"/></td>
    </tr>
</table>
    <input type="reset" value="Start over">
</form>
</body>
</html>

<?php

        for ($i = 0; $i <=8; $i++){
            echo '<button name="pressed" value="'.$i.'">';
                    if (isset($_POST['button']) && $_POST['button']==$i)
            echo 'X';
        }

?>