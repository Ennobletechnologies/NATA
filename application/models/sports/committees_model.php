<?php

class Committees_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function add_committees() {
        $committee_name = mysql_real_escape_string($_POST['committee_name']);
        $data = '';
        $data['committee_id'] = '';
        $data['committee_name'] = $committee_name;
        $this->db->insert('sports_committees', $data);
        return true;
    }

    public function message_count() {
        return $this->db->count_all('sports_committees');
    }

    function getcommittees($per_pg, $offset) {
        $this->db->order_by('committee_id', 'ASC');
        $query = $this->db->get('sports_committees', $per_pg, $offset);
        return $query->result_array();
    }

    function edit_committees($id) {
        $this->db->where('committee_id', $id);
        $query = $this->db->get('sports_committees');
        return $query->row_array();
    }

    function update_committee() {
        $id = $this->input->post('pst_id');
        $data['committee_name'] = $this->input->post('committee_name');
        if ($this->db->update('sports_committees', $data, array('committee_id' => $id))) {
            return true;
        }
    }
    function delete_committee($id) {
        $this->db->select();
        $this->db->from('sports_committees');
        $this->db->where('committee_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
