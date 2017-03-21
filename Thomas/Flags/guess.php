<?php
session_start();

if (isset($_POST["guess"]))
{
$guess = $_POST["guess"];

if ($guess == $_SESSION["answer"])
{
	$result =  "You are right!";
}

else 
{
	$result = "You are wrong. The answer was " . $_SESSION["answer"];
}
	$_SESSION['result'] = $result;
	header("Location: quiz.php");
}