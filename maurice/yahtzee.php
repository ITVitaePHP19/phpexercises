<br>
<table class="roll">
	<tr>
		<form action="" method="post">
		<?php
			if(isset($_POST["roll"]))
			{
				include "start.php";
			}
		?>
			<td><input type="checkbox" name="reset" value="reset"></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="hold[]" value="0">Hold</td>
		<td><input type="checkbox" name="hold[]" value="1">Hold</td>
		<td><input type="checkbox" name="hold[]" value="2">Hold</td>
		<td><input type="checkbox" name="hold[]" value="3">Hold</td>
		<td><input type="checkbox" name="hold[]" value="4">Hold</td>
		
	</tr>
	<tr>
		<td><input type="submit" name="roll" value="Roll"></td>
	</tr>
</table>
<table >
	<tr><td width="100px">
		
		</form>
	</td></tr>
</table>