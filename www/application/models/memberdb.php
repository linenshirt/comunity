<?php
class MemberDB extends CI_Model {

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
    function get_memberdata($id,$pw){
	    $pw = $this->sql_password($pw); 
	    
        $query = $this->db->query("SELECT `loginId`, `name` FROM `memberdb` WHERE `loginId`=? AND `loginPw` = ?",array($id,$pw));
        $row = $query->row_array();
        return $row;
    }
    
    function memberjoin($name,$id,$pw){
        $query = $this->db->query("SELECT `loginId`, `name` FROM `memberdb` WHERE `loginId` =?",array($id));
        
        $row = $query->row_array();
        if(isset($row['name'])){
            return "alert('이미 사용중인 아이디입니다. 다른 아이디를 사용해주세요.');$('#id').val('').focus();";
        }
        else{
            //계정 생성 및 계좌생성
            $pw = $this->sql_password($pw);       
            
            $query1 = $this->db->query("INSERT INTO `memberdb` SET  `loginId` =?, `name`=?, `loginPw`=?  ",array($id,$name,$pw));

            return "1";
        }
    }
    
}