<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">RATINGS</h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    
					<?php 
					$cid=$_REQUEST['cid'];
					$sid=$_REQUEST['sid'];
					$spid=$_REQUEST['spid'];
					?>
					
					<form name="formID" id="formID" method="post" action="insert_ratings.php">
 <table class="table table-bordered">
 <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  </thead>
    <tr>
      <td width="132"><b>Customer Id</b></td>
      <td width="134"><select name="customer_id" id="customer_id">
     <?php 
	  include('db.php');
	  $sql="select * from customer where customer_contact='$uname'";
	  $res=mysql_query($sql);
	  while($row1=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row1['customer_id'];?>"><?php echo $row1['customer_name']; ?>.<?php echo $row1['customer_description']; ?></option>
	  <?php 
	  }
	  ?>
            </select></td>
    </tr>
    <tr>
      <td><b>Service Id</b></td>
      <td><select name="service_id" id="service_id">
	  <?php 
	  include('db.php');
	  $sql="select * from services where service_id='$sid'";
	  $res=mysql_query($sql);
	  while($row2=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row2['service_id'];?>"><?php echo $row2['service_name']; ?>.<?php echo $row2['service_description']; ?></option>
	  <?php 
	  }
	  ?>
            </select></td>
    </tr>
    <tr>
      <td><b>Service Producer Id</b></td>
      <td><select name="service_producer_id" id="service_producer_id"> <?php 
	  include('db.php');
	  $sql="select * from service_producers where service_producer_id='$spid'";
	  $res=mysql_query($sql);
	  while($row3=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row3['service_producer_id'];?>"><?php echo $row3['name']; ?>.<?php echo $row3['contact_no']; ?></option>
	  <?php 
	  }
	  ?>
	  
      </select></td>
    </tr>
    <tr>
      <td><b>Rating Date</b></td>
      <td><input name="rating_date" type="date" id="rating_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td><b>Reviews</b></td>
      <td>        <textarea name="reviews" id="reviews" class="validate[required],custom[onlyLetter]"></textarea></td></tr>
    <tr>
      <td><b>Ratings</b></td>
      <td><select name="ratings">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>
	  <option>4</option>
	  <option>5</option>
	  </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
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










