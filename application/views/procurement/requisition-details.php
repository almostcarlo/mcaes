<?php if(is_array($info) && count($info) > 0):?>
	<?php foreach($info as $i):?>
		<ul class="nav nav-tabs">
		    <li class="active"><a role="tab" data-toggle="tab">Requisition Item #<?php echo $i['itemno'];?> - <?php echo $i['itemdesc'];?></a></li>
		</ul>

		<div class="tab-content">

		    <div role="tabpanel" class="tab-pane active" id="applicant-name">
		    	<div class="row">
			    	
		        	<div class="col-md-5">
		        		<small>
							<div class="form-group">
								<label for="inputTransactionNum">Requested Quantity:</label> <?php echo number_format($i['qty']);?> <?php echo $uom[$i['uom']];?>
							</div>
							<div class="form-group">
								<label for="inputTransactionNum">Ordered Quantity:</label> YYY
							</div>
							<div class="form-group">
								<label for="inputTransactionNum">Remaining Quantity:</label> ZZZ
							</div>
							<div class="form-group">
								<label for="inputTransactionNum">Price History:</label> AAA
							</div>
						</small>
					</div>
					<div class="col-md-7">
						<a href="javascript:void(0);" onclick="toggle_supplier_form('<?php echo $i['itemno'];?>');" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add Supplier</a>
					</div>
					
				</div>
		        <div class="form-group">
		        	<form method="post" id="form_supplier_<?php echo $i['itemno'];?>">
		        		<input type="hidden" class="" id="" name="htextItemNo" value="<?php echo $i['itemno'];?>" />
			        	<div id="cont_supplier_form_<?php echo $i['itemno'];?>" class="hidden">
				        	<hr>
				        	<div id="frm_ErrorNotice_<?php echo $i['itemno'];?>" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
				                Sample Alert Message!
				            </div>
							<div class="row">
			                    <div class="col-md-3">
			                        <div class="form-group">
			                            <div class="input-group">
			                                <label for="">Supplier:</label>
			                                <input type="hidden" class="" id="htextSupplierNo_<?php echo $i['itemno'];?>" name="htextSupplierNo_<?php echo $i['itemno'];?>" />
			                                <input type="text" class="form-control" id="textSupplierName_<?php echo $i['itemno'];?>" readonly value="" />
			                                <span class="input-group-btn" style="top:9px;">
			                                    <button href="<?php echo BASE_URL;?>procurement/modal/supplier" class="btn btn-default supplier_modal_btn" item_no="<?php echo $i['itemno'];?>" type="button"><i class="fa fa-chevron-right"></i></button>
			                                </span>
			                            </div>
			                        </div>
			                    </div>
			                     <div class="col-md-2">
			                        <div class="form-group">
			                            <label for="">Unit Price:</label>
			                            <input type="text" class="form-control" id="textPrice_<?php echo $i['itemno'];?>" name="textPrice_<?php echo $i['itemno'];?>" placeholder="" value="" />
			                            
			                        </div>
			                    </div>

			                    <div class="col-md-2">
			                        <div class="form-group" style="margin-top:17px;">
		                                <button class="btn btn-default btn-block" type="button" onClick="save_this('<?php echo $i['itemno'];?>');"><i class="fa fa-plus"></i> Add</button>
		                            </div>
			                    </div>
			                    <div class="col-md-2">
			                        <div class="form-group" style="margin-top:17px;">
			                        	<button class="btn btn-default btn-block" type="button" onClick="toggle_supplier_form('<?php echo $i['itemno'];?>');"><i class="fa fa-close"></i> Cancel</button>
			                        </div>
			                    </div>
			                </div>

			                <hr>
			            </div>
		        	</form>

		            <table id="" class="table table-bordered table-striped table-hover">
		                <thead>
		                    <tr>
		                        <th>Supplier Name.</th>
		                        <th>Brand Name</th>
		                        <th class="text-center">Credit Terms</th>
		                        <th class="text-center">Lead Time</th>
		                        <th class="text-right">Unit Price</th>
		                        <th class="text-center">Quantity</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	<?php if(array_key_exists($i['itemno'], $req_dtl)):?>
		                		<?php foreach($req_dtl[$i['itemno']] as $rd):?>
				                    <tr>
				                        <td><?php echo $supplier[$rd['supplierid']];?></td>
				                        <td>xxx</td>
				                        <td class="text-center">yyy</td>
				                        <td class="text-center">zzz</td>
				                        <td class="text-right"><?php echo $rd['unitprc'];?></td>
				                        <td class="text-center">aaa</td>
				                    </tr>
			                    <?php endforeach;?>
		                    <?php else:?>
		                    	<tr>
		                    		<td colspan="10">No record found.</td>
		                    	</tr>
		                	<?php endif;?>
		                </tbody>
		            </table>
		            
		        </div>
		    </div>
		</div>
		<hr>
	<?php endforeach;?>
<?php endif;?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.supplier_modal_btn').click(function(){
			var modal_label = 'Supplier';
			var parent_form_id = 'form_canvass';
			var parent_itemno = $(this).attr('item_no');

			$('.modal-body').load($(this).attr('href'), function(){
		        $('#myModal').modal({show:true});
		        $('#tableReq').DataTable();
		        $('#modal_title').html('Advance Search - '+modal_label);
		        $('#htextFormID').val(parent_form_id);
		        $('#htextItemNo').val(parent_itemno);
		    });
		});
	});

	// function save_this(itemno){
 //         $("#frm_ErrorNotice_"+itemno).addClass("hidden");

 //        if($('#htextSupplierNo_'+itemno).val() == ''){
 //            $('#frm_ErrorNotice_'+itemno).html('Please select supplier.');
 //            $('#frm_ErrorNotice_'+itemno).removeClass("hidden");
 //        }else if($('#textPrice_'+itemno).val() == ''){
 //            $('#frm_ErrorNotice_'+itemno).html('Unit Price is required.');
 //            $('#frm_ErrorNotice_'+itemno).removeClass("hidden");
 //            $('#textPrice_'+itemno).focus();
 //        }else{
 //             $.post(base_url_js+'procurement/ajax/add/supplier_temp/', $('#form_supplier_'+itemno).serialize(), function(data) {
 //             	if(data){
 //             		/*refresh ahax*/
 //             	}else{
 //             		$('#frm_ErrorNotice_'+itemno).html('unable to add supplier.');
 //                	$('#frm_ErrorNotice_'+itemno).removeClass("hidden");
 //             	}
 //             });
 //        }
 //    }

	function toggle_supplier_form(itemno){
		$('#htextSupplierNo_'+itemno).val('');
		$('#textSupplierName_'+itemno).val('');
		$('#textPrice_'+itemno).val('');

		if($('#cont_supplier_form_'+itemno).is(":visible")){
			$('#cont_supplier_form_'+itemno).addClass('hidden');
		}else{
			$('#cont_supplier_form_'+itemno).removeClass('hidden');
		}
	}
</script>