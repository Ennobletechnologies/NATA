<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class Ajaxupload extends CI_Controller {
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->load->view('upload_view.php');
    }
        public function process_ajax(){
            
            $config['upload_path'] = 'public/dummy/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']         = '9000';
			$config['encrypt_name']     = true;
			$this->load->library('upload', $config);
			$this->upload->do_upload('userImage');
			$file_data = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image']	= $file_data['full_path'];
			$config['new_image']	= 'public/dummy/thumb/';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = false;
			$config['thumb_marker']='';
			$config['width']	 = 400;
			$config['height']	= 266;
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();
			echo $data['album_image']=$file_data['file_name'];
            
            /*if(is_array($_FILES)) {
                if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                    $sourcePath = $_FILES['userImage']['tmp_name'];
                    $targetPath = "files/users/uploads/".$_FILES['userImage']['name'];
                if(move_uploaded_file($sourcePath,$targetPath)) {
    echo '<img src="'.base_url().$targetPath .'" width="100px" height="100px" alt="'.$_POST['image_title'].'"/>';
            }
        }
    }*/
    }
 }  