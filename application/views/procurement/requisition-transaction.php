<!-- PAGE CONTENT -->
<div class="" role="main">

    <!-- INSURANCE REQUEST ENTRIES - ADD FORMS -->
    <div class="row">
        <div class="col-md-12">
            <?php flashNotification();?>
            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>

            <div class="x_panel tile">
                <div class="x_title">
                    <h2>Requisition - Edit Form</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <a href=""  class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</a>
                    <a href="requisition-transaction_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    
                    <?php echo form_open('procurement/edit/requisition/'.$info['reqno'], 'id="form_req"');?>
                        <h4>REQUISITION DETAILS</h4>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="">Requisition No.:</label>
                                        <input type="text" class="form-control" id="textReqNo" name="textReqNo" readonly value="<?php echo $info['reqno'];?>" />
                                        <span class="input-group-btn" style="top:9px;">
                                            <button href="<?php echo BASE_URL;?>procurement/modal/requisition" label="Requisition" parent_form_id="form_rec" class="btn btn-default modal_btn" type="button"><i class="fa fa-chevron-right"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputTransactionDate">Requisition Date:</label>
                                    <div class="input-group date" id="calTransactionDate">
                                        <input type="text" class="form-control" name="textReqDate" value="<?php echo $info['reqdt'];?>" id="inputTransactionDate"/>
                                        <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="selectClinic">Requested Dept:</label>
                                        <select class="form-control" id="selectDept" name="selectDept">
                                            <?php echo dropdown_options('department', $info['reqdept']);?>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="inputTransactionNum">Status:</label>
                                    <input type="text" class="form-control" id="textStat" placeholder="" readonly value="<?php echo $info['statid'];?>" />
                                    <input type="hidden" name="flg"  class="form-control" value="0" placeholder=""  />           
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="inputTransactionNum">Remarks:</label>
                                    <textarea class="form-control" name="textRemarks" rows="4"><?php echo $info['remarks'];?></textarea>
                                </div>
                            </div>

                        </div>

                        <hr />
                        
                        <div class="row">
                            <div id="frm_ItemSuccessNotice" class="alert alert-success alert-dismissible hidden" role="alert" style="">
                                <!-- alert message here -->
                            </div>
                            <div id="frm_ItemErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="">
                                <!-- alert message here -->
                            </div>
                                
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="">Item No.:</label>
                                        <input type="hidden" name="hTextLn" value="<?php echo (isset($edit_item))?$edit_item['ln']:"";?>">
                                        <input type="text" class="form-control" id="textItemNo" name="textItemNo" readonly value="<?php echo (isset($edit_item))?$edit_item['itemno']:"";?>" />
                                        <span class="input-group-btn" style="top:9px;">
                                            <button href="<?php echo BASE_URL;?>procurement/modal/item" class="btn btn-default modal_btn" label="Item" type="button"><i class="fa fa-chevron-right"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Description:</label>
                                    <input type="text" class="form-control" id="textDesc" name="textDesc" placeholder="" value="<?php echo (isset($edit_item))?$edit_item['itemdesc']:"";?>" />
                                    
                                </div>
                            </div>

                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="">Quantity:</label>
                                    <input type="text" class="form-control text-right" id="textQty" name="textQty" placeholder="" value="<?php echo (isset($edit_item))?number_format($edit_item['qty']):"";?>" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Unit:</label>
                                        <select class="form-control" id="selectUnit" name="selectUnit">
                                            <?php echo dropdown_options('unit', $edit_item['uom']);?>
                                        </select>
                                    </div>
                                </div>
                            
                            <div class="col-md-2">
                                <?php if(isset($edit_item)):?>
                                    <div class="form-group" style="margin-top:17px;">
                                        <button class="btn btn-default btn-block" type="button" onClick="editItem();"><i class="fa fa-pencil"></i> Update</a>
                                    </div>
                                <?php else:?>
                                    <div class="form-group" style="margin-top:17px;">
                                        <button class="btn btn-default btn-block" type="button" onClick="addItem();"><i class="fa fa-plus"></i> Add</a>
                                    </div>
                                <?php endif;?>
                            </div>
                            
                        </div>

                        <?php if(is_array($info_dtl) && count($info_dtl) > 0):?>
                            <hr />
                            <table id="tableAccounts" class="table table-bordered table-striped table-hover bulk_action">       
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="" onclick="toggle_chkbox(this);"> Sn</th>
                                        <th>Item No.</th>
                                        <th>Description</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Unit</th>
                                        <th class="text-center" style="width:100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyWorkers">

                                    <?php foreach($info_dtl as $dtl):?>
                                        <tr id="ln<?php echo $dtl['ln'];?>">
                                            <td width="5%"><input type="checkbox" class="chk_item" value="<?php echo $dtl['ln'];?>"> <?php echo $dtl['ln'];?></td>
                                            <td width="12%"><?php echo $dtl['itemno'];?></td>
                                            <td width="51%"><?php echo $dtl['itemdesc'];?></td>
                                            <td width="12%" class="text-center"><?php echo number_format($dtl['qty']);?></td>
                                            <td width="10%" class="text-center"><?php echo $uom[$dtl['uom']];?></td>
                                            <td width="10%" class="text-center">
                                            <a href="<?php echo BASE_URL;?>procurement/forms/requisition-transaction.php?id=<?php echo $info['reqno'];?>&ln=<?php echo $dtl['ln'];?>"  class="btn btn-sm btn-info btn-action" data-toggle="modal" data-target="" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" onclick="delete_item('<?php echo $dtl['ln'];?>');" class="btn btn-sm btn-danger btn-action" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>

                                </tbody>
                            </table>
                        <?php endif;?>

                        <hr />

                        <div class="row">

                            <div class="col-md-2 col-sm-3">
                                <a href="<?php echo BASE_URL;?>/home/index" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i>   Exit</a>
                            </div>

                            <div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-3">
                                <!--<button class="btn btn-default btn-block"><i class="fa fa-close"></i> Clear</button>-->
                            </div>

                            <div class="col-md-2 col-sm-3">
                                <a href="javascript:void(0);" class="btn btn-primary btn-block" onclick="edit_req();"><i class="fa fa-pencil"></i> Update</a>
                            </div>

                        </div>
                    
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
    <!-- END of INSURANCE REQUEST ENTRIES - ADD FORMS -->

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

