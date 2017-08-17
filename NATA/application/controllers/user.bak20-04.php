<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
                $this->load->model('projects_model');
                $this->load->library('email');
	}
	public function index()
	{	
            $data['title']= 'Nata admin page';
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
			$data['title']= 'Nata user registration';
                        $data['projects'] = $this->projects_model->get_projects();  
			$this->load->view('index',$data);
			$this->load->view("login/registration_view.php", $data);
			$this->load->view('footer',$data);
	}
        public function confirm()
        {               
                        $data['title']= 'payment confirm';
                        $data['projects'] = $this->projects_model->get_projects(); 
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
	{       $data['projects'] = $this->projects_model->get_projects(); 
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
                $data['title']= 'nata login';
                $data['projects'] = $this->projects_model->get_projects(); 
		$email=$this->input->post('email');
		$password=$this->input->post('pass');

		$result=$this->user_model->login($email,$password);
		if($result) 
		{
			redirect('user/welcome', 'refresh');
			//$this->welcome();
		}
		else    
		{
			redirect('user/index', 'refresh');
		}
	}
	public function thank()
	{          $data['projects'] = $this->projects_model->get_projects(); 
		$data['title']= 'Thank';
		$this->load->view('menu');
		$this->load->view('login/header_view',$data);
		$this->load->view('login/thank_view.php', $data);
		$this->load->view('login/footer_view',$data);
	}
        public function payment()
	{               $data['projects'] = $this->projects_model->get_projects(); 
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
	{       $data['projects'] = $this->projects_model->get_projects(); 
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
	{       $data['projects'] = $this->projects_model->get_projects(); 
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
	function adduser()
	{
		$this->user_model->add_user();
	}
        public function success()
	{
            $paydone=$this->session->userdata('s_total_amt');
            $donation=$this->session->userdata('d_amount');
                if($paydone)
                {
                    $this->user_model->add_user();
                    $data['title']= 'Payment Success';
                    $data['projects'] = $this->projects_model->get_projects();  
                    $this->load->view('index',$data);
                    $this->load->view("login/success", $data);
                    $this->load->view('footer',$data);
                    $email = $this->session->userdata('s_email');
                    $paiduser=$this->session->userdata('s_username');
            $msg = "Dear $paiduser,
Your membership application has been successfully received. NATA team will process the membership and send you the confirmation letter
For any questions, please email us at info@nataus.org
Thank You,
NATA";
           $this->email->from('membership@nataus.org');
            $this->email->to($email);
            $this->email->subject('Thank you for payment');
            $this->email->set_mailtype('html');
            
            $this->email->message($msg);
            $this->email->send();
            //$this->email->print_debugger();
            if($email)
			{
				$msg = "Dear $paiduser,
Your membership application has been successfully received. NATA team will process the membership and send you the confirmation letter
For any questions, please email us at membership@nataus.org
Thank You,
NATA";
			$this->email->from('admin@nataus.org');
            $this->email->to('membership@nataus.org');
			//$this->email->cc('nagenderinfogen@gmail.com'); 
            $this->email->subject('Membership Application Received');
            $this->email->set_mailtype('html');
            $this->email->message($msg);
            $this->email->send();
			//$this->email->print_debugger();
			}
               }
                elseif($donation)
                {
                    //$this->user_model->add_user();
                    $data['title']= 'Donation payment success';
                    $data['projects'] = $this->projects_model->get_projects();  
                    $this->load->view('index',$data);
                    $this->load->view("donation/success", $data);
                    $this->load->view('footer',$data);
                    $email = $this->session->userdata('d_email');
                    $paiduser=$this->session->userdata('d_fname');
            $msg = "Dear $paiduser,
Your Donation has been successfully received. For any questions, please email us at membership@nataus.org
Thank You,
NATA";
           $this->email->from('membership@nataus.org');
            $this->email->to($email);
            $this->email->subject('Thank you for donation');
            $this->email->set_mailtype('html');
           $this->email->message($msg);
            $this->email->send();
			if($email)
			{
				$msg = "Dear $paiduser,
Your membership application has been successfully received. NATA team will process the membership and send you the confirmation letter
For any questions, please email us at membership@nataus.org
Thank You,
NATA";
			$this->email->from('admin@nataus.org');
            $this->email->to('membership@nataus.org');
			$this->email->cc('nagenderinfogen@gmail.com'); 
            $this->email->subject('Donation Received');
            $this->email->set_mailtype('html');
            $this->email->message($msg);
            $this->email->send();
			//$this->email->print_debugger();
			}
                }
                else
               {
                    $data['title']= 'payment fail';
                    $data['projects'] = $this->projects_model->get_projects();  
                    $this->load->view('index',$data);
                    $this->load->view("login/payfail", $data);
                    $this->load->view('footer',$data);
                 }     
			
	}
}