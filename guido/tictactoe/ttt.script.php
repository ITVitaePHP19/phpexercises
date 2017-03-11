<?php
//declare array with 9 empty spaces
$box = array('', '', '', '', '', '', '', '', '' );
//declare winner variable which equals false
$winner = false;
//if submit button is pressed
if (isset($_POST['submit'])) {
//set box0 through box9 as values in form
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
    $box[2] =='x' && $box[4] =='x' && $box[6] =='x') {
      $winner = 'x';
      echo "<span class=message>You have beaten the computer!</span>";
    }
//variable to declare that blank is 0
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
          echo "<span class=message>You lost.</span>";
        }
  } elseif ($winner == false) {
    $winner = "tie";
    echo "<span class=message>It's a tie!</span>";
  }
}
echo "<form name='tictactoe.php' method='POST' action=''>";

//Create 3x3 grid with text input fields
for ($i=0; $i < 9; $i++) {
      echo "<input type=text name=box$i autocomplete=off size=5 value=".$box[$i].">";
//after 3rd, 6th, 9th box, echo <br>
if ($i == 2 || $i == 5 || $i == 8) {
    echo "<br>";
  }
}
//if winner is equal to false as stated on line 5, echo the Play and Reset buttons
if ($winner == false) {
    echo "<input type=submit name=submit value=Play>
          <input type=reset  name=reset  value=Reset>";
//if game is over, when the $winner variable equals something other than false, echo Play again
  } else {
    echo "<input type=submit name=retry value='Play again'>";
  }
//if Play again button is pressed, refresh the page
if (isset($_POST['retry'])) {
    header("Location: tictactoe.php");
}
//closing the form
echo "</form>";
?>
