<div id="nav2">
<br>
	<?php
		$pages = array(
		"op1" => "Opdracht&nbsp1", 
		"op2" => "Opdracht&nbsp2", 
		"op3" => "Opdracht&nbsp3", 
		"op4" => "Opdracht&nbsp4", 
		"op5" => "Opdracht&nbsp5",
		"op6" => "Opdracht&nbsp6",
		"op7" => "Opdracht&nbsp7",
		"op8" => "Opdracht&nbsp8",
		"op9" => "Opdracht&nbsp9",
		"op10" => "Opdracht&nbsp10",
		"op11" => "Opdracht&nbsp11",
		"op12" => "Opdracht&nbsp12",
		"op13" => "Opdracht&nbsp13",
		"calculator" => "Rekenmachine",
		"calculator2" => "Simpele&nbspRekenmachine",
		"vlaggen" => "Vlaggen",
		"versleutelen" => "Versleutelen",
		"letterfrequentie" => "Letter&nbspfrequentie",
		"romeinserekenmachine" => "Romeinse&nbspRekenmachine",
		"lettertypechaos" => "Lettertype&nbspChaos",
		"yahtzee" => "Yahtzee",
		"bke" => "Boter Kaas & Eieren"
		); 
		
		//if not null, $p = 'p'
		$p = (isset($_GET['p'])) ? $_GET['p'] : "";
		
		//loop through the array; if $p is the same as $url, it is the active page
		foreach ($pages as $url => $label) {
			?>
			<a class='navigation2 <?=$p == $url ? " active'" : "'"?> href="index2.php?p=<?=$url?>" > <?=$label?> </a> | &nbsp
			<?php
		}
		?></div><?php
		switch($_GET['p']){
			case 'op1':
				include 'opdracht1.php';
				break;
			case 'op2':
				include 'opdracht2.php';
				break;
			case 'op3':
				include 'opdracht3.php';
				break;
			case 'op4':
				include 'opdracht4.php';
				break;
			case 'op5':
				include 'opdracht5.php';
				break;
			case 'op6':
				include 'opdracht6.php';
				break;
			case 'op7':
				include 'opdracht7.php';
				break;
			case 'op8':
				include 'opdracht8.php';
				break;
			case 'op9':
				include 'opdracht9.php';
				break;
			case 'op10':
				include 'opdracht10.php';
				break;
			case 'op11':
				include 'opdracht11.php';
				break;
			case 'op12':
				include 'opdracht12.php';
				break;
			case 'op13':
				include 'opdracht13.php';
				break;
			case 'calculator':
				include 'calculator.php';
				break;
			case 'calculator2':
				include 'calculator2.php';
				break;
			case 'vlaggen':
				include 'vlaggen.php';
				break;
			case 'versleutelen':
				include 'versleutelen.php';
				break;
			case 'letterfrequentie':
				include 'letterfrequentie.php';
				break;
			case 'romeinserekenmachine':
				include 'romeinserekenmachine.php';
				break;
			case 'lettertypechaos':
				include 'lettertypechaos.php';
				break;
			case 'yahtzee':
				include 'yahtzee.php';
				break;
			case 'bke':
				include 'bke.php';
				break;
			case 'test':
				include 'flagtest.php';
				break;	
		}
	?>
