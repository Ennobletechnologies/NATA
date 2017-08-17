<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class news extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->library('pagination');
        $this->load->model('projects_model');
    }

    function index() {
        $data['title'] = 'North America Telugu association (NATA) media | latest news on NATA ';
        $data['keywords'] = 'Nata media, latest news on nata, North American Telugu association’s latest news';
        $data['description'] = '';
        $data['view_news'] = $this->news_model->get_topstories();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $data['top_one_news'] = $this->news_model->get_top_one_news();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $this->load->view('index', $data);
        $this->load->view('news/news', $data);
        $this->load->view('footer', $data);
    }

    function view($id) {
        $data['title'] = 'North America Telugu association (NATA) media | latest news on NATA ';
        $data['keywords'] = 'Nata media, latest news on nata, North American Telugu association’s latest news';
        $data['description'] = '';
        $data['news_info'] = $this->news_model->newsinfo($id);
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $data['projects'] = $this->projects_model->get_projects();
        //$data['related_news']=$this->news_model->relatednews();
        $this->load->view('index', $data);
        $this->load->view('news/news_1', $data);
        $this->load->view('footer', $data);
    }

    function newsletter() {
        $data['title'] = 'Nata Newsletters| North American Telugu association news letters';
        $data['keywords'] = 'Nata newsletters, newsletter of American Telugu association';
        $data['description'] = '';
        $total = $this->news_model->nl_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'news/newsletter/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['pagination'] = $this->pagination->create_links();
        $data['paged_nl'] = $this->news_model->get_front_newsletters($per_pg, $offset);
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/newsletter', $data);
        $this->load->view('footer', $data);
    }

    function tvcoverage() {
        $data['title'] = 'Nata TV coverage| North American Telugu Association TV Coverages';
        $data['keywords'] = 'Nata TV coverages, TV coverage of nata office opening ceremony';
        $data['description'] = '';
        $total = $this->news_model->tv_count();
        $per_pg = 6;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'news/tvcoverage/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination" class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['pagination'] = $this->pagination->create_links();

        $data['paged_tv'] = $this->news_model->get_front_tvcoverage($per_pg, $offset);
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/tvcoverage', $data);
        $this->load->view('footer', $data);
    }

    function tvcoverage_readmore($id) {
        $data['title'] = 'Nata TV coverage| North American Telugu Association TV Coverages';
        $data['keywords'] = 'Nata TV coverages, TV coverage of nata office opening ceremony';
        $data['description'] = '';
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['readmore'] = $this->news_model->tv_readmore($id);
        $data['tv_cover'] = $this->news_model->get_news_tvcover();
        //$data['latest_videos']=$this->news_model->get_news_latest_videos();
        $data['view_news'] = $this->news_model->get_topstories();
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/tv_readmore', $data);
        $this->load->view('footer', $data);
    }

    function printcoverage() {
        $data['title'] = 'Nata print coverages | Print coverage on nata free health camps and services held in India and America';
        $data['keywords'] = 'Nata print coverages, print coverage on free health camps and services in North America, free health camps in New Jersey';
        $data['description'] = '';
        $total = $this->news_model->print_count();
        $per_pg = 3;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'news/printcoverage/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['tvc'] = $this->news_model->get_tvcoverage();
        $data['pagination'] = $this->pagination->create_links();
        $data['paged_print'] = $this->news_model->get_front_printcoverage($per_pg, $offset);
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/printcoverage', $data);
        $this->load->view('footer', $data);
    }

    function printcoverage_readmore($id) {
        $data['title'] = 'Nata print coverages | Print coverage on nata free health camps and services held in India and America';
        $data['keywords'] = 'Nata print coverages, print coverage on free health camps and services in North America, free health camps in New Jersey';
        $data['description'] = '';
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['readmore'] = $this->news_model->print_readmore($id);
        $data['tv_cover'] = $this->news_model->get_news_tvcover();
        //$data['latest_videos']=$this->news_model->get_news_latest_videos();
        $data['view_news'] = $this->news_model->get_topstories();
        //$data['related_news']=$this->news_model->relatednews();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/print_readmore', $data);
        $this->load->view('footer', $data);
    }

    function newsletter_readmore($id) {
        $data['title'] = 'Nata Newsletters| North American Telugu association news letters';
        $data['keywords'] = 'Nata newsletters, newsletter of American Telugu association';
        $data['description'] = '';
        $data['latest_videos'] = $this->news_model->get_side_latest_videos();
        $data['readmore'] = $this->news_model->nl_readmore($id);
        $data['tv_cover'] = $this->news_model->get_news_tvcover();
        //$data['latest_videos']=$this->news_model->get_news_latest_videos();
        $data['view_news'] = $this->news_model->get_topstories();
        //$data['related_news']=$this->news_model->relatednews();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/nl_readmore', $data);
        $this->load->view('footer', $data);
    }

    function south() {
        $data['title'] = 'Nata South News ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['south_news'] = $this->news_model->get_region('south');
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/south_news', $data);
        $this->load->view('footer', $data);
    }

    function north() {
        $data['title'] = 'Nata North News ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['north_news'] = $this->news_model->get_region('north');
        //$data['related_news']=$this->news_model->relatednews();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('news/north_news', $data);
        $this->load->view('footer', $data);
    }

}
