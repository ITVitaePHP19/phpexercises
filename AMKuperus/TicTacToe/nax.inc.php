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
    //Boolean to switch between player x and o
    $turn = false;
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

  if(count($field) > 0) {
    setField($field);
    //Lets play the game, if $x[] is even play $x[] else play $o[]
    if ($turn != true) {
      //x plays the game
      if(isset($_POST['push'])) {
        $push = $_POST['push'];
        //Push the element into the played moves of X
        array_push($x, $push);
        $_SESSION['x'] = $x;
        echo "pushed x <br>";
        //Remove the element from the $field[]
        unset($field[$push]);
        print_r($field);
        $_SESSION['field'] = $field;
        $turn = false;
      }
      print_r($x);
      echo "<p>X is playing.</p>";
    } else {
      //o plays the game
      if(isset($_POST['push'])) {
        $push = $_POST['push'];
        //Push the element into the played moves of X
        array_push($o, $push);
        $_SESSION['o'] = $o;
        echo "pushed o <br>";
        //Remove the element from the $field[]
        unset($field[$push]);
        $_SESSION['field'] = $field;
        $turn = true;
      }
      print_r($o);
      echo "<p>O is playing.</p>";
    }
  }

  function setField($field) {
    echo "<span>\n";
    foreach($field as $f) {
      echo "$f<input type=radio value=$f name=push>\n";
    }
    echo "</span>\n";
  }


  function createRadio() {

  }
?>
<input type="submit" value="Play">
<input type="submit" value="Reset the Game" name="reset">
</form>
