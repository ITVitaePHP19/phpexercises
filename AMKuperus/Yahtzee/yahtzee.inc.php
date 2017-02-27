<?php
################################################################################
##########################Yahtzee by @author AMKuperus##########################
#####Copyleft,only to be used for non-profit and always mention the author.#####
############################Version 0.5-BETA-Feb.2017###########################
################################################################################

  //Reset the game
  if (isset($_POST['reset'])) {
    $_SESSION = [];
    $_POST = [];
  }

  //Ask for the number of players and setup the game
  if(!isset($_POST['players'])) {##TODO This must come from session not post, now it keeps resetting the game.
    //Show a form to choose number of players
    echo '<p>Choose the number off players</p>
            <select name="players" required>
              <option value=""></option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              </select>
            <input type="submit" value="Start">';
  } elseif(!isset($_SESSION['players'])) {
    echo 'SETTING UP THE GAME CREATING PLAYERS<input type="submit" value="Start">';##Remove when done
    //Setup variable for counting which players turn it is.
    $turn = 0;
    $_SESSION['turn'] = $turn;
    $game = true;
    $_SESSION['game'] = $game;
    //Setup players
    $players = $_POST['players'];
    switch($players) {
      case 2:
        $player1 = [];
        $player2 = [];
        $_SESSION['players'] = [$player1, $player2];
        break;
      case 3:
        $player1 = [];
        $player2 = [];
        $player3 = [];
        $_SESSION['players'] = [$player1, $player2, $player3];
        break;
      case 4:
        $player1 = [];
        $player2 = [];
        $player3 = [];
        $player4 = [];
        $_SESSION['players'] = [$player1, $player2, $player3, $player4];
        break;
    }
  } else {
    //Start a game
    $players = $_SESSION['players'];
    $turn = $_SESSION['turn'];
    $game = $_SESSION['game'];
    $nop = count($players);//NumberOffPlayers
    $_SESSION['nop'] = $nop;
    echo "Number off players: $nop<hr>\n";
    print_r($players);#Remove when done.
    echo "<hr>\n";
    //Select player to play and play
    if($game == true) {
      $player = $players[$turn];
      setDice();
      echo "START GAME";
      $c = 0;
      if($c < 3) {
        //Player plays
        if(isset($_POST['dice1'])) {
          $dice1 = rollDice($_POST['dice1']);
        } else {
          echo "nothing";
        }
      }
      //TODO On the end add 1 to turn or reset it to 0
      //TODO Select player
      //TODO Controlmechanism for rollin the dice (Dice <radiobutton>if isset rollDice else nothing)
      //TODO Mechanism to show scores grapical
      //TODO Player turn is max 3 turns, then player must select what he/she is playing for
      //TODO Put score (chosen attribute + that score) in player array and write it to $_SESSION['players']
      //TODO Mechanics for when the game should end
      echo '<input type="submit" name="" value="Roll">';
      $c++;
    }
  }

  //Setup the dice
  function setDice() {
    $dices = ["dice1", "dice2", "dice3", "dice4", "dice5"];
    foreach($dices as $dice) {
      echo '<p>' . $dice . '<input type="radio" value="' . $dice . '" name="' . $dice . '">' . rollDice($dice) . '</p>';
    }
  }

  //Roll a dice, $dice is the dice to roll
  function rollDice($dice) {
    $roll = mt_rand(1, 6);
    return $roll;
  }
?>
