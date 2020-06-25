<form id="form_modal_item">
    <input type="hidden" id="htextFormID" value="">
    <div role="tabpanel" class="tab-pane active" id="">
            <div class="form-group">
                <table id="tableReq" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="15%">Username.</th>
                            <th width="15%">Name</th>
                            <th width="20%">Position</th>
                            <th width="50%">Status</th>
                        </tr>
                    </thead>
                    <?php if(isset($info) && count($info)>0):?>
                    <tbody>
                    	<?php foreach($info as $i):?>
	                        <tr>
	                            <td><a href="<?php echo BASE_URL;?>sysad/forms/user-manager.php?id=<?php echo $i['id']?>"><?php echo $i['username']?></a></td>
	                            <td><a href="<?php echo BASE_URL;?>sysad/forms/user-manager.php?id=<?php echo $i['id']?>"><?php echo $i['name']?></a></td>
	                            <td><?php echo $i['position']?></td>
	                            <td><?php echo ($i['is_active']=='Y')?"Active":"Inactive";?></td>
	                        </tr>
                    	<?php endforeach;?>
                    </tbody>
                	<?php endif;?>
                </table>
                
            </div>
        </div>
        
    
    
</form>
<script type="text/javascript">
    // $(document).ready(function() {
    //     //alert('<?php echo uri_string();?>');
    // });

    // function send_to_parent(this_value){
    //     if($('#htextFormID').val() == 'form_item'){
    //         window.location.replace(base_url_js+'warehouse/forms/item-manager.php?id='+this_value);
    //     }else{
    //         $('#textItemNo', '#form_req').val(this_value);
    //         $('#myModal').modal('hide');
    //     }
    // }
</script>