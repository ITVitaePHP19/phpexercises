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
  <form action="" method="POST">
    <?php
      include 'yahtzee.inc.php';
    ?>
    <input type="submit" name="reset" value="Reset">
  </form>
</body>
</html>
