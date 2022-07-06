<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">VIEW BILL</h4>
<?php
$rid=$_REQUEST['rid'];
$cid=$_REQUEST['cid'];
?>
                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
<tr>
<th>#</th>
<th>REQUEST ID</th>
<th>CUSTOMER ID</th>
<th>BILL DATE</th>
<th>TOTAL WORKER</th>
<th>RATE OF WORKER</th>
<th>Details OF WORK</th>
<th>AMOUNT</th>
<th>Total</th>

</tr>
                        </thead>
                        <tbody>
                            <?php
							$i=0;
include('db.php');
$sql="select * from bill bs,request rs,customer cs,service_producers sp where bs.request_id=rs.request_id and bs.customer_id=cs.customer_id and rs.service_producer_id=sp.service_producer_id and rs.request_id='$rid' and cs.customer_id='$cid'";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i ;?></td>
<td><?php echo $row['request_date'];?></td>
<td><?php echo $row['customer_name'];?></td>
<td><?php echo $row['bill_date'];?></td>
<td><?php echo $row['total_worker'];?></td>
<td><?php echo $row['rate_worker'];?></td>
<td><?php echo $row['desc_work'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $row['tamt'];?></td>

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






