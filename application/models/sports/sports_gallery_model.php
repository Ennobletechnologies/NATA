<?php

class Sports_gallery_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function message_count() {
        return $this->db->count_all('sports_gallery');
    }

    function get_sports_gallery($per_pg, $offset) {
        $this->db->order_by('gallery_id', 'ASC');
        $query = $this->db->get('sports_gallery', $per_pg, $offset);
        return $query->result_array();
    }
    
    function getsports_gallery() {
        $this->db->order_by('gallery_id', 'ASC');
        $query = $this->db->get('sports_gallery');
        return $query->result_array();
    }


    function insert_sports_gallery() {
        $config['upload_path'] = 'public/sports/sports_gallery';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '90000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gallery_pic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/sports/sports_gallery/thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 290;
        $config['height'] = 160;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['gallery_id'] = '';
        $data['gallery_pic'] = $fname;
        $this->db->insert('sports_gallery', $data);
        return true;
    }

    function edit_sports_gallery($id) {
        $this->db->where('gallery_id', $id);
        $query = $this->db->get('sports_gallery');
        return $query->row_array();
    }

    function update_sports_gallery() {
        $name = $_FILES['gallery_pic']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `sports_gallery` where `gallery_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/sports/sports_gallery/" . $row['gallery_pic'];
            $path1 = "public/sports/sports_gallery/thumb/" . $row['gallery_pic'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/sports/sports_gallery/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('gallery_pic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/sports/sports_gallery/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['gallery_pic'] = $file_data['file_name'];
            $data1['gallery_pic'] = $file_data['file_name'];
        }
        if ($this->db->update('sports_gallery', $data, array('gallery_id' => $id))) {
            $this->db->update('sports_gallery', $data1, array('gallery_id' => $id));
            return true;
        }
    }

    function delete_sports_gallery($id) {
        $sql = "select * from `sports_gallery` where `gallery_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/sports/sports_gallery/" . $row['gallery_pic'];
        $path1 = "public/sports/sports_gallery/thumb/" . $row['gallery_pic'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('sports_gallery');
        $this->db->where('gallery_id', $id);
        $query = $this->db->delete();
        return 0;
    }

}
