<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM teacher";
	$result=$conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1> Teacher List</h1>
			<table>
				<tr style="background-color:#686de0;">
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>phone</th>
					<th>Date of Birth</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['designation'];
					$pho=$r['phone'];
					$dob=$r['DoB'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pho . "</td>";
						echo "<td>". $dob . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'><button style='background-color:#e056fd;border-radius:20px;'>Update</button></a></td>";
						echo "<td > <a href='delete.php?del_id=$idd'><button style='background-color:red;border-radius:20px;'>Delete</button><a></td>";
					echo "</tr>";
			     }
				?>
				
				<tr>
					<td colspan="7"><a href="insertForm.php" ><button style="background-color:#6ab04c; border-radius:20px;" >Insert Record</button></a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




