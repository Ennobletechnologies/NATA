<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Telugu_newspapers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->model('telugu_model');
        $this->load->library('pagination');
        $this->load->helper('text');
    }

    public function index() {
        $data['title'] = ' Nata Telugu newspapers | Telugu Newspaper ';
        $data['keywords'] = 'Nata Telugu newspapers';
        $data['description'] = '';
        $total = $this->telugu_model->message_count();
        $per_pg = 10;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/telugu/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['telugu'] = $this->telugu_model->gettelugu($per_pg, $offset);
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('telugu/index', $data);
        $this->load->view('footer', $data);
    }

    public function nata_mata() {
        $data['title'] = 'Nata Mata| NATA Mata 2013 magazines';
        $data['keywords'] = 'Nata Mata, Nata Magazines 2013, nata Mata seva day’s book, nata Mata ugadi sanchika';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('telugu/nata_mata', $data);
        $this->load->view('footer', $data);
    }

}
