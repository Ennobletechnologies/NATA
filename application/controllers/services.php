<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class services extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('services_model');
        $this->load->model('projects_model');
        $this->load->model('news_model');
        $this->load->library('pagination');
        $this->load->helper('text');
        $this->load->helper('html');
        $this->load->helper('email');
    }

    function index() {
        $data['title'] = 'Nata services| North American Telugu Association services | various services done by nata team in India, Canada and America';
        $data['keywords'] = 'Nata services,   free health camps in AP by American Telugu teams, free services for children by USA Telugu association, services by nata';
        $data['description'] = '';
        $total = $this->services_model->message_count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'services/index/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['view_services'] = $this->services_model->getservices($per_pg, $offset);
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['north_news'] = $this->news_model->get_region('north');
        $data['south_news'] = $this->news_model->get_region('south');
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        //$data['view_services'] = $this->services_model->all_services();
        $this->load->view('index', $data);
        $this->load->view('services/services', $data);
        $this->load->view('footer', $data);
    }

    function view($id) {
        $data['title'] = 'Nata services| North American Telugu Association services | various services done by nata team in India, Canada and America';
        $data['keywords'] = 'Nata services,   free health camps in AP by American Telugu teams, free services for children by USA Telugu association, services by nata';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_latest_videos();
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['services_info'] = $this->services_model->servicesinfo($id);
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('services/services_more', $data);
        $this->load->view('footer', $data);
    }

    function donations() {
        $data['title'] = 'North American Telugu Association (NATA) donations';
        $data['keywords'] = 'Nata donations, donation form for nata, donors for Telugu association, more information about nata donations';
        $data['description'] = '';
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('donations/index', $data);
        $this->load->view('footer', $data);
    }

    function donation_preview() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip', 'Zip code', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone number', 'trim|required|numeric');
		$this->form_validation->set_rules('memo', 'Donation cause ', 'trim|required');
        $this->form_validation->set_rules('street', 'street', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('amount', 'amount', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->donations();
        } else {
            $data['title'] = 'North American Telugu Association (NATA) donations';
            $data['keywords'] = 'Nata donations, donation form for nata, donors for Telugu association, more information about nata donations';
            $data['description'] = '';
            $data['sponsers'] = $this->news_model->getoneSponser();
            $data['tv'] = $this->news_model->get_tvcoverage();
            $data['projects'] = $this->projects_model->get_projects();
            $data['view_news1'] = $this->news_model->get_topstories_limit();
            $this->load->view('index', $data);
            $this->load->view('donations/preview', $data);
            $this->load->view('footer', $data);
        }
    }

    function volunteers() {
        $data['title'] = 'Nata volunteers| North American Telugu Association volunteer form';
        $data['keywords'] = 'Nata volunteers, nata volunteer form, volunteers for nata events, nata volunteer’s information';
        $data['description'] = '';
        $data['sponsers'] = $this->news_model->getoneSponser();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('volunteers/index', $data);
        $this->load->view('footer', $data);
    }

    function form_process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('state', 'State', 'trim|required');
        $this->form_validation->set_rules('zip', 'Zip code', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone number', 'trim|required|numeric');
        $this->form_validation->set_rules('street', 'street', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('city', 'city', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('state', 'select state', 'trim|required|');
        $this->form_validation->set_rules('area', 'area of intrest', 'trim|required|');
        $this->form_validation->set_rules('exp', 'Volunteer experience', 'trim|required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->volunteers();
        } else {
            $email = $this->input->post('email');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $phone = $this->input->post('phone');
            $street = $this->input->post('street');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $zip = $this->input->post('zip');
            $area = $this->input->post('area');
            $exp = $this->input->post('exp');
            //$to ='shankarinfogen@gmail.com';
            $this->load->library('email');
            $this->email->from($email, $fname);
            $list = array('info@nataus.org');
            $this->email->to($list);
            //$this->email->cc($list);
            //$this->email->bcc('them@their-example.com'); 
            $this->email->subject('NATA Volunteers Information ' . $fname);
            $this->email->message(
                    '<h3>You are recieved this message from</h3>' .
                    '<b>Name:</b>&nbsp;' . $fname . '<br/>' .
                    '<b>Email:</b>&nbsp;' . $email . '<br/>' .
                    '<b>Mobile:</b>&nbsp;' . $phone . '<br/>' .
                    '<b>Street:</b>&nbsp;' . $street . '<br/>' .
                    '<b>City:</b>&nbsp;' . $city . '<br/>' .
                    '<b>State:</b>&nbsp;' . $state . '<br/>' .
                    '<b>Zip:</b>&nbsp;' . $zip . '<br/>' .
                    '<b>Area of intrest:</b>&nbsp;' . $area . '<br/>' .
                    '<b>Experience:</b>&nbsp;' . $exp);
            $this->email->set_mailtype("html");
            $this->email->send();
            if ($this->email) {
                $data['title'] = 'Email success | NATA';
                $data['keywords'] = '';
                $data['description'] = '';
                $data['sponsers'] = $this->news_model->getoneSponser();
                $data['tv'] = $this->news_model->get_tvcoverage();
                $data['projects'] = $this->projects_model->get_projects();
                $data['view_news1'] = $this->news_model->get_topstories_limit();
                $this->load->view('index', $data);
                $this->load->view('volunteers/thank_you', $data);
                $this->load->view('footer', $data);
            } else {
                echo 'fail to send';
            }
        }
    }

}
