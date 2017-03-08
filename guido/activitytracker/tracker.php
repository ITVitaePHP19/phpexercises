<?php

require('connect.php');

// Check connection
//if ($connection->connect_error) {
//    die("Connection failed: " . $connection->connect_error);
//}
//echo "Connected successfully";


if (isset($_POST['delete']) && isset($_POST['id'])) {
  $id = get_post($connection, 'id');
  $query = "DELETE FROM activitytracker WHERE id='$id'";
  $result = $connection->query($query);
//if result isn't true giv econnection  error message
  if (!$result) echo "DELETE failed: $query<br>" . $connection->error . "<br><br>";
}

if (//isset($_POST['id']) &&
    isset($_POST['My_Activities']) &&
    isset($_POST['Start_Date']) &&
    isset($_POST['End_Date']) &&
    isset($_POST['Time_spent_in_hours']) &&
    isset($_POST['Percentage_Completed']) &&
    isset($_POST['Pleasure']) &&
    isset($_POST['Difficulty']) &&
    isset($_POST['Notes']))
{

  $id                   = get_post($connection, 'id');
  $myActivities         = get_post($connection, 'My_Activities');
  $startDate            = get_post($connection, 'Start_Date');
  $endDate              = get_post($connection, 'End_Date');
  $timeSpentInHours     = get_post($connection, 'Time_spent_in_hours');
  $percentageCompleted  = get_post($connection, 'Percentage_Completed');
  $pleasure             = get_post($connection, 'Pleasure');
  $difficulty           = get_post($connection, 'Difficulty');
  $notes                = get_post($connection, 'Notes');
  $query                = "INSERT INTO activitytracker VALUES" .
      "('$id',  '$myActivities', '$startDate', '$endDate', '$timeSpentInHours', '$percentageCompleted', '$pleasure', '$difficulty', '$notes')";
  $result = $connection->query($query);
  if (!$result) echo "INSERT failed: $query<br>" .
    $connection->error . "<br><br>";
}

echo <<<_END
<link rel="stylesheet" href="stylesheet2.css">
<form action="tracker.php" method="POST"><pre>
My Activities             <input type="text" name="My_Activities">
Start Date                <input type="date" name="Start_Date">
End Date                  <input type="date" name="End_Date">
Time Spent in Hours       <input type="text" name="Time_spent_in_hours">
Percentage Completed      <input type="number" name="Percentage_Completed">
Pleasure                  <input type="number" name="Pleasure">
Difficulty                <input type="number" name="Difficulty">
Notes                     <input type="text" name="Notes">
                          <input type="submit" value="ADD RECORD">
                          </pre></form>
_END;

$query = "SELECT * FROM activitytracker";
$result = $connection->query($query);
if (!$result) die ("Database access failed: " . $connection->error);
//TO DO: Maybe if query entry is succesful, do not show form.

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j) {
  $result ->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  $activityHeader = array(
    "My Activities",
    "Start Date",
    "End Date",
    "Time Spent in Hours",
    "Percentage Completed",
    "Pleasure",
    "Difficulty",
    "Notes",
  );

  echo "<table>";
  foreach ($activityHeader as $head) {
    echo "<th> $head </th>";
  }
//open table row
  echo "<tr>";
  //foreach ($row as $table) {
  //add if statement, if $row = 0, exclude or add from 1+
  //create new for loop maybe
  //echo  "<td>".$table."</td>";
  //}
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  echo "<td>$row[5]</td>";
  echo "<td>$row[6]</td>";
  echo "<td>$row[7]</td>";
  echo "<td>$row[8]</td>";


//close table row
  echo "</tr>";
  echo "</table>";

echo <<<_END
<form action="tracker.php" method="POST">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="id" value="$row[0]"><br>
<input type="submit" value="DELETE RECORD"></form><br>
_END;

}




$result->close();
$connection->close();

function get_post($connection, $var)
{
  if(isset($_POST[$var])) {
    return $connection->real_escape_string($_POST[$var]);
  }
  else {
    return false;
  }
}
?>
