<?php
session_start();
if( isset($_SESSION['counter'] ) ) {
   $_SESSION['counter'] += 1;
}else {
   $_SESSION['counter'] = 1;
}
//stores anything in $_POST in variable $_SESSION['post-data']
$_SESSION['post-data'] = $_POST;
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
            for ($i=0; $i<9; $i++) {
                echo '<button name="press" value="'.$i.'">';
                    if ($_POST['press']==$i)
                        echo 'X';
                    echo '</button>';
                if ($i!=0 && ($i+1)%3==0)
                    echo "</br>\n";
                }
}
// echo "<button id='reset' name='reset'>Play again</button>";
            ?>

        </form>
  </body>
</html>
