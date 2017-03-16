<?php
//TODO: Add option to update a row dynamically

require('connect.php');
include('a.class.php');

//if delete is not set and no record is to be deleted, 'id' and other values are checked
if (isset($_POST['delete']) && isset($_POST['id'])) {
  $id = $object->get_post('id');
  $query = "DELETE FROM activitytracker WHERE id='$id'";
  $result = $connection->query($query);
//if $result isn't true give database connection error message
  if (!$result) echo "DELETE failed: $query<br>" . $connection->error . "<br><br>";
}

if (isset($_POST['My_Activities']) &&
    isset($_POST['Start_Date']) &&
    isset($_POST['End_Date']) &&
    isset($_POST['Time_spent_in_hours']) &&
    isset($_POST['Percentage_Completed']) &&
    isset($_POST['Pleasure']) &&
    isset($_POST['Difficulty']) &&
    isset($_POST['Notes']))
{

//set up variables using get_post function from class A
  $id                   = $object->get_post('id');
  $myActivities         = $object->get_post('My_Activities');
  $startDate            = $object->get_post('Start_Date');
  $endDate              = $object->get_post('End_Date');
  $timeSpentInHours     = $object->get_post('Time_spent_in_hours');
  $percentageCompleted  = $object->get_post('Percentage_Completed');
  $pleasure             = $object->get_post('Pleasure');
  $difficulty           = $object->get_post('Difficulty');
  $notes                = $object->get_post('Notes');
  $query                = "INSERT INTO activitytracker VALUES" .
      "('$id',  '$myActivities', '$startDate', '$endDate', '$timeSpentInHours', '$percentageCompleted', '$pleasure', '$difficulty', '$notes')";
  $result = $connection->query($query);
  //if $result isn't true (fails), send user an error
  if (!$result) echo "INSERT failed: $query<br>" .
    $connection->error . "<br><br>";
}


echo <<<_END
<link rel="stylesheet" href="stylesheet2.css">
<table class='trackertable'>
<form action="tracker.php" method="POST">
<tr><td>My Activities</td>             <td><input type="text"   name="My_Activities"></td></tr>
<tr><td>Start Date</td>                <td><input type="date"   name="Start_Date"></td></tr>
<tr><td>End Date</td>                  <td><input type="date"   name="End_Date"></td></tr>
<tr><td>Time Spent in Hours</td>       <td><input type="number" name="Time_spent_in_hours"></td></tr>
<tr><td>Percentage Completed</td>      <td><input type="number" name="Percentage_Completed" min='0'></td></tr>
<tr><td>Pleasure</td>                  <td><input type="number" name="Pleasure"   min='0'></td></tr>
<tr><td>Difficulty</td>                <td><input type="number" name="Difficulty" min='0'></td></tr>
<tr><td>Notes</td>                     <td><input type="text"   name="Notes"></td></tr>
<tr>                                   <td><input type="submit" value="ADD RECORD"></td></tr>
</form>
<table>
_END;

$activityHeader = array(
  "My Activities",
  "Start Date",
  "End Date",
  "Time Spent in Hours",
  "Percentage Completed",
  "Pleasure",
  "Difficulty",
  "Notes",
  "Options",
);

//open table here
echo "<table>";
foreach ($activityHeader as $head) {
  echo "<th class='trackerth'> $head </th>";
}

$query = "SELECT * FROM activitytracker";
$result = $connection->query($query);
if (!$result) die ("Database access failed: " . $connection->error);

$rows = $result->num_rows;
//loop through $rows array starting at 0
for ($j = 0; $j < $rows; ++$j) {
//echo <tr> tag for each item
  echo "<tr>";
//search through the data of result
  $result ->data_seek($j);
//returns a numerically indexed array
  $row = $result->fetch_array(MYSQLI_NUM);

//copy $row array to a new array called $rowTb as in 'row table'
//array_shift to take out the first value, which is the ID
//lastly implode the $rowTb array to include <td> tags
$rowTb = $row;
array_shift($rowTb);
//echo implode("</td><td>", $rowTb);
foreach ($rowTb as $table) {
  echo "<td> $table </td>";
}

echo <<<_END
<form action="tracker.php" method="POST">
<td><input type="hidden" name="delete" value="yes">
<input type="hidden" name="id" value="$row[0]">
<input type="submit" value="DELETE RECORD"><br></td></form><br>
_END;
//close table row
echo "</tr>".PHP_EOL;
}
echo "</table>".PHP_EOL;


//close the connections to the database
$result->close();
$connection->close();
echo "<img src='http://127.0.0.1/itvitae/opdrachten/activiteitentracker/images/itvitae.png' alt=''>";
?>
