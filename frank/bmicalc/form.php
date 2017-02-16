<form action="bmi.php" method="GET">
    <table>
    <tr>
    <td>Height in centimeters:</td>
        <td><input type="number" min= "0" max= "250" step="1" name="height"></td>
        </tr>
        <tr>
        <td>Weight in kilograms:</td>
        <td><input type="number" min= "0" max="250" step="1" name="weight"></td>
        </tr>
</table>
        <td><input type="submit" value="Calculate"></td>
        <td><input type="reset" value="Reset"></td>
</form>