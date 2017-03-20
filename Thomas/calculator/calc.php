<?php
include "index.php";

if (isset($_POST["number"]))
{
$number = $_POST["number"];
}
$op = $_POST["op"];
$ansm = $_POST["ans"];

$sum = $_SESSION["sum"];

if($op == "=")
{
	$math = trim($sum);
	if(!($calc = create_function("", "return (" . $math . ");" )))
	{
		$sum = "ERROR = last char was not a number";
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

if($ansm == true)
{
$number = $_SESSION["ans"];
}

if(is_numeric(substr($_SESSION["sum"] , -1)))
{
$sum = $sum . $number;
}
else 
{
$sum = $sum . " " . $number;
}

if ($op == true && $op!="=")
{
$sum = $sum . " " . $op . " ";
}

if($op == "C")
{
	$sum = "";
}

$_SESSION["sum"] = $sum;

header("Location: index.php");