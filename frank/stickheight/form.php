<form action="stickheight.php" method="POST">

    <table>
    <tr>
        <td>Your height (in centimeters): <input type="number" min="100" max="250" name="value"></td>
    </tr>
    <tr>
        <td><input type="radio" value="classical" name="conversion"> Cross-country classical</td>
    </tr>
    <tr>
        <td><input type="radio" value="freestyle" name="conversion"> Cross-country free-style</td>
    </tr>
     <tr>
        <td><input type="radio" value="nordic" name="conversion"> Nordic walk</td>
    </tr>
</table>
        <td><input type="submit" value="Calculate"></td>
        <td><input type="reset" value="Reset"></td>
</form>