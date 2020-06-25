<form id="form_modal_requisition">
    <input type="hidden" id="htextFormID" value="">
    <div role="tabpanel" class="tab-pane active" id="applicant-name">
            <div class="form-group">
                <!-- <label for="inputSearchApplicantName">Search by Request No.:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inputSearchApplicantName"/>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div> -->
                
                <table id="tableReq" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="15%">Request No.</th>
                            <th width="15%" class="text-center">Date</th>
                            <th width="20%" class="text-center">Department</th>
                            <th width="50%">Remarks</th>
                        </tr>
                    </thead>
                    <?php if(isset($info) && count($info)>0):?>
                    <tbody>
                    	<?php foreach($info as $i):?>
	                        <tr>
	                            <!-- <td><a href="<?php echo BASE_URL;?>procurement/forms/requisition-transaction.php?id=<?php echo $i['reqno']?>"><?php echo $i['reqno']?></a></td> -->
                                <td><a href="javascript:send_to_parent('<?php echo $i['reqno']?>', '');"><?php echo $i['reqno']?></a></td>
	                            <td class="text-center"><?php echo dateformat($i['reqdt'],2);?></td>
	                            <td class="text-center"><?php echo $department[$i['reqdept']];?></td>
	                            <td><?php echo $i['remarks']?></td>
	                        </tr>
                    	<?php endforeach;?>
                    </tbody>
                	<?php endif;?>
                </table>
                
            </div>
        </div>
        
    
    
</form>
<script type="text/javascript">
    function send_to_parent(this_value, value_2){
        if($('#htextFormID').val() == 'form_rec'){
            window.location.replace(base_url_js+'procurement/forms/requisition-transaction.php?id='+this_value);
        }else{
            $('#textReqNo', '#form_canvass').val(this_value);
            $('#myModal').modal('hide');

            /*GET REQUISITION ITEMS*/
            
             $.get(base_url_js+'procurement/ajax/req_details/get', {reqno:this_value}, function(data) {
                 $('#req_item_cont', '#form_canvass').html(data);
             });
        }
    }
</script>