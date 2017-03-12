<?php
require "connections/connection.php";
require "sanatize.php";
//has function to validate form data
require "validate.php";
//create an error aray to store errormessages
$errrors=array();


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
	//when the submit button is clicked
	if(ISSET($_POST['submit']))
	{
	
	print "MESSAGE"."<br />\n";
	//is your gender filled in
	if (empty($Gender)){
		$Gender1="we think you have a gender,please say so";
		print $Gender1;
		$errors['gender1']=$Gender1;
		
	}
	//password check
	if (strlen($Password) <= 7)
	{
		$Password1= "a password has to consist of at least 8 characters";
		print $Password1."<br />\n";
		$errors['password1']=$Password1;
	}
	//firstname check
	$Firstname=escape($Firstname);
	echo $Firstname;
	if (strlen($Firstname) <= 2)
	{
		$Firstname1= "a firstname has to consist of at least 2 characters";
		print $Firstname1."<br />\n";
		$errors['password1']=$Password1;
	}
	//The code below shows a simple way to check if the name field only contains letters and whitespace. 
	//If the value of the name field is not valid, then store an error message:
	
	if (!preg_match("/^[a-zA-Z ]*$/",$Firstname)) {
	$Firstname2 = "Only letters and white space allowed in firstname "; 
	print $Firstname2;
	$errors['firstname2']=$Firstname2;
	
	}	
		
	if (empty($errors))
	{
	//after first control of password: hashing of password
	//gehashte password 
	//echo $Gender;
	$gehashtepassword=password_hash($Password,PASSWORD_BCRYPT,array('cost'=>10));
	$sql=$con->query("INSERT INTO user(FirstName,LastName,Email,UserName,PassWord) Values ('{$Firstname}','{$Lastname}','{$Email}','{$Username}','{$gehashtepassword}')");	
	print "you have sent a request for registration";
	}
}	
	
	
	
	
	
	
	
	
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


?>
</html>