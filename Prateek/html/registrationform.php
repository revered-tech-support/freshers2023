

<?php
$servername = "localhost";
$username = "root";
$password = "1234";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<Html>  
    <head>   
        <title>  Registration form  </title>  
    </head>  
<body>  
    <form method="POST" action="#" >  


        <label for="fname">std_id:</label><br>
            <input type="text" id="std_id" name="std_id" value="std_id"><br><br>
  
        <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" value="First"><br><br>
        <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" value="Last"><br><br>
        <label for="Email">Email Id</label><br>
            <input type="text" id="Email" name="Email" value="Email"><br><br>
        <label for="fname">Mobile no.</label><br>
            <input type="text" id="Mobile no." name="Mobile no." value="Mobile no."><br><br>
        <label for="department">Choose a department:</label>
            <select name="department" id="department"><br><br>
                <option> select option </option>
                <option value="technical">technical</option>
                <option value="sales">sales</option>
            </select><br><br>
            
        
      
        <input type="submit" name="Submit"/>  

    </form>  
</body>  
</html>


<?php
if($_POST['Submit']){

$id = $_POST['std_id'];   
$f = $_POST['fname'];
$l = $_POST['lname'];
$e = $_POST['Email'];
$m = $_POST['Mobile'];

$query = "INSERT INTO rersponsive.form values('$id','$f','$l','$e','$m')";

$data = mysqli_query($conn,$query);
if ($data){
    echo "data inserted into database";
}
else{
    echo "failed";
}



}
?>