<script>
    function edit_req(){
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

    function addItem(){
        $("#frm_ItemErrorNotice, #frm_ItemSuccessNotice").addClass("hidden");

        if($('#textDesc').val() == ''){
            $('#frm_ItemErrorNotice').html('Description is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#textDesc').focus();
        }else if($('#textQty').val() == ''){
            $('#frm_ItemErrorNotice').html('Quantity is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#textQty').focus();
        }else if($('#selectUnit').val() == ''){
            $('#frm_ItemErrorNotice').html('Unit is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#selectUnit').focus();
        }else{
            $.post(base_url_js+'procurement/ajax/add/req_item', $('#form_req').serialize(), function(data) {
                if(data){
                    $('#frm_ItemSuccessNotice').html('new item has been added.');
                    $("#frm_ItemSuccessNotice").removeClass("hidden");

                    setTimeout(function(){
                        window.location.replace(base_url_js+'procurement/forms/requisition-transaction.php?id=<?php echo $info['reqno'];?>');
                    }, 1000);
                }else{
                    $('#frm_ItemErrorNotice').html('unable to add item.');
                    $("#frm_ItemErrorNotice").removeClass("hidden");
                }
            });
        }
    }

    function editItem(){
        $("#frm_ItemErrorNotice, #frm_ItemSuccessNotice").addClass("hidden");

        if($('#textDesc').val() == ''){
            $('#frm_ItemErrorNotice').html('Description is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#textDesc').focus();
        }else if($('#textQty').val() == ''){
            $('#frm_ItemErrorNotice').html('Quantity is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#textQty').focus();
        }else if($('#selectUnit').val() == ''){
            $('#frm_ItemErrorNotice').html('Unit is required.');
            $("#frm_ItemErrorNotice").removeClass("hidden");
            $('#selectUnit').focus();
        }else{
            $.post(base_url_js+'procurement/ajax/edit/req_item', $('#form_req').serialize(), function(data) {
                if(data){
                    $('#frm_ItemSuccessNotice').html('item has been updated.');
                    $("#frm_ItemSuccessNotice").removeClass("hidden");

                    setTimeout(function(){
                        window.location.replace(base_url_js+'procurement/forms/requisition-transaction.php?id=<?php echo $info['reqno'];?>');
                    }, 1000);
                }else{
                    $('#frm_ItemErrorNotice').html('unable to update item.');
                    $("#frm_ItemErrorNotice").removeClass("hidden");
                }
            });
        }
    }

    function delete_item(ln){
        $("#frm_ItemErrorNotice, #frm_ItemSuccessNotice").addClass("hidden");
        $.get(base_url_js+'procurement/ajax/delete/req_item/'+ln, function(data) {
            if(data){
                $('#frm_ItemSuccessNotice').html('item #'+ln+' has been deleted.');
                $("#frm_ItemSuccessNotice").removeClass("hidden");

                $("#ln"+ln).addClass("hidden");

                setTimeout(function(){
                    $("#frm_ItemErrorNotice, #frm_ItemSuccessNotice").addClass("hidden");
                }, 1000);
            }else{
                $('#frm_ItemErrorNotice').html('unable to delete item.');
                $("#frm_ItemErrorNotice").removeClass("hidden");
            }
        });
    }

    function toggle_chkbox(item){
        if($(item).prop('checked')){
            $('.chk_item').prop('checked',true);
        }else{
            $('.chk_item').prop('checked',false);
        }
    }
</script>