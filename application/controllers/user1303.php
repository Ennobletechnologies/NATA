<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
                $this->load->model('projects_model');
	}
	public function index()
	{	
		$data['userdata'] = $this->session->all_userdata();
		if(($this->session->userdata('user_name')!=""))
		{
		$user_level=$this->session->userdata("user_level");
		if($user_level=='1')
		{	$this->load->view('admin/home',$data);
			//$this->load->view('footer');
		}
		if($user_level=='2')
		{
		$this->load->view('admin/regions');
		$this->load->view('footer');
		}
		if($user_level=='3')
		{
		 $user_id=$this->session->userdata('user_id');
		 $data['profile']=$this->user_model->profile($user_id);
		 $this->load->view('admin/members-dashboard/index',$data);
		}
		}
		else{
			$data['title']= 'Nata Login ';
			$this->load->view("login/login_view.php", $data);
			}
	}
	function region_name()
	{
	$user_id=$this->session->userdata('user_id');
	$data['reg_name']=$this->user_model->check_reg($user_id);
	$this->load->view('admin/reg_name',$data);
	}
	public function register()
	{
			$data['title'] = 'Nata User Registration Form'; 
                        $data['projects'] = $this->projects_model->get_projects();  
			$this->load->view('index',$data);
			$this->load->view("login/registration_view.php", $data);
			$this->load->view('footer',$data);
	}
        public function confirm()
	{
			$data['title']= 'Home';
			$this->load->view('index',$data);
			$this->load->view("login/confirm.php", $data);
			$this->load->view('footer',$data);
        }
	public function createAdmin()
	{
			$data['title']= 'Create Admin';
			$this->load->view('menu');
			$this->load->view('login/header_view',$data);
			$this->load->view("admin/addUser", $data);
			$this->load->view('footer',$data);
	}
	public function welcome()
	{
		$data['userdata'] = $this->session->all_userdata();
		$data['title']= 'Welcome';
		$user_level=$this->session->userdata("user_level");
		if($user_level=='1')
		{	$this->load->view('admin/home',$data);
			//$this->load->view('footer');
		}
		if($user_level=='2')
		{
		$this->load->view('admin/regions',$data);
		$this->load->view('footer');
		}
		if($user_level=='3')
		{
		redirect('admin/dashboard');
		}
	}
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	public function thank()
	{	
		$data['title']= 'Thank';
		$this->load->view('menu');
		$this->load->view('login/header_view',$data);
		$this->load->view('login/thank_view.php', $data);
		$this->load->view('login/footer_view',$data);
	}
        public function payment()
	{	
                        $data['title']= 'payment';
			//$this->load->view('index',$data);
			$this->load->view('login/payment', $data);
			//$this->load->view('footer',$data);
	}
	public function admin_success()
	{	
		$data['title']= 'Admin user added';
		$this->load->view('menu');
		$this->load->view('login/header_view',$data);
		$this->load->view('admin/Success.php', $data);
		$this->load->view('footer',$data);
	}
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('state', 'State', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip code', 'trim|required');
		$this->form_validation->set_rules('cellphone', 'Cellphone', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->register();
		}
		else
		{
			$res_add=$this->user_model->add_session_user();
                        if($res_add)
                        {
                            redirect('user/confirm');
                        }
		}
	}
	//Admin user adding
	public function addAdmin()
	{	
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{
			$this->createAdmin();
		}
		else
		{
			$this->user_model->add_user();
			$this->admin_success();
		}
	}
	//
	public function logout()
	{
		$newdata = array(
		'user_id'   =>"",
		'user_name'  =>"",
		'user_email'     =>"",
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
}