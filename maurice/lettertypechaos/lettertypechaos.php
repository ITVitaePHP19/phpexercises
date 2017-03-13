<article><br>
<form action="" method="post">
	<table class="midtable">
		<tr>
			<td class="labeling"><label for="textchaos">Text:</label></td>
			<td><textarea id="textchaos" name="textchaos" rows="6" cols="30"></textarea></td>
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
		include "randomletters.php";
		$lC->randomize();
	}
?>

</article>

