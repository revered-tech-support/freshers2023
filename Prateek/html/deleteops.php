
<?php 
include 'function.php';

$delete = new DB_con();

$id = $_GET['deleteid'];
if(isset($_GET['deleteid'])){
    
    
    $response = $delete->delete($id);
    if($response){
        header('location:list.php');
        echo "Data deleted";
    }
    else{
        echo "error while deleting";
    }
}

?>



