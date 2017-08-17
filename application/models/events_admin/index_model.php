<?php

class Index_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_events() {
        $query = $this->db->query("SELECT * FROM `m_events` ORDER BY m_events_id  DESC");
        return $query->result_array();
    }
	function insert_event()
	{
		$config['upload_path'] = 'public/uploads/admin_events/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '900000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/uploads/admin_events/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 315;
        $config['height'] = 200;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        if (!empty($fname)) {
            $data['m_events_pic'] = $fname;
        }
        $data['m_events_id'] = '';
        $data['m_events_name'] = $this->input->post('eventname');
        $data['m_events_datetime'] = $_POST['datetimepicker']['0'];
        $data['m_events_venue'] = $this->input->post('venue');
        $data['m_events_info'] = $this->input->post('eventinfo');
        $data['number_of_tickets'] = $this->input->post('tickets');
		$data['m_events_cost'] = $this->input->post('price');
		$data['child_ticket_cost'] = $this->input->post('childprice');
		$data['m_events_loc'] = $this->input->post('location');
		$data['m_events_artists'] = $this->input->post('artistsinfo');
        $this->db->insert('m_events', $data);
        $insert_id = $this->db->insert_id();
   return  $insert_id;
	}
	function get_eventtimings($id) {
        $query = $this->db->query("SELECT * FROM m_events a, m_event_date b WHERE a.m_events_id=b.m_events_id AND a.m_events_id='$id' ORDER By b.m_event_datetime");
        return $query->result_array();
    }
	function update_status()
	{
		$id= $_POST['id'];
		$data1['booking_status'] = $_POST['status'];
		$this->db->update('m_bookings', $data1, array('m_bookings_id'=>$id));
		return true;
		}
		
		function show_bookings($events_id)
		{
	//$events_id = $_POST['event_name'];
	$mainsql = "SELECT * FROM `m_bookings` LEFT JOIN m_users ON m_bookings.m_users_id=m_users.m_users_id LEFT JOIN m_events ON m_events.m_events_id=m_bookings.m_events_id LEFT JOIN m_event_date ON m_event_date.m_events_id=m_bookings.m_events_id WHERE m_bookings.m_events_id='$events_id' GROUP BY m_bookings_id";
		$query = $this->db->query($mainsql);
        return $query->result_array();
		}
	function update_events()
	{
		$id = $this->input->post('m_events_id');
        $this->load->database();
        $name = $_FILES['picture']['name'];
        if ($name != "") {
            $sql = "select * from `m_events` where `m_events_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/uploads/admin_events/".$row['m_events_pic'];
            $path1 = "public/uploads/admin_events/thumb/".$row['m_events_pic'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/uploads/admin_events/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('picture');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/uploads/admin_events/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 315;
            $config['height'] = 200;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $filename = $file_data['file_name'];
            $data['m_events_pic'] = $filename;
        }
        $data['m_events_name'] = $this->input->post('eventname');
        $data['m_events_venue'] = $this->input->post('venue');
		$data['m_events_info'] = $this->input->post('eventinfo');
		$data['m_events_cost'] = $this->input->post('price');
		$data['child_ticket_cost'] = $this->input->post('childprice');
		$data['number_of_tickets'] = $this->input->post('number_of_tickets');
		$data['m_events_loc'] = $this->input->post('location');
		$data['m_events_artists'] = $this->input->post('artistsinfo');
       $this->db->update('m_events', $data, array('m_events_id' => $id));
	
	}
        function deleteBookings($id) {
        $sql = "DELETE FROM m_bookings, m_users 
        USING m_bookings, m_users 
        WHERE m_bookings.m_users_id = m_users.m_users_id  AND 
      m_bookings.m_bookings_id = '$id'";

        $query = $this->db->query($sql);
        return 0;
    }

    function updateLoc($id)
	{
		$data['m_locations_name'] = $this->input->post('location');
		$data['location_email'] = $this->input->post('location_email');
	   $this->db->update('m_locations', $data, array('m_locations_id' => $id));
	}
	function update_users($id)
	{
		$data['m_users_name'] = $this->input->post('m_users_name');
		$data['m_users_email'] = $this->input->post('m_users_email');
		$data['m_users_phone'] = $this->input->post('m_users_phone');
	   $this->db->update('m_users', $data, array('m_users_id' => $id));
	}
	function insertdatetime($dt,$res)
	{
		//echo $dt=date("y-m-d H:i:s", strtotime($dt));
		
		$data['m_event_date_id'] = '';
        $data['m_event_datetime'] = $dt;
		$data['m_events_id'] = $res;
		$data['status'] = 1;
        $this->db->insert('m_event_date', $data);
    }
	
	function insert_location()
	{
	    $data['m_locations_id'] = '';
        $data['m_locations_name'] = $this->input->post('location');
		$data['location_email'] = $this->input->post('location_email');
        $this->db->insert('m_locations', $data);
        return true;
	}
	function delLoc($id)
	{
		$this->db->select();
		$this->db->from('m_locations');
		$this->db->where('m_locations_id',$id);
		$query=$this->db->delete();
		return 0;
	}
	function delete_users($id)
	{
		$this->db->select();
		$this->db->from('m_users');
		$this->db->where('m_users_id',$id);
		$query = $this->db->delete();
		return 0;
	}
	function get_users()
	{
		$query = $this->db->query("SELECT * FROM `m_users` ORDER BY m_users_id DESC");
        return $query->result_array();
	}
	function getLocations()
	{
		$query = $this->db->query("SELECT * FROM `m_locations` ORDER BY m_locations_name ASC");
        return $query->result_array();
	}
	function get_bookinghistory()
	{
		$query = $this->db->query("SELECT * FROM `m_locations` ORDER BY m_locations_name ASC");
        return $query->result_array();
	}
	function edit_users($id)
	{
		$query = $this->db->query("SELECT * FROM `m_users` WHERE m_users_id='$id'");
        return $query->result_array();
	}
	function get_event($id) {
        $query = $this->db->query("SELECT * FROM `m_events` where m_events_id='$id'");
        return $query->result_array();
    }
	function get_loc($id) {
    $query = $this->db->query("SELECT * FROM `m_locations` where m_locations_id='$id'");
        return $query->result_array();
    }
	function delete_event($id)
	{
		$sql="select * from `m_events` where `m_events_id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="public/uploads/admin_events/".$row['m_events_pic'];
		$path1="public/uploads/admin_events/thumb/".$row['m_events_pic'];
		@unlink($path);
		@unlink($path1);
		$this->db->select();
		$this->db->from('m_events');
		$this->db->where('m_events_id',$id);
		$query=$this->db->delete();
		return 0;
	}
	function edit_event($id)
	{
		$query = $this->db->query("SELECT * FROM `m_events` where m_events_id='$id'");
        return $query->result_array();
	}
}