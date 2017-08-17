<?php 
class news_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_topstories()
	{
		$this->db->order_by('news_id','desc');
		$query=$this->db->get('news');
		return $query->result_array();
		
	}
	function get_topstories_limit()
	{
		$this->db->order_by('news_id','desc');
		$query=$this->db->get('news',5);
		return $query->result_array();
		
	}
	function get_topstories_limit_four()
	{
		$this->db->order_by('news_id','desc');
		$query=$this->db->get('news',4);
		return $query->result_array();
		
	}
	function edit_topstory($id)
	{
		$this->db->where('news_id',$id);
		$query=$this->db->get('news');
		return $query->result_array();
	}
	function get_region($name)
	{
		$this->db->where('region',$name);
		$query=$this->db->get('news');
		return $query->result_array();
	}
	function user_level_news()
	{
		$user_id=$this->session->userdata("user_id");
		$this->db->where('user_id',$user_id);
		$query=$this->db->get('news');
		return $query->result_array();
	}
	function insert_news()
	{
		$this->load->database();
	 		$title=mysql_real_escape_string($_POST['news_title']);
			$desc=mysql_real_escape_string($_POST['news_description']);
			$region=$_POST['region'];
			$config['upload_path'] = 'public/dummy/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('newspic');
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
			$fname=$file_data['file_name'];
			$arr=$_POST['multi'];	
			foreach($arr as $key=>$value)
			{
				if($value==1)
				{
					copy("public/dummy/".$fname,"public/News/".$fname);
					copy("public/dummy/thumb/".$fname,"public/News/thumb/".$fname);
					$data='';
					$data['news_id']='';
					$data['news_title']=$title;			
					$data['news_desc']=$desc;		
					$data['news_img']=$fname;
					$data['user_id']=$this->session->userdata('user_id');
					$data['region']=$region;
					$data['updated_date']=date('Y-m-d H:i:s');
					$this->db->insert('news',$data);
				}
				if($value==6)
				{
					copy("public/dummy/".$fname,"public/banner/".$fname);
					copy("public/dummy/thumb/".$fname,"public/banner/thumb/".$fname);
					$data='';
					$data['banner_id']='';
					$data['banner_image']=$fname;
					$data['banner_title']=$title;
					$data['banner_desc']=$desc;
					$data['updated_date']=date('Y-m-d H:i:s');
					$this->db->insert('banner',$data);
				}
				if($value==8)
				{
					copy("public/dummy/".$fname,"public/Events/".$fname);
					copy("public/dummy/thumb/".$fname,"public/Events/thumb/".$fname);
					$data='';
					$data['events_id']='';
					$data['events_title']=$title;			
					$data['events_desc']=$desc;		
					$data['events_img']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					$this->db->insert('events',$data);
				}
				if($value==12)
				{
					copy("public/dummy/".$fname,"public/services/".$fname);
					copy("public/dummy/thumb/".$fname,"public/services/thumb/".$fname);
					$data='';
					$data['services_id']='';
					$data['services_title']=$title;			
					$data['services_desc']=$desc;		
					$data['services_img']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					
					$this->db->insert('services',$data);
				}
			}
			@unlink("public/dummy/".$fname);
			@unlink("public/dummy/thumb/".$fname);
			return true;
	}
	function updatenews()
	{
		$name=$_FILES['newspic']['name'];
		$id=$this->input->post('newsid');
		if($name!="")
		{
			$sql="select * from `news` where `news_id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/News/".$row['news_img'];
			$path1="public/News/thumb/".$row['news_img'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/News/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('newspic');
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
			$data['news_img']=$file_data['file_name'];
			$data1['news_img']=$file_data['file_name'];
		}
		$data['news_title']=$this->input->post('news_title');
		$data['news_desc']=$this->input->post('news_description');
		if($this->db->update('news',$data,array('news_id'=>$id)))
		{
			$data1['news_title']=$this->input->post('news_title');
			$data1['news_desc']=$this->input->post('news_description');
			$data1['updated_date']=date('Y-m-d H:i:s');
			$this->db->update('news',$data1,array('news_id'=>$id));
			$_SESSION['update_topstory']=true;
			return true;
	    }
	}
	function delete_news($id)
	{
		$sql="select * from `news` where `news_id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="public/News/".$row['news_img'];
		$path1="public/News/thumb/".$row['news_img'];
		@unlink($path);
		@unlink($path1);
		$this->db->select();
		$this->db->from('news');
		$this->db->where('news_id',$id);
		$query=$this->db->delete();
		$_SESSION['delete_topstory']=true;
		return 0;

	}
	function newsinfo($id,$title)
	{
		$this->db->where('news_id',$id);
		$query=$this->db->get('news');
		return $query->result_array();
	}
	//president msg adding
	function insert_msg()
	{
			$this->load->database();
	 		$title=mysql_real_escape_string($_POST['title']);
			$message=mysql_real_escape_string($_POST['message']);
			$config['upload_path'] = 'public/dummy/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('image');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/dummy/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 157;
			$config['height']	= 203;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
			
						
					copy("public/dummy/".$fname,"public/News/".$fname);
					copy("public/dummy/thumb/".$fname,"public/News/thumb/".$fname);
					$data='';
					$data['id']='';
					$data['title']=$title;			
					$data['message']=$message;		
					$data['image']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					
					$this->db->insert('president_msg',$data);
				
			@unlink("public/dummy/".$fname);
			@unlink("public/dummy/thumb/".$fname);
			return true;
	}
	//president msg adding end
	function get_message()
	{
		$this->db->order_by('id','desc');
		$query=$this->db->get('president_msg');
		return $query->result_array();
		
	}
	function edit_msg($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('president_msg');
		return $query->result_array();
	}
	function update_msg()
	{
		$name=$_FILES['image']['name'];
		if(!empty($_FILES['cont_image']['name']))
		{
		$cont_image=$_FILES['cont_image']['name'];
		}
		$id=$this->input->post('msgid');
		if($name!="")
		{
			$sql="select * from `president_msg` where `id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/News/".$row['image'];
			$path1="public/News/thumb/".$row['image'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/News/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/News/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 149;
			$config['height']	= 195;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['image']=$file_data['file_name'];
			$data1['image']=$file_data['file_name'];
		}
		$data['title']=$this->input->post('title');
		$data['message']=$this->input->post('message');
		if($this->db->update('president_msg',$data,array('id'=>$id)))
		{
			$data1['title']=$this->input->post('title');
			$data1['message']=$this->input->post('message');
			$data1['updated_date']=date('Y-m-d H:i:s');
			$this->db->update('president_msg',$data1,array('id'=>$id));
			return true;
	    }
	
	
	}
	//msg update part ends
		function addBanner($image,$banner_title,$banner_desc,$album_id)
	{
		$data['banner_image']=$image;
		$data['banner_title']=$banner_title;
		$data['banner_desc']=$banner_desc;
		$data['album_id']=$album_id;
		$this->db->insert('banner',$data);
		return true;
	}
	function getBanners()
	{		
			$this->db->order_by('banner_id','desc');
			$query=$this->db->get('banner');
		return $query->result_array();
			
	}
	function getAdminBanners($per_pg,$offset)
	{		
			$this->db->order_by('banner_id','desc');
			$query=$this->db->get('banner',$per_pg,$offset);
		return $query->result_array();
			
	}
	function getAlbum()
	{
		$data   =   array();
		$sql ="select DISTINCT a.name,a.id,a.album_image,b.album_id from album a, banner b where a.id = b.album_id";
			$query = $this->db->query($sql);
		return $query->result_array();
			/*$this->db->order_by('id','desc');
			$query=$this->db->get('album');
			return $query->result_array();*/
	}
	function getAlbumID()
	{
	$sql ="SELECT banner_image FROM banner where album_id=1 ORDER BY banner_id asc limit 1";
	$query = $this->db->query($sql);
	return $query->result_array();
	}
	function deleteBanner($id)
	{
		$data['banner_id']=$id;
		$this->db->where('banner_id',$id);
		$this->db->from('banner');
		$this->db->delete();
		return true;
	}
	function get_policies()
	{
		$this->db->order_by('id','desc');
		$query=$this->db->get('policies');
		return $query->result_array();
		
	}
	function insert_policies()
	{
			$this->load->database();
	 		$title=mysql_real_escape_string($_POST['title']);
			$desc=mysql_real_escape_string($_POST['description']);
				$data='';
					$data['id']='';
					$data['title']=$title;			
					$data['p_desc']=$desc;		
					//$data['news_img']=$fname;
					//$data['user_id']=$this->session->userdata('user_id');
					//$data['region']=$region;
					$data['updated_date']=date('Y-m-d H:i:s');
					$this->db->insert('policies',$data);
					return true;
	}
	function edit_policies($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('policies');
		return $query->result_array();
	}
	function updatepolicies()
	{
		$id=$this->input->post('newsid');
		$data['title']=$this->input->post('title');
		$data['p_desc']=$this->input->post('description');
		$data1['updated_date']=date('Y-m-d H:i:s');
		$this->db->update('policies',$data,array('id'=>$id));
		return true;
	}
	function delete_policies($id)
	{
		$this->db->select();
		$this->db->from('policies');
		$this->db->where('id',$id);
		$query=$this->db->delete();
		return 0;

	}
	//sponsers
		function addSponsers($image)
	{
		$data['spn_image']=$image;
		$data['file_path']='public/sponsers/';
		$this->db->insert('sponsers',$data);
		return true;
	}
	function getSponsers()
	{
			$this->db->order_by('id','desc');
			$query=$this->db->get('sponsers');
			return $query->result_array();
	}
	function deleteSponsers($id)
	{
		$data['id']=$id;
		$this->db->where('id',$id);
		$this->db->from('sponsers');
		$this->db->delete();
		return true;
	}
//sponsers ends here
//videos part
	function get_videos()
	{
		$this->db->order_by('videos_id','desc');
		$query=$this->db->get('videos');
		return $query->result_array();
		
	}
	function insert_videos()
	{
		$this->load->database();
	 		$title=mysql_real_escape_string($_POST['title']);
			$desc=mysql_real_escape_string($_POST['description']);
			$config['upload_path'] = 'public/videos/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('videopic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/videos/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 290;
			$config['height']	= 160;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
			$data='';
			$data['videos_id']='';
			$data['videos_title']=$title;			
			$data['videos_desc']=$desc;		
			$data['videos_img']=$fname;
			$data['user_id']=$this->session->userdata('user_id');
			$data['updated_date']=date('Y-m-d H:i:s');
			$this->db->insert('videos',$data);
			return true;
	}
	function edit_videos($id)
	{
		$this->db->where('videos_id',$id);
		$query=$this->db->get('videos');
		return $query->result_array();
	}
	function updateVideos()
	{
		$name=$_FILES['videospic']['name'];
		$id=$this->input->post('videosid');
		if($name!="")
		{
			$sql="select * from `videos` where `videos_id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/videos/".$row['videos_img'];
			$path1="public/videos/thumb/".$row['videos_img'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/videos/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('videospic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/videos/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 290;
			$config['height']	= 160;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['videos_img']=$file_data['file_name'];
			$data1['videos_img']=$file_data['file_name'];
		}
		$data['videos_title']=$this->input->post('title');
		$data['videos_desc']=$this->input->post('description');
		if($this->db->update('videos',$data,array('videos_id'=>$id)))
		{
			$data1['videos_title']=$this->input->post('title');
			$data1['videos_desc']=$this->input->post('description');
			$data1['updated_date']=date('Y-m-d H:i:s');
			$this->db->update('videos',$data1,array('videos_id'=>$id));
		return true;
	    }
	}
	function delete_videos($id)
	{
		$sql="select * from `videos` where `videos_id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="public/videos/".$row['videos_img'];
		$path1="public/videos/thumb/".$row['videos_img'];
		@unlink($path);
		@unlink($path1);
		$this->db->select();
		$this->db->from('videos');
		$this->db->where('videos_id',$id);
		$query=$this->db->delete();
		return 0;

	}
	function fullvideo($id,$title)
	{
		$this->db->where('videos_id',$id);
		$query=$this->db->get('videos');
		return $query->result_array();
	}
//video part ends
//newsletters
function get_newsletters()
	{
		$this->db->order_by('id','desc');
		$query=$this->db->get('news_letter');
		return $query->result_array();
		
	}
//news letters ends
//album
function get_album()
	{
		$this->db->order_by('id','desc');
		$query=$this->db->get('album');
		return $query->result_array();
		
	}
	function insert_album()
	{
		$this->load->database();
	 		$title=mysql_real_escape_string($_POST['name']);
			$config['upload_path'] = 'public/albumpic/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name'] = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('albumpic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/albumpic/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 400;
			$config['height']	= 266;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$fname=$file_data['file_name'];
					$data='';
					$data['id']='';
					$data['name']=$title;			
					$data['album_image']=$fname;
					$data['updated_date']=date('Y-m-d H:i:s');
					$this->db->insert('album',$data);
		return true;
	}
	function fullgal($id)
	{
		$this->db->where('album_id',$id);
		$query=$this->db->get('banner');
		return $query->result_array();
	}
	function edit_album($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('album');
		return $query->result_array();
	}
	function update_alb()
	{
		$name=$_FILES['albumpic']['name'];
		$id=$this->input->post('alb_id');
		if($name!="")
		{
			$sql="select * from `album` where `id`=$id";
			$query=$this->db->query($sql);
			$row=$query->row_array();
			$path="public/albumpic/".$row['album_image'];
			$path1="public/albumpic/thumb/".$row['album_image'];
			unlink($path);
			@unlink($path1);
     		$config['upload_path'] = 'public/albumpic/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('albumpic');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/albumpic/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 400;
			$config['height']	= 266;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			$data['album_image']=$file_data['file_name'];
			$data1['album_image']=$file_data['file_name'];
		}
		$data['name']=$this->input->post('name');
		if($this->db->update('album',$data,array('id'=>$id)))
		{
			$data1['name']=$this->input->post('name');
			$data1['updated_date']=date('Y-m-d H:i:s');
			$this->db->update('album',$data1,array('id'=>$id));
		return true;
	    }
	}
	function delete_album($id)
	{
		$sql="select * from `album` where `id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="public/albumpic/".$row['album_image'];
		$path1="public/albumpic/thumb/".$row['album_image'];
		@unlink($path);
		@unlink($path1);
		$this->db->select();
		$this->db->from('album');
		$this->db->where('id',$id);
		$query=$this->db->delete();
		return 0;
	}
//album ends
//multi images
function multi_img($id,$name)
	{
		$data['id']=$id;
		$data['name']=$name;
		$this->db->insert('testtable',$data);
		return true;
	}
//multi images ends
//slider
function getSlider()
	{		
			$this->db->order_by('id','desc');
			$query=$this->db->get('images');
		return $query->result_array();
			
	}
	function delete_slider($id)
	{
		$sql="select * from `images` where `id`=$id";
		$query=$this->db->query($sql);
		$row=$query->row_array();
		$path="uploads/".$row['filename'];
		@unlink($path);
		$this->db->select();
		$this->db->from('images');
		$this->db->where('id',$id);
		$query=$this->db->delete();
		return 0;
	}
	//slider ends
	public function get_all($per_pg,$offset)
	{
		$this->db->order_by('banner_id','desc');
		$query=$this->db->get('banner',$per_pg,$offset);
		return $query->result();
	}
	public function message_count()
	{
		return $this->db->count_all('banner');
	}
        
        
}