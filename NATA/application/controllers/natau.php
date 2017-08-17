<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Natau extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('events_model');
        $this->load->model('projects_model');
        $this->load->model('about_model');
        $this->load->model('news_model');
        $this->load->model('upload_model');
        $this->load->model('services_model');
        //code for event calender lib and model
        $this->load->model('evencal_model', 'evencal');
        $this->load->library('calendar', $this->_setting());
        $this->load->helper('text');
        $this->load->helper('html');
        $this->load->helper('email');
        //code for event calender lib and model ends	
    }

    public function index($year = null, $month = null, $day = null) { /*     * script for calender data passing starts including index parameters
      $year,$month,$day(these only for calender events logic part only) */
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
        $data['title'] = 'North American Telugu Association-Home page | NATA| nataus.org';
        $data['keywords'] = 'Nata, nataus, Telugu association in America, Telugu events in America, free health camps in America, free services in America';
        $data['description'] = 'North America Telugu Association(NATA)is in New Jersey 08540,It is the largest organization in North America and it is founded in the year 2013.NATA is a big association for all Telugu peoples who are living in North America.';
        $data['view_news'] = $this->news_model->get_topstories_limit();
        //$data['view_events']=$this->events_model->get_topstories_limit();
        $data['view_news_four'] = $this->news_model->get_topstories_limit_four();
        //$data['view_events_four']=$this->events_model->get_topstories_limit_four();
        $data['south_news'] = $this->news_model->get_region('south');
        $data['about_data'] = $this->about_model->home();
        $data['banner'] = $this->news_model->getBanners();
        $data['show_images'] = $this->upload_model->get_images();
        $data['view_services'] = $this->services_model->all_services();
        $data['msg'] = $this->news_model->get_message();
        $data['calEvents'] = $this->news_model->get_calEvents();
        $data['sponsers'] = $this->news_model->getSponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['tv'] = $this->news_model->get_onetvcoverage();
        $data['slider_tv'] = $this->news_model->get_tvcoverage();
        $this->load->view('home_index', $data);
        //$this->load->view('menu_home',$data);
        //$this->load->view('images',$data);
        $this->load->view('content', $data);
        //$this->load->view('services/services',$data);
        //code for event calender index page
        $this->load->view('home_footer', $data);

        //$this->load->view('evencal/index', $data);
        //code for event calender index page ends
    }

    public function about() {
        if ($this->input->post('email')) {
            $email = $this->input->post('email');
            $msg = $this->input->post('message');
            //$name=$this->input->post('name');
            $this->load->library('email');
            $this->email->from($email);
            $this->email->to('info@nataus.org');
            $this->email->subject('Nata user contact');
            $this->email->set_mailtype('html');
            //$msg = $this->load->view('email', $datas, TRUE); 
            //$msg = "test mail body";  // create base html file and echo title, content and footer there
            $this->email->message($msg);
            $this->email->send();
            //echo $this->email->print_debugger();
        }
        if ($this->input->post('email')) {
            //mail for user
            $email = $this->input->post('email');
            $msg = "Thank you for contacting NATA, we will contact you ASAP.";
            //$name=$this->input->post('name');
            $this->load->library('email');
            $this->email->from('admin@nataus.org');
            $this->email->to($email);
            $this->email->subject('Thank you for contacting');
            $this->email->set_mailtype('html');
            //$msg = $this->load->view('email', $datas, TRUE); 
            //$msg = "test mail body";  // create base html file and echo title, content and footer there
            $this->email->message($msg);
            $this->email->send();
            //echo $this->email->print_debugger();
        }
        $data['title'] = 'About North America Telugu Association| NATA is non-profit cultural organization serving the Telugu community in the USA and Canada.';
        $data['keywords'] = 'About nata, about North America Telugu association, free health camps in Andhra Pradesh by nata, free services in Andhra Pradesh by nata';
        $data['description'] = '';
        $data['projects'] = $this->projects_model->get_projects();
        $data['about_data'] = $this->about_model->aboutDisplay();
        $this->load->view('index', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
    }

    function south() {

        $data['south_news'] = $this->news_model->get_region('south');
        //$data['related_news']=$this->news_model->relatednews();
        $this->load->view('menu');
        $this->load->view('news/south_news', $data);
        $this->load->view('footer', $data);
    }

    function north() {

        $data['north_news'] = $this->news_model->get_region('north');
        //$data['related_news']=$this->news_model->relatednews();
        $this->load->view('menu');
        $this->load->view('news/north_news', $data);
        $this->load->view('footer', $data);
    }

    //settings for calender for evencal
    function _setting() {
        return array(
            'start_day' => 'monday',
            'show_next_prev' => true,
            'next_prev_url' => site_url('natau/index'),
            'month_type' => 'long',
            'day_type' => 'short',
            'template' => '{table_open}<table class="date">{/table_open}
								   {heading_row_start}&nbsp;{/heading_row_start}
								   {heading_previous_cell}<caption><a href="{previous_url}" class="prev_date fa fa-chevron-left" title="Previous Month"></a><span class="current-months">{/heading_previous_cell}
								   {heading_title_cell}{heading}{/heading_title_cell}
								   {heading_next_cell}</span><a href="{next_url}" class="next_date fa fa-chevron-right"  title="Next Month"></a></caption>{/heading_next_cell}
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

    //settings for calender ends
    //_month for calender for evencal
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

    //_month for calender ends for evencal
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

    // popup for adding event for evencal
    function add_event() {
        $data = array(
            'day' => $this->input->post('day'),
            'mon' => $this->input->post('mon'),
            'month' => $this->_month($this->input->post('mon')),
            'year' => $this->input->post('year'),
        );
        $this->load->view('evencal/add_event', $data);
    }

    // do adding event for selected date for evencal
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

    // delete event for evencal
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

    // same as index() function for evencal
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
        $this->load->view('evencal/index', $data);
    }

    function popup() {
        $day = $this->input->post('day');
        $mon = $this->input->post('mon');
        if (strlen($day) == '1') {
            $day = "0" . $day;
        }
        if (strlen($mon) == '1') {
            $mon = "0" . $mon;
        }
        $year = $this->input->post('year');
        $event_date = $year . "-" . $mon . "-" . $day;
        $data = array(
            'day' => $day,
            'mon' => $mon,
            'month' => $this->_month($this->input->post('mon')),
            'year' => $this->input->post('year'),
            'event_date' => $event_date,
            'evencal_det' => $this->evencal->getPopup($event_date),
        );
        $this->load->view('showpop', $data);
    }

    //about read more 
    function about_view($id) {
        $data['about_view'] = $this->about_model->pres_msg($id);
        $data['projects'] = $this->projects_model->get_projects();
        //$data['related_news']=$this->news_model->relatednews();
        $this->load->view('index', $data);
        $this->load->view('about/pres_msg', $data);
        $this->load->view('footer', $data);
    }

    function president_message($id = 2) {
        $data['title'] = 'Nata president’s message| North American Telugu Association presidents';
        $data['keywords'] = 'President of nata, 3rd nata president, president of Telugu association in USA, America presidents for Telugu association, new nata president, presidents list of nata';
        $data['description'] = '';
        $data['about_view'] = $this->about_model->pres_msg($id);
        $data['projects'] = $this->projects_model->get_projects();
        //$data['related_news']=$this->news_model->relatednews();
        $this->load->view('index', $data);
        $this->load->view('about/pres_msg', $data);
        $this->load->view('footer', $data);
    }

    function policies() {
        $data['title'] = 'Nata policies by laws| Constitution| rules and regulations';
        $data['keywords'] = 'Nata policies by laws, nata rules and regulations, nata constitution, more documents for nata';
        $data['description'] = '';
        $data['policies'] = $this->news_model->get_policies();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/policies', $data);
        $this->load->view('footer', $data);
    }

    //
    function calEvents() {
        $data['calEvents'] = $this->news_model->get_calEvents();
    }

    function sponsers() {
        $data['title'] = 'Nata sponsors | North American Telugu association grand sponsors details';
        $data['keywords'] = 'Nata sponsors, grand sponsors of nata, Telugu organization sponsors';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('sponsers', $data);
        $this->load->view('footer', $data);
    }

    /* 13/03/2015 */

    public function community_services() {
        $data['title'] = 'Nata community services| free community services by NRI’s | How to contact Telugu community services in America';
        $data['keywords'] = 'Nata community services, Telugu community services in America, contact Telugu community in America';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('about/community', $data);
        $this->load->view('footer', $data);
    }

    public function form_process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'mobile', 'required|numeric|min_length[10]');
        $this->form_validation->set_rules('message', 'message', 'trim|required|min_length[10]');
        if ($this->form_validation->run() == FALSE) {
            $data['videos'] = $this->news_model->get_side_latest_videos();
            $data['tv'] = $this->news_model->get_tvcoverage();
            $data['sponsers'] = $this->news_model->getsponsers();
            $data['projects'] = $this->projects_model->get_projects();
            $data['title'] = 'Nata Community Services';
            $this->load->view('index', $data);
            $this->load->view('about/community', $data);
            $this->load->view('footer', $data);
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('fname');
            $mobile = $this->input->post('mobile');
            $message = $this->input->post('message');
            //$to ='shankarinfogen@gmail.com';
            $this->load->library('email');
            $this->email->from($email, $name);
            $list = array('info@nataus.org');
            $this->email->to($list);
            //$this->email->cc($list);
            //$this->email->bcc('them@their-example.com'); 
            $this->email->subject('Nata community service  ' . $name);
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
                $data['videos'] = $this->news_model->get_side_latest_videos();
                $data['tv'] = $this->news_model->get_tvcoverage();
                $data['sponsers'] = $this->news_model->getsponsers();
                $data['projects'] = $this->projects_model->get_projects();
                $this->load->view('index', $data);
                $this->load->view('about/form_process', $data);
                $this->load->view('footer', $data);
            } else {
                echo 'fail to send';
            }
        }
    }

    public function conventions() {
        $data['title'] = 'Nata Dallas convention planning meeting| nata convention | USA Telugu association convention';
        $data['keywords'] = 'Convention of nata, annual convention on nata, nata Dallas convention planning meeting';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('about/convention', $data);
        $this->load->view('footer', $data);
    }

    public function board_meetings() {
        $data['title'] = 'Nata board meetings| North American Telugu association board meeting held on...';
        $data['keywords'] = 'Board meetings on nata, recent board meetings on nata, upcoming board meetings on nata, Telugu committee meeting in USA';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/board_meeting', $data);
        $this->load->view('footer', $data);
    }

    public function organization() {
        $data['title'] = 'Nata organization | board of directors| advisory council| executive committee';
        $data['keywords'] = 'Nata organization, Telugu organization, nata board of directors, nata advisory council, nata regional vice presidents, nata regional co-ordinates, telugu association standing committee';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/organization', $data);
        $this->load->view('footer', $data);
    }

    public function board_of_directors() {
        $data['title'] = 'Nata Board Of Directors ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/board_of_directors', $data);
        $this->load->view('footer', $data);
    }

    public function advisory_council() {
        $data['title'] = 'Nata Advisory Council';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/advisory_council', $data);
        $this->load->view('footer', $data);
    }

    public function executive_committee() {
        $data['title'] = 'Nata Executive Committe ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/executive_committee', $data);
        $this->load->view('footer', $data);
    }

    public function standing_committee() {
        $data['title'] = 'Nata Standing Committee ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/standing_committee', $data);
        $this->load->view('footer', $data);
    }			 public function adhoc_committee() {        $data['title'] = 'Nata Standing Committee ';        $data['keywords'] = '';        $data['description'] = '';        $data['videos'] = $this->news_model->get_side_latest_videos();        $data['tv'] = $this->news_model->get_tvcoverage();        $data['sponsers'] = $this->news_model->getsponsers();        $data['projects'] = $this->projects_model->get_projects();        $data['view_news'] = $this->news_model->get_topstories_limit();        $this->load->view('index', $data);        $this->load->view('about/adhoc_committee', $data);        $this->load->view('footer', $data);    }

    public function honorary_executive_committee_members() {
        $data['title'] = 'Nata Honorary Executive Committee Members ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/honorary_executive_committee_members', $data);
        $this->load->view('footer', $data);
    }

    public function regional_vice_presidents() {
        $data['title'] = 'Nata Regional Vice Presidents ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/regional_vice_presidents', $data);
        $this->load->view('footer', $data);
    }

    public function regional_co_ordinates() {
        $data['title'] = 'Nata Regional Co Ordinates ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/regional_co_ordinates', $data);
        $this->load->view('footer', $data);
    }

    public function east_coordinators() {
        $data['title'] = 'Nata East Coordinators ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/east_coordinators', $data);
        $this->load->view('footer', $data);
    }

    public function west_coordinators() {
        $data['title'] = 'Nata West Coordinators ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/west_coordinators', $data);
        $this->load->view('footer', $data);
    }

    public function central_coordinators() {
        $data['title'] = 'Nata Central Coordinators ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/central_coordinators', $data);
        $this->load->view('footer', $data);
    }

    public function north_coordinators() {
        $data['title'] = 'Nata North Coordinators ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/north_coordinators', $data);
        $this->load->view('footer', $data);
    }

    public function south_coordinators() {
        $data['title'] = 'Nata South Coordinators ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['sponsers'] = $this->news_model->getsponsers();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('about/south_coordinators', $data);
        $this->load->view('footer', $data);
    }

}
