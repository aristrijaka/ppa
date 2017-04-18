<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('form_validation');        
	}
	
	function index(){
		if($this->session->userdata('login') == TRUE){
			redirect('register/data');
		}else{
			$data = array(
				'konten' => 'login',
	    	);
			$this->load->view('site', $data);
		}
                
	}

	function auth()
	{
		if($_POST){
			$this->form_validation->set_rules('username','Username'.'required|trim|xss_clean');
			$this->form_validation->set_rules('password','Password'.'required|trim|xss_clean');
			
			
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			
			$auth		= $this->db->query("select * from admin where username='$username' && `password`=sha1('$password')")->result_array();
			if($auth != NULL)
			{
				$data = array(
					'kdadmin'		=> $auth[0]['kdadmin'],
					'nama'			=> $auth[0]['nama'],
					
				);
				$this->session->set_userdata('login',$data);
				redirect('register/data');
			}
			else 
			{
				$data = array(
					'konten' => 'login',
				);
				$this->session->set_flashdata('message', 'Login Unsuccessfull');
				$this->load->view('site',$data);
			}
			
		}
		else 
		{
			echo "Page not found";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$data = array(
					'konten' => 'login',
				);
		$this->session->set_flashdata('message', 'Logout Successfully');
		$this->load->view('site',$data);
	}
}