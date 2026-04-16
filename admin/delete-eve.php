         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from tbevent where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert('Details Deleted Successfully');</script>";
				header("refresh:1;show-eve.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}				
           ?>