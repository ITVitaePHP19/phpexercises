<div id="banner">
	PHP learning track - Registratie
</div>	
<table class="midtable">
	<form action="learningtrack.php" method="post">
		<tr>
			<td><label for="name">Naam: </label><br><br></td>
			<td><input type="text" name="name" required><br><br></td>
		</tr>
		<tr>
			<td><label for="lastname">Achternaam: </label><br><br></td>
			<td><input type="text" name="lastname" required><br><br></td>
		</tr>
		<tr>
			<td><label for="email">Email Adres: </label><br><br></td>
			<td><input type="text" name="email" required>
				<input type="radio" name="itvitaemail" value="student" required>@itvitaelearning.nl
				<input type="radio" name="itvitaemail" value="teacher" required>@itvitae.nl<br>
			<br></td>
		</tr>
		<tr>
			<td><label for="pw">Wachtwoord: </label><br><br></td>
			<td><input type="password" name="pw" required><br><br></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<p id="logintext"><input id="atregister" type="submit" name="submit" value="Registreer"> 
				Al geregistreerd?<a id="loginlink" href="index2.php?p=login">Login</a></p>
			</td>	 		
		</tr>
	</form>
</table>
