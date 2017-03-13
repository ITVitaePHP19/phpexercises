<?php session_start(); ?>
<html>
<head>
	<title>PHP Problem Based Learning</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<div id="wrapper">
	<div id="content">
	<figure><img src="img/itvitaemjw.png" height="60" width="auto"></figure>
		<nav>
		<?php 
			// phpinfo();
			//put the pages in an array
			$pages = array
			(
				"home" => "Home", 
				"project" => "Project Euler", 
				"opdrachten" => "Opdrachten", 
				"activiteiten" => "Activiteiten Tracker", 
				"info" => "Info", 
				"contact" => "Contact",
				"links" => "Links",
			); 
			
			//if not null, $p = 'p'
			$p = (isset($_GET['p'])) ? $_GET['p'] : "";
				
				//loop through the array; if $p is the same as $url, it is the active page
				foreach ($pages as $url => $label) 
				{
					?><a <?=$p == $url ? 'class="active navigation"' : ""?> href="index2.php?p=<?=$url?>" > <?=$label?> </a>&nbsp &nbsp &nbsp <?php
				}
			?>
		</nav>
		
		<?php
		//page content
		switch($_GET['p'])
		{
			case 'home':
				include "home.php";
				break;
			case 'project':
				include 'projecteuler/pestart.php';
				break;
			case 'opdrachten':
				include 'opdrachten/opdrachten.php';
				break;
			case 'activiteiten':
				include 'activiteitentracker/activiteitentracker.php';
				break;
			case 'info':
				include "about.php";
				break;
			case 'contact':
				include 'Contact2.php';
				break;
			case 'links':
				include "links.php";
				break;
			case 'op1':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op2':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op3':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op4':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op5':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op6':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op7':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op8':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op9':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op10':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op11':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op12':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op13':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op14':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op15':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op16':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op17':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op18':
				include 'opdrachten/opdrachten.php';
				break;
			case 'op19':
				include 'opdrachten/opdrachten.php';
				break;
			case 'calculator':
				include 'opdrachten/opdrachten.php';
				break;
			case 'calculator2':
				include 'opdrachten/opdrachten.php';
				break;
			case 'vlaggen':
				include 'opdrachten/opdrachten.php';
				break;
			case 'versleutelen':
				include 'opdrachten/opdrachten.php';
				break;
			case 'letterfrequentie':
				include 'opdrachten/opdrachten.php';
				break;
			case 'romeinserekenmachine':
				include 'opdrachten/opdrachten.php';
				break;
			case 'lettertypechaos':
				include 'opdrachten/opdrachten.php';
				break;
			case 'yahtzee':
				include 'yahtzee/yahtzee.php';
				break;
			case 'bke':
				include 'opdrachten/opdrachten.php';
				break;
			case 'sort_flagname':
				include 'vlaggen/vlaggen.php';
				break;
			case 'sort_category':
				include 'vlaggen/vlaggen.php';
				break;
			case 'test':
				include 'vlaggen/flagtest.php';
				break;
			case 'uploadFlag':
				include 'vlaggen/uploadFlag.php';
				break;
			case 'login':
				include 'activiteitentracker/login.php';
				break;
			case 'verification':
				include 'activiteitentracker/verification.php';
				break;
			case 'student':
				include 'activiteitentracker/student.php';
				break;
			case 'staff':
				include 'activiteitentracker/staff.php';
				break;
			case 'wwvergeten':
				include 'activiteitentracker/wwvergeten.php';
				break;
		}
	?>
	<!--<footer>Maurice Waney</footer>-->
	</div>
</div>

</body>
</html>