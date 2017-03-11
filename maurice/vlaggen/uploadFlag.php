<article><br>
<form action="" method="post">
	<table>
    	<tr>
			<td class="labeling"><label for="fileToUpload">Upload Image:</label></td>
    		<td><input type="file" name="fileToUpload" id="fileToUpload" required></td>
    	</tr>
		<tr>
			<td class="labeling"><label for="flagname">Flag name:</label></td>
			<td class="inputText"><input type="text" id="flagname" name="flagname" required/></td>
		</tr>
		<tr>
			<td class="labeling"><label for="flagcategory">Category name:</label></td>
			<td class="inputText"><input type="text" id="flagcategory" name="flagcategory" required/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Upload Files" name="submit"><td>
		</tr>
	</table>
</form>
</article>

<?php
	if(isset($_POST["submit"]))
	{
		$image = basename($_POST["fileToUpload"]);
		$name = $_POST["flagname"];
		$cat = $_POST["flagcategory"];
		echo $image;
		
		$sql = "INSERT INTO flags (flagname, category, flagimage) VALUES ('$name','$cat','$image')";
		
		//1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "flagdatabase")
			or die("Error connecting to MYSQL server");		
		
		//3. Execute the Query
		$result = mysqli_query($dbc, $sql)
			or die("<br><br>Error querying the database");
	}
?>