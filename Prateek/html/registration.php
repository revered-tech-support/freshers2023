<?php


ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//echo 'p';

error_reporting(0);
include ('dbconnection.php');

$insertdata = new DB_con();

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $retype = $_POST['retype'];



  $data = array($firstname, $lastname, $gender, $phone, $email, $password, $retype);

  $sql = $insertdata->insert($data);
  // if($sql){
  //   header('location:table.php');
  // }
}
?>

<Html>  
<head>   
<title>  
Registration Page  
</title>  
</head>  
<body bgcolor="Lightskyblue">  
<br>  
<br>  
<form name="insert" action="#" method="post">
  
<label> Firstname </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15"/> <br> <br>  
<label>   
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="gender"value="Male"   /> Male <br>  
<input type="radio" name="gender"value="Female"  /> Female <br>  
<input type="radio" name="gender" value="other"/> Other  
<br>  
<br>  
<label>   
Phone :  
</label>  
<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="id" name="password"> <br>   
<br> <br>  
Re-type password:  
<input type="Password" id="retype" name="retype"> <br> <br>  
<input type="submit" name =submit value="Submit" class="button"  />  
</form>  
<ul>
    <!-- <li><a href="all_users.php">Click For Show Users</a> </li> -->
    <li><a href="login.php">Click For Login</a> </li>
</ul>
</body>  
</html>  