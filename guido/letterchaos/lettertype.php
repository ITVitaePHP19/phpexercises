<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>

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
//function to get random class, $randomClass variable takes string and addes variable $random
          function getRandomClass($random) {
      //    $random = rand(1, 5);
          $randomClass = "randomClass".$random;
          return $randomClass;
}
//str_split takes text from file and puts in array
          $fileArray = str_split($file);
          foreach ($fileArray as $change) {
//echo span with class, adds in the getRandomClass function and rand(between 1 and 5)
            echo "<span class=".getRandomClass(rand(1,5)).">". $change."</span>";
          }
      }



      ?>
  </body>
</html>
