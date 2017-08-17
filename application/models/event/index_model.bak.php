<?php 
class Index_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
        function get_events() {
        $query = $this->db->query("SELECT * FROM m_events a, m_event_date b WHERE a.m_events_id=b.m_events_id GROUP BY a.m_events_id ORDER By b.m_event_datetime");
        return $query->result_array();
		}
		function get_lastdates() {
        $query = $this->db->query("SELECT * FROM `m_event_date` ORDER BY `m_event_date`.`m_events_id` ASC");
        return $query->result_array();
    }
	function get_event($id) {
        $query = $this->db->query("SELECT * FROM `m_events` where m_events_id='$id'");
        return $query->result_array();
    }
	function get_eventtimings($id) {
        $query = $this->db->query("SELECT * FROM m_events a, m_event_date b WHERE a.m_events_id=b.m_events_id AND a.m_events_id='$id' ORDER By b.m_event_datetime");
        return $query->result_array();
    }
	function getLocations()
	{
		$query = $this->db->query("SELECT * FROM `m_locations` ORDER BY m_locations_name ASC");
        return $query->result_array();
	}
	/*
	function add_booking($id)
	{
	    $data['m_bookings_id'] = '';
        $data['m_users_id'] = '';
		$data['m_events_id'] = $this->input->post('m_events_id');
		$data['m_bookings_datetime'] = $this->input->post('m_event_datetime');
		$data['m_event_date_id'] = $this->input->post('m_event_date_id');
		$data['m_users_number_of_tickets'] = $this->input->post('number_of_tickets');
		$data['status'] = 1;
        $this->db->insert('m_bookings', $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
    }
	*/
	function addBooking($user_id)
	{
		$data['m_bookings_id'] = '';
        $data['m_users_id'] = $user_id;
		$data['m_events_id'] = $this->session->userdata('m_events_id');
		$data['m_bookings_datetime'] = $this->session->userdata('m_event_datetime');
		$data['m_event_date_id'] = $this->session->userdata('m_event_date_id');
		
		$data['m_users_number_of_tickets'] = $this->session->userdata('number_of_tickets');
		$data['booking_status'] = 0;
        $this->db->insert('m_bookings', $data);
	}
	function getUserTicket($id)
	{
		 $query = $this->db->query("SELECT m_users.*,m_events.m_events_venue FROM `m_users` LEFT JOIN m_events ON m_events.m_events_id=m_users.m_events_id where m_users.m_users_id='$id'");
        return $query->result_array();
	}
	function add_user()
	{
		date_default_timezone_set('America/New_York');
		$fullname = $this->session->userdata('fname')." ".$this->session->userdata('lname');
	    $data['m_users_id'] = '';
        $data['m_users_name'] = $fullname;
		$data['m_users_email'] = $this->session->userdata('email');
		$data['m_users_phone'] = $this->session->userdata('phoneNumber');
		$data['m_users_register_date'] = date('Y-m-d H:i:s');
		$data['m_events_id'] = $this->session->userdata('m_events_id');
		$data['m_users_num_of_tickets'] = $this->session->userdata('number_of_tickets');
		$data['childtickets'] = $this->session->userdata('childtickets');
		$data['child_ticket_cost'] = $this->session->userdata('child_ticket_cost');
		$data['booking_id'] = time();
		$data['event_name'] = $this->session->userdata('m_events_name');
		$data['event_time'] = $this->session->userdata('date_of_event');
		$data['ticket_cost'] = $this->session->userdata('m_events_cost');
		$data['referredby'] = $this->session->userdata('referredby');
		$data['age'] = $this->session->userdata('age');
		$data['link'] = $this->session->userdata('link');
		$data['city'] = $this->session->userdata('city');
        $this->db->insert('m_users', $data);
		$booking_id = $data['booking_id'];
		$this->session->set_userdata("BookingID",$booking_id);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
    }
    
}