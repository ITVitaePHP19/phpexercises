<article><br>
	<h3>Test</h3>
		<?php 
			// phpinfo();
							
			//1. Connect with mysqli_connect
			$dbc = mysqli_connect("localhost", "root", "", "flagdatabase")
				or die("Error connecting to MYSQL server");	
			
			//2. Assemble Query Strings 
			$sql = "SELECT * FROM flags";
			
			//3. Execute the Query
			$result = mysqli_query($dbc, $sql)
				or die("<br><br>Error querying the database");
			
			$flagnames = array();
			$flagimages = array();
								
			if ($result->num_rows > 0) 
			{
				$i = 0;

				// output data of each row
				while($row = $result->fetch_assoc()){
										
					$flagnames[$i] = $row["flagname"];
					$flagimages[$i] = $row["flagimage"];

					$i++;
				}
			} 
			else 
			{
				echo "0 results";
			}
			
			include 'questions.php';						
			
			//4. Close the connection
			mysqli_close($dbc);	
		
		?>
</article>