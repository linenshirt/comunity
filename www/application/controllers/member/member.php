<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'loginindicator.php';
class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }
	public function index()
	{
        if(isset($_POST['action']) && $_POST['action'] == 'login'){
            $this->loginprocessing();
            exit;
        }
        if($this->is_logined())
        	{
	        	     header("Location: /board/");
					 exit();
        	}
        
		$this->loginform();
	}
    
    public function loginform(){
	    
/*
        $loginindicator_obj = new LoginIndicator();
        $data['login_indicator'] =  $loginindicator_obj->getbottommescghsage();
*/
        
        $this->load->view('templates/header');
//         $this->load->view('loginform',$data);
        $this->load->view('loginform');
        $this->load->view('templates/footer');
        
    }
    
    private function is_logined(){
   
        $login_id = $this->session->userdata('login_id');
        $name = $this->session->userdata('name');

		// $this->session->sess_destroy();
        $login_indicator = false;

		if($login_id != false)
			$login_indicator = true;
	

        
        return $login_indicator;
    }
    
    
    private function loginprocessing(){
        $this->load->model('MemberDB');
        $row = $this->MemberDB->get_memberdata($this->input->post('m_id'),$this->input->post('m_pw'));
        
//         die($row['name']);
        
        if(isset($row['name'])){
            $logged_user_data = array(
                   'name'  => $row['name'],
                   'login_id'     => $row['loginId'],
                   'logged_in' => TRUE
               );

                $this->session->set_userdata($logged_user_data);
            echo $row['name'];    
        }
        else{
            echo '1';   //1 for false
        }
        
    }
    
    private function joinprocessing(){
        $this->load->model('MemberDB');
        $joinresult = $this->MemberDB->memberjoin($this->input->post('m_name'), $this->input->post('m_id'),$this->input->post('m_pw'));
        
        echo $joinresult;

        
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('/board', 'refresh');
    }
    
    public function join(){
        
        if(isset($_POST['action']) && $_POST['action'] == 'join'){
           $this->joinprocessing();
            exit;
        }
        
        $loginindicator_obj = new LoginIndicator();
        $data['login_indicator'] =  $loginindicator_obj->getbottommessage();

        $this->load->view('templates/header');
        $this->load->view('memberjoinform',$data);
        $this->load->view('templates/footer');
       
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */