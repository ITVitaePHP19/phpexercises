<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encrypt and Decrypt</title>
  </head>
  <body>
<?php
include 'encrypt.php';
// include 'decrypt.php';
?>
<p>Encrypt a string</p>
<form action="encrypt.php" method="post">
<input type="input" name="in" autocomplete="off">
<input type="submit" name="encrypt" value="Encrypt">
<br>
<br>
<p>Select a file to decrypt</p>
<form action="decrypt.php" method="post">
<input type="file" name="file" autocomplete="off">
<input type="submit" name="decrypt" value="decrypt">

</form>
</body>
</html>
