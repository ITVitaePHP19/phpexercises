<?php

if(isset($_POST['submit'])) {

$answer = $_POST['answer1'];

		if ($answer == "reindeer")
		{
			echo "Yup, that is a reindeer. Caribou to be precise, but still a reindeer.";
		}
		elseif ($answer == "mouse") {
			echo "What?";
		}
		else {
			echo "Nope.	";
		}
	}
?>
