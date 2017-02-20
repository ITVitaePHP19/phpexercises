<?php 
session_start(); 

if (!isset($_SESSION['page'])) 
{ 
    $_SESSION['page']=1; 
} 
else 
{ 
    $answer=$_POST['answer']; 
} 
switch ($_SESSION['page']) 
{ 
    case 1:
        $picture= "FLAGS/Belgium.png"; 
        $option1="Belgium"; 
        $option2="France"; 
        $option3="Germany"; 
        $option4="Holland"; 
        break; 
    case 2:
        $picture="FLAGS/Korea-South.png"; 
        $option1="South-Korea"; 
        $option2="Japan"; 
        $option3="Thailand"; 
        $option4="Taiwan"; 
        $_SESSION['answer1']=$answer; 
        break; 
    case 3: 
        $picture="FLAGS/Italy.png"; 
        $option1="France"; 
        $option2="Germany"; 
        $option3="Sweden"; 
        $option4="Italy"; 
        $_SESSION['answer2']=$answer; 
        break; 
    case 4:
        $points=0; 
        $answer3=$_POST['answer']; 

        if ($_SESSION['answer1']==1) 
        { 
            $points++; 
        } 

        if ($_SESSION['answer2']==1) 
        { 
            $points++; 
        } 

        if ($answer3==4) 
        { 
            $points++; 
        } 
        print "<h2>Your score is $points</h2>"; 
        print "<a href='quiz.php'>New game</a><br>"; 
        session_destroy(); 
        exit; 
         
} 
$_SESSION['page']++; 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>flag game</title> 
</head> 
<body> 
<form method="post" action="quiz.php"> 
<center> 
<h2>Select the country that this flag represents:</h2> 
<table border=1> 
<tr> 
<td width="70"><img src="<?= $picture?>"></td> 
<td> 
<table> 
<tr><td> 
<?= $option1?> 
</td><td> 
<input type="radio" name="answer" value="1"> 
</td></tr><tr><td> 
<?= $option2?>  
</td><td> 
<input type="radio" name="answer" value="2"> 
</td></tr><tr><td> 
<?= $option3?> 
</td><td> 
<input type="radio" name="answer" value="3"> 
</td></tr><tr><td> 
<?= $option4?>  
</td><td> 
<input type="radio" name="answer" value="4"> 
</td></tr><tr><td> 
</table> 
</td> 
</tr> 
</table> 
<br> 
<input type="submit" value="Answer"> 
</center> 
</form> 
</body> 
</html> 