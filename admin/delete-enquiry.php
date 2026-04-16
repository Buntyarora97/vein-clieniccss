         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from tbenq where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert('Enquiry Deleted Successfully');</script>";
				header("refresh:1;show-enquiry.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}
           ?>