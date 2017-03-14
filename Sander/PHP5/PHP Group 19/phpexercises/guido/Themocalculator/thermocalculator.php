
<!DOCTYPE html>
<html>
<head>
<title>Convert between celcius and fahrenheit</title>
</head>
<body>
<h1><p class="header">Convert between celcius and fahrenheit</p></h1><br>
<form method="post" action="">

Celsius to Fahrenheit:
    <input type="text" name="celcius" size="5" autocomplete="off"/>
    <input type="submit" name="celc" value="calculate" />

<br>

Fahrenheit to Celsius:
    <input type="text" name="fahrenheit" size="5" autocomplete="off"/>
    <input type="submit" name ="fah" value="calculate" />
<br>
<br>
    <?php

    if (isset($_POST['celc'])) {
      $celc = $_POST['celcius'];
      $fahrenheit = round($celc * 9/5 + 32, 0);
      echo "$celc celcius is $fahrenheit in fahrenheit";
    }

    elseif (isset($_POST['fah'])) {
      $fah = $_POST['fahrenheit'];
      $celcius = round(($fah - 32) * 5/9, 0);
      echo "$fah fahrenheit is $celcius in celcius";
    }
    ?>


</form>

</body>
</html>
