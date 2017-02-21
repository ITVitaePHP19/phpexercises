<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <?php
    //font array
    $font =
        array(
          "Arial",
          "monospace",
          "Comic Sans MS",
          "Times",
          "Lucida Sans",
          "Verdana",
          "Helvetica",
          "Charcoal",
          "Trebuchet MS",
          "Fantasy"
        );
    //colour array
      $fontColour =
        array(
          "#800060",
          "black",
          "red",
          "yellow",
          "#66ff66",
        );

    ?>
<!-- <style>
 span{
   font-family: <?php// echo($font[rand(1,10)]); ?>;
   color: <?php// echo($fontColour[rand(1,5)]); ?>;
  }
</style> -->

    <form action="" method="POST">
      <fieldset>
        <legend>Select a file to scramble:</legend>
        <br>
        <input type="file" name="file"><br>
        <br>
        <input type="submit" name="submit" value="scramble"><br>
        <br>
      </fieldset>
</form>
<?php

      //get the contents from whatever is posted in 'file'
        if (isset($_POST['submit'])){
          $file = file_get_contents($_POST["file"]);

          function getRandomClass($random) {
      //    $random = rand(1, 5);
          $randomClass = "randomClass".$random;
          return $randomClass;
}

          $fileArray = str_split($file);
          foreach ($fileArray as $change) {
            echo "<span class=".getRandomClass(rand(1,5)).">". $change."</span>";
          }
      }



      ?>
  </body>
</html>
