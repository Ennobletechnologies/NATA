<?php

class Projects_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_projects() {
        $this->db->order_by('project_id', 'desc');
        $this->db->limit('3');
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    public function message_count() {
        return $this->db->count_all('projects');
    }

    function getprojects($per_pg, $offset) {
        $this->db->order_by('project_id', 'desc');
        $query = $this->db->get('projects', $per_pg, $offset);
        return $query->result_array();
    }

    function insert_project() {
        //$this->load->database();
        $title = mysql_real_escape_string($_POST['project_title']);
        $desc = mysql_real_escape_string($_POST['project_desc']);
        $date = mysql_real_escape_string($_POST['published_on']);
        $config['upload_path'] = 'public/projects';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '90000';
        $config['encrypt_name'] = FALSE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('project_image');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/projects/thumb';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 290;
        $config['height'] = 160;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $fname = $file_data['file_name'];
        //copy("public/projects/" . $fname, "public/News/" . $fname);
        //copy("public/projects/thumb/" . $fname, "public/News/thumb/" . $fname);
        $data = '';
        $data['project_id'] = '';
        $data['project_title'] = $title;
        $data['project_desc'] = $desc;
        $data['project_image'] = $fname;
        $data['published_on'] = $date;

        $this->db->insert('projects', $data);

        @unlink("public/projects" . $fname);
        @unlink("public/projects/thumb" . $fname);
        return true;
    }

    function edit_project($id) {
        $this->db->where('project_id', $id);
        $query = $this->db->get('projects');
        return $query->row_array();
    }

    function updateproject() {
        $name = $_FILES['project_image']['name'];
        $id = $this->input->post('pst_id');
        if ($name != "") {
            $sql = "select * from `projects` where `project_id`=$id";
            $query = $this->db->query($sql);
            $row = $query->row_array();
            $path = "public/projects/" . $row['project_image'];
            $path1 = "public/projects/thumb/" . $row['project_image'];
            unlink($path);
            @unlink($path1);
            $config['upload_path'] = 'public/projects/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '90000';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('project_image');
            $file_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file_data['full_path'];
            $config['new_image'] = 'public/projects/thumb/';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = false;
            $config['thumb_marker'] = '';
            $config['width'] = 90;
            $config['height'] = 45;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $data['project_image'] = $file_data['file_name'];
            $data1['project_image'] = $file_data['file_name'];
        }
        $data['project_title'] = $this->input->post('project_title');
        $data['project_desc'] = $this->input->post('project_desc');
        if ($this->db->update('projects', $data, array('project_id' => $id))) {
            $data1['project_title'] = $this->input->post('project_title');
            $data1['project_desc'] = $this->input->post('project_desc');
            $data1['published_on'] = $this->input->post('published_on');
            $this->db->update('projects', $data1, array('project_id' => $id));
            //$_SESSION['update_topstory'] = true;
            return true;
        }
    }

    function delete_project($id) {
        $sql = "select * from `projects` where `project_id`=$id";
        $query = $this->db->query($sql);
        $row = $query->row_array();
        $path = "public/projects/" . $row['project_image'];
        $path1 = "public/projects/thumb/" . $row['project_image'];
        @unlink($path);
        @unlink($path1);
        $this->db->select();
        $this->db->from('projects');
        $this->db->where('project_id', $id);
        $query = $this->db->delete();
        //$_SESSION['delete_events'] = true;
        return 0;
    }

}
