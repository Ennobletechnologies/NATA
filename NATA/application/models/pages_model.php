<?php

class Pages_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
      public function add_page() {
          print_r($data);
          exit;
        $data = array(
            'page_title' => $this->input->post('page_title'),
            'page_content' => $this->input->post('page_content'),
            'published_on' => $this->input->post('published_on')
        );
        $this->db->insert('contact', $data);
    }
    
    public function get_all_pages($id = FALSE) {
        if ($id === FALSE) {
            //$this->db->limit(2);
            $this->db->order_by('page_id', 'desc');
            $query = $this->db->get('contact');
            return $query->result_array();
        }
        $query = $this->db->get_where('contact', array('page_id' => $id));
        return $query->row_array();
    }

    public function record_count() {
        return $this->db->count_all('contact');
    }

    public function fetch_pages($limit, $start) {
        $this->db->limit($limit, $start);
        //$this->db->order_by('id','desc');
        $query = $this->db->get("contact");
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

}
