<?php
class email extends CI_Controller {
function __construct()
{
parent::__construct();
$this->load->helper(array('form', 'url'));
}
function index()
{
	if($this->input->post('email'))
	{
	$this->load->library('email');
    $this->email->from('nag@gmail.com');
    $this->email->to('nagenderinfogen@gmail.com');
    $this->email->subject('test');
    $this->email->set_mailtype('html');
    //$msg = $this->load->view('email', $datas, TRUE); 
    $msg = $this->load->view('email', TRUE);  // create base html file and echo title, content and footer there
    $this->email->message($msg);
    $this->email->send();
	//echo $this->email->print_debugger();
	}
	else
	{
	echo "mail not sent";
	}
}
}
?>
