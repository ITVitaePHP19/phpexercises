
<head>Excirsize 1 - Currency Calculator</head>
	<form action="" method="post"> <!--1.Create a form and make use of the method post-->

		<table>
			<tr>
				<td><label for="input">Dollars: </label></td>
				<td><input type="text" name="input"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Calculate">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

<?php //.2 Get results of the $_POST and calculate with according to currency rate then echo the result
  if( isset($_POST["submit"]) ) {
			$dollar = $_POST["input"];
			$euro = $dollar * 1.076767;
      echo $euro;
		}
?>
