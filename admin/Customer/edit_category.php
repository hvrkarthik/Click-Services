<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">EDIT CATEGORY</h4>

                <!-- With Borders Section -->
                <div class="block-section">
				<form name="formID" id="formID" method="post" action="update_category.php">
<?php
include('db.php');
$category_id=$_REQUEST['id'];
$sql="select * from category where category_id='$category_id'";
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
<input type="hidden" name="category_id" value= "<?php echo $row ['category_id'];?>">
<tr>
<td><b>Category Name</b></td>
<td><input type="text" name="category_name" class="validate[required],custom[onlyLetter]" value="<?php echo $row['category_name'];?>">
</td>
</tr>
<td><b>Category Description</b></td>
<td><input type="text" name="category_description" class="validate[required],custom[onlyLetter]" value="<?php echo $row['category_description'];?>">
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
<form name="formID" id="formID" method="post" action="update_category.php">
<?php
include('db.php');
$category_id=$_REQUEST['id'];
$sql="select * from category where category_id='$category_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<table>
<input type="hidden" name="category_id" value= "<?php echo $row ['category_id'];?>">
<tr>
<td>category_name</td>
<td><input type="text" name="category_name" class="validate[required],custom[onlyLetter]" value="<?php echo $row['category_name'];?>">
</td>
</tr>
<td>category_description</td>
<td><input type="text" name="category_description" class="validate[required],custom[onlyLetter]" value="<?php echo $row['category_description'];?>">
</td>
</tr>
<tr>
<td> <input type="submit"  name="submit" ></td>
</tr>
</table>
</form>
</body>

</html>
