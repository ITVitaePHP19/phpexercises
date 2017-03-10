<?php
session_start(); //1.Create a session, this will save user input.

  $win=-1;

if(isset($_POST['res'])) //2.This will destroy the session and provide a link to start another game (Create a new session) once clicked
{
  session_destroy();
  echo 'Session destroyed. Start <a href="">a new game</a>';
}


echo '<form action="" method="post"><table width="150"><tr>';

if(isset($_SESSION['who'])) //.2 Next the program needs to be able to track who's turn it is, who selected which input field
                            // and if someone has won or lost
    $who = $_SESSION['who'];

if(!isset($who))
{
  $who=0; //In this case, this will be player X
  $_SESSION['ttt'] = "222222222"; //this will keep the game's data(what players have done)
  $_SESSION['win'] = -1;
}

$endd = $_SESSION['win'];

if($endd==-1) {
  $ttt= $_SESSION['ttt'];
  if(isset($_POST['val']))
  $data = $_POST['val'];

  if(isset($data))  {
  $mark = $data[0]; // This will get what button was clicked and apply the value to the cell (0-8 for due to the 9x9 grid)
  $ttt[$hamle]=$who; // marks the game data with the whoever's turn it is
  $who=($who+1)%2; // this will switch the turn
}

if($who)  {
  echo "This is O's turn<br>";
}
else
  echo "This is X's turn<br>";


for($i=0; $i<9; $i++) { //echo the game in a table in the loop
  $val = $i;
  if(($i)%3==0)
  echo "</tr><tr>";
  if($ttt[$i]==2){ //the 2 value indicates a cell is empty
echo '<td><center><input type="submit" name="val[]" value="$i"></center></td>';
}
  if($ttt[$i]==0) {
    echo "<td><center>X</center></td>";
}
  if($ttt[$i]==1) {
    echo "<td><center>O</center></td>";
}
}
    echo "</table></form></br>";



for($j=0;$j<3;$j++) {
if(substr($ttt,3*$j,3)=="000")  {
echo "X wins<br>";
$win=0;
}
if(substr($ttt,3*$j,3)=="111")  {
echo "0 wins<br>";
$win=1;
}

}
for($j=0;$j<3;$j++) {
if($ttt[$j]==$ttt[$j+3] && $ttt[$j+3]==$ttt[$j+6]  && $ttt[$j+6]=='0')  {
echo "X wins<br>";
$win=0;
}
if($ttt[$j]==$ttt[$j+3] && $ttt[$j+3]==$ttt[$j+6]  && $ttt[$j+6]=='1')  {
echo "0 wins<br>";
$win=1;
}
}

if($ttt[0]==$ttt[4] && $ttt[4]==$ttt[8]  && $ttt[8]=='0') {
echo "X wins<br>";
$win=0;
}
if($ttt[0]==$ttt[4] && $ttt[4]==$ttt[8]  && $ttt[8]=='1') {
echo "O wins<br>";
$win=1;
}

if($ttt[2]==$ttt[4] && $ttt[4]==$ttt[6]  && $ttt[6]=='0') {
echo "X wins<br>";
$win=0;
}

if($ttt[2]==$ttt[4] && $ttt[4]==$ttt[6]  && $ttt[6]=='1') {
echo "O wins<br>";
$win=1;
}
$_SESSION['ttt'] = $ttt;
$_SESSION['who']=$who;
$_SESSION['win']=$win;
}
else
{
echo "Game already ended. Reset the game<br>";
}


echo '<form action="" method="post"><input type="submit" name="res" value="reset"></form>'


?>
