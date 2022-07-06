<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">SERVICE PROVIDERS</h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    
					<form name="formID" id="formID"  method="post" action="insert_service_producers.php">
  <table class="table table-bordered">
  <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  </thead>
    <tr>
      <td width="134"><b>Service Id</b></td>
      <td width="163"><select name="service_id" id="service_id">
	  <?php 
	  include('db.php');
	  $sql="select * from services";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['service_id'];?>"><?php echo $row['service_name']; ?>.<?php echo $row['service_description']; ?></option>
	  <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><b>Name</b></td>
      <td><input name="name" type="text" id="name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Contact No</b></td>
      <td><input name="contact_no" type="text" id="contact_no" class="validate[required],custom[mobile]"></td>
    </tr>
    <tr>
      <td><b>Company Name</b></td>
      <td><input name="company_name" type="text" id="company_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Email</b></td>
      <td><input name="email" type="text" id="email" class="validate[required],custom[email]"></td>
    </tr>
    <tr>
      <td><b>Address</b></td>
      <td><input name="address" type="text" id="address" class="validate[required]"></td>
    </tr>
    <tr>
      <td><b>Register No</b></td>
      <td><input name="register_no" type="text" id="register_no" class="validate[required]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
 
</form>
                        <thead>
                            <tr>
                                <th class="span1 text-center"><input type="checkbox"></th>
                                <th class="span1 text-center">#</th>
                                <th>Username</th>
                                <th class="hidden-phone"><i class="icon-envelope-alt"></i> Email</th>
                                <th class="hidden-phone">Firstname</th>
                                <th class="hidden-phone">Lastname</th>
                                <th class="span1 text-center"><i class="icon-bolt"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="span1 text-center"><input type="checkbox" id="checkbox5-1" name="checkbox5-1"></td>
                                <td class="span1 text-center">1</td>
                                <td><a href="javascript:void(0)">username1</a></td>
                                <td class="hidden-phone">user1@example.com</td>
                                <td class="hidden-phone">Name</td>
                                <td class="hidden-phone">Last</td>
                                <td class="span1 text-center">
                                    <div class="btn-group">
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






