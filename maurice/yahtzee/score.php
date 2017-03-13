<?php
	class ScoreBoard
	{
		function liveScores()
		{	
			$score = str_split($_SESSION["roll"]);
			$counts = array_count_values($score);
			//default variables for normal scores
			$ones = 0;
			$twos = 0;
			$threes = 0;
			$fours = 0;
			$fives = 0;
			$sixes = 0;
			//default variables for other scores
			$toak = 0;
			$foak = 0;
			$yahtzee = 0;
			$fullhouse = 0;
			$smstraight = 0;
			$lnstraight = 0;
			$chance = array_sum($score);
			$_SESSION["bonus"] = 0;
			
			$total = $_SESSION["subtotal"] + $_SESSION["subtotal2"] + $_SESSION["bonus"];
			
			$_SESSION["total"] = $total;
			
			if(isset($_POST["reset"]))
			{
				unset($_SESSION["ones"]);
				unset($_SESSION["save1"]);
				unset($_SESSION["twos"]);
				unset($_SESSION["save2"]);
				unset($_SESSION["threes"]);
				unset($_SESSION["save3"]);
				unset($_SESSION["fours"]);
				unset($_SESSION["save4"]);
				unset($_SESSION["fives"]);
				unset($_SESSION["save5"]);
				unset($_SESSION["sixes"]);
				unset($_SESSION["save6"]);
				unset($_SESSION["yahtzee"]);
				unset($_SESSION["saveyahtzee"]);
				unset($_SESSION["foak"]);
				unset($_SESSION["savefoak"]);
				unset($_SESSION["toak"]);
				unset($_SESSION["savetoak"]);
				unset($_SESSION["fullhouse"]);
				unset($_SESSION["savefullhouse"]);
				unset($_SESSION["lnstraight"]);
				unset($_SESSION["savelnstraight"]);
				unset($_SESSION["smstraight"]);
				unset($_SESSION["savesmstraight"]);
				unset($_SESSION["chance"]);
				unset($_SESSION["savechance"]);
				unset($_SESSION["subtotal"]);
				unset($_SESSION["subtotal2"]);
				unset($_SESSION["bonus"]);
				unset($_SESSION["selectedScores"]);
				unset($_SESSION["tries"]);
			}
			
			//Score table
			echo "<table id='scoretable'>";
			
			//Ones
			if(isset($_SESSION["ones"]))
			{
				echo  "<td width='300'>Ones: " . $_SESSION["ones"];
			}
			elseif(isset($counts[1]))
			{	
				$ones = $counts[1];
				echo "<td width='300'>Ones: " . $ones;
				$_SESSION["save1"] = $ones;
				
			}else {echo "<td width='400'>Ones: 0";}
			if(!isset($_SESSION["ones"]))
			{
				echo  "<input type='radio' name='select' value='ones' " . $_SESSION["turns"] . ">";
			}		
			
			//Twos
			if(isset($_SESSION["twos"]))
			{
				echo  "<br>Twos: " . $_SESSION["twos"];
			}
			elseif(isset($counts[2]))
			{	
				$twos = $counts[2] * 2;
				echo "<br>Twos: " . $twos;
				$_SESSION["save2"] = $twos;
				
			}else {echo "<br>Twos: 0";}
			if(!isset($_SESSION["twos"]))
			{
				echo  "<input type='radio' name='select' value='twos' " . $_SESSION["turns"] . ">";
			}	
			
			//Threes
			if(isset($_SESSION["threes"]))
			{
				echo  "<br>Threes: " . $_SESSION["threes"];
			}
			elseif(isset($counts[3]))
			{	
				$threes = $counts[3] * 3;
				echo "<br>Threes: " . $threes;
				$_SESSION["save3"] = $threes;
				
			}else {echo "<br>Threes: 0";}
			if(!isset($_SESSION["threes"]))
			{
				echo  "<input type='radio' name='select' value='threes' " . $_SESSION["turns"] . ">";
			}	
			
			//Fours
			if(isset($_SESSION["fours"]))
			{
				echo  "<br>Fours: " . $_SESSION["fours"];
			}
			elseif(isset($counts[4]))
			{	
				$fours = $counts[4] * 4;
				echo "<br>Fours: " . $fours;
				$_SESSION["save4"] = $fours;
				
			}else {echo "<br>Fours: 0";}
			if(!isset($_SESSION["fours"]))
			{
				echo  "<input type='radio' name='select' value='fours' " . $_SESSION["turns"] . ">";
			}	
			
			//Fives
			if(isset($_SESSION["fives"]))
			{
				echo  "<br>Fives: " . $_SESSION["fives"];
			}
			elseif(isset($counts[5]))
			{	
				$fives = $counts[5] * 5;
				echo "<br>Fives: " . $fives;
				$_SESSION["save5"] = $fives;
				
			}else {echo "<br>Fives: 0";}
			if(!isset($_SESSION["fives"]))
			{
				echo  "<input type='radio' name='select' value='fives'" . $_SESSION["turns"] . ">";
			}	
			
			//Sixes
			if(isset($_SESSION["sixes"]))
			{
				echo  "<br>Sixes: " . $_SESSION["sixes"];
			}
			elseif(isset($counts[6]))
			{	
				$sixes = $counts[6] * 6;
				echo "<br>Sixes: " . $sixes;
				$_SESSION["save6"] = $sixes;
				
			}else {echo "<br>Sixes: 0";}
			if(!isset($_SESSION["sixes"]))
			{
				echo  "<input type='radio' name='select' value='sixes' " . $_SESSION["turns"] . ">";
			}
			//Subtotal
			if(isset($_SESSION["subtotal"]))
			{
				echo "<br>subtotal: " . $_SESSION["subtotal"];
			}else{echo "<br>Subtotal: " . $_SESSION["subtotal"] = 0;}
			
			if($_SESSION["subtotal"] > 61)
			{
				$_SESSION["bonus"] = 35;
			}
			
			//Bonus
			if(isset($_SESSION["bonus"]))
			{
				echo "<br>bonus: " . $_SESSION["bonus"] . "</td>";
			}
			
			//yahtzee
			if(isset($_SESSION["yahtzee"]))
			{
				echo  "<br><td width='200'>Yahtzee: " . $_SESSION["yahtzee"];
			}
			elseif(isset($counts[1]) && $counts[1] == 5 || isset($counts[2]) && $counts[2] == 5 || isset($counts[3]) && $counts[3] == 5 || isset($counts[4]) && $counts[4] == 5 || isset($counts[5]) && $counts[5] == 5 || isset($counts[6]) && $counts[6] == 5)
			{
				$yahtzee = 50;
				echo "<br><td width='200'>Yahtzee: " . $yahtzee;
				$_SESSION["saveyahtzee"] = $yahtzee;
			}else 
			{
				echo "<br><td width='200'>Yahtzee: 0";
				$_SESSION["saveyahtzee"] = $yahtzee;
			}
			if(!isset($_SESSION["yahtzee"]))
			{
				echo "<input type='radio' name='select' value='yahtzee' " . $_SESSION["turns"] . ">";;
			}
			
			//four of a kind
			if(isset($_SESSION["foak"]))
			{
				echo  "<br>4 of a Kind: " . $_SESSION["foak"];
			}
			elseif(isset($counts[1]) && $counts[1] >= 4 || isset($counts[2]) && $counts[2] >= 4 || isset($counts[3]) && $counts[3] >= 4 || isset($counts[4]) && $counts[4] >= 4 || isset($counts[5]) && $counts[5] >= 4 || isset($counts[6]) && $counts[6] >= 4)
			{
				$foak = array_sum($score);
				echo "<br>4 of a Kind: " . $foak;
				$_SESSION["savefoak"] = $foak;
			}else 
			{
				echo "<br>4 of a Kind: 0";
				$_SESSION["savefoak"] = 0;
			}
			if(!isset($_SESSION["foak"]))
			{
				echo "<input type='radio' name='select' value='foak' " . $_SESSION["turns"] . ">";
			}

			//three of a kind
			if(isset($_SESSION["toak"]))
			{
				echo  "<br>3 of a Kind: " . $_SESSION["toak"];
			}
			elseif(isset($counts[1]) && $counts[1] >= 3 || isset($counts[2]) && $counts[2] >= 3 || isset($counts[3]) && $counts[3] >= 3 || isset($counts[4]) && $counts[4] >= 3 || isset($counts[5]) && $counts[5] >= 3 || isset($counts[6]) && $counts[6] >= 3)
			{
				$toak = array_sum($score);
				echo "<br>3 of a Kind: " . $toak;
				$_SESSION["savetoak"] = $toak;
			}
			else 
			{
				echo "<br>3 of a Kind: 0";
				$_SESSION["savetoak"] = 0;			
			}
			if(!isset($_SESSION["toak"]))
			{
				echo "<input type='radio' name='select' value='toak' " . $_SESSION["turns"] . ">";
			}		
				
			//full house
			if(isset($_SESSION["fullhouse"]))
			{
				echo  "<br>Fullhouse: " . $_SESSION["fullhouse"];
			}
			elseif(isset($counts[1]) && $counts[1] == 3 || isset($counts[2]) && $counts[2] == 3 || isset($counts[3]) && $counts[3] == 3 || isset($counts[4]) && $counts[4] == 3 || isset($counts[5]) && $counts[5] == 3 || isset($counts[6]) && $counts[6] == 3)
			{
				if(isset($counts[1]) && $counts[1] == 2 || isset($counts[2]) && $counts[2] == 2 || isset($counts[3]) && $counts[3] == 2 || isset($counts[4]) && $counts[4] == 2 || isset($counts[5]) && $counts[5] == 2 || isset($counts[6]) && $counts[6] == 2)
				{
					$fullhouse = 25;
					echo "<br>Fullhouse: " . $fullhouse;
					$_SESSION["savefullhouse"] = $fullhouse;
				} 
				else 
				{
					echo "<br>Fullhouse: 0";
					$_SESSION["savefullhouse"] = 0;
				}
			} else 
				{
					echo "<br>Fullhouse: 0";
					$_SESSION["savefullhouse"] = 0;
				}
			if(!isset($_SESSION["fullhouse"]))
			{
				echo "<input type='radio' name='select' value='fullhouse' " . $_SESSION["turns"] . ">";
			}	
			
			//long straight
			if(isset($_SESSION["lnstraight"]))
			{
				echo  "<br>Long straight: " . $_SESSION["lnstraight"];
			}
			elseif(isset($counts[1]) == 1 && isset($counts[2]) == 1 && isset($counts[3]) == 1 && isset($counts[4]) == 1 && isset($counts[5]) == 1 || isset($counts[2]) == 1 && isset($counts[3]) == 1 && isset($counts[4]) == 1 && isset($counts[5]) == 1 && isset($counts[6]) == 1)
			{
				$lnstraight = 40;
				echo "<br>Long Straight: " . $lnstraight;
				$_SESSION["savelnstraight"] = $lnstraight;
			}
			else 
			{
				echo "<br>Long straight: 0";
				$_SESSION["savelnstraight"] = 0;
			}
			if(!isset($_SESSION["lnstraight"]))
			{
				echo "<input type='radio' name='select' value='lnstraight'" . $_SESSION["turns"] . ">";
			}	
			
			
			//small straight
			if(isset($_SESSION["smstraight"]))
			{
				echo  "<br>Small straight: " . $_SESSION["smstraight"];
			}
			elseif(isset($counts[1]) >= 1 && isset($counts[2]) >= 1 && isset($counts[3]) >= 1 && isset($counts[4]) >= 1 || isset($counts[2]) >= 1 && isset($counts[3]) >= 1 && isset($counts[4]) >= 1 && isset($counts[5]) >= 1 || isset($counts[3]) >= 1 && isset($counts[4]) >= 1 && isset($counts[5]) >= 1 && isset($counts[6]) >= 1)
			{
				$smstraight = 30;
				echo "<br>Small Straight: " . $smstraight;
				$_SESSION["savesmstraight"] = $smstraight;
			}else 
			{
				echo "<br>Small straight: 0";
				$_SESSION["savesmstraight"] = 0;
			}
			if(!isset($_SESSION["smstraight"]))
			{
				echo "<input type='radio' name='select' value='smstraight' " . $_SESSION["turns"] . ">";
			}	
			
			//chance
			if(isset($_SESSION["chance"]))
			{
				echo  "<br>Chance: " . $_SESSION["chance"];
			}
			else
			{ 
				echo  "<br>Chance: " . $chance;
				echo "<input type='radio' name='select' value='chance' " . $_SESSION["turns"] . ">";
				$_SESSION["savechance"] = $chance;
			}
			
			
			if(isset($_SESSION["subtotal2"]))
			{
				echo "<br>subtotal 2: " . $_SESSION["subtotal2"];
			}
			echo "<br>TOTAL: " . $total . "</td>";
			
			echo "<img id='croupier' src='img/croupier.png' height='300' width='auto'>";
			
			echo "</table>";
		}
	}
	$sB = new ScoreBoard;
?>