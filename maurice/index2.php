<?php session_start(); ?>
<html>
<head>
	<title>PHP Problem Based Learning</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<div id="wrapper">
	<div id="content">
	<figure><img src="itvitaemjw.png" height="60" width="auto"></figure>
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
				echo "<br><br>Home page<br><br>";
				break;
			case 'project':
				include 'pestart.php';
				break;
			case 'opdrachten':
				include 'opdrachten.php';
				break;
				
			case 'activiteiten':
				include 'activiteitentracker.php';
				break;
			case 'info':
				echo "<br><br>About<br><br>";
				break;
			case 'contact':
				include 'Contact2.php';
				break;
			case 'links':
				echo "<br><br>Links<br><br>";
				break;
			case 'op1':
				include 'opdrachten.php';
				break;
			case 'op2':
				include 'opdrachten.php';
				break;
			case 'op3':
				include 'opdrachten.php';
				break;
			case 'op4':
				include 'opdrachten.php';
				break;
			case 'op5':
				include 'opdrachten.php';
				break;
			case 'op6':
				include 'opdrachten.php';
				break;
			case 'op7':
				include 'opdrachten.php';
				break;
			case 'op8':
				include 'opdrachten.php';
				break;
			case 'op9':
				include 'opdrachten.php';
				break;
			case 'op10':
				include 'opdrachten.php';
				break;
			case 'op11':
				include 'opdrachten.php';
				break;
			case 'op12':
				include 'opdrachten.php';
				break;
			case 'op13':
				include 'opdrachten.php';
				break;
			case 'calculator':
				include 'opdrachten.php';
				break;
			case 'calculator2':
				include 'opdrachten.php';
				break;
			case 'vlaggen':
				include 'opdrachten.php';
				break;
			case 'versleutelen':
				include 'opdrachten.php';
				break;
			case 'letterfrequentie':
				include 'opdrachten.php';
				break;
			case 'romeinserekenmachine':
				include 'opdrachten.php';
				break;
			case 'lettertypechaos':
				include 'opdrachten.php';
				break;
			case 'yahtzee':
				include 'yahtzee.php';
				break;
			case 'bke':
				include 'bke.php';
				break;
			case 'sort_flagname':
				include 'vlaggen.php';
				break;
			case 'sort_category':
				include 'vlaggen.php';
				break;
			case 'test':
				include 'flagtest.php';
				break;
			case 'uploadFlag':
				include 'uploadFlag.php';
				break;
		}
	?>
	<!--<footer>Maurice Waney</footer>-->
	</div>
</div>

</body>
</html>