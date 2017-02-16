<!DOCTYPE html>
<?php
  session_start();
?>
<head>
  <title>Flags V 2.0</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Flags V2.0</h1>
    <nav>
      <a href="?do=flags">Flags</a>
      <a href="?do=quiz">Quiz</a>
    </nav>
        <?php
          include 'flagsV2.inc.php';
        ?>
  </body>
</html>
