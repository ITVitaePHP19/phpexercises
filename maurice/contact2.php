<article>
<form action="" method="post">
	<br>
	<table class="midtable">
		<tr>
			<td class="labeling"><label for="firstname">First name:</label></td>
			<td class="inputText"><input type="text" id="firstname" name="firstname"/></td>
		</tr>	
		<br>
		<tr>
			<td class="labeling"><label for="lastname">Last name:</label></td>
			<td class="inputText"><input type="text" id="lastname" name="lastname"/></td>
		</tr>
		<br>
		<tr>
			<td class="labeling"><label for="email">Email address:</label></td>
			<td class="inputText"><input type="text" id="email" name="email"/></td>
		</tr>
		<tr>
			<td class="labeling"><label for="msg">Message:</label></td>
			<td><textarea id="msg" name="msg" rows="6" cols="30"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit form" name="submit"></td>
		</tr>
		
	</table>	
	
	<br>
	<?php		
		if( isset($_POST['submit']) ) 
		{
			include('sendform.php');
		}		
	?>
</form>
</article>