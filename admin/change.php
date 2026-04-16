	
                       
									<?php 
									
														 include_once('connection.php');
													
														 $id = $_GET['id1'];
													 $sql3="SELECT * FROM tbsubject WHERE classnam = '$id'";
													 echo $spl3;
													 $r3=mysqli_query($dbcon,$sql3);
													
													 $r5 = mysqli_num_rows($r3);
													 echo $r5;
													  
														  ?>
														  <?php
																if($r5 == ''){
																	
																?>
																  <option value="0">No Subject</option>
																<?php }
																else{ 
																while($row3=mysqli_fetch_array($r3))
													  {
																
																
																?>
														  <option value="<?php echo $row3['id'];?>"><?php echo $row3['subjnam'];?></option>
														    
													  <?php } } ?>
													  
													  
													  
													  
													  
													  
													  
													  
													  
													  
													  