         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from registration where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert('Registration Deleted Successfully');</script>";
				header("refresh:1;show-registration.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}
           ?>