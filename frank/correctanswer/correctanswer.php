<!DOCTYPE html>
<html>
<head>
<title>
Correct answer
</title>

</head>
<body>
    
<h1>Quiz</h1>
</body>
</html>
    
<?php

$schaap = "images/schaap.jpg";
$paard = "images/paard.jpg";
$koe = "images/koe.jpg";
$konijn = "images/konijn.jpg";

$pictures = array($schaap, $paard, $koe, $konijn);
$answers = array("schaap", "paard", "koe", "konijn");

$rand = rand(0, (count($pictures) -1));

$images = '<img src=" ' .$pictures[$rand].'" />';

echo $images;
    
include"form.php";


if (isset($_POST["submit"]) ){
    
    $answer = $_POST["animal"];i
        
    if ($answer == 'schaap'){
        
        echo "<br>Klopt helemaal!";
    }
    
    elseif($answer !== 'schaap'){
        echo "<br>Hartstikke fout!";
    }
    
}

?>