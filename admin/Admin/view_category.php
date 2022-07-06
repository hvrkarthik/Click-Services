<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                <h4 class="page-header">CATEGORY</h4>
<a href="category.php"><button>ADD NEW</button></a>
                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
 <tr>
<th>#</th>
<th>CATEGORY NAME</th>
<th>CATEGORY DESCRIPTION</th>
<th></th>
<th></th>
</tr>
</thead>

  <tbody>
<?php
$i=0;
include('db.php');
$sql="select * from category";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
$i=$i+1;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['category_name'];?></td>
<td><?php echo $row['category_description'];?></td>
<td><a onclick ="return confirm('Are you sure....')"; href="delete_category.php?id=<?php echo $row['category_id'];?>"><img src="hr.gif"></a></td>
<td><a href="edit_category.php?id=<?php echo $row['category_id'];?>"><img src="edit-icon.gif"></a></td>
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







