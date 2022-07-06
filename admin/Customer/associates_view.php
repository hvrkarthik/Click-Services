<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">Associates
				<br/>
				<div align="right"><a href="associates.php">Add New</a></div>
				</h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr>
                                
								    <th>Name</th>
									<th>Address</th>
									<th>Contact Person</th>
    								<th>Web-Link </th>
									<th>Email-Id </th>
									<th>Contact No </th>

                                <th class="span1 text-center"><i class="icon-bolt"></i></th>
                            </tr>
                        </thead>
						
						
						
						 <tbody>
						 <?php
  $slno=0;
  include('dbconnect.php');
  $sql="select * from associates";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  $slno=$slno+1;
  ?>
						
						
                            <tr>
							
							
	
									<td><?php echo $row['type'];  ?></td>
    <td><?php echo $row['name'];  ?></td>
    <td><img src="gallery/<?php echo $row['upload_img'];?>" width="100" height="100" /></td>
    <td><?php echo $row['descr'];  ?></td>
							  
                                <td class="span1 text-center">
                                    <div class="btn-group">
									<a href="associates_edit.php?id=<?php echo $row['assoc_id'];?>" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-edit"></i></a>
                                        <a href="associates_delete.php?id=<?php echo $row['assoc_id'];?>" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                                    </div>
                                </td>
                            </tr>

                        
						
						<?php
						}
						?>
						</tbody>
                    </table>
                </div>
                <!-- END With Borders Section -->
                <!-- END With Borders Style -->
            </div>
            <!-- END Page Content -->
<?php include('footer.php');   ?>










