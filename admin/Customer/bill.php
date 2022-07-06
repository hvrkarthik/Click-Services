<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">BILLS</h4>

                <!-- With Borders Section -->
              <div class="block-section">
                    
			    <form name="formID" id="formID" method="post" action="insert_bill.php">
  <table class="table table-bordered">
  <thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  </thead>
    <tr>
      <td width="104"><b>Request Id</b></td>
      <td width="144"><select name="request_id" id="request_id">
        <?php 
	  include('db.php');
	  $sql="select * from request";
	  $res=mysql_query($sql);
	  while($row1=mysql_fetch_array($res)) 
	  {
	  ?>
        <option value="<?php echo $row1['request_id'];?>" ><?php echo $row1['request_id']; ?>.<?php echo $row1['service_id']; ?></option>
        <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><b>Customer Id</b></td>
      <td><select name="customer_id" id="customer_id">
        <?php 
	  include('db.php');
	  $sql="select * from customer";
	  $res=mysql_query($sql);
	  while($row2=mysql_fetch_array($res)) 
	  {
	  ?>
        <option value="<?php echo $row2['customer_id'];?>" ><?php echo $row2['customer_name']; ?>.<?php echo $row2['customer_contact']; ?></option>
        <?php 
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td><b>Bill Date</b></td>
      <td><input name="bill_date" type="date" id="bill_date" class="validate[required],custom[date]"></td>
    </tr>
    <tr>
      <td><b>Total Workers</b></td>
      <td><input name="total_worker" type="text" id="total_worker" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td><b>Rate Of Worker</b></td>
      <td><input name="rate_worker" type="text" id="rate_worker" class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td><b>Amount</b></td>
      <td>
        <input name="amount" type="text" id="amount" class="validate[required]"></td>
    </tr>
    <tr>
      <td><b>Status</b></td>
      <td><input name="status" type="text" id="status" class="validate[required],custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Reset" value="Reset"></td>
    </tr>
  </table>
  <input type="checkbox">
			    </form>
			

                        <thead><tr><th class="span1 text-center">&nbsp;</th>
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








