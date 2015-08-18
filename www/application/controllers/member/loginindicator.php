<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginIndicator extends CI_Controller {
    
    public function getbottommessage(){
   
        $login_id = $this->session->userdata('login_id');
        $name = $this->session->userdata('name');

		// $this->session->sess_destroy();
        $login_indicator = false;

		if(isset($login_id))
			$login_indicator = true;
	

        
        return $login_indicator;
    }
}
