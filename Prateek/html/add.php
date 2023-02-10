<form name="insert" action="list.php" method="post">
<table width="100%"  border="0">
<tr>
<th width="26%" height="60" scope="row">Full Name :</th>
<td width="74%"><input type="text" name="fname" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Email :</th>
<td><input type="email" name="email" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Password :</th>
<td><input type="password" name="password" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Contact no. :</th>
<td><input type="text" name="contact" maxlength="10" value="" class="form-control" required /></td>
</tr>
<tr>
<th height="60" scope="row">Gender :</th>
<td><input type="radio" name="gender" value="Male" required /> Male  &nbsp;
<input type="radio" name="gender" value="Female" required /> Female</td>
</tr>
<tr>
<th height="60" scope="row">Education :</th>
<td><select name="education" class="form-control">
<option value="">Select</option>
<option value="10th">10th</option>
<option value="12th">12th</option>
<option value="Graduate">Graduate</option>
<option value="Post Graduate">Post Graduate</option>
</select> </td>
</tr>
<tr>
<th height="60" scope="row">Address :</th>
<td><textarea name="address" class="form-control">
</textarea></td>
</tr>
<tr>
<th height="60" scope="row">&nbsp;</th>
<td><input type="submit" value="Submit" name="submit" class="button" /></td>
</tr>
</table>
</form>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// //include_once("function.php");

 ?>


