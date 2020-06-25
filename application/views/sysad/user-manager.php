<?php
	// echo "<pre>";
	// print_r($menu[1][0]);
	// echo "</pre>";
?>
<!-- PAGE CONTENT -->
<div class="" role="main">

	<!-- AGENT MANAGER - ADD FORM -->
	<div class="row">
		<div class="col-md-12">

            <?php flashNotification();?>
            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>
			
			<div class="x_panel tile">
				<div class="x_title">
					<h2>User - Edit Form</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					
					<a href="<?php echo BASE_URL;?>sysad/forms/user-manager_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Create New User</a>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<h4>USER DETAILS:</h4>
					
					<br>
					
					<?php echo form_open('sysad/edit/user/'.$info['id'], 'id="form_user"');?>
								
						<div class="row">
							<div class="col-md-1">
								<div class="form-group">
									<div class="input-group">
										<label for="">User ID.:<span class="required"> *</span></label>
										<input type="text" class="form-control" name="textID" id="textID" readonly value="<?php echo $info['id']?>" />
									   <span class="input-group-btn" style="top:9px;">
											<button href="<?php echo BASE_URL;?>sysad/modal/user" label="User" parent_form_id="form_user" class="btn btn-default modal_btn" type="button"><i class="fa fa-chevron-right"></i></button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Username:</label>
									<input type="text" name="textUsername" id="textUsername" class="form-control" readonly value="<?php echo $info['username'];?>" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Complete Name:</label>
									<input type="text" name="textName" id="textName" class="form-control" value="<?php echo $info['name'];?>" />
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Position:</label>
									<input type="text" name="textPosition" id="textPosition" class="form-control" value="<?php echo $info['position'];?>" />
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
										<option value="Y" <?php echo ($info['is_active']=='Y')?"selected=\"selected\"":"";?>>Active</option>
										<option value="N" <?php echo ($info['is_active']=='N')?"selected=\"selected\"":"";?>>Inactive</option>
									</select>
								</div>
							</div>
						</div> 

						<hr />
						
						<div class="row">

							<div class="col-md-2 col-sm-3">
								<a href="<?php echo BASE_URL;?>home/index" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i> Exit</a>
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
			<!-- ################ -->
			<div class="x_panel tile">
				<div class="x_title">
					<h2>User - Menu Access</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<ul class="nav nav-tabs" role="tablist">
						<?php foreach($menu[1][0] as $k_l1 => $lvl1):?>
							<li role="presentation" class="<?php echo ($k_l1==1)?"active":"";?>"><a href="#computer-num" aria-controls="computer-num" role="tab" data-toggle="tab"><?php echo $lvl1['title'];?></a></li>
						<?php endforeach;?>
                        <!-- <li role="presentation" class="active"><a href="#applicant-name" aria-controls="applicant-name" role="tab" data-toggle="tab">Applicant Name</a></li>
                        <li role="presentation"><a href="#computer-num" aria-controls="computer-num" role="tab" data-toggle="tab">Computer Number</a></li> -->
                    </ul>
                    
                    <div class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane active" id="applicant-name">
                            <div class="form-group">
                                <label for="inputSearchApplicantName">Search by Applicant Name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputSearchApplicantName"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                
                                <table id="tableApplicantName" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Computer No.</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th class="text-center" style="width:100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sm btn-info btn-action" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="computer-num">
                            <div class="form-group">
                                <label for="inputSearchComputerNumber">Search by Computer No.:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputSearchComputerNumber"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                
                                <table id="tableApplicantComputerNum" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Computer No.</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th class="text-center" style="width:100px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sm btn-info btn-action" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        
                    </div>
				</div>
			</div>
	   
		</div>
	</div>
	<!-- END of AGENT MANAGER - ADD FORM -->
	
	


</div>
<!-- END of PAGE CONTENT -->

<!-- MODAL -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="modal_title" class="modal-title">Advance Search</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

<script type="text/javascript">
    function save_this(){
        $("#frm_ErrorNotice").addClass("hidden");

        if($('#textName').val() == ''){
            $('#frm_ErrorNotice').html('Complete Name is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textName').focus();
        }else if($('#textPassword').val() != $('#textCpassword').val()){
        	$('#frm_ErrorNotice').html('Password does not match.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textCpassword').select()
        }else{
            $('#form_user').submit();
        }
    }
</script>