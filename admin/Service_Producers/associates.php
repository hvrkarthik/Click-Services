<!--<?php
require_once('calendar/classes/tc_calendar.php');
?> -->


<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="datepickr.css" />


<link href="images/grid_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen" />
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>

            <!-- Page Content -->
            <div id="page-content">
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Associates</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
<form action="associates_insert.php" method="post" enctype="multipart/form-data" name="form1" id="formID"  >
  <table class="table">
   
  
    <tr>
      <td>Associate Name</td>
      <td><input type="text" name="name" id="name" ></td>
    </tr>
   
    <tr>
      <td>Address</td>
      <td><textarea name="address" id="address" ></textarea></td>
    </tr>
	
	    <tr>
      <td>Contact Person </td>
      <td><input type="text" name="contact_person" id="contact_person" ></td>
    </tr>

	<tr>
      <td>Web-Link</td>
      <td><input type="text" name="web_link" id="web_link" ></td>
    </tr>

	<tr>
      <td>Email Id</td>
      <td><input type="text" name="email" id="email" ></td>
    </tr>

	<tr>
      <td>Contact No</td>
      <td><input type="text" name="contact_no" id="contact_no" ></td>
    </tr>
   
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
        <input type="submit" name="Submit" value="reset">
      </div></td>
    </tr>
  </table>
</form>
<script type="text/javascript" src="datepickr.min.js"></script>
		<script type="text/javascript">

			
			new datepickr('datepick2', {
				'dateFormat': 'Y/m/d'
			});
			
		</script>
                    </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include('footer.php');   ?>














