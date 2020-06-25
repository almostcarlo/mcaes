<?php if(is_array($info) && count($info) > 0):?>
	<?php foreach($info as $i):?>
		<ul class="nav nav-tabs">
		    <li class="active"><a role="tab" data-toggle="tab">Requisition Item #<?php echo $i['itemno'];?> - <?php echo $i['itemdesc'];?></a></li>
		</ul>

		<div class="tab-content">

		    <div role="tabpanel" class="tab-pane active" id="applicant-name">
		    	<small>
		        	<div class="col-md-5">
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
		<hr>
	<?php endforeach;?>
<?php endif;?>