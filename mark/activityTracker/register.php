<?php
require "connections/connection.php";
//has function to validate form data
require "validate.php";
if(ISSET($_POST['submit']))
{
	
	session_start();
	
	$Gender=$_POST['gender'];
	//validation of input form by function 'validateInput'
	//which is included by file 'validate.php'
	$Firstname = validateInput($_POST["Firstname"]);
	$Lastname = validateInput($_POST["Lastname"]);
	$Username = validateInput($_POST["Username"]);
	$Password = validateInput($_POST["Password"]);
	$Email = validateInput($_POST["Email"]);
		
	//after first control of password: hashing of password
	//gehashte password 
	//echo $Gender;
	$gehashtepassword=password_hash($Password,PASSWORD_BCRYPT,array('cost'=>10));
	
	
	//if (strlen($Firstname<2)|| strlen($Lastname<2)){
	//	print "your firname,lastname must be longer than 1";
//		exit();
//	}
	
	
	
	
	
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
		Firstname<input name="Firstname" type="text" required="required" value = "<?php if (isset($_POST["Firstname"])){echo $Firstname;}  ?>"id="Firstname" placeholder="Firstname" >
		</div>
		<div> 
		Lastname <input name="Lastname" type="text" required="required" value = "<?php if (isset($_POST["Lastname"])){echo $Lastname;}  ?> "id="Lastname"placeholder="Lastname">
		</div>
		<div>
		Username<input name="Username" type="text" required="required" value = "<?php if (isset($_POST["Username"])){echo $Username;}  ?>"id="Username" placeholder="Email">
		</div>
		<div>
		Email<input name="Email" type="text" required="required" value = "<?php if (isset($_POST["Email"])){echo $Email;}?>" id="Email" placeholder="Email">
		</div>
		<div>
		Password<input name="Password" type="password" required="required" value = "<?php if (isset($_POST["Password"])){echo $Password;}?>"id="Password" placeholder="Password">
		</div>
		<div>gender <br>
		<?php 
		//echo $Gender; 
		?>
		<input name="gender" type="radio" <?php if (isset($Gender) && $Gender=="male")echo "checked";?> value="male" >Male<br>
		<input name="gender" type="radio" <?php if (isset($Gender) && $Gender=="female")echo "checked";?>value="female" > Female<br>
		</div>
		<div>
		<input type= "submit" name="submit" value="submit"  >
		</div>
	
	</form>
	
	</div>
	<div class="Footer"></div
</div>
</body>
<?php
if(ISSET($_POST['submit']))
{
	if (empty($Gender)){
		print "we think you have a gender";
		exit();
	}
	
	if (strlen($Password) <= 7)
	{
		
		print "password at least 8 characters";
		exit();
	}
	
	//The code below shows a simple way to check if the name field only contains letters and whitespace. 
	//If the value of the name field is not valid, then store an error message:
	
	if (!preg_match("/^[a-zA-Z ]*$/",$Firstname)) {
	$nameErr = "Only letters and white space allowed in firstname "; 
	print $nameErr;
	exit();
	}	
		
		
		
		$sql=$con->query("INSERT INTO user(FirstName,LastName,Email,UserName,PassWord) Values ('{$Firstname}','{$Lastname}','{$Email}','{$Username}','{$gehashtepassword}')");	
		
}

?>
</html>