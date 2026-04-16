<?php include_once('header.php'); ?>
	<nav class="navbar navbar-expand fixed-top">
  <ul  class="navbar-nav mr-auto align-items-center">
					<li class="nav-item">
					  <a class="nav-link toggle-menu" href="javascript:void();">
					   <i class="icon-menu menu-icon"></i>
					 </a>
					</li>
					<li class="nav-item">
					    <a class="nav-link active" href="add-gallery.php">
						<button type="button" class="btn btn-primary  waves-effect waves-light m-1"><i class="fa fa-save"></i>Add</button></a>
					  </li>
					  <li class="nav-item">
					   <a class="nav-link active" href="show-gallery.php">
						<button type="button" class="btn btn-warning waves-effect waves-light m-1"><i class="fa fa-edit"></i>Update</button></a>
					  </li>
					  
					   
					 
  </ul>
			
  <ul class="navbar-nav align-items-center right-nav-link">
   
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-item"><a href="change-password.php"><i class="icon-settings mr-2"></i>Change Password</a></li>
        
        <li class="dropdown-item"><a href="logout.php"><i class="icon-power mr-2"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</nav>
</header>

<div class="clearfix"></div>
<!-------------------------->
  <div class="content-wrapper">
    <div class="container-fluid">
     
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title"> Wall Fame Section</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Show Fame</a></li>
           
         </ol>
	   </div>
	  
     </div>
   
     

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
						<th>Name</th>
						<th>Image</th>
						<th>Status</th>
                    </tr>
                </thead>
				<?php 
									 include('connection.php');
									 $counter = 0;
									 $sql="select * from tbfame order by id desc";
									  $r=mysqli_query($dbcon,$sql);
								      while($row=mysqli_fetch_array($r))
								      {
								     ?>
                <tbody>
                    <tr>
                       <td><?php echo ++$counter; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><img src="assets/images/upload/product/gallery/<?php echo $row['pic1']; ?>" style="width:100px;"></td>
							<td class="center">
													
						  <a href="update-fame.php?id=<?php echo $row['id'];?>" class="btn btn-warning " title="Update" style="padding:10px;"><i class="fa fa-times fa fa-edit"></i></a>
														
							<a href="delete-fame.php?id=<?php echo $row['id'];?>" class="btn btn-danger " title="Delete" style="padding:10px;"><i class="fa fa-times fa fa-white"></i></a>
													
													
						</td>
                    </tr>
                </tbody>
									  <?php } ?>
                <tfoot>
                    <tr>
                       <th>Sr. No.</th>
						<th>Name</th>
						<th>Image</th>
						<th>Status</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
 
    
    </div>
   
   
	
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   
	<!---<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019  Admin
        </div>
      </div>
    </footer>---->

   
  </div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <script src="assets/js/sidebar-menu.js"></script>
  
  <script src="assets/js/app-script.js"></script>

  <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
  <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
</body>
</html>
