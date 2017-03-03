<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>Boter Kaas en Eieren</title>
</head>
<body>

<?php
include 'code.php';
?>

<div id="ttt">
<h1>Boter, Kaas en Eieren</h1>
<table>
	<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
	</tr>
	<tr>
		<td><b>a</b></td>
		<td><div class="game"><?php echo $_SESSION['a1']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['a2']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['a3']; ?></div></td>
	</tr>
	<tr>
		<td><b>b</b></td>
		<td><div class="game"><?php echo $_SESSION['b1']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['b2']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['b3']; ?></div></td>
	</tr>
	<tr>
		<td><b>c</b></td>
		<td><div class="game"><?php echo $_SESSION['c1']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['c2']; ?></div></td>
		<td><div class="game"><?php echo $_SESSION['c3']; ?></div></td>
	</tr>
</table>
<p>Beurt: speler <b><?php echo $opponent; ?></b> </p> 
<form method="post">
<select name="field_select[]">
<?php
	//for each item in array '$fields', make a drop-down option 
	//if item is selected, remove it from menu after submit, so it can't be selected a second time.
	$fields = array('a1','a2','a3','b1','b2','b3','c1','c2','c3');
	foreach($fields as $field){
		if($_SESSION[$field] != "X" && $_SESSION[$field] != "O"){
			echo '<option>'.$field.'</option>';
		}
	}
?>
</select>
	<button type="submit" name="submit" <?php echo $disable_sub; ?>>Submit</button>
	<button type="submit" name="reset">Reset</button>
</form>
<p> <?php echo $end_message ?> </p>
</div>
</body>
</html>
