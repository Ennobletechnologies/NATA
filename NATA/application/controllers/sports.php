<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('sports/committees_model', 'cm_model');
        $this->load->model('sports/commitee_members_model', 'cm_members_model');
        $this->load->model('sports/teams_model','teams');
        $this->load->model('sports/team_members_model','team_members');
        $this->load->model('sports/results_model','results');
        $this->load->model('sports/scrolling_model','scrolling');
        $this->load->model('sports/league_model','league');
        $this->load->model('sports/grounds_model','grounds');
        $this->load->model('sports/sports_gallery_model','gallery');
        $this->load->model('sports/sports_schedule_model','schedule');
        $this->load->library('pagination');
        $this->load->helper('text');
    }

    public function index() {
        $data['title'] = 'Nata Sports Schedule';
        $total = $this->schedule->message_count();
        $per_pg = 30;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'sports/index/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['sports_schedule'] = $this->schedule->get_sports_schedule($per_pg, $offset);
        $data['results'] = $this->results->getsports_results();
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $this->load->view('sports_header', $data);
        $this->load->view('sports_schedule',$data);
        $this->load->view('sports_footer', $data);
    }

    public function committee(){
        $data['title'] = 'Nata Sports Committe';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['committees'] = $this->cm_members_model->getcommittees();
        $data['committee_members'] = $this->cm_members_model->getcommittee_members();
        // print_r($data['committee_members']);exit;
        $this->load->view('sports_header', $data);
        $this->load->view('sports_committee',$data);
        $this->load->view('sports_footer', $data);
    }

    public function teams() {
        $data['title'] = 'Nata Sports Teams';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['total'] = $this->team_members->message_count();
        $data['teams'] = $this->team_members->getteams();
        $data['team_members'] = $this->team_members->getteam_members();
        $this->load->view('sports_header', $data);
        $this->load->view('sports_teams',$data);
        $this->load->view('sports_footer', $data);
    }

    public function grounds() {
        $data['title'] = 'Nata grounds';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['grounds'] = $this->grounds->getgrounds();
        $this->load->view('sports_header', $data);
        $this->load->view('grounds',$data);
        $this->load->view('sports_footer', $data);
    }

    public function results() {
        $data['title'] = 'Nata Sports Results';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['teams'] = $this->results->getsports_results();
        $this->load->view('sports_header', $data);
        $this->load->view('sports_results',$data);
        $this->load->view('sports_footer', $data);
    }

    public function galleries() {
        $data['title'] = 'Nata Sports Galleries';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['gallery'] = $this->gallery->getsports_gallery();
        $this->load->view('sports_header', $data);
        $this->load->view('sports_gallery',$data);
        $this->load->view('sports_footer', $data);
    }

    public function about_leauge() {
        $data['title'] = 'About Sports leauge';
        $data['scrolling'] = $this->scrolling->gettext_scrolling();
        $data['league'] = $this->league->getabout_league();
        $this->load->view('sports_header', $data);
        $this->load->view('about_league',$data);
        $this->load->view('sports_footer', $data);
    }
    public function youth() {
        $data['title'] = 'About Youth';
        $this->load->view('sport_youth', $data);
       // $this->load->view('about_league',$data);
        //$this->load->view('sports_footer', $data);
    }

}
