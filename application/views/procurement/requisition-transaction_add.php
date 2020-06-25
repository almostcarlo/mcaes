<?php
    //echo dateformat("today",0);
?>
<!--PAGE CONTENT -->
<div class="" role="main">

    <!-- INSURANCE REQUEST ENTRIES - ADD FORMS -->
    <div class="row">

        <div class="col-md-12">
            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>

            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Requisition - Add Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    <?php echo form_open('procurement/add/requisition', 'id="form_req"');?>
                        <h4>REQUISITION DETAILS</h4>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="">Requisition No.:</label>
                                        <input type="text" class="form-control" id="inputWorkersName" placeholder="" readonly value="" />
                                        
                                    </div>
                                </div>
                            </div>
                           

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputTransactionDate">Requisition Date:</label>
                                    <div class="input-group date" id="calTransactionDate">
                                        <input type="text" class="form-control" name="textReqDate" id="inputTransactionDate" value="<?php echo dateformat("today",0);?>"/>
                                        <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Requested Dept:</label>
                                        <select class="form-control required" id="selectDept" name="selectDept">
                                            <?php echo dropdown_options('department');?>
                                        </select>
                                    </div>
                                </div>
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Remarks:</label>
                                    <textarea class="form-control" name="textRemarks" rows="4"></textarea>
                                </div>
                            </div>

                        </div>

                        <hr />

                        <div class="row">

                            <div class="col-md-2 col-sm-3">
                                <a href="<?php echo BASE_URL."index.php/procurement/forms/";?>requisition-transaction.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i>   Exit</a>
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
    <!-- END of INSURANCE REQUEST ENTRIES - ADD FORMS -->

</div>

<script>
    function save_this(){
        $("#frm_ErrorNotice").addClass("hidden");

        if($('#inputTransactionDate').val() == ''){
            $('#frm_ErrorNotice').html('Requisition Date is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#inputTransactionDate').focus();
        }else if($('#selectDept').val() == ''){
            $('#frm_ErrorNotice').html('Department is required.');
            $("#frm_ErrorNotice").removeClass("hidden");
            $('#selectDept').focus();
        }else{
            $('#form_req').submit();
        }
    }
</script>