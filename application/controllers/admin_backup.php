<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    private $loggeed_in;
    public $data = array();
    public $user_level;

    public function __construct() {
        parent::__construct();
        $data['base'] = $this->config->item('base_url');
        $this->load->model('user_model');
        $this->load->model('news_model');
        $this->load->model('events_model');
        $this->load->model('services_model');
        $this->load->model('about_model');
        $this->load->model('projects_model');
        $this->load->model('nata_sambaralu_model');
        $this->load->model('fund_raising_model');
        $this->load->model('nata_seva_model');
        $this->load->model('evencal_model', 'evencal');
        $this->load->library('calendar', $this->_setting());
        $this->loggeed_in = $this->user_model->checkLogin();
        $this->load->library('pagination');
    }

    function index() {
        $user_level = $this->session->userdata("user_level");
        if ($user_level == '1') { //echo $user_level;
            $this->load->view('admin/home');
            //$this->load->view('footer');
        }
        if ($user_level == '2') {
            $this->load->view('admin/regions');
            //$this->load->view('footer');
        }
        if ($user_level == '3') {
            $user_id = $this->session->userdata('user_id');
            $data['profile'] = $this->user_model->profile($user_id);
            $this->load->view('admin/members-dashboard/index', $data);
        }
        if ($user_level == '') {
            $data['title'] = 'Nata Login ';
            $this->load->view("login/login_view.php", $data);
        }
    }

    function users() {
        $data['admin_users'] = $this->user_model->users();
        $this->load->view('admin/admin_users', $data);
    }

    function editUsers($id) {
        $data['editUsers'] = $this->user_model->editUsers($id);
        $this->load->view('admin/editUsers', $data);
    }

    function updateUsers() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/editUsers');
        } else {
            if ($this->user_model->updateUsers()) {
                redirect('admin/users', 'refresh');
            }
        }
    }

    //members dashboard
    function dashboard() {
        $user_id = $this->session->userdata('user_id');
        $data['profile'] = $this->user_model->profile($user_id);
        $this->load->view('admin/members-dashboard/index', $data);
    }

    //members dashboard ends
    //Normal Users
    function members() {
        $data['admin_users'] = $this->user_model->normal_users();
        $this->load->view('admin/normal_users', $data);
    }

    function editMembers($id) {
        $data['editUsers'] = $this->user_model->editMember($id);
        $this->load->view('admin/editMembers', $data);
    }

    function updateMembers() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/editMembers');
        } else {
            if ($this->user_model->updateMember()) {
                redirect('admin/members', 'refresh');
            }
        }
    }

    function updateProfile() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/members-dashboard/index');
        } else {
            if ($this->user_model->updateMember()) {
                redirect('admin/dashboard', 'refresh');
            }
        }
    }

    //normal users ends
    function aboutInsert() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Content', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addAbout');
        } else {
            if ($this->about_model->aboutInsert()) {
                echo "About inserted successfully";
            }
        }
    }

    function aboutData() {
        $data['view_topstory'] = $this->about_model->get_about();
        $this->load->view('admin/aboutus', $data);
    }

    function editAbout($id) {
        $data['edit_about'] = $this->about_model->edit_about($id);
        $this->load->view('admin/aboutusEdit', $data);
    }

    function updateAbout() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/aboutusEdit');
        } else {
            if ($this->about_model->updateAbout()) {
                redirect('admin/aboutData', 'refresh');
            }
        }
    }

    //about part ends
    //president msg
    function message() {
        //for display president msg
        $data['msg'] = $this->news_model->get_message();
        $this->load->view('admin/president_msg/messages', $data);
    }

    function add_president_msg() {
        $this->load->view('admin/president_msg/add_president_msg');
    }

    function add_new_msg() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/president_msg/add_president_msg');
        } else {
            if ($this->news_model->insert_msg()) {
                redirect('admin/message', 'refresh');
            }
        }
    }

    function EditMsg($id) {
        $data['editMsg'] = $this->news_model->edit_msg($id);
        $this->load->view('admin/president_msg/edit', $data);
    }

    function update_msg() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/president_msg/edit');
        } else {
            if ($this->news_model->update_msg()) {
                redirect('admin/message', 'refresh');
            }
        }
    }

    //president msg ends
    //news part
    function media() {
        $user_level = $this->session->userdata("user_level");
        if ($user_level == 1) {
            $data['view_topstory'] = $this->news_model->get_news_admin();
            $this->load->view('admin/media', $data);
        }
        if ($user_level == 2) {
            $data['view_topstory'] = $this->news_model->user_level_news();
            $this->load->view('admin/region_news_edit', $data);
        }
        //$this->load->view('admin/reg_name',$data);
    }

    function news() {
        $user_level = $this->session->userdata("user_level");
        if ($user_level == 1) {
            $data['view_topstory'] = $this->news_model->get_news_admin();
            $this->load->view('admin/allnews', $data);
        }
        if ($user_level == 2) {
            $data['view_topstory'] = $this->news_model->user_level_news();
            $this->load->view('admin/region_news_edit', $data);
        }
        //$this->load->view('admin/reg_name',$data);
    }

    function addnews() {
        $data['reg_name'] = $this->user_model->check_reg();
        //checking region
        $this->load->view('admin/addnews', $data);
    }

    function EditNews($id) {
        $data['edit_topstory'] = $this->news_model->edit_topstory($id);
        $this->load->view('admin/newsedit', $data);
    }

    function updatenews() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/newsedit');
        } else {
            if ($this->news_model->updatenews()) {
                redirect('admin/news', 'refresh');
            }
        }
    }

    function insertnews() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addnews');
        } else {
            if ($this->news_model->insert_news()) {
                redirect('admin/news', 'refresh');
            }
        }
    }

    function DeleteNews($id) {

        $data['query'] = $this->news_model->delete_news($id);
        if ($data['query'] == 0) {
            redirect('admin/news', 'refresh');
        }
    }

    function newsletter() {
        $data['newsletter'] = $this->news_model->get_newsletter();
        $this->load->view('admin/news_letter/index', $data);
    }

    function addNewsLetter() {
        $this->load->view('admin/news_letter/add');
    }

    function editNewsLetter($id) {
        $data['edit_nl'] = $this->news_model->edit_nl($id);
        $this->load->view('admin/news_letter/edit', $data);
    }

    function updatenewsletter() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/news_letter/edit');
        } else {
            $this->news_model->updateNewsLetter();
            redirect('admin/newsletter', 'refresh');
        }
    }

    function deleteNewsLetter($id) {

        $data['query'] = $this->news_model->delete_nl($id);
        if ($data['query'] == 0) {
            redirect('admin/newsletter', 'refresh');
        }
    }

    /* function insertNewsLetters() {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');
      if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/news_letter/add');
      } else {
      if ($this->news_model->insert_newsletters()) {
      redirect('admin/news_letters', 'refresh');
      }
      }
      } */

    function tvcoverage() {
        $data['tvcoverage'] = $this->news_model->get_tvcoverage();
        $this->load->view('admin/tvcoverage/index', $data);
    }

    function addtvcoverage() {
        $this->load->view('admin/tvcoverage/add');
    }

    function edittvcoverage($id) {
        $data['edit_tvcoverage'] = $this->news_model->edit_tvcoverage($id);
        $this->load->view('admin/tvcoverage/edit', $data);
    }

    function updatetvcoverage() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/tvcoverage/edit');
        } else {
            $this->news_model->updatetvcoverage();
            redirect('admin/tvcoverage', 'refresh');
        }
    }

    function deletetvcoverage($id) {

        $data['query'] = $this->news_model->delete_tvcoverage($id);
        if ($data['query'] == 0) {
            redirect('admin/tvcoverage', 'refresh');
        }
    }

    //print coverage starts
    function printcoverage() {
        $data['printcoverage'] = $this->news_model->get_printcoverage();
        $this->load->view('admin/printcoverage/index', $data);
    }

    function addprintcoverage() {
        $this->load->view('admin/printcoverage/add');
    }

    function editprintcoverage($id) {
        $data['edit_printcoverage'] = $this->news_model->edit_printcoverage($id);
        $this->load->view('admin/printcoverage/edit', $data);
    }

    function updateprintcoverage() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/printcoverage/edit');
        } else {
            $this->news_model->updateprintcoverage();
            redirect('admin/printcoverage', 'refresh');
        }
    }

    function deleteprintcoverage($id) {

        $data['query'] = $this->news_model->delete_pc($id);
        if ($data['query'] == 0) {
            redirect('admin/printcoverage', 'refresh');
        }
    }

    //print coverage ends
    //news part ends
    //Banner part
    function gallery() {
        $total = $this->news_model->message_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/gallery/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['query'] = $this->news_model->getAdminBanners($per_pg, $offset);

        //$data['banner']=$this->news_model->getBanners();
        $this->load->view('admin/banner1', $data);
    }

    function addBannerImage() {
        $data['album'] = $this->news_model->get_album();
        $this->load->view('admin/addBanner', $data);
    }

    function addBanner() { //multi part
        //images will uploaded to banner table
        $title = $this->input->post('title');
        $desc = 'No Desc';
        $alb_id = $this->input->post('alb_id');
        $name_array = array();
        $res = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {
                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = 'public/banner/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '40000';
                //$config['max_width']  = '4242';
                //$config['max_height']  = '2828';
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = $data['file_name'];
                //$this->news_model->multi_img($id='',$data['file_name']);
                if ($this->news_model->addBanner($data['file_name'], $title, $desc, $alb_id)) {
                    $res[] = $data['file_name'];
                }
            }
        if (count($name_array) == count($res)) {
            echo count($name_array) . " files uploaded";
            redirect('admin/gallery');
        } else {
            echo "some error occured while upload ,Please check your connectivity";
        }
        //multipart ends
    }

    function deleteBanner($id) {
        $this->news_model->deleteBanner($id);
        $data['banner'] = $this->news_model->getBanners();
        $this->load->view('admin/banner', $data);
    }

    //Banner part ends
    //services
    function services() {
        $data['services'] = $this->services_model->all_services();
        $this->load->view('admin/allservices', $data);
    }

    function addservices() {
        $this->load->view('admin/addservices');
    }

    function EditServices($id) {
        $data['edit_services'] = $this->services_model->edit_services($id);
        $this->load->view('admin/servicesedit', $data);
    }

    function updateServices() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('services_title', 'services_title', 'required');
        $this->form_validation->set_rules('services_description', 'services_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/servicesedit');
        } else {
            if ($this->services_model->update_services()) {
                redirect('admin/services', 'refresh');
            }
        }
    }

    function insert_services() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('services_title', 'services_title', 'required');
        $this->form_validation->set_rules('services_description', 'services_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addservices');
        } else {
            if ($this->services_model->insert_services()) {
                redirect('admin/services', 'refresh');
            }
        }
    }

    function DeleteServices($id) {

        $data['query'] = $this->services_model->delete_services($id);
        if ($data['query'] == 0) {
            redirect('admin/services', 'refresh');
        }
    }

    //services ends
    //Events starts
    function events() {
        $data['view_topstory'] = $this->events_model->get_topstories();
        $this->load->view('admin/allevents', $data);
    }

    function addevents() {
        $this->load->view('admin/addevents');
    }

    function EditEvents($id) {
        $data['edit_topstory'] = $this->events_model->edit_topstory($id);
        $this->load->view('admin/eventsedit', $data);
    }

    function updateevents() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('events_title', 'events_title', 'required');
        $this->form_validation->set_rules('events_description', 'events_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/eventsedit');
        } else {
            if ($this->events_model->updateevents()) {
                redirect('admin/events', 'refresh');
            }
        }
    }

    function insertevents() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('events_title', 'events_title', 'required');
        $this->form_validation->set_rules('events_description', 'events_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addevents');
        } else {
            if ($this->events_model->insert_events()) {
                redirect('admin/events', 'refresh');
            }
        }
    }

    function DeleteEvents($id) {

        $data['query'] = $this->events_model->delete_events($id);
        if ($data['query'] == 0) {
            redirect('admin/events', 'refresh');
        }
    }

    //Events ends
    //admin user
    function addUser() {
        $loggeed_in = $this->loggeed_in = $this->user_model->checkLogin();
        if ($loggeed_in) {
            $data['title'] = 'Add Admin User';
            $this->load->view('menu');
            $this->load->view("admin/addUser.php", $data);
            $this->load->view('footer', $data);
        } else {
            redirect('user');
        }
    }

    //admin user ends
    //events calender starts
    function admincal($year = null, $month = null, $day = null) {
        $year = (empty($year) || !is_numeric($year)) ? date('Y') : $year;
        $month = (is_numeric($month) && $month > 0 && $month < 13) ? $month : date('m');
        $day = (is_numeric($day) && $day > 0 && $day < 31) ? $day : date('d');

        $date = $this->evencal->getDateEvent($year, $month);
        $cur_event = $this->evencal->getEvent($year, $month, $day);
        $data = array(
            'notes' => $this->calendar->generate($year, $month, $date),
            'year' => $year,
            'mon' => $month,
            'month' => $this->_month($month),
            'day' => $day,
            'events' => $cur_event
        );
        $this->load->view('admin/evencal/index', $data);
    }

    function _month($month) {
// for calender
        $month = (int) $month;
        switch ($month) {
            case 1 : $month = 'Januari';
                Break;
            case 2 : $month = 'Februari';
                Break;
            case 3 : $month = 'Maret';
                Break;
            case 4 : $month = 'April';
                Break;
            case 5 : $month = 'Mei';
                Break;
            case 6 : $month = 'Juni';
                Break;
            case 7 : $month = 'Juli';
                Break;
            case 8 : $month = 'Agustus';
                Break;
            case 9 : $month = 'September';
                Break;
            case 10 : $month = 'Oktober';
                Break;
            case 11 : $month = 'November';
                Break;
            case 12 : $month = 'Desember';
                Break;
        }
        return $month;
    }

    // get detail event for selected date
    function detail_event() {
        $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
        $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
        $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
        } else {
            $data = $this->evencal->getEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'));
            if ($data == null) {
                echo json_encode(array('status' => false, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
            } else {
                echo json_encode(array('status' => true, 'data' => $data));
            }
        }
    }

    // popup for adding event
    function add_event() {
        $data = array(
            'day' => $this->input->post('day'),
            'mon' => $this->input->post('mon'),
            'month' => $this->_month($this->input->post('mon')),
            'year' => $this->input->post('year'),
        );
        $this->load->view('admin/evencal/add_event', $data);
    }

    // do adding event for selected date
    function do_add() {
        $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
        $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
        $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
        $this->form_validation->set_rules('hour', 'Hour', 'trim|required|xss_clean');
        $this->form_validation->set_rules('minute', 'Minute', 'trim|required|xss_clean');
        $this->form_validation->set_rules('event', 'Event', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false, 'title_msg' => 'Error', 'msg' => 'Please insert valid value'));
        } else {
            $this->evencal->addEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'), $this->input->post('hour') . ":" . $this->input->post('minute') . ":00", $this->input->post('event'));
            echo json_encode(array('status' => true, 'time' => $this->input->post('time'), 'event' => $this->input->post('event')));
        }
    }

    // delete event
    function delete_event() {
        $this->form_validation->set_rules('year', 'Year', 'trim|required|is_natural_no_zero|xss_clean');
        $this->form_validation->set_rules('mon', 'Month', 'trim|required|is_natural_no_zero|less_than[13]|xss_clean');
        $this->form_validation->set_rules('day', 'Day', 'trim|required|is_natural_no_zero|less_than[32]|xss_clean');
        $this->form_validation->set_rules('del', 'ID', 'trim|required|is_natural_no_zero|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false));
        } else {
            $rows = $this->evencal->deleteEvent($this->input->post('year'), $this->input->post('mon'), $this->input->post('day'), $this->input->post('del'));
            if ($rows > 0) {
                echo json_encode(array('status' => true, 'row' => $rows));
            } else {
                echo json_encode(array('status' => true, 'row' => $rows, 'title_msg' => 'No Event', 'msg' => 'There\'s no event in this date'));
            }
        }
    }

    // same as index() function
    function detail($year = null, $month = null, $day = null) {
        $year = (empty($year) || !is_numeric($year)) ? date('Y') : $year;
        $month = (is_numeric($month) && $month > 0 && $month < 13) ? $month : date('m');
        $day = (is_numeric($day) && $day > 0 && $day < 31) ? $day : date('d');

        $date = $this->evencal->getDateEvent($year, $month);
        $cur_event = $this->evencal->getEvent($year, $month, $day);
        $data = array(
            'notes' => $this->calendar->generate($year, $month, $date),
            'year' => $year,
            'mon' => $month,
            'month' => $this->_month($month),
            'day' => $day,
            'events' => $cur_event
        );
        $this->load->view('admin/evencal/index', $data);
    }

    // setting for calendar
    function _setting() {
        return array(
            'start_day' => 'monday',
            'show_next_prev' => true,
            'next_prev_url' => site_url('admin/admincal'),
            'month_type' => 'long',
            'day_type' => 'short',
            'template' => '{table_open}<table class="date">{/table_open}
								   {heading_row_start}&nbsp;{/heading_row_start}
								   {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date" title="Previous Month">&lt;&lt;Prev</a>{/heading_previous_cell}
								   {heading_title_cell}{heading}{/heading_title_cell}
								   {heading_next_cell}<a href="{next_url}" class="next_date"  title="Next Month">Next&gt;&gt;</a></caption>{/heading_next_cell}
								   {heading_row_end}<col class="weekday" span="5"><col class="weekend_sat"><col class="weekend_sun">{/heading_row_end}
								   {week_row_start}<thead><tr>{/week_row_start}
								   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
								   {week_row_end}</tr></thead><tbody>{/week_row_end}
								   {cal_row_start}<tr>{/cal_row_start}
								   {cal_cell_start}<td>{/cal_cell_start}
								   {cal_cell_content}<div class="date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content}
								   {cal_cell_content_today}<div class="active_date_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">{content}</span></div>{/cal_cell_content_today}
								   {cal_cell_no_content}<div class="no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content}
								   {cal_cell_no_content_today}<div class="active_no_event detail" val="{day}"><span class="date">{day}</span><span class="event d{day}">&nbsp;</span></div>{/cal_cell_no_content_today}
								   {cal_cell_blank}&nbsp;{/cal_cell_blank}
								   {cal_cell_end}</td>{/cal_cell_end}
								   {cal_row_end}</tr>{/cal_row_end}
								   {table_close}</tbody></table>{/table_close}');
    }

    //events calender ends
    //news part
    function policies() {
        $user_level = $this->session->userdata("user_level");
        if ($user_level == 1) {
            $data['policies'] = $this->news_model->get_policies();
            $this->load->view('admin/policies/allpolicies', $data);
        }
        if ($user_level == 2) {
            $data['view_topstory'] = $this->news_model->user_level_policies();
            $this->load->view('admin/policies/region_policies_edit', $data);
        }
        //$this->load->view('admin/reg_name',$data);
    }

    function addpolicies() {
        $this->load->view('admin/policies/addpolicies');
    }

    function EditPolicies($id) {
        $data['edit_topstory'] = $this->news_model->edit_policies($id);
        $this->load->view('admin/policies/policiesedit', $data);
    }

    function updatepolicies() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/policies/policiesedit');
        } else {
            if ($this->news_model->updatepolicies()) {
                redirect('admin/policies', 'refresh');
            }
        }
    }

    function insertpolicies() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/policies/addpolicies');
        } else {
            if ($this->news_model->insert_policies()) {
                redirect('admin/policies', 'refresh');
            }
        }
    }

    function DeletePolicies($id) {

        $data['query'] = $this->news_model->delete_policies($id);
        if ($data['query'] == 0) {
            redirect('admin/policies', 'refresh');
        }
    }

    //news part ends
    //sponsers
    function sponsers() {
        $data['sponsers'] = $this->news_model->getSponsers();
        $this->load->view('admin/sponsers/index', $data);
    }

    function addSponsers() {
        $this->load->view('admin/sponsers/addSponsers');
    }

    function addSponsersImage() {
        //images will uploaded to banner part
        $config['upload_path'] = 'public/sponsers/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '9000';
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('spn_image');
        $file_data = $this->upload->data();
        $config['image_library'] = 'gd2';
        $config['source_image'] = $file_data['full_path'];
        $config['new_image'] = 'public/sponsers/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = false;
        $config['thumb_marker'] = '';
        $config['width'] = 215;
        $config['height'] = 63;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        //$banner_title=$this->input->post('banner_title');
        //$banner_desc=$this->input->post('banner_desc');
        if ($this->news_model->addsponsers($file_data['file_name'])) {
            redirect('admin/sponsers');
        }
    }

    function deletesponsers($id) {
        $this->news_model->deleteSponsers($id);
        $data['sponsers'] = $this->news_model->getsponsers();
        $this->load->view('admin/sponsers/index', $data);
    }

    //sponsers end
