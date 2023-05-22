<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *
	 */

	public function __construct(){

		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->library('session');
	}

	function signin() {
	 
	
		$email = $this->input->post('username');
	  
	  //	die();
	  
		  if ($this->user_model->user_validate()) {
	  
			  $user = $this->user_model->get_user_details($email);
	  
			  $this->session->set_userdata($user);
	  
			  $this->session->set_userdata('is_logged_in', true);
			  
			   
			  redirect('user/index');
	  
	   
	  
		  }else{ 
		   $this->session->set_flashdata('incorrect',1);
		   //$incorrect=1;
		  redirect('user/login');
		  }
	  
	  }

	public function login()
	{
		
		$this->load->view('admin/login');
	}

	public function registration()
	{
		$this->load->view('admin/registration');
	}

	public function adddonor()
	{
		 $data = array(
			 'first_name'=>$this->input->post('fname'),
			 'username'=>$this->input->post('user'),
			 'email'=>$this->input->post('email'),
			 'category'=>'donor',
			 'phone_number'=>$this->input->post('phone'),
			 
			 'password'=>md5($this->input->post('pass'))
		 );
		 $table = 'donor';
		 $this->user_model->add($data,$table);
		 redirect('user/login');
	}
	public function addcode()
	{
		 $data = array(
			'payment_code'=>$this->input->post('code'),
			'donorid'=>$this->session->userdata('donorID'),
		 );
		 $table = 'donations';
		 $this->user_model->add($data,$table);
		 $this->user_model->confirmation();
		 redirect('user/success');
	}
	public function success()
	{
		$this->is_logged_in();
			$data['page'] = 'success';
			$data['title'] = 'index';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_elements()
	{
		$this->is_logged_in();
			$data['page'] = 'form_elements';
			$data['title'] = 'index';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_validation()
	{
		$this->is_logged_in();
			$data['page'] = 'form_validation';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function form_wizard()
	{
		$this->is_logged_in();
			$data['page'] = 'form_wizard';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_components()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_components';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_notifications()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_notifications';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_watu_wa_maana()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_watu_wa_maana';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_kenya_education_fund()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_kenya_education_fund';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_women_empowerment()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_women_empowerment';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_KSPCA()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_KSPCA';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_save_the_children()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_save_the_children';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function learn_more_hope_for_children()
	{
		$this->is_logged_in();
			$data['page'] = 'learn_more_hope_for_children';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_icons()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_icons';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_buttons()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_buttons';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_tabs_accordion()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_tabs_accordion';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function ui_list_groups()
	{
		$this->is_logged_in();
			$data['page'] = 'ui_list_groups';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function grid()
	{
		$this->is_logged_in();
			$data['page'] = 'grid';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function tables_basic()
	{
		$this->is_logged_in();
			$data['page'] = 'tables_basic';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function tables_dynamic()
	{
		$this->is_logged_in();
			$data['page'] = 'tables_dynamic';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function calendar()
	{
		$this->is_logged_in();
			$data['page'] = 'calendar';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function invoice()
	{
		$this->is_logged_in();
			$data['page'] = 'invoice';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function error()
	{
		$this->is_logged_in();
			$data['page'] = 'error';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function gallery()
	{
		$this->is_logged_in();
			$data['page'] = 'gallery';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function search()
	{
		$this->is_logged_in();
			$data['page'] = 'search';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function time_line()
	{
		$this->is_logged_in();
			$data['page'] = 'time_line';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function index()
	{
		$this->is_logged_in();
			$data['page'] = 'index';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function charts()
	{
		$this->is_logged_in();
			$data['page'] = 'charts';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	
	public function history()
	{
		$this->is_logged_in();
			$data['page'] = 'history';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function donate()
	{
		$this->is_logged_in();
			$data['page'] = 'donate';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function remove_user()
	{
		$this->is_logged_in();
			$data['page'] = 'remove_user';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function view_user()
	{
		$this->is_logged_in();
			$data['page'] = 'view_user';
			$data['title'] = 'Home';
			$data['user'] = $this->user_model->fetch_donors();
	
			 
			$this->load->view('admin/template', $data);
 
	}
	public function publishuser($uid,$val){
		$this->is_logged_in();
			$this->user_model->publishuser($uid,$val);
			redirect('user/view_user');
	}
	public function compose()
	{
		$this->is_logged_in();
			$data['page'] = 'compose';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function email()
	{
		$this->is_logged_in();
			$data['page'] = 'email';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function inbox()
	{
		$this->is_logged_in();
			$data['page'] = 'inbox';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function maps_google()
	{
		$this->is_logged_in();
			$data['page'] = 'maps_google';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function maps_vector()
	{
		$this->is_logged_in();
			$data['page'] = 'maps_vector';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}
	public function widgets()
	{
		$this->is_logged_in();
			$data['page'] = 'widgets';
			$data['title'] = 'Home';
			 
			$this->load->view('admin/template', $data);
 
	}

	function is_logged_in() {

        if (!$this->session->userdata('username')) {
			redirect('user/login');
        }

    }


    function logout() {

        $this->session->sess_destroy();

        //$incorrect=0;
		redirect('user/login');

    }
	public function home()
	{


		$this->is_logged_in();
		$usergrp= $this->session->userdata("usergroup");
		if($usergrp=='donor'){
			
			$data['page'] = 'index';
		}
		else{

			$data['page'] = 'index2';

		}
		
		$data['title'] = 'Home';
		
		 
		$this->load->view('admin/template', $data);
 
	}

	public function profile()
	{
		$this->is_logged_in();
			$data['page'] = 'profile';
			$data['title'] = 'Home';
			$data['userdets'] = $this->user_model->fetch_donor($this->session->userdata("donorid"));
			 
			$this->load->view('admin/template', $data);
 
	}
	
   
    function send(){
        /* Load PHPMailer library */
        $this->load->library('phpmailer');
       
        /* PHPMailer object */
        $mail = $this->phpmailer->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
	}
 

}
