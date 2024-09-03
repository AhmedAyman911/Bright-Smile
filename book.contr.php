<?php
require_once("db.php");
class bookcontr extends booking
{
    private $fname;
    private $lname;
    private $dr;
    private $day;
    private $hour;
    private $db;

    public function __construct($fname,$lname,$dr,$day,$hour)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->dr = $dr;
        $this->day = $day;
        $this->hour = $hour;
        $this->db = new db();
        $this->conn=$this->db->connect(); 
    }
    public function booknow(){
        if($this->emptyinput() == false)
        {
            header("location: ../book.html?error=emptyinput");
            exit();
        }
        else{
            return true;
        }
    }
    private function emptyinput(){
        if(empty($this->fname) || empty($this->lname) || empty($this->hour) )
        {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}