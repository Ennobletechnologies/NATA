<?php
class Imageupload extends CI_Controller {
function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model('news_model');
}
function index()
{
$this->load->view('imageupload_view', array('error' => ' ' ));
}
function doupload() {
$name_array = array();
$count = count($_FILES['userfile']['size']);
foreach($_FILES as $key=>$value)
for($s=0; $s<=$count-1; $s++) {
$_FILES['userfile']['name']=$value['name'][$s];
$_FILES['userfile']['type']    = $value['type'][$s];
$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
$_FILES['userfile']['error']       = $value['error'][$s];
$_FILES['userfile']['size']    = $value['size'][$s];  
    $config['upload_path'] = 'public/banner/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']	= '100';
$config['max_width']  = '1024';
$config['max_height']  = '768';
$config['encrypt_name'] = true;
$this->load->library('upload', $config);
$this->upload->do_upload();
$data = $this->upload->data();
$name_array[] = $data['file_name'];
//$this->news_model->multi_img($id='',$data['file_name']);
$this->news_model->addBanner($data['file_name'],'test1','no desc1','3');
}
$names= implode(',', $name_array);
/*	$this->load->database();
$db_data = array('id'=> NULL,
'name'=> $names);
$this->db->insert('testtable',$db_data);
*/	print_r($names);
}
}