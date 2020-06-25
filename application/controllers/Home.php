<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
        $this->load->helper(array('form','url'));
    }

	public function index(){
		if(!isset($_SESSION['mcaes_user'])){
	        redirect('home/login', 'refresh');
	    }

		$data = array();
		$this->template->view('index', $data);
	}

	public function auth(){
		if(!isset($_POST['textUser']) || $_POST['textUser'] == ''){
			redirect('home/login', 'refresh');
		}

	    $status = "";
	    $msg = "";

	    /* check if username exist */
	    $data = getdata("select *
                        from tbl_user
                        where username = '{$_POST['textUser']}'");

	    if(count($data) > 0){
	        /* check if password is correct */
	        $chk_pass = getdata("select id, username, password, is_active, name, position, access
	                   from tbl_user
                        where username = '{$_POST['textUser']}'
                        and password = password('{$_POST['textPassword']}')");

	        if(count($chk_pass) > 0){
	            /* check if account is still active */
	            if($chk_pass[0]['is_active'] == 'N'){
    	            $status = "error";
    	            $msg = "User account is already inactive.";
    	            //create_log('user', '', $_POST['textUser'], 'login', 'inactive account');
    	        }else{
        	        $status = "";
        	        $msg = "Good";
        	        
        	        // if(in_array($chk_pass[0]['access'], array('admin','manager'))){
        	        //     $del_access = array(1,2,3,4,5,6,7,8,9,10);
        	        // }else{
        	        //     $del_access = array();
        	        // }
        	        
        	        /* create session */
        	        $_SESSION['mcaes_user'] = array('id' => $chk_pass[0]['id'],
        	                                       'username' => $chk_pass[0]['username'],
        	                                       'name' => $chk_pass[0]['name'],
        	                                       'position' => $chk_pass[0]['position'],
        	                                       'menu_access' => $chk_pass[0]['access'],
        	                                       //'delete_access' => $del_access,
        	        );
        	        
        	        /* get menu items */
        	        //$this->generate_menu();

        	        /* update timezone */
        	        //dbsetdata("SET time_zone = '+8:00'");
        	        
        	        dbsetdata("update tbl_user set last_login = NOW() where id = {$chk_pass[0]['id']}");
        	        //create_log('user', '', $_POST['textUser'], 'login', 'success');
    	        }
	        }else{
	            $status = "error";
	            $msg = "Wrong password.";
	            //create_log('user', '', $_POST['textUser'], 'login', 'wrong password');
	        }
	    }else{
	        $status = "error";
	        $msg = "User does not exist.";
	        //create_log('user', '', $_POST['textUser'], 'login', 'user not found');
	    }

	    if($status == 'error'){
			$this->session->set_flashdata('settings_notification_status', $status);
			$this->session->set_flashdata('settings_notification', $msg);
			redirect('home/login', 'refresh');
	    }else{
	    	redirect('home/index', 'refresh');
	    }
	}

	public function login(){
		if(isset($_SESSION['mcaes_user'])){
	        redirect('home/index', 'refresh');
	    }

		$this->load->view('login');	
	}

	public function logout(){
	    if(isset($_SESSION['mcaes_user'])){
	        //create_log('user', '', $_SESSION['rs_user']['username'], 'logout', '');
	        unset($_SESSION['mcaes_user']);
	    }

	    redirect('home/login', 'refresh');
	}
	
	// public function clear(){
	//     unset($_SESSION['rs_dashboard'], $_SESSION['settings']);
	//     redirect('home/dashboard', 'refresh');
	// }
	
	// public function generate_menu(){
	//     $user_id = $_SESSION['rs_user']['id'];

	//     $list = getdata("select * from settings_menu order by order_no asc");
	//     $my_menu = array();
	//     foreach ($list as $info){
	//         $access = explode(',',$info['user_id']);
	//         if(in_array($user_id, $access)){
	//             $my_menu[$info['level']][$info['parent_id']][$info['id']] = array('title'=>$info['title'], 'url'=>$info['url'], 'css_class'=>$info['css_class']);
	//         }
	//     }

	//     $_SESSION['rs_user']['menu'] = $my_menu;
	// }
}
