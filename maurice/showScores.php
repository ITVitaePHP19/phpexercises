<?php	
	function showHS(){
		?><br><br><form action="" method="post">
			<label for="name">Name</label>
			<input type="text" name="name" required>
			<input type="submit" name="submit" value="Submit Score">
		</form><br><?php
	}
	if(isset($_SESSION["total"]))
	{
		$score = $_SESSION["total"];
	} else $score = 0;
		
	If(isset($_POST["name"]))
	{
		$name = $_POST["name"];
		
		echo $name . ", your total score is: " . $score . "<br><br>";
		
		//1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "php19") or die("Error connecting to MYSQL server");		
				
		//2. Assemble Query Strings 
		$sql = "INSERT INTO yahtzeescores (name, score) VALUES ('$name','$score')";
				
		//3. Execute the Query
		$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
		
		//4. Assemble Highscore Query 
		echo "HIGHSCORES: <br><br>";
		$sql2 = "SELECT * FROM yahtzeescores ORDER BY score DESC LIMIT 10";
		
		//3. Execute the Query
		$result2 = mysqli_query($dbc, $sql2) or die("<br><br>Error querying the database");
		
		echo "<table id='highscore'><tr><td>Rank: </td><td>Name: </td><td>Score:</td></tr>";
		
		if ($result2->num_rows > 0) {
		// output data of each row
		$i = 1;
			while($row = $result2->fetch_assoc()){
				?><tr>
					<td border="1"><?php echo $i; ?></td>
					<td border="1"><?php echo $row["name"]; ?></td>
					<td border="1"><?php echo $row["score"]; ?></td>	
				</tr>
				<?php
				$i++;
			}
		} 
		else {
			echo "0 results";
		}		
		
		//4. Close the connection
		mysqli_close($dbc);	
	}
?>
</table>
