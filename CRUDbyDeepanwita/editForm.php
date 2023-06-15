<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
    $deepanwita=$arr['name'];
	$des=$arr['designation'];
	$pho=$arr['phone'];
	$dob=$arr['DoB'];
	
?>
<!DOCTYPE html>
<html lang="en">
<body>	
	<center style="background-color:#95afc0;">
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id ?>">

			<label>Name</label>
			<input style="background-color:#dff9fb; border-radius:15px;"type="text" value="<?php echo $deepanwita ?>" name="f_name"> <br> <br>
			<label>Designation</label>
			<input style="background-color:#dff9fb; border-radius:15px;" type="text" value="<?php echo $des ?>" name="f_designation"> <br> <br>
			<label>phone</label>
			<input style="background-color:#dff9fb; border-radius:15px;"type="text"  value="<?php echo $pho?>" name="f_phone" > <br> <br>
			<label>Date of Birth</label>
			<input style="background-color:#dff9fb; border-radius:15px;"type="date"  value="<?php echo $dob ?>" name="f_dob" > <br> <br>
			<input style="background-color:#e056fd; border-radius:15px;" type="submit" value="Update">
		</form>
	</center>	
	
</body>
</html>