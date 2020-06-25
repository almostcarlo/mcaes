
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
					<h2>Item - Edit Form</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					
					<a href="<?php echo BASE_URL;?>warehouse/forms/item-manager_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Item</a>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<h4>ITEM DETAILS:</h4>
					
					<br>
					
					<?php echo form_open('warehouse/edit/item/'.$info['itemno'], 'id="form_item"');?>
								
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<label for="">Item No.:<span class="required"> *</span></label>
										<input type="text" class="form-control" name="textItemNo" id="textItemNo" readonly value="<?php echo $info['itemno']?>" />
									   <span class="input-group-btn" style="top:9px;">
											<button href="<?php echo BASE_URL;?>warehouse/modal/item" label="Item" parent_form_id="form_item" class="btn btn-default modal_btn" type="button"><i class="fa fa-chevron-right"></i></button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="">Item Name:</label>
									<input type="text" name="textName" id="textName" class="form-control" value="<?php echo $info['itemname'];?>" />
								</div>
							</div>
					  </div>  
						<div class="row">									  
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Category:<span class="required"> *</span></label>
									<select name="selectCat" id="selectCat" class="form-control">
										<?php echo dropdown_options('category', $info['category']);?>
									</select>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Unit:<span class="required"> *</span></label>
									<select name="selectUnit" id="selectUnit" class="form-control">
										<?php echo dropdown_options('unit', $info['stock_uom']);?>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Location:<span class="required"> *</span></label>
									<select name="selectLoc" id="selectLoc" class="form-control">
										<?php echo dropdown_options('location', $info['locn']);?>
									</select>
								</div>
							</div>
							
							  
							
							
							
						 </div>	
						
						
						<div class="row">
							
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Minimum Stock:</label>
									<input type="text" name="textMinStock" id="textMinStock" class="form-control" value="<?php echo $info['minstock'];?>" />
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label for="">Reorder:</label>
									<input type="text" name="textReorder" id="textReorder" class="form-control" value="<?php echo $info['reorder'];?>" />
								</div>
							</div>
							
						 </div>	
						 <div class="row">
							
						<div class="col-md-2">
								<div class="form-group">
									<label for="">Qty on Hand:</label>
									<input type="text" name="textQty" id="textQty" class="form-control" readonly value="<?php echo $info['qoh'];?>" />
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
            $('#frm_ErrorNotice').html('Item Name is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textName').focus();
        }else if($('#selectCat').val() == ''){
        	$('#frm_ErrorNotice').html('Category is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#selectCat').focus();
        }else if($('#selectUnit').val() == ''){
        	$('#frm_ErrorNotice').html('Unit is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#selectUnit').focus();
        }else if($('#selectLoc').val() == ''){
        	$('#frm_ErrorNotice').html('Location is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#selectLoc').focus();
        }else{
            $('#form_item').submit();
        }
    }
</script>