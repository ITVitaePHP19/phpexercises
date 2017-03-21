<?php 
include "flags.php";
include "guess.php";
$img = "img/";
$flags = (glob("$img*.png", GLOB_BRACE))
?>
<!DOCTYPE html>
 <html lang="en"> 
<head>
<meta charset="utf-8">
<title>Flags of the World</title>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	margin-left: auto;
	margin-right: auto;
}

th, td {
	padding: 15px;
}
</style>
</head>
<body>
<div class="container">
	<section id="content" style="text-align: center;">
		<div>
		<form action="guess.php" method="post">
			<h1>Flags</h1>
			<div>			
			<table>
			<tr>
			<td>
			<?php 
			$chosen = array_rand($flags);
			?>
			<img src="<?php echo $flags[$chosen]?>" width="100" height="100"/>
			<div>
			<?php 
			$answer = giveName($flags[$chosen], $img);	
			$_SESSION["answer"] = $answer;
			?>
			</div>
			</td>
			</tr>
			</table>
			</div>
			<div>
				<?php echo "Guess:";?>
				<input type="text" name="guess" placeholder="guess"/>
			</div>
			<div>
				<input type="submit" value="Guess" />
			</div>
			<div>
			<?php 
			if (isset($_SESSION['result']))
			{
				echo $_SESSION['result'];
				$_SESSION['result'] = "";
			}
			?>
			</div>
		</form>
		<form action="index.php" method="post">
				<input type="submit" value="Go To Flags"/>
		</form>
		</div>
	</section>
</div>
</body>
</html>