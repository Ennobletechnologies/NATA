<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Evencal Model for Multiple Events Calendar
 *
 * Author       : Moch Zawaruddin Abdullah
 * Date Created : 25 May 2013
 * Version      : 1.0
 * Website		: zawaruddin.blogspot.com
 *
 */
 
class Evencal_model extends CI_Model {
	
	// for get all event date in one month
	function getDateEvent($year, $month){
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month" : "$year-$month";
		$query = $this->db->select('event_date, total_events')->from('events')->like('event_date', $year, 'after')->get();
		if($query->num_rows() > 0){
			$data = array();
			foreach($query->result_array() as $row){
				$data[(int) end(explode('-',$row['event_date']))] = $row['total_events'];
			}
			return $data;
		}else{
			return false;
		}
	}
	
	// get event detail for selected date
	function getEvent($year, $month, $day){
		$day   = ($day < 10 && strlen($day) == 1)? "0$day" : $day;
		$year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month-$day" : "$year-$month-$day";
		$query = $this->db->select('idevent as id, event_time as time, event, event_title')->order_by('event_time')->get_where('event_detail', array('event_date' => $year));
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return null;
		}
	}
	function getPopup($event_date){
		//echo $event_date;
		$sql="SELECT * FROM event_detail where event_date='$event_date'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	// insert event
	function addEvent($year, $month, $day, $time, $event,$title){
		$config['upload_path'] = 'public/dummy/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('img');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/dummy/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 90;
			$config['height']	= 45;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			echo $fname=$file_data['file_name'];
			$check = $this->db->get_where('events', array('event_date' => "$year-$month-$day"));
		if($check->num_rows() > 0){
			$this->db->query("UPDATE events SET total_events = total_events + 1 WHERE event_date = ?", array("$year-$month-$day"));
			$this->db->insert('event_detail', array('event_date' => "$year-$month-$day", 'event_time' => $time, 'event' => $event, 'event_title' => $title));
		}else{
			$this->db->insert('events', array('event_date' => "$year-$month-$day", 'total_events' => 1));
		    $this->db->insert('event_detail', array('event_date' => "$year-$month-$day", 'event_time' => $time, 'event' => $event, 'event_title' => $title));
		}
		
	}
	
	// delete event
	function deleteEvent($year, $month, $day, $id){
		$this->db->delete("event_detail", array('idevent' => $id, 'event_date' => "$year-$month-$day"));
		$check = $this->db->query('SELECT count(*) as total FROM event_detail WHERE event_date = ?', array("$year-$month-$day"))->row();
		if($check->total > 0){
			$this->db->update('events', array('total_events' => $check->total), array('event_date' => "$year-$month-$day"));
		}else{
			$this->db->delete("events", array('event_date' => "$year-$month-$day"));
		}
		return $check->total;
	}
        function updateImg()
        {
                        $config['upload_path'] = 'public/events/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '900000';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('image');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/event/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 90;
			$config['height']	= 45;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
                                $data['img_id']='';
				$data['imagename']=$fname;			
				$data['idevent']=$this->input->post('idevent');		
				$this->db->insert('event_image',$data);
            
        }
}