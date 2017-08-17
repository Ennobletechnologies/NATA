<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_us extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('projects_model');
        $this->load->helper('text');
        $this->load->helper('html');
        $this->load->helper('email');
    }

    public function index() {
        $data['title'] = 'Nata Reach Us';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['all_pages'] = $this->news_model->get_all_pages();
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('contact_us', $data);
        $this->load->view('footer', $data);
    }

    public function form_process() {
        //print_r($_POST);        exit();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric|min_length[10]');
        $this->form_validation->set_rules('message', 'message', 'trim|required|min_length[10]');
        if ($this->form_validation->run() == FALSE) {
            $data['all_pages'] = $this->news_model->get_all_pages();
            $data['videos'] = $this->news_model->get_side_latest_videos();
            $data['tv'] = $this->news_model->get_tvcoverage();
            $data['sponsers'] = $this->news_model->getsponsers();
            $data['projects'] = $this->projects_model->get_projects();
            $data['title'] = 'Nata Reach Us';
            $this->load->view('index', $data);
            $this->load->view('contact_us', $data);
            $this->load->view('footer', $data);
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            //$to ='shankarinfogen@gmail.com';
            $this->load->library('email');
            $this->email->from($email, $name);
            $list = array('info@nataus.org');
            $this->email->to($list);
            //$this->email->cc($list);
            //$this->email->bcc('them@their-example.com'); 
            $this->email->subject('Nata website contact from  ' . $name);
            $this->email->message(
                    '<h3>You are recieved this message from</h3>' .
                    '<b>Name:</b>&nbsp;' . $name . '<br/>' .
                    '<b>Email:</b>&nbsp;' . $email . '<br/>' .
                    '<b>Mobile:</b>&nbsp;' . $mobile . '<br/>' .
                    '<b>Message:</b>&nbsp;' . $message);
            $this->email->set_mailtype("html");
            $this->email->send();
            if ($this->email) {
                $data['title'] = 'Email success | Nata';
                $data['keywords'] = '';
                $data['description'] = '';
                $data['all_pages'] = $this->news_model->get_all_pages();
                $data['videos'] = $this->news_model->get_side_latest_videos();
                $data['tv'] = $this->news_model->get_tvcoverage();
                $data['sponsers'] = $this->news_model->getsponsers();
                $data['projects'] = $this->projects_model->get_projects();
                $this->load->view('index', $data);
                $this->load->view('contact_success', $data);
                $this->load->view('footer', $data);
            } else {
                echo 'fail to send';
            }
        }
    }

}
