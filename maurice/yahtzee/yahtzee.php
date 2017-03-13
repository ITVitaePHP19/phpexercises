<article id="yahtzee">
<br>
<table class="roll" border="1">
	<tr>
		<form action="" method="post">
		<?php
			if(isset($_POST["roll"]))
			{
				include "start.php";
				$yS->start();
			}
		?>
			<td><input type="checkbox" name="reset" value="reset">Restart Game</td>
	</tr>
	<tr>
		<td><input id="rollbutton" type="submit" name="roll" value="Roll"></td>
	</tr>
		</form>
</table>

<?php
	require_once('showScores.php');

	// echo "<br>Total Selected: " . $_SESSION["selectedScores"];
	if(!isset($_SESSION["selectedScores"]))
	{
		$_SESSION["selectedScores"] = 0;
	}
	
	//post score if all scores are selected
	if($_SESSION["selectedScores"] > 12)
	{
		showHS();
	}
?>
</article>