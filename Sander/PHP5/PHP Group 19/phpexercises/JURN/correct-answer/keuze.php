<doctype! html>
 <doctype! html>
 <html>
 <title>keuze</title>
 </br>

 <head>dit is de vlag van...</head>
 
 <body>
<div>
 <img src="http://localhost/ITVITAE/KEUZE/FLAGS/Belgium.png">
</div>
 <form method ="POST" action ="keuze.php">

  <input type="radio" name="response" value="a"/>Belgie<br/>

  <input type="radio" name="response" value="b"/>Spanje<br/>

  <input type="radio" name="response" value="c"/>Duitsland<br/>

  <input type="radio" name="response" value="d"/>Portugal<br/>
  
   
	<input type="reset" value="Reset"><br/>

  <Input type = "submit" Name = "submit" Value = "Answer">
  
  </form>
  </body>
  
 <?php
 
 if (isset($_POST['submit']))
 {
	$answer = $_POST['response'];
	
	if($answer == 'a'){
	echo "your answer is correct!";
	}
	else{
	echo "your answer is incorrect!"; 
	}		
 }
 ?>
 </html>