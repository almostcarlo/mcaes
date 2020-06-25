<!-- PAGE CONTENT -->
<div class="" role="main">

    <!-- AGENT MANAGER - ADD FORM -->
    <div class="row">
        <div class="col-md-12">

            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>
            
            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Supplier - Add Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
					
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    <h4>SUPPLIER DETAILS:</h4>
                    
                    <br>
                    
                    <?php echo form_open('procurement/add/supplier', 'id="form_supplier"');?>
                                
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Supplier Name:<span class="required"> *</span></label>
                                    <input type="text" name="textName" id="textName"  class="form-control" value="" />
                                </div>
                            </div>
                        </div>

						<div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                   <label for="">Address:</label>
                                    <input type="text" name="textAddress" id="textAddress"  class="form-control" placeholder="" value="" />
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Tel No.:</label>
                                    <input type="text" name="textTel" id="textTel" class="form-control" placeholder="" value="" />
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Fax No.:</label>
                                    <input type="text" name="textFaxno" id="textFaxno" class="form-control" placeholder="" value="" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Contact Person:</label>
                                    <input type="text" name="textContact" id="textContact" class="form-control" placeholder="" value="" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="email" name="textEmail" id="textEmail" class="form-control" placeholder="" value="" />
                                </div>
                            </div>
							  
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Tin No.:</label>
                                    <input type="text" name="textTin" id="textTin" class="form-control" placeholder="" value="" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="selectTerms">Terms:<span class="required"> *</span></label>
                                    <select name="selectTerms" id="selectTerms" class="form-control" >
                                        <?php echo dropdown_options('terms', '', 0);?>
                                    </select>
                                </div>
                            </div>
							
						 </div>

                        <hr />
                        
                        <div class="row">

                            <div class="col-md-2 col-sm-3">
                                <a href="<?php echo BASE_URL;?>procurement/forms/supplier-manager.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i> Exit</a>
                            </div>

                            <div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-3">
                                <!--<button class="btn btn-default btn-block"><i class="fa fa-close"></i> Clear</button>-->
                            </div>

                            <div class="col-md-2 col-sm-3">
                                <button class="btn btn-primary btn-block" onclick="save_this();" type="button"><i class="fa fa-save"></i> Save</button>
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

        if($('#textName').val() == ''){
            $('#frm_ErrorNotice').html('Supplier Name is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#textName').focus();
        }else{
            $('#form_supplier').submit();
        }
    }
</script>