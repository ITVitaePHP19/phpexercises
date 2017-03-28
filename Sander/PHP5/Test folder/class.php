<?php include("class_lib.php"); ?>

<?php

/* Part 1 */

$sander = new person1();
$sander -> set_name('Sander');

$jimmy = new person1;
$jimmy -> set_name('Jimmy');

echo "First person is " . $sander -> get_name();
echo '<br>';
echo "Second person is " . $jimmy -> get_name();

?>

<br>
<br>

<?php 

/* Part 2 */

$stefan = new person2 ("Stefan Mischook");
echo "Stefan's full name: ".$stefan -> get_name();

?>

<br>
<br>

<?php

/* Part 3 */

$stefan = new person3("Stefan Mischook");   
echo "Stefan's full name: " .  $stefan->get_name() ;  
 
	/*  
	Since $pinn_number was declared private, this line of code will generate an error. Try it out!   
	*/  
 
// echo "Tell me private stuff: ".$stefan->pinn_number;  
?>

<?php 

/* Part 4 */

$stefan = new Person4 ("stefan", "Mischook");
echo "<br>Stefan's first name: ".$stefan->getFirstName();
echo "<br>Stefan's full name: ".$stefan->getFirstName()." ".$stefan->getLastName();
echo "<br>Stefan's full name: ".$stefan->getName();

?>

<br>
<br>

