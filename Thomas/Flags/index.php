<?php 
include "flags.php";
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
		<form action="quiz.php" method="post">
			<h1>Flags</h1>
			<div>			
			<table>
			<?php
			$h=0;
			$j=0;
			$hmin = 0;
			$hmax = 9;
			
			while ($j<=24)
			{
			?>
			<tr>
			<?php 
			foreach($flags as $h => $f)
			{
				if($h >= $hmin && $h <= $hmax)
				{
			?>
				<td>
				<img src="<?php echo $f?>" width="100" height="100"/>
				<div>
				<?php 
				echo giveName($f, $img);
				}
				$h++;
			}
			$hmin += 10;
			$hmax += 10;
			$j++;
			}			
			?>
			</div>
			</td>
			</tr>
			</table>
			</div>
			<div>
				<input type="submit" value="Quiz" />
			</div>
		</form>
		</div>
	</section>
</div>
</body>
</html>