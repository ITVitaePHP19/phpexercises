<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Encrypt and Decrypt</title>
  </head>
  <body>
<?php
include 'decrypt.php';
?>

<p>Select a file</p>
<form action="" method="post">
<input type="file" name="file" accept=".txt">
<input type="submit" name="decrypt" value="decrypt">
</form>
</body>
</html>
