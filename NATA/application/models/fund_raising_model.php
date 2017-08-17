<?php

class Fund_raising_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_fund_raising() {
        $this->db->order_by('fr_id', 'desc');
        $this->db->limit('5');
        $query = $this->db->get('fund_raising');
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('fund_raising');
    }

    function getfund_raising($per_pg, $offset) {
        $this->db->order_by('fr_id', 'desc');
        $query = $this->db->get('fund_raising', $per_pg, $offset);
        return $query->result_array();
    }

    function insert_fund_raising() {
        //$this->load->database();
        $title = mysql_real_escape_string($_POST['fr_title']);
        $desc = mysql_real_escape_string($_POST['fr_desc']);
        $date = mysql_real_escape_string($_POST['published_on']);
        $config['upload_path'] = 'public/fundraising';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '90000';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('fr_image');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/fundraising/thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 290;
        $config['height'] = 160;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['fr_id'] = '';
        $data['fr_title'] = $title;
        $data['fr_desc'] = $desc;
        $data['fr_image'] = $fname;
        $data['published_on'] = $date;

        $this->db->insert('fund_raising', $data);

        @unlink("public/fundraising" . $fname);
        @unlink("public/fundraising/thumb" . $fname);
        return true;
    }

    function edit_fund_raising($id) {
        $this->db->where('fr_id', $id);
        $query = $this->db->get('fund_raising');
        return $query->row_array();
    }

    function updatefund_raising() {
        $name = $_FILES['fr_image']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `fund_raising` where `fr_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/fundraising/" . $row['fr_image'];
            $path1 = "public/fundraising/thumb/" . $row['fr_image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/fundraising/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('fr_image');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/fundraising/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['fr_image'] = $file_data['file_name'];
            $data1['fr_image'] = $file_data['file_name'];
        }
        $data['fr_title'] = $this->input->post('fr_title');
        $data['fr_desc'] = $this->input->post('fr_desc');
        if ($this->db->update('fund_raising', $data, array('fr_id' => $id))) {
            $data1['fr_title'] = $this->input->post('fr_title');
            $data1['fr_desc'] = $this->input->post('fr_desc');
            $data1['published_on'] = $this->input->post('published_on');
            $this->db->update('fund_raising', $data1, array('fr_id' => $id));
            //$_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_fund_raising($id) {
        $sql = "select * from `fund_raising` where `fr_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/fundraising/" . $row['fr_image'];
        $path1 = "public/fundraising/thumb/" . $row['fr_image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('fund_raising');
        $this->db->where('fr_id', $id);
        $query = $this->db->delete();
        //$_SESSION['delete_events'] = true;
        return 0;
    }

}
