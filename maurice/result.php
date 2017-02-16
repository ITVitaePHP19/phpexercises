<?php		
	require_once("memory.php");
	
	if(isset($_POST["press"]))
	{
		
		$percentage = "/100 *";
			
		//clear
		if($_POST["press"] == 'C')
		{
			$_SESSION["save"] = "";
		}
		else
		{
			//store input in $result string concatenated with the session variable
			$result = $_SESSION["save"] .= $_POST["press"];
			$old = array("M+", "M-", "MR", "MC");
			$new = array("", "", "", "");
			$result = str_replace($old, $new, $result);
			echo $result . " ";
			
			//replace string operators with their php counterparts
			$operators = array("x", "=", "%");
			$replace = array("*", "", $percentage, "");		
			$calc = str_replace($operators, $replace, $result);
		}
		
		//echo results with '='
		if($_POST["press"] == '=')
		{
			$equals = eval("return " . "$calc;");
			echo $equals;
			$_SESSION["save"] = $equals;
		}
	} else{ $_SESSION["save"] = ""; }
?>
