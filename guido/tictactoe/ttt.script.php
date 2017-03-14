<?php
//declare array with 9 empty spaces
$grid = array('', '', '', '', '', '', '', '', '' );
//set 'winner' session to store $session variable
//declare winner variable which equals false
$winner = false;
//declares an empty variable called disable which will change to "disabled" when game is over
$disable = "";
//if there is no session, set up session
if(!isset($_SESSION['score'])) {
  $score = 0;
  $_SESSION['score'] = $score;
} else {
$score = $_SESSION['score'];
//if submit button is pressed
if (isset($_POST['submit'])) {
//set grid0 through grid9 as values in form by adding them to grid array
  $grid[0] = $_POST['grid0'];
  $grid[1] = $_POST['grid1'];
  $grid[2] = $_POST['grid2'];
  $grid[3] = $_POST['grid3'];
  $grid[4] = $_POST['grid4'];
  $grid[5] = $_POST['grid5'];
  $grid[6] = $_POST['grid6'];
  $grid[7] = $_POST['grid7'];
  $grid[8] = $_POST['grid8'];
//open div tag
echo "<div class=tictactoe>";
//declaring winning combinations for x
if ($grid[0] =='x' && $grid[1] =='x' && $grid[2] =='x' ||
    $grid[3] =='x' && $grid[4] =='x' && $grid[5] =='x' ||
    $grid[6] =='x' && $grid[7] =='x' && $grid[8] =='x' ||
    $grid[0] =='x' && $grid[3] =='x' && $grid[6] =='x' ||
    $grid[1] =='x' && $grid[4] =='x' && $grid[7] =='x' ||
    $grid[2] =='x' && $grid[6] =='x' && $grid[8] =='x' ||
    $grid[0] =='x' && $grid[4] =='x' && $grid[8] =='x' ||
    $grid[2] =='x' && $grid[4] =='x' && $grid[6] =='x')
    {
      $winner = 'x';
      $score++;
//add disabled to the form to prevent moves after game is over
      $disable = "disabled";
      $_SESSION['score'] = $score;
      echo "<span class=message>You won</span><br><br>";
//      echo "Score: " . $_SESSION['score'];
    }

//variable to declare that blank (blank fields) is 0
//this is to determine whether there are any moves left
$blank = 0;
  for ($i=0; $i < 9; $i++) {
//if $grid equals nothing (in value) set $blank to 1
    if ($grid[$i] == '') {
        $blank = 1;
  }
}
//if any empty positions in grid, so if blank is equal to 1 and winner is false, choose a random field
//this will decide whether 'o' will have a move when there are blank fields
if ($blank == 1 && $winner == false) {
        $i = rand(0,8);
while ($grid[$i] != '') {
        $i = rand(0,8);
    }

//declaring winning combinations for the computer ('o')
$grid[$i] = 'o';
    if ($grid[0] =='o' && $grid[1] =='o' && $grid[2] =='o' ||
        $grid[3] =='o' && $grid[4] =='o' && $grid[5] =='o' ||
        $grid[6] =='o' && $grid[7] =='o' && $grid[8] =='o' ||
        $grid[0] =='o' && $grid[3] =='o' && $grid[6] =='o' ||
        $grid[1] =='o' && $grid[4] =='o' && $grid[7] =='o' ||
        $grid[2] =='o' && $grid[6] =='o' && $grid[8] =='o' ||
        $grid[0] =='o' && $grid[4] =='o' && $grid[8] =='o' ||
        $grid[2] =='o' && $grid[4] =='o' && $grid[6] =='o') {
          $winner = 'o';
//add disabled to the form to prevent moves after game is over
          $disable = "disabled";
          echo "<span class=message>You lost.</span><br><br>";
        }
//if winner is false after nought has had its last move, it's a tie
  } elseif ($winner == false) {
    $winner = "tie";
    $disable = "disabled";
    echo "<span class=message>It's a tie!</span><br><br>";
  }
}
//open form
echo "<form name='tictactoe.php' method='POST' action=''>";
//Create 3x3 grid with text input fields
for ($i=0; $i < 9; $i++) {
      echo "<input type=text name=grid$i $disable autocomplete=off size=5 value=".$grid[$i].">";
//after 3rd, 6th, 9th field, echo <br>
if ($i == 2 || $i == 5 || $i == 8) {
    echo "<br>";
  }
}

//if winner is equal to false as stated on line 5, echo the Play button
if ($winner == false) {
    echo "<br><table><tr><td><input type=submit name=submit value=Play></td></tr><table>
          <div>Current high score is $score</div>";
//if game is over, when the $winner variable equals something other than false, echo Play again
  } else {
    echo "<br><table><tr><td><input type=submit name=retry value='Play again'></td><td><input type=submit name=clear value='Clear score'></td></tr></table>
          <div>Current high score is $score</div>";
  }
//if Play again button is pressed, refresh the page
if (isset($_POST['retry'])) {
    header("Location: tictactoe.php");
  }
//sets the $_SESSION['score'] variable to 0 when Clear score has been pressed
//also go back to first page to play again
if (isset($_POST['clear'])) {
  $_SESSION['score'] = 0;
  header("Location: tictactoe.php");
  }
}
//closing the div tag
echo "</div>";
//closing the form
echo "</form>";
?>
