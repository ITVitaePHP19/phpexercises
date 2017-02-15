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
      flagQuiz($files, $dir);
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

//Quiz-function that shows a flag and 4 names, when a name is submitted compare
//submission with the name of the flag (countryname) and if correct say so, and
//give the next quiz-item.
function flagQuiz($files, $dir) {
  //Create 2 empty arrays to store the flags and the names seperate so we can
  //remove flags when done and have all flagnames as random-possibilities.
  $flags = [];
  $names = [];
  //Filling the 2 new arrays with flags and names.
  foreach($files as $f) {
    array_push($flags, $f);
    array_push($names, createName($f, $dir));
  }
  echo 'Library holds ' .  count($flags) . ' flags currently.';

  while(count($flags) > 0) {
    //TODO show a flag
    //TODO remove that flag from array
    //TODO get 3 random other names
    //TODO show 4 names with radiobuttons
    //TODO submitbutton with a action to check the submission true/false
  }

  echo "<br>";
  echo mt_rand(0, count($flags));
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
