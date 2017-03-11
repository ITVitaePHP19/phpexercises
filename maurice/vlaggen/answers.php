<?php
	$rightanswer = $_SESSION["rightanswer"];
	$answer = $_POST["answer"];
						//cwcw
		if($answer == $rightanswer){
			echo "<br>" . $answer . " is correct!<br><br>";
		}
		else{
			echo "<br>Incorrect. The right answer is: " . $rightanswer . "<br><br>";
		}
?>