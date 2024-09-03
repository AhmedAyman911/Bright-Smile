<?php
require_once("db.php");
class SignupContr extends signup{

    private $uname;
    public $password;
    private $confirmpassword;
    private $age;
    private $mail;
    private $phoneNum;
    private $db;

    public function __construct($uname, $password,$confirmpassword,$age, $mail,$phoneNum){
        $this->uname = $uname;
        $this->password = $password;
        $this->confirmpassword = $confirmpassword;
        $this->age = $age;
        $this->mail = $mail;
        $this->phoneNum = $phoneNum;
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }

    public function signupUser(){
        if($this->emptyinput() == false)
        {
            //echo"empty input!";
            header("location:../regest.php?error=emptyinput");
            exit();
        }

        if($this->passmatch() == false)
        {
            //echo"password does not match !";
            header("location:../regest.php?error=password");
            exit();
        }

    }
    public function checkuser($uname, $mail) {

    
        $sql = mysqli_query($this->conn, "select * from users where name='" . $uname . "' OR mail='" . $mail . "'");
        $row = mysqli_fetch_array($sql);
    
        if (is_array($row)) {
            $resultcheck = false;
            header("location:../regest.php?error=stmtfaild");
        }else{
            $resultcheck = true;
        }
        return $resultcheck;
    }
    private function emptyinput(){
        if(empty($this->uname) || empty($this->password) || empty($this->confirmpassword)||empty($this->age) || empty($this->mail) || empty($this->phoneNum))
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function passmatch(){
        if($this->password != $this->confirmpassword)
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

}