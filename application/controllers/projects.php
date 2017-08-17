<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->library('pagination');
        $this->load->helper('text');
    }

    public function index() {
        $data['title'] = 'NATA Projects | NATA Community Service Projects in India';
        $data['keywords'] = 'Nata projects, nata community services Projects in India, safe drinking water plants, solar standalone street projects, toilets for schools';
        $data['description'] = '';
        $total = $this->projects_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'projects/index';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['projects'] = $this->projects_model->getprojects($per_pg, $offset);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('projects', $data);
        $this->load->view('footer', $data);
    }

    public function project_overview($id) {
        $data['title'] = 'NATA Projects | NATA Community Service Projects in India';
        $data['keywords'] = 'Nata projects, nata community services Projects in India, safe drinking water plants, solar standalone street projects, toilets for schools';
        $data['description'] = '';
        $data['projects'] = $this->projects_model->get_projects();
        $data['projects_data'] = $this->projects_model->edit_project($id);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('project_overview', $data);
        $this->load->view('footer', $data);
    }

}
