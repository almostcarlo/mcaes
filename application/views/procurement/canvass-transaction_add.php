
<!-- PAGE CONTENT -->

	<!-- INSURANCE REQUEST ENTRIES - ADD FORMS -->
	<div class="row">
		
		<div class="col-md-12">
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
					
					<form action="" method="post">
						<input type="hidden" id="workers" name="workers" value="">
						<h4>CANVASS DETAILS</h4>

						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<label for="inputWorkersName">Canvass No.:</label>
										<input type="text" class="form-control" id="inputWorkersName" placeholder="" readonly value="" />
										
									</div>
								</div>
							</div>
						   

							<div class="col-md-2">
								<div class="form-group">
									<label for="inputTransactionDate">Canvass Date:</label>
									<div class="input-group date" id="calTransactionDate">
										<input type="text" class="form-control" name="trndt" value="<?=date("m.d.Y H:i:s") ?>" id="inputTransactionDate"/>
										<span class="input-group-addon">
										   <span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<label for="inputWorkersName">Requisition No.:</label>
										<input type="text" class="form-control" id="inputWorkersName" placeholder=""  value="" />
										<span class="input-group-btn" style="top:9px;">
											<button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalApplicantSearch"><i class="fa fa-chevron-right"></i></button>
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
						<ul class="nav nav-tabs">
	                        <li class="active"><a role="tab" data-toggle="tab">Requisition Item #999 - description here</a></li>
	                    </ul>
						<div class="tab-content">
                        
	                        <div role="tabpanel" class="tab-pane active" id="applicant-name">
	                        	<small>
		                        	<div class="col-md-5">
										<div class="form-group">
											<label for="inputTransactionNum">Requested Quantity:</label> XXX
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
									</div>
								</small>
	                            <div class="form-group">

	                                <table id="tableApplicantName" class="table table-bordered table-striped table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>Supplier Name.</th>
	                                            <th>Brand Name</th>
	                                            <th>Credit Terms</th>
	                                            <th>Lead Time</th>
	                                            <th>Unit Price</th>
	                                            <th>Quantity</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>item here</td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                
	                            </div>
	                        </div>
	                    </div>

	                    <br>

	                    <ul class="nav nav-tabs">
	                        <li class="active"><a role="tab" data-toggle="tab">Requisition Item #000 - description here</a></li>
	                    </ul>
						<div class="tab-content">
                        
	                        <div role="tabpanel" class="tab-pane active" id="applicant-name">
	                        	<small>
		                        	<div class="col-md-5 text-sm">
										<div class="form-group">
											<label for="inputTransactionNum">Requested Quantity:</label> XXX
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
									</div>
								</small>
	                            <div class="form-group">

	                                <table id="tableApplicantName" class="table table-bordered table-striped table-hover">
	                                    <thead>
	                                        <tr>
	                                            <th>Supplier Name.</th>
	                                            <th>Brand Name</th>
	                                            <th>Credit Terms</th>
	                                            <th>Lead Time</th>
	                                            <th>Unit Price</th>
	                                            <th>Quantity</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                            <td>item here</td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                            <td></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                                
	                            </div>
	                        </div>
	                    </div>

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








