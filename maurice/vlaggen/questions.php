<?php
	class FlagQuestions extends FlagTest
	{
		function questions()
		{						
			
			if(isset($_POST["submit"])) {
				include "answers.php";
				$answer = $a->getAnswer();
			}

			$fT = new FlagTest;
			$flagArray = $fT->test();
			$flagnames = $flagArray[0];
			$flagimages = $flagArray[1];


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
			
			echo 	"<article><h3>Flag Test</h3><table><tr><td><img src='img/" . $flagimages[$rand] . "' height='150' width='auto'></td>" .
					"<td><form action='' method='post'>" . 
					$r[0] . "<br>" . $r[1] . "<br>" . $r[2] . 
					"</td></tr><tr><td></td><td><br><input type='submit' name='submit' value='Next'></td></tr></form>" . 
					"</table>";
			
			echo "</article>";
		}		
	}
	$fQ = new FlagQuestions;
	$fQ->questions();