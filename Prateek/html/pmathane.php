
    <?php
    /*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Db{
    public $host = "localhost";
    public $username = "root";
    public $password = "1234";
    public $dbname = "my_page";
    public function __construct(){
     
     $conn = new mysqli($this->host,$this->username,$this->password, $this->dbname);
     return $conn;
   }
  };
  $obj = new Db();
  echo "Connected successfully";
?>
   <form action="#" method="post">
   <label for="std_id">std_id:</label><br>
            <input type="text" id="std_id" name="stdid" ><br><br>
        Name: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        <input type="submit" name="submit">
    </form><?php 
    class user{
        public function __construct(){

        
      
             $obj = new Db();
       $this->conn = $conn;
    }
    public 
   function insert($id ,$fname , $em) {  
          $sql=" Insert into my_page(id,fn , em ) Values ('$id','$fn','$em')";
          var_dumb ($sql);
            $submit = mysql_query($sql );
            return $submit;  
        }   
    
      ?>
      
73
74
75
76
77
78


$insertdata=new DB_con();

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$adrss=$_POST['address'];
$sql=$insertdata->insert($fname,$email,$contact,$gender,$education,$adrss);
$res =$insertdata->select();
//$ff=$insertdata->update();
//$del=$insertdata->delete($fname,$email,$contactno,$gender,$education,$adrss);


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

<table style="width:80%;background-color: #ffccff;">
    <thead>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Education</th> 
    <th>Address</th> 
    <th>operation <text-align:center></text> </th>
    
    <?php

if($res){    
    while($row=mysqli_fetch_assoc($res)){
        $id=$row['id'];
        $fname=$row['name'];
        $email=$row['email'];
        $contactno =$row['contactno'];
        $gender=$row['gender'];
        $education=$row['education'];
        $addrss=$row['addrss'];
        
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
        <td  ><button><a href="upd.php?id=<?php echo $id?>">update</a></button> </td>
        <td ><button>Delete</button> </td>
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
