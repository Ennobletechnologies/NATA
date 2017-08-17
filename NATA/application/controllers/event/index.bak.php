<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('event/Index_model','index');
		$this->load->model('projects_model');
		//$this->load->model('events_admin/index_model','admin');
        }

    function index() {
        $data['title'] = 'Events Booking'; 
        $data['events'] = $this->index->get_events();
		$data['projects'] = $this->projects_model->get_projects();
		$this->load->view('home_index', $data);
        $this->load->view('event/index', $data);
		$this->load->view('home_footer', $data);
    }
	function get_event($id)
	 {
		 $data['title'] = 'Events Booking';
		$id = substr("$id", 5);
		$data['projects'] = $this->projects_model->get_projects();
		$data['events'] = $this->index->get_event($id);
		$data['eventtimings'] = $this->index->get_eventtimings($id);
		$this->load->view('home_index', $data);
		$this->load->view('event/view_event',$data);
		$this->load->view('home_footer', $data);
	 }
	 function addUser()
	 {
	$data['title']="Confirm Details";
	$date1 = $this->input->post('date_of_event');
	$evntdate = date('Y-m-d',strtotime($date1));
            $sesdata = array(
                    'm_events_id' => $this->input->post('m_events_id'),
                    'fname'  => $this->input->post('fname'),
            	    'lname'=> $this->input->post('lname'),
					'email'  => $this->input->post('email'),
            	    'phoneNumber'=> $this->input->post('phoneNumber'),
                    'm_events_cost'  => $this->input->post('m_events_cost'),
			'child_ticket_cost'  => $this->input->post('child_ticket_cost'),
			'childtickets'  => $this->input->post('childtickets'),
					'm_event_date_id' => $this->input->post('m_event_date_id'),
                    'number_of_tickets' => $this->input->post('number_of_tickets'),
                    'm_events_name' => $this->input->post('m_events_name'),
                    'm_event_datetime' => $this->input->post('m_event_datetime'),
					'age' => $this->input->post('age'),
					'link' => $this->input->post('link'),
					'city' => $this->input->post('city'),
					'date_of_event' => $evntdate,
                   );
	       	$this->session->set_userdata($sesdata);
			$data['projects'] = $this->projects_model->get_projects();
			$this->load->view('event_header', $data);
		$this->load->view('event/confirm',$data);
		$this->load->view('event_footer', $data);
        }
		function success()
		{
			//echo $_POST['x_response_code'];
		$data['title']="Get your tickets !";
		$sesemail = $this->session->userdata('email');
		if(!empty($sesemail))
		{

			$data['last_id'] = $this->index->add_user();
			$user_id = $data['last_id'];
			$this->index->addBooking($user_id);	
			
		}
	$to = $this->session->userdata('email');
	$this->load->library('email');
    $data['title']='Nata Co Email';
    $this->email->from('admin@nataus.org', 'Events Admin');
    $this->email->to($to); 
    $this->email->subject("Event Ticket confirmation");
    $this->email->set_mailtype("html");
	$seg=$this->session->userdata("seg_value");
	if(!$seg==21)
	{
    $msg = $this->load->view('event/success_normal',$data,TRUE);
	}
	else
	{
		$msg = $this->load->view('event/success_21',$data,TRUE);
	}
    $this->email->message($msg);
    $sent = $this->email->send();
	if($sent)
	{
	$to1 = $this->session->userdata('copy_email');
	$this->email->to($to1); 
    $this->email->subject("Event Ticket confirmation copy");
	$msg_copy = $this->load->view('event/success_21',$data,TRUE);
    $this->email->set_mailtype("html");
	$this->email->message($msg_copy);
    $sent = $this->email->send();	
	}
	$this->load->view('event/success',$data);
}
function getticket($id)
{
	$data['title']="Get your tickets !";
	$data['tickets'] = $this->index->getUserTicket($id);
	$data['projects'] = $this->projects_model->get_projects();
	$this->load->view('event/gettickets',$data);
}
	 function booktickets($id)
	 {
	$id = substr("$id", 5);
	$data['title'] = 'Contact Details';
	//$res = $this->index->add_booking($id);
	$data['projects'] = $this->projects_model->get_projects();
	$data['locations'] = $this->index->getLocations();
		$this->load->view('event_header', $data);
	$this->load->view('event/booktickets',$data);
		$this->load->view('event_footer', $data);
	 }
}