<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form','url'));

		if(!isset($_SESSION['mcaes_user'])){
	        redirect('home/login', 'refresh');
	    }
	}

	public function forms($what){
		$this->template->set('file_javascript', array('js/procurement.js',));
		$data = array();
		$id = (isset($_GET['id']))?$_GET['id']:0;

		switch($what){
	    	case 'requisition-transaction.php':
	    		/*GET HEADER*/
	    		$data['info'] = get_current_record($id, 'tbl_requesthd', 'reqno');

	    		if(!$data['info']){
					redirect('procurement/forms/requisition-transaction_add.php', 'refresh');
				}else{
					/*GET DETAILS*/
					$data['info_dtl'] = getdata("select * from tbl_requestdtl where reqno = '{$data['info']['reqno']}'");
					$data['uom'] = get_items_from_cache("unit");

					/*POPULATE EDIT ITEM FORM*/
					if(isset($_GET['ln']) && $_GET['ln']<>''){
						$data['edit_item'] = get_current_record($_GET['ln'], 'tbl_requestdtl', 'ln');
					}
				}

	    		break;
			case 'supplier-manager.php':
				$data['info'] = get_current_record($id, 'tbl_supplier', 'supplierno');
				if(!$data['info']){
					redirect('procurement/forms/supplier-manager_add.php', 'refresh');
				}
				break;

			 case 'canvass-transaction.php':
				$data['info'] = get_current_record($id, 'tbl_canvasshd', 'canvassno');
				if(!$data['info']){
					redirect('procurement/forms/canvass-transaction_add.php', 'refresh');
				}
				break;
	    }

		$this->template->view('procurement/'.$what, $data);
	}

	public function add($what){
		$this->load->model('procurement_model');
	    $return_id = $this->procurement_model->add($what);

	    switch($what){
	    	case 'requisition':
	    		$form_name = "requisition-transaction.php?id=".$return_id;
	    		break;
    		case 'supplier':
	    		$form_name = "supplier-manager.php?id=".$return_id;
	    		break;
	    }

	    redirect('procurement/forms/'.$form_name, 'refresh');
	}

	// public function ajax_add($what){
	// 	$this->load->model('procurement_model');
	//     $return_id = $this->procurement_model->add($what);

	//     echo $return_id;
	// }

	public function ajax($action, $what, $id=NULL){
		switch ($action) {
			case 'delete':
				$this->load->model('procurement_model');
	    		$return_id = $this->procurement_model->delete($what, $id);
				break;
			
			case 'add':
				$this->load->model('procurement_model');
	    		$return_id = $this->procurement_model->add($what);
				break;

			case 'edit':
				$this->load->model('procurement_model');
	    		$return_id = $this->procurement_model->edit($what);
				break;
		}

	    echo $return_id;
	}

	public function edit($what){
		$this->load->model('procurement_model');
	    $return_id = $this->procurement_model->edit($what);

	    switch($what){
	    	case 'requisition':
	    		$form_name = "requisition-transaction.php?id=".$return_id;
	    		break;

	    	case 'supplier':
	    		$form_name = "supplier-manager.php?id=".$return_id;
	    		break;
	    }

	    redirect('procurement/forms/'.$form_name, 'refresh');
	}

	/* GENERATE POPUP MODAL */
	public function modal($what=NULL){
		switch ($what) {
			case 'requisition':
				$data['info'] = getdata("select reqno, reqdt, reqdept, remarks from tbl_requesthd where 1");
				$data['department'] = get_items_from_cache("department");
				$formname = "requisition";
				break;

			case 'item':
				$data['info'] = getdata("select i.itemno, i.itemname, c.categoryname, i.itemtype
										from tbl_item i
										left join tbl_category c
										on i.category = c.categoryid
										where 1");
				$formname = "item";
				break;

			case 'supplier':
				$data['info'] = getdata("select supplierno, suppliername, contactperson, email from tbl_supplier where 1 order by suppliername asc");
				$formname = "supplier";
				break;
			
			default:
				# code...
				break;
		}
	    // get_items_from_cache('active_principal');
	    // get_items_from_cache('company');

	    // if($id){
	    //     $data['info'] = getdata("select j.*, m.code as mr_ref
     //                                from manager_jobs j
     //                                left join manager_mr m
     //                                on j.mr_id = m.id
     //                                where j.id = {$id}");
	    // }else{
	    //     $data = "";
	    // }
	    
	    // if(MR_REQUIRED){
	    //     $formname = "form_jo";
	    // }else{
	    //     $formname = "form_jo_custom";
	    // }
	    echo $this->load->view('modal/'.$formname, $data, TRUE);
	}
}
