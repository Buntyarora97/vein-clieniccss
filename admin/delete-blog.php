         <?php
				include('connection.php');
				$id=$_GET['id'];
				$query="delete from tbblog where id='$id'";			
				if(mysqli_query($dbcon,$query))
				{
				echo "<script> alert('Blog Deatail Deleted Successfully');</script>";
				header("refresh:1;show-blog.php");
				}
				else
				{
				echo "<script> alert(' Error');</script>";
				}				
           ?>