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
		$data['password']=md5($this->input->post('password'));
		$data['email']=$this->input->post('email');
		$data['dated']=date('Y-m-d H:i:s');
		if($this->db->update('user',$data,array('id'=>$id)))
		{
		return true;
	    }
	}
        public function add_session_user()
	{
		$user_level = (empty($_POST['user_level'])) ? '3' : $_POST['user_level'];
		$user_sess=array(
			's_username'=>$this->input->post('user_name'),
			's_email'=>$this->input->post('email_address'),
			's_password'=>md5($this->input->post('password')),
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
			);
                $this->session->set_userdata($user_sess);
                return 1;
		//$this->db->insert('user',$data);
	}
	public function add_user()
	{
		$user_level = (empty($_POST['user_level'])) ? '3' : $_POST['user_level'];
		$data=array(
			'username'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password')),
			'pw_decode'=>$this->input->post('password'),
			'member_name'=>$this->input->post('user_name'),
			'name_of_spouse'=>$this->input->post('name_of_spouse'),
			'children1'=>$this->input->post('children1'),
			'age1'=>$this->input->post('age1'),
			'children2'=>$this->input->post('children2'),
			'age2'=>$this->input->post('age2'),
			'address'=>$this->input->post('address'),
			'aptno'=>$this->input->post('aptno'),
			'city'=>$this->input->post('city'),
			'state'=>$this->input->post('state'),
			'zip'=>$this->input->post('zip'),
			'homephone'=>$this->input->post('homephone'),
			'cellphone'=>$this->input->post('cellphone'),
			'fax'=>$this->input->post('fax'),
			'solicited_by'=>$this->input->post('solicited_by'),
			'member_cat'=>$this->input->post('member_cat'),
			'region'=>$this->input->post('region'),
			'user_level'=>$user_level,
			'memship_amt'=>$this->input->post('membership_amount'),
			'donation'=>$this->input->post('donation_towards_nata'),
			'total_amt'=>$this->input->post('total_amount_enclosed'),
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
	$query=$this->db->get_where('user',array('user_level' => 3));
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