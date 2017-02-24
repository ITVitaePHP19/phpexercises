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
        <td><button name="button" value="1"/></td>
        <td><button name="button" value="2"/></td>
        <td><button name="button" value="3"/></td>
    </tr>
    <tr>
        <td><button name="button" value="4"/></td>
        <td><button name="button" value="5"/></td>
        <td><button name="button" value="6"/></td>
    </tr>
    <tr>
        <td><button name="button" value="7"/></td>
        <td><button name="button" value="8"/></td>
        <td><button name="button" value="9"/></td>
</table>
    <input type="reset" value="Start over">
</form>
</body>
</html>