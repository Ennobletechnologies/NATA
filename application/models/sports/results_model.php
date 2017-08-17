<?php

class Results_model extends CI_Model {

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


    function add_sports_results() {
        $played = mysql_real_escape_string($_POST['played']);
        $win = mysql_real_escape_string($_POST['win']);
        $lost = mysql_real_escape_string($_POST['lost']);
        $draw = mysql_real_escape_string($_POST['draw']);
        $points = mysql_real_escape_string($_POST['points']);
        $team_id = mysql_real_escape_string($_POST['team_id']);
        $data = '';
        $data['result_id'] = '';
        $data['played'] = $played;
        $data['win'] = $win;
        $data['lost'] = $lost;
        $data['draw'] = $draw;
        $data['points'] = $points;
        $data['team_id'] = $team_id;
        $this->db->insert('sports_results', $data);
        return true;
    }

    public function message_count() {
        return $this->db->count_all('sports_results');
    }

    function get_sports_results($per_pg, $offset) {
        $this->db->order_by('result_id', 'ASC');
        $this->db->join('teams','teams.team_id = sports_results.team_id','left');
        $query = $this->db->get('sports_results', $per_pg, $offset);
        return $query->result_array();
    }
    function getsports_results() {
        $this->db->order_by('result_id', 'ASC');
        $this->db->join('teams','teams.team_id = sports_results.team_id','left');
        $query = $this->db->get('sports_results');
        return $query->result_array();
    }

    function edit_sports_results($id) {
        $this->db->where('result_id', $id);
        $query = $this->db->get('sports_results');
        return $query->row_array();
    }

    function update_sports_results() {
        $id = $this->input->post('pst_id');
        $data['team_id'] = $this->input->post('team_id');
        $data['played'] = $this->input->post('played');
        $data['win'] = $this->input->post('win');
        $data['lost'] = $this->input->post('lost');
        $data['draw'] = $this->input->post('draw');
        $data['points'] = $this->input->post('points');
        if ($this->db->update('sports_results', $data, array('result_id' => $id))) {
            return true;
        }
    }
    function delete_sports_results($id) {
        $this->db->select();
        $this->db->from('sports_results');
        $this->db->where('result_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
