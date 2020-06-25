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
	                            <td><a href="<?php echo BASE_URL;?>procurement/forms/requisition-transaction.php?id=<?php echo $i['reqno']?>"><?php echo $i['reqno']?></a></td>
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