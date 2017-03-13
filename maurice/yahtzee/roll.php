<?php
	class YahtzeeRoll
	{
		function roll()
		{
			require_once('score.php');
			
			//split session into array
			if(isset($_SESSION["roll"]))
			{
				$roll = str_split($_SESSION["roll"]);
			}
			$newroll = "";
			
			//set amount of 'tries' to 0 by default, every roll is one try, 3 tries before you have to pick a score 
			if(!isset($_SESSION["tries"]) || $_SESSION["tries"] == 3)
			{
				$_SESSION["tries"] = 0;
			}
			//turns will force the player to pick a score after 3 tries, and set back to default if score was picked last roll
			if(!isset($_SESSION["turns"]) || $_SESSION["turns"] == "required")
			{
				$_SESSION["turns"] = "";
			}

			//if no 3 turns yet, add a try every roll submission
			if($_SESSION["tries"] !== 3)
			{
				$_SESSION["turns"] = "";			
				$_SESSION["tries"]++;
				
				//if tries is now 3, player has to pick a score
				if($_SESSION["tries"] == 3)
				{
					$_SESSION["turns"] = "required";
				}
			} 
				
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
							echo "<td class='die'><img height='75' width='75' src='img/die" . $roll[0]  . ".png'></td>";
							break;
						case 1:
							$newroll .= $roll[1];
							echo "<td class='die'><img height='75' width='75' src='img/die" . $roll[1]  . ".png'></td>";
							break;
						case 2:
							$newroll .= $roll[2];
							echo "<td class='die'><img height='75' width='75' src='img/die" . $roll[2]  . ".png'></td>";
							break;
						case 3:
							$newroll .= $roll[3];
							echo "<td class='die'><img height='75' width='75' src='img/die" . $roll[3]  . ".png'></td>";
							break;
						case 4:
							$newroll .= $roll[4];
							echo "<td class='die'><img height='75' width='75' src='img/die" . $roll[4]  . ".png'></td>";
							break;
					}
				}
			}
			
			//held dice into the session
			$_SESSION["roll"] = $newroll;
			
			//5 throws minus held throws/
			while(strlen($_SESSION["roll"]) < 5)
			{
				$throw = mt_rand(1, 6);
				echo "<td class='die'><img height='75' width='75' src='img/die" . $throw  . ".png'></td>";
				$_SESSION["roll"] .= $throw;
			}		
			
			//echo hold buttons
			if($_SESSION["tries"] < 3)
			{
				echo	'<tr>
							<td><input type="checkbox" name="hold[]" value="0">Hold</td>
							<td><input type="checkbox" name="hold[]" value="1">Hold</td>
							<td><input type="checkbox" name="hold[]" value="2">Hold</td>
							<td><input type="checkbox" name="hold[]" value="3">Hold</td>
							<td><input type="checkbox" name="hold[]" value="4">Hold</td>
						</tr>';
				
			}
		}
	}
	$yR = new YahtzeeRoll;
?>