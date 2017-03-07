<html>
<body>

<?php
// Check for submit
if (!isset($_POST['submit1'])) {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="checkbox" name="artist[]" value="Bon Jovi" />Bon Jovi
	<input type="checkbox" name="artist[]" value="N'Sync" />N'Sync
	<input type="checkbox" name="artist[]" value="Boyzone" />Boyzone
	<input type="checkbox" name="artist[]" value="Britney Spears" />Britney Spears
	<input type="checkbox" name="artist[]" value="Jethro Tull" />Jethro Tull
	<input type="checkbox" name="artist[]" value="Crosby, Stills & Nash" />Crosby, Stills & Nash
	<input type="submit" name="submit1" value="Select" />
</form>

<?php

}

else {
	// Or display the selected artists
	// Use a foreach loop to read and display array elements
	if (is_array($_POST['artist'])) {
	
		echo 'You selected: <br />';
	
		foreach ($_POST['artist'] as $a) {
			echo "<i>$a</i><br />";
		}
	}
	
	else {
		echo 'Nothing selected';
	}
}

?>

<br />
<br />

<?php 

if (isset($_POST['submit2'])) {
	// Or display the selected artists
	// Use a foreach loop to read and display array elements
	if (!is_array($_POST['artist'])) {
		echo 'Nothing selected';
	}
	
	else {
		echo 'You selected: <br />';
	
		foreach ($_POST['artist'] as $a) {
			echo "<i>$a</i><br />";
		}
		
	}
}

else {

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<input type="checkbox" name="artist[]" value="Bon Jovi" />Bon Jovi
	<input type="checkbox" name="artist[]" value="N'Sync" />N'Sync
	<input type="checkbox" name="artist[]" value="Boyzone" />Boyzone
	<input type="checkbox" name="artist[]" value="Britney Spears" />Britney Spears
	<input type="checkbox" name="artist[]" value="Jethro Tull" />Jethro Tull
	<input type="checkbox" name="artist[]" value="Crosby, Stills & Nash" />Crosby, Stills & Nash
	<input type="submit" name="submit1" value="Select" />
</form>

<?php

}

?>

</body>

</html>