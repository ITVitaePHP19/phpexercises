<br><table id="studentselect" border="1"><form action="" method="post">
<th>Naam</th><th>Achternaam</th><th>Email Adres</th><th></th>
<?php

	//1. Connect with mysqli_connect
	$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
			
			
	//2. Assemble Query Strings 
	// $sql = "select * from userregistration if verification matches";
	$sql = "SELECT * FROM userregistration";
			
	//3. Execute the Query
	$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
	
	if ($result->num_rows > 0) 
	{			
		//get the row if its there
		while($row = $result->fetch_assoc()){
			
			echo "<tr><td>" . $row["name"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["mail"] . 
			"</td><td><input type='radio' name='record' value='" . $row["mail"] . "' required></td></tr>";
		}
	} 
	else 
	{
		echo "No Results";
	}			
	
	//4. Close the connection
	mysqli_close($dbc);	
	
	// displayRow();
?>
<tr><td></td><td></td><td></td><td><input type="submit" name="submit" value="Show Activities"></td></tr>
</form>
</table>

<?php
	if(isset($_POST["submit"]))
	{
		if($_POST["record"])
		{	
			$mail = $_POST["record"];
			include_once "displayRecords.php";
			displayRow($mail);
		}
		
	}
?>