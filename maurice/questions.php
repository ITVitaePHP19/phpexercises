<?php
	if(isset($_POST["submit"])) {
		include "answers.php";
	}
	$rand = rand(0, 23);
	$rand2 = rand(0, 23);
	$rand3 = rand(0, 23);
	while($rand == $rand2 || $rand == $rand3 || $rand2 == $rand3){
		$rand2 = rand(0, 23);
		$rand3 = rand(0, 23);
	}
	
	$answer = "<input type='radio' name='answer' value='" . $flagnames[$rand] . "' required>" . $flagnames[$rand];
	$_SESSION["rightanswer"] = $flagnames[$rand];
	$wrong1 = "<input type='radio' name='answer' value='" . $flagnames[$rand2] . "' required>" . $flagnames[$rand2];
	$wrong2 = "<input type='radio' name='answer' value='" . $flagnames[$rand3] . "' required>" . $flagnames[$rand3];
	
	$r = array($answer, $wrong1, $wrong2);
	shuffle($r);
?>

<article>
	<table>
		<tr>
			<td><img src="<?php echo $flagimages[$rand] ?>" height="150" width="auto"></td>
			<td>
				<form action="" method="post">
					 <?php echo $r[0] ?>
					 <?php echo $r[1] ?>
					 <?php echo $r[2] ?>				
			</td>
		</tr>
		<tr>
			<td></td>
			<td><br><?php echo "<input type='submit' name='submit' value='Next'>";?></td>
		</tr>
				</form>
	</table>
	<?php
	
?>
</article>