
<?php
ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'1234');
define('DB_NAME', 'demo');
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
   // echo "<br>" . $fname;
    $sql1="Insert into inserdata(name,email,contactno,gender,education,addrss,password) values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]',$data[6])";
$ret=mysqli_query($this->con , $sql1);
if($ret){
    echo "inserted";
    }

    else{
        return "ret"; }

}



//select
public function select(){ 
    
$res = mysqli_query($this->con, "SELECT * FROM demo.inserdata");
return $res;
} 


// update
public function update($data,$id)
{
$ret=mysqli_query($this->con,"update `inserdata` set id='$id',name='$data[0]',email='$data[1]',contactno='$data[2]', gender='$data[3]', education='$data[4]' ,addrss='$data[5]' where id=$id");
if($ret){

    echo "Data updated successfully";
    header('location:list.php');
 }
 else{
   die(mysqli_error($this->con));
 }
return ;
} 



//delete
public function delete($id)
    {
        $ret=mysqli_query($this->con,"delete from demo.inserdata where id=$id");
        return $ret;
    }




}

