<?php echo 'stadaard php tag'; ?>
<br>
<? echo 'Short tag' ?>
<br>
<?= 'echo tag' ?>
<br>
<script language='php'> echo 'Script tag' </script>
<br>
<% echo 'Asp tag' %>
<br>

<?php
//single line comment
#another single line comment
/* multiline
comments */

//data types:
$boolean = TRUE;
$string = "This is a string";
$float = 1.23;
$integer = 33;

//type casting
echo (int)$float;
echo (string)$integer;
echo (string)$boolean;

//cating array to object
$array = (object)["item0" => "bla","item1" => "bal","item2" => "lab"];
var_dump($array);

echo '<br>';

//variable variables
$x = 'hello';
$$x = 'world';
echo $hello;
echo '<br>';
//constants
const NAME = "Blablabla";


//print_r
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
echo '<br><br>';
debug_zval_dump($a);
echo '<br><br>';
var_dump($a);

//isset / empty
var_dump(isset($a));

var_dump(empty($a));

//oprators
$x =5;
if ($x > 1 && $x <10){
	echo 'True';
}
if ($x >=5 || $x <= 10){
	echo 'True';
}
if ($x >=5 XOR $x <= 3){
	echo 'True';
}
if ($x == "5"){
	echo 'True';
}
if ($x === 5){
	echo 'True';
}
if ($x != "4"){
	echo 'True';
}
if ($x !== 4){
	echo 'True';
}
echo '<br>';
$y = (99 + 3 - 8)*3/2;
echo $y;
$z = 77%9;
echo '<br>';
echo $z;
echo '<br>';
$z = 2**5;
echo $z;

$string = 'hello '.'world';
echo $string;

//bitwise operators
echo '<br>';

$x = 5;
echo ~$x;

echo $x << 3;

//type operator

class trueClass {
}

class falseClass {
}

$variableA = new trueClass;
var_dump($variableA instanceof trueClass);
var_dump($variableA instanceof falseClass);

//error control operators


//execution operators


//if else
$a=NULL;
if(isset($a)){echo 'value is true';}
elseif(empty($a)){echo 'value is false';}

//ternary oparator
$x = 12;
echo ($x > 5 ? 'true' : 'false');

//switch statement
$i=1;
switch($i){
	case 1: 
		echo 'een';
		break;
	case 2:
		echo 'twee';
		break;
	default:
		echo 'geen';
}
//while loop

$i = 10;
while($i <= 15){
	echo $i;
	$i++;
}

//do while
$i = 10;
do{
	echo $i;
	$i++;
}
while ($i < 15);

//for loop /break / continue
for ($i = 0; $i <= 20; $i++){
	if($i == 14){
		continue;
	}
	if ($i == 18){
		break;
	}
	echo $i;
}1



?>