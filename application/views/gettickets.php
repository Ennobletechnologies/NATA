<?php $seg_value = $this->session->userdata("seg_value"); ?>
<?php if($seg_value==21) { 
$this->load->view('event/tik_21');
}else{
$this->load->view('event/tik');
} ?>
