<?php
class gallery_model extends CI_Model
{
public function construct()
{
parent::__construct();
$this->load->database();
}
function insert_images($image_data = array()){
      $data = array(
          'filename' => $image_data['file_name'],
          'file_path' => 'public/gallery',
		   );
      $this->db->insert('gallery', $data);
}
function get_images()
{
$query=$this->db->get('gallery');
return $query->result_array();
}
}