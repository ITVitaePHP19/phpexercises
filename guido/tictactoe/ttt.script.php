<?php
//declare array with 9 empty spaces
$box = array('', '', '', '', '', '', '', '', '' );
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
//set box0 through box9 as values in form by adding them to box array
  $box[0] = $_POST['box0'];
  $box[1] = $_POST['box1'];
  $box[2] = $_POST['box2'];
  $box[3] = $_POST['box3'];
  $box[4] = $_POST['box4'];
  $box[5] = $_POST['box5'];
  $box[6] = $_POST['box6'];
  $box[7] = $_POST['box7'];
  $box[8] = $_POST['box8'];


//declaring winning combinations for x
if ($box[0] =='x' && $box[1] =='x' && $box[2] =='x' ||
    $box[3] =='x' && $box[4] =='x' && $box[5] =='x' ||
    $box[6] =='x' && $box[7] =='x' && $box[8] =='x' ||
    $box[0] =='x' && $box[3] =='x' && $box[6] =='x' ||
    $box[1] =='x' && $box[4] =='x' && $box[7] =='x' ||
    $box[2] =='x' && $box[6] =='x' && $box[8] =='x' ||
    $box[0] =='x' && $box[4] =='x' && $box[8] =='x' ||
    $box[2] =='x' && $box[4] =='x' && $box[6] =='x')
    {
      $winner = 'x';
      $score++;
//add disabled to the form to prevent moves after game is over
      $disable = "disabled";
      $_SESSION['score'] = $score;
      echo "<span class=message>You won</span><br><br>";
      echo "Score: " . $_SESSION['score'];
    }
//variable to declare that blank (blank fields) is 0
//this is to determine whether there are any moves left
$blank = 0;
  for ($i=0; $i < 9; $i++) {
    if ($box[$i] == '') {
        $blank = 1;
  }
}

//if there is one blank field and winner is false
if ($blank == 1 && $winner == false) {
        $i = rand(0,8);
while ($box[$i] != '') {
        $i = rand(0,8);
    }
//declaring winning combinations for the computer ('o')
$box[$i] = 'o';
    if ($box[0] =='o' && $box[1] =='o' && $box[2] =='o' ||
        $box[3] =='o' && $box[4] =='o' && $box[5] =='o' ||
        $box[6] =='o' && $box[7] =='o' && $box[8] =='o' ||
        $box[0] =='o' && $box[3] =='o' && $box[6] =='o' ||
        $box[1] =='o' && $box[4] =='o' && $box[7] =='o' ||
        $box[2] =='o' && $box[6] =='o' && $box[8] =='o' ||
        $box[0] =='o' && $box[4] =='o' && $box[8] =='o' ||
        $box[2] =='o' && $box[4] =='o' && $box[6] =='o') {
          $winner = 'o';
//add disabled to the form to prevent moves after game is over
          $disable = "disabled";
          echo "<span class=message>You lost.</span><br><br>";
        }
//if winner is false after nought has had it's last move, it's a tie
  } elseif ($winner == false) {
    $winner = "tie";
    $disable = "disabled";
    echo "<span class=message>It's a tie!</span><br><br>";
  }
}
echo "<form name='tictactoe.php' method='POST' action=''>";
//Create 3x3 grid with text input fields
for ($i=0; $i < 9; $i++) {
      echo "<input type=text name=box$i $disable autocomplete=off size=5 value=".$box[$i].">";
//after 3rd, 6th, 9th box, echo <br>
if ($i == 2 || $i == 5 || $i == 8) {
    echo "<br>";
  }

}

//if winner is equal to false as stated on line 5, echo the Play and Reset buttons
if ($winner == false) {
    echo "<br><table><tr><td><input type=submit name=submit value=Play></td>
          <td><input type=reset  name=reset  value=Reset></td></tr><table>";
//if game is over, when the $winner variable equals something other than false, echo Play again
  } else {
    echo "<br><table><tr><td><input type=submit name=retry value='Play again'></td><td><input type=submit name=clear value='Clear score'></td></tr></table>";
  }
//if Play again button is pressed, refresh the page
if (isset($_POST['retry'])) {
    header("Location: tictactoe.php");
  }
//sets the $_SESSION['score'] variable to 0 when Clear score has been pressed
if (isset($_POST['clear'])) {
  $_SESSION['score'] = 0;
  }
}
//closing the form
echo "</form>";
?>
