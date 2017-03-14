<!DOCTYPE html>
<html>
<head>
<title>Currency</title>
</head>
<body>
<h1>Euro to foreign currency converter</h1>
<form method="post" action="calculate1.php">
	Euro<input type="number" name="number"> 
	
	<select name="koersen">
    <option value="dollar" name="dollar"> Dollar</option>
    <option value="hkgdollar">hkgdollar</option>
    <option value="franc">franc</option>
    <option value="mark">mark</option>
	 <option value="gulden">gulden</option>
	 <option value="neppeValuta">neppeValuta</option>
  </select>
  
  <br><br>
		
	<input type="submit" name="submit" value="calculate">   
			
</form>

</body>
</html>