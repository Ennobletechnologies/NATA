<?php

class Grounds_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function add_grounds(){
        $title = mysql_real_escape_string($_POST['title']);
        $content = mysql_real_escape_string($_POST['content']);
        $data = '';
        $data['ground_id'] = '';
        $data['title'] = $title;
        $data['content'] = $content;
        $this->db->insert('grounds_page', $data);
        return true;
    }

    public function message_count(){
        return $this->db->count_all('grounds_page');
    }

    function get_grounds($per_pg, $offset){
        $this->db->order_by('ground_id', 'ASC');
        $query = $this->db->get('grounds_page', $per_pg, $offset);
        return $query->result_array();
    }
    
    function getgrounds(){
        $this->db->order_by('ground_id', 'ASC');
        $query = $this->db->get('grounds_page');
        return $query->result_array();
    }

    function edit_grounds($id){
        $this->db->where('ground_id', $id);
        $query = $this->db->get('grounds_page');
        return $query->row_array();
    }

    function update_grounds(){
        $id = $this->input->post('pst_id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content');
        if ($this->db->update('grounds_page', $data, array('ground_id' => $id))) {
            return true;
        }
    }
    function delete_grounds($id){
        $this->db->select();
        $this->db->from('grounds_page');
        $this->db->where('ground_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
