<?php
//echo "dez is included print";
$red="this color is red";
function validateInput($data) 
{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

?>