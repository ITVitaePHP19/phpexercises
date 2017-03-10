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
				if(!isset($_SESSION["save1"]))$_SESSION["save1"] = 0;
				$_SESSION["ones"] = $_SESSION["save1"];
				$_SESSION["subtotal"] += $_SESSION["ones"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "twos":
				if(!isset($_SESSION["save2"]))$_SESSION["save2"] = 0;
				$_SESSION["twos"] = $_SESSION["save2"];
				$_SESSION["subtotal"] += $_SESSION["twos"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "threes":
				if(!isset($_SESSION["save3"]))$_SESSION["save3"] = 0;
				$_SESSION["threes"] = $_SESSION["save3"];
				$_SESSION["subtotal"] += $_SESSION["threes"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "fours":
				if(!isset($_SESSION["save4"]))$_SESSION["save4"] = 0;
				$_SESSION["fours"] = $_SESSION["save4"];
				$_SESSION["subtotal"] += $_SESSION["fours"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "fives":
				if(!isset($_SESSION["save5"]))$_SESSION["save5"] = 0;
				$_SESSION["fives"] = $_SESSION["save5"];
				$_SESSION["subtotal"] += $_SESSION["fives"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "sixes":
				if(!isset($_SESSION["save6"]))$_SESSION["save6"] = 0;
				$_SESSION["sixes"] = $_SESSION["save6"];
				$_SESSION["subtotal"] += $_SESSION["sixes"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "yahtzee":
				if(!isset($_SESSION["saveyahtzee"]))$_SESSION["saveyahtzee"] = 0;
				$_SESSION["yahtzee"] = $_SESSION["saveyahtzee"];
				$_SESSION["subtotal2"] += $_SESSION["yahtzee"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "foak":
				if(!isset($_SESSION["savefoak"]))$_SESSION["savefoak"] = 0;
				$_SESSION["foak"] = $_SESSION["savefoak"];
				$_SESSION["subtotal2"] += $_SESSION["foak"];
				$_SESSION["selectedScores"] += 1;
				break;
			case "toak":
				if(!isset($_SESSION["savetoak"]))$_SESSION["savetoak"] = 0;
				$_SESSION["toak"] = $_SESSION["savetoak"];
				$_SESSION["subtotal2"] += $_SESSION["toak"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "fullhouse":
				if(!isset($_SESSION["savefullhouse"]))$_SESSION["savefullhouse"] = 0;
				$_SESSION["fullhouse"] = $_SESSION["savefullhouse"];
				$_SESSION["subtotal2"] += $_SESSION["fullhouse"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "lnstraight":
				if(!isset($_SESSION["savelnstraight"]))$_SESSION["savelnstraight"] = 0;
				$_SESSION["lnstraight"] = $_SESSION["savelnstraight"];
				$_SESSION["subtotal2"] += $_SESSION["lnstraight"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "smstraight":
				if(!isset($_SESSION["savesmstraight"]))$_SESSION["savesmstraight"] = 0;
				$_SESSION["smstraight"] = $_SESSION["savesmstraight"];
				$_SESSION["subtotal2"] += $_SESSION["smstraight"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
			case "chance":
				if(!isset($_SESSION["savechance"]))$_SESSION["savechance"] = 0;
				$_SESSION["chance"] = $_SESSION["savechance"];
				$_SESSION["subtotal2"] += $_SESSION["chance"];
				$_SESSION["selectedScores"] += 1;
				$_SESSION["tries"] = 1;
				break;
		}
	}
	
	roll();
	liveScores();
?>