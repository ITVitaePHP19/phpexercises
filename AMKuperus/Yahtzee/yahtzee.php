<!DOCTYPE html>
<?php
  session_start();
?>
<head>
  <title>Yahtzee</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Play Yahtzee</h1>
    <?php
    if(isset($_POST['reset'])) {
      $_SESSION = [];
    }
    echo '<form action="" method="POST">';
      if(!isset($_POST['players'])) {
        echo '<p>Choose the number off players</p>
                <select name="players" required>
                  <option value=""></option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  </select>
                <input type="submit" value="Start">
              </form>';
      } elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
          $players = $_POST['players'];
          $_SESSION['players'] = $players;
          echo $players;
          include 'yahtzee.inc.php';
          echo '<input type="submit" value="Play">';
      }
    ?>
    <input type="submit" name="reset" value="Reset">
  </form>
</body>
</html>