//videos part starts
    function videos() {
        $data['videos'] = $this->news_model->get_videos();
        $this->load->view('admin/allvideos', $data);
    }

    function addVideos() {
        $this->load->view('admin/addVideos');
    }

    function insertVideos() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/addVideos');
        } else {
            if ($this->news_model->insert_videos()) {
                redirect('admin/videos', 'refresh');
            }
        }
    }

    function EditVideos($id) {
        $data['editVideos'] = $this->news_model->edit_videos($id);
        $this->load->view('admin/editVideos', $data);
    }

    function updateVideos() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/editVideos');
        } else {
            if ($this->news_model->updateVideos()) {
                redirect('admin/videos', 'refresh');
            }
        }
    }

    function DeleteVideos($id) {

        $data['query'] = $this->news_model->delete_videos($id);
        if ($data['query'] == 0) {
            redirect('admin/videos', 'refresh');
        }
    }

    //videos part ends	
//news-letters
    function news_letters() {
        $data['news_letters'] = $this->news_model->get_newsletters();
        $this->load->view('admin/newsletters');
    }

    function addNewsLetters() {
        $this->load->view('admin/addNewsLetters');
    }

//news-letters ends
//album part
    function album() {

        $data['album'] = $this->news_model->get_album();
        $this->load->view('admin/album/allalbums', $data);
    }

    function addalbum() {
        $this->load->view('admin/album/addalbum');
    }

    function insertalbum() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/album/addalbum');
        } else {
            if ($this->news_model->insert_album()) {
                redirect('admin/album', 'refresh');
            }
        }
    }

    function EditAlbum($id) {
        $data['edit_album'] = $this->news_model->edit_album($id);
        $this->load->view('admin/album/albumedit', $data);
    }

    function updatealbum() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/album/albumedit');
        } else {
            if ($this->news_model->update_alb()) {
                redirect('admin/album', 'refresh');
            }
        }
    }

    function DeleteAlbum($id) {

        $data['query'] = $this->news_model->delete_album($id);
        if ($data['query'] == 0) {
            redirect('admin/album', 'refresh');
        }
    }

