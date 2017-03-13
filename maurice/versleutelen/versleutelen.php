<article><br>
<form action="" method="post">
	<table class="midtable">
		<tr>
			<td class="labeling"><label for="enctext">Text:</label></td>
			<td><textarea id="enctext" name="enctext" rows="6" cols="30"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Encrypt text" name="submit"></td>
		</tr>
	</table>
</form>

<form action="" method="post">
    Select text file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Text" name="submit">
</form>
<?php
	
	if(isset($_POST["submit"]))
	{
		include "encrypt.php";
		$enc->encrypt();
		?>
		
		<form action="" method="post"><input type="submit" value="Decrypt text" name="decrypt"></form><?php		
	}
	
	if(isset($_POST["decrypt"]))
	{
		include "decrypt.php";
		$dc->decrypt();
	}
?>

</article>