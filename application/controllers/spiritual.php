<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class spiritual extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
		$this->load->model('spiritual_model');
        $this->load->model('projects_model');
        $this->load->library('email');
    }

   
	
    public function register() {
        $data['title'] = 'Nata user registration';
        $data['keywords'] = '';
        $data['description'] = '';
        $this->load->view('spiritual-index', $data);
        $this->load->view("login/spiritual/registration_view.php", $data);
      //  $this->load->view('footer', $data);
    }
	public function register1() {
        $data['title'] = 'Nata user registration';
        $data['keywords'] = '';
        $data['description'] = '';
        
        $this->load->view('spiritual-index', $data);
        $this->load->view("login/spiritual/reg.php", $data);
      //  $this->load->view('footer', $data);
    }

    public function confirm() {
        $data['title'] = 'payment confirm';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['projects'] = $this->projects_model->get_projects();
        $data['title'] = 'Home';
        $this->load->view('spiritual-index', $data);
        $this->load->view("login/spiritual/confirm.php", $data);
      //  $this->load->view('footer', $data);
    }

   
    function forgot() {

        $data['title'] = 'Nata password ';
        if (isset($_POST['email'])) {
            $data['password'] = $this->user_model->get_password();
        }
        $this->load->view("login/forgot_password.php", $data);
    }

    

    public function registration() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('adult_attend', 'Number Of Adults Attending', 'trim|required|min_length[0]');
		$this->form_validation->set_rules('children_attend', 'No.of People Attending (Childrens) required.If <br>No children attending then mention - 0', 'trim|required|min_length[0]');
        $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('name_of_spouse','Spouse Name ','trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip', 'Zip code', 'trim|required');
        $this->form_validation->set_rules('homephone', 'Phone Number', 'trim|required');
		
        if ($this->form_validation->run() == FALSE) {
           $this->session->set_flashdata('message', 'Please fill all mandatory(*) fields.Password & Confirmation password should match.Click Again...!!!');
           $this->register1();
        } else {
            $res_add = $this->spiritual_model->add_session_user();    
            if ($res_add) {
               redirect('spiritual/confirm');
            }
        }
    }
	public function nata_registration() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('nata_user', 'User Name', 'trim|required|min_length[4]|xss_clean');
       // $this->form_validation->set_rules('nata_pass', 'Password', 'trim|required|min_length[4]|max_length[32]');
	    $this->form_validation->set_rules('nata_adult_attend', 'Number Of Adults Attending', 'trim|required|min_length[1]|less_than[10]');       
	    $this->form_validation->set_rules('nata_children_attend', 'Number Of Childrens Attending', 'trim|required|min_length[0]|less_than[10]');
        
        if ($this->form_validation->run() == FALSE) {
             $this->register();
        } else {
		    $email=$this->input->post('nata_user');
		//	$pass=$this->input->post('nata_pass');
            $res_add = $this->spiritual_model->login($email);
			
            if ($res_add) {
			
			$this->session->set_flashdata('message1', 'Form Submitted/Fetched Successfully.Now You Can Proceed Secured Payment' );
                redirect('spiritual/confirm');
            }
		  else {
		   $this->session->set_flashdata('message2', 'We are not found your Email ID in NATA database.Please contact NATA Administrator.Without Email ID we cant proceed you for further process  ');
		    redirect('spiritual/register');
		  }
      }
	}

    public function success() {
        $data['title'] = 'Nata Payment page';
        $data['keywords'] = '';
        $data['description'] = '';
        $paydone = $this->session->userdata('s_memship_amt');
        $usersess = $this->session->userdata('usersess');
		$user_level=$this->session->userdata('s_user_level');
        if(($user_level == 1) && ($usersess)){
    	
			$this->spiritual_model->add_user();
            $data['title'] = 'Payment Success';
            $data['projects'] = $this->projects_model->get_projects();
            $this->load->view('index', $data);
            $this->load->view("login/success", $data);
            $this->load->view('footer', $data);
            $email = $this->session->userdata('s_email');
            $paiduser = $this->session->userdata('s_username');
            $lname = $this->session->userdata('txtlname');
            $spouse = $this->session->userdata('s_name_of_spouse');
            $children1 = $this->session->userdata('s_children1');
            $age1 = $this->session->userdata('s_age1');
            $children2 = $this->session->userdata('s_children2');
            $age2 = $this->session->userdata('s_age2');
            $address1 = $this->session->userdata('s_address');
            $address2 = $this->session->userdata('s_aptno');
            $city = $this->session->userdata('s_city');
            $state = $this->session->userdata('s_state');
            $date = $this->session->userdata('s_dated');
            $zip = $this->session->userdata('s_zip');
            $homephone = $this->session->userdata('s_homephone');
            $cellphone = $this->session->userdata('s_cellphone');
            $solicited_by = $this->session->userdata('s_solicited_by');
            $total_amt = $this->session->userdata('s_memship_amt');
            $msg = "Dear $paiduser,
    Your request for srinivasa kalyana mahostavam has been successfully received. NATA team will process the arrangements and send you the confirmation letter
    For any questions, please email us at info@nataus.org
    Thank You,
    North American Telugu Association
    www.nataus.org";
            $this->email->from('admin@nataus.org');
            $this->email->to($email);
            $this->email->subject('Thank you for payment');
            $this->email->set_mailtype('html');
            $this->email->message($msg);
            $this->email->send();
            if ($email) {
                $msg = "Dear $paiduser<br>
Your request for srinivasa kalyana mahostavam has been successfully received. NATA team will process the arrangements and send you the confirmation letter
For any questions, please email us at info@nataus.org<br>
			Member Details:<br>
			Member Registration Date:$date<br> 
		    First Name: $paiduser<br>
			Last Name: $lname<br>
			Spouse Name: $spouse<br>
			Email:$email<br>
			Home Phone:$homephone<br>
			Children1: $children1<br>
			Children1 Age: $age1<br>
			Children2: $children2<br>
			Children2 Age: $age2<br>
			Address1: $address1<br>
			Address2: $address2<br>
			City: $city<br>
			State: $state<br>
			Zip: $zip<br>
			Cellphone: $cellphone<br>
			Solicited_by: $solicited_by<br>
			Total Amount: $total_amt<br><br>
Thank You,<br>
North American Telugu Association<br>
www.nataus.org";
                $this->email->from('admin@nataus.org');
                $this->email->to('membership@nataus.org');
                $this->email->subject('Membership Application Received');
                $this->email->set_mailtype('html');
                $this->email->message($msg);
                $this->email->send();
			}
		}	
			 
      else  if (($paydone) && ($usersess) && ($user_level==0)) {
            $this->user_model->add_user();
			$this->spiritual_model->add_user();
            $data['title'] = 'Payment Success';
            $data['projects'] = $this->projects_model->get_projects();
            $this->load->view('index', $data);
            $this->load->view("login/success", $data);
            $this->load->view('footer', $data);
            $email = $this->session->userdata('s_email');
            $paiduser = $this->session->userdata('s_username');
            $lname = $this->session->userdata('txtlname');
            $spouse = $this->session->userdata('s_name_of_spouse');
            $children1 = $this->session->userdata('s_children1');
            $age1 = $this->session->userdata('s_age1');
            $children2 = $this->session->userdata('s_children2');
            $age2 = $this->session->userdata('s_age2');
            $address1 = $this->session->userdata('s_address');
            $address2 = $this->session->userdata('s_aptno');
            $city = $this->session->userdata('s_city');
            $state = $this->session->userdata('s_state');
            $date = $this->session->userdata('s_dated');
            $zip = $this->session->userdata('s_zip');
            $homephone = $this->session->userdata('s_homephone');
            $cellphone = $this->session->userdata('s_cellphone');
            $solicited_by = $this->session->userdata('s_solicited_by');
            $total_amt = $this->session->userdata('s_memship_amt');
            $msg = "Dear $paiduser,
    Your membership application has been successfully received. NATA team will process the membership and send you the confirmation letter
    For any questions, please email us at info@nataus.org
    Thank You,
    North American Telugu Association
    www.nataus.org";
            $this->email->from('admin@nataus.org');
            $this->email->to($email);
            $this->email->subject('Thank you for payment');
            $this->email->set_mailtype('html');
            $this->email->message($msg);
            $this->email->send();
            if ($email) {
                $msg = "Dear $paiduser<br>
Your membership application has been successfully received. NATA team will process the membership and send you the confirmation letter
For any questions, please email us at info@nataus.org<br>
			Member Details:<br>
			Member Registration Date:$date<br> 
		    First Name: $paiduser<br>
			Last Name: $lname<br>
			Spouse Name: $spouse<br>
			Email:$email<br>
			Home Phone:$homephone<br>
			Children1: $children1<br>
			Children1 Age: $age1<br>
			Children2: $children2<br>
			Children2 Age: $age2<br>
			Address1: $address1<br>
			Address2: $address2<br>
			City: $city<br>
			State: $state<br>
			Zip: $zip<br>
			Cellphone: $cellphone<br>
			Solicited_by: $solicited_by<br>
			Total Amount: $total_amt<br><br>
Thank You,<br>
North American Telugu Association<br>
www.nataus.org";
                $this->email->from('admin@nataus.org');
                $this->email->to('membership@nataus.org');
                $this->email->subject('Membership Application Received');
                $this->email->set_mailtype('html');
                $this->email->message($msg);
                $this->email->send();
                //$this->email->print_debugger();
              }
        }
              }
    }