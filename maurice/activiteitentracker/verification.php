<div id="banner">
	PHP learning track - Verification
</div>	
<table class="midtable">
	<form action="" method="post">
	<tr>
		<td><label for="code">Verification code: </label></td>
		<td><input type="number" name="code" required><br></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<p id="logintext"><input id="atregister" type="submit" name="submit" value="Verify Account"> 
		</td>	 		
	</tr>
	</form>
</table>
<?php
	if(isset($_POST["submit"]))
	{
		$code = $_POST["code"];
		
		//1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
				
				
		//2. Assemble Query Strings 
		// $sql = "select * from userregistration if verification matches";
		$sql = "SELECT * FROM userregistration WHERE code='$code'";
				
		//3. Execute the Query
		$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
		
		if ($result->num_rows > 0) {			
			//get the row if its there
			while($row = $result->fetch_assoc()){
				
				//set verification to true if code matches
				$sql2 = "UPDATE userregistration SET verified='1' WHERE code='$code'";
				
				//3. Execute the Query
				$result2 = mysqli_query($dbc, $sql2) or die("<br><br>Error querying the database");
				echo "Account verified<br><br>";
				echo "<a id='loginlink' href='index2.php?p=login'>Login</a>";
				
				//set code back to 0
				$sql3 = "UPDATE userregistration SET code='0' WHERE verified='1'";
				
				//3. Execute the Query
				$result3 = mysqli_query($dbc, $sql3) or die("<br><br>Error querying the database");
				
				//2. Assemble Query Strings 
				$sqlUser = "SELECT id FROM userregistration WHERE mail='$email'";
			}
		} 
		else {
			echo "Verification code doesn't match any accounts, or has already been verified";
			echo "<br><br><a id='loginlink' href='index2.php?p=login'>Login</a>";
		}			
		
		//4. Close the connection
		mysqli_close($dbc);	
	}
?>