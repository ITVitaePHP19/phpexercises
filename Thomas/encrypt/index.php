<!DOCTYPE html>
 <html lang="en"> 
<head>
<meta charset="utf-8">
<title>Encrypter</title>
</head>
<body>
<div class="container">
	<section id="content" style="text-align: center;">
		<div>
		<form action="encrypt.php" method="post">
			<h1>Encrypter</h1>
			<div>
				<?php echo "filename:"?>	
				<input type="text" placeholder="" name="filename" />
			</div>
			<div>
				<input type="submit" id="en"  value="Encrypt" name="en"/>
				<br><br><br><br>
			</div>
			<div>
				<?php echo "decryption password:"?>	
				<input type="text" placeholder="" name="pass" />
			</div>
			<div>
				<input type="submit" id="de" value="Decrypt" name="de"/>
			</div>		
		</form>
		</div>
	</section>
</div>
</body>
</html>