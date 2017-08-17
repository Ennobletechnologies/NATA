<?php

class services_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function message_count() {
        return $this->db->count_all('services');
    }

    function getservices($per_pg, $offset) {
        $this->db->order_by('services_id', 'desc');
        $query = $this->db->get('services', $per_pg, $offset);
        return $query->result_array();
    }

    function all_services() {
        $this->db->order_by('services_id', 'desc');
        $this->db->limit('4');
        $query = $this->db->get('services');
        return $query->result_array();
    }

    function edit_services($id) {
        $this->db->where('services_id', $id);
        $query = $this->db->get('services');
        return $query->result_array();
    }

    function insert_services() {
        $this->load->database();
        $title = mysql_real_escape_string($_POST['services_title']);
        $desc = mysql_real_escape_string($_POST['services_description']);
        $config['upload_path'] = 'public/services/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('servicespic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/dummy/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 167;
        $config['height'] = 168;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
       //copy("public/dummy/" . $fname, "public/services/" . $fname);
        copy("public/dummy/thumb/" . $fname, "public/services/thumb/" . $fname);
        $data = '';
        $data['services_id'] = '';
        $data['services_title'] = $title;
        $data['services_desc'] = $desc;
        $data['services_img'] = $fname;
        $data['updated_date'] = date('Y-m-d H:i:s');
        //print_r($data);exit;    
        $this->db->insert('services', $data);
       @unlink("public/dummy/" . $fname);
        @unlink("public/dummy/thumb/" . $fname);
        return true;
    }

    /* function insert_services()
      {
      $this->load->database();
      $title=mysql_real_escape_string($_POST['services_title']);
      $desc=mysql_real_escape_string($_POST['services_description']);
      $config['upload_path'] = 'public/dummy/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']         = '9000';
      $config['encrypt_name']     = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('servicespic');
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
      $fname=$file_data['file_name'];


      copy("public/dummy/".$fname,"public/services/".$fname);
      copy("public/dummy/thumb/".$fname,"public/services/thumb/".$fname);
      $data='';
      $data['services_id']='';
      $data['services_title']=$title;
      $data['services_desc']=$desc;
      $data['services_img']=$fname;
      $data['updated_date']=date('Y-m-d H:i:s');

      $this->db->insert('news',$data);

      @unlink("public/dummy/".$fname);
      @unlink("public/dummy/thumb/".$fname);
      return true;
      }
     */
    /* function updateservices()
      {
      $name=$_FILES['servicespic']['name'];
      $id=$this->input->post('servicesid');
      if($name!="")
      {
      $sql="select * from `services` where `services_id`=$id";
      $query=$this->db->query($sql);
      $row=$query->row_array();
      $path="public/services/".$row['services_img'];
      $path1="public/services/thumb/".$row['services_img'];
      unlink($path);
      @unlink($path1);
      $config['upload_path'] = 'public/services/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']         = '9000';
      $config['encrypt_name']     = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('servicespic');
      $file_data = $this->upload->data();
      $config['image_library'] = 'gd2';
      $config['source_image']	= $file_data['full_path'];
      $config['new_image']	= 'public/services/thumb/';
      $config['create_thumb'] = TRUE;
      $config['maintain_ratio'] = false;
      $config['thumb_marker']='';
      $config['width']	 = 167;
      $config['height']	= 168;
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
      $data['services_img']=$file_data['file_name'];
      $data1['services_img']=$file_data['file_name'];
      }
      $data['services_title']=$this->input->post('services_title');
      $data['services_desc']=$this->input->post('services_description');
      if($this->db->update('services',$data,array('services_id'=>$id)))
      {
      $data1['services_title']=$this->input->post('services_title');
      $data1['services_desc']=$this->input->post('services_description');
      $data1['updated_date']=time();
      $this->db->update('services',$data1,array('services_id'=>$id));
      $_SESSION['update_topstory']=true;
      return true;
      }


      } */

    function update_services() {
        $name = $_FILES['servicespic']['name'];
        $id = $this->input->post('servicesid');
        if ($name != "") {
            $sql = "select * from `services` where `services_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/services/" . $row['services_img'];
            $path1 = "public/services/thumb/" . $row['services_img'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/services/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '9000';
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            $this->upload->do_upload('servicespic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/services/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['services_img'] = $file_data['file_name'];
            $data1['services_img'] = $file_data['file_name'];
        }
        $data['services_title'] = $this->input->post('services_title');
        $data['services_desc'] = $this->input->post('services_description');
        if ($this->db->update('services', $data, array('services_id' => $id))) {
            $data1['services_title'] = $this->input->post('services_title');
            $data1['services_desc'] = $this->input->post('services_description');
            $data1['updated_date'] = date('Y-m-d H:i:s');
            $this->db->update('services', $data1, array('services_id' => $id));
            $_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_services($id) {
        $sql = "select * from `services` where `services_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/services/" . $row['services_img'];
        $path1 = "public/services/thumb/" . $row['services_img'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('services');
        $this->db->where('services_id', $id);
        $query = $this->db->delete();
        $_SESSION['delete_topstory'] = true;
        return 0;
    }

    function servicesinfo($id) {
        $this->db->where('services_id', $id);
        $query = $this->db->get('services');
        return $query->result_array();
    }

}
