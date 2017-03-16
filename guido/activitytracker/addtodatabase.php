<?php

require_once 'connect.php';

  // sql to create table
$sql = "CREATE TABLE ActivityTracker (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
My_Activities VARCHAR(255) NOT NULL,
Start_Date VARCHAR(255),
End_Date VARCHAR(255),
Time_spent_in_hours VARCHAR(255),
Percentage_Completed VARCHAR(255),
Pleasure VARCHAR(255),
Difficulty VARCHAR(255),
Notes VARCHAR(255)
)";

//$result = str_replace('_', ' ', $sql)

if ($conn->query($sql) === TRUE) {
    echo "Table ActivityTracker created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
