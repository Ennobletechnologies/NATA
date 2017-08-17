<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class news extends CI_Controller {
	function __construct()
 {
   parent::__construct();
   $this->load->model('news_model');

 }
  function index()
 {
 	$data['view_news']=$this->news_model->get_topstories();
 	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/news',$data);
	$this->load->view('footer',$data);
 }
 function view($id,$title)
 {
 	$data['news_info']=$this->news_model->newsinfo($id,$title);
 	//$data['related_news']=$this->news_model->relatednews();
	$this->load->view('index',$data);
 	$this->load->view('news/news_1',$data);
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