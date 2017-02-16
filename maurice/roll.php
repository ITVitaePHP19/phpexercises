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
		
		if(isset($_SESSION["tries"]))
		{
			$tries = $_SESSION["tries"];
			echo $_SESSION["tries"] .= "I";
			
			if($tries >= "II")
			{
				echo ": rolled 3 times";
				$_SESSION["tries"] = "";
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
						echo "<td><img height='70' width='70' src='die" . $roll[0]  . ".png'></td>";
						break;
					case 1:
						$newroll .= $roll[1];
						echo "<td><img height='70' width='70' src='die" . $roll[1]  . ".png'></td>";
						break;
					case 2:
						$newroll .= $roll[2];
						echo "<td><img height='70' width='70' src='die" . $roll[2]  . ".png'></td>";
						break;
					case 3:
						$newroll .= $roll[3];
						echo "<td><img height='70' width='70' src='die" . $roll[3]  . ".png'></td>";
						break;
					case 4:
						$newroll .= $roll[4];
						echo "<td><img height='70' width='70' src='die" . $roll[4]  . ".png'></td>";
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
			echo "<td><img height='70' width='70' src='die" . $throw  . ".png'></td>";
			$_SESSION["roll"] .= $throw;
			
		}		
	}
?>