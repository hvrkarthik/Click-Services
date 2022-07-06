<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">BILLS</h4>

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
<th>AMOUNT</th>
<th>TOTAL</th>


</tr>
                        </thead>
                        <tbody>
                            <?php
							$i=0;
include('db.php');
$sql="select * from bill bs,request rs,customer cs where bs.request_id=rs.request_id and bs.customer_id=cs.customer_id";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$tw=$row['total_worker'];
$rw=$row['rate_worker'];
$amt=$row['amount'];
$tot=$tw*$rw;
$gt=$tot+$amt;
$i=$i+1;
?>
<tr>
<td><?php echo $i ;?></td>
<td><?php echo $row['request_id'];?></td>
<td><?php echo $row['customer_name'];?></td>
<td><?php echo $row['bill_date'];?></td>
<td><?php echo $row['total_worker'];?></td>
<td><?php echo $row['rate_worker'];?></td>
<td><?php echo $row['amount'];?></td>
<td><?php echo $gt;?></td>


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






