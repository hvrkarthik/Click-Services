<?php
error_reporting(0);
include('db.php');
 $hintans=$_POST["hintq"];
 $hintans1=$_POST["hinta"];
 $pwd=$_POST["pwd"];
if($hintq==$hinta)
{
?>
<script type="text/javascript">
alert("Your password is : <?php echo $pwd;?>");
 
document.location="index.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("Wrong Hint Answer");
document.location="index.php";
</script>
<?php

}
?>