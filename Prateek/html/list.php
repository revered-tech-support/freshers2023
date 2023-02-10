
<?php

error_reporting(0);
include 'function.php';

$insertdata=new DB_con();

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$adrss=$_POST['address'];
$password=$_POST['password'];


$data = array($fname,$email,$contact,$gender,$education,$adrss,$password);

$sql=$insertdata->insert($data);

}

?>


<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<table style="width:80%;background-color: F0F8FF;">
    <thead>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Education</th> 
    <th>Address</th>
    <th>password</th> 
    <th>operation <text-align:center></text> </th>
    
    <?php

$res =$insertdata->select($data);
if($res){    
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $fname=$row['name'];
        $email=$row['email'];
        $contactno =$row['contactno'];
        $gender=$row['gender'];
        $education=$row['education'];
        $addrss=$row['addrss'];
        $password=$row['password'];
        
        ?>
        
        <tr>
            
        <td style="background-color:yellow;">
        <?php 
        echo $id ?></td>
        <td
        style="background-color:powderblue;text-align:center"><?php echo $fname ?></td>  
        <td   style="width:100%;background-color:tomato;text-align:center"><?php echo $email ?></td>
        <td  style="width:100%;background-color:tomato;text-align:center"><?php echo $contactno ?></td>
        <td  style="width:100%;background-color:tomato;text-align:center"><?php echo $gender ?></td>
        <td  style="width:100%;background-color:tomato;text-align:center"><?php echo $education ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $addrss ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $password ?></td>
        <td>     <button class="btn btn-success mr-3" type="submit" name="update" ><a href="update.php?updateid=<?php echo $id ?>" class="text-white" >Update</a></button>
        <button class="btn btn-success mr-3" type="submit" name="delete" ><a href="deleteoops.php?deleteid=<?php echo $id ?>" class="text-white" >Delete</a></button>

    </td> 
    </tr>

    </tbody>
   <?php }
}
?>
  </tr>
</thead>
<tbody>
</table>
<table style ="width:200">
</table>
</body>
</html>