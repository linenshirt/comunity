<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginProcessing extends CI_Controller {

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
			// $this->load->library('session');
    }
	public function index()
	{

		//$this->session->set_userdata('login_id', 'some_value');
		//$data['some_name']
        $login_id = $this->session->userdata('login_id');
        
        if($login_id == FALSE){
            $login_indicator = '서비스 이용을 위해서는 로그인이 필요합니다.';
        }
        else {
            $login_indicator = $login_id.'님이 로그인 중입니다.';
        }
        
        $data['login_indicator'] =  $login_indicator;
        		$this->load->view('templates/header');
				$this->load->view('loginform',$data);
		$this->load->view('templates/footer');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */