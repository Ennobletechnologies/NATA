<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->model('news_model');
}
public function index()
{
$data['banner']=$this->news_model->getBanners();
//$data['homedata']=$this->Home_model->getPage();
$this->load->view('banner',$data);
}
}