
<?php


 ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);




include("config.php");

$id = $_GET['updateid'];
echo $id; 

$result="SELECT * FROM ex where id=$id ";

$sq = mysqli_query($con,$result);
$col=mysqli_fetch_assoc($sq);
$languages=$col['languages'];
$languages1=explode(",", $languages);


          $name=$col['name'];
          $email=$col['email'];
          $gender=$col['gender'];
          $languages=$col['languages'];

if(isset($_POST['update']))
{	
	
	$name = $_POST['name'];
	$email =  $_POST['email'];
	$gender =  $_POST['gender'];
    $languages= $_POST['languages'];
    $languages = implode(',', $languages);
	
	$result =  "update ex set name='$name',email='$email',gender='$gender',languages='$languages' WHERE id=$id";

    $response=mysqli_query($con,$result);

       if($response){
       
         echo "Data updated successfully"; 
         header('location:fetch.php');      }
       else{
        die(mysqli_error($con));
    }
}

?>
<?php

?>
<form action="#" method="post" name="update">
    
<table width="25%" border="0">
    <tr> 
        <td>Name</td>
        <td><input type="text" name="name"  value ="<?php echo $name ?>"
        
    ></td>
    </tr> 

    <tr> 
        <td>Email</td>
        <td><input type="text" name="email"  value="<?php echo$email?>"  ></td>
    </tr>
                <tr>
             <th height="60" scope="row">Gender :</th>
            <td><input type="radio" name="gender" value="Male"   <?php  echo ($gender=='Male')?'checked':''?> /> Male  &nbsp;
            <input type="radio" name="gender" value="Female" <?php echo ($gender=='Female')?'checked':''?>/> Female
            <input type="radio" name="gender" value="others"  <?php echo ($gender=='others')?'checked':''?> /> others</td>
        </tr>
        <th height= "80" scope="row">languages :</th><br>
        <label for="fname">languages</label><br>
            <input type="checkbox" id="Hindi" name="languages" value="Hindi" 
            <?php
              if(in_array( 'Hindi' , $languages1)){ 
                echo "checked" ;
              }

            ?>
            ><label>Hindi</label>
            
            <input type="checkbox" id="languages" name="languages[]" value="English" 
            <?php
              if (in_array ('English' ,$languages1)){
                echo "checked";
              }
              ?>
            ><label>English</label>
            
            <input type="checkbox" id="languages" name="languages[]" value="French" 
            <?php
            if (in_array ('French' ,$languages1)){
              echo "checked";
            }
            ?>
            ><label>French</label>
            
            <input type="checkbox" id="languages" name="languages[]" value="Russian" 
            <?php
            if (in_array ('Russian' ,$languages1)){
              echo "checked";
            }
            ?>
            ><label>Russian</label>
            
            <input type="checkbox" id="languages" name="languages[]" value="German" 
            <?php
            if (in_array ('German' ,$languages1)){
              echo "checked";
            }
            ?>
            > <label>German</label><br><br>
        <td></td>
        <td><input type="submit" name="update" value="update"></td>
    </tr>
</table>
</form>