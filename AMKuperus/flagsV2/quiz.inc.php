<?php
//TODO maybe keep a array in session, rebuild this script to work from there
//TODO to keep track off flags that have already been shown somehow.
//Quiz-function that shows a flag and 4 names, when a name is submitted compare
//submission with the name of the flag (countryname) and if correct say so, and
//give the next quiz-item.
function flagQuiz($files, $dir) {
  //Create 2 empty arrays to store the flags and the names seperate so we can
  //remove flags when done and have all flagnames as random-possibilities.
  $flags = [];
  $names = [];

  //Filling a array with names.
  foreach($files as $f) {
    array_push($flags, $f);
    array_push($names, createName($f, $dir));
  }
  echo 'Library holds ' .  count($flags) . ' flags currently.';

  if (count($flags) > 0) {
    //Get a random number and use that to show a random flag by using random-number
    //as indexnumber for the flag to pull.
    $srf = mt_rand(0, (count($flags)-1));
    if(!in_array($srf, $flags)) {
      echo '<figure><img src="' . $flags[$srf] . '" width="600" height="400">
            <figcaption>' . createName($flags[$srf], $dir) . '</figcaption></figure>';
    //TODO Mechanism to only show flags hat have not been shown before
    //TODO get 3 random other names
    //TODO show 4 names with radiobuttons
    //TODO submitbutton with a action to check the submission true/false
  } else {
    echo "<code>Oops something went wrong. $srf</code>";
  }
  }
}
?>
