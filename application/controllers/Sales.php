<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form','url'));

		if(!isset($_SESSION['mcaes_user'])){
	        redirect('home/login', 'refresh');
	    }
	}

	public function forms($what){
		//$this->template->set('file_javascript', array('js/procurement.js',));
		$data = array();
		$id = (isset($_GET['id']))?$_GET['id']:0;

		switch($what){
			 case 'client-manager.php':
				// $data['info'] = get_current_record($id, 'tbl_user', 'id');

				// if(!$data['info']){
				// 	redirect('sysad/forms/user-manager_add.php', 'refresh');
				// }else{
				// 	/*MENU ITEMS*/
				// 	$menu_list = getdata("select * from tbl_menu where 1");
				// 	$menu = array();
				//     foreach($menu_list as $k => $v){
				//         $menu[$v['level']][$v['groupid']][$v['id']] = array('id' => $v['id'], 'title' => $v['title'], 'url' => $v['url'], 'fa_class' => $v['fa_class']);
				//     }

				//     $data['menu'] = $menu;
				// }
				break;
	    }

		$this->template->view('sales/'.$what, $data);
	}

	// public function add($what){
	// 	$this->load->model('sysad_model');
	//     $return_id = $this->sysad_model->add($what);

	//     switch($what){
	//     	case 'user':
	//     		$form_name = "user-manager.php?id=".$return_id;
	//     		break;
	//     }

	//     redirect('sysad/forms/'.$form_name, 'refresh');
	// }

	// public function ajax($action, $what, $id=NULL){
	// 	switch ($action) {
	// 		case 'delete':
	// 			$this->load->model('procurement_model');
	//     		$return_id = $this->procurement_model->delete($what, $id);
	// 			break;
			
	// 		case 'add':
	// 			$this->load->model('procurement_model');
	//     		$return_id = $this->procurement_model->add($what);
	// 			break;

	// 		case 'edit':
	// 			$this->load->model('procurement_model');
	//     		$return_id = $this->procurement_model->edit($what);
	// 			break;
	// 	}

	//     echo $return_id;
	// }

	// public function edit($what){
	// 	$this->load->model('sysad_model');
	//     $return_id = $this->sysad_model->edit($what);

	//     switch($what){
	//     	case 'user':
	//     		$form_name = "user-manager.php?id=".$return_id;
	//     		break;
	//     }

	//     redirect('sysad/forms/'.$form_name, 'refresh');
	// }

	//  GENERATE POPUP MODAL 
	// public function modal($what=NULL){
	// 	switch ($what) {
	// 		case 'user':
	// 			$data['info'] = getdata("select * from tbl_user where 1");
	// 			$formname = "user";
	// 			break;
			
	// 		default:
	// 			# code...
	// 			break;
	// 	}

	//     echo $this->load->view('modal/'.$formname, $data, TRUE);
	// }
}
