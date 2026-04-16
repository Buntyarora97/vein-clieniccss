         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from tbimg where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert(' Deleted Successfully');</script>";
				header("refresh:1;show-gallery.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}
           ?>