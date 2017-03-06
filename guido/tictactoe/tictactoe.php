<?php
// TO DO:
// Making buttons in grid clickable so X and O turns are stored in the session
// Setting up a function to determine a winner
// Defining a draw

echo '<form action="" method="POST">';


    if(!isset($_POST['submit'])) {
      $_SESSION = [];
    }

if(!isset($_SESSION['grid'])) {
//setup the 3x3 grid
$grid =  ["A1", "A2", "A3",
          "B1", "B2", "B3",
          "C1", "C2","C3"];
$_SESSION['grid'] = $grid;
//empty x and o arrays to store X and O player turns
      $cross =  [];
      $nought = [];
      $_SESSION['x'] = $cross;
      $_SESSION['o'] = $nought;
//Variable for user turns
$user = 1;
$_SESSION['user'] = $user;
//Variable to determine winner (no function to determine winner yet)
$game = true;
$_SESSION['game'] = $game;

} else {
  $grid = $_SESSION['grid'];
  $cross = $_SESSION['x'];
  $nought = $_SESSION['o'];
  $user = $_SESSION['user'];
  $game = $_SESSION['game'];

if($game == true && $user < 9) {
  if(isset($_POST['userTurn'])) {

  $userTurn = $_POST['userTurn'];
  //search the $grid array to remove element and change it to 'x'/'o'
  $arraySearch = array_search($userTurn, $grid);

//check if user in session is an equal number to determine whether X or O is playing
  if($user % 2 == 0) {
  echo "X is playing. Turn nr: $user";
  //Add to empty $nought[] array and push to $_SESSION['o'] variable and $grid[]
  array_push($nought, $userTurn);

  $grid[$arraySearch] = "O";
  $_SESSION['o'] = $nought;
} else {
  echo "<div>O is playing. Turn nr: $user</div>";
//Add to empty $cross[] array and push to the $_SESSION['o'] and $grid[] arrays
  array_push($cross, $userTurn);
  $grid[$arraySearch] = "X";
  $_SESSION['x'] = $x;
}

$_SESSION['grid'] = $grid;
$user++;
$_SESSION['user'] = $user;

} else {
  echo "<div>X will begin</div>";
}
// Setting up the field
  echo "<div><table>";
  setGrid($grid);
  echo "</table></div>";
  }
}
//Call setElement to put each element into <button> tag
function setGrid($grid) {
$a = [];
$a[0] = $grid[0];
$a[1] = $grid[1];
$a[2] = $grid[2];
setElement($a);
$b = [];
$b[0] = $grid[3];
$b[1] = $grid[4];
$b[3] = $grid[5];
setElement($b);
$c = [];
$c[0] = $grid[6];
$c[1] = $grid[7];
$c[2] = $grid[8];
setElement($c);
}

function setElement ($array) {
  echo "<tr>";
  foreach($array as $f) {
    if(strlen($f) > 1) {
      echo "<td><button name='pressed' value=$f></button></td>\n";
    } else {
      echo "<td>$f</td>";
    }
  }
  echo "</tr>\n";
}

echo '<div><input type="submit" value="Start" name="submit">';
echo '<input type="submit" value="Reset game" name="reset">';
echo '</form></div>';
?>
