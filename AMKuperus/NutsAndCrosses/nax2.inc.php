<form action="" method="POST">
<?php
  //TODO 0.) initialize the game, set up the arrays
  //TODO 1.) setfields
  //TODO function to place radiobuttons
  //TODO 2.) play x/o
  //TODO 3.) put chosen position in x/o array[] and remove from $field[]
  //TODO 4.) check is there is a winner
  //TODO 5.) check if tere still is a field

  //Reset the game
  if(isset($_POST['reset'])) {
    $_SESSION = [];
  }


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
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['push'])) {
      $push = $_POST['push'];
    }
    if(count($field) > 0) {
      setField($field);
      //maybe get POST from here instead of deeper in the loop
      if($turn % 2 == 0) {
        //Even = o
        echo "<hr>even $turn <br>";
        array_push($o, $push);
        $turn++;
      } else {
        //Odd = x
        echo "<hr>odd $turn <br>";
        array_push($x, $push);
        $turn++;
      }
      echo '<hr>' . print_r($o) . '<br>';
      echo '<hr>' . print_r($x) . '<br>';
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
