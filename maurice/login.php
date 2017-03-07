
<div id="banner">
	PHP learning track - Login
</div>	
<table class="midtable">
	<form action="" method="post">
		<tr>
			<td><label for="email">Email Adres: </label><br><br></td>
			<td><input type="text" name="email" required>
				<input type="radio" name="itvitaemail" value="student" required>@itvitaelearning.nl
				<input type="radio" name="itvitaemail" value="teacher" required>@itvitae.nl<br>
			<br></td>
		</tr>
		<tr>
			<td><label for="pw">Wachtwoord: </label><br><br></td>
			<td><input type="password" name="pw" required><br><br></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<p id="logintext"><input id="atlogin" type="submit" name="submit" value="Login"> 
			</td>	 		
		</tr>
	</form>
</table>

<a id="ww" href="index2.php?p=wwvergeten">Wachtwoord vergeten?</a>

<?php

	if(isset($_POST["submit"]))
	{
		$login = $_POST["itvitaemail"];
		$email = $_POST["email"];
		$password = $_POST["pw"];
		
		
		if($login == "student")
		{
			$email .= "@itvitaelearning.nl";
		}
		else
		{
			$email .= "@itvitae.nl";
		}
		$_SESSION["email"] = $email;
		
		//1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
				
		//2. Assemble Query Strings 
		// $sql = "select * from userregistration if verification matches";
		$sql = "SELECT * FROM userregistration WHERE mail='$email'";
				
		//3. Execute the Query
		$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
		
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				//go to the corresponding page
				if($email == $row["mail"] && $password == $row["password"])
				{	
					if($login == "student")
					{
						header("Location: student.php");
						die();
					}
					else
					{
						header("Location: staff.php");
						die();
					}
				}else{ echo "Incorrect email & password combination";}
			}
		}
		else 
		{
			echo "No matching account/password combination found";
		}
		//4. Close the connection
		mysqli_close($dbc);	
		
		// displayRow($email);
		// addRow();
	}

?>
