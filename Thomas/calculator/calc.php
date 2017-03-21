<?php
include "index.php";

if (isset($_POST["number"]))
{
$number = $_POST["number"];
}
if (isset($_POST["op"]))
{
$op = $_POST["op"];
}
if (isset($_POST["ans"]))
{
$ansm = $_POST["ans"];
}

$sum = $_SESSION["sum"];

if (isset($op))
{
if($op == "=")
{
	$math = trim($sum);
	if(!($calc = create_function("", "return (" . $math . ");" )))
	{
		$sum = "ERROR = Invalid Sum";
	}
	else 
	{
	$sumsol = 0 + $calc();
	$sum = $sum . " = " . $sumsol;
	$ans = $sumsol;
	$_SESSION["ans"] = $ans;
	}
	
	$_SESSION["sum"] = $sum;
	
	header("Location: index.php");
}
}

if (isset($ansm))
{
if($ansm == true)
{
$number = $_SESSION["ans"];
}
}

if(is_numeric(substr($_SESSION["sum"] , -1)))
{
$sum = $sum . $number;
}
else 
{
$sum = $sum . " " . $number;
}

if (isset($op))
{
if ($op == true && $op!="=")
{
$sum = $sum . " " . $op . " ";
}

if($op == "C")
{
	$sum = "";
}
}

$_SESSION["sum"] = $sum;

header("Location: index.php");