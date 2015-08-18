<?php
class BoardDB extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function sql_password($str){
	    $query = $this->db->query("select PASSWORD(?) As 'str'",array($str));
	    $row = $query->row_array();
	    return $row['str'];
    }
    function get_board_list($start = "0",$end = "10"){

	    
        $query = $this->db->query("SELECT * FROM `board_content` WHERE 1 LIMIT $start , $end");
        $result = $query->result_array();
        return $result;
    }
    function get_reply($idx){

	    
        $query = $this->db->query("SELECT * FROM `board_content` WHERE `parent` = ? ",array($idx));
        $result = $query->result_array();
        
      
        return $result;
    }
    function get_board($idx){

	    
        $query = $this->db->query("SELECT * FROM `board_content` WHERE `idx` = ? ",array($idx));
        $result = $query->row_array();
        return $result;
    }
    
    
    function board_write($subject,$contents,$tags , $login_id , $name , $category){
		
		$is_noticed = 0;
		
		if($category == '1')
			$is_noticed = '1';
			
		$query = $this->db->query("INSERT INTO `board_content` SET  `subject` =?, `content`=?, `tag`=?, `login_Id` =? , `name`=? , `category`=? ,`is_noticed`=? ",array($subject,$contents,$tags,$login_id,$name, $category,$is_noticed ));
		
		return $query;
    }
    
    function reply_write($parent, $comment_reply, $login_id , $name){
		
		$query = $this->db->query("INSERT INTO `board_content` SET  `parent` =?, `comment_reply`=?, `login_Id` =? , `name`=?  ",array($parent,$comment_reply,$login_id,$name));
		
		return $query;
    }
    
}

