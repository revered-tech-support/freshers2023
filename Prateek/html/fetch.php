

<?php

ini_set('display_errors', 2);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("config.php");
?>

<html>
<head>	
	<title>next</title>
</head>

<body>
<a href="">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>id</td>
       <td>Name</td>
		<td>Email</td>
		<td>gender</td>
		<td>languages</td>
	</tr>
	<?php 


$select ="SELECT * from `ex` ";
$res= mysqli_query($con,$select);
if($res){
	while($col=mysqli_fetch_assoc($res)){
		 $id=$col['id'];
		 $name=$col['name'];
		 $email=$col['email'];
		 $gender=$col['gender'];
		 $languages=$col['languages'];
		       
?>
	<tr>
		 <td> <?php echo $id ?></td>
		 <td><?php echo $name ?></td>
		 <td><?php echo $email ?></td> 
		 <td><?php echo $gender ?></td>
		 <td><?php echo $languages ?></td>
		 



		 <td><button class="btn btn-success mr-3" type="submit" name="update" ><a href="edit.php?updateid=<?php echo $id ?>" class="text-white" >Update</a></button>
		 <button class="btn btn-danger"><a class="text-white" href="delete.php?deleteid=<?php echo $id ?>">Delete</a></button></td>
	</tr>
</tbody>
<?php }
}

?>





	?> 
    
	</table>
</body>
</html>