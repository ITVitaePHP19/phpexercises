<?php
//require "connections/connection.php";
session_start();
unset($_SESSION["UserID"]);
session_destroy();
echo"you are logged out"
?>

</doctype html>
<html>
<head>
<link href="css/master.css" rel="stylesheet" type="text/css"/>
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title> Untitled documnet </title>
</head>

<body>
<div class="Container">
	<div class="Header"></div>
	<div class="Menu">
		<nav>
			<ul>
				
				<li><a href= "login.php" >login</a> </li>
			</ul>
		</nav>
	
	</div>
	<div class="LeftBody"></div>
	<div class="RightBody">
	
	</div>
	<div class="Footer"></div
</div>
</body>
</html>