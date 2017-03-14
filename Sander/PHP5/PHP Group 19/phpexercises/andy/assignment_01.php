<?php

//1.create a function that checks the operator selected in the form and performs the operator's operation. Create strings for each of the values that user can put in, results and invalid values.
function calculate($x, $y, $op) {
        switch($op) {
        case '+':
            $prod = $x + $y;
            break;
        case '-':
            $prod = $x - $y;
            break;
        case '*':
            $prod = $x * $y;
            break;
        case '/':
            if ($y == 0) {$prod = "&#8734";}
            else {$prod = $x / $y;}
    }
    return $prod;
}

$x = 0;
$y = 0;
$prod = 0;
$op = '';
extract($_GET);
?>

<html>
    <head>
			Calculator
    </head>
		<body> <!--2.Create a simple form with the appropiate input fields and a field with each of the possible operators-->
				<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					 <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
            <select name="op">
                <option value="+" <?php if ($op=='+') echo 'selected="selected"';?>>+</option>
                <option value="-" <?php if ($op=='-') echo 'selected="selected"';?>>-</option>
                <option value="*" <?php if ($op=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op=='/') echo 'selected="selected"';?>>/</option>
            </select>
						<input type="text" name="y" size="5" value="<?php  print $y; ?>"/>
        	<input type="submit" name="calc" value="Calculate"/>
        </form>

    <?php
		//3.Once the form is filled and the Calculate button is clicked, have values set in the form be called, calculate with the function and display result via echo.
        if(isset($calc)) {
            if (is_numeric($x) && is_numeric($y)) {
                $prod = calculate($x, $y, $op);
                echo "<p>$x $op $y = $prod</p>";
            }
            else {
                echo "<p>x and y values are required to be numeric ...
                         please re-enter values</p>";
            }
        }
    ?>
  </body>
</html>
