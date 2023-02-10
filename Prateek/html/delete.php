
<!-- <?php
 ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
echo 'skk';
//including the database connection file
include("fetch.php");


$id = $_GET['deleteid'];

$result = "DELETE FROM ex WHERE id=$id";


//header("Location:index.php");
?> -->
<?php 
include 'config.php';


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $Del = "delete from `ex` where id=$id";
    $response=mysqli_query($con,$Del);
    if($response){
      header('location:fetch.php');
      echo "Data deleted";
  }
  else{
      echo "error while deleting";
  }
}

?>