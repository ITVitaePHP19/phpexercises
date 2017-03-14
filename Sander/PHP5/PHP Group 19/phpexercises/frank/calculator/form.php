<form action="calculator.php" method="GET">
    <table>
    <tr>
        <td><input type="text" pattern="[-0-9]{0,}"  name="number1"></td>
        <td><input type="text" pattern="[-0-9]{0,}"  name="number2"></td>
    </tr>

</table>
    <tr>
        <td><input type="submit" value="+" name="plus"></td>
        <td><input type="submit" value="-" name="minus"></td>
        <td><input type="submit" value="*" name="times"></td>
        <td><input type="submit" value="/" name="divide"></td>
        <td><input type="reset" value="Reset"></td>
    </tr>
</form>
