<?php
include ('dbconnection.php');
?>



<h2 align="center">Student Login</h2>
<!-- <p><a href="index.php">Back Home</a> </p> -->
<form action="" method="post">

    <table align="center">
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"> </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"> </td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" value="Login" name="loginSave"> </td>
        </tr>
    </table>
</form>