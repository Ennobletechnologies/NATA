<?php

class Team_members_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_teams(){
        $this->db->select('*');
        $this->db->from('teams');
        $query = $this->db->get();
        return $query->result_array();
    }


    function add_team_member() {
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $dob = mysql_real_escape_string($_POST['dob']);
        $team_id = mysql_real_escape_string($_POST['team_id']);
        $data = '';
        $data['member_id'] = '';
        $data['fname'] = $fname;
        $data['lname'] = $lname;
        $data['dob'] = $dob;
        $data['team_id'] = $team_id;
        $this->db->insert('team_members', $data);
        return true;
    }

    public function message_count() {
        return $this->db->count_all('team_members');
    }

    function get_team_members($per_pg, $offset) {
        $this->db->order_by('member_id', 'ASC');
        $this->db->join('teams','teams.team_id = team_members.team_id','left');
        $query = $this->db->get('team_members', $per_pg, $offset);
        return $query->result_array();
    }
    function getteams() {
        $query = $this->db->query("select DISTINCT team_name,team_members.team_id from `team_members`  LEFT JOIN teams ON teams.team_id = team_members.team_id ");
        return $query->result_array();
    }
    function getteam_members(){
        $this->db->select('*');
        $this->db->from('team_members');
        $this->db->join('teams','teams.team_id = team_members.team_id','left');
       $query = $this->db->get();
       return $query->result_array();
    }

    function edit_team_member($id) {
        $this->db->where('member_id', $id);
        $query = $this->db->get('team_members');
        return $query->row_array();
    }

    function update_team_member() {
        $id = $this->input->post('pst_id');
        $data['team_id'] = $this->input->post('team_id');
        $data['fname'] = $this->input->post('fname');
        $data['lname'] = $this->input->post('lname');
        $data['dob'] = $this->input->post('dob');
        if ($this->db->update('team_members', $data, array('member_id' => $id))) {
            return true;
        }
    }
    function delete_team_member($id) {
        $this->db->select();
        $this->db->from('team_members');
        $this->db->where('member_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
