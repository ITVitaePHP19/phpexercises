<?php
//Database connection
require_once 'setup.inc';

try {
  $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
  //Set PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Database connection error: ' . $e->getMessage() . '<br>';
  die();
}

//Close connection
//$db = null;

//show all roles
function showAllRoles(&$db) {
  $sql = "SELECT * FROM sat.role";
  $ask = $db->prepare($sql);
  $ask->execute();
  return $ask->fetchAll(PDO::FETCH_COLUMN);
}
?>
