<?php 
class events_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
        function get_events()
	{
		$this->db->order_by('idevent','desc');
		$query=$this->db->get('event_detail');
		return $query->result_array();
		
	}
        function getEventsById($id)
	{
		$this->db->where('idevent',$id);
		$query=$this->db->get('event_detail');
		return $query->result_array();
	}
	function get_topstories()
	{
		$this->db->order_by('events_id','desc');
		$query=$this->db->get('events');
		return $query->result_array();
		
	}
	function get_topstories_limit()
	{
		$this->db->order_by('events_id','desc');
		$query=$this->db->get('events',5);
		return $query->result_array();
		
	}
	function get_topstories_limit_four()
	{
		$this->db->order_by('events_id','desc');
		$query=$this->db->get('events',4);
		return $query->result_array();
		
	}
	function edit_topstory($id)
	{
		$this->db->where('events_id',$id);
		$query=$this->db->get('events');
		return $query->result_array();
	}
	function insert_events()
	{
		$this->load->database();
	 		$title=mysql_real_escape_string($_POST['events_title']);
			$desc=mysql_real_escape_string($_POST['events_description']);
			$config['upload_path'] = 'public/dummy/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('eventspic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/dummy/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 290;
			$config['height']	= 160;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
			
						
					copy("public/dummy/".$fname,"public/News/".$fname);
					copy("public/dummy/thumb/".$fname,"public/News/thumb/".$fname);
					$data='';
					$data['events_id']='';
					$data['events_title']=$title;			
					$data['events_desc']=$desc;		
					$data['events_img']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					
					$this->db->insert('events',$data);
				
			@unlink("public/dummy/".$fname);
			@unlink("public/dummy/thumb/".$fname);
			return true;
	}
	/*function insert_events()
	{
		$this->load->database();
	 		$title=mysql_real_escape_string($_POST['events_title']);
			$desc=mysql_real_escape_string($_POST['events_description']);
			$config['upload_path'] = 'public/News/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('eventspic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/News/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 167;
			$config['height']	= 168;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
			
						
					copy("public/dummy/".$fname,"public/dummy/".$fname);
					copy("public/dummy/thumb/".$fname,"public/events/thumb/".$fname);
					$data='';
					$data['events_id']='';
					$data['events_title']=$title;			
					$data['events_desc']=$desc;		
					$data['events_img']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					
					$this->db->insert('events',$data);
				
			@unlink("public/events/".$fname);
			@unlink("public/events/thumb/".$fname);
			return true;
	}*/
	
	function updateevents()
	{
		$name=$_FILES['eventspic']['name'];
		$id=$this->input->post('eventsid');
		if($name!="")
		{
			$sql="select * from `events` where `events_id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/News/".$row['events_img'];
			$path1="public/News/thumb/".$row['events_img'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/News/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('eventspic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/News/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 90;
			$config['height']	= 45;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['events_img']=$file_data['file_name'];
			$data1['events_img']=$file_data['file_name'];
		}
		$data['events_title']=$this->input->post('events_title');
		$data['events_desc']=$this->input->post('events_description');
		if($this->db->update('events',$data,array('events_id'=>$id)))
		{
			$data1['events_title']=$this->input->post('events_title');
			$data1['events_desc']=$this->input->post('events_description');
			$data1['updated_date']=date('Y-m-d H:i:s');
			$this->db->update('events',$data1,array('events_id'=>$id));
			$_SESSION['update_topstory']=true;
			return true;
	    }
	
	
	}
	/*function updateevents()
	{
		$name=$_FILES['eventspic']['name'];
		$id=$this->input->post('eventsid');
		if($name!="")
		{
			$sql="select * from `events` where `events_id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/events/".$row['events_img'];
			$path1="public/events/thumb/".$row['events_img'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/events/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('eventspic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/dummy/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 167;
			$config['height']	= 168;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['news_img']=$file_data['file_name'];
			$data1['news_img']=$file_data['file_name'];
		}
		$data['events_title']=$this->input->post('events_title');
		$data['events_desc']=$this->input->post('events_description');
		if($this->db->update('events',$data,array('events_id'=>$id)))
		{
			$data1['events_title']=$this->input->post('events_title');
			$data1['events_desc']=$this->input->post('events_description');
			$data1['updated_date']=time();
			$this->db->update('events',$data1,array('events_id'=>$id));
			$_SESSION['update_topstory']=true;
			return true;
	    }
	
	
	}*/
	function delete_events($id)
	{
		$sql="select * from `events` where `events_id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="public/News/".$row['events_img'];
		$path1="public/News/thumb/".$row['events_img'];
		@unlink($path);
		@unlink($path1);
		$this->db->select();
		$this->db->from('events');
		$this->db->where('events_id',$id);
		$query=$this->db->delete();
		$_SESSION['delete_events']=true;
		return 0;

	}
	function eventsinfo($id)
	{
                $query=$this->db->query("SELECT * FROM event_detail ed
		LEFT JOIN event_image ei ON ed.idevent = ei.idevent where ed.idevent=$id");
		return $query->result_array();
		/*$this->db->where('idevent',$id);
		$query=$this->db->get('event_detail');
		return $query->result_array();*/
	}
}