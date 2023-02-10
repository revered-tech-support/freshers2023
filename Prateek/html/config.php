<?php 


ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$con = new mysqli('localhost','root','1234','php_schema');
if($con){
    echo "connected";
}
else{
    die(mysqli_errno($con));
}




?>
<?php
//include 'config.php';



?>