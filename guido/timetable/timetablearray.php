<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="table.css">
  </head>
  <body>
    <?php

//arrays to set hours and days
    $timeTable = array("8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");
    $days = array("Times", "Monday","Tuesday", "Wednesday", "Thursday","Friday",);
  //open table
    echo "<table>";
//for each item in days array as new variable $head (heading) echo them inside <th> tag
    foreach ($days as $head) {
      echo "<th> $head </th>";
    }
//open table row
    echo "<tr>";
//for each item in timeTable array, place inside table row and html table data tag
    foreach ($timeTable as $table) {
      echo "<td> $table </td>";
        //for loop to loop from 0 to 5, creating new empty table data cells
      for ($i=0; $i < 5; $i++) {
        echo "<td></td>";
      }
//closing the table row
      echo "</tr>";
    }


//close table
    echo "</table>";
    ?>

  </body>
</html>
