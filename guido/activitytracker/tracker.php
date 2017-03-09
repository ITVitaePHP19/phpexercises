<?php
//TO DO: Decide whether or not DELETE RECORD button is needed
//TO DO: Edit the activity tracker layout so the output of the query is shown in same table
//TO DO: Clean up the activity tracker code starting on line 97
//       by maybe placing the output of query into an array or object
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
<table \class='trackertable'>
<form action="tracker.php" method="POST">
<tr><td>My Activities</td><td><input type="text" name="My_Activities"></td></tr>
<tr><td>Start Date</td>                <td><input type="date"   name="Start_Date"></td></tr>
<tr><td>End Date</td>                  <td><input type="date"   name="End_Date"></td></tr>
<tr><td>Time Spent in Hours</td>       <td><input type="text"   name="Time_spent_in_hours"></td></tr>
<tr><td>Percentage Completed</td>      <td><input type="number" name="Percentage_Completed" min='0'></td></tr>
<tr><td>Pleasure</td>                  <td><input type="number" name="Pleasure"   min='0'></td></tr>
<tr><td>Difficulty</td>                <td><input type="number" name="Difficulty" min='0'></td></tr>
<tr><td>Notes</td>                     <td><input type="text"   name="Notes"></td></tr>
<tr rowspan="2">                       <td><input type="submit" value="ADD RECORD"></td></tr>
</form>
<table><br>
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
  echo "<td>";
//copy $row array to a new array called $rowTb as in 'row table'
//array_shift to take out the first value, which is the ID
//lastly implode the $rowTb array to include <td> tags
$rowTb = $row;
array_shift($rowTb);
echo implode("</td><td>", $rowTb);
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
