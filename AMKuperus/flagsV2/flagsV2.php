<!DOCTYPE html>
<?php
  session_start();
?>
<head>
  <title>Flags V 2.0</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Flags V2.0</h2>
    <nav>
      <a href="?do=flags">Flags</a>
      <a href="?do=quiz">Quiz</a>
    </nav>
    <p>The improved version. This version accepts .jpg .gif and .png files. To add a file to flags safe the file in the images/-directory as coun_try.jpg/gif/png and the program will automatically on refresh extend the library with you're image.</p>
  <!--  <form action="" method="GET"> -->
      <div class="flex">
        <?php
          include 'flagsV2.inc.php';
        ?>
      </div>
  <!--  </form> -->
  </body>
</html>
