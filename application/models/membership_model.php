<?php

class Membership_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_abtmemship() {
        $this->db->order_by('am_id', 'desc');
        $query = $this->db->get('aboutmembership');
        return $query->result_array();
    }
    function get_member_benefits() {
        $this->db->order_by('mb_id', 'desc');
        $query = $this->db->get('member_benifits');
        return $query->result_array();
    }
    function get_change_of_address() {
        $this->db->order_by('ca_id', 'desc');
        $query = $this->db->get('change_of_address');
        return $query->result_array();
    }

    function edit_abtmemship() {
        $this->db->where('am_id', 1);
        $query = $this->db->get('aboutmembership');
        return $query->result_array();
    }

    function updateAMS() {
        $id = $this->input->post('id');
        $sql = "select * from `aboutmembership` where `am_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $data['am_title'] = mysql_real_escape_string($_POST['title']);
        $data['am_body'] = mysql_real_escape_string($_POST['body']);
        $this->db->update('aboutmembership', $data, array('am_id' => $id));
        return true;
    }

    function edit_memben() {
        $this->db->where('mb_id', 1);
        $query = $this->db->get('member_benifits');
        return $query->result_array();
    }

    function updateMemBen() {
        $id = $this->input->post('id');
        $sql = "select * from `member_benifits` where `mb_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $data['mb_title'] = mysql_real_escape_string($_POST['title']);
        $data['mb_body'] = mysql_real_escape_string($_POST['body']);
        $this->db->update('member_benifits', $data, array('mb_id' => $id));
        return true;
    }

    function edit_cadd() {
        $this->db->where('ca_id', 1);
        $query = $this->db->get('change_of_address');
        return $query->result_array();
    }

    function updateCAdd() {
        $id = $this->input->post('id');
        $sql = "select * from `change_of_address` where `ca_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $data['ca_title'] = mysql_real_escape_string($_POST['title']);
        $data['ca_body'] = mysql_real_escape_string($_POST['body']);
        $this->db->update('change_of_address', $data, array('ca_id' => $id));
        return true;
    }

}
