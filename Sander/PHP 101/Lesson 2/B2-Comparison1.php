<html>

<head></head>
<body>

<?php
var_dump(0 == "a"); // 0 == 0 -> true
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true

switch ("a") {
case 0:
    echo "0";
    break;
case "a": // never reached because "a" is already matched with 0
    echo "a";
    break;
}
?>

<?php  
// Integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
 
// Floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
 
echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1
 
// Arrays
echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo [1, 2, 3] <=> []; // 1
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo [1, 2, 3] <=> [1, 2, 4]; // -1
 
// Objects
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 0
 
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "c"]; 
echo $a <=> $b; // -1
 
$a = (object) ["a" => "c"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 1
 
// only values are compared
$a = (object) ["a" => "b"]; 
$b = (object) ["b" => "b"]; 
echo $a <=> $b; // 1

?>


</body>

</html>