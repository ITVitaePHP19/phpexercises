<?php
//update php om je gegevens te updatren
require "connections/connection.php";


session_start();
//kijken of er ingelogd is, zo niet dan dan naar de login pagina
if (ISSET($_SESSION["UserID"])){ }
else{header ('Location: login.php');}
$User=$_SESSION["UserID"];
echo "test ".$User;
$result=$con->query("select * from user where UserID='$User'");



$row=$result->fetch_array(MYSQLI_BOTH);
//echo $row;
//session_start();
//echo "gvoornaam:".$row['FirstName'];
//echo $_SESSION["FirstName"];
$_SESSION["FirstName"]=$row['FirstName'];
$_SESSION["LastName"]=$row['LastName'];
$_SESSION["Email"]=$row['Email'];
$_SESSION["UserName"]=$row['UserName'];
$_SESSION["PassWord"]=$row['PassWord'];
echo $_SESSION["FirstName"].":myfirstname";
//echo $User;
//als er op de update button geclickt is worden
//de in het form ingevoerd waarden in de database geplaast dmv
//sql Update methode, ddarnast word de pagina update nog 
//een keer opgeroepen

if (ISSET($_POST['update']))
{
echo "we are going to update "	;
//update query doorvoeren.
$updateFirstName=$_POST['Firstname'];
$updateLastName=$_POST['Lastname'];
$updateEmail=$_POST['Email'];
//$updatePassword=$_POST['Password'];
//$gehashtepassword=password_hash($Password,PASSWORD_BCRYPT,array('cost'=>10));
echo $updatePassword;	
//upaten van de users gegevens 
$sql= $con->query("UPDATE user SET FirstName='{$updateFirstName}', LastName='{$updateLastName}', Email='{$updateEmail}' WHERE UserID=$User");
header('Location:update.php');
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
				
				<li><a href= "logout.php" >logout</a> </li>
			</ul>
		</nav>
	
	</div>
	<div class="LeftBody"></div>
	<div class="RightBody">
	<form action="" method="POST" name="registerform" id="registerform">
		<div> 
		<input name="Firstname" type="text"  required="required" id="Firstname" placeholder="Firstname" value= "<?php echo $_SESSION["FirstName"] ;?>">
		</div>
		<div> 
		<input name="Lastname" type="text" required="required" id="Lastname"placeholder="Lastname" value= "<?php echo $_SESSION["LastName"] ;?>">
		</div>
		<div>
		<input name="Email" type="text" required="required" id="Email" placeholder="Email"value= "<?php echo $_SESSION["Email"] ;?>">
		</div>
		
		<div>
		<input type= "submit" name="update" value="submit"  >
		</div>
	
	</form>
	
	</div>
	<div class="Footer"></div
</div>
</body>
</html>