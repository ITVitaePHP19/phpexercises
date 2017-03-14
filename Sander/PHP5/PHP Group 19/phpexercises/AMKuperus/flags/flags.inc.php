<?php
  hide();

  //Initialize the folder for the images
  $dir = 'images/';

  echo '<div class="flex">';

  //If the $dir is a directory
  if(is_dir($dir)) {
    //If it is open
    if($d = opendir($dir)) {
      //Loop trough the whole directory pulling all the images
      while(($file = readdir($d)) !== false) {
        //Only take things bigger then 3
        if(strlen($file) > 3){
          echo '<figure class="flexin"><img src=' . $dir . $file . ' width=150 height=100>';
          echo '<figcaption class="' . $hide . '">' . createName($file) . '</figcaption></figure>';
        }
      }
      //Closing the directory
      closedir($d);
    }
    echo "</div>";
  }

  //Create a name for the picture by stripping extension and adding a capital.
  function createName($file) {
    //Strips the .png from a string
    $name = str_replace(".png", "", $file );
    //Strip all _ and replace by whitespace
    $name = str_replace("_", " ", $name);
    //Give every word a capital
    $name = ucwords($name);
    return $name;
  }

  //Either show or hide the names by altering the CSS hide-class display value and
  //changes the button to the other action.
  function hide() {
    global $hide;
    if(isset($_GET['show'])) {
      echo '<input type="submit" value="Test" name="test">';
      $hide = '';
    } else {
      echo '<input type="submit" value="Show" name="show">';
      $hide = 'hide';
    }
  }
?>
