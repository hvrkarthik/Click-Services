<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include('db.php');
$service_producer_id=$_REQUEST['id'];
$sql="delete from service_producers where service_producer_id='$service_producer_id'";
$res=mysql_query($sql);
?>
<script>
alert("values deleted");
document.location="view_service_producers.php";
</script>

</body>
</html>