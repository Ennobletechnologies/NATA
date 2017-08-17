<?php

class Sports_schedule_model extends CI_Model {

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
    public function get_teams1(){
        $this->db->select('*');
        $this->db->from('teams1');
        $query = $this->db->get();
        return $query->result_array();
    }


    function add_sports_schedule() {
        $schedule_date = mysql_real_escape_string($_POST['schedule_date']);
        $schedule_time = mysql_real_escape_string($_POST['schedule_time']);
        $schedule_time_minutes = mysql_real_escape_string($_POST['schedule_time_minutes']);
        $schedule_time_in = mysql_real_escape_string($_POST['schedule_time_in']);
        $home_team = mysql_real_escape_string($_POST['home_team']);
        $away_team = mysql_real_escape_string($_POST['away_team']);
        $ground = mysql_real_escape_string($_POST['ground']);
        $ground_responsibility = mysql_real_escape_string($_POST['ground_responsibility']);
        $data = '';
        $data['schedule_id'] = '';
        $data['schedule_date'] = $schedule_date;
        $data['schedule_time'] = $schedule_time;
        $data['schedule_time_minutes'] = $schedule_time_minutes;
        $data['schedule_time_in'] = $schedule_time_in;
        $data['home_team'] = $home_team;
        $data['away_team'] = $away_team;
        $data['ground'] = $ground;
        $data['ground_responsibility'] = $ground_responsibility;
        $this->db->insert('sports_schedule', $data);
        return true;
    }

    public function message_count() {
        return $this->db->count_all('sports_schedule');
    }

    function get_sports_schedule($per_pg, $offset) {
        $this->db->order_by('schedule_id', 'ASC');
        $this->db->join('teams','teams.team_id = sports_schedule.home_team','left');
        $this->db->join('teams1','teams1.team_id = sports_schedule.away_team','left');
        $query = $this->db->get('sports_schedule', $per_pg, $offset);
        return $query->result_array();
    }

    function edit_sports_schedule($id) {
        $this->db->where('schedule_id', $id);
        $query = $this->db->get('sports_schedule');
        return $query->row_array();
    }

    function update_sports_schedule() {
        $id = $this->input->post('pst_id');
        $data['schedule_date'] = $this->input->post('schedule_date');
        $data['schedule_time'] = $this->input->post('schedule_time');
        $data['schedule_time_minutes'] = $this->input->post('schedule_time_minutes');
        $data['schedule_time_in'] = $this->input->post('schedule_time_in');
        $data['home_team'] = $this->input->post('home_team');
        $data['away_team'] = $this->input->post('away_team');
        $data['ground'] = $this->input->post('ground');
        $data['ground_responsibility'] = $this->input->post('ground_responsibility');
        if ($this->db->update('sports_schedule', $data, array('schedule_id' => $id))) {
            return true;
        }
    }
    function delete_sports_schedule($id) {
        $this->db->select();
        $this->db->from('sports_schedule');
        $this->db->where('schedule_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
