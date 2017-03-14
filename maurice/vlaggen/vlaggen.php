<article><br>
	<table id="flagtable">
		<tr>
			<td class="flagheader">Flag Name</td>	
			<td class="flagheader">Category</td>	
			<td class="flagheader">Flag</td>
		</tr>
		<?php
		
		class Flag
		{
			function showFlag()
			{
				// phpinfo();
				$sorting = array
				(
					"sort_flagname" => "Flag Name", 
					"sort_category" => "Category",
					"test" => "Test",
					"uploadFlag" => "Upload Flag"
				); 
				?><p id="flagsort">Sort By:<br><?php
				//if not null, $p = 'p'
				$p = (isset($_GET['p'])) ? $_GET['p'] : "";
					
				//loop through the array; if $p is the same as $url, it is the active page
				foreach ($sorting as $url => $label) 
				{
					?>
				<a class='navigation2 <?=$p == $url ? " active'" : "'"?> href="index2.php?p=<?=$url?>" > <?=$label?> </a> | &nbsp
				<?php
				}
				?></p><?php
				switch($_GET['p'])
				{
					case 'sort_flagname':
						$sql = "SELECT * FROM flags ORDER BY flagname";
						break;
					case 'sort_category':
						$sql = "SELECT * FROM flags ORDER BY category";
						break;
					case 'uploadFlag':
						include "uploadFlag.php";
						$uf->upload();
						break;
					default:
						$sql = "SELECT * FROM flags";
						break;
				}
					
				//1. Connect with mysqli_connect
				$dbc = mysqli_connect("localhost", "root", "", "flagdatabase")
					or die("Error connecting to MYSQL server");		
				
				//3. Execute the Query
				$result = mysqli_query($dbc, $sql)
					or die("<br><br>Error querying the database");
				
				
				if ($result->num_rows > 0) 
				{
					// output data of each row
					while($row = $result->fetch_assoc()){
						?><tr>
							<td class="flagcell"><?php echo $row["flagname"]; ?></td>
							<td class="flagcell"><?php echo $row["category"]; ?></td>
							<td class="flagcell"><?php echo "<img height='100' width='auto' src='img/" . $row["flagname"] . "'>"; ?></td>	
						</tr>
						<?php
					}
				} 
				else {
					echo "0 results";
				}
				
				//4. Close the connection
				mysqli_close($dbc);	
			}
		}
		$f = new Flag;
		?>
	</table>	
</article>
