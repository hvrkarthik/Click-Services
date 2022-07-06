<?php session_start(); ?>
<?php
  if(!isset($_SESSION["username"]) || $_SESSION["uname"]=="")
  {
?>
<script type="text/javascript">
alert("Session Expired");
document.location="home.php";
</script>
<?php  
  }
?>