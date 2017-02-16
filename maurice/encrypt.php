<?php
	// phpinfo();
	function encrypt()
	{	
		if(isset($_POST["fileToUpload"]))
		{
			$file = $_POST["fileToUpload"];
			$enc = file_get_contents($file); 
		}	
		if(isset($_POST["enctext"]))
		{
			$enc = $_POST["enctext"];
		}	
		
		$_SESSION["key"] = $enc;
		
		$enc = str_split($enc);
		$characters = str_split("abcdefghijklmnopqrstuvwxyz1234567890-=[]{};'./,<>:");
		shuffle($characters);
		
		for($i = 0; $i < count($enc); $i++)
		{
			$enc[$i] = $characters[rand(0, count($characters) - 1)];
		}
		echo implode("", $enc);
	}
	
	encrypt();
?>