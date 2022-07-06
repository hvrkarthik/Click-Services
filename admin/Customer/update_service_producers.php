<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$service_producer_id=$_POST['service_producer_id'];
$service_id=$_POST['service_id'];
$name=$_POST['name'];
$contact_no=$_POST['contact_no'];
$company_name=$_POST['company_name'];
$email=$_POST['email'];
$address=$_POST['address'];
$register_no=$_POST['register_no'];
include('db.php');
$sql="update service_producers set service_id='$service_id',name='$name',contact_no='$contact_no',
company_name='$company_name',email='$email',address='$address',register_no='$register_no' where service_producer_id='$service_producer_id'";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_service_producers.php";
</script>

</body>
</html>
