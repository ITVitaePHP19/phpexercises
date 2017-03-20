<?php 
session_start();
?>
<!DOCTYPE html>
 <html lang="en"> 
<head>
<meta charset="utf-8">
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
<title>Calculator</title>
</head>
<body>
<div class="container">
	<section id="content" style="text-align: center;">
		<div>
		<form action="calc.php" method="post">
			<h1>SuperCalculator</h1>
			<div>
			<?php echo "Your Sum"?>
			</div>
			<div>
			<?php 
			$sumdis = $_SESSION["sum"];
			?>
			<table>
			<tr>
			<th>
			<?php
			echo $sumdis;
			
			if(preg_match('/=/', $sumdis))
			{
			$_SESSION["sum"] = "";
			}	
			?>
			</th>
			</tr>
			</table>
			</div>
			<div>
				<input type="submit" name="number" value="7" />
				<input type="submit" name="number" value="8" />
				<input type="submit" name="number" value="9" />
				<input type="submit" name="op" value="+" />
			</div>
			<div>
				<input type="submit" name="number" value="4" />
				<input type="submit" name="number" value="5" />
				<input type="submit" name="number" value="6" />
				<input type="submit" name="op" value="-" />
			</div>
			<div>
				<input type="submit" name="number" value="1" />
				<input type="submit" name="number" value="2" />
				<input type="submit" name="number" value="3" />	
				<input type="submit" name="op" value="*" />			
			</div>
			<div>
				<input type="submit" name="number" value="0" />
				<input type="submit" name="op" value="C" />
				<input type="submit" name="op" value="/" />
				<input type="submit" name="op" value="=" />
			</div>	
			<div>
				<input type="submit" name="ans" value="Ans" />
			</div>
		</form>
		</div>
	</section>
</div>
</body>
</html>