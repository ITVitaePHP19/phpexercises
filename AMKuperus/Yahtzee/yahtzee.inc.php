<?php
################################################################################
##########################Yahtzee by @author AMKuperus##########################
#####Copyleft,only to be used for non-profit and always mention the author.#####
############################Version 0.1-BETA-Feb.2017###########################
################################################################################
//TODO CREATE Setup start off the game->select #players and setup a game from there
//TODO CREATE Play the game, if there is players
//TODO functions to apply the rules of Yahtzee
//TODO Let the game run max number round, keep track of scores of each players
###DONE//TODO Function to roll the dice (mc_rand)
//TODO Dice should be selectable to choose if player wants to reroll the Dice
//TODO Player turn is max 3 turns, then player must select what he/she is playing for
//TODO safe players "turns" in a array per player(multidimensional?)
//TODO make the score-thingy in a visible scorebooklook apear per player wneh player plays
//TODO keep track of the score via the scorebook, which puts it into an array
echo "TESTING $players";

//Dice <radiobutton>if isset rollDice else nothing

  //Roll a dice, $dice is the dice to roll
  function rollDice($dice) {
    $roll = mt_rand(1, 6);
    return $roll;
  }
?>
