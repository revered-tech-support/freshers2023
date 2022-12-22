<?php
         ini_set('display_errors', 1);
         ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

      include 'function.php';
       
       $obj= new DB_con();
       $id= $_GET['updateid'];
        echo $id;
        
       $sq = "select * from inserdata where id=$id";
       

       
       $res =$obj->select($sq);
     
     if($res){ 
      $row=mysqli_fetch_assoc($res);
      $id=$row['id'];
      $fname=$row['name'];
      $email=$row['email'];
      $contactno =$row['contactno'];
      $gender=$row['gender'];
      $education=$row['education'];
      $addrss=$row['addrss'];

      
     }





     if(isset($_POST['update'])){
      // $id=$_POST['id'];
      $fname=$_POST['fname'];
      $email=$_POST['email'];
      $contactno=$_POST['contact'];
      $gender=$_POST['gender']; 
      $education = $_POST['education'];
      $addrss=$_POST['addrss'];


        $updata= $obj->update($id,$fname,$email,$contactno,$gender,$education,$addrss);
     }

     
    
       
  
 ?>  

 <?php echo "update form ";?>
 <form name="" action="#" method="post">
 <table width="100%"  border="0">
 <tr>
 <th width="26%" height="60" scope="row">Full Name :</th>
 <td width="74%"><input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control" required /></td>
 </tr>
 <tr>
 <th height="60" scope="row">Email :</th>
 <td   ><input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required /></td>
 <tr>
   </tr>
 <th height="60" scope="row">Contact no. :</th>
 <td><input type="text" name="contact" maxlength="10" value="<?php echo $contactno?>" class="form-control" required /></td>
 </tr>
 <tr>
 <th height="60" scope="row">Gender :</th>
 <td><input type="radio" name="gender" value="Male"<?php  echo ($gender=='Male')?'checked':''?>  /> Male  &nbsp;
 <input type="radio" name="gender" value="Female" <?php  echo ($gender=='Female')?'checked':''?> /> Female</td>
 </tr>
 <tr>
 <th height="60" scope="row">Education :</th>
 <td><select  name="education" id="" class="form-control">
   <option><?php echo $education ?></option>
   <option value="10th">10th</option>
   <option value="12th">12th</option>
    <option value="Graduate">Graduate</option>
  <option value=" Post Graduate">Post Graduate</option>
                       </select></td>
 
 </tr>
 <tr>
 <th height="60" scope="row">Address :</th>
 <td><textarea name="addrss" class="form-control">
 <?php echo $addrss ?>
 </textarea></td>
 </tr>
 <tr>
 <td><input type="submit" value="update" name="update" class="button" /></td>
<!-- // <button><a href="function.php?id=<?php //echo $id ?>" >Update</a></button>
//  <button><a href="function.php?id=<?php //echo $id ?>">Update</a></button>                       -->
 </tr>
 </table>
 </form> 