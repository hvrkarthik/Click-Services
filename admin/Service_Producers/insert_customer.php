<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$customer_id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$customer_contact=$_POST['customer_contact'];
$customer_email=$_POST['customer_email'];
$customer_address=$_POST['customer_address'];
include('db.php');
$sql="insert into customer values('','$customer_name','$customer_contact','$customer_email','$customer_address')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_customer.php";
</script>

</body>
</html>
