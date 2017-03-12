<?php
require "connections/connection.php";
session_start();
if (ISSET($_POST['submit']))
{
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	//$gehashtepassword=  
	echo "attempt to login";
	$result=$con->query("SELECT * FROM user WHERE Email='$Email' ");
	//PassWord ='$Password' AND
	
	$row=$result->fetch_array(MYSQLI_BOTH);
	if (Password_verify($Password,$row['PassWord']))
	{
	session_start();
	
	$_SESSION["UserID"]=$row['UserID'];
	//userlevel voor de toegekende bevoegdheden
	$_SESSION["Userlevel"]=$row['UserLevel'];
	
		if ($_SESSION["Userlevel"]==2)
			{
			header('Location: accountAdmin.php');
			}
			else
			{
			header('Location: account.php');
			}
	}
	else
	{
		session_start();
		echo"wrong login";
	}
	
}
	
?>

<</doctype html>
<html>
<head>
<link href="css/master.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title>login </title>
</head>

<body>
<p> login</p> 
<div class="Container">
	<div class="Header"></div>
	<div class="Menu">
		
	
	</div>
	<div class="LeftBody"></div>
	<div class="RightBody"><p> 
	login page
	<form action="" method="POST" name="registerform" id="registerform">
		<div>
		<input name="Email" type="text" required="required" id="Email" placeholder="Email">
		</div>
		<div>
		<input name="Password" type="text" required="required" id="Password" placeholder="Password">
		</div>
		<div>
		<input type= "submit" name="submit" value="submit"  >
		</div>
	
	</form>
	
	
	</p> </div>
	
	<div class="Footer"></div
</div>
</body>
</html>