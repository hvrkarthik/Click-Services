<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>ratings</title>
</head>
<body>
<?php
$rating_id=$_POST["id"];
$customer_id=$_POST['customer_id'];
$service_id=$_POST['service_id'];
$service_producer_id=$_POST['service_producer_id'];
$rating_date=$_POST['rating_date'];
$reviews=$_POST['reviews'];
$ratings=$_POST['ratings'];
include('db.php');
$sql="insert into ratings values('','$customer_id','$service_id','$service_producer_id','$rating_date','$reviews','$ratings')";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_ratings.php";
</script>
</body>
</html>
