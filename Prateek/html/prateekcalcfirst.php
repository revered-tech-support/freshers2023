<form method="post" action="prateekcalculatorsecond.php" >
<table align="left">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Please Enter 1st Number</td>
        <td><input type="text" name="No1"></td>
    </tr>
 
    <tr>
        <td>Please Enter 2nd Number</td>
        <td><input type="text" name="No2"></td>
    </tr>
 
    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="add">add</option>
            <option value="sub">sub</option>
            <option value="mul">mul</option>
            <option value="div">div</option>
        </select></td>
    </tr>
 
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="  =  "></td>
    </tr>
 
</table>
</form> 