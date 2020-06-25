<!-- PAGE CONTENT -->
                <div class="" role="main">

                    <!-- INSURANCE REQUEST ENTRIES - ADD FORMS -->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="x_panel tile">
                                <div class="x_title">
                                    <h2>Receiving - Edit Form</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <a href=""  class="btn btn-success pull-right"><i class="fa fa-print"></i> Print</a>
                                    <a href="receiving-transaction_add.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add New</a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    
                                    <form action="" method="post">
                                        <input type="hidden" id="workers" name="workers" value="">
                                        <h4>RECEIVING DETAILS</h4>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label for="inputWorkersName">Receipt No.:</label>
                                                        <input type="text" class="form-control" id="inputWorkersName" placeholder="" readonly value="" />
                                                        <span class="input-group-btn" style="top:9px;">
                                                            <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalApplicantSearch"><i class="fa fa-chevron-right"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                           

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="inputTransactionDate">Receipt Date:</label>
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
                                                    <label for="inputTransactionNum">PO Number:</label>
                                                    <input type="text" class="form-control" id="inputTransactionNum" placeholder="" value="" />
                                                    <input type="hidden" name="flg"  class="form-control" value="0" placeholder=""  />           
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="inputTransactionNum">DR No./Invoice:</label>
                                                    <input type="text" class="form-control" id="inputTransactionNum" placeholder="" value="" />
                                                    <input type="hidden" name="flg"  class="form-control" value="0" placeholder=""  />           
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="selectClinic">Supplier:</label>
                                                        <select class="form-control" id="selectClinic" name="clinid">
                                                            
                                                         
                                                        </select>
                                                    </div>
                                                </div>

                                        </div>

                                        <hr />
                                        
                                        <div class="row">
                                                
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <label for="inputWorkersName">Item No.:</label>
                                                        <input type="text" class="form-control" id="inputWorkersName" placeholder="" readonly value="" />
                                                        <span class="input-group-btn" style="top:9px;">
                                                            <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalApplicantSearch"><i class="fa fa-chevron-right"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="selectContractPeriod">Description:</label>
                                                    <input type="text" class="form-control text-right" id="inputContract" readonly placeholder="" value="" />
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="selectContractPeriod">Quantity:</label>
                                                    <input type="text" class="form-control text-right" id="inputContract" placeholder="" value="" />
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="selectClinic">Unit:</label>
                                                        <select class="form-control" id="selectClinic" name="clinid">
                                                            
                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="selectContractPeriod">Unit Price:</label>
                                                    <input type="text" class="form-control text-right" id="inputContract" placeholder="" value="" />
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group" style="margin-top:17px;">
                                                    <button class="btn btn-default btn-block" type="button" onClick="addWorker()"><i class="fa fa-plus"></i> Add</a>
                                                </div>
                                            </div>
                                            
                                        </div>

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
                                                    <th>Ext Price</th>
                                                    
                                                    
                                                    <th class="text-center" style="width:100px;">Action</th>
                                             </tr>
                                            </thead>
                                            <tbody id="tbodyWorkers">
                                            <tr>
                                            <td width="5%">1</td>
                                            <td width="12%">000001</td>
                                            <td width="35%">SAMPLE ONLY</td>
                                            <td width="10%" class="text-right">10</td>
                                            <td width="8%">PCS</td>
                                            <td width="10%" class="text-right">150.00</td>
                                            <td width="10%" class="text-right">1,500.00</td>
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
                                                <a href="insurance-request-entries.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i>   Exit</a>
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