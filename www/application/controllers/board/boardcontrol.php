<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BoardControl extends CI_Controller {


	public function index()
	{
	$this->board_list();
	}


	public function board_list()
	{
		$this->load->model('BoardDB');
		$board_list = $this->BoardDB->get_board_list();
		
		$data['board_list'] = $board_list;
		
		$this->load->view('templates/header');
		$this->load->view('community_board' , $data);
		$this->load->view('templates/footer');

	}
	public function get_reply($idx)
	{
		$this->load->model('BoardDB');
		$reply = $this->BoardDB->get_reply($idx);
		
		die(json_decode($reply));

	}
	
	public function recommend()
	{
		$this->load->model('BoardDB');
        $subject = $this->input->post('idx');
        $content = $this->input->post('recommend');
        $tag = $this->input->post('nonrecommend');
		

	}
	
	
	public function board_detail($idx)
	{
		$this->load->model('BoardDB');
		$board = $this->BoardDB->get_board($idx);
		
		$data['board'] = $board;
		
		$this->load->view('templates/header');
		$this->load->view('community_board_detail' , $data);
		$this->load->view('templates/footer');

	}
	
	
	public function write()
	{
		
		if(isset($_POST['action']) && $_POST['action'] == 'write'){
            $this->writeprocessing();
            exit;
        }
        
        
		$this->load->view('templates/header');
		$this->load->view('write_board');
		$this->load->view('templates/footer');
	}
	
    private function writeprocessing(){
	    
        $this->load->model('BoardDB');
        $subject = $this->input->post('title');
        $content = $this->input->post('contents');
        $tag = $this->input->post('tags');
        $category = $this->input->post('category');
        
        $login_id = $this->session->userdata('login_id');
        $name = $this->session->userdata('name');
        
        if(!isset($login_id) && !isset($name))
               die("location.href='/member/';");

        $row = $this->BoardDB->board_write($subject, $content, $tag , $login_id, $name , $category );
		
		if($row)
		    echo "1";
        
    }
    
	public function modify($idx)
	{
		$this->load->model('BoardDB');
		$board = $this->BoardDB->get_board($idx);
		
		$data['board'] = $board;
		$this->load->view('templates/header');
		$this->load->view('write_board',$data);
		$this->load->view('templates/footer');
	}





}
