<?php
	require_once('roll.php');
	if(!isset($_SESSION["subtotal"]))
	{
		$_SESSION["subtotal"] = 0;
	}
	if(!isset($_SESSION["subtotal2"]))
	{
		$_SESSION["subtotal2"] = 0;
	}
	
	
	if(isset($_POST["select"]))
	{
		switch($_POST["select"])
		{
			case "ones":
				$_SESSION["ones"] = $_SESSION["save1"];
				$_SESSION["subtotal"] += $_SESSION["ones"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "twos":
				$_SESSION["twos"] = $_SESSION["save2"];
				$_SESSION["subtotal"] += $_SESSION["twos"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "threes":
				$_SESSION["threes"] = $_SESSION["save3"];
				$_SESSION["subtotal"] += $_SESSION["threes"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "fours":
				$_SESSION["fours"] = $_SESSION["save4"];
				$_SESSION["subtotal"] += $_SESSION["fours"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "fives":
				$_SESSION["fives"] = $_SESSION["save5"];
				$_SESSION["subtotal"] += $_SESSION["fives"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "sixes":
				$_SESSION["sixes"] = $_SESSION["save6"];
				$_SESSION["subtotal"] += $_SESSION["sixes"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "yahtzee":
				$_SESSION["yahtzee"] = $_SESSION["saveyahtzee"];
				$_SESSION["subtotal2"] += $_SESSION["yahtzee"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "foak":
				$_SESSION["foak"] = $_SESSION["savefoak"];
				$_SESSION["subtotal2"] += $_SESSION["foak"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "toak":
				$_SESSION["toak"] = $_SESSION["savetoak"];
				$_SESSION["subtotal2"] += $_SESSION["toak"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "fullhouse":
				$_SESSION["fullhouse"] = $_SESSION["savefullhouse"];
				$_SESSION["subtotal2"] += $_SESSION["fullhouse"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "lnstraight":
				$_SESSION["lnstraight"] = $_SESSION["savelnstraight"];
				$_SESSION["subtotal2"] += $_SESSION["lnstraight"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "smstraight":
				$_SESSION["smstraight"] = $_SESSION["savesmstraight"];
				$_SESSION["subtotal2"] += $_SESSION["smstraight"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "chance":
				$_SESSION["chance"] = $_SESSION["savechance"];
				$_SESSION["subtotal2"] += $_SESSION["chance"];
				$_SESSION["selectedScores"] += 1;
				break;
		}
	}
	
	roll();
	liveScores();
?>