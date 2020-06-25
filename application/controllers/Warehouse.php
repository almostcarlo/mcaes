<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warehouse extends CI_Controller {

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
			case 'item-manager.php':
				$data['info'] = get_current_record($id, 'tbl_item', 'itemno');
				if(!$data['info']){
					redirect('warehouse/forms/item-manager_add.php', 'refresh');
				}
				break;
		}

		$this->template->view('warehouse/'.$what, $data);
	}

	public function add($what){
		$this->load->model('warehouse_model');
	    $return_id = $this->warehouse_model->add($what);

	    switch($what){
	    	case 'item':
	    		$form_name = "item-manager.php?id=".$return_id;
	    		break;
	    }

	    redirect('warehouse/forms/'.$form_name, 'refresh');
	}

	public function edit($what){
		$this->load->model('warehouse_model');
	    $return_id = $this->warehouse_model->edit($what);

	    switch($what){
	    	case 'item':
	    		$form_name = "item-manager.php?id=".$return_id;
	    		break;
	    }

	    redirect('warehouse/forms/'.$form_name, 'refresh');
	}

	/* GENERATE POPUP MODAL */
	public function modal($what=NULL){
		switch ($what) {
			case 'item':
				$data['info'] = getdata("select i.itemno, i.itemname, c.categoryname, i.itemtype
										from tbl_item i
										left join tbl_category c
										on i.category = c.categoryid
										where 1");
				$formname = "item";
				break;
		}

	    echo $this->load->view('modal/'.$formname, $data, TRUE);
	}
}
