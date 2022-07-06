<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">CUSTOMER DETAILS </h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    
                       
					   <form name="formID" id="formID" method="post" action="insert_customer.php">
  <table class="table table-bordered">
  
  <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  </thead>
  
    <tr>
      <td width="115"><b>Customer Name</b></td>
      <td width="124"><input name="customer_name" type="text" id="customer_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Customer Contact</b></td>
      <td><input name="customer_contact" type="text" id="customer_contact" class="validate[required],custom[mobile]"></td>
    </tr>
    <tr>
      <td><b>Customer Email</b></td>
      <td><input name="customer_email" type="text" id="customer_email" class="validate[required],custom[email]"></td>
    </tr>
    <tr>
      <td><b>Customer Address</b></td>
      <td><input name="customer_address" type="text" id="customer_address" class="validate[required]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
</form>
					   
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



