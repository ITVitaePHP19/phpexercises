<?php
	class LetterFrequentie
	{
		function calcFrequentie()
		{
			$string = strtolower($_POST["frequentie"]);
			
			$letters = str_split("abcdefghijklmnopqrstuvwxyz");
			
			for($i = 0; $i < count($letters); $i++)
			{
				echo $letters[$i] . ": " . substr_count($string, $letters[$i]) . " ";
			}
		}	
	}
	$lF = new LetterFrequentie;
?>