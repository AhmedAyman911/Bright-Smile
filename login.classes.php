<?php

require_once("db.php");

class login 
{
    private $db;
    private $conn;
    public function __construct(){
       
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }
    public function getuser($uname,$password){
        $sql = mysqli_query($this->conn, "select * from users where name='" . $uname . "' and pass='" . $password . "'");
        $row = mysqli_fetch_array($sql);

        //Sending user data to the server to be used in the future.
        if (is_array($row)) 
        {
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["password"] = $row['password'];
            return true;
            //And More....
        } else {
            //User's password is incorrect
            //header("location:login.php?error=Email or Password is incorrect");
            return false;
        } 
    }
}
