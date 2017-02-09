
	
<?php 

$account="itvitae1@gmail.com";
$password="itvitae12";
$to="trevor.vanunen@itvitaelearning.nl";
$from="itvitae1@gmail.com";
$from_name="Leipe Henkie";
$msg="<strong>Fanclub van Trevor.</strong>"; // HTML message
$subject="HTML message";
/*End Config*/

include("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
 
	
	
	
	
	
	
	
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="fname"><br>

Email: <input type="text" name="email"><br>
Gender:<br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male<br>
Website <input type="text" name="website"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<button id = "knop2" type="button"> <input type="submit" name="submit" value="submit"></button>
</form>

 

	
	


<?php




// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["fname"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["message"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if()
echo "<h2>Your Input:</h2>";
echo "Your name is" . $name;
echo "<br>";
echo "Your Email is" . $email;
echo "<br>";
echo "Your website is : " . $website;
echo "<br>";
echo "Your comment is: " . $comment;
echo "<br>";
echo "You are a :   "  . $gender;
?>











</body>
</html> 	
	

	



