
<?php
$servername = "localhost";
$username = "root";
$password = "1234";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
 

<?php
if($_POST['submit'])
{
$std = $_POST['std_id'];  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mob no.'];

$query = "INSERT INTO responsive.form VALUES ('$std', '$fname','$lname','$email','$mobile.')";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "data inserted into database";
}
else
{
    echo "failed";
}
}
?>
