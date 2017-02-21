<form action="correctanswer.php" method="POST">
    
    <input type="hidden" value="<?echo $rand; ?>" name="currentanswer" />
           
<table>
    <tr>
        <td><input type="radio" value="konijn" name="animal">Konijn</td>
    </tr>
    <tr>
        <td><input type="radio" value="schaap" name="animal">Schaap</td>
    </tr>
    <tr>
        <td><input type="radio" value="koe" name="animal">Koe</td>
    </tr>
    <tr>
        <td><input type="radio" value="paard" name="animal">Paard</td>
    </tr>
</table>
        <td><input type="submit" name="submit" value="Submit"></td>
        <td><input type="reset" value="Reset"></td>
</form>
