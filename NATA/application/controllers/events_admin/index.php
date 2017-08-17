<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('events_admin/index_model','admin');
		
       }
			function index() {	
			$data['events'] = $this->admin->get_events();
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/index',$data);
			$this->load->view('events_admin/events/footer',$data);
        	}
			function events() {	
			$data['events'] = $this->admin->get_events();
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/index',$data);
			$this->load->view('events_admin/events/footer',$data);
        	}
			function getLocations()
			{
			$data['locations'] = $this->admin->getLocations();
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/locations',$data);
			$this->load->view('events_admin/events/footer',$data);
        	}
			function editLocations($id)
			{
			$data['locations'] = $this->admin->get_loc($id);
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/editlocations',$data);
			$this->load->view('events_admin/events/footer',$data);
        	}
			function updateLocation()
			{
				if($_POST['location'])
				{
				$id = $this->input->post('location_id');
				$this->admin->updateLoc($id);
				}
				redirect('events_admin/index/getLocations','refresh');
			}
			function DelLocations($id)
			{
				$this->admin->delLoc($id);
				redirect('events_admin/index/getLocations','refresh');
			}
			function add_event() {
			$data['locations'] = $this->admin->getLocations();
            $this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/add_event',$data);
			$this->load->view('events_admin/events/footer',$data);
        	}
			function add_location() {
				$data['title']='add loc';
				$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/add_location');
			$this->load->view('events_admin/events/footer',$data);
        	}
			function insertevent()
			{
			$res = $this->admin->insert_event();
			if(!empty($_POST['datetimepicker']))
			{
			foreach($_POST['datetimepicker'] as $dt)
			{
			$date = new DateTime($dt);
			$dt=$date->format('Y-m-d H:i:s');
			$this->admin->insertdatetime($dt,$res);
			}
			}
			if ($res) {
            $this->session->set_flashdata('success_msg', 'Event Added successfully');
			}
			redirect('events_admin/index','refresh');
			}
			function updateEvent()
			{
				$res = $this->admin->update_events();
				if ($res) {
				$this->session->set_flashdata('success_msg', 'Data updated successfully');
			}
				redirect('events_admin/index','refresh');
			}
	 function insertlocation()
	 {
		 $res = $this->admin->insert_location();
	 if ($res) {
            $this->session->set_flashdata('success_msg', 'Location Added successfully');
        }
	 redirect('events_admin/index/getLocations','refresh');
	 }
	 function get_event($id)
	 {
		$id = substr("$id", 5);
		$data['events'] = $this->admin->get_event($id);
		$this->load->view('events_admin/events/view_event',$data);
	 }
	 function updateUsers()
	 {
		$id = $this->input->post('m_users_id');
		$res = $this->admin->update_users($id);
		if ($res) {
		$this->session->set_flashdata('success_msg', 'Data updated successfully');
		}
	 redirect('events_admin/index/users','refresh');
		}
	 function edit($id)
	 {
		$id = substr("$id", 5);
		$data['locations'] = $this->admin->getLocations();
		$data['editdata'] = $this->admin->edit_event($id);
		
		$this->load->view('events_admin/events/header',$data);
		$this->load->view('events_admin/events/edit_event',$data);
		$this->load->view('events_admin/events/footer',$data);
	 }
	 function editEventTimings($id)
	 {
		$data['eventtimings'] = $this->admin->get_eventtimings($id); 
		$this->load->view('events_admin/events/header',$data);
		$this->load->view('events_admin/events/edittimings',$data);
		$this->load->view('events_admin/events/footer',$data);
	 }
	 function updatestatus()
	 {
	 $this->admin->update_status();
	}
	function show_bookings()
	{
		if($this->session->userdata("event_name"))
		{
			$events_id = $this->session->userdata("event_name");
		}
		else
		{
			$events_id = $_POST['event_name'];
			$this->session->set_userdata("event_name",$events_id);
			$events_id = $this->session->userdata("event_name");
		}
		//$events_id = $_POST['event_name'];
			$data['bookings'] = $this->admin->show_bookings($events_id);
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/showbookings',$data);
			$this->load->view('events_admin/events/footer',$data);
	}
        function deleteBooking($id)
        {
            
		 $data['events'] = $this->admin->deleteBookings($id);
                if ($data['events'] == 0) {
             redirect('events_admin/index', 'refresh');
        }
        }
                function nataidol_report()
	{
			$data['bookings'] = $this->admin->show_bookings(16);
			$this->load->view('events_admin/events/reports_head',$data);
			$this->load->view('events_admin/events/idol_report',$data);
			$this->load->view('events_admin/events/footer',$data);
	}
	 
	 function delete($id)
	 {
		 $id = substr("$id", 5);
		 $data['events'] = $this->admin->delete_event($id);
        if ($data['events'] == 0) {
             redirect('events_admin/index', 'refresh');
        }
	 }
	  function deleteUsers($id)
	 {
		 $id = substr("$id", 5);
		 $data['users'] = $this->admin->delete_users($id);
        if ($data['users'] == 0) {
             redirect('events_admin/index/users', 'refresh');
        }
	 }
	 function users()
	 {
			$data['users'] = $this->admin->get_users();
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/users',$data);
			$this->load->view('events_admin/events/footer',$data);
	 }
	  function editUsers($id)
	 {
			$data['users'] = $this->admin->edit_users($id);
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/editusers',$data);
			$this->load->view('events_admin/events/footer',$data);
	 }
	 function bookings()
	 {		if($this->session->userdata("event_name"))
			{
		 $this->session->unset_userdata('event_name');
			}
			$data['users'] = $this->admin->get_bookinghistory();
			$data['events'] = $this->admin->get_events();
			$this->load->view('events_admin/events/header',$data);
			$this->load->view('events_admin/events/bookings',$data);
			$this->load->view('events_admin/events/footer',$data);
	 }
	 
}
