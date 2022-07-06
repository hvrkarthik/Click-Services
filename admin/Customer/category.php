<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">CATEGORIES</h4>

                <div class="block-section">
                    
					<form name="formID" id="formID" method="post" action="insert_category.php">
 <table class="table table-bordered">
  <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
   </thead>
    <tr>
      <td width="145"><b>Category Name</b></td>
      <td width="144"><input name="category_name" type="text" id="category_name" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><b>Category Description</b></td>
      <td><input name="category_description" type="text" id="category_description" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
 
</form>
                <thead>
                      </thead>
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












