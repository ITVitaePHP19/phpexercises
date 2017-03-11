<article><br>
	<h3>Vlaggen</h3>
	<br>Sort By:<br> 
<table id="flagtable">
<tr>
	<td class="flagcell">Flag Name</td>	
	<td class="flagcell">Category</td>	
	<td class="flagcell">Flag</td>
</tr>	
<?php 
	// phpinfo();
	$sorting = array(
		"sort_flagname" => "Flag Name", 
		"sort_category" => "Category",
		"test" => "Test",
	); 
			
	//if not null, $p = 'p'
	$p = (isset($_GET['p'])) ? $_GET['p'] : "";
				
	//loop through the array; if $p is the same as $url, it is the active page
	foreach ($sorting as $url => $label) {?>
		<a <?=$p == $url ? 'class="active navigation"' : ""?> href="index2.php?p=<?=$url?>" > <?=$label?> </a> | <?php
	}
				
	//1. Connect with mysqli_connect
	$dbc = mysqli_connect("localhost", "root", "", "flagdatabase") or die("Error connecting to MYSQL server");		
			
	//2. Assemble Query Strings 
	$sql = "SELECT * FROM flags ORDER BY category";
			
	//3. Execute the Query
	$result = mysqli_query($dbc, $sql) or die("<br><br>Error querying the database");
			
	if ($result->num_rows > 0) {
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
?>