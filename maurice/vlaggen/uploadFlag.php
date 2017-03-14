<article><br>
<form action="" method="post" enctype="multipart/form-data">
	<table>
    	<tr>
			<td class="labeling"><label for="fileToUpload">Upload Image: </label></td>
			<td><input type="file" name="fileToUpload" id="fileToUpload"  required></td>
		</tr>
		<tr>
			<td class="labeling"><label for="flagcategory">Category: </label></td>
			<td class="inputText"><input type="text" id="flagcategory" name="flagcategory" required/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Upload Files" name="submit"><td>
		</tr>
	</table>
</form>
</article>

<?php

class UploadFlag
{
	function upload()
	{
		$target_dir = "img/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		
		if($check !== false)
		{
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} 
		else
		{
			echo "File is not an image";
			$uploadOk = 0;
		}
		
		// Check if file already exists
		if (file_exists($target_file)) 
		{
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000)
		{
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" )
		{
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		} 
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0)
		{
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		}
		else
		{
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
				echo "The file ". basename($_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} 
			else 
			{
				echo "Sorry, there was an error uploading your file.";
			}
		}
		$name = basename($_FILES["fileToUpload"]["name"]);
		$cat = $_POST["flagcategory"];
		$image = $_FILES["fileToUpload"]["name"];
		
		$sql = "INSERT INTO flags (flagname, category, flagimage) VALUES ('$name','$cat','$image')";
		
		// 1. Connect with mysqli_connect
		$dbc = mysqli_connect("localhost", "root", "", "flagdatabase")
			or die("Error connecting to MYSQL server");		
		
		// 3. Execute the Query
		$result = mysqli_query($dbc, $sql)
			or die("<br><br>Error querying the database");
	}
}

	
if(isset($_POST["submit"]))
{
	$uF = new UploadFlag;
	$uF->upload();
}
	
?>