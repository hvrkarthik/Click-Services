<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
<td>rating_id</td>
<td>customer_id</td>
<td>service_id</td>
<td>service_producer_id</td>
<td>ratings_date</td>
<td>reviews</td>
<td>ratings</td>
</tr>
<?php
include('db.php');
$sql="select * from ratings";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
<tr>
<td><?php echo $row['rating_id'];?></td>
<td><?php echo $row['customer_id'];?></td>
<td><?php echo $row['service_id'];?></td>
<td><?php echo $row['service_producer_id'];?></td>
<td><?php echo $row['ratings_date'];?></td>
<td><?php echo $row['reviews'];?></td>
<td><?php echo $row['ratings'];?></td>
<td><a href="delete_ratings.php?id=<?php echo $row['rating_id'];?>">delete</a></tgd>
<td><a href="edit_ratings.php?id=<?php echo $row['rating_id'];?>">edit</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
