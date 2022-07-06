<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">VIEW SERVICE PRODUCERS</small></h4>

                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr>
<th>#</th>
<th>SERVICE ID</th>
<th>NAME</th>
<th>CONTACT NO</th>
<th>COMPANY NAME</th>
<th>EMAIL</th>
<th>ADDRESS</th>
<th>REGISTER NO</th>

<th></th>
</tr>
                        </thead>
                        <tbody>
<?php
 $i=0;
include('db.php');
$sql="select * from service_producers sp,services sr where sp.service_id=sr.service_id and sp.register_no='$uname'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['service_name'];?></td>
<td><?php echo $row['contact_no'];?></td>
<td><?php echo $row['company_name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['register_no'];?></td>

<td><a href="edit_service_producers.php?id=<?php echo $row['service_producer_id'];?>"><img src="edit-icon.gif"></a></td>
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










