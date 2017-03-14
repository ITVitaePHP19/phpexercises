<?php
	require_once('score.php');
	
	function roll()
	{
		
		//split session into array
		if(isset($_SESSION["roll"]))
		{
			$roll = str_split($_SESSION["roll"]);
		}
		$newroll = "";
		
		if(!isset($_SESSION["tries"]))
		{
			$_SESSION["tries"] = 1;
		}
		if(!isset($_SESSION["turns"]))
		{
			$_SESSION["turns"] = "";
		}
		
		//3 tries
		if($_SESSION["tries"] < 4)
		{
			$_SESSION["turns"] = "";			
			$_SESSION["tries"]++;
			
			if($_SESSION["tries"] > 2)
			{
				$_SESSION["turns"] = "required";
			}
			
		} 
		if($_SESSION["tries"] > 3)
		{ 
				$_SESSION["tries"] = 1;
				$_SESSION["turns"] = "";
		}
		// var_dump("tries: " . $_SESSION["tries"]);
		// var_dump("turns: " . $_SESSION["turns"]);
	
		//if 1+ checkboxes are checked
		if(isset($_POST["hold"]))
		{
			$hold = $_POST["hold"];
			
			//get the held dice
			foreach ($hold as $die)
			{
				//match them with their values
				switch($die)
				{
					case 0:
						$newroll .= $roll[0];
						echo "<td class='die'><img height='75' width='75' src='die" . $roll[0]  . ".png'></td>";
						break;
					case 1:
						$newroll .= $roll[1];
						echo "<td class='die'><img height='75' width='75' src='die" . $roll[1]  . ".png'></td>";
						break;
					case 2:
						$newroll .= $roll[2];
						echo "<td class='die'><img height='75' width='75' src='die" . $roll[2]  . ".png'></td>";
						break;
					case 3:
						$newroll .= $roll[3];
						echo "<td class='die'><img height='75' width='75' src='die" . $roll[3]  . ".png'></td>";
						break;
					case 4:
						$newroll .= $roll[4];
						echo "<td class='die'><img height='75' width='75' src='die" . $roll[4]  . ".png'></td>";
						break;
				}
			}
		}
		
		//held dice into the session
		$_SESSION["roll"] = $newroll;
		
		//5 throws minus held throws/
		while(strlen($_SESSION["roll"]) < 5)
		{
			$throw = rand(1, 6);
			echo "<td class='die'><img height='75' width='75' src='die" . $throw  . ".png'></td>";
			$_SESSION["roll"] .= $throw;
		}		
		
		//echo hold buttons
		if($_SESSION["tries"] < 3)
		{
		echo '<tr>
		<td><input type="checkbox" name="hold[]" value="0">Hold</td>
		<td><input type="checkbox" name="hold[]" value="1">Hold</td>
		<td><input type="checkbox" name="hold[]" value="2">Hold</td>
		<td><input type="checkbox" name="hold[]" value="3">Hold</td>
		<td><input type="checkbox" name="hold[]" value="4">Hold</td>
		</tr>';
			
		}
	}
?>