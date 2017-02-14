<?php
//The improved version off flags by AMKuperus
$dir = 'images/';

//Creating a array with all the images in the folder.
$files = (glob("$dir*.{png,jpg,gif}", GLOB_BRACE));
$i = 1;
foreach($files as $f) {
  echo '<figure class="flexin"><img src=' . $f . ' width=150 height=100>
        <figcaption>' . $i . '. ' . createName($f, $dir) . '</figure>';
  $i++;
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
