<?php
##############################################################################
##################TicTacToe by @author : AMKuperus############################
####Copyleft,only to be used for non-profit and always mention the author.####
##########################Version 0.4Beta--Feb.2017###########################
##############################################################################

echo '<form action="" method="POST">';

  //Reset the game
  if(isset($_POST['reset'])) {
    $_SESSION = [];
  }

  //Initialyze arrays for the game when there was no session yet.
  if(!isset($_SESSION['field'])) {
    //Setup a playfield with 9 positions
    $field = ["A1", "A2", "A3",
              "B1", "B2", "B3",
              "C1", "C2", "C3"];
    $_SESSION['field'] = $field;
    //Create players X and O by making a empty array for each.
    $x = [];
    $o = [];
    $_SESSION['x'] = $x;
    $_SESSION['o'] = $o;
    //Creating a variable for the number of turns played
    $turn = 1;
    $_SESSION['turn'] = $turn;
    //Say something to the visitors
    echo "<h1>Are you ready to play some TicTacToe</h1>\n";
  } else {
    //Pull everything from the $_SESSION
    $field = $_SESSION['field'];
    $x = $_SESSION['x'];
    $o = $_SESSION['o'];
    $turn = $_SESSION['turn'];
    //Say something to the visitors
    echo "<h1>You are playing TicTacToe</h1>\n";

    if(isset($_POST['pos'])) {
      //The chosen position (pos)
      $pos = $_POST['pos'];
      //Search for the key to remove the element from the array $field[] and
      //alter it to x or o.
      $k = array_search($pos, $field);
      //Define who's turn it is (x/o)
      if($turn % 2 == 0) {//If true %turn is even if false $turn is uneven
        echo "<hr>X>>>Even is playing<br>Turn: $turn<hr>\n";
        //Add to the $o[] and push to the $_SESSION['o'] and $field[]
        array_push($o, $pos);
        $field[$k] = "X";
        $_SESSION['o'] = $o;
      } else {
        echo "<hr>O>>>Odd is playing<br>Turn: $turn<hr>\n";
        //Add to the $x[] and push to the $_SESSION['x'] and $field[]
        array_push($x, $pos);
        $field[$k] = "O";
        $_SESSION['x'] = $x;
      }
      $_SESSION["field"] = $field;
      $turn++;
      $_SESSION['turn'] = $turn;
      //TODO Some stuff only for testingREMOVE WHEN DONE>>>>
      echo '<hr>Array size: ' . count($o) . ' O>>>ARRAY>>>';
      print_r($o);
      echo '<hr>Array size: ' . count($x) . ' X>>>ARRAY>>>';
      print_r($x);
      echo '<hr>Array size: ' . count($field) . ' FIELD ARRAY>>';
      print_r($field);
      echo "<br>";
    }
    setField($field);
  }

//TODO write function to check the player [] if it contains a winning combination

//TODO Make this field apear in a nice 3x3 playfield
  //Set up the playfield, checks the content of each array-elemement, if element
  //string-length is bigger then 1 element is a position (like A1 or C2) else
  //position is already chosen and filled with a X or a Y
  function setField($field) {
    echo "<hr>";
    foreach($field as $f) {
      //Filter out al positions ann give those a radiobutton
      if(strlen($f) > 1) {//Create a radiobutton
        echo "$f<input type=radio value=$f name=pos>\n";
      } else {
        echo "-$f-";
      }
    }
  }

echo "<hr>\n";
echo '<input type="submit" value="Play">';
echo '<input type="submit" value="Reset" name="reset">';
echo '</form>';
?>
