<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$request_id=$_POST['request_id'];
$customer_id=$_POST['customer_id'];
$service_id=$_POST['service_id'];
$service_producer_id=$_POST['service_producer_id'];
$request_date=$_POST['request_date'];
$description=$_POST['description'];
include('db.php');
$sql="update request set customer_id='$customer_id',service_id='$service_id',service_producer_id='$service_producer_id',
request_date='$request_date',description='$description' where request_id='$request_id'";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_request.php";
</script>

</body>
</html>
