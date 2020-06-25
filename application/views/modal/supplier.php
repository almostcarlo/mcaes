<form id="form_modal_supplier">
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
	                            <td><a href="<?php echo BASE_URL;?>procurement/forms/supplier-manager.php?id=<?php echo $i['supplierno']?>"><?php echo $i['supplierno']?></a></td>
	                            <td><a href="<?php echo BASE_URL;?>procurement/forms/supplier-manager.php?id=<?php echo $i['supplierno']?>"><?php echo $i['suppliername'];?></a></td>
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