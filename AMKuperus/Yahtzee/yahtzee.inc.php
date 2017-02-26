<?php
################################################################################
##########################Yahtzee by @author AMKuperus##########################
#####Copyleft,only to be used for non-profit and always mention the author.#####
############################Version 0.3-BETA-Feb.2017###########################
################################################################################

  //Reset the game
  if (isset($_POST['reset'])) {
    $_SESSION = [];
  }

  //Ask for the number of players and setup the game
  if(!isset($_POST['players'])) {
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
    print_r($_SESSION['players']);#Remove when done
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
      //TODO On the end add 1 to turn or reset it to 0
      //TODO Select player
      //TODO Setup dice
      //TODO Controlmechanism for rollin the dice (Dice <radiobutton>if isset rollDice else nothing)
      //TODO Mechanism to show scores grapical
      //TODO Player turn is max 3 turns, then player must select what he/she is playing for
      //TODO Put score (chosen attribute + that score) in player array and write it to $_SESSION['players']
      //TODO Mechanics for when the game should end
    }
  }

  //Roll a dice, $dice is the dice to roll
  function rollDice($dice) {
    $roll = mt_rand(1, 6);
    return $roll;
  }
?>
