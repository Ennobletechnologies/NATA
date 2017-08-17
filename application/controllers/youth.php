<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Youth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('projects_model');
        $this->load->helper('text');
        $this->load->helper('html');
        $this->load->helper('email');
    }

    public function index() {
        $data['title'] = 'Nata youth Facebook | North American Telugu association youth';
        $data['keywords'] = 'Nata youth Facebook, nata youth, Telugu youth association in USA';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('youth_events', $data);
        $this->load->view('footer', $data);
    }

    public function social_activities() {
        $data['title'] = 'Nata social activities';
        $data['keywords'] = 'Nata social activities, recent social activities on nata, social activities in USA';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('social', $data);
        $this->load->view('footer', $data);
    }

    public function youth_events() {
        $data['title'] = 'Nata youth events';
        $data['keywords'] = 'Nata youth events, youth events in USA, Telugu youth events in American';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('youth', $data);
        $this->load->view('footer', $data);
    }

}
