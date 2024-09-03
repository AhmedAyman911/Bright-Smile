<?php
require_once("db.php");
class loginContr extends login{

    private $uname;
    public $password;
    private $db;

    public function __construct($uname, $password){
        $this->uname = $uname;
        $this->password = $password;
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }

    public function loginUser(){
        if($this->emptyinput() == false)
        {
            header("location: ../login.php?error=emptyinput");
            exit();
        }else{
            return true;
        }
    }
    private function emptyinput(){
        if(empty($this->uname) || empty($this->password))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}