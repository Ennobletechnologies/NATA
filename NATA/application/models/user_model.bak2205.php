<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	function login($email,$password)
    {
		$this->db->where("email",$email);
        $this->db->where("password",$password);
            
        $query=$this->db->get("user");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'user_id' => $rows->id,
                                'user_name' => $rows->username,
		                'user_email' => $rows->email,
				'user_level' => $rows->user_level,
				'user_region' => $rows->region,
                                'logged_in' => TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }
	function check_reg()
	{
	$user_id=$this->session->userdata('user_id');
	$query=$this->db->get_where('user',array('id' => $user_id));
	return $query->result_array();
	}
	function checkLogin()
	{
		if($this->session->userdata("user_id")!='' && $this->session->userdata("user_name")!='')
		{
			return true;
		}
	}
	function editUsers($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('user');
		return $query->result_array();
	}
	function updateUsers()
	{
		$id=$this->input->post('user_id');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['email']=$this->input->post('email');
		$data['dated']=date('Y-m-d H:i:s');
		if($this->db->update('user',$data,array('id'=>$id)))
		{
		return true;
	    }
	}
        public function add_session_user()
    {
		$user_level = (empty($_POST['user_level'])) ? '0' : $_POST['user_level'];
		$user_sess=array(
			's_username'=>$this->input->post('user_name'),
			's_email'=>$this->input->post('email_address'),
			's_password'=>$this->input->post('password'),
			's_pw_decode'=>$this->input->post('password'),
			's_member_name'=>$this->input->post('user_name'),
			's_name_of_spouse'=>$this->input->post('name_of_spouse'),
			's_children1'=>$this->input->post('children1'),
			's_age1'=>$this->input->post('age1'),
			's_children2'=>$this->input->post('children2'),
			's_age2'=>$this->input->post('age2'),
			's_address'=>$this->input->post('address'),
			's_aptno'=>$this->input->post('aptno'),
			's_city'=>$this->input->post('city'),
			's_state'=>$this->input->post('state'),
			's_zip'=>$this->input->post('zip'),
            's_dated'=>date('d/m/Y'),
			's_homephone'=>$this->input->post('homephone'),
			's_cellphone'=>$this->input->post('cellphone'),
			's_fax'=>$this->input->post('fax'),
			's_solicited_by'=>$this->input->post('solicited_by'),
			's_member_cat'=>$this->input->post('member_cat'),
			's_region'=>$this->input->post('region'),
			's_user_level'=>$user_level,
			's_memship_amt'=>$this->input->post('membership_amount'),
			's_donation'=>$this->input->post('donation_towards_nata'),
			's_total_amt'=>$this->input->post('total_amount_enclosed'),
                        'txtfirstname'=>$this->input->post('user_name'),
                        'txtlname'=>$this->input->post('last_name'),
                        'txtAddress1'=>$this->input->post('address'),
                        'txtAddress2'=>$this->input->post('aptno'),
                        'txtCity'=>$this->input->post('city'),
                        'txtSolicitedBy'=>$this->input->post('solicited_by'),
                        'txtZip'=>$this->input->post('zip'),
                        'intState'=>$this->input->post('state'),
			);
                $this->session->set_userdata($user_sess);
                return 1;
		//$this->db->insert('user',$data);
	}
	public function add_user()
	{
	$data=array(
			'username'=>$this->session->userdata('s_username'),
			'email'=>$this->session->userdata('s_email'),
			'password'=>$this->session->userdata('s_password'),
			'pw_decode'=>$this->session->userdata('s_pw_decode'),
			'member_name'=>$this->session->userdata('s_member_name'),
			'name_of_spouse'=>$this->session->userdata('s_name_of_spouse'),
            'dated'=>date('d-m-Y'),
			'children1'=>$this->session->userdata('s_children1'),
			'age1'=>$this->session->userdata('s_age1'),
			'children2'=>$this->session->userdata('s_children2'),
			'age2'=>$this->session->userdata('s_age2'),
			'address'=>$this->session->userdata('s_address'),
			'aptno'=>$this->session->userdata('s_aptno'),
			'city'=>$this->session->userdata('s_city'),
			'state'=>$this->session->userdata('s_state'),
			'zip'=>$this->session->userdata('s_zip'),
			'homephone'=>$this->session->userdata('s_homephone'),
			'cellphone'=>$this->session->userdata('s_cellphone'),
			'fax'=>$this->session->userdata('s_fax'),
			'solicited_by'=>$this->session->userdata('s_solicited_by'),
			'member_cat'=>$this->session->userdata('s_member_cat'),
			'region'=>$this->session->userdata('s_region'),
			'user_level'=>$this->session->userdata('s_user_level'),
			'memship_amt'=>$this->session->userdata('s_memship_amt'),
			'donation'=>$this->session->userdata('s_donation'),
			'total_amt'=>$this->session->userdata('s_total_amt'),
			);
		$this->db->insert('user',$data);
	}
	function users()
	{
	$this->db->order_by('id','desc');
	$query=$this->db->get_where('user',array('user_level' => 2));
	return $query->result_array();
	}
	function normal_users()
	{
	$this->db->order_by('id','desc');
	$query=$this->db->get_where('user',array('user_level' => 0));
	return $query->result_array();
	}
	function updateMember()
	{
		$id=$this->input->post('user_id');
		$data['username']=$this->input->post('username');
		$data['password']=md5($this->input->post('password'));
		$data['email']=$this->input->post('email');
		$data['dated']=date('Y-m-d H:i:s');
		$data['pw_decode']=$this->input->post('password');
		$data['member_name']=$this->input->post('user_name');
			$data['name_of_spouse']=$this->input->post('name_of_spouse');
			$data['children1']=$this->input->post('children1');
			$data['age1']=$this->input->post('age1');
			$data['children2']=$this->input->post('children2');
			$data['age2']=$this->input->post('age2');
			$data['address']=$this->input->post('address');
			$data['aptno']=$this->input->post('aptno');
			$data['city']=$this->input->post('city');
			$data['state']=$this->input->post('state');
			$data['zip']=$this->input->post('zip');
			$data['homephone']=$this->input->post('homephone');
			$data['cellphone']=$this->input->post('cellphone');
			$data['fax']=$this->input->post('fax');
			$data['solicited_by']=$this->input->post('solicited_by');
			$data['member_cat']=$this->input->post('member_cat');
			$data['region']=$this->input->post('region');
			$data['memship_amt']=$this->input->post('memship_amt');
			$data['donation']=$this->input->post('donation');
			$data['total_amt']=$this->input->post('total_amt');
		
		if($this->db->update('user',$data,array('id'=>$id)))
		{
		return true;
	    }
	}
	function editMember($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('user');
		return $query->result_array();
	}
	function profile($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('user');
		return $query->result_array();
	}
}
?>