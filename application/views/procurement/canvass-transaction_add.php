<!-- PAGE CONTENT -->
<div class="" role="main">

	<div class="row">
		
		<div class="col-md-12">
			<?php flashNotification();?>
            <div id="frm_ErrorNotice" class="alert alert-danger alert-dismissible hidden" role="alert" style="margin-top:10px;">
                Sample Alert Message!
            </div>

			<div class="x_panel tile">
				<div class="x_title">
					<h2>Canvass - Add Form</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
				   <div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<?php echo form_open('procurement/add/canvass', 'id="form_canvass"');?>
						<h4>CANVASS DETAILS</h4>

						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<label for="">Canvass No.:</label>
										<input type="text" class="form-control" id="textCanvassNo" name="textCanvassNo" placeholder="" readonly="" />
										
									</div>
								</div>
							</div>
						   

							<div class="col-md-2">
								<div class="form-group">
									<label for="inputTransactionDate">Canvass Date:</label>
									<div class="input-group date" id="calTransactionDate">
										<input type="text" class="form-control" name="textCanvassDate" value="<?php echo dateformat("today",0);?>" id="inputTransactionDate"/>
										<span class="input-group-addon">
										   <span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<label for="">Requisition No.:</label>
										<input type="text" class="form-control" id="textReqNo" name="textReqNo" value="" />
										<span class="input-group-btn" style="top:9px;">
											<button href="<?php echo BASE_URL;?>procurement/modal/requisition" label="Requisition" class="btn btn-default modal_btn" type="button"><i class="fa fa-chevron-right"></i></button>
										</span>
									</div>
								</div>
							</div>
							
							<div class="col-md-5">
								<div class="form-group">
									<label for="inputTransactionNum">Remarks:</label>
									<input type="text" class="form-control" id="inputTransactionNum" placeholder="" value="" />
									<input type="hidden" name="flg"  class="form-control" value="0" placeholder=""  />           
								</div>
							</div>

						</div>

						<hr />
						<h4>REQUISITION DETAILS</h4>
						<div id="req_item_cont"></div>

						<!-- <table id="tableAccounts2" class="table table-bordered table-striped table-hover bulk_action">       
							<thead>
								<tr>
									<th>Sn</th>
									<th>Item No.</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Unit</th>
								
									
									
									
							 </tr>
							</thead>
							<tbody id="tbodyWorkers">
							<tr>
							<td width="5%">1</td>
							<td width="10%">000001</td>
							<td width="40%">SAMPLE ONLY</td>
							<td width="10%"class="text-right">10</td>
							<td width="10%">PCS</td>
							
						
							</tr>
							</tbody>
						</table> -->
						 <hr />
						 <h4>CANVASS DETAILS</h4>
						

						<hr />
						  <table id="tableAccounts" class="table table-bordered table-striped table-hover bulk_action">       
					   <!-- <table id="tableMedicalInvoiceEntries" class="table table-bordered table-striped table-hover">-->
							<thead>
								<tr>
									<th>Sn</th>
									<th>Item No.</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Unit</th>
									<th>Unit Price</th>
									<th>Ext. Price</th>
									
									<th>Supplier</th>
								
									
									
									<th class="text-center" style="width:100px;">Action</th>
							 </tr>
							</thead>
							<tbody id="tbodyWorkers">
							<tr>
							<td width="3%">1</td>
							<td width="8%">000001</td>
							<td width="24%">SAMPLE ONLY</td>
							<td width="8%" class="text-right">10</td>
							<td width="8%" >PCS</td>
							
							<td width="10%" class="text-right">1,000.00</td>
							<td width="10%" class="text-right">10,000.00</td>
							
							<td width="22%">TOYOTA CORPORATION</td>
							
							<td width="10%" class="text-center">

<a href="#"  class="btn btn-sm btn-info btn-action" data-toggle="modal" data-target="#" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
<a href="#" class="btn btn-sm btn-danger btn-action" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
</td>
							
							</tr>
							</tbody>
						</table>

						<hr />

						<div class="row">

							<div class="col-md-2 col-sm-3">
								<a href="<?php echo BASE_URL;?>procurement/forms/canvass-transaction.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i>   Exit</a>
							</div>

							<div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-3">
								<!--<button class="btn btn-default btn-block"><i class="fa fa-close"></i> Clear</button>-->
							</div>

							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-save"></i> Save</button>
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