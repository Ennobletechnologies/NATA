<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Membership extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->model('membership_model');
        $this->load->helper('text');
        $this->load->helper('html');
        $this->load->helper('email');
        //code for event calender lib and model ends	
    }

    public function index() {
        $data['title'] = 'Nata membership| Become a member of the nata family join now';
        $data['keywords'] = 'Nata membership, about nata membership, more details about nata membership, discounts on nata membership';
        $data['description'] = '';
        $data['abtmembership'] = $this->membership_model->get_abtmemship();
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('membership/index', $data);
        $this->load->view('footer', $data);
    }

    public function member_benefits() {
        $data['title'] = 'Nata member benefits';
        $data['keywords'] = 'Nata member benefits, benefits for nata member';
        $data['description'] = '';
        $data['mbenefits'] = $this->membership_model->get_member_benefits();
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('membership/member_benefits', $data);
        $this->load->view('footer', $data);
    }

    public function member_registration() {
        $data['title'] = 'Nata user registration| Nata application forms';
        $data['keywords'] = 'Nata user registration, new users for nata registration, nata application forms, application forms for new membership registration';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('membership/member_registration', $data);
        $this->load->view('footer', $data);
    }

    public function change_of_address() {
        $data['title'] = 'Nata change of address';
        $data['keywords'] = 'Nata change of address, changes in North American Telugu association membership';
        $data['description'] = '';
        $data['c_address'] = $this->membership_model->get_change_of_address();
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('membership/change_of_address', $data);
        $this->load->view('footer', $data);
    }

    public function membership_form() {
        $data['title'] = 'Nata membership application form';
        $data['keywords'] = 'North American Telugu association membership application form, Nata membership application form pdf, new nata membership application form';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('membership/membership_form', $data);
        $this->load->view('footer', $data);
    }

}
