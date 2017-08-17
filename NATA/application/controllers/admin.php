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
        $this->load->model('nata_mata_model');
        $this->load->model('nata_sambaralu_model');
        $this->load->model('fund_raising_model');
        $this->load->model('nata_seva_model');
        $this->load->model('membership_model');
        $this->load->model('telugu_model');
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
        $this->load->model('evencal_model', 'evencal');
        $this->load->library('calendar', $this->_setting());
        $this->loggeed_in = $this->user_model->checkLogin();
        $this->load->library('pagination');
        $this->load->helper('text');
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
         if ($user_level == '5') { //echo $user_level;
            $this->load->view('admin/home');
            //$this->load->view('footer');
        }
         if ($user_level == '6') { //echo $user_level;
            $this->load->view('admin/home');
            //$this->load->view('footer');
        }
    }
function getreport() {
        $this->load->view('admin/report/index');
    }	function getdonreport() {        $this->load->view('admin/report/index1');    }
    function showreport() {
        $data['myreport'] = $this->user_model->get_report();
       $this->load->view('admin/report/showreport', $data);
    }	function showdonreport() {        $data['myreport'] = $this->user_model->get_report();       $this->load->view('admin/report/donationreport', $data);    }	
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
    public function deleteUser($id) {
        $this->user_model->delete_user($id);
        //echo $id.'deleted';exit;
        redirect(base_url('admin/members'), 'refresh');
    }	    public function deleteMemberAccess($id) {                  // delete membership access        $this->user_model->delete_user($id);        //echo $id.'deleted';exit;        redirect(base_url('admin/members_access'), 'refresh');    }		function memberaccess()                                //  membership access	{			            $this->load->view('admin/member-home.php');			    }	function createmember()                                // create membership access	{			            $this->load->view('login/member-access.php');			    }	
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
    }		function members_access() {                                       // member access        $data['admin_users'] = $this->user_model->members_access();        $this->load->view('admin/members_access', $data);    }

    function editMembers($id) {
        $data['editUsers'] = $this->user_model->editMember($id);
        $this->load->view('admin/editMembers', $data);
    }		function editMembersAccess($id) {        $data['editUsers'] = $this->user_model->editMember($id);        $this->load->view('admin/editMembersAccess', $data);    }		function updateStatus($id){	                      // Update Status of the Member	 $data['updateStatus']=$this->user_model->updateStatus($id);	 $this->members();	}	function updateMembers() {

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
    }		 function updateMembersAccess() {                 // update Membership access        $this->load->library('form_validation');        $this->form_validation->set_rules('username', 'username', 'required');        $this->form_validation->set_rules('password', 'password', 'required');        $this->form_validation->set_rules('email', 'email', 'required');        if ($this->form_validation->run() == FALSE) {            $this->load->view('admin/editMembers');        } else {            if ($this->user_model->updateMember()) {                redirect('admin/members_access', 'refresh');            }        }    }

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
        if($user_level == 5){
            $data['view_topstory'] = $this->news_model->get_news_admin();
            $this->load->view('admin/allnews', $data); 
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
		//print_r($data['edit_topstory']);exit;
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
        $config['base_url'] = base_url() . 'admin/gallery/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['query'] = $this->news_model->getAdminBanners($per_pg, $offset);

        //$data['banner']=$this->news_model->getgetBanners();
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
            //echo count($name_array) . " files uploaded";
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
        $data['title'] = 'Nata Services ';
        $total = $this->services_model->message_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/services/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['services'] = $this->services_model->getservices($per_pg, $offset);
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
        $month = (int) $month;
        switch ($month) {
            case 1 : $month = 'January';
                Break;
            case 2 : $month = 'February';
                Break;
            case 3 : $month = 'March';
                Break;
            case 4 : $month = 'April';
                Break;
            case 5 : $month = 'May';
                Break;
            case 6 : $month = 'June';
                Break;
            case 7 : $month = 'July';
                Break;
            case 8 : $month = 'August';
                Break;
            case 9 : $month = 'September';
                Break;
            case 10 : $month = 'October';
                Break;
            case 11 : $month = 'November';
                Break;
            case 12 : $month = 'December';
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
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/projects/';
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
        $total = $this->telugu_model->message_count();
        $per_pg = 10;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/telugu/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['telugu'] = $this->telugu_model->gettelugu($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/telugu/index', $data);
    }

    function add_telugu() {
        $this->load->view('admin/telugu/add_form');
    }

    function inserttelugu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('telugu_title', 'telugu title', 'required');
        $this->form_validation->set_rules('telugu_url', 'telugu url', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/telugu/add_form');
        } else {
            if ($this->telugu_model->insert_telugu()) {
                redirect('admin/telugu', 'refresh');
            }
        }
    }

    function edit_telugu($id) {
        $data['telugu_data'] = $this->telugu_model->edit_telugu($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/telugu/edit_form', $data);
    }

    function updatetelugu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('telugu_title', 'telugu title', 'required');
        $this->form_validation->set_rules('telugu_url', 'telugu url', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/telugu/edit_form');
        } else {
            if ($this->telugu_model->updatetelugu()) {
                redirect('admin/telugu', 'refresh');
            }
        }
    }

    function delete_telugu($id) {
        $data['query'] = $this->telugu_model->delete_telugu($id);
        if ($data['query'] == 0) {
            redirect('admin/telugu', 'refresh');
        }
    }

    /*     * 11-03-2015 add */

    function insertnl() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/news_letter/add');
        } else {
            if ($this->news_model->insert_nl()) {
                redirect('admin/newsletter', 'refresh');
            }
        }
    }

    function inserttv() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/tvcoverage/add');
        } else {
            if ($this->news_model->insert_tv()) {
                redirect('admin/tvcoverage', 'refresh');
            }
        }
    }

    function insertprint() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('news_title', 'news_title', 'required');
        $this->form_validation->set_rules('news_description', 'news_description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/printcoverage/add');
        } else {
            if ($this->news_model->insert_print()) {
                redirect('admin/printcoverage', 'refresh');
            }
        }
    }

    /* New functions for events */

    function nata_sambaralu() {
        $total = $this->nata_sambaralu_model->message_count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/nata_sambaralu/';
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
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/fund_raising/';
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
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/nata_seva_days/';
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

    function nata_mata() {
        $total = $this->nata_mata_model->message_count();
        $per_pg = 1;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/nata_mata/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['nata_mata'] = $this->nata_mata_model->getnata_mata($per_pg, $offset);
        //$data['projects'] = $this->projects_model->get_projects();
        $this->load->view('admin/natamata/index', $data);
    }

    function add_nata_mata() {
        $this->load->view('admin/natamata/add_form');
    }

    function insertnata_mata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nm_title', 'Nata mata title', 'required');
        //$this->form_validation->set_rules('project_desc', 'project description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/natamata/add_form');
        } else {
            if ($this->nata_mata_model->insert_nata_mata()) {
                redirect('admin/nata_mata', 'refresh');
            }
        }
    }

    function edit_nata_mata($id) {
        $data['nata_mata_data'] = $this->nata_mata_model->edit_nata_mata($id);
        //print_r($data['projects_data']);exit();
        $this->load->view('admin/natamata/edit_form', $data);
    }

    function updatenata_mata() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nm_title', 'Nata mata title', 'required');
        //$this->form_validation->set_rules('project_desc', 'project description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/natamata/edit_form');
        } else {
            if ($this->nata_mata_model->updatenata_mata()) {
                redirect('admin/nata_mata', 'refresh');
            }
        }
    }

    function delete_nata_mata($id) {
        $data['query'] = $this->nata_mata_model->delete_nata_mata($id);
        if ($data['query'] == 0) {
            redirect('admin/nata_mata', 'refresh');
        }
    }

    /* 11032015 after merge */

    function editAboutMembership() {
        $data['edit_aboutmemship'] = $this->membership_model->edit_abtmemship();
        $this->load->view('admin/membership/edit', $data);
    }

    function updateAboutMembership() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/membership/edit');
        } else {
            if ($this->membership_model->updateAMS()) {
                redirect('admin/index', 'refresh');
            }
        }
    }

    //member benifits
    function editMemberBenfits() {
        $data['membenfits'] = $this->membership_model->edit_memben();
        $this->load->view('admin/membersbenfits/edit', $data);
    }

    function updateMemberBenfits() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/membersbenfits/edit');
        } else {
            if ($this->membership_model->updateMemBen()) {
                redirect('admin/index', 'refresh');
            }
        }
    }

    //change of address
    function editChangeOfAdd() {
        $data['caddress'] = $this->membership_model->edit_cadd();
        $this->load->view('admin/changeofaddress/edit', $data);
    }

    function updateChangeOfAdd() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/changeofaddress/edit');
        } else {
            if ($this->membership_model->updateCAdd()) {
                redirect('admin/index', 'refresh');
            }
        }
    }

    /* Nata sports start here */

    function nata_sports() {
        $data['title'] = 'Nata Sports | Admin ';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function sports_committees() {
        $data['title'] = 'Nata Sports Committees ';
        $total = $this->cm_model->message_count();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/sports_committees';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['committees'] = $this->cm_model->getcommittees($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/committees/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_committee() {
        $data['title'] = 'Nata Sports Add Committe';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/committees/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->cm_model->add_committees();
            redirect('admin/sports_committees', 'refresh');
        }
    }

    function edit_committee($id) {
        $data['committees_data'] = $this->cm_model->edit_committees($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/committees/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_committee() {
        $this->cm_model->update_committee();
        redirect('admin/sports_committees', 'refresh');
    }

    function delete_committee($id) {
        $data['query'] = $this->cm_model->delete_committee($id);
        if ($data['query'] == 0) {
             redirect('admin/sports_committees', 'refresh');
        }
    }

    function committee_members() {
        $data['title'] = 'Nata Sports';
        $total = $this->cm_members_model->message_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/committee_members';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['committee_members'] = $this->cm_members_model->get_committee_members($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/commitee_members/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_committee_member() {
        $data['title'] = 'Nata Sports';
        $data['all_committees'] = $this->cm_members_model->get_committees();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/commitee_members/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function insert_committee_member() {
           $this->cm_members_model->insert_committee_member();
                redirect('admin/committee_members', 'refresh');
    }

    function edit_committee_member($id) {
        $data['title'] = 'Nata Sports';
        $data['committee_members_data'] = $this->cm_members_model->edit_committee_member($id);
        $data['all_committees'] = $this->cm_members_model->get_committees();
        //print_r($data['committee_members_data']);exit;
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/commitee_members/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_committee_member() {
           $this->cm_members_model->update_committee_member();
                redirect('admin/committee_members', 'refresh');
    }

    function delete_committee_member($id) {
        $data['query'] = $this->cm_members_model->delete_committee_member($id);
        if ($data['query'] == 0) {
            redirect('admin/committee_members', 'refresh');
        }
    }

     function sports_schedule() {
        $data['title'] = 'Nata Sports Committees ';
        $total = $this->schedule->message_count();
        $per_pg = 8;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/sports_schedule';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['sports_schedule'] = $this->schedule->get_sports_schedule($per_pg, $offset);
        //print_r($data['sports_schedule']);exit;
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_schedule/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_sports_schedule() {
        $data['title'] = 'Nata Sports Add Committe';
        $data['teams'] = $this->schedule->get_teams();
        $data['teams1'] = $this->schedule->get_teams1();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_schedule/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->schedule->add_sports_schedule();
            redirect('admin/sports_schedule', 'refresh');
        }
    }

    function edit_sports_schedule($id) {
        $data['sports_schedule_data'] = $this->schedule->edit_sports_schedule($id);
        $data['teams'] = $this->schedule->get_teams();
        $data['teams1'] = $this->schedule->get_teams1();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_schedule/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_sports_schedule() {
        $this->schedule->update_sports_schedule();
        redirect('admin/sports_schedule', 'refresh');
    }

    function delete_sports_schedule($id) {
        $data['query'] = $this->schedule->delete_sports_schedule($id);
        if ($data['query'] == 0) {
             redirect('admin/sports_schedule', 'refresh');
        }
    }
    
    function teams() {
        $data['title'] = 'Nata Sports Committees ';
        $total = $this->teams->message_count();
        $per_pg = 8;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/teams';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['teams'] = $this->teams->getteams($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/teams/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_team() {
        $data['title'] = 'Nata Sports Add Committe';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/teams/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->teams->add_team();
            redirect('admin/teams', 'refresh');
        }
    }

    function edit_team($id) {
        $data['teams_data'] = $this->teams->edit_team($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/teams/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_team() {
        $this->teams->update_team();
        redirect('admin/teams', 'refresh');
    }

    function delete_team($id) {
        $data['query'] = $this->teams->delete_team($id);
        if ($data['query'] == 0) {
             redirect('admin/teams', 'refresh');
        }
    }
    
    function team_members() {
        $data['title'] = 'Nata Sports Committees ';
        $total = $this->team_members->message_count();
        $per_pg = 8;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/team_members';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['team_members'] = $this->team_members->get_team_members($per_pg, $offset);
        //print_r($data['team_members']);exit;
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/team_members/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_team_member() {
        $data['title'] = 'Nata Sports Add Committe';
        $data['teams'] = $this->team_members->get_teams();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/team_members/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->team_members->add_team_member();
            redirect('admin/team_members', 'refresh');
        }
    }

    function edit_team_member($id) {
        $data['team_members_data'] = $this->team_members->edit_team_member($id);
        $data['teams'] = $this->team_members->get_teams();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/team_members/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_team_member() {
        $this->team_members->update_team_member();
        redirect('admin/team_members', 'refresh');
    }

    function delete_team_member($id) {
        $data['query'] = $this->team_members->delete_team_member($id);
        if ($data['query'] == 0) {
             redirect('admin/team_members', 'refresh');
        }
    }

    function grounds(){
        $data['title'] = 'Nata Sports grounds';
        $total = $this->grounds->message_count();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/grounds';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['grounds'] = $this->grounds->get_grounds($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/grounds/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_grounds() {
        $data['title'] = 'Nata Sports grounds';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/grounds/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->grounds->add_grounds();
            redirect('admin/grounds', 'refresh');
        }
    }

    function edit_grounds($id) {
        $data['title'] = 'Nata Sports grounds';
        $data['grounds_data'] = $this->grounds->edit_grounds($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/grounds/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_grounds() {
        $this->grounds->update_grounds();
        redirect('admin/grounds', 'refresh');
    }

    function delete_grounds($id) {
        $data['query'] = $this->grounds->delete_grounds($id);
        if ($data['query'] == 0) {
             redirect('admin/grounds', 'refresh');
        }
    }
    
    function sports_results() {
        $data['title'] = 'Nata Sports Committees ';
        $total = $this->results->message_count();
        $per_pg = 8;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/sports_results';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['results'] = $this->results->get_sports_results($per_pg, $offset);
        //print_r($data['team_members']);exit;
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/results/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_sports_results() {
        $data['title'] = 'Nata Sports Add Committe';
        $data['teams'] = $this->results->get_teams();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/results/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->results->add_sports_results();
            redirect('admin/sports_results', 'refresh');
        }
    }

    function edit_sports_results($id) {
        $data['results_data'] = $this->results->edit_sports_results($id);
        $data['teams'] = $this->results->get_teams();
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/results/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_sports_results(){
        $this->results->update_sports_results();
        redirect('admin/sports_results', 'refresh');
    }

    function delete_sports_results($id){
        $data['query'] = $this->results->delete_sports_results($id);
        if ($data['query'] == 0) {
             redirect('admin/sports_results', 'refresh');
        }
    }

    function sports_gallery() {
        $data['title'] = 'Nata Sports';
        $total = $this->gallery->message_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/sports_gallery';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['gallery'] = $this->gallery->get_sports_gallery($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_gallery/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_sports_gallery() {
        $data['title'] = 'Nata Sports';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_gallery/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function insert_sports_gallery() {
           $this->gallery->insert_sports_gallery();
                redirect('admin/sports_gallery', 'refresh');
    }

    function edit_sports_gallery($id) {
        $data['title'] = 'Nata Sports';
        $data['gallery_data'] = $this->gallery->edit_sports_gallery($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/sports_gallery/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_sports_gallery() {
           $this->gallery->update_sports_gallery();
                redirect('admin/sports_gallery', 'refresh');
    }

    function delete_sports_gallery($id) {
        $data['query'] = $this->gallery->delete_sports_gallery($id);
        if ($data['query'] == 0) {
            redirect('admin/sports_gallery', 'refresh');
        }
    }
     
    function about_league(){
        $data['title'] = 'Nata Sports about league';
        $total = $this->league->message_count();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/about_league';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['league'] = $this->league->get_about_league($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/league/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_about_league() {
        $data['title'] = 'Nata Sports about league';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/league/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->league->add_about_league();
            redirect('admin/about_league', 'refresh');
        }
    }

    function edit_about_league($id) {
        $data['title'] = 'Nata Sports about league';
        $data['league_data'] = $this->league->edit_about_league($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/league/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_about_league() {
        $this->league->update_about_league();
        redirect('admin/about_league', 'refresh');
    }

    function delete_about_league($id) {
        $data['query'] = $this->league->delete_about_league($id);
        if ($data['query'] == 0) {
             redirect('admin/about_league', 'refresh');
        }
    }
    
    function text_scrolling(){
        $data['title'] = 'Nata Sports Text Scrolling';
        $total = $this->scrolling->message_count();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'admin/text_scrolling';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['scrolling'] = $this->scrolling->get_text_scrolling($per_pg, $offset);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/scrolling/index', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function add_text_scrolling() {
        $data['title'] = 'Nata Sports Text Scrolling';
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/scrolling/add_form', $data);
        $this->load->view('admin/sports/footer', $data);
        if ($this->input->post('submit')) {
            $this->scrolling->add_text_scrolling();
            redirect('admin/text_scrolling', 'refresh');
        }
    }

    function edit_text_scrolling($id) {
        $data['title'] = 'Nata Sports Text Scrolling';
        $data['scrolling_data'] = $this->scrolling->edit_text_scrolling($id);
        $this->load->view('admin/sports/header', $data);
        $this->load->view('admin/sports/scrolling/edit_form', $data);
        $this->load->view('admin/sports/footer', $data);
    }

    function update_text_scrolling() {
        $this->scrolling->update_text_scrolling();
        redirect('admin/text_scrolling', 'refresh');
    }

    function delete_text_scrolling($id) {
        $data['query'] = $this->scrolling->delete_text_scrolling($id);
        if ($data['query'] == 0) {
             redirect('admin/text_scrolling', 'refresh');
        }
    }
    
    /* Nata sports end here */
}
