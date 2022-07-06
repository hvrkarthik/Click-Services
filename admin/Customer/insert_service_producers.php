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
$sql="insert into service_producers values('','$service_id','$name','$contact_no','$company_name','$email','$address','$register_no')";
mysql_query($sql);

$sql1="insert into login values('$register_no','$contact_no','provider','My registered Email Id','$email')";
mysql_query($sql1);
?>
<script>
alert("values inserted");
document.location="view_service_producers.php";
</script>

</body>
</html>
