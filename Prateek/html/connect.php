<?php
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
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
        <label for="std_id">std_id:</label><br>
            <input type="text" id="std_id" name="stdid" ><br><br>
        <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fn" ><br><br>
        <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="ln" ><br><br>
        <label for="Email">Email Id</label><br>
            <input type="text" id="Email" name="em" ><br><br>
        <label for="fname">Mobile no.</label><br>
            <input type="text" id="Mobile no." name="Mob" ><br><br>
        
       
            
    
      
        <input type="submit" name="submit"/>  

    </form>  
</body>  
</html>


<?php
if($_POST['Submit']){

    $id = $_POST['stdid'];   
    $f = $_POST['fn'];
    $l = $_POST['ln'];
    $e = $_POST['em'];
    $m = $_POST['Mob'];
    
    $query = "INSERT INTO responsive.PAGE values('$id','$f','$l','$e','$m')";
    
    $data = mysqli_query($conn,$query);
    if ($data){
    
        echo "data inserted into database";
    }
    else{
        echo "failed";
    }};

?>