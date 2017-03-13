<article><br>
<form action="" method="post">
	<table class="midtable">
		<tr>
			<td class="labeling"><label for="frequentie">Text:</label></td>
			<td><textarea id="frequentie" name="frequentie" rows="6" cols="30"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>
</form>
<?php
	// phpinfo();
	
	if(isset($_POST["submit"]))
	{
		include "frequentie.php";
		$lF->calcFrequentie();
	}
?>

</article>