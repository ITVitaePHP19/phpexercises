<!doctype html>
<html>
<head>
<title>Calculator</title>
<style>
input{
	width: 40px;
	padding: 5px;
	margin: 2px 1px 2px 1px;
}
#inputfield{
	width: 97%;
	margin: 0;
	border-style: none;
}
</style>
</head>
<body>

<?php
//phpinfo();
session_start();
if(!isset($_SESSION['output'])) {
	$_SESSION['output'] = "";
}
$total ="";
//formfields gevuld houden na submit
if(isset($_POST['inputA'])){$a = $_POST['inputA'];}else{$a="";}
if(isset($_POST['inputB'])){$b = $_POST['inputB'];}else{$b="";}
if(isset($_POST['operator'])){
	$operator = $_POST['operator'];
	if ($operator=="%"){
		$operator = "/100*";
	}
}
else{$operator="";}

if (isset($_POST['clear'])){
	$_SESSION['output']="";}
?>

<form name="calculator "method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<table border>
		<tr>
			<td>
			<input type="number" name="inputA" step="any" required value="<?php echo $a;?>">
			<select name="operator">
				<!-- php code is voor geselecteerd item in selectmenu geselecteeerd houden na submt -->
				<option <?php if ($operator == '+') {?> selected="true" <?php ;}  ?> value="+">+</option>
				<option <?php if ($operator == '-') {?> selected="true" <?php ;}  ?> value="-">-</option>
				<option <?php if ($operator == '*') {?> selected="true" <?php ;}  ?> value="*">x</option>
				<option <?php if ($operator == '/') {?> selected="true" <?php ;}  ?> value="/">/</option>
				<option <?php if ($operator == '%') {?> selected="true" <?php ;}  ?> value="%">%</option>
			</select>
			<input type="number" name="inputB" step="any" required value="<?php echo $b;?>">
			<button type="submit" value="=" name="=">=</button>
			</td>
		</tr>
		<tr>
			<td>
			<p id="result">
			<?php
				$result=$a.$operator.$b;
				//leest string als php-code, zodat het als som berekend kan worden
				$answer=eval('return ' . $result . ';');
				if($a !=null && $b !=null){
					$total = $result." = ".$answer;
				}
				$_SESSION['output'] .= $total . "<br>";
				if($total != null){
					echo $_SESSION['output']."<br>";
				}
			?>
			<p>
			</td>
		</tr>
		<tr>
			<td>
			<button type="submit" value="clear" name="clear">clear</button>
			</td>
		</tr>
	</table>
	</form>

</body>
<html>
