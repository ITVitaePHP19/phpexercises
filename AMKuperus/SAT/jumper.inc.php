<?php
//Database connection
require_once 'config.inc';

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

//Add a new user
function addUser(&$db, $user, $token) {
  $sql = " INSERT INTO sat.users
  (sat.users.userName, sat.users.passCode, sat.users.firstName, sat.users.lastName,
    sat.users.email, sat.users.role, sat.users.token)
    VALUES
    (:userName, :passCode, :firstName, :lastName, :email, :role, :token)";
  $ask = $db->prepare($sql);
  $ask->bindValue(':userName', $user['userName'], PDO::PARAM_STR);
  $ask->bindValue(':passCode', $user['passCode'], PDO::PARAM_STR);
  $ask->bindValue(':firstName', $user['firstName'], PDO::PARAM_STR);
  $ask->bindValue(':lastName', $user['lastName'], PDO::PARAM_STR);
  $ask->bindValue(':email', $user['email'], PDO::PARAM_STR);
  $ask->bindValue(':role', 'registered', PDO::PARAM_STR);
  $ask->bindValue(':token', $token, PDO::PARAM_STR);
  $ask->execute();
  //TODO try/catch with PDOException
}

//TODO Activate the account

//Check if username is already in the database
function checkUsernameExist(&$db, $search) {
    $sql = "SELECT userName FROM sat.users WHERE userName = :search";
    $ask = $db->prepare($sql);
    $ask->bindValue(':search', $search, PDO::PARAM_STR);
    $ask->execute();
    return $ask->fetchAll(PDO::FETCH_ASSOC);
}

//Check if the emailadres is already in the database
function checkEmailExist(&$db, $search) {
  $sql = "SELECT email FROM sat.users WHERE email = :search";
  $ask = $db->prepare($sql);
  $ask->bindValue(':search', $search, PDO::PARAM_STR);
  $ask->execute();
  return $ask->fetchAll(PDO::FETCH_ASSOC);
}

//show all roles
function showAllRoles(&$db) {
  $sql = "SELECT * FROM sat.role";
  $ask = $db->prepare($sql);
  $ask->execute();
  return $ask->fetchAll(PDO::FETCH_COLUMN);
}
?>
