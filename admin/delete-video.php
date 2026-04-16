         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from tbvideo where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert(' Deleted Successfully');</script>";
				header("refresh:1;show-video.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}
           ?>