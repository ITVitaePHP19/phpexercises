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

//echo <<<_END
//<form action="tracker.php" method="POST"><pre>
//My Activities             <input type="text" name="My_Activities">
//Start Date                <input type="text" name="Start_Date">
//End Date                  <input type="text" name="End_Date">
//Time Spent in Hours       <input type="text" name="Time_spent_in_hours">
//Percentage Completed      <input type="text" name="Percentage_Completed">
//Pleasure                  <input type="text" name="Pleasure">
//Difficulty                <input type="text" name="Difficulty">
//Notes                     <input type="text" name="Notes">
//                          <input type="submit" value="ADD RECORD">
//                          </pre></form>
//_END;

$query = "SELECT * FROM activitytracker";
$result = $connection->query($query);
if (!$result) die ("Database access failed: " . $connection->error);

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j) {
  $result ->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END
<pre>
My Activities            $row[1]
Start Date               $row[2]
End Date                 $row[3]
Time Spent in Hours      $row[4]
Percentage Completed     $row[5]
Pleasure                 $row[6]
Difficulty               $row[7]
Notes                    $row[8]

</pre>
<form action="tracker.php" method="POST">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="id" value="$row[0]">
<input type="submit" value="DELETE RECORD"></form>
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
