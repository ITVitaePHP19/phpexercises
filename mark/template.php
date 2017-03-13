<?php
require "connections/connection.php";
?>
<?php
//if (isset($_POST['submit'])){
if (ISSET($_POST['submit'])){	
echo "heleelo";	
	
}
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
				<li><a href= " ">register</a> </li>
				<li><a href= "login.php" >login</a> </li>
			</ul>
		</nav>
	
	</div>
	<div class="LeftBody"></div>
	<div class="RightBody">
	<form action="" method="POST" name="registerform" id="registerform">
		<div> 
		<input name="Firstname" type="text" required="required" id="Firstname" placeholder="Firstname" >
		</div>
		<div> 
		<input name="Lastname" type="text" required="required" id="Lastname"placeholder="Lastname">
		</div>
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
	
	</div>
	<div class="Footer"></div
</div>
</body>
</html>