<form id="form_modal_item">
    <input type="hidden" id="htextFormID" value="">
    <div role="tabpanel" class="tab-pane active" id="">
            <div class="form-group">
                <table id="tableReq" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="15%">Item No.</th>
                            <th width="15%">Name</th>
                            <th width="20%">Category</th>
                            <th width="50%">Type</th>
                        </tr>
                    </thead>
                    <?php if(isset($info) && count($info)>0):?>
                    <tbody>
                    	<?php foreach($info as $i):?>
	                        <tr>
	                            <td><a href="javascript:send_to_parent('<?php echo $i['itemno']?>', '<?php echo $i['itemname']?>');"><?php echo $i['itemno']?></a></td>
	                            <td><a href="javascript:send_to_parent('<?php echo $i['itemno']?>', '<?php echo $i['itemname']?>');"><?php echo $i['itemname']?></a></td>
	                            <td><?php echo $i['categoryname']?></td>
	                            <td><?php echo $i['itemtype']?></td>
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
        if($('#htextFormID').val() == 'form_item'){
            window.location.replace(base_url_js+'warehouse/forms/item-manager.php?id='+this_value);
        }else{
            $('#textItemNo', '#form_req').val(this_value);
            $('#textDesc', '#form_req').val(value_2);
            $('#myModal').modal('hide');
        }
    }
</script>