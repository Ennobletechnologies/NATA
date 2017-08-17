<?php

class Nata_mata_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_nata_mata() {
        $this->db->order_by('nm_id', 'desc');
        $this->db->limit('5');
        $query = $this->db->get('nata_mata');
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('nata_mata');
    }

    function getnata_mata($per_pg, $offset) {
        $this->db->order_by('nm_id', 'desc');
        $query = $this->db->get('nata_mata', $per_pg, $offset);
        return $query->result_array();
    }

    function insert_nata_mata() {
        //$this->load->database();
        $title = mysql_real_escape_string($_POST['nm_title']);
        //$desc = mysql_real_escape_string($_POST['project_desc']);
        $date = mysql_real_escape_string($_POST['published_on']);
        $config['upload_path'] = 'public/natamata';
        $config['allowed_types'] = 'pdf|doc|xml';
        $config['max_size'] = '9000000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('nm_file');
        $file_data = $this->upload->data();
        //$config['image_library'] = 'gd2';
        //$config['source_image'] = $file_data['full_path'];
        //$config['new_image'] = 'public/natamata/thumb';
        //$config['create_thumb'] = TRUE;
        //$config['maintain_ratio'] = false;
        //$config['thumb_marker'] = '';
        //$config['width'] = 290;
        //$config['height'] = 160;
        //$this->load->library('image_lib', $config);
        //$this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['nm_id'] = '';
        $data['nm_title'] = $title;
        //$data['project_desc'] = $desc;
        $data['nm_file'] = $fname;
        $data['published_on'] = $date;

        $this->db->insert('nata_mata', $data);

        @unlink("public/natamata" . $fname);
        //@unlink("public/natamata/thumb" . $fname);
        return true;
    }

    function edit_nata_mata($id) {
        $this->db->where('nm_id', $id);
        $query = $this->db->get('nata_mata');
        return $query->row_array();
    }

    function updatenata_mata() {
        $name = $_FILES['nm_file']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `nata_mata` where `nm_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/natamata/" . $row['nm_file'];
            //$path1 = "public/natamata/thumb/" . $row['nm_image'];
            unlink($path);
            //@unlink($path1);
            $config['upload_path'] = 'public/natamata/';
            $config['allowed_types'] = 'pdf|doc|xml';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('nm_file');
            $file_data = $this->upload->data();
            //$config['image_library'] = 'gd2';
            //$config['source_image'] = $file_data['full_path'];
            //$config['new_image'] = 'public/natamata/thumb/';
            //$config['create_thumb'] = TRUE;
            //$config['maintain_ratio'] = false;
            //$config['thumb_marker'] = '';
            //$config['width'] = 90;
            //$config['height'] = 45;
            //$this->load->library('image_lib', $config);
            //$this->image_lib->resize();
            $data['nm_file'] = $file_data['file_name'];
            $data1['nm_file'] = $file_data['file_name'];
        }
        $data['nm_title'] = $this->input->post('nm_title');
        //$data['project_desc'] = $this->input->post('project_desc');
        if ($this->db->update('nata_mata', $data, array('nm_id' => $id))) {
            $data1['nm_title'] = $this->input->post('nm_title');
            //$data1['project_desc'] = $this->input->post('project_desc');
            $data1['published_on'] = $this->input->post('published_on');
            $this->db->update('nata_mata', $data1, array('nm_id' => $id));
            //$_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_nata_mata($id) {
        $sql = "select * from `nata_mata` where `nm_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/natamata/" . $row['nm_file'];
       // $path1 = "public/natamata/thumb/" . $row['nm_file'];
        @unlink($path);
        //@unlink($path1);
        $this->db->select();
        $this->db->from('nata_mata');
        $this->db->where('nm_id', $id);
        $query = $this->db->delete();
        //$_SESSION['delete_events'] = true;
        return 0;
    }

}
