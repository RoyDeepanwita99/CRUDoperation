<?php 
include "dbconnect.php";
   $id=$_GET['del_id'];
   $sql="DELETE FROM  teacher WHERE id='$id'";
   
  
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data deleted successfully";
			
		}
		else
		{
			echo "deleted failed";
		}
?>