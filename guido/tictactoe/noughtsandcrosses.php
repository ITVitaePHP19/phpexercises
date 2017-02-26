<?php
session_start();
if( isset($_SESSION['counter'] ) ) {
   $_SESSION['counter'] += 1;
}else {
   $_SESSION['counter'] = 1;
}
//stores anything in $_POST in variable $_SESSION['post-data']
// $_SESSION['post-data'] = $_POST;
if( isset($_SESSION['post-data'])) {
   $_SESSION['post-data'] += 1;
}else {
   $_SESSION['post-data'] = 1;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  <link rel="stylesheet" href="stylesheet.css">

  </head>
  <body>
    <?php echo '<span class="span1">'. "You've visited the page ". $_SESSION['counter']. " times</span>"; ?>
    <br>
    <h1>Welcome to Tic-Tac-Toe!</h1>
    <form action="" method="post">

<br>
<br>
<?php
echo "<button id='button1' name'play'>Play</button>";
if (isset($_POST['play'])) {
  playGame();
}

function playGame() {
// If 'post-data counter is an even number'
  if ($_SESSION['post-data'] % 2) {
    for ($i=0; $i<9; $i++) {
        echo '<button name="press" value="'.$i.'">';
            if ($_POST['press']==$i)
                echo 'X';
            echo '</button>';
        if ($i!=0 && ($i+1)%3==0)
            echo "</br>\n";
        } elseif () {

        }

  }
}
echo "<button id='reset' name='reset'>Play again</button>";
echo "<br><br>";

if (isset($_POST['reset'])) {
  $_SESSION = array();
}
      ?>
        </form>

      <br>
      <br>
  </body>
</html>
