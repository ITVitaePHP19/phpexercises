<?php
	class Decryption
	{
		function decrypt()
		{
			$enc = $_SESSION["key"];
		 
			echo $enc;
		}
	}
	$dc = new Decryption;
?>