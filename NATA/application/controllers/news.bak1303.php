<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class news extends CI_Controller {
	function __construct()
 {
   parent::__construct();
   $this->load->model('news_model');
   $this->load->library('pagination');
 }
  function index()
 {
 	$data['view_news']=$this->news_model->get_topstories();
	$data['top_one_news']=$this->news_model->get_top_one_news();
	$data['tv_cover']=$this->news_model->get_news_tvcover();
	$data['latest_videos']=$this->news_model->get_side_latest_videos();
	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/news',$data);
	$this->load->view('footer',$data);
 }
 function view($id)
 {
 	$data['news_info']=$this->news_model->newsinfo($id);
	$data['tv_cover']=$this->news_model->get_news_tvcover();
	$data['latest_videos']=$this->news_model->get_side_latest_videos();
	$data['view_news']=$this->news_model->get_topstories();
 	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/news_1',$data);
	$this->load->view('footer',$data);
 }
function newsletter() {
        $total = $this->news_model->nl_count();
        $per_pg = 5;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/news/newsletter/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
        $data['pagination'] = $this->pagination->create_links();

        $data['paged_nl'] = $this->news_model->get_front_newsletters($per_pg, $offset);
        $data['tv'] = $this->news_model->get_tvcoverage();
        //$data['banner']=$this->news_model->getBanners();
        $this->load->view('index',$data);
 	$this->load->view('news/newsletter',$data);
	$this->load->view('footer',$data);
    }
    function tvcoverage() {
        $total = $this->news_model->tv_count();
        $per_pg = 4;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/news/tvcoverage/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
        $data['pagination'] = $this->pagination->create_links();

        $data['paged_tv'] = $this->news_model->get_front_tvcoverage($per_pg, $offset);
        $data['tv'] = $this->news_model->get_tvcoverage();
        $this->load->view('index',$data);
 	$this->load->view('news/tvcoverage',$data);
	$this->load->view('footer',$data);
    }
    function tvcoverage_readmore($id)
 {  
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
 	$data['readmore']=$this->news_model->tv_readmore($id);
	$data['tv_cover']=$this->news_model->get_news_tvcover();
	//$data['latest_videos']=$this->news_model->get_news_latest_videos();
	$data['view_news']=$this->news_model->get_topstories();
 	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/tv_readmore',$data);
	$this->load->view('footer',$data);
 }
 function printcoverage() {
        $total = $this->news_model->print_count();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . '/index.php/news/printcoverage/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
        $data['pagination'] = $this->pagination->create_links();

        $data['paged_print'] = $this->news_model->get_front_printcoverage($per_pg, $offset);
        $data['tv'] = $this->news_model->get_tvcoverage();
        $this->load->view('index',$data);
 	$this->load->view('news/printcoverage',$data);
	$this->load->view('footer',$data);
    }
      function printcoverage_readmore($id)
 {  
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
 	$data['readmore']=$this->news_model->print_readmore($id);
	$data['tv_cover']=$this->news_model->get_news_tvcover();
	//$data['latest_videos']=$this->news_model->get_news_latest_videos();
	$data['view_news']=$this->news_model->get_topstories();
 	//$data['related_news']=$this->news_model->relatednews();
        $data['tv'] = $this->news_model->get_tvcoverage();
	$this->load->view('index',$data);
 	$this->load->view('news/print_readmore',$data);
	$this->load->view('footer',$data);
 }
 function newsletter_readmore($id)
 {  
        $data['latest_videos']=$this->news_model->get_side_latest_videos();
 	$data['readmore']=$this->news_model->nl_readmore($id);
	$data['tv_cover']=$this->news_model->get_news_tvcover();
	//$data['latest_videos']=$this->news_model->get_news_latest_videos();
	$data['view_news']=$this->news_model->get_topstories();
 	//$data['related_news']=$this->news_model->relatednews();
        $data['tv'] = $this->news_model->get_tvcoverage();
	$this->load->view('index',$data);
 	$this->load->view('news/nl_readmore',$data);
	$this->load->view('footer',$data);
 }
 function south()
 {
	
 	$data['south_news']=$this->news_model->get_region('south');
 	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/south_news',$data);
	$this->load->view('footer',$data);
 }
 function north()
 {
	
 	$data['north_news']=$this->news_model->get_region('north');
 	//$data['related_news']=$this->news_model->relatednews();
        $this->load->view('index',$data);
 	$this->load->view('news/north_news',$data);
	$this->load->view('footer',$data);
 }
}