<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
//$customer_id=$_POST['customer_id'];
$customer_name=$_POST['cname'];
$customer_contact=$_POST['cno'];
$customer_email=$_POST['email'];
$customer_address=$_POST['addr'];
include('db.php');
$sql="insert into customer values('','$customer_name','$customer_contact','$customer_email','$customer_address')";
mysql_query($sql);

$sql="insert into login values('$customer_contact','123456','customer','Your registered Email-Id','$customer_email')";
mysql_query($sql);
?>
<script>
alert("Thank You for registering. Your username is : <?php echo $customer_contact; ?> , Password : <?php echo "123456"; ?>");
document.location="index.php";
</script>

</body>
</html>
