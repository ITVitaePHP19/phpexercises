<?php
################################################################################
##########################Yahtzee by @author AMKuperus##########################
#####Copyleft,only to be used for non-profit and always mention the author.#####
############################Version 0.2-BETA-Feb.2017###########################
################################################################################
##DONE//TODO CREATE Setup start off the game->select #players and setup a game from there
//TODO CREATE Play the game, if there is players
//TODO functions to apply the rules of Yahtzee
//TODO Let the game run max number round, keep track of scores of each players
###DONE//TODO Function to roll the dice (mc_rand)
//TODO Dice should be selectable to choose if player wants to reroll the Dice
//TODO Player turn is max 3 turns, then player must select what he/she is playing for
//TODO safe players "turns" in a array per player(multidimensional?)
//TODO make the score-thingy in a visible scorebooklook apear per player wneh player plays
//TODO keep track of the score via the scorebook, which puts it into an array
//Dice <radiobutton>if isset rollDice else nothing

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
    //echo '<input type="submit" value="Start">';
    print_r($_SESSION['players']);
  } else {
    //Start a game
    $players = $_SESSION['players'];
    $nop = count($players);//NumberOffPlayers
    $_SESSION['nop'] = $nop;
    echo "Number off players: $nop<hr>\n";
    print_r($players);
    //Select player to play and play
  }

  //Roll a dice, $dice is the dice to roll
  function rollDice($dice) {
    $roll = mt_rand(1, 6);
    return $roll;
  }
?>
