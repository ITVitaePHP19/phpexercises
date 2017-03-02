<?php
$hn = 'localhost';
$un= 'root';
$pw= 'Leonard1';
$db = 'activity';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if (isset($_POST['delete']) && isset($_POST['id'])) {
  $id = get_post($conn, 'id');
  $query = "DELETE FROM activitytracker WHERE id='$id'";
  $result = $conn->query($query);
  if (!$result) echo "DELETE failed: $query<br>" . $conn->error . "<br><br>";
}

if (isset($_POST['id']) &&
    isset($_POST['My_Activities']) &&
    isset($_POST['Start_Date']) &&
    isset($_POST['End_Date']) &&
    isset($_POST['Time_spent_in_hours']) &&
    isset($_POST['Percentage_Completed']) &&
    isset($_POST['Pleasure']) &&
    isset($_POST['Difficulty']) &&
    isset($_POST['Notes']))
{

  $id                   = get_post($conn, 'id');
  $myActivities         = get_post($conn, 'My_Activities');
  $startDate            = get_post($conn, 'Start_Date');
  $endDate              = get_post($conn, 'End_Date');
  $timeSpentInHours     = get_post($conn, 'Time_spent_in_hours');
  $percentageCompleted  = get_post($conn, 'Percentage_Completed');
  $pleasure             = get_post($conn, 'Pleasure');
  $difficulty           = get_post($conn, 'Difficulty');
  $notes                = get_post($conn, 'Notes');
  $query                = "INSERT INTO activitytracker VALUES" .
      "('$id',  '$myActivities', '$startDate', '$endDate', '$timeSpentInHours', '$percentageCompleted', '$pleasure', '$difficulty', '$notes')";
  $result = $conn->query($query);
  if (!$result) echo "INSERT failed: $query<br>" .
    $conn->error . "<br><br>";
}

echo <<<_END
<form action="sqltest.php" method="POST"><pre>
My Activities             <input type="text" name="My_Activities">
Start Date                <input type="text" name="Start_Date">
End Date                  <input type="text" name="End_Date">
Time Spent in Hours       <input type="text" name="Time_spent_in_hours">
Percentage Completed      <input type="text" name="Percentage_Completed">
Pleasure                  <input type="text" name="Pleasure">
Difficulty                <input type="text" name="Difficulty">
Notes                     <input type="text" name="Notes">
                          <input type="submit" value="ADD RECORD">
                          </pre></form>
_END;

$query = "SELECT * FROM activitytracker";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

$rows = $result->num_rows;

for ($j = 0; $j = $rows; ++$j) {
  $result ->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);

  echo <<<_END
<pre>
My Activities            $row[0]
Start Date               $row[1]
End Date                 $row[2]
Time Spent in Hours      $row[3]
Percentage Completed     $row[4]
Pleasure                 $row[5]
Difficulty               $row[6]
Notes                    $row[7]
ID                       $row[8]
</pre>
<form action="sqltest.php" method="POST">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="id" value="$row[8]">
<input type="submit" value="DELETE RECORD"></form>
_END;
}

$result->close();
$conn->close();

function get_post($conn, $var)
{
  return $conn->real_escape_string($_POST[$var]);
}
?>