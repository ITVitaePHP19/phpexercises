<?php 
	if(!isset($_SESSION["refresh"]))
	{
		$_SESSION["refresh"] = "1000";
	}	
?>
<!--refresh/listen for input every 1 second-->
<meta http-equiv="refresh" content="<?php echo $_SESSION["refresh"] ?>" url=index2.php?p=bke" />

<table id="commands"  border="1" width="200">
	<tr>
		<td>
			Commands
		</td>
	<tr>
	<tr>
		<td>
			bkestart
		</td>
		<td>
			start the game, (remove bkestart again before you continue)
		</td>
	<tr>
	<tr>
		<td>
			bke1 - bke9: 
		</td>
		<td>
			place X on the given numbers position
		</td>
	<tr>
	<tr>
		<td>
			reset:	
		</td>
		<td>
			reset all fields (remove reset again if you want to continue)
		</td>
	<tr>
	<tr>
		<td>
			Save file to commit input (ctrl-s)
		</td>
	<tr>
</table>
<?php

	if(!isset($_SESSION["one"]))
	{
		$_SESSION["one"] = "1";
	}
	if(!isset($_SESSION["two"]))
	{
		$_SESSION["two"] = "2";
	}
	if(!isset($_SESSION["three"]))
	{
		$_SESSION["three"] = "3";
	}
	if(!isset($_SESSION["four"]))
	{
		$_SESSION["four"] = "4";
	}
	if(!isset($_SESSION["five"]))
	{
		$_SESSION["five"] = "5";
	}
	if(!isset($_SESSION["six"]))
	{
		$_SESSION["six"] = "6";
	}
	if(!isset($_SESSION["seven"]))
	{
		$_SESSION["seven"] = "7";
	}
	if(!isset($_SESSION["eight"]))
	{
		$_SESSION["eight"] = "8";
	}
	if(!isset($_SESSION["nine"]))
	{
		$_SESSION["nine"] = "9";
	}
	if(!isset($_SESSION["input"]))
	{
		$_SESSION["input"] = "boterkaaseneieren/bke.txt";
		
	}
	$one = $_SESSION["one"];
	$two = $_SESSION["two"];
	$three = $_SESSION["three"];
	$four = $_SESSION["four"];
	$five = $_SESSION["five"];
	$six = $_SESSION["six"];
	$seven = $_SESSION["seven"];
	$eight = $_SESSION["eight"];
	$nine = $_SESSION["nine"];
	$winner = false;
	$threeInARow = array("012","345","678","036","147","258","048","246");
	$file = $_SESSION["input"];
	
	?>
	<br>
	<form action="" method="post">
	    File Path:
	    <input type="text" name="input" id="input" required>
	    <input type="submit" value="Submit path" name="submit">
	</form>
	<?php	
	// C:\Users\M\Desktop\wd.txt
	if(isset($_POST["submit"]))
	{
		$_SESSION["input"] = $_POST["input"];
		$_SESSION["refresh"] = "1";
	}
	
	$file = file_get_contents($file);
	
	//commandlist
	$start = "bkestart";
	$cells = array("bke1", "bke2", "bke3", "bke4", "bke5", "bke6", "bke7", "bke8", "bke9");
	$reset = "reset";

	$sessions = array($one, $two, $three, $four, $five, $six, $seven, $eight, $nine);
		
	//draw the board when 'command' bkestart is typed	
	if(strpos($file, $start) !== false)
	{ 
		drawBoard($one, $two, $three, $four, $five, $six, $seven, $eight, $nine);
		
		//set cell to X
		for($i = 0; $i < count($cells); $i++)
		{
			if(strpos($file, $cells[$i]) !== false)
			{
				$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
				$n = $f->format($sessions[$i]);
				
				if($sessions[$i] !== "O")
				{
					$_SESSION[$n] = "X";
				}
			}
		}
		// echo count(array_keys($sessions, "X"));
		
		//board reset function
		function resetBoard()
		{
			unset($_SESSION["one"]);
			unset($_SESSION["two"]);
			unset($_SESSION["three"]);
			unset($_SESSION["four"]);
			unset($_SESSION["five"]);
			unset($_SESSION["six"]);
			unset($_SESSION["seven"]);
			unset($_SESSION["eight"]);
			unset($_SESSION["nine"]);
			unset($_SESSION["fileToUpload"]);
			
		}
		
		//Check if player won
		if(	$sessions[0] == "X" && $sessions[1] == "X" && $sessions[2] == "X" ||
			$sessions[3] == "X" && $sessions[4] == "X" && $sessions[5] == "X" ||
			$sessions[6] == "X" && $sessions[7] == "X" && $sessions[8] == "X" ||
			$sessions[0] == "X" && $sessions[3] == "X" && $sessions[6] == "X" ||
			$sessions[1] == "X" && $sessions[4] == "X" && $sessions[7] == "X" ||
			$sessions[2] == "X" && $sessions[5] == "X" && $sessions[8] == "X" ||
			$sessions[0] == "X" && $sessions[4] == "X" && $sessions[8] == "X" ||
			$sessions[2] == "X" && $sessions[4] == "X" && $sessions[6] == "X"
			)
		{
			echo "You won!";
			$winner = true;
			resetBoard();
		}
		
		//If there's more X's than O's, it's the computers turn
		if(count(array_keys($sessions, "X")) > count(array_keys($sessions, "O")))
		{
			$left = array();
			
			for($i = 0; $i < 9; $i++)
			{
				if($sessions[$i] !== "X" && $sessions[$i] !== "O")
				{
					$left[] += $sessions[$i];
				}
			}
			if(!empty($left))
			{
				$new =  $left[rand(0, (count($left) - 1))];
				$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
				$n = $f->format($new);
				$_SESSION[$n] = "O";
			}
		}
		//Check if tie		
		if(	( 	$_SESSION["one"] !== "1" && $_SESSION["two"] !== "2" && $_SESSION["three"] !== "3" && 
				$_SESSION["four"] !== "4" && $_SESSION["five"] !== "5" && $_SESSION["six"] !== "6" &&
				$_SESSION["seven"] !== "7" &&$_SESSION["eight"] !== "8" && $_SESSION["nine"] !== "9" 
				) 
				&& $winner == false 
				) 
		{ 	
			echo "Tied!"; 
			$winner = true;
			resetBoard();
		}
		
		//Check if computer won
		if(	$sessions[0] == "O" && $sessions[1] == "O" && $sessions[2] == "O" ||
			$sessions[3] == "O" && $sessions[4] == "O" && $sessions[5] == "O" ||
			$sessions[6] == "O" && $sessions[7] == "O" && $sessions[8] == "O" ||
			$sessions[0] == "O" && $sessions[3] == "O" && $sessions[6] == "O" ||
			$sessions[1] == "O" && $sessions[4] == "O" && $sessions[7] == "O" ||
			$sessions[2] == "O" && $sessions[5] == "O" && $sessions[8] == "O" ||
			$sessions[0] == "O" && $sessions[4] == "O" && $sessions[8] == "O" ||
			$sessions[2] == "O" && $sessions[4] == "O" && $sessions[6] == "O"
			
			)
		{
			echo "Computer won!";
			$winner = true;
			resetBoard();
		}
		
		
		var_dump(strpos($file, $reset));
		var_dump($file);
		if(strpos($file, $reset) !== false)
		{ 
			resetBoard();
		}
	}
	
	function drawBoard($one, $two, $three, $four, $five, $six, $seven, $eight, $nine)
	{
		
		echo 	"<table id='bketable' border='1' width='450px' height='450'>" . 
				"<tr><td>" . $one . "</td><td>" . $two . "</td><td>" . $three . "</td></tr>" .
				"<tr><td>" . $four . "</td><td>" . $five . "</td><td>" . $six . "</td></tr>" .
				"<tr><td>" . $seven . "</td><td>" . $eight . "</td><td>" . $nine . "</td></tr>" .
				"</table>";
	}
?>
</table>