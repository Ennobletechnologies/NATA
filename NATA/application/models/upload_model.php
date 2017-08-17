<?php
class upload_model extends CI_Model
{
public function construct()
{
parent::__construct();
$this->load->database();
}
function insert_images($image_data = array()){
      $data = array(
          'filename' => $image_data['file_name'],
          'file_path' => 'uploads',
		  'title1' => 'no title',
		  'title2' => 'no title',
		  'title3' => 'no title',
      );
      $this->db->insert('images', $data);
}
function get_images()
{
$this->db->order_by('id', 'DESC');    
$query=$this->db->get('images');
return $query->result_array();
}
function sponsers_images($image_data = array()){
      $data = array(
          'spn_image' => $image_data['file_name'],
          'file_path' => 'public/sponsers',
		  );
      $this->db->insert('sponsers', $data);
}
function get_sponsers()
{
$query=$this->db->get('sponsers');
return $query->result_array();
}
}