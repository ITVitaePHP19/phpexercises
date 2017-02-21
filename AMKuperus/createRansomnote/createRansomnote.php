<!DOCTYPE html>
<head>
  <title>CreateRansomNote</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>CreateRansomNote</h1>
  <form action="createRansomnote.php" method="POST">
    <p>Type youre ransomnote text here: <input type="text" name="input" required></p>
    <input type="submit" value="Create">
  </form>
  <?php
    include 'createRansomnote.inc.php';
  ?>
</body>
