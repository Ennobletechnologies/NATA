<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class events extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('events_model');
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->model('nata_sambaralu_model');
        $this->load->model('fund_raising_model');
        $this->load->model('nata_seva_model');
        $this->load->library('pagination');
    }

    function index() {
        $data['title'] = 'Nata Sambaralu';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['view_events'] = $this->events_model->get_events();
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('events/events', $data);
        $this->load->view('footer', $data);
    }

    function view($id) {
        $data['title'] = 'Nata Sambaralu Overview';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['events_info'] = $this->events_model->eventsinfo($id);
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('events/events_1', $data);
        $this->load->view('footer', $data);
    }

    /* New functions for events */

    function nata_sambaralu() {
        $data['title'] = 'Nata Events |Nata sambaralu| Overview on NATA Sambaralu';
        $data['keywords'] = 'Nata events, nata sambaralu, latest events in nata, upcoming events in nata, Celebrations of nata, nata 2015 sambaralu';
        $data['description'] = '';
        $total = $this->nata_sambaralu_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'events/nata_sambaralu/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['nsambaralu'] = $this->nata_sambaralu_model->getnata_sambaralu($per_pg, $offset);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('nata-sambaralu/index', $data);
        $this->load->view('footer', $data);
    }

    function nata_sambaralu_view($id) {
        $data['title'] = 'Nata Events |Nata sambaralu| Overview on NATA Sambaralu';
        $data['keywords'] = 'Nata events, nata sambaralu, latest events in nata, upcoming events in nata, Celebrations of nata, nata 2015 sambaralu';
        $data['description'] = '';
        $data['nsambaralu_data'] = $this->nata_sambaralu_model->edit_nata_sambaralu($id);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('nata-sambaralu/sambaralu_view', $data);
        $this->load->view('footer', $data);
    }

    function fund_raising() {
        $data['title'] = 'Nata fund raising |NATA fund raising for free health camps| Events and Conventions';
        $data['keywords'] = 'Nata fund raising, fund raising for free health camps by nata team';
        $data['description'] = '';
        $total = $this->fund_raising_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'events/fund_raising/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['fund'] = $this->fund_raising_model->getfund_raising($per_pg, $offset);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('fund-raising/index', $data);
        $this->load->view('footer', $data);
    }

    function fund_raising_view($id) {
        $data['title'] = 'Nata fund raising |NATA fund raising for free health camps| Events and Conventions';
        $data['keywords'] = 'Nata fund raising, fund raising for free health camps by nata team';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['fund_data'] = $this->fund_raising_model->edit_fund_raising($id);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('fund-raising/raising_view', $data);
        $this->load->view('footer', $data);
    }

    function nata_seva_days() {
        $data['title'] = 'Nata seva days | North America Telugu Association seva days scheduled in India';
        $data['keywords'] = 'Nata seva days, nata seva days in India, nata seva days in Andhra, nata seva days in Telangana, upcoming nata seva days';
        $data['description'] = '';
        $total = $this->nata_seva_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'events/nata_seva_days/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['nata_seva'] = $this->nata_seva_model->getnata_sevadays($per_pg, $offset);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('nata-sevadays/index', $data);
        $this->load->view('footer', $data);
    }

    function nata_seva_days_view($id) {
        $data['title'] = 'Nata seva days | North America Telugu Association seva days scheduled in India';
        $data['keywords'] = 'Nata seva days, nata seva days in India, nata seva days in Andhra, nata seva days in Telangana, upcoming nata seva days';
        $data['description'] = '';
        $data['nata_seva_data'] = $this->nata_seva_model->edit_nata_sevadays($id);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('nata-sevadays/seva_view', $data);
        $this->load->view('footer', $data);
    }

}
