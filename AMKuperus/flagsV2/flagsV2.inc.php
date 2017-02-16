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
      allFlags($files, $dir);
      break;
    case "quiz":
    include 'quizbeta.inc.php';
      break;
    default:
      echo "Something went wrong here, <a href=''>go back</a>.";
  }
}

//Shows all the flags on the screen in a flexbox.
function allFlags($files, $dir){
  $i = 1;
  foreach($files as $f) {
    echo '<figure class="flexin"><img src=' . $f . ' width=150 height=100>
          <figcaption>' . $i . '. ' . createName($f, $dir) . '</figure>';
    $i++;
  }
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

?>
