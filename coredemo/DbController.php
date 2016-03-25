<?php
class Dbcontroller{
    
    private $user = 'root';
    private $pwd = '';
    private $host = 'localhost';
    private $db = 'test';
    
    function __construct(){
        
        $con = $this->connect_db();
        if(!empty($con)){
            $this->select_db($con);
        }
    }
    
    function connect_db(){
        $con = @mysql_connect($this->host,$this->user,$this->pwd);
        return $con;
    }
    
    function select_db($con){
        $con = mysql_select_db($this->db,$con);
        return $con;
    }
    
    function login($query){
        $res = mysql_query($query);
        $count =  mysql_num_rows($res);
        if($count == 1){
            $count = '1';
        }
        else {
            $count = '0';
        }
        return $count;
    }
    
    function runQuery($qury){
        $result = mysql_query($qury);
        while($row = mysql_fetch_assoc($result)){
            $data[] = $row;
        }
        if(!empty($data)){
            return $data;
        }
    }
    
    function insert($q){
        $res = @mysql_query($q);
    }
}


?>