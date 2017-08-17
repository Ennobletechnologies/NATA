<?php

class Scrolling_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function add_text_scrolling() {
        $scroll_text = mysql_real_escape_string($_POST['scroll_text']);
        $data = '';
        $data['scroll_id'] = '';
        $data['scroll_text'] = $scroll_text;
        $this->db->insert('sports_text_scrolling', $data);
        return true;
    }

    public function message_count(){
        return $this->db->count_all('sports_text_scrolling');
    }

    function get_text_scrolling($per_pg, $offset){
        $this->db->order_by('scroll_id', 'ASC');
        $query = $this->db->get('sports_text_scrolling', $per_pg, $offset);
        return $query->result_array();
    }
    function gettext_scrolling(){
        $this->db->order_by('scroll_id', 'ASC');
        $query = $this->db->get('sports_text_scrolling');
        return $query->result_array();
    }

    function edit_text_scrolling($id){
        $this->db->where('scroll_id', $id);
        $query = $this->db->get('sports_text_scrolling');
        return $query->row_array();
    }

    function update_text_scrolling(){
        $id = $this->input->post('pst_id');
        $data['scroll_text'] = $this->input->post('scroll_text');
        if ($this->db->update('sports_text_scrolling', $data, array('scroll_id' => $id))) {
            return true;
        }
    }
    function delete_text_scrolling($id){
        $this->db->select();
        $this->db->from('sports_text_scrolling');
        $this->db->where('scroll_id', $id);
        $query = $this->db->delete();
        return 0;
    }
}
