<?php
    include("dbconnect.php");

?>
<html>
<head>
    
</head>
<body>
    
<form action="user_process.php" method="post" name="users">
<table>
    <tr><td>Naam:</td><td><input type="text" name="naam"></td></tr>
    <tr><td>Achternaam:</td><td><input type="text" name="achternaam"><br></td></tr>
    <tr><td>BSN:</td><td><input type="text" name="bsn" pattern="[0-9]{9}"><br></td></tr>
    <tr><td>Geboortedatum:</td><td><input type="date" name="geboortedatum"><br></td></tr>
    <tr><td>Omschrijving:</td><td><textarea name="omschrijving"></textarea></td></tr>
    <tr><td><input type="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html>