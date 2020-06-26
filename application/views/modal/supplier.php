<form id="form_modal_supplier">
    <input type="text" id="htextFormID" value="">
    <input type="text" id="htextItemNo" value="">
    <div role="tabpanel" class="tab-pane active" id="applicant-name">
            <div class="form-group">
                <table id="tableReq" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="20%">Supplier No.</th>
                            <th width="30%">Name</th>
                            <th width="30%">Contact Person</th>
                            <th width="20%">Email</th>
                        </tr>
                    </thead>
                    <?php if(isset($info) && count($info)>0):?>
                    <tbody>
                    	<?php foreach($info as $i):?>
	                        <tr>
	                            <td><a href="javascript:send_to_parent('<?php echo $i['supplierno']?>','<?php echo $i['suppliername'];?>');"><?php echo $i['supplierno']?></a></td>
	                            <td><a href="javascript:send_to_parent('<?php echo $i['supplierno']?>','<?php echo $i['suppliername'];?>');"><?php echo $i['suppliername'];?></a></td>
	                            <td><?php echo $i['contactperson'];?></td>
	                            <td><?php echo $i['email'];?></td>
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
        if($('#htextFormID').val() == 'form_supplier'){
            window.location.replace(base_url_js+'procurement/forms/supplier-manager.php?id='+this_value);
        }else{
            $('#htextSupplierNo_'+$('#htextItemNo').val(), '#form_canvass').val(this_value);
            $('#textSupplierName_'+$('#htextItemNo').val(), '#form_canvass').val(value_2);
            $('#myModal').modal('hide');
        }
    }
</script>