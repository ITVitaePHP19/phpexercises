<?php
$connection = mysqli_connect('localhost', 'root', 'Leonard1');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'activity');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
