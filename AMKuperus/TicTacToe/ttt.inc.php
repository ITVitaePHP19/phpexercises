<?php
##############################################################################
##################TicTacToe by @author : AMKuperus############################
####Copyleft,only to be used for non-profit and always mention the author.####
##########################Version 0.9Beta--Feb.2017###########################
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
    //Boolean variable game (switches when there is a winner)
    $game = true;
    $_SESSION['game'] = $game;
    //Say something to the visitors
    echo "<h1>Are you ready to play some TicTacToe</h1>\n";
  } else {
    //Pull everything from the $_SESSION
    $field = $_SESSION['field'];
    $x = $_SESSION['x'];
    $o = $_SESSION['o'];
    $turn = $_SESSION['turn'];
    $game = $_SESSION['game'];
    //Say something to the visitors
    echo "<h1>You are playing TicTacToe</h1>\n";

    if($game == true && $turn < 9){
      if(isset($_POST['pos'])) {
      //The chosen position (pos)
      $pos = $_POST['pos'];
      //Search for the key to remove the element from the array $field[] and
      //alter it to x or o.
      $k = array_search($pos, $field);
      //Define who's turn it is (x/o)
      if($turn % 2 == 0) {//If true %turn is even if false $turn is uneven
        echo "<hr><h2>X is playing</h2><p>Turn: $turn</p><hr>\n";
        //Add to the $o[] and push to the $_SESSION['o'] and $field[]
        array_push($o, $pos);
        isWinner($o);
        $field[$k] = "O";
        $_SESSION['o'] = $o;
      } else {
        echo "<hr><h2>O is playing</h2><p>Turn: $turn</p><hr>\n";
        //Add to the $x[] and push to the $_SESSION['x'] and $field[]
        array_push($x, $pos);
        isWinner($x);
        $field[$k] = "X";
        $_SESSION['x'] = $x;
      }
      $_SESSION["field"] = $field;
      $turn++;
      $_SESSION['turn'] = $turn;
    } else {
      echo "<h2>X starts the game</h2>";
    }
    //Setup the field in 3x3 setting with a table
    echo "<table>";
    setField($field);
    echo "</table>";}
  }

  //$win[] is a multidimensional array containing all winning combinations in
  //TicTacToe.
  //With a foreach-loop we walk trough every winning combination with allInArray()
  //If allInArray() finds a winning combi it echo's that to the screen.
  function isWinner($array) {
    //Winning combinations
    $win = [["A1", "A2", "A3"],
            ["B1", "B2", "B3"],
            ["C1", "C2", "C3"],
            ["A1", "B1", "C1"],
            ["A2", "B2", "C2"],
            ["A3", "B3", "C3"],
            ["A1", "B2", "C3"],
            ["A3", "B2", "C1"]];
    foreach($win as $w) {
      allInArray($w, $array);
    }
  }

  //Checks if there is a difference between $needle[] and $haystack[]
  //If there is no difference, a winning combination is found in $haystack[] and
  //there is a winner
  function allInArray($needle, $haystack) {
    global $game;
    if(!array_diff($needle, $haystack) == true) {
      echo "<h1>We have a winner</h1>";
      $game = false;
      $_SESSION['game'] = $game;
    }
  }

  //Divide the $field[] into 3 arrays a[] b[] c[]
  //Call setElement to put each element into html-tags
  function setField($field) {
    $a = [];
    $a[0] = $field[0];
    $a[1] = $field[1];
    $a[2] = $field[2];
    setElement($a);
    $b = [];
    $b[0] = $field[3];
    $b[1] = $field[4];
    $b[2] = $field[5];
    setElement($b);
    $c = [];
    $c[0] = $field[6];
    $c[1] = $field[7];
    $c[2] = $field[8];
    setElement($c);
  }

  //If element's strlen() is longer then 1 element is a position,
  //If element is a position make a radiobutton with as value its position.
  //Else make the element apear as either a X or a O
  function setElement($array) {
    echo "<tr>\n";
    foreach($array as $v) {
      //Filter out al positions and give those a radiobutton
      if(strlen($v) > 1) {//Create a radiobutton
        echo "<td><input type=radio value=$v name=pos></td>\n";
      } else {
        echo "<td>$v</td>";
      }
    }
    echo "</tr>\n";
  }

echo "<hr>\n";
echo '<input type="submit" value="Play">';
echo '<input type="submit" value="Reset" name="reset">';
echo '</form>';
?>
