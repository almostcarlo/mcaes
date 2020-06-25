
<!-- PAGE CONTENT -->
<div class="" role="main">

	<!-- USER MANAGER - ADD FORM -->
	<div class="row">
		<div class="col-md-12">

            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>
			
			<div class="x_panel tile">
				<div class="x_title">
					<h2>User - Add Form</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					
					<!-- <a href="<?php echo BASE_URL;?>warehouse/forms/item-manager_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Item</a> -->
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<h4>USER DETAILS:</h4>
					
					<br>
					
					<?php echo form_open('sysad/add/user', 'id="form_user"');?>
								
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Username:</label>
									<input type="text" name="textUsername" id="textUsername" class="form-control" value="" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Complete Name:</label>
									<input type="text" name="textName" id="textName" class="form-control" value="" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Position:</label>
									<input type="text" name="textPosition" id="textPosition" class="form-control" value="" />
								</div>
							</div>
					  </div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Password:</label>
									<input type="password" name="textPassword" id="textPassword" class="form-control" value="" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Confirm Password:</label>
									<input type="password" name="textCpassword" id="textCpassword" class="form-control" value="" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Status:</label>
									<select name="selectStat" id="selectStat" class="form-control">
										<option value="Y">Active</option>
										<option value="N">Inactive</option>
									</select>
								</div>
							</div>
						</div> 

						<hr />
						
						<div class="row">

							<div class="col-md-2 col-sm-3">
								<a href="<?php echo BASE_URL;?>sysad/forms/user-manager.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i> Exit</a>
							</div>

							<div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-3">
								<!--<button class="btn btn-default btn-block"><i class="fa fa-close"></i> Clear</button>-->
							</div>

							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary btn-block" type="button" onclick="save_this();"><i class="fa fa-save"></i> Save</button>
							</div>

						</div>
						
					</form>
					
				</div>
			</div>
	   
		</div>
	</div>
	<!-- END of AGENT MANAGER - ADD FORM -->
	
	


</div>
<!-- END of PAGE CONTENT -->

<script type="text/javascript">
    function save_this(){
        $("#frm_ErrorNotice").addClass("hidden");

        if($('#textUsername').val() == ''){
            $('#frm_ErrorNotice').html('Username is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textUsername').focus();
        }else if($('#textName').val() == ''){
            $('#frm_ErrorNotice').html('Complete Name is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textName').focus();
        }else if($('#textPassword').val() != $('#textCpassword').val()){
        	$('#frm_ErrorNotice').html('Password does not match.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textCpassword').select()
        }else{
            /*CHECK IF USERNAME EXISTS*/
			$.get(base_url_js+'sysad/check_duplicate', {table:'tbl_user', field:'username', value:$('#textUsername').val()}, function(data) {
				if(data == 1){
		    		$('#frm_ErrorNotice').html('Username is already in use, please enter a valid username.');
		            $("#frm_ErrorNotice").removeClass("hidden");
		            $('#textUsername').focus();
					return false;
				}else{
					$('#form_user').submit();
				}
			});
        }
    }
</script>