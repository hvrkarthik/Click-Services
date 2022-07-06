<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">VIEW REQUESTS</h4>
<a href="request.php"><button>ADD NEW</button></a>
                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr>
<th>#</th>
<th>Customer</th>
<th>Service</th>
<th>Service Provider</th>
<th>Request Date</th>
<th>Description</th>
<th></th>
<th></th>

</tr>
                        </thead>
                        <tbody>
  <?php
  $i=0;
include('db.php');
$sql="select * from request rs,customer cs,services sr,service_producers sp where rs.customer_id=cs.customer_id and rs.service_id=sr.service_id and rs.service_producer_id=sp.service_producer_id and cs.customer_contact='$uname'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['customer_name'];?></td>
<td><?php echo $row['service_name'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['request_date'];?></td>
<td><?php echo $row['description'];?></td>

<td><a href="ratings.php?cid=<?php echo $row['customer_id'];?>&sid=<?php echo $row['service_id']; ?>&spid=<?php echo $row['service_producer_id']; ?>"><button>Give Ratings</button></a></td>
<td><a href="view_bill.php?rid=<?php echo $row['request_id']; ?>&cid=<?php echo $row['customer_id']; ?>"><button>View Bill</button></a></td>
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









