<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
$category_id=$_POST['category_id'];
$category_name=$_POST['category_name'];
$category_description=$_POST['category_description'];
include('db.php');
$sql="update category set category_name='$category_name',category_description='$category_description' where category_id='$category_id'";
mysql_query($sql);
?>
<script>
alert("values inserted");
document.location="view_category.php";
</script>

</body>
</html>
