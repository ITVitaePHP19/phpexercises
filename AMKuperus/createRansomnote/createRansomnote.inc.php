<?php
  //If there is something in POST.
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    //If $input is not empty.
    if(strlen($input) > 0) {
      createRansomNote($input);
    }
  }

  //Create the ransomnote
  function createRansomNote($input) {
    //Make a array from the string, each element containing 1 character from the
    //original string.
    $text = str_split($input);
    //Setup a Flexcontainer to put in all the elements.
    echo '<div class="flexcontainer">';
    //Get each element and put them in a div with a randomColor() - randomFont(
    //randomSize() - randomRotate()
    foreach($text as $t) {
      echo '<div  class="flex" style="
                  background-color: ' . randomColor() . ';
                  font-family: ' . randomFont() . ';
                  font-size: ' . randomSize() . 'em;
                  transform: rotate(' . randomRotate() . 'deg);">' . $t . "</div>\n";
    }
    //Close the Flexcontainer div.
    echo '</div>';
  }

  //Returns a random standardized CSS font
  function randomFont() {
    $font =  ["Times New Roman",
              "Georgia",
              "Arial",
              "Verdana",
              "Courier New",
              "Lucida Console"];
    $r = mt_rand(0, 5);
    return $font[$r];
  }

  //Returns a random int between 2 and 8 to randomize the size.
  function randomSize() {
    $r = mt_rand(2, 8);
    return $r;
  }

  //Returns a random int to change the degree of rotation for transform: rotate
  //First throws 0 or 1, if 0 does backwards-rotation, if 1 does forwards-rotation.
  function randomRotate() {
    $r = mt_rand(0, 1);
    if ($r == 1) {
      $d = mt_rand(0, 45);
    } else {
      $d = mt_rand(315, 360);
    }
    return $d;
  }

  //Returns a randomized Hexadecimal 7 character long (including #) string to be used
  //for randomizing colors.
  function randomColor() {
    $color = "#";
    while(strlen($color) < 7) {
      $color .= createHex();
    }
    return $color;
  }

  //Returns a random hexadecimal number
  //First creates a random int between 0 and 15
  //Second makes it a Hexadecimal with dechex()
  function createHex() {
    $r = mt_rand(0, 15);
    $h = dechex($r);
    return $h;
  }

?>
