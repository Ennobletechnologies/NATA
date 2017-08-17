<?php

class Telugu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_telugu() {
        $this->db->order_by('telugu_id', 'desc');
        $this->db->limit('5');
        $query = $this->db->get('telugu');
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('telugu');
    }

    function gettelugu($per_pg, $offset) {
        $this->db->order_by('telugu_id', 'desc');
        $query = $this->db->get('telugu', $per_pg, $offset);
        return $query->result_array();
    }

    function insert_telugu() {
        //$this->load->database();
        $title = mysql_real_escape_string($_POST['telugu_title']);
        $desc = mysql_real_escape_string($_POST['telugu_url']);
        $date = mysql_real_escape_string($_POST['published_on']);
        $config['upload_path'] = 'public/telugu';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '90000';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('telugu_image');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/telugu/thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 290;
        $config['height'] = 160;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['telugu_id'] = '';
        $data['telugu_title'] = $title;
        $data['telugu_url'] = $desc;
        $data['telugu_image'] = $fname;
        $data['published_on'] = $date;

        $this->db->insert('telugu', $data);

        @unlink("public/telugu" . $fname);
        @unlink("public/telugu/thumb" . $fname);
        return true;
    }

    function edit_telugu($id) {
        $this->db->where('telugu_id', $id);
        $query = $this->db->get('telugu');
        return $query->row_array();
    }

    function updatetelugu() {
        $name = $_FILES['telugu_image']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `telugu` where `telugu_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/telugu/" . $row['telugu_image'];
            $path1 = "public/telugu/thumb/" . $row['telugu_image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/telugu/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('telugu_image');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/telugu/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['telugu_image'] = $file_data['file_name'];
            $data1['telugu_image'] = $file_data['file_name'];
        }
        $data['telugu_title'] = $this->input->post('telugu_title');
        $data['telugu_url'] = $this->input->post('telugu_url');
        if ($this->db->update('telugu', $data, array('telugu_id' => $id))) {
            $data1['telugu_title'] = $this->input->post('telugu_title');
            $data1['telugu_url'] = $this->input->post('telugu_url');
            $data1['published_on'] = $this->input->post('published_on');
            $this->db->update('telugu', $data1, array('telugu_id' => $id));
            //$_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_telugu($id) {
        $sql = "select * from `telugu` where `telugu_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/telugu/" . $row['telugu_image'];
        $path1 = "public/telugu/thumb/" . $row['telugu_image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('telugu');
        $this->db->where('telugu_id', $id);
        $query = $this->db->delete();
        //$_SESSION['delete_events'] = true;
        return 0;
    }

}
