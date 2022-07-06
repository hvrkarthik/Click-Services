<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">With Borders <small><code>.table</code> <code>.table-bordered</code></small></h4>

                <!-- With Borders Section -->
                <div class="block-section">
  
  <form name="formID" id="formID" method="post" action="update_customer.php">
<?php
include('db.php');
$customer_id=$_REQUEST['id'];
$sql="select * from customer where customer_id='$customer_id'";
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
  

<input type="hidden" name="customer_id" value= "<?php echo $row ['customer_id'];?>">
<tr>
<td><b>Customer Name</b></td>
<td><input type="text" name="customer_name" class="validate[required],custom[onlyLetter]"value="<?php echo $row['customer_name'];?>">
</td>
</tr>
<tr>
<td><b>Customer Contact</b></td>
<td><input type="text" name="customer_contact" class="validate[required],custom[mobile]" value="<?php echo $row['customer_contact'];?>">
</td>
</tr>
<tr>
<td><b>Customer Email</b></td>
<td><input type="text" name="customer_email"class="validate[required],custom[email]" value="<?php echo $row['customer_email'];?>">
</td>
</tr>
<tr>
<td><b>Customer Address</b></td>
<td><input type="text" name="customer_address" class="validate[required]" value="<?php echo $row['customer_address'];?>">
</td>
</tr>
<tr>
<td> <input type="submit"  name="submit" ></td>
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








<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php include ("val.php"); ?>
<form name="formID" id="formID" method="post" action="update_customer.php">
<?php
include('db.php');
$customer_id=$_REQUEST['id'];
$sql="select * from customer where customer_id='$customer_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<table>
<input type="hidden" name="customer_id" value= "<?php echo $row ['customer_id'];?>">
<tr>
<td>customer_name</td>
<td><input type="text" name="customer_name" class="validate[required],custom[onlyLetter]"value="<?php echo $row['customer_name'];?>">
</td>
</tr>
<tr>
<td>customer_contact</td>
<td><input type="text" name="customer_contact" class="validate[required],custom[mobile]" value="<?php echo $row['customer_contact'];?>">
</td>
</tr>
<tr>
<td>customer_email</td>
<td><input type="text" name="customer_email"class="validate[required],custom[email]" value="<?php echo $row['customer_email'];?>">
</td>
</tr>
<tr>
<td>customer_address</td>
<td><input type="text" name="customer_address" class="validate[required]" value="<?php echo $row['customer_address'];?>">
</td>
</tr>
<tr>
<td> <input type="submit"  name="submit" ></td>
</tr>
</table>
</form>
</body>

</html>
