<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$service_id=$_POST['service_id'];
$service_name=$_POST['service_name'];
$service_description=$_POST['service_description'];
$category_id=$_POST['category_id'];
include('db.php');
$sql="update services set service_name='$service_name',service_description='$service_description',category_id='$category_id' where service_id='$service_id'";
mysql_query($sql);
?>
<script>
alert("values updated");
document.location="view_services.php";
</script>

</body>
</html>
