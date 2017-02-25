<!DOCTYPE html>
<?php
  session_start();
?>
<head>
  <title>Yahtzee</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Play Yahtzee</h1>
  <form action="" method="POST"><!--This form should only be shown when nog game has yet been setup-->
    <p>Choose the number off players</p><!--Do something with php-->
    <select name="players" required>
      <option value=""></option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
    <input type="submit" value="Start">
  </form>
  <?php
    include 'yahtzee.inc.php';
  ?>
</body>
</html>
