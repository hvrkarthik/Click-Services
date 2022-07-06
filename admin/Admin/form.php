<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
                <!-- END Breadcrumb -->

                <!-- General Forms Block -->
                <div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>General Form Elements &amp; Components</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
                        <form action="page_forms_general.html" method="post" class="form-horizontal" name="formID" id="formID">
                            <!-- Default Inputs -->
                            <h4 class="sub-header">Default Inputs</h4>
                            <div class="control-group">
                                <label class="control-label" for="general-text">Username</label>
                                <div class="controls">
                                    <input type="text" id="general-text" name="general-text" class="validate[required]">
                                    <span class="help-block">Your username must be unique..</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-password">Password</label>
                                <div class="controls">
                                    <input type="password" id="general-password" name="general-password"  class="validate[required]">
                                    <span class="help-block">..and your password hard to guess!</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-placeholder">Placeholder</label>
                                <div class="controls">
                                    <input type="text" id="general-placeholder" name="general-placeholder" placeholder="placeholder..">
                                    <span class="help-block">Placeholder attribute also works with older browsers!</span>
                                </div>
                            </div>
\                           <div class="control-group">
                                <label class="control-label" for="general-textarea">Textarea</label>
                                <div class="controls">
                                    <textarea id="general-textarea" name="general-textarea" class="textarea-medium" rows="6">...</textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="general-select">Select</label>
                                <div class="controls">
                                    <select id="general-select" name="general-select" size="1">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                    <span class="help-block">This is the default select box</span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="reset" class="btn btn-danger"><i class="icon-repeat"></i> Reset</button>
                                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit</button>
                            </div>
                            <!-- END Form Buttons -->
                        </form>
                    </div>
                    <!-- END General Forms Content -->
                </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<?php include('footer.php');   ?>