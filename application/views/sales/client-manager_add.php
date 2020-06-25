

                <!-- PAGE CONTENT -->
                <div class="right_col" role="main">

                    <!-- AGENT MANAGER - ADD FORM -->
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="x_panel tile">
                                <div class="x_title">
                                    <h2>Client - Add Form</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
									
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    
                                    <h4>CLIENT DETAILS:</h4>
                                    
                                    <br>
                                    
                                    <form  method="post" id="form-agent-add">
                                                
                                        <div class="row">
											<div class="col-md-5">
                                               
                                                <div class="form-group">
                                                   <label for="inputAgentCode">Client Name:</label>
                                                    <input type="text" required name="Cname" id="inputCname"  class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                            </div>
                                            
                                      </div>  
										<div class="row">									  
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                   <label for="inputAgentCode">Address:</label>
                                                    <input type="text" required name="Address" id="inputAddress"  class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="textLastName">Tel Nos.:</label>
                                                    <input type="text" required name="Telno" class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="textFirstName">Fax Nos.:</label>
                                                    <input type="text" required name="Faxno" class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inputEmail">Email:</label>
                                                    <input type="email" name="Email" class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
											  
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="textMiddleName">Tin No.:</label>
                                                    <input type="text" name="Tin" class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="selectCurrency">Terms:<span class="required"> *</span></label>
                                                    <select name="selectTerms" required class="form-control" placeholder="" value="">
                                                        <option value=""></option>
														  <option></option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
											
										 </div>	
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="textSubAgent">Contact Person:</label>
                                                    <input type="text" name="Contact" class="form-control" placeholder="" value="" />
                                                </div>
                                            </div>
                                          
                                            
                                            
                                            
                                            <div class="col-md-2" style="margin-top:20px;">
                                                <div class="form-group">
                                                    <label class="normal-label"><input type="checkbox" name="Act" id="checkInactive" value="inactive" class="flat" /> Inactive</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                                
                                      
                                        
                                        <hr />
                                        
                                        <div class="row">

                                            <div class="col-md-2 col-sm-3">
                                                <a href="agent-manager.php" class="btn btn-default btn-block"><i class="fa fa-chevron-left"></i> Exit</a>
                                            </div>

                                            <div class="col-md-2 col-md-offset-6 col-sm-3 col-sm-offset-3">
                                                <!--<button class="btn btn-default btn-block"><i class="fa fa-close"></i> Clear</button>-->
                                            </div>

                                            <div class="col-md-2 col-sm-3">
                                                <button class="btn btn-primary btn-block" onclick="myconfirm('form-agent-add');" type="submit"><i class="fa fa-save"></i> Save</button>
                                            </div>

                                        </div>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <!-- END of AGENT MANAGER - ADD FORM -->
                    
                    


                </div>
                <!-- END of PAGE CONTENT -->

     
