<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">EDIT BILLS</h4>

                <!-- With Borders Section -->
                <div class="block-section">
					<form name="formID" id="formID" method="post" action="update_bill.php">
<?php
include('db.php');
$bill_id=$_REQUEST['id'];
$sql="select * from bill where bill_id='$bill_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
 <table class="table table-bordered">
<thead>
  <tr>
  <th></th>
  <th></th>
  </tr>
  
  </thead>

<input type="hidden" name="bill_id" value= "<?php echo $row ['bill_id'];?>">
<tr>
<td><b>Request Id</b></td>

<td> <select name="request_id" id="request_id">
	  <?php 
	  include('db.php');
	  $sql="select * from request";
	  $res=mysql_query($sql);
	  while($row1=mysql_fetch_array($res)) 
	  {
	  ?>
	  <option value="<?php echo $row1['request_id'];?>" <?php if($row['request_id']==$row1['request_id']) { ?>selected <?php } ?>><?php echo $row1['service_id']; ?>.<?php echo $row2['customer_id']; ?></option>
	  <?php 
	  }
	  ?>
	  
</td>
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
	  <option value="<?php echo $row2['customer_id'];?>" <?php if($row['customer_id']==$row2['customer_id']) { ?>selected <?php } ?>><?php echo $row2['customer_name']; ?>.<?php echo $row2['customer_contact']; ?></option>
	  <?php 
	  }
	  ?>
      </select></td>
    </tr>

<tr>
<td><b>Bill Date</b></td>
<td><input type="date" name="bill_date" class="validate[required],custom[date]" value="<?php echo $row['bill_date'];?>">
</td>
</tr>
<tr>
<td><b>Total Workers</b></td>
<td><input type="text" name="total_worker"  class="validate[required],custom[onlyNumber]" value="<?php echo $row['total_worker'];?>">
</td>
</tr>
<tr>
<td><b>Rate Of Worker</b></td>
<td><input type="text" name="rate_worker"  class="validate[required],custom[onlyNumber]" value="<?php echo $row['rate_worker'];?>">
</td>
</tr>
<tr>
<td><b>Amount</b></td>
<td><input type="text" name="amount"  class="validate[required]" value="<?php echo $row['amount'];?>">
</td>
</tr>
<tr>
<td><b>Status</b></td>
<td><input type="text" name="status"  class="validate[required],custom[onlyLetter]" value="<?php echo $row['status'];?>">
</td>
</tr>
<tr>
<td> <input type="submit"  name="submit" ></td>
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













