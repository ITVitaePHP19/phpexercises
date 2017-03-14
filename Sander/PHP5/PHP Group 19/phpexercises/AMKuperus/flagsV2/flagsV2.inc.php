<?php
//The improved version off flags by AMKuperus
$dir = 'images/';

//Creating a array with all the images in the folder.
$files = (glob("$dir*.{png,jpg,gif}", GLOB_BRACE));

//Determine what to show on what $_GET['do']-content.
if(isset($_GET['do'])) {
  $do = $_GET['do'];
  switch ($do) {
    case "flags":
      echo "<p>The improved version. This version accepts .jpg .gif and .png
      files. To add a file to flags safe the file in the images/-directory as
      coun_try.jpg/gif/png and the program will automatically on refresh extend
      the library with you're image.</p>";
      allFlags($files, $dir);
      break;
    case "quiz":
      include 'quiz.inc.php';
      break;
    default:
      echo "Something went wrong here, <a href=''>go back</a>.";
  }
}

//Shows all the flags on the screen in a flexbox.
function allFlags($files, $dir){
  $i = 1;
  echo '<div class="flex">';
  foreach($files as $f) {
    echo '<figure class="flexin ansbox"><img src=' . $f . ' width=150 height=100><figcaption>' . $i . '. ' . createName($f, $dir) . '</figcaption></figure>';
    $i++;
  }
  echo '</div>';
}

//Create a name for the picture by stripping extension and adding a capital.
function createName($file, $dir) {
  //Create a array to define what to replace.
  $replace = array($dir, ".png", ".jpg", ".gif");
  //Strips the given $dir .png .jpg and .gif from a string.
  $name = str_replace($replace, "", $file );
  //Strip all _ and replace by whitespace.
  $name = str_replace("_", " ", $name);
  //Give every word a capital.
  $name = ucwords($name);
  return $name;
}

function showImage($image, $h, $w, $class) {
  echo "<img src=$image class=$class height=$h width=$w>";
}

?>
