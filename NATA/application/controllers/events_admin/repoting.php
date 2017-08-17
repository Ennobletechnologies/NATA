<?php

if (!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Repoting extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('events_admin/index_model', 'admin');
    }

    function index() {
        $data['bookings'] = $this->admin->show_bookings(16);
        $this->load->view('events_admin/events/reports_head', $data);
        $this->load->view('events_admin/events/show', $data);
        $this->load->view('events_admin/events/footer', $data);
    }

    function show() {
        //$data['bookings'] = $this->admin->show_bookings(16);
        $data['title'] = 'Show Data';
        $this->load->view('events_admin/events/reports_head', $data);
        $this->load->view('events_admin/events/idol_report', $data);
        $this->load->view('events_admin/events/footer', $data);
    }

}
