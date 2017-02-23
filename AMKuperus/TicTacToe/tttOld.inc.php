<form action="" method="POST">
<?php
  //IN PROGRESS 0.) initialize the game, set up the arrays
  // 1.) setfields
  // function to place radiobuttons
  // 2.) play x/o
  //TODO 3.) put chosen position in x/o array[] and remove from $field[]
  //TODO 4.) check is there is a winner
  //TODO 5.) check if tere still is a field

  //Reset the game
  if(isset($_POST['reset'])) {
    $_SESSION = [];
  }

  //Initializing Arrays for the game in session.
  //Checking if there is a field set in $_SESSION
  if(!isset($_SESSION['field'])) {
    //Setting up a playfield
    $field = ["A1", "A2", "A3", "B1", "B2", "B3", "C1", "C2", "C3"];
    $_SESSION['field'] = $field;
    //Creating players X and O
    $x = [];
    $_SESSION['x'] = $x;
    $o = [];
    $_SESSION['o'] = $o;
    //Creating a variable to count the number of turns played
    $turn = 0;
    $_SESSION['turn'] = $turn;
    echo "<h1>Welcome to Nuts and Bolts!</h1>";
  } else {
    //Pull the arrays from the session
    $field = $_SESSION['field'];
    $x = $_SESSION['x'];
    $o = $_SESSION['o'];
    $turn = $_SESSION['turn'];
    echo "<p>You are playing Nuts and Bolts</p>";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if(count($field) > 0) {
        setField($field);
//maybe beter set the field with a button to start the game//then have button
//apear for player o and x when playing for better readout of players
      if (isset($_POST['push'])) {

        $push = $_POST['push'];

          if($turn % 2 == 0) {
            //Even = o
            echo "<hr>X >>>even <br>Turn: $turn <hr>";
            array_push($o, $push);
            $_SESSION['o'] = $o;
          } else {
            //Odd = x
            echo "<hr>O >>>odd <br>Turn: $turn";
            array_push($x, $push);
            $_SESSION['x'] = $x;
          }
          //Search for the key to remove the element from the array
          $k = array_search($push, $field);
          //Removing the position from the $field[]
          unset($field[$k]);
        }
        $_SESSION['field'] = $field;

        $turn++;
        $_SESSION['turn'] = $turn;
        echo '<hr>Array size:' . count($o) . ' O>>>';
        print_r($o);
        echo '<hr>Array size:' . count($x) . ' X>>>';
        print_r($x);
        echo '<hr>Field Array size: ' . count($field) . ' Field>>>';
        print_r($field);
      }
    }
  }


  function setField($field) {
    echo "<span>\n";
    foreach($field as $f) {
      echo "$f<input type=radio value=$f name=push>\n";
    }
    echo "</span>\n";
  }

  ?>
  <input type="submit" value="Play">
  <input type="submit" value="Reset the Game" name="reset">
  </form>
