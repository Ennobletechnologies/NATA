<?php

class Nata_sambaralu_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_nata_sambaralu() {
        $this->db->order_by('ns_id', 'desc');
        $query = $this->db->get('nata_sambaralu');
        return $query->result_array();
    }
    
    public function message_count() {
        return $this->db->count_all('nata_sambaralu');
    }

    function getnata_sambaralu($per_pg, $offset) {
        $this->db->order_by('ns_id', 'desc');
        $query = $this->db->get('nata_sambaralu', $per_pg, $offset);
        //$query = $this->db->query("SELECT * FROM `videos` ORDER BY `videos`.`videos_id`  DESC limit 1, 3");
        return $query->result_array();
    }

    //youtube thumb
    function youtube_thumbnail_url($url) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            // URL is Not valid
            return false;
        }
        $domain = parse_url($url, PHP_URL_HOST);
        if ($domain == 'www.youtube.com' OR $domain == 'youtube.com') { // http://www.youtube.com/watch?v=t7rtVX0bcj8&feature=topvideos_film
            if ($querystring = parse_url($url, PHP_URL_QUERY)) {
                parse_str($querystring);
                if (!empty($v))
                    return "http://img.youtube.com/vi/$v/0.jpg";
                else
                    return false;
            } else
                return false;
        }
        elseif ($domain == 'youtu.be') { // something like http://youtu.be/t7rtVX0bcj8
            $v = str_replace('/', '', parse_url($url, PHP_URL_PATH));
            return (empty($v)) ? false : "http://img.youtube.com/vi/$v/0.jpg";
        } else
            return false;
    }

    function insert_nata_sambaralu() {
        $url = $this->input->post('ns_image');
        $fname = $this->youtube_thumbnail_url($url); //full url
        $this->load->database();
        $title = mysql_real_escape_string($_POST['ns_title']);
        $desc = mysql_real_escape_string($_POST['ns_desc']);
        $date = $this->input->post('published_on');
        $data = '';
        $data['ns_id'] = '';
        $data['ns_title'] = $title;
        $data['ns_desc'] = $desc;
        $data['ns_image'] = $fname;
        $data['published_on'] = $date;
        $this->db->insert('nata_sambaralu', $data);
        return true;
    }

    function edit_nata_sambaralu($id) {
        $this->db->where('ns_id', $id);
        $query = $this->db->get('nata_sambaralu');
        return $query->row_array();
    }
    function updatenata_sambaralu()
	{
		//$name=$_FILES['videospic']['name'];
		$id=$this->input->post('pst_id');
		$data['ns_title']=$this->input->post('ns_title');
		$data['ns_desc']=$this->input->post('ns_desc');
                $data['published_on'] = $this->input->post('published_on');
		if($this->input->post('ns_image'))
		{
                $url = $this->input->post('ns_image');
                $data['ns_image']=$this->youtube_thumbnail_url($url);
		}
                //$data['videos_img']=$this->input->post('videospic');
                $this->db->update('nata_sambaralu',$data,array('ns_id'=>$id));
                return true;
    }

    function delete_nata_sambaralu($id) {
        $this->db->select();
        $this->db->from('nata_sambaralu');
        $this->db->where('ns_id', $id);
        $query = $this->db->delete();
        return 0;
    }

    function fullvideo($id) {
        $this->db->where('videos_id', $id);
        $query = $this->db->get('videos');
        return $query->result_array();
    }
    
    
}