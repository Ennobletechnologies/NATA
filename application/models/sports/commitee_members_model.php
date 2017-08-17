<?php

class Commitee_members_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_committees(){
        $this->db->select('*');
        $this->db->from('sports_committees');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('sports_committee_members');
    }

    function get_committee_members($per_pg, $offset) {
        $this->db->order_by('member_id', 'ASC');
        $this->db->join('sports_committees','sports_committees.committee_id = sports_committee_members.committee_id','left');
        $query = $this->db->get('sports_committee_members', $per_pg, $offset);
        return $query->result_array();
    }
    
    function getcommittees() {
        $query = $this->db->query("select DISTINCT committee_name,sports_committee_members.committee_id from `sports_committee_members`  LEFT JOIN sports_committees ON sports_committees.committee_id = sports_committee_members.committee_id ");
        return $query->result_array();
    }
    function getcommittee_members(){
        $this->db->select('*');
        $this->db->from('sports_committee_members');
        $this->db->join('sports_committees','sports_committees.committee_id = sports_committee_members.committee_id','left');
       $query = $this->db->get('');
       return $query->result_array();
    }
        function insert_committee_member() {
        $title = mysql_real_escape_string($_POST['meber_name']);
        $desc = mysql_real_escape_string($_POST['designation']);
        $committee_id = mysql_real_escape_string($_POST['committee_id']);
        $config['upload_path'] = 'public/sports/committee_members';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '90000';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('member_pic');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/sports/committee_members/thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 290;
        $config['height'] = 160;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        $data = '';
        $data['member_id'] = '';
        $data['meber_name'] = $title;
        $data['designation'] = $desc;
        $data['committee_id'] = $committee_id;
        $data['member_pic'] = $fname;
        $this->db->insert('sports_committee_members', $data);
        return true;
    }

    function edit_committee_member($id) {
        $this->db->where('member_id', $id);
        $query = $this->db->get('sports_committee_members');
        return $query->row_array();
    }

    function update_committee_member() {
        $name = $_FILES['member_pic']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `sports_committee_members` where `member_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/sports/committee_members/" . $row['member_pic'];
            $path1 = "public/sports/committee_members/thumb/" . $row['member_pic'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/sports/committee_members/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('member_pic');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/sports/committee_members/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['member_pic'] = $file_data['file_name'];
            $data1['member_pic'] = $file_data['file_name'];
        }
        $data['meber_name'] = $this->input->post('meber_name');
        $data['designation'] = $this->input->post('designation');
        $data['committee_id'] = $this->input->post('committee_id');
        if ($this->db->update('sports_committee_members', $data, array('member_id' => $id))) {
            $data1['meber_name'] = $this->input->post('meber_name');
            $data1['designation'] = $this->input->post('designation');
            $data1['committee_id'] = $this->input->post('committee_id');
            $this->db->update('sports_committee_members', $data1, array('member_id' => $id));
            return true;
        }
    }

    function delete_committee_member($id) {
        $sql = "select * from `sports_committee_members` where `member_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/sports/committee_members/" . $row['member_pic'];
        $path1 = "public/sports/committee_members/thumb/" . $row['member_pic'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('sports_committee_members');
        $this->db->where('member_id', $id);
        $query = $this->db->delete();
        return 0;
    }

}
