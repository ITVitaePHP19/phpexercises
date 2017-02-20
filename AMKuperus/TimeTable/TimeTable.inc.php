<?php
  //Array for times
  $time = [ "8:00",
            "9:00",
            "10:00",
            "11:00",
            "12:00",
            "13:00",
            "14:00",
            "15:00",
            "16:00"];
  //Array for days
  $weekdays =   ["Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"];
  //Starting the table
  echo "<table><tr><th></th>";
  //Getting all the weekdays from the array into the head of the table
  foreach ($weekdays as $day) {
    echo "<th>$day</th>";
  }
  //Close that table row
  echo "</tr>";
  //Getting the times and write them in a new row each time
  foreach($time as $t) {
    echo "<tr><td>$t</td>";
    $d = 0;
    //Filling following rows to make cells for each weekday
    while($d < 5) {
      echo "<td></td>";
      $d++;
    }
    //Closing each row
    echo "</tr>";
  }
  //Closing the table
  echo "</table>";
?>
