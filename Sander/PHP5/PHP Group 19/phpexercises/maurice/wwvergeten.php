<br><table class="midtable">
	<form action="" method="post">
		<tr>
			<td><label for="email">Email Adres: </label></td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input id="atlogin" type="submit" name="submit" value="Send Email"> 
			</td>	 		
		</tr>
	</form>
</table>

<?php

	if(isset($_POST["submit"]))
	{
		
		$email = $_POST["email"];
		
		//connect
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
				
		//get ww
		$sqlGetID = "SELECT password FROM userregistration WHERE mail='$email'"; 
				
		//3. Execute the Query
		$result = mysqli_query($dbc, $sqlGetID) or die("<br><br>Error querying the database");
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()){
				
				echo "Matching result: " . $row["password"];
			}
		} 
		else 
		{
			echo "No matching email adress found";
		}
	}

?>
