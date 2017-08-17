<?php

class gallery extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('projects_model');
        $this->load->library('pagination');
    }

    function index() {
        $data['title'] = 'Nata picture gallery| Photos of North American Telugu association programs, board meetings, fund raising and workshops';
        $data['keywords'] = 'Nata picture gallery, nata board meeting photos, workshop photos of North American Telugu association';
        $data['description'] = '';
        //make 178*136 for gallery
        //$data['album']=$this->news_model->getAlbum();
        //$this->load->view('gallery/album',$data);
        //$data['gallery'] = $this->news_model->getAlbum();
        $total = $this->news_model->message_count2();
        $per_pg = 8;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'gallery/index/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['gallery'] = $this->news_model->getAlbum($per_pg, $offset);
        $data['alb_id'] = $this->news_model->getAlbumID();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/index', $data);
        $this->load->view('footer', $data);
        //$data['albums_img']= $this->album_model->get_images();
        //$this->load->view('album_listing', $data);
    }

    function videos() {
        $data['title'] = 'Nata video gallery| Video gallery of nata board meetings and events etc.';
        $data['keywords'] = 'Nata video gallery, videos of nata board meetings and events';
        $data['description'] = '';
        //$data['videos'] = $this->news_model->get_videos();
        $total = $this->news_model->message_count1();
        $per_pg = 2;
        $offset = $this->uri->segment(3);
        $config['base_url'] = base_url() . 'gallery/videos/';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['videos'] = $this->news_model->getvideos($per_pg, $offset);
        $data['video'] = $this->news_model->get_latest_videos();
        $data['side_videos'] = $this->news_model->get_side_videos();
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        //data['related_videos']=$this->news_model->get_related_videos();
        //print_r($data['related_videos']);exit;
        $this->load->view('index', $data);
        $this->load->view('gallery/videos', $data);
        $this->load->view('footer', $data);
    }

    function flyers() {
        $data['title'] = 'Nata Flyers';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/flyers/index', $data);
        $this->load->view('footer', $data);
    }

    function flyer_view($i) {
        //echo $i;
        $data['i'] = $i;
        $data['title'] = 'Nata Flyers View';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/flyers/flyer_view', $data);
        $this->load->view('footer', $data);
    }

    function view($id) {
        $data['title'] = 'Nata video gallery| Video gallery of nata board meetings and events etc.';
        $data['keywords'] = 'Nata video gallery, videos of nata board meetings and events';
        $data['description'] = '';
        $data['side_videos'] = $this->news_model->get_side_videos();
        $data['fullvideo'] = $this->news_model->fullvideo($id);
        $data['tv'] = $this->news_model->get_tvcoverage();
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/videos_single', $data);
        $this->load->view('footer', $data);
    }

    function view_gal($id) {
        $data['title'] = 'Nata Picture Gallery Overview ';
        $data['keywords'] = '';
        $data['description'] = '';
        $data['view_gal'] = $this->news_model->fullgal($id);
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/view_gal', $data);
        $this->load->view('footer', $data);
    }

    function view_gal_trail($id) {
        $data['title'] = 'Nata picture gallery| Photos of North American Telugu association programs, board meetings, fund raising and workshops';
        $data['keywords'] = 'Nata picture gallery, nata board meeting photos, workshop photos of North American Telugu association';
        $data['description'] = '';
        $data['view_gal'] = $this->news_model->fullgal($id);
        $data['projects'] = $this->projects_model->get_projects();
        $data['view_news1'] = $this->news_model->get_topstories_limit();
        $this->load->view('index', $data);
        $this->load->view('gallery/gal', $data);
        $this->load->view('footer', $data);
    }

}
