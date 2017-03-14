
<!DOCTYPE html>
<html>
<head>
<title>(Ski-)Stick height calculation</title>
</head>
<body>

<h1><p class="header">(Ski-)Stick height calculation</h1><br>
<form method="post" action="">

(Ski-)Stick height calculation:
<br>
<br>
    Your height in centimeters: <input type="number" name="in" size="5" min="0" autocomplete="off"/>
    <br>
    <input type="radio" name="ski" value="free"> Cross-country skiing (free-style)
    <br>
    <input type="radio" name="ski" value="classical"> Cross-country skiing (classical style)
    <br>
    <input type="radio" name="ski" value="nordic"> Nordic walk
    <br>
    <br>
    <input type="submit" name = "calculate" value="Calculate">
    <input type="reset" value="reset">

<br>
<br>

</form>
<?php
include 'skiscript.php';
 ?>
</body>
</html>
