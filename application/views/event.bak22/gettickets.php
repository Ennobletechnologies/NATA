<?php $seg = $this->session->userdata("seg_value"); ?>
<?php if($seg == 23 || $seg==24|| $seg==25) { 
$this->load->view('event/tik_21');
}else{
$this->load->view('event/tik');
} ?>
