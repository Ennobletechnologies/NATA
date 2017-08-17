<?php

class Nata_seva_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_nata_sevadays() {
        $this->db->order_by('nseva_id', 'desc');
        $this->db->limit('5');
        $query = $this->db->get('nata_seva');
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('nata_seva');
    }

    function getnata_sevadays($per_pg, $offset) {
        $this->db->order_by('nseva_id', 'desc');
        $query = $this->db->get('nata_seva', $per_pg, $offset);
        return $query->result_array();
    }

    function insert_nata_sevadays() {
 $this->load->database();
        $title = mysql_real_escape_string($_POST['nseva_title']);
        $desc = mysql_real_escape_string($_POST['nseva_desc']);
        $date = mysql_real_escape_string($_POST['published_on']);
        $config['upload_path'] = 'public/natasevadays';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '900000';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('nseva_image');
        $file_data = $this->upload->data();
        $fname = $file_data['file_name'];
        $data = '';
        $data['nseva_id'] = '';
        $data['nseva_title'] = $title;
        $data['nseva_desc'] = $desc;
        $data['nseva_image'] = $fname;
        $data['published_on'] = $date;

        $this->db->insert('nata_seva', $data);

      //  @unlink("public/natasevadays" . $fname);
       // @unlink("public/natasevadays/thumb" . $fname);
        return true;
    }

    function edit_nata_sevadays($id) {
        $this->db->where('nseva_id', $id);
        $query = $this->db->get('nata_seva');
        return $query->row_array();
    }

    function updatenata_sevadays() {
   $name = $_FILES['nseva_image']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `nata_seva` where `nseva_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/natasevadays/" . $row['nseva_image'];
            @unlink($path);
            $config['upload_path'] = 'public/natasevadays/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('nseva_image');
            $file_data = $this->upload->data();
            $data['nseva_image'] = $file_data['file_name'];
            $data1['nseva_image'] = $file_data['file_name'];
        }
        $data['nseva_title'] = $this->input->post('nseva_title');
        $data['nseva_desc'] = $this->input->post('nseva_desc');
        if ($this->db->update('nata_seva', $data, array('nseva_id' => $id))) {
            $data1['nseva_title'] = $this->input->post('nseva_title');
            $data1['nseva_desc'] = $this->input->post('nseva_desc');
            $data1['published_on'] = $this->input->post('published_on');
            $this->db->update('nata_seva', $data1, array('nseva_id' => $id));
            //$_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_nata_sevadays($id) {
        $sql = "select * from `nata_seva` where `nseva_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/natasevadays/" . $row['nseva_image'];
        $path1 = "public/natasevadays/thumb/" . $row['nseva_image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('nata_seva');
        $this->db->where('nseva_id', $id);
        $query = $this->db->delete();
        //$_SESSION['delete_events'] = true;
        return 0;
    }

}
