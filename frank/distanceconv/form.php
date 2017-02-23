<form action="distanceconv.php" method="POST">

    <table>
    <tr>
        <td>Distance: <input type="number" name="value"></td>
    </tr>
    <tr>
        <td><input type="radio" value="kilometers" name="distance"> Kilometers to miles</td>
    </tr>
    <tr>
        <td><input type="radio" value="miles" name="distance"> Miles to kilometers</td>
    </tr>
</table>
        <td><input type="submit" value="Calculate"></td>
        <td><input type="reset" value="Reset"></td>
</form>