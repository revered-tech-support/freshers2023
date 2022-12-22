<?php
include ' dbconnection.php';
ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


error_reporting(0);
$selectdata = new DB_con();



?>

<!DOCTYPE html>
<html>
<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<body>

  <table style="width:80%;background-color: F0F8FF;">
    <thead>
      <tr>
        <th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Re-type password</th>
        <th>operation <text-align:center></text> </th>

        <?php
        echo 'p';
        //  $re =new DB_con();
        $res = $selectdata->select($data);
        echo 'rat';
        
        if ($res) {
          while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $gender = $row['gender'];
            $phone = $row['phone'];
            $email = $row['email'];
            $password = $row['password'];
            $retype = $row['retype'];

            echo 'preateek';

        ?>

      <tr>

        <td style="background-color:yellow;">
          <?php
            echo $id ?></td>
        <td style="background-color:powderblue;text-align:center"><?php echo $firstname ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $lastname ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $gender ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $phone ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $email ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $password ?></td>
        <td style="width:100%;background-color:tomato;text-align:center"><?php echo $retype ?></td>
        <td> <button class="btn btn-success mr-3" type="submit" name="update"><a href="update.php?updateid=<?php echo $id ?>" class="text-white">Update</a></button>
          <button class="btn btn-success mr-3" type="submit" name="delete"><a href="deleteoops.php?deleteid=<?php echo $id ?>" class="text-white">Delete</a></button>

        </td>
      </tr>

      </tbody>
  <?php
          }
        }
  ?>
  </tr>
    </thead>
    <tbody>
  </table>
  <table style="width:200">
  </table>
</body>

</html>