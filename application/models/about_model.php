<?php
class about_model extends CI_Model
{
public function __construct()
{
parent::__construct();
}
public function home()
{
		$this->db->order_by('id','desc');
		$query=$this->db->get('home');
		return $query->result_array();
}
public function get_about()
	{
		$this->db->order_by('id','desc');
		$query=$this->db->get('about');
		return $query->result_array();
		
	}
function edit_about($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('about');
		return $query->result_array();
		
		
	}
        function updateAbout()
	{
		//$name=$_FILES['newspic']['name'];
		
		/*if($name!="")
		{
			
			/*$path="public/Topstories/".$row['topstory_img'];
			$path1="public/Topstories/thumb/".$row['topstory_img'];
			unlink($path);
			@unlink($path1);
                        $config['upload_path'] = 'public/Topstories/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('newspic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/Topstories/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 167;
			$config['height']	= 168;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['topstory_img']=$file_data['file_name'];
			$data1['topstory_img']=$file_data['file_name'];
		}*/
                $id=$this->input->post('id');
                $sql="select * from `about` where `id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
		$data['title']=mysql_real_escape_string($_POST['title']);
		$data['body']=mysql_real_escape_string($_POST['body']);
		if($this->db->update('about',$data,array('id'=>$id)))
		{
			$data1['title']=$this->input->post('title');
			$data1['body']=$this->input->post('body');
			//$data1['update_date']=time();
			$this->db->update('about',$data1,array('id'=>$id));
			$_SESSION['update_topstory']=true;
			return true;
	    }
	
	
	}
        
public function aboutDisplay()
{
$query=$this->db->get('about');
return $query->result_array();
}
public function aboutInsert()
{
$title=$this->input->post('title');
$body=$this->input->post('body');
$data['title']=$title;
$data['body']=$body;
$res=$this->db->insert('about',$data);
if($res)
{
echo "success";
}
else
{
echo "fail";
}
}
public function aboutUpdate()
{
$title=$this->input->post('title');
$body=$this->input->post('body');
$data['title']=$title;
$data['body']=$body;
$this->db->where('id', 1);
$res=$this->db->update('about',$data);
if($res)
{
echo "update success";
}
else
{
echo "update fail";
}
}
function pres_msg($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('president_msg');
		return $query->result_array();
	}
}