<?php
class gallery extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('news_model');
	}

	function index()
	{
		$this->load->view('gallery/upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'public/gallery';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name']     = true;
		$config['max_size']	= '5000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('gallery/upload_form', $error);
		}
		else
		{
			$this->gallery_model->insert_images($this->upload->data());
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('gallery/upload_success', $data);
		}
	}
	}
?>