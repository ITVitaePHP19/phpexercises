<!DOCTYPE html>
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
    
// WORK IN PROGRESS
  if (isset($_POST['button'])) {
    echo "Player O's turn";
  }
    
else {
echo "Player X's turn";    
}
?>
    
<form method="POST">
<table>
    <tr>    
        <td><button name="button1"/>
        <?php if (isset($_POST['button1'])){ echo "X";} ?></td>
        <td><button name="button2"/>
        <?php if (isset($_POST['button2'])){ echo "X";} ?></td>
        <td><button name="button3"/>
        <?php if (isset($_POST['button3'])){ echo "X";} ?></td>
    </tr>
    <tr>
        <td><button name="button4"/>
        <?php if (isset($_POST['button4'])){ echo "X";} ?></td>
        <td><button name="button5"/>
        <?php if (isset($_POST['button5'])){ echo "X";} ?></td>
        <td><button name="button6"/>
        <?php if (isset($_POST['button6'])){ echo "X";} ?></td>       
    </tr>
    <tr>
        <td><button name="button7"/>
        <?php if (isset($_POST['button7'])){ echo "X";} ?></td>
        <td><button name="button8"/>
        <?php if (isset($_POST['button8'])){ echo "X";} ?></td>
        <td><button name="button9"/>
        <?php if (isset($_POST['button9'])){ echo "X";} ?></td> 
</table>
    <input type="reset" value="Start over">
</form>
</body>
</html>