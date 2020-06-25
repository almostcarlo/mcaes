<?php
class Warehouse_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();

            /* update timezone */
            dbsetdata("SET time_zone = '+8:00'");
        }

        public function add($what){
            $this->db->trans_start();
            $return_value = "";

            switch($what){
                case 'item':
                	$max_item = $this->db->count_all_results('tbl_item');
                    $itemno = date("y").str_pad(($max_item+1),10,0,STR_PAD_LEFT);
                    $this->db->set('itemno', $itemno);
                    $this->db->set('itemname', $_POST['textName']);
                    $this->db->set('category', $_POST['selectCat']);
                    $this->db->set('stock_uom', $_POST['selectUnit']);
                    $this->db->set('reorder', $_POST['textReorder']);
                    $this->db->set('minstock', $_POST['textMinStock']);
                    $this->db->set('locn', $_POST['selectLoc']);
                    $this->db->set('createdby', $_SESSION['mcaes_user']['username']);
                    $this->db->set('createddt', 'NOW()', FALSE);
                    $this->db->insert('tbl_item');

                    $desc = "New item has been created.";
                    $return_value = $itemno;
                break;

            //     case 'req_item':
            //         ($this->input->post('textItemNo'))?$this->db->set('itemno', $this->input->post('textItemNo')):$this->db->set('itemno', '0');
            //         $this->db->set('reqno', $_POST['textReqNo']);
            //         $this->db->set('itemdesc', $_POST['textDesc']);
            //         $this->db->set('qty', $_POST['textQty']);
            //         $this->db->set('uom', $_POST['selectUnit']);
            //         $this->db->insert('tbl_requestdtl');

            //         $desc = "";
            //         $return_value = $_POST['textReqNo'];
            //     break;

            // case 'supplier':
            //         $this->db->set('suppliername', $_POST['textName']);
            //         $this->db->set('address', $_POST['textAddress']);
            //         $this->db->set('contactperson', $_POST['textContact']);
            //         $this->db->set('phoneno', $_POST['textTel']);
            //         $this->db->set('faxno', $_POST['textFaxno']);
            //         $this->db->set('email', $_POST['textEmail']);
            //         $this->db->set('tin', $_POST['textTin']);
            //         $this->db->set('terms', $_POST['selectTerms']);
            //         $this->db->set('createdby', $_SESSION['mcaes_user']['username']);
            //         $this->db->set('createddt', 'NOW()', FALSE);
            //         $this->db->insert('tbl_supplier');

            //         $desc = "New supplier has been created.";
            //         $return_value = $this->db->insert_id();
            //     break;
            }

            if($this->db->trans_complete()){
                $this->session->set_flashdata('settings_notification', $desc);
                $this->session->set_flashdata('settings_notification_status', 'Success');
            }else{
                $this->session->set_flashdata('settings_notification', 'Unable to create record.');
                $this->session->set_flashdata('settings_notification_status', 'Error');

                $return_value = "";
            }

            return $return_value;
        }

        public function edit($what){
            $this->db->trans_start();
            $return_value = "";
            $id = "";

            switch ($what) {
                case 'item':
                    $this->db->set('itemname', $_POST['textName']);
                    $this->db->set('category', $_POST['selectCat']);
                    $this->db->set('stock_uom', $_POST['selectUnit']);
                    $this->db->set('reorder', $_POST['textReorder']);
                    $this->db->set('minstock', $_POST['textMinStock']);
                    $this->db->set('locn', $_POST['selectLoc']);
                    $this->db->set('revisedby', $_SESSION['mcaes_user']['username']);
                    $this->db->set('reviseddt', 'NOW()', FALSE);
                    $this->db->where('itemno', $_POST['textItemNo']);
                    $this->db->update('tbl_item');
                    $desc = "Item has been updated.";
                    $id = $_POST['textItemNo'];
                    break;
                // case 'req_item':
                //     $this->db->set('itemdesc', $_POST['textDesc']);
                //     $this->db->set('qty', $_POST['textQty']);
                //     $this->db->set('uom', $_POST['selectUnit']);
                //     $this->db->where('ln', $_POST['hTextLn']);
                //     $this->db->update('tbl_requestdtl');
                //     $desc = "";
                //     break;

                // case 'supplier':
                //     $this->db->set('suppliername', $_POST['textName']);
                //     $this->db->set('address', $_POST['textAddress']);
                //     $this->db->set('contactperson', $_POST['textContact']);
                //     $this->db->set('phoneno', $_POST['textTel']);
                //     $this->db->set('faxno', $_POST['textFaxno']);
                //     $this->db->set('email', $_POST['textEmail']);
                //     $this->db->set('tin', $_POST['textTin']);
                //     $this->db->set('terms', $_POST['selectTerms']);
                //     $this->db->set('revisedby', $_SESSION['mcaes_user']['username']);
                //     $this->db->set('reviseddt', 'NOW()', FALSE);
                //     $this->db->where('supplierno', $_POST['hTextSupplierNo']);
                //     $this->db->update('tbl_supplier');
                //     $desc = "Supplier details has been updated.";
                //     $id = $_POST['hTextSupplierNo'];
                //     break;
                
                default:
                    # code...
                    break;
            }

            if($this->db->trans_complete()){
                $this->session->set_flashdata('settings_notification', $desc);
                $this->session->set_flashdata('settings_notification_status', 'Success');

                switch ($what) {
                    case 'item':
                        $return_value = $id;
                        break;
                    
                    default:
                        $return_value = TRUE;
                        break;
                }
            }else{
                $this->session->set_flashdata('settings_notification', 'Unable to update record.');
                $this->session->set_flashdata('settings_notification_status', 'Error');

                $return_value = "";
            }

            //return $this->db->insert_id();
            return $return_value;
        }
        
        public function save($what){
            $this->db->trans_start();
            
            switch($what){
                case 'visa':
                    $this->db->set('visa_no', $_POST['textVISANo']);
                    $this->db->set('sponsor_no', $_POST['textSponsorNo']);
                    $this->db->set('principal_id', $_POST['SelectPrincipal']);
                    $this->db->set('visa_date', dateformat($_POST['textVISADate'],0));
                    if($_POST['textArabDateYY']!='')$this->db->set('visa_date_arabic', $_POST['textArabDateYY']."-".$_POST['SelectArabDateMM']."-".$_POST['textArabDateDD']);
                    $this->db->set('expiry_date', dateformat($_POST['textExpDate'],0));
                    $this->db->set('closing_date', dateformat($_POST['textCloseDate'],0));
                    $this->db->set('remarks', $_POST['textRemarks']);
                    
                    $table_name = "manager_visa";
                    $desc = "VISA";
                    break;
                    
                case 'visa_pos':
                    $this->db->set('visa_id', $_POST['textVisaId']);
                    $this->db->set('position', strtoupper($_POST['textPos']));
                    $this->db->set('gender', $_POST['selectGender']);
                    $this->db->set('quantity', $_POST['textQty']);
                    $this->db->set('remarks', $_POST['textRemarks']);

                    $table_name = "manager_visa_pos";
                    $desc = "VISA Position";
                    break;
                    
                case 'poea':
                    $this->db->set('principal_id', $_POST['SelectPrincipal']);
                    $this->db->set('accre_no', $_POST['textAccreNo']);
                    $this->db->set('issue_date', dateformat($_POST['textIssueDate'],0));
                    $this->db->set('expiry_date', dateformat($_POST['textExpDate'],0));
                    $this->db->set('remarks', $_POST['textRemarks']);
                    
                    $table_name = "manager_poea";
                    $desc = "POEA Job Order";
                    break;
                    
                case 'poea_jo':
                    $this->db->set('poea_id', $_POST['textPOEAId']);
                    $this->db->set('jo_id', $_POST['textJOID']);
                    $this->db->set('jo_ref', $_POST['textJORef']);
                    $this->db->set('submit_date', dateformat($_POST['textSubmitDate'],0));
                    $this->db->set('approved_date', dateformat($_POST['textAppDate'],0));
                    
                    $table_name = "manager_poea_jo";
                    $desc = "POEA Job Order";
                    break;
                    
                case 'jo_pos':
                    $this->db->set('jo_id', $_POST['textJOId']);
                    $this->db->set('position', strtoupper($_POST['textPos']));
                    $this->db->set('gender', $_POST['SelectGender']);
                    $this->db->set('quantity', $_POST['textQty']);
                    $this->db->set('employment_status', $_POST['SelectEmpStatus']);
                    $this->db->set('contract_period', $_POST['SelectContractPeriod']);
                    $this->db->set('hrs_work', $_POST['textHrsWork']);
                    $this->db->set('salary_currency', $_POST['SelectSalCurr']);
                    $this->db->set('salary_per', $_POST['SelectSalPer']);
                    $this->db->set('salary_amount', $_POST['textSalAmt']);
                    $this->db->set('accomodation', $_POST['textAccom']);
                    $this->db->set('transportation', $_POST['textTransport']);
                    $this->db->set('food', $_POST['textFood']);
                    $this->db->set('overtime', $_POST['textOT']);
                    $this->db->set('leave_provision', $_POST['textLeavePr']);
                    $this->db->set('leave_ent', $_POST['textLeaveEnt']);
                    $this->db->set('ticket_ent', $_POST['textTicket']);
                    $this->db->set('insurance', $_POST['textInsurance']);
                    $this->db->set('gratuity', $_POST['textGratuity']);
                    $this->db->set('bonus', $_POST['textBonus']);
                    $this->db->set('special_condition', $_POST['textSpCondition']);
					$this->db->set('remarks', $_POST['textRemarks']);
                    
                    $table_name = "manager_jo_pos";
                    $desc = "Job Order Category";
                    break;

                case 'lpt':
                case 'pta':
                    $this->db->set('principal_id', $_POST['SelectPrincipal']);
                    $this->db->set('company_id', $_POST['SelectCompany']);
                    $this->db->set('order_date', dateformat($_POST['textOrderDate'],0));
                    $this->db->set('confirmed_date', dateformat($_POST['textConfirmedDate'],0));
                    $this->db->set('ticket_no', $_POST['textTicketNo']);
                    $this->db->set('travel_agent_id', $_POST['SelectTrAgent']);
                    $this->db->set('route1', $_POST['textRoute1']);
                    $this->db->set('flight_date1', dateformat($_POST['textFDate1'],0));
                    $this->db->set('airline1', $_POST['SelectAirline1']);
                    $this->db->set('flight_no1', $_POST['textFlightNo1']);
                    $this->db->set('route2', $_POST['textRoute2']);
                    $this->db->set('flight_date2', dateformat($_POST['textFDate2'],0));
                    $this->db->set('airline2', $_POST['SelectAirline2']);
                    $this->db->set('flight_no2', $_POST['textFlightNo2']);
                    $this->db->set('route3', $_POST['textRoute3']);
                    $this->db->set('flight_date3', dateformat($_POST['textFDate3'],0));
                    $this->db->set('airline3', $_POST['SelectAirline3']);
                    $this->db->set('flight_no3', $_POST['textFlightNo3']);
                    $this->db->set('route4', $_POST['textRoute4']);
                    $this->db->set('flight_date4', dateformat($_POST['textFDate4'],0));
                    $this->db->set('airline4', $_POST['SelectAirline4']);
                    $this->db->set('flight_no4', $_POST['textFlightNo4']);
                    $this->db->set('signatory', $_POST['textSignatory']);
                    $this->db->set('sig_pos', $_POST['textSigPos']);
                    $this->db->set('noted_by', $_POST['textNotedBy']);
                    $this->db->set('not_pos', $_POST['textNotePos']);
                    $this->db->set('checked_by', $_POST['textCheckedBy']);
                    $this->db->set('chk_pos', $_POST['textChkPos']);
                    $this->db->set('remarks', $_POST['textRemarks']);
                    $table_name = "manager_".$what."_hdr";
                    $desc = strtoupper($what)." Manager";
                    break;

                case 'transmittal':
                    $this->db->set('visa_id', $_POST['textVisaId']);
                    $this->db->set('transmittal_no', $_POST['textTransNo']);
                    $this->db->set('transmittal_date', dateformat($_POST['textTransDate'],0));
                    $table_name = "manager_visa_transmittal";
                    $desc = "VISA Transmittal";
                    break;

                case 'trans_alloc':
                    $this->db->set('transmittal_no', $_POST['textTransNo']);
                    if(isset($_POST['ecode_'.$_POST['textRecordId']])) $this->db->set('transmittal_ecode', $_POST['ecode_'.$_POST['textRecordId']]);
                    $this->db->set('transmittal_submit_date', dateformat($_POST['textTransSubmit'],0));
                    $table_name = "applicant_processing";
                    $desc = "Transmittal Allocation";
                    break;

                case 'update_trans_alloc':
                    $this->db->set('transmittal_submit_date', dateformat($_POST['textTransSubmit'],0));
                    $this->db->set('transmittal_release_date', dateformat($_POST['textTransRel'],0));
                    $this->db->set('transmittal_ecode', $_POST['textEcode']);
                    $this->db->set('transmittal_auth', $_POST['textAuth']);
                    $table_name = "applicant_processing";
                    $desc = "Transmittal Allocation";
                    break;

                case 'booking_req':
                    $this->db->set('request_no', $_POST['textReqNo']);
                    $this->db->set('type', $_POST['textType']);
                    $this->db->set('principal_id', $_POST['selectPrincipal']);
                    $this->db->set('company_id', $_POST['selectCompany']);
                    $this->db->set('request_by', $_POST['textReqBy']);
                    $this->db->set('request_date', dateformat($_POST['textReqDate'],0));
                    $this->db->set('pr_book_date', dateformat($_POST['textPrDate'],0));

                    if($_POST['textType'] == 'LPT'){
                        $this->db->set('airline_id', $_POST['selectAirline']);
                        $this->db->set('route', $_POST['textRoute']);
                        $this->db->set('submit_date', dateformat($_POST['textSubDate'],0));
                    }else{
                        $this->db->set('to', $_POST['textTo']);
                        $this->db->set('subject', $_POST['textSubject']);
                        $this->db->set('message', $_POST['textMessage']);
                    }

                    $table_name = "manager_booking";
                    $desc = $_POST['textType']." Request";
                    break;
            }

            if($_POST['textRecordId'] != '' && $_POST['textRecordId'] > 0){
                $this->db->set('edit_by', $_SESSION['rs_user']['username']);
                $this->db->set('edit_date', 'NOW()', FALSE);
                $this->db->where('id', $_POST['textRecordId']);
                $this->db->update($table_name);

                $action = $table_name." - edit";
                $id = $_POST['textRecordId'];
            }else{
                /*CODE HERE*/
                if($what == 'lpt' || $what == 'pta'){
                    $max = getMaxCount($table_name);
                    $lptpta_code = strtoupper($what).str_pad(($max+1), 4, 0, STR_PAD_LEFT);
                    $this->db->set('code', $lptpta_code);
                }

                $this->db->set('add_by', $_SESSION['rs_user']['username']);
                $this->db->set('add_date', 'NOW()', FALSE);
                $this->db->insert($table_name);

                $action = $table_name." - add";
                $id = $this->db->insert_id();
            }

            if($this->db->trans_complete()){
                create_log('user', '', $_SESSION['rs_user']['username'], $action, 'id#:'.$id);
                $this->session->set_flashdata('settings_notification', $desc.' has been updated');
                $this->session->set_flashdata('settings_notification_status', 'Success');
            }else{
                $this->session->set_flashdata('settings_notification', 'Unable to create record.');
                $this->session->set_flashdata('settings_notification_status', 'Error');
            }

            if($what == 'visa_pos' || $what == 'transmittal'){
                return $_POST['textVisaId'];
            }else if($what == 'poea_jo'){
                return $_POST['textPOEAId'];
            }else if($what == 'jo_pos'){
				return $_POST['textJOId'];
			}else{
                return $id;
            }
        }

        public function delete($what, $id){
            $this->db->trans_start();

            switch ($what) {
                case 'req_item':
                    $tbl = "tbl_requestdtl";
                    $where_field = "ln";
                    $notification = "item";
                    break;
                
                default:
                    # code...
                    break;
            }

            $this->db->where($where_field, $id);
            $this->db->delete($tbl);

            if($this->db->trans_complete()){
                //create_log('user', '', $_SESSION['rs_user']['username'], $log_info, $log_remarks);
                $this->session->set_flashdata('settings_notification', $notification.' successfully deleted.');
                $this->session->set_flashdata('settings_notification_status', 'Success');

                $return_value = TRUE;
            }else{
                $this->session->set_flashdata('settings_notification', 'Unable to delete record.');
                $this->session->set_flashdata('settings_notification_status', 'Error');

                $return_value = "";                
            }

            return $return_value;
        }
}