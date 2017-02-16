<!doctype html>
<html>
<head>
<title>What is this animal?</title>
</head>
<body>
<form method="post">
	<table border>
		<th>Select the correct answer</th> 
		<tr>
		<td><img src="animal.JPG" alt="animal" width="300px"><img></td>
			<td>
			<input type="radio" name="option" value="cat">cat<br>
			<input type="radio" name="option" value="dog">dog<br>
			<input type="radio" name="option" value="rabbit">rabbit<br>
			<input type="radio" name="option" value="goldfish">goldfish<br>
			</td>
		</tr>
	</table>
	<br>
	<button type="submit">Answer</button>
</form>
<br>
<?php
if($_POST["option"]==cat||$_POST["option"]==rabbit||$_POST["option"]==goldfish){
	echo "Wrong answer";
}
if ($_POST["option"]==dog){
	echo "Correct!";
}
?>
</body>
</html>