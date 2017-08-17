<?php

class League_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function add_about_league(){
        $league_title = mysql_real_escape_string($_POST['league_title']);
        $content = mysql_real_escape_string($_POST['content']);
        $data = '';
        $data['league_id'] = '';
        $data['league_title'] = $league_title;
        $data['content'] = $content;
        $this->db->insert('about_league', $data);
        return true;
    }

    public function message_count(){
        return $this->db->count_all('about_league');
    }

    function get_about_league($per_pg, $offset){
        $this->db->order_by('league_id', 'ASC');
        $query = $this->db->get('about_league', $per_pg, $offset);
        return $query->result_array();
    }
    
    function getabout_league(){
        $this->db->order_by('league_id', 'ASC');
        $query = $this->db->get('about_league');
        return $query->result_array();
    }


    function edit_about_league($id){
        $this->db->where('league_id', $id);
        $query = $this->db->get('about_league');
        return $query->row_array();
    }

    function update_about_league(){
        $id = $this->input->post('pst_id');
        $data['league_title'] = $this->input->post('league_title');
        $data['content'] = $this->input->post('content');
        if ($this->db->update('about_league', $data, array('league_id' => $id))) {
            return true;
        }
    }
    function delete_about_league($id){
        $this->db->select();
        $this->db->from('about_league');
        $this->db->where('league_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
