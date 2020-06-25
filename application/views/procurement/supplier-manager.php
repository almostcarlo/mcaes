<?php
    //var_dump($info);
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
                    <h2>Supplier - Edit Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
					
                    <a href="<?php echo BASE_URL;?>procurement/forms/supplier-manager_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Item</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    <h4>SUPPLIER DETAILS:</h4>
                    
                    <br>
                    
                    <?php echo form_open('procurement/edit/supplier/'.$info['supplierno'], 'id="form_supplier"');?>
                        <input type="hidden" name="hTextSupplierNo" value="<?php echo $info['supplierno']?>">
                                
                        <div class="row">
							<div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="">Supplier Name:<span class="required"> *</span></label>
                                        <input type="text" required class="form-control" name="textName" id="textName" value="<?php echo $info['suppliername']?>" />
                                        <span class="input-group-btn" style="top:9px;">
                                            <button href="<?php echo BASE_URL;?>procurement/modal/supplier" class="btn btn-default modal_btn" label="Supplier" type="button"><i class="fa fa-chevron-right"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                      </div>  
						<div class="row">									  
                            <div class="col-md-5">
                                <div class="form-group">
                                   <label for="inputAgentCode">Address:</label>
                                    <input type="text" required name="textAddress" id="textAddress"  class="form-control" value="<?php echo $info['address'];?>" />
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="textLastName">Tel No.:</label>
                                    <input type="text" required name="textTel" id="textTel" class="form-control" value="<?php echo $info['phoneno'];?>" />
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="textFirstName">Fax No.:</label>
                                    <input type="text" required name="textFaxno" id="textFaxno" class="form-control" value="<?php echo $info['faxno'];?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="textSubAgent">Contact Person:</label>
                                    <input type="text" name="textContact" id="textContact" class="form-control" value="<?php echo $info['contactperson'];?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputEmail">Email:</label>
                                    <input type="email" name="textEmail" id="textEmail" class="form-control" value="<?php echo $info['email'];?>" />
                                </div>
                            </div>
							  
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Tin No.:</label>
                                    <input type="text" name="textTin" id="textTin" class="form-control" value="<?php echo $info['tin'];?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Terms:<span class="required"> *</span></label>
                                    <select name="selectTerms" id="selectTerms" class="form-control">
                                        <?php echo dropdown_options('terms', $info['terms'], 0);?>
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
            $('#frm_ErrorNotice').html('Supplier Name is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textName').focus();
        }else{
            $('#form_supplier').submit();
        }
    }
</script>