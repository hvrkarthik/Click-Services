<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$bill_id=$_POST['bill_id'];
$request_id=$_POST['request_id'];
$customer_id=$_POST['customer_id'];
$bill_date=$_POST['bill_date'];
$total_worker=$_POST['total_worker'];
$rate_worker=$_POST['rate_worker'];
$details=$_POST['details'];
$amount=$_POST['amount'];

$a=$total_worker*$rate_worker;
$tamt=$a+$amount;

$status=$_POST['status'];
include('db.php');
$sql="insert into bill values('','$request_id','$customer_id','$bill_date','$total_worker','$rate_worker','$details','$amount','$tamt','$status')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_bill.php";
</script>

</body>
</html>
