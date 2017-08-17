<?php

class Teams_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function add_team() {
        $committee_name = mysql_real_escape_string($_POST['team_name']);
        $data = '';
        $data['team_id'] = '';
        $data['team_name'] = $committee_name;
        $data1 = '';
        $data1['team_id'] = '';
        $data1['team1_name'] = $committee_name;
        $this->db->insert('teams', $data);
        $this->db->insert('teams1', $data1);
        return true;
    }

    public function message_count() {
        return $this->db->count_all('teams');
    }

    function getteams($per_pg, $offset) {
        $this->db->order_by('team_id', 'ASC');
        $query = $this->db->get('teams', $per_pg, $offset);
        return $query->result_array();
    }

    function edit_team($id) {
        $this->db->where('team_id', $id);
        $query = $this->db->get('teams');
        return $query->row_array();
    }

    function update_team() {
        $id = $this->input->post('pst_id');
        $data['team_name'] = $this->input->post('team_name');
         $data1['team1_name'] = $this->input->post('team_name');
        if ($this->db->update('teams', $data, array('team_id' => $id)) && $this->db->update('teams1', $data1, array('team_id' => $id))) {
            return true;
        }
    }
    function delete_team($id) {
        $this->db->select();
        $this->db->from('teams');
        $this->db->where('team_id', $id);
        $query = $this->db->delete();
        $this->db->select();
        $this->db->from('teams1');
        $this->db->where('team_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
