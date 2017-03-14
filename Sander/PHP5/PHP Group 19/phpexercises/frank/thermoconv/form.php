<form action="thermoconv.php" method="POST">

    <table>
    <tr>
        <td>Degrees: <input type="number" name="value"></td>
    </tr>
    <tr>
        <td><input type="radio" value="celsius" name="conversion"> Celsius to Fahrenheit</td>
    </tr>
    <tr>
        <td><input type="radio" value="fahrenheit" name="conversion"> Fahrenheit to Celsius</td>
    </tr>
</table>
        <td><input type="submit" value="Calculate"></td>
        <td><input type="reset" value="Reset"></td>
</form>