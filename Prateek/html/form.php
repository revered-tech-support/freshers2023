<?php
include ('config.php');




if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$gender= $_POST['gender'];
$languages=$_POST['languages'];
$languages = implode(',', $languages);
$kd="insert into ex( name ,email,gender,languages) values ('$name', '$email','$gender','$languages')";
$PRA=mysqli_query($con , $kd);
if($PRA){
   
    echo "inserted";
	echo header('location:fetch.php');

    }

    else{
        return "PRA"; }

}
?>
<html>
        
<head>
	<title>Add Data</title>
</head>

<body>
	 <!-- <a href="fetch.php">Home</a>  -->
	<br/><br/>

	 <form action="#" method="post" name="insert"> 
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
                        <tr>
                     <th height="60" scope="row">Gender :</th>
                    <td><input type="radio" name="gender" value="Male" required /> Male  &nbsp;
                    <input type="radio" name="gender" value="Female" required /> Female
                    <input type="radio" name="gender" value="others" required /> others</td>



	
                </tr>
				<th height= "80" scope="row">languages :</th><br>
           <td> <input type="checkbox" id="Hindi" name="languages[]" value="Hindi" ><label>Hindi</label>
            <input type="checkbox" id="English" name="languages[]" value="English" ><label>English</label>
            <input type="checkbox" id="French" name="languages[]" value="French" ><label>French</label>
            <input type="checkbox" id="Russian" name="languages[]" value="Russian" ><label>Russian</label>
            <input type="checkbox" id="German" name="languages[]" value="German" > <label>German </td> </label><br><br>

				<!-- <form action="/action_page.php"> -->
  
<!-- </form> -->
			<tr> 

				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>


<html>
<head>