//album part ends
//home slider
    function sliders() {
        $data['sliders'] = $this->news_model->getSlider();
        $this->load->view('admin/sliders/index', $data);
    }

    function deleteSlider($id) {

        $data['query'] = $this->news_model->delete_slider($id);
        if ($data['query'] == 0) {
            redirect('admin/sliders', 'refresh');
        }
    }

    function addSliders() {
        $this->load->view('admin/header');
        $this->load->view('admin/sliders/upload_form', array('error' => ' '));
        $this->load->view('admin/footer');
    }

    //home slider ends
    /* function addContact()
      {
      $this->load->view('admin/header');
      $this->load->view('admin/contact/index',array('error' => ' ' ));
      $this->load->view('admin/footer');
      }

      //My New Code
      function insertcontact()
      {
      //print_r($_POST);
      $this->load->library('form_validation');
      $this->form_validation->set_rules('title','title','required');
      if($this->form_validation->run()==FALSE)
      {
      $this->load->view('admin/contact/index');
      }
      else
      {
      if($this->news_model->cont_insert())
      {
      redirect('admin/addContact', 'refresh');
      }
      }
      } */
//Calender Events update
    function contact() {
        $data['all_pages'] = $this->news_model->get_all_pages();
        $this->load->view('admin/contact/index', $data);
    }

    function add_contact() {
        $data['all_pages'] = $this->news_model->get_all_pages();
        $this->load->view('admin/contact/add_form', array('error' => ' '));
    }

    function edit_contact($id = FALSE) {
        $data['all_pages_data'] = $this->news_model->get_all_pages($id);
        if ($id) {
            $this->load->view('admin/contact/add_form', $data);
        } else {
            $this->load->view('admin/contact/index', $data);
        }
    }

    function insertcontact($id = FALSE) {
        // print_r($_POST);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('page_title', 'page title', 'required');
        $this->form_validation->set_rules('page_content', 'page content', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/contact/add_form');
        } else {
            $id = $this->input->post('pst_id');
            if ($id) {                //echo $pst_id;                exit();
                $this->news_model->update_contact($id);
                redirect('admin/contact', 'refresh');
            } else {
                if ($this->news_model->cont_insert()) {
                    redirect('admin/contact', 'refresh');
                }
            }
        }
    }

    function delete_contact($id = 1) {
        $this->news_model->delete_contact($id);
        redirect('admin/contact', 'refresh');
    }

    function projects() {
        $total = $this->projects_model->message_count();
        $per_pg = 1;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/projects/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['projects'] = $this->projects_model->getprojects($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/projects/index', $data);
    }

    function add_project() {
        $this->load->view('admin/projects/add_form');
    }

    function insertproject() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('project_title', 'Project title', 'required');
        $this->form_validation->set_rules('project_desc', 'project description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/projects/add_form');
        } else {
            if ($this->projects_model->insert_project()) {
                redirect('admin/projects', 'refresh');
            }
        }
    }

    function edit_project($id) {
        $data['projects_data'] = $this->projects_model->edit_project($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/projects/edit_form', $data);
    }

    function updateproject() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('project_title', 'project title', 'required');
        $this->form_validation->set_rules('project_desc', 'project description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/projects/edit_form');
        } else {
            if ($this->projects_model->updateproject()) {
                redirect('admin/projects', 'refresh');
            }
        }
    }

    function delete_project($id) {
        $data['query'] = $this->projects_model->delete_project($id);
        if ($data['query'] == 0) {
            redirect('admin/projects', 'refresh');
        }
    }

    function calup($id) {
        $data['eventdata'] = $this->events_model->getEventsById($id);
        $this->session->set_userdata('idevent', $id);
        //$var = $this->session->userdata;
        //$data['eventid']=$id;
        $this->load->view('admin/evencal/update', $data);
    }

    function evencalImg() {
        //print_r($_POST);
        if ($this->news_model->updateImg()) {
            redirect('admin/admincal', 'refresh');
        }
        /* $this->load->library('form_validation');
          $this->form_validation->set_rules('image','Image','required');
          if($this->form_validation->run()==FALSE)
          {
          $this->load->view('admin/evencal/update');

          }
          else
          {
          if($this->news_model->updateImg())
          {
          redirect('admin/admincal', 'refresh');
          }
          }
         */
    }

    //Cal events addition
    function telugu() {
        $this->load->view('admin/telugu');
    }

    function addtelugu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('newspapers', 'Newspapers Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/telugu');
        } else {
            if ($this->news_model->addTelugu()) {
                redirect('admin/telugu', 'refresh');
            }
        }
    }

    function updatetelugu() {
        $data['edittelugu'] = $this->news_model->getTelugu();
        $this->load->view('admin/editTelugu', $data);
    }

    function managetelugu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('newspapers', 'newspapers', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/editTelugu');
        } else {
            $this->news_model->updateTelugu();
            redirect('admin/updatetelugu', 'refresh');
        }
    }

    /* New functions for events */

    function nata_sambaralu() {
        $total = $this->nata_sambaralu_model->message_count();
        $per_pg = 1;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/nata_sambaralu/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['nsambaralu'] = $this->nata_sambaralu_model->getnata_sambaralu($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/nata-sambaralu/index', $data);
    }

    function add_nata_sambaralu() {
        $this->load->view('admin/nata-sambaralu/add_form');
    }

    function insertnata_sambaralu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ns_title', 'nata sambaralu title', 'required');
        $this->form_validation->set_rules('ns_desc', 'nata sambaralu description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/nata-sambaralu/add_form');
        } else {
            if ($this->nata_sambaralu_model->insert_nata_sambaralu()) {
                redirect('admin/nata_sambaralu', 'refresh');
            }
        }
    }

    function edit_nata_sambaralu($id) {
        $data['nsambaralu_data'] = $this->nata_sambaralu_model->edit_nata_sambaralu($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/nata-sambaralu/edit_form', $data);
    }

    function updatenata_sambaralu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ns_title', 'nata sambaralu title', 'required');
        $this->form_validation->set_rules('ns_desc', 'nata sambaralu description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/nata-sambaralu/edit_form');
        } else {
            if ($this->nata_sambaralu_model->updatenata_sambaralu()) {
                redirect('admin/nata_sambaralu', 'refresh');
            }
        }
    }

    function delete_nata_sambaralu($id) {
        $data['query'] = $this->nata_sambaralu_model->delete_nata_sambaralu($id);
        if ($data['query'] == 0) {
            redirect('admin/nata_sambaralu', 'refresh');
        }
    }

    function fund_raising() {
        $total = $this->fund_raising_model->message_count();
        $per_pg = 1;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/fund_raising/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['fund'] = $this->fund_raising_model->getfund_raising($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/fund-raising/index', $data);
    }

    function add_fund_raising() {
        $this->load->view('admin/fund-raising/add_form');
    }

    function insertfund_raising() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fr_title', 'fund raising title', 'required');
        $this->form_validation->set_rules('fr_desc', 'fund raising description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/fund-raising/add_form');
        } else {
            if ($this->fund_raising_model->insert_fund_raising()) {
                redirect('admin/fund_raising', 'refresh');
            }
        }
    }

    function edit_fund_raising($id) {
        $data['fund_data'] = $this->fund_raising_model->edit_fund_raising($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/fund-raising/edit_form', $data);
    }

    function updatefund_raising() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fr_title', 'fund raising title', 'required');
        $this->form_validation->set_rules('fr_desc', 'fund raising description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/fund-raising/edit_form');
        } else {
            if ($this->fund_raising_model->updatefund_raising()) {
                redirect('admin/fund_raising', 'refresh');
            }
        }
    }

    function delete_fund_raising($id) {
        $data['query'] = $this->fund_raising_model->delete_fund_raising($id);
        if ($data['query'] == 0) {
            redirect('admin/fund_raising', 'refresh');
        }
    }

    function nata_seva_days() {
        $total = $this->nata_seva_model->message_count();
        $per_pg = 1;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/admin/nata_seva_days/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['nata_seva'] = $this->nata_seva_model->getnata_sevadays($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/nata-sevadays/index', $data);
    }

    function add_nata_seva_days() {
        $this->load->view('admin/nata-sevadays/add_form');
    }

    function insertnata_seva_days() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nseva_title', 'nata seva days title', 'required');
        $this->form_validation->set_rules('nseva_desc', 'nata seva days description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/nata-sevadays/add_form');
        } else {
            if ($this->nata_seva_model->insert_nata_sevadays()) {
                redirect('admin/nata_seva_days', 'refresh');
            }
        }
    }

    function edit_nata_seva_days($id) {
        $data['nata_seva_data'] = $this->nata_seva_model->edit_nata_sevadays($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/nata-sevadays/edit_form', $data);
    }

    function updatenata_seva_days() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nseva_title', 'nata seva days title', 'required');
        $this->form_validation->set_rules('nseva_desc', 'nata seva days description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/nata-sevadays/edit_form');
        } else {
            if ($this->nata_seva_model->updatenata_sevadays()) {
                redirect('admin/nata_seva_days', 'refresh');
            }
        }
    }

    function delete_nata_seva_days($id) {
        $data['query'] = $this->nata_seva_model->delete_nata_sevadays($id);
        if ($data['query'] == 0) {
            redirect('admin/nata_seva_days', 'refresh');
        }
    }

}
