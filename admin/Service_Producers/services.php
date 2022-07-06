<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">SERVICES</h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    
					<form name="formID" id="formID" method="post" action="insert_services.php">
  <table class="table table-bordered">
  <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  </thead>
    <tr>
      <td><b>Service Name</b></td>
      <td><input name="service_name" type="text" id="service_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Service Description</b></td>
      <td><input name="service_description" type="text" id="service_description" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Category Id</b></td>
      <td><select name="category_id" id="category_id">
	  <?php 
	  include('db.php');
	  $sql="select * from category";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name']; ?>.<?php echo $row['category_description']; ?></option>
	  <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td> <input type="reset" name="Reset" value="Reset"></td></tr>
  </table>
 
</form>
                        <thead>
                          <tr>
                            <th class="span1 text-center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody><tr><td class="span1 text-center"><div class="btn-group">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- END With Borders Section -->
                <!-- END With Borders Style -->
            </div>
            <!-- END Page Content -->
			
			<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<?php include('footer.php');   ?>










