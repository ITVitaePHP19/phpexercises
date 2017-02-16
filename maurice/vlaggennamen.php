<?php
	//1. Connect with mysqli_connect
	$dbc = mysqli_connect("localhost", "root", "", "flagdatabase")
				or die("Error connecting to MYSQL server");		
			
	//2. Assemble Query Strings 
	$sql = "SELECT * FROM flags" .
	"ORDER BY flagname";
			
	//3. Execute the Query
	$result = mysqli_query($dbc, $sql)
		or die("<br><br>Error querying the database");
			
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()){
			?><tr>
				<td><?php echo $row["flagname"]; ?></td>
				<td><?php echo $row["category"]; ?></td>
				<td><?php echo "<img height='100' width='auto' src='" . $row["flagname"] . "'>"; ?></td>	
			</tr>
			<?php
			}
		} 
		else {
			echo "0 results";
		}		
		
			
		//4. Close the connection
		mysqli_close($dbc);	
?>