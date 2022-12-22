<?php
ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'1234');
define('DB_NAME', 'new');
class DB_con
{

public $con;
public $sql;
function __construct()
{
    
$this->con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
echo"prateek connected";
}




  public function insert($data)
{

    $sql="Insert into prateek(firstname,lastname,gender,phone,email,password,retype) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
$ret=mysqli_query($this->con , $sql);
if($ret){
    echo "inserted";
    
      header('location:table.php');
    
    }

    else{
        return "ret"; }

}

public function select($dat){ 
    
  $res = mysqli_query($this->con, "SELECT * FROM prateek");
  return $res;
  } 






  public function reg_stud($email,  $password,){
    
                $password = ($password);
    
                $sql="SELECT * FROM prateek WHERE emai='$email' OR password='$password'";
  
                $check =  $this->con->query($sql) ;
    
                $count_row = $check->num_rows;

                if ($count_row == 0){
    
                    $sql1="INSERT INTO prateek SET email='$email', password='$password',  ";
    
                    $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
    
                    return $result;
    
                }
    
                else { return false;}
    
            }
    
/*** for login process ***/

public function check_login($email, $password){

    $password = md5($password);

    $sql2="SELECT * from prateek  WHERE email='$email'  and password ='$password'";

    //checking if the username is available in the table

   

    

    }

    




    
}




